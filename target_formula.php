<?php
$pc_name ="";
$pc_count = 0;
$pc_count1 = 0;
$pc_posted_count = 0;
$query = "SELECT PostCode FROM amfd_pclist WHERE store_uid = $store_uid ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$temp_pc = $row['PostCode'];
$temp_pc = str_replace(" ","",$temp_pc);
$temp_pc = strtoupper($temp_pc);
$pc_name .= "(" . $report_uid . ", '" . $temp_pc . "'),"; 
$pc_count = $pc_count +1;
$pc_count1 = $pc_count1 +1;
if($pc_count1 > 5000) {
$pc_name = rtrim($pc_name, ",");
$pc_name_arry[$pc_posted_count] = $pc_name;
$pc_posted_count = $pc_posted_count + 1;
$pc_count1 = 0;
$pc_name ="";
}
}				
mysqli_free_result($result);
}
if($pc_count1 > 0) {
$pc_name = rtrim($pc_name, ",");
$pc_name_arry[$pc_posted_count] = $pc_name;
$pc_posted_count = $pc_posted_count + 1;
}
include "db_connect_wg.php";

// score pc list - removes data before and after running report
$temp_table_name = "amfd_temp_scored";
mysqli_query($link,"TRUNCATE TABLE $temp_table_name ");
//.mysql_query("CREATE TABLE $temp_table_name (report_uid INT, PostCode TEXT, demo_score INT  NOT NULL, bbm_score INT  NOT NULL, sp_score INT  NOT NULL, seg_score INT  NOT NULL, HH_TOT INT  NOT NULL ) ");	
for ( $i = 0; $i < sizeof($pc_name_arry); $i ++) {	
$temp_row = $pc_name_arry[$i];
mysqli_query($link,"INSERT INTO $temp_table_name (report_uid, PostCode) VALUES $temp_row ");
}		
// get store location lat and lon
// updated august 28 2018 -> c_geo to amfd_homes_current
$query = "SELECT * FROM amfd_homes_current WHERE PostCode = '$store_pc' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$pc_lat = $row['lat'];
$pc_lon = $row['lon'];
}				
mysqli_free_result($result);
}
$vars_array = explode("|", $var1_code);
$vars_number = sizeof($vars_array);
$var1_fullname_string = ""; 
$do_demo_weight = 0;
$do_bbm_weight = 0 ;
$do_sp_weight = 0;
$do_seg_weight = 0;
$do_eth_weight = 0;
// !!!!!!!!!
$do_home_weight = 0;
$do_at_weight = 0;

// march 2019
$do_tar2_weight = 0 ;


$tot_score_db_string = "";
$tot_score_db_stringbbm = "";	
$tot_score_db_stringsp = "";
// !!!!!!!!!
$tot_score_db_stringhome = "";
$tot_score_db_stringat = "";
$tot_score_db_string_eth = "";
// march 2019
$tot_score_db_string_tar2 = "";

