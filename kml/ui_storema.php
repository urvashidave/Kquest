<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<?php
if (isset($_POST["store_selected"])) {	$store_uid = $_POST["store_selected"];} else $store_uid = " ";
include 'db_connect.php'; 

		
$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid  ORDER BY store_number ";
	if ($result = mysqli_query($link, $query)) {
	
			while ($row = mysqli_fetch_assoc($result)) {
				$temp_store_pc = $row['store_pc'];
				$temp_store_pc = str_replace(' ', '', $temp_store_pc);
				$store_pc = preg_replace("/[^a-zA-Z0-9]+/", "", $temp_store_pc);
				$client_id = $row['client_id'];
				$store_number = $row['store_number'];
			}
	}

$query = "Select pc_lat, pc_lon FROM a12_pc_geocode WHERE PostCode = '$store_pc' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $temp_ethnic_lat = $row['pc_lat'];
					  $temp_ethnic_lon = $row['pc_lon'];
$PostCode =$store_pc_array[$count_dwi]; 
if($temp_counter < 3000){
					$cust_toronto[] = "['" . $PostCode .  "', " .  $temp_ethnic_lat . ", " . $temp_ethnic_lon . ", " . $temp_counter . "],";
}
					$temp_counter = $temp_counter +1;

				}				
			mysqli_free_result($result);
		}


$count_dwi2 = $count_dwi+1;
$cust_toronto[] = "['Blank', 0, 0, $count_dwi2]"; 
	
	$start_lat = $temp_ethnic_lat;
	$start_lon = $temp_ethnic_lon;
	$start_zoom = 12;

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
document.main_form.target = "_top";
document.main_form.submit();
//var page_to_open = "ui_webservice.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
}

function TADETAILsubmit2(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('next_page').value = "ui_tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();
}
function detail_show2(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 2;
document.getElementById('next_page').value = "ui_tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();
}
function detail_show3(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 3;
document.getElementById('next_page').value = "ui_tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();
}
function detail_show4(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 4;
document.getElementById('next_page').value = "ui_tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();
}
function detail_show5(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 5;
document.getElementById('next_page').value = "ui_tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();
}
function detail_show6(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 6;
document.getElementById('next_page').value = "ui_tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();
}
function detail_show7(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 7;
document.getElementById('next_page').value = "ui_tadetails.php";
document.main_form.target = "_top";
document.main_form.submit();
}
function detail_show9(val) {
document.getElementById('report_uid').value = val;
document.getElementById('store_selected').value = val;
document.getElementById('detail_show').value = 9;
document.getElementById('next_page').value = "ui_storema2.php";
document.main_form.target = "_top";
document.main_form.submit();
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
	}
	
.print_pages {
  width: 910px;
  height: 620px;
  background: #fff;
  margin: 25px 0 0 0;
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

</style>
<title>KQUEST Store Summary</title>

<?php 



$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_number = $row['store_number'];
					  $store_name = $row['store_name'];
					  $store_pc = $row['store_pc'];
				}				
			mysqli_free_result($result);
		}


$query = "SELECT 
SUM(demo.age_2029p*demo.age_adults) as age_2029
, SUM(demo.age_3039p*demo.age_adults) as age_3039
, SUM(demo.age_4049p*demo.age_adults) as age_4049
, SUM(demo.age_5059p*demo.age_adults) as age_5059
, SUM(demo.age_6069p*demo.age_adults) as age_6069
, SUM(demo.age_70p*demo.age_adults) as age_70 
, SUM(demo.age_kidsy*demo.PP_TOT) as age_kidsy
, SUM(demo.age_kidsold*demo.PP_TOT) as age_kidsold
, SUM(demo.inc030p*demo.IN_THH) as inc030
, SUM(demo.inc3070p*demo.IN_THH) as inc3070
, SUM(demo.inc70100p*demo.IN_THH) as inc70100
, SUM(demo.inc100p*demo.IN_THH) as inc100
, SUM(demo.fm_singlep*demo.IN_THH) as fm_single
, SUM(demo.couplep*demo.IN_THH) as couple
, SUM(demo.familyp*demo.IN_THH) as family
, SUM(demo.sparentp*demo.IN_THH) as sparent , 
SUM(demo.age_2029i*demo.age_adults) as age_2029i2
, SUM(demo.age_3039i*demo.age_adults) as age_3039i2
, SUM(demo.age_4049i*demo.age_adults) as age_4049i2
, SUM(demo.age_5059i*demo.age_adults) as age_5059i2
, SUM(demo.age_6069i*demo.age_adults) as age_6069i2
, SUM(demo.age_70i*demo.age_adults) as age_70i2 
, SUM(demo.age_kidsyi*demo.PP_TOT) as age_kidsyi2
, SUM(demo.age_kidsoldi*demo.PP_TOT) as age_kidsoldi2
, SUM(demo.inc030i*demo.IN_THH) as inc030i2
, SUM(demo.inc3070i*demo.IN_THH) as inc3070i2
, SUM(demo.inc70100i*demo.IN_THH) as inc70100i2
, SUM(demo.inc100i*demo.IN_THH) as inc100i2
, SUM(demo.fm_singlei*demo.IN_THH) as fm_singlei2
, SUM(demo.couplei*demo.IN_THH) as couplei2
, SUM(demo.familyi*demo.IN_THH) as familyi2
, SUM(demo.sparenti*demo.IN_THH) as sparenti2 , 
SUM(demo.IN_THH) as IN_THH ,
SUM(demo.age_adults) as age_adults ,
SUM(demo.PP_TOT) as PP_TOT,
AVG(demo.IN_AHH) as IN_AHH,
SUM(mn.MN_TOT) as MN_TOT,
SUM(mn.MN_VIS) as MN_VIS,
SUM(mn.MN_CHINESE) as MN_CHINESE,
SUM(mn.MN_SASIAN) as MN_SASIAN,
SUM(mn.MN_BLACK) AS MN_BLACK
, SUM(bbm.SP_GRH200i*PP15_) as SP_GRH200
, SUM(bbm.SP_AP500i*PP15_) as SP_AP500
, SUM(bbm.SP_MC500i*PP15_) as SP_MC500
, SUM(bbm.SP_WC500i*PP15_) as SP_WC500
, SUM(bbm.SP_CC500i*PP15_) as SP_CC500
, SUM(bbm.SP_BB500i*PP15_) as SP_BB500
, SUM(bbm.SP_BO500i*PP15_) as SP_BO500
, SUM(bbm.SP_CT500i*PP15_) as SP_CT500
, SUM(bbm.SP_CB500i*PP15_) as SP_CB500
, SUM(bbm.SP_FNT500i*PP15_) as SP_FNT500
, SUM(bbm.SP_GS500i*PP15_) as SP_GS500
, SUM(bbm.SP_HS500i*PP15_) as SP_HS500
, SUM(bbm.SP_HD500i*PP15_) as SP_HD500
, SUM(bbm.SP_PT500i*PP15_) as SP_PT500
, SUM(bbm.SP_PG500i*PP15_) as SP_PG500
, SUM(bbm.SP_MS500i*PP15_) as SP_MS500
, SUM(bbm.SP_WS500i*PP15_) as SP_WS500
, SUM(bbm.SP_CS500i*PP15_) as SP_CS500
, SUM(bbm.SP_SG500i*PP15_) as SP_SG500
, SUM(bbm.SP_TO500i*PP15_) as SP_TO500
, SUM(bbm.SP_JW500i*PP15_) as SP_JW500
, SUM(bbm.SP_OS500i*PP15_) as SP_OS500
, SUM(bbm.PP15_) as PP15_

, SUM(bbm.SP_GRH200*PP15_) as SP_GRH200p
, SUM(bbm.SP_AP500*PP15_) as SP_AP500p
, SUM(bbm.SP_MC500*PP15_) as SP_MC500p
, SUM(bbm.SP_WC500*PP15_) as SP_WC500p
, SUM(bbm.SP_CC500*PP15_) as SP_CC500p
, SUM(bbm.SP_BB500*PP15_) as SP_BB500p
, SUM(bbm.SP_BO500*PP15_) as SP_BO500p
, SUM(bbm.SP_CT500*PP15_) as SP_CT500p
, SUM(bbm.SP_CB500*PP15_) as SP_CB500p
, SUM(bbm.SP_FNT500*PP15_) as SP_FNT500p
, SUM(bbm.SP_GS500*PP15_) as SP_GS500p
, SUM(bbm.SP_HS500*PP15_) as SP_HS500p
, SUM(bbm.SP_HD500*PP15_) as SP_HD500p
, SUM(bbm.SP_PT500*PP15_) as SP_PT500p
, SUM(bbm.SP_PG500*PP15_) as SP_PG500p
, SUM(bbm.SP_MS500*PP15_) as SP_MS500p
, SUM(bbm.SP_WS500*PP15_) as SP_WS500p
, SUM(bbm.SP_CS500*PP15_) as SP_CS500p
, SUM(bbm.SP_SG500*PP15_) as SP_SG500p
, SUM(bbm.SP_TO500*PP15_) as SP_TO500p
, SUM(bbm.SP_JW500*PP15_) as SP_JW500p
, SUM(bbm.SP_OS500*PP15_) as SP_OS500p

, SUM(sp.D4180*demo.IN_THH) as D4180

, SUM(sp3.D2001*demo.IN_THH) as D2001
, SUM(sp3.D2011*demo.IN_THH) as D2011
, SUM(sp3.D2270_2300*demo.IN_THH) as D2270_2300
, SUM(sp3.D2270*demo.IN_THH) as D2270
, SUM(sp3.D2280*demo.IN_THH) as D2280
, SUM(sp3.D2290*demo.IN_THH) as D2290
, SUM(sp3.D2300*demo.IN_THH) as D2300
, SUM(sp3.D2310*demo.IN_THH) as D2310
, SUM(sp3.D2340_2370*demo.IN_THH) as D2340_2370
, SUM(sp3.D2340*demo.IN_THH) as D2340
, SUM(sp3.D2350*demo.IN_THH) as D2350
, SUM(sp3.D2360*demo.IN_THH) as D2360
, SUM(sp3.D2370*demo.IN_THH) as D2370
, SUM(sp3.D2380*demo.IN_THH) as D2380
, SUM(sp3.D2500_2534*demo.IN_THH) as D2500_2534
, SUM(sp3.D2500*demo.IN_THH) as D2500
, SUM(sp3.D2510*demo.IN_THH) as D2510
, SUM(sp3.D2520*demo.IN_THH) as D2520
, SUM(sp3.D2534*demo.IN_THH) as D2534
, SUM(sp3.D2540_2680*demo.IN_THH) as D2540_2680
, SUM(sp3.D2540_2590*demo.IN_THH) as D2540_2590
, SUM(sp3.D2540*demo.IN_THH) as D2540
, SUM(sp3.D2542*demo.IN_THH) as D2542
, SUM(sp3.D2550*demo.IN_THH) as D2550
, SUM(sp3.D2552*demo.IN_THH) as D2552
, SUM(sp3.D2554*demo.IN_THH) as D2554
, SUM(sp3.D2560*demo.IN_THH) as D2560
, SUM(sp3.D2570*demo.IN_THH) as D2570
, SUM(sp3.D2580*demo.IN_THH) as D2580
, SUM(sp3.D2582*demo.IN_THH) as D2582
, SUM(sp3.D2584*demo.IN_THH) as D2584
, SUM(sp3.D2586*demo.IN_THH) as D2586
, SUM(sp3.D2590*demo.IN_THH) as D2590
, SUM(sp3.D2600_2602*demo.IN_THH) as D2600_2602
, SUM(sp3.D2600*demo.IN_THH) as D2600
, SUM(sp3.D2602*demo.IN_THH) as D2602
, SUM(sp3.D2610*demo.IN_THH) as D2610
, SUM(sp3.D2620*demo.IN_THH) as D2620
, SUM(sp3.D2630*demo.IN_THH) as D2630
, SUM(sp3.D2640*demo.IN_THH) as D2640
, SUM(sp3.D2650*demo.IN_THH) as D2650
, SUM(sp3.D2660*demo.IN_THH) as D2660
, SUM(sp3.D2670*demo.IN_THH) as D2670
, SUM(sp3.D2674*demo.IN_THH) as D2674
, SUM(sp3.D2680*demo.IN_THH) as D2680
, SUM(sp3.D2690*demo.IN_THH) as D2690
, SUM(sp3.D2700*demo.IN_THH) as D2700
, SUM(sp3.D2710*demo.IN_THH) as D2710


, SUM(asp1.D1000_1560*demo.IN_THH) as aD1000_1560
, SUM(asp1.D1000_1520*demo.IN_THH) as aD1000_1520
, SUM(asp1.D2000_2070*demo.IN_THH) as aD2000_2070
, SUM(asp1.D2200_2380*demo.IN_THH) as aD2200_2380
, SUM(asp1.D2200_2230*demo.IN_THH) as aD2200_2230
, SUM(asp1.D2240_2244*demo.IN_THH) as aD2240_2244
, SUM(asp1.D2270_2300*demo.IN_THH) as aD2270_2300
, SUM(asp1.D2340_2370*demo.IN_THH) as aD2340_2370
, SUM(asp1.D2500_2730*demo.IN_THH) as aD2500_2730
, SUM(asp1.D2540_2680*demo.IN_THH) as aD2540_2680
, SUM(asp1.D2540*demo.IN_THH) as aD2540
, SUM(asp1.D2542*demo.IN_THH) as aD2542
, SUM(asp1.D2550*demo.IN_THH) as aD2550
, SUM(asp1.D2552*demo.IN_THH) as aD2552
, SUM(asp1.D2554*demo.IN_THH) as aD2554
, SUM(asp1.D2560*demo.IN_THH) as aD2560
, SUM(asp1.D2570*demo.IN_THH) as aD2570
, SUM(asp1.D2580*demo.IN_THH) as aD2580
, SUM(asp1.D2582*demo.IN_THH) as aD2582
, SUM(asp1.D2584*demo.IN_THH) as aD2584
, SUM(asp1.D2586*demo.IN_THH) as aD2586
, SUM(asp1.D2590*demo.IN_THH) as aD2590
, SUM(asp1.D2600_2602*demo.IN_THH) as aD2600_2602
, SUM(asp1.D2600*demo.IN_THH) as aD2600
, SUM(asp1.D2602*demo.IN_THH) as aD2602
, SUM(asp1.D2610_2630*demo.IN_THH) as aD2610_2630
, SUM(asp1.D2610*demo.IN_THH) as aD2610
, SUM(asp1.D2620*demo.IN_THH) as aD2620
, SUM(asp1.D2630*demo.IN_THH) as aD2630
, SUM(asp1.D2640*demo.IN_THH) as aD2640
, SUM(asp1.D2650*demo.IN_THH) as aD2650
, SUM(asp1.D2660*demo.IN_THH) as aD2660
, SUM(asp1.D2670*demo.IN_THH) as aD2670
, SUM(asp1.D2672*demo.IN_THH) as aD2672
, SUM(asp1.D2674*demo.IN_THH) as aD2674
, SUM(asp1.D2680*demo.IN_THH) as aD2680
, SUM(asp2.D2800_2975*demo.IN_THH) as aD2800_2975
, SUM(asp2.D2800_2840*demo.IN_THH) as aD2800_2840
, SUM(asp2.D2850_2890*demo.IN_THH) as aD2850_2890
, SUM(asp2.D2900_2920*demo.IN_THH) as aD2900_2920
, SUM(asp2.D2950_2975*demo.IN_THH) as aD2950_2975
, SUM(asp2.D3000_3260*demo.IN_THH) as aD3000_3260
, SUM(asp2.D3000_3004*demo.IN_THH) as aD3000_3004
, SUM(asp2.D3050_3130*demo.IN_THH) as aD3050_3130
, SUM(asp2.D3300_3384*demo.IN_THH) as aD3300_3384
, SUM(asp2.D3500_3580*demo.IN_THH) as aD3500_3580
, SUM(asp2.D3530_3560*demo.IN_THH) as aD3530_3560
, SUM(asp2.D3570_3580*demo.IN_THH) as aD3570_3580
, SUM(asp2.D3700_4190*demo.IN_THH) as aD3700_4190
, SUM(asp2.D3700_3830*demo.IN_THH) as aD3700_3830
, SUM(asp2.D3700*demo.IN_THH) as aD3700
, SUM(asp2.D3710*demo.IN_THH) as aD3710
, SUM(asp2.D3720*demo.IN_THH) as aD3720
, SUM(asp2.D3750_3760*demo.IN_THH) as aD3750_3760
, SUM(asp2.D3750_3752*demo.IN_THH) as aD3750_3752
, SUM(asp2.D3770_3774*demo.IN_THH) as aD3770_3774
, SUM(asp2.D3900_3980*demo.IN_THH) as aD3900_3980
, SUM(asp2.D3900_3918*demo.IN_THH) as aD3900_3918
, SUM(asp2.D3900*demo.IN_THH) as aD3900
, SUM(asp2.D4000_4070*demo.IN_THH) as aD4000_4070
, SUM(asp2.D4000_4040*demo.IN_THH) as aD4000_4040
, SUM(asp2.D4100_4190*demo.IN_THH) as aD4100_4190
, SUM(asp2.D4100_4140*demo.IN_THH) as aD4100_4140
, SUM(asp2.D4150_4170*demo.IN_THH) as aD4150_4170
, SUM(asp2.D4180*demo.IN_THH) as aD4180
, SUM(asp3.D4300_4340*demo.IN_THH) as aD4300_4340
, SUM(asp3.D4400_4470*demo.IN_THH) as aD4400_4470
, SUM(asp3.D4400_4410*demo.IN_THH) as aD4400_4410
, SUM(asp3.D4500_4540*demo.IN_THH) as aD4500_4540
, SUM(asp3.D4520*demo.IN_THH) as aD4520
, SUM(asp3.D4530*demo.IN_THH) as aD4530
, SUM(asp3.D4800_4840*demo.IN_THH) as aD4800_4840
, SUM(asp3.D4600_4720*demo.IN_THH) as aD4600_4720
, SUM(asp3.D4630_4660*demo.IN_THH) as aD4630_4660
, SUM(asp3.D4710_4720*demo.IN_THH) as aD4710_4720
, SUM(asp3.D4900_4930*demo.IN_THH) as aD4900_4930
, SUM(asp3.D5000_5084*demo.IN_THH) as aD5000_5084
, SUM(asp3.D5200_5230*demo.IN_THH) as aD5200_5230
, SUM(asp3.D5220_5230*demo.IN_THH) as aD5220_5230
, SUM(asp3.D1000_4840*demo.IN_THH) as aD1000_4840
, SUM(asp3.D1000_5230*demo.IN_THH) as aD1000_5230

 FROM a12_mfd_demo demo, a12_demo_mn mn, a12_mfd_bbm bbm, a12_mfd_sp sp, a12_mfd_sp3 sp3, a12_sp1_a asp1, a12_sp2_a asp2, a12_sp3_a asp3, amfd_pclist pclist WHERE pclist.store_uid = $store_uid and pclist.PostCode = demo.PostCode and pclist.PostCode = mn.PostCode and pclist.PostCode = bbm.PostCode and pclist.PostCode = sp.POSTCODE and pclist.PostCode = sp3.POSTCODE and pclist.PostCode = asp1.PostCode and pclist.PostCode = asp2.PostCode and pclist.PostCode = asp3.PostCode ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
								$age_2029= $row['age_2029'];
								$age_3039= $row['age_3039'];
								$age_4049= $row['age_4049'];
								$age_5059= $row['age_5059'];
								$age_6069= $row['age_6069'];
								$age_70= $row['age_70'];
								$age_kidsy= $row['age_kidsy'];
								$age_kidsold= $row['age_kidsold'];
								$inc030= $row['inc030'];
								$inc3070= $row['inc3070'];
								$inc70100= $row['inc70100'];
								$inc100= $row['inc100'];
								$fm_single= $row['fm_single'];
								$couple= $row['couple'];
								$family= $row['family'];
								$sparent= $row['sparent'];
								
								$age_2029i2= $row['age_2029i2'];
								$age_3039i2= $row['age_3039i2'];
								$age_4049i2= $row['age_4049i2'];
								$age_5059i2= $row['age_5059i2'];
								$age_6069i2= $row['age_6069i2'];
								$age_70i2= $row['age_70i2'];
								$age_kidsyi2= $row['age_kidsyi2'];
								$age_kidsoldi2= $row['age_kidsoldi2'];
								$inc030i2= $row['inc030i2'];
								$inc3070i2= $row['inc3070i2'];
								$inc70100i2= $row['inc70100i2'];
								$inc100i2= $row['inc100i2'];
								$fm_singlei2= $row['fm_singlei2'];
								$couplei2= $row['couplei2'];
								$familyi2= $row['familyi2'];
								$sparenti2= $row['sparenti2'];
								
								$IN_THH= $row['IN_THH'];
								$age_adults= $row['age_adults'];
								$PP_TOT= $row['PP_TOT'];
								$IN_AHHp= $row['IN_AHH'];
								$MN_TOT= $row['MN_TOT'];
								$MN_VIS= $row['MN_VIS'];
								$MN_CHINESE= $row['MN_CHINESE'];
								$MN_SASIAN= $row['MN_SASIAN'];
								$MN_BLACK= $row['MN_BLACK'];
								$SP_GRH200 = $row['SP_GRH200'];
								$SP_AP500 = $row['SP_AP500'];
								$SP_MC500 = $row['SP_MC500'];
								$SP_WC500 = $row['SP_WC500'];
								$SP_CC500 = $row['SP_CC500'];
								$SP_BB500 = $row['SP_BB500'];
								$SP_BO500 = $row['SP_BO500'];
								$SP_CT500 = $row['SP_CT500'];
								$SP_CB500 = $row['SP_CB500'];
								$SP_FNT500 = $row['SP_FNT500'];
								$SP_GS500 = $row['SP_GS500'];
								$SP_HS500 = $row['SP_HS500'];
								$SP_HD500 = $row['SP_HD500'];
								$SP_PT500 = $row['SP_PT500'];
								$SP_PG500 = $row['SP_PG500'];
								$SP_MS500 = $row['SP_MS500'];
								$SP_WS500 = $row['SP_WS500'];
								$SP_CS500 = $row['SP_CS500'];
								$SP_SG500 = $row['SP_SG500'];
								$SP_TO500 = $row['SP_TO500'];
								$SP_JW500 = $row['SP_JW500'];
								$SP_OS500 = $row['SP_OS500'];
								
								$PP15_ = $row['PP15_'];
								
									$SP_GRH200p = $row['SP_GRH200p'];
								$SP_AP500p = $row['SP_AP500p'];
								$SP_MC500p = $row['SP_MC500p'];
								$SP_WC500p = $row['SP_WC500p'];
								$SP_CC500p = $row['SP_CC500p'];
								$SP_BB500p = $row['SP_BB500p'];
								$SP_BO500p = $row['SP_BO500p'];
								$SP_CT500p = $row['SP_CT500p'];
								$SP_CB500p = $row['SP_CB500p'];
								$SP_FNT500p = $row['SP_FNT500p'];
								$SP_GS500p = $row['SP_GS500p'];
								$SP_HS500p = $row['SP_HS500p'];
								$SP_HD500p = $row['SP_HD500p'];
								$SP_PT500p = $row['SP_PT500p'];
								$SP_PG500p = $row['SP_PG500p'];
								$SP_MS500p = $row['SP_MS500p'];
								$SP_WS500p = $row['SP_WS500p'];
								$SP_CS500p = $row['SP_CS500p'];
								$SP_SG500p = $row['SP_SG500p'];
								$SP_TO500p = $row['SP_TO500p'];
								$SP_JW500p = $row['SP_JW500p'];
								$SP_OS500p = $row['SP_OS500p'];
								
