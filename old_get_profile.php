<?php

$query = "SELECT 
 SUM(pp.PP_TOT) as PP_TOT
 , SUM(pp.PP_0_4) as PP_0_4
 , SUM(pp.PP_5_9) as PP_5_9
 , SUM(pp.PP_10_14) as PP_10_14
 , SUM(pp.PP_15_19) as PP_15_19
 , SUM(pp.PP_20_24) as PP_20_24
 , SUM(pp.PP_25_29) as PP_25_29
 , SUM(pp.PP_30_34) as PP_30_34
 , SUM(pp.PP_35_39) as PP_35_39
 , SUM(pp.PP_40_44) as PP_40_44
 , SUM(pp.PP_45_49) as PP_45_49
 , SUM(pp.PP_50_54) as PP_50_54
 , SUM(pp.PP_55_59) as PP_55_59
 , SUM(pp.PP_60_64) as PP_60_64
 , SUM(pp.PP_65_69) as PP_65_69
 , SUM(pp.PP_70_74) as PP_70_74
 , SUM(pp.PP_75_79) as PP_75_79
 , SUM(pp.PP_80_84) as PP_80_84
 , SUM(pp.PP_85) as PP_85
 , SUM(in2.IN_THH) as IN_THH
 , SUM(in2.IN_HH_5) as IN_HH_5
 , SUM(in2.IN_HH0510) as IN_HH0510
 , SUM(in2.IN_HH1015) as IN_HH1015
 , SUM(in2.IN_HH1520) as IN_HH1520
 , SUM(in2.IN_HH2030) as IN_HH2030
 , SUM(in2.IN_HH3040) as IN_HH3040
 , SUM(in2.IN_HH4050) as IN_HH4050
 , SUM(in2.IN_HH5060) as IN_HH5060
 , SUM(in2.IN_HH6080) as IN_HH6080
 , SUM(in2.IN_HH80100) as IN_HH80100
 , SUM(in2.IN_HH10125) as IN_HH10125
 , SUM(in2.IN_HH12150) as IN_HH12150
 , SUM(in2.IN_HH150_) as IN_HH150_
 , SUM(in2.IN_MHH * IN_THH) as IN_MHH
 , SUM(in2.IN_AHH * IN_THH) as IN_AHH
 , SUM(hh.HH_TOTHH) as HH_TOTHH
 , SUM(hh.HH_FMHH) as HH_FMHH
 , SUM(hh.HH_ONEFMHH) as HH_ONEFMHH
 , SUM(hh.HH_CP) as HH_CP
 , SUM(hh.HH_CP_NC) as HH_CP_NC
 , SUM(hh.HH_CP_CH) as HH_CP_CH
 , SUM(hh.HH_LP) as HH_LP
 , SUM(hh.HH_OT) as HH_OT
 , SUM(mn.MN_TOT) as MN_TOT
 , SUM(mn.MN_VIS) as MN_VIS
 , SUM(mn.MN_CHINESE) as MN_CHINESE
 , SUM(mn.MN_SASIAN) as MN_SASIAN
 , SUM(mn.MN_BLACK) as MN_BLACK

FROM c_pp pp, c_mn mn, c_in2 in2, c_hh hh, amd_temp_reppc pclist WHERE pclist.report_uid = $report_uid and pclist.POSTCODE = pp.POSTCODE and pclist.POSTCODE = mn.POSTCODE and pclist.POSTCODE = in2.POSTCODE and pclist.POSTCODE = hh.POSTCODE ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$demo['summary'][] = $row['PP_TOT'];
$demo['summary'][] = $row['PP_0_4'];
$demo['summary'][] = $row['PP_5_9'];
$demo['summary'][] = $row['PP_10_14'];
$demo['summary'][] = $row['PP_15_19'];
$demo['summary'][] = $row['PP_20_24'];
$demo['summary'][] = $row['PP_25_29'];
$demo['summary'][] = $row['PP_30_34'];
$demo['summary'][] = $row['PP_35_39'];
$demo['summary'][] = $row['PP_40_44'];
$demo['summary'][] = $row['PP_45_49'];
$demo['summary'][] = $row['PP_50_54'];
$demo['summary'][] = $row['PP_55_59'];
$demo['summary'][] = $row['PP_60_64'];
$demo['summary'][] = $row['PP_65_69'];
$demo['summary'][] = $row['PP_70_74'];
$demo['summary'][] = $row['PP_75_79'];
$demo['summary'][] = $row['PP_80_84'];
$demo['summary'][] = $row['PP_85'];
$demo['summary'][] = $row['IN_THH'];
$demo['summary'][] = $row['IN_HH_5'];
$demo['summary'][] = $row['IN_HH0510'];
$demo['summary'][] = $row['IN_HH1015'];
$demo['summary'][] = $row['IN_HH1520'];
$demo['summary'][] = $row['IN_HH2030'];
$demo['summary'][] = $row['IN_HH3040'];
$demo['summary'][] = $row['IN_HH4050'];
$demo['summary'][] = $row['IN_HH5060'];
$demo['summary'][] = $row['IN_HH6080'];
$demo['summary'][] = $row['IN_HH80100'];
$demo['summary'][] = $row['IN_HH10125'];
$demo['summary'][] = $row['IN_HH12150'];
$demo['summary'][] = $row['IN_HH150_'];
$demo['summary'][] = $row['IN_MHH'];
$demo['summary'][] = $row['IN_AHH'];
$demo['summary'][] = $row['HH_TOTHH'];
$demo['summary'][] = $row['HH_FMHH'];
$demo['summary'][] = $row['HH_ONEFMHH'];
$demo['summary'][] = $row['HH_CP'];
$demo['summary'][] = $row['HH_CP_NC'];
$demo['summary'][] = $row['HH_CP_CH'];
$demo['summary'][] = $row['HH_LP'];
$demo['summary'][] = $row['HH_OT'];
$demo['summary'][] = $row['MN_TOT'];
$demo['summary'][] = $row['MN_VIS'];
$demo['summary'][] = $row['MN_CHINESE'];
$demo['summary'][] = $row['MN_SASIAN'];
$demo['summary'][] = $row['MN_BLACK'];

}				
mysqli_free_result($result);
}


$age_adults = 0;
for ( $i = 5; $i <= 18; $i ++) {	
					$age_adults = $age_adults + $demo['summary'][$i];
}
				
$age_2029 = $demo['summary'][5] + $demo['summary'][6];
$age_3039 = $demo['summary'][7] + $demo['summary'][8];
$age_4049 = $demo['summary'][9] + $demo['summary'][10];
$age_5059 = $demo['summary'][11] + $demo['summary'][12];
$age_6069 = $demo['summary'][13] + $demo['summary'][14];

$age_70 = 0;
for ( $i = 15; $i <= 18; $i ++) {	
	$age_70 = $age_70 + $demo['summary'][$i];
}

$age_kidsy = $demo['summary'][1] + $demo['summary'][2];
$age_kidsold = $demo['summary'][3] + $demo['summary'][4];

$inc030 = 0;
for ( $i = 20; $i <= 24; $i ++) {	
	$inc030 = $inc030 + $demo['summary'][$i];
}

$inc3070 = 0;
for ( $i = 25; $i <= 27; $i ++) {	
	$inc3070 = $inc3070 + $demo['summary'][$i];
}

$inc70100 = 0;
for ( $i = 28; $i <= 29; $i ++) {	
	$inc70100 = $inc70100 + $demo['summary'][$i];
}

$inc100 = 0;
for ( $i = 30; $i <= 32; $i ++) {	
	$inc100 = $inc100 + $demo['summary'][$i];
}

$fm_single = $demo['summary'][35] - $demo['summary'][37];
$couple = $demo['summary'][39];
$family = $demo['summary'][40];
$sparent = $demo['summary'][41];


$IN_THH = $demo['summary'][19];

$PP_TOT = $demo['summary'][0];
$IN_AHHp = $demo['summary'][34] / $demo['summary'][19];

$MN_TOT = $demo['summary'][43];
$MN_VIS = $demo['summary'][44];
$MN_CHINESE = $demo['summary'][45];
$MN_SASIAN = $demo['summary'][46];
$MN_BLACK = $demo['summary'][47];

// segmentation updated Dec 14 2016
$query = "SELECT SUM(seg.HH_TOT) as HH_TOT, seg.CLUSTER as CLUSTER, seg.POSTCODE, pclist.POSTCODE FROM c_seg seg , amd_temp_reppc pclist where seg.POSTCODE = pclist.POSTCODE and pclist.report_uid = $report_uid group by CLUSTER  ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$seg_segment_value[] = $row['HH_TOT']; 
$seg_segment_name[] = $row['CLUSTER'];
}				
mysqli_free_result($result);
}
for ( $seg_vars = 0; $seg_vars <= 17; $seg_vars ++) {
$demo['segment'][$seg_vars] = 0;
}
$segment_records = 0;
for ( $seg_vars = 0; $seg_vars < sizeof($seg_segment_name); $seg_vars ++) {
if($seg_segment_name[$seg_vars] == 'A') $demo['segment'][0] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'B') $demo['segment'][1] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'C') $demo['segment'][2] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'D') $demo['segment'][3] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'E') $demo['segment'][4] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'F') $demo['segment'][5] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'G') $demo['segment'][6] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'H') $demo['segment'][7] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'I') $demo['segment'][8] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'J') $demo['segment'][9] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'K') $demo['segment'][10] = $seg_segment_value[$seg_vars];;
if($seg_segment_name[$seg_vars] == 'L') $demo['segment'][11] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'M') $demo['segment'][12] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'N') $demo['segment'][13] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'O') $demo['segment'][14] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'P') $demo['segment'][15] = $seg_segment_value[$seg_vars];
if($seg_segment_name[$seg_vars] == 'Q') $demo['segment'][16] = $seg_segment_value[$seg_vars];
$segment_records = $segment_records + $seg_segment_value[$seg_vars];
}	

$demo['segment'][17] = $segment_records;

// updated august 28 2018 - c_geo to amfd_homes_current
$query = "SELECT SUM(amfd_homes_current.homes) as mfd_home, SUM(amfd_homes_current.apts) as mfd_apts, SUM(amfd_homes_current.farms) as mfd_farm FROM amfd_homes_current amfd_homes_current, amd_temp_reppc pclist WHERE amfd_homes_current.PostCode = pclist.POSTCODE and pclist.report_uid = $report_uid";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$mfd_home = $row['mfd_home'];
$mfd_apts = $row['mfd_apts'];
$mfd_farm = $row['mfd_farm'];
}}
$mfd_hh_count = $mfd_home + $mfd_apts + $mfd_farm;
$demo['mfd_homes'][] = $mfd_home;
$demo['mfd_homes'][] = $mfd_apts;
$demo['mfd_homes'][] = $mfd_farm;
$demo['mfd_homes'][] = $mfd_hh_count;


// media
$query = "SELECT 
 SUM(c_weight.wPP15_) as wPP15_
 , SUM(c_rd.RD_HR3542 * wPP15_) as RD_HR3542
 , SUM(c_rd.RD_HR4249 * wPP15_) as RD_HR4249
 , SUM(c_rd.RD_HR49_ * wPP15_) as RD_HR49_
 , SUM(c_tv1.TV_HTCIL * wPP15_) as TV_HTCIL
 , SUM(c_np.NP_TMM4 * wPP15_) as NP_TMM4
 , SUM(c_np.NP_TMM5 * wPP15_) as NP_TMM5
 , SUM(c_np.NP_TMM6_ * wPP15_) as NP_TMM6_
 , SUM(c_it.IT_TWK15 * wPP15_) as IT_TWK15
 , SUM(c_it.IT_TWK25 * wPP15_) as IT_TWK25
 , SUM(c_it.IT_TWK25_ * wPP15_) as IT_TWK25_
 , SUM(c_mz.MZ_TCIL3 * wPP15_) as MZ_TCIL3
  
, SUM(c_np.NP_AUTOF * wPP15_) as NP_AUTOF
, SUM(c_np.NP_BUSIF * wPP15_) as NP_BUSIF
, SUM(c_np.NP_CL_ADF * wPP15_) as NP_CL_ADF
, SUM(c_np.NP_EDITF * wPP15_) as NP_EDITF
, SUM(c_np.NP_FASHF * wPP15_) as NP_FASHF
, SUM(c_np.NP_FOODF * wPP15_) as NP_FOODF
, SUM(c_np.NP_HEALTHF * wPP15_) as NP_HEALTHF
, SUM(c_np.NP_INEWF * wPP15_) as NP_INEWF
, SUM(c_np.NP_LNEWF * wPP15_) as NP_LNEWF
, SUM(c_np.NP_MOVIF * wPP15_) as NP_MOVIF
, SUM(c_np.NP_NNEWF * wPP15_) as NP_NNEWF
, SUM(c_np.NP_HOMEF * wPP15_) as NP_HOMEF
, SUM(c_np.NP_RESTAF * wPP15_) as NP_RESTAF
, SUM(c_np.NP_SPORF * wPP15_) as NP_SPORF
, SUM(c_np.NP_TRAVF * wPP15_) as NP_TRAVF
, SUM(c_np.NP_ADSF * wPP15_) as NP_ADSF
, SUM(c_np.NP_READ1 * wPP15_) as NP_READ1
, SUM(c_np.NP_READ2 * wPP15_) as NP_READ2
, SUM(c_np.NP_READ3 * wPP15_) as NP_READ3
, SUM(c_np.NP_READ4 * wPP15_) as NP_READ4

 , SUM(c_rd.RD_ADC * wPP15_) as RD_ADC
, SUM(c_rd.RD_MSTRK * wPP15_) as RD_MSTRK
, SUM(c_rd.RD_HADC * wPP15_) as RD_HADC
, SUM(c_rd.RD_MDRK * wPP15_) as RD_MDRK
, SUM(c_rd.RD_MSTM * wPP15_) as RD_MSTM
, SUM(c_rd.RD_NEWS * wPP15_) as RD_NEWS
, SUM(c_rd.RD_CLAHIT * wPP15_) as RD_CLAHIT
, SUM(c_rd.RD_CLARK * wPP15_) as RD_CLARK

, SUM(c_rd.RD_CLASS * wPP15_) as RD_CLASS
, SUM(c_rd.RD_JAZZ * wPP15_) as RD_JAZZ

, SUM(c_tv2.TV_AUTO * wPP15_) as TV_AUTO
, SUM(c_tv2.TV_BSBALL * wPP15_) as TV_BSBALL
, SUM(c_tv2.TV_BKBALL * wPP15_) as TV_BKBALL
, SUM(c_tv2.TV_CARTOO * wPP15_) as TV_CARTOO
, SUM(c_tv2.TV_CTSHOW * wPP15_) as TV_CTSHOW
, SUM(c_tv2.TV_DOC * wPP15_) as TV_DOC
, SUM(c_tv2.TV_SKATE * wPP15_) as TV_SKATE
, SUM(c_tv2.TV_CFL * wPP15_) as TV_CFL
, SUM(c_tv2.TV_NFL * wPP15_) as TV_NFL
, SUM(c_tv2.TV_GMSHOW * wPP15_) as TV_GMSHOW
, SUM(c_tv2.TV_GOLF * wPP15_) as TV_GOLF
, SUM(c_tv2.TV_HOCKEY * wPP15_) as TV_HOCKEY

, SUM(c_tv2.TV_MOVIE * wPP15_) as TV_MOVIE
, SUM(c_tv2.TV_NEWS * wPP15_) as TV_NEWS
, SUM(c_tv2.TV_PMKOV * wPP15_) as TV_PMKOV
, SUM(c_tv2.TV_REALITY * wPP15_) as TV_REALITY
, SUM(c_tv2.TV_CMDIES * wPP15_) as TV_CMDIES

