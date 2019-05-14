<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<script language="JavaScript">
function EDITSTOREsubmit() {
document.getElementById('makechange_yn').value = 1;
document.getElementById('next_page').value = "ui_editstore.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
</script>
<?php
// $user_client_id is the company code of the company MFD is modifying




if (isset($_POST["user_client_id"])) {	$user_client_id = $_POST["user_client_id"];} else $user_client_id = 0;

if (isset($_POST["add_new_user_yn"])) {	$add_new_user_yn = $_POST["add_new_user_yn"];} else $add_new_user_yn = 0;
if (isset($_POST["new_user_firstname"])) {	$new_user_firstname = $_POST["new_user_firstname"];} else $new_user_firstname = "";
if (isset($_POST["new_user_lastname"])) {	$new_user_lastname = $_POST["new_user_lastname"];} else $new_user_lastname = 0;
if (isset($_POST["new_user_email"])) {	$new_user_email = $_POST["new_user_email"];} else $new_user_email = 0;
if (isset($_POST["new_user_pass"])) {	$new_user_pass = $_POST["new_user_pass"];} else $new_user_pass = 0;
if (isset($_POST["user_direct_pass"])) {	$user_direct_pass = $_POST["user_direct_pass"];} else $user_direct_pass = 0;
if (isset($_POST["update_vars_yn"])) {	$update_vars_yn = $_POST["update_vars_yn"];} else $update_vars_yn = 0;
if (isset($_POST["editstore"])) {	$editstore = $_POST["editstore"];} else $editstore = 0;
if (isset($_POST["makechange_yn"])) {	$makechange_yn = $_POST["makechange_yn"];} else $makechange_yn = 0;


if (isset($_POST["var_list"])) {	$var_list = $_POST["var_list"];} else $var_list = "";
if($new_user_firstname == "") $add_new_user_yn = 0;
if($new_user_lastname == "") $add_new_user_yn = 0;
if($new_user_pass == "") $add_new_user_yn = 0;

$new_user_notes = "";

$users_available_test = 0;

include "db_connect.php";

$file_update_yn = "";
if($makechange_yn > 0) {
	if (isset($_POST["store_number"])) {	$store_number = $_POST["store_number"];} else $store_number = 0;
	if (isset($_POST["store_name"])) {	$store_name = $_POST["store_name"];} else $store_name = 0;
	if (isset($_POST["store_pc"])) {	$store_pc = $_POST["store_pc"];} else $store_pc = 0;
$file_update_yn = "Store details updated";
	mysqli_query($link,"UPDATE amfd_stores SET store_number = '$store_number', store_name= '$store_name', store_pc = '$store_pc' WHERE store_uid = $editstore ");


}
	$query = "SELECT * FROM amfd_stores WHERE store_uid = $editstore";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_uid = $row['store_uid'];
					  $store_number = $row['store_number'];
					  $store_name= $row['store_name'];
					  $store_pc = $row['store_pc'];
				}	
		}	
mysqli_free_result($result);

// update vars that are checked


?>
<SCRIPT language="JavaScript">
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
      <p><br />
    </p></td>
  </tr>
  <tr >
    <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF"><p><span class="sgrey50"><?php echo $file_update_yn ; ?></span><span class="sblue"><br />
      <br />
      EDIT STORE</span> <br />
      <span class="pbody14">Currently saved as:<br />
Store number: <?php echo $store_number ; ?><br />
Store name: <?php echo $store_name ; ?><br />
Store postal code: <?php echo $store_pc ; ?></span><br /><br />

        <input name="editstore" type="hidden" id="editstore"  size="5" value="<?php echo $editstore ; ?>"/>
        <input name="makechange_yn" type="hidden" id="makechange_yn"  size="5" value="<?php echo $makechange_yn ; ?>"/>
      </p>
      <table width="80%" border="1" cellpadding="3" cellspacing="0" class="sgrey12">
        <tr class="sblue12">
          <td width="74" align='left' >Store Number </td>
          <td width="243" align='left'> Store Name</td>
          <td width="77" align='left' >Store Postal Code</td>
        </tr>
        <tr class="sblue12">
          <td align='left' bgcolor="#eaeaea" ><span class="sblue">
            <input name="store_uid" type="hidden" id="store_uid" value="<?php echo $editstore ; ?>"  size="10" />
            <input name="store_number" type="text" id="store_number"  size="12" value="<?php echo $store_number ; ?>"/>
          </span></td>
          <td align='left' bgcolor="#eaeaea"><span class="sblue">
            <input name="store_name" type="text" id="store_name"  size="35" value="<?php echo $store_name ; ?>"/>
          </span></td>
          <td align='left' bgcolor="#eaeaea" ><span class="sblue">
            <input name="store_pc" type="text" id="store_pc"  size="7" value="<?php echo $store_pc ; ?>"/>
          </span></td>
        </tr>
        <?php

      for ($i=0; $i<sizeof($client_details['store_uid']); $i++) {
			echo "<tr><td align='left' ><a href='javascript: STOREEDITsubmit(" . $client_details['store_uid'][$i] . ");'>" . $client_details['store_number'][$i] . "</a></td>";
			echo "<td align='left' >" . $client_details['store_name'][$i] . "</td>";
			echo "<td align='left' >" . $client_details['store_pc'][$i] . "</td></tr>";
	  }

?>
      </table>
    <p>&nbsp;</p>      <p>&nbsp;</p></td>
  </tr>
  <tr >
    <td width="56%" align="center" valign="top" bgcolor="#FFFFFF"><input name="ads" type="button" class="sblue" id="ads" value="Cancel - Back to Admin" onclick="ADMINsubmit();" /></td>
    <td width="44%" align="center" valign="top" bgcolor="#FFFFFF"><input name="ads3" type="button" class="sblue" id="ads3" value="Save - Edit Store" onclick="EDITSTOREsubmit();" /></td>
  </tr>
</table>
