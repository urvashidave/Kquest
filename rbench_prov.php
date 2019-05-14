<?php 
$bench_name1 = "Canada";
	if($rbenchmark == 1) $bench_name1 = "V";
	if($rbenchmark == 2) $bench_name1 = "T";
	if($rbenchmark == 3) $bench_name1 = "S";
	if($rbenchmark == 4) $bench_name1 = "R";
	if($rbenchmark == 5) $bench_name1 = "Ont";
	if($rbenchmark == 6) $bench_name1 = "Quebec";
	if($rbenchmark == 7) $bench_name1 = "Atlantic";
	
	if($rbenchmark == 8) $bench_name1 = "West";
	if($rbenchmark == 9) $bench_name1 = "C";
	if($rbenchmark == 10) $bench_name1 = "E";
	if($rbenchmark == 11) $bench_name1 = "B";
	if($rbenchmark == 12) $bench_name1 = "A";


$query = "Select * FROM amfd_bench WHERE bench_name = '$bench_name1' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
	if($row['agg_name'] == "summary") $rbench['summary_list'] = $row['agg_list'];
	if($row['agg_name'] == "segment") $rbench['segment_list'] = $row['agg_list'];
	if($row['agg_name'] == "media") $rbench['media_list'] = $row['agg_list'];
	if($row['agg_name'] == "mfd_homes") $rbench['mfd_homes_list'] = $row['agg_list'];
	if($row['agg_name'] == "leisure") $rbench['leisure_list'] = $row['agg_list'];
	if($row['agg_name'] == "flyer") $rbench['flyer_list'] = $row['agg_list'];
	if($row['agg_name'] == "spending") $rbench['spending_list'] = $row['agg_list'];
	if($row['agg_name'] == "internet") $rbench['internet_list'] = $row['agg_list'];
	if($row['agg_name'] == "np") $rbench['np_list'] = $row['agg_list'];
	if($row['agg_name'] == "radio") $rbench['radio_list'] = $row['agg_list'];
	if($row['agg_name'] == "tv1") $rbench['tv1_list'] = $row['agg_list'];
	if($row['agg_name'] == "leisure2") $rbench['leisure2_list'] = $row['agg_list'];
	if($row['agg_name'] == "flyer1") $rbench['flyer1_list'] = $row['agg_list'];
	if($row['agg_name'] == "auto") $rbench['auto_list'] = $row['agg_list'];
	if($row['agg_name'] == "improve") $rbench['improve_list'] = $row['agg_list'];
	if($row['agg_name'] == "rest") $rbench['rest_list'] = $row['agg_list'];
	
	
	if($row['agg_name'] == "grocery") $rbench['grocery_list'] = $row['agg_list'];
	if($row['agg_name'] == "dept") $rbench['dept_list'] = $row['agg_list'];
	if($row['agg_name'] == "cv") $rbench['cv_list'] = $row['agg_list'];
	if($row['agg_name'] == "drug") $rbench['drug_list'] = $row['agg_list'];
	if($row['agg_name'] == "clothing") $rbench['clothing_list'] = $row['agg_list'];
	if($row['agg_name'] == "shoe") $rbench['shoe_list'] = $row['agg_list'];
	if($row['agg_name'] == "book") $rbench['book_list'] = $row['agg_list'];
	if($row['agg_name'] == "jewel") $rbench['jewel_list'] = $row['agg_list'];
	if($row['agg_name'] == "furn") $rbench['furn_list'] = $row['agg_list'];
	if($row['agg_name'] == "home") $rbench['home_list'] = $row['agg_list'];		
	if($row['agg_name'] == "eye") $rbench['eye_list'] = $row['agg_list'];
	if($row['agg_name'] == "glasses") $rbench['glasses_list'] = $row['agg_list'];
	if($row['agg_name'] == "elect") $rbench['elect_list'] = $row['agg_list'];
	if($row['agg_name'] == "office") $rbench['office_list'] = $row['agg_list'];
	if($row['agg_name'] == "sport") $rbench['sport_list'] = $row['agg_list'];	
	if($row['agg_name'] == "toy") $rbench['toy_list'] = $row['agg_list'];
	if($row['agg_name'] == "pet") $rbench['pet_list'] = $row['agg_list'];
	if($row['agg_name'] == "pet_own") $rbench['pet_own_list'] = $row['agg_list'];
	if($row['agg_name'] == "type_r") $rbench['type_r_list'] = $row['agg_list'];
	if($row['agg_name'] == "type_o") $rbench['type_o_list'] = $row['agg_list'];
	
	
	
	
}}
	$rbench['summary'] = explode(",", $rbench['summary_list']);
	$rbench['segment'] = explode(",", $rbench['segment_list']);
	$rbench['media'] = explode(",", $rbench['media_list']);
	$rbench['mfd_homes'] = explode(",", $rbench['mfd_homes_list']);
	$rbench['leisure'] = explode(",", $rbench['leisure_list']);
	$rbench['flyer'] = explode(",", $rbench['flyer_list']);
	$rbench['spending'] = explode(",", $rbench['spending_list']);
	$rbench['internet'] = explode(",", $rbench['internet_list']);
	$rbench['np'] = explode(",", $rbench['np_list']);
	$rbench['radio'] = explode(",", $rbench['radio_list']);
	$rbench['tv1'] = explode(",", $rbench['tv1_list']);
	$rbench['leisure2'] = explode(",", $rbench['leisure2_list']);
	$rbench['flyer1'] = explode(",", $rbench['flyer1_list']);
	$rbench['auto'] = explode(",", $rbench['auto_list']);
	$rbench['improve'] = explode(",", $rbench['improve_list']);
	$rbench['rest'] = explode(",", $rbench['rest_list']);
	
	$rbench['grocery'] = explode(",", $rbench['grocery_list']);
	$rbench['dept'] = explode(",", $rbench['dept_list']);
	$rbench['cv'] = explode(",", $rbench['cv_list']);
	$rbench['drug'] = explode(",", $rbench['drug_list']);
	$rbench['clothing'] = explode(",", $rbench['clothing_list']);
	$rbench['shoe'] = explode(",", $rbench['shoe_list']);
	$rbench['book'] = explode(",", $rbench['book_list']);
	$rbench['jewel'] = explode(",", $rbench['jewel_list']);
	$rbench['furn'] = explode(",", $rbench['furn_list']);
	$rbench['home'] = explode(",", $rbench['home_list']);
	$rbench['eye'] = explode(",", $rbench['eye_list']);
	$rbench['glasses'] = explode(",", $rbench['glasses_list']);
	$rbench['elect'] = explode(",", $rbench['elect_list']);
	$rbench['office'] = explode(",", $rbench['office_list']);
	$rbench['sport'] = explode(",", $rbench['sport_list']);
	$rbench['toy'] = explode(",", $rbench['toy_list']); 
	$rbench['pet'] = explode(",", $rbench['pet_list']);
	$rbench['pet_own'] = explode(",", $rbench['pet_own_list']);
	$rbench['type_r'] = explode(",", $rbench['type_r_list']);
	$rbench['type_o'] = explode(",", $rbench['type_o_list']);
	

for ( $i = 0; $i < sizeof($rbench['spending']); $i ++) {
	$rbench_hh['spending'][$i] = $rbench['spending'][$i] / $rbench['spending'][0];
}

$hhcan_D2000_2070= $rbench_hh['spending'][3];
$hhcan_D1000_1560= $rbench_hh['spending'][1];
$hhcan_D3000_3260= $rbench_hh['spending'][42];
$hhcan_D2200_2230= $rbench_hh['spending'][5];
$hhcan_D2240_2244= $rbench_hh['spending'][6];
$hhcan_D2270_2300= $rbench_hh['spending'][7];
$hhcan_D2540_2680= $rbench_hh['spending'][10];
$hhcan_D2500_2730= $rbench_hh['spending'][9];
$hhcan_D2800_2975= $rbench_hh['spending'][37];
$hhcan_D3300_3384 = $rbench_hh['spending'][45];
$hhcan_D3500_3580= $rbench_hh['spending'][46];
$hhcan_D4300_4340= $rbench_hh['spending'][66];
$hhcan_D4400_4470= $rbench_hh['spending'][67];
$hhcan_D3700_4190= $rbench_hh['spending'][49];
$hhcan_D4500_4540= $rbench_hh['spending'][69];

$hhcan_otherhhops= $rbench_hh['spending'][4] + $rbench_hh['spending'][9];

$hhcan_otherexpenses= $rbench_hh['spending'][72] + $rbench_hh['spending'][73];
$hhcan_D2340_2370= $rbench_hh['spending'][8];


$hhacommit = $hhcan_D2000_2070 + $hhcan_D1000_1560 + $hhcan_D3000_3260;

$hha_purchases = $hhcan_D2200_2230 + $hhcan_D2240_2244 + $hhcan_D2270_2300 + $hhcan_D2540_2680 + $hhcan_D2500_2730 + $hhcan_D2800_2975 + $hhcan_D3300_3384 + $hhcan_D3500_3580 + $hhcan_D4300_4340 + $hhcan_D4400_4470;


