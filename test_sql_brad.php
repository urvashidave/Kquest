<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="favicon.ico.ico" type="image/x-icon" />
<title>BRAD TESTING PAGE ON MFD</title>

<?php
phpinfo();
$connectionInfo = array( "Database" => "DEALER", "UID" => "hmsservice", "PWD" => "MFD4You!", "CharacterSet" => "UTF-8");

$conn = sqlsrv_connect("72.143.59.108,1494", $connectionInfo);
	if( $conn === false )	 {		die('Connection fail : ' . sqlsrv_errors());	 }
 
// NEW STORED PROCEDURE - GET CATEGORIES 

echo "CATEGORIES | p_Loading_Categories<br />RESULTS (ID CAT_NAME)";
$tsql_callSP4 = "EXEC DEALER.DBO.p_Loading_Categories ";

    $stmt4 = sqlsrv_query( $conn, $tsql_callSP4);
    if( $stmt4 === false )    {        die(print_r( sqlsrv_errors(), true));    }

 	while( $row = sqlsrv_fetch_array( $stmt4, SQLSRV_FETCH_ASSOC) ) {
	  	echo "<br /> RESULTS -> " . $row['ID'] . " " . $row['CAT_NAME'];
	}

// NEW STORED PROCEDURE - GET SUB-CATEGORIES 

echo "<br /><br />SUB-CATEGORIES |  DEALER.DBO.p_Loading_SubCategories 'Home' <br />RESULTS (ID SUB_NAME CAT_ID CAT_NAME)";
$tsql_callSP4 = "EXEC DEALER.DBO.p_Loading_SubCategories 'Home' ";

    $stmt4 = sqlsrv_query( $conn, $tsql_callSP4);
    if( $stmt4 === false )    {        die(print_r( sqlsrv_errors(), true));    }

 	while( $row = sqlsrv_fetch_array( $stmt4, SQLSRV_FETCH_ASSOC) ) {
	  	echo "<br /> RESULTS -> " . $row['ID'] . " " . $row['SUB_NAME'] . " " . $row['CAT_ID'] . " " . $row['CAT_NAME'];
	}

// NEW STORED PROCEDURE - GET STORE_NAME BASED ON SUB-CATEGORIES truncated at 5 records 
$temp_count = 0;
echo "<br /><br />SUB-CATEGORIES truncated at 5 records |   DEALER.DBO.p_Loading_StoreRetail_Belong 'Apparel', 'Footwear' <br />RESULTS (STORE_NAME)";
$tsql_callSP4 = "EXEC DEALER.DBO.p_Loading_StoreRetail_Belong 'Apparel', 'Footwear' ";

    $stmt4 = sqlsrv_query( $conn, $tsql_callSP4);
    if( $stmt4 === false )    {        die(print_r( sqlsrv_errors(), true));    }

 	while( $row = sqlsrv_fetch_array( $stmt4, SQLSRV_FETCH_ASSOC) ) {
		$temp_count = $temp_count + 1;
	  	if($temp_count < 5) echo "<br /> RESULTS -> " . $row['STORE_NAME'];
	}

// NEW STORED PROCEDURE - GET STORE ADDRESS BASED ON STORE_NAME 
$temp_count = 0;
echo "<br /><br />STORE LIST truncated at 5 records |   DEALER.DBO.p_Loading_Retail_Store_List 'Burger King'  <br />RESULTS (STORE_NAME MALL ADDRESS1 CITY PROV FSALDU LAT LON)";
$tsql_callSP4 = "EXEC DEALER.DBO.p_Loading_Retail_Store_List 'Burger King'  ";

    $stmt4 = sqlsrv_query( $conn, $tsql_callSP4);
    if( $stmt4 === false )   {        die(print_r( sqlsrv_errors(), true));    }

 	while( $row = sqlsrv_fetch_array( $stmt4, SQLSRV_FETCH_ASSOC) ) {
		$temp_count = $temp_count + 1;
	  	if($temp_count < 5) echo "<br /> RESULTS-> " . $row['STORE_NAME'] . " " . $row['MALL'] . " " . $row['ADDRESS1'] . " " . $row['CITY'] . " " . $row['PROV'] . " " . $row['FSALDU'] . " " . $row['LAT'] . " " . $row['LON'];
	}

?>
</head>
<body>
<form id="form1" name="form1" method="post" action="my_profile_brad.php">
	<br/>
	<input type="submit"  name="edit_post" id="edit_post" value="Back to my profile Brad" />
    <br />
    Brad's testing site 
	<br />
</form>
</body>
</html>