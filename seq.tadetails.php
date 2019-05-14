<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

//$color = $_POST['colorval'];
if (isset($_POST["retailer_submap"])) {	$retailer_submap = $_POST["retailer_submap"];} else $retailer_submap = 0;
if (isset($_POST["retailer_catmap"])) {	$retailer_catmap = $_POST["retailer_catmap"];} else $retailer_catmap = 0;
$display_cat_name = "";
?>

<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?client=gme-marketfocus&v=3.30"></script>
  

<script type='text/javascript' src='https://www.google.com/jsapi'></script>

<script>
function seq_targeting1() {

	var js_original_store = document.getElementById('original_store').value;
 //alert(js_original_store);
	document.getElementById('store_uid').value = js_original_store;
	document.getElementById('store_selected').value = js_original_store;
 
	document.getElementById('next_page').value = "ui_seqtarget_select.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 
}
</script>

<style>

.no-print {
    width: 100%;
    margin-left: 10%;
}
.col-md-4 {
    width: 20.333%;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}

#iw-container  .iw-title_retailer {
   font-family: 'Open Sans Condensed', sans-serif;
   font-size: 18px;
   font-weight: 600;
   padding: 10px;
   text-align:center;
   background-color: #000080;
   color: white;
   margin: 1px;
   border-radius: 2px 2px 0 0; /* In accordance with the rounding of the default infowindow corners. */
}


body {
background-color: #FFFFFF;
margin: 0 auto;
}

div.page { page-break-after: always }
.print_pages {
width: 900px;
height: 625px;
background: #fff;
margin: auto;
-webkit-border-radius: 6px;
border-radius: 6px;
-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}
.print_pages_last {
width: 910px;
height: 625px;
background: #fff;
margin: 25px 0 0 0;
-webkit-border-radius: 6px;
border-radius: 6px;
-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
border-style: groove;
border-width: 2px;
}
@media print {
.pagebreak {page-break-after: always;}
 
 
}

@media print {

	.no-print {

		display: none !important;

	}

}
@media print {
div.noprint {display:none;}
.last_page {
		  page-break-after: avoid;
        page-break-inside: avoid;
		  
	  }
}
.print_pages:first-child {
    page-break-before: avoid;
}

</style>
<style type="text/css" media="print">
      .print_pages
      {
        page-break-after: always;
        page-break-inside: avoid;
      }
	  .last_page {
		  page-break-after: avoid;
        page-break-inside: avoid;
		  
	  }
    </style>
<?php
$user_uid = $user_id;
if (isset($_POST["store_selected"])) {	$store_uid = $_POST["store_selected"];} else $store_uid = " ";
if (isset($_POST["rbenchmark"])) {	$rbenchmark = $_POST["rbenchmark"];} else $rbenchmark = 0;
if (isset($_POST["detail_show"])) {	$detail_show = $_POST["detail_show"];} else $detail_show = 0;
include 'db_connect.php'; 

$use_yn = 3;	// default regular store profile

$store_to_map = $store_uid ;

//code added by Urvashi 16-4-2019

$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
        if ($result = mysqli_query($link, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                       $store_name = $row['store_name'];
                       $store_number = $row['store_number'];
                       $original_store_uid = $row['master_file'];
                       $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
                }                
            mysqli_free_result($result);
        }

if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
        if ($result = mysqli_query($link, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                       $store_name = $row['store_name'];
                       $store_number = $row['store_number'];
                       $original_store_uid = $row['master_file'];
                       $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
                }                
            mysqli_free_result($result);
        }
}   
if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
        if ($result = mysqli_query($link, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                       $store_name = $row['store_name'];
                       $store_number = $row['store_number'];
                       $original_store_uid = $row['master_file'];
                       $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
                }                
            mysqli_free_result($result);
        }
}    
if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
        if ($result = mysqli_query($link, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                       $store_name = $row['store_name'];
                      $store_number = $row['store_number'];
                       $original_store_uid = $row['master_file'];
                       $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
                }                
            mysqli_free_result($result);
        }
}    







$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid  ORDER BY store_number ";
	if ($result = mysqli_query($link, $query)) {
	while ($row = mysqli_fetch_assoc($result)) {
		$temp_store_pc = $row['store_pc'];
		$temp_store_pc = str_replace(' ', '', $temp_store_pc);
		$store_pc = preg_replace("/[^a-zA-Z0-9]+/", "", $temp_store_pc);
		$client_id = $row['client_id'];
		$kml_id = $row['kml_id'];
		//$store_number = $row['store_number'];
		//$store_name = $row['store_name'];
		$store_pc = $row['store_pc'];
		$radius_yn = $row['radius_yn'];
		$rp_radius = $row['rp_radius'];
		$map_rp_poly = $row['rp_poly'];
		$map_poly_yn = $row['poly_yn'];
		
		$seq_deciles = $row['seq_deciles'];
		
		$use_yn = $row['use_yn'];		// 5 means sequential
		$master_file = $row['master_file'];		// id of original store
		$trait_name = $row['trait_name'];		// vars used for this targeting
		$store_notes = $row['store_notes'];		// includes "targeted" + variable name used for filter

		
	}
	}
$client_use_logo = 0;
$query = "SELECT * FROM amfd_company WHERE client_id = $client_id";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$client_use_logo = $row['client_use_logo'];
				$client_logo = $row['client_logo'];
		}}


$map_zoom_level = 11;
$rp_radius_array = explode(",", $rp_radius);
$rp_radius_in_km = $rp_radius_array[0];
if($rp_radius_in_km > 10) $map_zoom_level = 12;
if($rp_radius_in_km > 1000) $map_zoom_level = 11;
if($rp_radius_in_km > 5000) $map_zoom_level = 10;
if($rp_radius_in_km > 9999) $map_zoom_level = 8;
$poly_latlon = "";
if($map_poly_yn == 1) {
$map_rp_poly = ltrim($map_rp_poly, "(");
$map_rp_poly = rtrim($map_rp_poly, ")");
$map_rp_poly = str_replace("),(","|",$map_rp_poly);
$array_map_rp_poly = explode("|", $map_rp_poly);
$array_map_rp_poly[] = $array_map_rp_poly[0];
for ($i=1; $i < sizeof($array_map_rp_poly); $i++) {
$templatlon = $array_map_rp_poly[$i];
$templatlon = str_replace(",",", lng: ",$templatlon);
$poly_latlon = $poly_latlon . "{lat: " . $templatlon . "}, ";
}
$poly_latlon = rtrim($poly_latlon, ", ");	
}
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
document.getElementById('proc_div').style.display = 'none';
}
function TADETAILsubmit0(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 0;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
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
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function detail_show0(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 0;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function detail_show2(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 2;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function change_report2() {
document.getElementById('detail_show').value = 10;
document.getElementById('next_page').value = "seq.tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();	
document.getElementById('proc_div').style.display = 'none';
}
function change_report(val) {
document.getElementById('next_page').value = "seq.tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();	
document.getElementById('proc_div').style.display = 'none';
}
function detail_show3(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 3;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function detail_show4(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 4;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function detail_show5(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 5;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function detail_show6(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 6;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function detail_show7(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 7;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function detail_show9(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 9;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function TITLEsubmit2(val) {
document.getElementById('store_selected').value = val;
document.getElementById('next_page').value = "seq.tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();
document.getElementById('proc_div').style.display = 'none';
}
function view_description() {
var win = window.open('segment_descriptions.php', '_blank');
win.focus();
}
</script>
<style type="text/css">


.container row col-md-12 print_pages {page-break-after: always}
.print_pages {page-break-after: always}
div.page { page-break-after: always }

div.page:last-child { page-break-after: avoid }
div.page { page-break-before: auto }
.lifestyle{
page-break-after: avoid !important;
page-break-before: avoid !important;
}
.dgr{ page-break-before: avoid }
.page-wrap {
    width: 900px;
    margin: 0 auto;
}

.container row col-md-12 print_pages:first-child { page-break-before: avoid }

.container row col-md-12 print_pages:nth-child(2n) { page-break-after: avoid }
div.page:first-child { page-break-before: avoid }
.print_pages:first-child { page-break-before: avoid }

.tai1  { page-break-before: avoid }

.tgdr {

    page-break-after: avoid !important;
}
.lsa{page-break-after: avoid}
.retail{ page-break-before: avoid }
#page-wrap:nth-child(2n){ page-break-after: avoid }
#page-wrap:nth-child(2n){ page-break-after: avoid }
#page-wrap:first-child{
    page-break-after: avoid;
    page-break-before: avoid;
}


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
background-color: #990033;
}

.print_pages {
width: 910px;
height: 635px;
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
color: #990033;
}
.black141 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #333;
font-size: 14px;
font-weight: normal;
padding: 0 0 9px;
}
.blue22 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #990033;
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
color: #990033 !important;
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
font-weight: normal;
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
if (isset($_POST["change_header"])) {	$change_header = $_POST["change_header"];} 
	else { 
	
	$change_header = "Trade Area Summary";
	
	if($use_yn == 5) $change_header = "Sequential Targeting";
	if($store_uid >= 898 && $store_uid <= 942) $change_header = "Regional Summary"; 	
	}
	
if (isset($_POST["change_title"])) {	$change_title = $_POST["change_title"];} 
	else {
		$change_title = "Store: #" . $store_number . "," . $store_name;
		if($store_uid >= 898 && $store_uid <= 942) $change_title = $store_name; 	
	}

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
$saved_vals_yn = 1;															// 1 data already saved 0 need to run	
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
	if($row['agg_name'] == "rest") $demo['rest_list'] = $row['agg_list'];
	
	if($row['agg_name'] == "grocery") $demo['grocery_list'] = $row['agg_list'];
	if($row['agg_name'] == "dept") $demo['dept_list'] = $row['agg_list'];
	if($row['agg_name'] == "cv") $demo['cv_list'] = $row['agg_list'];
	if($row['agg_name'] == "drug") $demo['drug_list'] = $row['agg_list'];
	if($row['agg_name'] == "clothing") $demo['clothing_list'] = $row['agg_list'];
	if($row['agg_name'] == "shoe") $demo['shoe_list'] = $row['agg_list'];
	if($row['agg_name'] == "book") $demo['book_list'] = $row['agg_list'];
	if($row['agg_name'] == "jewel") $demo['jewel_list'] = $row['agg_list'];
	if($row['agg_name'] == "furn") $demo['furn_list'] = $row['agg_list'];
	if($row['agg_name'] == "home") $demo['home_list'] = $row['agg_list'];		
	if($row['agg_name'] == "eye") $demo['eye_list'] = $row['agg_list'];
	if($row['agg_name'] == "glasses") $demo['glasses_list'] = $row['agg_list'];
	if($row['agg_name'] == "elect") $demo['elect_list'] = $row['agg_list'];
	if($row['agg_name'] == "office") $demo['office_list'] = $row['agg_list'];
	if($row['agg_name'] == "sport") $demo['sport_list'] = $row['agg_list'];	
	if($row['agg_name'] == "toy") $demo['toy_list'] = $row['agg_list'];
	if($row['agg_name'] == "pet") $demo['pet_list'] = $row['agg_list'];
	if($row['agg_name'] == "pet_own") $demo['pet_own_list'] = $row['agg_list'];
	if($row['agg_name'] == "type_r") $demo['type_r_list'] = $row['agg_list'];
	if($row['agg_name'] == "type_o") $demo['type_o_list'] = $row['agg_list'];
}				
mysqli_free_result($result);
}

// check new modules 
$mod_agehomes = 0;
$mod_rest = 0;
$new_mods = 0;
$mod_grocery = 0;
$mod_clothing = 0;
$mod_book = 0;
$mod_eye = 0;
$mod_toy = 0;

$query = "Select * FROM amfd_savedvals WHERE store_uid = $store_uid and report_uid = 0 ";
	if ($result = mysqli_query($link, $query)) {
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['agg_name'] == "agehomes") { 
			$mod_agehomes = 1; 
			$demo['agehomes_list'] = $row['agg_list']; 			
			$demo['agehomes'] = explode(",", $demo['agehomes_list']);
		}
		if($row['agg_name'] == "rest") { 
			$mod_rest = 1; 
		}
		if($row['agg_name'] == "grocery") {   // 1 data already saved 0 need to run
			$mod_grocery = 1; 
		}
		if($row['agg_name'] == "clothing") { 
			$mod_clothing = 1; 
		}
		if($row['agg_name'] == "book") { 
			$mod_book = 1; 
		}
		if($row['agg_name'] == "eye") { 
			$mod_eye = 1; 
		}
		if($row['agg_name'] == "toy") { 
			$mod_toy = 1; 
		}
	}}

if($mod_agehomes > 0 && $mod_rest > 0 && $mod_grocery > 0 && $mod_grocery > 0 && $mod_clothing > 0 && $mod_book > 0 && $mod_eye > 0 && $mod_toy > 0) { $new_mods = 1; }	// 1 data already saved 0 need to run


// get PC list and post into temp table
$files_loaded_count = 0;
$pc_name = "";
$pc_count = 0;
$pc_posted_count = 0;
$PostCodearray_list ="";
if($saved_vals_yn  < 1 || $new_mods  < 1) {
	$query = "SELECT * FROM amfd_pclist pclist WHERE pclist.store_uid = $store_to_map ";
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
		$files_loaded_count = $files_loaded_count + 1;
		$temp_row_pc = strtoupper($row['PostCode']);
		$pc_name .= "(" . $store_uid . ", '" . $temp_row_pc . "'),";
		if($use_yn == 5 && $files_loaded_count < 4000) { $PostCodearray_list .= $temp_row_pc . ","; }
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

$original_store = $store_uid;	

// sequential - get Postal code list
$PostCodearray_yn = 0;
if($use_yn == 5) { 
	$query = "Select * FROM amfd_savedvals WHERE store_uid = $store_to_map and report_uid = 0 ";
	if ($result = mysqli_query($link, $query)) {
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['agg_name'] == "PostCodearray") { 
			$PostCodearray_yn = 1; 
			$PostCodearray_list = $row['agg_list']; 			
							// get PostCodearray if found
		}
	}}
	
	if($PostCodearray_yn < 1 && $files_loaded_count > 1 ) {	// add PostCodearray if not found
		$PostCodearray_list = rtrim($PostCodearray_list, ",");
		$temp_val_insert = $PostCodearray_list; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_to_map, 'PostCodearray', '$temp_val_insert') ");
		$PostCodearray_yn = 1; 
	}
	
	
	
	
	if($PostCodearray_yn < 1) {				// query for old files where pc list was not added
		$files_loaded_count = 0;
		$PostCodearray_list = "";
			
			$query = "SELECT * FROM amfd_pclist pclist WHERE pclist.store_uid = $store_to_map ";
			if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
				$files_loaded_count = $files_loaded_count + 1;
				
				if($files_loaded_count < 5000) {		// max postal codes at 1000
					$temp_row_pc = strtoupper($row['PostCode']);
					$PostCodearray_list .= $temp_row_pc . ","; 
				}
				
			}}
		if($files_loaded_count >0) { 
				$PostCodearray_list = rtrim($PostCodearray_list, ",");
				$temp_val_insert = $PostCodearray_list; 
				mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_to_map, 'PostCodearray', '$temp_val_insert') ");
				$PostCodearray_yn = 1; 
		}
	} 


	
	
	
	
	
	
	$PostCodearray['pc'] = explode(",", $PostCodearray_list);
	
	// get original store_uid
	$original_store = $store_uid;
	$found_new_original_store = 0;
	$temp_original_store = 0;
		$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
			if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					$temp_original_store = $row['master_file'];
					if($temp_original_store > 0) {
						$original_store = $temp_original_store;
						$found_new_original_store = 1;	
					}
			}}
			
			if($found_new_original_store > 0) {
				$temp_original_store = 0;
				
			$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store ";
				if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$temp_original_store = $row['master_file'];
						if($temp_original_store > 0) {
							$original_store = $temp_original_store;
							$found_new_original_store = 2;	
						}
				}}
			}
			
			if($found_new_original_store > 1) {
				$temp_original_store = 0;
				
				$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store ";
				if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$temp_original_store = $row['master_file'];
						if($temp_original_store > 0) {
							$original_store = $temp_original_store;
							$found_new_original_store = 3;	
						}
				}}
			}
	
	
	
	
	
	
	
}