$hhcan_discretionary = $hhcan_D3700_4190 + $hhcan_D4500_4540 + $hhcan_otherhhops +  $hhcan_D2340_2370;



$media['bench'][0] = ($rbench['media'][1] + $rbench['media'][2])/$rbench['media'][0] * 100;
$media['bench'][1] = ($rbench['media'][4] + $rbench['media'][5])/$rbench['media'][0] * 100;
$media['bench'][2] = ($rbench['media'][6] + $rbench['media'][7] + $rbench['media'][8])/$rbench['media'][0] * 100;
$media['bench'][3] = ($rbench['media'][10] + $rbench['media'][11])/$rbench['media'][0] * 100;

$media2['canada'][] = ($rbench['radio'][1])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][2])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][3])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][4])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][5])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][6])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][7])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][8])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][9])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][10])/$rbench['radio'][0] * 100;
$media2['canada'][] = ($rbench['radio'][11])/$rbench['radio'][0] * 100;

for ( $i = 1; $i <= 25; $i ++) {
	$media3['canada'][] = ($rbench['tv1'][$i])/$rbench['tv1'][0] * 100;
}
for ( $i = 1; $i <= 16; $i ++) {
	$media6['canada'][] = ($rbench['np'][$i])/$rbench['np'][0] * 100;
}

$canp_FLY_CPN = ($rbench['flyer1'][1])/$rbench['flyer1'][0] * 100;
$canp_FLY_CPS = ($rbench['flyer1'][2])/$rbench['flyer1'][0] * 100;
$canp_FLY_CPO = ($rbench['flyer1'][3])/$rbench['flyer1'][0] * 100;
$canp_FLY_CPF = ($rbench['flyer1'][4])/$rbench['flyer1'][0] * 100;
$canp_FLY_DEMN = 60.2700502501041;
$canp_FLY_DEMS = 20.8378503030198;
$canp_FLY_DEMO = 15.4561642977532;
$canp_FLY_DEMF = 3.43595624113244;

$canp_FLY_DPN = ($rbench['flyer'][1])/$rbench['flyer'][0] * 100;
$canp_FLY_DPS = ($rbench['flyer'][2])/$rbench['flyer'][0] * 100;
$canp_FLY_DPO = ($rbench['flyer'][3])/$rbench['flyer'][0] * 100;
$canp_FLY_DPF = ($rbench['flyer'][4])/$rbench['flyer'][0] * 100;
$canp_FLY_CNPN = ($rbench['flyer'][5])/$rbench['flyer'][0] * 100;
$canp_FLY_CNPS = ($rbench['flyer'][6])/$rbench['flyer'][0] * 100;
$canp_FLY_CNPO = ($rbench['flyer'][7])/$rbench['flyer'][0] * 100;
$canp_FLY_CNPF = ($rbench['flyer'][8])/$rbench['flyer'][0] * 100;
$canp_FLY_DOORN = ($rbench['flyer'][9])/$rbench['flyer'][0] * 100;
$canp_FLY_DOORS = ($rbench['flyer'][10])/$rbench['flyer'][0] * 100;
$canp_FLY_DOORO = ($rbench['flyer'][11])/$rbench['flyer'][0] * 100;
$canp_FLY_DOORF = ($rbench['flyer'][12])/$rbench['flyer'][0] * 100;

$canp_FLY_GIWEBN = 55.000532668949;
$canp_FLY_GIWEBS = 23.3105940658535;
$canp_FLY_GIWEBO = 17.3538682094937;
$canp_FLY_GIWEBF = 4.33506730905369;
$canp_FLY_STOREN = ($rbench['flyer1'][5])/$rbench['flyer1'][0] * 100;
$canp_FLY_STORES = ($rbench['flyer1'][6])/$rbench['flyer1'][0] * 100;
$canp_FLY_STOREO = ($rbench['flyer1'][7])/$rbench['flyer1'][0] * 100;
$canp_FLY_STOREF = ($rbench['flyer1'][8])/$rbench['flyer1'][0] * 100;
$canp_FLY_MAILN = ($rbench['flyer1'][9])/$rbench['flyer1'][0] * 100;
$canp_FLY_MAILS = ($rbench['flyer1'][10])/$rbench['flyer1'][0] * 100;
$canp_FLY_MAILO = ($rbench['flyer1'][11])/$rbench['flyer1'][0] * 100;
$canp_FLY_MAILF = ($rbench['flyer1'][12])/$rbench['flyer1'][0] * 100;
$canp_FLY_CPWEBN = ($rbench['flyer1'][13])/$rbench['flyer1'][0] * 100;
$canp_FLY_CPWEBS = ($rbench['flyer1'][14])/$rbench['flyer1'][0] * 100;
$canp_FLY_CPWEBO = ($rbench['flyer1'][15])/$rbench['flyer1'][0] * 100;
$canp_FLY_CPWEBF = ($rbench['flyer1'][16])/$rbench['flyer1'][0] * 100;
$canp_FLY_YPPN = 74.1103899208318;
$canp_FLY_YPPS = 16.374033570796;
$canp_FLY_YPPO = 8.72753848651614;
$canp_FLY_YPPF = 0.789010682781119;
$canp_FLY_YPON = 82.9004010037457;
$canp_FLY_YPOS = 11.4719973615833;
$canp_FLY_YPOO = 4.87633451661278;
$canp_FLY_YPOF = 0.751233882194853;
$canp_FLY_ATTVF = ($rbench['flyer1'][17])/$rbench['flyer1'][0] * 100;
$canp_FLY_ATTSF = ($rbench['flyer1'][18])/$rbench['flyer1'][0] * 100;
$canp_FLY_ATTSU = ($rbench['flyer1'][19])/$rbench['flyer1'][0] * 100;
$canp_FLY_ATTVU = ($rbench['flyer1'][20])/$rbench['flyer1'][0] * 100;
$canp_FLY_SSDAY = ($rbench['flyer1'][21])/$rbench['flyer1'][0] * 100;
$canp_FLY_SSWK = ($rbench['flyer1'][22])/$rbench['flyer1'][0] * 100;
$canp_FLY_SWKL = ($rbench['flyer1'][23])/$rbench['flyer1'][0] * 100;
$canp_FLY_WSDAY = ($rbench['flyer1'][24])/$rbench['flyer1'][0] * 100;
$canp_FLY_WSWK = ($rbench['flyer1'][25])/$rbench['flyer1'][0] * 100;
$canp_FLY_WWKL = ($rbench['flyer1'][26])/$rbench['flyer1'][0] * 100;

$hhcLS_ADVSP = ($rbench['leisure'][0])/$rbench['media'][0] * 100;
$hhcLS_CRFT = ($rbench['leisure'][1])/$rbench['media'][0] * 100;

$hhcLS_BSBL = ($rbench['leisure'][3])/$rbench['media'][0] * 100;
$hhcLS_BSKBL = ($rbench['leisure'][4])/$rbench['media'][0] * 100;
$hhcLS_BLLDS = ($rbench['leisure'][5])/$rbench['media'][0] * 100;
$hhcLS_BOWL = ($rbench['leisure'][6])/$rbench['media'][0] * 100;

$hhcLS_CANOE = ($rbench['leisure'][8])/$rbench['media'][0] * 100;
$hhcLS_CURL = ($rbench['leisure'][9])/$rbench['media'][0] * 100;
$hhcLS_CYCL = ($rbench['leisure'][10])/$rbench['media'][0] * 100;
$hhcLS_FSHT = ($rbench['leisure'][11])/$rbench['media'][0] * 100;
$hhcLS_FITWK = ($rbench['leisure'][12])/$rbench['media'][0] * 100;
$hhcLS_FITAER = ($rbench['leisure'][13])/$rbench['media'][0] * 100;
$hhcLS_FTBL = ($rbench['leisure'][14])/$rbench['media'][0] * 100;
$hhcLS_GARD = ($rbench['leisure'][15])/$rbench['media'][0] * 100;
$hhcLS_GOLF = ($rbench['leisure'][16])/$rbench['media'][0] * 100;
$hhcLS_CLUB = ($rbench['leisure'][17])/$rbench['media'][0] * 100;
$hhcLS_HIK = ($rbench['leisure'][18])/$rbench['media'][0] * 100;
$hhcLS_HOCKY = ($rbench['leisure'][19])/$rbench['media'][0] * 100;
$hhcLS_HMEXC = ($rbench['leisure'][20])/$rbench['media'][0] * 100;
$hhcLS_ICSKT = ($rbench['leisure'][21])/$rbench['media'][0] * 100;
$hhcLS_ILSKT = ($rbench['leisure'][22])/$rbench['media'][0] * 100;
$hhcLS_JOG = ($rbench['leisure'][23])/$rbench['media'][0] * 100;
$hhcLS_MRTHN = ($rbench['leisure'][24])/$rbench['media'][0] * 100;
$hhcLS_YOGA = ($rbench['leisure'][25])/$rbench['media'][0] * 100;
$hhcLS_VIDEO = ($rbench['leisure'][26])/$rbench['media'][0] * 100;
$hhcLS_PWBT = ($rbench['leisure'][27])/$rbench['media'][0] * 100;
$hhcLS_RACSP = ($rbench['leisure'][28])/$rbench['media'][0] * 100;

