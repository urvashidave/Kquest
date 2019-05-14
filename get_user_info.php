<?php
// find list id from the post	
include 'db_connect.php';

$any_records_test = 0;	
$query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {

				while ($row = mysqli_fetch_assoc($result)) {
					$user_firstname = $row['user_firstname'];
					$user_lastname = $row['user_lastname'];
					$user_company = $row['user_company'];
					$user_email = $row['user_email'];
					$user_password = $row['user_password'];	
					$any_records_test = 1;			  
				}				
			mysqli_free_result($result);
		}
	if($any_records_test <1 ) header( 'Location: http://www.quantinc.ca/mfd' ) ;	
?>