include 'db_connect_wg.php'; 
// get lat lon of store
// updated august 28 2018 c_geo to amfd_homes_current
$query = "Select lat, lon FROM amfd_homes_current WHERE PostCode = '$store_pc' LIMIT 1";
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
$start_zoom = $map_zoom_level;
if($store_uid >= 898 && $store_uid <= 942) $start_zoom = 7;

if($saved_vals_yn  < 1 || $new_mods  < 1) {
// transfer old postal codes to temp table
mysqli_query($link,"TRUNCATE TABLE amd_temp_pc");
	for ( $i = 0; $i < sizeof($pc_post); $i ++) {	
	$temp_row = $pc_post[$i];
	mysqli_query($link,"INSERT INTO amd_temp_pc (store_uid, POSTCODE) VALUES $temp_row ");
	}
}
if($saved_vals_yn  < 1) {		// there are no saved values found - insert var values for all data
	// now test that pc are uploaded in temp table _______________________________________________>
	include 'old_get_storema.php'; 
	$mod_rest = 1;
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
		$demo['rest_list'] = implode(",", $demo['rest']);
		$demo['grocery_list'] = implode(",", $demo['grocery']);
		$demo['dept_list'] = implode(",", $demo['dept']);
		$demo['cv_list'] = implode(",", $demo['cv']);
		$demo['drug_list'] = implode(",", $demo['drug']);
		$demo['clothing_list'] = implode(",", $demo['clothing']);
		$demo['shoe_list'] = implode(",", $demo['shoe']);
		$demo['book_list'] = implode(",", $demo['book']);
		$demo['jewel_list'] = implode(",", $demo['jewel']);
		$demo['furn_list'] = implode(",", $demo['furn']);
		$demo['home_list'] = implode(",", $demo['home']);
		$demo['eye_list'] = implode(",", $demo['eye']);
		$demo['glasses_list'] = implode(",", $demo['glasses']);
		$demo['elect_list'] = implode(",", $demo['elect']);
		$demo['office_list'] = implode(",", $demo['office']);
		$demo['sport_list'] = implode(",", $demo['sport']);
		$demo['toy_list'] = implode(",", $demo['toy']);
		$demo['pet_list'] = implode(",", $demo['pet']);
		$demo['pet_own_list'] = implode(",", $demo['pet_own']);
		$demo['type_r_list'] = implode(",", $demo['type_r']);
		$demo['type_o_list'] = implode(",", $demo['type_o']);
		
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
		$temp_val_insert = $demo['rest_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'rest', '$temp_val_insert') ");
		
	}
	
	//echo "<br /><br />brad testing (not on live site) : numbers should appear ONLY for new trade areas ---->";
//print_r($demo['rest']);
}


// new mods
if($mod_agehomes  < 1) {
	for ($i=0; $i < 15; $i++) {
		$demo['agehomes'][$i] = 0;
	}
	
	include 'db_connect_wg.php'; 
	// updated august 28 2018 -> amfd_homes to amfd_homes_current
	$query = "SELECT 
	 SUM(home.homes) as homes, birthyear
	 FROM amfd_homes_current home, amd_temp_pc pclist 
	 WHERE pclist.store_uid = $store_uid and pclist.POSTCODE = home.PostCode 
	 GROUP BY birthyear";
	if ($result = mysqli_query($link, $query)) {
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['birthyear'] < 2012) $demo['agehomes'][0] = $row['homes'];
		if($row['birthyear'] == 2012) $demo['agehomes'][1] = $row['homes'];
		if($row['birthyear'] == 2013) $demo['agehomes'][2] = $row['homes'];
		if($row['birthyear'] == 2014) $demo['agehomes'][3] = $row['homes'];
		if($row['birthyear'] == 2015) $demo['agehomes'][4] = $row['homes'];
		if($row['birthyear'] == 2016) $demo['agehomes'][5] = $row['homes'];
		if($row['birthyear'] == 2017) $demo['agehomes'][6] = $row['homes'];
		if($row['birthyear'] == 2018) $demo['agehomes'][7] = $row['homes'];
	}}
	// updated august 28 2018 -> amfd_homes to amfd_homes_current
	$query = "SELECT 
	 SUM(home.apts) as apts, birthyear
	 FROM amfd_homes_current home, amd_temp_pc pclist 
	 WHERE pclist.store_uid = $store_uid and pclist.POSTCODE = home.PostCode 
	 GROUP BY birthyear";
	if ($result = mysqli_query($link, $query)) {
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['birthyear'] < 2012) $demo['agehomes'][8] = $row['apts'];
		if($row['birthyear'] == 2012) $demo['agehomes'][9] = $row['apts'];
		if($row['birthyear'] == 2013) $demo['agehomes'][10] = $row['apts'];
		if($row['birthyear'] == 2014) $demo['agehomes'][11] = $row['apts'];
		if($row['birthyear'] == 2015) $demo['agehomes'][12] = $row['apts'];
		if($row['birthyear'] == 2016) $demo['agehomes'][13] = $row['apts'];	
		if($row['birthyear'] == 2017) $demo['agehomes'][14] = $row['apts'];	
		if($row['birthyear'] == 2018) $demo['agehomes'][15] = $row['apts'];	
	}}
}

