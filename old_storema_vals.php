<?php
$total_fly1 = $bFLY_DPN +$bFLY_DPS  +$bFLY_DPO  +$bFLY_DPF;
$total_fly2 = $bFLY_CNPN + $bFLY_CNPS + $bFLY_CNPO + $bFLY_CNPF;
$pbFLY_DPN = $bFLY_DPN / $total_fly1 *100;
$pbFLY_DPS = $bFLY_DPS / $total_fly1 *100;
$pbFLY_DPO = $bFLY_DPO / $total_fly1 *100;
$pbFLY_DPF = $bFLY_DPF / $total_fly1 *100;
$pbFLY_CNPN = $bFLY_CNPN / $total_fly2 *100;
$pbFLY_CNPS = $bFLY_CNPS / $total_fly2 *100;
$pbFLY_CNPO = $bFLY_CNPO / $total_fly2 *100;
$pbFLY_CNPF = $bFLY_CNPF / $total_fly2 *100;
$pbFLY_DOORN = $bFLY_DOORN / $total_fly1 *100;
$pbFLY_DOORS = $bFLY_DOORS / $total_fly1 *100;
$pbFLY_DOORO = $bFLY_DOORO / $total_fly1 *100;
$pbFLY_DOORF = $bFLY_DOORF / $total_fly1 *100;
$index_FLY_DPN = $pbFLY_DPN / $canp_FLY_DPN * 100;
$index_FLY_DPS = $pbFLY_DPS / $canp_FLY_DPS * 100;
$index_FLY_DPO = $pbFLY_DPO / $canp_FLY_DPO * 100;
$index_FLY_DPF = $pbFLY_DPF / $canp_FLY_DPF * 100;
$index_FLY_CNPN = $pbFLY_CNPN / $canp_FLY_CNPN * 100;
$index_FLY_CNPS = $pbFLY_CNPS / $canp_FLY_CNPS * 100;
$index_FLY_CNPO = $pbFLY_CNPO / $canp_FLY_CNPO * 100;
$index_FLY_CNPF = $pbFLY_CNPF / $canp_FLY_CNPF * 100;
$index_FLY_DOORN = $pbFLY_DOORN / $canp_FLY_DOORN * 100;
$index_FLY_DOORS = $pbFLY_DOORS / $canp_FLY_DOORS * 100;
$index_FLY_DOORO = $pbFLY_DOORO / $canp_FLY_DOORO * 100;
$index_FLY_DOORF = $pbFLY_DOORF / $canp_FLY_DOORF * 100;
$pb_flyer_heavy = $pbFLY_DOORO + $pbFLY_DOORF;
$canp_flyer_heavy = $canp_FLY_DOORO + $canp_FLY_DOORF ;
$index_flyer_heavy = $pb_flyer_heavy/ $canp_flyer_heavy *100;
// flyers augupdate
$pbFLY_CPN = $bFLY_CPN / $total_fly1*100;
$pbFLY_CPS = $bFLY_CPS / $total_fly1*100;
$pbFLY_CPO = $bFLY_CPO / $total_fly1*100;
$pbFLY_CPF = $bFLY_CPF / $total_fly1*100;
$pbFLY_STOREN = $bFLY_STOREN / $total_fly1*100;
$pbFLY_STORES = $bFLY_STORES / $total_fly1*100;
$pbFLY_STOREO = $bFLY_STOREO / $total_fly1*100;
$pbFLY_STOREF = $bFLY_STOREF / $total_fly1*100;
$pbFLY_MAILN = $bFLY_MAILN / $total_fly1*100;
$pbFLY_MAILS = $bFLY_MAILS / $total_fly1*100;
$pbFLY_MAILO = $bFLY_MAILO / $total_fly1*100;
$pbFLY_MAILF = $bFLY_MAILF / $total_fly1*100;
$pbFLY_CPWEBN = $bFLY_CPWEBN / $total_fly1*100;
$pbFLY_CPWEBS = $bFLY_CPWEBS / $total_fly1*100;
$pbFLY_CPWEBO = $bFLY_CPWEBO / $total_fly1*100;
$pbFLY_CPWEBF = $bFLY_CPWEBF / $total_fly1*100;
$pbFLY_ATTVF = $bFLY_ATTVF / $total_fly1*100;
$pbFLY_ATTSF = $bFLY_ATTSF / $total_fly1*100;
$pbFLY_ATTSU = $bFLY_ATTSU / $total_fly1*100;
$pbFLY_ATTVU = $bFLY_ATTVU / $total_fly1*100;
$pbFLY_SSDAY = $bFLY_SSDAY / $total_fly1*100;
$pbFLY_SSWK = $bFLY_SSWK / $total_fly1*100;
$pbFLY_SWKL = $bFLY_SWKL / $total_fly1*100;
$pbFLY_WSDAY = $bFLY_WSDAY / $total_fly1*100;
$pbFLY_WSWK = $bFLY_WSWK / $total_fly1*100;
$pbFLY_WWKL = $bFLY_WWKL / $total_fly1*100;
$index_FLY_CPN  = $pbFLY_CPN / $canp_FLY_CPN * 100;
$index_FLY_CPS  = $pbFLY_CPS / $canp_FLY_CPS * 100;
$index_FLY_CPO  = $pbFLY_CPO / $canp_FLY_CPO * 100;
$index_FLY_CPF  = $pbFLY_CPF / $canp_FLY_CPF * 100;
$index_FLY_STOREN  = $pbFLY_STOREN / $canp_FLY_STOREN * 100;
$index_FLY_STORES  = $pbFLY_STORES / $canp_FLY_STORES * 100;
$index_FLY_STOREO  = $pbFLY_STOREO / $canp_FLY_STOREO * 100;
$index_FLY_STOREF  = $pbFLY_STOREF / $canp_FLY_STOREF * 100;
$index_FLY_MAILN  = $pbFLY_MAILN / $canp_FLY_MAILN * 100;
$index_FLY_MAILS  = $pbFLY_MAILS / $canp_FLY_MAILS * 100;
$index_FLY_MAILO  = $pbFLY_MAILO / $canp_FLY_MAILO * 100;
$index_FLY_MAILF  = $pbFLY_MAILF / $canp_FLY_MAILF * 100;
$index_FLY_CPWEBN  = $pbFLY_CPWEBN / $canp_FLY_CPWEBN * 100;
$index_FLY_CPWEBS  = $pbFLY_CPWEBS / $canp_FLY_CPWEBS * 100;
$index_FLY_CPWEBO  = $pbFLY_CPWEBO / $canp_FLY_CPWEBO * 100;
$index_FLY_CPWEBF  = $pbFLY_CPWEBF / $canp_FLY_CPWEBF * 100;
$index_FLY_ATTVF  = $pbFLY_ATTVF / $canp_FLY_ATTVF * 100;
$index_FLY_ATTSF  = $pbFLY_ATTSF / $canp_FLY_ATTSF * 100;
$index_FLY_ATTSU  = $pbFLY_ATTSU / $canp_FLY_ATTSU * 100;
$index_FLY_ATTVU  = $pbFLY_ATTVU / $canp_FLY_ATTVU * 100;
$index_FLY_SSDAY  = $pbFLY_SSDAY / $canp_FLY_SSDAY * 100;
$index_FLY_SSWK  = $pbFLY_SSWK / $canp_FLY_SSWK * 100;
$index_FLY_SWKL  = $pbFLY_SWKL / $canp_FLY_SWKL * 100;
$index_FLY_WSDAY  = $pbFLY_WSDAY / $canp_FLY_WSDAY * 100;
$index_FLY_WSWK  = $pbFLY_WSWK / $canp_FLY_WSWK * 100;
$index_FLY_WWKL  = $pbFLY_WWKL / $canp_FLY_WWKL * 100;
$media_pp15_ = $demo['media'][0];
$RD_HR3542  = $demo['media'][1];
$RD_HR4249  = $demo['media'][2];
$RD_HR49_  = $demo['media'][3];
$TV_HRMF78  = $demo['media'][4];
$TV_HRMF8_  = $demo['media'][5];
$NP_TMM4  = $demo['media'][6];
$NP_TMM5  = $demo['media'][7];
$NP_TMM6_  = $demo['media'][8];
$IT_TWK15  = $demo['media'][9];
$IT_TWK25  = $demo['media'][10];
$IT_TWK25_  = $demo['media'][11];
$MZ_LMD18  = $demo['media'][12];
$MZ_LMD18_  = $demo['media'][13];
// media
$pradio_high = ($demo['media'][1] + $demo['media'][2] + $demo['media'][3]) /$demo['media'][0] * 100;
$ptv_high = ($demo['media'][4] + $demo['media'][5] ) /$demo['media'][0] * 100;
$pnp_high = ($demo['media'][6] + $demo['media'][7] + $demo['media'][8] ) /$demo['media'][0] * 100;
$pinternet_high = ($demo['media'][11] + $demo['media'][10] + $demo['media'][9] ) /$demo['media'][0] * 100;
$canpradio_high = ($rbench['media'][1] + $rbench['media'][2] + $rbench['media'][3]) /$rbench['media'][0] * 100;
$canptv_high = ($rbench['media'][4] + $rbench['media'][5] ) /$rbench['media'][0] * 100;
$canpnp_high = ($rbench['media'][6] + $rbench['media'][7] + $rbench['media'][8] ) /$rbench['media'][0] * 100;
$canpinternet_high = ($rbench['media'][11] + $rbench['media'][10] + $rbench['media'][9] ) /$rbench['media'][0] * 100;
$bradioindex = $pradio_high / $canpradio_high *100;
$btvindex = $ptv_high / $canptv_high *100;
$bnpindex = $pnp_high / $canpnp_high  *100;
$binternetindex = $pinternet_high / $canpinternet_high *100;
$bRD_ADC = $RD_ADC/ $leis_pp15_ *100;
$bRD_MSTRK = $RD_MSTRK/ $leis_pp15_ *100;
$bRD_HADC = $RD_HADC/ $leis_pp15_ *100;
$bRD_MDRK = $RD_MDRK/ $leis_pp15_ *100;
$bRD_MSTM = $RD_MSTM/ $leis_pp15_ *100;
$bRD_NEWS = $RD_NEWS/ $leis_pp15_ *100;
$bRD_CLAHIT = $RD_CLAHIT/ $leis_pp15_ *100;
$bRD_CLARK = $RD_CLARK/ $leis_pp15_ *100;
$bRD_CNTRY = $RD_CNTRY/ $leis_pp15_ *100;
$bRD_CLASS = $RD_CLASS/ $leis_pp15_ *100;
$bRD_JAZZ = $RD_JAZZ/ $leis_pp15_ *100;
// media 2 = Radio 
$media2['percent'][] = $bRD_ADC;
$media2['percent'][] = $bRD_MSTRK;
$media2['percent'][] = $bRD_HADC;
$media2['percent'][] = $bRD_MDRK;
$media2['percent'][] = $bRD_MSTM;
$media2['percent'][] = $bRD_NEWS;
$media2['percent'][] = $bRD_CLAHIT;
$media2['percent'][] = $bRD_CLARK;
$media2['percent'][] = $bRD_CNTRY;
$media2['percent'][] = $bRD_CLASS;
$media2['percent'][] = $bRD_JAZZ;
$media2['name'][] = "Adult contemporary";
$media2['name'][] = "Mainstream rock";
$media2['name'][] = "Hot adult contemporary";
$media2['name'][] = "Alternative";
$media2['name'][] = "Top 40";
$media2['name'][] = "News talk";
$media2['name'][] = "Classic hits";
$media2['name'][] = "Classic rock";
$media2['name'][] = "Country";
$media2['name'][] = "Classical";
$media2['name'][] = "Jazz";

$media2['image'][] = "media/radio/adult_cont_radio.jpg";
$media2['image'][] = "media/radio/rockradio.jpg";
$media2['image'][] = "media/radio/hac.jpg";
$media2['image'][] = "media/radio/alternative_radio.jpg";
$media2['image'][] = "media/radio/top-radio.jpg";
$media2['image'][] = "media/radio/news-radio.jpg";
$media2['image'][] = "media/radio/Classichits.jpg";
$media2['image'][] = "media/radio/classic-rock.jpg";
$media2['image'][] = "media/radio/country-radio.jpg";
$media2['image'][] = "media/radio/classical-radio.jpg";
$media2['image'][] = "media/radio/jazz-radio.jpg";

for ( $seg_vars = 0; $seg_vars <sizeof($media2["percent"]); $seg_vars ++) {
$media2["index"][] = min(500 , $media2["percent"][$seg_vars] / $media2["canada"][$seg_vars] * 100); 
}
// radio
$amedia2["percent"] = $media2["percent"];
$score_count = 1;
arsort($amedia2["percent"]);
foreach ($amedia2["percent"] as $key => $val) {
	$s1_media2["score"][] = $score_count;
	$score_count = $score_count +1;
	$s1_media2["percent"][] = $media2["percent"][$key];
	$s1_media2["name"][] = $media2["name"][$key];
	$s1_media2["image"][] = $media2["image"][$key];
	$s1_media2["index"][] = $media2["index"][$key];
}
$bmedia2["index"] = $s1_media2["index"];
$score_count = 1;
arsort($bmedia2["index"]);
foreach ($bmedia2["index"] as $key => $val) {
	if($s1_media2["percent"][$key] > 5) {
	$s2_media2["score"][] = $score_count + $s1_media2["score"][$key];
	$score_count = $score_count +1;
	$s2_media2["percent"][] = $s1_media2["percent"][$key];
	$s2_media2["name"][] = $s1_media2["name"][$key];
	$s2_media2["image"][] = $s1_media2["image"][$key];
	$s2_media2["index"][] = $s1_media2["index"][$key];
}
else {
$score_count = $score_count +1;
	$s2_media2["score"][] = $s1_media2["score"][$key] + 33;
	$s2_media2["percent"][] = $s1_media2["percent"][$key];
	$s2_media2["name"][] = $s1_media2["name"][$key];
	$s2_media2["image"][] = $s1_media2["image"][$key];
	$s2_media2["index"][] = $s1_media2["index"][$key];
}
}
$cmedia2["score"] = $s2_media2["score"];
asort($cmedia2["score"]);
foreach ($cmedia2["score"] as $key => $val) {
	$sorted_media2["percent"][] = $s2_media2["percent"][$key];
	$sorted_media2["name"][] = $s2_media2["name"][$key];
	$sorted_media2["image"][] = $s2_media2["image"][$key];
	$sorted_media2["index"][] = $s2_media2["index"][$key];
	$sorted_media2["score"][] = $s2_media2["score"][$key];
}
// ensure have 8
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;		$sorted_media2["image"][] = "media/news/spacer.gif";
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;		$sorted_media2["image"][] = "media/news/spacer.gif";
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;		$sorted_media2["image"][] = "media/news/spacer.gif";
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;		$sorted_media2["image"][] = "media/news/spacer.gif";
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;
// TV
$bTV_AUTO = $TV_AUTO/ $leis_pp15_ *100;
$bTV_BSBALL = $TV_BSBALL/ $leis_pp15_ *100;
$bTV_BKBALL = $TV_BKBALL/ $leis_pp15_ *100;
$bTV_CARTOO = $TV_CARTOO/ $leis_pp15_ *100;
$bTV_CTSHOW = $TV_CTSHOW/ $leis_pp15_ *100;
$bTV_DOC = $TV_DOC/ $leis_pp15_ *100;
$bTV_SKATE = $TV_SKATE/ $leis_pp15_ *100;
$bTV_CFL = $TV_CFL/ $leis_pp15_ *100;
$bTV_NFL = $TV_NFL/ $leis_pp15_ *100;
$bTV_GMSHOW = $TV_GMSHOW/ $leis_pp15_ *100;
$bTV_GOLF = $TV_GOLF/ $leis_pp15_ *100;
$bTV_HOCKEY = $TV_HOCKEY/ $leis_pp15_ *100;
$bTV_HOME = $TV_HOME/ $leis_pp15_ *100;
$bTV_HOMDEC = $TV_HOMDEC/ $leis_pp15_ *100;
$bTV_MSERIE = $TV_MSERIE/ $leis_pp15_ *100;
$bTV_MOVIE = $TV_MOVIE/ $leis_pp15_ *100;
$bTV_NEWS = $TV_NEWS/ $leis_pp15_ *100;
$bTV_PMKOV = $TV_PMKOV/ $leis_pp15_ *100;
$bTV_REALITY = $TV_REALITY/ $leis_pp15_ *100;
$bTV_CMDIES = $TV_CMDIES/ $leis_pp15_ *100;
$bTV_SOAP = $TV_SOAP/ $leis_pp15_ *100;
$bTV_DRAMA = $TV_DRAMA/ $leis_pp15_ *100;
$bTV_TALK = $TV_TALK/ $leis_pp15_ *100;
$bTV_INFO = $TV_INFO/ $leis_pp15_ *100;
$bTV_SPEC = $TV_SPEC/ $leis_pp15_ *100;
$bTV_WREST = $TV_WREST/ $leis_pp15_ *100;
$media3['percent'][] = $bTV_AUTO;
$media3['percent'][] = $bTV_BSBALL;
$media3['percent'][] = $bTV_BKBALL;
$media3['percent'][] = $bTV_CARTOO;
$media3['percent'][] = $bTV_CTSHOW;
$media3['percent'][] = $bTV_DOC;
$media3['percent'][] = $bTV_SKATE;
$media3['percent'][] = $bTV_CFL;
$media3['percent'][] = $bTV_NFL;
$media3['percent'][] = $bTV_GMSHOW;
$media3['percent'][] = $bTV_GOLF;
$media3['percent'][] = $bTV_HOCKEY;
$media3['percent'][] = $bTV_HOME;
$media3['percent'][] = $bTV_HOMDEC;
$media3['percent'][] = $bTV_MSERIE;
$media3['percent'][] = $bTV_MOVIE;
$media3['percent'][] = $bTV_NEWS;
$media3['percent'][] = $bTV_PMKOV;
$media3['percent'][] = $bTV_REALITY;
$media3['percent'][] = $bTV_CMDIES;
$media3['percent'][] = $bTV_SOAP;
$media3['percent'][] = $bTV_DRAMA;
$media3['percent'][] = $bTV_TALK;
$media3['percent'][] = $bTV_INFO;
$media3['percent'][] = $bTV_SPEC;
$media3['percent'][] = $bTV_WREST;
$media3['name'][] = "Auto racing";
$media3['name'][] = "Baseball";
$media3['name'][] = "Basketball";
$media3['name'][] = "Cartoons";
$media3['name'][] = "Contest shows";
$media3['name'][] = "Documentary";
$media3['name'][] = "Figure skating";
$media3['name'][] = "CFL";
$media3['name'][] = "NFL";
$media3['name'][] = "Game shows";
$media3['name'][] = "Golf";
$media3['name'][] = "Hockey";
$media3['name'][] = "Home improvement";
$media3['name'][] = "Home decor";
$media3['name'][] = "Mystery";
$media3['name'][] = "Movies";
$media3['name'][] = "News";
$media3['name'][] = "Makeover shows";
$media3['name'][] = "Reality";
$media3['name'][] = "Sit coms";
$media3['name'][] = "Soaps";
$media3['name'][] = "Dramas";
$media3['name'][] = "Talk shows";
$media3['name'][] = "Infomercials";
$media3['name'][] = "Awards shows";
$media3['name'][] = "Wrestling";

$media3['image'][] = "media/tv/auto-racing.jpg";
$media3['image'][] = "media/tv/baseball.jpg";
$media3['image'][] = "media/tv/basketball.jpg";
$media3['image'][] = "media/tv/cartoon.jpg";
$media3['image'][] = "media/tv/contestshow.jpg";
$media3['image'][] = "media/tv/documentary.jpg";
$media3['image'][] = "media/tv/ice-skating.jpg";
$media3['image'][] = "media/tv/CFL.jpg";
$media3['image'][] = "media/tv/nfl_television.jpg";
$media3['image'][] = "media/tv/gameshow.jpg";
$media3['image'][] = "media/tv/golf.jpg";
$media3['image'][] = "media/tv/hockey.jpg";
$media3['image'][] = "media/tv/homeimprovement.jpg";
$media3['image'][] = "media/tv/homedecor.jpg";
$media3['image'][] = "media/tv/mystery.jpg";
$media3['image'][] = "media/tv/movies_television.jpg";
$media3['image'][] = "media/tv/news2.jpg";
$media3['image'][] = "media/tv/makeover.jpg";
$media3['image'][] = "media/tv/reality.jpg";
$media3['image'][] = "media/tv/sitcomes.jpg";
$media3['image'][] = "media/tv/soap.jpg";
$media3['image'][] = "media/tv/drama.jpg";
$media3['image'][] = "media/tv/talkshow.jpg";
$media3['image'][] = "media/tv/infomercials.jpg";
$media3['image'][] = "media/tv/awardshow.jpg";
$media3['image'][] = "media/tv/wrestling.jpg";


for ( $seg_vars = 0; $seg_vars <sizeof($media3["percent"]); $seg_vars ++) {
$media3["index"][] = $media3["percent"][$seg_vars] / $media3["canada"][$seg_vars] * 100; 
}
$amedia3["percent"] = $media3["percent"];
$score_count = 1;
arsort($amedia3["percent"]);
foreach ($amedia3["percent"] as $key => $val) {
$s1_media3["score"][] = $score_count;
$score_count = $score_count +1;
$s1_media3["percent"][] = $media3["percent"][$key];
$s1_media3["name"][] = $media3["name"][$key];
$s1_media3["image"][] = $media3["image"][$key];
$s1_media3["index"][] = $media3["index"][$key];
}
$bmedia3["index"] = $s1_media3["index"];
$score_count = 1;
arsort($bmedia3["index"]);
foreach ($bmedia3["index"] as $key => $val) {
if($s1_media3["percent"][$key] > 5) {
$s2_media3["score"][] = $score_count + $s1_media3["score"][$key];
$score_count = $score_count +1;
$s2_media3["percent"][] = $s1_media3["percent"][$key];
$s2_media3["name"][] = $s1_media3["name"][$key];
$s2_media3["image"][] = $s1_media3["image"][$key];
$s2_media3["index"][] = $s1_media3["index"][$key];
}
else {
$score_count = $score_count +1;
$s2_media3["score"][] = + $s1_media3["score"][$key] + 33;
$s2_media3["percent"][] = $s1_media3["percent"][$key];
$s2_media3["name"][] = $s1_media3["name"][$key];
$s2_media3["image"][] = $s1_media3["image"][$key];
$s2_media3["index"][] = $s1_media3["index"][$key];
}
}
$cmedia3["score"] = $s2_media3["score"];
asort($cmedia3["score"]);
foreach ($cmedia3["score"] as $key => $val) {
$sorted_media3["percent"][] = $s2_media3["percent"][$key];
$sorted_media3["name"][] = $s2_media3["name"][$key];
$sorted_media3["image"][] = $s2_media3["image"][$key];
$sorted_media3["index"][] = $s2_media3["index"][$key];
$sorted_media3["score"][] = $s2_media3["score"][$key];
}
// ensure have 8
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;		$sorted_media3["image"][] = "media/news/spacer.gif";
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;		$sorted_media3["image"][] = "media/news/spacer.gif";
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;		$sorted_media3["image"][] = "media/news/spacer.gif";
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;		$sorted_media3["image"][] = "media/news/spacer.gif";
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;		$sorted_media3["image"][] = "media/news/spacer.gif";
// Newspaper
$bNP_AUTOF = $NP_AUTOF/ $leis_pp15_ *100;
$bNP_BUSIF = $NP_BUSIF/ $leis_pp15_ *100;
$bNP_CL_ADF = $NP_CL_ADF/ $leis_pp15_ *100;
$bNP_EDITF = $NP_EDITF/ $leis_pp15_ *100;
$bNP_FASHF = $NP_FASHF/ $leis_pp15_ *100;
$bNP_FOODF = $NP_FOODF/ $leis_pp15_ *100;
$bNP_HEALTHF = $NP_HEALTHF/ $leis_pp15_ *100;
$bNP_INEWF = $NP_INEWF/ $leis_pp15_ *100;
$bNP_LNEWF = $NP_LNEWF/ $leis_pp15_ *100;
$bNP_MOVIF = $NP_MOVIF/ $leis_pp15_ *100;
$bNP_NNEWF = $NP_NNEWF/ $leis_pp15_ *100;
$bNP_HOMEF = $NP_HOMEF/ $leis_pp15_ *100;
$bNP_RESTAF = $NP_RESTAF/ $leis_pp15_ *100;
$bNP_SPORF = $NP_SPORF/ $leis_pp15_ *100;
$bNP_TRAVF = $NP_TRAVF/ $leis_pp15_ *100;
$bNP_ADSF = $NP_ADSF/ $leis_pp15_ *100;
$media6['percent'][] = $bNP_AUTOF;
$media6['percent'][] = $bNP_BUSIF;
$media6['percent'][] = $bNP_CL_ADF;
$media6['percent'][] = $bNP_EDITF;
$media6['percent'][] = $bNP_FASHF;
$media6['percent'][] = $bNP_FOODF;
$media6['percent'][] = $bNP_HEALTHF;
$media6['percent'][] = $bNP_INEWF;
$media6['percent'][] = $bNP_LNEWF;
$media6['percent'][] = $bNP_MOVIF;
$media6['percent'][] = $bNP_NNEWF;
$media6['percent'][] = $bNP_HOMEF;
$media6['percent'][] = $bNP_RESTAF;
$media6['percent'][] = $bNP_SPORF;
$media6['percent'][] = $bNP_TRAVF;
$media6['percent'][] = $bNP_ADSF;

$media6['name'][] = "Automotive";		// newspaper
$media6['name'][] = "Business";
$media6['name'][] = "Classified";
$media6['name'][] = "Editorial";
$media6['name'][] = "Fashion";
$media6['name'][] = "Food";
$media6['name'][] = "Health";
$media6['name'][] = "International news";
$media6['name'][] = "Local news";
$media6['name'][] = "Entertainment";
$media6['name'][] = "National news";
$media6['name'][] = "New homes";
$media6['name'][] = "Real estate";
$media6['name'][] = "Sports";
$media6['name'][] = "Travel";
$media6['name'][] = "Advertising";

$media6['image'][] = "media/news/Automotive.jpg";
$media6['image'][] = "media/news/businessnewspaper.jpg";
$media6['image'][] = "media/news/Classified.jpg";
$media6['image'][] = "media/news/editorial.jpg";
$media6['image'][] = "media/news/fashion.jpg";
$media6['image'][] = "media/news/food_newspaper.jpg";
$media6['image'][] = "media/news/health_newspaper.jpg";
$media6['image'][] = "media/news/int_newspaper.jpg";
$media6['image'][] = "media/news/local_newspaper.jpg";
$media6['image'][] = "media/news/entertainment_newspaper.jpg";
$media6['image'][] = "media/news/national_newspaper.jpg";
$media6['image'][] = "media/news/new_homes.jpg";
$media6['image'][] = "media/news/real-estate.jpg";
$media6['image'][] = "media/news/sports.jpg";
$media6['image'][] = "media/news/travel.jpg";
$media6['image'][] = "media/news/click_ad.jpg";





for ( $seg_vars = 0; $seg_vars <sizeof($media6["percent"]); $seg_vars ++) {
$media6["index"][] = $media6["percent"][$seg_vars] / $media6["canada"][$seg_vars] * 100; 
}
$amedia6["percent"] = $media6["percent"];
$score_count = 1;
arsort($amedia6["percent"]);
foreach ($amedia6["percent"] as $key => $val) {
	$s1_media6["score"][] = $score_count;
	$score_count = $score_count +1;
	$s1_media6["percent"][] = $media6["percent"][$key];
	$s1_media6["name"][] = $media6["name"][$key];
	$s1_media6["index"][] = $media6["index"][$key];
	$s1_media6["image"][] = $media6["image"][$key];
}
$bmedia6["index"] = $s1_media6["index"];
$score_count = 1;
arsort($bmedia6["index"]);
foreach ($bmedia6["index"] as $key => $val) {
if($s1_media6["percent"][$key] > 5) {
	$s2_media6["score"][] = $score_count + $s1_media6["score"][$key];
	$score_count = $score_count +1;
	$s2_media6["percent"][] = $s1_media6["percent"][$key];
	$s2_media6["name"][] = $s1_media6["name"][$key];
	$s2_media6["image"][] = $s1_media6["image"][$key];
	$s2_media6["index"][] = $s1_media6["index"][$key];
}
else {
	$score_count = $score_count +1;
	$s2_media6["score"][] = + $s1_media6["score"][$key] + 33;
	$s2_media6["percent"][] = $s1_media6["percent"][$key];
	$s2_media6["name"][] = $s1_media6["name"][$key];
	$s2_media6["image"][] = $s1_media6["image"][$key];
	$s2_media6["index"][] = $s1_media6["index"][$key];
}
}
$cmedia6["score"] = $s2_media6["score"];
asort($cmedia6["score"]);
foreach ($cmedia6["score"] as $key => $val) {
	$sorted_media6["percent"][] = $s2_media6["percent"][$key];
	$sorted_media6["name"][] = $s2_media6["name"][$key];
	$sorted_media6["image"][] = $s2_media6["image"][$key];
	$sorted_media6["index"][] = $s2_media6["index"][$key];
	$sorted_media6["score"][] = $s2_media6["score"][$key];
}