$D4180 = $row['D4180'];

$D2001 = $row['D2001'];
$D2011 = $row['D2011'];
$D2270_2300 = $row['D2270_2300'];
$D2270 = $row['D2270'];
$D2280 = $row['D2280'];
$D2290 = $row['D2290'];
$D2300 = $row['D2300'];
$D2310 = $row['D2310'];
$D2340_2370 = $row['D2340_2370'];
$D2340 = $row['D2340'];
$D2350 = $row['D2350'];
$D2360 = $row['D2360'];
$D2370 = $row['D2370'];
$D2380 = $row['D2380'];
$D2500_2534 = $row['D2500_2534'];
$D2500 = $row['D2500'];
$D2510 = $row['D2510'];
$D2520 = $row['D2520'];
$D2534 = $row['D2534'];
$D2540_2680 = $row['D2540_2680'];
$D2540_2590 = $row['D2540_2590'];
$D2540 = $row['D2540'];
$D2542 = $row['D2542'];
$D2550 = $row['D2550'];
$D2552 = $row['D2552'];
$D2554 = $row['D2554'];
$D2560 = $row['D2560'];
$D2570 = $row['D2570'];
$D2580 = $row['D2580'];
$D2582 = $row['D2582'];
$D2584 = $row['D2584'];
$D2586 = $row['D2586'];
$D2590 = $row['D2590'];
$D2600_2602 = $row['D2600_2602'];
$D2600 = $row['D2600'];
$D2602 = $row['D2602'];
$D2610 = $row['D2610'];
$D2620 = $row['D2620'];
$D2630 = $row['D2630'];
$D2640 = $row['D2640'];
$D2650 = $row['D2650'];
$D2660 = $row['D2660'];
$D2670 = $row['D2670'];
$D2674 = $row['D2674'];
$D2680 = $row['D2680'];
$D2690 = $row['D2690'];
$D2700 = $row['D2700'];
$D2710 = $row['D2710'];

				
$aD1000_5230c = $row['aD1000_5230'];
$aD1000_4840c = $row['aD1000_4840'];
$aD1000_1560c = $row['aD1000_1560'];
$aD1000_1520c = $row['aD1000_1520'];
//$aD1560c = $row['aD1560'];
$aD2000_2070c = $row['aD2000_2070'];
$aD2200_2380c = $row['aD2200_2380'];
$aD2200_2230c = $row['aD2200_2230'];
$aD2240_2244c = $row['aD2240_2244'];
$aD2270_2300c = $row['aD2270_2300'];
$aD2340_2370c = $row['aD2340_2370'];
$aD2500_2730c = $row['aD2500_2730'];
$aD2540_2680c = $row['aD2540_2680'];
$aD2540c = $row['aD2540'];
$aD2542c = $row['aD2542'];
$aD2550c = $row['aD2550'];
$aD2552c = $row['aD2552'];
$aD2554c = $row['aD2554'];
$aD2560c = $row['aD2560'];
$aD2570c = $row['aD2570'];
$aD2580c = $row['aD2580'];
$aD2582c = $row['aD2582'];
$aD2584c = $row['aD2584'];
$aD2586c = $row['aD2586'];
$aD2590c = $row['aD2590'];
$aD2600_2602c = $row['aD2600_2602'];
$aD2600c = $row['aD2600'];
$aD2602c = $row['aD2602'];
$aD2610_2630c = $row['aD2610_2630'];
$aD2610c = $row['aD2610'];
$aD2620c = $row['aD2620'];
$aD2630c = $row['aD2630'];
$aD2640c = $row['aD2640'];
$aD2650c = $row['aD2650'];
$aD2660c = $row['aD2660'];
$aD2670c = $row['aD2670'];
$aD2672c = $row['aD2672'];
$aD2674c = $row['aD2674'];
$aD2680c = $row['aD2680'];
$aD2800_2975c = $row['aD2800_2975'];
$aD2800_2840c = $row['aD2800_2840'];
$aD2850_2890c = $row['aD2850_2890'];
$aD2900_2920c = $row['aD2900_2920'];
$aD2950_2975c = $row['aD2950_2975'];
$aD3000_3260c = $row['aD3000_3260'];
$aD3000_3004c = $row['aD3000_3004'];
$aD3050_3130c = $row['aD3050_3130'];
$aD3300_3384c = $row['aD3300_3384'];
$aD3500_3580c = $row['aD3500_3580'];
$aD3530_3560c = $row['aD3530_3560'];
$aD3570_3580c = $row['aD3570_3580'];
$aD3700_4190c = $row['aD3700_4190'];
$aD3700_3830c = $row['aD3700_3830'];
$aD3700c = $row['aD3700'];
$aD3710c = $row['aD3710'];
$aD3720c = $row['aD3720'];
$aD3750_3760c = $row['aD3750_3760'];
$aD3750_3752c = $row['aD3750_3752'];
$aD3770_3774c = $row['aD3770_3774'];
$aD3900_3980c = $row['aD3900_3980'];
$aD3900_3918c = $row['aD3900_3918'];
$aD3900c = $row['aD3900'];
$aD4000_4070c = $row['aD4000_4070'];
$aD4000_4040c = $row['aD4000_4040'];
$aD4100_4190c = $row['aD4100_4190'];
$aD4100_4140c = $row['aD4100_4140'];
$aD4150_4170c = $row['aD4150_4170'];
$aD4180c = $row['aD4180'];
$aD4300_4340c = $row['aD4300_4340'];
$aD4400_4470c = $row['aD4400_4470'];
$aD4400_4410c = $row['aD4400_4410'];
$aD4500_4540c = $row['aD4500_4540'];
$aD4520c = $row['aD4520'];
$aD4530c = $row['aD4530'];
$aD4800_4840c = $row['aD4800_4840'];
$aD4600_4720c = $row['aD4600_4720'];
$aD4630_4660c = $row['aD4630_4660'];
$aD4710_4720c = $row['aD4710_4720'];
$aD4900_4930c = $row['aD4900_4930'];
$aD5000_5084c = $row['aD5000_5084'];
$aD5200_5230c = $row['aD5200_5230'];
$aD5220_5230c = $row['aD5220_5230'];				




														}				
					mysqli_free_result($result);
				}
// media 


$query = "SELECT 
SUM(media.pp15_) as pp15_
, SUM(media.RD_HR3542) as RD_HR3542
, SUM(media.RD_HR4249) as RD_HR4249
, SUM(media.RD_HR49_) as RD_HR49_
, SUM(media.TV_HRMF78) as TV_HRMF78
, SUM(media.TV_HRMF8_) as TV_HRMF8_
, SUM(media.NP_TMM4) as NP_TMM4
, SUM(media.NP_TMM5) as NP_TMM5
, SUM(media.NP_TMM6_) as NP_TMM6_
, SUM(media.IT_TWK15) as IT_TWK15
, SUM(media.IT_TWK25) as IT_TWK25
, SUM(media.IT_TWK25_) as IT_TWK25_
, SUM(media.MZ_LMD18) as MZ_LMD18
, SUM(media.MZ_LMD18_) as MZ_LMD18_

, SUM(leis.LS_ADVSP*media.pp15_) as LS_ADVSP
, SUM(leis.LS_CRFT*media.pp15_) as LS_CRFT
, SUM(leis.LS_BSBL*media.pp15_) as LS_BSBL
, SUM(leis.LS_BSKBL*media.pp15_) as LS_BSKBL
, SUM(leis.LS_BLLDS*media.pp15_) as LS_BLLDS
, SUM(leis.LS_BOWL*media.pp15_) as LS_BOWL
, SUM(leis.LS_CANOE*media.pp15_) as LS_CANOE
, SUM(leis.LS_CURL*media.pp15_) as LS_CURL
, SUM(leis.LS_CYCL*media.pp15_) as LS_CYCL
, SUM(leis.LS_FSHT*media.pp15_) as LS_FSHT
, SUM(leis.LS_FITWK*media.pp15_) as LS_FITWK
, SUM(leis.LS_FITAER*media.pp15_) as LS_FITAER
, SUM(leis.LS_FTBL*media.pp15_) as LS_FTBL
, SUM(leis.LS_GARD*media.pp15_) as LS_GARD
, SUM(leis.LS_GOLF*media.pp15_) as LS_GOLF
, SUM(leis.LS_CLUB*media.pp15_) as LS_CLUB
, SUM(leis.LS_HIK*media.pp15_) as LS_HIK
, SUM(leis.LS_HOCKY*media.pp15_) as LS_HOCKY
, SUM(leis.LS_HMEXC*media.pp15_) as LS_HMEXC
, SUM(leis.LS_ICSKT*media.pp15_) as LS_ICSKT
, SUM(leis.LS_ILSKT*media.pp15_) as LS_ILSKT
, SUM(leis.LS_JOG*media.pp15_) as LS_JOG
, SUM(leis.LS_MRTHN*media.pp15_) as LS_MRTHN
, SUM(leis.LS_YOGA*media.pp15_) as LS_YOGA
, SUM(leis.LS_VIDEO*media.pp15_) as LS_VIDEO
, SUM(leis.LS_PWBT*media.pp15_) as LS_PWBT
, SUM(leis.LS_RACSP*media.pp15_) as LS_RACSP
, SUM(leis.LS_SKBRD*media.pp15_) as LS_SKBRD
, SUM(leis.LS_SKCRS*media.pp15_) as LS_SKCRS
, SUM(leis.LS_SKDWH*media.pp15_) as LS_SKDWH
, SUM(leis.LS_SNBRD*media.pp15_) as LS_SNBRD
, SUM(leis.LS_SNWMB*media.pp15_) as LS_SNWMB
, SUM(leis.LS_SCCER*media.pp15_) as LS_SCCER
, SUM(leis.LS_SWM*media.pp15_) as LS_SWM
, SUM(leis.LS_WHLWT*media.pp15_) as LS_WHLWT

  
FROM mmedia_ta media, a_bbm_ls2 leis, amfd_pclist pclist WHERE pclist.store_uid = $store_uid and pclist.PostCode = media.PostCode and pclist.PostCode = leis.PostCode ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
								$media_pp15_= $row['pp15_'];
								$RD_HR3542= $row['RD_HR3542'];
								$RD_HR4249= $row['RD_HR4249'];
								$RD_HR49_= $row['RD_HR49_'];
								$TV_HRMF78= $row['TV_HRMF78'];
								$TV_HRMF8_= $row['TV_HRMF8_'];
								$NP_TMM4= $row['NP_TMM4'];
								$NP_TMM5= $row['NP_TMM5'];
								$NP_TMM6_= $row['NP_TMM6_'];
								$IT_TWK15= $row['IT_TWK15'];
								$IT_TWK25= $row['IT_TWK25'];
								$IT_TWK25_= $row['IT_TWK25_'];
								$MZ_LMD18= $row['MZ_LMD18'];
								$MZ_LMD18_= $row['MZ_LMD18_'];
								
								$bLS_ADVSP = $row['LS_ADVSP'];
$bLS_CRFT = $row['LS_CRFT'];
$bLS_BSBL = $row['LS_BSBL'];
$bLS_BSKBL = $row['LS_BSKBL'];
$bLS_BLLDS = $row['LS_BLLDS'];
$bLS_BOWL = $row['LS_BOWL'];
$bLS_CANOE = $row['LS_CANOE'];
$bLS_CURL = $row['LS_CURL'];
$bLS_CYCL = $row['LS_CYCL'];
$bLS_FSHT = $row['LS_FSHT'];
$bLS_FITWK = $row['LS_FITWK'];
$bLS_FITAER = $row['LS_FITAER'];
$bLS_FTBL = $row['LS_FTBL'];
$bLS_GARD = $row['LS_GARD'];
$bLS_GOLF = $row['LS_GOLF'];
$bLS_CLUB = $row['LS_CLUB'];
$bLS_HIK = $row['LS_HIK'];
$bLS_HOCKY = $row['LS_HOCKY'];
$bLS_HMEXC = $row['LS_HMEXC'];
$bLS_ICSKT = $row['LS_ICSKT'];
$bLS_ILSKT = $row['LS_ILSKT'];
$bLS_JOG = $row['LS_JOG'];
$bLS_MRTHN = $row['LS_MRTHN'];
$bLS_YOGA = $row['LS_YOGA'];
$bLS_VIDEO = $row['LS_VIDEO'];
$bLS_PWBT = $row['LS_PWBT'];
$bLS_RACSP = $row['LS_RACSP'];
$bLS_SKBRD = $row['LS_SKBRD'];
$bLS_SKCRS = $row['LS_SKCRS'];
$bLS_SKDWH = $row['LS_SKDWH'];
$bLS_SNBRD = $row['LS_SNBRD'];
$bLS_SNWMB = $row['LS_SNWMB'];
$bLS_SCCER = $row['LS_SCCER'];
$bLS_SWM = $row['LS_SWM'];

								
								
						}
	mysqli_free_result($result);
				}

// media
$bradio_high = ($RD_HR3542 + $RD_HR4249 + $RD_HR49_) /$media_pp15_ * 100;
$btv_high = ($TV_HRMF78 + $TV_HRMF8_) /$media_pp15_ * 100;
$bnp_high = ($NP_TMM4 + $NP_TMM5+ $NP_TMM6_) /$media_pp15_ * 100;
$binternet_high = ($IT_TWK25 + $IT_TWK25_) /$media_pp15_ * 100;

$bradioindex = $bradio_high / 18.7 *100;
$btvindex = $btv_high / 18.6 *100;
$bnpindex = $bnp_high / 12.4 *100;
$binternetindex = $binternet_high / 33.6 *100;

// leisure