if($mod_rest  < 1) {
	
	include 'db_connect_wg.php'; 
	for ($i=0; $i <= 67; $i++) {
		$demo['rest'][$i] = 0;
	}

	$query = "SELECT 
		 SUM(c_weight.wPP15_) as wPP15_
		, SUM(rest.CF_TIME * wPP15_) as CF_TIME
		, SUM(rest.CF_CNTRY * wPP15_) as CF_CNTRY
		, SUM(rest.CF_DAVID * wPP15_) as CF_DAVID
		, SUM(rest.CF_DUNK * wPP15_) as CF_DUNK
		, SUM(rest.CF_BAGEL * wPP15_) as CF_BAGEL
		, SUM(rest.CF_MUFF * wPP15_) as CF_MUFF
		, SUM(rest.CF_SDCUP * wPP15_) as CF_SDCUP
		, SUM(rest.CF_STBCK * wPP15_) as CF_STBCK
		, SUM(rest.CF_TIM * wPP15_) as CF_TIM
		, SUM(rest.CF_TIMO * wPP15_) as CF_TIMO
		, SUM(rest.CF_OTH * wPP15_) as CF_OTH
		, SUM(rest.FF_AW * wPP15_) as FF_AW
		, SUM(rest.FF_ARBY * wPP15_) as FF_ARBY
		, SUM(rest.FF_BGKNG * wPP15_) as FF_BGKNG
		, SUM(rest.FF_DQUN * wPP15_) as FF_DQUN
		, SUM(rest.FF_DOMN * wPP15_) as FF_DOMN
		, SUM(rest.FF_HARV * wPP15_) as FF_HARV
		, SUM(rest.FF_KFC * wPP15_) as FF_KFC
		, SUM(rest.FF_MCD * wPP15_) as FF_MCD
		, SUM(rest.FF_SUB * wPP15_) as FF_SUB
		, SUM(rest.FF_PIZZA * wPP15_) as FF_PIZZA
		, SUM(rest.FF_QUIZ * wPP15_) as FF_QUIZ
		, SUM(rest.FF_SUBW * wPP15_) as FF_SUBW
		, SUM(rest.FF_TACO * wPP15_) as FF_TACO
		, SUM(rest.FF_TACOT * wPP15_) as FF_TACOT
		, SUM(rest.FF_VALEN * wPP15_) as FF_VALEN
		, SUM(rest.FF_WENDY * wPP15_) as FF_WENDY
		, SUM(rest.FF_OTH * wPP15_) as FF_OTH
		, SUM(rest.RT_BOST * wPP15_) as RT_BOST
		, SUM(rest.RT_EARLS * wPP15_) as RT_EARLS
		, SUM(rest.RT_MARIO * wPP15_) as RT_MARIO
		, SUM(rest.RT_JACKA * wPP15_) as RT_JACKA
		, SUM(rest.RT_KEG * wPP15_) as RT_KEG
		, SUM(rest.RT_KELS * wPP15_) as RT_KELS
		, SUM(rest.RT_MILES * wPP15_) as RT_MILES
		, SUM(rest.RT_MONT * wPP15_) as RT_MONT
		, SUM(rest.RT_JOES * wPP15_) as RT_JOES
		, SUM(rest.RT_PZHUT * wPP15_) as RT_PZHUT
		, SUM(rest.RT_HUBT * wPP15_) as RT_HUBT
		, SUM(rest.RT_SWISS * wPP15_) as RT_SWISS
		, SUM(rest.RT_OTHC * wPP15_) as RT_OTHC
		, SUM(rest.RT_OTHF * wPP15_) as RT_OTHF
		, SUM(rest.RT_OTHPB * wPP15_) as RT_OTHPB
		, SUM(rest.RT_OTH_N * wPP15_) as RT_OTH_N
		, SUM(rest.RT_BREAK * wPP15_) as RT_BREAK
		, SUM(rest.RT_BURG * wPP15_) as RT_BURG
		, SUM(rest.RT_CASL * wPP15_) as RT_CASL
		, SUM(rest.RT_CHKN * wPP15_) as RT_CHKN
		, SUM(rest.RT_COFF * wPP15_) as RT_COFF
		, SUM(rest.RT_FDCRT * wPP15_) as RT_FDCRT
		, SUM(rest.RT_ICE * wPP15_) as RT_ICE
		, SUM(rest.RT_ORNTL * wPP15_) as RT_ORNTL
		, SUM(rest.RT_ITALN * wPP15_) as RT_ITALN
		, SUM(rest.RT_MEXIC * wPP15_) as RT_MEXIC
		, SUM(rest.RT_OETHN * wPP15_) as RT_OETHN
		, SUM(rest.RT_PIZZA * wPP15_) as RT_PIZZA
		, SUM(rest.RT_PUB * wPP15_) as RT_PUB
		, SUM(rest.RT_SEAFD * wPP15_) as RT_SEAFD
		, SUM(rest.RT_STKH * wPP15_) as RT_STKH
		, SUM(rest.RT_SANDW * wPP15_) as RT_SANDW
		, SUM(rest.RT_FORML * wPP15_) as RT_FORML
		, SUM(rest.RT_OTH_T * wPP15_) as RT_OTH_T
		, SUM(rest.RT_TKOUT * wPP15_) as RT_TKOUT
		, SUM(rest.RT_DLVY * wPP15_) as RT_DLVY
		, SUM(rest.RT_EATIN * wPP15_) as RT_EATIN
		, SUM(rest.RT_DRVTH * wPP15_) as RT_DRVTH
		, SUM(rest.RT_OLORD * wPP15_) as RT_OLORD
		
		FROM c_rest rest, amd_temp_pc pclist, c_weight c_weight WHERE rest.POSTCODE = pclist.POSTCODE AND c_weight.POSTCODE = pclist.POSTCODE AND pclist.store_uid = $store_uid";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {

				$demo['rest'][0] = $row['wPP15_'];	
				$demo['rest'][1] = $row['CF_TIME'];
				$demo['rest'][2] = $row['CF_CNTRY'];
				$demo['rest'][3] = $row['CF_DAVID'];
				$demo['rest'][4] = $row['CF_DUNK'];
				$demo['rest'][5] = $row['CF_BAGEL'];
				$demo['rest'][6] = $row['CF_MUFF'];
				$demo['rest'][7] = $row['CF_SDCUP'];
				$demo['rest'][8] = $row['CF_STBCK'];
				$demo['rest'][9] = $row['CF_TIM'];
				$demo['rest'][10] = $row['CF_TIMO'];
				$demo['rest'][11] = $row['CF_OTH'];
				$demo['rest'][12] = $row['FF_AW'];
				$demo['rest'][13] = $row['FF_ARBY'];
				$demo['rest'][14] = $row['FF_BGKNG'];
				$demo['rest'][15] = $row['FF_DQUN'];
				$demo['rest'][16] = $row['FF_DOMN'];
				$demo['rest'][17] = $row['FF_HARV'];
				$demo['rest'][18] = $row['FF_KFC'];
				$demo['rest'][19] = $row['FF_MCD'];
				$demo['rest'][20] = $row['FF_SUB'];
				$demo['rest'][21] = $row['FF_PIZZA'];
				$demo['rest'][22] = $row['FF_QUIZ'];
				$demo['rest'][23] = $row['FF_SUBW'];
				$demo['rest'][24] = $row['FF_TACO'];
				$demo['rest'][25] = $row['FF_TACOT'];
				$demo['rest'][26] = $row['FF_VALEN'];
				$demo['rest'][27] = $row['FF_WENDY'];
				$demo['rest'][28] = $row['FF_OTH'];
				$demo['rest'][29] = $row['RT_BOST'];
				$demo['rest'][30] = $row['RT_EARLS'];
				$demo['rest'][31] = $row['RT_MARIO'];
				$demo['rest'][32] = $row['RT_JACKA'];
				$demo['rest'][33] = $row['RT_KEG'];
				$demo['rest'][34] = $row['RT_KELS'];
				$demo['rest'][35] = $row['RT_MILES'];
				$demo['rest'][36] = $row['RT_MONT'];
				$demo['rest'][37] = $row['RT_JOES'];
				$demo['rest'][38] = $row['RT_PZHUT'];
				$demo['rest'][39] = $row['RT_HUBT'];
				$demo['rest'][40] = $row['RT_SWISS'];
				$demo['rest'][41] = $row['RT_OTHC'];
				$demo['rest'][42] = $row['RT_OTHF'];
				$demo['rest'][43] = $row['RT_OTHPB'];
				$demo['rest'][44] = $row['RT_OTH_N'];
				$demo['rest'][45] = $row['RT_BREAK'];
				$demo['rest'][46] = $row['RT_BURG'];
				$demo['rest'][47] = $row['RT_CASL'];
				$demo['rest'][48] = $row['RT_CHKN'];
				$demo['rest'][49] = $row['RT_COFF'];
				$demo['rest'][50] = $row['RT_FDCRT'];
				$demo['rest'][51] = $row['RT_ICE'];
				$demo['rest'][52] = $row['RT_ORNTL'];
				$demo['rest'][53] = $row['RT_ITALN'];
				$demo['rest'][54] = $row['RT_MEXIC'];
				$demo['rest'][55] = $row['RT_OETHN'];
				$demo['rest'][56] = $row['RT_PIZZA'];
				$demo['rest'][57] = $row['RT_PUB'];
				$demo['rest'][58] = $row['RT_SEAFD'];
				$demo['rest'][59] = $row['RT_STKH'];
				$demo['rest'][60] = $row['RT_SANDW'];
				$demo['rest'][61] = $row['RT_FORML'];
				$demo['rest'][62] = $row['RT_OTH_T'];
				$demo['rest'][63] = $row['RT_TKOUT'];
				$demo['rest'][64] = $row['RT_DLVY'];
				$demo['rest'][65] = $row['RT_EATIN'];
				$demo['rest'][66] = $row['RT_DRVTH'];
				$demo['rest'][67] = $row['RT_OLORD'];
		
		}}
}  // end run rest data

if($mod_grocery  < 1 && $detail_show == 12) {					//  grocery includes all sh1 - grocery dept (department) cv (convenience drug
	include 'db_connect_wg.php';  
	

		$query = "SELECT 
		 SUM(c_weight.wPP15_) as wPP15_
		, SUM(sh1.G_COOP * wPP15_) as G_COOP
		, SUM(sh1.G_IGA * wPP15_) as G_IGA
		, SUM(sh1.G_LOBLAW * wPP15_) as G_LOBLAW
		, SUM(sh1.G_MM * wPP15_) as G_MM
		, SUM(sh1.G_METRO * wPP15_) as G_METRO
		, SUM(sh1.G_PRVG * wPP15_) as G_PRVG
		, SUM(sh1.G_RLCAN * wPP15_) as G_RLCAN
		, SUM(sh1.G_SFWAY * wPP15_) as G_SFWAY
		, SUM(sh1.G_SOBEY * wPP15_) as G_SOBEY
		, SUM(sh1.G_DCGSNF * wPP15_) as G_DCGSNF
		, SUM(sh1.G_FINEFD * wPP15_) as G_FINEFD
		, SUM(sh1.G_WH * wPP15_) as G_WH
		, SUM(sh1.G_DEPT * wPP15_) as G_DEPT
		, SUM(sh1.G_DRGST * wPP15_) as G_DRGST
		, SUM(sh1.G_OL * wPP15_) as G_OL
		, SUM(sh1.G_OTH * wPP15_) as G_OTH
		, SUM(sh1.DP_CANT * wPP15_) as DP_CANT
		, SUM(sh1.DP_CSTC * wPP15_) as DP_CSTC
		, SUM(sh1.DP_GNTT * wPP15_) as DP_GNTT
		, SUM(sh1.DP_BAY * wPP15_) as DP_BAY
		, SUM(sh1.DP_SRS * wPP15_) as DP_SRS
		, SUM(sh1.DP_WLMRT * wPP15_) as DP_WLMRT
		, SUM(sh1.DP_OL * wPP15_) as DP_OL
		, SUM(sh1.DP_OTH * wPP15_) as DP_OTH
		
		, SUM(sh1.CV_7ELV * wPP15_) as CV_7ELV
		, SUM(sh1.CV_MAC * wPP15_) as CV_MAC
		, SUM(sh1.CV_GAS * wPP15_) as CV_GAS
		, SUM(sh1.CV_OTH * wPP15_) as CV_OTH
		
		, SUM(sh1.DR_IDA * wPP15_) as DR_IDA
		, SUM(sh1.DR_JN * wPP15_) as DR_JN
		, SUM(sh1.DR_LND * wPP15_) as DR_LND
		, SUM(sh1.DR_PHMSV * wPP15_) as DR_PHMSV
		, SUM(sh1.DR_PRXM * wPP15_) as DR_PRXM
		, SUM(sh1.DR_PHMPL * wPP15_) as DR_PHMPL
		, SUM(sh1.DR_SHPP * wPP15_) as DR_SHPP
		, SUM(sh1.DR_WH * wPP15_) as DR_WH
		, SUM(sh1.DR_GRCY * wPP15_) as DR_GRCY
		, SUM(sh1.DR_NHPRD * wPP15_) as DR_NHPRD
		, SUM(sh1.DR_OL * wPP15_) as DR_OL
		, SUM(sh1.DR_OTH * wPP15_) as DR_OTH


		
		FROM c_sh1 sh1, amd_temp_pc pclist, c_weight c_weight WHERE sh1.POSTCODE = pclist.POSTCODE AND c_weight.POSTCODE = pclist.POSTCODE AND pclist.store_uid = $store_uid";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
		
		$demo['grocery'][0] = $row['wPP15_'];	
		$demo['grocery'][1] = $row['G_COOP'];
		$demo['grocery'][2] = $row['G_IGA'];
		$demo['grocery'][3] = $row['G_LOBLAW'];
		$demo['grocery'][4] = $row['G_MM'];
		$demo['grocery'][5] = $row['G_METRO'];
		$demo['grocery'][6] = $row['G_PRVG'];
		$demo['grocery'][7] = $row['G_RLCAN'];
		$demo['grocery'][8] = $row['G_SFWAY'];
		$demo['grocery'][9] = $row['G_SOBEY'];
		$demo['grocery'][10] = $row['G_DCGSNF'];
		$demo['grocery'][11] = $row['G_FINEFD'];
		$demo['grocery'][12] = $row['G_WH'];
		$demo['grocery'][13] = $row['G_DEPT'];
		$demo['grocery'][14] = $row['G_DRGST'];
		$demo['grocery'][15] = $row['G_OL'];
		$demo['grocery'][16] = $row['G_OTH'];
		
		$demo['dept'][0] = $demo['grocery'][0];
		$demo['dept'][1] = $row['DP_CANT'];
		$demo['dept'][2] = $row['DP_CSTC'];
		$demo['dept'][3] = $row['DP_GNTT'];
		$demo['dept'][4] = $row['DP_BAY'];
		$demo['dept'][5] = $row['DP_SRS'];
		$demo['dept'][6] = $row['DP_WLMRT'];
		$demo['dept'][7] = $row['DP_OL'];
		$demo['dept'][8] = $row['DP_OTH'];

		$demo['cv'][0] = $demo['grocery'][0];
		$demo['cv'][1] = $row['CV_7ELV'];
		$demo['cv'][2] = $row['CV_MAC'];
		$demo['cv'][3] = $row['CV_GAS'];
		$demo['cv'][4] = $row['CV_OTH'];
		
		$demo['drug'][0] = $demo['grocery'][0];
		$demo['drug'][1] = $row['DR_IDA'];
		$demo['drug'][2] = $row['DR_JN'];
		$demo['drug'][3] = $row['DR_LND'];
		$demo['drug'][4] = $row['DR_PHMSV'];
		$demo['drug'][5] = $row['DR_PRXM'];
		$demo['drug'][6] = $row['DR_PHMPL'];
		$demo['drug'][7] = $row['DR_SHPP'];
		$demo['drug'][8] = $row['DR_WH'];
		$demo['drug'][9] = $row['DR_GRCY'];
		$demo['drug'][10] = $row['DR_NHPRD'];
		$demo['drug'][11] = $row['DR_OL'];
		$demo['drug'][12] = $row['DR_OTH'];



		}}

}  // end run grocery data

