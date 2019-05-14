
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
		mysql_query("CREATE TABLE $temp_table_name (report_uid INT, PostCode TEXT, demo_score INT  NOT NULL, bbm_score INT  NOT NULL, sp_score INT  NOT NULL, HH_TOT INT  NOT NULL ) ");
		mysql_query("INSERT INTO $temp_table_name (report_uid, PostCode) VALUES $pc_name ");
				
					
$vars_array = explode("|", $var1_code);
$vars_number = sizeof($vars_array);
$var1_fullname_string = ""; 
$do_demo_weight = 0;
$do_bbm_weight = 0 ;
$do_sp_weight = 0;

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
									
$query = "SELECT * FROM $temp_table_name WHERE report_uid = $report_uid ORDER BY (demo_score + bbm_score + sp_score) DESC";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
// get temo score
					$temp_total_score = $row['demo_score'] + $row['bbm_score'] + $row['sp_score'];
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


 FROM a12_mfd_demo demo, a12_demo_mn mn, a12_mfd_bbm bbm, a12_mfd_sp sp, a12_mfd_sp3 sp3, $temp_table_name pclist WHERE pclist.PostCode = demo.PostCode and pclist.PostCode = mn.PostCode and pclist.PostCode = bbm.PostCode and pclist.PostCode = sp.POSTCODE and pclist.PostCode = sp3.POSTCODE ";
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

				




														}				
					mysqli_free_result($result);
				}




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
['Top',<?php echo round($decile_score_array[0]); ?>, <?php echo round($average_score_in_area);?>],	
['2',<?php echo round($decile_score_array[1]); ?>, <?php echo round($average_score_in_area);?>],	
['3',<?php echo round($decile_score_array[2]); ?>, <?php echo round($average_score_in_area);?>],	
['4',<?php echo round($decile_score_array[3]); ?>, <?php echo round($average_score_in_area);?>],	
['5',<?php echo round($decile_score_array[4]); ?>, <?php echo round($average_score_in_area);?>],	
['6',<?php echo round($decile_score_array[5]); ?>, <?php echo round($average_score_in_area);?>],	
['7',<?php echo round($decile_score_array[6]); ?>, <?php echo round($average_score_in_area);?>],	
['8',<?php echo round($decile_score_array[7]); ?>, <?php echo round($average_score_in_area);?>],	
['9',<?php echo round($decile_score_array[8]); ?>, <?php echo round($average_score_in_area);?>],	
['Bottom',<?php echo round($decile_score_array[9]); ?>, <?php echo round($average_score_in_area);?>]


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
$PostCodearray_mapmax = min($PostCodearray_mapmaxsize, 200);

		
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

 <?php 
	if($client_id == 2  && $store_number == 962) {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_" . $store_number . ".KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
  ?>
<?php 
	if($client_id == 2  && $store_number == 604) {
$temp_kml_url = "http://www.quantinc.com/mfd/kml/Market_Area_" . $store_number . ".KML";
echo "var kmlurl = '$temp_kml_url';
var kmlOptions = {
	map:map
	};

var KmlLayer = new google.maps.KmlLayer(kmlurl,kmlOptions);
";
	}
  ?>

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


 FROM a12_mfd_demo demo, a12_demo_mn mn, a12_mfd_bbm bbm, a12_mfd_sp sp, a12_mfd_sp3 sp3, $temp_table_name2 pclist WHERE pclist.PostCode = demo.PostCode and pclist.PostCode = mn.PostCode and pclist.PostCode = bbm.PostCode and pclist.PostCode = sp.POSTCODE and pclist.PostCode = sp3.POSTCODE ";
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

				




														}				
					mysqli_free_result($result);
				}

			
				
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
  
</script>

    
<body onLoad='initialize()'>
<div class="container row col-md-12 no-print align="center"">    

      		<input name="ads" type="button" class="sblue" id="ads" value="Back to Dashboard" onClick="HOMEsubmit();" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="ads2aa" type="button" class="sblue" id="ads2aa" value="ROI flyer counter" onClick="CALCREPORTsubmit2(<?php echo $report_uid * 3571; ?>);" />