, SUM(c_tv2.TV_DRAMA * wPP15_) as TV_DRAMA
, SUM(c_tv2.TV_TALK * wPP15_) as TV_TALK
, SUM(c_tv2.TV_INFO * wPP15_) as TV_INFO
, SUM(c_tv2.TV_SPEC * wPP15_) as TV_SPEC


 
 
 
, SUM(c_it.IT_HOME * wPP15_) as IT_HOME
, SUM(c_it.IT_WORK * wPP15_) as IT_WORK
, SUM(c_it.IT_SCH * wPP15_) as IT_SCH
, SUM(c_it.IT_OTH * wPP15_) as IT_OTH
, SUM(c_it.IT_TWK0 * wPP15_) as IT_TWK0
, SUM(c_it.IT_TWK5 * wPP15_) as IT_TWK5
, SUM(c_it.IT_TWK10 * wPP15_) as IT_TWK10

, SUM(c_it.IT_NSITE * wPP15_) as IT_NSITE
, SUM(c_it.IT_RADIO * wPP15_) as IT_RADIO
, SUM(c_it.IT_TV * wPP15_) as IT_TV
, SUM(c_it.IT_AUTNEWS * wPP15_) as IT_AUTNEWS
, SUM(c_it.IT_FASHION * wPP15_) as IT_FASHION
, SUM(c_it.IT_HEALTH * wPP15_) as IT_HEALTH
, SUM(c_it.IT_FURN * wPP15_) as IT_FURN
, SUM(c_it.IT_SPORT * wPP15_) as IT_SPORT
, SUM(c_it.IT_RLEST * wPP15_) as IT_RLEST
, SUM(c_it.IT_RESTG * wPP15_) as IT_RESTG
, SUM(c_it.IT_WEATH * wPP15_) as IT_WEATH
, SUM(c_it.IT_ADS * wPP15_) as IT_ADS
, SUM(c_it.IT_BNKING * wPP15_) as IT_BNKING
, SUM(c_it.IT_DGAME * wPP15_) as IT_DGAME

, SUM(c_it.IT_DVIDEO * wPP15_) as IT_DVIDEO
, SUM(c_it.IT_MP3 * wPP15_) as IT_MP3
, SUM(c_it.IT_DCPN * wPP15_) as IT_DCPN

, SUM(c_it.IT_CONTEST * wPP15_) as IT_CONTEST
, SUM(c_it.IT_PODCAST * wPP15_) as IT_PODCAST
, SUM(c_it.IT_AUDIO * wPP15_) as IT_AUDIO

, SUM(c_it.IT_SONET * wPP15_) as IT_SONET
, SUM(c_it.IT_CLAD * wPP15_) as IT_CLAD
, SUM(c_it.IT_GAME * wPP15_) as IT_GAME

, SUM(c_it.IT_MZ * wPP15_) as IT_MZ
, SUM(c_it.IT_NSPAP * wPP15_) as IT_NSPAP
, SUM(c_it.IT_BLOG * wPP15_) as IT_BLOG
, SUM(c_it.IT_WIKI * wPP15_) as IT_WIKI
, SUM(c_it.IT_NLRNL * wPP15_) as IT_NLRNL
, SUM(c_it.IT_PROD * wPP15_) as IT_PROD
, SUM(c_it.IT_SURV * wPP15_) as IT_SURV
, SUM(c_it.IT_INSM * wPP15_) as IT_INSM
, SUM(c_it.IT_EMAIL * wPP15_) as IT_EMAIL
, SUM(c_it.IT_MAPS * wPP15_) as IT_MAPS
, SUM(c_it.IT_PHONE * wPP15_) as IT_PHONE


, SUM(c_it.IT_VIDEO * wPP15_) as IT_VIDEO
, SUM(c_it.IT_OVIDEO * wPP15_) as IT_OVIDEO
 
 
 
 
 
 
 
 
FROM c_weight c_weight, c_rd c_rd, c_tv1 c_tv1, c_tv2 c_tv2, c_np c_np, c_it c_it, c_mz c_mz, amd_temp_reppc pclist WHERE pclist.report_uid = $report_uid and pclist.POSTCODE = c_weight.POSTCODE and pclist.POSTCODE = c_rd.POSTCODE and pclist.POSTCODE = c_tv1.POSTCODE and pclist.POSTCODE = c_tv2.POSTCODE and pclist.POSTCODE = c_np.POSTCODE and pclist.POSTCODE = c_it.POSTCODE and pclist.POSTCODE = c_mz.POSTCODE ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$media_pp15_ = $row['wPP15_'];
$RD_HR3542 = $row['RD_HR3542'];
$RD_HR4249 = $row['RD_HR4249'];
$RD_HR49_ = $row['RD_HR49_'];
$TV_HRMF78 = 0;
$TV_HRMF8_ = $row['TV_HTCIL'];
$NP_TMM4 = $row['NP_TMM4'];
$NP_TMM5 = $row['NP_TMM5'];
$NP_TMM6_ = $row['NP_TMM6_'];
$IT_TWK15 = $row['IT_TWK15'];
$IT_TWK25 = $row['IT_TWK25'];
$IT_TWK25_ = $row['IT_TWK25_'];
$MZ_LMD18 = 0;
$MZ_LMD18_ = $row['MZ_TCIL3'];

$demo['media'][] = $row['wPP15_'];
$demo['media'][] = $row['RD_HR3542'];
$demo['media'][] = $row['RD_HR4249'];
$demo['media'][] = $row['RD_HR49_'];
$demo['media'][] = 0;
$demo['media'][] = $row['TV_HTCIL'];
$demo['media'][] = $row['NP_TMM4'];
$demo['media'][] = $row['NP_TMM5'];
$demo['media'][] = $row['NP_TMM6_'];
$demo['media'][] = $row['IT_TWK15'];
$demo['media'][] = $row['IT_TWK25'];
$demo['media'][] = $row['IT_TWK25_'];
$demo['media'][] = 0;
$demo['media'][] = $row['MZ_TCIL3'];

$demo['np'][] = $row['wPP15_'];
$demo['np'][] = $row['NP_AUTOF'];
$demo['np'][] = $row['NP_BUSIF'];
$demo['np'][] = $row['NP_CL_ADF'];
$demo['np'][] = $row['NP_EDITF'];
$demo['np'][] = $row['NP_FASHF'];
$demo['np'][] = $row['NP_FOODF'];
$demo['np'][] = $row['NP_HEALTHF'];
$demo['np'][] = $row['NP_INEWF'];
$demo['np'][] = $row['NP_LNEWF'];
$demo['np'][] = $row['NP_MOVIF'];
$demo['np'][] = $row['NP_NNEWF'];
$demo['np'][] = $row['NP_HOMEF'];
$demo['np'][] = $row['NP_RESTAF'];
$demo['np'][] = $row['NP_SPORF'];
$demo['np'][] = $row['NP_TRAVF'];
$demo['np'][] = $row['NP_ADSF'];
$demo['np'][] = $row['NP_READ1'];
$demo['np'][] = $row['NP_READ2'];
$demo['np'][] = $row['NP_READ3'];
$demo['np'][] = $row['NP_READ4'];

$demo['radio'][] = $row['wPP15_'];
$demo['radio'][] = $row['RD_ADC'];
$demo['radio'][] = $row['RD_MSTRK'];
$demo['radio'][] = $row['RD_HADC'];
$demo['radio'][] = $row['RD_MDRK'];
$demo['radio'][] = $row['RD_MSTM'];
$demo['radio'][] = $row['RD_NEWS'];
$demo['radio'][] = $row['RD_CLAHIT'];
$demo['radio'][] = $row['RD_CLARK'];
$demo['radio'][] = 0;
$demo['radio'][] = $row['RD_CLASS'];
$demo['radio'][] = $row['RD_JAZZ'];

$demo['tv1'][] = $row['wPP15_'];
$demo['tv1'][] = $row['TV_AUTO'];
$demo['tv1'][] = $row['TV_BSBALL'];
$demo['tv1'][] = $row['TV_BKBALL'];
$demo['tv1'][] = $row['TV_CARTOO'];
$demo['tv1'][] = $row['TV_CTSHOW'];
$demo['tv1'][] = $row['TV_DOC'];
$demo['tv1'][] = $row['TV_SKATE'];
$demo['tv1'][] = $row['TV_CFL'];
$demo['tv1'][] = $row['TV_NFL'];
$demo['tv1'][] = $row['TV_GMSHOW'];
$demo['tv1'][] = $row['TV_GOLF'];
$demo['tv1'][] = $row['TV_HOCKEY'];
$demo['tv1'][] = 0;
$demo['tv1'][] = 0;
$demo['tv1'][] = 0;
$demo['tv1'][] = $row['TV_MOVIE'];
$demo['tv1'][] = $row['TV_NEWS'];
$demo['tv1'][] = $row['TV_PMKOV'];
$demo['tv1'][] = $row['TV_REALITY'];
$demo['tv1'][] = $row['TV_CMDIES'];
$demo['tv1'][] = 0;
$demo['tv1'][] = $row['TV_DRAMA'];
$demo['tv1'][] = $row['TV_TALK'];
$demo['tv1'][] = $row['TV_INFO'];
$demo['tv1'][] = $row['TV_SPEC'];
$demo['tv1'][] = 0;


$demo['internet'][] = $row['wPP15_'];
$demo['internet'][] = $row['IT_HOME'];
$demo['internet'][] = $row['IT_WORK'];
$demo['internet'][] = $row['IT_SCH'];
$demo['internet'][] = $row['IT_OTH'];
$demo['internet'][] = $row['IT_TWK0'];
$demo['internet'][] = $row['IT_TWK5'];
$demo['internet'][] = $row['IT_TWK10'];
$demo['internet'][] = $row['IT_TWK15'];
$demo['internet'][] = $row['IT_TWK25'];
$demo['internet'][] = $row['IT_TWK25_'];
$demo['internet'][] = $row['IT_NSITE'];
$demo['internet'][] = $row['IT_RADIO'];
$demo['internet'][] = $row['IT_TV'];
$demo['internet'][] = $row['IT_AUTNEWS'];
$demo['internet'][] = $row['IT_FASHION'];
$demo['internet'][] = $row['IT_HEALTH'];
$demo['internet'][] = $row['IT_FURN'];
$demo['internet'][] = $row['IT_SPORT'];
$demo['internet'][] = $row['IT_RLEST'];
$demo['internet'][] = $row['IT_RESTG'];
$demo['internet'][] = $row['IT_WEATH'];
$demo['internet'][] = $row['IT_ADS'];
$demo['internet'][] = $row['IT_BNKING'];
$demo['internet'][] = $row['IT_DGAME'];
$demo['internet'][] = 0;
$demo['internet'][] = $row['IT_DVIDEO'];
$demo['internet'][] = $row['IT_MP3'];
$demo['internet'][] = $row['IT_DCPN'];
$demo['internet'][] = 0;
$demo['internet'][] = $row['IT_CONTEST'];
$demo['internet'][] = $row['IT_PODCAST'];
$demo['internet'][] = $row['IT_AUDIO'];
$demo['internet'][] = 0;
$demo['internet'][] = 0;
$demo['internet'][] = $row['IT_SONET'];
$demo['internet'][] = $row['IT_CLAD'];
$demo['internet'][] = $row['IT_GAME'];
$demo['internet'][] = 0;
$demo['internet'][] = $row['IT_MZ'];
$demo['internet'][] = $row['IT_NSPAP'];
$demo['internet'][] = $row['IT_BLOG'];
$demo['internet'][] = $row['IT_WIKI'];
$demo['internet'][] = $row['IT_NLRNL'];
$demo['internet'][] = $row['IT_PROD'];
$demo['internet'][] = $row['IT_SURV'];
$demo['internet'][] = $row['IT_INSM'];
$demo['internet'][] = $row['IT_EMAIL'];
$demo['internet'][] = $row['IT_MAPS'];
$demo['internet'][] = $row['IT_PHONE'];
$demo['internet'][] = 0;
$demo['internet'][] = 0;
$demo['internet'][] = $row['IT_VIDEO'];
$demo['internet'][] = $row['IT_OVIDEO'];
}
mysqli_free_result($result);
}


// leisure
$query = "SELECT 
 SUM(c_weight.wPP15_) as wPP15_
 , SUM(c_ls2.LS_ADVSP * wPP15_) as LS_ADVSP
, SUM(c_ls2.LS_CRFT * wPP15_) as LS_CRFT
, SUM(c_ls2.LS_SNMBL * wPP15_) as LS_SNMBL
, SUM(c_ls2.LS_BSBL * wPP15_) as LS_BSBL
, SUM(c_ls2.LS_BSKBL * wPP15_) as LS_BSKBL
, SUM(c_ls2.LS_BLLDS * wPP15_) as LS_BLLDS
, SUM(c_ls2.LS_BOWL * wPP15_) as LS_BOWL
, SUM(c_ls2.LS_CAMP * wPP15_) as LS_CAMP
, SUM(c_ls2.LS_CANOE * wPP15_) as LS_CANOE
, SUM(c_ls2.LS_CURL * wPP15_) as LS_CURL
, SUM(c_ls2.LS_CYCL * wPP15_) as LS_CYCL
, SUM(c_ls2.LS_FSHT * wPP15_) as LS_FSHT
, SUM(c_ls2.LS_FITWK * wPP15_) as LS_FITWK
, SUM(c_ls2.LS_FITAER * wPP15_) as LS_FITAER
, SUM(c_ls2.LS_FTBL * wPP15_) as LS_FTBL
, SUM(c_ls2.LS_GARD * wPP15_) as LS_GARD
, SUM(c_ls2.LS_GOLF * wPP15_) as LS_GOLF
, SUM(c_ls2.LS_CLUB * wPP15_) as LS_CLUB
, SUM(c_ls2.LS_HIBA * wPP15_) as LS_HIBA
, SUM(c_ls2.LS_HOCKY * wPP15_) as LS_HOCKY
, SUM(c_ls2.LS_HMEXC * wPP15_) as LS_HMEXC
, SUM(c_ls2.LS_ICSKT * wPP15_) as LS_ICSKT
, SUM(c_ls2.LS_ILSKT * wPP15_) as LS_ILSKT
, SUM(c_ls2.LS_JOG * wPP15_) as LS_JOG
, SUM(c_ls2.LS_MRTHN * wPP15_) as LS_MRTHN
, SUM(c_ls2.LS_YOGA * wPP15_) as LS_YOGA
, SUM(c_ls2.LS_VIDEO * wPP15_) as LS_VIDEO
, SUM(c_ls2.LS_PWBT * wPP15_) as LS_PWBT
, SUM(c_ls2.LS_RACSP * wPP15_) as LS_RACSP
, SUM(c_ls2.LS_READ * wPP15_) as LS_READ
, SUM(c_ls2.LS_SKBRD * wPP15_) as LS_SKBRD
, SUM(c_ls2.LS_SKCRS * wPP15_) as LS_SKCRS
, SUM(c_ls2.LS_SKDWH * wPP15_) as LS_SKDWH
, SUM(c_ls2.LS_SNBRD * wPP15_) as LS_SNBRD
, SUM(c_ls2.LS_SCCER * wPP15_) as LS_SCCER
, SUM(c_ls2.LS_SWM * wPP15_) as LS_SWM
, SUM(c_ls2.LS_VOL * wPP15_) as LS_VOL
, SUM(c_ls2.LS_WHLWT * wPP15_) as LS_WHLWT


, SUM(c_ls2.LS_MUSM * wPP15_) as LS_MUSM
, SUM(c_ls2.LS_EXHBT * wPP15_) as LS_EXHBT
, SUM(c_ls2.LS_HIST * wPP15_) as LS_HIST
, SUM(c_ls2.LS_CTPRK * wPP15_) as LS_CTPRK
, SUM(c_ls2.LS_MAXMV * wPP15_) as LS_MAXMV
, SUM(c_ls2.LS_SPEVN * wPP15_) as LS_SPEVN
, SUM(c_ls2.LS_AMUSE * wPP15_) as LS_AMUSE
, SUM(c_ls2.LS_THMPK * wPP15_) as LS_THMPK
, SUM(c_ls2.LS_ZOO * wPP15_) as LS_ZOO
, SUM(c_ls2.LS_OTHAT * wPP15_) as LS_OTHAT
, SUM(c_ls2.LS_STDM * wPP15_) as LS_STDM
, SUM(c_ls2.LS_CS * wPP15_) as LS_CS
, SUM(c_ls2.LS_NTCLB * wPP15_) as LS_NTCLB
, SUM(c_ls2.LS_ODSTG * wPP15_) as LS_ODSTG
, SUM(c_ls2.LS_THTR * wPP15_) as LS_THTR

