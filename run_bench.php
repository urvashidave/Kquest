<?php
$area_to_select = "Y";
$prov_to_select = "Y";
echo "<br /><br /><br />" . $prov_to_select . "<br /><br />";
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


FROM c_pp pp WHERE LEFT(POSTCODE, 1) = '$area_to_select' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$newbench['summary'][] = $row['PP_TOT'];
$newbench['summary'][] = $row['PP_0_4'];
$newbench['summary'][] = $row['PP_5_9'];
$newbench['summary'][] = $row['PP_10_14'];
$newbench['summary'][] = $row['PP_15_19'];
$newbench['summary'][] = $row['PP_20_24'];
$newbench['summary'][] = $row['PP_25_29'];
$newbench['summary'][] = $row['PP_30_34'];
$newbench['summary'][] = $row['PP_35_39'];
$newbench['summary'][] = $row['PP_40_44'];
$newbench['summary'][] = $row['PP_45_49'];
$newbench['summary'][] = $row['PP_50_54'];
$newbench['summary'][] = $row['PP_55_59'];
$newbench['summary'][] = $row['PP_60_64'];
$newbench['summary'][] = $row['PP_65_69'];
$newbench['summary'][] = $row['PP_70_74'];
$newbench['summary'][] = $row['PP_75_79'];
$newbench['summary'][] = $row['PP_80_84'];
$newbench['summary'][] = $row['PP_85'];


}				
mysqli_free_result($result);
}

$query = "SELECT 
 SUM(in2.IN_THH) as IN_THH
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
 
FROM c_in2 in2 WHERE LEFT(POSTCODE, 1) = '$area_to_select' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {

$newbench['summary'][] = $row['IN_THH'];
$newbench['summary'][] = $row['IN_HH_5'];
$newbench['summary'][] = $row['IN_HH0510'];
$newbench['summary'][] = $row['IN_HH1015'];
$newbench['summary'][] = $row['IN_HH1520'];
$newbench['summary'][] = $row['IN_HH2030'];
$newbench['summary'][] = $row['IN_HH3040'];
$newbench['summary'][] = $row['IN_HH4050'];
$newbench['summary'][] = $row['IN_HH5060'];
$newbench['summary'][] = $row['IN_HH6080'];
$newbench['summary'][] = $row['IN_HH80100'];
$newbench['summary'][] = $row['IN_HH10125'];
$newbench['summary'][] = $row['IN_HH12150'];
$newbench['summary'][] = $row['IN_HH150_'];
$newbench['summary'][] = $row['IN_MHH'];
$newbench['summary'][] = $row['IN_AHH'];

}				
mysqli_free_result($result);
}

$query = "SELECT 

SUM(hh.HH_TOTHH) as HH_TOTHH
 , SUM(hh.HH_FMHH) as HH_FMHH
 , SUM(hh.HH_ONEFMHH) as HH_ONEFMHH
 , SUM(hh.HH_CP) as HH_CP
 , SUM(hh.HH_CP_NC) as HH_CP_NC
 , SUM(hh.HH_CP_CH) as HH_CP_CH
 , SUM(hh.HH_LP) as HH_LP
 , SUM(hh.HH_OT) as HH_OT

FROM c_hh hh WHERE LEFT(POSTCODE, 1) = '$area_to_select' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$newbench['summary'][] = $row['HH_TOTHH'];
$newbench['summary'][] = $row['HH_FMHH'];
$newbench['summary'][] = $row['HH_ONEFMHH'];
$newbench['summary'][] = $row['HH_CP'];
$newbench['summary'][] = $row['HH_CP_NC'];
$newbench['summary'][] = $row['HH_CP_CH'];
$newbench['summary'][] = $row['HH_LP'];
$newbench['summary'][] = $row['HH_OT'];
}				
mysqli_free_result($result);
}

$query = "SELECT 
 SUM(mn.MN_TOT) as MN_TOT
 , SUM(mn.MN_VIS) as MN_VIS
 , SUM(mn.MN_CHINESE) as MN_CHINESE
 , SUM(mn.MN_SASIAN) as MN_SASIAN
 , SUM(mn.MN_BLACK) as MN_BLACK

FROM c_mn mn WHERE LEFT(POSTCODE, 1) = '$area_to_select' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$newbench['summary'][] = $row['MN_TOT'];
$newbench['summary'][] = $row['MN_VIS'];
$newbench['summary'][] = $row['MN_CHINESE'];
$newbench['summary'][] = $row['MN_SASIAN'];
$newbench['summary'][] = $row['MN_BLACK'];

}				
mysqli_free_result($result);
}

// segmentation updated Dec 14 2016
$query = "SELECT SUM(seg.HH_TOT) as HH_TOT, seg.CLUSTER FROM c_seg seg WHERE LEFT(POSTCODE, 1) = '$area_to_select' group by CLUSTER  ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$newbenchhh[] = $row['HH_TOT']; 
$newbenchseg[] = $row['CLUSTER'];
}				
mysqli_free_result($result);
}
for ( $seg_vars = 0; $seg_vars <= 17; $seg_vars ++) {
$newbench['segment'][$seg_vars] = 0;
}
$segment_records = 0;
for ( $seg_vars = 0; $seg_vars < sizeof($newbenchseg); $seg_vars ++) {
if($newbenchseg[$seg_vars] == 'A') $newbench['segment'][0] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'B') $newbench['segment'][1] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'C') $newbench['segment'][2] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'D') $newbench['segment'][3] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'E') $newbench['segment'][4] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'F') $newbench['segment'][5] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'G') $newbench['segment'][6] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'H') $newbench['segment'][7] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'I') $newbench['segment'][8] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'J') $newbench['segment'][9] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'K') $newbench['segment'][10] = $newbenchhh[$seg_vars];;
if($newbenchseg[$seg_vars] == 'L') $newbench['segment'][11] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'M') $newbench['segment'][12] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'N') $newbench['segment'][13] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'O') $newbench['segment'][14] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'P') $newbench['segment'][15] = $newbenchhh[$seg_vars];
if($newbenchseg[$seg_vars] == 'Q') $newbench['segment'][16] = $newbenchhh[$seg_vars];
$segment_records = $segment_records + $newbenchhh[$seg_vars];
}	

$newbench['segment'][17] = $segment_records;


$query = "SELECT SUM(c_geo.homes) as mfd_home, SUM(c_geo.apts) as mfd_apts, SUM(c_geo.farm) as mfd_farm, SUM(c_geo.bus) as mfd_bus FROM c_geo c_geo WHERE LEFT(PostCode, 1) = '$area_to_select' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$mfd_home = $row['mfd_home'];
$mfd_apts = $row['mfd_apts'];
$mfd_farm = $row['mfd_farm'];
$mfd_bus = $row['mfd_bus'];
}}
$mfd_hh_count = $mfd_home + $mfd_apts + $mfd_farm;
$newbench['mfd_homes'][] = $mfd_home;
$newbench['mfd_homes'][] = $mfd_apts;
$newbench['mfd_homes'][] = $mfd_farm;
$newbench['mfd_homes'][] = $mfd_hh_count;
$newbench['mfd_homes'][] = $mfd_bus;

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
 
