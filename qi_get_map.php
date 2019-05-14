<?php 
// Get map variables
	


// PC Search	
	$pc_to_find =$pc_zoom;
	$pc_to_find = str_replace("[^A-Za-z0-9]", "", $pc_to_find);
	$pc_to_find = str_replace(" ", "", $pc_to_find);
	
	$rp_mapdetails_array = explode(",", $rp_mapdetails);
	$pc_to_find_value = "";
	
	if(strlen($pc_to_find)  == 6) {
	//connection to the database
	include 'db_connect_wg.php'; 
	
	$query = "SELECT * FROM c_geo WHERE PostCode =  '$pc_to_find' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$clat = $row['lat'];
				$clon = $row['lon'];
				$rp_mapdetails_array[0] =12;
				$rp_mapdetails_array[1] = $clat;
				$rp_mapdetails_array[2] = $clon;
				$rp_mapdetails_array[3] = $clat;
				$rp_mapdetails_array[4] = $clat;
				$rp_mapdetails_array[5] = $clon;
				$rp_mapdetails_array[6] = $clon;
				$file_name = $pc_to_find . " ";	  
			}				
		mysqli_free_result($result);
		}
	
}	
include 'db_connect.php'; 
	
	$start_zoom = $rp_mapdetails_array[0];
	$start_lat = $rp_mapdetails_array[1];
	$start_lon = $rp_mapdetails_array[2];
	$v_biglat = $rp_mapdetails_array[3];
	$v_smalllat = $rp_mapdetails_array[4];
	$v_biglong = $rp_mapdetails_array[5];
	$v_smalllong = $rp_mapdetails_array[6];

$pc_zoom = "";
$rp_mapdetails = implode(",", $rp_mapdetails_array);

?>