, SUM(c_ls2.LS_MJTHT * wPP15_) as LS_MJTHT
, SUM(c_ls2.LS_CMTHT * wPP15_) as LS_CMTHT
, SUM(c_ls2.LS_FSTVL * wPP15_) as LS_FSTVL
, SUM(c_ls2.LS_OTTHT * wPP15_) as LS_OTTHT
, SUM(c_ls2.LS_CLSCC * wPP15_) as LS_CLSCC
, SUM(c_ls2.LS_BAR * wPP15_) as LS_BAR
, SUM(c_ls2.LS_CMCLB * wPP15_) as LS_CMCLB
, SUM(c_ls2.LS_DNCLB * wPP15_) as LS_DNCLB
, SUM(c_ls2.LS_DITHT * wPP15_) as LS_DITHT
, SUM(c_ls2.LS_FMFST * wPP15_) as LS_FMFST
, SUM(c_ls2.LS_MSFST * wPP15_) as LS_MSFST
, SUM(c_ls2.LS_MVTHT * wPP15_) as LS_MVTHT
, SUM(c_ls2.LS_NPPK * wPP15_) as LS_NPPK
, SUM(c_ls2.LS_POPCC * wPP15_) as LS_POPCC

, SUM(c_ls2.LS_LATRC * wPP15_) as LS_LATRC
, SUM(c_ls2.LS_LBSBL * wPP15_) as LS_LBSBL
, SUM(c_ls2.LS_LBSKB * wPP15_) as LS_LBSKB
, SUM(c_ls2.LS_LFSKT * wPP15_) as LS_LFSKT
, SUM(c_ls2.LS_LFTBL * wPP15_) as LS_LFTBL
, SUM(c_ls2.LS_LGLF * wPP15_) as LS_LGLF
, SUM(c_ls2.LS_LHCKY * wPP15_) as LS_LHCKY
, SUM(c_ls2.LS_LHSRC * wPP15_) as LS_LHSRC
, SUM(c_ls2.LS_LLCRS * wPP15_) as LS_LLCRS
, SUM(c_ls2.LS_LSCC * wPP15_) as LS_LSCC
, SUM(c_ls2.LS_LTNS * wPP15_) as LS_LTNS
, SUM(c_ls2.LS_FITCLB * wPP15_) as LS_FITCLB
, SUM(c_ls2.LS_GLFCLB * wPP15_) as LS_GLFCLB

FROM c_weight c_weight, c_ls2 c_ls2, amd_temp_reppc pclist WHERE pclist.report_uid = $report_uid and pclist.POSTCODE = c_weight.POSTCODE and pclist.POSTCODE = c_ls2.POSTCODE ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {

$bLS_ADVSP = $row['LS_ADVSP'];
$bLS_CRFT = $row['LS_CRFT'];
$bLS_SNMBL = $row['LS_SNMBL'];
$bLS_BSBL = $row['LS_BSBL'];
$bLS_BSKBL = $row['LS_BSKBL'];
$bLS_BLLDS = $row['LS_BLLDS'];
$bLS_BOWL = $row['LS_BOWL'];
$bLS_CAMP = $row['LS_CAMP'];
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
$bLS_HIBA = $row['LS_HIBA'];
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
$bLS_READ = $row['LS_READ'];
$bLS_SKBRD = $row['LS_SKBRD'];
$bLS_SKCRS = $row['LS_SKCRS'];
$bLS_SKDWH = $row['LS_SKDWH'];
$bLS_SNBRD = $row['LS_SNBRD'];
$bLS_SCCER = $row['LS_SCCER'];
$bLS_SWM = $row['LS_SWM'];
$bLS_VOL = $row['LS_VOL'];
$bLS_WHLWT = $row['LS_WHLWT'];

$demo['leisure'][] = $row['LS_ADVSP'];
$demo['leisure'][] = $row['LS_CRFT'];
$demo['leisure'][] = $row['LS_SNMBL'];
$demo['leisure'][] = $row['LS_BSBL'];
$demo['leisure'][] = $row['LS_BSKBL'];
$demo['leisure'][] = $row['LS_BLLDS'];
$demo['leisure'][] = $row['LS_BOWL'];
$demo['leisure'][] = $row['LS_CAMP'];
$demo['leisure'][] = $row['LS_CANOE'];
$demo['leisure'][] = $row['LS_CURL'];
$demo['leisure'][] = $row['LS_CYCL'];
$demo['leisure'][] = $row['LS_FSHT'];
$demo['leisure'][] = $row['LS_FITWK'];
$demo['leisure'][] = $row['LS_FITAER'];
$demo['leisure'][] = $row['LS_FTBL'];
$demo['leisure'][] = $row['LS_GARD'];
$demo['leisure'][] = $row['LS_GOLF'];
$demo['leisure'][] = $row['LS_CLUB'];
$demo['leisure'][] = $row['LS_HIBA'];
$demo['leisure'][] = $row['LS_HOCKY'];
$demo['leisure'][] = $row['LS_HMEXC'];
$demo['leisure'][] = $row['LS_ICSKT'];
$demo['leisure'][] = $row['LS_ILSKT'];
$demo['leisure'][] = $row['LS_JOG'];
$demo['leisure'][] = $row['LS_MRTHN'];
$demo['leisure'][] = $row['LS_YOGA'];
$demo['leisure'][] = $row['LS_VIDEO'];
$demo['leisure'][] = $row['LS_PWBT'];
$demo['leisure'][] = $row['LS_RACSP'];
$demo['leisure'][] = $row['LS_READ'];
$demo['leisure'][] = $row['LS_SKBRD'];
$demo['leisure'][] = $row['LS_SKCRS'];
$demo['leisure'][] = $row['LS_SKDWH'];
$demo['leisure'][] = $row['LS_SNBRD'];
$demo['leisure'][] = $row['LS_SCCER'];
$demo['leisure'][] = $row['LS_SWM'];
$demo['leisure'][] = $row['LS_VOL'];
$demo['leisure'][] = $row['LS_WHLWT'];

$demo['leisure2'][] =  $row['wPP15_'];
$demo['leisure2'][] =  $row['LS_MUSM'];
$demo['leisure2'][] =  $row['LS_EXHBT'];
$demo['leisure2'][] =  $row['LS_HIST'];
$demo['leisure2'][] =  $row['LS_CTPRK'];
$demo['leisure2'][] =  $row['LS_MAXMV'];
$demo['leisure2'][] =  $row['LS_SPEVN'];
$demo['leisure2'][] =  $row['LS_AMUSE'];
$demo['leisure2'][] =  $row['LS_THMPK'];
$demo['leisure2'][] =  $row['LS_ZOO'];
$demo['leisure2'][] =  $row['LS_OTHAT'];
$demo['leisure2'][] =  $row['LS_STDM'];
$demo['leisure2'][] =  $row['LS_CS'];
$demo['leisure2'][] =  $row['LS_NTCLB'];
$demo['leisure2'][] =  $row['LS_ODSTG'];
$demo['leisure2'][] =  $row['LS_THTR'];

$demo['leisure2'][] =  $row['LS_MJTHT'];
$demo['leisure2'][] =  $row['LS_CMTHT'];
$demo['leisure2'][] =  $row['LS_FSTVL'];
$demo['leisure2'][] =  $row['LS_OTTHT'];
$demo['leisure2'][] =  $row['LS_CLSCC'];
$demo['leisure2'][] =  $row['LS_BAR'];
$demo['leisure2'][] =  $row['LS_CMCLB'];
$demo['leisure2'][] =  $row['LS_DNCLB'];
$demo['leisure2'][] =  $row['LS_DITHT'];
$demo['leisure2'][] =  $row['LS_FMFST'];
$demo['leisure2'][] =  $row['LS_MSFST'];
$demo['leisure2'][] =  $row['LS_MVTHT'];
$demo['leisure2'][] =  $row['LS_NPPK'];
$demo['leisure2'][] =  $row['LS_POPCC'];

$demo['leisure2'][] =  $row['LS_LATRC'];
$demo['leisure2'][] =  $row['LS_LBSBL'];
$demo['leisure2'][] =  $row['LS_LBSKB'];
$demo['leisure2'][] =  $row['LS_LFSKT'];
$demo['leisure2'][] =  $row['LS_LFTBL'];
$demo['leisure2'][] =  $row['LS_LGLF'];
$demo['leisure2'][] =  $row['LS_LHCKY'];
$demo['leisure2'][] =  $row['LS_LHSRC'];
$demo['leisure2'][] =  $row['LS_LLCRS'];
$demo['leisure2'][] =  $row['LS_LSCC'];
$demo['leisure2'][] =  $row['LS_LTNS'];
$demo['leisure2'][] =  $row['LS_FITCLB'];
$demo['leisure2'][] =  $row['LS_GLFCLB'];

}
mysqli_free_result($result);
}



// flyers
$query = "SELECT 
SUM(c_weight.wPP15_) as wPP15_
,SUM(c_fly.FLY_DPN * wPP15_) as FLY_DPN
, SUM(c_fly.FLY_DPS * wPP15_) as FLY_DPS
, SUM(c_fly.FLY_DPO * wPP15_) as FLY_DPO
, SUM(c_fly.FLY_DPF * wPP15_) as FLY_DPF
, SUM(c_fly.FLY_CNPN * wPP15_) as FLY_CNPN
, SUM(c_fly.FLY_CNPS * wPP15_) as FLY_CNPS
, SUM(c_fly.FLY_CNPO * wPP15_) as FLY_CNPO
, SUM(c_fly.FLY_CNPF * wPP15_) as FLY_CNPF
, SUM(c_fly.FLY_DOORN * wPP15_) as FLY_DOORN
, SUM(c_fly.FLY_DOORS * wPP15_) as FLY_DOORS
, SUM(c_fly.FLY_DOORO * wPP15_) as FLY_DOORO
, SUM(c_fly.FLY_DOORF * wPP15_) as FLY_DOORF


, SUM(c_fly.FLY_CPN * wPP15_) as FLY_CPN
, SUM(c_fly.FLY_CPS * wPP15_) as FLY_CPS
, SUM(c_fly.FLY_CPO * wPP15_) as FLY_CPO
, SUM(c_fly.FLY_CPF * wPP15_) as FLY_CPF
, SUM(c_fly.FLY_STOREN * wPP15_) as FLY_STOREN
, SUM(c_fly.FLY_STORES * wPP15_) as FLY_STORES
, SUM(c_fly.FLY_STOREO * wPP15_) as FLY_STOREO
, SUM(c_fly.FLY_STOREF * wPP15_) as FLY_STOREF
, SUM(c_fly.FLY_MAILN * wPP15_) as FLY_MAILN
, SUM(c_fly.FLY_MAILS * wPP15_) as FLY_MAILS
, SUM(c_fly.FLY_MAILO * wPP15_) as FLY_MAILO
, SUM(c_fly.FLY_MAILF * wPP15_) as FLY_MAILF
, SUM(c_fly.FLY_CPWEBN * wPP15_) as FLY_CPWEBN
, SUM(c_fly.FLY_CPWEBS * wPP15_) as FLY_CPWEBS
, SUM(c_fly.FLY_CPWEBO * wPP15_) as FLY_CPWEBO
, SUM(c_fly.FLY_CPWEBF * wPP15_) as FLY_CPWEBF
, SUM(c_fly.FLY_ATTVF * wPP15_) as FLY_ATTVF
, SUM(c_fly.FLY_ATTSF * wPP15_) as FLY_ATTSF
, SUM(c_fly.FLY_ATTSU * wPP15_) as FLY_ATTSU
, SUM(c_fly.FLY_ATTVU * wPP15_) as FLY_ATTVU
, SUM(c_fly.FLY_SSDAY * wPP15_) as FLY_SSDAY
, SUM(c_fly.FLY_SSWK * wPP15_) as FLY_SSWK
, SUM(c_fly.FLY_SWKL * wPP15_) as FLY_SWKL
, SUM(c_fly.FLY_WSDAY * wPP15_) as FLY_WSDAY
, SUM(c_fly.FLY_WSWK * wPP15_) as FLY_WSWK
, SUM(c_fly.FLY_WWKL * wPP15_) as FLY_WWKL

FROM c_fly c_fly, c_weight c_weight, amd_temp_reppc pclist WHERE pclist.report_uid = $report_uid and pclist.POSTCODE = c_fly.POSTCODE and pclist.POSTCODE = c_weight.POSTCODE ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$flypp15_ = $row['wPP15_'];
$bFLY_DPN = $row['FLY_DPN'];
$bFLY_DPS = $row['FLY_DPS'];
$bFLY_DPO = $row['FLY_DPO'];
$bFLY_DPF = $row['FLY_DPF'];
$bFLY_CNPN = $row['FLY_CNPN'];
$bFLY_CNPS = $row['FLY_CNPS'];
$bFLY_CNPO = $row['FLY_CNPO'];
$bFLY_CNPF = $row['FLY_CNPF'];
$bFLY_DOORN = $row['FLY_DOORN'];
$bFLY_DOORS = $row['FLY_DOORS'];
$bFLY_DOORO = $row['FLY_DOORO'];
$bFLY_DOORF = $row['FLY_DOORF'];

$demo['flyer'][] = $row['wPP15_'];
$demo['flyer'][]= $row['FLY_DPN'];
$demo['flyer'][] = $row['FLY_DPS'];
$demo['flyer'][] = $row['FLY_DPO'];
$demo['flyer'][] = $row['FLY_DPF'];
$demo['flyer'][] = $row['FLY_CNPN'];
$demo['flyer'][] = $row['FLY_CNPS'];
$demo['flyer'][] = $row['FLY_CNPO'];
$demo['flyer'][] = $row['FLY_CNPF'];
$demo['flyer'][] = $row['FLY_DOORN'];
$demo['flyer'][] = $row['FLY_DOORS'];
$demo['flyer'][] = $row['FLY_DOORO'];
$demo['flyer'][] = $row['FLY_DOORF'];

$demo['flyer1'][] = $row['wPP15_'];
$demo['flyer1'][] = $row['FLY_CPN'];
$demo['flyer1'][] = $row['FLY_CPS'];
$demo['flyer1'][] = $row['FLY_CPO'];
$demo['flyer1'][] = $row['FLY_CPF'];
$demo['flyer1'][] = $row['FLY_STOREN'];
$demo['flyer1'][] = $row['FLY_STORES'];
$demo['flyer1'][] = $row['FLY_STOREO'];
$demo['flyer1'][] = $row['FLY_STOREF'];
$demo['flyer1'][] = $row['FLY_MAILN'];
$demo['flyer1'][] = $row['FLY_MAILS'];
$demo['flyer1'][] = $row['FLY_MAILO'];
$demo['flyer1'][] = $row['FLY_MAILF'];
$demo['flyer1'][] = $row['FLY_CPWEBN'];
$demo['flyer1'][] = $row['FLY_CPWEBS'];
$demo['flyer1'][] = $row['FLY_CPWEBO'];
$demo['flyer1'][] = $row['FLY_CPWEBF'];
$demo['flyer1'][] = $row['FLY_ATTVF'];
$demo['flyer1'][] = $row['FLY_ATTSF'];
$demo['flyer1'][] = $row['FLY_ATTSU'];
$demo['flyer1'][] = $row['FLY_ATTVU'];
$demo['flyer1'][] = $row['FLY_SSDAY'];
$demo['flyer1'][] = $row['FLY_SSWK'];
$demo['flyer1'][] = $row['FLY_SWKL'];
$demo['flyer1'][] = $row['FLY_WSDAY'];
$demo['flyer1'][] = $row['FLY_WSWK'];
$demo['flyer1'][] = $row['FLY_WWKL'];


}
mysqli_free_result($result);
}