$hhcLS_SKBRD = ($rbench['leisure'][30])/$rbench['media'][0] * 100;
$hhcLS_SKCRS = ($rbench['leisure'][31])/$rbench['media'][0] * 100;
$hhcLS_SKDWH = ($rbench['leisure'][32])/$rbench['media'][0] * 100;
$hhcLS_SNBRD = ($rbench['leisure'][33])/$rbench['media'][0] * 100;
$hhcLS_SNWMB = ($rbench['leisure'][34])/$rbench['media'][0] * 100;
$hhcLS_SCCER = ($rbench['leisure'][35])/$rbench['media'][0] * 100;
$hhcLS_SWM = ($rbench['leisure'][36])/$rbench['media'][0] * 100;
$hhcLS_WHLWT = ($rbench['leisure'][37])/$rbench['media'][0] * 100;


for ( $i = 1; $i <= 14; $i ++) {
	$leisure2["canada"][] = ($rbench['leisure2'][$i])/$rbench['leisure2'][0] * 100;
}
for ( $i = 15; $i <= 29; $i ++) {
	$leisure3["canada"][] = ($rbench['leisure2'][$i])/$rbench['leisure2'][0] * 100;
}
for ( $i = 30; $i <=  42; $i ++) {
	$leisure4["canada"][] = ($rbench['leisure2'][$i])/$rbench['leisure2'][0] * 100;
}

for ( $i = 0; $i <= 17; $i ++) {
	$agg_valuesc['segment'][$i] = $rbench['segment'][$i];
}

for ( $i = 1; $i <= 4; $i ++) {
	$internet1['canada'][] = $rbench['internet'][$i]/$rbench['internet'][0] * 100;
}
for ( $i = 5; $i <= 10; $i ++) {
	$internet2['canada'][] = $rbench['internet'][$i]/$rbench['internet'][0] * 100;
}
for ( $i = 11; $i <= 53; $i ++) {
	$internet3['canada'][] = $rbench['internet'][$i]/$rbench['internet'][0] * 100;
}

$cAU_N0 = $rbench['auto'][2] / $rbench['auto'][0] *100;	
$cAU_N1 = $rbench['auto'][3] / $rbench['auto'][0] *100;	
$cAU_N2 = $rbench['auto'][4] / $rbench['auto'][0] *100;	
$cAU_N3 = $rbench['auto'][5] / $rbench['auto'][0] *100;	
$cAU_N4_ = $rbench['auto'][6] / $rbench['auto'][0] *100;	
$cAU_KM0 = $rbench['auto'][7] / $rbench['auto'][1] *100;	
$cAU_KM1_9 = $rbench['auto'][8] / $rbench['auto'][1] *100;	
$cAU_KM10_19 = $rbench['auto'][9] / $rbench['auto'][1] *100;	
$cAU_KM20_29 = $rbench['auto'][10] / $rbench['auto'][1] *100;	
$cAU_KM30_ = $rbench['auto'][11] / $rbench['auto'][1] *100;	
$cAU_MKBUI = $rbench['auto'][12] / $rbench['auto'][1] *100;	
$cAU_MKCAD = $rbench['auto'][13] / $rbench['auto'][1] *100;	
$cAU_MKCHE = $rbench['auto'][14] / $rbench['auto'][1] *100;	
$cAU_MKCHR = $rbench['auto'][15] / $rbench['auto'][1] *100;	
$cAU_MKDOD = $rbench['auto'][16] / $rbench['auto'][1] *100;	
$cAU_MKFOR = $rbench['auto'][17] / $rbench['auto'][1] *100;	
$cAU_MKGMC = $rbench['auto'][18] / $rbench['auto'][1] *100;	
$cAU_MKJEE = $rbench['auto'][19] / $rbench['auto'][1] *100;	
$cAU_MKLIN = $rbench['auto'][20] / $rbench['auto'][1] *100;	
$cAU_MKMER = $rbench['auto'][21] / $rbench['auto'][1] *100;	
$cAU_MKOLD = $rbench['auto'][22] / $rbench['auto'][1] *100;	
$cAU_MKPLY = $rbench['auto'][23] / $rbench['auto'][1] *100;	
$cAU_MKPON = $rbench['auto'][24] / $rbench['auto'][1] *100;	
$cAU_MKSAT = $rbench['auto'][25] / $rbench['auto'][1] *100;	
$cAU_MKDOM = $rbench['auto'][26] / $rbench['auto'][1] *100;	
$cAU_MKACU = $rbench['auto'][27] / $rbench['auto'][1] *100;	
$cAU_MKAU_D = $rbench['auto'][28] / $rbench['auto'][1] *100;	
$cAU_MKBMW = $rbench['auto'][29] / $rbench['auto'][1] *100;	
$cAU_MKHON = $rbench['auto'][30] / $rbench['auto'][1] *100;	
$cAU_MKHYU = $rbench['auto'][31] / $rbench['auto'][1] *100;	
$cAU_MKINF = $rbench['auto'][32] / $rbench['auto'][1] *100;	
$cAU_MKKIA = $rbench['auto'][33] / $rbench['auto'][1] *100;	
$cAU_MKLEX = $rbench['auto'][34] / $rbench['auto'][1] *100;	
$cAU_MKMAZ = $rbench['auto'][35] / $rbench['auto'][1] *100;	
$cAU_MKBEN = $rbench['auto'][36] / $rbench['auto'][1] *100;	
$cAU_MKMIT = $rbench['auto'][37] / $rbench['auto'][1] *100;	
$cAU_MKNIS = $rbench['auto'][38] / $rbench['auto'][1] *100;	
$cAU_MKSUB = $rbench['auto'][39] / $rbench['auto'][1] *100;	
$cAU_MKSUZ = $rbench['auto'][40] / $rbench['auto'][1] *100;	
$cAU_MKTOY = $rbench['auto'][41] / $rbench['auto'][1] *100;	
$cAU_MKVW = $rbench['auto'][42] / $rbench['auto'][1] *100;	
$cAU_MKVOL = $rbench['auto'][43] / $rbench['auto'][1] *100;	
$cAU_MKFGN = $rbench['auto'][44] / $rbench['auto'][1] *100;	
$cAU_TPMFS = $rbench['auto'][45] / $rbench['auto'][1] *100;	
$cAU_TPSCOMP = $rbench['auto'][46] / $rbench['auto'][1] *100;	
$cAU_TPSPO = $rbench['auto'][47] / $rbench['auto'][1] *100;	
$cAU_TPMVSW = $rbench['auto'][48] / $rbench['auto'][1] *100;	
$cAU_TPSUV = $rbench['auto'][49] / $rbench['auto'][1] *100;	
$cAU_TPPIC = $rbench['auto'][50] / $rbench['auto'][1] *100;	
$cAU_TPFVAN = $rbench['auto'][51] / $rbench['auto'][1] *100;	
$cAU_TPOTH = $rbench['auto'][52] / $rbench['auto'][1] *100;	
$cAU_YR13_ = $rbench['auto'][53] / $rbench['auto'][1] *100;	
$cAU_YR12 = $rbench['auto'][54] / $rbench['auto'][1] *100;	
$cAU_YR11 = $rbench['auto'][55] / $rbench['auto'][1] *100;	
$cAU_YR10 = $rbench['auto'][56] / $rbench['auto'][1] *100;	
$cAU_YR09 = $rbench['auto'][57] / $rbench['auto'][1] *100;	
$cAU_YR08 = $rbench['auto'][58] / $rbench['auto'][1] *100;	
$cAU_YR07 = $rbench['auto'][59] / $rbench['auto'][1] *100;	
$cAU_YR06 = $rbench['auto'][60] / $rbench['auto'][1] *100;	
$cAU_YR05 = $rbench['auto'][61] / $rbench['auto'][1] *100;	
$cAU_YR04 = $rbench['auto'][62] / $rbench['auto'][1] *100;	
$cAU_YR03 = $rbench['auto'][63] / $rbench['auto'][1] *100;	
$cAU_YR_02 = $rbench['auto'][64] / $rbench['auto'][1] *100;	
$cAU_YRNO = $rbench['auto'][65] / $rbench['auto'][1] *100;	
$cAU_NEWBN = $rbench['auto'][66] / $rbench['auto'][1] *100;	
$cAU_NEWBU = $rbench['auto'][67] / $rbench['auto'][1] *100;	
$cAU_NEWLN = $rbench['auto'][68] / $rbench['auto'][1] *100;	
$cAU_NEWLU = $rbench['auto'][69] / $rbench['auto'][1] *100;	
$cAU_NEWNO = $rbench['auto'][70] / $rbench['auto'][1] *100;	

$cAU_BUYERN = $rbench['auto'][165] / $rbench['auto'][1] *100;	 
$cAU_BUYERM =32.3648;
$cAU_BUYERP =44.4708;
$cAU_PUN  =  $rbench['auto'][166] / $rbench['auto'][1] *100;	
$cAU_PUPN = $rbench['auto'][167] / $rbench['auto'][1] *100;	
$cAU_PUPU = $rbench['auto'][168] / $rbench['auto'][1] *100;	
$cAU_PULN = $rbench['auto'][169] / $rbench['auto'][1] *100;	
$cAU_PULU = $rbench['auto'][170] / $rbench['auto'][1] *100;	