</div>
  
  <div class="container row col-md-12 print_pages_cover "><span class="container row col-md-12 no-print align=">
    <input name="report_uid" type="hidden" id="report_uid" value="<?php echo $report_uid*3571; ?>">
    <input name="roi_totalhh" type="hidden" id="roi_totalhh" value="<?php echo $total_households; ?>">
    <input type="hidden" name="roi_scores" id="roi_scores" value="<?php echo $decile_score_list; ?>">
    <input type="hidden" name="roi_avgscore" id="roi_avgscore" value="<?php echo $average_score_in_area; ?>">
    <input type="hidden" name="roi_20hh" id="roi_20hh" value="<?php echo $total_households*0.2; ?>">
  </span> 

    <table width="900px" height="610px" border="0" cellspacing="0" cellpadding="0" bgcolor="#CCFFCC">
  <tr>
    <td height="100" colspan="2" align="right" valign="top"><img src="KQUEST.png" width="226" height="100" alt="KQUEST"></td>
  </tr>
  <tr>
  <td height="200" colspan="2" align="center" bgcolor="#a87855"><h1><strong>KQUEST INSIGHTS</strong></h1>
    <br>
    <br></td>
  </tr>
  <tr>
    <td colspan="2" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="223" valign="top"><span class="sorange16"><span class="sblue">Prepared by</span></span></td>
    <td width="677" valign="top"><span class="sorange16"><?php echo $user_firstname; ?> <?php echo $user_lastname; ?>&nbsp; </span></td>
  </tr>
  <tr>
    <td valign="top"><span class="sblue">Store</span></td>
    <td valign="top"><span class="sorange16"> #<?php echo $store_number; ?>, <?php echo $store_name; ?></span></td>
  </tr>
  <tr>
    <td height="100" valign="top" class="sorange16"><span class="sblue">Target consumer</span></td>
    <td height="100" valign="top" class="sorange16"><span class="sblue"> </span> <?php echo $var1_fullname_string; ?></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" class="sorange16">&nbsp;</td>
  </tr>
    </table>
</div>

  
  
   <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" class="sorange24" >Targeting Score by Decile</td>
    <td width="50%" class="sorange24" ><p class="sorange16">      Market area average: <?php echo round($average_score_in_area); ?>    
      <p class="sorange16">Top 20% of households: <?php echo round((($decile_score_array[0] + $decile_score_array[1]) / 2)); ?><br>
      Bottom 20% of households:<?php echo round((($decile_score_array[8] + $decile_score_array[9]) / 2)); ?></td>
  </tr>
  <tr>
  <td colspan="2" ><div id="chart_div" style="width: 880px; height: 500px;"></div></td>
  </tr>
  </table>
</div>

 <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" class="sorange24" >Targeting Score Lift Chart</td>
    <td width="50%" class="sorange24" ><p class="sgrey14">(<?php echo number_format($decile_cutoff); ?> households per decile)</td>
  </tr>
  <tr>
  <td colspan="2" align="center" ><div id="chart_div4" style="width: 600px; height: 600px;"></div></td>
  </tr>
  </table>
</div>
  
  <div class="pagebreak"></div>
  
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="2"><span class="sorange20">Your target audience - location</span><br>
           <span class="sgrey14">Top 20% of households with the highest concentration of your target audience</td>
              </tr>
              <tr>
                <td align="center" colspan="2"><div class="sgrey14" id="map" style="width: 880px; height: 500px"></div>                  <span class="sgrey12">Map limited to 200 postal codes</span></td>
              </tr>
  </table>
</div>


   <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td colspan="2" class="sorange20">Demographic Summary - Top 20% of households</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
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
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"> <span class="sorange16">Household Income</span>      <div id="piechart_3d" style="width: 400px; height: 300px;"></div>
</td>
    <td align="center"><span class="sorange16">Ethnic Diversity</span>      <div id="piechart_3d2" style="width: 400px; height: 300px;"></div></td>
  </tr>
  </table>
