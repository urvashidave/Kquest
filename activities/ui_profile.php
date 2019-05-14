
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type='text/javascript' src='https://www.google.com/jsapi'></script>

<style type="text/css">
    body {
        background-color: #FFF;
        margin: 0;
        padding: 0;
    }
    #wrapper {
        width:915px;
		height:620px;
        margin-left:auto;
        margin-right:auto;
        background-color:#666666;
    }
	#wrapper2 {
        width:915px;
		height:620px;
        margin-left:auto;
        margin-right:auto;
        background-color:#666666;
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
.sgrey50 {	font-family: Trebuchet, serif;
	font-size: 60px;
	font-weight: normal;
	color: #900;
}

.sgrey141 {font-family: Trebuchet, serif;
	font-size: 15px;
	font-weight: normal;
	color: #666666;
}
.stitle {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 40px;
	font-weight: bold;
	color: #147EA7;
}
.black141 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #333;
    font-size: 14px;
	font-weight: normal;
    padding: 0 0 9px;
}
.black18 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #333;
    font-size: 18px;
	font-weight: normal;
    padding: 0 0 9px;
}
.stitle1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 34px;
	font-weight: bold;
	color: #147EA7;
}
.black22 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #333;
    font-size: 32px;
	font-weight: normal;
    padding: 0 0 9px;
}
.blue22 { font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #147EA7;
    font-size: 32px;
	font-weight: normal;
    padding: 0 0 9px;
}
</style>
<?php 
$pc_lon = -79;
$pc_lat = 44;
if (isset($_POST["report_uid"])) {	$report_uid = $_POST["report_uid"];} else $report_uid = 0;
$report_api_key = 3571;
$report_good_yn = 0;
$report_uid = $report_uid / $report_api_key;
$store_number = "";
$var1_fullname = "";
$user_firstname = "";
$user_lastname = "";
$var1_fullname_string = "";
$store_name = "";


include "db_connect.php";

$query = "SELECT * FROM amfd_reports WHERE report_uid = $report_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
					  $user_firstname = $row['user_firstname'];
					  $user_lastname = $row['user_lastname'];
					  $store_uid = $row['store_uid'];
					  $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					  $var1_code = $row['var1_code'];
					  $var1_fullname = $row['var1_fullname'];
					  $pc_count = $row['pc_count'];
					  $report_good_yn = 1;
				}				
			mysqli_free_result($result);
		}	

$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_pc = $row['store_pc'];
				}				
			mysqli_free_result($result);
		}
$store_pc = str_replace(" ","",$store_pc);
$store_pc = strtoupper($store_pc);

// get store location lat and lon
$query = "SELECT * FROM a12_pc_geocode WHERE PostCode = '$store_pc' ";
	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				 $pc_lat = $row['pc_lat'];
				 $pc_lon = $row['pc_lon'];
			}				
		mysqli_free_result($result);
	}



$pc_name ="";
$pc_count = 0;
$query = "SELECT PostCode FROM amfd_pclist WHERE store_uid = $store_uid ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							$temp_pc = $row['PostCode'];
							$temp_pc = str_replace(" ","",$temp_pc);
							$temp_pc = strtoupper($temp_pc);

							  $pc_name .= "(" . $report_uid . ", '" . $temp_pc . "'),"; 
							  $pc_count = $pc_count +1;

						}				
					mysqli_free_result($result);
				}
		
		$pc_name = rtrim($pc_name, ",");
		//echo $pc_name . "<br />";
		mysql_connect($myServer, $myUser, $myPass) or die;
		mysql_select_db($myDB) or die;


// temp table name 
		$temp_table_name = "amfd_pcscored_temp" . $report_uid;
		mysql_query("CREATE TABLE $temp_table_name (report_uid INT, PostCode TEXT, demo_score INT  NOT NULL, bbm_score INT  NOT NULL, sp_score INT  NOT NULL, seg_score INT  NOT NULL, HH_TOT INT  NOT NULL ) ");
		mysql_query("INSERT INTO $temp_table_name (report_uid, PostCode) VALUES $pc_name ");
				
					
$vars_array = explode("|", $var1_code);
$vars_number = sizeof($vars_array);
$var1_fullname_string = ""; 
$do_demo_weight = 0;
$do_bbm_weight = 0 ;
$do_sp_weight = 0;
$do_seg_weight = 0;

$tot_score_db_string = "";
$tot_score_db_stringbbm = "";	
$tot_score_db_stringsp = "";
	
// CREATE query for total score
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
									
										  
										  if($row['bbm_db'] == "a12_mfd_demo") {
											  $tot_score_db_string = $tot_score_db_string . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting ; 
											  $do_demo_weight = 1;
										  }
										  
										  if($row['bbm_db'] == "a12_mfd_bbm")  {
										  	$tot_score_db_stringbbm = $tot_score_db_stringbbm . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting ;
											 $do_bbm_weight = 1;
										  }
										  
										  if($row['bbm_db'] == "a12_seg")  {
										  	$tot_score_db_stringbbm = $tot_score_db_stringbbm . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting ;
											 $do_seg_weight = 1;
											 $segment_array_of_selected[] = $vars_array[$i];
										  }
										  
										  
//$tot_score_db_counter = $tot_score_db_counter . $row['bbm_db'] . "." . $vars_array[$i] . "+" ; 
$var1_fullname_string = " " . $var1_fullname_string . $var_name2 . ": " . $var_name1 . ",";
										  
										  if($row['bbm_db'] == "a12_mfd_sp"){ 
											  $temp_sp_var_name = $vars_array[$i] . "p";
											  $tot_score_db_stringsp = $tot_score_db_stringsp . "+ " . $row['bbm_db'] . "." . $temp_sp_var_name . "* " . $var_weighting ; 
//$tot_score_db_counter = $tot_score_db_counter . $row['bbm_db'] . "." . $temp_sp_var_name . "+" ; 
												$do_sp_weight = 1;
										  }
								}				
							
						}mysqli_free_result($result);
		}		
		
$var1_fullname_string = rtrim($var1_fullname_string, ",");

