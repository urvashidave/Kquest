<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="h1" xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="image3/kquest_favicon_icon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>KQuest Analytics The Quintessential Progam for Quantifying, Segmentinging, Profiling and Targeting High Value Consumers</title>
    
<meta name="description" content="PRECISON CONSUMER INSIGHTS. TARGETED MEDIA EXECUTION. We are leaders in providing retailers and direct marketers with demographic, consumer spend, media and lifestyle analytics." />

	<meta name="keywords" content="Customer Insights, advanced consumer targeting, consumer targeting, demographics, segmentation, media planning, lifestyle analysis, optimize ROI, retail, analysis and targeting, digital media campaigns, newspaper, radio, Customer demographics, customer segmentation, customer profiling, flyer program, digital advertising, loyalty, social media traits, effective advertising campaigns " />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121220884-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121220884-2');
</script>




<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<link rel='STYLESHEET' type='text/css' href='print.css'>
<link rel='STYLESHEET' media='print' type='text/css' href='print.css'>


<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 //do some code
 ?>
 <style>
 
 
 .container {
    width:100% !important;;
    max-width:100% !important;;
    margin-left:1% !important;
}
#main_form {

  margin-left:1% !important;
  width:100% !important;
  max-width:100% !important;


}

</style>
<?php
}

// Any tablet device.
if( $detect->isTablet() ){
 //do some code
}

?>
<style type="text/css">

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}

#page-wrap {
    width: 900px;
    margin: 0 auto;
}
body {
	background-color: #FFFFFF;
}
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
#main_form{page-break-before: avoid;}
@media print {


div.noprint {display:none;}


}
@media print { p {page-break-inside: avoid;}
.tgdr { page-break-before: avoid }
div.page{page-break-inside: avoid;} }
</style>
<?php 
include 'db_connect.php'; 

if (isset($_POST["rp_title"])) {	$rp_title = $_POST["rp_title"];} else $rp_title = "";
//default title in case I forget to update
$inter_title = "KQUEST";
$rp_title = "KQUEST";
//get user information
include 'get_user_info.php'; 

//get title of page
$map_body_yn = "";
$inter_title = "KQUEST";
$upload_form_yn = "";


//identify if there is any ajax processes
if (isset($_POST["process_page"])) $process_page = $_POST["process_page"]; else $process_page = "na";

//change form type for uploader
$upload_form_yn = "";
if($next_page == "ui_csvload.php") $upload_form_yn = "enctype='multipart/form-data'";
if($next_page == "ui_csvload_mfd.php") $upload_form_yn = "enctype='multipart/form-data'";
if($next_page == "ui_postcsv.php") $upload_form_yn = "enctype='multipart/form-data'";
if($next_page == "ui_editpoly.php") $upload_form_yn = "enctype='multipart/form-data'";
if($next_page == "ui_postpolyedit.php") $upload_form_yn = "enctype='multipart/form-data'";

if($next_page == "ui_batchload_mfd.php") $upload_form_yn = "enctype='multipart/form-data'";
if($next_page == "ui_batch_done_mfd.php") $upload_form_yn = "enctype='multipart/form-data'";
if($next_page == "ui_fsaldu_load_mfd.php") $upload_form_yn = "enctype='multipart/form-data'";
if($next_page == "logo_upload.php") $upload_form_yn = "enctype='multipart/form-data'";

if($next_page == "ui_mapload.php") $map_body_yn = "onLoad='initialize();'";
if($next_page == "ui_viewreport.php") $map_body_yn = "onLoad='initialize();'";
if($next_page == "ui_homema.php") $map_body_yn = "onLoad='initialize();'";
if($next_page == "ui_home2.php") $map_body_yn = "onLoad='initialize();'";
if($next_page == "ui_hometarget.php") $map_body_yn = "onLoad='initialize();'";
if($next_page == "ui_storema.php") $map_body_yn = "onLoad='initialize();'";
if($next_page == "ui_storema2.php") $map_body_yn = "onLoad='initialize();'";
?>


<title>KQUEST</title>

