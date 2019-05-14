<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<?php

if (isset($_POST["user_client_id"])) {	$user_client_id = $_POST["user_client_id"];} else $user_client_id = 0;
if (isset($_POST["client_user_id"])) {	$client_user_id = $_POST["client_user_id"];} else $client_user_id = 0;

if (isset($_POST["add_new_user_yn"])) {	$add_new_user_yn = $_POST["add_new_user_yn"];} else $add_new_user_yn = 0;
if (isset($_POST["new_user_firstname"])) {	$new_user_firstname = $_POST["new_user_firstname"];} else $new_user_firstname = "";
if (isset($_POST["new_user_lastname"])) {	$new_user_lastname = $_POST["new_user_lastname"];} else $new_user_lastname = 0;
if (isset($_POST["new_user_email"])) {	$new_user_email = $_POST["new_user_email"];} else $new_user_email = 0;
if (isset($_POST["new_user_pass"])) {	$new_user_pass = $_POST["new_user_pass"];} else $new_user_pass = 0;
if (isset($_POST["new_user_direct_pass"])) {	$new_user_direct_pass = $_POST["new_user_direct_pass"];} else $new_user_direct_pass = 0;
if (isset($_POST["new_user_direct_pass2"])) {	$new_user_direct_pass2 = $_POST["new_user_direct_pass2"];} else $new_user_direct_pass2 = 0;

if($new_user_firstname == "") $add_new_user_yn = 0;
if($new_user_lastname == "") $add_new_user_yn = 0;
if($new_user_pass == "") $add_new_user_yn = 0;

$new_user_notes = "";
$new_user_password_notes = "";
$users_available_test = 0;

include "db_connect.php";

if($add_new_user_yn <1) {
$query = "SELECT * FROM amfd_users WHERE user_id = $client_user_id  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $new_user_firstname = $row['user_firstname'];
					  $new_user_lastname = $row['user_lastname'];	
					  $new_user_email = $row['user_email'];	
					  $new_user_pass = $row['user_password'];	
					  $users_available_test = 1;	
					 		  
				}				
			mysqli_free_result($result);
		}
}


if($add_new_user_yn >0) {		
mysqli_query($link,"UPDATE amfd_users SET user_firstname = '$new_user_firstname', user_lastname = '$new_user_lastname', user_email = '$new_user_email', user_password = '$new_user_pass' WHERE user_id = $client_user_id ");

$new_user_notes = "User profile updated.  Continue to edit or click 'Back to Admin' button.";
}
// password update 
// check if password fields were entered
if($new_user_direct_pass == $new_user_direct_pass2 && strlen($new_user_direct_pass)>5) {
	$new_user_direct_pass = md5($new_user_direct_pass);
	mysqli_query($link,"UPDATE amfd_users SET user_direct_pass = '$new_user_direct_pass' WHERE user_id = $client_user_id ");

$new_user_password_notes = "<br />User Password updated";
	
}

?>
<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td width="56%" align="left" valign="top" bgcolor="#FFFFFF"><span class="sblue">MFD Administration </span><span class="sgrey14"><br />
      <br /><div id="error_note" class="sorange20"></div>
    </span></td>
    <td width="44%" align="center" valign="top" bgcolor="#FFFFFF"><input name="ads2" type="button" class="sblue" id="ads2" value="Back to Admin" onclick="ADMINsubmit();" />      <br /></td>
  </tr>
  <tr >
    <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF"><p class="sblue">
      <input name="user_client_id" type="hidden" id="user_client_id" value="<?php echo $user_client_id; ?>" />
      <input name="add_new_user_yn" type="hidden" id="add_new_user_yn" value="0"  size="25" />
      <input name="client_user_id" type="hidden" id="client_user_id" value= "<?php echo $client_user_id ; ?> "/>
    </p></td>
  </tr>
  <tr >
    <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF">
      <span class="sblue">Company: <?php echo $user_company; ?></span><br />
      <br />

    <span class="sorange20"><?php echo $new_user_notes; ?></span><span class="sorange20"><?php echo $new_user_password_notes; ?></span><br /></td>
  </tr>
  <tr >
    <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF"><br />      
      <span class="sblue">Edit  user settings</span><br />
      <table width="600" border="0" cellpadding="5" cellspacing="0" class="sgrey12">
        <tr>
          <td width="126" align='left'>First name</td>
          <td width="254" class="sblue" align='left'><input name="new_user_firstname" type="text" id="new_user_firstname"  size="50" value = "<?php echo $new_user_firstname; ?>" /></td>
        </tr>
        <tr>
          <td align='left'>Last name</td>
          <td class="sblue" align='left'><input name="new_user_lastname" type="text" id="new_user_lastname"  size="50" value = "<?php echo $new_user_lastname; ?>"/></td>
        </tr>
        <tr>
          <td align='left'>Email (optional)</td>
          <td class="sblue" align='left'><input name="new_user_email" type="text" id="new_user_email"  size="50" value = "<?php echo $new_user_email; ?>"/></td>
        </tr>
        <tr>
          <td align='left'>User's API security code</td>
          <td class="sblue" align='left'><input name="new_user_pass" type="text" id="new_user_pass"  size="50" value = "<?php echo $new_user_pass; ?>"/></td>
        </tr>
        <tr>
          <td align='left'>New User Password <br />
          (min 6 characters)</td>
          <td class="sblue" align='left'><input name="new_user_direct_pass" type="text" id="new_user_direct_pass"  size="50" />
            *</td>
        </tr>
        <tr>
          <td align='left'>User Password (again)</td>
          <td class="sblue" align='left'><input name="new_user_direct_pass2" type="text" id="new_user_direct_pass2"  size="50" />
          *</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align='left'>* Password will only be updated if you enter information in the password fields</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="ads" type="button" class="sblue" id="ads" value="Edit user settings" onclick="EDITUSERsubmit();" /></td>
        </tr>
    </table><br /></td>
  </tr>
</table>
