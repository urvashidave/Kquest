
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<style>
.div_noscroll {
    width: 210px;
    height: 120px;
    overflow: hidden;
}
</style>
<script language="JavaScript">
function EDITSTOREsubmit(val) {
document.getElementById('editstore').value = val;
document.getElementById('next_page').value = "ui_editstore.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function EDITCOMPANYsubmit() {
document.getElementById('edit_company_yn').value = 1;
document.getElementById('next_page').value = "ui_company_edit.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function changeRetailer() {
	document.getElementById('new_user_backend').value = document.getElementById('new_user_retailer').value;	
} 
function EDITLOGOsubmit() {
document.getElementById('next_page').value = "logo_upload.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function UPDATEVARSsubmit() {

var var_checked_string = "";
var var_checked_counter = 0;

	for (i = 0; i < document.getElementsByName('var1').length; i++) {
		
            if(document.main_form["var1"][i].checked){
				if(var_checked_counter < 1) var_checked_string = document.getElementsByName('var1')[i].value;
				else
                var_checked_string = var_checked_string + "|" + document.getElementsByName('var1')[i].value;
				var_checked_counter = var_checked_counter +1;
            }
	}        
document.getElementById('var_list').value = var_checked_string;
document.getElementById('update_vars_yn').value = 1;

	//document.getElementById('loading_image').style.display="block";
	document.main_form.target = "_top";
	document.getElementById('next_page').value = "ui_company_edit.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 
	
}
</script>
<style>
.save_val_font { font-size:10px; color:#C03;
}
</style>
<?php
// $user_client_id is the company code of the company MFD is modifying




if (isset($_POST["user_client_id"])) {	$user_client_id = $_POST["user_client_id"];} else $user_client_id = 0;
if (isset($_POST["edit_company_yn"])) {	$edit_company_yn = $_POST["edit_company_yn"];} else $edit_company_yn = 0;

if (isset($_POST["add_new_user_yn"])) {	$add_new_user_yn = $_POST["add_new_user_yn"];} else $add_new_user_yn = 0;
if (isset($_POST["new_user_firstname"])) {	$new_user_firstname = $_POST["new_user_firstname"];} else $new_user_firstname = "";
if (isset($_POST["new_user_lastname"])) {	$new_user_lastname = $_POST["new_user_lastname"];} else $new_user_lastname = 0;
if (isset($_POST["new_user_email"])) {	$new_user_email = $_POST["new_user_email"];} else $new_user_email = 0;
if (isset($_POST["new_user_pass"])) {	$new_user_pass = $_POST["new_user_pass"];} else $new_user_pass = 0;
if (isset($_POST["user_direct_pass"])) {	$user_direct_pass = $_POST["user_direct_pass"];} else $user_direct_pass = 0;
if (isset($_POST["update_vars_yn"])) {	$update_vars_yn = $_POST["update_vars_yn"];} else $update_vars_yn = 0;

if (isset($_POST["var_list"])) {	$var_list = $_POST["var_list"];} else $var_list = "";
if($new_user_firstname == "") $add_new_user_yn = 0;
if($new_user_lastname == "") $add_new_user_yn = 0;
if($new_user_pass == "") $add_new_user_yn = 0;

$new_user_notes = "";

$users_available_test = 0;

include "db_connect.php";

if($edit_company_yn >0) {

	if (isset($_POST["new_user_client_id"])) {	$new_user_client_id = $_POST["new_user_client_id"];} else $new_user_client_id = 0;
	if (isset($_POST["new_user_client_code"])) {	$new_user_client_code = $_POST["new_user_client_code"];} else $new_user_client_code = 0;
	if (isset($_POST["new_user_user_company"])) {	$new_user_user_company = $_POST["new_user_user_company"];} else $new_user_user_company = 0;
	if (isset($_POST["new_user_reports"])) {	$new_user_reports = $_POST["new_user_reports"];} else $new_user_reports = 0;
	if (isset($_POST["new_user_backend"])) {	$new_user_backend = $_POST["new_user_backend"];} else $new_user_backend = 0;


mysqli_query($link,"UPDATE amfd_company SET client_code = '$new_user_client_code', client_name = '$new_user_user_company', client_reports = $new_user_reports, client_backend = '$new_user_backend' WHERE client_id = $new_user_client_id ");


$edit_company_yn = 0;
}
if ($update_vars_yn >0) {

	mysqli_query($link,"UPDATE amfd_company SET client_modules = '$var_list' WHERE client_id = $user_client_id ");
	// set to zero
}