// spending and you are DONE !!!!!!!!!!!!!!!

$query = "SELECT 
SUM(c_sp1.sp1hh_tot) as sp1hh_tot
,  SUM(c_sp1.D1000_1560 * c_sp1.sp1hh_tot) as aD1000_1560
,  SUM(c_sp1.D1000_1520 * c_sp1.sp1hh_tot) as aD1000_1520
,  SUM(c_sp1.D2000_2070 * c_sp1.sp1hh_tot) as aD2000_2070
,  SUM(c_sp1.D2200_2380 * c_sp1.sp1hh_tot) as aD2200_2380
,  SUM(c_sp1.D2200_2230 * c_sp1.sp1hh_tot) as aD2200_2230
,  SUM(c_sp1.D2240_2244 * c_sp1.sp1hh_tot) as aD2240_2244
,  SUM(c_sp1.D2270_2300 * c_sp1.sp1hh_tot) as aD2270_2300
,  SUM(c_sp1.D2340_2370 * c_sp1.sp1hh_tot) as aD2340_2370
,  SUM(c_sp1.D2500_2730 * c_sp1.sp1hh_tot) as aD2500_2730
,  SUM(c_sp1.D2540_2680 * c_sp1.sp1hh_tot) as aD2540_2680
,  SUM(c_sp1.D2540 * c_sp1.sp1hh_tot) as aD2540
,  SUM(c_sp1.D2542 * c_sp1.sp1hh_tot) as aD2542
,  SUM(c_sp1.D2550 * c_sp1.sp1hh_tot) as aD2550
,  SUM(c_sp1.D2552 * c_sp1.sp1hh_tot) as aD2552
,  SUM(c_sp1.D2554 * c_sp1.sp1hh_tot) as aD2554
,  SUM(c_sp1.D2560 * c_sp1.sp1hh_tot) as aD2560
,  SUM(c_sp1.D2570 * c_sp1.sp1hh_tot) as aD2570
,  SUM(c_sp1.D2580 * c_sp1.sp1hh_tot) as aD2580
,  SUM(c_sp1.D2582 * c_sp1.sp1hh_tot) as aD2582
,  SUM(c_sp1.D2584 * c_sp1.sp1hh_tot) as aD2584
,  SUM(c_sp1.D2586 * c_sp1.sp1hh_tot) as aD2586
,  SUM(c_sp1.D2590 * c_sp1.sp1hh_tot) as aD2590
,  SUM(c_sp1.D2600_2602 * c_sp1.sp1hh_tot) as aD2600_2602
,  SUM(c_sp1.D2600 * c_sp1.sp1hh_tot) as aD2600
,  SUM(c_sp1.D2602 * c_sp1.sp1hh_tot) as aD2602
,  SUM(c_sp1.D2610_2630 * c_sp1.sp1hh_tot) as aD2610_2630
,  SUM(c_sp1.D2610 * c_sp1.sp1hh_tot) as aD2610
,  SUM(c_sp1.D2620 * c_sp1.sp1hh_tot) as aD2620
,  SUM(c_sp1.D2630 * c_sp1.sp1hh_tot) as aD2630
,  SUM(c_sp1.D2640 * c_sp1.sp1hh_tot) as aD2640
,  SUM(c_sp1.D2650 * c_sp1.sp1hh_tot) as aD2650
,  SUM(c_sp1.D2660 * c_sp1.sp1hh_tot) as aD2660
,  SUM(c_sp1.D2670 * c_sp1.sp1hh_tot) as aD2670
,  SUM(c_sp1.D2672 * c_sp1.sp1hh_tot) as aD2672
,  SUM(c_sp1.D2674 * c_sp1.sp1hh_tot) as aD2674
,  SUM(c_sp1.D2680 * c_sp1.sp1hh_tot) as aD2680
,  SUM(c_sp2.D2800_2975 * c_sp1.sp1hh_tot) as aD2800_2975
,  SUM(c_sp2.D2800_2840 * c_sp1.sp1hh_tot) as aD2800_2840
,  SUM(c_sp2.D2850_2890 * c_sp1.sp1hh_tot) as aD2850_2890
,  SUM(c_sp2.D2900_2920 * c_sp1.sp1hh_tot) as aD2900_2920
,  SUM(c_sp2.D2950_2975 * c_sp1.sp1hh_tot) as aD2950_2975
,  SUM(c_sp2.D3000_3260 * c_sp1.sp1hh_tot) as aD3000_3260
,  SUM(c_sp2.D3000_3004 * c_sp1.sp1hh_tot) as aD3000_3004
,  SUM(c_sp2.D3050_3130 * c_sp1.sp1hh_tot) as aD3050_3130
,  SUM(c_sp2.D3300_3384 * c_sp1.sp1hh_tot) as aD3300_3384
,  SUM(c_sp2.D3500_3580 * c_sp1.sp1hh_tot) as aD3500_3580
,  SUM(c_sp2.D3530_3560 * c_sp1.sp1hh_tot) as aD3530_3560
,  SUM(c_sp2.D3570_3580 * c_sp1.sp1hh_tot) as aD3570_3580
,  SUM(c_sp2.D3700_4190 * c_sp1.sp1hh_tot) as aD3700_4190
,  SUM(c_sp2.D3700_3830 * c_sp1.sp1hh_tot) as aD3700_3830
,  SUM(c_sp2.D3700 * c_sp1.sp1hh_tot) as aD3700
,  SUM(c_sp2.D3710 * c_sp1.sp1hh_tot) as aD3710
,  SUM(c_sp2.D3720 * c_sp1.sp1hh_tot) as aD3720
,  SUM(c_sp2.D3750_3760 * c_sp1.sp1hh_tot) as aD3750_3760
,  SUM(c_sp2.D3750_3752 * c_sp1.sp1hh_tot) as aD3750_3752
,  SUM(c_sp2.D3770_3774 * c_sp1.sp1hh_tot) as aD3770_3774
,  SUM(c_sp2.D3900_3980 * c_sp1.sp1hh_tot) as aD3900_3980
,  SUM(c_sp2.D3900_3918 * c_sp1.sp1hh_tot) as aD3900_3918
,  SUM(c_sp2.D3900 * c_sp1.sp1hh_tot) as aD3900
,  SUM(c_sp2.D4000_4070 * c_sp1.sp1hh_tot) as aD4000_4070
,  SUM(c_sp2.D4000_4040 * c_sp1.sp1hh_tot) as aD4000_4040
,  SUM(c_sp2.D4100_4190 * c_sp1.sp1hh_tot) as aD4100_4190
,  SUM(c_sp2.D4100_4140 * c_sp1.sp1hh_tot) as aD4100_4140
,  SUM(c_sp2.D4150_4170 * c_sp1.sp1hh_tot) as aD4150_4170
,  SUM(c_sp2.D4180 * c_sp1.sp1hh_tot) as aD4180
,  SUM(c_sp3.D4300_4340 * c_sp1.sp1hh_tot) as aD4300_4340
,  SUM(c_sp3.D4400_4470 * c_sp1.sp1hh_tot) as aD4400_4470
,  SUM(c_sp3.D4400_4410 * c_sp1.sp1hh_tot) as aD4400_4410
,  SUM(c_sp3.D4500_4540 * c_sp1.sp1hh_tot) as aD4500_4540
,  SUM(c_sp3.D4520 * c_sp1.sp1hh_tot) as aD4520
,  SUM(c_sp3.D4530 * c_sp1.sp1hh_tot) as aD4530
,  SUM(c_sp3.D4800_4840 * c_sp1.sp1hh_tot) as aD4800_4840
,  SUM(c_sp3.D4600_4720 * c_sp1.sp1hh_tot) as aD4600_4720
,  SUM(c_sp3.D4630_4660 * c_sp1.sp1hh_tot) as aD4630_4660
,  SUM(c_sp3.D4710_4720 * c_sp1.sp1hh_tot) as aD4710_4720
,  SUM(c_sp3.D4900_4930 * c_sp1.sp1hh_tot) as aD4900_4930
,  SUM(c_sp3.D5000_5084 * c_sp1.sp1hh_tot) as aD5000_5084
,  SUM(c_sp3.D5200_5230 * c_sp1.sp1hh_tot) as aD5200_5230
,  SUM(c_sp3.D5220_5230 * c_sp1.sp1hh_tot) as aD5220_5230

,  SUM(c_sp1.D1000_4840 * c_sp1.sp1hh_tot) as aD1000_4840
,  SUM(c_sp1.D1000_5230 * c_sp1.sp1hh_tot) as aD1000_5230


 FROM c_sp1 c_sp1, c_sp2 c_sp2, c_sp3 c_sp3, amd_temp_reppc pclist WHERE c_sp1.POSTCODE = pclist.POSTCODE AND c_sp2.POSTCODE = pclist.POSTCODE AND c_sp3.POSTCODE = pclist.POSTCODE AND pclist.report_uid = $report_uid ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {



$demo['spending'][] = $row['sp1hh_tot'];

$demo['spending'][] =  $row['aD1000_1560'];
$demo['spending'][] =  $row['aD1000_1520'];
$demo['spending'][] =  $row['aD2000_2070'];
$demo['spending'][] =  $row['aD2200_2380'];
$demo['spending'][] =  $row['aD2200_2230'];
$demo['spending'][] =  $row['aD2240_2244'];
$demo['spending'][] =  $row['aD2270_2300'];
$demo['spending'][] =  $row['aD2340_2370'];
$demo['spending'][] =  $row['aD2500_2730'];
$demo['spending'][] =  $row['aD2540_2680'];
$demo['spending'][] =  $row['aD2540'];
$demo['spending'][] =  $row['aD2542'];
$demo['spending'][] =  $row['aD2550'];
$demo['spending'][] =  $row['aD2552'];
$demo['spending'][] =  $row['aD2554'];
$demo['spending'][] =  $row['aD2560'];
$demo['spending'][] =  $row['aD2570'];
$demo['spending'][] =  $row['aD2580'];
$demo['spending'][] =  $row['aD2582'];
$demo['spending'][] =  $row['aD2584'];
$demo['spending'][] =  $row['aD2586'];
$demo['spending'][] =  $row['aD2590'];
$demo['spending'][] =  $row['aD2600_2602'];
$demo['spending'][] =  $row['aD2600'];
$demo['spending'][] =  $row['aD2602'];
$demo['spending'][] =  $row['aD2610_2630'];
$demo['spending'][] =  $row['aD2610'];
$demo['spending'][] =  $row['aD2620'];
$demo['spending'][] =  $row['aD2630'];
$demo['spending'][] =  $row['aD2640'];
$demo['spending'][] =  $row['aD2650'];
$demo['spending'][] =  $row['aD2660'];
$demo['spending'][] =  $row['aD2670'];
$demo['spending'][] =  $row['aD2672'];
$demo['spending'][] =  $row['aD2674'];
$demo['spending'][] =  $row['aD2680'];
$demo['spending'][] =  $row['aD2800_2975'];
$demo['spending'][] =  $row['aD2800_2840'];
$demo['spending'][] =  $row['aD2850_2890'];
$demo['spending'][] =  $row['aD2900_2920'];
$demo['spending'][] =  $row['aD2950_2975'];
$demo['spending'][] =  $row['aD3000_3260'];
$demo['spending'][] =  $row['aD3000_3004'];
$demo['spending'][] =  $row['aD3050_3130'];
$demo['spending'][] =  $row['aD3300_3384'];
$demo['spending'][] =  $row['aD3500_3580'];
$demo['spending'][] =  $row['aD3530_3560'];
$demo['spending'][] =  $row['aD3570_3580'];
$demo['spending'][] =  $row['aD3700_4190'];
$demo['spending'][] =  $row['aD3700_3830'];
$demo['spending'][] =  $row['aD3700'];
$demo['spending'][] =  $row['aD3710'];
$demo['spending'][] =  $row['aD3720'];
$demo['spending'][] =  $row['aD3750_3760'];
$demo['spending'][] =  $row['aD3750_3752'];
$demo['spending'][] =  $row['aD3770_3774'];
$demo['spending'][] =  $row['aD3900_3980'];
$demo['spending'][] =  $row['aD3900_3918'];
$demo['spending'][] =  $row['aD3900'];
$demo['spending'][] =  $row['aD4000_4070'];
$demo['spending'][] =  $row['aD4000_4040'];
$demo['spending'][] =  $row['aD4100_4190'];
$demo['spending'][] =  $row['aD4100_4140'];
$demo['spending'][] =  $row['aD4150_4170'];
$demo['spending'][] =  $row['aD4180'];
$demo['spending'][] =  $row['aD4300_4340'];
$demo['spending'][] =  $row['aD4400_4470'];
$demo['spending'][] =  $row['aD4400_4410'];
$demo['spending'][] =  $row['aD4500_4540'];
$demo['spending'][] =  $row['aD4520'];
$demo['spending'][] =  $row['aD4530'];
$demo['spending'][] =  $row['aD4800_4840'];
$demo['spending'][] =  $row['aD4600_4720'];
$demo['spending'][] =  $row['aD4630_4660'];
$demo['spending'][] =  $row['aD4710_4720'];
$demo['spending'][] =  $row['aD4900_4930'];
$demo['spending'][] =  $row['aD5000_5084'];
$demo['spending'][] =  $row['aD5200_5230'];
$demo['spending'][] =  $row['aD5220_5230'];

$demo['spending'][] =  $row['aD1000_4840'];
$demo['spending'][] =  $row['D1000_5230'];


$sp1hh_tot = $row['sp1hh_tot'];
$aD1000_1560c = $row['aD1000_1560'];
$aD1000_1520c = $row['aD1000_1520'];
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
$aD1000_4840c = $row['aD1000_4840'];
$aD1000_5230c = $row['aD1000_5230'];
			}				
		}

$query = "SELECT
  SUM(c_weight.wHH_TOT) as wHH_TOT
, SUM(c_weight.wPP18_) as wPP18_

