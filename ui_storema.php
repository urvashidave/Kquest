<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?client=gme-marketfocus&v=3.30"></script>
<!--
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZgwgaf7Tehvdma313gZ-684QizKPy-so&libraries=places,drawing,visualization" async defer></script> -->



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<link rel='STYLESHEET' type='text/css' href='master_style.css'>





<script type='text/javascript' src='https://www.google.com/jsapi'></script>



<style>


.container row col-md-12 print_pages {page-break-after: always}

div.page { page-break-after: always }

div.page:last-child { page-break-after: avoid }

div.page:first-child { page-break-before: avoid }


.container row col-md-12 print_pages:first-child { page-break-before: avoid }
div.page:first-child { page-break-before: avoid }
.print_pages:first-child { page-break-before: avoid }
.lifestyle{page-break-after: avoid;

}
.tai1  { page-break-before: avoid }
  p {page-break-inside: avoid;}
div.page{page-break-inside: avoid;}   

 .tai1  { page-break-before: avoid }
.lsa{page-break-after: avoid}
.retail{ page-break-before: avoid }



body {



background-color: #FFFFFF;



margin: 0 auto;



}



.bg_color2 {

    background-color: red;

    font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;

    color: white;

    font-weight: bold;

}



.bg_color2 {



    background-color: red;



    font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



    color: white;



    font-weight: bold;



}











#page-wrap {



width: 910px;



margin: 0 auto;



}



div.page { page-break-after: always }



</style>



<?php



$radius_yn = 0;



	$rp_radius = "2000,9";



$user_uid = $user_id;



if (isset($_POST["store_selected"])) {	$store_uid = $_POST["store_selected"];} else $store_uid = " ";



if (isset($_POST["rbenchmark"])) {	$rbenchmark = $_POST["rbenchmark"];} else $rbenchmark = 0;



if (isset($_POST["detail_show"])) {	$detail_show = $_POST["detail_show"];} else $detail_show = 0;



include 'db_connect.php'; 



$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid  ORDER BY store_number ";



if ($result = mysqli_query($link, $query)) {



while ($row = mysqli_fetch_assoc($result)) {



	$temp_store_pc = $row['store_pc'];



	$temp_store_pc = str_replace(' ', '', $temp_store_pc);



	$store_pc = preg_replace("/[^a-zA-Z0-9]+/", "", $temp_store_pc);



	$client_id = $row['client_id'];



	$kml_id = $row['kml_id'];



	$store_number = $row['store_number'];



	$store_name = $row['store_name'];



	$store_pc = $row['store_pc'];



	$radius_yn = $row['radius_yn'];



	$rp_radius = $row['rp_radius'];



}



}







$rp_radius_array = explode(",", $rp_radius);



$rp_radius_in_km = $rp_radius_array[0];







$tbench_store_number = "";



$tbench_store_name = "Canada";



$query = "SELECT * FROM amfd_stores WHERE store_uid = $rbenchmark  ORDER BY store_number ";



if ($result = mysqli_query($link, $query)) {



while ($row = mysqli_fetch_assoc($result)) {



	$tbench_store_number = $row['store_number'];



	$tbench_store_name = $row['store_name'];



}



}



if($rbenchmark < 15) {



	$tbench_store_number = "";



	$tbench_store_name = "Canada";



	if($rbenchmark == 1) $tbench_store_name = "British Columbia";



	if($rbenchmark == 2) $tbench_store_name = "Alberta";



	if($rbenchmark == 3) $tbench_store_name = "Saskatchewan";



	if($rbenchmark == 4) $tbench_store_name = "Manitoba";



	if($rbenchmark == 5) $tbench_store_name = "Ontario";



	if($rbenchmark == 6) $tbench_store_name = "Quebec";



	if($rbenchmark == 7) $tbench_store_name = "Atlantic";



	



	if($rbenchmark == 8) $tbench_store_name = "Western Prov.";



	if($rbenchmark == 9) $tbench_store_name = "PEI";



	if($rbenchmark == 10) $tbench_store_name = "New Brunswick";



	if($rbenchmark == 11) $tbench_store_name = "Nova Scotia";



	if($rbenchmark == 12) $tbench_store_name = "Newfoundland";



}







?>



<SCRIPT language="JavaScript">



function PICKSTOREsubmit(val) {



document.getElementById('store_uid').value = val;



document.main_form.target = "_top";



document.main_form.submit(); 		



}



