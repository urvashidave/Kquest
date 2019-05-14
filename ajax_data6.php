
<?php
$sp_to_run = $_REQUEST["sp_to_run"];
$sp_value = $_REQUEST["sp_value"];

$test_array[] = $sp_to_run ;
$test_array[] = $sp_value;
$test_array[] = "3";
$test_array[] = "44";

  echo json_encode($test_array);
?>