if($do_demo_weight > 0) {	
	mysql_connect($myServer, $myUser, $myPass) or die;
				mysql_select_db($myDB) or die;
				$temp_bbm_table_name1 = "a12_mfd_demo";
						mysql_query("
				UPDATE $temp_table_name
				LEFT JOIN a12_mfd_demo ON 
				$temp_table_name.PostCode = a12_mfd_demo.PostCode
				SET $temp_table_name.demo_score = $tot_score_db_string 
				WHERE $temp_table_name.report_uid = $report_uid
				");
}

if($do_bbm_weight > 0) {	
	mysql_connect($myServer, $myUser, $myPass) or die;
				mysql_select_db($myDB) or die;
						mysql_query("
				UPDATE $temp_table_name
				LEFT JOIN a12_mfd_bbm ON 
				$temp_table_name.PostCode = a12_mfd_bbm.PostCode
				SET $temp_table_name.bbm_score = $tot_score_db_stringbbm 
				WHERE $temp_table_name.report_uid = $report_uid
				");		
}

if($do_seg_weight > 0) {

	$segment_score_value = sizeof($segment_array_of_selected) * $var_weighting * 99;
	for ( $i = 0; $i <= sizeof($segment_array_of_selected); $i ++) {
	
	//$temp_table_nameseg = "amfd_seg_temp" . $report_uid;
	//mysql_query("CREATE TABLE $temp_table_nameseg (report_uid INT, PostCode TEXT, seg_score INT  NOT NULL) ");

$query = "SELECT * FROM $temp_table_name pclist5, a12_seg seg5 WHERE pclist5.report_uid = $report_uid and seg5.PostCode = pclist5.PostCode and seg5.segment ='$segment_array_of_selected[$i]' ";		
				if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$seg_pc_list2[] = $row['PostCode'];						
}}}
mysql_query("
				UPDATE $temp_table_name
				SET $temp_table_name.seg_score = 1 
				");
				
for ( $i = 0; $i <= sizeof($seg_pc_list2); $i ++) {
		mysql_query("
				UPDATE $temp_table_name
				SET $temp_table_name.seg_score = $segment_score_value 
				WHERE $temp_table_name.PostCode = '$seg_pc_list2[$i]'
				");	
					
}
}


if($do_sp_weight > 0) {	
	mysql_connect($myServer, $myUser, $myPass) or die;
				mysql_select_db($myDB) or die;
						mysql_query("
				UPDATE $temp_table_name
				LEFT JOIN a12_mfd_sp ON 
				$temp_table_name.PostCode = a12_mfd_sp.PostCode
				SET $temp_table_name.sp_score = $tot_score_db_stringsp 
				WHERE $temp_table_name.report_uid = $report_uid
				");		
}

mysql_connect($myServer, $myUser, $myPass) or die;
				mysql_select_db($myDB) or die;
						mysql_query("
				UPDATE $temp_table_name
				LEFT JOIN a12_mfd_demo ON 
				$temp_table_name.PostCode = a12_mfd_demo.PostCode
				SET $temp_table_name.HH_TOT = a12_mfd_demo.HH_TOT 
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
									
$query = "SELECT * FROM $temp_table_name WHERE report_uid = $report_uid ORDER BY (demo_score + bbm_score + sp_score + seg_score) DESC";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
// get temo score
					$temp_total_score = $row['demo_score'] + $row['bbm_score'] + $row['sp_score'] + $row['seg_score'];
					// running total of score * households	
					$temp_decile_score = $temp_decile_score + ($temp_total_score * $row['HH_TOT']) ;
					
					// running total of householods	
					$temp_decile_hh = $temp_decile_hh + $row['HH_TOT'];
					
					// all scores 
					$aggregate_total_score = $aggregate_total_score + ($temp_total_score * $row['HH_TOT']); 
					
// get postal codes of the top 20%					
					if($decile_counter < 2) {
					$pc_name2 .= "('" . $row['PostCode'] . "'),";
					$PostCodearray[] = 	$row['PostCode'];
					}

			

// reach next decile				
				if($decile_cutoff < $temp_decile_hh) {
					$decile_score_array[] = $temp_decile_score/$temp_decile_hh;
					$decile_score_list = $decile_score_list . "|" . $temp_decile_score/$temp_decile_hh;	
					
					$decile_counter = $decile_counter + 1;
					$temp_decile_score = 0;
					$temp_decile_hh = 0;
					
					
				}
				
				}	
				
			$decile_score_array[] = $temp_decile_score/$temp_decile_hh;	
			$decile_score_list = $decile_score_list . "|" . $temp_decile_score/$temp_decile_hh;		
			mysqli_free_result($result);
		}
$average_score_in_area = $aggregate_total_score / $total_households;


// get market size variables

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

, SUM(bbm.SP_GRH200*PP15_) as SP_GRH200
, SUM(bbm.SP_AP500*PP15_) as SP_AP500
, SUM(bbm.SP_MC500*PP15_) as SP_MC500
, SUM(bbm.SP_WC500*PP15_) as SP_WC500
, SUM(bbm.SP_CC500*PP15_) as SP_CC500
, SUM(bbm.SP_BB500*PP15_) as SP_BB500
, SUM(bbm.SP_BO500*PP15_) as SP_BO500
, SUM(bbm.SP_CT500*PP15_) as SP_CT500
, SUM(bbm.SP_CB500*PP15_) as SP_CB500
, SUM(bbm.SP_FNT500*PP15_) as SP_FNT500
, SUM(bbm.SP_GS500*PP15_) as SP_GS500
, SUM(bbm.SP_HS500*PP15_) as SP_HS500
, SUM(bbm.SP_HD500*PP15_) as SP_HD500
, SUM(bbm.SP_PT500*PP15_) as SP_PT500
, SUM(bbm.SP_PG500*PP15_) as SP_PG500
, SUM(bbm.SP_MS500*PP15_) as SP_MS500
, SUM(bbm.SP_WS500*PP15_) as SP_WS500
, SUM(bbm.SP_CS500*PP15_) as SP_CS500
, SUM(bbm.SP_SG500*PP15_) as SP_SG500
, SUM(bbm.SP_TO500*PP15_) as SP_TO500
, SUM(bbm.SP_JW500*PP15_) as SP_JW500
, SUM(bbm.SP_OS500*PP15_) as SP_OS500
, SUM(bbm.PP15_) as PP15_

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
, SUM(asp3.DAIRY*demo.IN_THH) as aDAIRY
, SUM(asp3.BAKERY*demo.IN_THH) as aBAKERY
, SUM(asp3.FRUIT*demo.IN_THH) as aFRUIT
, SUM(asp3.VEG*demo.IN_THH) as aVEG
, SUM(asp3.SPICES*demo.IN_THH) as aSPICES
, SUM(asp3.SUGAR*demo.IN_THH) as aSUGAR
, SUM(asp3.COFFEE*demo.IN_THH) as aCOFFEE
, SUM(asp3.FAT*demo.IN_THH) as aFAT
, SUM(asp3.FOOD_OT*demo.IN_THH) as aFOOD_OT
, SUM(asp3.BEV_NONAL*demo.IN_THH) as aBEV_NONAL
, SUM(asp3.MEAT*demo.IN_THH) as aMEAT
, SUM(asp3.FISH*demo.IN_THH) as aFISH
, SUM(asp3.GROCERY*demo.IN_THH) as aGROCERY
, SUM(asp3.D1000_4840*demo.IN_THH) as aD1000_4840
, SUM(asp3.D1000_5230*demo.IN_THH) as aD1000_5230


 FROM a12_mfd_demo demo, a12_demo_mn mn, a12_mfd_bbm bbm, a12_mfd_sp sp, a12_mfd_sp3 sp3, a12_sp1_a asp1, a12_sp2_a asp2, a12_sp3_a asp3, $temp_table_name pclist WHERE pclist.PostCode = demo.PostCode and pclist.PostCode = mn.PostCode and pclist.PostCode = bbm.PostCode and pclist.PostCode = sp.POSTCODE and pclist.PostCode = sp3.POSTCODE and pclist.PostCode = asp1.PostCode and pclist.PostCode = asp2.PostCode and pclist.PostCode = asp3.PostCode";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
								$age_2029c = $row['age_2029'];
								$age_3039c = $row['age_3039'];
								$age_4049c = $row['age_4049'];
								$age_5059c = $row['age_5059'];
								$age_6069c = $row['age_6069'];
								$age_70c = $row['age_70'];
								$age_kidsyc = $row['age_kidsy'];
								$age_kidsoldc = $row['age_kidsold'];
								$inc030c = $row['inc030'];
								$inc3070c = $row['inc3070'];
								$inc70100c = $row['inc70100'];
								$inc100c = $row['inc100'];
								$fm_singlec = $row['fm_single'];
								$couplec = $row['couple'];
								$familyc = $row['family'];
								$sparentc = $row['sparent'];
								
								$age_2029i2c = $row['age_2029i2'];
								$age_3039i2c = $row['age_3039i2'];
								$age_4049i2c = $row['age_4049i2'];
								$age_5059i2c = $row['age_5059i2'];
								$age_6069i2c = $row['age_6069i2'];
								$age_70i2c = $row['age_70i2'];
								$age_kidsyi2c = $row['age_kidsyi2'];
								$age_kidsoldi2c = $row['age_kidsoldi2'];
								$inc030i2c = $row['inc030i2'];
								$inc3070i2c = $row['inc3070i2'];
								$inc70100i2c = $row['inc70100i2'];
								$inc100i2c = $row['inc100i2'];
								$fm_singlei2c = $row['fm_singlei2'];
								$couplei2c = $row['couplei2'];
								$familyi2c = $row['familyi2'];
								$sparenti2c = $row['sparenti2'];
								
								$IN_THHc = $row['IN_THH'];
								$age_adultsc = $row['age_adults'];
								$PP_TOTc = $row['PP_TOT'];
								$IN_AHHpc = $row['IN_AHH'];
								$MN_TOTc = $row['MN_TOT'];
								$MN_VISc = $row['MN_VIS'];
								$MN_CHINESEc = $row['MN_CHINESE'];
								$MN_SASIANc = $row['MN_SASIAN'];
								$MN_BLACKc = $row['MN_BLACK'];
								
								$SP_GRH200c = $row['SP_GRH200'];
								$SP_AP500c = $row['SP_AP500'];
								$SP_MC500c = $row['SP_MC500'];
								$SP_WC500c = $row['SP_WC500'];
								$SP_CC500c = $row['SP_CC500'];
								$SP_BB500c = $row['SP_BB500'];
								$SP_BO500c = $row['SP_BO500'];
								$SP_CT500c = $row['SP_CT500'];
								$SP_CB500c = $row['SP_CB500'];
								$SP_FNT500c = $row['SP_FNT500'];
								$SP_GS500c = $row['SP_GS500'];
								$SP_HS500c = $row['SP_HS500'];
								$SP_HD500c = $row['SP_HD500'];
								$SP_PT500c = $row['SP_PT500'];
								$SP_PG500c = $row['SP_PG500'];
								$SP_MS500c = $row['SP_MS500'];
								$SP_WS500c = $row['SP_WS500'];
								$SP_CS500c = $row['SP_CS500'];
								$SP_SG500c = $row['SP_SG500'];
								$SP_TO500c = $row['SP_TO500'];
								$SP_JW500c = $row['SP_JW500'];
								$SP_OS500c = $row['SP_OS500'];
								
								$PP15_c = $row['PP15_'];
								
$D4180c = $row['D4180'];

$D2001c = $row['D2001'];
$D2011c = $row['D2011'];
$D2270_2300c = $row['D2270_2300'];
$D2270c = $row['D2270'];
$D2280c = $row['D2280'];
$D2290c = $row['D2290'];
$D2300c = $row['D2300'];
$D2310c = $row['D2310'];
$D2340_2370c = $row['D2340_2370'];
$D2340c = $row['D2340'];
$D2350c = $row['D2350'];
$D2360c = $row['D2360'];
$D2370c = $row['D2370'];
$D2380c = $row['D2380'];
$D2500_2534c = $row['D2500_2534'];
$D2500c = $row['D2500'];
$D2510c = $row['D2510'];
$D2520c = $row['D2520'];
$D2534c = $row['D2534'];


$D2540_2680c = $row['D2540_2680'];
$D2540_2590c = $row['D2540_2590'];
$D2540c = $row['D2540'];
$D2542c = $row['D2542'];
$D2550c = $row['D2550'];
$D2552c = $row['D2552'];
$D2554c = $row['D2554'];
$D2560c = $row['D2560'];
$D2570c = $row['D2570'];
$D2580c = $row['D2580'];
$D2582c = $row['D2582'];
$D2584c = $row['D2584'];
$D2586c = $row['D2586'];
$D2590c = $row['D2590'];
$D2600_2602c = $row['D2600_2602'];
$D2600c = $row['D2600'];
$D2602c = $row['D2602'];
$D2610c = $row['D2610'];
$D2620c = $row['D2620'];
$D2630c = $row['D2630'];
$D2640c = $row['D2640'];
$D2650c = $row['D2650'];
$D2660c = $row['D2660'];
$D2670c = $row['D2670'];
$D2674c = $row['D2674'];
$D2680c = $row['D2680'];
$D2690c = $row['D2690'];
$D2700c = $row['D2700'];
$D2710c = $row['D2710'];

				
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
$aDAIRYc = $row['aDAIRY'];
$aBAKERYc = $row['aBAKERY'];
$aFRUITc = $row['aFRUIT'];
$aVEGc = $row['aVEG'];
$aSPICESc = $row['aSPICES'];
$aSUGARc = $row['aSUGAR'];
$aCOFFEEc = $row['aCOFFEE'];
$aFATc = $row['aFAT'];
$aFOOD_OTc = $row['aFOOD_OT'];
$aBEV_NONALc = $row['aBEV_NONAL'];
$aMEATc = $row['aMEAT'];
$aFISHc = $row['aFISH'];
$aGROCERYc = $row['aGROCERY'];




														}				
					mysqli_free_result($result);
				}


$query = "SELECT SUM(seg.hh_tot) as hh_tot, seg.niche, seg.PostCode, pc.PostCode  FROM a12_seg seg ,  $temp_table_name pc where seg.PostCode = pc.PostCode group by niche  ";

 if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$seg_niche_valuec[] = $row['hh_tot']; 
						$seg_niche_namec[] = $row['niche'];
					}				
				mysqli_free_result($result);
			}
		
$query = "SELECT SUM(seg.hh_tot) as hh_tot, seg.segment, seg.PostCode, pc.PostCode  FROM a12_seg seg ,  $temp_table_name pc where seg.PostCode = pc.PostCode group by segment  ";

 if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$seg_segment_valuec[] = $row['hh_tot']; 
						$seg_segment_namec[] = $row['segment'];
					}				
				mysqli_free_result($result);
			}		

for ( $seg_vars = 0; $seg_vars <= 108; $seg_vars ++) {
		$agg_valuesc['niche'][$seg_vars] = 0;
	}
	$niche_records = 0;
	for ( $niche_count = 0; $niche_count <sizeof($seg_niche_valuec); $niche_count ++) {
	
		if($seg_niche_namec[$niche_count] == 'A1') $agg_valuesc['niche'][0] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'A2') $agg_valuesc['niche'][1] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'A3') $agg_valuesc['niche'][2] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'A4') $agg_valuesc['niche'][3] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'B5') $agg_valuesc['niche'][4] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'B6') $agg_valuesc['niche'][5] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'B7') $agg_valuesc['niche'][6] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'B8') $agg_valuesc['niche'][7] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'B9') $agg_valuesc['niche'][8] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'B10') $agg_valuesc['niche'][9] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'C11') $agg_valuesc['niche'][10] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'C12') $agg_valuesc['niche'][11] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'C13') $agg_valuesc['niche'][12] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'C14') $agg_valuesc['niche'][13] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'C15') $agg_valuesc['niche'][14] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'D16') $agg_valuesc['niche'][15] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'D17') $agg_valuesc['niche'][16] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'D18') $agg_valuesc['niche'][17] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'D19') $agg_valuesc['niche'][18] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'D20') $agg_valuesc['niche'][19] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'D21') $agg_valuesc['niche'][20] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E22') $agg_valuesc['niche'][21] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E23') $agg_valuesc['niche'][22] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E24') $agg_valuesc['niche'][23] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E25') $agg_valuesc['niche'][24] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E26') $agg_valuesc['niche'][25] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E27') $agg_valuesc['niche'][26] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E28') $agg_valuesc['niche'][27] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E29') $agg_valuesc['niche'][28] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'E30') $agg_valuesc['niche'][29] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'F31') $agg_valuesc['niche'][30] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'F32') $agg_valuesc['niche'][31] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'F33') $agg_valuesc['niche'][32] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'F34') $agg_valuesc['niche'][33] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'F35') $agg_valuesc['niche'][34] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'F36') $agg_valuesc['niche'][35] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'F37') $agg_valuesc['niche'][36] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'F38') $agg_valuesc['niche'][37] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G39') $agg_valuesc['niche'][38] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G40') $agg_valuesc['niche'][39] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G41') $agg_valuesc['niche'][40] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G42') $agg_valuesc['niche'][41] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G43') $agg_valuesc['niche'][42] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G44') $agg_valuesc['niche'][43] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G45') $agg_valuesc['niche'][44] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G46') $agg_valuesc['niche'][45] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G47') $agg_valuesc['niche'][46] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G48') $agg_valuesc['niche'][47] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'G49') $agg_valuesc['niche'][48] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'H50') $agg_valuesc['niche'][49] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'H51') $agg_valuesc['niche'][50] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'H52') $agg_valuesc['niche'][51] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'I53') $agg_valuesc['niche'][52] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'I54') $agg_valuesc['niche'][53] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'I55') $agg_valuesc['niche'][54] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'I56') $agg_valuesc['niche'][55] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'I57') $agg_valuesc['niche'][56] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'I58') $agg_valuesc['niche'][57] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'I59') $agg_valuesc['niche'][58] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'J60') $agg_valuesc['niche'][59] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'J61') $agg_valuesc['niche'][60] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'K62') $agg_valuesc['niche'][61] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L63') $agg_valuesc['niche'][62] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L64') $agg_valuesc['niche'][63] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L65') $agg_valuesc['niche'][64] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L66') $agg_valuesc['niche'][65] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L67') $agg_valuesc['niche'][66] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L68') $agg_valuesc['niche'][67] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L69') $agg_valuesc['niche'][68] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L70') $agg_valuesc['niche'][69] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L71') $agg_valuesc['niche'][70] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L72') $agg_valuesc['niche'][71] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L73') $agg_valuesc['niche'][72] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L74') $agg_valuesc['niche'][73] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'L75') $agg_valuesc['niche'][74] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M76') $agg_valuesc['niche'][75] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M77') $agg_valuesc['niche'][76] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M78') $agg_valuesc['niche'][77] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M79') $agg_valuesc['niche'][78] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M80') $agg_valuesc['niche'][79] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M81') $agg_valuesc['niche'][80] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M82') $agg_valuesc['niche'][81] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M83') $agg_valuesc['niche'][82] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'M84') $agg_valuesc['niche'][83] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'N85') $agg_valuesc['niche'][84] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'N86') $agg_valuesc['niche'][85] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'N87') $agg_valuesc['niche'][86] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'N88') $agg_valuesc['niche'][87] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'N89') $agg_valuesc['niche'][88] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'O90') $agg_valuesc['niche'][89] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'O91') $agg_valuesc['niche'][90] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'O92') $agg_valuesc['niche'][91] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'O93') $agg_valuesc['niche'][92] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'O94') $agg_valuesc['niche'][93] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'O95') $agg_valuesc['niche'][94] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'O96') $agg_valuesc['niche'][95] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'P97') $agg_valuesc['niche'][96] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'P98') $agg_valuesc['niche'][97] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'P99') $agg_valuesc['niche'][98] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'P100') $agg_valuesc['niche'][99] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q101') $agg_valuesc['niche'][100] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q102') $agg_valuesc['niche'][101] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q103') $agg_valuesc['niche'][102] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q104') $agg_valuesc['niche'][103] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q105') $agg_valuesc['niche'][104] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q106') $agg_valuesc['niche'][105] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q107') $agg_valuesc['niche'][106] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q108') $agg_valuesc['niche'][107] = $seg_niche_valuec[$niche_count];
		if($seg_niche_namec[$niche_count] == 'Q109') $agg_valuesc['niche'][108] = $seg_niche_valuec[$niche_count];
		$niche_records = $niche_records + $seg_niche_valuec[$niche_count];
	}					
		$agg_valuesc['niche'][109] = $niche_records;
			