function ORDERCSVsubmitview(val) {



document.getElementById('report_uid').value = val;



document.getElementById('next_page').value = "ui_webserviceview.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



//var page_to_open = "ui_webservice.php?report_uid=" + val;



//window.open(page_to_open, '_blank');



}



function TADETAILsubmit0(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 0;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function list_report(val) {



	var val1 = document.getElementById("myReport").value;



	document.getElementById('detail_show').value = val1;



}



function list_bench(val) {



	var val2 = document.getElementById("myBench").value;



	document.getElementById('rbenchmark').value = val2;



}







function TADETAILsubmit2(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 2;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function detail_show0(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 0;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}







function detail_show2(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 2;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function change_report(val) {



	

document.getElementById('next_page').value = "ui_tadetails.php";



document.main_form.target = "_top";



document.main_form.submit();	



}



function detail_show3(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 3;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function detail_show4(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 4;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function detail_show5(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 5;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function detail_show6(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 6;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function detail_show7(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 7;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function detail_show9(val) {



document.getElementById('report_uid').value = val;



document.getElementById('store_selected').value = val;



document.getElementById('detail_show').value = 9;



document.getElementById('next_page').value = "ui_tadetails.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function TITLEsubmit2(val) {



document.getElementById('store_selected').value = val;



document.getElementById('next_page').value = "ui_storema.php";



document.getElementById('proc_div').style.display = 'block';



document.getElementById('proc_div').style.zIndex= 200;



document.main_form.target = "_top";



document.main_form.submit();



}



function view_description() {



var win = window.open('segment_descriptions.php', '_blank');



win.focus();



}



</script>



<style type="text/css">



.orange50



{



font-family: "Open Sans", sans-serif;



color: #990000;



font-size: 50px; 



font-weight:bold;



padding: 0 0 9px;



text-transform: uppercase;



}



.blue50 



{ 



font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 38px;



font-weight: normal;



padding: 0 0 9px;



text-transform: uppercase;



}



.black18 



{ 



font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 18px;



font-weight: normal;



padding: 0 0 9px;



}



.black22 



{ 



font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 22px;



font-weight: bold;



padding: 0 0 9px;



}



.black8 



{ 



font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 8px;



font-weight: normal;



}



.black16 



{ 



font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 16px;



font-weight: normal;



padding: 0 0 9px;



}



.black14 



{ 



font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 14px;



font-weight: normal;



padding: 0 0 9px;



}



.grey14



{ 



font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #717171;



font-size: 14px;



font-weight: normal;



}



.grey10



{ 



font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #717171;



font-size: 14px;



font-weight: normal;



}



.table360 {



height: 360px;



width: 900px;



overflow-y:scroll; 



}



.sgrey50 {	font-family: Trebuchet, serif;



font-size: 60px;



font-weight: normal;



color: #900;



}



html, body



{



height: 100%;



}



.bg_color1 {



background-color: #CEB39D;



}



@media print {



.pagebreak {page-break-after: always;}



.no-print {



	display: none !important;



}



}



.print_pages {



width: 910px;



height: 650px;



background: #fff;



margin: auto;



-webkit-border-radius: 6px;



border-radius: 6px;



-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



}



.print_pages_cover {



width: 910px;



height: 600px;



background: #fff;



margin: 25px 0 0 0;



-webkit-border-radius: 6px;



border-radius: 6px;



-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



}



.print_pages1 {  width: 910px;



height: 620px;



background: #fff;



margin: 25px 0 0 0;



-webkit-border-radius: 6px;



border-radius: 6px;



-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



}



.print_pages2 {  width: 910px;



height: 620px;



background: #fff;



margin: 25px 0 0 0;



-webkit-border-radius: 6px;



border-radius: 6px;



-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);



}



.stitle {



font-family: Arial, Helvetica, sans-serif;



font-size: 34px;



font-weight: bold;



color: #147EA7;



}



.black141 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #333;



font-size: 14px;



font-weight: normal;



padding: 0 0 9px;



}



.blue22 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;



color: #147EA7;



font-size: 32px;



font-weight: normal;



padding: 0 0 9px;



}



.pprint_pages {



width: 910px;



height: 620px;



background: #fff;



margin: 25px 0 0 0;



border-style: solid;



border-color: #000000 #000000;



-webkit-border-radius: 6px;



border-radius: 6px;



-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);



box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);



}



.pheading {



font-family: Arial Narrow, Arial, Helvetica, sans-serif;



font-size: 34px;



font-weight: bold;



color: #147EA7;



}



.psub1 {



font-family: Arial Narrow, Arial, Helvetica, sans-serif;



font-size: 20px;



font-weight: bold;



color: #147EA7;



}



.psub2 {



font-family: Arial Narrow, Arial, Helvetica, sans-serif;



font-size: 18px;



font-weight: bold;



color: #000000;



}



.pbody {



font-family: Arial Narrow, Arial, Helvetica, sans-serif;



font-size: 16px;



font-weight: normal;



color: #000000;



}



.pbodyemp {



font-family: Arial Narrow, Arial, Helvetica, sans-serif;



font-size: 16px;



font-weight: bold;



color: #000000;



}



.pborder1 {



border-style: solid;



border-width: 1px;



border-color: #333333 #666666;



-webkit-border-radius: 6px;



border-radius: 6px;



}



.style2 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif; color: #333; font-size: 16px; font-weight: bold; padding: 0 0 9px; }



.style7 {font-size: 10px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; }



.style11 {font-size: 16px}



.style12 {



color: #333;



font-size: 20px;



padding: 0 0 9px;



font-family: "Roboto Condensed", "Lucida Grande", Helvetica, sans-serif;



font-weight: bold;



}



.stitle1 {



font-family: Arial, Helvetica, sans-serif;



font-size: 34px;



font-weight: bold;



color: #147EA7;



}



.style13 {font-size: 10px}



.style16 {padding: 0 0 9px; font-family: "Roboto Condensed", "Lucida Grande", Helvetica, sans-serif; font-weight: bold; color: #333;}



.style18 {



color: #333;



font-weight: bold;



}



</style>



<title>KQUEST Store Insights</title>



<?php 







if (isset($_POST["change_header"])) {	$change_header = $_POST["change_header"];} else $change_header = "Trade Area Summary";



if (isset($_POST["change_title"])) {	$change_title = $_POST["change_title"];} else $change_title = "Store #" . $store_number . "," . $store_name;



$change_title2 = $change_title;



if (strlen($change_title2) > 50) {



$change_title2a = substr($change_title2, 0, 50);



$change_title2 = substr($change_title2a, 0, strrpos($change_title2a, ' ')) . "..."; 



}



$now = new DateTime(); $change_date = $now->format('F Y');



$time1['start'] = microtime(true);



if (isset($_POST["change_prepared"])) {	$change_prepared = $_POST["change_prepared"];} else $change_prepared = "Produced by: " . $user_firstname . " " . $user_lastname . " - " . $change_date;







include 'db_connect.php'; 







$saved_vals_yn = 0;



$query = "Select * FROM amfd_savedvals WHERE store_uid = $store_uid and report_uid = 0 ";



if ($result = mysqli_query($link, $query)) {



while ($row = mysqli_fetch_assoc($result)) {



	$saved_vals_yn = 1;



	if($row['agg_name'] == "summary") $demo['summary_list'] = $row['agg_list'];



	if($row['agg_name'] == "segment") $demo['segment_list'] = $row['agg_list'];



	if($row['agg_name'] == "media") $demo['media_list'] = $row['agg_list'];



	if($row['agg_name'] == "mfd_homes") $demo['mfd_homes_list'] = $row['agg_list'];



	if($row['agg_name'] == "leisure") $demo['leisure_list'] = $row['agg_list'];



	if($row['agg_name'] == "flyer") $demo['flyer_list'] = $row['agg_list'];



	if($row['agg_name'] == "spending") $demo['spending_list'] = $row['agg_list'];



	if($row['agg_name'] == "internet") $demo['internet_list'] = $row['agg_list'];



	if($row['agg_name'] == "np") $demo['np_list'] = $row['agg_list'];



	if($row['agg_name'] == "radio") $demo['radio_list'] = $row['agg_list'];



	if($row['agg_name'] == "tv1") $demo['tv1_list'] = $row['agg_list'];



	if($row['agg_name'] == "leisure2") $demo['leisure2_list'] = $row['agg_list'];



	if($row['agg_name'] == "flyer1") $demo['flyer1_list'] = $row['agg_list'];



	if($row['agg_name'] == "auto") $demo['auto_list'] = $row['agg_list'];



	if($row['agg_name'] == "improve") $demo['improve_list'] = $row['agg_list'];







}				



mysqli_free_result($result);



}











// get PC list and post into temp table



$files_loaded_count = 0;



$pc_name = "";



$pc_count = 0;



$pc_posted_count = 0;







if($saved_vals_yn  < 1) {



	$query = "SELECT * FROM amfd_pclist pclist WHERE pclist.store_uid = $store_uid ";



	if ($result = mysqli_query($link, $query)) {



	while ($row = mysqli_fetch_assoc($result)) {



		$files_loaded_count = $files_loaded_count + 1;



		$temp_row_pc = strtoupper($row['PostCode']);



		$pc_name .= "(" . $store_uid . ", '" . $temp_row_pc . "'),";



		$pc_count = $pc_count +1; 



		// upload for every 5000 records



			if($pc_count >5000) {



			$pc_post[$pc_posted_count] = rtrim($pc_name, ",");



			$pc_count = 0;



			$pc_name = "";



			$pc_posted_count = $pc_posted_count + 1;					 



			}  



	}}



	if($pc_count >0) {



			$pc_post[$pc_posted_count] = rtrim($pc_name, ",");				 



			}  







}



include 'db_connect_wg.php'; 



// get lat lon of store



$query = "Select lat, lon FROM c_geo WHERE PostCode = '$store_pc' LIMIT 1";



if ($result = mysqli_query($link, $query)) {



while ($row = mysqli_fetch_assoc($result)) {



$temp_ethnic_lat = $row['lat'];



$temp_ethnic_lon = $row['lon'];



$PostCode = $store_pc_array[$count_dwi]; 







$temp_counter = $temp_counter +1;



}				



mysqli_free_result($result);



}



$start_lat = $temp_ethnic_lat;



$start_lon = $temp_ethnic_lon;



$start_zoom = 12;



if($saved_vals_yn  < 1) {







	// transfer old postal codes to temp table



	mysqli_query('TRUNCATE TABLE amd_temp_pc');



	



		



	for ( $i = 0; $i < sizeof($pc_post); $i ++) {	



		$temp_row = $pc_post[$i];







		mysqli_query($link,"INSERT INTO amd_temp_pc (store_uid, POSTCODE) VALUES $temp_row ");



					}



	// now test that pc are uploaded in temp table _______________________________________________>



	



include 'old_get_storema.php'; 











include 'db_connect.php'; 



if($demo['summary'][0] > 0) {



	$demo['summary_list'] = implode(",", $demo['summary']);	



	$demo['segment_list'] = implode(",", $demo['segment']);



	$demo['media_list'] = implode(",", $demo['media']);



	$demo['mfd_homes_list'] = implode(",", $demo['mfd_homes']);



	$demo['leisure_list'] = implode(",", $demo['leisure']);



	$demo['flyer_list'] = implode(",", $demo['flyer']);



	$demo['spending_list'] = implode(",", $demo['spending']);



	$demo['internet_list'] = implode(",", $demo['internet']);



	$demo['np_list'] = implode(",", $demo['np']);



	$demo['radio_list'] = implode(",", $demo['radio']);



	$demo['tv1_list'] = implode(",", $demo['tv1']);



	$demo['leisure2_list'] = implode(",", $demo['leisure2']);



	$demo['flyer1_list'] = implode(",", $demo['flyer1']);	



	$demo['auto_list'] = implode(",", $demo['auto']);



	$demo['improve_list'] = implode(",", $demo['improve']);



	



	$temp_val_insert = $demo['summary_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'summary', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['segment_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'segment', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['media_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'media', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['mfd_homes_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'mfd_homes', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['leisure_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'leisure', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['flyer_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'flyer', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['spending_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'spending', '$temp_val_insert') ");







$temp_val_insert = $demo['internet_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'internet', '$temp_val_insert') ");







$temp_val_insert = $demo['np_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'np', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['radio_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'radio', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['tv1_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'tv1', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['leisure2_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'leisure2', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['flyer1_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'flyer1', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['auto_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'auto', '$temp_val_insert') ");



	



	$temp_val_insert = $demo['improve_list']; 



	mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'improve', '$temp_val_insert') ");







}}







$time1['agg'] = microtime(true);



if($saved_vals_yn  >0) {



	$demo['summary'] = explode(",", $demo['summary_list']);



	$demo['segment'] = explode(",", $demo['segment_list']);



	$demo['media'] = explode(",", $demo['media_list']);



	$demo['mfd_homes'] = explode(",", $demo['mfd_homes_list']);



	$demo['leisure'] = explode(",", $demo['leisure_list']);



	$demo['flyer'] = explode(",", $demo['flyer_list']);



	$demo['spending'] = explode(",", $demo['spending_list']);



	$demo['internet'] = explode(",", $demo['internet_list']);



	$demo['np'] = explode(",", $demo['np_list']);



	$demo['radio'] = explode(",", $demo['radio_list']);



	$demo['tv1'] = explode(",", $demo['tv1_list']);



	$demo['leisure2'] = explode(",", $demo['leisure2_list']);



	$demo['flyer1'] = explode(",", $demo['flyer1_list']);



	$demo['auto'] = explode(",", $demo['auto_list']);



	$demo['improve'] = explode(",", $demo['improve_list']);







}











include 'db_connect.php'; 



include 'from_array_to_storema.php'; 











if($rbenchmark > 15) include 'rbench_vals.php'; else include 'rbench_prov.php';



include 'old_storema_vals.php'; 







?>



<?php 



// income chart



?>



<script type="text/javascript">



google.load("visualization", "1", {packages:["corechart"]});



google.setOnLoadCallback(drawChart);



function drawChart() {



var data3 = google.visualization.arrayToDataTable([



['Income Band', 'Percent'],



['<$30k',<?php echo number_format($inc030p); ?>],



['$30-70k',<?php echo number_format($inc3070p); ?>],



['$70-100k',<?php echo number_format($inc70100p); ?>],



['$100k+',<?php echo number_format($inc100p); ?>],



]);



var options3 = {



legend: {position: 'top', maxLines: 2, textStyle: {fontSize: 16}},



is3D: true,



};



var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));



chart.draw(data3, options3);



}







google.setOnLoadCallback(drawChart2);



function drawChart2() {



var data2 = google.visualization.arrayToDataTable([



['Ethnicity', 'Percent'],



['Caucasian',<?php echo number_format($MN_WHITEp); ?>],



['South Asian',<?php echo number_format($MN_SASIANp); ?>],



['Chinese',<?php echo number_format($MN_CHINESEp); ?>],



['Other',<?php echo number_format($MN_VISp-$MN_SASIANp-$MN_CHINESEp); ?>]



]);



var options2 = {



legend: {position: 'top', maxLines: 2, textStyle: {fontSize: 16}},



is3D: true,



};



var chart2 = new google.visualization.PieChart(document.getElementById('piechart_3d2aa'));



chart2.draw(data2, options2);



}







function initialize() {



var latlng = new google.maps.LatLng(<?php echo $start_lat;?>, <?php echo $start_lon;?>);



var myOptions = {



zoom: <?php echo $start_zoom; ?>,



center: latlng,



mapTypeId: google.maps.MapTypeId.ROADMAP,



navigationControl: true,



scaleControl: true



};



var map = new google.maps.Map(document.getElementById("map"), myOptions);







var image_store = 'pin_blue.png';



var markers = [];



var markers2 = [];



var markers3 = [];



var marker3 = new google.maps.Marker({



position: new google.maps.LatLng(<?php echo $start_lat;?>, <?php echo $start_lon;?>),



map: map,



icon: image_store



});



markers3.push(marker3); 







<?php 



if($radius_yn > 0) {



echo "var radius_size = " . $rp_radius_in_km . ";



var populationOptionsAgain = {



 strokeColor: '#FF0000',



      strokeOpacity: 0.5,



      strokeWeight: 2,



      fillColor: '#FF0000',



      fillOpacity: 0.35,



  map: map,



  center: latlng,



  radius: radius_size



};







cityCircle = new google.maps.Circle(populationOptionsAgain);



cityCircle.setMap(map);



placeMarker();";







}



?>







	  



}



</script>



<title>KQUEST Market Area Report</title>



</head>



<body  onLoad='initialize();'>







<div class="no-print">



<div id="page-wrap">



<form action="" method="post">



<div align='center'>  



<label for="change_title"></label>



<table width="100%" border="0" cellspacing="0" cellpadding="0">



<tr>



<td width="48%" class="black18"><strong>



<input name="change_header" type="text" class="black14" id="change_header" value="<?php echo $change_header; ?>" size="50" maxlength="150">



<br />



<input name="change_title" type="text" class="black14" id="change_title" value="<?php echo $change_title; ?>" size="50" maxlength="150">



<br>



<input name="change_prepared" type="text" class="black14" id="change_prepared" value="<?php echo $change_prepared; ?>" size="50" maxlength="75">



<br />



<input name="change_title_but1" type="submit" class="bg_color2" id="change_title_but1"  onClick="TITLEsubmit2(<?php echo $store_uid ; ?>);" value="Change Title" />

</strong></td>



<td width="52%" align="right"><p>



  <select id="myBench" class="pbodyemp"  onchange="list_bench()">



			<option  disabled selected>Comparison Base</option>



           <option value="0">Canada</option>



        <option value="8">Western Canada</option>



        <option value="1">--- British Columbia</option>



        <option value="2">--- Alberta</option>



        <option value="3">--- Saskatchewan</option>



        <option value="4">--- Manitoba</option>



        <option value="5">Ontario</option>



        <option value="6">Quebec</option>



        <option value="7">Atlantic Provinces</option>



        <option value="9">--- P.E.I.</option>



        <option value="10">--- New Brunswick</option>



        <option value="11">--- Nova Scotia</option>



        <option value="12">--- Newfoundland</option>



        <option  disabled >My Stores</option>



            



 <?php 



	$found_bench_yn = 0;



	$query = "Select store_uid FROM amfd_savedvals WHERE report_uid = 0 and agg_name = 'summary' and company_uid = $client_id ";



if ($result = mysqli_query($link, $query)) {



while ($row = mysqli_fetch_assoc($result)) {



	$found_bench_yn = 1;



	$bench_store_id_list[] = $row['store_uid'];



	}				



}



for ( $i = 0; $i < sizeof($bench_store_id_list); $i ++) {



$temp_bench_store_id = $bench_store_id_list[$i];



	$query = "Select * FROM amfd_stores WHERE store_uid = $temp_bench_store_id ";



	if ($result = mysqli_query($link, $query)) {



	while ($row = mysqli_fetch_assoc($result)) {



		$bench_store_uid = $row['store_uid'];



		$bench_store_name = $row['store_name'];



		$bench_store_number = $row['store_number'];



		echo "<option value='" . $bench_store_uid . "'>Store: " . $bench_store_number . " - " . $bench_store_name . "</option>";



		



		}				



	}



}



?>



        </select>







</p>



  <p>



    <select id="myReport" class="pbodyemp"   onchange="list_report(val)";>



			<option  disabled selected>Report to View</option>



            <option value="0">Summary Report</option>



            <option value="2">Demographics</option>



            <option value="4">Spending</option>



            <option value="5">Media</option>



            <option value="6">Lifestyle</option>



            <option value="7">Automotive</option>



            <option value="8">Home Improvement</option>



        </select>



    <br />



    <br />

    <input name="change_report" type="submit" class="bg_color2" id="change_report"  onClick="change_report(<?php echo $store_uid ; ?>);document.forms[0].submit();" value="Update Report" />



  </p></td>



</tr>



</table>



</div> 



<input name="report_uid" type="hidden" id="report_uid" value="<?php echo $report_uid*3571; ?>">



<input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid; ?>">



<input name="roi_totalhh" type="hidden" id="roi_totalhh" value="<?php echo $total_households; ?>">



<input type="hidden" name="roi_scores" id="roi_scores" value="<?php echo $decile_score_list; ?>">



<input type="hidden" name="roi_avgscore" id="roi_avgscore" value="<?php echo $average_score_in_area; ?>">



<input type="hidden" name="roi_20hh" id="roi_20hh" value="<?php echo $total_households*0.2; ?>">



<input type="hidden" name="detail_show" id="detail_show" value="0">



<input type="hidden" name="rbenchmark" id="rbenchmark" value="<?php echo $rbenchmark; ?>">



</form>



</div>



</div> <!-- end of no print -->



<div id="proc_div" style="display: none;"><img src="please_wait.gif" width="572" height="304" alt="processing"></div>







<?php 



/// selecvt the agg anbd pages to view 



if ($detail_show == 0) include 'ui_tasummary.php'; 







// demographics



if ( $detail_show == 2) { include "ui_detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div id='page-wrap'>";  include "ui_detail2ta.php"; echo "</div"; }



 



 // spending 



 if ( $detail_show == 4) { include "ui_detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div id='page-wrap'>";  include "ui_detail4ta.php"; echo "</div"; }



    



  // Media 



 if ( $detail_show == 5) {  include "ui_detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div id='page-wrap'>";  include "ui_detail5ta.php"; echo "</div"; }







  // lifestyle



 if ( $detail_show == 6) { include "ui_detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div id='page-wrap'>";  include "ui_detail6ta.php"; echo "</div"; }



 



    // Automotive



 if ( $detail_show == 7) { include "ui_detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div id='page-wrap'>";  include "ui_detail8ta.php"; echo "</div"; }



 



      // iMPROVE



 if ( $detail_show == 8) { include "ui_detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div id='page-wrap'>";  include "ui_detailhhta.php"; echo "</div"; }



  



 



  ?>



</body>