
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
					$cust_toronto[] = "['" . $PostCode .  "', " .  $temp_ethnic_lat . ", " . $temp_ethnic_lon . ", " . $temp_counter . "],";
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


 FROM a12_mfd_demo demo, a12_demo_mn mn, a12_mfd_bbm bbm, a12_mfd_sp sp, a12_mfd_sp3 sp3, amfd_pclist pclist WHERE pclist.store_uid = $store_uid and pclist.PostCode = demo.PostCode and pclist.PostCode = mn.PostCode and pclist.PostCode = bbm.PostCode and pclist.PostCode = sp.POSTCODE and pclist.PostCode = sp3.POSTCODE ";
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

				




														}				
					mysqli_free_result($result);
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

$segment_pic[0] ="family_pics/c_boomer_w";
$segment_pic[1] ="family_pics/f_boomer_w";
$segment_pic[2] ="family_pics/f_mixed_eth";
$segment_pic[3] ="image3/f_genx_w22";
$segment_pic[4] ="image3/c_genx_w3";
$segment_pic[5] ="family_pics/c_mature_w";
$segment_pic[6] ="family_pics/f_mixed_w";
$segment_pic[7] ="family_pics/c_boomer_eth";
$segment_pic[8] ="family_pics/f_genx_w";
$segment_pic[9] ="age_pics/s_mature_w22";
$segment_pic[10] ="family_pics/genx_fishing";
$segment_pic[11] ="family_pics/a_mixed";
$segment_pic[12] ="family_pics/c_70s_white";
$segment_pic[13] ="family_pics/sp_genx_ch";
$segment_pic[14] ="family_pics/c_genx_w";
$segment_pic[15] ="family_pics/k_mature_w";
$segment_pic[16] ="family_pics/geny_mom_baby";
$segment_pic[17] ="f_boomer_w";


// segmentation 
for ( $seg_vars = 0; $seg_vars <= 17; $seg_vars ++) {
		$agg_values['segmentp'][$seg_vars] = round($agg_values['segment'][$seg_vars]/ $agg_values['segment'][17]*100,1);
		$agg_valuesc['segmentp'][$seg_vars] = round($agg_valuesc['segment'][$seg_vars]/ $agg_valuesc['segment'][17]*100,1);
		
}
for ( $seg_vars = 0; $seg_vars <= 17; $seg_vars ++) {
		if($agg_valuesc['segmentp'][$seg_vars] > 0 ) $agg_values['segmenti'][$seg_vars] = round($agg_values['segmentp'][$seg_vars]/ $agg_valuesc['segmentp'][$seg_vars]*100); else $agg_values['segmenti'][$seg_vars] = 0;



			if($agg_values['segmentp'][$seg_vars] > 4.9) {
						$segment_high_name[] = $agg_values['seg_name'][$seg_vars];
						$segment_high_spercent[] = $agg_values['segmentp'][$seg_vars];
						$segment_high_selement[] = $seg_vars;
			}
}
	$segment_high_name[] = 0;
			$segment_high_spercent[] = 0;
			$segment_high_selement[] =0;
			
for ( $seg_vars = 0; $seg_vars <= 16; $seg_vars ++) {
		if($agg_values['segmenti'][$seg_vars] >99.5) {
			$agg_values['picln'][$seg_vars] = "spacer.gif";
			$agg_values['picls'][$seg_vars] = 10;	
			$agg_values['picrn'][$seg_vars] = "greenl.png";
			$agg_values['picrs'][$seg_vars] = round(2*($agg_values['segmenti'][$seg_vars] -100));
			$agg_values['picrs'][$seg_vars] = max($agg_values['picrs'][$seg_vars],10);
			$agg_values['picrs'][$seg_vars] = min($agg_values['picrs'][$seg_vars],150);
			
		}
		else {
			$agg_values['picrn'][$seg_vars] = "spacer.gif";
			$agg_values['picrs'][$seg_vars] = 10;	
			$agg_values['picln'][$seg_vars] = "red.png";
			$agg_values['picls'][$seg_vars] = round(2*(100-$agg_values['segmenti'][$seg_vars]) );
			$agg_values['picls'][$seg_vars] = max($agg_values['picls'][$seg_vars],10);
			$agg_values['picls'][$seg_vars] = min($agg_values['picls'][$seg_vars],150);	
		}
		
		
	}

	
	$agg_values['picrn'][17] = "spacer.gif";
			$agg_values['picrs'][17] = 10;	
			$agg_values['picln'][17] = "spacer.gif";
			$agg_values['picls'][17] = 10;	