$hhbLS_ADVSP = $bLS_ADVSP / $media_pp15_ * 100;
$hhbLS_CRFT = $bLS_CRFT / $media_pp15_ * 100;
$hhbLS_BSBL = $bLS_BSBL / $media_pp15_ * 100;
$hhbLS_BSKBL = $bLS_BSKBL / $media_pp15_ * 100;
$hhbLS_BLLDS = $bLS_BLLDS / $media_pp15_ * 100;
$hhbLS_BOWL = $bLS_BOWL / $media_pp15_ * 100;
$hhbLS_CANOE = $bLS_CANOE / $media_pp15_ * 100;
$hhbLS_CURL = $bLS_CURL / $media_pp15_ * 100;
$hhbLS_CYCL = $bLS_CYCL / $media_pp15_ * 100;
$hhbLS_FSHT = $bLS_FSHT / $media_pp15_ * 100;
$hhbLS_FITWK = $bLS_FITWK / $media_pp15_ * 100;
$hhbLS_FITAER = $bLS_FITAER / $media_pp15_ * 100;
$hhbLS_FTBL = $bLS_FTBL / $media_pp15_ * 100;
$hhbLS_GARD = $bLS_GARD / $media_pp15_ * 100;
$hhbLS_GOLF = $bLS_GOLF / $media_pp15_ * 100;
$hhbLS_CLUB = $bLS_CLUB / $media_pp15_ * 100;
$hhbLS_HIK = $bLS_HIK / $media_pp15_ * 100;
$hhbLS_HOCKY = $bLS_HOCKY / $media_pp15_ * 100;
$hhbLS_HMEXC = $bLS_HMEXC / $media_pp15_ * 100;
$hhbLS_ICSKT = $bLS_ICSKT / $media_pp15_ * 100;
$hhbLS_ILSKT = $bLS_ILSKT / $media_pp15_ * 100;
$hhbLS_JOG = $bLS_JOG / $media_pp15_ * 100;
$hhbLS_MRTHN = $bLS_MRTHN / $media_pp15_ * 100;
$hhbLS_YOGA = $bLS_YOGA / $media_pp15_ * 100;
$hhbLS_VIDEO = $bLS_VIDEO / $media_pp15_ * 100;
$hhbLS_PWBT = $bLS_PWBT / $media_pp15_ * 100;
$hhbLS_RACSP = $bLS_RACSP / $media_pp15_ * 100;
$hhbLS_SKBRD = $bLS_SKBRD / $media_pp15_ * 100;
$hhbLS_SKCRS = $bLS_SKCRS / $media_pp15_ * 100;
$hhbLS_SKDWH = $bLS_SKDWH / $media_pp15_ * 100;
$hhbLS_SNBRD = $bLS_SNBRD / $media_pp15_ * 100;
$hhbLS_SNWMB = $bLS_SNWMB / $media_pp15_ * 100;
$hhbLS_SCCER = $bLS_SCCER / $media_pp15_ * 100;
$hhbLS_SWM = $bLS_SWM / $media_pp15_ * 100;
$hhbLS_WHLWT = $bLS_WHLWT / $media_pp15_ * 100;

$hhcLS_ADVSP = 8.3;
$hhcLS_CRFT = 33.8;
$hhcLS_BSBL = 14.9;
$hhcLS_BSKBL = 12.8;
$hhcLS_BLLDS = 27.2;
$hhcLS_BOWL = 38.7;
$hhcLS_CANOE = 23;
$hhcLS_CURL = 7.1;
$hhcLS_CYCL = 22.1;
$hhcLS_FSHT = 27;
$hhcLS_FITWK = 57.3;
$hhcLS_FITAER = 21.3;
$hhcLS_FTBL = 8.4;
$hhcLS_GARD = 58.4;
$hhcLS_GOLF = 27.6;
$hhcLS_CLUB = 23.5;
$hhcLS_HIK = 37.5;
$hhcLS_HOCKY = 13.6;
$hhcLS_HMEXC = 48.2;
$hhcLS_ICSKT = 28.1;
$hhcLS_ILSKT = 10;
$hhcLS_JOG = 24.3;
$hhcLS_MRTHN = 4.2;
$hhcLS_YOGA = 16.1;
$hhcLS_VIDEO = 38.6;
$hhcLS_PWBT = 10.9;
$hhcLS_RACSP = 14.5;
$hhcLS_SKBRD = 2.8;
$hhcLS_SKCRS = 11.8;
$hhcLS_SKDWH = 15.8;
$hhcLS_SNBRD = 6.1;
$hhcLS_SNWMB = 7.9;
$hhcLS_SCCER = 14.1;
$hhcLS_SWM = 50;
$hhcLS_WHLWT = 8.3;

$hhindexLS_ADVSP = $hhbLS_ADVSP / $hhcLS_ADVSP * 100;
$hhindexLS_CRFT = $hhbLS_CRFT / $hhcLS_CRFT * 100;
$hhindexLS_BSBL = $hhbLS_BSBL / $hhcLS_BSBL * 100;
$hhindexLS_BSKBL = $hhbLS_BSKBL / $hhcLS_BSKBL * 100;
$hhindexLS_BLLDS = $hhbLS_BLLDS / $hhcLS_BLLDS * 100;
$hhindexLS_BOWL = $hhbLS_BOWL / $hhcLS_BOWL * 100;
$hhindexLS_CANOE = $hhbLS_CANOE / $hhcLS_CANOE * 100;
$hhindexLS_CURL = $hhbLS_CURL / $hhcLS_CURL * 100;
$hhindexLS_CYCL = $hhbLS_CYCL / $hhcLS_CYCL * 100;
$hhindexLS_FSHT = $hhbLS_FSHT / $hhcLS_FSHT * 100;
$hhindexLS_FITWK = $hhbLS_FITWK / $hhcLS_FITWK * 100;
$hhindexLS_FITAER = $hhbLS_FITAER / $hhcLS_FITAER * 100;
$hhindexLS_FTBL = $hhbLS_FTBL / $hhcLS_FTBL * 100;
$hhindexLS_GARD = $hhbLS_GARD / $hhcLS_GARD * 100;
$hhindexLS_GOLF = $hhbLS_GOLF / $hhcLS_GOLF * 100;
$hhindexLS_CLUB = $hhbLS_CLUB / $hhcLS_CLUB * 100;
$hhindexLS_HIK = $hhbLS_HIK / $hhcLS_HIK * 100;
$hhindexLS_HOCKY = $hhbLS_HOCKY / $hhcLS_HOCKY * 100;
$hhindexLS_HMEXC = $hhbLS_HMEXC / $hhcLS_HMEXC * 100;
$hhindexLS_ICSKT = $hhbLS_ICSKT / $hhcLS_ICSKT * 100;
$hhindexLS_ILSKT = $hhbLS_ILSKT / $hhcLS_ILSKT * 100;
$hhindexLS_JOG = $hhbLS_JOG / $hhcLS_JOG * 100;
$hhindexLS_MRTHN = $hhbLS_MRTHN / $hhcLS_MRTHN * 100;
$hhindexLS_YOGA = $hhbLS_YOGA / $hhcLS_YOGA * 100;
$hhindexLS_VIDEO = $hhbLS_VIDEO / $hhcLS_VIDEO * 100;
$hhindexLS_PWBT = $hhbLS_PWBT / $hhcLS_PWBT * 100;
$hhindexLS_RACSP = $hhbLS_RACSP / $hhcLS_RACSP * 100;
$hhindexLS_SKBRD = $hhbLS_SKBRD / $hhcLS_SKBRD * 100;
$hhindexLS_SKCRS = $hhbLS_SKCRS / $hhcLS_SKCRS * 100;
$hhindexLS_SKDWH = $hhbLS_SKDWH / $hhcLS_SKDWH * 100;
$hhindexLS_SNBRD = $hhbLS_SNBRD / $hhcLS_SNBRD * 100;
$hhindexLS_SNWMB = $hhbLS_SNWMB / $hhcLS_SNWMB * 100;
$hhindexLS_SCCER = $hhbLS_SCCER / $hhcLS_SCCER * 100;
$hhindexLS_SWM = $hhbLS_SWM / $hhcLS_SWM * 100;
$hhindexLS_WHLWT = $hhbLS_WHLWT / $hhcLS_WHLWT * 100;

$hhnameLS_ADVSP = " Adventure sports";
$hhnameLS_CRFT = " Arts/crafts";
$hhnameLS_BSBL = " Baseball";
$hhnameLS_BSKBL = " Basketball";
$hhnameLS_BLLDS = " Billiards";
$hhnameLS_BOWL = " Bowling";
$hhnameLS_CANOE = " Canoeing";
$hhnameLS_CURL = " Curling";
$hhnameLS_CYCL = " Cycling ";
$hhnameLS_FSHT = " Fishing/hunting";
$hhnameLS_FITWK = " Fitness walking";
$hhnameLS_FITAER = "Fitness classes";
$hhnameLS_FTBL = " Football";
$hhnameLS_GARD = " Gardening";
$hhnameLS_GOLF = " Golfing";
$hhnameLS_CLUB = " Health club";
$hhnameLS_HIK = " Hiking/camping";
$hhnameLS_HOCKY = " Hockey";
$hhnameLS_HMEXC = " Home workout";
$hhnameLS_ICSKT = " Ice skating";
$hhnameLS_ILSKT = " Inline skating";
$hhnameLS_JOG = " Jogging";
$hhnameLS_MRTHN = " Marathon ";
$hhnameLS_YOGA = " Pilates/yoga";
$hhnameLS_VIDEO = " Video games";
$hhnameLS_PWBT = " Boating";
$hhnameLS_RACSP = " Racquet sports";
$hhnameLS_SKBRD = " Skateboarding";
$hhnameLS_SKCRS = "X-country Skiing";
$hhnameLS_SKDWH = "Downhill Skiing";
$hhnameLS_SNBRD = " Snowboarding";
$hhnameLS_SNWMB = " Snowmobiling";
$hhnameLS_SCCER = " Soccer";
$hhnameLS_SWM = " Swimming";
$hhnameLS_WHLWT = " Whale watching";

$leisure["name"][] = " Adventure sports";
$leisure["name"][] = " Arts/crafts";
$leisure["name"][] = " Baseball";
$leisure["name"][] = " Basketball";
$leisure["name"][] = " Billiards";
$leisure["name"][] = " Bowling";
$leisure["name"][] = " Canoeing";
$leisure["name"][] = " Curling";
$leisure["name"][] = " Cycling ";
$leisure["name"][] = "Fishing/hunting";
$leisure["name"][] = "Fitness walking";
$leisure["name"][] = "Fitness classes";
$leisure["name"][] = " Football";
$leisure["name"][] = " Gardening";
$leisure["name"][] = " Golfing";
$leisure["name"][] = " Health club";
$leisure["name"][] = " Hiking/camping";
$leisure["name"][] = " Hockey";
$leisure["name"][] = " Home workout";
$leisure["name"][] = " Ice skating";
$leisure["name"][] = " Inline skating";
$leisure["name"][] = " Jogging";
$leisure["name"][] = " Marathon ";
$leisure["name"][] = " Pilates/yoga";
$leisure["name"][] = " Video games";
$leisure["name"][] = " Boating";
$leisure["name"][] = " Racquet sports";
$leisure["name"][] = " Skateboarding";
$leisure["name"][] = "X-country Skiing";
$leisure["name"][] = "Downhill Skiing";
$leisure["name"][] = " Snowboarding";
$leisure["name"][] = " Snowmobiling";
$leisure["name"][] = " Soccer";
$leisure["name"][] = " Swimming";
$leisure["name"][] = "Whale watching";

$leisure["index"][] = $hhindexLS_ADVSP;
$leisure["index"][] = $hhindexLS_CRFT;
$leisure["index"][] = $hhindexLS_BSBL;
$leisure["index"][] = $hhindexLS_BSKBL;
$leisure["index"][] = $hhindexLS_BLLDS;
$leisure["index"][] = $hhindexLS_BOWL;
$leisure["index"][] = $hhindexLS_CANOE;
$leisure["index"][] = $hhindexLS_CURL;
$leisure["index"][] = $hhindexLS_CYCL;
$leisure["index"][] = $hhindexLS_FSHT;
$leisure["index"][] = $hhindexLS_FITWK;
$leisure["index"][] = $hhindexLS_FITAER;
$leisure["index"][] = $hhindexLS_FTBL;
$leisure["index"][] = $hhindexLS_GARD;
$leisure["index"][] = $hhindexLS_GOLF;
$leisure["index"][] = $hhindexLS_CLUB;
$leisure["index"][] = $hhindexLS_HIK;
$leisure["index"][] = $hhindexLS_HOCKY;
$leisure["index"][] = $hhindexLS_HMEXC;
$leisure["index"][] = $hhindexLS_ICSKT;
$leisure["index"][] = $hhindexLS_ILSKT;
$leisure["index"][] = $hhindexLS_JOG;
$leisure["index"][] = $hhindexLS_MRTHN;
$leisure["index"][] = $hhindexLS_YOGA;
$leisure["index"][] = $hhindexLS_VIDEO;
$leisure["index"][] = $hhindexLS_PWBT;
$leisure["index"][] = $hhindexLS_RACSP;
$leisure["index"][] = $hhindexLS_SKBRD;
$leisure["index"][] = $hhindexLS_SKCRS;
$leisure["index"][] = $hhindexLS_SKDWH;
$leisure["index"][] = $hhindexLS_SNBRD;
$leisure["index"][] = $hhindexLS_SNWMB;
$leisure["index"][] = $hhindexLS_SCCER;
$leisure["index"][] = $hhindexLS_SWM;
$leisure["index"][] = $hhindexLS_WHLWT;

$leisure["percent"][] = $hhbLS_ADVSP;
$leisure["percent"][] = $hhbLS_CRFT;
$leisure["percent"][] = $hhbLS_BSBL;
$leisure["percent"][] = $hhbLS_BSKBL;
$leisure["percent"][] = $hhbLS_BLLDS;
$leisure["percent"][] = $hhbLS_BOWL;
$leisure["percent"][] = $hhbLS_CANOE;
$leisure["percent"][] = $hhbLS_CURL;
$leisure["percent"][] = $hhbLS_CYCL;
$leisure["percent"][] = $hhbLS_FSHT;
$leisure["percent"][] = $hhbLS_FITWK;
$leisure["percent"][] = $hhbLS_FITAER;
$leisure["percent"][] = $hhbLS_FTBL;
$leisure["percent"][] = $hhbLS_GARD;
$leisure["percent"][] = $hhbLS_GOLF;
$leisure["percent"][] = $hhbLS_CLUB;
$leisure["percent"][] = $hhbLS_HIK;
$leisure["percent"][] = $hhbLS_HOCKY;
$leisure["percent"][] = $hhbLS_HMEXC;
$leisure["percent"][] = $hhbLS_ICSKT;
$leisure["percent"][] = $hhbLS_ILSKT;
$leisure["percent"][] = $hhbLS_JOG;
$leisure["percent"][] = $hhbLS_MRTHN;
$leisure["percent"][] = $hhbLS_YOGA;
$leisure["percent"][] = $hhbLS_VIDEO;
$leisure["percent"][] = $hhbLS_PWBT;
$leisure["percent"][] = $hhbLS_RACSP;
$leisure["percent"][] = $hhbLS_SKBRD;
$leisure["percent"][] = $hhbLS_SKCRS;
$leisure["percent"][] = $hhbLS_SKDWH;
$leisure["percent"][] = $hhbLS_SNBRD;
$leisure["percent"][] = $hhbLS_SNWMB;
$leisure["percent"][] = $hhbLS_SCCER;
$leisure["percent"][] = $hhbLS_SWM;
$leisure["percent"][] = $hhbLS_WHLWT;

$leisure["pic"][] = "activities/ac_climb200.jpg";
$leisure["pic"][] = "activities/ac_sew200.jpg";
$leisure["pic"][] = "activities/ac_base200.jpg";
$leisure["pic"][] = "activities/ac_basket200.jpg";
$leisure["pic"][] = "activities/ac_pool200.jpg";
$leisure["pic"][] = "activities/ac_bowl200.jpg";
$leisure["pic"][] = "activities/ac_canoe200.jpg";
$leisure["pic"][] = "activities/ac_curling200.jpg";
$leisure["pic"][] = "activities/ac_cycling200.jpg";
$leisure["pic"][] = "activities/ac_hunt200.jpg";
$leisure["pic"][] = "activities/ac_walking200.jpg";
$leisure["pic"][] = "activities/ac_aerobics200.jpg";
$leisure["pic"][] = "activities/ac_football200.jpg";
$leisure["pic"][] = "activities/ac_garden200.jpg";
$leisure["pic"][] = "activities/ac_golf200.jpg";
$leisure["pic"][] = "activities/ac_hclub.jpg";
$leisure["pic"][] = "activities/ac_hike200.jpg";
$leisure["pic"][] = "activities/ac_hockey200.jpg";
$leisure["pic"][] = "activities/ac_homeex200.jpg";
$leisure["pic"][] = "activities/ac_skating200.jpg";
$leisure["pic"][] = "activities/ac_blading200.jpg";
$leisure["pic"][] = "activities/ac_jog200.jpg";
$leisure["pic"][] = "activities/ac_marathon200.jpg";
$leisure["pic"][] = "activities/ac_yoga200.jpg";
$leisure["pic"][] = "activities/ac_vgames200.jpg";
$leisure["pic"][] = "activities/ac_boating200.jpg";
$leisure["pic"][] = "activities/ac_racket200.jpg";
$leisure["pic"][] = "activities/ac_skateboard200.jpg";
$leisure["pic"][] = "activities/ac_skiing200.jpg";
$leisure["pic"][] = "activities/ac_dskiing200.jpg";
$leisure["pic"][] = "activities/ac_sboard200.jpg";
$leisure["pic"][] = "activities/ac_snow200.jpg";
$leisure["pic"][] = "activities/ac_soccer200.jpg";
$leisure["pic"][] = "activities/ac_swim200.jpg";
$leisure["pic"][] = "activities/ac_whale200.jpg";


$score_count = 1;
arsort($leisure["percent"]);
foreach ($leisure["percent"] as $key => $val) {
	$leisure["score"][$key] = $score_count;
	$score_count = $score_count +1;
	
}
$score_count = 1;
arsort($leisure["index"]);
foreach ($leisure["index"] as $key => $val) {
	if($leisure["percent"][$key] > 5) {
		
	$leisure["score"][$key] = $leisure["score"][$key] + $score_count;
	$score_count = $score_count +1;
	}
	else
	$leisure["score"][$key] = $leisure["score"][$key] + 33;
}

asort($leisure["score"]);
foreach ($leisure["score"] as $key => $val) {
	$sorted_leisure["percent"][] = $leisure["percent"][$key];
	$sorted_leisure["name"][] = $leisure["name"][$key];
	$sorted_leisure["index"][] = $leisure["index"][$key];
	$sorted_leisure["score"][] = $leisure["score"][$key];
	$sorted_leisure["pic"][] = $leisure["pic"][$key];
	
}

				
$query = "SELECT 
SUM(hh.homes) as mfd_home, SUM(hh.apts) as mfd_apts, SUM(hh.farm) as mfd_farm				
	 FROM mfd_hh hh, amfd_pclist pclist WHERE hh.postalcode = pclist.PostCode and pclist.store_uid = $store_uid";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
				$mfd_home = $row['mfd_home'];
				$mfd_apts = $row['mfd_apts'];
				$mfd_farm = $row['mfd_farm'];
						}}
				$mfd_hh_count = $mfd_home + $mfd_apts + $mfd_farm;
					

$query = "SELECT SUM(seg.hh_tot) as hh_tot, seg.segment, seg.PostCode, pc.PostCode  FROM a12_seg seg ,  amfd_pclist pc where seg.PostCode = pc.PostCode and pc.store_uid = $store_uid group by segment  ";

 if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$seg_segment_value[] = $row['hh_tot']; 
						$seg_segment_name[] = $row['segment'];
					}				
				mysqli_free_result($result);
			}