FROM c_weight c_weight, c_rd c_rd, c_tv1 c_tv1, c_tv2 c_tv2, c_np c_np, c_it c_it, c_mz c_mz WHERE c_weight.POSTCODE = c_rd.POSTCODE and c_weight.POSTCODE = c_tv1.POSTCODE and c_weight.POSTCODE = c_tv2.POSTCODE and c_weight.POSTCODE = c_np.POSTCODE and c_weight.POSTCODE = c_it.POSTCODE and c_weight.POSTCODE = c_mz.POSTCODE AND LEFT(c_weight.POSTCODE, 1) = '$area_to_select' ";
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

$newbench['media'][] = $row['wPP15_'];
$newbench['media'][] = $row['RD_HR3542'];
$newbench['media'][] = $row['RD_HR4249'];
$newbench['media'][] = $row['RD_HR49_'];
$newbench['media'][] = 0;
$newbench['media'][] = $row['TV_HTCIL'];
$newbench['media'][] = $row['NP_TMM4'];
$newbench['media'][] = $row['NP_TMM5'];
$newbench['media'][] = $row['NP_TMM6_'];
$newbench['media'][] = $row['IT_TWK15'];
$newbench['media'][] = $row['IT_TWK25'];
$newbench['media'][] = $row['IT_TWK25_'];
$newbench['media'][] = 0;
$newbench['media'][] = $row['MZ_TCIL3'];

$newbench['np'][] = $row['wPP15_'];
$newbench['np'][] = $row['NP_AUTOF'];
$newbench['np'][] = $row['NP_BUSIF'];
$newbench['np'][] = $row['NP_CL_ADF'];
$newbench['np'][] = $row['NP_EDITF'];
$newbench['np'][] = $row['NP_FASHF'];
$newbench['np'][] = $row['NP_FOODF'];
$newbench['np'][] = $row['NP_HEALTHF'];
$newbench['np'][] = $row['NP_INEWF'];
$newbench['np'][] = $row['NP_LNEWF'];
$newbench['np'][] = $row['NP_MOVIF'];
$newbench['np'][] = $row['NP_NNEWF'];
$newbench['np'][] = $row['NP_HOMEF'];
$newbench['np'][] = $row['NP_RESTAF'];
$newbench['np'][] = $row['NP_SPORF'];
$newbench['np'][] = $row['NP_TRAVF'];
$newbench['np'][] = $row['NP_ADSF'];
$newbench['np'][] = $row['NP_READ1'];
$newbench['np'][] = $row['NP_READ2'];
$newbench['np'][] = $row['NP_READ3'];
$newbench['np'][] = $row['NP_READ4'];

$newbench['radio'][] = $row['wPP15_'];
$newbench['radio'][] = $row['RD_ADC'];
$newbench['radio'][] = $row['RD_MSTRK'];
$newbench['radio'][] = $row['RD_HADC'];
$newbench['radio'][] = $row['RD_MDRK'];
$newbench['radio'][] = $row['RD_MSTM'];
$newbench['radio'][] = $row['RD_NEWS'];
$newbench['radio'][] = $row['RD_CLAHIT'];
$newbench['radio'][] = $row['RD_CLARK'];
$newbench['radio'][] = 0;
$newbench['radio'][] = $row['RD_CLASS'];
$newbench['radio'][] = $row['RD_JAZZ'];

$newbench['tv1'][] = $row['wPP15_'];
$newbench['tv1'][] = $row['TV_AUTO'];
$newbench['tv1'][] = $row['TV_BSBALL'];
$newbench['tv1'][] = $row['TV_BKBALL'];
$newbench['tv1'][] = $row['TV_CARTOO'];
$newbench['tv1'][] = $row['TV_CTSHOW'];
$newbench['tv1'][] = $row['TV_DOC'];
$newbench['tv1'][] = $row['TV_SKATE'];
$newbench['tv1'][] = $row['TV_CFL'];
$newbench['tv1'][] = $row['TV_NFL'];
$newbench['tv1'][] = $row['TV_GMSHOW'];
$newbench['tv1'][] = $row['TV_GOLF'];
$newbench['tv1'][] = $row['TV_HOCKEY'];
$newbench['tv1'][] = 0;
$newbench['tv1'][] = 0;
$newbench['tv1'][] = 0;
$newbench['tv1'][] = $row['TV_MOVIE'];
$newbench['tv1'][] = $row['TV_NEWS'];
$newbench['tv1'][] = $row['TV_PMKOV'];
$newbench['tv1'][] = $row['TV_REALITY'];
$newbench['tv1'][] = $row['TV_CMDIES'];
$newbench['tv1'][] = 0;
$newbench['tv1'][] = $row['TV_DRAMA'];
$newbench['tv1'][] = $row['TV_TALK'];
$newbench['tv1'][] = $row['TV_INFO'];
$newbench['tv1'][] = $row['TV_SPEC'];
$newbench['tv1'][] = 0;


$newbench['internet'][] = $row['wPP15_'];
$newbench['internet'][] = $row['IT_HOME'];
$newbench['internet'][] = $row['IT_WORK'];
$newbench['internet'][] = $row['IT_SCH'];
$newbench['internet'][] = $row['IT_OTH'];
$newbench['internet'][] = $row['IT_TWK0'];
$newbench['internet'][] = $row['IT_TWK5'];
$newbench['internet'][] = $row['IT_TWK10'];
$newbench['internet'][] = $row['IT_TWK15'];
$newbench['internet'][] = $row['IT_TWK25'];
$newbench['internet'][] = $row['IT_TWK25_'];
$newbench['internet'][] = $row['IT_NSITE'];
$newbench['internet'][] = $row['IT_RADIO'];
$newbench['internet'][] = $row['IT_TV'];
$newbench['internet'][] = $row['IT_AUTNEWS'];
$newbench['internet'][] = $row['IT_FASHION'];
$newbench['internet'][] = $row['IT_HEALTH'];
$newbench['internet'][] = $row['IT_FURN'];
$newbench['internet'][] = $row['IT_SPORT'];
$newbench['internet'][] = $row['IT_RLEST'];
$newbench['internet'][] = $row['IT_RESTG'];
$newbench['internet'][] = $row['IT_WEATH'];
$newbench['internet'][] = $row['IT_ADS'];
$newbench['internet'][] = $row['IT_BNKING'];
$newbench['internet'][] = $row['IT_DGAME'];
$newbench['internet'][] = 0;
$newbench['internet'][] = $row['IT_DVIDEO'];
$newbench['internet'][] = $row['IT_MP3'];
$newbench['internet'][] = $row['IT_DCPN'];
$newbench['internet'][] = 0;
$newbench['internet'][] = $row['IT_CONTEST'];
$newbench['internet'][] = $row['IT_PODCAST'];
$newbench['internet'][] = $row['IT_AUDIO'];
$newbench['internet'][] = 0;
$newbench['internet'][] = 0;
$newbench['internet'][] = $row['IT_SONET'];
$newbench['internet'][] = $row['IT_CLAD'];
$newbench['internet'][] = $row['IT_GAME'];
$newbench['internet'][] = 0;
$newbench['internet'][] = $row['IT_MZ'];
$newbench['internet'][] = $row['IT_NSPAP'];
$newbench['internet'][] = $row['IT_BLOG'];
$newbench['internet'][] = $row['IT_WIKI'];
$newbench['internet'][] = $row['IT_NLRNL'];
$newbench['internet'][] = $row['IT_PROD'];
$newbench['internet'][] = $row['IT_SURV'];
$newbench['internet'][] = $row['IT_INSM'];
$newbench['internet'][] = $row['IT_EMAIL'];
$newbench['internet'][] = $row['IT_MAPS'];
$newbench['internet'][] = $row['IT_PHONE'];
$newbench['internet'][] = 0;
$newbench['internet'][] = 0;
$newbench['internet'][] = $row['IT_VIDEO'];
$newbench['internet'][] = $row['IT_OVIDEO'];
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