for ( $seg_vars = 0; $seg_vars <= 16; $seg_vars ++) {
		$agg_valuesc['segment'][$seg_vars] = 0;
	}
	$segment_records = 0;
	
for ( $seg_vars = 0; $seg_vars < sizeof($seg_segment_namec); $seg_vars ++) {
	if($seg_segment_namec[$seg_vars] == 'A') $agg_valuesc['segment'][0] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'B') $agg_valuesc['segment'][1] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'C') $agg_valuesc['segment'][2] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'D') $agg_valuesc['segment'][3] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'E') $agg_valuesc['segment'][4] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'F') $agg_valuesc['segment'][5] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'G') $agg_valuesc['segment'][6] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'H') $agg_valuesc['segment'][7] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'I') $agg_valuesc['segment'][8] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'J') $agg_valuesc['segment'][9] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'K') $agg_valuesc['segment'][10] = $seg_segment_valuec[$seg_vars];;
	if($seg_segment_namec[$seg_vars] == 'L') $agg_valuesc['segment'][11] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'M') $agg_valuesc['segment'][12] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'N') $agg_valuesc['segment'][13] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'O') $agg_valuesc['segment'][14] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'P') $agg_valuesc['segment'][15] = $seg_segment_valuec[$seg_vars];
	if($seg_segment_namec[$seg_vars] == 'Q') $agg_valuesc['segment'][16] = $seg_segment_valuec[$seg_vars];
	$segment_records = $segment_records + $seg_segment_valuec[$seg_vars];
}					
$agg_valuesc['segment'][17] = $segment_records;	



mysql_query("DROP TABLE $temp_table_name ");

// create the decile chart
?>
 <script type="text/javascript">
   google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
  
  
    ['Decile', 'Score', 'Average'],
['Top',<?php echo $decile_score_array[0]; ?>, <?php echo round($average_score_in_area);?>],	
['2',<?php echo $decile_score_array[1]; ?>, <?php echo round($average_score_in_area);?>],	
['3',<?php echo $decile_score_array[2]; ?>, <?php echo round($average_score_in_area);?>],	
['4',<?php echo $decile_score_array[3]; ?>, <?php echo round($average_score_in_area);?>],	
['5',<?php echo $decile_score_array[4]; ?>, <?php echo round($average_score_in_area);?>],	
['6',<?php echo $decile_score_array[5]; ?>, <?php echo round($average_score_in_area);?>],	
['7',<?php echo $decile_score_array[6]; ?>, <?php echo round($average_score_in_area);?>],	
['8',<?php echo $decile_score_array[7]; ?>, <?php echo round($average_score_in_area);?>],	
['9',<?php echo $decile_score_array[8]; ?>, <?php echo round($average_score_in_area);?>],	
['Bottom',<?php echo $decile_score_array[9]; ?>, <?php echo round($average_score_in_area);?>]


  ]);

  var options = {
	title : 'Targeting Score by Decile (<?php echo number_format($decile_cutoff); ?> households per decile)',
    vAxis: {title: "Score"},
    hAxis: {title: "Decile"},
    seriesType: "bars",
    series: {1: {type: "line"}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
  
</script>
<?php 
$pc_name2 = rtrim($pc_name2, ",");
		//echo $pc_name . "<br />";
		mysql_connect($myServer, $myUser, $myPass) or die;
		mysql_select_db($myDB) or die;


// temp table name 
		$temp_table_name2 = "amfd_temp2" . $report_uid;
		mysql_query("CREATE TABLE $temp_table_name2 (PostCode TEXT) ");
		
				mysql_query("INSERT INTO $temp_table_name2 (PostCode) VALUES $pc_name2 ");

// get map


$temp_counter = 0;
$cum_ethnic_lat = 0;
$cum_ethnic_lon = 0;
$PostCodearray_mapmaxsize = sizeof($PostCodearray);
$PostCodearray_mapmax = min($PostCodearray_mapmaxsize, 3000);
	
	
		
for ( $count_dwi = 0; $count_dwi < $PostCodearray_mapmax; $count_dwi ++) {	
$query = "Select pc_lat, pc_lon FROM a12_pc_geocode WHERE PostCode = '$PostCodearray[$count_dwi]' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $temp_ethnic_lat = $row['pc_lat'];
					  $temp_ethnic_lon = $row['pc_lon'];
$PostCode =$PostCodearray[$count_dwi]; 
					$cust_toronto[] = "['" . $PostCode .  "', " .  $temp_ethnic_lat . ", " . $temp_ethnic_lon . ", " . $temp_counter . "],";
					$temp_counter = $temp_counter +1;
				}				
			mysqli_free_result($result);
		}
}
$count_dwi2 = $count_dwi+1;
$cust_toronto[] = "['Blank', 0, 0, $count_dwi2]"; 	


$cen_ethnic_lat = $pc_lat ;
$cen_ethnic_lon = $pc_lon ;
$map_zoom_level = 12;	
?>
<script type="text/javascript">
function CALCREPORTsubmit2(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "ui_roi.php";
document.main_form.target = "_top";
document.main_form.submit();		
}
function DETAILsubmit2(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}
function DETAILsubmit_1(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('detail_show').value = 1;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}
function DETAILsubmit_2(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('detail_show').value = 2;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}
function DETAILsubmit_3(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('detail_show').value = 3;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}
function DETAILsubmit_4(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('detail_show').value = 4;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}
function DETAILsubmit_5(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('detail_show').value = 5;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}
function DETAILsubmit_6(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('detail_show').value = 6;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}
function DETAILsubmit_7(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('detail_show').value = 7;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}
function DETAILsubmit_8(val) {
//var page_to_open = "ui_profile.php?report_uid=" + val;
	//window.open(page_to_open, '_blank');
	
document.getElementById('report_uid').value = val;
document.getElementById('detail_show').value = 8;
document.getElementById('next_page').value = "ui_profiledetail.php";
document.main_form.target = "_blank";
document.main_form.submit();		
}



function initialize() {
	var latlng = new google.maps.LatLng(<?php echo $cen_ethnic_lat;?>, <?php echo $cen_ethnic_lon;?>);

var myOptions = {
      zoom: <?php echo $map_zoom_level; ?>,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
	  navigationControl: true,
	  scaleControl: true

    };
var map = new google.maps.Map(document.getElementById("map"), myOptions);

<?php if($user_company == "Globo Shoes") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_" . $store_number . ".KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
}  ?>

<?php if($user_company == "Jones Media") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_" . $store_number . ".KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
}  ?>

<?php if($user_company == "Glacier Media") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_" . $store_number . ".KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
}  ?>


<?php if($user_company == "Cora") {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_" . $store_number . ".KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
}  ?>

var image = 'green_pin.png';
var image2 = 'pink_pin.png';
//var image = 'green_pin.png';
//var image = 'green_circle18.png';
//var image2 = 'pink_pin.png';
var image_store = 'pin_blue.png';

var locations5 = [
	<?php for ( $count_dwi = 0; $count_dwi < sizeof($cust_toronto); $count_dwi ++) {	
	 echo $cust_toronto[$count_dwi];
	} ?>
    
    ];
	

	


var markers = [];
var markers2 = [];
var markers3 = [];

 for (i5 = 0; i5 < locations5.length; i5++) {  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations5[i5][1], locations5[i5][2]),
        map: map,
		icon: image
      });
markers.push(marker);
    } 
 	


var marker3 = new google.maps.Marker({
        position: new google.maps.LatLng(<?php echo $cen_ethnic_lat;?>, <?php echo $cen_ethnic_lon;?>),
        map: map,
		icon: image_store
      });
	markers3.push(marker3); 	  
}
</script>

<?php

// get demographics 

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

, SUM(bbm.SP_GRH200*PP15_) as SP_GRH200
, SUM(bbm.SP_AP500*PP15_) as SP_AP500
, SUM(bbm.SP_MC500*PP15_) as SP_MC500
, SUM(bbm.SP_WC500*PP15_) as SP_WC500
, SUM(bbm.SP_CC500*PP15_) as SP_CC500
, SUM(bbm.SP_BB500*PP15_) as SP_BB500
, SUM(bbm.SP_BO500*PP15_) as SP_BO500
, SUM(bbm.SP_CT500*PP15_) as SP_CT500
, SUM(bbm.SP_CB500*PP15_) as SP_CB500
, SUM(bbm.SP_FNT500*PP15_) as SP_FNT500
, SUM(bbm.SP_GS500*PP15_) as SP_GS500
, SUM(bbm.SP_HS500*PP15_) as SP_HS500
, SUM(bbm.SP_HD500*PP15_) as SP_HD500
, SUM(bbm.SP_PT500*PP15_) as SP_PT500
, SUM(bbm.SP_PG500*PP15_) as SP_PG500
, SUM(bbm.SP_MS500*PP15_) as SP_MS500
, SUM(bbm.SP_WS500*PP15_) as SP_WS500
, SUM(bbm.SP_CS500*PP15_) as SP_CS500
, SUM(bbm.SP_SG500*PP15_) as SP_SG500
, SUM(bbm.SP_TO500*PP15_) as SP_TO500
, SUM(bbm.SP_JW500*PP15_) as SP_JW500
, SUM(bbm.SP_OS500*PP15_) as SP_OS500
, SUM(bbm.PP15_) as PP15_

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
, SUM(asp3.DAIRY*demo.IN_THH) as aDAIRY
, SUM(asp3.BAKERY*demo.IN_THH) as aBAKERY
, SUM(asp3.FRUIT*demo.IN_THH) as aFRUIT
, SUM(asp3.VEG*demo.IN_THH) as aVEG
, SUM(asp3.SPICES*demo.IN_THH) as aSPICES
, SUM(asp3.SUGAR*demo.IN_THH) as aSUGAR
, SUM(asp3.COFFEE*demo.IN_THH) as aCOFFEE
, SUM(asp3.FAT*demo.IN_THH) as aFAT
, SUM(asp3.FOOD_OT*demo.IN_THH) as aFOOD_OT
, SUM(asp3.BEV_NONAL*demo.IN_THH) as aBEV_NONAL
, SUM(asp3.MEAT*demo.IN_THH) as aMEAT
, SUM(asp3.FISH*demo.IN_THH) as aFISH
, SUM(asp3.GROCERY*demo.IN_THH) as aGROCERY
, SUM(asp3.D1000_4840*demo.IN_THH) as aD1000_4840
, SUM(asp3.D1000_5230*demo.IN_THH) as aD1000_5230

 




 FROM a12_mfd_demo demo, a12_demo_mn mn, a12_mfd_bbm bbm, a12_mfd_sp sp, a12_mfd_sp3 sp3, a12_sp1_a asp1, a12_sp2_a asp2, a12_sp3_a asp3, $temp_table_name2 pclist WHERE pclist.PostCode = demo.PostCode and pclist.PostCode = mn.PostCode and pclist.PostCode = bbm.PostCode and pclist.PostCode = sp.POSTCODE and pclist.PostCode = sp3.POSTCODE and pclist.PostCode = asp1.POSTCODE and pclist.PostCode = asp2.POSTCODE and pclist.PostCode = asp3.POSTCODE ";
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

				
			
