<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
<title>Welcome to MFD Targeting</title>

<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<style>
.Example_M {
-moz-box-shadow: 5px 5px #DF2D00;
-webkit-box-shadow: 5px 5px #DF2D00;
box-shadow: 5px 5px #DF2D00;
}
</style>

<?php
// $user_client_id is the company code of the company MFD is modifying

if (isset($_GET["U"])) {	$user_api = $_GET["U"];} else $user_api = 0;

$get_date = date('d');
if($get_date <1) $get_date =1;
$api_converter = 17 * $get_date;
$user_counter =0;
$user_api_pass = $user_api / $api_converter;

include "db_connect.php";
$user_id = 0;
$query = "SELECT * FROM amfd_users WHERE user_password = $user_api_pass  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $user_id = $row['user_id']; 
					  $user_firstname = $row['user_firstname']; 
					  $user_lastname = $row['user_lastname']; 
					  $user_company = $row['user_company']; 
					  $client_id = $row['client_id']; 
					  $user_counter = $user_counter + 1;
				}				
			mysqli_free_result($result);
		}

if($user_counter == 0) {
$get_date2 = $get_date - 1;
	if($get_date2 == 0) $get_date2 = 1;
$api_converter = 17 * $get_date2;
$user_api_pass = $user_api / $api_converter;
	$query = "SELECT * FROM amfd_users WHERE user_password = $user_api_pass  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $user_id = $row['user_id']; 
					  $user_firstname = $row['user_firstname']; 
					  $user_lastname = $row['user_lastname']; 
					  $user_company = $row['user_company']; 
					  $client_id = $row['client_id']; 
					  $user_counter = $user_counter + 1;
				}				
		}
}

if($user_counter == 0) {
$get_date3 = $get_date + 1;
	if($get_date3 == 0) $get_date3 = 1;
$api_converter = 17 * $get_date3;
$user_api_pass = $user_api / $api_converter;
	$query = "SELECT * FROM amfd_users WHERE user_password = $user_api_pass  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $user_id = $row['user_id']; 
					  $user_firstname = $row['user_firstname']; 
					  $user_lastname = $row['user_lastname']; 
					  $user_company = $row['user_company']; 
					  $client_id = $row['client_id']; 
					  $user_counter = $user_counter + 1;
				}				
		}
}



// did not login properly

if($user_id ==0 || $user_counter < 1 || $user_counter > 1) {
	$next_page = "login.php";
	$mdf_comment1 = "Sorry we were unable to connect. Press the 'Back' button on your browser.";
} else
{
	$next_page = "ui_home.php";
	$mdf_comment1 = "Welcome " . $user_firstname . " " . $user_lastname;
}
?>
<script type="text/javascript" >
function ReDirect() {
	if (<?php echo $user_id; ?> > 0) {
		form = document.getElementById("form1");
		form.submit();
		}
}
</script>
</head>

<body onLoad="ReDirect()">

<form id="form1" name="form1" method="post" action="index.php" >
  <table width="915" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#DF2D00" bgcolor="#FFFFFF" class="Example_M">
    <tr>
      <td align="left" valign="top"><span class="sblue">
        <input name="user_id" type="hidden" id="user_id" value="<?php echo $user_id; ?>"  size="25" />
      </span><span class="sblue">
      <input name="next_page" type="hidden" id="next_page" value="<?php echo $next_page; ?>"  size="25" />
      </span>
      <table width="880" border="0" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td width="431">&nbsp;</td>
          <td width="429">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" class="sorange24">&nbsp;<?php echo $mdf_comment1; ?>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
           <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>

</form>
</body>