<?php
$sp_to_run = $_REQUEST["sp_to_run"];
$sp_value = $_REQUEST["sp_value"];

if($sp_to_run == "GET CATEGORIES") {
	$connectionInfo = array( "Database" => "DEALER", "UID" => "hmsservice", "PWD" => "MFD4You!", "CharacterSet" => "UTF-8");

	$conn = sqlsrv_connect("72.143.59.108,1494", $connectionInfo);
		if( $conn === false )	 {		die('Connection fail : ' . sqlsrv_errors());	 }
	 
	// NEW STORED PROCEDURE - GET CATEGORIES 
	
	//echo "CATEGORIES | p_Loading_Categories<br />RESULTS (ID CAT_NAME)";
	$tsql_callSP4 = "EXEC DEALER.DBO.p_Loading_Categories ";
	
		$stmt4 = sqlsrv_query( $conn, $tsql_callSP4);
		if( $stmt4 === false )    {        die(print_r( sqlsrv_errors(), true));    }
	
		while( $row = sqlsrv_fetch_array( $stmt4, SQLSRV_FETCH_ASSOC) ) {
			$obj['ID'][] = $row['ID'];
			$obj['CAT_NAME'][] = $row['CAT_NAME'];
			
			//echo "<br /> RESULTS -> " . $row['ID'] . " " . $row['CAT_NAME'];
		}


  echo json_encode($obj);
  
}
?>