$bD1000_5230c = $row['aD1000_5230'];
$bD1000_4840c = $row['aD1000_4840'];
$bD1000_1560c = $row['aD1000_1560'];
$bD1000_1520c = $row['aD1000_1520'];
//$bD1560c = $row['aD1560'];
$bD2000_2070c = $row['aD2000_2070'];
$bD2200_2380c = $row['aD2200_2380'];
$bD2200_2230c = $row['aD2200_2230'];
$bD2240_2244c = $row['aD2240_2244'];
$bD2270_2300c = $row['aD2270_2300'];
$bD2340_2370c = $row['aD2340_2370'];
$bD2500_2730c = $row['aD2500_2730'];
$bD2540_2680c = $row['aD2540_2680'];
$bD2540c = $row['aD2540'];
$bD2542c = $row['aD2542'];
$bD2550c = $row['aD2550'];
$bD2552c = $row['aD2552'];
$bD2554c = $row['aD2554'];
$bD2560c = $row['aD2560'];
$bD2570c = $row['aD2570'];
$bD2580c = $row['aD2580'];
$bD2582c = $row['aD2582'];
$bD2584c = $row['aD2584'];
$bD2586c = $row['aD2586'];
$bD2590c = $row['aD2590'];
$bD2600_2602c = $row['aD2600_2602'];
$bD2600c = $row['aD2600'];
$bD2602c = $row['aD2602'];
$bD2610_2630c = $row['aD2610_2630'];
$bD2610c = $row['aD2610'];
$bD2620c = $row['aD2620'];
$bD2630c = $row['aD2630'];
$bD2640c = $row['aD2640'];
$bD2650c = $row['aD2650'];
$bD2660c = $row['aD2660'];
$bD2670c = $row['aD2670'];
$bD2672c = $row['aD2672'];
$bD2674c = $row['aD2674'];
$bD2680c = $row['aD2680'];
$bD2800_2975c = $row['aD2800_2975'];
$bD2800_2840c = $row['aD2800_2840'];
$bD2850_2890c = $row['aD2850_2890'];
$bD2900_2920c = $row['aD2900_2920'];
$bD2950_2975c = $row['aD2950_2975'];
$bD3000_3260c = $row['aD3000_3260'];
$bD3000_3004c = $row['aD3000_3004'];
$bD3050_3130c = $row['aD3050_3130'];
$bD3300_3384c = $row['aD3300_3384'];
$bD3500_3580c = $row['aD3500_3580'];
$bD3530_3560c = $row['aD3530_3560'];
$bD3570_3580c = $row['aD3570_3580'];
$bD3700_4190c = $row['aD3700_4190'];
$bD3700_3830c = $row['aD3700_3830'];
$bD3700c = $row['aD3700'];
$bD3710c = $row['aD3710'];
$bD3720c = $row['aD3720'];
$bD3750_3760c = $row['aD3750_3760'];
$bD3750_3752c = $row['aD3750_3752'];
$bD3770_3774c = $row['aD3770_3774'];
$bD3900_3980c = $row['aD3900_3980'];
$bD3900_3918c = $row['aD3900_3918'];
$bD3900c = $row['aD3900'];
$bD4000_4070c = $row['aD4000_4070'];
$bD4000_4040c = $row['aD4000_4040'];
$bD4100_4190c = $row['aD4100_4190'];
$bD4100_4140c = $row['aD4100_4140'];
$bD4150_4170c = $row['aD4150_4170'];
$bD4180c = $row['aD4180'];
$bD4300_4340c = $row['aD4300_4340'];
$bD4400_4470c = $row['aD4400_4470'];
$bD4400_4410c = $row['aD4400_4410'];
$bD4500_4540c = $row['aD4500_4540'];
$bD4520c = $row['aD4520'];
$bD4530c = $row['aD4530'];
$bD4800_4840c = $row['aD4800_4840'];
$bD4600_4720c = $row['aD4600_4720'];
$bD4630_4660c = $row['aD4630_4660'];
$bD4710_4720c = $row['aD4710_4720'];
$bD4900_4930c = $row['aD4900_4930'];
$bD5000_5084c = $row['aD5000_5084'];
$bD5200_5230c = $row['aD5200_5230'];
$bD5220_5230c = $row['aD5220_5230'];
$bDAIRYc = $row['aDAIRY'];
$bBAKERYc = $row['aBAKERY'];
$bFRUITc = $row['aFRUIT'];
$bVEGc = $row['aVEG'];
$bSPICESc = $row['aSPICES'];
$bSUGARc = $row['aSUGAR'];
$bCOFFEEc = $row['aCOFFEE'];
$bFATc = $row['aFAT'];
$bFOOD_OTc = $row['aFOOD_OT'];
$bBEV_NONALc = $row['aBEV_NONAL'];
$bMEATc = $row['aMEAT'];
$bFISHc = $row['aFISH'];
$bGROCERYc = $row['aGROCERY'];

$bLS_ADVSP = $row['LS_ADVSP'];



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

  
FROM mmedia_ta media, a_bbm_ls2 leis, $temp_table_name2 pclist WHERE pclist.PostCode = media.PostCode and pclist.PostCode = leis.PostCode ";
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


$query = "SELECT SUM(seg.hh_tot) as hh_tot, seg.niche, seg.PostCode, pc.PostCode  FROM a12_seg seg ,  $temp_table_name2 pc where seg.PostCode = pc.PostCode group by niche  ";

 if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$seg_niche_value[] = $row['hh_tot']; 
						$seg_niche_name[] = $row['niche'];
					}				
				mysqli_free_result($result);
			}
			
$query = "SELECT SUM(seg.hh_tot) as hh_tot, seg.segment, seg.PostCode, pc.PostCode  FROM a12_seg seg ,  $temp_table_name2 pc where seg.PostCode = pc.PostCode group by segment  ";

 if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$seg_segment_value[] = $row['hh_tot']; 
						$seg_segment_name[] = $row['segment'];
					}				
				mysqli_free_result($result);
			}			
	
	for ( $seg_vars = 0; $seg_vars <= 108; $seg_vars ++) {
		$agg_values['niche'][$seg_vars] = 0;
	}
	$niche_records = 0;
	for ( $niche_count = 0; $niche_count <sizeof($seg_niche_value); $niche_count ++) {
	
		if($seg_niche_name[$niche_count] == 'A1') $agg_values['niche'][0] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'A2') $agg_values['niche'][1] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'A3') $agg_values['niche'][2] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'A4') $agg_values['niche'][3] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'B5') $agg_values['niche'][4] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'B6') $agg_values['niche'][5] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'B7') $agg_values['niche'][6] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'B8') $agg_values['niche'][7] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'B9') $agg_values['niche'][8] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'B10') $agg_values['niche'][9] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'C11') $agg_values['niche'][10] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'C12') $agg_values['niche'][11] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'C13') $agg_values['niche'][12] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'C14') $agg_values['niche'][13] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'C15') $agg_values['niche'][14] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'D16') $agg_values['niche'][15] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'D17') $agg_values['niche'][16] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'D18') $agg_values['niche'][17] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'D19') $agg_values['niche'][18] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'D20') $agg_values['niche'][19] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'D21') $agg_values['niche'][20] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E22') $agg_values['niche'][21] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E23') $agg_values['niche'][22] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E24') $agg_values['niche'][23] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E25') $agg_values['niche'][24] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E26') $agg_values['niche'][25] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E27') $agg_values['niche'][26] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E28') $agg_values['niche'][27] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E29') $agg_values['niche'][28] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'E30') $agg_values['niche'][29] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'F31') $agg_values['niche'][30] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'F32') $agg_values['niche'][31] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'F33') $agg_values['niche'][32] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'F34') $agg_values['niche'][33] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'F35') $agg_values['niche'][34] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'F36') $agg_values['niche'][35] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'F37') $agg_values['niche'][36] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'F38') $agg_values['niche'][37] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G39') $agg_values['niche'][38] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G40') $agg_values['niche'][39] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G41') $agg_values['niche'][40] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G42') $agg_values['niche'][41] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G43') $agg_values['niche'][42] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G44') $agg_values['niche'][43] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G45') $agg_values['niche'][44] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G46') $agg_values['niche'][45] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G47') $agg_values['niche'][46] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G48') $agg_values['niche'][47] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'G49') $agg_values['niche'][48] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'H50') $agg_values['niche'][49] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'H51') $agg_values['niche'][50] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'H52') $agg_values['niche'][51] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'I53') $agg_values['niche'][52] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'I54') $agg_values['niche'][53] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'I55') $agg_values['niche'][54] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'I56') $agg_values['niche'][55] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'I57') $agg_values['niche'][56] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'I58') $agg_values['niche'][57] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'I59') $agg_values['niche'][58] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'J60') $agg_values['niche'][59] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'J61') $agg_values['niche'][60] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'K62') $agg_values['niche'][61] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L63') $agg_values['niche'][62] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L64') $agg_values['niche'][63] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L65') $agg_values['niche'][64] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L66') $agg_values['niche'][65] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L67') $agg_values['niche'][66] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L68') $agg_values['niche'][67] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L69') $agg_values['niche'][68] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L70') $agg_values['niche'][69] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L71') $agg_values['niche'][70] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L72') $agg_values['niche'][71] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L73') $agg_values['niche'][72] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L74') $agg_values['niche'][73] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'L75') $agg_values['niche'][74] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M76') $agg_values['niche'][75] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M77') $agg_values['niche'][76] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M78') $agg_values['niche'][77] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M79') $agg_values['niche'][78] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M80') $agg_values['niche'][79] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M81') $agg_values['niche'][80] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M82') $agg_values['niche'][81] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M83') $agg_values['niche'][82] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'M84') $agg_values['niche'][83] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'N85') $agg_values['niche'][84] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'N86') $agg_values['niche'][85] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'N87') $agg_values['niche'][86] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'N88') $agg_values['niche'][87] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'N89') $agg_values['niche'][88] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'O90') $agg_values['niche'][89] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'O91') $agg_values['niche'][90] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'O92') $agg_values['niche'][91] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'O93') $agg_values['niche'][92] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'O94') $agg_values['niche'][93] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'O95') $agg_values['niche'][94] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'O96') $agg_values['niche'][95] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'P97') $agg_values['niche'][96] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'P98') $agg_values['niche'][97] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'P99') $agg_values['niche'][98] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'P100') $agg_values['niche'][99] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q101') $agg_values['niche'][100] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q102') $agg_values['niche'][101] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q103') $agg_values['niche'][102] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q104') $agg_values['niche'][103] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q105') $agg_values['niche'][104] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q106') $agg_values['niche'][105] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q107') $agg_values['niche'][106] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q108') $agg_values['niche'][107] = $seg_niche_value[$niche_count];
		if($seg_niche_name[$niche_count] == 'Q109') $agg_values['niche'][108] = $seg_niche_value[$niche_count];
		$niche_records = $niche_records + $seg_niche_value[$niche_count];
	}					
		$agg_values['niche'][109] = $niche_records;
	$demo_final_values_niche = implode("|", $agg_values['niche']);


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
}

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
 
 	
	$agg_values['picrn'][17] = "spacer.gif";
			$agg_values['picrs'][17] = 10;	
			$agg_values['picln'][17] = "spacer.gif";
			$agg_values['picls'][17] = 10;	