$new_client_modules = "";

$query = "SELECT * FROM amfd_company WHERE client_id = $user_client_id  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $new_user_client_id = $row['client_id'];
					  $new_user_client_code = $row['client_code'];	
					  $new_user_user_company = $row['client_name'];	
					  $new_user_reports = $row['client_reports'];
					  $new_user_backend = $row['client_backend'];
					  $new_client_modules = $row['client_modules'];	
					  $new_client_use_logo = $row['client_use_logo'];	
					  $new_client_logo = $row['client_logo'];			  
				}				
			mysqli_free_result($result);
		}



if($add_new_user_yn >0) {

$user_direct_pass = md5($user_direct_pass);

// check if user existings
$users_available_test = 0;	
$query = "SELECT * FROM amfd_users WHERE user_password = '$new_user_pass'  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $users_available_test = 1;	
					  $new_user_notes = "That user already exists on the system.  Please verify the User's API security code";			  
				}				
			mysqli_free_result($result);
		}
}

if($add_new_user_yn >0 && $users_available_test <1) {

// get company details
$query = "SELECT * FROM amfd_company WHERE client_id = $user_client_id  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $new_user_client_id = $row['client_id'];
					  $new_user_client_code = $row['client_code'];	
					  $new_user_user_company = $row['client_name'];
					  $new_user_reports = $row['client_reports'];
					  $new_user_backend = $row['client_backend'];
					  $new_client_modules = $row['client_modules'];			  
				}				
			mysqli_free_result($result);
		}
		
mysqli_query($link,"INSERT INTO amfd_users (client_id, client_code, user_company, user_firstname, user_lastname, user_email, user_password, user_direct_pass) VALUES ($new_user_client_id,  '$new_user_client_code', '$new_user_user_company', '$new_user_firstname', '$new_user_lastname', '$new_user_email', '$new_user_pass', '$user_direct_pass' ) ");
}

$query = "SELECT * FROM amfd_users WHERE client_id = $user_client_id and user_id > 1";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_user_id[] = $row['user_id'];	
					  $client_user_company = $row['user_company'];	
					  $users_available_test = 1;				  
				}				
			mysqli_free_result($result);
		}	
if($users_available_test > 0){
	for ($i=0; $i<sizeof($client_user_id); $i++) {
		$client_details[$i]['user_name'] = "";
		$client_details[$i]['user_email'] = "";
		$query = "SELECT * FROM amfd_users WHERE user_id = $client_user_id[$i]";
			if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						  $user_details[$i]['user_name'] = $row['user_firstname'] . " " . $row['user_lastname'];
						  $user_details[$i]['user_email'] = $row['user_email'];
						  $user_details[$i]['user_password'] = $row['user_password'];
					}	
			}
			
	}mysqli_free_result($result);
}

	$query = "SELECT * FROM amfd_stores WHERE client_id = $new_user_client_id";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_details['store_uid'][] = $row['store_uid'];
					  $client_details['store_number'][] = $row['store_number'];
					  $client_details['store_name'][] = $row['store_name'];
					  $client_details['store_pc'][] = $row['store_pc'];
				}	
		}	
mysqli_free_result($result);

// update vars that are checked




	$var_list_checked['demo'] = "";
	$var_list_checked['shop'] = "";
	$var_list_checked['spend'] = "";
	$var_list_checked['segment'] = "";
	$var_list_checked['auto'] = "";
	$var_list_checked['himprove'] = "";
	$var_list_checked['ethnic'] = "";

$var_list_array = explode("|", $new_client_modules);
	
