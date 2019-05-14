<?php 
// default variables

$user_id = -1; 
$next_page = "login.php"; 
$display_wrong_login ="";

// ADD referer check before loading to web
$referer_check = "pass";

// after already login - check to ensure security is okay
if (isset($_POST["user_id"])) {$user_id = $_POST["user_id"];}

// get next page
if (isset($_POST["next_page"])) {$next_page = $_POST["next_page"];}

if($user_id == -1){
if (isset($_POST["login_check"])) {
	include 'qi_check_login.php'; 	
} else $user_password_try_count = 1;
}

if ($user_id == -1)	{
	include 'login.php'; 	
}
else {
include 'master_page.php'; 

}
?>