// classifying segments
$segment_counter = 0;
$vitalsegment_p = 0;
$vitalsegment_c = 0;



for ( $seg_vars = 0; $seg_vars <= 16; $seg_vars ++) {
	
if($agg_values['segmentp'][$seg_vars] > 5 || $agg_valuesc['segmentp'][$seg_vars]> 5 ) {
		if($agg_values['segmenti'][$seg_vars] > 120 ){
			$segment_high[] = $agg_values['seg_name'][$seg_vars];
			$segment_high_element[] = $seg_vars;
			$segment_percent[] = $agg_values['segmentp'][$seg_vars];
			$segment_benchmark[] = $agg_valuesc['segmentp'][$seg_vars];
			$segment_index[] = $agg_values['segmenti'][$seg_vars];
			$segment_description[] = $segment_desc[$seg_vars];
			$segment_counter = $segment_counter + 1;
			$vitalsegment_p = $vitalsegment_p + $agg_values['segmentp'][$seg_vars];
			$vitalsegment_c = $vitalsegment_c + $agg_valuesc['segmentp'][$seg_vars];
			$segment_display[] = $segment_pic[$seg_vars];
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
	
	
	
// segmentation  - niche
for ( $seg_vars = 0; $seg_vars <= 107; $seg_vars ++) {
		$agg_values['nichep'][$seg_vars] = round($agg_values['niche'][$seg_vars]/ $agg_values['niche'][109]*100,1);
		$agg_valuesc['nichep'][$seg_vars] = round($agg_valuesc['niche'][$seg_vars]/ $agg_valuesc['niche'][109]*100,1);
}
for ( $seg_vars = 0; $seg_vars <= 107; $seg_vars ++) {
		if($agg_valuesc['nichep'][$seg_vars] > 0 ) $agg_values['nichei'][$seg_vars] = round($agg_values['nichep'][$seg_vars]/ $agg_valuesc['nichep'][$seg_vars]*100); else $agg_values['nichei'][$seg_vars] = 0;
}

for ( $seg_vars = 0; $seg_vars <= 107; $seg_vars ++) {
		if($agg_values['nichei'][$seg_vars] >99.5) {
			$agg_values['npicln'][$seg_vars] = "spacer.gif";
			$agg_values['npicls'][$seg_vars] = 10;	
			$agg_values['npicrn'][$seg_vars] = "greenl.png";
			$agg_values['npicrs'][$seg_vars] = round(($agg_values['nichei'][$seg_vars] -100));
			$agg_values['npicrs'][$seg_vars] = max($agg_values['npicrs'][$seg_vars],10);
			$agg_values['npicrs'][$seg_vars] = min($agg_values['npicrs'][$seg_vars],150);
			
		}
		else {
			$agg_values['npicrn'][$seg_vars] = "spacer.gif";
			$agg_values['npicrs'][$seg_vars] = 10;	
			$agg_values['npicln'][$seg_vars] = "red.png";
			$agg_values['npicls'][$seg_vars] = round((100-$agg_values['nichei'][$seg_vars]) );
			$agg_values['npicls'][$seg_vars] = max($agg_values['npicls'][$seg_vars],10);
			$agg_values['npicls'][$seg_vars] = min($agg_values['npicls'][$seg_vars],150);	
		}
		
		
	}
$niche_name[] = "A1";
$niche_name[] = "A2";
$niche_name[] = "A3";
$niche_name[] = "A4";
$niche_name[] = "B5";
$niche_name[] = "B6";
$niche_name[] = "B7";
$niche_name[] = "B8";
$niche_name[] = "B9";
$niche_name[] = "B10";
$niche_name[] = "C11";
$niche_name[] = "C12";
$niche_name[] = "C13";
$niche_name[] = "C14";
$niche_name[] = "C15";
$niche_name[] = "D16";
$niche_name[] = "D17";
$niche_name[] = "D18";
$niche_name[] = "D19";
$niche_name[] = "D20";
$niche_name[] = "D21";
$niche_name[] = "E22";
$niche_name[] = "E23";
$niche_name[] = "E24";
$niche_name[] = "E25";
$niche_name[] = "E26";
$niche_name[] = "E27";
$niche_name[] = "E28";
$niche_name[] = "E29";
$niche_name[] = "E30";
$niche_name[] = "F31";
$niche_name[] = "F32";
$niche_name[] = "F33";
$niche_name[] = "F34";
$niche_name[] = "F35";
$niche_name[] = "F36";
$niche_name[] = "F37";
$niche_name[] = "F38";
$niche_name[] = "G39";
$niche_name[] = "G40";
$niche_name[] = "G41";
$niche_name[] = "G42";
$niche_name[] = "G43";
$niche_name[] = "G44";
$niche_name[] = "G45";
$niche_name[] = "G46";
$niche_name[] = "G47";
$niche_name[] = "G48";
$niche_name[] = "G49";
$niche_name[] = "H50";
$niche_name[] = "H51";
$niche_name[] = "H52";
$niche_name[] = "I53";
$niche_name[] = "I54";
$niche_name[] = "I55";
$niche_name[] = "I56";
$niche_name[] = "I57";
$niche_name[] = "I58";
$niche_name[] = "I59";
$niche_name[] = "J60";
$niche_name[] = "J61";
$niche_name[] = "K62";
$niche_name[] = "L63";
$niche_name[] = "L64";
$niche_name[] = "L65";
$niche_name[] = "L66";
$niche_name[] = "L67";
$niche_name[] = "L68";
$niche_name[] = "L69";
$niche_name[] = "L70";
$niche_name[] = "L71";
$niche_name[] = "L72";
$niche_name[] = "L73";
$niche_name[] = "L74";
$niche_name[] = "L75";
$niche_name[] = "M76";
$niche_name[] = "M77";
$niche_name[] = "M78";
$niche_name[] = "M79";
$niche_name[] = "M80";
$niche_name[] = "M81";
$niche_name[] = "M82";
$niche_name[] = "M83";
$niche_name[] = "M84";
$niche_name[] = "N85";
$niche_name[] = "N86";
$niche_name[] = "N87";
$niche_name[] = "N88";
$niche_name[] = "N89";
$niche_name[] = "O90";
$niche_name[] = "O91";
$niche_name[] = "O92";
$niche_name[] = "O93";
$niche_name[] = "O94";
$niche_name[] = "O95";
$niche_name[] = "O96";
$niche_name[] = "P97";
$niche_name[] = "P98";
$niche_name[] = "P99";
$niche_name[] = "P100";
$niche_name[] = "Q101";
$niche_name[] = "Q102";
$niche_name[] = "Q103";
$niche_name[] = "Q104";
$niche_name[] = "Q105";
$niche_name[] = "Q106";
$niche_name[] = "Q107";
$niche_name[] = "Q108";
				
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
$family_comment= $family_comment . number_format($family_bandp[2]) . "% " . $family_bandn[2] . " - very high compared to the Canadian average ";
$family_counter = $family_counter +1;
$family_image[] = 2;
$family_top_comment[] = $family_bandn[2] . " (very high)";
}

// couples
if($family_bandi[1] > 113 && $family_counter <1){
$family_comment= $family_comment . number_format($family_bandp[1]) . "% " . $family_bandn[1] . " this is very high compared to the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[0]) . "% " . $family_bandn[0] . " this is very high compared to the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[2]) . "% " . $family_bandn[2] . " this is higher than the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[1]) . "% " . $family_bandn[1] . " this is higher than the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[0]) . "% " . $family_bandn[0] . " this is higher than the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[3]) . "% " . $family_bandn[3] . " this is higher than the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[2]) . "% " . $family_bandn[2] . " this is slightly higher than the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[1]) . "% " . $family_bandn[1] . " this is slightly higher than the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[0]) . "% " . $family_bandn[0] . " this is slightly higher than the Canadian average ";
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
$family_comment= $family_comment . number_format($family_bandp[3]) . "% " . $family_bandn[3] . " this is slightly higher than the Canadian average ";
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
$family_comment= "The family structure is very in composition to the Canadian averages";
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






mysql_query("DROP TABLE $temp_table_name2 ");


// market size calculations
if($SP_GRH200c > 0) $SP_GRH200d = $SP_GRH200/ $SP_GRH200c * 100; else $SP_GRH200d = 0;
if($SP_AP500c > 0) $SP_AP500d = $SP_AP500/ $SP_AP500c * 100; else $SP_AP500d = 0;
if($SP_MC500c > 0) $SP_MC500d = $SP_MC500/ $SP_MC500c * 100; else $SP_MC500d = 0;
if($SP_WC500c > 0) $SP_WC500d = $SP_WC500/ $SP_WC500c * 100; else $SP_WC500d = 0;
if($SP_CC500c > 0) $SP_CC500d = $SP_CC500/ $SP_CC500c * 100; else $SP_CC500d = 0;
if($SP_BB500c > 0) $SP_BB500d = $SP_BB500/ $SP_BB500c * 100; else $SP_BB500d = 0;
if($SP_BO500c > 0) $SP_BO500d = $SP_BO500/ $SP_BO500c * 100; else $SP_BO500d = 0;
if($SP_CT500c > 0) $SP_CT500d = $SP_CT500/ $SP_CT500c * 100; else $SP_CT500d = 0;
if($SP_CB500c > 0) $SP_CB500d = $SP_CB500/ $SP_CB500c * 100; else $SP_CB500d = 0;
if($SP_FNT500c > 0) $SP_FNT500d = $SP_FNT500/ $SP_FNT500c * 100; else $SP_FNT500d = 0;
if($SP_GS500c > 0) $SP_GS500d = $SP_GS500/ $SP_GS500c * 100; else $SP_GS500d = 0;
if($SP_HS500c > 0) $SP_HS500d = $SP_HS500/ $SP_HS500c * 100; else $SP_HS500d = 0;
if($SP_HD500c > 0) $SP_HD500d = $SP_HD500/ $SP_HD500c * 100; else $SP_HD500d = 0;
if($SP_PT500c > 0) $SP_PT500d = $SP_PT500/ $SP_PT500c * 100; else $SP_PT500d = 0;
if($SP_PG500c > 0) $SP_PG500d = $SP_PG500/ $SP_PG500c * 100; else $SP_PG500d = 0;
if($SP_MS500c > 0) $SP_MS500d = $SP_MS500/ $SP_MS500c * 100; else $SP_MS500d = 0;
if($SP_WS500c > 0) $SP_WS500d = $SP_WS500/ $SP_WS500c * 100; else $SP_WS500d = 0;
if($SP_CS500c > 0) $SP_CS500d = $SP_CS500/ $SP_CS500c * 100; else $SP_CS500d = 0;
if($SP_SG500c > 0) $SP_SG500d = $SP_SG500/ $SP_SG500c * 100; else $SP_SG500d = 0;
if($SP_TO500c > 0) $SP_TO500d = $SP_TO500/ $SP_TO500c * 100; else $SP_TO500d = 0;
if($SP_JW500c > 0) $SP_JW500d = $SP_JW500/ $SP_JW500c * 100; else $SP_JW500d = 0;
if($SP_OS500c > 0) $SP_OS500d = $SP_OS500/ $SP_OS500c * 100; else $SP_OS500d = 0;
if($PP15_c > 0) $PP15_d = $PP15_ / $PP15_c * 100; else $PP15_d = 0;