// classifying segments
for ( $seg_vars = 0; $seg_vars <= 16; $seg_vars ++) {
	
if($agg_values['segmentp'][$seg_vars] > 4.9 || $agg_valuesc['segmentp'][$seg_vars]> 5 ) {
		if($agg_values['segmenti'][$seg_vars] > 120 ){
			$segment_high[] = $agg_values['seg_name'][$seg_vars];
			$segment_high_element[] = $seg_vars;
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

<div class="container row col-md-12 print_pages_cover align="center""> 
<table width="900"  height="610" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><h3>
      <strong>Store Profile #<?php echo $store_number . " - " . $store_name ; ?></strong></h3>
      <span class="grey14">
      <input name="store_uid" type="hidden" id="store_uid" value="<?php echo $store_uid; ?>"  />
      <input name="report_uid" type="hidden" id="report_uid" value=""  />

      Population: <?php echo number_format($PP_TOT); ?> &#8226; Households: <?php echo number_format($mfd_hh_count); ?> &#8226; Income  $<?php echo number_format($IN_AHHp,0); ?><br>
      (Homes: <?php echo number_format($mfd_home); ?> &#8226; Apartments: <?php echo number_format($mfd_apts); ?> &#8226; Farms: <?php echo number_format($mfd_farms); ?>)</span></td>
    <td width="226"><img src="KQUEST.png" width="226" height="100"></td>
  </tr>
  <tr>
    <td colspan="2"><div id="map" style="width: 100%; height: 440px"></div></td>
  </tr>
</table>
</div>
<div class="pagebreak"></div>
<div class="container row col-md-12  no-print align="center"">
      <div class="row">
      <table width="900" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td width="624"><h3>Target Audience Analysis<br>
<br>
</h3></td>
    <td width="256" align="right"><input name="AddStore" type="button" class="btn btn-success btn-lg" onclick= "javascript:PICKDEMOsubmit(<?php echo $store_uid; ?>)" value="Create new analysis"/></td>
  </tr>
  </table>
        <div class="col-md-12 table360">
  <table width="900" border="0" cellspacing="0" cellpadding="5">       
  <tr>
    <td colspan="2"> 
      <table class = "table table-hover  " >
        <tr>
          <th>Target Audience</th>
          <th>Date</th>
          <th>Results</th>
          <th>Use this file</th>
          <th>View</th>
          </tr>
        <?php

//$query = "SELECT * FROM amfd_reports WHERE store_uid = $store_uid ORDER BY report_uid DESC LIMIT 20";
$query = "SELECT * FROM amfd_reports WHERE store_uid = $store_uid ORDER BY report_uid DESC ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					$report_uid = $row['report_uid'] * 3571;
					  $var1_fullname = $row['var1_fullname'];
					  $report_date = $row['report_date'];
					  $report_score = $row['report_score'];
					  $Sent_MFD_yn = $row['Sent_MFD_yn'];
echo "<td>" . $var1_fullname . "&nbsp;</td>";
echo "<td>" . $report_date . "&nbsp;</td>";

  echo "<td align='left'><a class='btn btn-default' onclick='PROFILEREPORTsubmit(" . $report_uid . ");'><i class='fa fa-user pull-left'></i>Results</a>";
echo "</td>";



if($Sent_MFD_yn >0) echo "<td align='left'><a class='btn btn-success'><i class='fa fa-check pull-left'></i> SENT</a>";
else 
  echo "<td align='left'><a class='btn btn-default'onclick='ORDERCSVsubmit(" . $report_uid . ");'>Send Now</a>";
echo "</td>";
  echo "<td align='left'><a class='btn btn-default' onclick='ORDERCSVsubmitview(" . $report_uid . ");'><i class='fa fa-download'></i></a>";
echo "</td>";

 
echo "</tr>";

				}				
			mysqli_free_result($result);
		}
?>
        </table>
      
      </td>
  </tr>
  </table>

</div></div></div>



<div class="container row col-md-12 print_pages align="left"">
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" class="sorange20">Demographic Summary - Entire Market Area</td>
    </tr>


    <tr>
      <td width="50%" align="center" valign="top"><br>
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="200" align="center"><img src="family_pics/<?php echo $image_display_family;?>" alt="demo1" width="150px" height="150px" class="Example_E" /></td>
            <td valign="top" class="sgrey14"><p><strong><span class="sorange16">Primary Family Structure Cohort</span></strong></p>
              <p><strong><?php echo $family_top_comment[0]; ?> <br>
              </strong></p>
              <?php echo $family_comment; ?></td>
          </tr>
        </table>
        <br></td>
      <td align="center" valign="top"><br>
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td width="200" align="center"><img src="age_pics/<?php echo $image_display_age;?>" alt="age picture" width="150px" height="150px" class="Example_E" /></td>
            <td valign="top" class="sgrey14"><p class="sgrey14"><strong><span class="sorange16">Primary Age Cohort</span></strong></p>
              <p class="sgrey14"><strong><?php echo $age_top_comment[0]; ?> <br>
              </strong></p>
              <?php echo $age_comment; ?></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><span class="sorange16">Household Income</span>
        <div id="piechart_3d" style="width: 400px; height: 300px;"></div></td>
      <td align="center"><span class="sorange16">Ethnic Diversity</span>
        <div id="piechart_3d2" style="width: 400px; height: 300px;"></div></td>
    </tr>
  </table>
</div>


<div class="pagebreak"></div>
  
<div class="container row col-md-12 print_pages align="left""> 
  <table width="901" height="610" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="901" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="68%"><span class="sorange20"><strong>Vital Segments in your Market Area</strong></span><br>
(segments that represent at least 5% of households) </td>
                    <td width="32%" align="right"><a href="segment_descriptions.php" target="_blank">View segment descriptions</a><br>
<a href="segment_descriptions.php" target="_blank">View 108 detailed sub-segment descriptions</a></td>
                  </tr>
                </table>
                  <table width="98%" border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td align="left" class="sgrey14"><table width="98%" border="0" cellspacing="0" cellpadding="1">
                      <tr>
                        <td width="50%" align="left" valign="top" class="sgrey14"><strong><br>
                            <?php 
							
							$segment_high_count = sizeof($segment_high_name) - 2; 
							$segment_high_count = min($segment_high_count, 10);

							if($segment_high_count <=6) $image_size_market = 100; else $image_size_market = 75;

							for ( $seg_vars = 0; $seg_vars <$segment_high_count; $seg_vars += 2) {
								$segment_high_element2 = $segment_high_selement[$seg_vars];
 echo "<img src='" . $segment_pic[$segment_high_element2] . ".jpg' width='" . $image_size_market . "' height='" . $image_size_market . "'>&nbsp;&nbsp;" . $segment_high_name[$seg_vars] . " (" . round($segment_high_spercent[$seg_vars],1) . "%)<br><br>";
					  } ?>
                        </strong></td>
                        <td width="50%" align="left" valign="top" class="sgrey14"><strong><br>
                             <?php 
							
							$segment_high_count = sizeof($segment_high_name) - 2; 
							$segment_high_count = min($segment_high_count, 10);
							if($segment_high_count <=6) $image_size_market = 100; else $image_size_market = 75;

							for ( $seg_vars = 1; $seg_vars <$segment_high_count; $seg_vars += 2) {
								$segment_high_element2 = $segment_high_selement[$seg_vars];
 echo "<img src='" . $segment_pic[$segment_high_element2] . ".jpg' width='" . $image_size_market . "' height='" . $image_size_market . "'>&nbsp;&nbsp;" . $segment_high_name[$seg_vars] . " (" . $segment_high_spercent[$seg_vars] . "%)<br><br>";
					  } ?>
                        </strong></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
                    <tr>
                      <td align="left" class="sgrey14">&nbsp;</td>
</tr>

  </table>
</div>

<div class="pagebreak"></div>
  
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="2"><p><span class="sorange20">Your market area - Segmentation</span><br>
           <span class="sgrey14">Distribution of all households with the market area compared to the Canadian distribution</p>
                  <table width="98%" border="0" cellspacing="0" cellpadding="1">
                    <tr>
                      <td width="30%" class="sgrey14">&nbsp;</td> 
                      <td width="13%" align="center" class="sgrey14">Market Area</td>
                      <td width="13%" align="center" class="sgrey14">Canadian average</td>
                      <td width="8%" align="center" class="sgrey14">Index</td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    
<?php                  for ( $seg_vars = 0; $seg_vars <= 16; $seg_vars ++) {
 echo"                   <tr>
                      <td class='sgrey14'>" . $agg_values['seg_name'][$seg_vars] . "</td>
                      <td align='center' class='sgrey14'>" . number_format($agg_values['segmentp'][$seg_vars],1) . "%</td>
                      <td align='center' class='sgrey14'>" . number_format($agg_valuesc['segmentp'][$seg_vars],1) . "%</td>
                      <td align='center' class='sgrey14'>" .  $agg_values['segmenti'][$seg_vars] . "</td>
                      <td align='right'><img src='" . $agg_values['picln'][$seg_vars] . "' width='" . $agg_values['picls'][$seg_vars] . "' height='20'></td>
                      <td align='left'><img src='" . $agg_values['picrn'][$seg_vars] . "' width='" . $agg_values['picrs'][$seg_vars] . "' height='20'></td>
                    </tr>";
}?>      
<tr>
                      <td class="sgrey14">Total</td>
                      <td align="center" class="sgrey14">100%</td>
                      <td align="center" class="sgrey14">100%</td>
                      <td align="center" class="sgrey14">&nbsp;</td>
                      <td align="center">&nbsp;</td>
                    </tr>       
                  </table>
                <p>&nbsp;</p></td>
              </tr>
  </table>
</div>

<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td ><table width="880px"  border="1" align="left" cellpadding="0" cellspacing="0"  class="sgrey12">
  <td colspan="4" align="center" valign="top" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td width="283" class="sorange20"><strong>Household Spending Details by Category</strong></td>
    <td align="center" valign="middle">Per Household Annually</td>
    <td align="center" valign="middle"><strong>Total Spend  in market Area</strong></td>
  </tr>
  <tr>
    <td><strong>Garden supplies and service (total)</strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2340_2370hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2340_2370); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Plants and nursery</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2340hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2340); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Fertilizers and soil</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2350hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2350); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Pesticides</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2360hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2360); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Horticultural services and snow removal</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2370hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2370); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Lawnmowers and garden equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2610hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2610); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Snowblowers</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2620hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2620); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Other lawn/snow tools and equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2630hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2630); ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td><strong>Home and workshop tools  (total)</strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2600_2602hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2600_2602); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Powertools and equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2600hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2600); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Other tools</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2602hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2602); ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td><strong>Household cleaning supplies/equipment   (total)</strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2310hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2310); ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td><strong>Kitchen, cooking and tableware</strong></td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Non-electric kitchen equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2650hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2650); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Tableware, flatware and knives</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2660hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2660); ?></td>
    </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Non-electric cleaning equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2670hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2670); ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td><strong>Household equipment (total)</strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2540_2680hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2540_2680); ?></td>
    </tr>
  <tr>
    <td>Major household appliances</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2700hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2700); ?></td>
    </tr>
  <tr>
    <td>Other maintenance and furniture and equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2710hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2710); ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td><strong>Pet expenses (total)</strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2270_2300hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2270_2300); ?></td>
    </tr>
  <tr>
    <td class="sgrey12">&nbsp;&nbsp;&nbsp;&nbsp;Pet food</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2270hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2270); ?></td>
    </tr>
  <tr>
    <td class="sgrey12">&nbsp;&nbsp;&nbsp;&nbsp;Purchase of pets</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2280hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2280); ?></td>
    </tr>
  <tr>
    <td class="sgrey12">&nbsp;&nbsp;&nbsp;&nbsp;Purchase of pet related goods</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2290hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2290); ?></td>
    </tr>
  <tr>
    <td class="sgrey12">&nbsp;&nbsp;&nbsp;&nbsp;Veterinarian and other services</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2300hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2300); ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" valign="middle">&nbsp;</td>
    <td align="right" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td><strong>Packaged Travel Tours (total)</strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D4180hh,2); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D4180); ?></td>
    </tr>
  </table></td>
  </tr>
  </table>