, SUM(at1.AU_N0*c_weight.wHH_TOT) as AU_N0
, SUM(at1.AU_N1*c_weight.wHH_TOT) as AU_N1
, SUM(at1.AU_N2*c_weight.wHH_TOT) as AU_N2
, SUM(at1.AU_N3*c_weight.wHH_TOT) as AU_N3
, SUM(at1.AU_N4_*c_weight.wHH_TOT) as AU_N4_
, SUM(at1.AU_KM0 * wPP18_) as AU_KM0
, SUM(at1.AU_KM1_9 * wPP18_) as AU_KM1_9
, SUM(at1.AU_KM10_19 * wPP18_) as AU_KM10_19
, SUM(at1.AU_KM20_29 * wPP18_) as AU_KM20_29
, SUM(at1.AU_KM30_ * wPP18_) as AU_KM30_
, SUM(at1.AU_MKBUI * wPP18_) as AU_MKBUI
, SUM(at1.AU_MKCAD * wPP18_) as AU_MKCAD
, SUM(at1.AU_MKCHE * wPP18_) as AU_MKCHE
, SUM(at1.AU_MKCHR * wPP18_) as AU_MKCHR
, SUM(at1.AU_MKDOD * wPP18_) as AU_MKDOD
, SUM(at1.AU_MKFOR * wPP18_) as AU_MKFOR
, SUM(at1.AU_MKGMC * wPP18_) as AU_MKGMC
, SUM(at1.AU_MKJEE * wPP18_) as AU_MKJEE
, SUM(at1.AU_MKLIN * wPP18_) as AU_MKLIN
, SUM(at1.AU_MKMER * wPP18_) as AU_MKMER
, SUM(at1.AU_MKOLD * wPP18_) as AU_MKOLD
, SUM(at1.AU_MKPLY * wPP18_) as AU_MKPLY
, SUM(at1.AU_MKPON * wPP18_) as AU_MKPON
, SUM(at1.AU_MKSAT * wPP18_) as AU_MKSAT
, SUM(at1.AU_MKDOM * wPP18_) as AU_MKDOM
, SUM(at1.AU_MKACU * wPP18_) as AU_MKACU
, SUM(at1.AU_MKAU_D * wPP18_) as AU_MKAU_D
, SUM(at1.AU_MKBMW * wPP18_) as AU_MKBMW
, SUM(at1.AU_MKHON * wPP18_) as AU_MKHON
, SUM(at1.AU_MKHYU * wPP18_) as AU_MKHYU
, SUM(at1.AU_MKINF * wPP18_) as AU_MKINF
, SUM(at1.AU_MKKIA * wPP18_) as AU_MKKIA
, SUM(at1.AU_MKLEX * wPP18_) as AU_MKLEX
, SUM(at1.AU_MKMAZ * wPP18_) as AU_MKMAZ
, SUM(at1.AU_MKBEN * wPP18_) as AU_MKBEN
, SUM(at1.AU_MKMIT * wPP18_) as AU_MKMIT
, SUM(at1.AU_MKNIS * wPP18_) as AU_MKNIS
, SUM(at1.AU_MKSUB * wPP18_) as AU_MKSUB
, SUM(at1.AU_MKSUZ * wPP18_) as AU_MKSUZ
, SUM(at1.AU_MKTOY * wPP18_) as AU_MKTOY
, SUM(at1.AU_MKVW * wPP18_) as AU_MKVW
, SUM(at1.AU_MKVOL * wPP18_) as AU_MKVOL
, SUM(at1.AU_MKFGN * wPP18_) as AU_MKFGN
, SUM(at1.AU_TPMFS * wPP18_) as AU_TPMFS
, SUM(at1.AU_TPSCOMP * wPP18_) as AU_TPSCOMP
, SUM(at1.AU_TPSPO * wPP18_) as AU_TPSPO
, SUM(at1.AU_TPMVSW * wPP18_) as AU_TPMVSW
, SUM(at1.AU_TPSUV * wPP18_) as AU_TPSUV
, SUM(at1.AU_TPPIC * wPP18_) as AU_TPPIC
, SUM(at1.AU_TPFVAN * wPP18_) as AU_TPFVAN
, SUM(at1.AU_TPOTH * wPP18_) as AU_TPOTH
, SUM(at1.AU_YR14_ * wPP18_) as AU_YR14_
, SUM(at1.AU_YR13 * wPP18_) as AU_YR13
, SUM(at1.AU_YR12 * wPP18_) as AU_YR12
, SUM(at1.AU_YR11 * wPP18_) as AU_YR11
, SUM(at1.AU_YR10 * wPP18_) as AU_YR10
, SUM(at1.AU_YR09 * wPP18_) as AU_YR09
, SUM(at1.AU_YR08 * wPP18_) as AU_YR08
, SUM(at1.AU_YR07 * wPP18_) as AU_YR07
, SUM(at1.AU_YR06 * wPP18_) as AU_YR06
, SUM(at1.AU_YR05 * wPP18_) as AU_YR05
, SUM(at1.AU_YR04 * wPP18_) as AU_YR04
, SUM(at1.AU_YR_03 * wPP18_) as AU_YR_03
, SUM(at1.AU_YRNO * wPP18_) as AU_YRNO
, SUM(at1.AU_NEWBN * wPP18_) as AU_NEWBN
, SUM(at1.AU_NEWBU * wPP18_) as AU_NEWBU
, SUM(at1.AU_NEWLN * wPP18_) as AU_NEWLN
, SUM(at1.AU_NEWLU * wPP18_) as AU_NEWLU
, SUM(at1.AU_NEWNO * wPP18_) as AU_NEWNO
, SUM(at1.AU_V_9 * wPP18_) as AU_V_9
, SUM(at1.AU_V10_14 * wPP18_) as AU_V10_14
, SUM(at1.AU_V15_19 * wPP18_) as AU_V15_19
, SUM(at1.AU_V20_24 * wPP18_) as AU_V20_24
, SUM(at1.AU_V25_29 * wPP18_) as AU_V25_29
, SUM(at1.AU_V30_39 * wPP18_) as AU_V30_39
, SUM(at1.AU_V40_ * wPP18_) as AU_V40_
, SUM(at1.AU_PPUP * wPP18_) as AU_PPUP
, SUM(at1.AU_PPULP * wPP18_) as AU_PPULP
, SUM(at1.AU_PPULN * wPP18_) as AU_PPULN
, SUM(at1.AU_PPUN * wPP18_) as AU_PPUN
, SUM(at1.AU_PV_9 * wPP18_) as AU_PV_9
, SUM(at1.AU_PV10_14 * wPP18_) as AU_PV10_14
, SUM(at1.AU_PV15_19 * wPP18_) as AU_PV15_19
, SUM(at1.AU_PV20_24 * wPP18_) as AU_PV20_24
, SUM(at1.AU_PV25_29 * wPP18_) as AU_PV25_29
, SUM(at1.AU_PV30_39 * wPP18_) as AU_PV30_39
, SUM(at1.AU_PV40_ * wPP18_) as AU_PV40_
, SUM(at1.AU_PTPSED * wPP18_) as AU_PTPSED
, SUM(at1.AU_PTPSCOM * wPP18_) as AU_PTPSCOM
, SUM(at1.AU_PTPSPO * wPP18_) as AU_PTPSPO
, SUM(at1.AU_PTPMVSW * wPP18_) as AU_PTPMVSW
, SUM(at1.AU_PTPSUV * wPP18_) as AU_PTPSUV
, SUM(at1.AU_PTPPIC * wPP18_) as AU_PTPPIC
, SUM(at1.AU_PTPFVAN * wPP18_) as AU_PTPFVAN
, SUM(at1.AU_PTPOTH * wPP18_) as AU_PTPOTH
, SUM(at1.AU_MNBDN * wPP18_) as AU_MNBDN
, SUM(at1.AU_MNBDG * wPP18_) as AU_MNBDG
, SUM(at1.AU_MNBDD * wPP18_) as AU_MNBDD
, SUM(at1.AU_MNBDS * wPP18_) as AU_MNBDS
, SUM(at1.AU_MNBDL * wPP18_) as AU_MNBDL
, SUM(at1.AU_MNBDF * wPP18_) as AU_MNBDF
, SUM(at1.AU_MNBDU * wPP18_) as AU_MNBDU
, SUM(at1.AU_MNOCN * wPP18_) as AU_MNOCN
, SUM(at1.AU_MNOCG * wPP18_) as AU_MNOCG
, SUM(at1.AU_MNOCD * wPP18_) as AU_MNOCD
, SUM(at1.AU_MNOCS * wPP18_) as AU_MNOCS
, SUM(at1.AU_MNOCL * wPP18_) as AU_MNOCL
, SUM(at1.AU_MNOCF * wPP18_) as AU_MNOCF
, SUM(at1.AU_MNOCU * wPP18_) as AU_MNOCU
, SUM(at1.AU_MNBKN * wPP18_) as AU_MNBKN
, SUM(at1.AU_MNBKG * wPP18_) as AU_MNBKG
, SUM(at1.AU_MNBKD * wPP18_) as AU_MNBKD
, SUM(at1.AU_MNBKS * wPP18_) as AU_MNBKS
, SUM(at1.AU_MNBKL * wPP18_) as AU_MNBKL
, SUM(at1.AU_MNBKF * wPP18_) as AU_MNBKF
, SUM(at1.AU_MNBKU * wPP18_) as AU_MNBKU
, SUM(at1.AU_MNTRN * wPP18_) as AU_MNTRN
, SUM(at1.AU_MNTRG * wPP18_) as AU_MNTRG
, SUM(at1.AU_MNTRD * wPP18_) as AU_MNTRD
, SUM(at1.AU_MNTRS * wPP18_) as AU_MNTRS
, SUM(at1.AU_MNTRL * wPP18_) as AU_MNTRL
, SUM(at1.AU_MNTRF * wPP18_) as AU_MNTRF
, SUM(at1.AU_MNTRU * wPP18_) as AU_MNTRU
, SUM(at1.AU_MNRPN * wPP18_) as AU_MNRPN
, SUM(at1.AU_MNRPG * wPP18_) as AU_MNRPG
, SUM(at1.AU_MNRPD * wPP18_) as AU_MNRPD
, SUM(at1.AU_MNRPS * wPP18_) as AU_MNRPS
, SUM(at1.AU_MNRPL * wPP18_) as AU_MNRPL
, SUM(at1.AU_MNRPF * wPP18_) as AU_MNRPF
, SUM(at1.AU_MNRPU * wPP18_) as AU_MNRPU
, SUM(at1.AU_MNTPN * wPP18_) as AU_MNTPN
, SUM(at1.AU_MNTPG * wPP18_) as AU_MNTPG
, SUM(at1.AU_MNTPD * wPP18_) as AU_MNTPD
, SUM(at1.AU_MNTPS * wPP18_) as AU_MNTPS
, SUM(at1.AU_MNTPL * wPP18_) as AU_MNTPL
, SUM(at1.AU_MNTPF * wPP18_) as AU_MNTPF
, SUM(at1.AU_MNTPU * wPP18_) as AU_MNTPU


, SUM(at1.AU_VSGR * wPP18_) as AU_VSGR
, SUM(at1.AU_VSAG * wPP18_) as AU_VSAG
, SUM(at1.AU_VSST * wPP18_) as AU_VSST
, SUM(at1.AU_VSCT * wPP18_) as AU_VSCT
, SUM(at1.AU_VSCC * wPP18_) as AU_VSCC
, SUM(at1.AU_VSGM * wPP18_) as AU_VSGM
, SUM(at1.AU_VSGY * wPP18_) as AU_VSGY

, SUM(at1.AU_VSMD * wPP18_) as AU_VSMD
, SUM(at1.AU_VSTR * wPP18_) as AU_VSTR
, SUM(at1.AU_VSLB * wPP18_) as AU_VSLB
, SUM(at1.AU_VSNP * wPP18_) as AU_VSNP
, SUM(at1.AU_VSOKT * wPP18_) as AU_VSOKT
, SUM(at1.AU_VSPS * wPP18_) as AU_VSPS
, SUM(at1.AU_VSSG * wPP18_) as AU_VSSG
, SUM(at1.AU_VSSS * wPP18_) as AU_VSSS
, SUM(at1.AU_VSWM * wPP18_) as AU_VSWM
, SUM(at1.AU_VSDL * wPP18_) as AU_VSDL
, SUM(at1.AU_VSCTCW * wPP18_) as AU_VSCTCW
, SUM(at1.AU_VSOT * wPP18_) as AU_VSOT

, SUM(at1.AU_GASCT * wPP18_) as AU_GASCT
, SUM(at1.AU_GASCR * wPP18_) as AU_GASCR
, SUM(at1.AU_GASES * wPP18_) as AU_GASES
, SUM(at1.AU_GASPT * wPP18_) as AU_GASPT
, SUM(at1.AU_GASSL * wPP18_) as AU_GASSL
, SUM(at1.AU_GASOT * wPP18_) as AU_GASOT
, SUM(at1.AU_BUYERN * wPP18_) as AU_BUYERN
, SUM(at1.AU_PUN * wPP18_) as AU_PUN
, SUM(at1.AU_PUPN * wPP18_) as AU_PUPN
, SUM(at1.AU_PUPU * wPP18_) as AU_PUPU
, SUM(at1.AU_PULN * wPP18_) as AU_PULN
, SUM(at1.AU_PULU * wPP18_) as AU_PULU


FROM c_at at1, amd_temp_reppc pclist, c_weight c_weight WHERE at1.POSTCODE = pclist.POSTCODE AND c_weight.POSTCODE = pclist.POSTCODE AND pclist.report_uid = $report_uid";
	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