// household spend calcualtions
if($D2001c > 0) $D2001d = $D2001/ $D2001c * 100; else $D2001d = 0;
if($D2011c > 0) $D2011d = $D2011/ $D2011c * 100; else $D2011d = 0;
if($D2270_2300c > 0) $D2270_2300d = $D2270_2300/ $D2270_2300c * 100; else $D2270_2300d = 0;
if($D2270c > 0) $D2270d = $D2270/ $D2270c * 100; else $D2270d = 0;
if($D2280c > 0) $D2280d = $D2280/ $D2280c * 100; else $D2280d = 0;
if($D2290c > 0) $D2290d = $D2290/ $D2290c * 100; else $D2290d = 0;
if($D2300c > 0) $D2300d = $D2300/ $D2300c * 100; else $D2300d = 0;
if($D2310c > 0) $D2310d = $D2310/ $D2310c * 100; else $D2310d = 0;
if($D2340_2370c > 0) $D2340_2370d = $D2340_2370/ $D2340_2370c * 100; else $D2340_2370d = 0;
if($D2340c > 0) $D2340d = $D2340/ $D2340c * 100; else $D2340d = 0;
if($D2350c > 0) $D2350d = $D2350/ $D2350c * 100; else $D2350d = 0;
if($D2360c > 0) $D2360d = $D2360/ $D2360c * 100; else $D2360d = 0;
if($D2370c > 0) $D2370d = $D2370/ $D2370c * 100; else $D2370d = 0;
if($D2380c > 0) $D2380d = $D2380/ $D2380c * 100; else $D2380d = 0;
if($D2500_2534c > 0) $D2500_2534d = $D2500_2534/ $D2500_2534c * 100; else $D2500_2534d = 0;
if($D2500c > 0) $D2500d = $D2500/ $D2500c * 100; else $D2500d = 0;
if($D2510c > 0) $D2510d = $D2510/ $D2510c * 100; else $D2510d = 0;
if($D2520c > 0) $D2520d = $D2520/ $D2520c * 100; else $D2520d = 0;
if($D2534c > 0) $D2534d = $D2534/ $D2534c * 100; else $D2534d = 0;
if($D2540_2680c > 0) $D2540_2680d = $D2540_2680/ $D2540_2680c * 100; else $D2540_2680d = 0;
if($D2540_2590c > 0) $D2540_2590d = $D2540_2590/ $D2540_2590c * 100; else $D2540_2590d = 0;
if($D2540c > 0) $D2540d = $D2540/ $D2540c * 100; else $D2540d = 0;
if($D2542c > 0) $D2542d = $D2542/ $D2542c * 100; else $D2542d = 0;
if($D2550c > 0) $D2550d = $D2550/ $D2550c * 100; else $D2550d = 0;
if($D2552c > 0) $D2552d = $D2552/ $D2552c * 100; else $D2552d = 0;
if($D2554c > 0) $D2554d = $D2554/ $D2554c * 100; else $D2554d = 0;
if($D2560c > 0) $D2560d = $D2560/ $D2560c * 100; else $D2560d = 0;
if($D2570c > 0) $D2570d = $D2570/ $D2570c * 100; else $D2570d = 0;
if($D2580c > 0) $D2580d = $D2580/ $D2580c * 100; else $D2580d = 0;
if($D2582c > 0) $D2582d = $D2582/ $D2582c * 100; else $D2582d = 0;
if($D2584c > 0) $D2584d = $D2584/ $D2584c * 100; else $D2584d = 0;
if($D2586c > 0) $D2586d = $D2586/ $D2586c * 100; else $D2586d = 0;
if($D2590c > 0) $D2590d = $D2590/ $D2590c * 100; else $D2590d = 0;
if($D2600_2602c > 0) $D2600_2602d = $D2600_2602/ $D2600_2602c * 100; else $D2600_2602d = 0;
if($D2600c > 0) $D2600d = $D2600/ $D2600c * 100; else $D2600d = 0;
if($D2602c > 0) $D2602d = $D2602/ $D2602c * 100; else $D2602d = 0;
if($D2610c > 0) $D2610d = $D2610/ $D2610c * 100; else $D2610d = 0;
if($D2620c > 0) $D2620d = $D2620/ $D2620c * 100; else $D2620d = 0;
if($D2630c > 0) $D2630d = $D2630/ $D2630c * 100; else $D2630d = 0;
if($D2640c > 0) $D2640d = $D2640/ $D2640c * 100; else $D2640d = 0;
if($D2650c > 0) $D2650d = $D2650/ $D2650c * 100; else $D2650d = 0;
if($D2660c > 0) $D2660d = $D2660/ $D2660c * 100; else $D2660d = 0;
if($D2670c > 0) $D2670d = $D2670/ $D2670c * 100; else $D2670d = 0;
if($D2674c > 0) $D2674d = $D2674/ $D2674c * 100; else $D2674d = 0;
if($D2680c > 0) $D2680d = $D2680/ $D2680c * 100; else $D2680d = 0;
if($D2690c > 0) $D2690d = $D2690/ $D2690c * 100; else $D2690d = 0;
if($D2700c > 0) $D2700d = $D2700/ $D2700c * 100; else $D2700d = 0;
if($D2710c > 0) $D2710d = $D2710/ $D2710c * 100; else $D2710d = 0;
if($D4180c > 0) $D4180d = $D4180/ $D4180c * 100; else $D4180d = 0;

$decile_score_total = 0 ;

for ($i=0; $i<=9; $i++) { 
 $decile_score_total = $decile_score_total + $decile_score_array[$i];
 }
 
 $decile_score_subtotal = 0;
for ($i=0; $i<=9; $i++) { 
$decile_score_subtotal = $decile_score_subtotal + $decile_score_array[$i];
 $decile_score_array2[$i] = round($decile_score_subtotal/$decile_score_total*100);
 } 
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
$hhaDAIRYc = $aDAIRYc / $IN_THHc;
$hhaBAKERYc = $aBAKERYc / $IN_THHc;
$hhaFRUITc = $aFRUITc / $IN_THHc;
$hhaVEGc = $aVEGc / $IN_THHc;
$hhaSPICESc = $aSPICESc / $IN_THHc;
$hhaSUGARc = $aSUGARc / $IN_THHc;
$hhaCOFFEEc = $aCOFFEEc / $IN_THHc;
$hhaFATc = $aFATc / $IN_THHc;
$hhaFOOD_OTc = $aFOOD_OTc / $IN_THHc;
$hhaBEV_NONALc = $aBEV_NONALc / $IN_THHc;
$hhaMEATc = $aMEATc / $IN_THHc;
$hhaFISHc = $aFISHc / $IN_THHc;
$hhaGROCERYc = $aGROCERYc / $IN_THHc;


// target audience onle
$hhbD1000_5230c = $bD1000_5230c / $IN_THH;
$hhbD1000_4840c = $bD1000_4840c / $IN_THH;
$hhbD1000_1560c = $bD1000_1560c / $IN_THH;
$hhbD1000_1520c = $bD1000_1520c / $IN_THH;
$hhbD1560c = $bD1560c / $IN_THH;
$hhbD2000_2070c = $bD2000_2070c / $IN_THH;
$hhbD2200_2380c = $bD2200_2380c / $IN_THH;
$hhbD2200_2230c = $bD2200_2230c / $IN_THH;
$hhbD2240_2244c = $bD2240_2244c / $IN_THH;
$hhbD2270_2300c = $bD2270_2300c / $IN_THH;
$hhbD2340_2370c = $bD2340_2370c / $IN_THH;
$hhbD2500_2730c = $bD2500_2730c / $IN_THH;
$hhbD2540_2680c = $bD2540_2680c / $IN_THH;
$hhbD2540c = $bD2540c / $IN_THH;
$hhbD2542c = $bD2542c / $IN_THH;
$hhbD2550c = $bD2550c / $IN_THH;
$hhbD2552c = $bD2552c / $IN_THH;
$hhbD2554c = $bD2554c / $IN_THH;
$hhbD2560c = $bD2560c / $IN_THH;
$hhbD2570c = $bD2570c / $IN_THH;
$hhbD2580c = $bD2580c / $IN_THH;
$hhbD2582c = $bD2582c / $IN_THH;
$hhbD2584c = $bD2584c / $IN_THH;
$hhbD2586c = $bD2586c / $IN_THH;
$hhbD2590c = $bD2590c / $IN_THH;
$hhbD2600_2602c = $bD2600_2602c / $IN_THH;
$hhbD2600c = $bD2600c / $IN_THH;
$hhbD2602c = $bD2602c / $IN_THH;
$hhbD2610_2630c = $bD2610_2630c / $IN_THH;
$hhbD2610c = $bD2610c / $IN_THH;
$hhbD2620c = $bD2620c / $IN_THH;
$hhbD2630c = $bD2630c / $IN_THH;
$hhbD2640c = $bD2640c / $IN_THH;
$hhbD2650c = $bD2650c / $IN_THH;
$hhbD2660c = $bD2660c / $IN_THH;
$hhbD2670c = $bD2670c / $IN_THH;
$hhbD2672c = $bD2672c / $IN_THH;
$hhbD2674c = $bD2674c / $IN_THH;
$hhbD2680c = $bD2680c / $IN_THH;
$hhbD2800_2975c = $bD2800_2975c / $IN_THH;
$hhbD2800_2840c = $bD2800_2840c / $IN_THH;
$hhbD2850_2890c = $bD2850_2890c / $IN_THH;
$hhbD2900_2920c = $bD2900_2920c / $IN_THH;
$hhbD2950_2975c = $bD2950_2975c / $IN_THH;
$hhbD3000_3260c = $bD3000_3260c / $IN_THH;
$hhbD3000_3130c = $bD3000_3130c / $IN_THH;
$hhbD3000_3004c = $bD3000_3004c / $IN_THH;
$hhbD3050_3130c = $bD3050_3130c / $IN_THH;
$hhbD3300_3384c = $bD3300_3384c / $IN_THH;
$hhbD3500_3580c = $bD3500_3580c / $IN_THH;
$hhbD3530_3560c = $bD3530_3560c / $IN_THH;
$hhbD3570_3580c = $bD3570_3580c / $IN_THH;
$hhbD3700_4190c = $bD3700_4190c / $IN_THH;
$hhbD3700_3830c = $bD3700_3830c / $IN_THH;
$hhbD3700c = $bD3700c / $IN_THH;
$hhbD3710c = $bD3710c / $IN_THH;
$hhbD3720c = $bD3720c / $IN_THH;
$hhbD3750_3760c = $bD3750_3760c / $IN_THH;
$hhbD3750_3752c = $bD3750_3752c / $IN_THH;
$hhbD3770_3774c = $bD3770_3774c / $IN_THH;
$hhbD3900_3980c = $bD3900_3980c / $IN_THH;
$hhbD3900_3918c = $bD3900_3918c / $IN_THH;
$hhbD3900c = $bD3900c / $IN_THH;
$hhbD4000_4070c = $bD4000_4070c / $IN_THH;
$hhbD4000_4040c = $bD4000_4040c / $IN_THH;
$hhbD4100_4190c = $bD4100_4190c / $IN_THH;
$hhbD4100_4140c = $bD4100_4140c / $IN_THH;
$hhbD4150_4170c = $bD4150_4170c / $IN_THH;
$hhbD4180c = $bD4180c / $IN_THH;
$hhbD4300_4340c = $bD4300_4340c / $IN_THH;
$hhbD4400_4470c = $bD4400_4470c / $IN_THH;
$hhbD4400_4410c = $bD4400_4410c / $IN_THH;
$hhbD4500_4540c = $bD4500_4540c / $IN_THH;
$hhbD4520c = $bD4520c / $IN_THH;
$hhbD4530c = $bD4530c / $IN_THH;
$hhbD4800_4840c = $bD4800_4840c / $IN_THH;
$hhbD4600_4720c = $bD4600_4720c / $IN_THH;
$hhbD4630_4660c = $bD4630_4660c / $IN_THH;
$hhbD4710_4720c = $bD4710_4720c / $IN_THH;
$hhbD4900_4930c = $bD4900_4930c / $IN_THH;
$hhbD5000_5084c = $bD5000_5084c / $IN_THH;
$hhbD5200_5230c = $bD5200_5230c / $IN_THH;
$hhbD5220_5230c = $bD5220_5230c / $IN_THH;
$hhbDAIRYc = $bDAIRYc / $IN_THH;
$hhbBAKERYc = $bBAKERYc / $IN_THH;
$hhbFRUITc = $bFRUITc / $IN_THH;
$hhbVEGc = $bVEGc / $IN_THH;
$hhbSPICESc = $bSPICESc / $IN_THH;
$hhbSUGARc = $bSUGARc / $IN_THH;
$hhbCOFFEEc = $bCOFFEEc / $IN_THH;
$hhbFATc = $bFATc / $IN_THH;
$hhbFOOD_OTc = $bFOOD_OTc / $IN_THH;
$hhbBEV_NONALc = $bBEV_NONALc / $IN_THH;
$hhbMEATc = $bMEATc / $IN_THH;
$hhbFISHc = $bFISHc / $IN_THH;
$hhbGROCERYc = $bGROCERYc / $IN_THH;