for ( $seg_vars = 0; $seg_vars <= 16; $seg_vars ++) {
		$agg_values['segment'][$seg_vars] = 0;
	}
	$segment_records = 0;
	
for ( $seg_vars = 0; $seg_vars < sizeof($seg_segment_name); $seg_vars ++) {
	if($seg_segment_name[$seg_vars] == 'A') $agg_values['segment'][0] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'B') $agg_values['segment'][1] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'C') $agg_values['segment'][2] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'D') $agg_values['segment'][3] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'E') $agg_values['segment'][4] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'F') $agg_values['segment'][5] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'G') $agg_values['segment'][6] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'H') $agg_values['segment'][7] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'I') $agg_values['segment'][8] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'J') $agg_values['segment'][9] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'K') $agg_values['segment'][10] = $seg_segment_value[$seg_vars];;
	if($seg_segment_name[$seg_vars] == 'L') $agg_values['segment'][11] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'M') $agg_values['segment'][12] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'N') $agg_values['segment'][13] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'O') $agg_values['segment'][14] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'P') $agg_values['segment'][15] = $seg_segment_value[$seg_vars];
	if($seg_segment_name[$seg_vars] == 'Q') $agg_values['segment'][16] = $seg_segment_value[$seg_vars];
	$segment_records = $segment_records + $seg_segment_value[$seg_vars];
}					
$agg_values['segment'][17] = $segment_records;	

$agg_valuesc['segment'][] =  439897;
$agg_valuesc['segment'][] =  897313;
$agg_valuesc['segment'][] =  548101;
$agg_valuesc['segment'][] =  788075;
$agg_valuesc['segment'][] =  1468719;
$agg_valuesc['segment'][] =  731205;
$agg_valuesc['segment'][] =  1652570;
$agg_valuesc['segment'][] =  553483;
$agg_valuesc['segment'][] =  939666;
$agg_valuesc['segment'][] =  1061544;
$agg_valuesc['segment'][] =  632368;
$agg_valuesc['segment'][] =  1691158;
$agg_valuesc['segment'][] =  703107;
$agg_valuesc['segment'][] =  445505;
$agg_valuesc['segment'][] =  532773;
$agg_valuesc['segment'][] =  276318;
$agg_valuesc['segment'][] =  531325;
$agg_valuesc['segment'][] =  13893128 ;

$agg_values['seg_name'][0] = "A: Affluent";
$agg_values['seg_name'][1] = "B: Elite Professional";
$agg_values['seg_name'][2] = "C: Ethnic Cruisers";
$agg_values['seg_name'][3] = "D: Nest Builders";
$agg_values['seg_name'][4] = "E: Buy Me a New Home";
$agg_values['seg_name'][5] = "F: Empty Nesters";
$agg_values['seg_name'][6] = "G: Up the Ladder"; 
$agg_values['seg_name'][7] = "H: High Trades";
$agg_values['seg_name'][8] = "I: Urban Life in a Small Town";
$agg_values['seg_name'][9] = "J: Joyful Country";
$agg_values['seg_name'][10] = "K: Rural Handyman";
$agg_values['seg_name'][11] = "L: Apartment Dwellers";
$agg_values['seg_name'][12] = "M: Singles";
$agg_values['seg_name'][13] = "N: New Canadians";
$agg_values['seg_name'][14] = "O: Renters";
$agg_values['seg_name'][15] = "P: One Parent Families";
$agg_values['seg_name'][16] = "Q: Thrifty";
$agg_values['seg_name'][17] = "Total";

$segment_pics[0] ="family_pics/c_boomer_w";
$segment_pics[1] ="family_pics/f_boomer_w";
$segment_pics[2] ="family_pics/f_mixed_eth";
$segment_pics[3] ="image3/f_genx_w22";
$segment_pics[4] ="image3/c_genx_w3";
$segment_pics[5] ="family_pics/c_mature_w";
$segment_pics[6] ="family_pics/f_mixed_w";
$segment_pics[7] ="family_pics/c_boomer_eth";
$segment_pics[8] ="family_pics/f_genx_w";
$segment_pics[9] ="age_pics/s_mature_w22";
$segment_pics[10] ="family_pics/genx_fishing";
$segment_pics[11] ="family_pics/a_mixed";
$segment_pics[12] ="family_pics/c_70s_white";
$segment_pics[13] ="family_pics/sp_genx_ch";
$segment_pics[14] ="family_pics/c_genx_w";
$segment_pics[15] ="family_pics/k_mature_w";
$segment_pics[16] ="family_pics/geny_mom_baby";
$segment_pics[17] ="f_boomer_w";

	








$segment_desc[0] = "
 &bull;   Top Earners & Owners<br>
 &bull;   Well Established<br>
 &bull;   Urban & Worldly<br>
 &bull;   Average Age 50+";

//b
$segment_desc[] = "
 &bull;   Highly Educated<br>
 &bull;   Techno Savvy<br>
 &bull;   Urban Families<br>
 &bull;   Greying Boomers";
 //c
 $segment_desc[] = "
 &bull;   Ethnic & Established<br>
 &bull;   Highly Travelled<br>
 &bull;   Family Focused<br>
 &bull;   Home & Hearth";

 //d
 
 $segment_desc[] = "
 &bull;   Renovators<br>
 &bull;   White Collar Families<br>
 &bull;   Little Luxuries<br>
 &bull;   Home & Garden";

 
 //e
 $segment_desc[] = "
 &bull;   Double Earners<br>
 &bull;   Young Families<br>
 &bull;   Home Buyers<br>
 &bull;   Home & Garden";

 //f
  $segment_desc[] = "
 &bull;   Retirement Age<br>
 &bull;   Golf & Grandkids<br>
 &bull;   Slowing Pace of Life<br>
 &bull;   Travel & Recreation";

 
 //g
 $segment_desc[] = "
 &bull;   Young Families<br>
 &bull;   New Suburbanites<br>
 &bull;   Dogs & Mini-Vans<br>
 &bull;   Dynamic Careers";
 
 //h
  $segment_desc[] = "
 &bull;   Skilled Trades<br>
 &bull;   Secondary Education<br>
 &bull;   Hardworking<br>
 &bull;   Family Oriented";
 
 //i
 $segment_desc[] = "
 &bull;   Service Industry<br>
 &bull;   Spend On Basics<br>
 &bull;   Single Parents<br>
 &bull;   Home & Community";
 
 //j
  $segment_desc[] = "
 &bull;   Skilled Trades & Services<br>
 &bull;   Spend On Basics<br>
 &bull;   Some Post-Secondary<br>
 &bull;   Outdoorsy / Crafty";
 
 //k
 $segment_desc[] = "
 &bull;   Blue Collar<br>
 &bull;   Larger Single Family<br>
 &bull;   Some Secondary<br>
 &bull;   Older Homes";
 
 //l
 $segment_desc[] = "
 &bull;   Seniors and Singles<br>
 &bull;   Soft Skills<br>
 &bull;   Disposable Income<br>
 &bull;   Mixed Interests";
 
 //m
 $segment_desc[] = "
 &bull;   Old Age<br>
 &bull;   Primary Industries<br>
 &bull;   Bus, Metro, Walk<br>
 &bull;   Renters";

 //n
 $segment_desc[] = "
 &bull;   Immigrant Strivers<br>
 &bull;   Genteel Blue-Collar<br>
 &bull;   Bus, Metro, Walk<br>
 &bull;   Young Families";
 
 //o
$segment_desc[] = "
 &bull;   Singles + Couples<br>
 &bull;   Public Sector / Arts<br>
 &bull;   Frequent Movers<br>
 &bull;   Want To Own a Home";

 //p
 $segment_desc[] = "
 &bull;   Young Families<br>
 &bull;   Little Disposable Income<br>
 &bull;   Junior High Education<br>
 &bull;   Blue Collar / Sales";

 //q
 $segment_desc[] = "
 &bull;   Seniors / Single Parents<br>
 &bull;   Blue Collar Renters<br>
 &bull;   Public Transit Users<br>
 &bull;   Little Disposable Income";
 
 	
// classifying segments
$segment_counter = 0;
$vitalsegment_p = 0;
$vitalsegment_c = 0;

// segmentation 
for ( $seg_vars = 0; $seg_vars <= 17; $seg_vars ++) {
		$agg_values['segmentp'][$seg_vars] = round($agg_values['segment'][$seg_vars]/ $agg_values['segment'][17]*100,1);
		$agg_valuesc['segmentp'][$seg_vars] = round($agg_valuesc['segment'][$seg_vars]/ $agg_valuesc['segment'][17]*100,1);
		
}

for ( $seg_vars = 0; $seg_vars <= 17; $seg_vars ++) {
		if($agg_valuesc['segmentp'][$seg_vars] > 0 ) $agg_values['segmenti'][$seg_vars] = round($agg_values['segmentp'][$seg_vars]/ $agg_valuesc['segmentp'][$seg_vars]*100); else $agg_values['segmenti'][$seg_vars] = 0;
}

for ( $seg_vars = 0; $seg_vars <= 16; $seg_vars ++) {
	
if($agg_values['segmentp'][$seg_vars] > 5 ) {
		if($agg_values['segmenti'][$seg_vars] > 110 ){
			$segment_high[] = $agg_values['seg_name'][$seg_vars];
			$segment_high_element[] = $seg_vars;
			$segment_percent[] = $agg_values['segmentp'][$seg_vars];
			$segment_benchmark[] = $agg_valuesc['segmentp'][$seg_vars];
			$segment_index[] = $agg_values['segmenti'][$seg_vars];
			$segment_description[] = $segment_desc[$seg_vars];
			$segment_picture[] = $segment_pics[$seg_vars];
			$segment_counter = $segment_counter + 1;
			$vitalsegment_p = $vitalsegment_p + $agg_values['segmentp'][$seg_vars];
			$vitalsegment_c = $vitalsegment_c + $agg_valuesc['segmentp'][$seg_vars];
		}
		if($agg_values['segmenti'][$seg_vars] < 80 ){
			$segment_low[] = $agg_values['seg_name'][$seg_vars];
			$segment_low_element[] = $seg_vars;
		}
		if($agg_values['segmenti'][$seg_vars] >= 80 && $agg_values['segmenti'][$seg_vars] <= 120 ){
			$segment_medium2[] = $agg_values['seg_name'][$seg_vars];
		}
	}
	else
			$segment_non[] = $agg_values['seg_name'][$seg_vars];
}
	
$segment_high[] ="";
$segment_low[] ="";

$segment_medium2[] ="";
$segment_non[] ="";

$IN_THHc = $agg_values['segment'][17];
	// Entire Market 
 $hhaD1000_5230c = $aD1000_5230c / $IN_THHc;
$hhaD1000_4840c = $aD1000_4840c / $IN_THHc;
$hhaD1000_1560c = $aD1000_1560c / $IN_THHc;
$hhaD1000_1520c = $aD1000_1520c / $IN_THHc;
$hhaD1560c = $aD1560c / $IN_THHc;
$hhaD2000_2070c = $aD2000_2070c / $IN_THHc;
$hhaD2200_2380c = $aD2200_2380c / $IN_THHc;
$hhaD2200_2230c = $aD2200_2230c / $IN_THHc;
$hhaD2240_2244c = $aD2240_2244c / $IN_THHc;
$hhaD2270_2300c = $aD2270_2300c / $IN_THHc;
$hhaD2340_2370c = $aD2340_2370c / $IN_THHc;
$hhaD2500_2730c = $aD2500_2730c / $IN_THHc;
$hhaD2540_2680c = $aD2540_2680c / $IN_THHc;
$hhaD2540c = $aD2540c / $IN_THHc;
$hhaD2542c = $aD2542c / $IN_THHc;
$hhaD2550c = $aD2550c / $IN_THHc;
$hhaD2552c = $aD2552c / $IN_THHc;
$hhaD2554c = $aD2554c / $IN_THHc;
$hhaD2560c = $aD2560c / $IN_THHc;
$hhaD2570c = $aD2570c / $IN_THHc;
$hhaD2580c = $aD2580c / $IN_THHc;
$hhaD2582c = $aD2582c / $IN_THHc;
$hhaD2584c = $aD2584c / $IN_THHc;
$hhaD2586c = $aD2586c / $IN_THHc;
$hhaD2590c = $aD2590c / $IN_THHc;
$hhaD2600_2602c = $aD2600_2602c / $IN_THHc;
$hhaD2600c = $aD2600c / $IN_THHc;
$hhaD2602c = $aD2602c / $IN_THHc;
$hhaD2610_2630c = $aD2610_2630c / $IN_THHc;
$hhaD2610c = $aD2610c / $IN_THHc;
$hhaD2620c = $aD2620c / $IN_THHc;
$hhaD2630c = $aD2630c / $IN_THHc;
$hhaD2640c = $aD2640c / $IN_THHc;
$hhaD2650c = $aD2650c / $IN_THHc;
$hhaD2660c = $aD2660c / $IN_THHc;
$hhaD2670c = $aD2670c / $IN_THHc;
$hhaD2672c = $aD2672c / $IN_THHc;
$hhaD2674c = $aD2674c / $IN_THHc;
$hhaD2680c = $aD2680c / $IN_THHc;
$hhaD2800_2975c = $aD2800_2975c / $IN_THHc;
$hhaD2800_2840c = $aD2800_2840c / $IN_THHc;
$hhaD2850_2890c = $aD2850_2890c / $IN_THHc;
$hhaD2900_2920c = $aD2900_2920c / $IN_THHc;
$hhaD2950_2975c = $aD2950_2975c / $IN_THHc;
$hhaD3000_3260c = $aD3000_3260c / $IN_THHc;
$hhaD3000_3130c = $aD3000_3130c / $IN_THHc;
$hhaD3000_3004c = $aD3000_3004c / $IN_THHc;
$hhaD3050_3130c = $aD3050_3130c / $IN_THHc;
$hhaD3300_3384c = $aD3300_3384c / $IN_THHc;
$hhaD3500_3580c = $aD3500_3580c / $IN_THHc;
$hhaD3530_3560c = $aD3530_3560c / $IN_THHc;
$hhaD3570_3580c = $aD3570_3580c / $IN_THHc;
$hhaD3700_4190c = $aD3700_4190c / $IN_THHc;
$hhaD3700_3830c = $aD3700_3830c / $IN_THHc;
$hhaD3700c = $aD3700c / $IN_THHc;
$hhaD3710c = $aD3710c / $IN_THHc;
$hhaD3720c = $aD3720c / $IN_THHc;
$hhaD3750_3760c = $aD3750_3760c / $IN_THHc;
$hhaD3750_3752c = $aD3750_3752c / $IN_THHc;
$hhaD3770_3774c = $aD3770_3774c / $IN_THHc;
$hhaD3900_3980c = $aD3900_3980c / $IN_THHc;
$hhaD3900_3918c = $aD3900_3918c / $IN_THHc;
$hhaD3900c = $aD3900c / $IN_THHc;
$hhaD4000_4070c = $aD4000_4070c / $IN_THHc;
$hhaD4000_4040c = $aD4000_4040c / $IN_THHc;
$hhaD4100_4190c = $aD4100_4190c / $IN_THHc;
$hhaD4100_4140c = $aD4100_4140c / $IN_THHc;
$hhaD4150_4170c = $aD4150_4170c / $IN_THHc;
$hhaD4180c = $aD4180c / $IN_THHc;
$hhaD4300_4340c = $aD4300_4340c / $IN_THHc;
$hhaD4400_4470c = $aD4400_4470c / $IN_THHc;
$hhaD4400_4410c = $aD4400_4410c / $IN_THHc;
$hhaD4500_4540c = $aD4500_4540c / $IN_THHc;
$hhaD4520c = $aD4520c / $IN_THHc;
$hhaD4530c = $aD4530c / $IN_THHc;
$hhaD4800_4840c = $aD4800_4840c / $IN_THHc;
$hhaD4600_4720c = $aD4600_4720c / $IN_THHc;
$hhaD4630_4660c = $aD4630_4660c / $IN_THHc;
$hhaD4710_4720c = $aD4710_4720c / $IN_THHc;
$hhaD4900_4930c = $aD4900_4930c / $IN_THHc;
$hhaD5000_5084c = $aD5000_5084c / $IN_THHc;
$hhaD5200_5230c = $aD5200_5230c / $IN_THHc;
$hhaD5220_5230c = $aD5220_5230c / $IN_THHc;

// aggregates
// committed expenses
$hhacommit = 32287;
$hhbcommit = $hhaD2000_2070c + $hhaD1000_1560c + $hhaD3000_3260c;
$hhdiffcommit = $hhbcommit - $hhacommit;

// monthly expenses
$hhb_itemed_hh_ops = $hhaD2200_2230c + $hhaD2240_2244c +$hhaD2270_2300c + $hhaD2340_2370c +$hhaD2540_2680c +$hhaD2500_2534c; 
$hhb_total_hh_ops = $hhaD2200_2380c + $hhaD2500_2730c;
$hhb_other_hh_ops =  $hha_total_hh_ops - $hha_itemed_hh_ops;

$hhb_purchases = $hhaD2200_2230c + $hhaD2240_2244c + $hhaD2270_2300c + $hhaD2540_2680c + $hhaD2500_2730c + $hhaD2800_2975c + $hhaD3300_3384c + $hhaD3500_3580c + $hhaD4300_4340c + $hhaD4400_4470c;
$hha_purchases = 11010;
$hhdiff_purchases =  $hhb_purchases - $hha_purchases ;


// discretionary

$hhb_discretionary = $hhaD3700_4190c + $hhaD4500_4540c + $hhb_other_hh_ops + $hhaD4800_4840c + $hhaD4600_4720c + $hhaD2340_2370c;
$hha_discretionary = 9652;
$hhdiff_discretionary = $hhb_discretionary - $hha_discretionary ;

// consumption
$hhb_consume = $hhbcommit + $hhb_purchases + $hhb_discretionary;
$hha_consume = $hhacommit + $hha_purchases + $hha_discretionary;
$hhdiff_consume  = $hhb_consume - $hha_consume;


	
if($age_adults>0) $age_2029p = $age_2029/ $age_adults *100; else $age_2029p = 0;
if($age_adults>0) $age_3039p = $age_3039/ $age_adults*100; else $age_3039p = 0;
if($age_adults>0) $age_4049p = $age_4049/ $age_adults*100; else $age_4049p = 0;
if($age_adults>0) $age_5059p = $age_5059/ $age_adults*100; else $age_5059p = 0;
if($age_adults>0) $age_6069p = $age_6069/ $age_adults*100; else $age_6069p = 0;
if($age_adults>0) $age_70p = $age_70/ $age_adults*100; else $age_70p = 0;
if($PP_TOT>0) $age_kidsyp = $age_kidsy/ $PP_TOT*100; else $age_kidsyp = 0;
if($PP_TOT>0) $age_kidsoldp = $age_kidsold/ $PP_TOT*100; else $age_kidsoldp = 0;
if($IN_THH>0) $inc030p = $inc030/ $IN_THH*100; else $inc030p = 0;
if($IN_THH>0) $inc3070p = $inc3070/ $IN_THH*100; else $inc3070p = 0;
if($IN_THH>0) $inc70100p = $inc70100/ $IN_THH*100; else $inc70100p = 0;
if($IN_THH>0) $inc100p = $inc100/ $IN_THH*100; else $inc100p = 0;
if($IN_THH>0) $fm_singlep = $fm_single/ $IN_THH*100; else $fm_singlep = 0;
if($IN_THH>0) $couplep = $couple/ $IN_THH*100; else $couplep = 0;
if($IN_THH>0) $familyp = $family/ $IN_THH*100; else $familyp = 0;
if($IN_THH>0) $sparentp = $sparent/ $IN_THH*100; else $sparentp = 0;