$cAU_V_9 = $rbench['auto'][71] / $rbench['auto'][1] *100;
$cAU_V10_14 = $rbench['auto'][72] / $rbench['auto'][1] *100;
$cAU_V15_19 = $rbench['auto'][73] / $rbench['auto'][1] *100;
$cAU_V20_24 = $rbench['auto'][74] / $rbench['auto'][1] *100;
$cAU_V25_29 = $rbench['auto'][75] / $rbench['auto'][1] *100;
$cAU_V30_39 = $rbench['auto'][76] / $rbench['auto'][1] *100;
$cAU_V40_ = $rbench['auto'][77] / $rbench['auto'][1] *100;

$cAU_LSEDP =2.1237;
$cAU_LSEDR =4.0825;

$cAU_PPUP = $rbench['auto'][78] / $rbench['auto'][1] *100;
$cAU_PPULP = $rbench['auto'][79] / $rbench['auto'][1] *100;
$cAU_PPULN = $rbench['auto'][80] / $rbench['auto'][1] *100;
$cAU_PPUN = $rbench['auto'][81] / $rbench['auto'][1] *100;
$cAU_PV_9 = $rbench['auto'][82] / $rbench['auto'][1] *100;
$cAU_PV10_14 = $rbench['auto'][83] / $rbench['auto'][1] *100;
$cAU_PV15_19 = $rbench['auto'][84] / $rbench['auto'][1] *100;
$cAU_PV20_24 = $rbench['auto'][85] / $rbench['auto'][1] *100;
$cAU_PV25_29 = $rbench['auto'][86] / $rbench['auto'][1] *100;
$cAU_PV30_39 = $rbench['auto'][87] / $rbench['auto'][1] *100;
$cAU_PV40_ = $rbench['auto'][88] / $rbench['auto'][1] *100;
$cAU_PTPSED = $rbench['auto'][89] / $rbench['auto'][1] *100;
$cAU_PTPSCOM = $rbench['auto'][90] / $rbench['auto'][1] *100;
$cAU_PTPSPO = $rbench['auto'][91] / $rbench['auto'][1] *100;
$cAU_PTPMVSW = $rbench['auto'][92] / $rbench['auto'][1] *100;
$cAU_PTPSUV = $rbench['auto'][93] / $rbench['auto'][1] *100;
$cAU_PTPPIC = $rbench['auto'][94] / $rbench['auto'][1] *100;
$cAU_PTPFVAN = $rbench['auto'][95] / $rbench['auto'][1] *100;
$cAU_PTPOTH = $rbench['auto'][96] / $rbench['auto'][1] *100;

$cAU_PHBC =1.6606;
$cAU_PHBLC =2.875;
$cAU_PHBLN =5.4368;
$cAU_PHBN =4.9069;
$cAU_XMN =75.9844;
$cAU_XMY =9.0343;
$cAU_MBCLUB =37.6872;
$cAU_MBMANU =20.4455;
$cAU_MBSTAR =3.2164;
$cAU_INSSVI =56.1917;
$cAU_INSSSI =13.9045;
$cAU_INSSNVI =6.0652;
$cAU_INSSNAI =8.5037;
$cAU_INSSNAV =0.3922;

$cAU_MNBDN = $rbench['auto'][97] / $rbench['auto'][1] *100;
$cAU_MNBDG = $rbench['auto'][98] / $rbench['auto'][1] *100;
$cAU_MNBDD = $rbench['auto'][99] / $rbench['auto'][1] *100;
$cAU_MNBDS = $rbench['auto'][100] / $rbench['auto'][1] *100;
$cAU_MNBDL = $rbench['auto'][101] / $rbench['auto'][1] *100;
$cAU_MNBDF = $rbench['auto'][102] / $rbench['auto'][1] *100;
$cAU_MNBDU = $rbench['auto'][103] / $rbench['auto'][1] *100;
$cAU_MNOCN = $rbench['auto'][104] / $rbench['auto'][1] *100;
$cAU_MNOCG = $rbench['auto'][105] / $rbench['auto'][1] *100;
$cAU_MNOCD = $rbench['auto'][106] / $rbench['auto'][1] *100;
$cAU_MNOCS = $rbench['auto'][107] / $rbench['auto'][1] *100;
$cAU_MNOCL = $rbench['auto'][108] / $rbench['auto'][1] *100;
$cAU_MNOCF = $rbench['auto'][109] / $rbench['auto'][1] *100;
$cAU_MNOCU = $rbench['auto'][110] / $rbench['auto'][1] *100;

$cAU_MNPTN =68.5295;
$cAU_MNPTG =0.4181;
$cAU_MNPTD =3.005;
$cAU_MNPTS =8.3078;
$cAU_MNPTL =1.7123;
$cAU_MNPTF =1.3608;
$cAU_MNPTU =1.6044;
$cAU_MPFMN =72.6501;
$cAU_MPFMG =1.5619;
$cAU_MPFMD =3.3239;
$cAU_MPFMS =2.5968;
$cAU_MPFML =1.7403;
$cAU_MPFMF =1.3313;
$cAU_MPFMU =1.7556;
$cAU_MNTMN =70.4775;
$cAU_MNTMG =2.0789;
$cAU_MNTMD =4.0446;
$cAU_MNTMS =4.6348;
$cAU_MNTML =0.7094;
$cAU_MNTMF =1.2039;
$cAU_MNTMU =1.8322;
$cAU_MNBKN = $rbench['auto'][111] / $rbench['auto'][1] *100;
$cAU_MNBKG = $rbench['auto'][112] / $rbench['auto'][1] *100;
$cAU_MNBKD = $rbench['auto'][113] / $rbench['auto'][1] *100;
$cAU_MNBKS = $rbench['auto'][114] / $rbench['auto'][1] *100;
$cAU_MNBKL = $rbench['auto'][115] / $rbench['auto'][1] *100;
$cAU_MNBKF = $rbench['auto'][116] / $rbench['auto'][1] *100;
$cAU_MNBKU = $rbench['auto'][117] / $rbench['auto'][1] *100;
$cAU_MNWDN =64.2941;
$cAU_MNWDG =1.5212;
$cAU_MNWDD =2.3468;
$cAU_MNWDS =13.2933;
$cAU_MNWDL =0.9846;
$cAU_MNWDF =0.9817;
$cAU_MNWDU =1.5921;
$cAU_MNTRN = $rbench['auto'][118] / $rbench['auto'][1] *100;
$cAU_MNTRG = $rbench['auto'][119] / $rbench['auto'][1] *100;
$cAU_MNTRD = $rbench['auto'][120] / $rbench['auto'][1] *100;
$cAU_MNTRS = $rbench['auto'][121] / $rbench['auto'][1] *100;
$cAU_MNTRL = $rbench['auto'][122] / $rbench['auto'][1] *100;
$cAU_MNTRF = $rbench['auto'][123] / $rbench['auto'][1] *100;
$cAU_MNTRU = $rbench['auto'][124] / $rbench['auto'][1] *100;

$cAU_MNMFN =61.5965;
$cAU_MNMFG =4.635;
$cAU_MNMFD =4.5711;
$cAU_MNMFS =8.1981;
$cAU_MNMFL =1.8166;
$cAU_MNMFF =2.2117;
$cAU_MNMFU =1.8676;
$cAU_MNRPN = $rbench['auto'][125] / $rbench['auto'][1] *100;
$cAU_MNRPG = $rbench['auto'][126] / $rbench['auto'][1] *100;
$cAU_MNRPD = $rbench['auto'][127] / $rbench['auto'][1] *100;
$cAU_MNRPS = $rbench['auto'][128] / $rbench['auto'][1] *100;
$cAU_MNRPL = $rbench['auto'][129] / $rbench['auto'][1] *100;
$cAU_MNRPF = $rbench['auto'][130] / $rbench['auto'][1] *100;
$cAU_MNRPU = $rbench['auto'][131] / $rbench['auto'][1] *100;
$cAU_MNTPN = $rbench['auto'][132] / $rbench['auto'][1] *100;
$cAU_MNTPG = $rbench['auto'][133] / $rbench['auto'][1] *100;
$cAU_MNTPD = $rbench['auto'][134] / $rbench['auto'][1] *100;
$cAU_MNTPS = $rbench['auto'][135] / $rbench['auto'][1] *100;
$cAU_MNTPL = $rbench['auto'][136] / $rbench['auto'][1] *100;
$cAU_MNTPF = $rbench['auto'][137] / $rbench['auto'][1] *100;
$cAU_MNTPU = $rbench['auto'][138] / $rbench['auto'][1] *100;