$demo['auto'][] = $row['wHH_TOT'];
$demo['auto'][] = $row['wPP18_'];
$demo['auto'][] = $row['AU_N0'];
$demo['auto'][] = $row['AU_N1'];
$demo['auto'][] = $row['AU_N2'];
$demo['auto'][] = $row['AU_N3'];
$demo['auto'][] = $row['AU_N4_'];
$demo['auto'][] = $row['AU_KM0'];
$demo['auto'][] = $row['AU_KM1_9'];
$demo['auto'][] = $row['AU_KM10_19'];
$demo['auto'][] = $row['AU_KM20_29'];
$demo['auto'][] = $row['AU_KM30_'];
$demo['auto'][] = $row['AU_MKBUI'];
$demo['auto'][] = $row['AU_MKCAD'];
$demo['auto'][] = $row['AU_MKCHE'];
$demo['auto'][] = $row['AU_MKCHR'];
$demo['auto'][] = $row['AU_MKDOD'];
$demo['auto'][] = $row['AU_MKFOR'];
$demo['auto'][] = $row['AU_MKGMC'];
$demo['auto'][] = $row['AU_MKJEE'];
$demo['auto'][] = $row['AU_MKLIN'];
$demo['auto'][] = $row['AU_MKMER'];
$demo['auto'][] = $row['AU_MKOLD'];
$demo['auto'][] = $row['AU_MKPLY'];
$demo['auto'][] = $row['AU_MKPON'];
$demo['auto'][] = $row['AU_MKSAT'];
$demo['auto'][] = $row['AU_MKDOM'];
$demo['auto'][] = $row['AU_MKACU'];
$demo['auto'][] = $row['AU_MKAU_D'];
$demo['auto'][] = $row['AU_MKBMW'];
$demo['auto'][] = $row['AU_MKHON'];
$demo['auto'][] = $row['AU_MKHYU'];
$demo['auto'][] = $row['AU_MKINF'];
$demo['auto'][] = $row['AU_MKKIA'];
$demo['auto'][] = $row['AU_MKLEX'];
$demo['auto'][] = $row['AU_MKMAZ'];
$demo['auto'][] = $row['AU_MKBEN'];
$demo['auto'][] = $row['AU_MKMIT'];
$demo['auto'][] = $row['AU_MKNIS'];
$demo['auto'][] = $row['AU_MKSUB'];
$demo['auto'][] = $row['AU_MKSUZ'];
$demo['auto'][] = $row['AU_MKTOY'];
$demo['auto'][] = $row['AU_MKVW'];
$demo['auto'][] = $row['AU_MKVOL'];
$demo['auto'][] = $row['AU_MKFGN'];
$demo['auto'][] = $row['AU_TPMFS'];
$demo['auto'][] = $row['AU_TPSCOMP'];
$demo['auto'][] = $row['AU_TPSPO'];
$demo['auto'][] = $row['AU_TPMVSW'];
$demo['auto'][] = $row['AU_TPSUV'];
$demo['auto'][] = $row['AU_TPPIC'];
$demo['auto'][] = $row['AU_TPFVAN'];
$demo['auto'][] = $row['AU_TPOTH'];
$demo['auto'][] = $row['AU_YR13_'];
$demo['auto'][] = $row['AU_YR13'];
$demo['auto'][] = $row['AU_YR12'];
$demo['auto'][] = $row['AU_YR11'];
$demo['auto'][] = $row['AU_YR10'];
$demo['auto'][] = $row['AU_YR09'];
$demo['auto'][] = $row['AU_YR08'];
$demo['auto'][] = $row['AU_YR07'];
$demo['auto'][] = $row['AU_YR06'];
$demo['auto'][] = $row['AU_YR05'];
$demo['auto'][] = $row['AU_YR04'];
$demo['auto'][] = $row['AU_YR_03'];
$demo['auto'][] = $row['AU_YRNO'];
$demo['auto'][] = $row['AU_NEWBN'];
$demo['auto'][] = $row['AU_NEWBU'];
$demo['auto'][] = $row['AU_NEWLN'];
$demo['auto'][] = $row['AU_NEWLU'];
$demo['auto'][] = $row['AU_NEWNO'];
$demo['auto'][] = $row['AU_V_9'];
$demo['auto'][] = $row['AU_V10_14'];
$demo['auto'][] = $row['AU_V15_19'];
$demo['auto'][] = $row['AU_V20_24'];
$demo['auto'][] = $row['AU_V25_29'];
$demo['auto'][] = $row['AU_V30_39'];
$demo['auto'][] = $row['AU_V40_'];
$demo['auto'][] = $row['AU_PPUP'];
$demo['auto'][] = $row['AU_PPULP'];
$demo['auto'][] = $row['AU_PPULN'];
$demo['auto'][] = $row['AU_PPUN'];
$demo['auto'][] = $row['AU_PV_9'];
$demo['auto'][] = $row['AU_PV10_14'];
$demo['auto'][] = $row['AU_PV15_19'];
$demo['auto'][] = $row['AU_PV20_24'];
$demo['auto'][] = $row['AU_PV25_29'];
$demo['auto'][] = $row['AU_PV30_39'];
$demo['auto'][] = $row['AU_PV40_'];
$demo['auto'][] = $row['AU_PTPSED'];
$demo['auto'][] = $row['AU_PTPSCOM'];
$demo['auto'][] = $row['AU_PTPSPO'];
$demo['auto'][] = $row['AU_PTPMVSW'];
$demo['auto'][] = $row['AU_PTPSUV'];
$demo['auto'][] = $row['AU_PTPPIC'];
$demo['auto'][] = $row['AU_PTPFVAN'];
$demo['auto'][] = $row['AU_PTPOTH'];
$demo['auto'][] = $row['AU_MNBDN'];
$demo['auto'][] = $row['AU_MNBDG'];
$demo['auto'][] = $row['AU_MNBDD'];
$demo['auto'][] = $row['AU_MNBDS'];
$demo['auto'][] = $row['AU_MNBDL'];
$demo['auto'][] = $row['AU_MNBDF'];
$demo['auto'][] = $row['AU_MNBDU'];
$demo['auto'][] = $row['AU_MNOCN'];
$demo['auto'][] = $row['AU_MNOCG'];
$demo['auto'][] = $row['AU_MNOCD'];
$demo['auto'][] = $row['AU_MNOCS'];
$demo['auto'][] = $row['AU_MNOCL'];
$demo['auto'][] = $row['AU_MNOCF'];
$demo['auto'][] = $row['AU_MNOCU'];
$demo['auto'][] = $row['AU_MNBKN'];
$demo['auto'][] = $row['AU_MNBKG'];
$demo['auto'][] = $row['AU_MNBKD'];
$demo['auto'][] = $row['AU_MNBKS'];
$demo['auto'][] = $row['AU_MNBKL'];
$demo['auto'][] = $row['AU_MNBKF'];
$demo['auto'][] = $row['AU_MNBKU'];
$demo['auto'][] = $row['AU_MNTRN'];
$demo['auto'][] = $row['AU_MNTRG'];
$demo['auto'][] = $row['AU_MNTRD'];
$demo['auto'][] = $row['AU_MNTRS'];
$demo['auto'][] = $row['AU_MNTRL'];
$demo['auto'][] = $row['AU_MNTRF'];
$demo['auto'][] = $row['AU_MNTRU'];
$demo['auto'][] = $row['AU_MNRPN'];
$demo['auto'][] = $row['AU_MNRPG'];
$demo['auto'][] = $row['AU_MNRPD'];
$demo['auto'][] = $row['AU_MNRPS'];
$demo['auto'][] = $row['AU_MNRPL'];
$demo['auto'][] = $row['AU_MNRPF'];
$demo['auto'][] = $row['AU_MNRPU'];
$demo['auto'][] = $row['AU_MNTPN'];
$demo['auto'][] = $row['AU_MNTPG'];
$demo['auto'][] = $row['AU_MNTPD'];
$demo['auto'][] = $row['AU_MNTPS'];
$demo['auto'][] = $row['AU_MNTPL'];
$demo['auto'][] = $row['AU_MNTPF'];
$demo['auto'][] = $row['AU_MNTPU'];
$demo['auto'][] = $row['AU_VSGR'];
$demo['auto'][] = $row['AU_VSAG'];
$demo['auto'][] = $row['AU_VSST'];
$demo['auto'][] = $row['AU_VSCT'];
$demo['auto'][] = $row['AU_VSCC'];
$demo['auto'][] = $row['AU_VSGM'];
$demo['auto'][] = $row['AU_VSGY'];
$demo['auto'][] = 0;
$demo['auto'][] = $row['AU_VSMD'];
$demo['auto'][] = $row['AU_VSTR'];
$demo['auto'][] = $row['AU_VSLB'];
$demo['auto'][] = $row['AU_VSNP'];
$demo['auto'][] = $row['AU_VSOKT'];
$demo['auto'][] = $row['AU_VSPS'];
$demo['auto'][] = $row['AU_VSSG'];
$demo['auto'][] = $row['AU_VSSS'];
$demo['auto'][] = $row['AU_VSWM'];
$demo['auto'][] = $row['AU_VSDL'];
$demo['auto'][] = $row['AU_VSCTCW'];
$demo['auto'][] = $row['AU_VSOT'];
$demo['auto'][] = $row['AU_GASCT'];
$demo['auto'][] = $row['AU_GASCR'];
$demo['auto'][] = $row['AU_GASES'];
$demo['auto'][] = $row['AU_GASPT'];
$demo['auto'][] = $row['AU_GASSL'];
$demo['auto'][] = $row['AU_GASOT'];
$demo['auto'][] = $row['AU_BUYERN'];
$demo['auto'][] = $row['AU_PUN'];
$demo['auto'][] = $row['AU_PUPN'];
$demo['auto'][] = $row['AU_PUPU'];
$demo['auto'][] = $row['AU_PULN'];
$demo['auto'][] = $row['AU_PULU'];

	}}

$query = "SELECT
  SUM(c_weight.wHH_TOT) as wHH_TOT
  ,SUM(c_weight.wPP15_) as wPP15_

,SUM(c_hm.DW_PUNEW * wHH_TOT) as DW_PUNEW
,SUM(c_hm.DW_PUOWN * wHH_TOT) as DW_PUOWN
,SUM(c_hm.DW_N1STHM * wHH_TOT) as DW_N1STHM
,SUM(c_hm.DW_1STHM * wHH_TOT) as DW_1STHM
,SUM(c_hm.DW_RE1Y * wHH_TOT) as DW_RE1Y
,SUM(c_hm.DW_RE5Y * wHH_TOT) as DW_RE5Y
,SUM(c_hm.DW_RE10Y * wHH_TOT) as DW_RE10Y
,SUM(c_hm.DW_RE19Y * wHH_TOT) as DW_RE19Y
,SUM(c_hm.DW_RE20_Y * wHH_TOT) as DW_RE20_Y

,SUM(c_hm.DW_RASPACE * wHH_TOT) as DW_RASPACE
,SUM(c_hm.DW_RAGARG * wHH_TOT) as DW_RAGARG
,SUM(c_hm.DW_RADRAP * wHH_TOT) as DW_RADRAP
,SUM(c_hm.DW_RADECK * wHH_TOT) as DW_RADECK
,SUM(c_hm.DW_RAELEC * wHH_TOT) as DW_RAELEC
,SUM(c_hm.DW_RAENG * wHH_TOT) as DW_RAENG
,SUM(c_hm.DW_RAEPAIN * wHH_TOT) as DW_RAEPAIN
,SUM(c_hm.DW_RATILE * wHH_TOT) as DW_RATILE
,SUM(c_hm.DW_RAFLOO * wHH_TOT) as DW_RAFLOO
,SUM(c_hm.DW_RAHVAC * wHH_TOT) as DW_RAHVAC
,SUM(c_hm.DW_RASECU * wHH_TOT) as DW_RASECU
,SUM(c_hm.DW_RAWIND * wHH_TOT) as DW_RAWIND
,SUM(c_hm.DW_RAIPAIN * wHH_TOT) as DW_RAIPAIN
,SUM(c_hm.DW_RALAND * wHH_TOT) as DW_RALAND
,SUM(c_hm.DW_RAPLUM * wHH_TOT) as DW_RAPLUM
,SUM(c_hm.DW_RABATH * wHH_TOT) as DW_RABATH
,SUM(c_hm.DW_RAKITC * wHH_TOT) as DW_RAKITC
,SUM(c_hm.DW_RAORM * wHH_TOT) as DW_RAORM
,SUM(c_hm.DW_RAROOF * wHH_TOT) as DW_RAROOF
,SUM(c_hm.DW_RAPOOL * wHH_TOT) as DW_RAPOOL
,SUM(c_hm.DW_RACARP * wHH_TOT) as DW_RACARP
,SUM(c_hm.DW_RAOTHE * wHH_TOT) as DW_RAOTHE
,SUM(c_hm.DW_HMINSP * wHH_TOT) as DW_HMINSP
,SUM(c_hm.DW_MTGBRK * wHH_TOT) as DW_MTGBRK
,SUM(c_hm.DW_MVCOMP * wHH_TOT) as DW_MVCOMP
,SUM(c_hm.DW_REAGNT * wHH_TOT) as DW_REAGNT
,SUM(c_hm.DW_RELAWY * wHH_TOT) as DW_RELAWY
,SUM(c_hm.DW_PHMINSP * wHH_TOT) as DW_PHMINSP
,SUM(c_hm.DW_PMTGBRK * wHH_TOT) as DW_PMTGBRK
,SUM(c_hm.DW_PMVCOMP * wHH_TOT) as DW_PMVCOMP
,SUM(c_hm.DW_PREAGNT * wHH_TOT) as DW_PREAGNT
,SUM(c_hm.DW_PRELAWY * wHH_TOT) as DW_PRELAWY
,SUM(c_hm.DW_SPSELF * wHH_TOT) as DW_SPSELF
,SUM(c_hm.DW_SPCONT * wHH_TOT) as DW_SPCONT
,SUM(c_hm.DW_GRGSELF * wHH_TOT) as DW_GRGSELF
,SUM(c_hm.DW_GRGCONT * wHH_TOT) as DW_GRGCONT
,SUM(c_hm.DW_DRSELF * wHH_TOT) as DW_DRSELF
,SUM(c_hm.DW_DRCONT * wHH_TOT) as DW_DRCONT
,SUM(c_hm.DW_DKSELF * wHH_TOT) as DW_DKSELF
,SUM(c_hm.DW_DKCONT * wHH_TOT) as DW_DKCONT
,SUM(c_hm.DW_ELSELF * wHH_TOT) as DW_ELSELF
,SUM(c_hm.DW_ELCONT * wHH_TOT) as DW_ELCONT
,SUM(c_hm.DW_ENSELF * wHH_TOT) as DW_ENSELF
,SUM(c_hm.DW_ENCONT * wHH_TOT) as DW_ENCONT
,SUM(c_hm.DW_EPSELF * wHH_TOT) as DW_EPSELF
,SUM(c_hm.DW_EPCONT * wHH_TOT) as DW_EPCONT
,SUM(c_hm.DW_TISELF * wHH_TOT) as DW_TISELF
,SUM(c_hm.DW_TICONT * wHH_TOT) as DW_TICONT
,SUM(c_hm.DW_FLSELF * wHH_TOT) as DW_FLSELF
,SUM(c_hm.DW_FLCONT * wHH_TOT) as DW_FLCONT
,SUM(c_hm.DW_HVSELF * wHH_TOT) as DW_HVSELF
,SUM(c_hm.DW_HVCONT * wHH_TOT) as DW_HVCONT
,SUM(c_hm.DW_SESELF * wHH_TOT) as DW_SESELF
,SUM(c_hm.DW_SECONT * wHH_TOT) as DW_SECONT
,SUM(c_hm.DW_WISELF * wHH_TOT) as DW_WISELF
,SUM(c_hm.DW_WICONT * wHH_TOT) as DW_WICONT
,SUM(c_hm.DW_IPSELF * wHH_TOT) as DW_IPSELF
,SUM(c_hm.DW_IPCONT * wHH_TOT) as DW_IPCONT
,SUM(c_hm.DW_LASELF * wHH_TOT) as DW_LASELF
,SUM(c_hm.DW_LACONT * wHH_TOT) as DW_LACONT
,SUM(c_hm.DW_PLSELF * wHH_TOT) as DW_PLSELF
,SUM(c_hm.DW_PLCONT * wHH_TOT) as DW_PLCONT
,SUM(c_hm.DW_BTSELF * wHH_TOT) as DW_BTSELF
,SUM(c_hm.DW_BTCONT * wHH_TOT) as DW_BTCONT
,SUM(c_hm.DW_KISELF * wHH_TOT) as DW_KISELF
,SUM(c_hm.DW_KICONT * wHH_TOT) as DW_KICONT
,SUM(c_hm.DW_ORSELF * wHH_TOT) as DW_ORSELF
,SUM(c_hm.DW_ORCONT * wHH_TOT) as DW_ORCONT
,SUM(c_hm.DW_RFSELF * wHH_TOT) as DW_RFSELF
,SUM(c_hm.DW_RFCONT * wHH_TOT) as DW_RFCONT
,SUM(c_hm.DW_POSELF * wHH_TOT) as DW_POSELF
,SUM(c_hm.DW_POCONT * wHH_TOT) as DW_POCONT
,SUM(c_hm.DW_CPSELF * wHH_TOT) as DW_CPSELF
,SUM(c_hm.DW_CPCONT * wHH_TOT) as DW_CPCONT
,SUM(c_hm.DW_OHSELF * wHH_TOT) as DW_OHSELF
,SUM(c_hm.DW_OHCONT * wHH_TOT) as DW_OHCONT
,SUM(c_hm.DW_SP0 * wHH_TOT) as DW_SP0
,SUM(c_hm.DW_SP999 * wHH_TOT) as DW_SP999
,SUM(c_hm.DW_SP2499 * wHH_TOT) as DW_SP2499
,SUM(c_hm.DW_SP4999 * wHH_TOT) as DW_SP4999
,SUM(c_hm.DW_SP9999 * wHH_TOT) as DW_SP9999
,SUM(c_hm.DW_SP19999 * wHH_TOT) as DW_SP19999
,SUM(c_hm.DW_SP20000 * wHH_TOT) as DW_SP20000
,SUM(c_hm.DW_NALARM * wHH_TOT) as DW_NALARM
,SUM(c_hm.DW_ALARM * wHH_TOT) as DW_ALARM
,SUM(c_hm.DW_GDSERV * wHH_TOT) as DW_GDSERV
,SUM(c_hm.DW_MDSERV * wHH_TOT) as DW_MDSERV
,SUM(c_hm.DW_PCSERV * wHH_TOT) as DW_PCSERV