if($MN_TOT>0) $MN_VISp = $MN_VIS/ $MN_TOT*100; else $MN_VISp = 0;
if($MN_TOT>0) $MN_CHINESEp = $MN_CHINESE/ $MN_TOT*100; else $MN_CHINESEp = 0;
if($MN_TOT>0) $MN_SASIANp = $MN_SASIAN/ $MN_TOT*100; else $MN_SASIANp = 0;
if($MN_TOT>0) $MN_BLACKp = $MN_BLACK/ $MN_TOT*100; else $MN_BLACKp = 0;
$MN_WHITEp = 100-$MN_VISp;

$age_2029c = 18.03293860552;
$age_3039c = 17.465583557226;
$age_4049c = 19.3531126823668;
$age_5059c = 18.8465466237726;
$age_6069c = 13.4000457592598;
$age_70c = 12.9017727718548;
$age_kidsyc = 10.9424336818275;
$age_kidsoldc = 11.8908819111628;
$inc030c = 25.321596106499;
$inc3070c = 37.6289955290725;
$inc70100c = 17.2680961376922;
$inc100c = 19.7813122267363;
$fm_singlec = 27.7049294929393;
$couplec = 28.0264140125686;
$familyc = 32.8784288275908;
$sparentc = 11.3887221878339;
$IN_AHHc = 86175.96;

$MN_VISc= 16.2;
$MN_CHINESEc= 4.0;
$MN_SASIANc= 4.0;
$MN_BLACKc= 2.5;
$MN_WHITEc= 83.8;
								

$age_2029i = $age_2029p / $age_2029c *100;
$age_3039i = $age_3039p / $age_3039c *100;
$age_4049i = $age_4049p / $age_4049c *100;
$age_5059i = $age_5059p / $age_5059c *100;
$age_6069i = $age_6069p / $age_6069c *100;
$age_70i = $age_70p / $age_70c *100;
$age_kidsyi = $age_kidsyp / $age_kidsyc *100;
$age_kidsoldi = $age_kidsoldp / $age_kidsoldc *100;
$inc030i = $inc030p / $inc030c *100;
$inc3070i = $inc3070p / $inc3070c *100;
$inc70100i = $inc70100p / $inc70100c *100;
$inc100i = $inc100p / $inc100c *100;
$fm_singlei = $fm_singlep / $fm_singlec *100;
$couplei = $couplep / $couplec *100;
$familyi = $familyp / $familyc *100;
$sparenti = $sparentp / $sparentc *100;
$IN_AHHi = $IN_AHHp / $IN_AHHc *100;	

$MN_VISi= $MN_VISp/$MN_VISc*100;
$MN_CHINESEi= $MN_CHINESEp/$MN_CHINESEc*100;
$MN_SASIANi= $MN_SASIANp/$MN_SASIANc*100;
$MN_BLACKi= $MN_BLACKp/$MN_BLACKc*100;
$MN_WHITEi= $MN_WHITEp/$MN_WHITEc*100;


$line_width = 2.25;
if($PP15_ > 0) $SP_GRH200i=$SP_GRH200 / $PP_TOT *$line_width; else $SP_GRH200i=1;
if($PP15_ > 0) $SP_AP500i=$SP_AP500 / $PP_TOT *$line_width; else $SP_AP500i=1;
if($PP15_ > 0) $SP_MC500i=$SP_MC500 / $PP_TOT *$line_width; else $SP_MC500i=1;
if($PP15_ > 0) $SP_WC500i=$SP_WC500 / $PP_TOT *$line_width; else $SP_WC500i=1;
if($PP15_ > 0) $SP_CC500i=$SP_CC500 / $PP_TOT *$line_width; else $SP_CC500i=1;
if($PP15_ > 0) $SP_BB500i=$SP_BB500 / $PP_TOT *$line_width; else $SP_BB500i=1;
if($PP15_ > 0) $SP_BO500i=$SP_BO500 / $PP_TOT *$line_width; else $SP_BO500i=1;
if($PP15_ > 0) $SP_CT500i=$SP_CT500 / $PP_TOT *$line_width; else $SP_CT500i=1;
if($PP15_ > 0) $SP_CB500i=$SP_CB500 / $PP_TOT *$line_width; else $SP_CB500i=1;
if($PP15_ > 0) $SP_FNT500i=$SP_FNT500 / $PP_TOT *$line_width; else $SP_FNT500i=1;
if($PP15_ > 0) $SP_GS500i=$SP_GS500 / $PP_TOT *$line_width; else $SP_GS500i=1;
if($PP15_ > 0) $SP_HS500i=$SP_HS500 / $PP_TOT *$line_width; else $SP_HS500i=1;
if($PP15_ > 0) $SP_HD500i=$SP_HD500 / $PP_TOT *$line_width; else $SP_HD500i=1;
if($PP15_ > 0) $SP_PT500i=$SP_PT500 / $PP_TOT *$line_width; else $SP_PT500i=1;
if($PP15_ > 0) $SP_PG500i=$SP_PG500 / $PP_TOT *$line_width; else $SP_PG500i=1;
if($PP15_ > 0) $SP_MS500i=$SP_MS500 / $PP_TOT *$line_width; else $SP_MS500i=1;
if($PP15_ > 0) $SP_WS500i=$SP_WS500 / $PP_TOT *$line_width; else $SP_WS500i=1;
if($PP15_ > 0) $SP_CS500i=$SP_CS500 / $PP_TOT *$line_width; else $SP_CS500i=1;
if($PP15_ > 0) $SP_SG500i=$SP_SG500 / $PP_TOT *$line_width; else $SP_SG500i=1;
if($PP15_ > 0) $SP_TO500i=$SP_TO500 / $PP_TOT *$line_width; else $SP_TO500i=1;
if($PP15_ > 0) $SP_JW500i=$SP_JW500 / $PP_TOT *$line_width; else $SP_JW500i=1;
if($PP15_ > 0) $SP_OS500i=$SP_OS500 / $PP_TOT *$line_width; else $SP_OS500i=1;

if($PP15_ > 0) $SP_GRH200p=$SP_GRH200p *100 / $PP_TOT; else $SP_GRH200p=1;
if($PP15_ > 0) $SP_AP500p=$SP_AP500p *100 / $PP_TOT; else $SP_AP500p=1;
if($PP15_ > 0) $SP_MC500p=$SP_MC500p *100 / $PP_TOT; else $SP_MC500p=1;
if($PP15_ > 0) $SP_WC500p=$SP_WC500p *100 / $PP_TOT; else $SP_WC500p=1;
if($PP15_ > 0) $SP_CC500p=$SP_CC500p *100 / $PP_TOT; else $SP_CC500p=1;
if($PP15_ > 0) $SP_BB500p=$SP_BB500p *100 / $PP_TOT; else $SP_BB500p=1;
if($PP15_ > 0) $SP_BO500p=$SP_BO500p *100 / $PP_TOT; else $SP_BO500p=1;
if($PP15_ > 0) $SP_CT500p=$SP_CT500p *100 / $PP_TOT; else $SP_CT500p=1;
if($PP15_ > 0) $SP_CB500p=$SP_CB500p *100 / $PP_TOT; else $SP_CB500p=1;
if($PP15_ > 0) $SP_FNT500p=$SP_FNT500p *100 / $PP_TOT; else $SP_FNT500p=1;
if($PP15_ > 0) $SP_GS500p=$SP_GS500p *100 / $PP_TOT; else $SP_GS500p=1;
if($PP15_ > 0) $SP_HS500p=$SP_HS500p *100 / $PP_TOT; else $SP_HS500p=1;
if($PP15_ > 0) $SP_HD500p=$SP_HD500p *100 / $PP_TOT; else $SP_HD500p=1;
if($PP15_ > 0) $SP_PT500p=$SP_PT500p *100 / $PP_TOT; else $SP_PT500p=1;
if($PP15_ > 0) $SP_PG500p=$SP_PG500p *100 / $PP_TOT; else $SP_PG500p=1;
if($PP15_ > 0) $SP_MS500p=$SP_MS500p *100 / $PP_TOT; else $SP_MS500p=1;
if($PP15_ > 0) $SP_WS500p=$SP_WS500p *100 / $PP_TOT; else $SP_WS500p=1;
if($PP15_ > 0) $SP_CS500p=$SP_CS500p *100 / $PP_TOT; else $SP_CS500p=1;
if($PP15_ > 0) $SP_SG500p=$SP_SG500p *100 / $PP_TOT; else $SP_SG500p=1;
if($PP15_ > 0) $SP_TO500p=$SP_TO500p *100 / $PP_TOT; else $SP_TO500p=1;
if($PP15_ > 0) $SP_JW500p=$SP_JW500p *100 / $PP_TOT; else $SP_JW500p=1;
if($PP15_ > 0) $SP_OS500p=$SP_OS500p *100 / $PP_TOT; else $SP_OS500p=1;

$line_width2 = 2.25;
$SP_GRH200i2 = $SP_GRH200i * $line_width2;
$SP_AP500i2 = $SP_AP500i * $line_width2;
$SP_MC500i2 = $SP_MC500i * $line_width2;
$SP_WC500i2 = $SP_WC500i * $line_width2;
$SP_CC500i2 = $SP_CC500i * $line_width2;
$SP_BB500i2 = $SP_BB500i * $line_width2;
$SP_BO500i2 = $SP_BO500i * $line_width2;
$SP_CT500i2 = $SP_CT500i * $line_width2;
$SP_CB500i2 = $SP_CB500i * $line_width2;
$SP_FNT500i2 = $SP_FNT500i * $line_width2;
$SP_GS500i2 = $SP_GS500i * $line_width2;
$SP_HS500i2 = $SP_HS500i * $line_width2;
$SP_HD500i2 = $SP_HD500i * $line_width2;
$SP_PT500i2 = $SP_PT500i * $line_width2;
$SP_PG500i2 = $SP_PG500i * $line_width2;
$SP_MS500i2 = $SP_MS500i * $line_width2;
$SP_WS500i2 = $SP_WS500i * $line_width2;
$SP_CS500i2 = $SP_CS500i * $line_width2;
$SP_SG500i2 = $SP_SG500i * $line_width2;
$SP_TO500i2 = $SP_TO500i * $line_width2;
$SP_JW500i2 = $SP_JW500i * $line_width2;
$SP_OS500i2 = $SP_OS500i * $line_width2;

$line_width2_max = 430;
$SP_GRH200i2 = min($SP_GRH200i2,$line_width2_max);
$SP_AP500i2 = min($SP_AP500i2,$line_width2_max);
$SP_MC500i2 = min($SP_MC500i2,$line_width2_max);
$SP_WC500i2 = min($SP_WC500i2,$line_width2_max);
$SP_CC500i2 = min($SP_CC500i2,$line_width2_max);
$SP_BB500i2 = min($SP_BB500i2,$line_width2_max);
$SP_BO500i2 = min($SP_BO500i2,$line_width2_max);
$SP_CT500i2 = min($SP_CT500i2,$line_width2_max);
$SP_CB500i2 = min($SP_CB500i2,$line_width2_max);
$SP_FNT500i2 = min($SP_FNT500i2,$line_width2_max);
$SP_GS500i2 = min($SP_GS500i2,$line_width2_max);
$SP_HS500i2 = min($SP_HS500i2,$line_width2_max);
$SP_HD500i2 = min($SP_HD500i2,$line_width2_max);
$SP_PT500i2 = min($SP_PT500i2,$line_width2_max);
$SP_PG500i2 = min($SP_PG500i2,$line_width2_max);
$SP_MS500i2 = min($SP_MS500i2,$line_width2_max);
$SP_WS500i2 = min($SP_WS500i2,$line_width2_max);
$SP_CS500i2 = min($SP_CS500i2,$line_width2_max);
$SP_SG500i2 = min($SP_SG500i2,$line_width2_max);
$SP_TO500i2 = min($SP_TO500i2,$line_width2_max);
$SP_JW500i2 = min($SP_JW500i2,$line_width2_max);
$SP_OS500i2 = min($SP_OS500i2,$line_width2_max);

$age_2029i2i = $age_2029i2/$age_adults*2;
$age_3039i2i = $age_3039i2/$age_adults*2;
$age_4049i2i = $age_4049i2/$age_adults*2;
$age_5059i2i = $age_5059i2/$age_adults*2;
$age_6069i2i = $age_6069i2/$age_adults*2;
$age_70i2i = $age_70i2/$age_adults*2;
$age_kidsyi2i = $age_kidsyi2/$PP_TOT*2;
$age_kidsoldi2i = $age_kidsoldi2/$PP_TOT*2;
$inc030i2i = $inc030i2/$IN_THH*2;
$inc3070i2i = $inc3070i2/$IN_THH*2;
$inc70100i2i = $inc70100i2/$IN_THH*2;
$inc100i2i = $inc100i2/$IN_THH*2;
$fm_singlei2i = $fm_singlei2/$IN_THH*2;
$couplei2i = $couplei2/$IN_THH*2;
$familyi2i = $familyi2/$IN_THH*2;
$sparenti2i = $sparenti2/$IN_THH*2;

$demo_line_width = 1.5;
$wid_age_2029 = $age_2029i2i *$demo_line_width;
$wid_age_3039 = $age_3039i2i *$demo_line_width;
$wid_age_4049 = $age_4049i2i *$demo_line_width;
$wid_age_5059 = $age_5059i2i *$demo_line_width;
$wid_age_6069 = $age_6069i2i *$demo_line_width;
$wid_age_70 = $age_70i2i *$demo_line_width;
$wid_age_kidsy = $age_kidsyi2i *$demo_line_width;
$wid_age_kidsold = $age_kidsoldi2i *$demo_line_width;
$wid_inc030 = $inc030i2i *$demo_line_width;
$wid_inc3070 = $inc3070i2i *$demo_line_width;
$wid_inc70100 = $inc70100i2i *$demo_line_width;
$wid_inc100 = $inc100i2i *$demo_line_width;
$wid_fm_single = $fm_singlei2i *$demo_line_width;
$wid_couple = $couplei2i *$demo_line_width;
$wid_family = $familyi2i *$demo_line_width;
$wid_sparent = $sparenti2i *$demo_line_width;
$wid_MN_VISi= $MN_VISp/$MN_VISc*100*$demo_line_width;
$wid_MN_CHINESEi= $MN_CHINESEp/$MN_CHINESEc*100*$demo_line_width;
$wid_MN_SASIANi= $MN_SASIANp/$MN_SASIANc*100*$demo_line_width;
$wid_MN_BLACKi= $MN_BLACKp/$MN_BLACKc*100*$demo_line_width;
$wid_MN_WHITEi= $MN_WHITEp/$MN_WHITEc*100*$demo_line_width;

$wid_age_2029 = min($wid_age_2029, $line_width2_max);
$wid_age_3039 = min($wid_age_3039, $line_width2_max);
$wid_age_4049 = min($wid_age_4049, $line_width2_max);
$wid_age_5059 = min($wid_age_5059, $line_width2_max);
$wid_age_6069 = min($wid_age_6069, $line_width2_max);
$wid_age_70 = min($wid_age_70, $line_width2_max);
$wid_age_kidsy = min($wid_age_kidsy, $line_width2_max);
$wid_age_kidsold = min($wid_age_kidsold, $line_width2_max);
$wid_inc030 = min($wid_inc030, $line_width2_max);
$wid_inc3070 = min($wid_inc3070, $line_width2_max);
$wid_inc70100 = min($wid_inc70100, $line_width2_max);
$wid_inc100 = min($wid_inc100, $line_width2_max);
$wid_fm_single = min($wid_fm_single, $line_width2_max);
$wid_couple = min($wid_couple, $line_width2_max);
$wid_family = min($wid_family, $line_width2_max);
$wid_sparent = min($wid_sparent, $line_width2_max);
$wid_MN_VISi = min($wid_MN_VISi, $line_width2_max);
$wid_MN_CHINESEi = min($wid_MN_CHINESEi, $line_width2_max);
$wid_MN_SASIANi = min($wid_MN_SASIANi, $line_width2_max);
$wid_MN_BLACKi = min($wid_MN_BLACKi, $line_width2_max);
$wid_MN_WHITEi = min($wid_MN_WHITEi, $line_width2_max);

$test_arrayi[] = $age_2029i;
$test_arrayi[] = $age_3039i;
$test_arrayi[] = $age_4049i;
$test_arrayi[] = $age_5059i;
$test_arrayi[] = $age_6069i;
$test_arrayi[] = $age_70i;
$test_arrayi[] = $age_kidsyi;
$test_arrayi[] = $age_kidsoldi;
$test_arrayi[] = $inc030i;
$test_arrayi[] = $inc3070i;
$test_arrayi[] = $inc70100i;
$test_arrayi[] = $inc100i;
$test_arrayi[] = $fm_singlei;
$test_arrayi[] = $couplei;
$test_arrayi[] = $familyi;
$test_arrayi[] = $sparenti;

$test_arrayp[0] = $age_2029p;
$test_arrayp[1] = $age_3039p;
$test_arrayp[2] = $age_4049p;
$test_arrayp[3] = $age_5059p;
$test_arrayp[4] = $age_6069p;
$test_arrayp[5] = $age_70p;
$test_arrayp[6] = $age_kidsyp;
$test_arrayp[7] = $age_kidsoldp;
$test_arrayp[8] = $inc030p;
$test_arrayp[9] = $inc3070p;
$test_arrayp[10] = $inc70100p;
$test_arrayp[11] = $inc100p;
$test_arrayp[12] = $fm_singlep;
$test_arrayp[13] = $couplep;
$test_arrayp[14] = $familyp;
$test_arrayp[15] = $sparentp;

// age calculations
$age_bandn[0] = "Age 20-29";
$age_bandn[1] = "Age 30-49";
$age_bandn[2] = "Age 50-59";
$age_bandn[3] = "Age 60+";

$age_bandp[0] = $test_arrayp[0] ;
$age_bandp[1] = $test_arrayp[1] + $test_arrayp[2] ;
$age_bandp[2] = $test_arrayp[3] ;
$age_bandp[3] = $test_arrayp[5]+$test_arrayp[4] ;

$age_bandi[0] = $test_arrayi[0] ;
$age_bandi[1] = ($test_arrayp[1]+$test_arrayp[2])/($age_3039c+$age_4049c)*100 ;
$age_bandi[2] = $test_arrayi[3] ;
$age_bandi[3] = ($test_arrayp[4]+$test_arrayp[5])/($age_6069c+$age_70c)*100 ;