$cAU_MNOTN =44.7381;
$cAU_MNOTG =7.4943;
$cAU_MNOTD =14.1358;
$cAU_MNOTS =12.0981;
$cAU_MNOTL =1.8286;
$cAU_MNOTF =2.5993;
$cAU_MNOTU =2.0755;
$cAU_VSGR = $rbench['auto'][139] / $rbench['auto'][1] *100;
$cAU_VSAG = $rbench['auto'][140] / $rbench['auto'][1] *100;
$cAU_VSST = $rbench['auto'][141] / $rbench['auto'][1] *100;
$cAU_VSCT = $rbench['auto'][142] / $rbench['auto'][1] *100;
$cAU_VSCC = $rbench['auto'][143] / $rbench['auto'][1] *100;
$cAU_VSGM = $rbench['auto'][144] / $rbench['auto'][1] *100;
$cAU_VSGY = $rbench['auto'][145] / $rbench['auto'][1] *100;
$cAU_VSMC = $rbench['auto'][146] / $rbench['auto'][1] *100;
$cAU_VSMD = $rbench['auto'][147] / $rbench['auto'][1] *100;
$cAU_VSTR = $rbench['auto'][148] / $rbench['auto'][1] *100;
$cAU_VSLB = $rbench['auto'][149] / $rbench['auto'][1] *100;
$cAU_VSNP = $rbench['auto'][150] / $rbench['auto'][1] *100;
$cAU_VSOKT = $rbench['auto'][151] / $rbench['auto'][1] *100;
$cAU_VSPS = $rbench['auto'][152] / $rbench['auto'][1] *100;
$cAU_VSSG = $rbench['auto'][153] / $rbench['auto'][1] *100;
$cAU_VSSS = $rbench['auto'][154] / $rbench['auto'][1] *100;
$cAU_VSWM = $rbench['auto'][155] / $rbench['auto'][1] *100;
$cAU_VSDL = $rbench['auto'][156] / $rbench['auto'][1] *100;
$cAU_VSCTCW = $rbench['auto'][157] / $rbench['auto'][1] *100;
$cAU_VSOT = $rbench['auto'][158] / $rbench['auto'][1] *100;
$cAU_GASCT = $rbench['auto'][159] / $rbench['auto'][1] *100;
$cAU_GASCR = $rbench['auto'][160] / $rbench['auto'][1] *100;
$cAU_GASES = $rbench['auto'][161] / $rbench['auto'][1] *100;
$cAU_GASPT = $rbench['auto'][162] / $rbench['auto'][1] *100;
$cAU_GASSL = $rbench['auto'][163] / $rbench['auto'][1] *100;
$cAU_GASOT = $rbench['auto'][164] / $rbench['auto'][1] *100;

$cAU_GFCT1 =4.7227;
$cAU_GFCT2_3 =4.1517;
$cAU_GFCT4 =1.809;
$cAU_GFCT529 =0.3371;
$cAU_GFCT30_ =0.0545;
$cAU_GFCR1 =2.2506;
$cAU_GFCR2_3 =2.4839;
$cAU_GFCR4 =0.8089;
$cAU_GFCR529 =0.1909;
$cAU_GFCR30_ =0;
$cAU_GFES1 =9.9144;
$cAU_GFES2_3 =9.3015;
$cAU_GFES4 =3.8907;
$cAU_GFES529 =0.9089;
$cAU_GFES30_ =0.0697;
$cAU_GFPT1 =9.7657;
$cAU_GFPT2_3 =10.2338;
$cAU_GFPT4 =4.7375;
$cAU_GFPT529 =0.9119;
$cAU_GFPT30_ =0.0324;
$cAU_GFSL1 =9.2114;
$cAU_GFSL2_3 =8.8211;
$cAU_GFSL4 =4.1782;
$cAU_GFSL529 =0.8801;
$cAU_GFSL30_ =0.0908;
$cAU_GFOT1 =11.8556;
$cAU_GFOT2_3 =21.1198;
$cAU_GFOT4 =13.2591;
$cAU_GFOT529 =2.4854;
$cAU_GFOT30_ =0.1558;
$cAU_RTAV =2.3066;
$cAU_RTBG =3.3251;
$cAU_RTDC =1.512;
$cAU_RTEP =4.8859;
$cAU_RTHZ =1.8696;
$cAU_RTNN =1.3662;
$cAU_RTTT =0.9089;
$cAU_RTUH =1.3176;
$cAU_RTOT =1.7022;
$cAU_RPAVP =1.4906;
$cAU_RPAVB =0.676;
$cAU_RPAV2 =0.1414;
$cAU_RPBGP =2.3392;
$cAU_RPBGB =0.8403;
$cAU_RPBG2 =0.1468;
$cAU_RPDCP =1.0657;
$cAU_RPDCB =0.3455;
$cAU_RPDC2 =0.0943;
$cAU_RPEPP =3.55;
$cAU_RPEPB =0.9376;
$cAU_RPEP2 =0.401;
$cAU_RPHZP =1.3431;
$cAU_RPHZB =0.3984;
$cAU_RPHZ2 =0.1259;
$cAU_RPNNP =0.924;
$cAU_RPNNB =0.3267;
$cAU_RPNN2 =0.1116;
$cAU_RPTTP =0.701;
$cAU_RPTTB =0.1931;
$cAU_RPTT2 =0.0123;
$cAU_RPUHP =1.1614;
$cAU_RPUHB =0.1272;
$cAU_RPUH2 =0.0191;
$cAU_RPOTP =1.5141;
$cAU_RPOTB =0.1368;
$cAU_RPOT2 =0.0424;
$cAU_RFAV1_3 =2.0157;
$cAU_RFAV4_ =0.2907;
$cAU_RFBG1_3 =3.0778;
$cAU_RFBG4_ =0.2469;
$cAU_RFDC1_3 =1.43;
$cAU_RFDC4_ =0.0792;
$cAU_RFEP1_3 =4.2921;
$cAU_RFEP4_ =0.5934;
$cAU_RFHZ1_3 =1.768;
$cAU_RFHZ4_ =0.1032;
$cAU_RFNN1_3 =1.1922;
$cAU_RFNN4_ =0.1715;
$cAU_RFTT1_3 =0.8823;
$cAU_RFTT4_ =0.0241;
$cAU_RFUH1_3 =1.2978;
$cAU_RFUH4_ =0.0034;
$cAU_RFOT1_3 =1.6063;
$cAU_RFOT4_ =0.0924;