</div>

  
  
     <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td ><table width="880px"  border="1" align="left" cellpadding="0" cellspacing="0"  class="sgrey12">
  <td colspan="6" align="center" valign="top" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" align="center" valign="middle">Target Audience</td>
    <td align="center" valign="middle">Entire Market</td>
    <td align="center" valign="middle">Target Audience as a</td>
  </tr>
  <tr>
    <td width="283"><strong>Household Spending Details by Category</strong></td>
    <td align="center" valign="middle"><strong>Per household <br />
    </strong></td>
    <td align="center" valign="middle"><strong> Total Spend</strong></td>
    <td align="center" valign="middle"><strong>Total Spend</strong></td>
    <td align="center" valign="middle">% of  total market </td>
  </tr>
  <tr>
    <td><strong>Garden supplies and service (total)</strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2340_2370hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2340_2370); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2340_2370c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2340_2370d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Plants and nursery</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2340hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2340); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2340c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2340d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Fertilizers and soil</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2350hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2350); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2350c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2350d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Pesticides</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2360hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2360); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2360c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2360d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Horticultural services and snow removal</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2370hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2370); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2370c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2370d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Lawnmowers and garden equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2610hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2610); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2610c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2610d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Snowblowers</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2620hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2620); ?></td>
   <td width="150" align="right" valign="middle">$<?php echo number_format($D2620c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2620d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Other lawn/snow tools and equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2630hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2630); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2630c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2630d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="147" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Home and workshop tools  (total)</strong></td>
    <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2600_2602hh,2); ?></strong></td>
    <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2600_2602); ?></strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2600_2602c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2600_2602d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Powertools and equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2600hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2600); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2600c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2600d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Other tools</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2602hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2602); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2602c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2602d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="147" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Household cleaning supplies   (total)</strong></td>
    <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2310hh,2); ?></strong></td>
    <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2310); ?></strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2310c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2310d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="147" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Kitchen, cooking and tableware</strong></td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="147" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Non-electric kitchen equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2650hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2650); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2650c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2650d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Tableware, flatware and knives</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2660hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2660); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2660c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2660d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Non-electric cleaning equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2670hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2670); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2670c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2670d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="147" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Household equipment (total)</strong></td>
    <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2540_2680hh,2); ?></strong></td>
    <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2540_2680); ?></strong></td>
   <td width="150" align="right" valign="middle">$<?php echo number_format($D2540_2680c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2540_2680d,1); ?>%</td>
  </tr>
  <tr>
    <td>Major household appliances</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2700hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2700); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2700c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2700d,1); ?>%</td>
  </tr>
  <tr>
    <td>Other maintenance and equipment</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2710hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2710); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2710c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2710d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="147" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
    <td width="150" align="right" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Pet expenses (total)</strong></td>
    <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2270_2300hh,2); ?></strong></td>
    <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2270_2300); ?></strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2270_2300c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2270_2300d,1); ?>%</td>
  </tr>
  <tr>
    <td class="sgrey12">&nbsp;&nbsp;&nbsp;&nbsp;Pet food</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2270hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2270); ?></td>
   <td width="150" align="right" valign="middle">$<?php echo number_format($D2270c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2270d,1); ?>%</td>
  </tr>
  <tr>
    <td class="sgrey12">&nbsp;&nbsp;&nbsp;&nbsp;Purchase of pets</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2280hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2280); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2280c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2280d,1); ?>%</td>
  </tr>
  <tr>
    <td class="sgrey12">&nbsp;&nbsp;&nbsp;&nbsp;Purchase of pet related goods</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2290hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2290); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2290c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2290d,1); ?>%</td>
  </tr>
  <tr>
    <td class="sgrey12">&nbsp;&nbsp;&nbsp;&nbsp;Veterinarian and other services</td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2300hh,2); ?></td>
    <td width="147" align="right" valign="middle">$<?php echo number_format($D2300); ?></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D2300c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2300d,1); ?>%</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" valign="middle">&nbsp;</td>
    <td align="right" valign="middle">&nbsp;</td>
    <td align="right" valign="middle">&nbsp;</td>
    <td align="right" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Packaged Travel Tours (total)</strong></td>
    <td align="right" valign="middle"><strong>$<?php echo number_format($D4180hh,2); ?></strong></td>
    <td align="right" valign="middle"><strong>$<?php echo number_format($D4180); ?></strong></td>
    <td width="150" align="right" valign="middle">$<?php echo number_format($D4180c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D4180d,1); ?>%</td>
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
       <td colspan="6" align="center" valign="top" bgcolor="#FFFFFF"></td></tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2" align="center" valign="middle">Target Audience</td>
        <td align="center" valign="middle">Entire Market</td>
        <td align="center" valign="middle">Target Audience as a</td>
        </tr>
      <tr>
        <td width="283"><strong>Household Spending Details by Category</strong></td>
        <td align="center" valign="middle"><strong>Per household </strong></td>
        <td align="center" valign="middle"><strong>Total Spend</strong></td>
        <td align="center" valign="middle"><strong>Total Spend</strong></td>
        <td align="center" valign="middle">% of  total market </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right" valign="middle">&nbsp;</td>
        <td align="right" valign="middle">&nbsp;</td>
        <td align="right" valign="middle">&nbsp;</td>
        <td align="right" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Dwelling Maintenance (total)</strong></td>
        <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2001hh+$D2011hh,2); ?></strong></td>
        <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2001+$D2011); ?></strong></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2001c+$D2011c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format(($D2001+$D2011)/($D2001c+$D2011c)*100,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Owned Living Quarters</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2011hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2011); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2011c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2011d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Tenants' maintenance</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2001hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2001); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2001c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2001d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="147" align="right" valign="middle">&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Household Furnishings</strong></td>
        <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2500_2534hh,2); ?></strong></td>
        <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2500_2534); ?></strong></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2500_2534c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2500_2534d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Furniture</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2500hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2500); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2500c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2500d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Rugs and Mats</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2510hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2510); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2510c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2510d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Window Covering</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2520hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2520); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2520c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2520d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Mirrors and picture frames</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2534hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2534); ?></td>
       <td width="150" align="right" valign="middle">$<?php echo number_format($D2534c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2534d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Lamps and lampshades</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2540hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2640); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2640c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2640d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Home security equipment</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2674hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2674); ?></td>
       <td width="150" align="right" valign="middle">$<?php echo number_format($D2674c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2674d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Other household equipment</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2680hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2680); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2680c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2680d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Furniture, capeting and textiles</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2690hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2690); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2690c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2690d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="147" align="right" valign="middle">&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Household appliances (total)</strong></td>
        <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2540_2590hh,2); ?></strong></td>
        <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2540_2590); ?></strong></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2540_2590c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2540_2590d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Room air conditioning, humidifiers</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2540hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2540); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2540c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2540d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Refrigerators and freezers</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2542hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2542); ?></td>
       <td width="150" align="right" valign="middle">$<?php echo number_format($D2542c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2542d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Stoves and ranges</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2550hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2550); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2550c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2550d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Microwave ovens</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2552hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2552); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2552c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2552d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Gas barbeque</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2554hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2554); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2554c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2554d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Small food preparation appliances</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2560hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2560); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2560c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2560d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Washers and dryers</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2570hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2570); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2570c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2570d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Vacuum cleaners</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2580hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2580); ?></td>
       <td width="150" align="right" valign="middle">$<?php echo number_format($D2580c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2580d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Portable dishwashers</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2582hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2582); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2582c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2582d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Sewing Machines</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2584hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2584); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2584c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2584d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Other electrical equipment</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2586hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2586); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2586c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2586d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp; Attachments for major appliances</td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2590hh,2); ?></td>
        <td width="147" align="right" valign="middle">$<?php echo number_format($D2590); ?></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2590c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2590d,1); ?>%</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="147" align="right" valign="middle">&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
        <td width="150" align="right" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Other household supplies (total)</strong></td>
        <td width="150" align="right" valign="middle"><strong>$<?php echo number_format($D2380hh,2); ?></strong></td>
        <td width="147" align="right" valign="middle"><strong>$<?php echo number_format($D2380); ?></strong></td>
        <td width="150" align="right" valign="middle">$<?php echo number_format($D2380c); ?></td>
    <td width="150" align="right" valign="middle"><?php echo number_format($D2380d,1); ?>%</td>
      </tr>
      </table></td>
  </tr>
  </table>
