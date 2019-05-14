

<?php 
date_default_timezone_set('America/Toronto');
$current_time = date('Y-m-d H:i:s');
$received_post_array = "NA";
$received_post_array = json_decode($_POST['data']);

$json_post_encode = json_encode($received_post_array);

$post_report_id = intval($received_post_array[0]);
$post_user_id = intval($received_post_array[1]);
$post_date = $received_post_array[2];
$post_PK_ID = intval($received_post_array[3]);
$post_client_code = $received_post_array[4];
$post_store_unique = $received_post_array[5];
					
	
include "db_connect.php";
$user_id = 1;
mysqli_query($link,"INSERT INTO amfd_carriers (user_id, report_id, json_carrier, date, PK_ID, client_code, store_unique) VALUES ($post_user_id, $post_report_id, '$json_post_encode', '$post_date', $post_PK_ID, '$post_client_code', '$post_store_unique') ");

header('Content-Type: application/json');
echo json_encode($received_post_array);
?>