$cDW_PUNEW = $rbench['improve'][2] / $rbench['improve'][0] * 100;
$cDW_PUOWN = $rbench['improve'][3] / $rbench['improve'][0] * 100;
$cDW_N1STHM = $rbench['improve'][4] / $rbench['improve'][0] * 100;
$cDW_1STHM = $rbench['improve'][5] / $rbench['improve'][0] * 100;
$cDW_RE1Y = $rbench['improve'][6] / $rbench['improve'][0] * 100;
$cDW_RE5Y = $rbench['improve'][7] / $rbench['improve'][0] * 100;
$cDW_RE10Y = $rbench['improve'][8] / $rbench['improve'][0] * 100;
$cDW_RE19Y = $rbench['improve'][9] / $rbench['improve'][0] * 100;
$cDW_RE20_Y = $rbench['improve'][10] / $rbench['improve'][0] * 100;
$cDW_RASPACE = $rbench['improve'][11] / $rbench['improve'][0] * 100;
$cDW_RAGARG = $rbench['improve'][12] / $rbench['improve'][0] * 100;
$cDW_RADRAP = $rbench['improve'][13] / $rbench['improve'][0] * 100;
$cDW_RADECK = $rbench['improve'][14] / $rbench['improve'][0] * 100;
$cDW_RAELEC = $rbench['improve'][15] / $rbench['improve'][0] * 100;
$cDW_RAENG = $rbench['improve'][16] / $rbench['improve'][0] * 100;
$cDW_RAEPAIN = $rbench['improve'][17] / $rbench['improve'][0] * 100;
$cDW_RATILE = $rbench['improve'][18] / $rbench['improve'][0] * 100;
$cDW_RAFLOO = $rbench['improve'][19] / $rbench['improve'][0] * 100;
$cDW_RAHVAC = $rbench['improve'][20] / $rbench['improve'][0] * 100;
$cDW_RASECU = $rbench['improve'][21] / $rbench['improve'][0] * 100;
$cDW_RAWIND = $rbench['improve'][22] / $rbench['improve'][0] * 100;
$cDW_RAIPAIN = $rbench['improve'][23] / $rbench['improve'][0] * 100;
$cDW_RALAND = $rbench['improve'][24] / $rbench['improve'][0] * 100;
$cDW_RAPLUM = $rbench['improve'][25] / $rbench['improve'][0] * 100;
$cDW_RABATH = $rbench['improve'][26] / $rbench['improve'][0] * 100;
$cDW_RAKITC = $rbench['improve'][27] / $rbench['improve'][0] * 100;
$cDW_RAORM = $rbench['improve'][28] / $rbench['improve'][0] * 100;
$cDW_RAROOF = $rbench['improve'][29] / $rbench['improve'][0] * 100;
$cDW_RAPOOL = $rbench['improve'][30] / $rbench['improve'][0] * 100;
$cDW_RACARP = $rbench['improve'][31] / $rbench['improve'][0] * 100;
$cDW_RAOTHE = $rbench['improve'][32] / $rbench['improve'][0] * 100;
$cDW_HMINSP = $rbench['improve'][33] / $rbench['improve'][0] * 100;
$cDW_MTGBRK = $rbench['improve'][34] / $rbench['improve'][0] * 100;
$cDW_MVCOMP = $rbench['improve'][35] / $rbench['improve'][0] * 100;
$cDW_REAGNT = $rbench['improve'][36] / $rbench['improve'][0] * 100;
$cDW_RELAWY = $rbench['improve'][37] / $rbench['improve'][0] * 100;
$cDW_PHMINSP = $rbench['improve'][38] / $rbench['improve'][0] * 100;
$cDW_PMTGBRK = $rbench['improve'][39] / $rbench['improve'][0] * 100;
$cDW_PMVCOMP = $rbench['improve'][40] / $rbench['improve'][0] * 100;
$cDW_PREAGNT = $rbench['improve'][41] / $rbench['improve'][0] * 100;
$cDW_PRELAWY = $rbench['improve'][42] / $rbench['improve'][0] * 100;
$cDW_SPSELF = $rbench['improve'][43] / $rbench['improve'][0] * 100;
$cDW_SPCONT = $rbench['improve'][44] / $rbench['improve'][0] * 100;
$cDW_GRGSELF = $rbench['improve'][45] / $rbench['improve'][0] * 100;
$cDW_GRGCONT = $rbench['improve'][46] / $rbench['improve'][0] * 100;
$cDW_DRSELF = $rbench['improve'][47] / $rbench['improve'][0] * 100;
$cDW_DRCONT = $rbench['improve'][48] / $rbench['improve'][0] * 100;
$cDW_DKSELF = $rbench['improve'][49] / $rbench['improve'][0] * 100;
$cDW_DKCONT = $rbench['improve'][50] / $rbench['improve'][0] * 100;
$cDW_ELSELF = $rbench['improve'][51] / $rbench['improve'][0] * 100;
$cDW_ELCONT = $rbench['improve'][52] / $rbench['improve'][0] * 100;
$cDW_ENSELF = $rbench['improve'][53] / $rbench['improve'][0] * 100;
$cDW_ENCONT = $rbench['improve'][54] / $rbench['improve'][0] * 100;
$cDW_EPSELF = $rbench['improve'][55] / $rbench['improve'][0] * 100;
$cDW_EPCONT = $rbench['improve'][56] / $rbench['improve'][0] * 100;
$cDW_TISELF = $rbench['improve'][57] / $rbench['improve'][0] * 100;
$cDW_TICONT = $rbench['improve'][58] / $rbench['improve'][0] * 100;
$cDW_FLSELF = $rbench['improve'][59] / $rbench['improve'][0] * 100;
$cDW_FLCONT = $rbench['improve'][60] / $rbench['improve'][0] * 100;
$cDW_HVSELF = $rbench['improve'][61] / $rbench['improve'][0] * 100;
$cDW_HVCONT = $rbench['improve'][62] / $rbench['improve'][0] * 100;
$cDW_SESELF = $rbench['improve'][63] / $rbench['improve'][0] * 100;
$cDW_SECONT = $rbench['improve'][64] / $rbench['improve'][0] * 100;
$cDW_WISELF = $rbench['improve'][65] / $rbench['improve'][0] * 100;
$cDW_WICONT = $rbench['improve'][66] / $rbench['improve'][0] * 100;
$cDW_IPSELF = $rbench['improve'][67] / $rbench['improve'][0] * 100;
$cDW_IPCONT = $rbench['improve'][68] / $rbench['improve'][0] * 100;
$cDW_LASELF = $rbench['improve'][69] / $rbench['improve'][0] * 100;
$cDW_LACONT = $rbench['improve'][70] / $rbench['improve'][0] * 100;
$cDW_PLSELF = $rbench['improve'][71] / $rbench['improve'][0] * 100;
$cDW_PLCONT = $rbench['improve'][72] / $rbench['improve'][0] * 100;
$cDW_BTSELF = $rbench['improve'][73] / $rbench['improve'][0] * 100;
$cDW_BTCONT = $rbench['improve'][74] / $rbench['improve'][0] * 100;
$cDW_KISELF = $rbench['improve'][75] / $rbench['improve'][0] * 100;
$cDW_KICONT = $rbench['improve'][76] / $rbench['improve'][0] * 100;
$cDW_ORSELF = $rbench['improve'][77] / $rbench['improve'][0] * 100;
$cDW_ORCONT = $rbench['improve'][78] / $rbench['improve'][0] * 100;
$cDW_RFSELF = $rbench['improve'][79] / $rbench['improve'][0] * 100;
$cDW_RFCONT = $rbench['improve'][80] / $rbench['improve'][0] * 100;
$cDW_POSELF = $rbench['improve'][81] / $rbench['improve'][0] * 100;
$cDW_POCONT = $rbench['improve'][82] / $rbench['improve'][0] * 100;
$cDW_CPSELF = $rbench['improve'][83] / $rbench['improve'][0] * 100;
$cDW_CPCONT = $rbench['improve'][84] / $rbench['improve'][0] * 100;
$cDW_OHSELF = $rbench['improve'][85] / $rbench['improve'][0] * 100;
$cDW_OHCONT = $rbench['improve'][86] / $rbench['improve'][0] * 100;
$cDW_SP0 = $rbench['improve'][87] / $rbench['improve'][0] * 100;
$cDW_SP999 = $rbench['improve'][88] / $rbench['improve'][0] * 100;
$cDW_SP2499 = $rbench['improve'][89] / $rbench['improve'][0] * 100;
$cDW_SP4999 = $rbench['improve'][90] / $rbench['improve'][0] * 100;
$cDW_SP9999 = $rbench['improve'][91] / $rbench['improve'][0] * 100;
$cDW_SP19999 = $rbench['improve'][92] / $rbench['improve'][0] * 100;
$cDW_SP20000 = $rbench['improve'][93] / $rbench['improve'][0] * 100;
$cDW_NALARM = $rbench['improve'][94] / $rbench['improve'][0] * 100;
$cDW_ALARM = $rbench['improve'][95] / $rbench['improve'][0] * 100;
$cDW_GDSERV = $rbench['improve'][96] / $rbench['improve'][0] * 100;
$cDW_MDSERV = $rbench['improve'][97] / $rbench['improve'][0] * 100;
$cDW_PCSERV = $rbench['improve'][98] / $rbench['improve'][0] * 100;

$cDW_SINGLE = $rbench['improve'][100] / $rbench['improve'][0] * 100;
$cDW_APT5_ = $rbench['improve'][101] / $rbench['improve'][0] * 100;
$cDW_MOVA = $rbench['improve'][102] / $rbench['improve'][0] * 100;
$cDW_OT = $rbench['improve'][103] / $rbench['improve'][0] * 100;
$cDW_SEMI = $rbench['improve'][104] / $rbench['improve'][0] * 100;
$cDW_DUP = $rbench['improve'][105] / $rbench['improve'][0] * 100;
$cDW_ROW = $rbench['improve'][106] / $rbench['improve'][0] * 100;
$cDW_APT_5 = $rbench['improve'][107] / $rbench['improve'][0] * 100;
$cDW_OT_SING = $rbench['improve'][108] / $rbench['improve'][0] * 100;
$cDW_AVALUE = $rbench['improve'][109] / $rbench['improve'][0] * 100;
$cDW_MVALUE = $rbench['improve'][110] / $rbench['improve'][0] * 100;

$cDW_REGMIN = $rbench['improve'][112] / $rbench['improve'][0] * 100;
$cDW_MAJORRE = $rbench['improve'][113] / $rbench['improve'][0] * 100;
$cDW_TOTDWL2 = $rbench['improve'][114] / $rbench['improve'][0] * 100;
$cDW_CON_60 = $rbench['improve'][115] / $rbench['improve'][0] * 100;
$cDW_CON6180 = $rbench['improve'][116] / $rbench['improve'][0] * 100;
$cDW_CON8190 = $rbench['improve'][117] / $rbench['improve'][0] * 100;
$cDW_CON9100 = $rbench['improve'][118] / $rbench['improve'][0] * 100;
$cDW_CON0105 = $rbench['improve'][119] / $rbench['improve'][0] * 100;
$cDW_CON0611 = $rbench['improve'][120] / $rbench['improve'][0] * 100;
$cDW_CON12_ = $rbench['improve'][121] / $rbench['improve'][0] * 100;
$cDW_TOTDWL3 = $rbench['improve'][122] / $rbench['improve'][0] * 100;
$cDW_RM_4 = $rbench['improve'][123] / $rbench['improve'][0] * 100;
$cDW_RM5 = $rbench['improve'][124] / $rbench['improve'][0] * 100;
$cDW_RM6 = $rbench['improve'][125] / $rbench['improve'][0] * 100;
$cDW_RM7 = $rbench['improve'][126] / $rbench['improve'][0] * 100;
$cDW_RM8_ = $rbench['improve'][127] / $rbench['improve'][0] * 100;
$cDW_ARMSPDW = $rbench['improve'][128] / $rbench['improve'][0] * 100;