</div>
 
    <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0" >
  <tr>
  <td ><table width="880px" height='500' border="1" cellpadding="2" cellspacing="0" class="sgrey12">
    <col width="276" />
    <tr>
      <td>Avid (heavy) shoppers by category</td>
      <td align="left" valign="middle">Target Audience</td>
      <td align="left" valign="middle">Entire Market Area</td>
      <td align="left" valign="middle">Target Audience as a <br>
        percent of total market area</td>
    </tr>
    <tr>
      <td width="170">Grocery</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_GRH200); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_GRH200c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_GRH200d); ?>%</td>
    </tr>
    <tr>
      <td>Small appliances</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_AP500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_AP500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_AP500d); ?>%</td>
    </tr>
    <tr>
      <td>Men's Clothing</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_MC500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_MC500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_MC500d); ?>%</td>
    </tr>
    <tr>
      <td>Women's Clothing</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_WC500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_WC500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_WC500d); ?>%</td>
    </tr>
    <tr>
      <td>Children's Clothing</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CC500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CC500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CC500d); ?>%</td>
    </tr>
    <tr>
      <td>Bath and Bedding</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_BB500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_BB500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_BB500d); ?>%</td>
    </tr>
    <tr>
      <td>Books</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_BO500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_BO500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_BO500d); ?>%</td>
    </tr>
    <tr>
      <td>China & Tableware</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CT500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CT500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CT500d); ?>%</td>
    </tr>
    <tr>
      <td>Furniture</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_FNT500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_FNT500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_FNT500d); ?>%</td>
    </tr>
    <tr>
      <td>Gardening supplies</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_GS500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_GS500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_GS500d); ?>%</td>
    </tr>
    <tr>
      <td>Hair salon</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_HS500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_HS500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_HS500d); ?>%</td>
    </tr>
    <tr>
      <td>Home decor</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_HD500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_HD500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_HD500d); ?>%</td>
    </tr>
    <tr>
      <td>Power tools</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_PT500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_PT500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_PT500d); ?>%</td>
    </tr>
    <tr>
      <td>Gift cards</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_PG500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_PG500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_PG500d); ?>%</td>
    </tr>
    <tr>
      <td>Men's shoes</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_MS500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_MS500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_MS500d); ?>%</td>
    </tr>
    <tr>
      <td>Women's shoes</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_WS500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_WS500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_WS500d); ?>%</td>
    </tr>
    <tr>
      <td>Children's shoes</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CS500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CS500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_CS500d); ?>%</td>
    </tr>
    <tr>
      <td>Sporting goods</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_SG500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_SG500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_SG500d); ?>%</td>
    </tr>
    <tr>
      <td>Toys and Games</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_TO500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_TO500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_TO500d); ?>%</td>
    </tr>
    <tr>
      <td>Jewelery</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_JW500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_JW500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_JW500d); ?>%</td>
    </tr>
    <tr>
      <td>Online shopping</td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_OS500); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_OS500c); ?></td>
      <td width="92" align="left" valign="middle"><?php echo number_format($SP_OS500d); ?>%</td>
    </tr>
    <tr>
      <td>Total population 15+</td>
      <td align="left" valign="middle"><?php echo number_format($PP15_); ?></td>
      <td align="left" valign="middle"><?php echo number_format($PP15_c); ?></td>
      <td align="left" valign="middle"><?php echo number_format($PP15_d); ?>%</td>
    </tr>
  </table></td>
  </tr>
  </table>
</div>
  
 <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td ><table width="880px" border="1" cellpadding="1" cellspacing="0" class="sgrey12">
    <tr>
    <td width="400"><strong>Demography Details</strong></td>
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
</div>
     
  
  
</div>
</body>
</html>
	