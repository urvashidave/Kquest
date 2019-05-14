<?php 
// ------------------------------------------------ db_connect
	$myServer = "localhost";
	$myUser = "wisegeo123";
	$myPass = "Jennt4helpWISE";
	$myDB = "wisegeo"; 

//connection to database
$link = mysqli_connect($myServer, $myUser, $myPass, $myDB);

// ------------------------------------------------ db_connect

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>