$cDW_BRM_1 = $rbench['improve'][130] / $rbench['improve'][0] * 100;
$cDW_BRM2 = $rbench['improve'][131] / $rbench['improve'][0] * 100;
$cDW_BRM3 = $rbench['improve'][132] / $rbench['improve'][0] * 100;
$cDW_BRM4_ = $rbench['improve'][133] / $rbench['improve'][0] * 100;
$cDW_TOTDWL5 = $rbench['improve'][134] / $rbench['improve'][0] * 100;
$cDW_OWNED = $rbench['improve'][135] / $rbench['improve'][0] * 100;
$cDW_RENTED = $rbench['improve'][136] / $rbench['improve'][0] * 100;
$cDW_BANDH = $rbench['improve'][137] / $rbench['improve'][0] * 100;
$cDW_TOTDWL6 = $rbench['improve'][138] / $rbench['improve'][0] * 100;
$cDW_PTCON = $rbench['improve'][139] / $rbench['improve'][0] * 100;
$cDW_NPTCON = $rbench['improve'][140] / $rbench['improve'][0] * 100;
$cDW_TOTDWL7 = $rbench['improve'][141] / $rbench['improve'][0] * 100;
$cDW_MT1 = $rbench['improve'][142] / $rbench['improve'][0] * 100;
$cDW_MT2 = $rbench['improve'][143] / $rbench['improve'][0] * 100;
$cDW_MT3_ = $rbench['improve'][144] / $rbench['improve'][0] * 100;
$cDW_TOTDWL8 = $rbench['improve'][145] / $rbench['improve'][0] * 100;
$cDW_MT_25 = $rbench['improve'][146] / $rbench['improve'][0] * 100;
$cDW_MT2534 = $rbench['improve'][147] / $rbench['improve'][0] * 100;
$cDW_MT3544 = $rbench['improve'][148] / $rbench['improve'][0] * 100;
$cDW_MT4554 = $rbench['improve'][149] / $rbench['improve'][0] * 100;
$cDW_MT5564 = $rbench['improve'][150] / $rbench['improve'][0] * 100;
$cDW_MT6574 = $rbench['improve'][151] / $rbench['improve'][0] * 100;
$cDW_MT75_ = $rbench['improve'][152] / $rbench['improve'][0] * 100;
$cDW_TOTDWL9 = $rbench['improve'][153] / $rbench['improve'][0] * 100;
$cDW_PPR_1 = $rbench['improve'][154] / $rbench['improve'][0] * 100;
$cDW_PPR2_ = $rbench['improve'][155] / $rbench['improve'][0] * 100;
$cDW_TOTDWLA = $rbench['improve'][156] / $rbench['improve'][0] * 100;
$cDW_SUIT = $rbench['improve'][157] / $rbench['improve'][0] * 100;
$cDW_NSUIT = $rbench['improve'][158] / $rbench['improve'][0] * 100;
$cDW_MCOST = $rbench['improve'][159] / $rbench['improve'][0] * 100;
$cDW_ACOST = $rbench['improve'][160] / $rbench['improve'][0] * 100;
$cH_CANTR = $rbench['improve'][161] / $rbench['improve'][1] * 100;
$cH_DEPOT = $rbench['improve'][162] / $rbench['improve'][1] * 100;
$cH_HWARE = $rbench['improve'][163] / $rbench['improve'][1] * 100;
$cH_OUTFT = $rbench['improve'][164] / $rbench['improve'][1] * 100;
$cH_SENSE = $rbench['improve'][165] / $rbench['improve'][1] * 100;
$cH_INDEP = $rbench['improve'][166] / $rbench['improve'][1] * 100;
$cH_LEE = $rbench['improve'][167] / $rbench['improve'][1] * 100;
$cH_LIGHT = $rbench['improve'][168] / $rbench['improve'][1] * 100;
$cH_LOWE = $rbench['improve'][169] / $rbench['improve'][1] * 100;
$cH_RONA = $rbench['improve'][170] / $rbench['improve'][1] * 100;
$cH_DEPT = $rbench['improve'][171] / $rbench['improve'][1] * 100;
$cH_OL = $rbench['improve'][172] / $rbench['improve'][1] * 100;
$cH_OTHDEC = $rbench['improve'][173] / $rbench['improve'][1] * 100;
$cH_OTHIMP = $rbench['improve'][174] / $rbench['improve'][1] * 100;
$cH_CANTR_R = $rbench['improve'][175] / $rbench['improve'][1] * 100;
$cH_DEPOT_R = $rbench['improve'][176] / $rbench['improve'][1] * 100;
$cH_HWARE_R = $rbench['improve'][177] / $rbench['improve'][1] * 100;
$cH_OUTFT_R = $rbench['improve'][178] / $rbench['improve'][1] * 100;
$cH_SENSE_R = $rbench['improve'][179] / $rbench['improve'][1] * 100;
$cH_INDEP_R = $rbench['improve'][180] / $rbench['improve'][1] * 100;
$cH_LEE_R = $rbench['improve'][181] / $rbench['improve'][1] * 100;
$cH_LIGHT_R = $rbench['improve'][182] / $rbench['improve'][1] * 100;
$cH_LOWE_R = $rbench['improve'][183] / $rbench['improve'][1] * 100;
$cH_RONA_R = $rbench['improve'][184] / $rbench['improve'][1] * 100;
$cH_DEPT_R = $rbench['improve'][185] / $rbench['improve'][1] * 100;
$cH_OL_R = $rbench['improve'][186] / $rbench['improve'][1] * 100;
$cH_OTHDEC_R = $rbench['improve'][187] / $rbench['improve'][1] * 100;
$cH_OTHIMP_R = $rbench['improve'][188] / $rbench['improve'][1] * 100;
$cH_CANTR_O = $rbench['improve'][189] / $rbench['improve'][1] * 100;
$cH_DEPOT_O = $rbench['improve'][190] / $rbench['improve'][1] * 100;
$cH_HWARE_O = $rbench['improve'][191] / $rbench['improve'][1] * 100;
$cH_OUTFT_O = $rbench['improve'][192] / $rbench['improve'][1] * 100;
$cH_SENSE_O = $rbench['improve'][193] / $rbench['improve'][1] * 100;
$cH_INDEP_O = $rbench['improve'][194] / $rbench['improve'][1] * 100;
$cH_LEE_O = $rbench['improve'][195] / $rbench['improve'][1] * 100;
$cH_LIGHT_O = $rbench['improve'][196] / $rbench['improve'][1] * 100;
$cH_LOWE_O = $rbench['improve'][197] / $rbench['improve'][1] * 100;
$cH_RONA_O = $rbench['improve'][198] / $rbench['improve'][1] * 100;
$cH_DEPT_O = $rbench['improve'][199] / $rbench['improve'][1] * 100;
$cH_OL_O = $rbench['improve'][200] / $rbench['improve'][1] * 100;
$cH_OTHDEC_O = $rbench['improve'][201] / $rbench['improve'][1] * 100;
$cH_OTHIMP_O = $rbench['improve'][202] / $rbench['improve'][1] * 100;

$cPC_BBFUR = $rbench['improve'][203] / $rbench['improve'][0] * 100;
$cPC_BED = $rbench['improve'][204] / $rbench['improve'][0] * 100;
$cPC_OFFFUR = $rbench['improve'][205] / $rbench['improve'][0] * 100;
$cPC_CARALRM = $rbench['improve'][206] / $rbench['improve'][0] * 100;
$cPC_CARSTR = $rbench['improve'][207] / $rbench['improve'][0] * 100;
$cPC_CMRAFLM = $rbench['improve'][208] / $rbench['improve'][0] * 100;
$cPC_CMPEQP = $rbench['improve'][209] / $rbench['improve'][0] * 100;
$cPC_CMPTRL = $rbench['improve'][210] / $rbench['improve'][0] * 100;
$cPC_EREADER = $rbench['improve'][211] / $rbench['improve'][0] * 100;
$cPC_GRPTFUR = $rbench['improve'][212] / $rbench['improve'][0] * 100;
$cPC_GASBBQ = $rbench['improve'][213] / $rbench['improve'][0] * 100;
$cPC_FIREPLC = $rbench['improve'][214] / $rbench['improve'][0] * 100;
$cPC_GPS = $rbench['improve'][215] / $rbench['improve'][0] * 100;
$cPC_GOLFEQP = $rbench['improve'][216] / $rbench['improve'][0] * 100;
$cPC_HOCKEY = $rbench['improve'][217] / $rbench['improve'][0] * 100;
$cPC_HOTTUB = $rbench['improve'][218] / $rbench['improve'][0] * 100;
$cPC_EXCEQP = $rbench['improve'][219] / $rbench['improve'][0] * 100;
$cPC_APPLIAN = $rbench['improve'][220] / $rbench['improve'][0] * 100;
$cPC_MOTORCY = $rbench['improve'][221] / $rbench['improve'][0] * 100;
$cPC_MINSTR = $rbench['improve'][222] / $rbench['improve'][0] * 100;
$cPC_OFFEQP = $rbench['improve'][223] / $rbench['improve'][0] * 100;
$cPC_MP3 = $rbench['improve'][224] / $rbench['improve'][0] * 100;
$cPC_PC = $rbench['improve'][225] / $rbench['improve'][0] * 100;
$cPC_PCSW = $rbench['improve'][226] / $rbench['improve'][0] * 100;
$cPC_PRNT = $rbench['improve'][227] / $rbench['improve'][0] * 100;
$cPC_POOL = $rbench['improve'][228] / $rbench['improve'][0] * 100;
$cPC_PRAFUNE = $rbench['improve'][229] / $rbench['improve'][0] * 100;
$cPC_BOAT = $rbench['improve'][230] / $rbench['improve'][0] * 100;
$cPC_SKIEQP = $rbench['improve'][231] / $rbench['improve'][0] * 100;
$cPC_SNOWMBL = $rbench['improve'][232] / $rbench['improve'][0] * 100;
$cPC_STEREO = $rbench['improve'][233] / $rbench['improve'][0] * 100;
$cPC_TV = $rbench['improve'][234] / $rbench['improve'][0] * 100;
$cPC_TIRE = $rbench['improve'][235] / $rbench['improve'][0] * 100;
$cPC_VACUUM = $rbench['improve'][236] / $rbench['improve'][0] * 100;
$cPC_VDOEQP = $rbench['improve'][237] / $rbench['improve'][0] * 100;
$cPC_GMSYS = $rbench['improve'][238] / $rbench['improve'][0] * 100;
$cPC_WEDSVR = $rbench['improve'][239] / $rbench['improve'][0] * 100;