if($var_list_array[0] == "") {
	$var_list_checked['demo'] = "checked = 'CHECKED'";
	$var_list_checked['shop'] = "checked = 'CHECKED'";
	$var_list_checked['spend'] = "checked = 'CHECKED'";
	$var_list_checked['segment'] = "checked = 'CHECKED'";
	$var_list_checked['auto'] = "checked = 'CHECKED'";
	$var_list_checked['himprove'] = "checked = 'CHECKED'";
	$var_list_checked['ethnic'] = "checked = 'CHECKED'";
}

	if (in_array("demo", $var_list_array)) $var_list_checked['demo'] = "checked = 'CHECKED'";
	if (in_array("shop", $var_list_array)) $var_list_checked['shop'] = "checked = 'CHECKED'";
	if (in_array("spend", $var_list_array)) $var_list_checked['spend'] = "checked = 'CHECKED'";
	if (in_array("segment", $var_list_array)) $var_list_checked['segment'] = "checked = 'CHECKED'";
	if (in_array("auto", $var_list_array)) $var_list_checked['auto'] = "checked = 'CHECKED'";
	if (in_array("himprove", $var_list_array)) $var_list_checked['himprove'] = "checked = 'CHECKED'";
	if (in_array("ethnic", $var_list_array)) $var_list_checked['ethnic'] = "checked = 'CHECKED'";
	

?>

<table width="900"  border="2" align="center" cellpadding="2" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF">
      <table width="100%" border="0" cellspacing="2" cellpadding="0">
        <tr>
          <td><span class="sblue">MFD Administration</span></td>
          <td align="right"><input name="ads2" type="button" class="sblue" id="ads2" value="Back to Admin" onclick="ADMINsubmit();" /></td>
        </tr>
      </table>
      <p><span class="sblue">
        <input name="user_client_id" type="hidden" id="user_client_id" value="<?php echo $user_client_id; ?>" />
        <input name="add_new_user_yn" type="hidden" id="add_new_user_yn" value="0"  size="25" />
        <input name="client_user_id" type="hidden" id="client_user_id" />
      </span></p>
      <p><span class="sorange24">Edit for Company: <?php echo $new_user_user_company; ?></span><br />
        <span class="sorange20"><?php echo $new_user_notes; ?></span><br />
    </p></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF"><p class="sblue">Edit Company Details</p>
      <table width="98%" border="0" cellpadding="5" cellspacing="0" class="pbody12">
        <tr>
          <td width="227" align='left' ><span class="pbody12">Client unique ID (system unique identifier - cannot be changed)</span></td>
          <td width="223" colspan="2" align='left' class="pbody12" ><span class="save_val_font"><?php echo $new_user_client_id; ?>
          <input name="new_user_client_id" type="hidden" id="new_user_client_id" value="<?php echo $new_user_client_id; ?>"  size="5" /><input name="edit_company_yn" type="hidden" id="edit_company_yn" value="0"  size="5" />
          </span></td>
        </tr>
        <tr>
          <td align='left' ><span class="pbody12">Company name</span></td>
          <td colspan="2" align='left' class="pbody12" ><span class="save_val_font"><?php echo $new_user_user_company; ?>            <br />            
            <input name="new_user_user_company" type="text" id="new_user_user_company" value="<?php echo $new_user_user_company; ?>" size="25" />
          </span></td>
        </tr>
        <tr>
          <td align='left' ><span class="pbody12">Company 2 digit client code</span></td>
          <td colspan="2" align='left' class="pbody12" ><span class="save_val_font"><?php echo $new_user_client_code; ?>            <br />            
            <input name="new_user_client_code" type="text" id="new_user_client_code" value="<?php echo $new_user_client_code; ?>" size="25" />
          </span></td>
        </tr>
        <tr>
          <td align='left' ><span class="pbody12">Maximum number of stores to analyze (0 means unlimited)</span></td>
          <td colspan="2" align='left' class="pbody12" ><span class="save_val_font"><?php echo $new_user_reports; ?>            <br />            
            <input name="new_user_reports" type="text" id="new_user_reports" value="<?php echo $new_user_reports; ?>" size="25" />
          </span></td>
        </tr>
        <tr>
          <td align='left' ><span class="pbody12">Retailer maps  - company name</span></td>
          <td colspan="2" align='left' class="pbody12" ><span class="save_val_font"><?php echo $new_user_backend; ?>                     
            <input name="new_user_backend" type="hidden" id="new_user_backend" value="<?php echo $new_user_backend; ?>" size="45" />
            <br />
