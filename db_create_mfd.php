<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPDATE DATABASE</title>
</head>

<body>

Create DB Table


<?php 
// ------------------------------------------------ db_connect
	$myServer = "localhost";
	$myUser = "quantincca";
	$myPass = "Jennt4helpWISE";
	$myDB = "quantincca"; 

//connection to database
$link = mysqli_connect($myServer, $myUser, $myPass, $myDB);


// ------------------------------------------------ create
//table field names
mysqli_query($link,"CREATE TABLE retail_store( 
STORE_NAME text,
MALL text,
ADDRESS1 text,
ADDRESS2 text,
CITY text,
PROV text,
FSALDU text,
LAT decimal(12,6),
LON decimal(12,6)


)");


?> 

</body>
</html>