$max_age_bandsi = max($age_bandi[0],$age_bandi[1],$age_bandi[2],$age_bandi[3]);


if($IN_THH > 0) $D2001hh = $D2001 / $IN_THH; else $D2001hh = 0;
if($IN_THH > 0) $D2011hh = $D2011 / $IN_THH; else $D2011hh = 0;
if($IN_THH > 0) $D2270_2300hh = $D2270_2300 / $IN_THH; else $D2270_2300hh = 0;
if($IN_THH > 0) $D2270hh = $D2270 / $IN_THH; else $D2270hh = 0;
if($IN_THH > 0) $D2280hh = $D2280 / $IN_THH; else $D2280hh = 0;
if($IN_THH > 0) $D2290hh = $D2290 / $IN_THH; else $D2290hh = 0;
if($IN_THH > 0) $D2300hh = $D2300 / $IN_THH; else $D2300hh = 0;
if($IN_THH > 0) $D2310hh = $D2310 / $IN_THH; else $D2310hh = 0;
if($IN_THH > 0) $D2340_2370hh = $D2340_2370 / $IN_THH; else $D2340_2370hh = 0;
if($IN_THH > 0) $D2340hh = $D2340 / $IN_THH; else $D2340hh = 0;
if($IN_THH > 0) $D2350hh = $D2350 / $IN_THH; else $D2350hh = 0;
if($IN_THH > 0) $D2360hh = $D2360 / $IN_THH; else $D2360hh = 0;
if($IN_THH > 0) $D2370hh = $D2370 / $IN_THH; else $D2370hh = 0;
if($IN_THH > 0) $D2380hh = $D2380 / $IN_THH; else $D2380hh = 0;
if($IN_THH > 0) $D2500_2534hh = $D2500_2534 / $IN_THH; else $D2500_2534hh = 0;
if($IN_THH > 0) $D2500hh = $D2500 / $IN_THH; else $D2500hh = 0;
if($IN_THH > 0) $D2510hh = $D2510 / $IN_THH; else $D2510hh = 0;
if($IN_THH > 0) $D2520hh = $D2520 / $IN_THH; else $D2520hh = 0;
if($IN_THH > 0) $D2534hh = $D2534 / $IN_THH; else $D2534hh = 0;
if($IN_THH > 0) $D2540_2680hh = $D2540_2680 / $IN_THH; else $D2540_2680hh = 0;
if($IN_THH > 0) $D2540_2590hh = $D2540_2590 / $IN_THH; else $D2540_2590hh = 0;
if($IN_THH > 0) $D2540hh = $D2540 / $IN_THH; else $D2540hh = 0;
if($IN_THH > 0) $D2542hh = $D2542 / $IN_THH; else $D2542hh = 0;
if($IN_THH > 0) $D2550hh = $D2550 / $IN_THH; else $D2550hh = 0;
if($IN_THH > 0) $D2552hh = $D2552 / $IN_THH; else $D2552hh = 0;
if($IN_THH > 0) $D2554hh = $D2554 / $IN_THH; else $D2554hh = 0;
if($IN_THH > 0) $D2560hh = $D2560 / $IN_THH; else $D2560hh = 0;
if($IN_THH > 0) $D2570hh = $D2570 / $IN_THH; else $D2570hh = 0;
if($IN_THH > 0) $D2580hh = $D2580 / $IN_THH; else $D2580hh = 0;
if($IN_THH > 0) $D2582hh = $D2582 / $IN_THH; else $D2582hh = 0;
if($IN_THH > 0) $D2584hh = $D2584 / $IN_THH; else $D2584hh = 0;
if($IN_THH > 0) $D2586hh = $D2586 / $IN_THH; else $D2586hh = 0;
if($IN_THH > 0) $D2590hh = $D2590 / $IN_THH; else $D2590hh = 0;
if($IN_THH > 0) $D2600_2602hh = $D2600_2602 / $IN_THH; else $D2600_2602hh = 0;
if($IN_THH > 0) $D2600hh = $D2600 / $IN_THH; else $D2600hh = 0;
if($IN_THH > 0) $D2602hh = $D2602 / $IN_THH; else $D2602hh = 0;
if($IN_THH > 0) $D2610hh = $D2610 / $IN_THH; else $D2610hh = 0;
if($IN_THH > 0) $D2620hh = $D2620 / $IN_THH; else $D2620hh = 0;
if($IN_THH > 0) $D2630hh = $D2630 / $IN_THH; else $D2630hh = 0;
if($IN_THH > 0) $D2640hh = $D2640 / $IN_THH; else $D2640hh = 0;
if($IN_THH > 0) $D2650hh = $D2650 / $IN_THH; else $D2650hh = 0;
if($IN_THH > 0) $D2660hh = $D2660 / $IN_THH; else $D2660hh = 0;
if($IN_THH > 0) $D2670hh = $D2670 / $IN_THH; else $D2670hh = 0;
if($IN_THH > 0) $D2674hh = $D2674 / $IN_THH; else $D2674hh = 0;
if($IN_THH > 0) $D2680hh = $D2680 / $IN_THH; else $D2680hh = 0;
if($IN_THH > 0) $D2690hh = $D2690 / $IN_THH; else $D2690hh = 0;
if($IN_THH > 0) $D2700hh = $D2700 / $IN_THH; else $D2700hh = 0;
if($IN_THH > 0) $D2710hh = $D2710 / $IN_THH; else $D2710hh = 0;


if($IN_THH > 0) $D4180hh = $D4180 / $IN_THH; else $D4180hh = 0;








/*arsort($age_bandi);
foreach ($age_bandi as $key => $val) {
	$sorted_age_bandi[] = $age_bandi[$key];
	$sorted_age_bandp[] = $age_bandp[$key];
	$sorted_age_bandn[] = $age_bandn[$key];
	
}
*/
$age_comment = "";
$age_counter = 0;
$temp_last_age_band = 0;

// very high age 30-49
if($age_bandi[1] > 110 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[1]) . "% of people in this market area are " . $age_bandn[1] . ", this is considered very high compared to the Canadian average ";
$age_image[] = 1;
$age_top_comment[] = $age_bandn[1] . " (very high)";
$age_counter = $age_counter +1;
$temp_last_age_band = 1;
}

$temp_last_age_band = 0;
// very high age 60+
if($age_bandi[3] > 113 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[3]) . "% of people in this market area are " . $age_bandn[3] . ", this is considered very high compared to the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 3;
$age_top_comment[] = $age_bandn[3] . " (very high)";
$temp_last_age_band = 1;
}
if($age_bandi[3] > 113 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", there is also a very high concentration of people " . $age_bandn[3];
$age_image[] = 3;
}
$temp_last_age_band = 0;

// very high 20s
if($age_bandi[0] > 120 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[0]) . "% of people in this market area are " . $age_bandn[0] . ", this is considered very high compared to the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 0;
$age_top_comment[] = $age_bandn[0] . " (very high)";
$temp_last_age_band = 1;
}
if($age_bandi[0] > 120 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", there is also a very high concentration of people " . $age_bandn[0];
$age_counter = $age_counter +1;
$age_image[] = 0;
}
$temp_last_age_band = 0;

// very high 50s
if($age_bandi[2] > 120 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[2] ) . "% of people in this market area are " . $age_bandn[2] . " this is considered very high compared to the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 2;
$age_top_comment[] = $age_bandn[2] . " (very high)";
$temp_last_age_band = 1;
}
if($age_bandi[2] > 120 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", there is also a very high concentration of people " . $age_bandn[2];
$age_counter = $age_counter +1;
$age_image[] = 2;
}
$temp_last_age_band = 0;

//higher age 30-49
if($age_bandi[1] > 105 && $age_bandi[1] <= 113 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[1]) . "% of people in this market area are " . $age_bandn[1] . " this is considered high compared to the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 1;
$age_top_comment[] = $age_bandn[1] . " (high presence)";
$temp_last_age_band = 1;
}
if($age_bandi[1] > 105 && $age_bandi[1] <= 113 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", there is also a higher concentration of people " . $age_bandn[1];
$age_counter = $age_counter +1;
$age_image[] = 1;
}
$temp_last_age_band = 0;

// higher 60+
if($age_bandi[3] > 106 && $age_bandi[3] <= 110 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[3]) . "% of people in this market area are " . $age_bandn[3] . " this is considered high compared to the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 3;
$age_top_comment[] = $age_bandn[3] . " (high presence)";
$temp_last_age_band = 1;
}
if($age_bandi[3] > 106 && $age_bandi[3] <= 110 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", there is also a higher concentration of people " . $age_bandn[3];
$age_counter = $age_counter +1;
$age_image[] = 3;
}
$temp_last_age_band = 0;

//  higher 20s
if($age_bandi[0] > 110 && $age_bandi[0] <= 120 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[0]) . "% of people in this market area are " . $age_bandn[0] . " this is considered high compared to the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 0;
$age_top_comment[] = $age_bandn[0] . " (high presence)";
$temp_last_age_band = 1;
}
if($age_bandi[0] > 110 && $age_bandi[0] <= 120 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", there is also a higher concentration of people " . $age_bandn[0];
$age_counter = $age_counter +1;
$age_image[] = 0;
}
$temp_last_age_band = 0;

//  higher 50s
if($age_bandi[2] > 110 && $age_bandi[2] <= 120 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[2]) . "% of people in this market area are " . $age_bandn[2] . " this is considered high compared to the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 2;
$age_top_comment[] = $age_bandn[2] . " (high presence)";
$temp_last_age_band = 1;
}
if($age_bandi[2] > 110 && $age_bandi[2] <= 120 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", there is also a higher concentration of people " . $age_bandn[2];
$age_counter = $age_counter +1;
$age_image[] = 2;
}
$temp_last_age_band = 0;


//higher age 30-49
if($age_bandi[1] > 102 && $age_bandi[1] <= 105 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[1]) . "% of people in this market area are " . $age_bandn[1] . " this is considered slightly higher than the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 1;
$age_top_comment[] = $age_bandn[1] . " (slightly higher)";
$temp_last_age_band = 1;
}
if($age_bandi[1] > 102 && $age_bandi[1] <= 105 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", and " . $age_bandn[2];
$age_counter = $age_counter +1;
$age_image[] = 1;
}
$temp_last_age_band = 0;

// age 60+
if($age_bandi[3] > 103 && $age_bandi[3] <= 106 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[3]) . "% of people in this market area are " . $age_bandn[3] . " this is considered slightly higher than the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 3;
$age_top_comment[] = $age_bandn[3] . " (slightly higher)";
$temp_last_age_band = 1;
}
if($age_bandi[3] > 103 && $age_bandi[3] <= 106 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", and " . $age_bandn[3];
$age_counter = $age_counter +1;
$age_image[] = 3;
}
$temp_last_age_band = 0;

// 20s
if($age_bandi[0] > 105 && $age_bandi[0] <= 110 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[0]) . "% of people in this market area are " . $age_bandn[0] . " this is considered slightly higher than the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 0;
$age_top_comment[] = $age_bandn[0] . " (slightly higher)";
$temp_last_age_band = 1;
}
if($age_bandi[0] > 105 && $age_bandi[0] <= 110 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", and " . $age_bandn[0];
$age_counter = $age_counter +1;
$age_image[] = 0;
}
$temp_last_age_band = 0;

//   50s
if($age_bandi[2] > 105 && $age_bandi[2] <= 110 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[2]) . "% of people in this market area are " . $age_bandn[2] . " this is considered slightly higher than the Canadian average ";
$age_counter = $age_counter +1;
$age_image[] = 2;
$age_top_comment[] = $age_bandn[2] . " (slightly higher)";
$temp_last_age_band = 1;
}
if($age_bandi[2] > 105 && $age_bandi[2] <= 110 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", and " . $age_bandn[2];
$age_counter = $age_counter +1;
$age_image[] = 2;
}
$temp_last_age_band = 0;

// mixed age bands
if($age_counter < 1) {
$age_comment= "The age distribution in this market area is very similar to the Canadian averages";
$age_image[] = 4;
$age_top_comment[] = "Mixed ages";
}

// age pics
// 20s

if($age_image[0] == 0) {
	$image_display_age = "s_geny_w5.jpg";
	if($MN_VISp > 40) $image_display_age = "s_genx_eth2.jpg";
	if($MN_BLACKp > 20) $image_display_age = "s_genx_eth3.jpg";
}
if($age_image[0] == 1) {
	$image_display_age = "s_genx_w.jpg";
	if($MN_VISp > 40) $image_display_age = "s_genx_bl22.jpg";
}
if($age_image[0] == 2) {
	$image_display_age = "s_boomer_w.jpg";
}
if($age_image[0] == 3) {
	$image_display_age = "s_mature_w22.jpg";
	if($MN_VISp > 40) $image_display_age = "s_mature_bl.jpg";
}
if($age_image[0] == 4) {
	$image_display_age = "a_mixed.jpg";
}


// Family
$family_comment = "";
$family_counter = 0;

$family_bandi[0] = $fm_singlei;
$family_bandi[1] = $couplei;
$family_bandi[2] = $familyi;
$family_bandi[3] = $sparenti;

$family_bandp[0] = $fm_singlep;
$family_bandp[1] = $couplep;
$family_bandp[2] = $familyp;
$family_bandp[3] = $sparentp;

$family_bandn[0] = "Singles";
$family_bandn[1] = "Couples (no kids)";
$family_bandn[2] = "Families with children";
$family_bandn[3] = "Single parent families";

$temp_last_family_band =0;
// Family with kids

// very high family 
if($family_bandi[2] > 113 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[2]) . "% of households in this market area are " . $family_bandn[2] . " this is considered very high compared to the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 2;
$family_top_comment[] = $family_bandn[2] . " (very high)";
}

// couples
if($family_bandi[1] > 113 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[1]) . "% of households in this market area are " . $family_bandn[1] . " this is considered very high compared to the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 1;
$family_top_comment[] = $family_bandn[1] . " (very high)";
$temp_last_family_band =1;
}
if($family_bandi[1] > 113 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and " . $family_bandn[1];
$family_counter = $family_counter +1;
$family_image[] = 1;
}
$temp_last_family_band =0;

// singles
if($family_bandi[0] > 113 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[0]) . "% of households in this market area are " . $family_bandn[0] . " this is considered very high compared to the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 0;
$family_top_comment[] = $family_bandn[0] . " (very high)";
$temp_last_family_band =1;
}
if($family_bandi[0] > 113 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and " . $family_bandn[0];
$family_counter = $family_counter +1;
$family_image[] = 0;
}
$temp_last_family_band =0;

// higher family 
if($family_bandi[2] > 108 && $family_bandi[2] <= 113 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[2]) . "% of households in this market area are " . $family_bandn[2] . " this is considered higher than the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 2;
$family_top_comment[] = $family_bandn[2] . " (high presence)";
$temp_last_family_band =1;
}
if($family_bandi[2] > 108 && $family_bandi[2] <= 113 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and " . $family_bandn[2];
$family_counter = $family_counter +1;
$family_image[] = 2;
}
$temp_last_family_band =0;

// higher couples
if($family_bandi[1] > 108 && $family_bandi[1] <= 113 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[1]) . "% of households in this market area are " . $family_bandn[1] . " this is considered higher than the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 1;
$family_top_comment[] = $family_bandn[1] . " (high presence)";
$temp_last_family_band =1;
}
if($family_bandi[1] > 108 && $family_bandi[1] <= 113 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and " . $family_bandn[1];
$family_counter = $family_counter +1;
$family_image[] = 1;
}
$temp_last_family_band =0;

// higher singles
if($family_bandi[0] > 108 && $family_bandi[0] <= 113 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[0]) . "% of households in this market area are " . $family_bandn[0] . " this is considered higher than the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 0;
$family_top_comment[] = $family_bandn[0] . " (high presence)";
$temp_last_family_band =1;
}
if($family_bandi[0] > 108 && $family_bandi[0] <= 113 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and " . $family_bandn[0];
$family_counter = $family_counter +1;
$family_image[] = 0;
}
$temp_last_family_band =0;

// higher single parent families
if($family_bandi[3] > 120 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[3]) . "% of households in this market area are " . $family_bandn[3] . " this is considered higher than the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 3;
$family_top_comment[] = $family_bandn[3] . " (high presence)";
$temp_last_family_band =1;
}
if($family_bandi[3] > 120  && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and " . $family_bandn[3];
$family_counter = $family_counter +1;
$family_image[] = 1;
}
$temp_last_family_band =0;

// higher family 
if($family_bandi[2] > 103 && $family_bandi[2] <= 108 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[2]) . "% of households in this market area are " . $family_bandn[2] . " this is considered slightly higher than the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 2;
$family_top_comment[] = $family_bandn[2] . " (slightly higher)";
$temp_last_family_band =1;
}
if($family_bandi[2] > 103 && $family_bandi[2] <= 108 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and slightly more " . $family_bandn[2];
$family_counter = $family_counter +1;
$family_image[] = 2;
}
$temp_last_family_band =0;

// higher couples
if($family_bandi[1] > 103 && $family_bandi[1] <= 108 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[1]) . "% of households in this market area are " . $family_bandn[1] . " this is considered slightly higher than the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 1;
$family_top_comment[] = $family_bandn[1] . " (slightly higher)";
$temp_last_family_band =1;
}
if($family_bandi[1] > 103 && $family_bandi[1] <= 108 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and slightly more " . $family_bandn[1];
$family_counter = $family_counter +1;
$family_image[] = 1;
}
$temp_last_family_band =0;

// higher singles
if($family_bandi[0] > 103 && $family_bandi[0] <= 108 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[0]) . "% of households in this market area are " . $family_bandn[0] . " this is considered slightly higher than the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 0;
$family_top_comment[] = $family_bandn[0] . " (slightly higher)";
$temp_last_family_band =1;
}
if($family_bandi[0] > 103 && $family_bandi[0] <= 108 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " and slightly more " . $family_bandn[0];
$family_counter = $family_counter +1;
$family_image[] = 0;
}
$temp_last_family_band =0;

// higher single parent families
if($family_bandi[3] > 110 && $family_bandi[3] <= 120 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[3]) . "% of households in this market area are " . $family_bandn[3] . " this is considered slightly higher than the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 0;
$family_top_comment[] = $family_bandn[3] . " (slightly higher)";
$temp_last_family_band =1;
}
if($family_bandi[3] > 110 && $family_bandi[3] <= 120 && $family_counter >0 && $family_counter <3 && $temp_last_family_band < 1){
$family_comment= $family_comment . " there are also more " . $family_bandn[3];
$family_counter = $family_counter +1;
$family_image[] = 3;
}
$temp_last_family_band =0;

// mixed age bands
if($family_counter < 1) {
$family_comment= "The family structure (e.g. singles, couples, families) in this market area is very similar in composition to the Canadian averages";
$family_image[] = 4;
$family_top_comment[] = "Mixed family structures";
}


// images for family structure