if($mod_clothing  < 1 && $detail_show == 12) {					//  grocery includes all sh2 - clothing  shoe

	include 'db_connect_wg.php';  
	

		$query = "SELECT 
		 SUM(c_weight.wPP15_) as wPP15_
		, SUM(sh2.C_ADDELL * wPP15_) as C_ADDELL
		, SUM(sh2.C_BANANA * wPP15_) as C_BANANA
		, SUM(sh2.C_CHILD * wPP15_) as C_CHILD
		, SUM(sh2.C_DANIER * wPP15_) as C_DANIER
		, SUM(sh2.C_EDDIE * wPP15_) as C_EDDIE
		, SUM(sh2.C_FAIRW * wPP15_) as C_FAIRW
		, SUM(sh2.C_FOREVR * wPP15_) as C_FOREVR
		, SUM(sh2.C_GAP * wPP15_) as C_GAP
		, SUM(sh2.C_HM * wPP15_) as C_HM
		, SUM(sh2.C_HARRY * wPP15_) as C_HARRY
		, SUM(sh2.C_HOLTRF * wPP15_) as C_HOLTRF
		, SUM(sh2.C_JACOB * wPP15_) as C_JACOB
		, SUM(sh2.C_JOE * wPP15_) as C_JOE
		, SUM(sh2.C_LAURA * wPP15_) as C_LAURA
		, SUM(sh2.C_CHATEA * wPP15_) as C_CHATEA
		, SUM(sh2.C_MARKS * wPP15_) as C_MARKS
		, SUM(sh2.C_MARSH  * wPP15_) as C_MARSH 
		, SUM(sh2.C_MEXX * wPP15_) as C_MEXX
		, SUM(sh2.C_MOORE * wPP15_) as C_MOORE
		, SUM(sh2.C_NAVY * wPP15_) as C_NAVY
		, SUM(sh2.C_REITMN * wPP15_) as C_REITMN
		, SUM(sh2.C_ROOTS * wPP15_) as C_ROOTS
		, SUM(sh2.C_STICHE * wPP15_) as C_STICHE
		, SUM(sh2.C_SUZY * wPP15_) as C_SUZY
		, SUM(sh2.C_TIPTOP * wPP15_) as C_TIPTOP
		, SUM(sh2.C_WINNER * wPP15_) as C_WINNER
		, SUM(sh2.C_ZARA * wPP15_) as C_ZARA
		, SUM(sh2.C_JEAN * wPP15_) as C_JEAN
		, SUM(sh2.C_MATERN * wPP15_) as C_MATERN
		, SUM(sh2.C_SPLR * wPP15_) as C_SPLR
		, SUM(sh2.C_DEPT * wPP15_) as C_DEPT
		, SUM(sh2.C_OL * wPP15_) as C_OL
		, SUM(sh2.C_OTH * wPP15_) as C_OTH
		
		, SUM(sh2.SH_ALDO * wPP15_) as SH_ALDO
		, SUM(sh2.SH_BROWN * wPP15_) as SH_BROWN
		, SUM(sh2.SH_GLOBO * wPP15_) as SH_GLOBO
		, SUM(sh2.SH_LBURG * wPP15_) as SH_LBURG
		, SUM(sh2.SH_NAT * wPP15_) as SH_NAT
		, SUM(sh2.SH_NINEW * wPP15_) as SH_NINEW
		, SUM(sh2.SH_PAYLS * wPP15_) as SH_PAYLS
		, SUM(sh2.SH_SOFT * wPP15_) as SH_SOFT
		, SUM(sh2.SH_SPRNG * wPP15_) as SH_SPRNG
		, SUM(sh2.SH_CMPNY * wPP15_) as SH_CMPNY
		, SUM(sh2.SH_TOWN * wPP15_) as SH_TOWN
		, SUM(sh2.SH_DEPT * wPP15_) as SH_DEPT
		, SUM(sh2.SH_SPRT * wPP15_) as SH_SPRT
		, SUM(sh2.SH_OL * wPP15_) as SH_OL
		, SUM(sh2.SH_OTH * wPP15_) as SH_OTH
		
		FROM c_sh2 sh2, amd_temp_pc pclist, c_weight c_weight WHERE sh2.POSTCODE = pclist.POSTCODE AND c_weight.POSTCODE = pclist.POSTCODE AND pclist.store_uid = $store_uid";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
		
		$demo['clothing'][0] = $row['wPP15_'];	
		$demo['clothing'][1] = $row['C_ADDELL'];
		$demo['clothing'][2] = $row['C_BANANA'];
		$demo['clothing'][3] = $row['C_CHILD'];
		$demo['clothing'][4] = $row['C_DANIER'];
		$demo['clothing'][5] = $row['C_EDDIE'];
		$demo['clothing'][6] = $row['C_FAIRW'];
		$demo['clothing'][7] = $row['C_FOREVR'];
		$demo['clothing'][8] = $row['C_GAP'];
		$demo['clothing'][9] = $row['C_HM'];
		$demo['clothing'][10] = $row['C_HARRY'];
		$demo['clothing'][11] = $row['C_HOLTRF'];
		$demo['clothing'][12] = $row['C_JACOB'];
		$demo['clothing'][13] = $row['C_JOE'];
		$demo['clothing'][14] = $row['C_LAURA'];
		$demo['clothing'][15] = $row['C_CHATEA'];
		$demo['clothing'][16] = $row['C_MARKS'];
		$demo['clothing'][17] = $row['C_MARSH '];
		$demo['clothing'][18] = $row['C_MEXX'];
		$demo['clothing'][19] = $row['C_MOORE'];
		$demo['clothing'][20] = $row['C_NAVY'];
		$demo['clothing'][21] = $row['C_REITMN'];
		$demo['clothing'][22] = $row['C_ROOTS'];
		$demo['clothing'][23] = $row['C_STICHE'];
		$demo['clothing'][24] = $row['C_SUZY'];
		$demo['clothing'][25] = $row['C_TIPTOP'];
		$demo['clothing'][26] = $row['C_WINNER'];
		$demo['clothing'][27] = $row['C_ZARA'];
		$demo['clothing'][28] = $row['C_JEAN'];
		$demo['clothing'][29] = $row['C_MATERN'];
		$demo['clothing'][30] = $row['C_SPLR'];
		$demo['clothing'][31] = $row['C_DEPT'];
		$demo['clothing'][32] = $row['C_OL'];
		$demo['clothing'][33] = $row['C_OTH'];
		
		$demo['shoe'][0] = $demo['clothing'][0];		
		$demo['shoe'][1] = $row['SH_ALDO'];
		$demo['shoe'][2] = $row['SH_BROWN'];
		$demo['shoe'][3] = $row['SH_GLOBO'];
		$demo['shoe'][4] = $row['SH_LBURG'];
		$demo['shoe'][5] = $row['SH_NAT'];
		$demo['shoe'][6] = $row['SH_NINEW'];
		$demo['shoe'][7] = $row['SH_PAYLS'];
		$demo['shoe'][8] = $row['SH_SOFT'];
		$demo['shoe'][9] = $row['SH_SPRNG'];
		$demo['shoe'][10] = $row['SH_CMPNY'];
		$demo['shoe'][11] = $row['SH_TOWN'];
		$demo['shoe'][12] = $row['SH_DEPT'];
		$demo['shoe'][13] = $row['SH_SPRT'];
		$demo['shoe'][14] = $row['SH_OL'];
		$demo['shoe'][15] = $row['SH_OTH'];
		}}

}  // end run clothing data

