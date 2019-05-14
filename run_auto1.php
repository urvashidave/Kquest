
<?php



echo "<br /><br /><br />Roll up<br /><br />";

include "db_connect.php";

$query = "SELECT * FROM amfd_bench1 ";
	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {

if($row['bench_name'] == 'Atlantic') $a_agg_list[0] = $row['agg_list'];
if($row['bench_name'] == 'Quebec') $a_agg_list[1] = $row['agg_list'];
if($row['bench_name'] == 'Ont') $a_agg_list[2] = $row['agg_list'];
if($row['bench_name'] == 'West') $a_agg_list[3] = $row['agg_list'];
if($row['bench_name'] == 'X') $a_agg_list[4] = $row['agg_list'];
if($row['bench_name'] == 'Y') $a_agg_list[5] = $row['agg_list'];


	}}
	
	$temp_array0 = explode(",", $a_agg_list[0]);
	$temp_array1 = explode(",", $a_agg_list[1]);
	$temp_array2 = explode(",", $a_agg_list[2]);
	$temp_array3 = explode(",", $a_agg_list[3]);
	$temp_array3 = explode(",", $a_agg_list[4]);
	$temp_array3 = explode(",", $a_agg_list[5]);

	
	for ( $i = 0; $i < sizeof($temp_array0); $i ++) {
	$temp_sum[] = $temp_array0[$i] + $temp_array1[$i] + $temp_array2[$i] + $temp_array3[$i] + $temp_array4[$i] + $temp_array5[$i] ;
}
	
	$finalsum = implode(",", $temp_sum);
	print_r($temp_sum);

					
?>