</div>
  
  
     <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td >
<table width="880px"  border="1" align="left" cellpadding="0" cellspacing="0" class="sgrey12">
     <tr >
       <td colspan="4" align="center" valign="top" bgcolor="#FFFFFF"></td></tr>
      <tr>
        <td width="283" class="sorange20"><strong>Household Spending Details by Category</strong></td>
        <td align="center" valign="middle">Per Household Annually</td>
        <td align="center" valign="middle"><strong>Total Spend in market Area</strong></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right" valign="middle">&nbsp;</td>
        <td align="right" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td><strong>Dwelling Maintenance (total)</strong></td>
        <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2001hh+$D2011hh,2); ?></strong></td>
        <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2001+$D2011); ?></strong></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Owned Living Quarters</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2011hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2011); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Tenants' maintenance</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2001hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2001); ?></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="147" align="right" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td><strong>Household Furnishings</strong></td>
        <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2500_2534hh,2); ?></strong></td>
        <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2500_2534); ?></strong></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Furniture</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2500hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2500); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Rugs and Mats</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2510hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2510); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Window Covering</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2520hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2520); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Mirrors and picture frames</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2534hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2534); ?></td>
       </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Lamps and lampshades</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2540hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2640); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Home security equipment</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2674hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2674); ?></td>
       </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Other household equipment</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2680hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2680); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Furniture, capeting and textiles</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2690hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2690); ?></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="147" align="right" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td><strong>Household appliances (total)</strong></td>
        <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2540_2590hh,2); ?></strong></td>
        <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2540_2590); ?></strong></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Room air conditioning, humidifiers</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2540hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2540); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Refrigerators and freezers</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2542hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2542); ?></td>
       </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Stoves and ranges</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2550hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2550); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Microwave ovens</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2552hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2552); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Gas barbeque</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2554hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2554); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Small food preparation appliances</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2560hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2560); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Washers and dryers</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2570hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2570); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Vacuum cleaners</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2580hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2580); ?></td>
       </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Portable dishwashers</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2582hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2582); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Sewing Machines</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2584hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2584); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Other electrical equipment</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2586hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2586); ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp; Attachments for major appliances</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2590hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2590); ?></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="147" align="right" valign="middle">&nbsp;</td>
        </tr>
      <tr>
        <td><strong>Other household supplies (total)</strong></td>
        <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2380hh,2); ?></strong></td>
        <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2380); ?></strong></td>
        </tr>
      </table></td>
  </tr>
  </table>