// ensure have 8
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;		$sorted_media6["image"][] = "media/news/spacer.gif";
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;		$sorted_media6["image"][] = "media/news/spacer.gif";
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;		$sorted_media6["image"][] = "media/news/spacer.gif";
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;		$sorted_media6["image"][] = "media/news/spacer.gif";
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;		$sorted_media6["image"][] = "media/news/spacer.gif";
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
$leis_pp15_ = $leis_pp15_ ;
$hhbLS_MUSM = $bLS_MUSM / $leis_pp15_ *100;
$hhbLS_EXHBT = $bLS_EXHBT / $leis_pp15_ *100;
$hhbLS_HIST = $bLS_HIST / $leis_pp15_ *100;
$hhbLS_CTPRK = $bLS_CTPRK / $leis_pp15_ *100;
$hhbLS_MAXMV = $bLS_MAXMV / $leis_pp15_ *100;
$hhbLS_SPEVN = $bLS_SPEVN / $leis_pp15_ *100;
$hhbLS_AMUSE = $bLS_AMUSE / $leis_pp15_ *100;
$hhbLS_THMPK = $bLS_THMPK / $leis_pp15_ *100;
$hhbLS_ZOO = $bLS_ZOO / $leis_pp15_ *100;
$hhbLS_OTHAT = $bLS_OTHAT / $leis_pp15_ *100;
$hhbLS_STDM = $bLS_STDM / $leis_pp15_ *100;
$hhbLS_CS = $bLS_CS / $leis_pp15_ *100;
$hhbLS_NTCLB = $bLS_NTCLB / $leis_pp15_ *100;
$hhbLS_ODSTG = $bLS_ODSTG / $leis_pp15_ *100;
$hhbLS_THTR = $bLS_THTR / $leis_pp15_ *100;
$hhbLS_MJTHT = $bLS_MJTHT / $leis_pp15_ *100;
$hhbLS_CMTHT = $bLS_CMTHT / $leis_pp15_ *100;
$hhbLS_FSTVL = $bLS_FSTVL / $leis_pp15_ *100;
$hhbLS_OTTHT = $bLS_OTTHT / $leis_pp15_ *100;
$hhbLS_CLSCC = $bLS_CLSCC / $leis_pp15_ *100;
$hhbLS_BAR = $bLS_BAR / $leis_pp15_ *100;
$hhbLS_CMCLB = $bLS_CMCLB / $leis_pp15_ *100;
$hhbLS_DNCLB = $bLS_DNCLB / $leis_pp15_ *100;
$hhbLS_DITHT = $bLS_DITHT / $leis_pp15_ *100;
$hhbLS_FMFST = $bLS_FMFST / $leis_pp15_ *100;
$hhbLS_MSFST = $bLS_MSFST / $leis_pp15_ *100;
$hhbLS_MVTHT = $bLS_MVTHT / $leis_pp15_ *100;
$hhbLS_NPPK = $bLS_NPPK / $leis_pp15_ *100;
$hhbLS_POPCC = $bLS_POPCC / $leis_pp15_ *100;
$hhbLS_LATRC = $bLS_LATRC / $leis_pp15_ *100;
$hhbLS_LBSBL = $bLS_LBSBL / $leis_pp15_ *100;
$hhbLS_LBSKB = $bLS_LBSKB / $leis_pp15_ *100;
$hhbLS_LFSKT = $bLS_LFSKT / $leis_pp15_ *100;
$hhbLS_LFTBL = $bLS_LFTBL / $leis_pp15_ *100;
$hhbLS_LGLF = $bLS_LGLF / $leis_pp15_ *100;
$hhbLS_LHCKY = $bLS_LHCKY / $leis_pp15_ *100;
$hhbLS_LHSRC = $bLS_LHSRC / $leis_pp15_ *100;
$hhbLS_LLCRS = $bLS_LLCRS / $leis_pp15_ *100;
$hhbLS_LSCC = $bLS_LSCC / $leis_pp15_ *100;
$hhbLS_LTNS = $bLS_LTNS / $leis_pp15_ *100;
$hhbLS_FITCLB = $bLS_FITCLB / $leis_pp15_ *100;
$hhbLS_GLFCLB = $bLS_GLFCLB / $leis_pp15_ *100;
$leisure2["name"][] = "Art Galleries/Museums ";
$leisure2["name"][] = "ExhibitionsFairs";
$leisure2["name"][] = "Historical sites ";
$leisure2["name"][] = "Parks/City gardens ";
$leisure2["name"][] = "Specialty movie theatres";
$leisure2["name"][] = "Sporting events/Air show ";
$leisure2["name"][] = "Video arcades";
$leisure2["name"][] = "Theme parks/Waterparks";
$leisure2["name"][] = "Zoos/Aquariums";
$leisure2["name"][] = "Other leisure activities";
$leisure2["name"][] = "Auditoriums/Arenas";
$leisure2["name"][] = "Casinos (any) ";
$leisure2["name"][] = "Night Clubs/Bars ";
$leisure2["name"][] = "Small outdoor stages";
$leisure2["name"][] = "Theatres/Halls ";
$leisure3["name"][] = "Major Theatres/Auditoriums ";
$leisure3["name"][] = "Community Theatres ";
$leisure3["name"][] = "Festivals ";
$leisure3["name"][] = "Other live theatre venues ";
$leisure3["name"][] = "Ballet/Opera/Symphony ";
$leisure3["name"][] = "Bars/restaurant bars ";
$leisure3["name"][] = "Comedy clubs/shows ";
$leisure3["name"][] = "Dancing/night clubs ";
$leisure3["name"][] = "Dinner theatres ";
$leisure3["name"][] = "Film festivals ";
$leisure3["name"][] = "Music festivals ";
$leisure3["name"][] = "Movies at a theatre/drive-in ";
$leisure3["name"][] = "National or provincial park ";
$leisure3["name"][] = "Popular music/Rock concerts ";
$leisure4["name"][] = "Live sports in Season: Auto racing";
$leisure4["name"][] = "Live sports in Season: Baseball";
$leisure4["name"][] = "Live sports in Season: Basketball";
$leisure4["name"][] = "Live sports in Season: Figure skating";
$leisure4["name"][] = "Live sports in Season: Football";
$leisure4["name"][] = "Live sports in Season: Golf";
$leisure4["name"][] = "Live sports in Season: Hockey";
$leisure4["name"][] = "Live sports in Season: Horse racing";
$leisure4["name"][] = "Live sports in Season: Lacrosse";
$leisure4["name"][] = "Live sports in Season: Soccer";
$leisure4["name"][] = "Live sports in Season: Tennis";
$leisure4["name"][] = "Health / Fitness Club";
$leisure4["name"][] = "Golf Club";
$leisure2["percent"][] = $hhbLS_MUSM;
$leisure2["percent"][] = $hhbLS_EXHBT;
$leisure2["percent"][] = $hhbLS_HIST;
$leisure2["percent"][] = $hhbLS_CTPRK;
$leisure2["percent"][] = $hhbLS_MAXMV;
$leisure2["percent"][] = $hhbLS_SPEVN;
$leisure2["percent"][] = $hhbLS_AMUSE;
$leisure2["percent"][] = $hhbLS_THMPK;
$leisure2["percent"][] = $hhbLS_ZOO;
$leisure2["percent"][] = $hhbLS_OTHAT;
$leisure2["percent"][] = $hhbLS_STDM;
$leisure2["percent"][] = $hhbLS_CS;
$leisure2["percent"][] = $hhbLS_NTCLB;
$leisure2["percent"][] = $hhbLS_ODSTG;
$leisure2["percent"][] = $hhbLS_THTR;
$leisure3["percent"][] = $hhbLS_MJTHT;
$leisure3["percent"][] = $hhbLS_CMTHT;
$leisure3["percent"][] = $hhbLS_FSTVL;
$leisure3["percent"][] = $hhbLS_OTTHT;
$leisure3["percent"][] = $hhbLS_CLSCC;
$leisure3["percent"][] = $hhbLS_BAR;
$leisure3["percent"][] = $hhbLS_CMCLB;
$leisure3["percent"][] = $hhbLS_DNCLB;
$leisure3["percent"][] = $hhbLS_DITHT;
$leisure3["percent"][] = $hhbLS_FMFST;
$leisure3["percent"][] = $hhbLS_MSFST;
$leisure3["percent"][] = $hhbLS_MVTHT;
$leisure3["percent"][] = $hhbLS_NPPK;
$leisure3["percent"][] = $hhbLS_POPCC;
$leisure4["percent"][] = $hhbLS_LATRC;
$leisure4["percent"][] = $hhbLS_LBSBL;
$leisure4["percent"][] = $hhbLS_LBSKB;
$leisure4["percent"][] = $hhbLS_LFSKT;
$leisure4["percent"][] = $hhbLS_LFTBL;
$leisure4["percent"][] = $hhbLS_LGLF;
$leisure4["percent"][] = $hhbLS_LHCKY;
$leisure4["percent"][] = $hhbLS_LHSRC;
$leisure4["percent"][] = $hhbLS_LLCRS;
$leisure4["percent"][] = $hhbLS_LSCC;
$leisure4["percent"][] = $hhbLS_LTNS;
$leisure4["percent"][] = $hhbLS_FITCLB;
$leisure4["percent"][] = $hhbLS_GLFCLB;
for ( $seg_vars = 0; $seg_vars <sizeof($leisure2["percent"]); $seg_vars ++) {
$leisure2["index"][] = $leisure2["percent"][$seg_vars] / $leisure2["canada"][$seg_vars] * 100; 
}
for ( $seg_vars = 0; $seg_vars <sizeof($leisure3["percent"]); $seg_vars ++) {
$leisure3["index"][] = $leisure3["percent"][$seg_vars] / $leisure3["canada"][$seg_vars] * 100; 
}
for ( $seg_vars = 0; $seg_vars <sizeof($leisure4["percent"]); $seg_vars ++) {
$leisure4["index"][] = $leisure4["percent"][$seg_vars] / $leisure4["canada"][$seg_vars] * 100; 
}
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



$presorted_segment_picture = $segment_picture;
   $presorted_segment_high = $segment_high;
   $presorted_segment_percent = $segment_percent;
   $presorted_segment_benchmark = $segment_benchmark;
   $presorted_segment_index = $segment_index;
   $presorted_segment_description = $segment_description;
   
           
   // create new sorted arrays based on the key
   arsort($presorted_segment_index);
           foreach ($presorted_segment_index as $key => $val) {
   
               $sorted_segment_picture[] = $presorted_segment_picture[$key];
                 $sorted_segment_high[] = $presorted_segment_high[$key];
               $sorted_segment_percent[] = $presorted_segment_percent[$key];
               $sorted_segment_benchmark[] = $presorted_segment_benchmark[$key];
               $sorted_segment_index[] =  $presorted_segment_index[$key];
               $sorted_segment_description[] = $presorted_segment_description[$key];
           }
		


		
$segment_high[] ="";
$segment_low[] ="";
$segment_medium2[] ="";
$segment_non[] ="";
$IN_THHc = $agg_values['segment'][17];
// Entire Market 
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
$hhbcommit = $hhaD2000_2070c + $hhaD1000_1560c + $hhaD3000_3260c;
$hhdiffcommit = $hhbcommit - $hhacommit;
// monthly expenses
$hhb_itemed_hh_ops = $hhaD2200_2230c + $hhaD2240_2244c +$hhaD2270_2300c + $hhaD2340_2370c +$hhaD2540_2680c +$hhaD2500_2534c; 
$hhb_total_hh_ops = $hhaD2200_2380c + $hhaD2500_2730c;
$hhb_other_hh_ops =  $hha_total_hh_ops - $hha_itemed_hh_ops;
$hhp_otherhhops = $hhaD2200_2380c + $hhaD2500_2730c;
$hhb_other_hh_ops = $hhaD2200_2380c + $hhaD2500_2730c;
$hhb_purchases = $hhaD2200_2230c + $hhaD2240_2244c + $hhaD2270_2300c + $hhaD2540_2680c + $hhaD2500_2730c + $hhaD2800_2975c + $hhaD3300_3384c + $hhaD3500_3580c + $hhaD4300_4340c + $hhaD4400_4470c;
$hhdiff_purchases =  $hhb_purchases - $hha_purchases ;
// discretionary
$hhmarket_discretionary = $hhaD3700_4190c + $hhaD4500_4540c + $hhb_other_hh_ops +  $hhaD2340_2370c;
$hhdiff_discretionary = $hhmarket_discretionary - $hhcan_discretionary ;
// consumption
$hhb_consume = $hhbcommit + $hhb_purchases + $hhmarket_discretionary;
$hha_consume = $hhacommit + $hha_purchases + $hhcan_discretionary;
$hhdiff_consume  = $hhb_consume - $hha_consume;
$hhdiff_D2000_2070 = $hhaD2000_2070c - $hhcan_D2000_2070;
$hhindex_D2000_2070 = $hhaD2000_2070c /$hhcan_D2000_2070 *100;
$hhdiff_D1000_1560 = $hhaD1000_1560c - $hhcan_D1000_1560;
$hhindex_D1000_1560 = $hhaD1000_1560c /$hhcan_D1000_1560 *100;
$hhdiff_D3000_3260 = $hhaD3000_3260c - $hhcan_D3000_3260;
$hhindex_D3000_3260 = $hhaD3000_3260c /$hhcan_D3000_3260 *100;
$hhcan_commit = $hhcan_D2000_2070 + $hhcan_D1000_1560 + $hhcan_D3000_3260;
$hhcan_commit = $hhcan_D2000_2070 + $hhcan_D1000_1560 + $hhcan_D3000_3260;
$hhdiff_commit = $hhbcommit - $hhcan_commit;
$hhindex_commit = $hhbcommit /$hhcan_commit *100;
$hhdiff_D2200_2230 = $hhaD2200_2230c - $hhcan_D2200_2230;
$hhindex_D2200_2230 = $hhaD2200_2230c /$hhcan_D2200_2230 *100;
$hhdiff_D2240_2244 = $hhaD2240_2244c - $hhcan_D2240_2244;
$hhindex_D2240_2244 = $hhaD2240_2244c /$hhcan_D2240_2244 *100;
$hhdiff_D2270_2300 = $hhaD2270_2300c - $hhcan_D2270_2300;
$hhindex_D2270_2300 = $hhaD2270_2300c /$hhcan_D2270_2300 *100;
$hhdiff_D2540_2680 = $hhaD2540_2680c - $hhcan_D2540_2680;
$hhindex_D2540_2680 = $hhaD2540_2680c /$hhcan_D2540_2680 *100;
$hhdiff_D2500_2730 = $hhaD2500_2730c - $hhcan_D2500_2730;
$hhindex_D2500_2730 = $hhaD2500_2730c /$hhcan_D2500_2730 *100;
$hhdiff_D2800_2975 = $hhaD2800_2975c - $hhcan_D2800_2975;
$hhindex_D2800_2975 = $hhaD2800_2975c /$hhcan_D2800_2975 *100;
$hhdiff_D3300_3384 = $hhaD3300_3384c - $hhcan_D3300_3384;
$hhindex_D3300_3384 = $hhaD3300_3384c /$hhcan_D3300_3384 *100;
$hhdiff_D3500_3580 = $hhaD3500_3580c - $hhcan_D3500_3580;
$hhindex_D3500_3580 = $hhaD3500_3580c /$hhcan_D3500_3580 *100;
$hhdiff_D4300_4340 = $hhaD4300_4340c - $hhcan_D4300_4340;
$hhindex_D4300_4340 = $hhaD4300_4340c /$hhcan_D4300_4340 *100;
$hhdiff_D4400_4470 = $hhaD4400_4470c - $hhcan_D4400_4470;
$hhindex_D4400_4470 = $hhaD4400_4470c /$hhcan_D4400_4470 *100;
$hhb_purchases = $hhaD2200_2230c + $hhaD2240_2244c + $hhaD2270_2300c + $hhaD2500_2730c + $hhaD2800_2975c + $hhaD3300_3384c + $hhaD3500_3580c + $hhaD4300_4340c + $hhaD4400_4470c;
$hhcan_purchases = $hhcan_D2200_2230 + $hhcan_D2240_2244 + $hhcan_D2270_2300 + $hhcan_D2500_2730 + $hhcan_D2800_2975 + $hhcan_D3300_3384 + $hhcan_D3500_3580 + $hhcan_D4300_4340 + $hhcan_D4400_4470;
$hhdiff_can_purchases = $hhb_purchases - $hhcan_purchases;
$hhindex_can_purchases = $hhb_purchases /$hhcan_purchases *100;
// discretionary
$hhdiff_D3700_4190 = $hhaD3700_4190c - $hhcan_D3700_4190;
$hhindex_D3700_4190 = $hhaD3700_4190c /$hhcan_D3700_4190 *100;
$hhdiff_D4500_4540 = $hhaD4500_4540c - $hhcan_D4500_4540;
$hhindex_D4500_4540 = $hhaD4500_4540c /$hhcan_D4500_4540 *100;
$hha_otherhhopsc = $hhaD2200_2380c + $hhaD2500_2730c;
$hhdiff_otherhhops = $hha_otherhhopsc - $hhcan_otherhhops;
$hhindex_otherhhops = $hha_otherhhopsc /$hhcan_otherhhops *100;
$hha_otherexpensesc = $hhaD4800_4840c + $hhaD4600_4720c;
$hhdiff_otherexpenses = $hha_otherexpensesc - $hhcan_otherexpenses;
$hhindex_otherexpenses = $hha_otherexpensesc /$hhcan_otherexpenses *100;
$hhdiff_D2340_2370 = $hhaD2340_2370c - $hhcan_D2340_2370;
$hhindex_D2340_2370 = $hhaD2340_2370c /$hhcan_D2340_2370 *100;
$hhcan_otherexpenses = $hhcan_discretionary - $hhcan_D3700_4190 - $hhcan_D4500_4540 - $hhcan_D2340_2370 ; 
$hhdiff_otherexpenses = $hhb_other_hh_ops - $hhcan_otherhhops;
$hhindex_otherexpenses = $hhb_other_hh_ops /$hhcan_otherhhops *100;
$hhindex_discretionary = $hhmarket_discretionary / $hhcan_discretionary *100 ;
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
*/$age_comment = "";
$age_counter = 0;
$temp_last_age_band = 0;
// very high age 30-49
if($age_bandi[1] > 110 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[1]) . "% of people in this market area are " . $age_bandn[1] . ", this is considered very high compared to the benchmark average ";
$age_image[] = 1;
$age_top_comment[] = $age_bandn[1] . " (very high)";
$snapshot_age_name[] = $age_bandn[1];
$snapshot_age_percent[] = number_format($age_bandp[1]);
$snapshot_age_index[] = number_format($age_bandi[1]);