// singles
if($family_image[0] == 0){	
	$image_display_family = "a_mixed.jpg";
	// young
	if($age_image[0] == 0) {
		$image_display_family = "s_mixed_w.jpg";
		if($MN_VISp > 30) $image_display_family = "a_mixed_eth.jpg";
		if($MN_BLACKp > 20)	$image_display_family = "s_geny_bl.jpg";			
	}
	// 30-50
	if($age_image[0] == 1) {
		$image_display_family = "a_mixed_w.jpg";
		if($MN_VISp > 50) $image_display_family = "a_mixed_eth.jpg";
		if($MN_BLACKp > 20)	$image_display_family = "s_geny_bl.jpg";	
	}
	// 50
	if($age_image[0] == 2) {
		$image_display_family = "s_boomer_w2.jpg";
		if($MN_VISp > 50) $image_display_family = "s_boomer_bl.jpg";
	}
	// 60+
	if($age_image[0] == 3) {
		$image_display_family = "a_mature_w.jpg";
	}	
}

// couples
if($family_image[0] == 1){	
	$image_display_family = "a_mixed.jpg";
	// young
	if($age_image[0] == 0) {
		$image_display_family = "c_geny_w.jpg";
		if($MN_VISp > 30) $image_display_family = "c_geny_we.jpg";
	}
	// 30-50
	if($age_image[0] == 1) {
		$image_display_family = "c_genx_w.jpg";	
	}
	// 50
	if($age_image[0] == 2) {
		$image_display_family = "c_boomer_w.jpg";
		if($MN_VISp > 30) $image_display_family = "c_boomer_eth.jpg";
	}
	// 60+
	if($age_image[0] == 3) {
		$image_display_family = "c_mature_w.jpg";
	}	
}

// families
if($family_image[0] == 2){	
	$image_display_family = "f_mixed_w.jpg";
	// young
	if($age_image[0] == 0) {
		$image_display_family = "f_genx_w.jpg";
		if($MN_VISp > 30) $image_display_family = "f_genx_eth.jpg";
	}
	// 30-50
	if($age_image[0] == 1) {
		$image_display_family = "f_genx_w.jpg";
		if($MN_VISp > 30) $image_display_family = "f_genx_eth.jpg";	
	}
	// 50
	if($age_image[0] == 2) {
		$image_display_family = "f_boomer_w.jpg";
		if($MN_VISp > 30) $image_display_family = "f_mixed_eth22.jpg";
	}
	// 60+
	if($age_image[0] == 3) {
		$image_display_family = "f_mixed_w.jpg";
		if($MN_VISp > 30) $image_display_family = "f_mixed_eth22.jpg";
	}	
}

// s parent
if($family_image[0] == 3){	
	$image_display_family = "k_mature_w.jpg";
	// young
	if($age_image[0] == 0) {
		$image_display_family = "k_mature_w.jpg";
		if($MN_VISp > 30) $image_display_family = "sp_genx_ch.jpg";
	}
	// 30-50
	if($age_image[0] == 1) {
		$image_display_family = "k_mature_w.jpg";
		if($MN_VISp > 30) $image_display_family = "sp_genx_ch.jpg";	
	}
	// 50
	if($age_image[0] == 2) {
		$image_display_family = "k_mature_w.jpg";
		if($MN_VISp > 30) $image_display_family = "f_mixed_eth.jpg";
	}
	// 60+
	if($age_image[0] == 3) {
		$image_display_family = "k_mature_w.jpg";
		if($MN_VISp > 30) $image_display_family = "f_mixed_eth.jpg";
	}	
}


// mixed
if($family_image[0] == 4){	
	$image_display_family = "a_mixed_we.jpg";
}



// image 3

$image_display_3 = ""; 
$image3_counter = 0;
$image3_top_comment = "";

// default
$image3_top_comment = "No other notable age of family differences";
$image_display_3 = "a_genx_we.jpg"; 
$family_image[] =10;
$age_image[] =10;
$family_image[] =10;
$age_image[] =10;

// families with young / old kids
if($family_image[0] == 2 && $test_arrayp[6] > 13 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Families with young children";
	$image_display_3 = "k_mixed.jpg"; 
	if($MN_VISp > 70) $image_display_3 = "k_5_ch.jpg"; 	
}
if($family_image[0] == 2 && $test_arrayp[7] > 13 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Families with older children";
	$image_display_3 = "k_teen_eth4.jpg"; 
}
if($family_image[1] == 2 && $test_arrayp[6] > 13 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Families with young children";
	$image_display_3 = "k_mixed"; 
	if($MN_VISp > 70) $image_display_3 = "k_5_ch.jpg"; 	
}
if($family_image[1] == 2 && $test_arrayp[7] > 13 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Families with older children";
	$image_display_3 = "k_teen_eth4.jpg"; 
}
if($family_image[1] == 1 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Couples without children";
	$image_display_3 = "c_genx_w3.jpg"; 
}
if($family_image[1] == 2 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Families with children";
	$image_display_3 = "f_genx_w22.jpg"; 
}
if($family_image[1] == 0 && $age_image[0] <2 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Singles";
	$image_display_3 = "s_geny_eth.jpg"; 
}
if($family_image[1] == 0 && $age_image[0] >1 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Singles";
	$image_display_3 = "s_boomer_w32.jpg"; 
}
if($age_image[1] == 2 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Age 50-59";
	$image_display_3 = "s_boomer_w32.jpg"; 
}
if($age_image[1] == 0 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Age 20-29";
	$image_display_3 = "s_geny_eth.jpg"; 
}
if($age_image[1] == 2 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Age 30-49";
	$image_display_3 = "s_geny_w2.jpg"; 
}
if($age_image[1] == 3 && $image3_counter <1)
{
	$image3_counter = 1;
	$image3_top_comment = "Age 60+";
	$image_display_3 = "s_mature_w2.jpg"; 
}

// income

$income_counter = 0;
if($test_arrayi[11] > 110) {
	$income_comment = 	number_format($test_arrayp[11]) . "% of households earn $100,000 + annually";
	$income_counter = $income_counter +1;
}
if($test_arrayi[10] > 110 && $income_counter <1) {
	$income_comment = 	number_format($test_arrayp[10]) . "% of households earn $70,000 - $100,000 annually";	
	$income_counter = $income_counter +1;
}
if($test_arrayi[10] > 110 && $income_counter >0 && $income_counter <2) {
	$income_comment = 	number_format($test_arrayp[10]) . "% earn $70,000 - $100,000";
	$income_counter = $income_counter +1;	
}
if($test_arrayi[9] > 110 && $income_counter <1) {
	$income_comment = 	number_format($test_arrayp[9]) . "% of households earn $30,000 - $70,000 annually";	
	$income_counter = $income_counter +1;
}
if($test_arrayi[9] > 110 && $income_counter >0 && $income_counter <2) {
	$income_comment = 	number_format($test_arrayp[9]) . "% earn $30,000 - $70,000";
	$income_counter = $income_counter +1;	
}
if($test_arrayi[8] > 110 && $income_counter <1) {
	$income_comment = 	number_format($test_arrayp[8]) . "% of households earn less than $30,000 annually";	
	$income_counter = $income_counter +1;
}
if($test_arrayi[8] > 110 && $income_counter >0 && $income_counter <2) {
	$income_comment = 	number_format($test_arrayp[8]) . "% earn less than $30,000";
	$income_counter = $income_counter +1;	
}

if($income_counter <1) $income_comment = "Households income is $" . number_format($IN_AHHp);


// ethnic diversity
// Ethnic Diversity

$ethnic_comment = number_format($MN_WHITEp) . "% of population in the market area is Cacausian ";
if($MN_CHINESEp <10 && $MN_SASIANp<10 && $MN_BLACKp < 10)  $ethnic_comment = $ethnic_comment . number_format($MN_VISp) . "% visible minority"; else {
	if($MN_CHINESEp >=10)  $ethnic_comment = $ethnic_comment . ", " . number_format($MN_CHINESEp) . "% Chinese ethnicity";
	if($MN_SASIANp >=10)  $ethnic_comment = $ethnic_comment . ", " . number_format($MN_SASIANp) . "% South Asian ethnicity";
	if($MN_BLACKp >=10)  $ethnic_comment = $ethnic_comment . ", " . number_format($MN_BLACKp) . "% Black";
}




// nice to have code but not going to use.  But I like it so I'm not going to delete it
/*
$age_4_cohorts[0] = ($test_arrayp[0]+$test_arrayp[1]+$test_arrayp[2]+$test_arrayp[3])/4;
$age_4_cohorts[1] = ($test_arrayp[4]+$test_arrayp[1]+$test_arrayp[2]+$test_arrayp[3])/4;
$age_4_cohorts[2] = ($test_arrayp[4]+$test_arrayp[5]+$test_arrayp[2]+$test_arrayp[3])/4;
$age_4_cohorts[3] = ($test_arrayp[4]+$test_arrayp[5]+$test_arrayp[0]+$test_arrayp[1])/4;
$age_3_cohorts[0] = ($test_arrayp[0]+$test_arrayp[1]+$test_arrayp[2])/3;
$age_3_cohorts[1] = ($test_arrayp[3]+$test_arrayp[1]+$test_arrayp[2])/3;
$age_3_cohorts[2] = ($test_arrayp[3]+$test_arrayp[4]+$test_arrayp[2])/3;
$age_3_cohorts[3] = ($test_arrayp[3]+$test_arrayp[4]+$test_arrayp[5])/3;
$age_2_cohorts[0] = ($test_arrayp[0]+$test_arrayp[1])/2;
$age_2_cohorts[1] = ($test_arrayp[2]+$test_arrayp[1])/2;
$age_2_cohorts[2] = ($test_arrayp[2]+$test_arrayp[3])/2;
$age_2_cohorts[3] = ($test_arrayp[4]+$test_arrayp[3])/2;
$age_2_cohorts[4] = ($test_arrayp[4]+$test_arrayp[5])/2;

$age_4_cohortsi[0] = ($test_arrayi[0]+$test_arrayi[1]+$test_arrayi[2]+$test_arrayi[3])/4;
$age_4_cohortsi[1] = ($test_arrayi[4]+$test_arrayi[1]+$test_arrayi[2]+$test_arrayi[3])/4;
$age_4_cohortsi[2] = ($test_arrayi[4]+$test_arrayi[5]+$test_arrayi[2]+$test_arrayi[3])/4;
$age_4_cohortsi[3] = ($test_arrayi[4]+$test_arrayi[5]+$test_arrayi[0]+$test_arrayi[1])/4;
$age_3_cohortsi[0] = ($test_arrayi[0]+$test_arrayi[1]+$test_arrayi[2])/3;
$age_3_cohortsi[1] = ($test_arrayi[3]+$test_arrayi[1]+$test_arrayi[2])/3;
$age_3_cohortsi[2] = ($test_arrayi[3]+$test_arrayi[4]+$test_arrayi[2])/3;
$age_3_cohortsi[3] = ($test_arrayi[3]+$test_arrayi[4]+$test_arrayi[5])/3;
$age_2_cohortsi[0] = ($test_arrayi[0]+$test_arrayi[1])/2;
$age_2_cohortsi[1] = ($test_arrayi[2]+$test_arrayi[1])/2;
$age_2_cohortsi[2] = ($test_arrayi[2]+$test_arrayi[3])/2;
$age_2_cohortsi[3] = ($test_arrayi[4]+$test_arrayi[3])/2;
$age_2_cohortsi[4] = ($test_arrayi[4]+$test_arrayi[5])/2;

$max_age_4_cohortsi = max($age_4_cohortsi[0],$age_4_cohortsi[1],$age_4_cohortsi[2],$age_4_cohortsi[3]);
$max_age_3_cohortsi = max($age_3_cohortsi[0],$age_3_cohortsi[1],$age_3_cohortsi[2],$age_3_cohortsi[3]);
$max_age_2_cohortsi = max($age_2_cohortsi[0],$age_2_cohortsi[1],$age_2_cohortsi[2],$age_2_cohortsi[3],$age_2_cohortsi[4]);

// select cohort to use - preference is placed on 3 age bands

if($max_age_3_cohortsi > 110) $age_cohort_to_use[] = 3;
if($max_age_2_cohortsi > 120) $age_cohort_to_use[] = 2;
if($max_age_4_cohortsi > 105) $age_cohort_to_use[] = 4;
if($max_age_3_cohortsi > 105) $age_cohort_to_use[] = 3;
if($max_age_2_cohortsi > 110) $age_cohort_to_use[] = 2;
if($max_age_4_cohortsi > 104) $age_cohort_to_use[] = 4;
$age_cohort_to_use[] = 0;


echo "<br />4: " . print_r($age_4_cohorts);
echo "<br />3: " . print_r($age_3_cohorts);
echo "<br />2: " . print_r($age_2_cohorts);
echo "<br />4: " . print_r($age_4_cohortsi);
echo "<br />3: " . print_r($age_3_cohortsi);
echo "<br />2: " . print_r($age_2_cohortsi);
echo "<br />to use: " . print_r($age_cohort_to_use);
*/




		
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
    </script>
  <?php 
  // ethnic chart
  ?>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
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

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data2, options2);
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

    <?php 
	if($client_id == 10) {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_" . $store_number . ".KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
	
 if($store_number == "1588-5") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/1588-5.KML" ;
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
}  
	
	if($store_number == 1578 || $store_number == 1349) {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_" . $store_number . ".KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}

// toronto star	
if($store_number == "South Central Ontario") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/South_Central_Ont.KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
	
	// toronto star	
if($store_number == "41050") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/41050.KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
		// toronto star	
if($store_number == "Greater Tornoto Area") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Outside.KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
	//styrl
	if($store_uid == 415 ) {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_L4E2W1.KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
	
	// toronto star	
if($store_number == "Metro Toronto") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Toronto_Area.KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
	
		// toronto star	
if($store_number == "Greater Toronto Area") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Greater_Toronto_Area.KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
	
  ?>



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
}
    </script>
</head>
<body  onLoad='initialize();'>

<div class="container row col-md-12 no-print align="center"">  
		<div class="col-md-4 align="center""> 
      		<a class="btn btn-success" onClick="HOMEsubmit();">
  			<i class="fa fa-arrow-left fa-lg"></i>&nbsp;&nbsp;Dashboard</a>
       	</div>  
        
        <div class="col-md-4 align="center""> 
      		<a class="btn btn-success" onClick="CALCREPORTsubmit2(<?php echo $report_uid * 3571; ?>);">
  			<i class="fa fa-bullseye fa-lg"></i>&nbsp;&nbsp;ROI calculator</a>
       	</div> 
        
  <div class="col-md-4 align="center"">     		     	  
            
    <div class="dropdown">
                  <button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    View details&nbsp;&nbsp;<span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu " aria-labelledby="dLabel">
                    <li><a onClick="TADETAILsubmit2(<?php echo $store_uid ; ?>);">View all details</a></li>
                    <li><a onClick="detail_show2(<?php echo $store_uid ; ?>);">Demographics</a></li>
                    <li><a onClick="detail_show4(<?php echo $store_uid ; ?>);">Spending</a></li>
                    <li><a onClick="detail_show5(<?php echo $store_uid ; ?>);">Media</a></li>
                    <li><a onClick="detail_show6(<?php echo $store_uid ; ?>);">Lifestyle</a></li>
                    <li><a onClick="detail_show7(<?php echo $store_uid ; ?>);">Automotive</a></li>
                    <li><a onClick="detail_show9(<?php echo $store_uid ; ?>);">Map</a></li>
                  </ul>
                </div>
    </div>
<input name="report_uid" type="hidden" id="report_uid" value="<?php echo $report_uid*3571; ?>">
            <input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_selected*3571; ?>">
            
            
    <input name="roi_totalhh" type="hidden" id="roi_totalhh" value="<?php echo $total_households; ?>">
    <input type="hidden" name="roi_scores" id="roi_scores" value="<?php echo $decile_score_list; ?>">
    <input type="hidden" name="roi_avgscore" id="roi_avgscore" value="<?php echo $average_score_in_area; ?>">
    <input type="hidden" name="roi_20hh" id="roi_20hh" value="<?php echo $total_households*0.2; ?>">
    <input type="hidden" name="detail_show" id="detail_show" value="0">
</div>
  
<div class="container row col-md-12 print_pages align="center""> 

    <table width="900px" height="584" border="0" cellspacing="0" cellpadding="0" bgcolor="#CCFFCC">
  <tr>
    <td width="900" colspan="2" align="center" valign="top"><span class="blue22"><strong>MARKET AREA INSIGHTS</strong></span><br>
      <span class="black18"><br>
      </span><span class="psub2">Store # <?php echo $store_number; ?>, <?php echo $store_name; ?><br>
        Prepared by: <?php echo $user_firstname; ?> <?php echo $user_lastname; ?>&nbsp;<br>
        <?php $now = new DateTime();
echo $now->format('F-Y');    
 
?>
        </span><span class="black18"><br>
      </span></td>
  </tr>
  <tr >
    <td colspan="2" align="center" valign="middle"><table width="98%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="middle"><img src="family_pics/a_mixed_w.jpg" alt="1" width="98" height="98"></td>
        <td align="center" valign="middle"><img src="family_pics/s_mixed_w.jpg" width="98" height="98" alt="5"></td>
        <td align="center" valign="middle"><img src="family_pics/c_geny_w.jpg" width="98" height="98" alt="4"></td>
        <td align="center" valign="middle"><img src="family_pics/geny_mom_baby.jpg" width="98" height="98" alt="3"></td>
        <td align="center" valign="middle"><img src="family_pics/f_mixed_w.jpg" width="98" height="98" alt="2"></td>
        <td align="center" valign="middle"><img src="image3/k_mixed.jpg" width="98" height="98" alt="16"></td>
        <td align="center" valign="middle"><img src="family_pics/c_geny_we.jpg" width="98" height="98" alt="17"></td>
        <td align="center" valign="middle"><img src="family_pics/c_mature_w.jpg" width="98" height="98" alt="17"></td>
        <td align="center" valign="middle"><img src="family_pics/f_genx_eth.jpg" width="98" height="98" alt="19"></td>
        </tr>
      <tr>
        <td width="98px" align="center" valign="middle"><span class="sblue"><img src="age_pics/s_geny_w5.jpg" width="98" height="98" alt="6"></span></td>
        <td width="98px" align="center" valign="middle"><img src="age_pics/s_genx_eth2.jpg" width="98" height="98" alt="10"></td>
        <td width="98px" align="center" valign="middle"><img src="image3/k_5_ch.jpg" width="98" height="98" alt="14"></td>
        <td width="98px" align="center" valign="middle"><img src="age_pics/s_genx_bl22.jpg" alt="9" width="98" height="98"></td>
        <td align="center" valign="middle"><img src="image3/s_boomer_w32.jpg" alt="7" width="98" height="98"></td>
        <td align="center" valign="middle"><img src="age_pics/s_genx_eth3.jpg" width="98" height="98" alt="11"></td>
        <td align="center" valign="middle"><img src="image3/s_mature_w2.jpg" width="98" height="98" alt="12"></td>
        <td align="center" valign="middle"><img src="image3/k_teen_eth4.jpg" width="98" height="98" alt="13"></td>
        <td align="center" valign="middle"><img src="age_pics/s_mature_w22.jpg" alt="8" width="98" height="98"></td>
        </tr>
      <tr>
        <td align="center" valign="middle"><img src="activities/ac_walking.jpg" width="98" height="98" alt="a1"></td>
        <td align="center" valign="middle"><img src="activities/ac_cycling.jpg" width="98" height="98" alt="a4"></td>
        <td align="center" valign="middle"><img src="activities/ac_hclub.jpg" width="98" height="98" alt="a3"></td>
        <td align="center" valign="middle"><img src="activities/ac_climb.jpg" width="98" height="98" alt="a2"></td>
        <td align="center" valign="middle"><img src="activities/ac_canoe.jpg" width="98" height="98" alt="a9"></td>
        <td align="center" valign="middle"><img src="activities/ac_swim.jpg" width="98" height="98" alt="a6"></td>
        <td align="center" valign="middle"><img src="activities/ac_yoga.jpg" width="98" height="98" alt="a7"></td>
        <td align="center" valign="middle"><img src="activities/ac_soccer.jpg" width="98" height="98" alt="a8"></td>
        <td align="center" valign="middle"><img src="activities/ac_marathon.jpg" width="98" height="98" alt="a5"></td>
        </tr>
      </table>
      </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="bottom" class="sorange16"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
  </tr>
    </table>