if($mod_book  < 1 && $detail_show == 12) {					//  book includes all sh3 - book jewel furn home
	
	include 'db_connect_wg.php';  
	

		$query = "SELECT 
		 SUM(c_weight.wPP15_) as wPP15_
		 , SUM(sh3.BK_CHPTS * wPP15_) as BK_CHPTS
		, SUM(sh3.BK_COLES * wPP15_) as BK_COLES
		, SUM(sh3.BK_WH * wPP15_) as BK_WH
		, SUM(sh3.BK_DEPT * wPP15_) as BK_DEPT
		, SUM(sh3.BK_AMAZN * wPP15_) as BK_AMAZN
		, SUM(sh3.BK_CHPOL * wPP15_) as BK_CHPOL
		, SUM(sh3.BK_OTHOL * wPP15_) as BK_OTHOL
		, SUM(sh3.BK_OTH * wPP15_) as BK_OTH
		
		, SUM(sh3.JW_BENMS * wPP15_) as JW_BENMS
		, SUM(sh3.JW_BIRK * wPP15_) as JW_BIRK
		, SUM(sh3.JW_MAPPN * wPP15_) as JW_MAPPN
		, SUM(sh3.JW_MICHA * wPP15_) as JW_MICHA
		, SUM(sh3.JW_PEOPL * wPP15_) as JW_PEOPL
		, SUM(sh3.JW_SPENC * wPP15_) as JW_SPENC
		, SUM(sh3.JW_WH * wPP15_) as JW_WH
		, SUM(sh3.JW_DEPT * wPP15_) as JW_DEPT
		, SUM(sh3.JW_OL * wPP15_) as JW_OL
		, SUM(sh3.JW_OTH * wPP15_) as JW_OTH
		
		, SUM(sh3.FU_IKEA * wPP15_) as FU_IKEA
		, SUM(sh3.FU_LZBOY * wPP15_) as FU_LZBOY
		, SUM(sh3.FU_LEONS * wPP15_) as FU_LEONS
		, SUM(sh3.FU_PIER * wPP15_) as FU_PIER
		, SUM(sh3.FU_SLEEP * wPP15_) as FU_SLEEP
		, SUM(sh3.FU_BRICK * wPP15_) as FU_BRICK
		, SUM(sh3.FU_WH * wPP15_) as FU_WH
		, SUM(sh3.FU_UBAR * wPP15_) as FU_UBAR
		, SUM(sh3.FU_DEPT * wPP15_) as FU_DEPT
		, SUM(sh3.FU_ELCTR * wPP15_) as FU_ELCTR
		, SUM(sh3.FU_OL * wPP15_) as FU_OL
		, SUM(sh3.FU_OTH * wPP15_) as FU_OTH
		
		, SUM(sh3.H_CANTR * wPP15_) as H_CANTR
		, SUM(sh3.H_DEPOT * wPP15_) as H_DEPOT
		, SUM(sh3.H_HWARE * wPP15_) as H_HWARE
		, SUM(sh3.H_OUTFT * wPP15_) as H_OUTFT
		, SUM(sh3.H_SENSE * wPP15_) as H_SENSE
		, SUM(sh3.H_LEE * wPP15_) as H_LEE
		, SUM(sh3.H_LOWE * wPP15_) as H_LOWE
		, SUM(sh3.H_PIER1 * wPP15_) as H_PIER1
		, SUM(sh3.H_RONA * wPP15_) as H_RONA
		, SUM(sh3.H_LIGHT * wPP15_) as H_LIGHT
		, SUM(sh3.H_DEPT * wPP15_) as H_DEPT
		, SUM(sh3.H_INDEP * wPP15_) as H_INDEP
		, SUM(sh3.H_OL * wPP15_) as H_OL
		, SUM(sh3.H_OTHDEC * wPP15_) as H_OTHDEC
		, SUM(sh3.H_OTHIMP * wPP15_) as H_OTHIMP
		
		FROM c_sh3 sh3, amd_temp_pc pclist, c_weight c_weight WHERE sh3.POSTCODE = pclist.POSTCODE AND c_weight.POSTCODE = pclist.POSTCODE AND pclist.store_uid = $store_uid";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
		
		$demo['book'][0] = $row['wPP15_'];	
		$demo['book'][1] = $row['BK_CHPTS'];
		$demo['book'][2] = $row['BK_COLES'];
		$demo['book'][3] = $row['BK_WH'];
		$demo['book'][4] = $row['BK_DEPT'];
		$demo['book'][5] = $row['BK_AMAZN'];
		$demo['book'][6] = $row['BK_CHPOL'];
		$demo['book'][7] = $row['BK_OTHOL'];
		$demo['book'][8] = $row['BK_OTH'];
		
		$demo['jewel'][0] = $demo['book'][0];
		$demo['jewel'][1] = $row['JW_BENMS'];
		$demo['jewel'][2] = $row['JW_BIRK'];
		$demo['jewel'][3] = $row['JW_MAPPN'];
		$demo['jewel'][4] = $row['JW_MICHA'];
		$demo['jewel'][5] = $row['JW_PEOPL'];
		$demo['jewel'][6] = $row['JW_SPENC'];
		$demo['jewel'][7] = $row['JW_WH'];
		$demo['jewel'][8] = $row['JW_DEPT'];
		$demo['jewel'][9] = $row['JW_OL'];
		$demo['jewel'][10] = $row['JW_OTH'];
		
		$demo['furn'][0] = $demo['book'][0];
		$demo['furn'][1] = $row['FU_IKEA'];
		$demo['furn'][2] = $row['FU_LZBOY'];
		$demo['furn'][3] = $row['FU_LEONS'];
		$demo['furn'][4] = $row['FU_PIER'];
		$demo['furn'][5] = $row['FU_SLEEP'];
		$demo['furn'][6] = $row['FU_BRICK'];
		$demo['furn'][7] = $row['FU_WH'];
		$demo['furn'][8] = $row['FU_UBAR'];
		$demo['furn'][9] = $row['FU_DEPT'];
		$demo['furn'][10] = $row['FU_ELCTR'];
		$demo['furn'][11] = $row['FU_OL'];
		$demo['furn'][12] = $row['FU_OTH'];
		
		$demo['home'][0] = $demo['book'][0];
		$demo['home'][1] = $row['H_CANTR'];
		$demo['home'][2] = $row['H_DEPOT'];
		$demo['home'][3] = $row['H_HWARE'];
		$demo['home'][4] = $row['H_OUTFT'];
		$demo['home'][5] = $row['H_SENSE'];
		$demo['home'][6] = $row['H_LEE'];
		$demo['home'][7] = $row['H_LOWE'];
		$demo['home'][8] = $row['H_PIER1'];
		$demo['home'][9] = $row['H_RONA'];
		$demo['home'][10] = $row['H_LIGHT'];
		$demo['home'][11] = $row['H_DEPT'];
		$demo['home'][12] = $row['H_INDEP'];
		$demo['home'][13] = $row['H_OL'];
		$demo['home'][14] = $row['H_OTHDEC'];
		$demo['home'][15] = $row['H_OTHIMP'];
		
		}}

}  // end run book data

if($mod_eye  < 1 && $detail_show == 12) {					//  eye includes all sh4 - eye, glasses (use spend laser surgery) elect office sport

	include 'db_connect_wg.php';  
	

		$query = "SELECT 
		 SUM(c_weight.wPP15_) as wPP15_
		 , SUM(sh4.OP_HAKIM * wPP15_) as OP_HAKIM
		, SUM(sh4.OP_IRIS * wPP15_) as OP_IRIS
		, SUM(sh4.OP_LENSC * wPP15_) as OP_LENSC
		, SUM(sh4.OP_PEARL * wPP15_) as OP_PEARL
		, SUM(sh4.OP_SNHUT * wPP15_) as OP_SNHUT
		, SUM(sh4.OP_VOGUE * wPP15_) as OP_VOGUE
		, SUM(sh4.OP_WH * wPP15_) as OP_WH
		, SUM(sh4.OP_DEPT * wPP15_) as OP_DEPT
		, SUM(sh4.OP_OL * wPP15_) as OP_OL
		, SUM(sh4.OP_OTH * wPP15_) as OP_OTH
		, SUM(sh4.OP_GLSNO * wPP15_) as OP_GLSNO
		
		, SUM(sh4.OP_GLS * wPP15_) as OP_GLS
		, SUM(sh4.OP_GLSCL * wPP15_) as OP_GLSCL
		, SUM(sh4.OP_GLSACL * wPP15_) as OP_GLSACL
		, SUM(sh4.OP_SP0 * wPP15_) as OP_SP0
		, SUM(sh4.OP_SP99 * wPP15_) as OP_SP99
		, SUM(sh4.OP_SP199 * wPP15_) as OP_SP199
		, SUM(sh4.OP_SP399 * wPP15_) as OP_SP399
		, SUM(sh4.OP_SP400 * wPP15_) as OP_SP400
		, SUM(sh4.OP_SGVL * wPP15_) as OP_SGVL
		, SUM(sh4.OP_SGSL * wPP15_) as OP_SGSL
		, SUM(sh4.OP_SGNVL * wPP15_) as OP_SGNVL
		, SUM(sh4.OP_SGNL * wPP15_) as OP_SGNL
		, SUM(sh4.OP_SGDHAD * wPP15_) as OP_SGDHAD
		
		, SUM(sh4.ST_APPON * wPP15_) as ST_APPON
		, SUM(sh4.ST_APPRE * wPP15_) as ST_APPRE
		, SUM(sh4.ST_BSTBY * wPP15_) as ST_BSTBY
		, SUM(sh4.ST_DELL * wPP15_) as ST_DELL
		, SUM(sh4.ST_FUTUR * wPP15_) as ST_FUTUR
		, SUM(sh4.ST_STAPL * wPP15_) as ST_STAPL
		, SUM(sh4.ST_SONY * wPP15_) as ST_SONY
		, SUM(sh4.ST_SOURC * wPP15_) as ST_SOURC
		, SUM(sh4.ST_WH * wPP15_) as ST_WH
		, SUM(sh4.ST_DEPT * wPP15_) as ST_DEPT
		, SUM(sh4.ST_FURNT * wPP15_) as ST_FURNT
		, SUM(sh4.ST_OL * wPP15_) as ST_OL
		, SUM(sh4.ST_OTH * wPP15_) as ST_OTH
		
		, SUM(sh4.OF_STAPL * wPP15_) as OF_STAPL
		, SUM(sh4.OF_GRAND * wPP15_) as OF_GRAND
		, SUM(sh4.OF_WH * wPP15_) as OF_WH
		, SUM(sh4.OF_DEPT * wPP15_) as OF_DEPT
		, SUM(sh4.OF_OL * wPP15_) as OF_OL
		, SUM(sh4.OF_OTH * wPP15_) as OF_OTH
		
		, SUM(sh4.SP_ATHLT * wPP15_) as SP_ATHLT
		, SUM(sh4.SP_CHAMP * wPP15_) as SP_CHAMP
		, SUM(sh4.SP_FTLCK * wPP15_) as SP_FTLCK
		, SUM(sh4.SP_GOLFT * wPP15_) as SP_GOLFT
		, SUM(sh4.SP_LULU * wPP15_) as SP_LULU
		, SUM(sh4.SP_MTEQP * wPP15_) as SP_MTEQP
		, SUM(sh4.SP_PLYAG * wPP15_) as SP_PLYAG
		, SUM(sh4.SP_CHEK * wPP15_) as SP_CHEK
		, SUM(sh4.SP_LIFE * wPP15_) as SP_LIFE
		, SUM(sh4.SP_EXPT * wPP15_) as SP_EXPT
		, SUM(sh4.SP_RUNRM * wPP15_) as SP_RUNRM
		, SUM(sh4.SP_WH * wPP15_) as SP_WH
		, SUM(sh4.SP_DEPT * wPP15_) as SP_DEPT
		, SUM(sh4.SP_OL * wPP15_) as SP_OL
		, SUM(sh4.SP_OTH * wPP15_) as SP_OTH

		
		FROM c_sh4 sh4, amd_temp_pc pclist, c_weight c_weight WHERE sh4.POSTCODE = pclist.POSTCODE AND c_weight.POSTCODE = pclist.POSTCODE AND pclist.store_uid = $store_uid";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
		
		$demo['eye'][0] = $row['wPP15_'];	
		$demo['eye'][1] = $row['OP_HAKIM'];
		$demo['eye'][2] = $row['OP_IRIS'];
		$demo['eye'][3] = $row['OP_LENSC'];
		$demo['eye'][4] = $row['OP_PEARL'];
		$demo['eye'][5] = $row['OP_SNHUT'];
		$demo['eye'][6] = $row['OP_VOGUE'];
		$demo['eye'][7] = $row['OP_WH'];
		$demo['eye'][8] = $row['OP_DEPT'];
		$demo['eye'][9] = $row['OP_OL'];
		$demo['eye'][10] = $row['OP_OTH'];
		
		$demo['glasses'][0] = $demo['eye'][0];
		$demo['glasses'][1] = $row['OP_GLSNO'];
		$demo['glasses'][2] = $row['OP_GLS'];
		$demo['glasses'][3] = $row['OP_GLSCL'];
		$demo['glasses'][4] = $row['OP_GLSACL'];
		$demo['glasses'][5] = $row['OP_SP0'];
		$demo['glasses'][6] = $row['OP_SP99'];
		$demo['glasses'][7] = $row['OP_SP199'];
		$demo['glasses'][8] = $row['OP_SP399'];
		$demo['glasses'][9] = $row['OP_SP400'];
		$demo['glasses'][10] = $row['OP_SGVL'];
		$demo['glasses'][11] = $row['OP_SGSL'];
		$demo['glasses'][12] = $row['OP_SGNVL'];
		$demo['glasses'][13] = $row['OP_SGNL'];
		$demo['glasses'][14] = $row['OP_SGDHAD'];
		
		$demo['elect'][0] = $demo['eye'][0];		
		$demo['elect'][1] = $row['ST_APPON'];
		$demo['elect'][2] = $row['ST_APPRE'];
		$demo['elect'][3] = $row['ST_BSTBY'];
		$demo['elect'][4] = $row['ST_DELL'];
		$demo['elect'][5] = $row['ST_FUTUR'];
		$demo['elect'][6] = $row['ST_STAPL'];
		$demo['elect'][7] = $row['ST_SONY'];
		$demo['elect'][8] = $row['ST_SOURC'];
		$demo['elect'][9] = $row['ST_WH'];
		$demo['elect'][10] = $row['ST_DEPT'];
		$demo['elect'][11] = $row['ST_FURNT'];
		$demo['elect'][12] = $row['ST_OL'];
		$demo['elect'][13] = $row['ST_OTH'];
		
		$demo['office'][0] = $demo['eye'][0];	
		$demo['office'][1] = $row['OF_STAPL'];
		$demo['office'][2] = $row['OF_GRAND'];
		$demo['office'][3] = $row['OF_WH'];
		$demo['office'][4] = $row['OF_DEPT'];
		$demo['office'][5] = $row['OF_OL'];
		$demo['office'][6] = $row['OF_OTH'];
		
		$demo['sport'][0] = $demo['eye'][0];
		$demo['sport'][1] = $row['SP_ATHLT'];
		$demo['sport'][2] = $row['SP_CHAMP'];
		$demo['sport'][3] = $row['SP_FTLCK'];
		$demo['sport'][4] = $row['SP_GOLFT'];
		$demo['sport'][5] = $row['SP_LULU'];
		$demo['sport'][6] = $row['SP_MTEQP'];
		$demo['sport'][7] = $row['SP_PLYAG'];
		$demo['sport'][8] = $row['SP_CHEK'];
		$demo['sport'][9] = $row['SP_LIFE'];
		$demo['sport'][10] = $row['SP_EXPT'];
		$demo['sport'][11] = $row['SP_RUNRM'];
		$demo['sport'][12] = $row['SP_WH'];
		$demo['sport'][13] = $row['SP_DEPT'];
		$demo['sport'][14] = $row['SP_OL'];
		$demo['sport'][15] = $row['SP_OTH'];
		
		}}

}  // end run eye data