</div>
 
<div class="pagebreak"></div>
<div class="pagebreak"></div>
<div class="container row col-md-12  no-print align="center"">
      <div class="row">
      <br>
<br>
</div>
</div>


<div class="container row col-md-12 print_pages_cover align="center""> 
  <table width="900"  height="610" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center"><table width="850" height='500' border="1" bordercolorlight="#CCFFFF" border-style="dotted" cellpadding="0" cellspacing="0" class="sgrey12">

  <tr>
    <td colspan="4" align="center" class="sorange20"><strong>Avid (frequent) Shoppers<br>
        <span class="grey14">Based on percent of shoopers age 15+ that spend $500+ annually </span></strong></td>
    </tr>
  <tr>
    <td><span class="grey14"><strong>&nbsp;&nbsp;Category</strong></span></td>
    <td align="center"><strong class="grey14">Percent</strong></td>
    <td align="left" valign="middle"><span class="grey14"><strong>&nbsp;&nbsp;Index </strong></span></td>
    <td align="center" valign="middle"><span class="grey14"><strong>Index value</strong></span></td>
  </tr>
  <tr>
    <td width="171"><span class="grey10">&nbsp;&nbsp;Grocery ($250/month)</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_GRH200p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_GRH200i > 110) echo "greenl.png";  if($SP_GRH200i > 90 && $SP_GRH200i <= 110) echo "grey.png"; if($SP_GRH200i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_GRH200i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_GRH200i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Small appliances</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_AP500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_AP500i > 110) echo "greenl.png";  if($SP_AP500i > 90 & $SP_AP500i <= 110) echo "grey.png"; if($SP_AP500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_AP500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_AP500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Mens Clothing</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_MC500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_MC500i > 110) echo "greenl.png";  if($SP_MC500i > 90 & $SP_MC500i <= 110) echo "grey.png"; if($SP_MC500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_MC500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_MC500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Womens Clothing</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_WC500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_WC500i > 110) echo "greenl.png";  if($SP_WC500i > 90 & $SP_WC500i <= 110) echo "grey.png"; if($SP_WC500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_WC500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_WC500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Childrens Clothing</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_CC500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_CC500i > 110) echo "greenl.png";  if($SP_CC500i > 90 & $SP_CC500i <= 110) echo "grey.png"; if($SP_CC500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_CC500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_CC500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Bath and bedding</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_BB500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_BB500i > 110) echo "greenl.png";  if($SP_BB500i > 90 & $SP_BB500i <= 110) echo "grey.png"; if($SP_BB500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_BB500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_BB500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Books</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_BO500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_BO500i > 110) echo "greenl.png";  if($SP_BO500i > 90 & $SP_BO500i <= 110) echo "grey.png"; if($SP_BO500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_BO500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_BO500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;China/Tableware</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_CT500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_CT500i > 110) echo "greenl.png";  if($SP_CT500i > 90 & $SP_CT500i <= 110) echo "grey.png"; if($SP_CT500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_CT500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_CT500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;X-border shopping</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_CB500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_CB500i > 110) echo "greenl.png";  if($SP_CB500i > 90 & $SP_CB500i <= 110) echo "grey.png"; if($SP_CB500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_CB500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_CB500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Furniture</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_FNT500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_FNT500i > 110) echo "greenl.png";  if($SP_FNT500i > 90 & $SP_FNT500i <= 110) echo "grey.png"; if($SP_FNT500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_FNT500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_FNT500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Gardening supplies</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_GS500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_GS500i > 110) echo "greenl.png";  if($SP_GS500i > 90 & $SP_GS500i <= 110) echo "grey.png"; if($SP_GS500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_GS500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_GS500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Hair salon</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_HS500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_HS500i > 110) echo "greenl.png";  if($SP_HS500i > 90 & $SP_HS500i <= 110) echo "grey.png"; if($SP_HS500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_HS500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_HS500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Home decor</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_HD500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_HD500i > 110) echo "greenl.png";  if($SP_HD500i > 90 & $SP_HD500i <= 110) echo "grey.png"; if($SP_HD500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_HD500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_HD500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Power tools</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_PT500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_PT500i > 110) echo "greenl.png";  if($SP_PT500i > 90 & $SP_PT500i <= 110) echo "grey.png"; if($SP_PT500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_PT500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_PT500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Purchase gift cards</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_PG500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_PG500i > 110) echo "greenl.png";  if($SP_PG500i > 90 & $SP_PG500i <= 110) echo "grey.png"; if($SP_PG500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_PG500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_PG500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Mens shoes</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_MS500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_MS500i > 110) echo "greenl.png";  if($SP_MS500i > 90 & $SP_MS500i <= 110) echo "grey.png"; if($SP_MS500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_MS500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_MS500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Womens shoes</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_WS500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_WS500i > 110) echo "greenl.png";  if($SP_WS500i > 90 & $SP_WS500i <= 110) echo "grey.png"; if($SP_WS500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_WS500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_WS500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Childrens shoes</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_CS500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_CS500i > 110) echo "greenl.png";  if($SP_CS500i > 90 & $SP_CS500i <= 110) echo "grey.png"; if($SP_CS500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_CS500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_CS500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Sporting goods</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_SG500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_SG500i > 110) echo "greenl.png";  if($SP_SG500i > 90 & $SP_SG500i <= 110) echo "grey.png"; if($SP_SG500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_SG500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_SG500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Toys and games</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_TO500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_TO500i > 110) echo "greenl.png";  if($SP_TO500i > 90 & $SP_TO500i <= 110) echo "grey.png"; if($SP_TO500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_TO500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_TO500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Jewelery</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_JW500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_JW500i > 110) echo "greenl.png";  if($SP_JW500i > 90 & $SP_JW500i <= 110) echo "grey.png"; if($SP_JW500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_JW500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_JW500i); ?></span></td>
  </tr>
  <tr>
    <td><span class="grey10">&nbsp;&nbsp;Online shopping</span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_OS500p); ?>%</span></td>
    <td width="430" align="left" valign="middle"><span class="grey10">&nbsp;&nbsp;<img src="<?php if($SP_OS500i > 110) echo "greenl.png";  if($SP_OS500i > 90 & $SP_OS500i <= 110) echo "grey.png"; if($SP_OS500i <=90) echo "red.png"; ?>" width="<?php echo number_format($SP_OS500i2,0); ?>" height="12" alt="bar" /></span></td>
    <td width="135" align="center" valign="middle"><span class="grey10">&nbsp;&nbsp;<?php echo number_format($SP_OS500i); ?></span></td>
  </tr>