FROM c_weight c_weight, c_ls2 c_ls2 WHERE c_weight.POSTCODE = c_ls2.POSTCODE AND LEFT(c_weight.POSTCODE, 1) = '$area_to_select' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {

$newbench['leisure'][] = $row['LS_ADVSP'];
$newbench['leisure'][] = $row['LS_CRFT'];
$newbench['leisure'][] = $row['LS_SNMBL'];
$newbench['leisure'][] = $row['LS_BSBL'];
$newbench['leisure'][] = $row['LS_BSKBL'];
$newbench['leisure'][] = $row['LS_BLLDS'];
$newbench['leisure'][] = $row['LS_BOWL'];
$newbench['leisure'][] = $row['LS_CAMP'];
$newbench['leisure'][] = $row['LS_CANOE'];
$newbench['leisure'][] = $row['LS_CURL'];
$newbench['leisure'][] = $row['LS_CYCL'];
$newbench['leisure'][] = $row['LS_FSHT'];
$newbench['leisure'][] = $row['LS_FITWK'];
$newbench['leisure'][] = $row['LS_FITAER'];
$newbench['leisure'][] = $row['LS_FTBL'];
$newbench['leisure'][] = $row['LS_GARD'];
$newbench['leisure'][] = $row['LS_GOLF'];
$newbench['leisure'][] = $row['LS_CLUB'];
$newbench['leisure'][] = $row['LS_HIBA'];
$newbench['leisure'][] = $row['LS_HOCKY'];
$newbench['leisure'][] = $row['LS_HMEXC'];
$newbench['leisure'][] = $row['LS_ICSKT'];
$newbench['leisure'][] = $row['LS_ILSKT'];
$newbench['leisure'][] = $row['LS_JOG'];
$newbench['leisure'][] = $row['LS_MRTHN'];
$newbench['leisure'][] = $row['LS_YOGA'];
$newbench['leisure'][] = $row['LS_VIDEO'];
$newbench['leisure'][] = $row['LS_PWBT'];
$newbench['leisure'][] = $row['LS_RACSP'];
$newbench['leisure'][] = $row['LS_READ'];
$newbench['leisure'][] = $row['LS_SKBRD'];
$newbench['leisure'][] = $row['LS_SKCRS'];
$newbench['leisure'][] = $row['LS_SKDWH'];
$newbench['leisure'][] = $row['LS_SNBRD'];
$newbench['leisure'][] = $row['LS_SCCER'];
$newbench['leisure'][] = $row['LS_SWM'];
$newbench['leisure'][] = $row['LS_VOL'];
$newbench['leisure'][] = $row['LS_WHLWT'];

$newbench['leisure2'][] =  $row['wPP15_'];
$newbench['leisure2'][] =  $row['LS_MUSM'];
$newbench['leisure2'][] =  $row['LS_EXHBT'];
$newbench['leisure2'][] =  $row['LS_HIST'];
$newbench['leisure2'][] =  $row['LS_CTPRK'];
$newbench['leisure2'][] =  $row['LS_MAXMV'];
$newbench['leisure2'][] =  $row['LS_SPEVN'];
$newbench['leisure2'][] =  $row['LS_AMUSE'];
$newbench['leisure2'][] =  $row['LS_THMPK'];
$newbench['leisure2'][] =  $row['LS_ZOO'];
$newbench['leisure2'][] =  $row['LS_OTHAT'];
$newbench['leisure2'][] =  $row['LS_STDM'];
$newbench['leisure2'][] =  $row['LS_CS'];
$newbench['leisure2'][] =  $row['LS_NTCLB'];
$newbench['leisure2'][] =  $row['LS_ODSTG'];
$newbench['leisure2'][] =  $row['LS_THTR'];

$newbench['leisure2'][] =  $row['LS_MJTHT'];
$newbench['leisure2'][] =  $row['LS_CMTHT'];
$newbench['leisure2'][] =  $row['LS_FSTVL'];
$newbench['leisure2'][] =  $row['LS_OTTHT'];
$newbench['leisure2'][] =  $row['LS_CLSCC'];
$newbench['leisure2'][] =  $row['LS_BAR'];
$newbench['leisure2'][] =  $row['LS_CMCLB'];
$newbench['leisure2'][] =  $row['LS_DNCLB'];
$newbench['leisure2'][] =  $row['LS_DITHT'];
$newbench['leisure2'][] =  $row['LS_FMFST'];
$newbench['leisure2'][] =  $row['LS_MSFST'];
$newbench['leisure2'][] =  $row['LS_MVTHT'];
$newbench['leisure2'][] =  $row['LS_NPPK'];
$newbench['leisure2'][] =  $row['LS_POPCC'];

$newbench['leisure2'][] =  $row['LS_LATRC'];
$newbench['leisure2'][] =  $row['LS_LBSBL'];
$newbench['leisure2'][] =  $row['LS_LBSKB'];
$newbench['leisure2'][] =  $row['LS_LFSKT'];
$newbench['leisure2'][] =  $row['LS_LFTBL'];
$newbench['leisure2'][] =  $row['LS_LGLF'];
$newbench['leisure2'][] =  $row['LS_LHCKY'];
$newbench['leisure2'][] =  $row['LS_LHSRC'];
$newbench['leisure2'][] =  $row['LS_LLCRS'];
$newbench['leisure2'][] =  $row['LS_LSCC'];
$newbench['leisure2'][] =  $row['LS_LTNS'];
$newbench['leisure2'][] =  $row['LS_FITCLB'];
$newbench['leisure2'][] =  $row['LS_GLFCLB'];

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

FROM c_fly c_fly, c_weight c_weight WHERE c_fly.POSTCODE = c_weight.POSTCODE AND LEFT(c_weight.POSTCODE, 1) = '$area_to_select' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {


$newbench['flyer'][] = $row['wPP15_'];
$newbench['flyer'][]= $row['FLY_DPN'];
$newbench['flyer'][] = $row['FLY_DPS'];
$newbench['flyer'][] = $row['FLY_DPO'];
$newbench['flyer'][] = $row['FLY_DPF'];
$newbench['flyer'][] = $row['FLY_CNPN'];
$newbench['flyer'][] = $row['FLY_CNPS'];
$newbench['flyer'][] = $row['FLY_CNPO'];
$newbench['flyer'][] = $row['FLY_CNPF'];
$newbench['flyer'][] = $row['FLY_DOORN'];
$newbench['flyer'][] = $row['FLY_DOORS'];
$newbench['flyer'][] = $row['FLY_DOORO'];
$newbench['flyer'][] = $row['FLY_DOORF'];

$newbench['flyer1'][] = $row['wPP15_'];
$newbench['flyer1'][] = $row['FLY_CPN'];
$newbench['flyer1'][] = $row['FLY_CPS'];
$newbench['flyer1'][] = $row['FLY_CPO'];
$newbench['flyer1'][] = $row['FLY_CPF'];
$newbench['flyer1'][] = $row['FLY_STOREN'];
$newbench['flyer1'][] = $row['FLY_STORES'];
$newbench['flyer1'][] = $row['FLY_STOREO'];
$newbench['flyer1'][] = $row['FLY_STOREF'];
$newbench['flyer1'][] = $row['FLY_MAILN'];
$newbench['flyer1'][] = $row['FLY_MAILS'];
$newbench['flyer1'][] = $row['FLY_MAILO'];
$newbench['flyer1'][] = $row['FLY_MAILF'];
$newbench['flyer1'][] = $row['FLY_CPWEBN'];
$newbench['flyer1'][] = $row['FLY_CPWEBS'];
$newbench['flyer1'][] = $row['FLY_CPWEBO'];
$newbench['flyer1'][] = $row['FLY_CPWEBF'];
$newbench['flyer1'][] = $row['FLY_ATTVF'];
$newbench['flyer1'][] = $row['FLY_ATTSF'];
$newbench['flyer1'][] = $row['FLY_ATTSU'];
$newbench['flyer1'][] = $row['FLY_ATTVU'];
$newbench['flyer1'][] = $row['FLY_SSDAY'];
$newbench['flyer1'][] = $row['FLY_SSWK'];
$newbench['flyer1'][] = $row['FLY_SWKL'];
$newbench['flyer1'][] = $row['FLY_WSDAY'];
$newbench['flyer1'][] = $row['FLY_WSWK'];
$newbench['flyer1'][] = $row['FLY_WWKL'];


}
mysqli_free_result($result);
}



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


 FROM c_sp1 c_sp1, c_sp2 c_sp2, c_sp3 c_sp3, c_weight c_weight WHERE c_sp1.POSTCODE = c_weight.POSTCODE AND c_sp2.POSTCODE = c_weight.POSTCODE AND c_sp3.POSTCODE = c_weight.POSTCODE AND LEFT(c_weight.POSTCODE, 1) = '$area_to_select' ";

		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {



$newbench['spending'][] = $row['sp1hh_tot'];

$newbench['spending'][] =  $row['aD1000_1560'];
$newbench['spending'][] =  $row['aD1000_1520'];
$newbench['spending'][] =  $row['aD2000_2070'];
$newbench['spending'][] =  $row['aD2200_2380'];
$newbench['spending'][] =  $row['aD2200_2230'];
$newbench['spending'][] =  $row['aD2240_2244'];
$newbench['spending'][] =  $row['aD2270_2300'];
$newbench['spending'][] =  $row['aD2340_2370'];
$newbench['spending'][] =  $row['aD2500_2730'];
$newbench['spending'][] =  $row['aD2540_2680'];
$newbench['spending'][] =  $row['aD2540'];
$newbench['spending'][] =  $row['aD2542'];
$newbench['spending'][] =  $row['aD2550'];
$newbench['spending'][] =  $row['aD2552'];
$newbench['spending'][] =  $row['aD2554'];
$newbench['spending'][] =  $row['aD2560'];
$newbench['spending'][] =  $row['aD2570'];
$newbench['spending'][] =  $row['aD2580'];
$newbench['spending'][] =  $row['aD2582'];
$newbench['spending'][] =  $row['aD2584'];
$newbench['spending'][] =  $row['aD2586'];
$newbench['spending'][] =  $row['aD2590'];
$newbench['spending'][] =  $row['aD2600_2602'];
$newbench['spending'][] =  $row['aD2600'];
$newbench['spending'][] =  $row['aD2602'];
$newbench['spending'][] =  $row['aD2610_2630'];
$newbench['spending'][] =  $row['aD2610'];
$newbench['spending'][] =  $row['aD2620'];
$newbench['spending'][] =  $row['aD2630'];
$newbench['spending'][] =  $row['aD2640'];
$newbench['spending'][] =  $row['aD2650'];
$newbench['spending'][] =  $row['aD2660'];
$newbench['spending'][] =  $row['aD2670'];
$newbench['spending'][] =  $row['aD2672'];
$newbench['spending'][] =  $row['aD2674'];
$newbench['spending'][] =  $row['aD2680'];
$newbench['spending'][] =  $row['aD2800_2975'];
$newbench['spending'][] =  $row['aD2800_2840'];
$newbench['spending'][] =  $row['aD2850_2890'];
$newbench['spending'][] =  $row['aD2900_2920'];
$newbench['spending'][] =  $row['aD2950_2975'];
$newbench['spending'][] =  $row['aD3000_3260'];
$newbench['spending'][] =  $row['aD3000_3004'];
$newbench['spending'][] =  $row['aD3050_3130'];
$newbench['spending'][] =  $row['aD3300_3384'];
$newbench['spending'][] =  $row['aD3500_3580'];
$newbench['spending'][] =  $row['aD3530_3560'];
$newbench['spending'][] =  $row['aD3570_3580'];
$newbench['spending'][] =  $row['aD3700_4190'];
$newbench['spending'][] =  $row['aD3700_3830'];
$newbench['spending'][] =  $row['aD3700'];
$newbench['spending'][] =  $row['aD3710'];
$newbench['spending'][] =  $row['aD3720'];
$newbench['spending'][] =  $row['aD3750_3760'];
$newbench['spending'][] =  $row['aD3750_3752'];
$newbench['spending'][] =  $row['aD3770_3774'];
$newbench['spending'][] =  $row['aD3900_3980'];
$newbench['spending'][] =  $row['aD3900_3918'];
$newbench['spending'][] =  $row['aD3900'];
$newbench['spending'][] =  $row['aD4000_4070'];
$newbench['spending'][] =  $row['aD4000_4040'];
$newbench['spending'][] =  $row['aD4100_4190'];
$newbench['spending'][] =  $row['aD4100_4140'];
$newbench['spending'][] =  $row['aD4150_4170'];
$newbench['spending'][] =  $row['aD4180'];
$newbench['spending'][] =  $row['aD4300_4340'];
$newbench['spending'][] =  $row['aD4400_4470'];
$newbench['spending'][] =  $row['aD4400_4410'];
$newbench['spending'][] =  $row['aD4500_4540'];
$newbench['spending'][] =  $row['aD4520'];
$newbench['spending'][] =  $row['aD4530'];
$newbench['spending'][] =  $row['aD4800_4840'];
$newbench['spending'][] =  $row['aD4600_4720'];
$newbench['spending'][] =  $row['aD4630_4660'];
$newbench['spending'][] =  $row['aD4710_4720'];
$newbench['spending'][] =  $row['aD4900_4930'];
$newbench['spending'][] =  $row['aD5000_5084'];
$newbench['spending'][] =  $row['aD5200_5230'];
$newbench['spending'][] =  $row['aD5220_5230'];

$newbench['spending'][] =  $row['aD1000_4840'];
$newbench['spending'][] =  $row['D1000_5230'];

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


FROM c_at at1, c_weight c_weight WHERE at1.POSTCODE = c_weight.POSTCODE AND LEFT(c_weight.POSTCODE, 1) = '$area_to_select' ";
	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
$newbench['auto'][] = $row['wHH_TOT'];
$newbench['auto'][] = $row['wPP18_'];
$newbench['auto'][] = $row['AU_N0'];
$newbench['auto'][] = $row['AU_N1'];
$newbench['auto'][] = $row['AU_N2'];
$newbench['auto'][] = $row['AU_N3'];
$newbench['auto'][] = $row['AU_N4_'];
$newbench['auto'][] = $row['AU_KM0'];
$newbench['auto'][] = $row['AU_KM1_9'];
$newbench['auto'][] = $row['AU_KM10_19'];
$newbench['auto'][] = $row['AU_KM20_29'];
$newbench['auto'][] = $row['AU_KM30_'];
$newbench['auto'][] = $row['AU_MKBUI'];
$newbench['auto'][] = $row['AU_MKCAD'];
$newbench['auto'][] = $row['AU_MKCHE'];
$newbench['auto'][] = $row['AU_MKCHR'];
$newbench['auto'][] = $row['AU_MKDOD'];
$newbench['auto'][] = $row['AU_MKFOR'];
$newbench['auto'][] = $row['AU_MKGMC'];
$newbench['auto'][] = $row['AU_MKJEE'];
$newbench['auto'][] = $row['AU_MKLIN'];
$newbench['auto'][] = $row['AU_MKMER'];
$newbench['auto'][] = $row['AU_MKOLD'];
$newbench['auto'][] = $row['AU_MKPLY'];
$newbench['auto'][] = $row['AU_MKPON'];
$newbench['auto'][] = $row['AU_MKSAT'];
$newbench['auto'][] = $row['AU_MKDOM'];
$newbench['auto'][] = $row['AU_MKACU'];
$newbench['auto'][] = $row['AU_MKAU_D'];
$newbench['auto'][] = $row['AU_MKBMW'];
$newbench['auto'][] = $row['AU_MKHON'];
$newbench['auto'][] = $row['AU_MKHYU'];
$newbench['auto'][] = $row['AU_MKINF'];
$newbench['auto'][] = $row['AU_MKKIA'];
$newbench['auto'][] = $row['AU_MKLEX'];
$newbench['auto'][] = $row['AU_MKMAZ'];
$newbench['auto'][] = $row['AU_MKBEN'];
$newbench['auto'][] = $row['AU_MKMIT'];
$newbench['auto'][] = $row['AU_MKNIS'];
$newbench['auto'][] = $row['AU_MKSUB'];
$newbench['auto'][] = $row['AU_MKSUZ'];
$newbench['auto'][] = $row['AU_MKTOY'];
$newbench['auto'][] = $row['AU_MKVW'];
$newbench['auto'][] = $row['AU_MKVOL'];
$newbench['auto'][] = $row['AU_MKFGN'];
$newbench['auto'][] = $row['AU_TPMFS'];
$newbench['auto'][] = $row['AU_TPSCOMP'];
$newbench['auto'][] = $row['AU_TPSPO'];
$newbench['auto'][] = $row['AU_TPMVSW'];
$newbench['auto'][] = $row['AU_TPSUV'];
$newbench['auto'][] = $row['AU_TPPIC'];
$newbench['auto'][] = $row['AU_TPFVAN'];
$newbench['auto'][] = $row['AU_TPOTH'];
$newbench['auto'][] = $row['AU_YR13_'];
$newbench['auto'][] = $row['AU_YR13'];
$newbench['auto'][] = $row['AU_YR12'];
$newbench['auto'][] = $row['AU_YR11'];
$newbench['auto'][] = $row['AU_YR10'];
$newbench['auto'][] = $row['AU_YR09'];
$newbench['auto'][] = $row['AU_YR08'];
$newbench['auto'][] = $row['AU_YR07'];
$newbench['auto'][] = $row['AU_YR06'];
$newbench['auto'][] = $row['AU_YR05'];
$newbench['auto'][] = $row['AU_YR04'];
$newbench['auto'][] = $row['AU_YR_03'];
$newbench['auto'][] = $row['AU_YRNO'];
$newbench['auto'][] = $row['AU_NEWBN'];
$newbench['auto'][] = $row['AU_NEWBU'];
$newbench['auto'][] = $row['AU_NEWLN'];
$newbench['auto'][] = $row['AU_NEWLU'];
$newbench['auto'][] = $row['AU_NEWNO'];
$newbench['auto'][] = $row['AU_V_9'];
$newbench['auto'][] = $row['AU_V10_14'];
$newbench['auto'][] = $row['AU_V15_19'];
$newbench['auto'][] = $row['AU_V20_24'];
$newbench['auto'][] = $row['AU_V25_29'];
$newbench['auto'][] = $row['AU_V30_39'];
$newbench['auto'][] = $row['AU_V40_'];
$newbench['auto'][] = $row['AU_PPUP'];
$newbench['auto'][] = $row['AU_PPULP'];
$newbench['auto'][] = $row['AU_PPULN'];
$newbench['auto'][] = $row['AU_PPUN'];
$newbench['auto'][] = $row['AU_PV_9'];
$newbench['auto'][] = $row['AU_PV10_14'];
$newbench['auto'][] = $row['AU_PV15_19'];
$newbench['auto'][] = $row['AU_PV20_24'];
$newbench['auto'][] = $row['AU_PV25_29'];
$newbench['auto'][] = $row['AU_PV30_39'];
$newbench['auto'][] = $row['AU_PV40_'];
$newbench['auto'][] = $row['AU_PTPSED'];
$newbench['auto'][] = $row['AU_PTPSCOM'];
$newbench['auto'][] = $row['AU_PTPSPO'];
$newbench['auto'][] = $row['AU_PTPMVSW'];
$newbench['auto'][] = $row['AU_PTPSUV'];
$newbench['auto'][] = $row['AU_PTPPIC'];
$newbench['auto'][] = $row['AU_PTPFVAN'];
$newbench['auto'][] = $row['AU_PTPOTH'];
$newbench['auto'][] = $row['AU_MNBDN'];
$newbench['auto'][] = $row['AU_MNBDG'];
$newbench['auto'][] = $row['AU_MNBDD'];
$newbench['auto'][] = $row['AU_MNBDS'];
$newbench['auto'][] = $row['AU_MNBDL'];
$newbench['auto'][] = $row['AU_MNBDF'];
$newbench['auto'][] = $row['AU_MNBDU'];
$newbench['auto'][] = $row['AU_MNOCN'];
$newbench['auto'][] = $row['AU_MNOCG'];
$newbench['auto'][] = $row['AU_MNOCD'];
$newbench['auto'][] = $row['AU_MNOCS'];
$newbench['auto'][] = $row['AU_MNOCL'];
$newbench['auto'][] = $row['AU_MNOCF'];
$newbench['auto'][] = $row['AU_MNOCU'];
$newbench['auto'][] = $row['AU_MNBKN'];
$newbench['auto'][] = $row['AU_MNBKG'];
$newbench['auto'][] = $row['AU_MNBKD'];
$newbench['auto'][] = $row['AU_MNBKS'];
$newbench['auto'][] = $row['AU_MNBKL'];
$newbench['auto'][] = $row['AU_MNBKF'];
$newbench['auto'][] = $row['AU_MNBKU'];
$newbench['auto'][] = $row['AU_MNTRN'];
$newbench['auto'][] = $row['AU_MNTRG'];
$newbench['auto'][] = $row['AU_MNTRD'];
$newbench['auto'][] = $row['AU_MNTRS'];
$newbench['auto'][] = $row['AU_MNTRL'];
$newbench['auto'][] = $row['AU_MNTRF'];
$newbench['auto'][] = $row['AU_MNTRU'];
$newbench['auto'][] = $row['AU_MNRPN'];
$newbench['auto'][] = $row['AU_MNRPG'];
$newbench['auto'][] = $row['AU_MNRPD'];
$newbench['auto'][] = $row['AU_MNRPS'];
$newbench['auto'][] = $row['AU_MNRPL'];
$newbench['auto'][] = $row['AU_MNRPF'];
$newbench['auto'][] = $row['AU_MNRPU'];
$newbench['auto'][] = $row['AU_MNTPN'];
$newbench['auto'][] = $row['AU_MNTPG'];
$newbench['auto'][] = $row['AU_MNTPD'];
$newbench['auto'][] = $row['AU_MNTPS'];
$newbench['auto'][] = $row['AU_MNTPL'];
$newbench['auto'][] = $row['AU_MNTPF'];
$newbench['auto'][] = $row['AU_MNTPU'];
$newbench['auto'][] = $row['AU_VSGR'];
$newbench['auto'][] = $row['AU_VSAG'];
$newbench['auto'][] = $row['AU_VSST'];
$newbench['auto'][] = $row['AU_VSCT'];
$newbench['auto'][] = $row['AU_VSCC'];
$newbench['auto'][] = $row['AU_VSGM'];
$newbench['auto'][] = $row['AU_VSGY'];
$newbench['auto'][] = 0;
$newbench['auto'][] = $row['AU_VSMD'];
$newbench['auto'][] = $row['AU_VSTR'];
$newbench['auto'][] = $row['AU_VSLB'];
$newbench['auto'][] = $row['AU_VSNP'];
$newbench['auto'][] = $row['AU_VSOKT'];
$newbench['auto'][] = $row['AU_VSPS'];
$newbench['auto'][] = $row['AU_VSSG'];
$newbench['auto'][] = $row['AU_VSSS'];
$newbench['auto'][] = $row['AU_VSWM'];
$newbench['auto'][] = $row['AU_VSDL'];
$newbench['auto'][] = $row['AU_VSCTCW'];
$newbench['auto'][] = $row['AU_VSOT'];
$newbench['auto'][] = $row['AU_GASCT'];
$newbench['auto'][] = $row['AU_GASCR'];
$newbench['auto'][] = $row['AU_GASES'];
$newbench['auto'][] = $row['AU_GASPT'];
$newbench['auto'][] = $row['AU_GASSL'];
$newbench['auto'][] = $row['AU_GASOT'];
$newbench['auto'][] = $row['AU_BUYERN'];
$newbench['auto'][] = $row['AU_PUN'];
$newbench['auto'][] = $row['AU_PUPN'];
$newbench['auto'][] = $row['AU_PUPU'];
$newbench['auto'][] = $row['AU_PULN'];
$newbench['auto'][] = $row['AU_PULU'];

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

FROM c_hm c_hm, c_dw c_dw, c_sh3 c_sh3, c_pur c_pur, c_spend c_spend, c_weight WHERE c_hm.POSTCODE = c_weight.POSTCODE AND c_dw.POSTCODE = c_weight.POSTCODE AND c_sh3.POSTCODE = c_weight.POSTCODE AND c_pur.POSTCODE = c_weight.POSTCODE AND c_spend.POSTCODE = c_weight.POSTCODE AND LEFT(c_weight.POSTCODE, 1) = '$area_to_select' ";


	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {

$newbench['improve'][] =  $row['wHH_TOT'];
$newbench['improve'][] =  $row['wPP15_'];

$newbench['improve'][] =  $row['DW_PUNEW'];
$newbench['improve'][] =  $row['DW_PUOWN'];
$newbench['improve'][] =  $row['DW_N1STHM'];
$newbench['improve'][] =  $row['DW_1STHM'];
$newbench['improve'][] =  $row['DW_RE1Y'];
$newbench['improve'][] =  $row['DW_RE5Y'];
$newbench['improve'][] =  $row['DW_RE10Y'];
$newbench['improve'][] =  $row['DW_RE19Y'];
$newbench['improve'][] =  $row['DW_RE20_Y'];

$newbench['improve'][] =  $row['DW_RASPACE'];
$newbench['improve'][] =  $row['DW_RAGARG'];
$newbench['improve'][] =  $row['DW_RADRAP'];
$newbench['improve'][] =  $row['DW_RADECK'];
$newbench['improve'][] =  $row['DW_RAELEC'];
$newbench['improve'][] =  $row['DW_RAENG'];
$newbench['improve'][] =  $row['DW_RAEPAIN'];
$newbench['improve'][] =  $row['DW_RATILE'];
$newbench['improve'][] =  $row['DW_RAFLOO'];
$newbench['improve'][] =  $row['DW_RAHVAC'];
$newbench['improve'][] =  $row['DW_RASECU'];
$newbench['improve'][] =  $row['DW_RAWIND'];
$newbench['improve'][] =  $row['DW_RAIPAIN'];
$newbench['improve'][] =  $row['DW_RALAND'];
$newbench['improve'][] =  $row['DW_RAPLUM'];
$newbench['improve'][] =  $row['DW_RABATH'];
$newbench['improve'][] =  $row['DW_RAKITC'];
$newbench['improve'][] =  $row['DW_RAORM'];
$newbench['improve'][] =  $row['DW_RAROOF'];
$newbench['improve'][] =  $row['DW_RAPOOL'];
$newbench['improve'][] =  $row['DW_RACARP'];
$newbench['improve'][] =  $row['DW_RAOTHE'];
$newbench['improve'][] =  $row['DW_HMINSP'];
$newbench['improve'][] =  $row['DW_MTGBRK'];
$newbench['improve'][] =  $row['DW_MVCOMP'];
$newbench['improve'][] =  $row['DW_REAGNT'];
$newbench['improve'][] =  $row['DW_RELAWY'];
$newbench['improve'][] =  $row['DW_PHMINSP'];
$newbench['improve'][] =  $row['DW_PMTGBRK'];
$newbench['improve'][] =  $row['DW_PMVCOMP'];
$newbench['improve'][] =  $row['DW_PREAGNT'];
$newbench['improve'][] =  $row['DW_PRELAWY'];
$newbench['improve'][] =  $row['DW_SPSELF'];
$newbench['improve'][] =  $row['DW_SPCONT'];
$newbench['improve'][] =  $row['DW_GRGSELF'];
$newbench['improve'][] =  $row['DW_GRGCONT'];
$newbench['improve'][] =  $row['DW_DRSELF'];
$newbench['improve'][] =  $row['DW_DRCONT'];
$newbench['improve'][] =  $row['DW_DKSELF'];
$newbench['improve'][] =  $row['DW_DKCONT'];
$newbench['improve'][] =  $row['DW_ELSELF'];
$newbench['improve'][] =  $row['DW_ELCONT'];
$newbench['improve'][] =  $row['DW_ENSELF'];
$newbench['improve'][] =  $row['DW_ENCONT'];
$newbench['improve'][] =  $row['DW_EPSELF'];
$newbench['improve'][] =  $row['DW_EPCONT'];
$newbench['improve'][] =  $row['DW_TISELF'];
$newbench['improve'][] =  $row['DW_TICONT'];
$newbench['improve'][] =  $row['DW_FLSELF'];
$newbench['improve'][] =  $row['DW_FLCONT'];
$newbench['improve'][] =  $row['DW_HVSELF'];
$newbench['improve'][] =  $row['DW_HVCONT'];
$newbench['improve'][] =  $row['DW_SESELF'];
$newbench['improve'][] =  $row['DW_SECONT'];
$newbench['improve'][] =  $row['DW_WISELF'];
$newbench['improve'][] =  $row['DW_WICONT'];
$newbench['improve'][] =  $row['DW_IPSELF'];
$newbench['improve'][] =  $row['DW_IPCONT'];
$newbench['improve'][] =  $row['DW_LASELF'];
$newbench['improve'][] =  $row['DW_LACONT'];
$newbench['improve'][] =  $row['DW_PLSELF'];
$newbench['improve'][] =  $row['DW_PLCONT'];
$newbench['improve'][] =  $row['DW_BTSELF'];
$newbench['improve'][] =  $row['DW_BTCONT'];
$newbench['improve'][] =  $row['DW_KISELF'];
$newbench['improve'][] =  $row['DW_KICONT'];
$newbench['improve'][] =  $row['DW_ORSELF'];
$newbench['improve'][] =  $row['DW_ORCONT'];
$newbench['improve'][] =  $row['DW_RFSELF'];
$newbench['improve'][] =  $row['DW_RFCONT'];
$newbench['improve'][] =  $row['DW_POSELF'];
$newbench['improve'][] =  $row['DW_POCONT'];
$newbench['improve'][] =  $row['DW_CPSELF'];
$newbench['improve'][] =  $row['DW_CPCONT'];
$newbench['improve'][] =  $row['DW_OHSELF'];
$newbench['improve'][] =  $row['DW_OHCONT'];
$newbench['improve'][] =  $row['DW_SP0'];
$newbench['improve'][] =  $row['DW_SP999'];
$newbench['improve'][] =  $row['DW_SP2499'];
$newbench['improve'][] =  $row['DW_SP4999'];
$newbench['improve'][] =  $row['DW_SP9999'];
$newbench['improve'][] =  $row['DW_SP19999'];
$newbench['improve'][] =  $row['DW_SP20000'];
$newbench['improve'][] =  $row['DW_NALARM'];
$newbench['improve'][] =  $row['DW_ALARM'];
$newbench['improve'][] =  $row['DW_GDSERV'];
$newbench['improve'][] =  $row['DW_MDSERV'];
$newbench['improve'][] =  $row['DW_PCSERV'];

$newbench['improve'][] =  $row['DW_TOT'];
$newbench['improve'][] =  $row['DW_SINGLE'];
$newbench['improve'][] =  $row['DW_APT5_'];
$newbench['improve'][] =  $row['DW_MOVA'];
$newbench['improve'][] =  $row['DW_OT'];
$newbench['improve'][] =  $row['DW_SEMI'];
$newbench['improve'][] =  $row['DW_DUP'];
$newbench['improve'][] =  $row['DW_ROW'];
$newbench['improve'][] =  $row['DW_APT_5'];
$newbench['improve'][] =  $row['DW_OT_SING'];
$newbench['improve'][] =  $row['DW_AVALUE'];
$newbench['improve'][] =  $row['DW_MVALUE'];
$newbench['improve'][] =  $row['DW_TOTDWLG'];
$newbench['improve'][] =  $row['DW_REGMIN'];
$newbench['improve'][] =  $row['DW_MAJORRE'];
$newbench['improve'][] =  $row['DW_TOTDWL2'];
$newbench['improve'][] =  $row['DW_CON_60'];
$newbench['improve'][] =  $row['DW_CON6180'];
$newbench['improve'][] =  $row['DW_CON8190'];
$newbench['improve'][] =  $row['DW_CON9100'];
$newbench['improve'][] =  $row['DW_CON0105'];
$newbench['improve'][] =  $row['DW_CON0611'];
$newbench['improve'][] =  $row['DW_CON12_'];
$newbench['improve'][] =  $row['DW_TOTDWL3'];
$newbench['improve'][] =  $row['DW_RM_4'];
$newbench['improve'][] =  $row['DW_RM5'];
$newbench['improve'][] =  $row['DW_RM6'];
$newbench['improve'][] =  $row['DW_RM7'];
$newbench['improve'][] =  $row['DW_RM8_'];
$newbench['improve'][] =  $row['DW_ARMSPDW'];
$newbench['improve'][] =  $row['DW_TOTDWL4'];
$newbench['improve'][] =  $row['DW_BRM_1'];
$newbench['improve'][] =  $row['DW_BRM2'];
$newbench['improve'][] =  $row['DW_BRM3'];
$newbench['improve'][] =  $row['DW_BRM4_'];
$newbench['improve'][] =  $row['DW_TOTDWL5'];
$newbench['improve'][] =  $row['DW_OWNED'];
$newbench['improve'][] =  $row['DW_RENTED'];
$newbench['improve'][] =  $row['DW_BANDH'];
$newbench['improve'][] =  $row['DW_TOTDWL6'];
$newbench['improve'][] =  $row['DW_PTCON'];
$newbench['improve'][] =  $row['DW_NPTCON'];
$newbench['improve'][] =  $row['DW_TOTDWL7'];
$newbench['improve'][] =  $row['DW_MT1'];
$newbench['improve'][] =  $row['DW_MT2'];
$newbench['improve'][] =  $row['DW_MT3_'];
$newbench['improve'][] =  $row['DW_TOTDWL8'];
$newbench['improve'][] =  $row['DW_MT_25'];
$newbench['improve'][] =  $row['DW_MT2534'];
$newbench['improve'][] =  $row['DW_MT3544'];
$newbench['improve'][] =  $row['DW_MT4554'];
$newbench['improve'][] =  $row['DW_MT5564'];
$newbench['improve'][] =  $row['DW_MT6574'];
$newbench['improve'][] =  $row['DW_MT75_'];
$newbench['improve'][] =  $row['DW_TOTDWL9'];
$newbench['improve'][] =  $row['DW_PPR_1'];
$newbench['improve'][] =  $row['DW_PPR2_'];
$newbench['improve'][] =  $row['DW_TOTDWLA'];
$newbench['improve'][] =  $row['DW_SUIT'];
$newbench['improve'][] =  $row['DW_NSUIT'];
$newbench['improve'][] =  $row['DW_MCOST'];
$newbench['improve'][] =  $row['DW_ACOST'];

$newbench['improve'][] =  $row['H_CANTR'];
$newbench['improve'][] =  $row['H_DEPOT'];
$newbench['improve'][] =  $row['H_HWARE'];
$newbench['improve'][] =  $row['H_OUTFT'];
$newbench['improve'][] =  $row['H_SENSE'];
$newbench['improve'][] =  $row['H_INDEP'];
$newbench['improve'][] =  $row['H_LEE'];
$newbench['improve'][] =  $row['H_LIGHT'];
$newbench['improve'][] =  $row['H_LOWE'];
$newbench['improve'][] =  $row['H_RONA'];
$newbench['improve'][] =  $row['H_DEPT'];
$newbench['improve'][] =  $row['H_OL'];
$newbench['improve'][] =  $row['H_OTHDEC'];
$newbench['improve'][] =  $row['H_OTHIMP'];
$newbench['improve'][] =  $row['H_CANTR_R'];
$newbench['improve'][] =  $row['H_DEPOT_R'];
$newbench['improve'][] =  $row['H_HWARE_R'];
$newbench['improve'][] =  $row['H_OUTFT_R'];
$newbench['improve'][] =  $row['H_SENSE_R'];
$newbench['improve'][] =  $row['H_INDEP_R'];
$newbench['improve'][] =  $row['H_LEE_R'];
$newbench['improve'][] =  $row['H_LIGHT_R'];
$newbench['improve'][] =  $row['H_LOWE_R'];
$newbench['improve'][] =  $row['H_RONA_R'];
$newbench['improve'][] =  $row['H_DEPT_R'];
$newbench['improve'][] =  $row['H_OL_R'];
$newbench['improve'][] =  $row['H_OTHDEC_R'];
$newbench['improve'][] =  $row['H_OTHIMP_R'];
$newbench['improve'][] =  $row['H_CANTR_O'];
$newbench['improve'][] =  $row['H_DEPOT_O'];
$newbench['improve'][] =  $row['H_HWARE_O'];
$newbench['improve'][] =  $row['H_OUTFT_O'];
$newbench['improve'][] =  $row['H_SENSE_O'];
$newbench['improve'][] =  $row['H_INDEP_O'];
$newbench['improve'][] =  $row['H_LEE_O'];
$newbench['improve'][] =  $row['H_LIGHT_O'];
$newbench['improve'][] =  $row['H_LOWE_O'];
$newbench['improve'][] =  $row['H_RONA_O'];
$newbench['improve'][] =  $row['H_DEPT_O'];
$newbench['improve'][] =  $row['H_OL_O'];
$newbench['improve'][] =  $row['H_OTHDEC_O'];
$newbench['improve'][] =  $row['H_OTHIMP_O'];

$newbench['improve'][] =  $row['PC_BBFUR'];
$newbench['improve'][] =  $row['PC_BED'];
$newbench['improve'][] =  $row['PC_OFFFUR'];
$newbench['improve'][] =  $row['PC_CARALRM'];
$newbench['improve'][] =  $row['PC_CARSTR'];
$newbench['improve'][] =  $row['PC_CMRAFLM'];
$newbench['improve'][] =  $row['PC_CMPEQP'];
$newbench['improve'][] =  $row['PC_CMPTRL'];
$newbench['improve'][] =  $row['PC_EREADER'];
$newbench['improve'][] =  $row['PC_GRPTFUR'];
$newbench['improve'][] =  $row['PC_GASBBQ'];
$newbench['improve'][] =  $row['PC_FIREPLC'];
$newbench['improve'][] =  $row['PC_GPS'];
$newbench['improve'][] =  $row['PC_GOLFEQP'];
$newbench['improve'][] =  $row['PC_HOCKEY'];
$newbench['improve'][] =  $row['PC_HOTTUB'];
$newbench['improve'][] =  $row['PC_EXCEQP'];
$newbench['improve'][] =  $row['PC_APPLIAN'];
$newbench['improve'][] =  $row['PC_MOTORCY'];
$newbench['improve'][] =  $row['PC_MINSTR'];
$newbench['improve'][] =  $row['PC_OFFEQP'];
$newbench['improve'][] =  $row['PC_MP3'];
$newbench['improve'][] =  $row['PC_PC'];
$newbench['improve'][] =  $row['PC_PCSW'];
$newbench['improve'][] =  $row['PC_PRNT'];
$newbench['improve'][] =  $row['PC_POOL'];
$newbench['improve'][] =  $row['PC_PRAFUNE'];
$newbench['improve'][] =  $row['PC_BOAT'];
$newbench['improve'][] =  $row['PC_SKIEQP'];
$newbench['improve'][] =  $row['PC_SNOWMBL'];
$newbench['improve'][] =  $row['PC_STEREO'];
$newbench['improve'][] =  $row['PC_TV'];
$newbench['improve'][] =  $row['PC_TIRE'];
$newbench['improve'][] =  $row['PC_VACUUM'];
$newbench['improve'][] =  0;
$newbench['improve'][] =  $row['PC_GMSYS'];
$newbench['improve'][] =  $row['PC_WEDSVR'];
$newbench['improve'][] =  $row['PI_BBFUR'];
$newbench['improve'][] =  $row['PI_BED'];
$newbench['improve'][] =  $row['PI_OFFFUR'];
$newbench['improve'][] =  $row['PI_CARALRM'];
$newbench['improve'][] =  $row['PI_CARSTR'];
$newbench['improve'][] =  $row['PI_CMRAFLM'];
$newbench['improve'][] =  $row['PI_CMPEQP'];
$newbench['improve'][] =  $row['PI_CMPTRL'];
$newbench['improve'][] =  $row['PI_EREADER'];
$newbench['improve'][] =  $row['PI_GRPTFUR'];
$newbench['improve'][] =  $row['PI_GASBBQ'];
$newbench['improve'][] =  $row['PI_FIREPLC'];
$newbench['improve'][] =  $row['PI_GPS'];
$newbench['improve'][] =  $row['PI_GOLFEQP'];
$newbench['improve'][] =  $row['PI_HOCKEY'];
$newbench['improve'][] =  $row['PI_HOTTUB'];
$newbench['improve'][] =  $row['PI_EXCEQP'];
$newbench['improve'][] =  $row['PI_APPLIAN'];
$newbench['improve'][] =  $row['PI_MOTORCY'];
$newbench['improve'][] =  $row['PI_MINSTR'];
$newbench['improve'][] =  $row['PI_OFFEQP'];
$newbench['improve'][] =  $row['PI_MP3'];
$newbench['improve'][] =  $row['PI_PC'];
$newbench['improve'][] =  $row['PI_PCSW'];
$newbench['improve'][] =  $row['PI_PRNT'];
$newbench['improve'][] =  $row['PI_POOL'];
$newbench['improve'][] =  $row['PI_PRAFUNE'];
$newbench['improve'][] =  $row['PI_BOAT'];
$newbench['improve'][] =  $row['PI_SKIEQP'];
$newbench['improve'][] =  $row['PI_SNOWMBL'];
$newbench['improve'][] =  $row['PI_STEREO'];
$newbench['improve'][] =  $row['PI_TV'];
$newbench['improve'][] =  $row['PI_TIRE'];
$newbench['improve'][] =  $row['PI_VACUUM'];
$newbench['improve'][] =  0;
$newbench['improve'][] =  $row['PI_GMSYS'];
$newbench['improve'][] =  $row['PI_WEDSVR'];

$newbench['improve'][] =  $row['SP_GSNO'];
$newbench['improve'][] =  $row['SP_GS249'];
$newbench['improve'][] =  $row['SP_GS499'];
$newbench['improve'][] =  $row['SP_GS500'];
$newbench['improve'][] =  $row['SP_HDNO'];
$newbench['improve'][] =  $row['SP_HD249'];
$newbench['improve'][] =  $row['SP_HD499'];
$newbench['improve'][] =  $row['SP_HD500'];
$newbench['improve'][] =  $row['SP_PTNO'];
$newbench['improve'][] =  $row['SP_PT249'];
$newbench['improve'][] =  $row['SP_PT499'];
$newbench['improve'][] =  $row['SP_PT500'];


	}}	

echo "$newbench";
print_r($newbench);







		?>