// aggregates
// committed expenses
$hhbcommit = $hhbD2000_2070c + $hhbD1000_1560c + $hhbD3000_3260c;
$hhacommit = $hhaD2000_2070c + $hhaD1000_1560c + $hhaD3000_3260c;
$hhdiffcommit = $hhbcommit - $hhacommit;

// other household ops

$hhb_itemed_hh_ops = $hhbD2200_2230c + $hhbD2240_2244c +$hhbD2270_2300c + $hhbD2340_2370c +$hhbD2540_2680c +$hhbD2500_2534c; 
$hha_itemed_hh_ops = $hhaD2200_2230c + $hhaD2240_2244c +$hhaD2270_2300c + $hhaD2340_2370c +$hhaD2540_2680c +$hhbD2500_2534c; 

$hhb_total_hh_ops = $hhbD2200_2380c + $hhbD2500_2730c;
$hha_total_hh_ops = $hhaD2200_2380c + $hhaD2500_2730c;

$hhb_other_hh_ops =  $hhb_total_hh_ops - $hhb_itemed_hh_ops;
$hha_other_hh_ops =  $hha_total_hh_ops - $hha_itemed_hh_ops;

//savings
$hhb_savings = $hhbD5000_5084c + $hhbD5200_5230c + $hhbD5500c;
$hha_savings = $hhaD5000_5084c + $hhaD5200_5230c + $hhaD5500c;
$hhdiff_savings = $hhb_savings - $hha_savings;

// monthly expenses
$hhb_purchases = $hhbD2200_2230c + $hhbD2240_2244c + $hhbD2270_2300c + $hhbD2540_2680c + $hhbD2500_2730c + $hhbD2800_2975c + $hhbD3300_3384c + $hhbD3500_3580c + $hhbD4300_4340c + $hhbD4400_4470c;
$hha_purchases = $hhaD2200_2230c + $hhaD2240_2244c + $hhaD2270_2300c + $hhaD2540_2680c + $hhaD2500_2730c + $hhaD2800_2975c + $hhaD3300_3384c + $hhaD3500_3580c + $hhaD4300_4340c + $hhaD4400_4470c;
$hhdiff_purchases =  $hhb_purchases - $hha_purchases ;


// discretionary

$hhb_discretionary = $hhbD3700_4190c + $hhbD4500_4540c + $hhb_other_hh_ops + $hhbD4800_4840c + $hhbD4600_4720c + $hhbD2340_2370c;
$hha_discretionary = $hhaD3700_4190c + $hhaD4500_4540c + $hha_other_hh_ops + $hhaD4800_4840c + $hhaD4600_4720c + $hhaD2340_2370c;
$hhdiff_discretionary = $hhb_discretionary - $hha_discretionary ;

// consumption
$hhb_consume = $hhbcommit + $hhb_purchases + $hhb_discretionary;
$hha_consume = $hhacommit + $hha_purchases + $hha_discretionary;
$hhdiff_consume  = $hhb_consume - $hha_consume;

// taxes and other
$hhb_taxes = $IN_AHHp - $hhb_consume;
$hha_taxes = $IN_AHHc - $hha_consume;
$hhdiff_taxes = $hhb_taxes - $hha_taxes;

// housing pictures
$house_image1 = "house_mid.jpg";
if($hhb_consume > 80000) $house_image1 = "house_high.jpg";
if($hhb_consume < 30000) $house_image1 = "house_low.jpg";
?>
<?php 
  // income chart
  ?>
 <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Income Band', 'Percent'],
          ['<$30k',<?php echo number_format($inc030p); ?>],
          ['$30-70k',<?php echo number_format($inc3070p); ?>],
          ['$70-100k',<?php echo number_format($inc70100p); ?>],
          ['$100k+',<?php echo number_format($inc100p); ?>],
        ]);

        var options = {
          legend: {position: 'top', maxLines: 2},
		  is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
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
    </script>
     <script type="text/javascript">
   google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data4 = google.visualization.arrayToDataTable([
  
  
    ['Decile', 'Targeting', 'Random'],
[' ',0, 0],
['Top',<?php echo round($decile_score_array2[0]); ?>, 10],
['2',<?php echo round($decile_score_array2[1]); ?>, 20],
['3',<?php echo round($decile_score_array2[2]); ?>, 30],
['4',<?php echo round($decile_score_array2[3]); ?>, 40],
['5',<?php echo round($decile_score_array2[4]); ?>, 50],
['6',<?php echo round($decile_score_array2[5]); ?>, 60],
['7',<?php echo round($decile_score_array2[6]); ?>, 70],
['8',<?php echo round($decile_score_array2[7]); ?>, 80],
['9',<?php echo round($decile_score_array2[8]); ?>, 90],
['Bottom',<?php echo round($decile_score_array2[9]); ?>, 100]


  ]);

  var options4 = {
    vAxis: {title: "% Total"},
    hAxis: {title: "Decile"}
  };



  //var chart = new google.visualization.ComboChart(document.getElementById('chart_div4'));
   var chart = new google.visualization.AreaChart(document.getElementById('chart_div4'));

  chart.draw(data4, options4);
}
google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
function drawChart() { 
  var data5 = google.visualization.arrayToDataTable([
        ['Spending', 'Essential', 'Controllable', 'Discretionary'],
        ['Target Audience', <?php echo round($hhbcommit);?>, <?php echo round($hhb_purchases);?>, <?php echo round($hhb_discretionary);?>]
      ]);

      var options5 = {
        width: 210,
        height: 490,
        legend: { position: 'top', maxLines: '4' },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };
	   var chart = new google.visualization.ColumnChart(document.getElementById('stacked_chart'));
        chart.draw(data5, options5);
}
</script>

    
<body onLoad='initialize()'>
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
                    <li><a onClick="DETAILsubmit2(<?php echo $report_uid * 3571 ; ?>);">View all details</a></li>
                    <li><a onClick="DETAILsubmit_2(<?php echo $report_uid * 3571 ; ?>);">Demographics</a></li><li>
                    <a onClick="DETAILsubmit_3(<?php echo $report_uid * 3571 ; ?>);">Segmentation</a></li>
                    <li><a onClick="DETAILsubmit_4(<?php echo $report_uid * 3571 ; ?>);">Spending</a></li>
                    <li><a onClick="DETAILsubmit_5(<?php echo $report_uid * 3571 ; ?>);">Media</a></li>
                    <li><a onClick="DETAILsubmit_6(<?php echo $report_uid * 3571 ; ?>);">Lifestyle</a></li>
                    <li><a onClick="DETAILsubmit_8(<?php echo $report_uid * 3571 ; ?>);">Automotive</a></li>
      </ul>
    </div>
  </div>
<input name="report_uid" type="hidden" id="report_uid" value="<?php echo $report_uid*3571; ?>">
            <input name="detail_show" type="hidden" id="detail_show" value="0">
    <input name="roi_totalhh" type="hidden" id="roi_totalhh" value="<?php echo $total_households; ?>">
    <input type="hidden" name="roi_scores" id="roi_scores" value="<?php echo $decile_score_list; ?>">
    <input type="hidden" name="roi_avgscore" id="roi_avgscore" value="<?php echo $average_score_in_area; ?>">
    <input type="hidden" name="roi_20hh" id="roi_20hh" value="<?php echo $total_households*0.2; ?>">
</div>
  
  <div class="container row col-md-12 print_pages_cover ">

    <table width="900px" height="573" border="0" cellspacing="0" cellpadding="0" bgcolor="#CCFFCC">
  <tr>
    <td width="900" height="122" align="center" valign="top"><p><span class="blue22"><strong>TARGET 
      AUDIENCE INSIGHTS</strong></span></p>
      <p class="black18">Store# <?php echo $store_number; ?>, <?php echo $store_name; ?><br>
        Prepared by: <?php echo $user_firstname; ?> <?php echo $user_lastname; ?>&nbsp;<br>
        <?php $now = new DateTime();
echo $now->format('F-Y');    
 
?>
  </p>
      <p class="black141">Target Audience <?php echo $var1_fullname_string; ?><br>
      <?php echo number_format($decile_cutoff*2); ?> target audience households analyzed (out of <?php echo number_format($decile_cutoff*10); ?> households analyzed in the entire market area)</p></td>
  </tr>
  <tr >
    <td align="center"><img src="pics560/connections_wide.jpg" alt="cover" width="480" height="240" class="Example_E1"></td>
  </tr>
  <tr>
    <td align="center" valign="top" class="sorange16"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
  </tr>
    </table>
</div>

  
  
   <div class="pagebreak"></div>
   
   <div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
<tr>
  <td width="900" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
      <td width="43%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?>, <?php echo $store_name; ?></strong><br>
        Target Audience only: <?php echo $var1_fullname_string; ?></td>
      <td width="42%" align="right"><strong class="stitle1">LOCATION</strong></td>
    </tr>
  </table></td>
</tr>
              
              <tr>
                <td align="center" colspan="2"><div class="sgrey14" id="map" style="width: 880px; height: 450px"></div>                  
                <span class="sgrey12">Each pin represents a 6 digit postal code  for your target audience. (max 3000 pins displayed)</span></td>
              </tr>
  </table>
</div>

<div class="pagebreak"></div>

<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="43%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?>, <?php echo $store_name; ?></strong><br>
            Target Audience only: <?php echo $var1_fullname_string; ?></td>
          <td width="42%" align="right"><strong class="stitle1">SCORE BY DECILE<br>
          </strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td >&nbsp;</td>
    </tr>
    <tr>
    <td class="sgrey14" >      <strong>Market area average: <?php echo round($average_score_in_area); ?> <br>   
      Top 20% of households: <?php echo round((($decile_score_array[0] + $decile_score_array[1]) / 2)); ?><br>
      Bottom 20% of households:<?php echo round((($decile_score_array[8] + $decile_score_array[9]) / 2)); ?></strong></td>
    </tr>
  <tr>
  <td ><div id="chart_div" style="width: 880px; height: 420px;"></div></td>
  </tr>
  </table>
</div>

 <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" colspan="2" class="sorange24" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="52%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?>, <?php echo $store_name; ?></strong><br>
            Target Audience only: <?php echo $var1_fullname_string; ?></td>
          <td width="33%" align="right"><strong class="stitle1">LIFT CHART<br>
            </strong> </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" class="sorange24" >&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center" ><div id="chart_div4" style="width: 600px; height: 520px;"></div></td>
    </tr>
  </table>