<SCRIPT language="JavaScript">
function HOMEsubmit() {
document.main_form.target = "_top";
document.getElementById('next_page').value = "ui_home.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function TRADEAREAsubmit(color) {
document.getElementById('next_page_color').value = color;
document.getElementById('next_page').value = "ui_tradearea.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function ADMINsubmit() {
document.getElementById('next_page').value = "ui_admin_home.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function ADDCOMPANYsubmit() {
document.getElementById('next_page').value = "ui_add_company.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function ADDUSERsubmit() {
document.getElementById('add_new_user_yn').value = 1;
document.getElementById('next_page').value = "ui_company_edit.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function EDITUSERsubmit() {
document.getElementById('add_new_user_yn').value = 1;
document.getElementById('next_page').value = "ui_user_edit.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function PICKUSERsubmit(val) {
document.getElementById('client_user_id').value = val;
document.getElementById('next_page').value = "ui_user_edit.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function PICKCOMPANYsubmit(val) {
document.getElementById('user_client_id').value = val;
document.getElementById('next_page').value = "ui_company_edit.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function STOREDEMOsubmit() {
document.getElementById('next_page').value = "ui_storedemo.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function MAPLOADsubmit(color) {
document.getElementById('next_page_color').value = color;
document.getElementById('next_page').value = "ui_mapload.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function POSTMAPsubmit() {
document.getElementById('loading_image').style.display="block";
document.getElementById('next_page').value = "ui_postmap.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function CSVsubmit(color) {
document.getElementById('next_page_color').value = color;
document.getElementById('next_page').value = "ui_csvload.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function CSVmfdsubmit() {
document.getElementById('next_page').value = "ui_csvload_mfd.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function BATCHstoresubmit() {
document.getElementById('next_page').value = "ui_batchload_mfd.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function postBATCHstoresubmit() {
document.getElementById('next_page').value = "ui_fsaldu_load_mfd.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function BATCHcompletesubmit() {
document.getElementById('next_page').value = "ui_batch_done_mfd.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
BATCHcompletesubmit

function POSTCSVsubmit() {
document.getElementById('loading_image').style.display="block";
document.getElementById('next_page').value = "ui_postcsv.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function POSTCSVmfdsubmit() {
document.getElementById('loading_image').style.display="block";
document.getElementById('next_page').value = "ui_postcsv_mfd.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}


function SELECTSTOREsubmit() {
document.getElementById('next_page').value = "ui_selectstore.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function PICKDEMOsubmit(val) {
document.getElementById('store_uid').value = val;
document.getElementById('next_page').value = "ui_pickdemo.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function MFDsubmit() {
var user_uid_js = document.getElementById('mfd_uid').value;
document.main_form.action = "http://marketfocusdirect.ca/Kquest/index2.cfm?CFID=15801600&CFTOKEN=18208302&u=" + user_uid_js;
document.main_form.target = "_top";
document.main_form.submit(); 	
}
function PICKSTOREsubmit(val) {
document.getElementById('store_selected').value = val;
document.getElementById('next_page').value = "ui_store.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function ORDERXMLsubmit() {
var page_to_open = "ui_XML.php?report_uid=" + document.getElementById('report_uid').value;
	window.open(page_to_open, '_blank');	
}
function ORDERCSVsubmit(val) {
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "ui_webservice.php";
document.main_form.target = "_top";
document.main_form.submit();
//var page_to_open = "ui_webservice.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
}

function PROFILEREPORTsubmit(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "ui_profile.php";
document.main_form.target = "_top";
document.main_form.submit();		
}

function CALCREPORTsubmit(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "ui_roi.php";
document.main_form.target = "_top";
document.main_form.submit();		
}

function VIEWREPORTsubmit() {

var var_checked_string = "";
var var_checked_counter = 0;

	for (i = 0; i < document.getElementsByName('var1').length; i++) {
		
            if(document.main_form["var1"][i].checked){
				if(var_checked_counter < 1) var_checked_string = document.getElementsByName('var1')[i].value;
				else
                var_checked_string = var_checked_string + "|" + document.getElementsByName('var1')[i].value;
				var_checked_counter = var_checked_counter +1;
            }
	}        
document.getElementById('get_report_id').value = var_checked_string;
if(var_checked_counter>0 && var_checked_counter <10) {
	document.getElementById('error_note').innerHTML  = "Generating report now ...";
	//document.getElementById('loading_image').style.display="block";
	document.main_form.target = "_top";
	document.getElementById('next_page').value = "ui_viewreport.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 	
}
else
document.getElementById('error_note').innerHTML  = "SELECT 1-10 TRAITS BEFORE CONTINUING";
}

function ORDERNOWsubmit() {
	document.main_form.target = "_top";
document.getElementById('next_page').value = "ui_ordernow.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}


function UPLOADNOWcalc() {
document.getElementById('loading_image').style.display="block";
var radio_check_val = 0;
        for (i = 0; i < document.getElementsByName('storea').length; i++) {
            if (document.getElementsByName('storea')[i].checked) {
                radio_check_val = document.getElementsByName('storea')[i].value;
            }
        }
document.getElementById('client_id_output').value = radio_check_val;
if (radio_check_val >0) {
	document.getElementById('next_page').value = "new_store_upload.php";
	document.main_form.target = "_top";
	document.main_form.submit(); }

	}

function SCORENOWcalc() {
document.getElementById('loading_image').style.display="block";
document.main_form.target = "_top";
document.getElementById('next_page').value = "score_stores.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function Deletebuttonb(var1) {
document.main_form.target = "_top";
document.getElementById('file_to_delete').value = var1;
document.getElementById('next_page').value = "delete_file.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function REPORTopen() {
	//window.open('mfd_store_report.php', '_blank');
	var radio_check_check = 0;	
	var radio_check_val = 0;
        for (i = 0; i < document.getElementsByName('storea').length; i++) {
            if (document.getElementsByName('storea')[i].checked) {
                radio_check_val = document.getElementsByName('storea')[i].value;
				radio_check_check = radio_check_check +1;
            }
        }
		
	var var_checked_string = "";
	var var_checked_counter = 0;
	for (i = 0; i < document.getElementsByName('var1').length; i++) {
            if(document.main_form["var1"][i].checked){
                var_checked_string = var_checked_string + "88" + document.getElementsByName('var1')[i].value;
				var_checked_counter = var_checked_counter +1;
            }
        }

	if(radio_check_check>0 && var_checked_counter>0 && var_checked_counter <4) {
	var client_store=radio_check_val.split("_")	;
	document.getElementById('get_report_id').value = "store_report.php?user=mfd&apikey=mdf98u9fdsg8d7s&client=" + client_store[0] +"&store=" + client_store[1] +"&vars=" + var_checked_string;
	var page_to_open = "store_report.php?user=mfd&apikey=mdf98u9fdsg8d7s&client=" + client_store[0] +"&store=" + client_store[1] +"&vars=" + var_checked_string;
	window.open(page_to_open, '_blank');
	
	} else document.getElementById('get_report_id').value = "nope";
	
}

function CSVopen() {
	//window.open('mfd_store_report.php', '_blank');
	var radio_check_check = 0;	
	var radio_check_val = 0;
        for (i = 0; i < document.getElementsByName('storea').length; i++) {
            if (document.getElementsByName('storea')[i].checked) {
                radio_check_val = document.getElementsByName('storea')[i].value;
				radio_check_check = radio_check_check +1;
            }
        }
		
	var var_checked_string = "";
	var var_checked_counter = 0;
	for (i = 0; i < document.getElementsByName('var1').length; i++) {
            if(document.main_form["var1"][i].checked){
                var_checked_string = var_checked_string + "88" + document.getElementsByName('var1')[i].value;
				var_checked_counter = var_checked_counter +1;
            }
        }

	if(radio_check_check>0 && var_checked_counter>0 && var_checked_counter <4) {
	var client_store=radio_check_val.split("_")	;
	document.getElementById('get_report_id').value = "store_report.php?user=mfd&apikey=mdf98u9fdsg8d7s&client=" + client_store[0] +"&store=" + client_store[1] +"&vars=" + var_checked_string;
	var page_to_open = "csv_output.php?user=mfd&apikey=mdf98u9fdsg8d7s&client=" + client_store[0] +"&store=" + client_store[1] +"&vars=" + var_checked_string;
	window.open(page_to_open, '_blank');
	
	} else document.getElementById('get_report_id').value = "nope";
	
}

function ADDclient() {
document.getElementById('next_page').value = "ta_upload.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
	
</SCRIPT>

<?php 
// calulation pages
//if($next_page == "ui_postcsv.php") include 'ui_postcsv_head.php';
if($next_page == "map_postfile.php") include 'interface_head/hmap_postfile.php';
if($next_page == "ta_postfile.php") include 'interface_head/hta_postfile.php';
if($next_page == "confirm_reports.php") include 'interface_head/calc_all_mods.php';
if($next_page == "seg_postfile.php") include 'interface_head/hseg_postfile.php';




 ?>
</head>

<body <?php if($next_page == "ui_home.php") echo "onLoad='initialize();'"; echo $map_body_yn; echo $upload_form_yn; ?>>

<?php 
include 'qi_topbar.php'; 
?>

</body>
</html>