if($mod_toy  < 1 && $detail_show == 12) {					//  toy includes all sh5 - toy pet pet_own type_r type_o

	include 'db_connect_wg.php';  
	

		$query = "SELECT 
		 SUM(c_weight.wPP15_) as wPP15_
		 , SUM(sh5.TY_DISNY * wPP15_) as TY_DISNY
		, SUM(sh5.TY_EBGM * wPP15_) as TY_EBGM
		, SUM(sh5.TY_MSTMN * wPP15_) as TY_MSTMN
		, SUM(sh5.TY_RUS * wPP15_) as TY_RUS
		, SUM(sh5.TY_WH * wPP15_) as TY_WH
		, SUM(sh5.TY_DEPT * wPP15_) as TY_DEPT
		, SUM(sh5.TY_OL * wPP15_) as TY_OL
		, SUM(sh5.TY_OTH * wPP15_) as TY_OTH
		
		, SUM(sh5.PT_GLBPF * wPP15_) as PT_GLBPF
		, SUM(sh5.PT_VALU * wPP15_) as PT_VALU
		, SUM(sh5.PT_MART * wPP15_) as PT_MART
		, SUM(sh5.PT_PJS * wPP15_) as PT_PJS
		, SUM(sh5.PT_WH * wPP15_) as PT_WH
		, SUM(sh5.PT_DEPT * wPP15_) as PT_DEPT
		, SUM(sh5.PT_GRCY * wPP15_) as PT_GRCY
		, SUM(sh5.PT_VETER * wPP15_) as PT_VETER
		, SUM(sh5.PT_OL * wPP15_) as PT_OL
		, SUM(sh5.PT_OTH * wPP15_) as PT_OTH
		
		, SUM(sh5.PT_PETS * wPP15_) as PT_PETS
		, SUM(sh5.PT_CAT * wPP15_) as PT_CAT
		, SUM(sh5.PT_DOG * wPP15_) as PT_DOG
		, SUM(sh5.PT_BIRD * wPP15_) as PT_BIRD
		, SUM(sh5.PT_FISH * wPP15_) as PT_FISH
		, SUM(sh5.PT_OTHANM * wPP15_) as PT_OTHANM
		
		, SUM(sh5.T_BULKF_R * wPP15_) as T_BULKF_R
		, SUM(sh5.T_CARPET_R * wPP15_) as T_CARPET_R
		, SUM(sh5.T_CRAFT_R * wPP15_) as T_CRAFT_R
		, SUM(sh5.T_DOLLAR_R * wPP15_) as T_DOLLAR_R
		, SUM(sh5.T_FACTOL_R * wPP15_) as T_FACTOL_R
		, SUM(sh5.T_FASAC_R * wPP15_) as T_FASAC_R
		, SUM(sh5.T_GARDEN_R * wPP15_) as T_GARDEN_R
		, SUM(sh5.T_BEAU_R * wPP15_) as T_BEAU_R
		, SUM(sh5.T_HLTHCR_R * wPP15_) as T_HLTHCR_R
		, SUM(sh5.T_KCH_R * wPP15_) as T_KCH_R
		, SUM(sh5.T_MUSIC_R * wPP15_) as T_MUSIC_R
		, SUM(sh5.T_NATFD_R * wPP15_) as T_NATFD_R
		, SUM(sh5.T_OLCWEB_R * wPP15_) as T_OLCWEB_R
		, SUM(sh5.T_OLMMD_R * wPP15_) as T_OLMMD_R
		, SUM(sh5.T_MALL_R * wPP15_) as T_MALL_R
		, SUM(sh5.T_FVFM_R * wPP15_) as T_FVFM_R
		, SUM(sh5.T_BOUTIQ_R * wPP15_) as T_BOUTIQ_R
		, SUM(sh5.T_OL_R * wPP15_) as T_OL_R
		
		, SUM(sh5.T_BULKF_O * wPP15_) as T_BULKF_O
		, SUM(sh5.T_CARPET_O * wPP15_) as T_CARPET_O
		, SUM(sh5.T_CRAFT_O * wPP15_) as T_CRAFT_O
		, SUM(sh5.T_DOLLAR_O * wPP15_) as T_DOLLAR_O
		, SUM(sh5.T_FACTOL_O * wPP15_) as T_FACTOL_O
		, SUM(sh5.T_FASAC_O * wPP15_) as T_FASAC_O
		, SUM(sh5.T_GARDEN_O * wPP15_) as T_GARDEN_O
		, SUM(sh5.T_BEAU_O * wPP15_) as T_BEAU_O
		, SUM(sh5.T_HLTHCR_O * wPP15_) as T_HLTHCR_O
		, SUM(sh5.T_KCH_O * wPP15_) as T_KCH_O
		, SUM(sh5.T_MUSIC_O * wPP15_) as T_MUSIC_O
		, SUM(sh5.T_NATFD_O * wPP15_) as T_NATFD_O
		, SUM(sh5.T_OLCWEB_O * wPP15_) as T_OLCWEB_O
		, SUM(sh5.T_OLMMD_O * wPP15_) as T_OLMMD_O
		, SUM(sh5.T_MALL_O * wPP15_) as T_MALL_O
		, SUM(sh5.T_FVFM_O * wPP15_) as T_FVFM_O
		, SUM(sh5.T_BOUTIQ_O * wPP15_) as T_BOUTIQ_O
		, SUM(sh5.T_OL_O * wPP15_) as T_OL_O
		
		FROM c_sh5 sh5, amd_temp_pc pclist, c_weight c_weight WHERE sh5.POSTCODE = pclist.POSTCODE AND c_weight.POSTCODE = pclist.POSTCODE AND pclist.store_uid = $store_uid";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
		
		$demo['toy'][0] = $row['wPP15_'];
		$demo['toy'][1] = $row['TY_DISNY'];
		$demo['toy'][2] = $row['TY_EBGM'];
		$demo['toy'][3] = $row['TY_MSTMN'];
		$demo['toy'][4] = $row['TY_RUS'];
		$demo['toy'][5] = $row['TY_WH'];
		$demo['toy'][6] = $row['TY_DEPT'];
		$demo['toy'][7] = $row['TY_OL'];
		$demo['toy'][8] = $row['TY_OTH'];
		
		$demo['pet'][0] = $demo['toy'][0];
		$demo['pet'][1] = $row['PT_GLBPF'];
		$demo['pet'][2] = $row['PT_VALU'];
		$demo['pet'][3] = $row['PT_MART'];
		$demo['pet'][4] = $row['PT_PJS'];
		$demo['pet'][5] = $row['PT_WH'];
		$demo['pet'][6] = $row['PT_DEPT'];
		$demo['pet'][7] = $row['PT_GRCY'];
		$demo['pet'][8] = $row['PT_VETER'];
		$demo['pet'][9] = $row['PT_OL'];
		$demo['pet'][10] = $row['PT_OTH'];
		
		$demo['pet_own'][0] = $demo['toy'][0];
		$demo['pet_own'][1] = $row['PT_PETS'];
		$demo['pet_own'][2] = $row['PT_CAT'];
		$demo['pet_own'][3] = $row['PT_DOG'];
		$demo['pet_own'][4] = $row['PT_BIRD'];
		$demo['pet_own'][5] = $row['PT_FISH'];
		$demo['pet_own'][6] = $row['PT_OTHANM'];
		
		$demo['type_r'][0] = $demo['toy'][0];
		$demo['type_r'][1] = $row['T_BULKF_R'];
		$demo['type_r'][2] = $row['T_CARPET_R'];
		$demo['type_r'][3] = $row['T_CRAFT_R'];
		$demo['type_r'][4] = $row['T_DOLLAR_R'];
		$demo['type_r'][5] = $row['T_FACTOL_R'];
		$demo['type_r'][6] = $row['T_FASAC_R'];
		$demo['type_r'][7] = $row['T_GARDEN_R'];
		$demo['type_r'][8] = $row['T_BEAU_R'];
		$demo['type_r'][9] = $row['T_HLTHCR_R'];
		$demo['type_r'][10] = $row['T_KCH_R'];
		$demo['type_r'][11] = $row['T_MUSIC_R'];
		$demo['type_r'][12] = $row['T_NATFD_R'];
		$demo['type_r'][13] = $row['T_OLCWEB_R'];
		$demo['type_r'][14] = $row['T_OLMMD_R'];
		$demo['type_r'][15] = $row['T_MALL_R'];
		$demo['type_r'][16] = $row['T_FVFM_R'];
		$demo['type_r'][17] = $row['T_BOUTIQ_R'];
		$demo['type_r'][18] = $row['T_OL_R'];
				
		$demo['type_o'][0] = $demo['toy'][0];
		$demo['type_o'][1] = $row['T_BULKF_O'];
		$demo['type_o'][2] = $row['T_CARPET_O'];
		$demo['type_o'][3] = $row['T_CRAFT_O'];
		$demo['type_o'][4] = $row['T_DOLLAR_O'];
		$demo['type_o'][5] = $row['T_FACTOL_O'];
		$demo['type_o'][6] = $row['T_FASAC_O'];
		$demo['type_o'][7] = $row['T_GARDEN_O'];
		$demo['type_o'][8] = $row['T_BEAU_O'];
		$demo['type_o'][9] = $row['T_HLTHCR_O'];
		$demo['type_o'][10] = $row['T_KCH_O'];
		$demo['type_o'][11] = $row['T_MUSIC_O'];
		$demo['type_o'][12] = $row['T_NATFD_O'];
		$demo['type_o'][13] = $row['T_OLCWEB_O'];
		$demo['type_o'][14] = $row['T_OLMMD_O'];
		$demo['type_o'][15] = $row['T_MALL_O'];
		$demo['type_o'][16] = $row['T_FVFM_O'];
		$demo['type_o'][17] = $row['T_BOUTIQ_O'];
		$demo['type_o'][18] = $row['T_OL_O'];
		}}

}  // end run eye data