<label for="Select Retailer"></label>
            <select name="new_user_retailer" id="new_user_retailer" onchange="changeRetailer();">
			<option disabled=true selected="selected">Select Retailer</option>
          	<option value="None">None</option>
            <option disabled=true> </option>
			<?php			
			$query = "SELECT DISTINCT STORE_NAME FROM retail_list ORDER BY STORE_NAME ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$temp_retail_name = $row['STORE_NAME'];
				$temp_retail_name = (strlen($temp_retail_name) > 35) ? substr($temp_retail_name,0,32).'...' : $temp_retail_name;
				echo "<option value='" . $row['STORE_NAME'] . "'>" . $temp_retail_name . "</option>";

		}}

		?>  
              
            </select><br />
          </span></td>
        </tr>
        <tr>
          <td>Logo used in reports</td>
          <td><?php if ($new_client_use_logo > 0) echo "<img src='" . $new_client_logo . "' alt='logo' />"; else echo "<img src='company_logo/resized_KQUEST.gif' alt='logo'/>"; ?></td>
          <td align="right"><input name="edit_logo" type="button" class="pbody12" id="edit_logo" value="Edit logo" onclick="EDITLOGOsubmit();" /></td>
        </tr>
        <tr>
          <td colspan="3" align="center"><input name="ads5" type="button" class="sblue" id="ads5" value="Update Company details" onclick="EDITCOMPANYsubmit();" /></td>
        </tr>
      </table>
      <p class="sblue"><br />
    </p></td>
    <td width="44%" rowspan="5" align="center" valign="top" bgcolor="#FFFFFF"><p><span class="sblue">Modules available for targeting </span></p>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="210" ><div class="div_noscroll"><img src="f_genx_w3560.jpg" width="210" height="105" alt="module image" /></div></td>
          <td class="pbodyemp"><input name='var1' type='checkbox' id='var1' value='demo' <?php echo $var_list_checked['demo']; ?> />
          Demographics</td>
        </tr>
        <tr>
          <td ><div class="div_noscroll"><img src="image3/ethnic_diversity.png" width="210" height="172" alt="module image" /></div></td>
          <td class="pbodyemp"><input type='checkbox' name='var1' id='var1' value='ethnic' <?php echo $var_list_checked['ethnic']; ?> />
          Ethnic Diversity </td>
        </tr>
        <tr>
          <td ><div class="div_noscroll"><img src="image3/customer.jpg" width="210" height="210" alt="module image" /></div></td>
          <td class="pbodyemp"><input type='checkbox' name='var1' id='var1' value='shop' <?php echo $var_list_checked['shop']; ?> />
          Shopping Preferences</td>
        </tr>
        <tr>
          <td ><div class="div_noscroll"><img src="image3/financial1.jpg" width="210" height="172" alt="module image" /></div></td>
          <td class="pbodyemp"><input type='checkbox' name='var1' id='var1' value='spend' <?php echo $var_list_checked['spend']; ?> />
          Dollars Spend</td>
        </tr>
        <tr>
          <td><div class="div_noscroll"><img src="image3/segment1.jpg" width="210" height="172" alt="module image" /></div></td>
          <td class="pbodyemp"><input type='checkbox' name='var1' id='var1' value='segment' <?php echo $var_list_checked['segment']; ?> />
          Segmentation</td>
        </tr>
        <tr>
          <td ><div class="div_noscroll"><img src="car_pic.jpg" width="210" height="172" alt="module image" /></div></td>
          <td class="pbodyemp"><input type='checkbox' name='var1' id='var1' value='auto' <?php echo $var_list_checked['auto']; ?> />
          Automotive</td>
        </tr>
        <tr>
          <td ><div class="div_noscroll"><img src="himprove.PNG" width="210" height="172" alt="module image" /></div></td>
          <td class="pbodyemp"><input type='checkbox' name='var1' id='var1' value='himprove' <?php echo $var_list_checked['himprove']; ?> />
          Home Improvement</td>
        </tr>
        
        
      </table>
      <p><span class="pbody12"><br />
        <br />
        </span>
        <input name="ads4" type="button" class="sblue" id="ads4" value="Update Modules List" onclick="UPDATEVARSsubmit();" />
        <label for="get_report_id"></label>
        <input type="hidden" name="var_list" id="var_list" />
        <input name="update_vars_yn" type="hidden" id="update_vars_yn" value="0" />
    </p></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td width="56%" align="center" valign="top" bgcolor="#FFFFFF"><span class="sblue">Add a new user</span>
      <table width="98%" border="0" cellpadding="5" cellspacing="0" class="pbody12">
      <tr>
        <td width="227" align='left' ><span class="pbody12">First name</span></td>
        <td width="223" class="sblue" align='left' ><span class="pbody12">
          <input name="new_user_firstname" type="text" id="new_user_firstname"  size="25" />
        </span></td>
      </tr>
      <tr>
        <td align='left' ><span class="pbody12">Last name</span></td>
        <td class="sblue" align='left' ><span class="pbody12">
          <input name="new_user_lastname" type="text" id="new_user_lastname"  size="25" />
        </span></td>
      </tr>
      <tr>
        <td align='left' ><span class="pbody12">Email </span></td>
        <td class="sblue" align='left' ><span class="pbody12">
          <input name="new_user_email" type="text" id="new_user_email"  size="25" />
        </span></td>
      </tr>
      <tr>
        <td align='left' ><span class="pbody12">User's API security code <br />
          (this is the MFD unique user's ID)</span></td>
        <td class="sblue" align='left' ><span class="pbody12">
          <input name="new_user_pass" type="text" id="new_user_pass"  size="25" />
        </span></td>
      </tr>
      <tr>
        <td align='left' ><span class="pbody12">User Password</span></td>
        <td class="sblue" align='left' ><span class="pbody12">
          <input name="user_direct_pass" type="text" id="user_direct_pass"  size="25" />
        </span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="ads" type="button" class="sblue" id="ads" value="Add user" onclick="ADDUSERsubmit();" /></td>
        </tr>
    </table></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF"><p><span class="sblue">Click name to edit user details</span></p>
      <table width="98%" border="1" cellpadding="3" cellspacing="0" class="pbody12">
        <tr class="sblue12">
          <td width="165" align='left' >Name </td>
          <td width="136" align='left' >Email</td>
          <td width="93" align='left' >API Security code</td>
        </tr>
        <?php
if($user_id > 0 && $user_id <4 && $users_available_test > 0) {
      for ($i=0; $i<sizeof($client_user_id); $i++) {
			echo "<tr><td align='left' ><a href='javascript: PICKUSERsubmit(" . $client_user_id[$i] . ");'>" . $user_details[$i]['user_name'] . "</a></td>";
			echo "<td align='left' >" . $user_details[$i]['user_email'] . "</td>";
			echo "<td align='left' >" . $user_details[$i]['user_password'] . "</td></tr>";
	  }
}
?>
    </table>
    <br /></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF"><p><span class="sblue"><br />
      <br />
      Stores loaded in the system (click to edit)</span>
        <input name="editstore" type="text" id="editstore"  size="5" />
    </p>
      <input name="ads3" type="button" class="sblue" id="ads3" value="Add a new store file" onclick="CSVmfdsubmit();" />
      <table width="420" border="1" cellpadding="3" cellspacing="0" class="pbody12">
        <tr class="sblue12">
          <td width="74" align='left' >Store Number </td>
          <td width="243" align='left'> Store Name</td>
          <td width="77" align='left' >Store Postal Code</td>
        </tr>
        <?php

      for ($i=0; $i<sizeof($client_details['store_uid']); $i++) {
			echo "<tr><td align='left' ><a href='javascript: EDITSTOREsubmit(" . $client_details['store_uid'][$i] . ");'>" . $client_details['store_number'][$i] . "</a></td>";
			echo "<td align='left' >" . $client_details['store_name'][$i] . "</td>";
			echo "<td align='left' >" . $client_details['store_pc'][$i] . "</td></tr>";
	  }

?>
    </table></td>
  </tr>
</table>
<script language="javascript">
document.getElementById('update_vars_yn').value = 0;
</script>