$age_counter = $age_counter +1;
$temp_last_age_band = 1;
}
$temp_last_age_band = 0;
// very high age 60+
if($age_bandi[3] > 113 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[3]) . "% of people in this market area are " . $age_bandn[3] . ", this is considered very high compared to the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 3;
$age_top_comment[] = $age_bandn[3] . " (very high)";
$snapshot_age_name[] = $age_bandn[3];
$snapshot_age_percent[] = number_format($age_bandp[3]);
$snapshot_age_index[] = number_format($age_bandi[3]);
$temp_last_age_band = 1;
}
if($age_bandi[3] > 113 && $age_counter >0 && $age_counter <3 && $temp_last_age_band < 1){
$age_comment= $age_comment . ", there is also a very high concentration of people " . $age_bandn[3];
$age_image[] = 3;
}
$temp_last_age_band = 0;
// very high 20s
if($age_bandi[0] > 120 && $age_counter <1){
$age_comment= $age_comment . number_format($age_bandp[0]) . "% of people in this market area are " . $age_bandn[0] . ", this is considered very high compared to the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 0;
$age_top_comment[] = $age_bandn[0] . " (very high)";
$snapshot_age_name[] = $age_bandn[0];
$snapshot_age_percent[] = number_format($age_bandp[0]);
$snapshot_age_index[] = number_format($age_bandi[0]);
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
$age_comment= $age_comment . number_format($age_bandp[2] ) . "% of people in this market area are " . $age_bandn[2] . " this is considered very high compared to the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 2;
$age_top_comment[] = $age_bandn[2] . " (very high)";
$snapshot_age_name[] = $age_bandn[2];
$snapshot_age_percent[] = number_format($age_bandp[2]);
$snapshot_age_index[] = number_format($age_bandi[2]);
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
$age_comment= $age_comment . number_format($age_bandp[1]) . "% of people in this market area are " . $age_bandn[1] . " this is considered high compared to the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 1;
$age_top_comment[] = $age_bandn[1] . " (high presence)";
$snapshot_age_name[] = $age_bandn[1];
$snapshot_age_percent[] = number_format($age_bandp[1]);
$snapshot_age_index[] = number_format($age_bandi[1]);
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
$age_comment= $age_comment . number_format($age_bandp[3]) . "% of people in this market area are " . $age_bandn[3] . " this is considered high compared to the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 3;
$age_top_comment[] = $age_bandn[3] . " (high presence)";
$snapshot_age_name[] = $age_bandn[3];
$snapshot_age_percent[] = number_format($age_bandp[3]);
$snapshot_age_index[] = number_format($age_bandi[3]);
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
$age_comment= $age_comment . number_format($age_bandp[0]) . "% of people in this market area are " . $age_bandn[0] . " this is considered high compared to the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 0;
$age_top_comment[] = $age_bandn[0] . " (high presence)";
$snapshot_age_name[] = $age_bandn[0];
$snapshot_age_percent[] = number_format($age_bandp[0]);
$snapshot_age_index[] = number_format($age_bandi[0]);
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
$age_comment= $age_comment . number_format($age_bandp[2]) . "% of people in this market area are " . $age_bandn[2] . " this is considered high compared to the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 2;
$age_top_comment[] = $age_bandn[2] . " (high presence)";
$snapshot_age_name[] = $age_bandn[2];
$snapshot_age_percent[] = number_format($age_bandp[2]);
$snapshot_age_index[] = number_format($age_bandi[2]);
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
$age_comment= $age_comment . number_format($age_bandp[1]) . "% of people in this market area are " . $age_bandn[1] . " this is considered slightly higher than the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 1;
$age_top_comment[] = $age_bandn[1] . " (slightly higher)";
$snapshot_age_name[] = $age_bandn[1];
$snapshot_age_percent[] = number_format($age_bandp[1]);
$snapshot_age_index[] = number_format($age_bandi[1]);
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
$age_comment= $age_comment . number_format($age_bandp[3]) . "% of people in this market area are " . $age_bandn[3] . " this is considered slightly higher than the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 3;
$age_top_comment[] = $age_bandn[3] . " (slightly higher)";
$snapshot_age_name[] = $age_bandn[3];
$snapshot_age_percent[] = number_format($age_bandp[3]);
$snapshot_age_index[] = number_format($age_bandi[3]);
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
$age_comment= $age_comment . number_format($age_bandp[0]) . "% of people in this market area are " . $age_bandn[0] . " this is considered slightly higher than the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 0;
$age_top_comment[] = $age_bandn[0] . " (slightly higher)";
$snapshot_age_name[] = $age_bandn[0];
$snapshot_age_percent[] = number_format($age_bandp[0]);
$snapshot_age_index[] = number_format($age_bandi[0]);
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
$age_comment= $age_comment . number_format($age_bandp[2]) . "% of people in this market area are " . $age_bandn[2] . " this is considered slightly higher than the benchmark average ";
$age_counter = $age_counter +1;
$age_image[] = 2;
$age_top_comment[] = $age_bandn[2] . " (slightly higher)";
$snapshot_age_name[] = $age_bandn[2];
$snapshot_age_percent[] = number_format($age_bandp[2]);
$snapshot_age_index[] = number_format($age_bandi[2]);
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
$age_comment= "The age distribution in this market area is very similar to the benchmark averages";
$age_image[] = 4;
$age_top_comment[] = "Mixed ages";
$snapshot_age_name[] = "N/A";
$snapshot_age_percent[] = "N/A";
$snapshot_age_index[] = "N/A";
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
$family_comment= $family_comment . number_format($family_bandp[2]) . "% of households in this market area are " . $family_bandn[2] . " this is considered very high compared to the benchmark average ";
$family_counter = $family_counter +1;
$family_image[] = 2;
$family_top_comment[] = $family_bandn[2] . " (very high)";
$snapshot_family_name[] = $family_bandn[2];
$snapshot_family_percent[] = number_format($family_bandp[2]);
$snapshot_family_index[] = number_format($family_bandi[2]);


}
// couples
if($family_bandi[1] > 113 && $family_counter <1){
	$family_comment= $family_comment . number_format($family_bandp[1]) . "% of households in this market area are " . $family_bandn[1] . " this is considered very high compared to the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 1;
	$family_top_comment[] = $family_bandn[1] . " (very high)";
	$snapshot_family_name[] = $family_bandn[1];
	$snapshot_family_percent[] = number_format($family_bandp[1]);
	$snapshot_family_index[] = number_format($family_bandi[1]);
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
	$family_comment= $family_comment . number_format($family_bandp[0]) . "% of households in this market area are " . $family_bandn[0] . " this is considered very high compared to the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 0;
	$family_top_comment[] = $family_bandn[0] . " (very high)";
	$snapshot_family_name[] = $family_bandn[0];
	$snapshot_family_percent[] = number_format($family_bandp[0]);
	$snapshot_family_index[] = number_format($family_bandi[0]);
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
	$family_comment= $family_comment . number_format($family_bandp[2]) . "% of households in this market area are " . $family_bandn[2] . " this is considered higher than the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 2;
	$family_top_comment[] = $family_bandn[2] . " (high presence)";
	$snapshot_family_name[] = $family_bandn[2];
	$snapshot_family_percent[] = number_format($family_bandp[2]);
	$snapshot_family_index[] = number_format($family_bandi[2]);
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
	$family_comment= $family_comment . number_format($family_bandp[1]) . "% of households in this market area are " . $family_bandn[1] . " this is considered higher than the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 1;
	$family_top_comment[] = $family_bandn[1] . " (high presence)";
	$snapshot_family_name[] = $family_bandn[1];
	$snapshot_family_percent[] = number_format($family_bandp[1]);
	$snapshot_family_index[] = number_format($family_bandi[1]);
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
	$family_comment= $family_comment . number_format($family_bandp[0]) . "% of households in this market area are " . $family_bandn[0] . " this is considered higher than the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 0;
	$family_top_comment[] = $family_bandn[0] . " (high presence)";
	$snapshot_family_name[] = $family_bandn[0];
	$snapshot_family_percent[] = number_format($family_bandp[0]);
	$snapshot_family_index[] = number_format($family_bandi[0]);
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
	$family_comment= $family_comment . number_format($family_bandp[3]) . "% of households in this market area are " . $family_bandn[3] . " this is considered higher than the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 3;
	$family_top_comment[] = $family_bandn[3] . " (high presence)";
	$snapshot_family_name[] = $family_bandn[3];
	$snapshot_family_percent[] = number_format($family_bandp[3]);
	$snapshot_family_index[] = number_format($family_bandi[3]);
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
	$family_comment= $family_comment . number_format($family_bandp[2]) . "% of households in this market area are " . $family_bandn[2] . " this is considered slightly higher than the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 2;
	$family_top_comment[] = $family_bandn[2] . " (slightly higher)";
	$snapshot_family_name[] = $family_bandn[2];
	$snapshot_family_percent[] = number_format($family_bandp[2]);
	$snapshot_family_index[] = number_format($family_bandi[2]);
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
	$family_comment= $family_comment . number_format($family_bandp[1]) . "% of households in this market area are " . $family_bandn[1] . " this is considered slightly higher than the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 1;
	$family_top_comment[] = $family_bandn[1] . " (slightly higher)";
	$snapshot_family_name[] = $family_bandn[1];
	$snapshot_family_percent[] = number_format($family_bandp[1]);
	$snapshot_family_index[] = number_format($family_bandi[1]);
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
	$family_comment= $family_comment . number_format($family_bandp[0]) . "% of households in this market area are " . $family_bandn[0] . " this is considered slightly higher than the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 0;
	$family_top_comment[] = $family_bandn[0] . " (slightly higher)";
	$snapshot_family_name[] = $family_bandn[0];
	$snapshot_family_percent[] = number_format($family_bandp[0]);
	$snapshot_family_index[] = number_format($family_bandi[0]);
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
	$family_comment= $family_comment . number_format($family_bandp[3]) . "% of households in this market area are " . $family_bandn[3] . " this is considered slightly higher than the benchmark average ";
	$family_counter = $family_counter +1;
	$family_image[] = 0;
	$family_top_comment[] = $family_bandn[3] . " (slightly higher)";
	$snapshot_family_name[] = $family_bandn[3];
	$snapshot_family_percent[] = number_format($family_bandp[3]);
	$snapshot_family_index[] = number_format($family_bandi[3]);
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
	 $family_comment= "The family structure (e.g. singles, couples, families) in this market area is very similar in composition to the benchmark averages";
	 $family_image[] = 4;
	 $family_top_comment[] = "Mixed family structures";
	 $snapshot_family_percent[] = "N/A";
	 $snapshot_family_index[] = "N/A";
	 $snapshot_family_name[] = "N/A";
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
$bIT_HOME = $IT_HOME / $inter_pp15_ * 100;
$bIT_WORK = $IT_WORK / $inter_pp15_ * 100;
$bIT_SCH = $IT_SCH / $inter_pp15_ * 100;
$bIT_OTH = $IT_OTH / $inter_pp15_ * 100;
$bIT_TWK0 = $IT_TWK0 / $inter_pp15_ * 100;
$bIT_TWK5 = $IT_TWK5 / $inter_pp15_ * 100;
$bIT_TWK10 = $IT_TWK10 / $inter_pp15_ * 100;
$bIT_TWK15 = $IT_TWK15 / $inter_pp15_ * 100;
$bIT_TWK25 = $IT_TWK25 / $inter_pp15_ * 100;
$bIT_TWK25_ = $IT_TWK25_ / $inter_pp15_ * 100;
$bIT_NSITE = $IT_NSITE / $inter_pp15_ * 100;
$bIT_RADIO = $IT_RADIO / $inter_pp15_ * 100;
$bIT_TV = $IT_TV / $inter_pp15_ * 100;
$bIT_AUTNEWS = $IT_AUTNEWS / $inter_pp15_ * 100;
$bIT_FASHION = $IT_FASHION / $inter_pp15_ * 100;
$bIT_HEALTH = $IT_HEALTH / $inter_pp15_ * 100;
$bIT_FURN = $IT_FURN / $inter_pp15_ * 100;
$bIT_SPORT = $IT_SPORT / $inter_pp15_ * 100;
$bIT_RLEST = $IT_RLEST / $inter_pp15_ * 100;
$bIT_RESTG = $IT_RESTG / $inter_pp15_ * 100;
$bIT_WEATH = $IT_WEATH / $inter_pp15_ * 100;
$bIT_ADS = $IT_ADS / $inter_pp15_ * 100;
$bIT_BNKING = $IT_BNKING / $inter_pp15_ * 100;
$bIT_DGAME = $IT_DGAME / $inter_pp15_ * 100;
$bIT_DCAST = $IT_DCAST / $inter_pp15_ * 100;
$bIT_DVIDEO = $IT_DVIDEO / $inter_pp15_ * 100;
$bIT_MP3 = $IT_MP3 / $inter_pp15_ * 100;
$bIT_DCPN = $IT_DCPN / $inter_pp15_ * 100;
$bIT_DOAUDIO = $IT_DOAUDIO / $inter_pp15_ * 100;
$bIT_CONTEST = $IT_CONTEST / $inter_pp15_ * 100;
$bIT_PODCAST = $IT_PODCAST / $inter_pp15_ * 100;
$bIT_AUDIO = $IT_AUDIO / $inter_pp15_ * 100;
$bIT_LISRA = $IT_LISRA / $inter_pp15_ * 100;
$bIT_DONAT = $IT_DONAT / $inter_pp15_ * 100;
$bIT_SONET = $IT_SONET / $inter_pp15_ * 100;
$bIT_SONET = min(($bIT_SONET *1.3),91);
$bIT_CLAD = $IT_CLAD / $inter_pp15_ * 100;
$bIT_GAME = $IT_GAME / $inter_pp15_ * 100;
$bIT_AUCT = $IT_AUCT / $inter_pp15_ * 100;
$bIT_MZ = $IT_MZ / $inter_pp15_ * 100;
$bIT_NSPAP = $IT_NSPAP / $inter_pp15_ * 100;
$bIT_BLOG = $IT_BLOG / $inter_pp15_ * 100;
$bIT_WIKI = $IT_WIKI / $inter_pp15_ * 100;
$bIT_NLRNL = $IT_NLRNL / $inter_pp15_ * 100;
$bIT_PROD = $IT_PROD / $inter_pp15_ * 100;
$bIT_SURV = $IT_SURV / $inter_pp15_ * 100;
$bIT_INSM = $IT_INSM / $inter_pp15_ * 100;
$bIT_EMAIL = $IT_EMAIL / $inter_pp15_ * 100;
$bIT_MAPS = $IT_MAPS / $inter_pp15_ * 100;
$bIT_MAPS = min(($bIT_MAPS *1.2),91);
$bIT_PHONE = $IT_PHONE / $inter_pp15_ * 100;
$bIT_SRCHENG = $IT_SRCHENG / $inter_pp15_ * 100;
$bIT_SRCHENG = min(($bIT_SRCHENG *1.2),91);
$bIT_CHAT = $IT_CHAT / $inter_pp15_ * 100;
$bIT_VIDEO = $IT_VIDEO / $inter_pp15_ * 100;
$bIT_OVIDEO = $IT_OVIDEO / $inter_pp15_ * 100;
$internet1['percent'][] = $bIT_HOME;
$internet1['percent'][] = $bIT_WORK;
$internet1['percent'][] = $bIT_SCH;
$internet1['percent'][] = $bIT_OTH;
$internet2['percent'][] = $bIT_TWK0;
$internet2['percent'][] = $bIT_TWK5;
$internet2['percent'][] = $bIT_TWK10;
$internet2['percent'][] = $bIT_TWK15;
$internet2['percent'][] = $bIT_TWK25;
$internet2['percent'][] = $bIT_TWK25_;
$internet3['percent'][] = $bIT_NSITE;
$internet3['percent'][] = $bIT_RADIO;
$internet3['percent'][] = $bIT_TV;
$internet3['percent'][] = $bIT_AUTNEWS;
$internet3['percent'][] = $bIT_FASHION;
$internet3['percent'][] = $bIT_HEALTH;
$internet3['percent'][] = $bIT_FURN;
$internet3['percent'][] = $bIT_SPORT;
$internet3['percent'][] = $bIT_RLEST;
$internet3['percent'][] = $bIT_RESTG;
$internet3['percent'][] = $bIT_WEATH;
$internet3['percent'][] = $bIT_ADS;
$internet3['percent'][] = $bIT_BNKING;
$internet3['percent'][] = $bIT_DGAME;
$internet3['percent'][] = $bIT_DCAST;
$internet3['percent'][] = $bIT_DVIDEO;
$internet3['percent'][] = $bIT_MP3;
$internet3['percent'][] = $bIT_DCPN;
$internet3['percent'][] = $bIT_DOAUDIO;
$internet3['percent'][] = $bIT_CONTEST;
$internet3['percent'][] = $bIT_PODCAST;
$internet3['percent'][] = $bIT_AUDIO;
$internet3['percent'][] = $bIT_LISRA;
$internet3['percent'][] = $bIT_DONAT;
$internet3['percent'][] = $bIT_SONET;
$internet3['percent'][] = $bIT_CLAD;
$internet3['percent'][] = $bIT_GAME;
$internet3['percent'][] = $bIT_AUCT;
$internet3['percent'][] = $bIT_MZ;
$internet3['percent'][] = $bIT_NSPAP;
$internet3['percent'][] = $bIT_BLOG;
$internet3['percent'][] = $bIT_WIKI;
$internet3['percent'][] = $bIT_NLRNL;
$internet3['percent'][] = $bIT_PROD;
$internet3['percent'][] = $bIT_SURV;
$internet3['percent'][] = $bIT_INSM;
$internet3['percent'][] = $bIT_EMAIL;
$internet3['percent'][] = $bIT_MAPS;
$internet3['percent'][] = $bIT_PHONE;
$internet3['percent'][] = $bIT_SRCHENG;
$internet3['percent'][] = $bIT_CHAT;
$internet3['percent'][] = $bIT_VIDEO;
$internet3['percent'][] = $bIT_OVIDEO;
$internet1['name'][] = "Access At home";
$internet1['name'][] = "Access at work";
$internet1['name'][] = "Access At school";
$internet1['name'][] = "At some other location";
$internet2['name'][] = "7 days: Did not access";
$internet2['name'][] = "7 days: Less than 5 hours";
$internet2['name'][] = "7 days: 5 to 10 hours";
$internet2['name'][] = "7 days: 10 to 15 hours";
$internet2['name'][] = "7 days: 15 to 25 hours";
$internet2['name'][] = "7 days: More than 25 hours";

$internet3['name'][] = "Access a news site";
$internet3['name'][] = "Access a radio station's website";
$internet3['name'][] = "Access a TV station's website";
$internet3['name'][] = "Access automotive news";
$internet3['name'][] = "Access fashion or beauty-related";
$internet3['name'][] = "Access health-related";
$internet3['name'][] = "Access home furnishings";
$internet3['name'][] = "Access professional sports";
$internet3['name'][] = "Access real estate listings";
$internet3['name'][] = "Access restaurant guides";
$internet3['name'][] = "Access weather information";
$internet3['name'][] = "Click on an Internet advertisement";
$internet3['name'][] = "Do banking / pay bills online";
$internet3['name'][] = "Download a computer game/software";
$internet3['name'][] = "Download a radio broadcast for MP3";
$internet3['name'][] = "Download any video content ";
$internet3['name'][] = "Download music/MP3 files";
$internet3['name'][] = "Download / print discount coupon";
$internet3['name'][] = "Download other audio podcast";
$internet3['name'][] = "Enter online contests";
$internet3['name'][] = "Listen to a podcast";
$internet3['name'][] = "Listen to a radio broadcast";
$internet3['name'][] = "Listen to an Internet only radio station";
$internet3['name'][] = "Make an online donation";
$internet3['name'][] = "Participate in a social network";
$internet3['name'][] = "Place/respond to an online classified ";
$internet3['name'][] = "Play online games";
$internet3['name'][] = "Post/bid at an online  auction";
$internet3['name'][] = "Read on-line magazines";
$internet3['name'][] = "Read on-line newspapers";
$internet3['name'][] = "Read/contribute to a blog ";
$internet3['name'][] = "Read/contribute to a Wiki";
$internet3['name'][] = "Register to get permission-based emails";
$internet3['name'][] = "Research products to try or buy";
$internet3['name'][] = "Respond to online surveys/polls";
$internet3['name'][] = "Send or receive instant messaging ";
$internet3['name'][] = "Send or receive web-based email";
$internet3['name'][] = "Use maps/directions service";
$internet3['name'][] = "Use online telephone directory";
$internet3['name'][] = "Use search engine";
$internet3['name'][] = "Visit chat groups ";
$internet3['name'][] = "Watch a TV broadcast via streaming";
$internet3['name'][] = "Watch any other streaming";

$internet3['image'][] = "media/internet/news.jpg";
$internet3['image'][] = "media/internet/radio.jpg";
$internet3['image'][] = "media/internet/tv.jpg";
$internet3['image'][] = "media/internet/car.jpg";
$internet3['image'][] = "media/internet/fashion.jpg";
$internet3['image'][] = "media/internet/health.jpg";
$internet3['image'][] = "media/internet/home_furnish.jpg";
$internet3['image'][] = "media/internet/sportssite.jpg";
$internet3['image'][] = "media/internet/real_estate.jpg";
$internet3['image'][] = "media/internet/restaurant.jpg";
$internet3['image'][] = "media/internet/weather.jpg";
$internet3['image'][] = "media/internet/click_ad.jpg";
$internet3['image'][] = "media/internet/banking.jpg";
$internet3['image'][] = "media/internet/game.jpg";
$internet3['image'][] = "media/internet/radio2.jpg";
$internet3['image'][] = "media/internet/streaming.jpg";
$internet3['image'][] = "media/internet/mp3.jpg";
$internet3['image'][] = "media/internet/coupon.jpg";
$internet3['image'][] = "media/internet/radio3.jpg";
$internet3['image'][] = "media/internet/contest.jpg";
$internet3['image'][] = "media/internet/podcast.jpg";
$internet3['image'][] = "media/internet/radio4.jpg";
$internet3['image'][] = "media/internet/radio5.jpg";
$internet3['image'][] = "media/internet/donate.jpg";
$internet3['image'][] = "media/internet/social.jpg";
$internet3['image'][] = "media/internet/classified.jpg";
$internet3['image'][] = "media/internet/gaming.jpg";
$internet3['image'][] = "media/internet/auction.jpg";
$internet3['image'][] = "media/internet/mag.jpg";
$internet3['image'][] = "media/internet/newspaper.jpg";
$internet3['image'][] = "media/internet/blog.jpg";
$internet3['image'][] = "media/internet/wiki.jpg";
$internet3['image'][] = "media/internet/emailsite.jpg";
$internet3['image'][] = "media/internet/product.jpg";
$internet3['image'][] = "media/internet/survey.jpg";
$internet3['image'][] = "media/internet/message.jpg";
$internet3['image'][] = "media/internet/email.jpg";
$internet3['image'][] = "media/internet/maps.jpg";
$internet3['image'][] = "media/internet/phone.jpg";
$internet3['image'][] = "media/internet/search.jpg";
$internet3['image'][] = "media/internet/chat.jpg";
$internet3['image'][] = "media/internet/tvstreaming.jpg";
$internet3['image'][] = "media/internet/video.jpg";







for ( $seg_vars = 0; $seg_vars <sizeof($internet1['percent']); $seg_vars ++) {
$internet1["index"][] = $internet1["percent"][$seg_vars] / $internet1["canada"][$seg_vars] * 100; 
}
for ( $seg_vars = 0; $seg_vars <sizeof($internet2['percent']); $seg_vars ++) {
$internet2["index"][] = $internet2["percent"][$seg_vars] / $internet2["canada"][$seg_vars] * 100; 
}
for ( $seg_vars = 0; $seg_vars < sizeof($internet3['percent']); $seg_vars ++) {
$internet3["percent"][$seg_vars] = min(($internet3["percent"][$seg_vars] *1.2),98); 
$internet3["canada"][$seg_vars] = min(($internet3["canada"][$seg_vars] *1.2),98); 
}
for ( $seg_vars = 0; $seg_vars < sizeof($internet3['percent']); $seg_vars ++) {
$internet3["index"][] = $internet3["percent"][$seg_vars] / $internet3["canada"][$seg_vars] * 100; 
}

// Sorted internet
	$ainternet3["percent"] = $internet3["percent"];
	$score_count = 1;
	arsort($ainternet3["percent"]);		// create a new array to hold percentage
	
	foreach ($ainternet3["percent"] as $key => $val) {				// sort 1 - by percent
		$s1_internet3["score"][] = $score_count;
		$score_count = $score_count +1;
		$s1_internet3["percent"][] = $internet3["percent"][$key];
		$s1_internet3["name"][] = $internet3["name"][$key];
		$s1_internet3["index"][] = $internet3["index"][$key];
		$s1_internet3["image"][] = $internet3["image"][$key];
	}
	$binternet3["index"] = $s1_internet3["index"];
	$score_count = 1;
	arsort($binternet3["index"]);
	foreach ($binternet3["index"] as $key => $val) {
	if($s1_internet3["percent"][$key] > 5) {
	$s2_internet3["score"][] = $score_count + $s1_internet3["score"][$key];
	$score_count = $score_count +1;
	$s2_internet3["percent"][] = $s1_internet3["percent"][$key];
	$s2_internet3["name"][] = $s1_internet3["name"][$key];
	$s2_internet3["image"][] = $s1_internet3["image"][$key];
	$s2_internet3["index"][] = $s1_internet3["index"][$key];
	}
	else {
	$score_count = $score_count +1;
	$s2_internet3["score"][] = + $s1_internet3["score"][$key] + 33;
	$s2_internet3["percent"][] = $s1_internet3["percent"][$key];
	$s2_internet3["name"][] = $s1_internet3["name"][$key];
	$s2_internet3["image"][] = $s1_internet3["image"][$key];
	$s2_internet3["index"][] = $s1_internet3["index"][$key];
	}
	}
	$cinternet3["score"] = $s2_internet3["score"];
	asort($cinternet3["score"]);
	foreach ($cinternet3["score"] as $key => $val) {
	$sorted_internet3["percent"][] = $s2_internet3["percent"][$key];
	$sorted_internet3["name"][] = $s2_internet3["name"][$key];
	$sorted_internet3["index"][] = $s2_internet3["index"][$key];
	$sorted_internet3["image"][] = $s2_internet3["image"][$key];
	$sorted_internet3["score"][] = $s2_internet3["score"][$key];
}
// auto
// find totals
$at_total['vehicles'] = $AU_N0 + $AU_N1 + $AU_N2 + $AU_N3 + $AU_N4;
$pAU_N0 = $AU_N0 / $at_total['vehicles'] *100;
$pAU_N1 = $AU_N1 / $at_total['vehicles'] *100;
$pAU_N2 = $AU_N2 / $at_total['vehicles'] *100;
$pAU_N3 = $AU_N3 / $at_total['vehicles'] *100;
$pAU_N4_ = $AU_N4_ / $at_total['vehicles'] *100;
$at_total['km'] = $AU_KM0 + $AU_KM1_9 + $AU_KM10_19 + $AU_KM20_29 + $AU_KM30_;
$pAU_KM0 = $AU_KM0 / $at_total['km'] *100;
$pAU_KM1_9 = $AU_KM1_9 / $at_total['km'] *100;
$pAU_KM10_19 = $AU_KM10_19 / $at_total['km'] *100;
$pAU_KM20_29 = $AU_KM20_29 / $at_total['km'] *100;
$pAU_KM30_ = $AU_KM30_ / $at_total['km'] *100;
$at_total['make'] = $at_total['km'];
$pAU_MKBUI = $AU_MKBUI / $at_total['make'] *100;
$pAU_MKCAD = $AU_MKCAD / $at_total['make'] *100;
$pAU_MKCHE = $AU_MKCHE / $at_total['make'] *100;
$pAU_MKCHR = $AU_MKCHR / $at_total['make'] *100;
$pAU_MKDOD = $AU_MKDOD / $at_total['make'] *100;
$pAU_MKFOR = $AU_MKFOR / $at_total['make'] *100;
$pAU_MKGMC = $AU_MKGMC / $at_total['make'] *100;
$pAU_MKJEE = $AU_MKJEE / $at_total['make'] *100;
$pAU_MKLIN = $AU_MKLIN / $at_total['make'] *100;
$pAU_MKMER = $AU_MKMER / $at_total['make'] *100;
$pAU_MKOLD = $AU_MKOLD / $at_total['make'] *100;
$pAU_MKPLY = $AU_MKPLY / $at_total['make'] *100;
$pAU_MKPON = $AU_MKPON / $at_total['make'] *100;
$pAU_MKSAT = $AU_MKSAT / $at_total['make'] *100;
$pAU_MKDOM = $AU_MKDOM / $at_total['make'] *100;
$pAU_MKACU = $AU_MKACU / $at_total['make'] *100;
$pAU_MKAU_D = $AU_MKAU_D / $at_total['make'] *100;
$pAU_MKBMW = $AU_MKBMW / $at_total['make'] *100;
$pAU_MKHON = $AU_MKHON / $at_total['make'] *100;
$pAU_MKHYU = $AU_MKHYU / $at_total['make'] *100;
$pAU_MKINF = $AU_MKINF / $at_total['make'] *100;
$pAU_MKKIA = $AU_MKKIA / $at_total['make'] *100;
$pAU_MKLEX = $AU_MKLEX / $at_total['make'] *100;
$pAU_MKMAZ = $AU_MKMAZ / $at_total['make'] *100;
$pAU_MKBEN = $AU_MKBEN / $at_total['make'] *100;
$pAU_MKMIT = $AU_MKMIT / $at_total['make'] *100;
$pAU_MKNIS = $AU_MKNIS / $at_total['make'] *100;
$pAU_MKSUB = $AU_MKSUB / $at_total['make'] *100;
$pAU_MKSUZ = $AU_MKSUZ / $at_total['make'] *100;
$pAU_MKTOY = $AU_MKTOY / $at_total['make'] *100;
$pAU_MKVW = $AU_MKVW / $at_total['make'] *100;
$pAU_MKVOL = $AU_MKVOL / $at_total['make'] *100;
$pAU_MKFGN = $AU_MKFGN / $at_total['make'] *100;
$at_total['type'] = $at_total['km'];
$pAU_TPMFS = $AU_TPMFS / $at_total['type'] *100;
$pAU_TPSCOMP = $AU_TPSCOMP / $at_total['type'] *100;
$pAU_TPSPO = $AU_TPSPO / $at_total['type'] *100;
$pAU_TPMVSW = $AU_TPMVSW / $at_total['type'] *100;
$pAU_TPSUV = $AU_TPSUV / $at_total['type'] *100;
$pAU_TPPIC = $AU_TPPIC / $at_total['type'] *100;
$pAU_TPFVAN = $AU_TPFVAN / $at_total['type'] *100;
$pAU_TPOTH = $AU_TPOTH / $at_total['type'] *100;
$at_total['year'] = $at_total['km'];
$pAU_YR13_ = $AU_YR13_ / $at_total['year'] *100;
$pAU_YR12 = $AU_YR12 / $at_total['year'] *100;
$pAU_YR11 = $AU_YR11 / $at_total['year'] *100;
$pAU_YR10 = $AU_YR10 / $at_total['year'] *100;
$pAU_YR09 = $AU_YR09 / $at_total['year'] *100;
$pAU_YR08 = $AU_YR08 / $at_total['year'] *100;
$pAU_YR07 = $AU_YR07 / $at_total['year'] *100;
$pAU_YR06 = $AU_YR06 / $at_total['year'] *100;
$pAU_YR05 = $AU_YR05 / $at_total['year'] *100;
$pAU_YR04 = $AU_YR04 / $at_total['year'] *100;
$pAU_YR03 = $AU_YR03 / $at_total['year'] *100;
$pAU_YR_02 = $AU_YR_02 / $at_total['year'] *100;
$pAU_YRNO = $AU_YRNO / $at_total['year'] *100;
$at_total['pur_method'] = $at_total['km'];
$pAU_NEWBN = $AU_NEWBN / $at_total['pur_method'] *100;
$pAU_NEWBU = $AU_NEWBU / $at_total['pur_method'] *100;
$pAU_NEWLN = $AU_NEWLN / $at_total['pur_method'] *100;
$pAU_NEWLU = $AU_NEWLU / $at_total['pur_method'] *100;
$pAU_NEWNO = $AU_NEWNO / $at_total['pur_method'] *100;
$at_total['value'] = $at_total['km'];
$pAU_V_9 = $AU_V_9 / $at_total['value'] *100;
$pAU_V10_14 = $AU_V10_14 / $at_total['value'] *100;
$pAU_V15_19 = $AU_V15_19 / $at_total['value'] *100;
$pAU_V20_24 = $AU_V20_24 / $at_total['value'] *100;
$pAU_V25_29 = $AU_V25_29 / $at_total['value'] *100;
$pAU_V30_39 = $AU_V30_39 / $at_total['value'] *100;
$pAU_V40_ = $AU_V40_ / $at_total['value'] *100;
$at_total['purchase_yn'] = $at_total['km'];
$pAU_PPUP = $AU_PPUP / $at_total['purchase_yn'] *100;
$pAU_PPULP = $AU_PPULP / $at_total['purchase_yn'] *100;
$pAU_PPULN = $AU_PPULN / $at_total['purchase_yn'] *100;
$pAU_PPUN = $AU_PPUN / $at_total['purchase_yn'] *100;
$at_total['purchase_value'] = $at_total['km'];
$pAU_PV_9 = $AU_PV_9 / $at_total['purchase_value'] *100;
$pAU_PV10_14 = $AU_PV10_14 / $at_total['purchase_value'] *100;
$pAU_PV15_19 = $AU_PV15_19 / $at_total['purchase_value'] *100;
$pAU_PV20_24 = $AU_PV20_24 / $at_total['purchase_value'] *100;
$pAU_PV25_29 = $AU_PV25_29 / $at_total['purchase_value'] *100;
$pAU_PV30_39 = $AU_PV30_39 / $at_total['purchase_value'] *100;
$pAU_PV40_ = $AU_PV40_ / $at_total['purchase_value'] *100;
$at_total['nect_vehicle'] = $at_total['km'];
$pAU_PTPSED = $AU_PTPSED / $at_total['nect_vehicle'] *100;
$pAU_PTPSCOM = $AU_PTPSCOM / $at_total['nect_vehicle'] *100;
$pAU_PTPSPO = $AU_PTPSPO / $at_total['nect_vehicle'] *100;
$pAU_PTPMVSW = $AU_PTPMVSW / $at_total['nect_vehicle'] *100;
$pAU_PTPSUV = $AU_PTPSUV / $at_total['nect_vehicle'] *100;
$pAU_PTPPIC = $AU_PTPPIC / $at_total['nect_vehicle'] *100;
$pAU_PTPFVAN = $AU_PTPFVAN / $at_total['nect_vehicle'] *100;
$pAU_PTPOTH = $AU_PTPOTH / $at_total['nect_vehicle'] *100;
$at_total['repair'] = $at_total['km'];
$pAU_MNBDN = $AU_MNBDN / $at_total['repair'] *100;
$pAU_MNBDG = $AU_MNBDG / $at_total['repair'] *100;
$pAU_MNBDD = $AU_MNBDD / $at_total['repair'] *100;
$pAU_MNBDS = $AU_MNBDS / $at_total['repair'] *100;
$pAU_MNBDL = $AU_MNBDL / $at_total['repair'] *100;
$pAU_MNBDF = $AU_MNBDF / $at_total['repair'] *100;
$pAU_MNBDU = $AU_MNBDU / $at_total['repair'] *100;
$at_total['oil'] = $at_total['km'];
$pAU_MNOCN = $AU_MNOCN / $at_total['oil'] *100;
$pAU_MNOCG = $AU_MNOCG / $at_total['oil'] *100;
$pAU_MNOCD = $AU_MNOCD / $at_total['oil'] *100;
$pAU_MNOCS = $AU_MNOCS / $at_total['oil'] *100;
$pAU_MNOCL = $AU_MNOCL / $at_total['oil'] *100;
$pAU_MNOCF = $AU_MNOCF / $at_total['oil'] *100;
$pAU_MNOCU = $AU_MNOCU / $at_total['oil'] *100;
$at_total['brakes'] = $at_total['km'];
$pAU_MNBKN = $AU_MNBKN / $at_total['brakes'] *100;
$pAU_MNBKG = $AU_MNBKG / $at_total['brakes'] *100;
$pAU_MNBKD = $AU_MNBKD / $at_total['brakes'] *100;
$pAU_MNBKS = $AU_MNBKS / $at_total['brakes'] *100;
$pAU_MNBKL = $AU_MNBKL / $at_total['brakes'] *100;
$pAU_MNBKF = $AU_MNBKF / $at_total['brakes'] *100;
$pAU_MNBKU = $AU_MNBKU / $at_total['brakes'] *100;
$at_total['tires'] = $at_total['km'];
$pAU_MNTRN = $AU_MNTRN / $at_total['tires'] *100;
$pAU_MNTRG = $AU_MNTRG / $at_total['tires'] *100;
$pAU_MNTRD = $AU_MNTRD / $at_total['tires'] *100;
$pAU_MNTRS = $AU_MNTRS / $at_total['tires'] *100;
$pAU_MNTRL = $AU_MNTRL / $at_total['tires'] *100;
$pAU_MNTRF = $AU_MNTRF / $at_total['tires'] *100;
$pAU_MNTRU = $AU_MNTRU / $at_total['tires'] *100;
$at_total['rust'] = $at_total['km'];
$pAU_MNRPN = $AU_MNRPN / $at_total['rust'] *100;
$pAU_MNRPG = $AU_MNRPG / $at_total['rust'] *100;
$pAU_MNRPD = $AU_MNRPD / $at_total['rust'] *100;
$pAU_MNRPS = $AU_MNRPS / $at_total['rust'] *100;
$pAU_MNRPL = $AU_MNRPL / $at_total['rust'] *100;
$pAU_MNRPF = $AU_MNRPF / $at_total['rust'] *100;
$pAU_MNRPU = $AU_MNRPU / $at_total['rust'] *100;
$at_total['tuneup'] = $at_total['km'];
$pAU_MNTPN = $AU_MNTPN / $at_total['tuneup'] *100;
$pAU_MNTPG = $AU_MNTPG / $at_total['tuneup'] *100;
$pAU_MNTPD = $AU_MNTPD / $at_total['tuneup'] *100;
$pAU_MNTPS = $AU_MNTPS / $at_total['tuneup'] *100;
$pAU_MNTPL = $AU_MNTPL / $at_total['tuneup'] *100;
$pAU_MNTPF = $AU_MNTPF / $at_total['tuneup'] *100;
$pAU_MNTPU = $AU_MNTPU / $at_total['tuneup'] *100;
$at_total['service'] = $at_total['km'];
$pAU_VSGR = $AU_VSGR / $at_total['service'] *100;
$pAU_VSAG = $AU_VSAG / $at_total['service'] *100;
$pAU_VSST = $AU_VSST / $at_total['service'] *100;
$pAU_VSCT = $AU_VSCT / $at_total['service'] *100;
$pAU_VSCC = $AU_VSCC / $at_total['service'] *100;
$pAU_VSGM = $AU_VSGM / $at_total['service'] *100;
$pAU_VSGY = $AU_VSGY / $at_total['service'] *100;
$pAU_VSMC = $AU_VSMC / $at_total['service'] *100;
$pAU_VSMD = $AU_VSMD / $at_total['service'] *100;
$pAU_VSTR = $AU_VSTR / $at_total['service'] *100;
$pAU_VSLB = $AU_VSLB / $at_total['service'] *100;
$pAU_VSNP = $AU_VSNP / $at_total['service'] *100;
$pAU_VSOKT = $AU_VSOKT / $at_total['service'] *100;
$pAU_VSPS = $AU_VSPS / $at_total['service'] *100;
$pAU_VSSG = $AU_VSSG / $at_total['service'] *100;
$pAU_VSSS = $AU_VSSS / $at_total['service'] *100;
$pAU_VSWM = $AU_VSWM / $at_total['service'] *100;
$pAU_VSDL = $AU_VSDL / $at_total['service'] *100;
$pAU_VSCTCW = $AU_VSCTCW / $at_total['service'] *100;
$pAU_VSOT = $AU_VSOT / $at_total['service'] *100;
$at_total['gas'] = $at_total['km'];
$pAU_GASCT = $AU_GASCT / $at_total['gas'] *100;
$pAU_GASCR = $AU_GASCR / $at_total['gas'] *100;
$pAU_GASES = $AU_GASES / $at_total['gas'] *100;
$pAU_GASPT = $AU_GASPT / $at_total['gas'] *100;
$pAU_GASSL = $AU_GASSL / $at_total['gas'] *100;
$pAU_GASOT = $AU_GASOT / $at_total['gas'] *100;
$at_total['purchased'] = $at_total['km'];
$pAU_PUN = $AU_PUN / $at_total['purchased'] *100;
$pAU_PUPN = $AU_PUPN / $at_total['purchased'] *100;
$pAU_PUPU = $AU_PUPU / $at_total['purchased'] *100;
$pAU_PULN = $AU_PULN / $at_total['purchased'] *100;
$pAU_PULU = $AU_PULU / $at_total['purchased'] *100;
// index values
$iAU_N0 = min(500, $pAU_N0 / $cAU_N0 *100);
$iAU_N1 = min(500, $pAU_N1 / $cAU_N1 *100);
$iAU_N2 = min(500, $pAU_N2 / $cAU_N2 *100);
$iAU_N3 = min(500, $pAU_N3 / $cAU_N3 *100);
$iAU_N4_ = min(500, $pAU_N4_ / $cAU_N4_ *100);
$iAU_KM0 = min(500, $pAU_KM0 / $cAU_KM0 *100);
$iAU_KM1_9 = min(500, $pAU_KM1_9 / $cAU_KM1_9 *100);
$iAU_KM10_19 = min(500, $pAU_KM10_19 / $cAU_KM10_19 *100);
$iAU_KM20_29 = min(500, $pAU_KM20_29 / $cAU_KM20_29 *100);
$iAU_KM30_ = min(500, $pAU_KM30_ / $cAU_KM30_ *100);
$iAU_MKBUI = min(500, $pAU_MKBUI / $cAU_MKBUI *100);
$iAU_MKCAD = min(500, $pAU_MKCAD / $cAU_MKCAD *100);
$iAU_MKCHE = min(500, $pAU_MKCHE / $cAU_MKCHE *100);
$iAU_MKCHR = min(500, $pAU_MKCHR / $cAU_MKCHR *100);
$iAU_MKDOD = min(500, $pAU_MKDOD / $cAU_MKDOD *100);
$iAU_MKFOR = min(500, $pAU_MKFOR / $cAU_MKFOR *100);
$iAU_MKGMC = min(500, $pAU_MKGMC / $cAU_MKGMC *100);
$iAU_MKJEE = min(500, $pAU_MKJEE / $cAU_MKJEE *100);
$iAU_MKLIN = min(500, $pAU_MKLIN / $cAU_MKLIN *100);
$iAU_MKMER = min(500, $pAU_MKMER / $cAU_MKMER *100);
$iAU_MKOLD = min(500, $pAU_MKOLD / $cAU_MKOLD *100);
$iAU_MKPLY = min(500, $pAU_MKPLY / $cAU_MKPLY *100);
$iAU_MKPON = min(500, $pAU_MKPON / $cAU_MKPON *100);
$iAU_MKSAT = min(500, $pAU_MKSAT / $cAU_MKSAT *100);
$iAU_MKDOM = min(500, $pAU_MKDOM / $cAU_MKDOM *100);
$iAU_MKACU = min(500, $pAU_MKACU / $cAU_MKACU *100);
$iAU_MKAU_D = min(500, $pAU_MKAU_D / $cAU_MKAU_D *100);
$iAU_MKBMW = min(500, $pAU_MKBMW / $cAU_MKBMW *100);
$iAU_MKHON = min(500, $pAU_MKHON / $cAU_MKHON *100);
$iAU_MKHYU = min(500, $pAU_MKHYU / $cAU_MKHYU *100);
$iAU_MKINF = min(500, $pAU_MKINF / $cAU_MKINF *100);
$iAU_MKKIA = min(500, $pAU_MKKIA / $cAU_MKKIA *100);
$iAU_MKLEX = min(500, $pAU_MKLEX / $cAU_MKLEX *100);
$iAU_MKMAZ = min(500, $pAU_MKMAZ / $cAU_MKMAZ *100);
$iAU_MKBEN = min(500, $pAU_MKBEN / $cAU_MKBEN *100);
$iAU_MKMIT = min(500, $pAU_MKMIT / $cAU_MKMIT *100);
$iAU_MKNIS = min(500, $pAU_MKNIS / $cAU_MKNIS *100);
$iAU_MKSUB = min(500, $pAU_MKSUB / $cAU_MKSUB *100);
$iAU_MKSUZ = min(500, $pAU_MKSUZ / $cAU_MKSUZ *100);
$iAU_MKTOY = min(500, $pAU_MKTOY / $cAU_MKTOY *100);
$iAU_MKVW = min(500, $pAU_MKVW / $cAU_MKVW *100);
$iAU_MKVOL = min(500, $pAU_MKVOL / $cAU_MKVOL *100);
$iAU_MKFGN = min(500, $pAU_MKFGN / $cAU_MKFGN *100);
$iAU_TPMFS = min(500, $pAU_TPMFS / $cAU_TPMFS *100);
$iAU_TPSCOMP = min(500, $pAU_TPSCOMP / $cAU_TPSCOMP *100);
$iAU_TPSPO = min(500, $pAU_TPSPO / $cAU_TPSPO *100);
$iAU_TPMVSW = min(500, $pAU_TPMVSW / $cAU_TPMVSW *100);
$iAU_TPSUV = min(500, $pAU_TPSUV / $cAU_TPSUV *100);
$iAU_TPPIC = min(500, $pAU_TPPIC / $cAU_TPPIC *100);
$iAU_TPFVAN = min(500, $pAU_TPFVAN / $cAU_TPFVAN *100);
$iAU_TPOTH = min(500, $pAU_TPOTH / $cAU_TPOTH *100);
$iAU_YR13_ = min(500, $pAU_YR13_ / $cAU_YR13_ *100);
$iAU_YR12 = min(500, $pAU_YR12 / $cAU_YR12 *100);
$iAU_YR11 = min(500, $pAU_YR11 / $cAU_YR11 *100);
$iAU_YR10 = min(500, $pAU_YR10 / $cAU_YR10 *100);
$iAU_YR09 = min(500, $pAU_YR09 / $cAU_YR09 *100);
$iAU_YR08 = min(500, $pAU_YR08 / $cAU_YR08 *100);
$iAU_YR07 = min(500, $pAU_YR07 / $cAU_YR07 *100);
$iAU_YR06 = min(500, $pAU_YR06 / $cAU_YR06 *100);
$iAU_YR05 = min(500, $pAU_YR05 / $cAU_YR05 *100);
$iAU_YR04 = min(500, $pAU_YR04 / $cAU_YR04 *100);
$iAU_YR03 = min(500, $pAU_YR03 / $cAU_YR03 *100);
$iAU_YR_02 = min(500, $pAU_YR_02 / $cAU_YR_02 *100);
$iAU_YRNO = min(500, $pAU_YRNO / $cAU_YRNO *100);
$iAU_NEWBN = min(500, $pAU_NEWBN / $cAU_NEWBN *100);
$iAU_NEWBU = min(500, $pAU_NEWBU / $cAU_NEWBU *100);
$iAU_NEWLN = min(500, $pAU_NEWLN / $cAU_NEWLN *100);
$iAU_NEWLU = min(500, $pAU_NEWLU / $cAU_NEWLU *100);
$iAU_NEWNO = min(500, $pAU_NEWNO / $cAU_NEWNO *100);
$iAU_BUYERN = min(500, $pAU_BUYERN / $cAU_BUYERN *100);
$iAU_BUYERM = min(500, $pAU_BUYERM / $cAU_BUYERM *100);
$iAU_BUYERP = min(500, $pAU_BUYERP / $cAU_BUYERP *100);
$iAU_PUN = min(500, $pAU_PUN / $cAU_PUN *100);
$iAU_PUPN = min(500, $pAU_PUPN / $cAU_PUPN *100);
$iAU_PUPU = min(500, $pAU_PUPU / $cAU_PUPU *100);
$iAU_PULN = min(500, $pAU_PULN / $cAU_PULN *100);
$iAU_PULU = min(500, $pAU_PULU / $cAU_PULU *100);
$iAU_V_9 = min(500, $pAU_V_9 / $cAU_V_9 *100);
$iAU_V10_14 = min(500, $pAU_V10_14 / $cAU_V10_14 *100);
$iAU_V15_19 = min(500, $pAU_V15_19 / $cAU_V15_19 *100);
$iAU_V20_24 = min(500, $pAU_V20_24 / $cAU_V20_24 *100);
$iAU_V25_29 = min(500, $pAU_V25_29 / $cAU_V25_29 *100);
$iAU_V30_39 = min(500, $pAU_V30_39 / $cAU_V30_39 *100);
$iAU_V40_ = min(500, $pAU_V40_ / $cAU_V40_ *100);
$iAU_LSEDP = min(500, $pAU_LSEDP / $cAU_LSEDP *100);
$iAU_LSEDR = min(500, $pAU_LSEDR / $cAU_LSEDR *100);
$iAU_PPUP = min(500, $pAU_PPUP / $cAU_PPUP *100);
$iAU_PPULP = min(500, $pAU_PPULP / $cAU_PPULP *100);
$iAU_PPULN = min(500, $pAU_PPULN / $cAU_PPULN *100);
$iAU_PPUN = min(500, $pAU_PPUN / $cAU_PPUN *100);
$iAU_PV_9 = min(500, $pAU_PV_9 / $cAU_PV_9 *100);
$iAU_PV10_14 = min(500, $pAU_PV10_14 / $cAU_PV10_14 *100);
$iAU_PV15_19 = min(500, $pAU_PV15_19 / $cAU_PV15_19 *100);
$iAU_PV20_24 = min(500, $pAU_PV20_24 / $cAU_PV20_24 *100);
$iAU_PV25_29 = min(500, $pAU_PV25_29 / $cAU_PV25_29 *100);
$iAU_PV30_39 = min(500, $pAU_PV30_39 / $cAU_PV30_39 *100);
$iAU_PV40_ = min(500, $pAU_PV40_ / $cAU_PV40_ *100);
$iAU_PTPSED = min(500, $pAU_PTPSED / $cAU_PTPSED *100);
$iAU_PTPSCOM = min(500, $pAU_PTPSCOM / $cAU_PTPSCOM *100);
$iAU_PTPSPO = min(500, $pAU_PTPSPO / $cAU_PTPSPO *100);
$iAU_PTPMVSW = min(500, $pAU_PTPMVSW / $cAU_PTPMVSW *100);
$iAU_PTPSUV = min(500, $pAU_PTPSUV / $cAU_PTPSUV *100);
$iAU_PTPPIC = min(500, $pAU_PTPPIC / $cAU_PTPPIC *100);
$iAU_PTPFVAN = min(500, $pAU_PTPFVAN / $cAU_PTPFVAN *100);
$iAU_PTPOTH = min(500, $pAU_PTPOTH / $cAU_PTPOTH *100);
$iAU_PHBC = min(500, $pAU_PHBC / $cAU_PHBC *100);
$iAU_PHBLC = min(500, $pAU_PHBLC / $cAU_PHBLC *100);
$iAU_PHBLN = min(500, $pAU_PHBLN / $cAU_PHBLN *100);
$iAU_PHBN = min(500, $pAU_PHBN / $cAU_PHBN *100);
$iAU_XMN = min(500, $pAU_XMN / $cAU_XMN *100);
$iAU_XMY = min(500, $pAU_XMY / $cAU_XMY *100);
$iAU_MBCLUB = min(500, $pAU_MBCLUB / $cAU_MBCLUB *100);
$iAU_MBMANU = min(500, $pAU_MBMANU / $cAU_MBMANU *100);
$iAU_MBSTAR = min(500, $pAU_MBSTAR / $cAU_MBSTAR *100);
$iAU_INSSVI = min(500, $pAU_INSSVI / $cAU_INSSVI *100);
$iAU_INSSSI = min(500, $pAU_INSSSI / $cAU_INSSSI *100);
$iAU_INSSNVI = min(500, $pAU_INSSNVI / $cAU_INSSNVI *100);
$iAU_INSSNAI = min(500, $pAU_INSSNAI / $cAU_INSSNAI *100);
$iAU_INSSNAV = min(500, $pAU_INSSNAV / $cAU_INSSNAV *100);
$iAU_MNBDN = min(500, $pAU_MNBDN / $cAU_MNBDN *100);
$iAU_MNBDG = min(500, $pAU_MNBDG / $cAU_MNBDG *100);
$iAU_MNBDD = min(500, $pAU_MNBDD / $cAU_MNBDD *100);
$iAU_MNBDS = min(500, $pAU_MNBDS / $cAU_MNBDS *100);
$iAU_MNBDL = min(500, $pAU_MNBDL / $cAU_MNBDL *100);
$iAU_MNBDF = min(500, $pAU_MNBDF / $cAU_MNBDF *100);
$iAU_MNBDU = min(500, $pAU_MNBDU / $cAU_MNBDU *100);
$iAU_MNOCN = min(500, $pAU_MNOCN / $cAU_MNOCN *100);
$iAU_MNOCG = min(500, $pAU_MNOCG / $cAU_MNOCG *100);
$iAU_MNOCD = min(500, $pAU_MNOCD / $cAU_MNOCD *100);
$iAU_MNOCS = min(500, $pAU_MNOCS / $cAU_MNOCS *100);
$iAU_MNOCL = min(500, $pAU_MNOCL / $cAU_MNOCL *100);
$iAU_MNOCF = min(500, $pAU_MNOCF / $cAU_MNOCF *100);
$iAU_MNOCU = min(500, $pAU_MNOCU / $cAU_MNOCU *100);
$iAU_MNPTN = min(500, $pAU_MNPTN / $cAU_MNPTN *100);
$iAU_MNPTG = min(500, $pAU_MNPTG / $cAU_MNPTG *100);
$iAU_MNPTD = min(500, $pAU_MNPTD / $cAU_MNPTD *100);
$iAU_MNPTS = min(500, $pAU_MNPTS / $cAU_MNPTS *100);
$iAU_MNPTL = min(500, $pAU_MNPTL / $cAU_MNPTL *100);
$iAU_MNPTF = min(500, $pAU_MNPTF / $cAU_MNPTF *100);
$iAU_MNPTU = min(500, $pAU_MNPTU / $cAU_MNPTU *100);
$iAU_MPFMN = min(500, $pAU_MPFMN / $cAU_MPFMN *100);
$iAU_MPFMG = min(500, $pAU_MPFMG / $cAU_MPFMG *100);
$iAU_MPFMD = min(500, $pAU_MPFMD / $cAU_MPFMD *100);
$iAU_MPFMS = min(500, $pAU_MPFMS / $cAU_MPFMS *100);
$iAU_MPFML = min(500, $pAU_MPFML / $cAU_MPFML *100);
$iAU_MPFMF = min(500, $pAU_MPFMF / $cAU_MPFMF *100);
$iAU_MPFMU = min(500, $pAU_MPFMU / $cAU_MPFMU *100);
$iAU_MNTMN = min(500, $pAU_MNTMN / $cAU_MNTMN *100);
$iAU_MNTMG = min(500, $pAU_MNTMG / $cAU_MNTMG *100);
$iAU_MNTMD = min(500, $pAU_MNTMD / $cAU_MNTMD *100);
$iAU_MNTMS = min(500, $pAU_MNTMS / $cAU_MNTMS *100);
$iAU_MNTML = min(500, $pAU_MNTML / $cAU_MNTML *100);
$iAU_MNTMF = min(500, $pAU_MNTMF / $cAU_MNTMF *100);
$iAU_MNTMU = min(500, $pAU_MNTMU / $cAU_MNTMU *100);
$iAU_MNBKN = min(500, $pAU_MNBKN / $cAU_MNBKN *100);
$iAU_MNBKG = min(500, $pAU_MNBKG / $cAU_MNBKG *100);
$iAU_MNBKD = min(500, $pAU_MNBKD / $cAU_MNBKD *100);
$iAU_MNBKS = min(500, $pAU_MNBKS / $cAU_MNBKS *100);
$iAU_MNBKL = min(500, $pAU_MNBKL / $cAU_MNBKL *100);
$iAU_MNBKF = min(500, $pAU_MNBKF / $cAU_MNBKF *100);
$iAU_MNBKU = min(500, $pAU_MNBKU / $cAU_MNBKU *100);
$iAU_MNWDN = min(500, $pAU_MNWDN / $cAU_MNWDN *100);
$iAU_MNWDG = min(500, $pAU_MNWDG / $cAU_MNWDG *100);
$iAU_MNWDD = min(500, $pAU_MNWDD / $cAU_MNWDD *100);
$iAU_MNWDS = min(500, $pAU_MNWDS / $cAU_MNWDS *100);
$iAU_MNWDL = min(500, $pAU_MNWDL / $cAU_MNWDL *100);
$iAU_MNWDF = min(500, $pAU_MNWDF / $cAU_MNWDF *100);
$iAU_MNWDU = min(500, $pAU_MNWDU / $cAU_MNWDU *100);
$iAU_MNTRN = min(500, $pAU_MNTRN / $cAU_MNTRN *100);
$iAU_MNTRG = min(500, $pAU_MNTRG / $cAU_MNTRG *100);
$iAU_MNTRD = min(500, $pAU_MNTRD / $cAU_MNTRD *100);
$iAU_MNTRS = min(500, $pAU_MNTRS / $cAU_MNTRS *100);
$iAU_MNTRL = min(500, $pAU_MNTRL / $cAU_MNTRL *100);
$iAU_MNTRF = min(500, $pAU_MNTRF / $cAU_MNTRF *100);
$iAU_MNTRU = min(500, $pAU_MNTRU / $cAU_MNTRU *100);
$iAU_MNMFN = min(500, $pAU_MNMFN / $cAU_MNMFN *100);
$iAU_MNMFG = min(500, $pAU_MNMFG / $cAU_MNMFG *100);
$iAU_MNMFD = min(500, $pAU_MNMFD / $cAU_MNMFD *100);
$iAU_MNMFS = min(500, $pAU_MNMFS / $cAU_MNMFS *100);
$iAU_MNMFL = min(500, $pAU_MNMFL / $cAU_MNMFL *100);
$iAU_MNMFF = min(500, $pAU_MNMFF / $cAU_MNMFF *100);
$iAU_MNMFU = min(500, $pAU_MNMFU / $cAU_MNMFU *100);
$iAU_MNRPN = min(500, $pAU_MNRPN / $cAU_MNRPN *100);
$iAU_MNRPG = min(500, $pAU_MNRPG / $cAU_MNRPG *100);
$iAU_MNRPD = min(500, $pAU_MNRPD / $cAU_MNRPD *100);
$iAU_MNRPS = min(500, $pAU_MNRPS / $cAU_MNRPS *100);
$iAU_MNRPL = min(500, $pAU_MNRPL / $cAU_MNRPL *100);
$iAU_MNRPF = min(500, $pAU_MNRPF / $cAU_MNRPF *100);
$iAU_MNRPU = min(500, $pAU_MNRPU / $cAU_MNRPU *100);
$iAU_MNTPN = min(500, $pAU_MNTPN / $cAU_MNTPN *100);
$iAU_MNTPG = min(500, $pAU_MNTPG / $cAU_MNTPG *100);
$iAU_MNTPD = min(500, $pAU_MNTPD / $cAU_MNTPD *100);
$iAU_MNTPS = min(500, $pAU_MNTPS / $cAU_MNTPS *100);
$iAU_MNTPL = min(500, $pAU_MNTPL / $cAU_MNTPL *100);
$iAU_MNTPF = min(500, $pAU_MNTPF / $cAU_MNTPF *100);
$iAU_MNTPU = min(500, $pAU_MNTPU / $cAU_MNTPU *100);
$iAU_MNOTN = min(500, $pAU_MNOTN / $cAU_MNOTN *100);
$iAU_MNOTG = min(500, $pAU_MNOTG / $cAU_MNOTG *100);
$iAU_MNOTD = min(500, $pAU_MNOTD / $cAU_MNOTD *100);
$iAU_MNOTS = min(500, $pAU_MNOTS / $cAU_MNOTS *100);
$iAU_MNOTL = min(500, $pAU_MNOTL / $cAU_MNOTL *100);
$iAU_MNOTF = min(500, $pAU_MNOTF / $cAU_MNOTF *100);
$iAU_MNOTU = min(500, $pAU_MNOTU / $cAU_MNOTU *100);
$iAU_VSGR = min(500, $pAU_VSGR / $cAU_VSGR *100);
$iAU_VSAG = min(500, $pAU_VSAG / $cAU_VSAG *100);
$iAU_VSST = min(500, $pAU_VSST / $cAU_VSST *100);
$iAU_VSCT = min(500, $pAU_VSCT / $cAU_VSCT *100);
$iAU_VSCC = min(500, $pAU_VSCC / $cAU_VSCC *100);
$iAU_VSGM = min(500, $pAU_VSGM / $cAU_VSGM *100);
$iAU_VSGY = min(500, $pAU_VSGY / $cAU_VSGY *100);
$iAU_VSMC = min(500, $pAU_VSMC / $cAU_VSMC *100);
$iAU_VSMD = min(500, $pAU_VSMD / $cAU_VSMD *100);
$iAU_VSTR = min(500, $pAU_VSTR / $cAU_VSTR *100);
$iAU_VSLB = min(500, $pAU_VSLB / $cAU_VSLB *100);
$iAU_VSNP = min(500, $pAU_VSNP / $cAU_VSNP *100);
$iAU_VSOKT = min(500, $pAU_VSOKT / $cAU_VSOKT *100);
$iAU_VSPS = min(500, $pAU_VSPS / $cAU_VSPS *100);
$iAU_VSSG = min(500, $pAU_VSSG / $cAU_VSSG *100);
$iAU_VSSS = min(500, $pAU_VSSS / $cAU_VSSS *100);
$iAU_VSWM = min(500, $pAU_VSWM / $cAU_VSWM *100);
$iAU_VSDL = min(500, $pAU_VSDL / $cAU_VSDL *100);
$iAU_VSCTCW = min(500, $pAU_VSCTCW / $cAU_VSCTCW *100);
$iAU_VSOT = min(500, $pAU_VSOT / $cAU_VSOT *100);
$iAU_GASCT = min(500, $pAU_GASCT / $cAU_GASCT *100);
$iAU_GASCR = min(500, $pAU_GASCR / $cAU_GASCR *100);
$iAU_GASES = min(500, $pAU_GASES / $cAU_GASES *100);
$iAU_GASPT = min(500, $pAU_GASPT / $cAU_GASPT *100);
$iAU_GASSL = min(500, $pAU_GASSL / $cAU_GASSL *100);
$iAU_GASOT = min(500, $pAU_GASOT / $cAU_GASOT *100);
$iAU_GFCT1 = min(500, $pAU_GFCT1 / $cAU_GFCT1 *100);
$iAU_GFCT2_3 = min(500, $pAU_GFCT2_3 / $cAU_GFCT2_3 *100);
$iAU_GFCT4 = min(500, $pAU_GFCT4 / $cAU_GFCT4 *100);
$iAU_GFCT529 = min(500, $pAU_GFCT529 / $cAU_GFCT529 *100);
$iAU_GFCT30_ = min(500, $pAU_GFCT30_ / $cAU_GFCT30_ *100);
$iAU_GFCR1 = min(500, $pAU_GFCR1 / $cAU_GFCR1 *100);
$iAU_GFCR2_3 = min(500, $pAU_GFCR2_3 / $cAU_GFCR2_3 *100);
$iAU_GFCR4 = min(500, $pAU_GFCR4 / $cAU_GFCR4 *100);
$iAU_GFCR529 = min(500, $pAU_GFCR529 / $cAU_GFCR529 *100);
$iAU_GFCR30_ = min(500, $pAU_GFCR30_ / $cAU_GFCR30_ *100);
$iAU_GFES1 = min(500, $pAU_GFES1 / $cAU_GFES1 *100);
$iAU_GFES2_3 = min(500, $pAU_GFES2_3 / $cAU_GFES2_3 *100);
$iAU_GFES4 = min(500, $pAU_GFES4 / $cAU_GFES4 *100);
$iAU_GFES529 = min(500, $pAU_GFES529 / $cAU_GFES529 *100);
$iAU_GFES30_ = min(500, $pAU_GFES30_ / $cAU_GFES30_ *100);
$iAU_GFPT1 = min(500, $pAU_GFPT1 / $cAU_GFPT1 *100);
$iAU_GFPT2_3 = min(500, $pAU_GFPT2_3 / $cAU_GFPT2_3 *100);
$iAU_GFPT4 = min(500, $pAU_GFPT4 / $cAU_GFPT4 *100);
$iAU_GFPT529 = min(500, $pAU_GFPT529 / $cAU_GFPT529 *100);
$iAU_GFPT30_ = min(500, $pAU_GFPT30_ / $cAU_GFPT30_ *100);
$iAU_GFSL1 = min(500, $pAU_GFSL1 / $cAU_GFSL1 *100);
$iAU_GFSL2_3 = min(500, $pAU_GFSL2_3 / $cAU_GFSL2_3 *100);
$iAU_GFSL4 = min(500, $pAU_GFSL4 / $cAU_GFSL4 *100);
$iAU_GFSL529 = min(500, $pAU_GFSL529 / $cAU_GFSL529 *100);
$iAU_GFSL30_ = min(500, $pAU_GFSL30_ / $cAU_GFSL30_ *100);
$iAU_GFOT1 = min(500, $pAU_GFOT1 / $cAU_GFOT1 *100);
$iAU_GFOT2_3 = min(500, $pAU_GFOT2_3 / $cAU_GFOT2_3 *100);
$iAU_GFOT4 = min(500, $pAU_GFOT4 / $cAU_GFOT4 *100);
$iAU_GFOT529 = min(500, $pAU_GFOT529 / $cAU_GFOT529 *100);
$iAU_GFOT30_ = min(500, $pAU_GFOT30_ / $cAU_GFOT30_ *100);
$iAU_RTAV = min(500, $pAU_RTAV / $cAU_RTAV *100);
$iAU_RTBG = min(500, $pAU_RTBG / $cAU_RTBG *100);
$iAU_RTDC = min(500, $pAU_RTDC / $cAU_RTDC *100);
$iAU_RTEP = min(500, $pAU_RTEP / $cAU_RTEP *100);
$iAU_RTHZ = min(500, $pAU_RTHZ / $cAU_RTHZ *100);
$iAU_RTNN = min(500, $pAU_RTNN / $cAU_RTNN *100);
$iAU_RTTT = min(500, $pAU_RTTT / $cAU_RTTT *100);
$iAU_RTUH = min(500, $pAU_RTUH / $cAU_RTUH *100);
$iAU_RTOT = min(500, $pAU_RTOT / $cAU_RTOT *100);
$iAU_RPAVP = min(500, $pAU_RPAVP / $cAU_RPAVP *100);
$iAU_RPAVB = min(500, $pAU_RPAVB / $cAU_RPAVB *100);
$iAU_RPAV2 = min(500, $pAU_RPAV2 / $cAU_RPAV2 *100);
$iAU_RPBGP = min(500, $pAU_RPBGP / $cAU_RPBGP *100);
$iAU_RPBGB = min(500, $pAU_RPBGB / $cAU_RPBGB *100);
$iAU_RPBG2 = min(500, $pAU_RPBG2 / $cAU_RPBG2 *100);
$iAU_RPDCP = min(500, $pAU_RPDCP / $cAU_RPDCP *100);
$iAU_RPDCB = min(500, $pAU_RPDCB / $cAU_RPDCB *100);
$iAU_RPDC2 = min(500, $pAU_RPDC2 / $cAU_RPDC2 *100);
$iAU_RPEPP = min(500, $pAU_RPEPP / $cAU_RPEPP *100);
$iAU_RPEPB = min(500, $pAU_RPEPB / $cAU_RPEPB *100);
$iAU_RPEP2 = min(500, $pAU_RPEP2 / $cAU_RPEP2 *100);
$iAU_RPHZP = min(500, $pAU_RPHZP / $cAU_RPHZP *100);
$iAU_RPHZB = min(500, $pAU_RPHZB / $cAU_RPHZB *100);
$iAU_RPHZ2 = min(500, $pAU_RPHZ2 / $cAU_RPHZ2 *100);
$iAU_RPNNP = min(500, $pAU_RPNNP / $cAU_RPNNP *100);
$iAU_RPNNB = min(500, $pAU_RPNNB / $cAU_RPNNB *100);
$iAU_RPNN2 = min(500, $pAU_RPNN2 / $cAU_RPNN2 *100);
$iAU_RPTTP = min(500, $pAU_RPTTP / $cAU_RPTTP *100);
$iAU_RPTTB = min(500, $pAU_RPTTB / $cAU_RPTTB *100);
$iAU_RPTT2 = min(500, $pAU_RPTT2 / $cAU_RPTT2 *100);
$iAU_RPUHP = min(500, $pAU_RPUHP / $cAU_RPUHP *100);
$iAU_RPUHB = min(500, $pAU_RPUHB / $cAU_RPUHB *100);
$iAU_RPUH2 = min(500, $pAU_RPUH2 / $cAU_RPUH2 *100);
$iAU_RPOTP = min(500, $pAU_RPOTP / $cAU_RPOTP *100);
$iAU_RPOTB = min(500, $pAU_RPOTB / $cAU_RPOTB *100);
$iAU_RPOT2 = min(500, $pAU_RPOT2 / $cAU_RPOT2 *100);
$iAU_RFAV1_3 = min(500, $pAU_RFAV1_3 / $cAU_RFAV1_3 *100);
$iAU_RFAV4_ = min(500, $pAU_RFAV4_ / $cAU_RFAV4_ *100);
$iAU_RFBG1_3 = min(500, $pAU_RFBG1_3 / $cAU_RFBG1_3 *100);
$iAU_RFBG4_ = min(500, $pAU_RFBG4_ / $cAU_RFBG4_ *100);
$iAU_RFDC1_3 = min(500, $pAU_RFDC1_3 / $cAU_RFDC1_3 *100);
$iAU_RFDC4_ = min(500, $pAU_RFDC4_ / $cAU_RFDC4_ *100);
$iAU_RFEP1_3 = min(500, $pAU_RFEP1_3 / $cAU_RFEP1_3 *100);
$iAU_RFEP4_ = min(500, $pAU_RFEP4_ / $cAU_RFEP4_ *100);
$iAU_RFHZ1_3 = min(500, $pAU_RFHZ1_3 / $cAU_RFHZ1_3 *100);
$iAU_RFHZ4_ = min(500, $pAU_RFHZ4_ / $cAU_RFHZ4_ *100);
$iAU_RFNN1_3 = min(500, $pAU_RFNN1_3 / $cAU_RFNN1_3 *100);
$iAU_RFNN4_ = min(500, $pAU_RFNN4_ / $cAU_RFNN4_ *100);
$iAU_RFTT1_3 = min(500, $pAU_RFTT1_3 / $cAU_RFTT1_3 *100);
$iAU_RFTT4_ = min(500, $pAU_RFTT4_ / $cAU_RFTT4_ *100);
$iAU_RFUH1_3 = min(500, $pAU_RFUH1_3 / $cAU_RFUH1_3 *100);
$iAU_RFUH4_ = min(500, $pAU_RFUH4_ / $cAU_RFUH4_ *100);
$iAU_RFOT1_3 = min(500, $pAU_RFOT1_3 / $cAU_RFOT1_3 *100);
$iAU_RFOT4_ = min(500, $pAU_RFOT4_ / $cAU_RFOT4_ *100);
// CUSTOM VARIABLES --------------------------------------------------------------------
// custom variables - age
$at_age_vehicle['pnew'] = $pAU_YR13_ ;
$at_age_vehicle['p2_5'] = $pAU_YR12 +$pAU_YR11 + $pAU_YR10 + $pAU_YR09 ;
$at_age_vehicle['p5_10'] = $pAU_YR08 + $pAU_YR07 + $pAU_YR06 + $pAU_YR05 + $pAU_YR04
;
$at_age_vehicle['pold'] = $pAU_YR03 +$pAU_YR_02;
$at_age_vehicle['cnew'] = $cAU_YR13_ ;
$at_age_vehicle['c2_5'] = $cAU_YR12 +$cAU_YR11 + $cAU_YR10 + $cAU_YR09 ;
$at_age_vehicle['c5_10'] = $cAU_YR08 + $cAU_YR07 + $cAU_YR06 + $cAU_YR05 + $cAU_YR04
;
$at_age_vehicle['cold'] = $cAU_YR03 +$cAU_YR_02;
$at_age_vehicle['inew'] = min(500, $at_age_vehicle['pnew'] / $at_age_vehicle['cnew'] *100);
$at_age_vehicle['i2_5'] = min(500, $at_age_vehicle['p2_5'] / $at_age_vehicle['c2_5'] *100);
$at_age_vehicle['i5_10'] = min(500, $at_age_vehicle['p5_10'] / $at_age_vehicle['c5_10'] *100);
$at_age_vehicle['iold'] = min(500, $at_age_vehicle['pold'] / $at_age_vehicle['cold'] *100);
// maker $$ amount
$at_value['phigh'] = $pAU_MKCAD + $pAU_MKLIN +$pAU_MKACU + $pAU_MKAU_D +$pAU_MKBMW + $pAU_MKINF + $pAU_MKLEX + $pAU_MKBEN;
$at_value['chigh'] = $cAU_MKCAD + $cAU_MKLIN +$cAU_MKACU + $cAU_MKAU_D +$cAU_MKBMW + $cAU_MKINF + $cAU_MKLEX + $cAU_MKBEN;
$at_value['ihigh'] = min(500, $at_value['phigh'] / $at_value['chigh'] *100);
$at_value['plow'] = $pAU_MKBUI + $pAU_MKCHE + $pAU_MKCHR + $pAU_MKDOD + $pAU_MKFOR + $pAU_MKGMC + $pAU_MKJEE + $pAU_MKMER + $pAU_MKOLD + $pAU_MKPLY + $pAU_MKPON + $pAU_MKSAT + $pAU_MKDOM + $pAU_MKHON + $pAU_MKHYU + $pAU_MKKIA + $pAU_MKMAZ + $pAU_MKMIT + $pAU_MKNIS + $pAU_MKSUB + $pAU_MKSUZ + $pAU_MKTOY + $pAU_MKVW + $pAU_MKVOL + $pAU_MKFGN;
$at_value['clow'] = $cAU_MKBUI + $cAU_MKCHE + $cAU_MKCHR + $cAU_MKDOD + $cAU_MKFOR + $cAU_MKGMC + $cAU_MKJEE + $cAU_MKMER + $cAU_MKOLD + $cAU_MKPLY + $cAU_MKPON + $cAU_MKSAT + $cAU_MKDOM + $cAU_MKHON + $cAU_MKHYU + $cAU_MKKIA + $cAU_MKMAZ + $cAU_MKMIT + $cAU_MKNIS + $cAU_MKSUB + $cAU_MKSUZ + $cAU_MKTOY + $cAU_MKVW + $cAU_MKVOL + $cAU_MKFGN;
$at_value['ilow'] = min(500, $at_value['plow'] / $at_value['clow'] *100);
// number of vehicles
// maker by country 
$at_country['pgermany'] = $pAU_MKAU_D + $pAU_MKBMW + $pAU_MKBEN + $pAU_MKVW;
$at_country['cgermany'] = $cAU_MKAU_D + $cAU_MKBMW + $cAU_MKBEN + $cAU_MKVW;
$at_country['igermany'] = min(500, $at_country['pgermany'] / $at_country['cgermany'] *100);
$at_country['pdomestic'] = $pAU_MKBUI + $pAU_MKCAD + $pAU_MKCHE + $pAU_MKCHR + $pAU_MKDOD + $pAU_MKFOR + $pAU_MKGMC + $pAU_MKJEE + $pAU_MKLIN + $pAU_MKMER + $pAU_MKOLD + $pAU_MKPLY + $pAU_MKPON + $pAU_MKSAT + $pAU_MKDOM;
$at_country['cdomestic'] = $cAU_MKBUI + $cAU_MKCAD + $cAU_MKCHE + $cAU_MKCHR + $cAU_MKDOD + $cAU_MKFOR + $cAU_MKGMC + $cAU_MKJEE + $cAU_MKLIN + $cAU_MKMER + $cAU_MKOLD + $cAU_MKPLY + $cAU_MKPON + $cAU_MKSAT + $cAU_MKDOM;
$at_country['idomestic'] = min(500, $at_country['pdomestic'] / $at_country['cdomestic'] *100);
$at_country['pjapan'] = $pAU_MKACU + $pAU_MKHON + $pAU_MKINF + $pAU_MKLEX+ $pAU_MKMAZ + $pAU_MKMIT + $pAU_MKNIS + $pAU_MKSUB + $pAU_MKSUZ + $pAU_MKTOY;
$at_country['cjapan'] = $cAU_MKACU + $cAU_MKHON + $cAU_MKINF + $cAU_MKLEX+ $cAU_MKMAZ + $cAU_MKMIT + $cAU_MKNIS + $cAU_MKSUB + $cAU_MKSUZ + $cAU_MKTOY;
$at_country['ijapan']  = min(500, $at_country['pjapan']  / $at_country['cjapan']  *100);
$at_country['pother'] = $pAU_MKHYU + $pAU_MKKIA + $pAU_MKFGN + $pAU_MKVOL;
$at_country['cother'] = $cAU_MKHYU + $cAU_MKKIA + $cAU_MKFGN + $cAU_MKVOL;
$at_country['iother']  = min(500, $at_country['pother']  / $at_country['cother']  *100);
// total households evaluated
$at_total_hh = max(1,$AU_N0  + $AU_N1 + $AU_N2  + $AU_N3  + $AU_N4_) ;
$at_total_hh_multiplier = $hh_tot / $at_total_hh; 
$at_total['tot_vehicles'] = $AU_N1 * $at_total_hh_multiplier + $AU_N2 * $at_total_hh_multiplier * 2 + $AU_N3 * $at_total_hh_multiplier * 3 + $AU_N4_ * $at_total_hh_multiplier * 4.5;
// DORTED LISTS  --------------------------------------------------------------------
// sorted lists ----------------- service
$at_service['p'][] = $pAU_VSGR;
$at_service['p'][] = $pAU_VSAG;
$at_service['p'][] = $pAU_VSST;
$at_service['p'][] = $pAU_VSCT;
$at_service['p'][] = $pAU_VSCC;
$at_service['p'][] = $pAU_VSGM;
$at_service['p'][] = $pAU_VSGY;
$at_service['p'][] = $pAU_VSMC;
$at_service['p'][] = $pAU_VSMD;
$at_service['p'][] = $pAU_VSTR;
$at_service['p'][] = $pAU_VSLB;
$at_service['p'][] = $pAU_VSNP;
$at_service['p'][] = $pAU_VSOKT;
$at_service['p'][] = $pAU_VSPS;
$at_service['p'][] = $pAU_VSSG;
$at_service['p'][] = $pAU_VSSS;
$at_service['p'][] = $pAU_VSWM;
$at_service['p'][] = $pAU_VSDL;
$at_service['i'][] = $iAU_VSGR;
$at_service['i'][] = $iAU_VSAG;
$at_service['i'][] = $iAU_VSST;
$at_service['i'][] = $iAU_VSCT;
$at_service['i'][] = $iAU_VSCC;
$at_service['i'][] = $iAU_VSGM;
$at_service['i'][] = $iAU_VSGY;
$at_service['i'][] = $iAU_VSMC;
$at_service['i'][] = $iAU_VSMD;
$at_service['i'][] = $iAU_VSTR;
$at_service['i'][] = $iAU_VSLB;
$at_service['i'][] = $iAU_VSNP;
$at_service['i'][] = $iAU_VSOKT;
$at_service['i'][] = $iAU_VSPS;
$at_service['i'][] = $iAU_VSSG;
$at_service['i'][] = $iAU_VSSS;
$at_service['i'][] = $iAU_VSWM;
$at_service['i'][] = $iAU_VSDL;
$at_service['name'][] = "Active <br>Green & Ross";
$at_service['name'][] = "Apple <br> Auto Glass";
$at_service['name'][] = "Bridgestone<br>&nbsp;";
$at_service['name'][] = "Canadian Tire<br>&nbsp;";
$at_service['name'][] = "Costco<br>&nbsp;";
$at_service['name'][] = "GM Goodwrench<br>&nbsp;";
$at_service['name'][] = "Goodyear Select<br>&nbsp;";
$at_service['name'][] = "Maaco<br>&nbsp;";
$at_service['name'][] = "Midas Auto <br>Service";
$at_service['name'][] = "Mister <br>Transmission";
$at_service['name'][] = "Mr. Lube<br>&nbsp;";
$at_service['name'][] = "NAPA <br> Auto Parts";
$at_service['name'][] = "OK Tire<br>&nbsp;";
$at_service['name'][] = "PartSource<br>&nbsp;";
$at_service['name'][] = "Speedy <br>Auto Glass";
$at_service['name'][] = "Speedy <br>Auto Service";
$at_service['name'][] = "Walmart<br>&nbsp;";
$at_service['name'][] = "Car dealership<br>&nbsp;";
// sort service 
arsort($at_service['p']);
foreach ($at_service['p'] as $key => $val) {
$at_service['sort_name'][] = $at_service['name'][$key];
$at_service['sort_p'][] = number_format($at_service['p'][$key],1);
$at_service['sort_i'][] = number_format($at_service['i'][$key],0);
}
// improvement
// create percentage
$pDW_PUNEW = round($DW_PUNEW / $hh_tot *100,3);
$pDW_PUOWN = round($DW_PUOWN / $hh_tot *100,3);
$pDW_N1STHM = round($DW_N1STHM / $hh_tot *100,3);
$pDW_1STHM = round($DW_1STHM / $hh_tot *100,3);
$pDW_RE1Y = round($DW_RE1Y / $hh_tot *100,3);
$pDW_RE5Y = round($DW_RE5Y / $hh_tot *100,3);
$pDW_RE10Y = round($DW_RE10Y / $hh_tot *100,3);
$pDW_RE19Y = round($DW_RE19Y / $hh_tot *100,3);
$pDW_RE20_Y = round($DW_RE20_Y / $hh_tot *100,3);
$pDW_RASPACE = round($DW_RASPACE / $hh_tot *100,3);
$pDW_RAGARG = round($DW_RAGARG / $hh_tot *100,3);
$pDW_RADRAP = round($DW_RADRAP / $hh_tot *100,3);
$pDW_RADECK = round($DW_RADECK / $hh_tot *100,3);
$pDW_RAELEC = round($DW_RAELEC / $hh_tot *100,3);
$pDW_RAENG = round($DW_RAENG / $hh_tot *100,3);
$pDW_RAEPAIN = round($DW_RAEPAIN / $hh_tot *100,3);
$pDW_RATILE = round($DW_RATILE / $hh_tot *100,3);
$pDW_RAFLOO = round($DW_RAFLOO / $hh_tot *100,3);
$pDW_RAHVAC = round($DW_RAHVAC / $hh_tot *100,3);
$pDW_RASECU = round($DW_RASECU / $hh_tot *100,3);
$pDW_RAWIND = round($DW_RAWIND / $hh_tot *100,3);
$pDW_RAIPAIN = round($DW_RAIPAIN / $hh_tot *100,3);
$pDW_RALAND = round($DW_RALAND / $hh_tot *100,3);
$pDW_RAPLUM = round($DW_RAPLUM / $hh_tot *100,3);
$pDW_RABATH = round($DW_RABATH / $hh_tot *100,3);
$pDW_RAKITC = round($DW_RAKITC / $hh_tot *100,3);
$pDW_RAORM = round($DW_RAORM / $hh_tot *100,3);
$pDW_RAROOF = round($DW_RAROOF / $hh_tot *100,3);
$pDW_RAPOOL = round($DW_RAPOOL / $hh_tot *100,3);
$pDW_RACARP = round($DW_RACARP / $hh_tot *100,3);
$pDW_RAOTHE = round($DW_RAOTHE / $hh_tot *100,3);
$pDW_HMINSP = round($DW_HMINSP / $hh_tot *100,3);
$pDW_MTGBRK = round($DW_MTGBRK / $hh_tot *100,3);
$pDW_MVCOMP = round($DW_MVCOMP / $hh_tot *100,3);
$pDW_REAGNT = round($DW_REAGNT / $hh_tot *100,3);
$pDW_RELAWY = round($DW_RELAWY / $hh_tot *100,3);
$pDW_PHMINSP = round($DW_PHMINSP / $hh_tot *100,3);
$pDW_PMTGBRK = round($DW_PMTGBRK / $hh_tot *100,3);
$pDW_PMVCOMP = round($DW_PMVCOMP / $hh_tot *100,3);
$pDW_PREAGNT = round($DW_PREAGNT / $hh_tot *100,3);
$pDW_PRELAWY = round($DW_PRELAWY / $hh_tot *100,3);
$pDW_SPSELF = round($DW_SPSELF / $hh_tot *100,3);
$pDW_SPCONT = round($DW_SPCONT / $hh_tot *100,3);
$pDW_GRGSELF = round($DW_GRGSELF / $hh_tot *100,3);
$pDW_GRGCONT = round($DW_GRGCONT / $hh_tot *100,3);
$pDW_DRSELF = round($DW_DRSELF / $hh_tot *100,3);
$pDW_DRCONT = round($DW_DRCONT / $hh_tot *100,3);
$pDW_DKSELF = round($DW_DKSELF / $hh_tot *100,3);
$pDW_DKCONT = round($DW_DKCONT / $hh_tot *100,3);
$pDW_ELSELF = round($DW_ELSELF / $hh_tot *100,3);
$pDW_ELCONT = round($DW_ELCONT / $hh_tot *100,3);
$pDW_ENSELF = round($DW_ENSELF / $hh_tot *100,3);
$pDW_ENCONT = round($DW_ENCONT / $hh_tot *100,3);
$pDW_EPSELF = round($DW_EPSELF / $hh_tot *100,3);
$pDW_EPCONT = round($DW_EPCONT / $hh_tot *100,3);
$pDW_TISELF = round($DW_TISELF / $hh_tot *100,3);
$pDW_TICONT = round($DW_TICONT / $hh_tot *100,3);
$pDW_FLSELF = round($DW_FLSELF / $hh_tot *100,3);
$pDW_FLCONT = round($DW_FLCONT / $hh_tot *100,3);
$pDW_HVSELF = round($DW_HVSELF / $hh_tot *100,3);
$pDW_HVCONT = round($DW_HVCONT / $hh_tot *100,3);
$pDW_SESELF = round($DW_SESELF / $hh_tot *100,3);
$pDW_SECONT = round($DW_SECONT / $hh_tot *100,3);
$pDW_WISELF = round($DW_WISELF / $hh_tot *100,3);
$pDW_WICONT = round($DW_WICONT / $hh_tot *100,3);
$pDW_IPSELF = round($DW_IPSELF / $hh_tot *100,3);
$pDW_IPCONT = round($DW_IPCONT / $hh_tot *100,3);
$pDW_LASELF = round($DW_LASELF / $hh_tot *100,3);
$pDW_LACONT = round($DW_LACONT / $hh_tot *100,3);
$pDW_PLSELF = round($DW_PLSELF / $hh_tot *100,3);
$pDW_PLCONT = round($DW_PLCONT / $hh_tot *100,3);
$pDW_BTSELF = round($DW_BTSELF / $hh_tot *100,3);
$pDW_BTCONT = round($DW_BTCONT / $hh_tot *100,3);
$pDW_KISELF = round($DW_KISELF / $hh_tot *100,3);
$pDW_KICONT = round($DW_KICONT / $hh_tot *100,3);
$pDW_ORSELF = round($DW_ORSELF / $hh_tot *100,3);
$pDW_ORCONT = round($DW_ORCONT / $hh_tot *100,3);
$pDW_RFSELF = round($DW_RFSELF / $hh_tot *100,3);
$pDW_RFCONT = round($DW_RFCONT / $hh_tot *100,3);
$pDW_POSELF = round($DW_POSELF / $hh_tot *100,3);
$pDW_POCONT = round($DW_POCONT / $hh_tot *100,3);
$pDW_CPSELF = round($DW_CPSELF / $hh_tot *100,3);
$pDW_CPCONT = round($DW_CPCONT / $hh_tot *100,3);
$pDW_OHSELF = round($DW_OHSELF / $hh_tot *100,3);
$pDW_OHCONT = round($DW_OHCONT / $hh_tot *100,3);
$pDW_SP0 = round($DW_SP0 / $hh_tot *100,3);
$pDW_SP999 = round($DW_SP999 / $hh_tot *100,3);
$pDW_SP2499 = round($DW_SP2499 / $hh_tot *100,3);
$pDW_SP4999 = round($DW_SP4999 / $hh_tot *100,3);
$pDW_SP9999 = round($DW_SP9999 / $hh_tot *100,3);
$pDW_SP19999 = round($DW_SP19999 / $hh_tot *100,3);
$pDW_SP20000 = round($DW_SP20000 / $hh_tot *100,3);
$pDW_NALARM = round($DW_NALARM / $hh_tot *100,3);
$pDW_ALARM = round($DW_ALARM / $hh_tot *100,3);
$pDW_GDSERV = round($DW_GDSERV / $hh_tot *100,3);
$pDW_MDSERV = round($DW_MDSERV / $hh_tot *100,3);
$pDW_PCSERV = round($DW_PCSERV / $hh_tot *100,3);
// dw variables
$pDW_TOT = round($DW_TOT / $DW_TOT *100,3);
$pDW_SINGLE = round($DW_SINGLE / $DW_TOT *100,3);
$pDW_APT5_ = round($DW_APT5_ / $DW_TOT *100,3);
$pDW_MOVA = round($DW_MOVA / $DW_TOT *100,3);
$pDW_OT = round($DW_OT / $DW_TOT *100,3);
$pDW_SEMI = round($DW_SEMI / $DW_TOT *100,3);
$pDW_DUP = round($DW_DUP / $DW_TOT *100,3);
$pDW_ROW = round($DW_ROW / $DW_TOT *100,3);
$pDW_APT_5 = round($DW_APT_5 / $DW_TOT *100,3);
$pDW_OT_SING = round($DW_OT_SING / $DW_TOT *100,3);
//special
$pDW_AVALUE = round($DW_AVALUE / $DW_TOT,3);
$pDW_MVALUE = round($DW_MVALUE / $DW_TOT,3);
$pDW_TOTDWLG = round($DW_TOTDWLG / $DW_TOT *100,3);
$pDW_REGMIN = round($DW_REGMIN / $DW_TOT *100,3);
$pDW_MAJORRE = round($DW_MAJORRE / $DW_TOT *100,3);
$pDW_TOTDWL2 = round($DW_TOTDWL2 / $DW_TOT *100,3);
$pDW_CON_60 = round($DW_CON_60 / $DW_TOT *100,3);
$pDW_CON6180 = round($DW_CON6180 / $DW_TOT *100,3);
$pDW_CON8190 = round($DW_CON8190 / $DW_TOT *100,3);
$pDW_CON9100 = round($DW_CON9100 / $DW_TOT *100,3);
$pDW_CON0105 = round($DW_CON0105 / $DW_TOT *100,3);
$pDW_CON0611 = round($DW_CON0611 / $DW_TOT *100,3);
$pDW_CON12_ = round($DW_CON12_ / $DW_TOT *100,3);
$pDW_TOTDWL3 = round($DW_TOTDWL3 / $DW_TOT *100,3);
$pDW_RM_4 = round($DW_RM_4 / $DW_TOT *100,3);
$pDW_RM5 = round($DW_RM5 / $DW_TOT *100,3);
$pDW_RM6 = round($DW_RM6 / $DW_TOT *100,3);
$pDW_RM7 = round($DW_RM7 / $DW_TOT *100,3);
$pDW_RM8_ = round($DW_RM8_ / $DW_TOT *100,3);
//special
$pDW_ARMSPDW = round($DW_ARMSPDW / $DW_TOT,3);
$pDW_TOTDWL4 = round($DW_TOTDWL4 / $DW_TOT *100,3);
$pDW_BRM_1 = round($DW_BRM_1 / $DW_TOT *100,3);
$pDW_BRM2 = round($DW_BRM2 / $DW_TOT *100,3);
$pDW_BRM3 = round($DW_BRM3 / $DW_TOT *100,3);
$pDW_BRM4_ = round($DW_BRM4_ / $DW_TOT *100,3);
$pDW_TOTDWL5 = round($DW_TOTDWL5 / $DW_TOT *100,3);
$pDW_OWNED = round($DW_OWNED / $DW_TOT *100,3);
$pDW_RENTED = round($DW_RENTED / $DW_TOT *100,3);
$pDW_BANDH = round($DW_BANDH / $DW_TOT *100,3);
$pDW_TOTDWL6 = round($DW_TOTDWL6 / $DW_TOT *100,3);
$pDW_PTCON = round($DW_PTCON / $DW_TOT *100,3);
$pDW_NPTCON = round($DW_NPTCON / $DW_TOT *100,3);
$pDW_TOTDWL7 = round($DW_TOTDWL7 / $DW_TOT *100,3);
$pDW_MT1 = round($DW_MT1 / $DW_TOT *100,3);
$pDW_MT2 = round($DW_MT2 / $DW_TOT *100,3);
$pDW_MT3_ = round($DW_MT3_ / $DW_TOT *100,3);
$pDW_TOTDWL8 = round($DW_TOTDWL8 / $DW_TOT *100,3);
$pDW_MT_25 = round($DW_MT_25 / $DW_TOT *100,3);
$pDW_MT2534 = round($DW_MT2534 / $DW_TOT *100,3);
$pDW_MT3544 = round($DW_MT3544 / $DW_TOT *100,3);
$pDW_MT4554 = round($DW_MT4554 / $DW_TOT *100,3);
$pDW_MT5564 = round($DW_MT5564 / $DW_TOT *100,3);
$pDW_MT6574 = round($DW_MT6574 / $DW_TOT *100,3);
$pDW_MT75_ = round($DW_MT75_ / $DW_TOT *100,3);
$pDW_TOTDWL9 = round($DW_TOTDWL9 / $DW_TOT *100,3);
$pDW_PPR_1 = round($DW_PPR_1 / $DW_TOT *100,3);
$pDW_PPR2_ = round($DW_PPR2_ / $DW_TOT *100,3);
$pDW_TOTDWLA = round($DW_TOTDWLA / $DW_TOT *100,3);
$pDW_SUIT = round($DW_SUIT / $DW_TOT *100,3);
$pDW_NSUIT = round($DW_NSUIT / $DW_TOT *100,3);
$pDW_MCOST = round($DW_MCOST / $DW_TOT *100,3);
$pDW_ACOST = round($DW_ACOST / $DW_TOT *100,3);
$pH_CANTR = round($H_CANTR / $pp15_*100,3);
$pH_DEPOT = round($H_DEPOT / $pp15_*100,3);
$pH_HWARE = round($H_HWARE / $pp15_*100,3);
$pH_OUTFT = round($H_OUTFT / $pp15_*100,3);
$pH_SENSE = round($H_SENSE / $pp15_*100,3);
$pH_INDEP = round($H_INDEP / $pp15_*100,3);
$pH_LEE = round($H_LEE / $pp15_*100,3);
$pH_LIGHT = round($H_LIGHT / $pp15_*100,3);
$pH_LOWE = round($H_LOWE / $pp15_*100,3);
$pH_RONA = round($H_RONA / $pp15_*100,3);
$pH_DEPT = round($H_DEPT / $pp15_*100,3);
$pH_OL = round($H_OL / $pp15_*100,3);
$pH_OTHDEC = round($H_OTHDEC / $pp15_*100,3);
$pH_OTHIMP = round($H_OTHIMP / $pp15_*100,3);
$pH_CANTR_R = round($H_CANTR_R / $pp15_*100,3);
$pH_DEPOT_R = round($H_DEPOT_R / $pp15_*100,3);
$pH_HWARE_R = round($H_HWARE_R / $pp15_*100,3);
$pH_OUTFT_R = round($H_OUTFT_R / $pp15_*100,3);
$pH_SENSE_R = round($H_SENSE_R / $pp15_*100,3);
$pH_INDEP_R = round($H_INDEP_R / $pp15_*100,3);
$pH_LEE_R = round($H_LEE_R / $pp15_*100,3);
$pH_LIGHT_R = round($H_LIGHT_R / $pp15_*100,3);
$pH_LOWE_R = round($H_LOWE_R / $pp15_*100,3);
$pH_RONA_R = round($H_RONA_R / $pp15_*100,3);
$pH_DEPT_R = round($H_DEPT_R / $pp15_*100,3);
$pH_OL_R = round($H_OL_R / $pp15_*100,3);
$pH_OTHDEC_R = round($H_OTHDEC_R / $pp15_*100,3);
$pH_OTHIMP_R = round($H_OTHIMP_R / $pp15_*100,3);
$pH_CANTR_O = round($H_CANTR_O / $pp15_*100,3);
$pH_DEPOT_O = round($H_DEPOT_O / $pp15_*100,3);
$pH_HWARE_O = round($H_HWARE_O / $pp15_*100,3);
$pH_OUTFT_O = round($H_OUTFT_O / $pp15_*100,3);
$pH_SENSE_O = round($H_SENSE_O / $pp15_*100,3);
$pH_INDEP_O = round($H_INDEP_O / $pp15_*100,3);
$pH_LEE_O = round($H_LEE_O / $pp15_*100,3);
$pH_LIGHT_O = round($H_LIGHT_O / $pp15_*100,3);
$pH_LOWE_O = round($H_LOWE_O / $pp15_*100,3);
$pH_RONA_O = round($H_RONA_O / $pp15_*100,3);
$pH_DEPT_O = round($H_DEPT_O / $pp15_*100,3);
$pH_OL_O = round($H_OL_O / $pp15_*100,3);
$pH_OTHDEC_O = round($H_OTHDEC_O / $pp15_*100,3);
$pH_OTHIMP_O = round($H_OTHIMP_O / $pp15_*100,3);
$pPC_BBFUR = round($PC_BBFUR / $hh_tot*100,3);
$pPC_BED = round($PC_BED / $hh_tot*100,3);
$pPC_OFFFUR = round($PC_OFFFUR / $hh_tot*100,3);
$pPC_CARALRM = round($PC_CARALRM / $hh_tot*100,3);
$pPC_CARSTR = round($PC_CARSTR / $hh_tot*100,3);
$pPC_CMRAFLM = round($PC_CMRAFLM / $hh_tot*100,3);
$pPC_CMPEQP = round($PC_CMPEQP / $hh_tot*100,3);
$pPC_CMPTRL = round($PC_CMPTRL / $hh_tot*100,3);
$pPC_EREADER = round($PC_EREADER / $hh_tot*100,3);
$pPC_GRPTFUR = round($PC_GRPTFUR / $hh_tot*100,3);
$pPC_GASBBQ = round($PC_GASBBQ / $hh_tot*100,3);
$pPC_FIREPLC = round($PC_FIREPLC / $hh_tot*100,3);
$pPC_GPS = round($PC_GPS / $hh_tot*100,3);
$pPC_GOLFEQP = round($PC_GOLFEQP / $hh_tot*100,3);
$pPC_HOCKEY = round($PC_HOCKEY / $hh_tot*100,3);
$pPC_HOTTUB = round($PC_HOTTUB / $hh_tot*100,3);
$pPC_EXCEQP = round($PC_EXCEQP / $hh_tot*100,3);
$pPC_APPLIAN = round($PC_APPLIAN / $hh_tot*100,3);
$pPC_MOTORCY = round($PC_MOTORCY / $hh_tot*100,3);
$pPC_MINSTR = round($PC_MINSTR / $hh_tot*100,3);
$pPC_OFFEQP = round($PC_OFFEQP / $hh_tot*100,3);
$pPC_MP3 = round($PC_MP3 / $hh_tot*100,3);
$pPC_PC = round($PC_PC / $hh_tot*100,3);
$pPC_PCSW = round($PC_PCSW / $hh_tot*100,3);
$pPC_PRNT = round($PC_PRNT / $hh_tot*100,3);
$pPC_POOL = round($PC_POOL / $hh_tot*100,3);
$pPC_PRAFUNE = round($PC_PRAFUNE / $hh_tot*100,3);
$pPC_BOAT = round($PC_BOAT / $hh_tot*100,3);
$pPC_SKIEQP = round($PC_SKIEQP / $hh_tot*100,3);
$pPC_SNOWMBL = round($PC_SNOWMBL / $hh_tot*100,3);
$pPC_STEREO = round($PC_STEREO / $hh_tot*100,3);
$pPC_TV = round($PC_TV / $hh_tot*100,3);
$pPC_TIRE = round($PC_TIRE / $hh_tot*100,3);
$pPC_VACUUM = round($PC_VACUUM / $hh_tot*100,3);
$pPC_VDOEQP = round($PC_VDOEQP / $hh_tot*100,3);
$pPC_GMSYS = round($PC_GMSYS / $hh_tot*100,3);
$pPC_WEDSVR = round($PC_WEDSVR / $hh_tot*100,3);
$pPI_BBFUR = round($PI_BBFUR / $hh_tot*100,3);
$pPI_BED = round($PI_BED / $hh_tot*100,3);
$pPI_OFFFUR = round($PI_OFFFUR / $hh_tot*100,3);
$pPI_CARALRM = round($PI_CARALRM / $hh_tot*100,3);
$pPI_CARSTR = round($PI_CARSTR / $hh_tot*100,3);
$pPI_CMRAFLM = round($PI_CMRAFLM / $hh_tot*100,3);
$pPI_CMPEQP = round($PI_CMPEQP / $hh_tot*100,3);
$pPI_CMPTRL = round($PI_CMPTRL / $hh_tot*100,3);
$pPI_EREADER = round($PI_EREADER / $hh_tot*100,3);
$pPI_GRPTFUR = round($PI_GRPTFUR / $hh_tot*100,3);
$pPI_GASBBQ = round($PI_GASBBQ / $hh_tot*100,3);
$pPI_FIREPLC = round($PI_FIREPLC / $hh_tot*100,3);
$pPI_GPS = round($PI_GPS / $hh_tot*100,3);
$pPI_GOLFEQP = round($PI_GOLFEQP / $hh_tot*100,3);
$pPI_HOCKEY = round($PI_HOCKEY / $hh_tot*100,3);
$pPI_HOTTUB = round($PI_HOTTUB / $hh_tot*100,3);
$pPI_EXCEQP = round($PI_EXCEQP / $hh_tot*100,3);
$pPI_APPLIAN = round($PI_APPLIAN / $hh_tot*100,3);
$pPI_MOTORCY = round($PI_MOTORCY / $hh_tot*100,3);
$pPI_MINSTR = round($PI_MINSTR / $hh_tot*100,3);
$pPI_OFFEQP = round($PI_OFFEQP / $hh_tot*100,3);
$pPI_MP3 = round($PI_MP3 / $hh_tot*100,3);
$pPI_PC = round($PI_PC / $hh_tot*100,3);
$pPI_PCSW = round($PI_PCSW / $hh_tot*100,3);
$pPI_PRNT = round($PI_PRNT / $hh_tot*100,3);
$pPI_POOL = round($PI_POOL / $hh_tot*100,3);
$pPI_PRAFUNE = round($PI_PRAFUNE / $hh_tot*100,3);
$pPI_BOAT = round($PI_BOAT / $hh_tot*100,3);
$pPI_SKIEQP = round($PI_SKIEQP / $hh_tot*100,3);
$pPI_SNOWMBL = round($PI_SNOWMBL / $hh_tot*100,3);
$pPI_STEREO = round($PI_STEREO / $hh_tot*100,3);
$pPI_TV = round($PI_TV / $hh_tot*100,3);
$pPI_TIRE = round($PI_TIRE / $hh_tot*100,3);
$pPI_VACUUM = round($PI_VACUUM / $hh_tot*100,3);
$pPI_VDOEQP = round($PI_VDOEQP / $hh_tot*100,3);
$pPI_GMSYS = round($PI_GMSYS / $hh_tot*100,3);
$pPI_WEDSVR = round($PI_WEDSVR / $hh_tot*100,3);
$pSP_GSNO = round($SP_GSNO / $pp15_*100,3);
$pSP_GS249 = round($SP_GS249 / $pp15_*100,3);
$pSP_GS499 = round($SP_GS499 / $pp15_*100,3);
$pSP_GS500 = round($SP_GS500 / $pp15_*100,3);
$pSP_HDNO = round($SP_HDNO / $pp15_*100,3);
$pSP_HD249 = round($SP_HD249 / $pp15_*100,3);
$pSP_HD499 = round($SP_HD499 / $pp15_*100,3);
$pSP_HD500 = round($SP_HD500 / $pp15_*100,3);
$pSP_PTNO = round($SP_PTNO / $pp15_*100,3);
$pSP_PT249 = round($SP_PT249 / $pp15_*100,3);
$pSP_PT499 = round($SP_PT499 / $pp15_*100,3);
$pSP_PT500 = round($SP_PT500 / $pp15_*100,3);
$iDW_PUNEW = min(500,$pDW_PUNEW / $cDW_PUNEW *100);
$iDW_PUOWN = min(500,$pDW_PUOWN / $cDW_PUOWN *100);
$iDW_N1STHM = min(500,$pDW_N1STHM / $cDW_N1STHM *100);
$iDW_1STHM = min(500,$pDW_1STHM / $cDW_1STHM *100);
$iDW_RE1Y = min(500,$pDW_RE1Y / $cDW_RE1Y *100);
$iDW_RE5Y = min(500,$pDW_RE5Y / $cDW_RE5Y *100);
$iDW_RE10Y = min(500,$pDW_RE10Y / $cDW_RE10Y *100);
$iDW_RE19Y = min(500,$pDW_RE19Y / $cDW_RE19Y *100);
$iDW_RE20_Y = min(500,$pDW_RE20_Y / $cDW_RE20_Y *100);
$iDW_RASPACE = min(500,$pDW_RASPACE / $cDW_RASPACE *100);
$iDW_RAGARG = min(500,$pDW_RAGARG / $cDW_RAGARG *100);
$iDW_RADRAP = min(500,$pDW_RADRAP / $cDW_RADRAP *100);
$iDW_RADECK = min(500,$pDW_RADECK / $cDW_RADECK *100);
$iDW_RAELEC = min(500,$pDW_RAELEC / $cDW_RAELEC *100);
$iDW_RAENG = min(500,$pDW_RAENG / $cDW_RAENG *100);
$iDW_RAEPAIN = min(500,$pDW_RAEPAIN / $cDW_RAEPAIN *100);
$iDW_RATILE = min(500,$pDW_RATILE / $cDW_RATILE *100);
$iDW_RAFLOO = min(500,$pDW_RAFLOO / $cDW_RAFLOO *100);
$iDW_RAHVAC = min(500,$pDW_RAHVAC / $cDW_RAHVAC *100);
$iDW_RASECU = min(500,$pDW_RASECU / $cDW_RASECU *100);
$iDW_RAWIND = min(500,$pDW_RAWIND / $cDW_RAWIND *100);
$iDW_RAIPAIN = min(500,$pDW_RAIPAIN / $cDW_RAIPAIN *100);
$iDW_RALAND = min(500,$pDW_RALAND / $cDW_RALAND *100);
$iDW_RAPLUM = min(500,$pDW_RAPLUM / $cDW_RAPLUM *100);
$iDW_RABATH = min(500,$pDW_RABATH / $cDW_RABATH *100);
$iDW_RAKITC = min(500,$pDW_RAKITC / $cDW_RAKITC *100);
$iDW_RAORM = min(500,$pDW_RAORM / $cDW_RAORM *100);
$iDW_RAROOF = min(500,$pDW_RAROOF / $cDW_RAROOF *100);
$iDW_RAPOOL = min(500,$pDW_RAPOOL / $cDW_RAPOOL *100);
$iDW_RACARP = min(500,$pDW_RACARP / $cDW_RACARP *100);
$iDW_RAOTHE = min(500,$pDW_RAOTHE / $cDW_RAOTHE *100);
$iDW_HMINSP = min(500,$pDW_HMINSP / $cDW_HMINSP *100);
$iDW_MTGBRK = min(500,$pDW_MTGBRK / $cDW_MTGBRK *100);
$iDW_MVCOMP = min(500,$pDW_MVCOMP / $cDW_MVCOMP *100);
$iDW_REAGNT = min(500,$pDW_REAGNT / $cDW_REAGNT *100);
$iDW_RELAWY = min(500,$pDW_RELAWY / $cDW_RELAWY *100);
$iDW_PHMINSP = min(500,$pDW_PHMINSP / $cDW_PHMINSP *100);
$iDW_PMTGBRK = min(500,$pDW_PMTGBRK / $cDW_PMTGBRK *100);
$iDW_PMVCOMP = min(500,$pDW_PMVCOMP / $cDW_PMVCOMP *100);
$iDW_PREAGNT = min(500,$pDW_PREAGNT / $cDW_PREAGNT *100);
$iDW_PRELAWY = min(500,$pDW_PRELAWY / $cDW_PRELAWY *100);
$iDW_SPSELF = min(500,$pDW_SPSELF / $cDW_SPSELF *100);
$iDW_SPCONT = min(500,$pDW_SPCONT / $cDW_SPCONT *100);
$iDW_GRGSELF = min(500,$pDW_GRGSELF / $cDW_GRGSELF *100);
$iDW_GRGCONT = min(500,$pDW_GRGCONT / $cDW_GRGCONT *100);
$iDW_DRSELF = min(500,$pDW_DRSELF / $cDW_DRSELF *100);
$iDW_DRCONT = min(500,$pDW_DRCONT / $cDW_DRCONT *100);
$iDW_DKSELF = min(500,$pDW_DKSELF / $cDW_DKSELF *100);
$iDW_DKCONT = min(500,$pDW_DKCONT / $cDW_DKCONT *100);
$iDW_ELSELF = min(500,$pDW_ELSELF / $cDW_ELSELF *100);
$iDW_ELCONT = min(500,$pDW_ELCONT / $cDW_ELCONT *100);
$iDW_ENSELF = min(500,$pDW_ENSELF / $cDW_ENSELF *100);
$iDW_ENCONT = min(500,$pDW_ENCONT / $cDW_ENCONT *100);
$iDW_EPSELF = min(500,$pDW_EPSELF / $cDW_EPSELF *100);
$iDW_EPCONT = min(500,$pDW_EPCONT / $cDW_EPCONT *100);
$iDW_TISELF = min(500,$pDW_TISELF / $cDW_TISELF *100);
$iDW_TICONT = min(500,$pDW_TICONT / $cDW_TICONT *100);
$iDW_FLSELF = min(500,$pDW_FLSELF / $cDW_FLSELF *100);
$iDW_FLCONT = min(500,$pDW_FLCONT / $cDW_FLCONT *100);
$iDW_HVSELF = min(500,$pDW_HVSELF / $cDW_HVSELF *100);
$iDW_HVCONT = min(500,$pDW_HVCONT / $cDW_HVCONT *100);
$iDW_SESELF = min(500,$pDW_SESELF / $cDW_SESELF *100);
$iDW_SECONT = min(500,$pDW_SECONT / $cDW_SECONT *100);
$iDW_WISELF = min(500,$pDW_WISELF / $cDW_WISELF *100);
$iDW_WICONT = min(500,$pDW_WICONT / $cDW_WICONT *100);
$iDW_IPSELF = min(500,$pDW_IPSELF / $cDW_IPSELF *100);
$iDW_IPCONT = min(500,$pDW_IPCONT / $cDW_IPCONT *100);
$iDW_LASELF = min(500,$pDW_LASELF / $cDW_LASELF *100);
$iDW_LACONT = min(500,$pDW_LACONT / $cDW_LACONT *100);
$iDW_PLSELF = min(500,$pDW_PLSELF / $cDW_PLSELF *100);
$iDW_PLCONT = min(500,$pDW_PLCONT / $cDW_PLCONT *100);
$iDW_BTSELF = min(500,$pDW_BTSELF / $cDW_BTSELF *100);
$iDW_BTCONT = min(500,$pDW_BTCONT / $cDW_BTCONT *100);
$iDW_KISELF = min(500,$pDW_KISELF / $cDW_KISELF *100);
$iDW_KICONT = min(500,$pDW_KICONT / $cDW_KICONT *100);
$iDW_ORSELF = min(500,$pDW_ORSELF / $cDW_ORSELF *100);
$iDW_ORCONT = min(500,$pDW_ORCONT / $cDW_ORCONT *100);
$iDW_RFSELF = min(500,$pDW_RFSELF / $cDW_RFSELF *100);
$iDW_RFCONT = min(500,$pDW_RFCONT / $cDW_RFCONT *100);
$iDW_POSELF = min(500,$pDW_POSELF / $cDW_POSELF *100);
$iDW_POCONT = min(500,$pDW_POCONT / $cDW_POCONT *100);
$iDW_CPSELF = min(500,$pDW_CPSELF / $cDW_CPSELF *100);
$iDW_CPCONT = min(500,$pDW_CPCONT / $cDW_CPCONT *100);
$iDW_OHSELF = min(500,$pDW_OHSELF / $cDW_OHSELF *100);
$iDW_OHCONT = min(500,$pDW_OHCONT / $cDW_OHCONT *100);
$iDW_SP0 = min(500,$pDW_SP0 / $cDW_SP0 *100);
$iDW_SP999 = min(500,$pDW_SP999 / $cDW_SP999 *100);
$iDW_SP2499 = min(500,$pDW_SP2499 / $cDW_SP2499 *100);
$iDW_SP4999 = min(500,$pDW_SP4999 / $cDW_SP4999 *100);
$iDW_SP9999 = min(500,$pDW_SP9999 / $cDW_SP9999 *100);
$iDW_SP19999 = min(500,$pDW_SP19999 / $cDW_SP19999 *100);
$iDW_SP20000 = min(500,$pDW_SP20000 / $cDW_SP20000 *100);
$iDW_NALARM = min(500,$pDW_NALARM / $cDW_NALARM *100);
$iDW_ALARM = min(500,$pDW_ALARM / $cDW_ALARM *100);
$iDW_GDSERV = min(500,$pDW_GDSERV / $cDW_GDSERV *100);
$iDW_MDSERV = min(500,$pDW_MDSERV / $cDW_MDSERV *100);
$iDW_PCSERV = min(500,$pDW_PCSERV / $cDW_PCSERV *100);
// index dw 
$iDW_TOT = min(500,$pDW_TOT / $cDW_TOT *100);
$iDW_SINGLE = min(500,$pDW_SINGLE / $cDW_SINGLE *100);
$iDW_APT5_ = min(500,$pDW_APT5_ / $cDW_APT5_ *100);
$iDW_MOVA = min(500,$pDW_MOVA / $cDW_MOVA *100);
$iDW_OT = min(500,$pDW_OT / $cDW_OT *100);
$iDW_SEMI = min(500,$pDW_SEMI / $cDW_SEMI *100);
$iDW_DUP = min(500,$pDW_DUP / $cDW_DUP *100);
$iDW_ROW = min(500,$pDW_ROW / $cDW_ROW *100);
$iDW_APT_5 = min(500,$pDW_APT_5 / $cDW_APT_5 *100);
$iDW_OT_SING = min(500,$pDW_OT_SING / $cDW_OT_SING *100);
$iDW_AVALUE = min(500,$pDW_AVALUE / $cDW_AVALUE *100);
$iDW_MVALUE = min(500,$pDW_MVALUE / $cDW_MVALUE *100);
$iDW_TOTDWLG = min(500,$pDW_TOTDWLG / $cDW_TOTDWLG *100);
$iDW_REGMIN = min(500,$pDW_REGMIN / $cDW_REGMIN *100);
$iDW_MAJORRE = min(500,$pDW_MAJORRE / $cDW_MAJORRE *100);
$iDW_TOTDWL2 = min(500,$pDW_TOTDWL2 / $cDW_TOTDWL2 *100);
$iDW_CON_60 = min(500,$pDW_CON_60 / $cDW_CON_60 *100);
$iDW_CON6180 = min(500,$pDW_CON6180 / $cDW_CON6180 *100);
$iDW_CON8190 = min(500,$pDW_CON8190 / $cDW_CON8190 *100);
$iDW_CON9100 = min(500,$pDW_CON9100 / $cDW_CON9100 *100);
$iDW_CON0105 = min(500,$pDW_CON0105 / $cDW_CON0105 *100);
$iDW_CON0611 = min(500,$pDW_CON0611 / $cDW_CON0611 *100);
$iDW_CON12_ = min(500,$pDW_CON12_ / $cDW_CON12_ *100);
$iDW_TOTDWL3 = min(500,$pDW_TOTDWL3 / $cDW_TOTDWL3 *100);
$iDW_RM_4 = min(500,$pDW_RM_4 / $cDW_RM_4 *100);
$iDW_RM5 = min(500,$pDW_RM5 / $cDW_RM5 *100);
$iDW_RM6 = min(500,$pDW_RM6 / $cDW_RM6 *100);
$iDW_RM7 = min(500,$pDW_RM7 / $cDW_RM7 *100);
$iDW_RM8_ = min(500,$pDW_RM8_ / $cDW_RM8_ *100);
$iDW_ARMSPDW = min(500,$pDW_ARMSPDW / $cDW_ARMSPDW *100);
$iDW_TOTDWL4 = min(500,$pDW_TOTDWL4 / $cDW_TOTDWL4 *100);
$iDW_BRM_1 = min(500,$pDW_BRM_1 / $cDW_BRM_1 *100);
$iDW_BRM2 = min(500,$pDW_BRM2 / $cDW_BRM2 *100);
$iDW_BRM3 = min(500,$pDW_BRM3 / $cDW_BRM3 *100);
$iDW_BRM4_ = min(500,$pDW_BRM4_ / $cDW_BRM4_ *100);
$iDW_TOTDWL5 = min(500,$pDW_TOTDWL5 / $cDW_TOTDWL5 *100);
$iDW_OWNED = min(500,$pDW_OWNED / $cDW_OWNED *100);
$iDW_RENTED = min(500,$pDW_RENTED / $cDW_RENTED *100);
$iDW_BANDH = min(500,$pDW_BANDH / $cDW_BANDH *100);
$iDW_TOTDWL6 = min(500,$pDW_TOTDWL6 / $cDW_TOTDWL6 *100);
$iDW_PTCON = min(500,$pDW_PTCON / $cDW_PTCON *100);
$iDW_NPTCON = min(500,$pDW_NPTCON / $cDW_NPTCON *100);
$iDW_TOTDWL7 = min(500,$pDW_TOTDWL7 / $cDW_TOTDWL7 *100);
$iDW_MT1 = min(500,$pDW_MT1 / $cDW_MT1 *100);
$iDW_MT2 = min(500,$pDW_MT2 / $cDW_MT2 *100);
$iDW_MT3_ = min(500,$pDW_MT3_ / $cDW_MT3_ *100);
$iDW_TOTDWL8 = min(500,$pDW_TOTDWL8 / $cDW_TOTDWL8 *100);
$iDW_MT_25 = min(500,$pDW_MT_25 / $cDW_MT_25 *100);
$iDW_MT2534 = min(500,$pDW_MT2534 / $cDW_MT2534 *100);
$iDW_MT3544 = min(500,$pDW_MT3544 / $cDW_MT3544 *100);
$iDW_MT4554 = min(500,$pDW_MT4554 / $cDW_MT4554 *100);
$iDW_MT5564 = min(500,$pDW_MT5564 / $cDW_MT5564 *100);
$iDW_MT6574 = min(500,$pDW_MT6574 / $cDW_MT6574 *100);
$iDW_MT75_ = min(500,$pDW_MT75_ / $cDW_MT75_ *100);
$iDW_TOTDWL9 = min(500,$pDW_TOTDWL9 / $cDW_TOTDWL9 *100);
$iDW_PPR_1 = min(500,$pDW_PPR_1 / $cDW_PPR_1 *100);
$iDW_PPR2_ = min(500,$pDW_PPR2_ / $cDW_PPR2_ *100);
$iDW_TOTDWLA = min(500,$pDW_TOTDWLA / $cDW_TOTDWLA *100);
$iDW_SUIT = min(500,$pDW_SUIT / $cDW_SUIT *100);
$iDW_NSUIT = min(500,$pDW_NSUIT / $cDW_NSUIT *100);
$iDW_MCOST = min(500,$pDW_MCOST / $cDW_MCOST *100);
$iDW_ACOST = min(500,$pDW_ACOST / $cDW_ACOST *100);
$iH_CANTR = min(500,$pH_CANTR / $cH_CANTR *100);
$iH_DEPOT = min(500,$pH_DEPOT / $cH_DEPOT *100);
$iH_HWARE = min(500,$pH_HWARE / $cH_HWARE *100);
$iH_OUTFT = min(500,$pH_OUTFT / $cH_OUTFT *100);
$iH_SENSE = min(500,$pH_SENSE / $cH_SENSE *100);
$iH_INDEP = min(500,$pH_INDEP / $cH_INDEP *100);
$iH_LEE = min(500,$pH_LEE / $cH_LEE *100);
$iH_LIGHT = min(500,$pH_LIGHT / $cH_LIGHT *100);
$iH_LOWE = min(500,$pH_LOWE / $cH_LOWE *100);
$iH_RONA = min(500,$pH_RONA / $cH_RONA *100);
$iH_DEPT = min(500,$pH_DEPT / $cH_DEPT *100);
$iH_OL = min(500,$pH_OL / $cH_OL *100);
$iH_OTHDEC = min(500,$pH_OTHDEC / $cH_OTHDEC *100);
$iH_OTHIMP = min(500,$pH_OTHIMP / $cH_OTHIMP *100);
$iH_CANTR_R = min(500,$pH_CANTR_R / $cH_CANTR_R *100);
$iH_DEPOT_R = min(500,$pH_DEPOT_R / $cH_DEPOT_R *100);
$iH_HWARE_R = min(500,$pH_HWARE_R / $cH_HWARE_R *100);
$iH_OUTFT_R = min(500,$pH_OUTFT_R / $cH_OUTFT_R *100);
$iH_SENSE_R = min(500,$pH_SENSE_R / $cH_SENSE_R *100);
$iH_INDEP_R = min(500,$pH_INDEP_R / $cH_INDEP_R *100);
$iH_LEE_R = min(500,$pH_LEE_R / $cH_LEE_R *100);
$iH_LIGHT_R = min(500,$pH_LIGHT_R / $cH_LIGHT_R *100);
$iH_LOWE_R = min(500,$pH_LOWE_R / $cH_LOWE_R *100);
$iH_RONA_R = min(500,$pH_RONA_R / $cH_RONA_R *100);
$iH_DEPT_R = min(500,$pH_DEPT_R / $cH_DEPT_R *100);
$iH_OL_R = min(500,$pH_OL_R / $cH_OL_R *100);
$iH_OTHDEC_R = min(500,$pH_OTHDEC_R / $cH_OTHDEC_R *100);
$iH_OTHIMP_R = min(500,$pH_OTHIMP_R / $cH_OTHIMP_R *100);
$iH_CANTR_O = min(500,$pH_CANTR_O / $cH_CANTR_O *100);
$iH_DEPOT_O = min(500,$pH_DEPOT_O / $cH_DEPOT_O *100);
$iH_HWARE_O = min(500,$pH_HWARE_O / $cH_HWARE_O *100);
$iH_OUTFT_O = min(500,$pH_OUTFT_O / $cH_OUTFT_O *100);
$iH_SENSE_O = min(500,$pH_SENSE_O / $cH_SENSE_O *100);
$iH_INDEP_O = min(500,$pH_INDEP_O / $cH_INDEP_O *100);
$iH_LEE_O = min(500,$pH_LEE_O / $cH_LEE_O *100);
$iH_LIGHT_O = min(500,$pH_LIGHT_O / $cH_LIGHT_O *100);
$iH_LOWE_O = min(500,$pH_LOWE_O / $cH_LOWE_O *100);
$iH_RONA_O = min(500,$pH_RONA_O / $cH_RONA_O *100);
$iH_DEPT_O = min(500,$pH_DEPT_O / $cH_DEPT_O *100);
$iH_OL_O = min(500,$pH_OL_O / $cH_OL_O *100);
$iH_OTHDEC_O = min(500,$pH_OTHDEC_O / $cH_OTHDEC_O *100);
$iH_OTHIMP_O = min(500,$pH_OTHIMP_O / $cH_OTHIMP_O *100);
$iPC_BBFUR = min(500,$pPC_BBFUR / $cPC_BBFUR *100);
$iPC_BED = min(500,$pPC_BED / $cPC_BED *100);
$iPC_OFFFUR = min(500,$pPC_OFFFUR / $cPC_OFFFUR *100);
$iPC_CARALRM = min(500,$pPC_CARALRM / $cPC_CARALRM *100);
$iPC_CARSTR = min(500,$pPC_CARSTR / $cPC_CARSTR *100);
$iPC_CMRAFLM = min(500,$pPC_CMRAFLM / $cPC_CMRAFLM *100);
$iPC_CMPEQP = min(500,$pPC_CMPEQP / $cPC_CMPEQP *100);
$iPC_CMPTRL = min(500,$pPC_CMPTRL / $cPC_CMPTRL *100);
$iPC_EREADER = min(500,$pPC_EREADER / $cPC_EREADER *100);
$iPC_GRPTFUR = min(500,$pPC_GRPTFUR / $cPC_GRPTFUR *100);
$iPC_GASBBQ = min(500,$pPC_GASBBQ / $cPC_GASBBQ *100);
$iPC_FIREPLC = min(500,$pPC_FIREPLC / $cPC_FIREPLC *100);
$iPC_GPS = min(500,$pPC_GPS / $cPC_GPS *100);
$iPC_GOLFEQP = min(500,$pPC_GOLFEQP / $cPC_GOLFEQP *100);
$iPC_HOCKEY = min(500,$pPC_HOCKEY / $cPC_HOCKEY *100);
$iPC_HOTTUB = min(500,$pPC_HOTTUB / $cPC_HOTTUB *100);
$iPC_EXCEQP = min(500,$pPC_EXCEQP / $cPC_EXCEQP *100);
$iPC_APPLIAN = min(500,$pPC_APPLIAN / $cPC_APPLIAN *100);
$iPC_MOTORCY = min(500,$pPC_MOTORCY / $cPC_MOTORCY *100);
$iPC_MINSTR = min(500,$pPC_MINSTR / $cPC_MINSTR *100);
$iPC_OFFEQP = min(500,$pPC_OFFEQP / $cPC_OFFEQP *100);
$iPC_MP3 = min(500,$pPC_MP3 / $cPC_MP3 *100);
$iPC_PC = min(500,$pPC_PC / $cPC_PC *100);
$iPC_PCSW = min(500,$pPC_PCSW / $cPC_PCSW *100);
$iPC_PRNT = min(500,$pPC_PRNT / $cPC_PRNT *100);
$iPC_POOL = min(500,$pPC_POOL / $cPC_POOL *100);
$iPC_PRAFUNE = min(500,$pPC_PRAFUNE / $cPC_PRAFUNE *100);
$iPC_BOAT = min(500,$pPC_BOAT / $cPC_BOAT *100);
$iPC_SKIEQP = min(500,$pPC_SKIEQP / $cPC_SKIEQP *100);
$iPC_SNOWMBL = min(500,$pPC_SNOWMBL / $cPC_SNOWMBL *100);
$iPC_STEREO = min(500,$pPC_STEREO / $cPC_STEREO *100);
$iPC_TV = min(500,$pPC_TV / $cPC_TV *100);
$iPC_TIRE = min(500,$pPC_TIRE / $cPC_TIRE *100);
$iPC_VACUUM = min(500,$pPC_VACUUM / $cPC_VACUUM *100);
$iPC_VDOEQP = min(500,$pPC_VDOEQP / $cPC_VDOEQP *100);
$iPC_GMSYS = min(500,$pPC_GMSYS / $cPC_GMSYS *100);
$iPC_WEDSVR = min(500,$pPC_WEDSVR / $cPC_WEDSVR *100);
$iPI_BBFUR = min(500,$pPI_BBFUR / $cPI_BBFUR *100);
$iPI_BED = min(500,$pPI_BED / $cPI_BED *100);
$iPI_OFFFUR = min(500,$pPI_OFFFUR / $cPI_OFFFUR *100);
$iPI_CARALRM = min(500,$pPI_CARALRM / $cPI_CARALRM *100);
$iPI_CARSTR = min(500,$pPI_CARSTR / $cPI_CARSTR *100);
$iPI_CMRAFLM = min(500,$pPI_CMRAFLM / $cPI_CMRAFLM *100);
$iPI_CMPEQP = min(500,$pPI_CMPEQP / $cPI_CMPEQP *100);
$iPI_CMPTRL = min(500,$pPI_CMPTRL / $cPI_CMPTRL *100);
$iPI_EREADER = min(500,$pPI_EREADER / $cPI_EREADER *100);
$iPI_GRPTFUR = min(500,$pPI_GRPTFUR / $cPI_GRPTFUR *100);
$iPI_GASBBQ = min(500,$pPI_GASBBQ / $cPI_GASBBQ *100);
$iPI_FIREPLC = min(500,$pPI_FIREPLC / $cPI_FIREPLC *100);
$iPI_GPS = min(500,$pPI_GPS / $cPI_GPS *100);
$iPI_GOLFEQP = min(500,$pPI_GOLFEQP / $cPI_GOLFEQP *100);
$iPI_HOCKEY = min(500,$pPI_HOCKEY / $cPI_HOCKEY *100);
$iPI_HOTTUB = min(500,$pPI_HOTTUB / $cPI_HOTTUB *100);
$iPI_EXCEQP = min(500,$pPI_EXCEQP / $cPI_EXCEQP *100);
$iPI_APPLIAN = min(500,$pPI_APPLIAN / $cPI_APPLIAN *100);
$iPI_MOTORCY = min(500,$pPI_MOTORCY / $cPI_MOTORCY *100);
$iPI_MINSTR = min(500,$pPI_MINSTR / $cPI_MINSTR *100);
$iPI_OFFEQP = min(500,$pPI_OFFEQP / $cPI_OFFEQP *100);
$iPI_MP3 = min(500,$pPI_MP3 / $cPI_MP3 *100);
$iPI_PC = min(500,$pPI_PC / $cPI_PC *100);
$iPI_PCSW = min(500,$pPI_PCSW / $cPI_PCSW *100);
$iPI_PRNT = min(500,$pPI_PRNT / $cPI_PRNT *100);
$iPI_POOL = min(500,$pPI_POOL / $cPI_POOL *100);
$iPI_PRAFUNE = min(500,$pPI_PRAFUNE / $cPI_PRAFUNE *100);
$iPI_BOAT = min(500,$pPI_BOAT / $cPI_BOAT *100);
$iPI_SKIEQP = min(500,$pPI_SKIEQP / $cPI_SKIEQP *100);
$iPI_SNOWMBL = min(500,$pPI_SNOWMBL / $cPI_SNOWMBL *100);
$iPI_STEREO = min(500,$pPI_STEREO / $cPI_STEREO *100);
$iPI_TV = min(500,$pPI_TV / $cPI_TV *100);
$iPI_TIRE = min(500,$pPI_TIRE / $cPI_TIRE *100);
$iPI_VACUUM = min(500,$pPI_VACUUM / $cPI_VACUUM *100);
$iPI_VDOEQP = min(500,$pPI_VDOEQP / $cPI_VDOEQP *100);
$iPI_GMSYS = min(500,$pPI_GMSYS / $cPI_GMSYS *100);
$iPI_WEDSVR = min(500,$pPI_WEDSVR / $cPI_WEDSVR *100);
$iSP_GSNO = min(500,$pSP_GSNO / $cSP_GSNO *100);
$iSP_GS249 = min(500,$pSP_GS249 / $cSP_GS249 *100);
$iSP_GS499 = min(500,$pSP_GS499 / $cSP_GS499 *100);
$iSP_GS500 = min(500,$pSP_GS500 / $cSP_GS500 *100);
$iSP_HDNO = min(500,$pSP_HDNO / $cSP_HDNO *100);
$iSP_HD249 = min(500,$pSP_HD249 / $cSP_HD249 *100);
$iSP_HD499 = min(500,$pSP_HD499 / $cSP_HD499 *100);
$iSP_HD500 = min(500,$pSP_HD500 / $cSP_HD500 *100);
$iSP_PTNO = min(500,$pSP_PTNO / $cSP_PTNO *100);
$iSP_PT249 = min(500,$pSP_PT249 / $cSP_PT249 *100);
$iSP_PT499 = min(500,$pSP_PT499 / $cSP_PT499 *100);
$iSP_PT500 = min(500,$pSP_PT500 / $cSP_PT500 *100);
// -------------------------------------------- RANKINGS --------------------
$top_retail["name"][] = "Canadian Tire";
$top_retail["name"][] = "Home Depot";
$top_retail["name"][] = "Home Hardware";
$top_retail["name"][] = "Home Outfitters";
$top_retail["name"][] = "Home Sense";
//$top_retail["name"][] = "Independent stores";
$top_retail["name"][] = "Lee Valley Tools";
//$top_retail["name"][] = "Lighting stores (any)";
$top_retail["name"][] = "Lowe's";
$top_retail["name"][] = "Rona";
//$top_retail["name"][] = "Department stores (any)";
//$top_retail["name"][] = "Online stores";
//$top_retail["name"][] = "Other Décor stores";
//$top_retail["name"][] = "Other Improvement stores";
$top_retail["pic"][] = "improve/ctire.jpg";
$top_retail["pic"][] = "improve/depot.jpg";
$top_retail["pic"][] = "improve/hhardware.jpg";
$top_retail["pic"][] = "improve/outfit.jpg";
$top_retail["pic"][] = "improve/homesense.jpg";
$top_retail["pic"][] = "improve/lee.jpg";
$top_retail["pic"][] = "improve/lowes.jpg";
$top_retail["pic"][] = "improve/rona.jpg";
$top_retail["index"][] =$iH_CANTR;
$top_retail["index"][] =$iH_DEPOT;
$top_retail["index"][] =$iH_HWARE;
$top_retail["index"][] =$iH_OUTFT;
$top_retail["index"][] =$iH_SENSE;
//$top_retail["index"][] =$iH_INDEP;
$top_retail["index"][] =$iH_LEE;
//$top_retail["index"][] =$iH_LIGHT;
$top_retail["index"][] =$iH_LOWE;
$top_retail["index"][] =$iH_RONA;
$top_retail["percent"][] =$pH_CANTR;
$top_retail["percent"][] =$pH_DEPOT;
$top_retail["percent"][] =$pH_HWARE;
$top_retail["percent"][] =$pH_OUTFT;
$top_retail["percent"][] =$pH_SENSE;
//$top_retail["percent"][] =$pH_INDEP;
$top_retail["percent"][] =$pH_LEE;
//$top_retail["percent"][] =$pH_LIGHT;
$top_retail["percent"][] =$pH_LOWE;
$top_retail["percent"][] =$pH_RONA;
arsort($top_retail["percent"]);
$temp_counter = 0;
foreach ($top_retail["percent"] as $key => $val) {
$stop_retail["percent"][] = $top_retail["percent"][$key];
$stop_retail["name"][] = $top_retail["name"][$key];
$stop_retail["index"][] = $top_retail["index"][$key];
$stop_retail["pic"][] = $top_retail["pic"][$key];
$stop_retail["arrow"][$temp_counter] = "<img src='yellow.gif' width='45' height='30' />";
if($top_retail["index"][$key] > 100) $stop_retail["arrow"][$temp_counter] = "<img src='up.png' width='40' height='40' />";
if($top_retail["index"][$key] > 110) $stop_retail["arrow"][$temp_counter] = "<img src='up.png' width='55' height='55' />";
if($top_retail["index"][$key] <95) $stop_retail["arrow"][$temp_counter4] = "<img src='down.png' width='40' height='40' />";
if($top_retail["index"][$key] < 90) $stop_retail["arrow"][$temp_counter] = "<img src='down.png' width='55' height='55' />";
$temp_counter = $temp_counter + 1;
}
// --------------------------------------------------------- renovations -----------------------------------------------------------
$major_reno['name'][] = "Added living space";
$major_reno['name'][] = "Built/renovated garage";
$major_reno['name'][] = "Custom draperies/curtains";
$major_reno['name'][] = "Deck/fencing";
$major_reno['name'][] = "Electrical";
$major_reno['name'][] = "Energy conservation projects";
$major_reno['name'][] = "Exterior painting/staining";
$major_reno['name'][] = "Floor tiles or vinyl flooring";
$major_reno['name'][] = "Hardwood/Laminate Flooring";
$major_reno['name'][] = "Heating or A.C.";
$major_reno['name'][] = "Installed home security";
$major_reno['name'][] = "Installed windows or doors";
$major_reno['name'][] = "Interior painting/wallpaper";
$major_reno['name'][] = "Landscaping or yard";
$major_reno['name'][] = "Plumbing";
$major_reno['name'][] = "Remodelled bathroom";
$major_reno['name'][] = "Remodelled kitchen";
$major_reno['name'][] = "Remodelled other room(s)";
$major_reno['name'][] = "Roofing";
$major_reno['name'][] = "Swimming pools/spas";
$major_reno['name'][] = "Wall-to-wall carpet or rugs";
$major_reno['name'][] = "Other home project(s)";
$major_reno['index'][] = $iDW_RASPACE;
$major_reno['index'][] = $iDW_RAGARG;
$major_reno['index'][] = $iDW_RADRAP;
$major_reno['index'][] = $iDW_RADECK;
$major_reno['index'][] = $iDW_RAELEC;
$major_reno['index'][] = $iDW_RAENG;
$major_reno['index'][] = $iDW_RAEPAIN;
$major_reno['index'][] = $iDW_RATILE;
$major_reno['index'][] = $iDW_RAFLOO;
$major_reno['index'][] = $iDW_RAHVAC;
$major_reno['index'][] = $iDW_RASECU;
$major_reno['index'][] = $iDW_RAWIND;
$major_reno['index'][] = $iDW_RAIPAIN;
$major_reno['index'][] = $iDW_RALAND;
$major_reno['index'][] = $iDW_RAPLUM;
$major_reno['index'][] = $iDW_RABATH;
$major_reno['index'][] = $iDW_RAKITC;
$major_reno['index'][] = $iDW_RAORM;
$major_reno['index'][] = $iDW_RAROOF;
$major_reno['index'][] = $iDW_RAPOOL;
$major_reno['index'][] = $iDW_RACARP;
$major_reno['index'][] = $iDW_RAOTHE;
$major_reno['percent'][] = $pDW_RASPACE;
$major_reno['percent'][] = $pDW_RAGARG;
$major_reno['percent'][] = $pDW_RADRAP;
$major_reno['percent'][] = $pDW_RADECK;
$major_reno['percent'][] = $pDW_RAELEC;
$major_reno['percent'][] = $pDW_RAENG;
$major_reno['percent'][] = $pDW_RAEPAIN;
$major_reno['percent'][] = $pDW_RATILE;
$major_reno['percent'][] = $pDW_RAFLOO;
$major_reno['percent'][] = $pDW_RAHVAC;
$major_reno['percent'][] = $pDW_RASECU;
$major_reno['percent'][] = $pDW_RAWIND;
$major_reno['percent'][] = $pDW_RAIPAIN;
$major_reno['percent'][] = $pDW_RALAND;
$major_reno['percent'][] = $pDW_RAPLUM;
$major_reno['percent'][] = $pDW_RABATH;
$major_reno['percent'][] = $pDW_RAKITC;
$major_reno['percent'][] = $pDW_RAORM;
$major_reno['percent'][] = $pDW_RAROOF;
$major_reno['percent'][] = $pDW_RAPOOL;
$major_reno['percent'][] = $pDW_RACARP;
$major_reno['percent'][] = $pDW_RAOTHE;
arsort($major_reno["percent"]);
$temp_counter = 0;
foreach ($major_reno["percent"] as $key => $val) {
$smajor_reno["percent"][] = $major_reno["percent"][$key];
$smajor_reno["name"][] = $major_reno["name"][$key];
$smajor_reno["index"][] = $major_reno["index"][$key];
$smajor_reno["arrow"][$temp_counter] = "<img src='yellow.gif' width='45' height='30' />";
if($smajor_reno["index"][$temp_counter] > 100) $smajor_reno["arrow"][$temp_counter] = "<img src='up.png' width='40' height='40' />";
if($smajor_reno["index"][$temp_counter] > 110) $smajor_reno["arrow"][$temp_counter] = "<img src='up.png' width='55' height='55' />";
if($smajor_reno["index"][$temp_counter] <95) $smajor_reno["arrow"][$temp_counter4] = "<img src='down.png' width='40' height='40' />";
if($smajor_reno["index"][$temp_counter] < 90) $smajor_reno["arrow"][$temp_counter] = "<img src='down.png' width='55' height='55' />";
$temp_counter = $temp_counter + 1;
}
// ----------------------------- renovation spend -----------------------------
$prenospend_low = $pDW_SP999 + $pDW_SP2499;
$crenospend_low = $cDW_SP999 + $cDW_SP2499;
$prenospend_mid = $pDW_SP4999 + $pDW_SP9999;
$crenospend_mid = $cDW_SP4999 + $cDW_SP9999;
$prenospend_high = $pDW_SP19999 + $pDW_SP20000;
$crenospend_high = $cDW_SP19999 + $cDW_SP20000;
$reno_chart_multiply = 5.5;
$reno_chart_max = 310;
$prenospend_0_chart = min($reno_chart_max, ($pDW_SP0 * $reno_chart_multiply));
$crenospend_0_chart = min($reno_chart_max, ($cDW_SP0 * $reno_chart_multiply));
$prenospend_low_chart = min($reno_chart_max, $prenospend_low * $reno_chart_multiply);
$crenospend_low_chart = min($reno_chart_max, $crenospend_low * $reno_chart_multiply);
$prenospend_mid_chart = min($reno_chart_max, $prenospend_mid * $reno_chart_multiply);
$crenospend_mid_chart = min($reno_chart_max, $crenospend_mid * $reno_chart_multiply);
$prenospend_high_chart = min($reno_chart_max, $prenospend_high * $reno_chart_multiply);
$crenospend_high_chart = min($reno_chart_max, $crenospend_high * $reno_chart_multiply);
// ---------------------------------- renovations --------------------
$all_reno['name'][] = "Added living space-myself, family or friend";
$all_reno['name'][] = "Added living space-Contractor/tradesperson";
$all_reno['name'][] = "Built/renovated a garage-Myself, family or friend";
$all_reno['name'][] = "Built/renovated a garage-Contractor/tradesperson";
$all_reno['name'][] = "Custom draperies/curtains-myself, family or friend";
$all_reno['name'][] = "Custom draperies/curtains-Contractor/tradesperson";
$all_reno['name'][] = "Deck/fencing-myself, family or friend";
$all_reno['name'][] = "Deck/fencing-Contractor/tradesperson";
$all_reno['name'][] = "Electrical-myself, family or friend";
$all_reno['name'][] = "Electrical-Contractor/tradesperson";
$all_reno['name'][] = "Energy conservation projects-myself, family or friend";
$all_reno['name'][] = "Energy conservation projects-Contractor/tradesperson";
$all_reno['name'][] = "Exterior painting/staining-myself, family or friend";
$all_reno['name'][] = "Exterior painting/staining-Contractor/tradesperson";
$all_reno['name'][] = "Floor tiles or vinyl flooring-myself, family or friend";
$all_reno['name'][] = "Floor tiles or vinyl flooring-Contractor/tradesperson";
$all_reno['name'][] = "Hardwood/Laminate Flooring by myself, family or friend";
$all_reno['name'][] = "Hardwood/Laminate Flooring by Contractor/tradesperson";
$all_reno['name'][] = "Heating, ventilation, or air con... by myself, family or friend";
$all_reno['name'][] = "Heating, ventilation, or air con... by Contractor/tradesperson";
$all_reno['name'][] = "Installed home security system by myself, family or friend";
$all_reno['name'][] = "Installed home security system by Contractor/tradesperson";
$all_reno['name'][] = "Installed windows or doors by myself, family or friend";
$all_reno['name'][] = "Installed windows or doors by Contractor/tradesperson";
$all_reno['name'][] = "Interior painting/wallpaper by myself, family or friend";
$all_reno['name'][] = "Interior painting/wallpaper by Contractor/tradesperson";
$all_reno['name'][] = "Landscaping or yard improvements by myself, family or friend";
$all_reno['name'][] = "Landscaping or yard improvements by Contractor/tradesperson";
$all_reno['name'][] = "Plumbing (any jobs) by myself, family or friend";
$all_reno['name'][] = "Plumbing (any jobs) by Contractor/tradesperson";
$all_reno['name'][] = "Remodelled bathroom by myself, family or friend";
$all_reno['name'][] = "Remodelled bathroom by Contractor/tradesperson";
$all_reno['name'][] = "Remodelled kitchen by myself, family or friend";
$all_reno['name'][] = "Remodelled kitchen by Contractor/tradesperson";
$all_reno['name'][] = "Remodelled other room(s) by myself, family or friend";
$all_reno['name'][] = "Remodelled other room(s) by Contractor/tradesperson";
$all_reno['name'][] = "Roofing by myself, family or friend";
$all_reno['name'][] = "Roofing by Contractor/tradesperson";
$all_reno['name'][] = "Swimming pools/spas by myself, family or friend";
$all_reno['name'][] = "Swimming pools/spas by Contractor/tradesperson";
$all_reno['name'][] = "Wall to wall carpet or rugs by myself, family or friend";
$all_reno['name'][] = "Wall to wall carpet or rugs by Contractor/tradesperson";
$all_reno['name'][] = "Other home project(s) by myself, family or friend";
$all_reno['name'][] = "Other home project(s) by Contractor/tradesperson";
$all_reno['index'][] = $iDW_SPSELF;
$all_reno['index'][] = $iDW_SPCONT;
$all_reno['index'][] = $iDW_GRGSELF;
$all_reno['index'][] = $iDW_GRGCONT;
$all_reno['index'][] = $iDW_DRSELF;
$all_reno['index'][] = $iDW_DRCONT;
$all_reno['index'][] = $iDW_DKSELF;
$all_reno['index'][] = $iDW_DKCONT;
$all_reno['index'][] = $iDW_ELSELF;
$all_reno['index'][] = $iDW_ELCONT;
$all_reno['index'][] = $iDW_ENSELF;
$all_reno['index'][] = $iDW_ENCONT;
$all_reno['index'][] = $iDW_EPSELF;
$all_reno['index'][] = $iDW_EPCONT;
$all_reno['index'][] = $iDW_TISELF;
$all_reno['index'][] = $iDW_TICONT;
$all_reno['index'][] = $iDW_FLSELF;
$all_reno['index'][] = $iDW_FLCONT;
$all_reno['index'][] = $iDW_HVSELF;
$all_reno['index'][] = $iDW_HVCONT;
$all_reno['index'][] = $iDW_SESELF;
$all_reno['index'][] = $iDW_SECONT;
$all_reno['index'][] = $iDW_WISELF;
$all_reno['index'][] = $iDW_WICONT;
$all_reno['index'][] = $iDW_IPSELF;
$all_reno['index'][] = $iDW_IPCONT;
$all_reno['index'][] = $iDW_LASELF;
$all_reno['index'][] = $iDW_LACONT;
$all_reno['index'][] = $iDW_PLSELF;
$all_reno['index'][] = $iDW_PLCONT;
$all_reno['index'][] = $iDW_BTSELF;
$all_reno['index'][] = $iDW_BTCONT;
$all_reno['index'][] = $iDW_KISELF;
$all_reno['index'][] = $iDW_KICONT;
$all_reno['index'][] = $iDW_ORSELF;
$all_reno['index'][] = $iDW_ORCONT;
$all_reno['index'][] = $iDW_RFSELF;
$all_reno['index'][] = $iDW_RFCONT;
$all_reno['index'][] = $iDW_POSELF;
$all_reno['index'][] = $iDW_POCONT;
$all_reno['index'][] = $iDW_CPSELF;
$all_reno['index'][] = $iDW_CPCONT;
$all_reno['index'][] = $iDW_OHSELF;
$all_reno['index'][] = $iDW_OHCONT;
$all_reno['percent'][] = $pDW_SPSELF;
$all_reno['percent'][] = $pDW_SPCONT;
$all_reno['percent'][] = $pDW_GRGSELF;
$all_reno['percent'][] = $pDW_GRGCONT;
$all_reno['percent'][] = $pDW_DRSELF;
$all_reno['percent'][] = $pDW_DRCONT;
$all_reno['percent'][] = $pDW_DKSELF;
$all_reno['percent'][] = $pDW_DKCONT;
$all_reno['percent'][] = $pDW_ELSELF;
$all_reno['percent'][] = $pDW_ELCONT;
$all_reno['percent'][] = $pDW_ENSELF;
$all_reno['percent'][] = $pDW_ENCONT;
$all_reno['percent'][] = $pDW_EPSELF;
$all_reno['percent'][] = $pDW_EPCONT;
$all_reno['percent'][] = $pDW_TISELF;
$all_reno['percent'][] = $pDW_TICONT;
$all_reno['percent'][] = $pDW_FLSELF;
$all_reno['percent'][] = $pDW_FLCONT;
$all_reno['percent'][] = $pDW_HVSELF;
$all_reno['percent'][] = $pDW_HVCONT;
$all_reno['percent'][] = $pDW_SESELF;
$all_reno['percent'][] = $pDW_SECONT;
$all_reno['percent'][] = $pDW_WISELF;
$all_reno['percent'][] = $pDW_WICONT;
$all_reno['percent'][] = $pDW_IPSELF;
$all_reno['percent'][] = $pDW_IPCONT;
$all_reno['percent'][] = $pDW_LASELF;
$all_reno['percent'][] = $pDW_LACONT;
$all_reno['percent'][] = $pDW_PLSELF;
$all_reno['percent'][] = $pDW_PLCONT;
$all_reno['percent'][] = $pDW_BTSELF;
$all_reno['percent'][] = $pDW_BTCONT;
$all_reno['percent'][] = $pDW_KISELF;
$all_reno['percent'][] = $pDW_KICONT;
$all_reno['percent'][] = $pDW_ORSELF;
$all_reno['percent'][] = $pDW_ORCONT;
$all_reno['percent'][] = $pDW_RFSELF;
$all_reno['percent'][] = $pDW_RFCONT;
$all_reno['percent'][] = $pDW_POSELF;
$all_reno['percent'][] = $pDW_POCONT;
$all_reno['percent'][] = $pDW_CPSELF;
$all_reno['percent'][] = $pDW_CPCONT;
$all_reno['percent'][] = $pDW_OHSELF;
$all_reno['percent'][] = $pDW_OHCONT;
arsort($all_reno["percent"]);
$temp_counter = 0;
foreach ($all_reno["percent"] as $key => $val) {
$sall_reno["percent"][] = $all_reno["percent"][$key];
$sall_reno["name"][] = $all_reno["name"][$key];
$sall_reno["index"][] = $all_reno["index"][$key];
}

// restaurant  - convert to percentages and index value for both file and bench
for ( $i = 0; $i <=67; $i ++) {
	if($demo['rest'][0] >0) $rest_vals['file'][$i] = $demo['rest'][$i] / $demo['rest'][0] *100; else $rest_vals['file'][$i] = 0;
	if($rbench['rest'][0] >0) $rest_vals['bench'][$i] = $rbench['rest'][$i] / $rbench['rest'][0] *100; else $rest_vals['bench'][$i] = 0;
	if($rbench['rest'][$i] >0) $rest_vals['index'][$i] = $rest_vals['file'][$i] / $rest_vals['bench'][$i] *100; else $rest_vals['index'][$i] = 0;
}

// restaurant names
$demo['rest_name'][1] = "Coffee Time";
$demo['rest_name'][2] = "Country Style";
$demo['rest_name'][3] = "David's Tea";
$demo['rest_name'][4] = "Dunkin Donuts";
$demo['rest_name'][5] = "Bagel";
$demo['rest_name'][6] = "MMMuffins";
$demo['rest_name'][7] = "Second Cup";
$demo['rest_name'][8] = "Starbucks";
$demo['rest_name'][9] = "Tim Hortons";
$demo['rest_name'][10] = "Timothys";


$demo['rest_name'][12] = "A&W";
$demo['rest_name'][13] = "Arbys";
$demo['rest_name'][14] = "Burger King";
$demo['rest_name'][15] = "Dairy Queen";
$demo['rest_name'][16] = "Dominos";
$demo['rest_name'][17] = "Harveys";
$demo['rest_name'][18] = "KFC";
$demo['rest_name'][19] = "McDonalds";
$demo['rest_name'][20] = "Mr. Sub";
$demo['rest_name'][21] = "Pizza Pizza";
$demo['rest_name'][22] = "Quiznos";
$demo['rest_name'][23] = "Subway";
$demo['rest_name'][24] = "Taco Bell";
$demo['rest_name'][25] = "Taco Time";
$demo['rest_name'][26] = "Valentines";
$demo['rest_name'][27] = "Wendys";

$demo['rest_name'][29] = "Boston Pizza";
$demo['rest_name'][30] = "Earls";
$demo['rest_name'][31] = "Eastside Marios";
$demo['rest_name'][32] = "Jack Astors";
$demo['rest_name'][33] = "The Keg";
$demo['rest_name'][34] = "Kelseys";
$demo['rest_name'][35] = "Milestones";
$demo['rest_name'][36] = "Montanas";
$demo['rest_name'][37] = "Original Joes";
$demo['rest_name'][38] = "Pizza Hut";
$demo['rest_name'][39] = "St Huberts";
$demo['rest_name'][40] = "Swiss Chalet";

// rest images - 200 x 200 px
$demo['rest_image'][1] = "coffee/ctime.jpg";
$demo['rest_image'][2] = "coffee/cstyle.jpg"; 
$demo['rest_image'][3] = "coffee/davids.jpg";			// --------- David's Tea 
$demo['rest_image'][4] = "coffee/dunkin.jpg";
$demo['rest_image'][5] = "coffee/bagel.jpg";
$demo['rest_image'][6] = "coffee/mmm.jpg";
$demo['rest_image'][7] = "coffee/second.jpg";
$demo['rest_image'][8] = "coffee/starbucks.jpg";
$demo['rest_image'][9] = "coffee/tims.jpg";
$demo['rest_image'][10] = "coffee/timothys.jpg";  		

$demo['rest_image'][12] = "quick_rest/aw.jpg";
$demo['rest_image'][13] = "quick_rest/arbys.jpg";
$demo['rest_image'][14] = "quick_rest/bk.jpg";
$demo['rest_image'][15] = "quick_rest/dq.jpg";
$demo['rest_image'][16] = "quick_rest/dominos.jpg";
$demo['rest_image'][17] = "quick_rest/harveys.jpg";
$demo['rest_image'][18] = "quick_rest/kfc.jpg";
$demo['rest_image'][19] = "quick_rest/mcd.jpg";
$demo['rest_image'][20] = "quick_rest/mrsub.jpg";
$demo['rest_image'][21] = "quick_rest/pizza.jpg";
$demo['rest_image'][22] = "quick_rest/quiznos.jpg";
$demo['rest_image'][23] = "quick_rest/subway.jpg";
$demo['rest_image'][24] = "quick_rest/taco.jpg";
$demo['rest_image'][25] = "quick_rest/tacotime.jpg";		// --------- Taco Time
$demo['rest_image'][26] = "quick_rest/valentines.jpg";		// --------- Valentines
$demo['rest_image'][27] = "quick_rest/wendys.jpg";
		
$demo['rest_image'][29] = "full_rest/boston.jpg";
$demo['rest_image'][30] = "full_rest/earls.jpg";		// --------- Earls
$demo['rest_image'][31] = "full_rest/eastside.jpg";
$demo['rest_image'][32] = "full_rest/jackastor.jpg";		// --------- Jack Astors
$demo['rest_image'][33] = "full_rest/keg.jpg";
$demo['rest_image'][34] = "full_rest/kelseys.jpg";
$demo['rest_image'][35] = "full_rest/milestones.jpg";		// --------- Milestones
$demo['rest_image'][36] = "full_rest/montana.jpg";
$demo['rest_image'][37] = "full_rest/originaljoes.jpg";		// --------- Original Joes
$demo['rest_image'][38] = "full_rest/hut.jpg";
$demo['rest_image'][39] = "full_rest/hubert.jpg";
$demo['rest_image'][40] = "full_rest/swiss.jpg";		// --------- Swiss chalet

// coffee
for ( $i = 1; $i <=10; $i ++) {
	$rest['coffee_p'][] = $rest_vals['file'][$i];
	$rest['coffee_name'][] = $demo['rest_name'][$i];
	$rest['coffee_image'][] = $demo['rest_image'][$i];
	$rest['coffee_index'][] = $rest_vals['index'][$i];

}


arsort($rest['coffee_p']);
	foreach ($rest['coffee_p'] as $key => $val) {
	$rest['sorted_coffee_p'][] = $rest['coffee_p'][$key];
	$rest['sorted_coffee_name'][] = $rest['coffee_name'][$key];
	$rest['sorted_coffee_image'][] = $rest['coffee_image'][$key];
	$rest['sorted_coffee_index'][] = $rest['coffee_index'][$key];
}

// full serve
for ( $i = 29; $i <=40; $i ++) {
	$rest['fullserve_p'][] = $rest_vals['file'][$i];
	$rest['fullserve_name'][] = $demo['rest_name'][$i];
	$rest['fullserve_image'][] = $demo['rest_image'][$i];
	$rest['fullserve_index'][] = $rest_vals['index'][$i];
}


arsort($rest['fullserve_p']);
	foreach ($rest['fullserve_p'] as $key => $val) {
	$rest['sorted_fullserve_p'][] = $rest['fullserve_p'][$key];
	$rest['sorted_fullserve_name'][] = $rest['fullserve_name'][$key];
	$rest['sorted_fullserve_image'][] = $rest['fullserve_image'][$key];
	$rest['sorted_fullserve_index'][] = $rest['fullserve_index'][$key];
}

// qsr quick serve
for ( $i = 12; $i <=27; $i ++) {
	$rest['qsr_p'][] = $rest_vals['file'][$i];
	$rest['qsr_name'][] = $demo['rest_name'][$i];
	$rest['qsr_image'][] = $demo['rest_image'][$i];
	$rest['qsr_index'][] = $rest_vals['index'][$i];
}


arsort($rest['qsr_p']);
	foreach ($rest['qsr_p'] as $key => $val) {
	$rest['sorted_qsr_p'][] = $rest['qsr_p'][$key];
	$rest['sorted_qsr_name'][] = $rest['qsr_name'][$key];
	$rest['sorted_qsr_image'][] = $rest['qsr_image'][$key];
	$rest['sorted_qsr_index'][] = $rest['qsr_index'][$key];
}

if($detail_show == 12) {
		// grocery  - convert to percentages and index value for both file and bench

		for ( $i = 0; $i < sizeof($demo['grocery']); $i ++) {

			if($demo['grocery'][0] >0) $grocery_vals['file'][$i] = $demo['grocery'][$i] / $demo['grocery'][0] *100; else $grocery_vals['file'][$i] = 0;				// percent 
			if($rbench['grocery'][0] >0) $grocery_vals['bench'][$i] = $rbench['grocery'][$i] / $rbench['grocery'][0] *100; else $grocery_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['grocery'][$i] >0) $grocery_vals['index'][$i] = $grocery_vals['file'][$i] / $grocery_vals['bench'][$i] *100; else $grocery_vals['index'][$i] = 0;	// index 
		}
		
		// grocery names
		$demo['grocery_name'][1] = "Co-op";
		$demo['grocery_name'][2] = "Foodland/IGA";
		$demo['grocery_name'][3] = "Loblaws";
		$demo['grocery_name'][4] = "M&M Food Market";
		$demo['grocery_name'][5] = "Metro";
		$demo['grocery_name'][6] = "Provigo";
		$demo['grocery_name'][7] = "Real Canadian Superstore";
		$demo['grocery_name'][8] = "Safeway";
		$demo['grocery_name'][9] = "Sobeys";
		$demo['grocery_name'][10] = "Discount (No Frills)";
		$demo['grocery_name'][11] = "Fine food /butcher ";
		$demo['grocery_name'][12] = "Big box";
		$demo['grocery_name'][13] = "Department (Wal-Mart)";
		$demo['grocery_name'][14] = "Drug Stores (any)";
		$demo['grocery_name'][15] = "Online grocery ";
		$demo['grocery_name'][16] = "Other grocery ";

		$demo['grocery_image'][1] = "grocery/coop.jpg";
		$demo['grocery_image'][2] = "grocery/foodland.jpg";
		$demo['grocery_image'][3] = "grocery/loblaw.jpg";
		$demo['grocery_image'][4] = "grocery/mm.jpg";
		$demo['grocery_image'][5] = "grocery/metro.jpg";
		$demo['grocery_image'][6] = "grocery/provigo.jpg";
		$demo['grocery_image'][7] = "grocery/realcanadian.jpg";
		$demo['grocery_image'][8] = "grocery/safeway.jpg";
		$demo['grocery_image'][9] = "grocery/sobeys.jpg";
		$demo['grocery_image'][10] = "grocery/discount.jpg";
		$demo['grocery_image'][11] = "grocery/butcher.jpg";
		$demo['grocery_image'][12] = "grocery/bigbox.jpg";
		$demo['grocery_image'][13] = "grocery/walmart.jpg";
		$demo['grocery_image'][14] = "grocery/drug.jpg";
		$demo['grocery_image'][15] = "grocery/onlinegrocery.jpg";
		$demo['grocery_image'][16] = "grocery/othergrocery.jpg";
		
		
		// grocery  - sorted arrays
		for ( $i = 1; $i <=sizeof($grocery_vals['file']); $i ++) {
			$grocery['grocery_p'][] = $grocery_vals['file'][$i];
			$grocery['grocery_name'][] = $demo['grocery_name'][$i];
			$grocery['grocery_image'][] = $demo['grocery_image'][$i];
			$grocery['grocery_index'][] = $grocery_vals['index'][$i];
		}
		
		// grocery  - sorted results
		arsort($grocery['grocery_p']);
			foreach ($grocery['grocery_p'] as $key => $val) {
			$grocery['sorted_grocery_p'][] = $grocery['grocery_p'][$key];
			$grocery['sorted_grocery_name'][] = $grocery['grocery_name'][$key];
			$grocery['sorted_grocery_image'][] = $grocery['grocery_image'][$key];
			$grocery['sorted_grocery_index'][] = $grocery['grocery_index'][$key];
		}
		
		// dept  - convert to percentages and index value for both file and bench
		$demo['dept'][5] = 0;	$rbench['dept'][5] = 0.0001;
		for ( $i = 0; $i < sizeof($demo['dept']); $i ++) {

			if($demo['dept'][0] >0) $dept_vals['file'][$i] = $demo['dept'][$i] / $demo['dept'][0] *100; else $dept_vals['file'][$i] = 0;				// percent 
			if($rbench['dept'][0] >0) $dept_vals['bench'][$i] = $rbench['dept'][$i] / $rbench['dept'][0] *100; else $dept_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['dept'][$i] >0) $dept_vals['index'][$i] = $dept_vals['file'][$i] / $dept_vals['bench'][$i] *100; else $dept_vals['index'][$i] = 0;	// index 
		}
		
		// dept names
		$demo['dept_name'][1] = "Canadian Tire";
		$demo['dept_name'][2] = "Costco";
		$demo['dept_name'][3] = "Giant Tiger";
		$demo['dept_name'][4] = "Hudson's Bay";
		$demo['dept_name'][5] = "Sears (N/A)";
		$demo['dept_name'][6] = "Walmart";
		$demo['dept_name'][7] = "Online department stores";
		$demo['dept_name'][8] = "Other Department stores";

			
		$demo['dept_image'][1] = "dept/ctire.png";
		$demo['dept_image'][2] = "dept/costco.png";
		$demo['dept_image'][3] = "dept/gt.png";
		$demo['dept_image'][4] = "dept/bay.jpg";
		$demo['dept_image'][5] = "dept/sears.png";
		$demo['dept_image'][6] = "dept/walmart.jpg";
		$demo['dept_image'][7] = "dept/onlinedept.jpg";
		$demo['dept_image'][8] = "dept/otherdept.jpg";
		
		
		// dept  - sorted arrays
		for ( $i = 1; $i <=sizeof($dept_vals['file']); $i ++) {
			$dept['dept_p'][] = $dept_vals['file'][$i];
			$dept['dept_name'][] = $demo['dept_name'][$i];
			$dept['dept_image'][] = $demo['dept_image'][$i];
			$dept['dept_index'][] = $dept_vals['index'][$i];
		}
		
		// dept  - sorted results
		arsort($dept['dept_p']);
			foreach ($dept['dept_p'] as $key => $val) {
			$dept['sorted_dept_p'][] = $dept['dept_p'][$key];
			$dept['sorted_dept_name'][] = $dept['dept_name'][$key];
			$dept['sorted_dept_image'][] = $dept['dept_image'][$key];
			$dept['sorted_dept_index'][] = $dept['dept_index'][$key];
		}
		
		// cv  - convert to percentages and index value for both file and bench

		for ( $i = 0; $i < sizeof($demo['cv']); $i ++) {

			if($demo['cv'][0] >0) $cv_vals['file'][$i] = $demo['cv'][$i] / $demo['cv'][0] *100; else $cv_vals['file'][$i] = 0;				// percent 
			if($rbench['cv'][0] >0) $cv_vals['bench'][$i] = $rbench['cv'][$i] / $rbench['cv'][0] *100; else $cv_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['cv'][$i] >0) $cv_vals['index'][$i] = $cv_vals['file'][$i] / $cv_vals['bench'][$i] *100; else $cv_vals['index'][$i] = 0;	// index 
		}
		
		// cv names
		$demo['cv_name'][1] = "7-Eleven";
		$demo['cv_name'][2] = "Mac's/Couche-Tard/Circle K";
		$demo['cv_name'][3] = "Gas station convenience stores";
		$demo['cv_name'][4] = "Other convenience stores";

		
		// cv  - images
		for ( $i = 1; $i <= 16; $i ++) {
			$demo['cv_image'][$i] = "quick_rest/subway.jpg";
		}
		
		// cv  - sorted arrays
		for ( $i = 1; $i <=sizeof($cv_vals['file']); $i ++) {
			$cv['cv_p'][] = $cv_vals['file'][$i];
			$cv['cv_name'][] = $demo['cv_name'][$i];
			$cv['cv_image'][] = $demo['cv_image'][$i];
			$cv['cv_index'][] = $cv_vals['index'][$i];
		}
		
		// cv  - sorted results
		arsort($cv['cv_p']);
			foreach ($cv['cv_p'] as $key => $val) {
			$cv['sorted_cv_p'][] = $cv['cv_p'][$key];
			$cv['sorted_cv_name'][] = $cv['cv_name'][$key];
			$cv['sorted_cv_image'][] = $cv['cv_image'][$key];
			$cv['sorted_cv_index'][] = $cv['cv_index'][$key];
		}
		
		// drug  - convert to percentages and index value for both file and bench

		for ( $i = 0; $i < sizeof($demo['drug']); $i ++) {

			if($demo['drug'][0] >0) $drug_vals['file'][$i] = $demo['drug'][$i] / $demo['drug'][0] *100; else $drug_vals['file'][$i] = 0;				// percent 
			if($rbench['drug'][0] >0) $drug_vals['bench'][$i] = $rbench['drug'][$i] / $rbench['drug'][0] *100; else $drug_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['drug'][$i] >0) $drug_vals['index'][$i] = $drug_vals['file'][$i] / $drug_vals['bench'][$i] *100; else $drug_vals['index'][$i] = 0;	// index 
		}
		
		// drug names
		$demo['drug_name'][1] = "Guardian/IDA";
		$demo['drug_name'][2] = "Jean Coutu";
		$demo['drug_name'][3] = "London Drugs";
		$demo['drug_name'][4] = "Pharmasave";
		$demo['drug_name'][5] = "Proxim";
		$demo['drug_name'][6] = "Rexall/Pharma Plus";
		$demo['drug_name'][7] = "Shoppers Drug Mart";
		$demo['drug_name'][8] = "Big box";
		$demo['drug_name'][9] = "Grocery stores";
		$demo['drug_name'][10] = "Natural health";
		$demo['drug_name'][11] = "Online drug stores";
		$demo['drug_name'][12] = "Other Drug stores";

		$demo['drug_image'][1] = "drug/ida.png";
		$demo['drug_image'][2] = "drug/coutu.png";
		$demo['drug_image'][3] = "drug/london.png";
		$demo['drug_image'][4] = "drug/pharmasave.png";
		$demo['drug_image'][5] = "drug/proxim.jpg";
		$demo['drug_image'][6] = "drug/rexall.jpg";
		$demo['drug_image'][7] = "drug/sdm.png";
		$demo['drug_image'][8] = "drug/bigbox.png";
		$demo['drug_image'][9] = "drug/grocery.png";
		$demo['drug_image'][10] = "drug/natural.png";
		$demo['drug_image'][11] = "drug/onlinedrug.png";
		$demo['drug_image'][12] = "drug/otherdrug.png";
		
		
		// drug  - sorted arrays
		for ( $i = 1; $i <=sizeof($drug_vals['file']); $i ++) {
			$drug['drug_p'][] = $drug_vals['file'][$i];
			$drug['drug_name'][] = $demo['drug_name'][$i];
			$drug['drug_image'][] = $demo['drug_image'][$i];
			$drug['drug_index'][] = $drug_vals['index'][$i];
		}
		
		// drug  - sorted results
		arsort($drug['drug_p']);
			foreach ($drug['drug_p'] as $key => $val) {
			$drug['sorted_drug_p'][] = $drug['drug_p'][$key];
			$drug['sorted_drug_name'][] = $drug['drug_name'][$key];
			$drug['sorted_drug_image'][] = $drug['drug_image'][$key];
			$drug['sorted_drug_index'][] = $drug['drug_index'][$key];
		}
		
		// old clothing stores - reduce to 0
		 $i = 4; $clothing_vals['file'][$i] = 0; $rbench['clothing'][$i] = 0;
		
		
		// clothing  - convert to percentages and index value for both file and bench

		for ( $i = 0; $i < sizeof($demo['clothing']); $i ++) {

			 if($demo['clothing'][0] >0) $clothing_vals['file'][$i] = $demo['clothing'][$i] / $demo['clothing'][0] *100; else $clothing_vals['file'][$i] = 0;				// percent 
			if($rbench['clothing'][0] >0) $clothing_vals['bench'][$i] = $rbench['clothing'][$i] / $rbench['clothing'][0] *100; else $clothing_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['clothing'][$i] >0) $clothing_vals['index'][$i] = $clothing_vals['file'][$i] / $clothing_vals['bench'][$i] *100; else $clothing_vals['index'][$i] = 0;	// index 
		}
		
		// old closed down clothing stores - reduce to 0
		 $i = 4; $clothing_vals['file'][$i] = 0; $clothing_vals['bench'][$i] = 0; $clothing_vals['index'][$i] = 0; // danier
		 $i = 12; $clothing_vals['file'][$i] = 0; $clothing_vals['bench'][$i] = 0; $clothing_vals['index'][$i] = 0; // jacob
		
		
		
		// clothing names
		$demo['clothing_name'][1] = "Addition-Elle";
		$demo['clothing_name'][2] = "Banana Republic";
		$demo['clothing_name'][3] = "Children's clothing";
		$demo['clothing_name'][4] = "Danier Leather (closed)";
		$demo['clothing_name'][5] = "Eddie Bauer";
		$demo['clothing_name'][6] = "Fairweather";
		$demo['clothing_name'][7] = "Forever 21";
		$demo['clothing_name'][8] = "The Gap";
		$demo['clothing_name'][9] = "H&M";
		$demo['clothing_name'][10] = "Harry Rosen";
		$demo['clothing_name'][11] = "Holt Renfrew";
		$demo['clothing_name'][12] = "Jacob (closed)";
		$demo['clothing_name'][13] = "Joe Fresh";
		$demo['clothing_name'][14] = "Laura";
		$demo['clothing_name'][15] = "Le Chateau";
		$demo['clothing_name'][16] = "Marks";
		$demo['clothing_name'][17] = "Marshalls";
		$demo['clothing_name'][18] = "Mexx";
		$demo['clothing_name'][19] = "Moore's";
		$demo['clothing_name'][20] = "Old Navy";
		$demo['clothing_name'][21] = "Reitmans";
		$demo['clothing_name'][22] = "Roots";
		$demo['clothing_name'][23] = "Stitches";
		$demo['clothing_name'][24] = "Suzy Shier";
		$demo['clothing_name'][25] = "Tip Top Tailors";
		$demo['clothing_name'][26] = "Winners";
		$demo['clothing_name'][27] = "Zara";
		$demo['clothing_name'][28] = "Jean stores ";
		$demo['clothing_name'][29] = "Maternity stores";
		$demo['clothing_name'][30] = "Specialty / Lingerie";
		$demo['clothing_name'][31] = "Department stores";
		$demo['clothing_name'][32] = "Online clothing ";
		$demo['clothing_name'][33] = "Other clothing ";		
		
		$demo['clothing_image'][1] = "clothing/additionelle.png";
		$demo['clothing_image'][2] = "clothing/br.jpg";
		$demo['clothing_image'][3] = "clothing/childrens.png";
		$demo['clothing_image'][4] = "clothing/additionelle.png";
		$demo['clothing_image'][5] = "clothing/eb.png";
		$demo['clothing_image'][6] = "clothing/fairweather.png";
		$demo['clothing_image'][7] = "clothing/21.png";
		$demo['clothing_image'][8] = "clothing/gap.png";
		$demo['clothing_image'][9] = "clothing/hm.png";
		$demo['clothing_image'][10] = "clothing/hr.png";
		$demo['clothing_image'][11] = "clothing/holt.png";
		$demo['clothing_image'][12] = "clothing/additionelle.png";
		$demo['clothing_image'][13] = "clothing/joe.png";
		$demo['clothing_image'][14] = "clothing/laura.png";
		$demo['clothing_image'][15] = "clothing/lc.png";
		$demo['clothing_image'][16] = "clothing/marks.png";
		$demo['clothing_image'][17] = "clothing/marshall.jpg";
		$demo['clothing_image'][18] = "clothing/mexx.png";
		$demo['clothing_image'][19] = "clothing/moores.jpg";
		$demo['clothing_image'][20] = "clothing/oldnavy.png";
		$demo['clothing_image'][21] = "clothing/reitmans.png";
		$demo['clothing_image'][22] = "clothing/roots.png";
		$demo['clothing_image'][23] = "clothing/stitches.png";
		$demo['clothing_image'][24] = "clothing/suzy.png";
		$demo['clothing_image'][25] = "clothing/tip.png";
		$demo['clothing_image'][26] = "clothing/winners.png";
		$demo['clothing_image'][27] = "clothing/zara.png";
		$demo['clothing_image'][28] = "clothing/jean.png";
		$demo['clothing_image'][29] = "clothing/maturnity.png";
		$demo['clothing_image'][30] = "clothing/specialty.png";
		$demo['clothing_image'][31] = "clothing/dept.jpg";
		$demo['clothing_image'][32] = "clothing/online.png";
		$demo['clothing_image'][33] = "clothing/other.png";

		
		// clothing  - sorted arrays
		for ( $i = 1; $i <=sizeof($clothing_vals['file']); $i ++) {
			$clothing['clothing_p'][] = $clothing_vals['file'][$i];
			$clothing['clothing_name'][] = $demo['clothing_name'][$i];
			$clothing['clothing_image'][] = $demo['clothing_image'][$i];
			$clothing['clothing_index'][] = $clothing_vals['index'][$i];
		}
		
		// clothing  - sorted results
		arsort($clothing['clothing_p']);
			foreach ($clothing['clothing_p'] as $key => $val) {
			$clothing['sorted_clothing_p'][] = $clothing['clothing_p'][$key];
			$clothing['sorted_clothing_name'][] = $clothing['clothing_name'][$key];
			$clothing['sorted_clothing_image'][] = $clothing['clothing_image'][$key];
			$clothing['sorted_clothing_index'][] = $clothing['clothing_index'][$key];
		}
		
		// shoe  - convert to percentages and index value for both file and bench

		for ( $i = 0; $i < sizeof($demo['shoe']); $i ++) {

			if($demo['shoe'][0] >0) $shoe_vals['file'][$i] = $demo['shoe'][$i] / $demo['shoe'][0] *100; else $shoe_vals['file'][$i] = 0;				// percent 
			if($rbench['shoe'][0] >0) $shoe_vals['bench'][$i] = $rbench['shoe'][$i] / $rbench['shoe'][0] *100; else $shoe_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['shoe'][$i] >0) $shoe_vals['index'][$i] = $shoe_vals['file'][$i] / $shoe_vals['bench'][$i] *100; else $shoe_vals['index'][$i] = 0;	// index 
		}
		
		// shoe names
		$demo['shoe_name'][1] = "Aldo";
		$demo['shoe_name'][2] = "Browns/B2";
		$demo['shoe_name'][3] = "Globo";
		$demo['shoe_name'][4] = "Little Burgundy";
		$demo['shoe_name'][5] = "Naturalizer";
		$demo['shoe_name'][6] = "Nine West";
		$demo['shoe_name'][7] = "Payless";
		$demo['shoe_name'][8] = "SoftMoc";
		$demo['shoe_name'][9] = "Spring";
		$demo['shoe_name'][10] = "The Shoe Company";
		$demo['shoe_name'][11] = "Town Shoes";
		$demo['shoe_name'][12] = "Department stores";
		$demo['shoe_name'][13] = "Sports stores (any)";
		$demo['shoe_name'][14] = "Online shoe stores";
		$demo['shoe_name'][15] = "Other Shoe stores";
		
		$demo['shoe_image'][1] = "shoe/aldo.png";
		$demo['shoe_image'][2] = "shoe/browns.png";
		$demo['shoe_image'][3] = "shoe/globo.png";
		$demo['shoe_image'][4] = "shoe/lb.png";
		$demo['shoe_image'][5] = "shoe/nat.png";
		$demo['shoe_image'][6] = "shoe/nine.png";
		$demo['shoe_image'][7] = "shoe/payless.jpg";
		$demo['shoe_image'][8] = "shoe/softmac.jpg";
		$demo['shoe_image'][9] = "shoe/spring.jpg";
		$demo['shoe_image'][10] = "shoe/shoeco.png";
		$demo['shoe_image'][11] = "shoe/town.png";
		$demo['shoe_image'][12] = "shoe/dept.jpg";
		$demo['shoe_image'][13] = "shoe/other.jpg";
		$demo['shoe_image'][14] = "shoe/online.png";
		$demo['shoe_image'][15] = "shoe/other.png";
	
		// shoe  - sorted arrays
		for ( $i = 1; $i <=sizeof($shoe_vals['file']); $i ++) {
			$shoe['shoe_p'][] = $shoe_vals['file'][$i];
			$shoe['shoe_name'][] = $demo['shoe_name'][$i];
			$shoe['shoe_image'][] = $demo['shoe_image'][$i];
			$shoe['shoe_index'][] = $shoe_vals['index'][$i];
		}
		
		// shoe  - sorted results
		arsort($shoe['shoe_p']);
			foreach ($shoe['shoe_p'] as $key => $val) {
			$shoe['sorted_shoe_p'][] = $shoe['shoe_p'][$key];
			$shoe['sorted_shoe_name'][] = $shoe['shoe_name'][$key];
			$shoe['sorted_shoe_image'][] = $shoe['shoe_image'][$key];
			$shoe['sorted_shoe_index'][] = $shoe['shoe_index'][$key];
		}
		

		// book  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['book']); $i ++) {
			if($demo['book'][0] >0) $book_vals['file'][$i] = $demo['book'][$i] / $demo['book'][0] *100; else $book_vals['file'][$i] = 0;				// percent 
			if($rbench['book'][0] >0) $book_vals['bench'][$i] = $rbench['book'][$i] / $rbench['book'][0] *100; else $book_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['book'][$i] >0) $book_vals['index'][$i] = $book_vals['file'][$i] / $book_vals['bench'][$i] *100; else $book_vals['index'][$i] = 0;	// index 
		}
		
		// book names
		$demo['book_name'][1] = "Chapters (store)";
		$demo['book_name'][2] = "Coles";
		$demo['book_name'][3] = "Big box";
		$demo['book_name'][4] = "Department stores";
		$demo['book_name'][5] = "Amazon";
		$demo['book_name'][6] = "Indigo.ca";
		$demo['book_name'][7] = "Other Online ";
		$demo['book_name'][8] = "Other Book stores";

		
		// book  - images
		$demo['book_image'][1] = "book/chapters.png";
		$demo['book_image'][2] = "book/coles.png";
		$demo['book_image'][3] = "book/bigbox.png";
		$demo['book_image'][4] = "book/dept.jpg";
		$demo['book_image'][5] = "book/amazon.png";
		$demo['book_image'][6] = "book/indigo.png";
		$demo['book_image'][7] = "book/oobook.png";
		$demo['book_image'][8] = "book/other.png";

		
		// book  - sorted arrays
		for ( $i = 1; $i <=sizeof($book_vals['file']); $i ++) {
			$book['book_p'][] = $book_vals['file'][$i];
			$book['book_name'][] = $demo['book_name'][$i];
			$book['book_image'][] = $demo['book_image'][$i];
			$book['book_index'][] = $book_vals['index'][$i];
		}
		
		// book  - sorted results
		arsort($book['book_p']);
			foreach ($book['book_p'] as $key => $val) {
			$book['sorted_book_p'][] = $book['book_p'][$key];
			$book['sorted_book_name'][] = $book['book_name'][$key];
			$book['sorted_book_image'][] = $book['book_image'][$key];
			$book['sorted_book_index'][] = $book['book_index'][$key];
		}
		
		// jewel  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['jewel']); $i ++) {

			if($demo['jewel'][0] >0) $jewel_vals['file'][$i] = $demo['jewel'][$i] / $demo['jewel'][0] *100; else $jewel_vals['file'][$i] = 0;				// percent 
			if($rbench['jewel'][0] >0) $jewel_vals['bench'][$i] = $rbench['jewel'][$i] / $rbench['jewel'][0] *100; else $jewel_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['jewel'][$i] >0) $jewel_vals['index'][$i] = $jewel_vals['file'][$i] / $jewel_vals['bench'][$i] *100; else $jewel_vals['index'][$i] = 0;	// index 
		}
		
		// jewel names
		$demo['jewel_name'][1] = "Ben Moss Jewellers";
		$demo['jewel_name'][2] = "High-end  stores ";
		$demo['jewel_name'][3] = "Mappins Jewellers";
		$demo['jewel_name'][4] = "Michael Hill Jeweller";
		$demo['jewel_name'][5] = "Peoples";
		$demo['jewel_name'][6] = "Spence Diamonds";
		$demo['jewel_name'][7] = "Big box (Costco)";
		$demo['jewel_name'][8] = "Department stores";
		$demo['jewel_name'][9] = "Online jewellery stores";
		$demo['jewel_name'][10] = "Other Jewellery stores";

		
		// jewel  - images
		for ( $i = 1; $i <= 16; $i ++) {
			$demo['jewel_image'][$i] = "quick_rest/subway.jpg";
		}
		
		// jewel  - sorted arrays
		for ( $i = 1; $i <=sizeof($jewel_vals['file']); $i ++) {
			$jewel['jewel_p'][] = $jewel_vals['file'][$i];
			$jewel['jewel_name'][] = $demo['jewel_name'][$i];
			$jewel['jewel_image'][] = $demo['jewel_image'][$i];
			$jewel['jewel_index'][] = $jewel_vals['index'][$i];
		}
		
		// jewel  - sorted results
		arsort($jewel['jewel_p']);
			foreach ($jewel['jewel_p'] as $key => $val) {
			$jewel['sorted_jewel_p'][] = $jewel['jewel_p'][$key];
			$jewel['sorted_jewel_name'][] = $jewel['jewel_name'][$key];
			$jewel['sorted_jewel_image'][] = $jewel['jewel_image'][$key];
			$jewel['sorted_jewel_index'][] = $jewel['jewel_index'][$key];
		}
		

		// furn  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['furn']); $i ++) {

			if($demo['furn'][0] >0) $furn_vals['file'][$i] = $demo['furn'][$i] / $demo['furn'][0] *100; else $furn_vals['file'][$i] = 0;				// percent 
			if($rbench['furn'][0] >0) $furn_vals['bench'][$i] = $rbench['furn'][$i] / $rbench['furn'][0] *100; else $furn_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['furn'][$i] >0) $furn_vals['index'][$i] = $furn_vals['file'][$i] / $furn_vals['bench'][$i] *100; else $furn_vals['index'][$i] = 0;	// index 
		}
		
		// old closed down stores - reduce to 0
		 $i = 7; $furn_vals['file'][$i]  = 0; $furn_vals['bench'][$i] = 0; $furn_vals['index'][$i] = 0; // United
		
		// furn names
		$demo['furn_name'][1] = "Ikea";
		$demo['furn_name'][2] = "La-Z-Boy";
		$demo['furn_name'][3] = "Leon's";
		$demo['furn_name'][4] = "Pier 1 Imports";
		$demo['furn_name'][5] = "Sleep Country";
		$demo['furn_name'][6] = "The Brick";
		$demo['furn_name'][7] = "United Furniture ";
		$demo['furn_name'][8] = "Urban Barn";
		$demo['furn_name'][9] = "Department stores";
		$demo['furn_name'][10] = "Electronics stores";
		$demo['furn_name'][11] = "Online furniture stores";
		$demo['furn_name'][12] = "Other Furniture stores";

		
		// furn  - images
		$demo['furn_image'][1] = "furniture/ikea.png";
		$demo['furn_image'][2] = "furniture/lazboy.png";
		$demo['furn_image'][3] = "furniture/leons.png";
		$demo['furn_image'][4] = "furniture/pier1.png";
		$demo['furn_image'][5] = "furniture/sleep.jpg";
		$demo['furn_image'][6] = "furniture/brick.png";
		$demo['furn_image'][7] = "furniture/ikea.png";
		$demo['furn_image'][8] = "furniture/ub.png";
		$demo['furn_image'][9] = "furniture/dept.jpg";
		$demo['furn_image'][10] = "furniture/elect.png";
		$demo['furn_image'][11] = "furniture/online.png";
		$demo['furn_image'][12] = "furniture/other.png";
		
		
		// furn  - sorted arrays
		for ( $i = 1; $i <=sizeof($furn_vals['file']); $i ++) {
			$furn['furn_p'][] = $furn_vals['file'][$i];
			$furn['furn_name'][] = $demo['furn_name'][$i];
			$furn['furn_image'][] = $demo['furn_image'][$i];
			$furn['furn_index'][] = $furn_vals['index'][$i];
		}
		
		// furn  - sorted results
		arsort($furn['furn_p']);
			foreach ($furn['furn_p'] as $key => $val) {
			$furn['sorted_furn_p'][] = $furn['furn_p'][$key];
			$furn['sorted_furn_name'][] = $furn['furn_name'][$key];
			$furn['sorted_furn_image'][] = $furn['furn_image'][$key];
			$furn['sorted_furn_index'][] = $furn['furn_index'][$key];
		}
		

		// home  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['home']); $i ++) {

			if($demo['home'][0] >0) $home_vals['file'][$i] = $demo['home'][$i] / $demo['home'][0] *100; else $home_vals['file'][$i] = 0;				// percent 
			if($rbench['home'][0] >0) $home_vals['bench'][$i] = $rbench['home'][$i] / $rbench['home'][0] *100; else $home_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['home'][$i] >0) $home_vals['index'][$i] = $home_vals['file'][$i] / $home_vals['bench'][$i] *100; else $home_vals['index'][$i] = 0;	// index 
		}
		
		// home names
		$demo['home_name'][1] = "Canadian Tire";
		$demo['home_name'][2] = "Home Depot";
		$demo['home_name'][3] = "Home Hardware";
		$demo['home_name'][4] = "Home Outfitters";
		$demo['home_name'][5] = "Home Sense";
		$demo['home_name'][6] = "Lee Valley Tools";
		$demo['home_name'][7] = "Lowe's ";
		$demo['home_name'][8] = "Pier 1 Imports";
		$demo['home_name'][9] = "Rona ";
		$demo['home_name'][10] = "Lighting stores";
		$demo['home_name'][11] = "Department store";
		$demo['home_name'][12] = "Independent hardware";
		$demo['home_name'][13] = "Online stores";
		$demo['home_name'][14] = "Other Decor stores";
		$demo['home_name'][15] = "Other Improve. stores";

		
		// home  - images
		$demo['home_image'][1] = "himprove/ctire.jpg";
		$demo['home_image'][2] = "himprove/depot.jpg";
		$demo['home_image'][3] = "himprove/hh.png";
		$demo['home_image'][4] = "himprove/ho.png";
		$demo['home_image'][5] = "himprove/hs.jpg";
		$demo['home_image'][6] = "himprove/lee.jpg";
		$demo['home_image'][7] = "himprove/lowes.png";
		$demo['home_image'][8] = "himprove/pier1.png";
		$demo['home_image'][9] = "himprove/rona.png";
		$demo['home_image'][10] = "himprove/lighting.jpg";
		$demo['home_image'][11] = "himprove/dept.jpg";
		$demo['home_image'][12] = "himprove/indi.jpg";
		$demo['home_image'][13] = "himprove/online.jpg";
		$demo['home_image'][14] = "himprove/other.jpg";
		$demo['home_image'][15] = "himprove/oimprove.jpg";
		
		
		
		// home  - sorted arrays
		for ( $i = 1; $i <=sizeof($home_vals['file']); $i ++) {
			$home['home_p'][] = $home_vals['file'][$i];
			$home['home_name'][] = $demo['home_name'][$i];
			$home['home_image'][] = $demo['home_image'][$i];
			$home['home_index'][] = $home_vals['index'][$i];
		}
		
		// home  - sorted results
		arsort($home['home_p']);
			foreach ($home['home_p'] as $key => $val) {
			$home['sorted_home_p'][] = $home['home_p'][$key];
			$home['sorted_home_name'][] = $home['home_name'][$key];
			$home['sorted_home_image'][] = $home['home_image'][$key];
			$home['sorted_home_index'][] = $home['home_index'][$key];
		}
		// eye  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['eye']); $i ++) {

			if($demo['eye'][0] >0) $eye_vals['file'][$i] = $demo['eye'][$i] / $demo['eye'][0] *100; else $eye_vals['file'][$i] = 0;				// percent 
			if($rbench['eye'][0] >0) $eye_vals['bench'][$i] = $rbench['eye'][$i] / $rbench['eye'][0] *100; else $eye_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['eye'][$i] >0) $eye_vals['index'][$i] = $eye_vals['file'][$i] / $eye_vals['bench'][$i] *100; else $eye_vals['index'][$i] = 0;	// index 
		}
		
		// eye names
		$demo['eye_name'][1] = "Hakim Optical";
		$demo['eye_name'][2] = "IRIS";
		$demo['eye_name'][3] = "Lenscrafters";
		$demo['eye_name'][4] = "Pearle Vision";
		$demo['eye_name'][5] = "Sunglass Hut";
		$demo['eye_name'][6] = "Vogue Optical";
		$demo['eye_name'][7] = "Big box";
		$demo['eye_name'][8] = "Department stores";
		$demo['eye_name'][9] = "Online optical stores";
		$demo['eye_name'][10] = "Other Optical stores";

		
		// eye  - images
		for ( $i = 1; $i <= 16; $i ++) {
			$demo['eye_image'][$i] = "quick_rest/subway.jpg";
		}
		
		// eye  - sorted arrays
		for ( $i = 1; $i <=sizeof($eye_vals['file']); $i ++) {
			$eye['eye_p'][] = $eye_vals['file'][$i];
			$eye['eye_name'][] = $demo['eye_name'][$i];
			$eye['eye_image'][] = $demo['eye_image'][$i];
			$eye['eye_index'][] = $eye_vals['index'][$i];
		}
		
		// eye  - sorted results
		arsort($eye['eye_p']);
			foreach ($eye['eye_p'] as $key => $val) {
			$eye['sorted_eye_p'][] = $eye['eye_p'][$key];
			$eye['sorted_eye_name'][] = $eye['eye_name'][$key];
			$eye['sorted_eye_image'][] = $eye['eye_image'][$key];
			$eye['sorted_eye_index'][] = $eye['eye_index'][$key];
		}
		// glasses  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['glasses']); $i ++) {

			if($demo['glasses'][0] >0) $glasses_vals['file'][$i] = $demo['glasses'][$i] / $demo['glasses'][0] *100; else $glasses_vals['file'][$i] = 0;				// percent 
			if($rbench['glasses'][0] >0) $glasses_vals['bench'][$i] = $rbench['glasses'][$i] / $rbench['glasses'][0] *100; else $glasses_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['glasses'][$i] >0) $glasses_vals['index'][$i] = $glasses_vals['file'][$i] / $glasses_vals['bench'][$i] *100; else $glasses_vals['index'][$i] = 0;	// index 
		}
		
		// glasses names
		$demo['glasses_name'][1] = "Do not wear prescription glasses";
		$demo['glasses_name'][2] = "Glasses";
		$demo['glasses_name'][3] = "Contact lenses";
		$demo['glasses_name'][4] = "Both glasses and contact lenses";
		$demo['glasses_name'][5] = "Eyewear spend: Nothing";
		$demo['glasses_name'][6] = "Eyewear spend: $1-$99";
		$demo['glasses_name'][7] = "Eyewear spend: $100-$199";
		$demo['glasses_name'][8] = "Eyewear spend: $200-$399";
		$demo['glasses_name'][9] = "Eyewear spend: $400 or more";
		$demo['glasses_name'][10] = "Very likely";
		$demo['glasses_name'][11] = "Somewhat likely";
		$demo['glasses_name'][12] = "Not very likely";
		$demo['glasses_name'][13] = "Not at all likely";
		$demo['glasses_name'][14] = "Have already had one";

		
		// glasses  - images
		for ( $i = 1; $i <= 16; $i ++) {
			$demo['glasses_image'][$i] = "quick_rest/subway.jpg";
		}
		
		// glasses  - sorted arrays
		for ( $i = 1; $i <=sizeof($glasses_vals['file']); $i ++) {
			$glasses['glasses_p'][] = $glasses_vals['file'][$i];
			$glasses['glasses_name'][] = $demo['glasses_name'][$i];
			$glasses['glasses_image'][] = $demo['glasses_image'][$i];
			$glasses['glasses_index'][] = $glasses_vals['index'][$i];
		}
		
		// glasses  - sorted results
		arsort($glasses['glasses_p']);
			foreach ($glasses['glasses_p'] as $key => $val) {
			$glasses['sorted_glasses_p'][] = $glasses['glasses_p'][$key];
			$glasses['sorted_glasses_name'][] = $glasses['glasses_name'][$key];
			$glasses['sorted_glasses_image'][] = $glasses['glasses_image'][$key];
			$glasses['sorted_glasses_index'][] = $glasses['glasses_index'][$key];
		}
		

		// elect  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['elect']); $i ++) {

			if($demo['elect'][0] >0) $elect_vals['file'][$i] = $demo['elect'][$i] / $demo['elect'][0] *100; else $elect_vals['file'][$i] = 0;				// percent 
			if($rbench['elect'][0] >0) $elect_vals['bench'][$i] = $rbench['elect'][$i] / $rbench['elect'][0] *100; else $elect_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['elect'][$i] >0) $elect_vals['index'][$i] = $elect_vals['file'][$i] / $elect_vals['bench'][$i] *100; else $elect_vals['index'][$i] = 0;	// index 
		}
		
		// old closed down stores - reduce to 0
		 $i = 5; $elect_vals['file'][$i]  = 0; $elect_vals['bench'][$i] = 0; $elect_vals['index'][$i] = 0; // Future Shop
		
		// elect names
		$demo['elect_name'][1] = "Apple (online)";
		$demo['elect_name'][2] = "Apple (store)";
		$demo['elect_name'][3] = "Best Buy";
		$demo['elect_name'][4] = "Dell";
		$demo['elect_name'][5] = "Future Shop";
		$demo['elect_name'][6] = "Staples";
		$demo['elect_name'][7] = "Sony Store";
		$demo['elect_name'][8] = "The Source";
		$demo['elect_name'][9] = "Big box";
		$demo['elect_name'][10] = "Department stores";
		$demo['elect_name'][11] = "Furniture stores ";
		$demo['elect_name'][12] = "Other online stores";
		$demo['elect_name'][13] = "Other elect. stores";

		
		// elect  - images
		$demo['elect_image'][1] = "elect/apple.png";
		$demo['elect_image'][2] = "elect/apple2.png";
		$demo['elect_image'][3] = "elect/bb.png";
		$demo['elect_image'][4] = "elect/dell.png";
		$demo['elect_image'][5] = "elect/apple.png";
		$demo['elect_image'][6] = "elect/staples.png";
		$demo['elect_image'][7] = "elect/sony.png";
		$demo['elect_image'][8] = "elect/source.png";
		$demo['elect_image'][9] = "elect/bigbox.png";
		$demo['elect_image'][10] = "elect/dept.jpg";
		$demo['elect_image'][11] = "elect/furniture.jpg";
		$demo['elect_image'][12] = "elect/other.jpg";
		$demo['elect_image'][13] = "elect/oelect.jpg";

		
		// elect  - sorted arrays
		for ( $i = 1; $i <=sizeof($elect_vals['file']); $i ++) {
			$elect['elect_p'][] = $elect_vals['file'][$i];
			$elect['elect_name'][] = $demo['elect_name'][$i];
			$elect['elect_image'][] = $demo['elect_image'][$i];
			$elect['elect_index'][] = $elect_vals['index'][$i];
		}
		
		// elect  - sorted results
		arsort($elect['elect_p']);
			foreach ($elect['elect_p'] as $key => $val) {
			$elect['sorted_elect_p'][] = $elect['elect_p'][$key];
			$elect['sorted_elect_name'][] = $elect['elect_name'][$key];
			$elect['sorted_elect_image'][] = $elect['elect_image'][$key];
			$elect['sorted_elect_index'][] = $elect['elect_index'][$key];
		}

		// office  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['office']); $i ++) {

			if($demo['office'][0] >0) $office_vals['file'][$i] = $demo['office'][$i] / $demo['office'][0] *100; else $office_vals['file'][$i] = 0;				// percent 
			if($rbench['office'][0] >0) $office_vals['bench'][$i] = $rbench['office'][$i] / $rbench['office'][0] *100; else $office_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['office'][$i] >0) $office_vals['index'][$i] = $office_vals['file'][$i] / $office_vals['bench'][$i] *100; else $office_vals['index'][$i] = 0;	// index 
		}
		
		// office names
		$demo['office_name'][1] = "Staples";
		$demo['office_name'][2] = "Grand and Toy";
		$demo['office_name'][3] = "Big box";
		$demo['office_name'][4] = "Department stores (any)";
		$demo['office_name'][5] = "Online Office stores";
		$demo['office_name'][6] = "Other Office stores";

		
		// office  - images
		for ( $i = 1; $i <= 16; $i ++) {
			$demo['office_image'][$i] = "quick_rest/subway.jpg";
		}
		
		// office  - sorted arrays
		for ( $i = 1; $i <=sizeof($office_vals['file']); $i ++) {
			$office['office_p'][] = $office_vals['file'][$i];
			$office['office_name'][] = $demo['office_name'][$i];
			$office['office_image'][] = $demo['office_image'][$i];
			$office['office_index'][] = $office_vals['index'][$i];
		}
		
		// office  - sorted results
		arsort($office['office_p']);
			foreach ($office['office_p'] as $key => $val) {
			$office['sorted_office_p'][] = $office['office_p'][$key];
			$office['sorted_office_name'][] = $office['office_name'][$key];
			$office['sorted_office_image'][] = $office['office_image'][$key];
			$office['sorted_office_index'][] = $office['office_index'][$key];
		}
	
	
		// sport  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['sport']); $i ++) {
	
			if($demo['sport'][0] >0) $sport_vals['file'][$i] = $demo['sport'][$i] / $demo['sport'][0] *100; else $sport_vals['file'][$i] = 0;				// percent 
			if($rbench['sport'][0] >0) $sport_vals['bench'][$i] = $rbench['sport'][$i] / $rbench['sport'][0] *100; else $sport_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['sport'][$i] >0) $sport_vals['index'][$i] = $sport_vals['file'][$i] / $sport_vals['bench'][$i] *100; else $sport_vals['index'][$i] = 0;	// index 
		}
		
		// old closed down stores - reduce to 0
		 $i = 1; $sport_vals['file'][$i]  = 0; $sport_vals['bench'][$i] = 0; $sport_vals['index'][$i] = 0; // Athletes World
		
		// sport names
		$demo['sport_name'][1] = "Athletes World";
		$demo['sport_name'][2] = "Champs";
		$demo['sport_name'][3] = "Foot Locker";
		$demo['sport_name'][4] = "Golf Town";
		$demo['sport_name'][5] = "Lululemon Athletica";
		$demo['sport_name'][6] = "Mountain Equipment";
		$demo['sport_name'][7] = "Play it Again Sports";
		$demo['sport_name'][8] = "Sport Chek";
		$demo['sport_name'][9] = "Sporting Life";
		$demo['sport_name'][10] = "Sports Experts";
		$demo['sport_name'][11] = "The Running Room";
		$demo['sport_name'][12] = "Big box";
		$demo['sport_name'][13] = "Department stores";
		$demo['sport_name'][14] = "Online Sporting Goods";
		$demo['sport_name'][15] = "Other Sporting Good";

		
		// sport  - images
		$demo['sport_image'][1] = "sports/champs.png";
		$demo['sport_image'][2] = "sports/champs.png";
		$demo['sport_image'][3] = "sports/fl.png";
		$demo['sport_image'][4] = "sports/gt.jpg";
		$demo['sport_image'][5] = "sports/lulu.png";
		$demo['sport_image'][6] = "sports/mec.png";
		$demo['sport_image'][7] = "sports/play.jpg";
		$demo['sport_image'][8] = "sports/sc.png";
		$demo['sport_image'][9] = "sports/slife.png";
		$demo['sport_image'][10] = "sports/se.png";
		$demo['sport_image'][11] = "sports/rroom.png";
		$demo['sport_image'][12] = "sports/bigbox.png";
		$demo['sport_image'][13] = "sports/dept.jpg";
		$demo['sport_image'][14] = "sports/online.jpg";
		$demo['sport_image'][15] = "sports/other.jpg";

		
		// sport  - sorted arrays
		for ( $i = 1; $i <=sizeof($sport_vals['file']); $i ++) {
			$sport['sport_p'][] = $sport_vals['file'][$i];
			$sport['sport_name'][] = $demo['sport_name'][$i];
			$sport['sport_image'][] = $demo['sport_image'][$i];
			$sport['sport_index'][] = $sport_vals['index'][$i];
		}
		
		// sport  - sorted results
		arsort($sport['sport_p']);
			foreach ($sport['sport_p'] as $key => $val) {
			$sport['sorted_sport_p'][] = $sport['sport_p'][$key];
			$sport['sorted_sport_name'][] = $sport['sport_name'][$key];
			$sport['sorted_sport_image'][] = $sport['sport_image'][$key];
			$sport['sorted_sport_index'][] = $sport['sport_index'][$key];
		}
		
	
		// toy  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['toy']); $i ++) {
			
			if($demo['toy'][0] >0) $toy_vals['file'][$i] = $demo['toy'][$i] / $demo['toy'][0] *100; else $toy_vals['file'][$i] = 0;				// percent 
			if($rbench['toy'][0] >0) $toy_vals['bench'][$i] = $rbench['toy'][$i] / $rbench['toy'][0] *100; else $toy_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['toy'][$i] >0) $toy_vals['index'][$i] = $toy_vals['file'][$i] / $toy_vals['bench'][$i] *100; else $toy_vals['index'][$i] = 0;	// index 
		}
		
		// toy names
		$demo['toy_name'][1] = "Disney Store";
		$demo['toy_name'][2] = "EB Games";
		$demo['toy_name'][3] = "Mastermind";
		$demo['toy_name'][4] = "Toys 'R Us";
		$demo['toy_name'][5] = "Big box";
		$demo['toy_name'][6] = "Department stores";
		$demo['toy_name'][7] = "Online Toy stores";
		$demo['toy_name'][8] = "Other Toy stores";

		
		// toy  - images
		$demo['toy_image'][1] = "toy/disney.png";
		$demo['toy_image'][2] = "toy/eb.jpg";
		$demo['toy_image'][3] = "toy/mm.jpg";
		$demo['toy_image'][4] = "toy/toysrus.png";
		$demo['toy_image'][5] = "toy/bigbox.png";
		$demo['toy_image'][6] = "toy/dept.jpg";
		$demo['toy_image'][7] = "toy/online.jpg";
		$demo['toy_image'][8] = "toy/other.jpg";
		
		// toy  - sorted arrays
		for ( $i = 1; $i <=sizeof($toy_vals['file']); $i ++) {
			$toy['toy_p'][] = $toy_vals['file'][$i];
			$toy['toy_name'][] = $demo['toy_name'][$i];
			$toy['toy_image'][] = $demo['toy_image'][$i];
			$toy['toy_index'][] = $toy_vals['index'][$i];
		}
		
		// toy  - sorted results
		arsort($toy['toy_p']);
			foreach ($toy['toy_p'] as $key => $val) {
			$toy['sorted_toy_p'][] = $toy['toy_p'][$key];
			$toy['sorted_toy_name'][] = $toy['toy_name'][$key];
			$toy['sorted_toy_image'][] = $toy['toy_image'][$key];
			$toy['sorted_toy_index'][] = $toy['toy_index'][$key];
		}
		
		
		// pet  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['pet']); $i ++) {
		
			if($demo['pet'][0] >0) $pet_vals['file'][$i] = $demo['pet'][$i] / $demo['pet'][0] *100; else $pet_vals['file'][$i] = 0;				// percent 
			if($rbench['pet'][0] >0) $pet_vals['bench'][$i] = $rbench['pet'][$i] / $rbench['pet'][0] *100; else $pet_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['pet'][$i] >0) $pet_vals['index'][$i] = $pet_vals['file'][$i] / $pet_vals['bench'][$i] *100; else $pet_vals['index'][$i] = 0;	// index 
		}
		
		// pet names
		$demo['pet_name'][1] = "Global Pet Foods";
		$demo['pet_name'][2] = "Pet Valu";
		$demo['pet_name'][3] = "Petsmart";
		$demo['pet_name'][4] = "PJ's Pets";
		$demo['pet_name'][5] = "Big box";
		$demo['pet_name'][6] = "Department stores";
		$demo['pet_name'][7] = "Grocery stores";
		$demo['pet_name'][8] = "Veterinarian";
		$demo['pet_name'][9] = "Online pet supply";
		$demo['pet_name'][10] = "Other Pet Supply";

		// old closed down stores - reduce to 0
		 $i = 4; $pet_vals['file'][$i]  = 0; $pet_vals['bench'][$i] = 0; $pet_vals['index'][$i] = 0; // PJ's Pets
		 
		// pet  - images
		$demo['pet_image'][1] = "pet/global.png";
		$demo['pet_image'][2] = "pet/petvalu.jpg";
		$demo['pet_image'][3] = "pet/ps.png";
		$demo['pet_image'][4] = "pet/global.png";
		$demo['pet_image'][5] = "pet/bigbox.png";
		$demo['pet_image'][6] = "pet/dept.jpg";
		$demo['pet_image'][7] = "pet/othergrocery.jpg";
		$demo['pet_image'][8] = "pet/vet.jpg";
		$demo['pet_image'][9] = "pet/online.jpg";
		$demo['pet_image'][10] = "pet/other.jpg";
		
		
		// pet  - sorted arrays
		for ( $i = 1; $i <=sizeof($pet_vals['file']); $i ++) {
			$pet['pet_p'][] = $pet_vals['file'][$i];
			$pet['pet_name'][] = $demo['pet_name'][$i];
			$pet['pet_image'][] = $demo['pet_image'][$i];
			$pet['pet_index'][] = $pet_vals['index'][$i];
		}
		
		// pet  - sorted results
		arsort($pet['pet_p']);
			foreach ($pet['pet_p'] as $key => $val) {
			$pet['sorted_pet_p'][] = $pet['pet_p'][$key];
			$pet['sorted_pet_name'][] = $pet['pet_name'][$key];
			$pet['sorted_pet_image'][] = $pet['pet_image'][$key];
			$pet['sorted_pet_index'][] = $pet['pet_index'][$key];
		}
		
		// pet_own  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['pet_own']); $i ++) {

			if($demo['pet_own'][0] >0) $pet_own_vals['file'][$i] = $demo['pet_own'][$i] / $demo['pet_own'][0] *100; else $pet_own_vals['file'][$i] = 0;				// percent 
			if($rbench['pet_own'][0] >0) $pet_own_vals['bench'][$i] = $rbench['pet_own'][$i] / $rbench['pet_own'][0] *100; else $pet_own_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['pet_own'][$i] >0) $pet_own_vals['index'][$i] = $pet_own_vals['file'][$i] / $pet_own_vals['bench'][$i] *100; else $pet_own_vals['index'][$i] = 0;	// index 
		}
		
		// pet_own names
		$demo['pet_own_name'][1] = "Any Pets";
		$demo['pet_own_name'][2] = "Cats";
		$demo['pet_own_name'][3] = "Dogs";
		$demo['pet_own_name'][4] = "Birds";
		$demo['pet_own_name'][5] = "Fishes";
		$demo['pet_own_name'][6] = "Other Animals";

		
		// pet_own  - images
		for ( $i = 1; $i <= 16; $i ++) {
			$demo['pet_own_image'][$i] = "quick_rest/subway.jpg";
		}
		
		// pet_own  - sorted arrays
		for ( $i = 1; $i <=sizeof($pet_own_vals['file']); $i ++) {
			$pet_own['pet_own_p'][] = $pet_own_vals['file'][$i];
			$pet_own['pet_own_name'][] = $demo['pet_own_name'][$i];
			$pet_own['pet_own_image'][] = $demo['pet_own_image'][$i];
			$pet_own['pet_own_index'][] = $pet_own_vals['index'][$i];
		}
		
		// pet_own  - sorted results
		arsort($pet_own['pet_own_p']);
			foreach ($pet_own['pet_own_p'] as $key => $val) {
			$pet_own['sorted_pet_own_p'][] = $pet_own['pet_own_p'][$key];
			$pet_own['sorted_pet_own_name'][] = $pet_own['pet_own_name'][$key];
			$pet_own['sorted_pet_own_image'][] = $pet_own['pet_own_image'][$key];
			$pet_own['sorted_pet_own_index'][] = $pet_own['pet_own_index'][$key];
		}
		
		// type_r  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['type_r']); $i ++) {

			if($demo['type_r'][0] >0) $type_r_vals['file'][$i] = $demo['type_r'][$i] / $demo['type_r'][0] *100; else $type_r_vals['file'][$i] = 0;				// percent 
			if($rbench['type_r'][0] >0) $type_r_vals['bench'][$i] = $rbench['type_r'][$i] / $rbench['type_r'][0] *100; else $type_r_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['type_r'][$i] >0) $type_r_vals['index'][$i] = $type_r_vals['file'][$i] / $type_r_vals['bench'][$i] *100; else $type_r_vals['index'][$i] = 0;	// index 
		}
		
		// type_r names
		$demo['type_r_name'][1] = "Bulk food stores";
		$demo['type_r_name'][2] = "Carpet/Floor stores";
		$demo['type_r_name'][3] = "Craft supply stores";
		$demo['type_r_name'][4] = "Dollar stores";
		$demo['type_r_name'][5] = "Factory outlet";
		$demo['type_r_name'][6] = "Fashion accessories stores";
		$demo['type_r_name'][7] = "Garden stores";
		$demo['type_r_name'][8] = "Health/beauty stores";
		$demo['type_r_name'][9] = "Home health care stores";
		$demo['type_r_name'][10] = "Kitchen stores";
		$demo['type_r_name'][11] = "Music stores";
		$demo['type_r_name'][12] = "Natural food stores";
		$demo['type_r_name'][13] = "Online classified";
		$demo['type_r_name'][14] = "Online music/movie  stores";
		$demo['type_r_name'][15] = "Shopping mall stores";
		$demo['type_r_name'][16] = "Farmers' markets";
		$demo['type_r_name'][17] = "Stand-alone boutique shops";
		$demo['type_r_name'][18] = "Online/Internet stores";


		
		// type_r  - images
		for ( $i = 1; $i <= 16; $i ++) {
			$demo['type_r_image'][$i] = "quick_rest/subway.jpg";
		}
		
		// type_r  - sorted arrays
		for ( $i = 1; $i <=sizeof($type_r_vals['file']); $i ++) {
			$type_r['type_r_p'][] = $type_r_vals['file'][$i];
			$type_r['type_r_name'][] = $demo['type_r_name'][$i];
			$type_r['type_r_image'][] = $demo['type_r_image'][$i];
			$type_r['type_r_index'][] = $type_r_vals['index'][$i];
		}
		
		// type_r  - sorted results
		arsort($type_r['type_r_p']);
			foreach ($type_r['type_r_p'] as $key => $val) {
			$type_r['sorted_type_r_p'][] = $type_r['type_r_p'][$key];
			$type_r['sorted_type_r_name'][] = $type_r['type_r_name'][$key];
			$type_r['sorted_type_r_image'][] = $type_r['type_r_image'][$key];
			$type_r['sorted_type_r_index'][] = $type_r['type_r_index'][$key];
		}
		// type_o  - convert to percentages and index value for both file and bench
		for ( $i = 0; $i < sizeof($demo['type_o']); $i ++) {

			if($demo['type_o'][0] >0) $type_o_vals['file'][$i] = $demo['type_o'][$i] / $demo['type_o'][0] *100; else $type_o_vals['file'][$i] = 0;				// percent 
			if($rbench['type_o'][0] >0) $type_o_vals['bench'][$i] = $rbench['type_o'][$i] / $rbench['type_o'][0] *100; else $type_o_vals['bench'][$i] = 0;		// percent bench 
			if($rbench['type_o'][$i] >0) $type_o_vals['index'][$i] = $type_o_vals['file'][$i] / $type_o_vals['bench'][$i] *100; else $type_o_vals['index'][$i] = 0;	// index 
		}
		
		// type_o names
		$demo['type_o_name'][1] = "Bulk food stores";
		$demo['type_o_name'][2] = "Carpet/Floor stores";
		$demo['type_o_name'][3] = "Craft supply stores";
		$demo['type_o_name'][4] = "Dollar stores";
		$demo['type_o_name'][5] = "Factory outlet";
		$demo['type_o_name'][6] = "Fashion accessories stores";
		$demo['type_o_name'][7] = "Garden stores";
		$demo['type_o_name'][8] = "Health/beauty stores";
		$demo['type_o_name'][9] = "Home health care stores";
		$demo['type_o_name'][10] = "Kitchen stores";
		$demo['type_o_name'][11] = "Music stores";
		$demo['type_o_name'][12] = "Natural food stores";
		$demo['type_o_name'][13] = "Online classified";
		$demo['type_o_name'][14] = "Online music/movie  stores";
		$demo['type_o_name'][15] = "Shopping mall stores";
		$demo['type_o_name'][16] = "Farmers' markets";
		$demo['type_o_name'][17] = "Stand-alone boutique shops";
		$demo['type_o_name'][18] = "Online/Internet stores";


		
		// type_o  - images
		for ( $i = 1; $i <= 16; $i ++) {
			$demo['type_o_image'][$i] = "quick_rest/subway.jpg";
		}
		
		// type_o  - sorted arrays
		for ( $i = 1; $i <=sizeof($type_o_vals['file']); $i ++) {
			$type_o['type_o_p'][] = $type_o_vals['file'][$i];
			$type_o['type_o_name'][] = $demo['type_o_name'][$i];
			$type_o['type_o_image'][] = $demo['type_o_image'][$i];
			$type_o['type_o_index'][] = $type_o_vals['index'][$i];
		}
		
		// type_o  - sorted results
		arsort($type_o['type_o_p']);
			foreach ($type_o['type_o_p'] as $key => $val) {
			$type_o['sorted_type_o_p'][] = $type_o['type_o_p'][$key];
			$type_o['sorted_type_o_name'][] = $type_o['type_o_name'][$key];
			$type_o['sorted_type_o_image'][] = $type_o['type_o_image'][$key];
			$type_o['sorted_type_o_index'][] = $type_o['type_o_index'][$key];
		}
} // end if retailer modules ($detail_show == 12 )


$allindex[0] = ($agg_values['segmenti'][0]);
$allindex[1] = ($agg_values['segmenti'][1]);
$allindex[2] = ($agg_values['segmenti'][2]);
$allindex[3] = ($agg_values['segmenti'][3]);
$allindex[4] = ($agg_values['segmenti'][4]);
$allindex[5] = ($agg_values['segmenti'][5]);
$allindex[6] = ($agg_values['segmenti'][6]);
$allindex[7] = ($agg_values['segmenti'][7]);
$allindex[8] = ($agg_values['segmenti'][8]);
$allindex[9] = ($agg_values['segmenti'][9]);
$allindex[10] = ($agg_values['segmenti'][10]);
$allindex[11] = ($agg_values['segmenti'][11]);
$allindex[12] = ($agg_values['segmenti'][12]);
$allindex[13] = ($agg_values['segmenti'][13]);
$allindex[14] = ($agg_values['segmenti'][14]);
$allindex[15] = ($agg_values['segmenti'][15]);
$allindex[16] = ($agg_values['segmenti'][16]);
?>