if($mod_agehomes  < 1) {
include 'db_connect.php';
	$demo['agehomes_list'] = implode(",", $demo['agehomes']);
		$temp_val_insert = $demo['agehomes_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'agehomes', '$temp_val_insert') ");
}

if($mod_rest  < 1 && $demo['rest'][0] > 1) {
include 'db_connect.php';
	$demo['rest_list'] = implode(",", $demo['rest']);
		$temp_val_insert = $demo['rest_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'rest', '$temp_val_insert') ");
		
//echo "<br /><br />brad testing (not on live site) : numbers should appear ONLY for existing trade areas with new restaurant details added---->";
//print_r($demo['rest']);
}

if($mod_grocery  < 1 && $demo['grocery'][0] > 1 && $detail_show == 12) {
include 'db_connect.php';
	$demo['grocery_list'] = implode(",", $demo['grocery']);
		$temp_val_insert = $demo['grocery_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'grocery', '$temp_val_insert') ");
	$demo['dept_list'] = implode(",", $demo['dept']);
		$temp_val_insert = $demo['dept_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'dept', '$temp_val_insert') ");
	$demo['cv_list'] = implode(",", $demo['cv']);
		$temp_val_insert = $demo['cv_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'cv', '$temp_val_insert') ");
	$demo['drug_list'] = implode(",", $demo['drug']);
		$temp_val_insert = $demo['drug_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'drug', '$temp_val_insert') ");	

}

if($mod_clothing  < 1 && $demo['clothing'][0] > 1 && $detail_show == 12) {
include 'db_connect.php';
	$demo['clothing_list'] = implode(",", $demo['clothing']);
		$temp_val_insert = $demo['clothing_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'clothing', '$temp_val_insert') ");
	$demo['shoe_list'] = implode(",", $demo['shoe']);
		$temp_val_insert = $demo['shoe_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'shoe', '$temp_val_insert') ");
}

if($mod_clothing  < 1 && $demo['clothing'][0] > 1 && $detail_show == 12) {
include 'db_connect.php';
	$demo['book_list'] = implode(",", $demo['book']);
		$temp_val_insert = $demo['book_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'book', '$temp_val_insert') ");
	$demo['jewel_list'] = implode(",", $demo['jewel']);
		$temp_val_insert = $demo['jewel_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'jewel', '$temp_val_insert') ");
	$demo['furn_list'] = implode(",", $demo['furn']);
		$temp_val_insert = $demo['furn_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'furn', '$temp_val_insert') ");
	$demo['home_list'] = implode(",", $demo['home']);
		$temp_val_insert = $demo['home_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'home', '$temp_val_insert') ");
}

if($mod_eye  < 1 && $demo['eye'][0] > 1 && $detail_show == 12) {
include 'db_connect.php';
	$demo['eye_list'] = implode(",", $demo['eye']);
		$temp_val_insert = $demo['eye_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'eye', '$temp_val_insert') ");
	$demo['glasses_list'] = implode(",", $demo['glasses']);
		$temp_val_insert = $demo['glasses_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'glasses', '$temp_val_insert') ");
	$demo['elect_list'] = implode(",", $demo['elect']);
		$temp_val_insert = $demo['elect_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'elect', '$temp_val_insert') ");
	$demo['office_list'] = implode(",", $demo['office']);
		$temp_val_insert = $demo['office_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'office', '$temp_val_insert') ");
	$demo['sport_list'] = implode(",", $demo['sport']);
		$temp_val_insert = $demo['sport_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'sport', '$temp_val_insert') ");
}

if($mod_toy  < 1 && $demo['toy'][0] > 1 && $detail_show == 12) {
include 'db_connect.php';
	$demo['toy_list'] = implode(",", $demo['toy']);
		$temp_val_insert = $demo['toy_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'toy', '$temp_val_insert') ");
	$demo['pet_list'] = implode(",", $demo['pet']);
		$temp_val_insert = $demo['pet_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'pet', '$temp_val_insert') ");
	$demo['pet_own_list'] = implode(",", $demo['pet_own']);
		$temp_val_insert = $demo['pet_own_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'pet_own', '$temp_val_insert') ");
	$demo['type_r_list'] = implode(",", $demo['type_r']);
		$temp_val_insert = $demo['type_r_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'type_r', '$temp_val_insert') ");
	$demo['type_o_list'] = implode(",", $demo['type_o']);
		$temp_val_insert = $demo['type_o_list']; 
		mysqli_query($link,"INSERT INTO amfd_savedvals (user_uid, company_uid, store_uid, agg_name, agg_list) VALUES ($user_uid, $client_id, $store_uid, 'type_o', '$temp_val_insert') ");
}


// check new modules 

	

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
	$demo['rest'] = explode(",", $demo['rest_list']);
	$demo['grocery'] = explode(",", $demo['grocery_list']);
	$demo['dept'] = explode(",", $demo['dept_list']);
	$demo['cv'] = explode(",", $demo['cv_list']);
	$demo['drug'] = explode(",", $demo['drug_list']);
	$demo['clothing'] = explode(",", $demo['clothing_list']);
	$demo['shoe'] = explode(",", $demo['shoe_list']);
	$demo['book'] = explode(",", $demo['book_list']);
	$demo['jewel'] = explode(",", $demo['jewel_list']);
	$demo['furn'] = explode(",", $demo['furn_list']);
	$demo['home'] = explode(",", $demo['home_list']);
	$demo['eye'] = explode(",", $demo['eye_list']);
	$demo['glasses'] = explode(",", $demo['glasses_list']);
	$demo['elect'] = explode(",", $demo['elect_list']);
	$demo['office'] = explode(",", $demo['office_list']);
	$demo['sport'] = explode(",", $demo['sport_list']);
	$demo['toy'] = explode(",", $demo['toy_list']); 
	$demo['pet'] = explode(",", $demo['pet_list']);
	$demo['pet_own'] = explode(",", $demo['pet_own_list']);
	$demo['type_r'] = explode(",", $demo['type_r_list']);
	$demo['type_o'] = explode(",", $demo['type_o_list']);
	
}



include 'db_connect.php'; 
include 'from_array_to_storema.php'; 		// convert raw variable values into useful values used for calculations - mainly converting old data aggregation formats
if($rbenchmark > 15) include 'rbench_vals.php'; else include 'rbench_prov.php';				// get the benchmark values
include 'old_storema_vals.php'; 			// convert file and benchmark values into percents/ index and logic for images and sorted lists

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
legend: {position: 'top', maxLines: 2},
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
legend: {position: 'top', maxLines: 2},
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
	var image = 'green_pin.png';
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
	fillOpacity: 0.1,
	map: map,
	center: latlng,
	radius: radius_size
	};
	cityCircle = new google.maps.Circle(populationOptionsAgain);
	cityCircle.setMap(map);";
	}
	
	if($PostCodearray_yn > 0) { 		// add PostCodearray for sequential targeting
		
		include 'db_connect_wg.php';
		
		$temp_counter = 0;
		// updated august 28 2018 c_geo to amfd_homes_current
		for ( $i = 0; $i < sizeof($PostCodearray['pc']); $i ++) {	
			$temp_pc_query = $PostCodearray['pc'][$i];
			$query = "Select lat, lon FROM amfd_homes_current WHERE PostCode = '$temp_pc_query' ";
				if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
				$temp_ethnic_lat = $row['lat'];
				$temp_ethnic_lon = $row['lon'];
				$PostCode = $temp_pc_query; 
				$cust_toronto[] = "['" . $PostCode .  "', " .  $temp_ethnic_lat . ", " . $temp_ethnic_lon . ", " . $temp_counter . "],";
				$temp_counter = $temp_counter +1;
				}				
				}
			}
		
		$count_dwi2 = $i+1;
		$count_dwi_1 = $i-1;
		$temp_lastarray = $cust_toronto[$count_dwi_1];
		$cust_toronto[$count_dwi_1] = rtrim($temp_lastarray, ",");	// get rid of trailing comma in last array element
				

	
	
	
		include 'db_connect.php'; // back to default connect
	}
	
	
	
	
	?>
	
	
	
	
	
	
	var polyCoords = [
	<?php echo $poly_latlon;?>
	];
	// Construct the polygon.
	var polyMapShow = new google.maps.Polygon({
	paths: polyCoords,
	strokeColor: '#8B0000',
	strokeOpacity: 0.7,
	strokeWeight: 5,
	fillColor: '#ffff00',
	fillOpacity:0.1,
	clickable: false,
	zIndex: 1
	});
	polyMapShow.setMap(map);
	
	<?php 
	if($PostCodearray_yn > 0) { 		// add PostCodearray for sequential targeting
	
	echo "var locations5seq = [";

	for ( $count_dwi = 0; $count_dwi < sizeof($cust_toronto); $count_dwi ++) {	
	echo $cust_toronto[$count_dwi];
	} 
	echo "];";

	echo "var markers5seq = [];";

	echo "

	for (i5 = 0; i5 < locations5seq.length; i5++) {  
		var marker5seq = new google.maps.Marker({
		position: new google.maps.LatLng(locations5seq[i5][1], locations5seq[i5][2]),
		map: map,
		icon: image
		});
		markers5seq.push(marker5seq);
	} ";


	} ?>


var myOptions_ret= {
zoom: 12,
center: latlng,
mapTypeId: google.maps.MapTypeId.ROADMAP,
navigationControl: true,
scaleControl: true
};

var map_ret = new google.maps.Map(document.getElementById("map_ret"), myOptions_ret);


<?php 
// rectangle
	 $start_lat_min = ($start_lat - 0.05);
	 $start_lat_max = ($start_lat + 0.05);
	 $start_lon_min = ($start_lon - 0.1);
	 $start_lon_max = ($start_lon + 0.1);
        
?>
	var rectangle_coords = [
 
		  {lat: <?php echo $start_lat_max;?>, lng: <?php echo $start_lon_min;?>},
          {lat: <?php echo $start_lat_max;?>, lng: <?php echo $start_lon_max;?>},
          {lat: <?php echo $start_lat_min;?>, lng: <?php echo $start_lon_max;?>},
          {lat: <?php echo $start_lat_min;?>, lng: <?php echo $start_lon_min;?>},
		  {lat: <?php echo $start_lat_max;?>, lng: <?php echo $start_lon_min;?>}
        ];
        var rectangle_draw = new google.maps.Polyline({
          path: rectangle_coords,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2
        });

        rectangle_draw.setMap(map_ret);

<?php 
$default_retailer = 1;
include 'db_connect.php'; 
// ADD LOOP FOR CATEGORY LEVEL AND CLIENT LEVEL
	if($retailer_catmap >0) {
		$query = "SELECT * FROM retail_cat_tree WHERE CATEGORY_ID = $retailer_catmap";
			if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					$query_sub_id[] = $row['SUB_ID'];
					$display_cat_name = $row['CATEGORY_NAME'];
					$default_retailer = 0;
			}}	
		
		for ($i = 0; $i < sizeof($query_sub_id) ; $i++) { 
			$temp_retailer_submap = $query_sub_id[$i];
			$query = "SELECT * FROM retail_list WHERE SUB_ID = $temp_retailer_submap";
				if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$store_name_list[] = $row['STORE_NAME'];
						$store_subcat_list[] = $row['SUB_CATEGORY'];	
				}}
		}
	
	}
	if($retailer_submap >0) {
	$query = "SELECT * FROM retail_list WHERE SUB_ID = $retailer_submap";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$store_name_list[] = $row['STORE_NAME'];
				$store_subcat_list[] = $row['SUB_CATEGORY'];
				$display_cat_name = $row['SUB_CATEGORY'];
				$default_retailer = 0;
		}}
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
					$query_sub_id[] = $row['SUB_ID'];
					$query_sub_name[] = $row['SUB_CATEGORY'];
					$display_cat_name = "All competitive chains for: " . $client_backend;
			}}
			
			for ($i = 0; $i < sizeof($query_sub_id) ; $i++) { 
			$temp_retailer_submap = $query_sub_id[$i];
			$query = "SELECT * FROM retail_list WHERE SUB_ID = $temp_retailer_submap";
				if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$store_name_list[] = $row['STORE_NAME'];
						$store_subcat_list[] = $row['SUB_CATEGORY'];	
				}}
			}
	
	}
	
	
	
	
	
	
	
	
	
	
	?>
	var marker5 = new google.maps.Marker({
position: new google.maps.LatLng(<?php echo $start_lat;?>, <?php echo $start_lon;?>),
map: map_ret,
icon: image_store
});





	<?php
	$temp_counter = 0;
	for ($i = 0; $i < sizeof($store_name_list) ; $i++) { 
		$temp_store_to_find = $store_name_list[$i];
		$query = "SELECT * FROM retail_store WHERE STORE_NAME = '$temp_store_to_find' AND LAT Between $start_lat_min And $start_lat_max
			 And LON Between $start_lon_min And $start_lon_max";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
					$temp_counter = $temp_counter + 1;
					$map_store_name[] = $row['STORE_NAME'];
					$map_store_address[]= $row['ADDRESS1'];
					$map_store_city[]= $row['CITY'];
					$map_store_prov[]= $row['PROV'];
					$map_store_fsaldu[]= $row['FSALDU'];
					$map_store_lat[]= $row['LAT'];
					$map_store_lon[]= $row['LON'];
					$map_store_subcategory[] = $store_subcat_list[$i];
					$map_icon_label[] = $temp_counter;
					
					$temp_distance_lon = $start_lon - $row['LON'];
					$temp_distance = sin(deg2rad($start_lat)) * sin(deg2rad($row['LAT'])) +  cos(deg2rad($start_lat)) * cos(deg2rad($row['LAT'])) * cos(deg2rad($temp_distance_lon));
					$temp_distance = acos($temp_distance);
					$temp_km = $temp_distance * 6372.795;

					$map_km[]= round($temp_km,4);
								
		}}
	}
		
	for ($i = 0; $i < sizeof($map_store_fsaldu) ; $i++) { 
	 $circle_locations = "circle_locations_b" . $i;
	 $temp_lat = $map_store_lat[$i] + ($i* 0.00001);
	 $temp_lon = $map_store_lon[$i];
	 $place_locations = "place_locations_b" . $i;
	 $contentString = "contentString_b" . $i;
	 $infowindow = "infowindow_b" . $i;
	 


	
	
						
	echo "var " . $contentString . " = \"<div id='iw-container'><div class='iw-title_retailer'>" . $map_store_subcategory[$i] . "</div><div id='bodyContent'><p><b>" . $map_icon_label[$i] . ": " .$map_store_name[$i]. "</b><br /><br />Address: " . $map_store_address[$i] . "  <br />City:  " . $map_store_city[$i] . "  <br />Province:  " . $map_store_prov[$i] . "<br />Postal code: " . $map_store_fsaldu[$i] . "</p></div></div>\";";
	
		echo "var " . $infowindow . " = new google.maps.InfoWindow({content: " . $contentString . "});";
		
		 echo "var " . $place_locations . " = new google.maps.Marker({
		 position: {lat: " . $temp_lat . ", lng: " . $temp_lon . "},
          map: map_ret,
		  label: '" . $map_icon_label[$i] . "'
        });";
		
		 echo $place_locations . ".addListener('click', function() {
          " . $infowindow . ".open(map_ret, " . $place_locations . ");
        });";
		
		
		//echo $place_locations . ".addListener('click', function() {" . $infowindow . ".setPosition(" . $place_locations . ".getCenter());" . $infowindow . ".open(map_ret, " . $place_locations . ");});";
	



	}
	
