<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<?php


include "db_connect.php";

if (isset($_POST["add_company_yn"])) {	$add_company_yn = 1;} else $add_company_yn = 0;
if (isset($_POST["user_client_company"])) {	$user_client_company = $_POST["user_client_company"];} else $user_client_company = "";
if (isset($_POST["user_client_code"])) {	$user_client_code = $_POST["user_client_code"];} else $user_client_code = "";
if (isset($_POST["user_client_KML"])) {	$user_client_KML = $_POST["user_client_KML"];} else $user_client_KML = 0;

$user_client_id = 0;
$add_company_note = "";

if($user_client_company =="") $add_company_yn = 0;
if($add_company_yn >0) {

// check if company exists	
$query = "SELECT * FROM amfd_company WHERE client_name = '$user_client_company' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $user_client_id = $row['client_id'];					  
				}				
			mysqli_free_result($result);
		}


if($user_client_id >0) $add_company_note = "Company: " . $user_client_company . " (client code: " . $user_client_code . ") already exists on this system";
if($user_client_id <1) {

// add company to data base if company does not existing
mysqli_query($link,"INSERT INTO amfd_company (client_name, client_code, client_reports) VALUES ('$user_client_company',  '$user_client_code', $user_client_KML) ");
// end check if page existed
$add_company_note = "";
$add_company_note = "Company: " . $user_client_company . " (client code: " . $user_client_code . ") added";
}


$query = "SELECT * FROM amfd_company WHERE client_name = '$user_client_company' AND client_code = '$user_client_code' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $user_client_id = $row['client_id'];					  
				}				
			mysqli_free_result($result);
		}
		


$user_client_company = "";
$user_client_code = "";
} else 



?>
<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td width="50%" align="left" valign="top" bgcolor="#FFFFFF"><span class="sblue">MFD Administration </span><span class="sgrey14"><br />
      <br /><div id="error_note" class="sorange20"></div>
    </span></td>
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><input name="ads2" type="button" class="sblue" id="ads2" value="Back to Admin" onclick="ADMINsubmit();" />      <br /></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF"><p><br />
      <span class="sblue">Add a New Company </span></p>
      <p><span class="sblue">
        <?php echo $add_company_note; ?>
      </span></p>
      <table width="650" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="147" align='left' ><span class="sblue" align='left' >Company Name</span></td>
          <td width="383" align='left' ><span class="sblue" align='left' >
            <input name="user_client_company" type="text" id="user_client_company" size="50" value="<?php echo $user_client_company; ?>" />          
          </span></td>
        </tr>
        <tr>
          <td align='left' ><span class="sblue" align='left' >Client Code</span></td>
          <td align='left' ><span class="sblue" align='left' >
            <input name="user_client_code" type="text" id="user_client_code" size="50" value="<?php echo $user_client_code; ?>" />          
          </span></td>
        </tr>
        <tr>
          <td>Maximum # of stores (0 if unlimited)</td>
          <td align='left' ><span class="sblue">
            <input name="user_client_KML" type="text" id="user_client_KML" size="50" value="<?php echo $user_client_KML; ?>" />
          </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align='left' ><span class="sblue" align='left' >
            <input name="add_company_yn" type="hidden" id="add_company_yn" value="<?php echo $add_company_yn; ?>" size="50" />
          </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align='left' ><input name="ads" type="button" class="sblue" id="ads" value="Add Company" onclick="ADDCOMPANYsubmit();"/></td>
        </tr>
      </table>
      <span class="sblue" align='left' >
      <label for="client_company"></label>
      <br />
      <br />
      </span></td>
  </tr>
  <tr >
    <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