</div>

  
  
   <div class="pagebreak"></div>

<div class="container row col-md-12 print_pages align="center"">
<table width="900"  height="610" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="880" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
        <td width="42%" align="left"><strong class="psub2">Store  #<?php echo $store_number; ?></strong></td>
        <td width="43%" align="right"><strong class="stitle">LOCATION</strong></td>
        </tr>
      <tr>
        <td colspan="2"><h3>
          <span class="grey14">
            <input name="store_uid" type="hidden" id="store_uid" value="<?php echo $store_uid; ?>"  />
            <input name="report_uid2" type="hidden" id="report_uid2" value=""  />
            Population: <?php echo number_format($PP_TOT); ?> &#8226; Households: <?php echo number_format($mfd_hh_count); ?> &#8226; Income  $<?php echo number_format($IN_AHHp,0); ?></span></td>
        <td align="right"><span class="grey14">Homes: <?php echo number_format($mfd_home); ?> &#8226; Apartments: <?php echo number_format($mfd_apts); ?> &#8226; Farms: <?php echo number_format($mfd_farms); ?></span></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><div id="map" style="width: 850px; height: 450px"></div></td>
  </tr>
</table>
</div>


<div class="container row col-md-12 print_pages align="left"">
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="sorange20"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="42%" align="left" valign="top"><strong class="psub2">Store  #<?php echo $store_number ; ?></strong><br></td>
          <td width="43%" align="right"><strong class="stitle">DEMOGRAPHICS<br>
            </strong>
            <a class="btn btn-primary btn-sm" onClick="detail_show2(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
  			&nbsp;<strong>View Details</strong>&nbsp;</a>
</td>
        </tr>
      </table></td>
    </tr>


    <tr>
      <td width="50%" align="center" valign="top"><br>
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="200" align="center"><img src="family_pics/<?php echo $image_display_family;?>" alt="demo1" width="150px" height="150px" class="Example_E" /></td>
            <td valign="top" class="sgrey14"><p><strong><span class="pbodyemp">Primary Family Structure Cohort<br>
            </span></strong><strong><?php echo $family_top_comment[0]; ?><br>
            <br>
            </strong><span class="pbody"><?php echo $family_comment; ?></span></p></td>
          </tr>
        </table>
        <br></td>
      <td align="center" valign="top"><br>
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="200" align="center"><img src="age_pics/<?php echo $image_display_age;?>" alt="age picture" width="150px" height="150px" class="Example_E" /></td>
            <td valign="top" class="sgrey14"><p class="sgrey14"><strong><span class="pbodyemp">Primary Age Cohort<br>
            </span></strong><strong><?php echo $age_top_comment[0]; ?> <span class="pbody"><br>
              </span></strong></p>
              <span class="pbody"><?php echo $age_comment; ?></span></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td align="center"><span class="black16">Household Income</span>
        <div id="piechart_3d" style="width: 400px; height: 280px;"></div></td>
      <td align="center"><span class="black16">Ethnic Diversity</span>
        <div id="piechart_3d2" style="width: 400px; height: 280px;"></div></td>
    </tr>
  </table>
</div>


  <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="905" height="600" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="905" height="600" colspan="2"><table width="100%" height="600" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
                        <td width="42%" height="63" align="left" valign="top"><span class="sgrey14"><strong class="psub2">Store #<?php echo $store_number; ?></strong><br>
                        </span></td>
                        <td width="43%" align="right" valign="top"><strong class="stitle">SEGMENTATION<span class="sgrey14"><br>
                        <a href="segment_descriptions.php" target="_blank">View segment descriptions</a></span> </strong></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td align="center" class="black18"><strong><span class="black18"><?php echo number_format($segment_counter); ?> Vital segments were identified</span></strong><br>
                      <strong><span class="black14">These vital segments represent <?php echo number_format($vitalsegment_p); ?>% of your entire market area and <?php echo number_format($vitalsegment_c); ?>% of Canadian households (index <?php echo number_format($vitalsegment_p / $vitalsegment_c *100); ?>)</span></strong></td>
                  </tr>
                  <tr>
                    <td height="420"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                    <tr><td width="170">.</td><td width="170">.</td><td width="170">.</td><td width="170">.</td><td width="170">.</td></tr>
                      <tr>
                        <td>
						<?php

if ($segment_counter >0) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[0] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[0] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[0] . "% of market area<br>" 
. $segment_benchmark[0] . "% of Canada<br> index "
. $segment_index[0] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[0] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?>
                        </td>
                        <td><?php

if ($segment_counter >1) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[1] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[1] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[1] . "% of market area<br>" 
. $segment_benchmark[1] . "% of Canada<br> index "
. $segment_index[1] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[1] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?>
</td>
                        <td><?php

if ($segment_counter >2) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[2] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[2] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[2] . "% of market area<br>" 
. $segment_benchmark[2] . "% of Canada<br> index "
. $segment_index[2] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[2] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?></td>
                        <td><?php

if ($segment_counter >3) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[3] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[3] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[3] . "% of market area<br>" 
. $segment_benchmark[3] . "% of Canada<br> index "
. $segment_index[3] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[3] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?></td>
                        <td><?php

if ($segment_counter >4) {
echo "
<table width='95%' class='Example_E1'>
                          <tr>
                            <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
							
                              <tr>
                                <td align='center'><img src='" . $segment_picture[4] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[4] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[4] . "% of market area<br>" 
. $segment_benchmark[4] . "% of Canada<br> index "
. $segment_index[4] . "<br>
</td>
                              </tr>
							  <tr>
                                <td height ='120' >". $segment_description[4] ."
</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>";               
	
} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
    </tr>
  </table></td>
                  </tr>
                  </table>
                  <tr>
                    <td align="left" class="sgrey14">&nbsp;</td>
</tr>

  </table>
</div>

<div class="pagebreak"></div>
<div class="container row col-md-12 pprint_pages align="left"">
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td width="500" colspan="2" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="13%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="48%" align="left" valign="top" class="sgrey14"><strong class="psub2">Store #<?php echo $store_number; ?></strong><br>
          </td>
          <td width="39%" align="right" valign="top"><strong class="pheading">HOUSEHOLD SPENDING</strong><br>
<a class="btn btn-primary btn-sm" onClick="detail_show4(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
  			&nbsp;<strong>View Details</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" align="center" class="psub1">Total dollar spend per households, in the trade area, is $<?php echo number_format($hhb_consume); ?><br>
        $<?php echo number_format(abs($hhdiff_consume)); if ($hhdiff_consume > 0) echo " higher"; else echo " lower"; ?> than the Canadian average of $<?php echo number_format($hha_consume); ?></td>
    </tr>
    <tr>
      <td colspan="2" align="left"><table width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
          <td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
            <tr>
              <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td height="40" align='center' class="psub2"><strong>Essential Spending</strong></td>
                  </tr>
                <tr>
                  <td align='center' height ='50' class='sgrey14'><img src="activities/house_mid.jpg" width="200" height="200" alt="house"></td>
                  </tr>
                <tr>
                  <td height ='20'><blockquote>
                    <p class="pbody">&#8226; Housing<br>
                      &#8226; Food<br>
                      &#8226; Transportation </p>
                    </blockquote></td>
                </tr>
                <tr>
                  <td height ='75' class="pbodyemp" >&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhbcommit); ?> market area<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhacommit); ?> Canada <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiffcommit); ?> difference</td>
                </tr>
                </table></td>
              </tr>
          </table></td>
          <td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
              <tr>
                <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height="40" align='center' class="psub2"><strong>Controllable Spending</strong></td>
                    </tr>
                  <tr>
                    <td align='center' height ='50' class='sgrey14'><img src="activities/clothing1.jpg" width="200" height="200" alt="clothes"></td>
                    </tr>
                  <tr>
                    <td height ='20'><blockquote>
                      <p class="pbody">&#8226; Clothing<br>
                        &#8226; Household Expenses<br>
                        &#8226; Health Care</p>
                      </blockquote></td>
                  </tr>
                  <tr>
                    <td height ='75' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_purchases); ?> market area<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hha_purchases); ?> Canada <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiff_purchases); ?> difference</strong></td>
                  </tr>
                  </table></td>
                </tr>
            </table></td>
          <td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
              <tr>
                <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height="40" align='center' class="psub2"><strong>Discretionary Spending</strong></td>
                    </tr>
                  <tr>
                    <td align='center' height ='50' class='sgrey14'><img src="activities/activity.png" width="200" height="200" alt="activity"></td>
                    </tr>
                  <tr>
                    <td height ='20'><blockquote>
                      <p class="pbody">&#8226; Reacreation<br>
                        &#8226; Household Items<br>
                        &#8226; Gardening</p>
                    </blockquote></td>
                  </tr>
                  <tr>
                    <td height ='75' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_discretionary); ?> market area<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hha_discretionary); ?> Canada<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_discretionary - $hha_discretionary); ?> difference</strong></td>
                  </tr>
                  </table></td>
                </tr>
            </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
<span class="pbody">*trade area compard to Natinal average </span></div>


<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left"">
  <table width="100%" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="67%" align="left" valign="top"><strong class="psub2">Store #<?php echo $store_number; ?></strong></td>
          <td width="18%" align="right"><strong class="stitle">MEDIA</strong><br>
<a class="btn btn-primary btn-sm" onClick="detail_show5(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
  			&nbsp;<strong>View Details</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="4" cellpadding="4">
          <tr>
            <td width="25%" align="center" valign="top"><table width="99%" height = "420" class="Example_E1" border="0" cellspacing="0" cellpadding="3">
              <tr class="sblue">
                <td align="center" height = "35" valign="top"><strong>Online</strong></td>
              </tr>
              <tr>
                <td height="220" align="center" valign="top"><img src="image3/online.jpg" width="199" height="199" alt="online"></td>
              </tr>
              <tr>
                <td height="40" align="center" valign="middle">
<img src="green0.png" width="25" height="15" alt="green"><?php if ($binternetindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?>
</td>
              </tr>
              <tr>
                <td valign="top"><span class="sgrey14"><strong>Market Area: <?php echo number_format($binternet_high ); ?>%<br>
                  National Average: 33.6% <br>
                  Index: <?php echo number_format($binternetindex ); ?></strong></span><strong><span class="sgrey14"><br>
                    </span></strong><br>
                  <span class="sgrey12">Heavy  users (15+ hours / week)</span></td>
              </tr>

            </table></td>
            <td width="25%" align="center" valign="top"><table width="99%" height = "420" class="Example_E1" border="0" cellspacing="0" cellpadding="3">
              <tr class="sblue">
                <td align="center" height = "35"valign="top"><strong>Newspaper</strong></td>
              </tr>
              <tr>
                <td align="center" height="220" valign="top"><img src="image3/local_news.jpg" width="199" height="199" alt="news"></td>
              </tr>
              <tr>
                <td height="40" align="center" valign="middle">

<img src="green0.png" width="25" height="15" alt="green"><?php if ($bnpindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?>
</td>
              </tr>
              <tr>
                <td valign="top"><span class="sgrey14"><strong>Market Area:<?php echo number_format($bnp_high ); ?>%<br>
                  National Average: 12.4% <br>
                  Index: <?php echo number_format($bnpindex ); ?></strong></span><br>
                    <br>
                  <span class="sgrey12">Heavy  readers (4+ hours / week)</span></td>
              </tr>
 
            </table></td>
            <td width="25%" align="center" valign="top">
              <table width="98%" height = "420" class="Example_E1" border="0" cellspacing="0" cellpadding="3">
              <tr class="sblue">
                <td align="center" height = "35" valign="top"><strong>Radio</strong></td>
              </tr>
              <tr>
                <td align="center" height="220" valign="top"><img src="image3/radio.jpg" width="199" height="199" alt="radio"></td>
              </tr>
              <tr>
                <td height="40" align="center" valign="middle">
<img src="green0.png" width="25" height="15" alt="green">
<?php if ($bradioindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?></td>
              </tr>
              <tr>
                <td valign="top"><span class="sgrey14"><strong>Market Area:<?php echo number_format($bradio_high ); ?>%<br>
                  National Average: 18.7% <br>
                  Index: <?php echo number_format($bradioindex ); ?></strong></span><br>
                    <br>
                  <span class="sgrey12">Heavy  listeners (35+ hours/week)</span></td>
              </tr>
            </table></td>
            <td width="25%" align="center" valign="top"><table width="99%" height = "420" class="Example_E1" border="0" cellspacing="0" cellpadding="3">
              <tr class="sblue">
                <td align="center" height = "35" valign="top"><strong>TV</strong></td>
              </tr>
              <tr>
                <td align="center" height="220" valign="top"><img src="image3/tv.jpg" width="199" height="199" alt="tv"></td>
              </tr>
              <tr>
                <td height="40" align="center" valign="middle">

<img src="green0.png" width="25" height="15" alt="green">
<?php if ($btvindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?>
<?php if ($btvindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?>
<?php if ($btvindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?>
<?php if ($btvindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?>
<?php if ($btvindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?></td>
              </tr>
              <tr>
                <td valign="top"><span class="sgrey14"><strong>Market Area: <?php echo number_format($btv_high ); ?>%<br>
National Average: 18.6%% <br>
Index: <?php echo number_format($btvindex ); ?></strong></span><br>
<br>
<span class="sgrey12">Heavy  viewers (35+ hours / week)</span></td>
              </tr>
            </table></td>
          </tr>
        </table><span class="pbody">*trade area compard to Natinal average </span>
      </td>
    </tr>
  </table>
</div>


  
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left"">
  <table width="100%" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="61"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="60%" align="left" valign="top"><strong class="psub2">Store #<?php echo $store_number; ?></strong></td>
          <td width="25%" align="right" valign="top"><strong class="stitle">LIFESTYLE</strong><br>
<a class="btn btn-primary btn-sm" onClick="detail_show6(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
  			&nbsp;<strong>View Details</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="30" align="center" class="black18"><strong>Top 8 Lifesstyle Activities (out of 43)</strong></td>
    </tr>
    <tr>
      <td ><table width="100%" border="0" cellspacing="4" cellpadding="4">
        <tr>
          <td width="25%" height="250" ><table width="100%" class="Example_E1">
            <tr>
              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][0]; ?>" width="200" height="140" alt="rank1"></td>
              </tr>
            <tr>
              <td width="22%" class="sgrey50"><strong>1</strong></td>
              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][0]; ?></strong></span><br>
                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][0]); ?>%<br>
                Index: <?php echo number_format($sorted_leisure['index'][0]); ?></span></td>
            </tr>
          </table></td>
          <td width="25%" height="250"><table width="100%"  class="Example_E1">
            <tr>
              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][1]; ?>" width="200" height="140" alt="rank1"></td>
            </tr>
            <tr>
              <td width="22%" class="sgrey50"><strong>2</strong></td>
              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][1]; ?></strong></span><br>
                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][1]); ?>%<br>
                  Index: <?php echo number_format($sorted_leisure['index'][1]); ?></span></td>
            </tr>
          </table></td>
          <td width="25%" height="250"><table width="100%"  class="Example_E1">
            <tr>
              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][2]; ?>" width="200" height="140" alt="rank3"></td>
            </tr>
            <tr>
              <td width="22%" class="sgrey50"><strong>3</strong></td>
              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][2]; ?></strong></span><br>
                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][2]); ?>%<br>
                  Index: <?php echo number_format($sorted_leisure['index'][2]); ?></span></td>
            </tr>
          </table></td>
          <td width="25%" height="250"><table width="100%"  class="Example_E1">
            <tr>
              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][3]; ?>" width="200" height="140" alt="rank3"></td>
            </tr>
            <tr>
              <td width="22%" class="sgrey50"><strong>4</strong></td>
              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][3]; ?></strong></span><br>
                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][3]); ?>%<br>
                  Index: <?php echo number_format($sorted_leisure['index'][3]); ?></span></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td width="25%" height="250"><table width="100%"  class="Example_E1">
            <tr>
              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][4]; ?>" width="200" height="140" alt="rank3"></td>
            </tr>
            <tr>
              <td width="22%" class="sgrey50"><strong>5</strong></td>
              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][4]; ?></strong></span><br>
                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][4]); ?>%<br>
                  Index: <?php echo number_format($sorted_leisure['index'][4]); ?></span></td>
            </tr>
          </table></td>
          <td width="25%" height="250"><table width="100%"  class="Example_E1">
            <tr>
              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][5]; ?>" width="200" height="140" alt="rank3"></td>
            </tr>
            <tr>
              <td width="22%" class="sgrey50"><strong>6</strong></td>
              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][5]; ?></strong></span><br>
                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][5]); ?>%<br>
                  Index: <?php echo number_format($sorted_leisure['index'][5]); ?></span></td>
            </tr>
          </table></td>
          <td width="25%" height="250"><table width="100%"  class="Example_E1">
            <tr>
              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][6]; ?>" width="200" height="140" alt="rank3"></td>
            </tr>
            <tr>
              <td width="22%" class="sgrey50"><strong>7</strong></td>
              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][6]; ?></strong></span><br>
                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][6]); ?>%<br>
                  Index: <?php echo number_format($sorted_leisure['index'][6]); ?></span></td>
            </tr>
          </table></td>
          <td width="25%" height="250"><table width="100%"  class="Example_E1">
            <tr>
              <td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][7]; ?>" width="200" height="140" alt="rank3"></td>
            </tr>
            <tr>
              <td width="22%" class="sgrey50"><strong>8</strong></td>
              <td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][7]; ?></strong></span><br>
                <span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][7]); ?>%<br>
                  Index: <?php echo number_format($sorted_leisure['index'][7]); ?></span></td>
            </tr>
          </table></td>
        </tr>
      </table>        <p>&nbsp;</p></td>
    </tr>
  </table>
</div>