, SUM(c_dw.DW_TOT) as DW_TOT
, SUM(c_dw.DW_SINGLE) as DW_SINGLE
, SUM(c_dw.DW_APT5_) as DW_APT5_
, SUM(c_dw.DW_MOVA) as DW_MOVA
, SUM(c_dw.DW_OT) as DW_OT
, SUM(c_dw.DW_SEMI) as DW_SEMI
, SUM(c_dw.DW_DUP) as DW_DUP
, SUM(c_dw.DW_ROW) as DW_ROW
, SUM(c_dw.DW_APT_5) as DW_APT_5
, SUM(c_dw.DW_OT_SING) as DW_OT_SING
, SUM(c_dw.DW_AVALUE * c_dw.DW_TOT) as DW_AVALUE
, SUM(c_dw.DW_MVALUE * c_dw.DW_TOT) as DW_MVALUE
, SUM(c_dw.DW_TOTDWLG) as DW_TOTDWLG
, SUM(c_dw.DW_REGMIN) as DW_REGMIN
, SUM(c_dw.DW_MAJORRE) as DW_MAJORRE
, SUM(c_dw.DW_TOTDWL2) as DW_TOTDWL2
, SUM(c_dw.DW_CON_60) as DW_CON_60
, SUM(c_dw.DW_CON6180) as DW_CON6180
, SUM(c_dw.DW_CON8190) as DW_CON8190
, SUM(c_dw.DW_CON9100) as DW_CON9100
, SUM(c_dw.DW_CON0105) as DW_CON0105
, SUM(c_dw.DW_CON0611) as DW_CON0611
, SUM(c_dw.DW_CON12_) as DW_CON12_
, SUM(c_dw.DW_TOTDWL3) as DW_TOTDWL3
, SUM(c_dw.DW_RM_4) as DW_RM_4
, SUM(c_dw.DW_RM5) as DW_RM5
, SUM(c_dw.DW_RM6) as DW_RM6
, SUM(c_dw.DW_RM7) as DW_RM7
, SUM(c_dw.DW_RM8_) as DW_RM8_
, SUM(c_dw.DW_ARMSPDW * c_dw.DW_TOT) as DW_ARMSPDW
, SUM(c_dw.DW_TOTDWL4) as DW_TOTDWL4
, SUM(c_dw.DW_BRM_1) as DW_BRM_1
, SUM(c_dw.DW_BRM2) as DW_BRM2
, SUM(c_dw.DW_BRM3) as DW_BRM3
, SUM(c_dw.DW_BRM4_) as DW_BRM4_
, SUM(c_dw.DW_TOTDWL5) as DW_TOTDWL5
, SUM(c_dw.DW_OWNED) as DW_OWNED
, SUM(c_dw.DW_RENTED) as DW_RENTED
, SUM(c_dw.DW_BANDH) as DW_BANDH
, SUM(c_dw.DW_TOTDWL6) as DW_TOTDWL6
, SUM(c_dw.DW_PTCON) as DW_PTCON
, SUM(c_dw.DW_NPTCON) as DW_NPTCON
, SUM(c_dw.DW_TOTDWL7) as DW_TOTDWL7
, SUM(c_dw.DW_MT1) as DW_MT1
, SUM(c_dw.DW_MT2) as DW_MT2
, SUM(c_dw.DW_MT3_) as DW_MT3_
, SUM(c_dw.DW_TOTDWL8) as DW_TOTDWL8
, SUM(c_dw.DW_MT_25) as DW_MT_25
, SUM(c_dw.DW_MT2534) as DW_MT2534
, SUM(c_dw.DW_MT3544) as DW_MT3544
, SUM(c_dw.DW_MT4554) as DW_MT4554
, SUM(c_dw.DW_MT5564) as DW_MT5564
, SUM(c_dw.DW_MT6574) as DW_MT6574
, SUM(c_dw.DW_MT75_) as DW_MT75_
, SUM(c_dw.DW_TOTDWL9) as DW_TOTDWL9
, SUM(c_dw.DW_PPR_1) as DW_PPR_1
, SUM(c_dw.DW_PPR2_) as DW_PPR2_
, SUM(c_dw.DW_TOTDWLA) as DW_TOTDWLA
, SUM(c_dw.DW_SUIT) as DW_SUIT
, SUM(c_dw.DW_NSUIT) as DW_NSUIT
, SUM(c_dw.DW_MCOST) as DW_MCOST
, SUM(c_dw.DW_ACOST) as DW_ACOST

,SUM(c_sh3.H_CANTR * wPP15_) as H_CANTR
,SUM(c_sh3.H_DEPOT * wPP15_) as H_DEPOT
,SUM(c_sh3.H_HWARE * wPP15_) as H_HWARE
,SUM(c_sh3.H_OUTFT * wPP15_) as H_OUTFT
,SUM(c_sh3.H_SENSE * wPP15_) as H_SENSE
,SUM(c_sh3.H_INDEP * wPP15_) as H_INDEP
,SUM(c_sh3.H_LEE * wPP15_) as H_LEE
,SUM(c_sh3.H_LIGHT * wPP15_) as H_LIGHT
,SUM(c_sh3.H_LOWE * wPP15_) as H_LOWE
,SUM(c_sh3.H_RONA * wPP15_) as H_RONA
,SUM(c_sh3.H_DEPT * wPP15_) as H_DEPT
,SUM(c_sh3.H_OL * wPP15_) as H_OL
,SUM(c_sh3.H_OTHDEC * wPP15_) as H_OTHDEC
,SUM(c_sh3.H_OTHIMP * wPP15_) as H_OTHIMP
,SUM(c_sh3.H_CANTR_R * wPP15_) as H_CANTR_R
,SUM(c_sh3.H_DEPOT_R * wPP15_) as H_DEPOT_R
,SUM(c_sh3.H_HWARE_R * wPP15_) as H_HWARE_R
,SUM(c_sh3.H_OUTFT_R * wPP15_) as H_OUTFT_R
,SUM(c_sh3.H_SENSE_R * wPP15_) as H_SENSE_R
,SUM(c_sh3.H_INDEP_R * wPP15_) as H_INDEP_R
,SUM(c_sh3.H_LEE_R * wPP15_) as H_LEE_R
,SUM(c_sh3.H_LIGHT_R * wPP15_) as H_LIGHT_R
,SUM(c_sh3.H_LOWE_R * wPP15_) as H_LOWE_R
,SUM(c_sh3.H_RONA_R * wPP15_) as H_RONA_R
,SUM(c_sh3.H_DEPT_R * wPP15_) as H_DEPT_R
,SUM(c_sh3.H_OL_R * wPP15_) as H_OL_R
,SUM(c_sh3.H_OTHDEC_R * wPP15_) as H_OTHDEC_R
,SUM(c_sh3.H_OTHIMP_R * wPP15_) as H_OTHIMP_R
,SUM(c_sh3.H_CANTR_O * wPP15_) as H_CANTR_O
,SUM(c_sh3.H_DEPOT_O * wPP15_) as H_DEPOT_O
,SUM(c_sh3.H_HWARE_O * wPP15_) as H_HWARE_O
,SUM(c_sh3.H_OUTFT_O * wPP15_) as H_OUTFT_O
,SUM(c_sh3.H_SENSE_O * wPP15_) as H_SENSE_O
,SUM(c_sh3.H_INDEP_O * wPP15_) as H_INDEP_O
,SUM(c_sh3.H_LEE_O * wPP15_) as H_LEE_O
,SUM(c_sh3.H_LIGHT_O * wPP15_) as H_LIGHT_O
,SUM(c_sh3.H_LOWE_O * wPP15_) as H_LOWE_O
,SUM(c_sh3.H_RONA_O * wPP15_) as H_RONA_O
,SUM(c_sh3.H_DEPT_O * wPP15_) as H_DEPT_O
,SUM(c_sh3.H_OL_O * wPP15_) as H_OL_O
,SUM(c_sh3.H_OTHDEC_O * wPP15_) as H_OTHDEC_O
,SUM(c_sh3.H_OTHIMP_O * wPP15_) as H_OTHIMP_O

,SUM(c_pur.PC_BBFUR * wHH_TOT) as PC_BBFUR
,SUM(c_pur.PC_BED * wHH_TOT) as PC_BED
,SUM(c_pur.PC_OFFFUR * wHH_TOT) as PC_OFFFUR
,SUM(c_pur.PC_CARALRM * wHH_TOT) as PC_CARALRM
,SUM(c_pur.PC_CARSTR * wHH_TOT) as PC_CARSTR
,SUM(c_pur.PC_CMRAFLM * wHH_TOT) as PC_CMRAFLM
,SUM(c_pur.PC_CMPEQP * wHH_TOT) as PC_CMPEQP
,SUM(c_pur.PC_CMPTRL * wHH_TOT) as PC_CMPTRL
,SUM(c_pur.PC_EREADER * wHH_TOT) as PC_EREADER
,SUM(c_pur.PC_GRPTFUR * wHH_TOT) as PC_GRPTFUR
,SUM(c_pur.PC_GASBBQ * wHH_TOT) as PC_GASBBQ
,SUM(c_pur.PC_FIREPLC * wHH_TOT) as PC_FIREPLC
,SUM(c_pur.PC_GPS * wHH_TOT) as PC_GPS
,SUM(c_pur.PC_GOLFEQP * wHH_TOT) as PC_GOLFEQP
,SUM(c_pur.PC_HOCKEY * wHH_TOT) as PC_HOCKEY
,SUM(c_pur.PC_HOTTUB * wHH_TOT) as PC_HOTTUB
,SUM(c_pur.PC_EXCEQP * wHH_TOT) as PC_EXCEQP
,SUM(c_pur.PC_APPLIAN * wHH_TOT) as PC_APPLIAN
,SUM(c_pur.PC_MOTORCY * wHH_TOT) as PC_MOTORCY
,SUM(c_pur.PC_MINSTR * wHH_TOT) as PC_MINSTR
,SUM(c_pur.PC_OFFEQP * wHH_TOT) as PC_OFFEQP
,SUM(c_pur.PC_MP3 * wHH_TOT) as PC_MP3
,SUM(c_pur.PC_PC * wHH_TOT) as PC_PC
,SUM(c_pur.PC_PCSW * wHH_TOT) as PC_PCSW
,SUM(c_pur.PC_PRNT * wHH_TOT) as PC_PRNT
,SUM(c_pur.PC_POOL * wHH_TOT) as PC_POOL
,SUM(c_pur.PC_PRAFUNE * wHH_TOT) as PC_PRAFUNE
,SUM(c_pur.PC_BOAT * wHH_TOT) as PC_BOAT
,SUM(c_pur.PC_SKIEQP * wHH_TOT) as PC_SKIEQP
,SUM(c_pur.PC_SNOWMBL * wHH_TOT) as PC_SNOWMBL
,SUM(c_pur.PC_STEREO * wHH_TOT) as PC_STEREO
,SUM(c_pur.PC_TV * wHH_TOT) as PC_TV
,SUM(c_pur.PC_TIRE * wHH_TOT) as PC_TIRE
,SUM(c_pur.PC_VACUUM * wHH_TOT) as PC_VACUUM

,SUM(c_pur.PC_GMSYS * wHH_TOT) as PC_GMSYS
,SUM(c_pur.PC_WEDSVR * wHH_TOT) as PC_WEDSVR
,SUM(c_pur.PI_BBFUR * wHH_TOT) as PI_BBFUR
,SUM(c_pur.PI_BED * wHH_TOT) as PI_BED
,SUM(c_pur.PI_OFFFUR * wHH_TOT) as PI_OFFFUR
,SUM(c_pur.PI_CARALRM * wHH_TOT) as PI_CARALRM
,SUM(c_pur.PI_CARSTR * wHH_TOT) as PI_CARSTR
,SUM(c_pur.PI_CMRAFLM * wHH_TOT) as PI_CMRAFLM
,SUM(c_pur.PI_CMPEQP * wHH_TOT) as PI_CMPEQP
,SUM(c_pur.PI_CMPTRL * wHH_TOT) as PI_CMPTRL
,SUM(c_pur.PI_EREADER * wHH_TOT) as PI_EREADER
,SUM(c_pur.PI_GRPTFUR * wHH_TOT) as PI_GRPTFUR
,SUM(c_pur.PI_GASBBQ * wHH_TOT) as PI_GASBBQ
,SUM(c_pur.PI_FIREPLC * wHH_TOT) as PI_FIREPLC
,SUM(c_pur.PI_GPS * wHH_TOT) as PI_GPS
,SUM(c_pur.PI_GOLFEQP * wHH_TOT) as PI_GOLFEQP
,SUM(c_pur.PI_HOCKEY * wHH_TOT) as PI_HOCKEY
,SUM(c_pur.PI_HOTTUB * wHH_TOT) as PI_HOTTUB
,SUM(c_pur.PI_EXCEQP * wHH_TOT) as PI_EXCEQP
,SUM(c_pur.PI_APPLIAN * wHH_TOT) as PI_APPLIAN
,SUM(c_pur.PI_MOTORCY * wHH_TOT) as PI_MOTORCY
,SUM(c_pur.PI_MINSTR * wHH_TOT) as PI_MINSTR
,SUM(c_pur.PI_OFFEQP * wHH_TOT) as PI_OFFEQP
,SUM(c_pur.PI_MP3 * wHH_TOT) as PI_MP3
,SUM(c_pur.PI_PC * wHH_TOT) as PI_PC
,SUM(c_pur.PI_PCSW * wHH_TOT) as PI_PCSW
,SUM(c_pur.PI_PRNT * wHH_TOT) as PI_PRNT
,SUM(c_pur.PI_POOL * wHH_TOT) as PI_POOL
,SUM(c_pur.PI_PRAFUNE * wHH_TOT) as PI_PRAFUNE
,SUM(c_pur.PI_BOAT * wHH_TOT) as PI_BOAT
,SUM(c_pur.PI_SKIEQP * wHH_TOT) as PI_SKIEQP
,SUM(c_pur.PI_SNOWMBL * wHH_TOT) as PI_SNOWMBL
,SUM(c_pur.PI_STEREO * wHH_TOT) as PI_STEREO
,SUM(c_pur.PI_TV * wHH_TOT) as PI_TV
,SUM(c_pur.PI_TIRE * wHH_TOT) as PI_TIRE
,SUM(c_pur.PI_VACUUM * wHH_TOT) as PI_VACUUM

,SUM(c_pur.PI_GMSYS * wHH_TOT) as PI_GMSYS
,SUM(c_pur.PI_WEDSVR * wHH_TOT) as PI_WEDSVR

,SUM(c_spend.SP_GSNO ^ wPP15_) as SP_GSNO
,SUM(c_spend.SP_GS249 ^ wPP15_) as SP_GS249
,SUM(c_spend.SP_GS499 ^ wPP15_) as SP_GS499
,SUM(c_spend.SP_GS500 ^ wPP15_) as SP_GS500
,SUM(c_spend.SP_HDNO ^ wPP15_) as SP_HDNO
,SUM(c_spend.SP_HD249 ^ wPP15_) as SP_HD249
,SUM(c_spend.SP_HD499 ^ wPP15_) as SP_HD499
,SUM(c_spend.SP_HD500 ^ wPP15_) as SP_HD500
,SUM(c_spend.SP_PTNO ^ wPP15_) as SP_PTNO
,SUM(c_spend.SP_PT249 ^ wPP15_) as SP_PT249
,SUM(c_spend.SP_PT499 ^ wPP15_) as SP_PT499
,SUM(c_spend.SP_PT500 ^ wPP15_) as SP_PT500

