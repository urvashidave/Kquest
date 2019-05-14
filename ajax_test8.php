<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>cURL</title>
    
    
   
  </head> 
  
  <body>
    Results <br /><br />
<?php

$retailer_catmap = 0;
$retailer_submap = 0;
$default_retailer = 1;

// ADD LOOP FOR CATEGORY LEVEL AND CLIENT LEVEL
if($retailer_catmap >0) {
		$query = "SELECT * FROM retail_cat_tree WHERE CATEGORY_ID = $retailer_catmap";
			if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					$query_sub_id[] = $row['SUB_ID'];
					$display_cat_name = $row['CATEGORY_NAME'];
					$default_retailer = 0;
			}}

// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////		
		$query_sub_id[] = 1;
		$query_sub_id[] = 2;
		$query_sub_id[] = 3;
		$display_cat_name = "Apparel";
		$default_retailer = 0;

// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////	
		
		$display_store_names = "";
		for ($i = 0; $i < sizeof($query_sub_id) ; $i++) { 
			$temp_retailer_submap = $query_sub_id[$i];
			$query = "SELECT * FROM retail_cat_tree WHERE SUB_ID = $temp_retailer_submap";
				if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						//$store_name_list[] = $row['STORE_NAME'];
						$all_subcat_list[] = $row['SUB_CATEGORY'];
						$display_store_names[] = "'$display_cat_name', " . "'" . $row['SUB_CATEGORY'] ."'";	
				}}
		}
		
// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////		
		
		$all_subcat_list[] = "Athletic";
		$all_subcat_list[] = "Childrens";
		$all_subcat_list[] = "Family Wear";
		
		$display_store_names[] = "'Apparel', 'Athletic'";
		$display_store_names[] = "'Apparel', 'Childrens'";
		$display_store_names[] = "'Apparel', 'Family Wear'";
		
// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////	
		
		$curl_counter = 0;
	for ($curl_counter = 0; $curl_counter < sizeof($display_store_names) ; $curl_counter++) { 	
		// CURL GET p_Loading_StoreRetail_Belong 
		$some_data_3 = array(
			'sp_to_run' => 'p_Loading_StoreRetail_Belong',
			'sp_value'  => $display_store_names[$curl_counter]
		);  
	 
		$curl_3 = curl_init();
		curl_setopt($curl_3, CURLOPT_POST, 1);
		curl_setopt($curl_3, CURLOPT_URL, 'http://www.market-focus.com/brad/ajax_data7.php');  
		curl_setopt($curl_3, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_3, CURLOPT_POSTFIELDS, $some_data_3);
	   
		// Send the request
		$result_3 = curl_exec($curl_3);
		$curl_array_3 = json_decode(trim($result_3), TRUE);
		//print_r($array);
	  
		curl_close($curl_array_3);

		// vars received $query_sub_id (sub ids for running sub stored procedure)
		for ($i = 0; $i < sizeof($curl_array_3['STORE_NAME']) ; $i++) { 
				$store_name_list[] = $curl_array_3['STORE_NAME'][$i];
				$store_subcat_list[] = $all_subcat_list[$curl_counter];
				$default_retailer = 0;
		}
	}
		
}
 


if($retailer_submap >0) {
	$query = "SELECT * FROM retail_cat_tree WHERE SUB_ID = $retailer_submap";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$display_cat_name = $row['SUB_CATEGORY'];
				$all_subcat_list[] = $row['SUB_CATEGORY'];
				$display_store_names[] = "'" . $row['CATEGORY_NAME'] . "', " . "'" . $row['SUB_CATEGORY'] ."'";	
				$default_retailer = 0;
		}}
		
// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////			
		$all_subcat_list[] = "Family Wear";
		$display_store_names[] = "'Apparel', 'Family Wear'";
		$default_retailer = 0;
		
// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////	

	$curl_counter = 0;
		// CURL GET p_Loading_StoreRetail_Belong 
		$some_data_3 = array(
			'sp_to_run' => 'p_Loading_StoreRetail_Belong',
			'sp_value'  => $display_store_names[$curl_counter]
		);  
	 
		$curl_3 = curl_init();
		curl_setopt($curl_3, CURLOPT_POST, 1);
		curl_setopt($curl_3, CURLOPT_URL, 'http://www.market-focus.com/brad/ajax_data7.php');  
		curl_setopt($curl_3, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_3, CURLOPT_POSTFIELDS, $some_data_3);
	   
		// Send the request
		$result_3 = curl_exec($curl_3);
		$curl_array_3 = json_decode(trim($result_3), TRUE);
		//print_r($array);
	  
		curl_close($curl_array_3);

		// vars received $query_sub_id (sub ids for running sub stored procedure)
		for ($i = 0; $i < sizeof($curl_array_3['STORE_NAME']) ; $i++) { 
				$store_name_list[] = $curl_array_3['STORE_NAME'][$i];
				$store_subcat_list[] = $all_subcat_list[$curl_counter];
				$default_retailer = 0;
		}

}

$client_backend = "";
	
if($default_retailer > 0) {
		$query = "SELECT * FROM amfd_company WHERE client_id = $client_id";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$client_backend = $row['client_backend'];
		}}
	
		if($client_backend == "" || $client_backend == "None") $default_retailer = 0;
}
	