</div>
  
  <div class="pagebreak"></div>
  

   <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="52%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?>, <?php echo $store_name; ?></strong><br>
            Target Audience only: <?php echo $var1_fullname_string; ?></td>
          <td width="33%" align="right"><strong class="stitle1">DEMOGRAPHICS<br>
            </strong> <a class="btn btn-success Example_E1" onClick="DETAILsubmit_2(<?php echo $report_uid * 3571 ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
              &nbsp;<strong>View Details</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
    <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td width="50%" align="center" valign="top"><br>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="200" align="center"><img src="family_pics/<?php echo $image_display_family;?>" alt="demo1" width="150px" height="150px" class="Example_E" /></td>
          <td valign="top" class="sgrey14"><p><strong><span class="sorange16">Primary Family Structure Cohort</span></strong></p>
            <p><strong><?php echo $family_top_comment[0]; ?> <br>
            </strong></p>            <?php echo $family_comment; ?></td>
          </tr>
        </table>
      <br></td>
    <td align="center" valign="top"><br>      
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="200" align="center"><img src="age_pics/<?php echo $image_display_age;?>" alt="age picture" width="150px" height="150px" class="Example_E" /></td>
          <td valign="top" class="sgrey14"><p class="sgrey14"><strong><span class="sorange16">Primary Age Cohort</span></strong></p>
            <p class="sgrey14"><strong><?php echo $age_top_comment[0]; ?> <br>
            </strong></p>            <?php echo $age_comment; ?></td>
          </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center"> <span class="sorange16">Household Income</span>      <div id="piechart_3d" style="width: 400px; height: 280px;"></div>
  </td>
    <td align="center"><span class="sorange16">Ethnic Diversity</span>      <div id="piechart_3d2" style="width: 400px; height: 280px;"></div></td>
  </tr>
  </table>
</div>

<div class="container row col-md-12 print_pages align="left""> 
  <table width="905" height="600" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="905" height="600" colspan="2"><table width="100%" height="600" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="100%" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
                        <td width="48%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?>, <?php echo $store_name; ?></strong><br>
                          Target Audience only: <?php echo $var1_fullname_string; ?></td>
                        <td width="37%" align="right"><strong class="stitle1">SEGMENTATION<br>
                          </strong><a href="segment_descriptions.php" target="_blank" class="black14">View descriptions</a>  <a class="btn btn-success Example_E1" onClick="DETAILsubmit_3(<?php echo $report_uid * 3571 ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
                            &nbsp;<strong>View Details</strong>&nbsp;</a></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><strong><span class="sblue"><?php echo number_format($segment_counter); ?> Vital segments were identified</span></strong><br>
                      <strong><span class="sgrey14">These vital segments represent <?php echo number_format($vitalsegment_p); ?>% of your target audience and <?php echo number_format($vitalsegment_c); ?>% of your entire market area (index <?php echo number_format($vitalsegment_p / $vitalsegment_c *100); ?>)</span></strong></td>
                  </tr>
                  <tr>
                    <td height="420" colspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="0">
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
                                <td align='center'><img src='" . $segment_display[0] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[0] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[0] . "% of target audience<br>" 
. $segment_benchmark[0] . "% of market area<br> index "
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
                                <td align='center'><img src='" . $segment_display[1] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[1] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[1] . "% of target audience<br>" 
. $segment_benchmark[1] . "% of market area<br> index "
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
                                <td align='center'><img src='" . $segment_display[2] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[2] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[2] . "% of target audience<br>" 
. $segment_benchmark[2] . "% of market area<br> index "
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
                                <td align='center'><img src='" . $segment_display[3] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[3] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[3] . "% of target audience<br>" 
. $segment_benchmark[3] . "% of market area<br> index "
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
                                <td align='center'><img src='" . $segment_display[4] . ".jpg' width='150' height='150'></td>
                              </tr>
                              <tr>
                                <td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[4] . "</strong></td>
                              </tr>
                              <tr>
                                <td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[4] . "% of target audience<br>" 
. $segment_benchmark[4] . "% of market area<br> index "
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
<div class="container row col-md-12 print_pages align="left"">
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td width="500" colspan="2" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="61%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?>, <?php echo $store_name; ?></strong><br>
            Target Audience only: <?php echo $var1_fullname_string; ?></td>
          <td width="24%" align="right"><strong class="stitle1">SPENDING<br>
            </strong> <a class="btn btn-success Example_E1" onClick="DETAILsubmit_4(<?php echo $report_uid * 3571 ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
              &nbsp;<strong>View Details</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="left"><span class="sgrey12">Target audience  consumption per household is $<?php echo number_format($hhb_consume); ?>; this is $<?php echo number_format(abs($hhdiff_consume)); if ($hhdiff_consume > 0) echo " higher"; else echo " lower"; ?> than the market area average of $<?php echo number_format($hha_consume); ?></span></td>
    </tr>
    <tr>
      <td colspan="2" align="left"><table width="100%" border="0" cellspacing="2" cellpadding="0">
        <tr>
          <td width="220"><div id="stacked_chart" style="width: 220px; height: 490px;"></div></td>
          <td width="220" align="center" valign="top"><table width='95%' class='Example_E1'>
              <tr>
                <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height="40" align='center' class="sblue"><strong>Essential</strong></td>
                    </tr>
                  <tr>
                    <td align='center' height ='50' class='sgrey14'><img src="activities/<?php echo $house_image1 ; ?>" width="200" height="200" alt="house"></td>
                    </tr>
                  <tr>
                    <td height ='20'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height ='70' bgcolor='#e0e0e0'><span class="sgrey14"><strong>$<?php echo number_format($hhbcommit); ?>  target audience<br>
                        $<?php echo number_format($hhaD2000_2070c); ?> market area<br>
                        $<?php echo number_format($hhbD2000_2070c-$hhaD2000_2070c); ?> difference</strong></span></td>
                    </tr>
                  <tr>
                    <td height ='120' >&#8226; Housing<br>
                      &#8226; Food<br>
                      &#8226; Transportation </td>
                    </tr>
                  </table></td>
                </tr>
            </table></td>
          <td width="220" align="center" valign="top"><table width='95%' class='Example_E1'>
              <tr>
                <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height="40" align='center' class="sblue"><strong>Controllable</strong></td>
                    </tr>
                  <tr>
                    <td align='center' height ='50' class='sgrey14'><img src="activities/clothing1.jpg" width="200" height="200" alt="clothes"></td>
                    </tr>
                  <tr>
                    <td height ='20'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height ='70' bgcolor='#e0e0e0'><strong>$<?php echo number_format($hhb_purchases); ?>  target audience<br>
                      $<?php echo number_format($hha_purchases); ?>  market area<br>
                      $<?php echo number_format($hhdiff_purchases); ?> difference</strong></td>
                    </tr>
                  <tr>
                    <td height ='120' >&#8226; Clothing<br>
&#8226; Household Expenses<br>
&#8226; Health Care</td>
                    </tr>
                  </table></td>
                </tr>
            </table></td>
          <td width="220" align="center" valign="top"><table width='95%' class='Example_E1'>
              <tr>
                <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height="40" align='center' class="sblue"><strong>Discretionary</strong></td>
                    </tr>
                  <tr>
                    <td align='center' height ='50' class='sgrey14'><img src="activities/activity.png" width="200" height="200" alt="activity"></td>
                    </tr>
                  <tr>
                    <td height ='20'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height ='70' bgcolor='#e0e0e0'><strong>$<?php echo number_format($hhb_discretionary); ?> target audience<br>
                      $<?php echo number_format($hha_discretionary); ?> market area<br>
                      $<?php echo number_format($hhb_discretionary - $hha_discretionary); ?> difference</strong></td>
                    </tr>
                  <tr>
                    <td height ='120' >&#8226; Reacreation<br>
&#8226; Household Items<br>
&#8226; Gardening</td>
                    </tr>
                  </table></td>
                </tr>
            </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>



<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left"">
  <table width="100%" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="60%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?>, <?php echo $store_name; ?></strong><br>
            Target Audience only: <?php echo $var1_fullname_string; ?></td>
          <td width="25%" align="right"><strong class="stitle1">MEDIA<br>
            </strong> <a class="btn btn-success Example_E1" onClick="DETAILsubmit_5(<?php echo $report_uid * 3571 ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
              &nbsp;<strong>View Details</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p>
        <table width="100%" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td width="25%" align="center" valign="top"><table width="95%" height = "420" class="Example_E1" border="0" cellspacing="0" cellpadding="3">
              <tr class="sblue">
                <td align="center" height = "35" valign="top"><strong>Online</strong></td>
              </tr>
              <tr>
                <td height="220" align="center" valign="top"><img src="image3/online.jpg" width="200" height="200" alt="online"></td>
              </tr>
              <tr>
                <td height="40" align="center" valign="middle">
<img src="green0.png" width="25" height="15" alt="green"><?php if ($binternetindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?>
</td>
              </tr>
              <tr>
                <td valign="top"><span class="sgrey14"><strong>Target audience: <?php echo number_format($binternet_high ); ?>%<br>
                  Benchmark: 33.6% <br>
                  Index: <?php echo number_format($binternetindex ); ?></strong></span><strong><span class="sgrey14"><br>
                    </span></strong><br>
                    <span class="sgrey12">Heavy  users (15+ hours / week)</span></td>
              </tr>

            </table></td>
            <td width="25%" align="center" valign="top"><table width="95%" height = "420" class="Example_E1" border="0" cellspacing="0" cellpadding="3">
              <tr class="sblue">
                <td align="center" height = "35"valign="top"><strong>Newspaper</strong></td>
              </tr>
              <tr>
                <td align="center" height="220" valign="top"><img src="image3/local_news.jpg" width="200" height="200" alt="news"></td>
              </tr>
              <tr>
                <td height="40" align="center" valign="middle">

<img src="green0.png" width="25" height="15" alt="green"><?php if ($bnpindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?>
</td>
              </tr>
              <tr>
                <td valign="top"><span class="sgrey14"><strong>Target audience:<?php echo number_format($bnp_high ); ?>%<br>
                  Benchmark: 12.4% <br>
                  Index: <?php echo number_format($bnpindex ); ?></strong></span><br>
                    <br>
                    <span class="sgrey12">Heavy  readers (4+ hours / week)</span></td>
              </tr>
 
            </table></td>
            <td width="25%" align="center" valign="top">
              <table width="95%" height = "420" class="Example_E1" border="0" cellspacing="0" cellpadding="3">
              <tr class="sblue">
                <td align="center" height = "35" valign="top"><strong>Radio</strong></td>
              </tr>
              <tr>
                <td align="center" height="220" valign="top"><img src="image3/radio.jpg" width="200" height="200" alt="radio"></td>
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
                <td valign="top"><span class="sgrey14"><strong>Target audience:<?php echo number_format($bradio_high ); ?>%<br>
                  Benchmark: 18.7% <br>
                  Index: <?php echo number_format($bradioindex ); ?></strong></span><br>
                    <br>
                    <span class="sgrey12">Heavy  listeners (35+ hours/week)</span></td>
              </tr>
            </table></td>
            <td width="25%" align="center" valign="top"><table width="95%" height = "420" class="Example_E1" border="0" cellspacing="0" cellpadding="3">
              <tr class="sblue">
                <td align="center" height = "35" valign="top"><strong>TV</strong></td>
              </tr>
              <tr>
                <td align="center" height="220" valign="top"><img src="image3/tv.jpg" width="200" height="200" alt="tv"></td>
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
                <td valign="top"><span class="sgrey14"><strong>Target audience: <?php echo number_format($btv_high ); ?>%<br>
Benchmark: 18.6%% <br>
Index: <?php echo number_format($btvindex ); ?></strong></span><br>
<br>
<span class="sgrey12">Heavy  viewers (35+ hours / week)</span></td>
              </tr>
            </table></td>
          </tr>
        </table>
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
          <td width="60%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?>, <?php echo $store_name; ?></strong><br>
            Target Audience only: <?php echo $var1_fullname_string; ?></td>
          <td width="25%" align="right"><strong class="stitle1">LIFESTYLE<br>
            </strong> <a class="btn btn-success Example_E1" onClick="DETAILsubmit_6(<?php echo $report_uid * 3571 ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
              &nbsp;<strong>View Details</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
    </tr>
    <tr>
      <td ><table width="100%" border="0" cellspacing="0" cellpadding="8">
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
</div>
</body>
</html>
	