FROM c_hm c_hm, c_dw c_dw, c_sh3 c_sh3, c_pur c_pur, c_spend c_spend, amd_temp_reppc pclist, c_weight c_weight WHERE c_hm.POSTCODE = pclist.POSTCODE AND c_dw.POSTCODE = pclist.POSTCODE AND c_sh3.POSTCODE = pclist.POSTCODE AND c_pur.POSTCODE = pclist.POSTCODE AND c_spend.POSTCODE = pclist.POSTCODE AND c_weight.POSTCODE = pclist.POSTCODE AND pclist.report_uid = $report_uid";
	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {

$demo['improve'][] =  $row['wHH_TOT'];
$demo['improve'][] =  $row['wPP15_'];

$demo['improve'][] =  $row['DW_PUNEW'];
$demo['improve'][] =  $row['DW_PUOWN'];
$demo['improve'][] =  $row['DW_N1STHM'];
$demo['improve'][] =  $row['DW_1STHM'];
$demo['improve'][] =  $row['DW_RE1Y'];
$demo['improve'][] =  $row['DW_RE5Y'];
$demo['improve'][] =  $row['DW_RE10Y'];
$demo['improve'][] =  $row['DW_RE19Y'];
$demo['improve'][] =  $row['DW_RE20_Y'];

$demo['improve'][] =  $row['DW_RASPACE'];
$demo['improve'][] =  $row['DW_RAGARG'];
$demo['improve'][] =  $row['DW_RADRAP'];
$demo['improve'][] =  $row['DW_RADECK'];
$demo['improve'][] =  $row['DW_RAELEC'];
$demo['improve'][] =  $row['DW_RAENG'];
$demo['improve'][] =  $row['DW_RAEPAIN'];
$demo['improve'][] =  $row['DW_RATILE'];
$demo['improve'][] =  $row['DW_RAFLOO'];
$demo['improve'][] =  $row['DW_RAHVAC'];
$demo['improve'][] =  $row['DW_RASECU'];
$demo['improve'][] =  $row['DW_RAWIND'];
$demo['improve'][] =  $row['DW_RAIPAIN'];
$demo['improve'][] =  $row['DW_RALAND'];
$demo['improve'][] =  $row['DW_RAPLUM'];
$demo['improve'][] =  $row['DW_RABATH'];
$demo['improve'][] =  $row['DW_RAKITC'];
$demo['improve'][] =  $row['DW_RAORM'];
$demo['improve'][] =  $row['DW_RAROOF'];
$demo['improve'][] =  $row['DW_RAPOOL'];
$demo['improve'][] =  $row['DW_RACARP'];
$demo['improve'][] =  $row['DW_RAOTHE'];
$demo['improve'][] =  $row['DW_HMINSP'];
$demo['improve'][] =  $row['DW_MTGBRK'];
$demo['improve'][] =  $row['DW_MVCOMP'];
$demo['improve'][] =  $row['DW_REAGNT'];
$demo['improve'][] =  $row['DW_RELAWY'];
$demo['improve'][] =  $row['DW_PHMINSP'];
$demo['improve'][] =  $row['DW_PMTGBRK'];
$demo['improve'][] =  $row['DW_PMVCOMP'];
$demo['improve'][] =  $row['DW_PREAGNT'];
$demo['improve'][] =  $row['DW_PRELAWY'];
$demo['improve'][] =  $row['DW_SPSELF'];
$demo['improve'][] =  $row['DW_SPCONT'];
$demo['improve'][] =  $row['DW_GRGSELF'];
$demo['improve'][] =  $row['DW_GRGCONT'];
$demo['improve'][] =  $row['DW_DRSELF'];
$demo['improve'][] =  $row['DW_DRCONT'];
$demo['improve'][] =  $row['DW_DKSELF'];
$demo['improve'][] =  $row['DW_DKCONT'];
$demo['improve'][] =  $row['DW_ELSELF'];
$demo['improve'][] =  $row['DW_ELCONT'];
$demo['improve'][] =  $row['DW_ENSELF'];
$demo['improve'][] =  $row['DW_ENCONT'];
$demo['improve'][] =  $row['DW_EPSELF'];
$demo['improve'][] =  $row['DW_EPCONT'];
$demo['improve'][] =  $row['DW_TISELF'];
$demo['improve'][] =  $row['DW_TICONT'];
$demo['improve'][] =  $row['DW_FLSELF'];
$demo['improve'][] =  $row['DW_FLCONT'];
$demo['improve'][] =  $row['DW_HVSELF'];
$demo['improve'][] =  $row['DW_HVCONT'];
$demo['improve'][] =  $row['DW_SESELF'];
$demo['improve'][] =  $row['DW_SECONT'];
$demo['improve'][] =  $row['DW_WISELF'];
$demo['improve'][] =  $row['DW_WICONT'];
$demo['improve'][] =  $row['DW_IPSELF'];
$demo['improve'][] =  $row['DW_IPCONT'];
$demo['improve'][] =  $row['DW_LASELF'];
$demo['improve'][] =  $row['DW_LACONT'];
$demo['improve'][] =  $row['DW_PLSELF'];
$demo['improve'][] =  $row['DW_PLCONT'];
$demo['improve'][] =  $row['DW_BTSELF'];
$demo['improve'][] =  $row['DW_BTCONT'];
$demo['improve'][] =  $row['DW_KISELF'];
$demo['improve'][] =  $row['DW_KICONT'];
$demo['improve'][] =  $row['DW_ORSELF'];
$demo['improve'][] =  $row['DW_ORCONT'];
$demo['improve'][] =  $row['DW_RFSELF'];
$demo['improve'][] =  $row['DW_RFCONT'];
$demo['improve'][] =  $row['DW_POSELF'];
$demo['improve'][] =  $row['DW_POCONT'];
$demo['improve'][] =  $row['DW_CPSELF'];
$demo['improve'][] =  $row['DW_CPCONT'];
$demo['improve'][] =  $row['DW_OHSELF'];
$demo['improve'][] =  $row['DW_OHCONT'];
$demo['improve'][] =  $row['DW_SP0'];
$demo['improve'][] =  $row['DW_SP999'];
$demo['improve'][] =  $row['DW_SP2499'];
$demo['improve'][] =  $row['DW_SP4999'];
$demo['improve'][] =  $row['DW_SP9999'];
$demo['improve'][] =  $row['DW_SP19999'];
$demo['improve'][] =  $row['DW_SP20000'];
$demo['improve'][] =  $row['DW_NALARM'];
$demo['improve'][] =  $row['DW_ALARM'];
$demo['improve'][] =  $row['DW_GDSERV'];
$demo['improve'][] =  $row['DW_MDSERV'];
$demo['improve'][] =  $row['DW_PCSERV'];

$demo['improve'][] =  $row['DW_TOT'];
$demo['improve'][] =  $row['DW_SINGLE'];
$demo['improve'][] =  $row['DW_APT5_'];
$demo['improve'][] =  $row['DW_MOVA'];
$demo['improve'][] =  $row['DW_OT'];
$demo['improve'][] =  $row['DW_SEMI'];
$demo['improve'][] =  $row['DW_DUP'];
$demo['improve'][] =  $row['DW_ROW'];
$demo['improve'][] =  $row['DW_APT_5'];
$demo['improve'][] =  $row['DW_OT_SING'];
$demo['improve'][] =  $row['DW_AVALUE'];
$demo['improve'][] =  $row['DW_MVALUE'];
$demo['improve'][] =  $row['DW_TOTDWLG'];
$demo['improve'][] =  $row['DW_REGMIN'];
$demo['improve'][] =  $row['DW_MAJORRE'];
$demo['improve'][] =  $row['DW_TOTDWL2'];
$demo['improve'][] =  $row['DW_CON_60'];
$demo['improve'][] =  $row['DW_CON6180'];
$demo['improve'][] =  $row['DW_CON8190'];
$demo['improve'][] =  $row['DW_CON9100'];
$demo['improve'][] =  $row['DW_CON0105'];
$demo['improve'][] =  $row['DW_CON0611'];
$demo['improve'][] =  $row['DW_CON12_'];
$demo['improve'][] =  $row['DW_TOTDWL3'];
$demo['improve'][] =  $row['DW_RM_4'];
$demo['improve'][] =  $row['DW_RM5'];
$demo['improve'][] =  $row['DW_RM6'];
$demo['improve'][] =  $row['DW_RM7'];
$demo['improve'][] =  $row['DW_RM8_'];
$demo['improve'][] =  $row['DW_ARMSPDW'];
$demo['improve'][] =  $row['DW_TOTDWL4'];
$demo['improve'][] =  $row['DW_BRM_1'];
$demo['improve'][] =  $row['DW_BRM2'];
$demo['improve'][] =  $row['DW_BRM3'];
$demo['improve'][] =  $row['DW_BRM4_'];
$demo['improve'][] =  $row['DW_TOTDWL5'];
$demo['improve'][] =  $row['DW_OWNED'];
$demo['improve'][] =  $row['DW_RENTED'];
$demo['improve'][] =  $row['DW_BANDH'];
$demo['improve'][] =  $row['DW_TOTDWL6'];
$demo['improve'][] =  $row['DW_PTCON'];
$demo['improve'][] =  $row['DW_NPTCON'];
$demo['improve'][] =  $row['DW_TOTDWL7'];
$demo['improve'][] =  $row['DW_MT1'];
$demo['improve'][] =  $row['DW_MT2'];
$demo['improve'][] =  $row['DW_MT3_'];
$demo['improve'][] =  $row['DW_TOTDWL8'];
$demo['improve'][] =  $row['DW_MT_25'];
$demo['improve'][] =  $row['DW_MT2534'];
$demo['improve'][] =  $row['DW_MT3544'];
$demo['improve'][] =  $row['DW_MT4554'];
$demo['improve'][] =  $row['DW_MT5564'];
$demo['improve'][] =  $row['DW_MT6574'];
$demo['improve'][] =  $row['DW_MT75_'];
$demo['improve'][] =  $row['DW_TOTDWL9'];
$demo['improve'][] =  $row['DW_PPR_1'];
$demo['improve'][] =  $row['DW_PPR2_'];
$demo['improve'][] =  $row['DW_TOTDWLA'];
$demo['improve'][] =  $row['DW_SUIT'];
$demo['improve'][] =  $row['DW_NSUIT'];
$demo['improve'][] =  $row['DW_MCOST'];
$demo['improve'][] =  $row['DW_ACOST'];

$demo['improve'][] =  $row['H_CANTR'];
$demo['improve'][] =  $row['H_DEPOT'];
$demo['improve'][] =  $row['H_HWARE'];
$demo['improve'][] =  $row['H_OUTFT'];
$demo['improve'][] =  $row['H_SENSE'];
$demo['improve'][] =  $row['H_INDEP'];
$demo['improve'][] =  $row['H_LEE'];
$demo['improve'][] =  $row['H_LIGHT'];
$demo['improve'][] =  $row['H_LOWE'];
$demo['improve'][] =  $row['H_RONA'];
$demo['improve'][] =  $row['H_DEPT'];
$demo['improve'][] =  $row['H_OL'];
$demo['improve'][] =  $row['H_OTHDEC'];
$demo['improve'][] =  $row['H_OTHIMP'];
$demo['improve'][] =  $row['H_CANTR_R'];
$demo['improve'][] =  $row['H_DEPOT_R'];
$demo['improve'][] =  $row['H_HWARE_R'];
$demo['improve'][] =  $row['H_OUTFT_R'];
$demo['improve'][] =  $row['H_SENSE_R'];
$demo['improve'][] =  $row['H_INDEP_R'];
$demo['improve'][] =  $row['H_LEE_R'];
$demo['improve'][] =  $row['H_LIGHT_R'];
$demo['improve'][] =  $row['H_LOWE_R'];
$demo['improve'][] =  $row['H_RONA_R'];
$demo['improve'][] =  $row['H_DEPT_R'];
$demo['improve'][] =  $row['H_OL_R'];
$demo['improve'][] =  $row['H_OTHDEC_R'];
$demo['improve'][] =  $row['H_OTHIMP_R'];
$demo['improve'][] =  $row['H_CANTR_O'];
$demo['improve'][] =  $row['H_DEPOT_O'];
$demo['improve'][] =  $row['H_HWARE_O'];
$demo['improve'][] =  $row['H_OUTFT_O'];
$demo['improve'][] =  $row['H_SENSE_O'];
$demo['improve'][] =  $row['H_INDEP_O'];
$demo['improve'][] =  $row['H_LEE_O'];
$demo['improve'][] =  $row['H_LIGHT_O'];
$demo['improve'][] =  $row['H_LOWE_O'];
$demo['improve'][] =  $row['H_RONA_O'];
$demo['improve'][] =  $row['H_DEPT_O'];
$demo['improve'][] =  $row['H_OL_O'];
$demo['improve'][] =  $row['H_OTHDEC_O'];
$demo['improve'][] =  $row['H_OTHIMP_O'];

$demo['improve'][] =  $row['PC_BBFUR'];
$demo['improve'][] =  $row['PC_BED'];
$demo['improve'][] =  $row['PC_OFFFUR'];
$demo['improve'][] =  $row['PC_CARALRM'];
$demo['improve'][] =  $row['PC_CARSTR'];
$demo['improve'][] =  $row['PC_CMRAFLM'];
$demo['improve'][] =  $row['PC_CMPEQP'];
$demo['improve'][] =  $row['PC_CMPTRL'];
$demo['improve'][] =  $row['PC_EREADER'];
$demo['improve'][] =  $row['PC_GRPTFUR'];
$demo['improve'][] =  $row['PC_GASBBQ'];
$demo['improve'][] =  $row['PC_FIREPLC'];
$demo['improve'][] =  $row['PC_GPS'];
$demo['improve'][] =  $row['PC_GOLFEQP'];
$demo['improve'][] =  $row['PC_HOCKEY'];
$demo['improve'][] =  $row['PC_HOTTUB'];
$demo['improve'][] =  $row['PC_EXCEQP'];
$demo['improve'][] =  $row['PC_APPLIAN'];
$demo['improve'][] =  $row['PC_MOTORCY'];
$demo['improve'][] =  $row['PC_MINSTR'];
$demo['improve'][] =  $row['PC_OFFEQP'];
$demo['improve'][] =  $row['PC_MP3'];
$demo['improve'][] =  $row['PC_PC'];
$demo['improve'][] =  $row['PC_PCSW'];
$demo['improve'][] =  $row['PC_PRNT'];
$demo['improve'][] =  $row['PC_POOL'];
$demo['improve'][] =  $row['PC_PRAFUNE'];
$demo['improve'][] =  $row['PC_BOAT'];
$demo['improve'][] =  $row['PC_SKIEQP'];
$demo['improve'][] =  $row['PC_SNOWMBL'];
$demo['improve'][] =  $row['PC_STEREO'];
$demo['improve'][] =  $row['PC_TV'];
$demo['improve'][] =  $row['PC_TIRE'];
$demo['improve'][] =  $row['PC_VACUUM'];
$demo['improve'][] =  0;
$demo['improve'][] =  $row['PC_GMSYS'];
$demo['improve'][] =  $row['PC_WEDSVR'];
$demo['improve'][] =  $row['PI_BBFUR'];
$demo['improve'][] =  $row['PI_BED'];
$demo['improve'][] =  $row['PI_OFFFUR'];
$demo['improve'][] =  $row['PI_CARALRM'];
$demo['improve'][] =  $row['PI_CARSTR'];
$demo['improve'][] =  $row['PI_CMRAFLM'];
$demo['improve'][] =  $row['PI_CMPEQP'];
$demo['improve'][] =  $row['PI_CMPTRL'];
$demo['improve'][] =  $row['PI_EREADER'];
$demo['improve'][] =  $row['PI_GRPTFUR'];
$demo['improve'][] =  $row['PI_GASBBQ'];
$demo['improve'][] =  $row['PI_FIREPLC'];
$demo['improve'][] =  $row['PI_GPS'];
$demo['improve'][] =  $row['PI_GOLFEQP'];
$demo['improve'][] =  $row['PI_HOCKEY'];
$demo['improve'][] =  $row['PI_HOTTUB'];
$demo['improve'][] =  $row['PI_EXCEQP'];
$demo['improve'][] =  $row['PI_APPLIAN'];
$demo['improve'][] =  $row['PI_MOTORCY'];
$demo['improve'][] =  $row['PI_MINSTR'];
$demo['improve'][] =  $row['PI_OFFEQP'];
$demo['improve'][] =  $row['PI_MP3'];
$demo['improve'][] =  $row['PI_PC'];
$demo['improve'][] =  $row['PI_PCSW'];
$demo['improve'][] =  $row['PI_PRNT'];
$demo['improve'][] =  $row['PI_POOL'];
$demo['improve'][] =  $row['PI_PRAFUNE'];
$demo['improve'][] =  $row['PI_BOAT'];
$demo['improve'][] =  $row['PI_SKIEQP'];
$demo['improve'][] =  $row['PI_SNOWMBL'];
$demo['improve'][] =  $row['PI_STEREO'];
$demo['improve'][] =  $row['PI_TV'];
$demo['improve'][] =  $row['PI_TIRE'];
$demo['improve'][] =  $row['PI_VACUUM'];
$demo['improve'][] =  0;
$demo['improve'][] =  $row['PI_GMSYS'];
$demo['improve'][] =  $row['PI_WEDSVR'];

$demo['improve'][] =  $row['SP_GSNO'];
$demo['improve'][] =  $row['SP_GS249'];
$demo['improve'][] =  $row['SP_GS499'];
$demo['improve'][] =  $row['SP_GS500'];
$demo['improve'][] =  $row['SP_HDNO'];
$demo['improve'][] =  $row['SP_HD249'];
$demo['improve'][] =  $row['SP_HD499'];
$demo['improve'][] =  $row['SP_HD500'];
$demo['improve'][] =  $row['SP_PTNO'];
$demo['improve'][] =  $row['SP_PT249'];
$demo['improve'][] =  $row['SP_PT499'];
$demo['improve'][] =  $row['SP_PT500'];


	}}		

		?>