?>


}
</script>
<title>KQUEST Sequential Targeting Report </title>
</head>
<body  onLoad='initialize();'>

<div id="page-wrap">
<form action="" method="post">
<div class="noprint ">  
<label for="change_title"></label>
<table width="911" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="48%" class="black18"><strong>
<input name="change_header" type="text" class="black14" id="change_header" value="<?php echo $change_header; ?>" size="50" maxlength="150">
<br />
<input name="change_title" type="text" class="black14" id="change_title" value="<?php echo $change_title; ?>" size="50" maxlength="150">
<br>
<input name="change_prepared" type="text" class="black14" id="change_prepared" value="<?php echo $change_prepared; ?>" size="50" maxlength="75">
<br />
<input name="change_title_but1" type="submit" class="target-red bg_color1" id="change_title_but1"  onClick="TITLEsubmit2(<?php echo $store_uid ; ?>);" value="Change Title" />
</strong></td>
<td width="52%" align="right"><p>
<select id="myBench" class="pbodyemp"  onchange="list_bench()">
<option  disabled <?php if($rbenchmark == 0) echo "selected = 'selected'";?>>Comparison Base (default Canada)</option>
<option value="0" >Canada</option>
<option value="8" <?php if($rbenchmark == 8) echo "selected = 'selected'";?>>Western Canada</option>
<option value="1" <?php if($rbenchmark == 1) echo "selected = 'selected'";?>>--- British Columbia</option>
<option value="2" <?php if($rbenchmark == 2) echo "selected = 'selected'";?>>--- Alberta</option>
<option value="3" <?php if($rbenchmark == 3) echo "selected = 'selected'";?>>--- Saskatchewan</option>
<option value="4" <?php if($rbenchmark == 4) echo "selected = 'selected'";?>>--- Manitoba</option>
<option value="5" <?php if($rbenchmark == 5) echo "selected = 'selected'";?>>Ontario</option>
<option value="6" <?php if($rbenchmark == 6) echo "selected = 'selected'";?>>Quebec</option>
<option value="7" <?php if($rbenchmark == 7) echo "selected = 'selected'";?>>Atlantic Provinces</option>
<option value="9" <?php if($rbenchmark == 9) echo "selected = 'selected'";?>>--- P.E.I.</option>
<option value="10" <?php if($rbenchmark == 10) echo "selected = 'selected'";?>>--- New Brunswick</option>
<option value="11" <?php if($rbenchmark == 11) echo "selected = 'selected'";?>>--- Nova Scotia</option>
<option value="12" <?php if($rbenchmark == 12) echo "selected = 'selected'";?>>--- Newfoundland</option>
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
<select id="myReport" class="pbodyemp"  onchange="list_report()">
<option  disabled >Report to View</option>
<option value="0" <?php if($detail_show == 0 || $detail_show == 10) echo "selected='selected'";?>>Summary Report</option>
<option value="2" <?php if($detail_show == 2) echo "selected='selected'";?>>Demographics</option>
<option value="4" <?php if($detail_show == 4) echo "selected='selected'";?>>Spending</option>
<option value="5" <?php if($detail_show == 5) echo "selected='selected'";?>>Media</option>
<option value="6" <?php if($detail_show == 6) echo "selected='selected'";?>>Lifestyle</option>
<option value="7" <?php if($detail_show == 7) echo "selected='selected'";?>>Automotive</option>
<option value="8" <?php if($detail_show == 8) echo "selected='selected'";?>>Home Improvement</option>
<option value="11" <?php if($detail_show == 11) echo "selected='selected'";?>>Restaurant</option>
<option value="12" <?php if($detail_show == 12) echo "selected='selected'";?>>Retail - All</option>
<option value="9" <?php if($detail_show == 9) echo "selected='selected'";?>>Store Comparison</option>
</select>
<br />
<br />
<button class='target-red bg_color1' id="seq_targeting_but" type="button" onclick='seq_targeting1();'>Sequential Targeting</button> 
<button class="target-red bg_color1" onclick="change_report2()">Show Retailer Map</button>
<input name="change_report" type="submit" class="target-red bg_color1" id="change_report"  onClick="change_report(<?php echo $store_uid ; ?>);" value="Update Report" /></p></td>
</tr>
</table>
</div> 
<input name="report_uid" type="hidden" id="report_uid" value="<?php echo $report_uid*3571; ?>">
<input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid; ?>">
<input name="roi_totalhh" type="hidden" id="roi_totalhh" value="<?php echo $total_households; ?>">
<input type="hidden" name="roi_scores" id="roi_scores" value="<?php echo $decile_score_list; ?>">
<input type="hidden" name="roi_avgscore" id="roi_avgscore" value="<?php echo $average_score_in_area; ?>">
<input type="hidden" name="roi_20hh" id="roi_20hh" value="<?php echo $total_households*0.2; ?>">
<input name="detail_show" type="hidden" id="detail_show" value="0" size="2">
<input type="hidden" name="rbenchmark" id="rbenchmark" value="<?php echo $rbenchmark; ?>">
<input type="hidden" name="original_store" id="original_store" value="<?php echo $original_store; ?>">
<input name="store_uid" type="hidden" id="store_uid" value=""  />
</form>
</div>
<div id="proc_div" style="display: none;"><img src="please_wait.gif" width="572" height="304" alt="processing"></div>


<?php 
$report_label_type = "Market Area Insights";
if($use_yn == 5) $report_label_type = "Sequential Targeting";


/// select the agg and pages to view 
if ($detail_show == 0 || $detail_show == 10) include 'seq.tasummary.php'; 
// demographics
if ( $detail_show == 2) {  include "seq.detail_cover.php";    echo "<div class='pagebreak'></div>"; echo "<div class='page-wrap '>";  include "seq.detail2ta.php"; echo "</div"; }
// spending 
if ( $detail_show == 4) {  include "seq.detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div class='page-wrap '>";  include "seq.detail4ta.php"; echo "</div"; }
// Media 
if ( $detail_show == 5) {  include "seq.detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div class='page-wrap '>";  include "seq.detail5ta.php"; echo "</div"; }
// lifestyle
if ( $detail_show == 6) {  include "seq.detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div class='page-wrap '>";  include "seq.detail6ta.php"; echo "</div"; }
// Automotive
if ( $detail_show == 7) {  include "seq.detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div class='page-wrap '>";  include "seq.detail8ta.php"; echo "</div"; }
// iMPROVE
if ( $detail_show == 8) { include "seq.detail_cover.php";   echo "<div class='pagebreak'></div>"; echo "<div class='page-wrap '>";  include "seq.detailhhta.php"; echo "</div"; }

if ( $detail_show == 9) { include "seq.compareta.php";  }
if ( $detail_show == 11) { echo "<div class='page-wrap '>"; include "seq.detail_rest_ta.php";  echo "</div"; }
//if ( $detail_show == 12) { include "ui_detail_grocery_ta.php";  }
if ( $detail_show == 12) { echo "<div class='page-wrap '>"; include "seq.detail_retail_ta.php";  echo "</div"; }


?>
</body>
<style>
.form-button-blue{
background-color:#990033 !important;
font-weight:bold;
}
.btn-primary {
    background-color: #990033;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary{

background-color: #a31947;
}

.target-red {
    background-color: #900C3F;
    color: white !important;
    font-family: "Roboto Condensed","Lucida Grande",Helvetica,!sans-serif important;
    font-weight: bold !important;
    font-size: 15px;
}
.target-red:focus{
background-color: #a31947;

}

.psub1{
color:#990033;
}
</style>