if($default_retailer > 0) {
			$query = "SELECT * FROM retail_list WHERE STORE_NAME = '$client_backend' ";
			if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					$query_cat_name[] = $row['CATEGORY_NAME'];
					$query_sub_name[] = $row['SUB_CATEGORY'];
					$display_store_names[] = "'" . $row['CATEGORY_NAME'] . "', " . "'" . $row['SUB_CATEGORY'] ."'";	
					$display_cat_name = "All competitive chains for: " . $client_backend;
			}}
}
// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////		
		$default_retailer = 1;
		
		$display_cat_name = "All competitive chains for: 241";
		
		$query_cat_name[] = "Food & Drug";
		$query_cat_name[] = "Food & Drug";
		$query_cat_name[] = "Food & Drug";
		
		$query_sub_name[] = "Restaurants/Fast food";
		$query_sub_name[] = "Drug";
		$query_sub_name[] = "Grocery";
		
		$display_store_names[] = "'Food & Drug', 'Restaurants/Fast food'";
		$display_store_names[] = "'Food & Drug', 'Drug'";
		$display_store_names[] = "'Food & Drug', 'Grocery'";

// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////	
if($default_retailer > 0) {		
		$curl_counter = 0;
	for ($curl_counter = 0; $curl_counter < sizeof($display_store_names) ; $curl_counter++) { 	
		// CURL GET p_Loading_StoreRetail_Belong 
		$some_data_3 = array(
			'sp_to_run' => 'p_Loading_StoreRetail_Belong',
			'sp_value'  => $display_store_names[$curl_counter]
		);  
	 
		$curl_3 = curl_init();
		curl_setopt($curl_3, CURLOPT_POST, 1);
		curl_setopt($curl_3, CURLOPT_URL, 'http://www.market-focus.com/brad/ajax_data7.php');  
		curl_setopt($curl_3, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_3, CURLOPT_POSTFIELDS, $some_data_3);
	   
		// Send the request
		$result_3 = curl_exec($curl_3);
		$curl_array_3 = json_decode(trim($result_3), TRUE);
		//print_r($array);
	  
		curl_close($curl_array_3);

		// vars received $query_sub_id (sub ids for running sub stored procedure)
		for ($i = 0; $i < sizeof($curl_array_3['STORE_NAME']) ; $i++) { 
				$store_name_list[] = $curl_array_3['STORE_NAME'][$i];
				$store_subcat_list[] = $query_sub_name[$curl_counter];
		}
	}
	
	
}

// TAMMY New stored procedures : Get category and sub-categories names from store name

// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////	
$start_lat = 43.6104;
$start_lon = -79.4992;

$start_lat_min = ($start_lat - 0.05);
$start_lat_max = ($start_lat + 0.05);
$start_lon_min = ($start_lon - 0.1);
$start_lon_max = ($start_lon + 0.1);
// REMOVE ON LIVE SERVER //////////////////////////////////////////////////////////////	



// CURL GET p_Loading_StoreRetail_Belong 
if($default_retailer > 0) {		
	for ($curl_counter = 0; $curl_counter < 100 ; $curl_counter++) { 	
		$some_data_4 = array(
			'sp_to_run' => 'p_Loading_Retail_Store_List',
			'sp_value'  => " '" . $store_name_list[$curl_counter] ."'",
			'sp_LAT' => $start_lat,
			'sp_LON' => $start_lon
		);  
	 
		$curl_4 = curl_init();
		curl_setopt($curl_4, CURLOPT_POST, 1);
		curl_setopt($curl_4, CURLOPT_URL, 'http://www.market-focus.com/brad/ajax_data7.php');  
		curl_setopt($curl_4, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_4, CURLOPT_POSTFIELDS, $some_data_4);
	   
		// Send the request
		$result_4 = curl_exec($curl_4);
		$curl_array_4 = json_decode(trim($result_4), TRUE);
		//print_r($array);
	  
		curl_close($curl_array_4);

		// vars received $query_sub_id (sub ids for running sub stored procedure)
		for ($i = 0; $i < sizeof($curl_array_4['STORE_NAME']) ; $i++) { 
				$temp_map_store_lat = $curl_array_4['LAT'][$i];
				$temp_map_store_lon = $curl_array_4['LON'][$i];
				echo $i . " ";
				
				if($temp_map_store_lat > $start_lat_min && $temp_map_store_lat < $start_lat_max && $temp_map_store_lon > $start_lon_min && $temp_map_store_lon < $start_lon_max) {			 
					$map_store_name[]= $curl_array_4['STORE_NAME'][$i];
					$map_store_lat[]= $curl_array_4['LAT'][$i];
					$map_store_lon[]= $curl_array_4['LON'][$i];
				}
		}
	}
}










	
echo "<br /> store_name_list:";
//echo "<pre>";
print_r($store_name_list);	
echo "<br /> map_store_name:";
//echo "<pre>";
print_r($map_store_name);	
//echo "</pre>";
echo "<br /><br /> map_store_lat:";
print_r($map_store_lat);	



?>




  </body>
</html> 