include "db_connect.php";
// CREATE query for total score
$description_array = array();
$var_weighting = 1/ sizeof($vars_array);
$tot_score_db_string = ""; $var1_fullname_string = ""; $tot_score_db_counter =""; $tot_score_db_stringbbm ="";
for ($i=0; $i<sizeof($vars_array); $i++) { 
$query = "SELECT * FROM amfd_retailers WHERE var_code = '$vars_array[$i]' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$bbm_db1 = $row['bbm_db'];
$var_cat1 = $row['var_cat'];
$var_name1 = $row['var_name'];
$var_name2 = $row['var_long'];
if($row['bbm_db'] == "a12_mfd_demo" ) {
$tot_score_db_string = $tot_score_db_string . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting ; 
$do_demo_weight = 1;
}

if($row['bbm_db'] == "a12_mfd_bbm")  {
$tot_score_db_stringbbm = $tot_score_db_stringbbm . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting ;
$do_bbm_weight = 1;
}

// added March 2019 - to include media and finance variables
if($row['bbm_db'] == "a17_mfd_tar2")  {
$tot_score_db_string_tar2 = $tot_score_db_string_tar2 . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting ;
$do_tar2_weight = 1;
}




if($row['bbm_db'] == "a12_seg")  {
$tot_score_db_stringbbm = $tot_score_db_stringbbm . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting ;
$do_seg_weight = 1;
$segment_array_of_selected[] = $vars_array[$i];
}
//$tot_score_db_counter = $tot_score_db_counter . $row['bbm_db'] . "." . $vars_array[$i] . "+" ; 
if (array_key_exists($var_name2, $description_array)) {
$description_array[$var_name2] .= str_replace($var_name2, "", $var_name1) . ', ';
} else {
$description_array[$var_name2] = str_replace($var_name2, "", $var_name1) . ', ';
}
//$var1_fullname_string .= $var_name2 . ": " . str_replace($var_name2, "", $var_name1);
/*
if (substr_count($var1_fullname_string, ":") < 1) {
$var1_fullname_string .= $var_name2 . ": " . str_replace($var_name2, "", $var_name1);
}
*/
//Debugging line
//echo "<p>from target formula (var1_fullname_string | var_name2 | var_name1): (".$var1_fullname_string." | ".$var_name2." | ".$var_name1.")</p>";
if($row['bbm_db'] == "a12_mfd_sp"){ 
$temp_sp_var_name = $vars_array[$i] . "p";
$tot_score_db_stringsp = $tot_score_db_stringsp . "+ " . $row['bbm_db'] . "." . $temp_sp_var_name . "* " . $var_weighting ; 
//$tot_score_db_counter = $tot_score_db_counter . $row['bbm_db'] . "." . $temp_sp_var_name . "+" ; 
$do_sp_weight = 1;
}
// !!!!!!!!!
if($row['bbm_db'] == "a17_mfd_tar")  {
$tot_score_db_stringhi = $tot_score_db_stringhi . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting *0.1 ;
$do_hi_weight = 1;
//echo "<br>191:" .  $tot_score_db_stringhi . "<br>";
}



if($row['bbm_db'] == "amfd_birthyear"){ 
$temp_home_var_name = $vars_array[$i] ;
$tot_score_db_stringhome = $tot_score_db_stringhome . "+ " . $row['bbm_db'] . "." . $temp_home_var_name . "* " . $var_weighting ; 
//$tot_score_db_counter = $tot_score_db_counter . $row['bbm_db'] . "." . $temp_sp_var_name . "+" ; 
$do_home_weight = 1;
}
if($row['bbm_db'] == "amfd_tar_at"){ 
$temp_home_var_name = $vars_array[$i] ;
$tot_score_db_stringat = $tot_score_db_stringat . "+ " . $row['bbm_db'] . "." . $temp_home_var_name . "* " . $var_weighting ; 
//$tot_score_db_counter = $tot_score_db_counter . $row['bbm_db'] . "." . $temp_sp_var_name . "+" ; 
$do_at_weight = 1;
}
if($row['bbm_db'] == "tar_c_mn"){ 
$temp_home_var_name = $vars_array[$i] ;
$tot_score_db_string_eth = $tot_score_db_string_eth . "+ " . $row['bbm_db'] . "." . $temp_home_var_name . "* " . $var_weighting ; 
//$tot_score_db_counter = $tot_score_db_counter . $row['bbm_db'] . "." . $temp_sp_var_name . "+" ; 
$do_eth_weight = 1;
}
}				
}mysqli_free_result($result);
}		
// $var1_fullname_string = rtrim($var1_fullname_string, ",");
$var1_fullname_string = "";
$var_click_details = "";
$count = 0;
foreach ($description_array as $k => $v) {
if ($count < 2) {
$var1_fullname_string .= $k . ': ' . rtrim($v, ', ') . '<br/>';
} 
$var_click_details .= $k . ': ' . rtrim($v, ', ') . '<br/>';
$count += 1;
}
$var1_fullname_string = rtrim($var1_fullname_string, '<br/>');
$var_click_details = rtrim($var_click_details, '<br/>');
include "db_connect_wg.php";
if($do_demo_weight > 0) {	
$temp_bbm_table_name1 = "a12_mfd_demo";
mysqli_query($link,"
UPDATE $temp_table_name
LEFT JOIN a12_mfd_demo ON 
$temp_table_name.PostCode = a12_mfd_demo.PostCode
SET $temp_table_name.demo_score = $tot_score_db_string 
WHERE $temp_table_name.report_uid = $report_uid
");
}
if($do_bbm_weight > 0) {	
mysqli_query($link,"
UPDATE $temp_table_name
LEFT JOIN a12_mfd_bbm ON 
$temp_table_name.PostCode = a12_mfd_bbm.PostCode
SET $temp_table_name.bbm_score = $tot_score_db_stringbbm 
WHERE $temp_table_name.report_uid = $report_uid
");		
}

// added March 2019
if($do_tar2_weight > 0) {	
mysqli_query($link,"
UPDATE $temp_table_name
LEFT JOIN a17_mfd_tar2 ON 
$temp_table_name.PostCode = a17_mfd_tar2.POSTCODE
SET $temp_table_name.bbm_score = ($temp_table_name.bbm_score + $tot_score_db_string_tar2) 
WHERE $temp_table_name.report_uid = $report_uid
");		
}


if($do_seg_weight > 0) {
$segment_score_value = sizeof($segment_array_of_selected) * $var_weighting * 99;
for ( $i = 0; $i <= sizeof($segment_array_of_selected); $i ++) {
//$temp_table_nameseg = "amfd_seg_temp" . $report_uid;
//mysql_query("CREATE TABLE $temp_table_nameseg (report_uid INT, PostCode TEXT, seg_score INT  NOT NULL) ");
$query = "SELECT * FROM $temp_table_name pclist5, c_seg seg5 WHERE pclist5.report_uid = $report_uid and seg5.POSTCODE = pclist5.PostCode and seg5.CLUSTER ='$segment_array_of_selected[$i]' ";		
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$seg_pc_list2[] = $row['PostCode'];						
}}}
mysqli_query($link,"
UPDATE $temp_table_name
SET $temp_table_name.seg_score = 1 
");
for ( $i = 0; $i <= sizeof($seg_pc_list2); $i ++) {
mysqli_query($link,"
UPDATE $temp_table_name
SET $temp_table_name.seg_score = $segment_score_value 
WHERE $temp_table_name.PostCode = '$seg_pc_list2[$i]'
");	
}
}
if($do_sp_weight > 0) {	
mysqli_query($link,"
UPDATE $temp_table_name
LEFT JOIN a12_mfd_sp ON 
$temp_table_name.PostCode = a12_mfd_sp.PostCode
SET $temp_table_name.sp_score = $tot_score_db_stringsp 
WHERE $temp_table_name.report_uid = $report_uid
");		
}
// !!!!!!!!!
if($do_home_weight > 0) {	
mysqli_query($link,"
UPDATE $temp_table_name
LEFT JOIN amfd_birthyear ON 
$temp_table_name.PostCode = amfd_birthyear.PostCode
SET $temp_table_name.homes_score = $tot_score_db_stringhome 
WHERE $temp_table_name.report_uid = $report_uid
");	
}
if($do_at_weight > 0) {	
mysqli_query($link,"
UPDATE $temp_table_name
LEFT JOIN amfd_tar_at ON 
$temp_table_name.PostCode = amfd_tar_at.PostCode
SET $temp_table_name.auto_score = $tot_score_db_stringat 
WHERE $temp_table_name.report_uid = $report_uid
");	
}
if($do_hi_weight > 0) {	
	//echo "<br>275:" . $tot_score_db_string . "<br>";
	mysqli_query($link,"
	UPDATE $temp_table_name
	LEFT JOIN a17_mfd_tar ON 
	$temp_table_name.PostCode = a17_mfd_tar.POSTCODE
	SET $temp_table_name.hi_score = $tot_score_db_stringhi 
	WHERE $temp_table_name.report_uid = $report_uid
	");
}
if($do_eth_weight > 0) {	
	//echo "<br>275:" . $tot_score_db_string . "<br>";
	mysqli_query($link,"
	UPDATE $temp_table_name
	LEFT JOIN tar_c_mn ON 
	$temp_table_name.PostCode = tar_c_mn.POSTCODE
	SET $temp_table_name.eth_score = $tot_score_db_string_eth 
	WHERE $temp_table_name.report_uid = $report_uid
	");
}

// august 28 2018 - updated hh counts from a12_mfd_demo to amfd_homes_current
/* original
mysqli_query($link,"
UPDATE $temp_table_name
LEFT JOIN a12_mfd_demo ON 
$temp_table_name.PostCode = a12_mfd_demo.POSTCODE
SET $temp_table_name.HH_TOT = a12_mfd_demo.HH_TOT 
WHERE $temp_table_name.report_uid = $report_uid
");	
*/

mysqli_query($link,"
UPDATE $temp_table_name
LEFT JOIN amfd_homes_current ON 
$temp_table_name.PostCode = amfd_homes_current.PostCode
SET $temp_table_name.HH_TOT = amfd_homes_current.dwellings 
WHERE $temp_table_name.report_uid = $report_uid
");	

// get total HH		
$total_households = 0;		
$query = "SELECT SUM(HH_TOT) as HH_TOT FROM $temp_table_name WHERE report_uid = $report_uid ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$total_households = $row['HH_TOT'];
}				
}
// get postal codes of the top 20%
$pc_count_step = 998 /$pc_count;
$top_pc_cutoff = round($pc_count * 0.2);
$LDUScorePairs2 = "";	
$pc_name2 = "";	
$decile_cutoff = $total_households * 0.1;
$decile_counter = 0;
$household_counter = 0;
$temp_decile_score = 0;
$temp_decile_denominator = 0;
$temp_decile_hh = 0;
$aggregate_total_score = 0;
$decile_score_list = "";

?>