</table></td>
</tr>
</table>
</div>

<div class="pagebreak"></div>
<div class="pagebreak"></div>
<div class="container row col-md-12  no-print align="center"">
      <div class="row">
      <br>
<br>
</div>
</div></div>

<tr >
  <td height="20" colspan="4" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td width="100%" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="100%" height="20" colspan="3" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td height="50" colspan="4" align="center" valign="top" bgcolor="#FFFFFF"></td>
  </tr>
  <tr >
    <td height="50" colspan="4" align="right" valign="top" bgcolor="#FFFFFF"><div class="container row col-md-12 print_pages align="left"">
      <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td ><table width="760" border="1" cellpadding="1" cellspacing="0" class="sgrey12">
            <tr>
              <td width="400" class="sorange20"><strong>Demography Details</strong></td>
              <td width="125"><strong>Target Audience</strong></td>
              <td width="125"><strong>Canada</strong></td>
              <td width="84"><strong>Index</strong></td>
            </tr>
            <tr>
              <td>Age </td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Age 0-9 (% of pop.)</td>
              <td><?php echo number_format($age_kidsyp,1); ?>%</td>
              <td><?php echo number_format($age_kidsyc,1); ?>%</td>
              <td><?php echo number_format($age_kidsyi,0); ?></td>
            </tr>
            <tr>
              <td>Age 10-19 (% of pop.)</td>
              <td><?php echo number_format($age_kidsoldp,1); ?>%</td>
              <td><?php echo number_format($age_kidsoldc,1); ?>%</td>
              <td><?php echo number_format($age_kidsoldi,0); ?></td>
            </tr>
            <tr>
              <td>Age 20-29 (% adults age 20+)</td>
              <td><?php echo number_format($age_2029p,1); ?>%</td>
              <td><?php echo number_format($age_2029c,1); ?>%</td>
              <td><?php echo number_format($age_2029i,0); ?></td>
            </tr>
            <tr>
              <td>Age 30-39 (% adults age 20+)</td>
              <td><?php echo number_format($age_3039p,1); ?>%</td>
              <td><?php echo number_format($age_3039c,1); ?>%</td>
              <td><?php echo number_format($age_3039i,0); ?></td>
            </tr>
            <tr>
              <td>Age 40-49 (% adults age 20+)</td>
              <td><?php echo number_format($age_4049p,1); ?>%</td>
              <td><?php echo number_format($age_4049c,1); ?>%</td>
              <td><?php echo number_format($age_4049i,0); ?></td>
            </tr>
            <tr>
              <td>Age 50-59 (% adults age 20+)</td>
              <td><?php echo number_format($age_5059p,1); ?>%</td>
              <td><?php echo number_format($age_5059c,1); ?>%</td>
              <td><?php echo number_format($age_5059i,0); ?></td>
            </tr>
            <tr>
              <td>Age 60-69 (% adults age 20+)</td>
              <td><?php echo number_format($age_6069p,1); ?>%</td>
              <td><?php echo number_format($age_6069c,1); ?>%</td>
              <td><?php echo number_format($age_6069i,0); ?></td>
            </tr>
            <tr>
              <td>Age 70+ (% adults age 20+)</td>
              <td><?php echo number_format($age_70p,1); ?>%</td>
              <td><?php echo number_format($age_70c,1); ?>%</td>
              <td><?php echo number_format($age_70i,0); ?></td>
            </tr>
            <tr>
              <td><strong>Household Income</strong></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Modest income (&lt;$30k)</td>
              <td><?php echo number_format($inc030p,1); ?>%</td>
              <td><?php echo number_format($inc030c,1); ?>%</td>
              <td><?php echo number_format($inc030i,0); ?></td>
            </tr>
            <tr>
              <td>Middle income ($30-$70k)</td>
              <td><?php echo number_format($inc3070p,1); ?>%</td>
              <td><?php echo number_format($inc3070c,1); ?>%</td>
              <td><?php echo number_format($inc3070i,0); ?></td>
            </tr>
            <tr>
              <td>Uppper income ($70k-$100k)</td>
              <td><?php echo number_format($inc70100p,1); ?>%</td>
              <td><?php echo number_format($inc70100c,1); ?>%</td>
              <td><?php echo number_format($inc70100i,0); ?></td>
            </tr>
            <tr>
              <td>Most affuent ($100+k)</td>
              <td><?php echo number_format($inc100p,1); ?>%</td>
              <td><?php echo number_format($inc100c,1); ?>%</td>
              <td><?php echo number_format($inc100i,0); ?></td>
            </tr>
            <tr>
              <td><strong>Average household income</strong></td>
              <td>$<?php echo number_format($IN_AHHp,0); ?></td>
              <td>$<?php echo number_format($IN_AHHc,0); ?></td>
              <td><?php echo number_format($IN_AHHi,0); ?></td>
            </tr>
            <tr>
              <td><strong>Family Structure</strong></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Singles</td>
              <td><?php echo number_format($fm_singlep,1); ?>%</td>
              <td><?php echo number_format($fm_singlec,1); ?>%</td>
              <td><?php echo number_format($fm_singlei,0); ?></td>
            </tr>
            <tr>
              <td>Families </td>
              <td><?php echo number_format($familyp,1); ?>%</td>
              <td><?php echo number_format($familyc,1); ?>%</td>
              <td><?php echo number_format($familyi,0); ?></td>
            </tr>
            <tr>
              <td>Couples (no children at home)</td>
              <td><?php echo number_format($couplep,1); ?>%</td>
              <td><?php echo number_format($couplec,1); ?>%</td>
              <td><?php echo number_format($couplei,0); ?></td>
            </tr>
            <tr>
              <td>Single parent families</td>
              <td><?php echo number_format($sparentp,1); ?>%</td>
              <td><?php echo number_format($sparentc,1); ?>%</td>
              <td><?php echo number_format($sparenti,0); ?></td>
            </tr>
            <tr>
              <td><strong>Ethnic Diversity</strong></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>South Asian </td>
              <td><?php echo number_format($MN_SASIANp,1); ?>%</td>
              <td><?php echo number_format($MN_SASIANc,1); ?>%</td>
              <td><?php echo number_format($MN_SASIANi,0); ?></td>
            </tr>
            <tr>
              <td>Chinese</td>
              <td><?php echo number_format($MN_CHINESEp,1); ?>%</td>
              <td><?php echo number_format($MN_CHINESEc,1); ?>%</td>
              <td><?php echo number_format($MN_CHINESEi,0); ?></td>
            </tr>
            <tr>
              <td>Black</td>
              <td><?php echo number_format($MN_BLACKp,1); ?>%</td>
              <td><?php echo number_format($MN_BLACKc,1); ?>%</td>
              <td><?php echo number_format($MN_BLACKi,0); ?></td>
            </tr>
            <tr>
              <td>Total visible minority population</td>
              <td><?php echo number_format($MN_VISp,1); ?>%</td>
              <td><?php echo number_format($MN_VISc,1); ?>%</td>
              <td><?php echo number_format($MN_VISi,0); ?></td>
            </tr>
            <tr>
              <td height="22">Caucasian</td>
              <td><?php echo number_format($MN_WHITEp,1); ?>%</td>
              <td><?php echo number_format($MN_WHITEc,1); ?>%</td>
              <td><?php echo number_format($MN_WHITEi,0); ?></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>


</body>
</html>