$cPI_BBFUR = $rbench['improve'][240] / $rbench['improve'][0] * 100;
$cPI_BED = $rbench['improve'][241] / $rbench['improve'][0] * 100;
$cPI_OFFFUR = $rbench['improve'][242] / $rbench['improve'][0] * 100;
$cPI_CARALRM = $rbench['improve'][243] / $rbench['improve'][0] * 100;
$cPI_CARSTR = $rbench['improve'][244] / $rbench['improve'][0] * 100;
$cPI_CMRAFLM = $rbench['improve'][245] / $rbench['improve'][0] * 100;
$cPI_CMPEQP = $rbench['improve'][246] / $rbench['improve'][0] * 100;
$cPI_CMPTRL = $rbench['improve'][247] / $rbench['improve'][0] * 100;
$cPI_EREADER = $rbench['improve'][248] / $rbench['improve'][0] * 100;
$cPI_GRPTFUR = $rbench['improve'][249] / $rbench['improve'][0] * 100;
$cPI_GASBBQ = $rbench['improve'][250] / $rbench['improve'][0] * 100;
$cPI_FIREPLC = $rbench['improve'][251] / $rbench['improve'][0] * 100;
$cPI_GPS = $rbench['improve'][252] / $rbench['improve'][0] * 100;
$cPI_GOLFEQP = $rbench['improve'][253] / $rbench['improve'][0] * 100;
$cPI_HOCKEY = $rbench['improve'][254] / $rbench['improve'][0] * 100;
$cPI_HOTTUB = $rbench['improve'][255] / $rbench['improve'][0] * 100;
$cPI_EXCEQP = $rbench['improve'][256] / $rbench['improve'][0] * 100;
$cPI_APPLIAN = $rbench['improve'][257] / $rbench['improve'][0] * 100;
$cPI_MOTORCY = $rbench['improve'][258] / $rbench['improve'][0] * 100;
$cPI_MINSTR = $rbench['improve'][259] / $rbench['improve'][0] * 100;
$cPI_OFFEQP = $rbench['improve'][260] / $rbench['improve'][0] * 100;
$cPI_MP3 = $rbench['improve'][261] / $rbench['improve'][0] * 100;
$cPI_PC = $rbench['improve'][262] / $rbench['improve'][0] * 100;
$cPI_PCSW = $rbench['improve'][263] / $rbench['improve'][0] * 100;
$cPI_PRNT = $rbench['improve'][264] / $rbench['improve'][0] * 100;
$cPI_POOL = $rbench['improve'][265] / $rbench['improve'][0] * 100;
$cPI_PRAFUNE = $rbench['improve'][266] / $rbench['improve'][0] * 100;
$cPI_BOAT = $rbench['improve'][267] / $rbench['improve'][0] * 100;
$cPI_SKIEQP = $rbench['improve'][268] / $rbench['improve'][0] * 100;
$cPI_SNOWMBL = $rbench['improve'][269] / $rbench['improve'][0] * 100;
$cPI_STEREO = $rbench['improve'][270] / $rbench['improve'][0] * 100;
$cPI_TV = $rbench['improve'][271] / $rbench['improve'][0] * 100;
$cPI_TIRE = $rbench['improve'][272] / $rbench['improve'][0] * 100;
$cPI_VACUUM = $rbench['improve'][273] / $rbench['improve'][0] * 100;
$cPI_VDOEQP = $rbench['improve'][274] / $rbench['improve'][0] * 100;
$cPI_GMSYS = $rbench['improve'][275] / $rbench['improve'][0] * 100;
$cPI_WEDSVR = $rbench['improve'][276] / $rbench['improve'][0] * 100;

$cSP_GSNO = $rbench['improve'][277] / $rbench['improve'][1] * 100;
$cSP_GS249 = $rbench['improve'][278] / $rbench['improve'][1] * 100;
$cSP_GS499 = $rbench['improve'][279] / $rbench['improve'][1] * 100;
$cSP_GS500 = $rbench['improve'][280] / $rbench['improve'][1] * 100;
$cSP_HDNO = $rbench['improve'][281] / $rbench['improve'][1] * 100;
$cSP_HD249 = $rbench['improve'][282] / $rbench['improve'][1] * 100;
$cSP_HD499 = $rbench['improve'][283] / $rbench['improve'][1] * 100;
$cSP_HD500 = $rbench['improve'][284] / $rbench['improve'][1] * 100;
$cSP_PTNO = $rbench['improve'][285] / $rbench['improve'][1] * 100;
$cSP_PT249 = $rbench['improve'][286] / $rbench['improve'][1] * 100;
$cSP_PT499 = $rbench['improve'][287] / $rbench['improve'][1] * 100;
$cSP_PT500 = $rbench['improve'][288] / $rbench['improve'][1] * 100;

// summary - demographics
$age_adults_bench = 0;
for ( $i = 5; $i <= 18; $i ++) {	
	$age_adults_bench  = $age_adults_bench + $rbench['summary'][$i];
}
				
$age_70_bench = 0;
for ( $i = 15; $i <= 18; $i ++) {	
	$age_70_bench = $age_70_bench + $rbench['summary'][$i];
}

$inc030can = 0;
for ( $i = 20; $i <= 24; $i ++) {	
	$inc030can = $inc030can + $rbench['summary'][$i];
}

$inc3070can = 0;
for ( $i = 25; $i <= 27; $i ++) {	
	$inc3070can = $inc3070can + $rbench['summary'][$i];
}

$inc70100can = 0;
for ( $i = 28; $i <= 29; $i ++) {	
	$inc70100can = $inc70100can + $rbench['summary'][$i];
}

$inc100can = 0;
for ( $i = 30; $i <= 32; $i ++) {	
	$inc100can = $inc100can + $rbench['summary'][$i];
}

$age_2029c = ($rbench['summary'][5] + $rbench['summary'][6] ) / $age_adults_bench * 100;
$age_3039c = ($rbench['summary'][7] + $rbench['summary'][8] ) / $age_adults_bench * 100;
$age_4049c = ($rbench['summary'][9] + $rbench['summary'][10]) / $age_adults_bench * 100;
$age_5059c = ($rbench['summary'][11] + $rbench['summary'][12] ) / $age_adults_bench * 100;
$age_6069c = ($rbench['summary'][13] + $rbench['summary'][14] ) / $age_adults_bench * 100;
$age_70c = $age_70_bench / $age_adults_bench * 100;
$age_kidsyc = ($rbench['summary'][1] + $rbench['summary'][2]) / $rbench['summary'][0] *100;
$age_kidsoldc = ($rbench['summary'][3] + $rbench['summary'][4]) / $rbench['summary'][0] *100;
$inc030c = $inc030can / $rbench['summary'][19] *100;
$inc3070c = $inc3070can / $rbench['summary'][19] *100;
$inc70100c = $inc70100can / $rbench['summary'][19] *100;
$inc100c = $inc100can / $rbench['summary'][19] *100;
$fm_singlec = ($rbench['summary'][35] - $rbench['summary'][37]) / $rbench['summary'][19] *100;
$couplec = $rbench['summary'][39]/ $rbench['summary'][19] *100;
$familyc = $rbench['summary'][40]/ $rbench['summary'][19] *100;
$sparentc = $rbench['summary'][41]/ $rbench['summary'][19] *100;
$IN_AHHc = $rbench['summary'][34] / $rbench['summary'][19];
$MN_VISc= $rbench['summary'][44] / $rbench['summary'][43] *100 ;
$MN_CHINESEc= $rbench['summary'][45] / $rbench['summary'][43] *100 ;
$MN_SASIANc= $rbench['summary'][46] / $rbench['summary'][43] *100 ;
$MN_BLACKc= $rbench['summary'][47] / $rbench['summary'][43] *100 ;
$MN_WHITEc= 100 - ($rbench['summary'][44] / $rbench['summary'][43] *100) ;

?>