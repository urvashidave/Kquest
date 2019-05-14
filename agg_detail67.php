<?php 
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

, SUM(media.RD_ADC) as RD_ADC
, SUM(media.RD_MSTRK) as RD_MSTRK
, SUM(media.RD_HADC) as RD_HADC
, SUM(media.RD_MDRK) as RD_MDRK
, SUM(media.RD_MSTM) as RD_MSTM
, SUM(media.RD_NEWS) as RD_NEWS
, SUM(media.RD_CLAHIT) as RD_CLAHIT
, SUM(media.RD_CLARK) as RD_CLARK
, SUM(media.RD_CNTRY) as RD_CNTRY
, SUM(media.RD_CLASS) as RD_CLASS
, SUM(media.RD_JAZZ) as RD_JAZZ

, SUM(media.TV_AUTO) as TV_AUTO
, SUM(media.TV_BSBALL) as TV_BSBALL
, SUM(media.TV_BKBALL) as TV_BKBALL
, SUM(media.TV_CARTOO) as TV_CARTOO
, SUM(media.TV_CTSHOW) as TV_CTSHOW
, SUM(media.TV_DOC) as TV_DOC
, SUM(media.TV_SKATE) as TV_SKATE
, SUM(media.TV_CFL) as TV_CFL
, SUM(media.TV_NFL) as TV_NFL
, SUM(media.TV_GMSHOW) as TV_GMSHOW
, SUM(media.TV_GOLF) as TV_GOLF
, SUM(media.TV_HOCKEY) as TV_HOCKEY
, SUM(media.TV_HOME) as TV_HOME
, SUM(media.TV_HOMDEC) as TV_HOMDEC
, SUM(media.TV_MSERIE) as TV_MSERIE
, SUM(media.TV_MOVIE) as TV_MOVIE
, SUM(media.TV_NEWS) as TV_NEWS
, SUM(media.TV_PMKOV) as TV_PMKOV
, SUM(media.TV_REALITY) as TV_REALITY
, SUM(media.TV_CMDIES) as TV_CMDIES
, SUM(media.TV_SOAP) as TV_SOAP
, SUM(media.TV_DRAMA) as TV_DRAMA
, SUM(media.TV_TALK) as TV_TALK
, SUM(media.TV_INFO) as TV_INFO
, SUM(media.TV_SPEC) as TV_SPEC
, SUM(media.TV_WREST) as TV_WREST

, SUM(media.FLY_DPF) as FLY_DPF
, SUM(media.FLY_CNPF) as FLY_CNPF
, SUM(media.FLY_DOORF) as FLY_DOORF
, SUM(media.FLY_STOREF) as FLY_STOREF


, SUM(media.NP_AUTOF) as NP_AUTOF
, SUM(media.NP_BUSIF) as NP_BUSIF
, SUM(media.NP_CL_ADF) as NP_CL_ADF
, SUM(media.NP_EDITF) as NP_EDITF
, SUM(media.NP_FASHF) as NP_FASHF
, SUM(media.NP_FOODF) as NP_FOODF
, SUM(media.NP_HEALTHF) as NP_HEALTHF
, SUM(media.NP_INEWF) as NP_INEWF
, SUM(media.NP_LNEWF) as NP_LNEWF
, SUM(media.NP_MOVIF) as NP_MOVIF
, SUM(media.NP_NNEWF) as NP_NNEWF
, SUM(media.NP_HOMEF) as NP_HOMEF
, SUM(media.NP_RESTAF) as NP_RESTAF
, SUM(media.NP_SPORF) as NP_SPORF
, SUM(media.NP_TRAVF) as NP_TRAVF
, SUM(media.NP_ADSF) as NP_ADSF
, SUM(media.NP_READ1) as NP_READ1
, SUM(media.NP_READ2) as NP_READ2
, SUM(media.NP_READ3) as NP_READ3
, SUM(media.NP_READ4) as NP_READ4











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

, SUM(leis2.LS_MUSM*media.pp15_) as LS_MUSM
, SUM(leis2.LS_EXHBT*media.pp15_) as LS_EXHBT
, SUM(leis2.LS_HIST*media.pp15_) as LS_HIST
, SUM(leis2.LS_CTPRK*media.pp15_) as LS_CTPRK
, SUM(leis2.LS_MAXMV*media.pp15_) as LS_MAXMV
, SUM(leis2.LS_SPEVN*media.pp15_) as LS_SPEVN
, SUM(leis2.LS_AMUSE*media.pp15_) as LS_AMUSE
, SUM(leis2.LS_THMPK*media.pp15_) as LS_THMPK
, SUM(leis2.LS_ZOO*media.pp15_) as LS_ZOO
, SUM(leis2.LS_OTHAT*media.pp15_) as LS_OTHAT
, SUM(leis2.LS_STDM*media.pp15_) as LS_STDM
, SUM(leis2.LS_CS*media.pp15_) as LS_CS
, SUM(leis2.LS_NTCLB*media.pp15_) as LS_NTCLB
, SUM(leis2.LS_ODSTG*media.pp15_) as LS_ODSTG
, SUM(leis2.LS_THTR*media.pp15_) as LS_THTR

, SUM(leis2.LS_MJTHT*media.pp15_) as LS_MJTHT
, SUM(leis2.LS_CMTHT*media.pp15_) as LS_CMTHT
, SUM(leis2.LS_FSTVL*media.pp15_) as LS_FSTVL
, SUM(leis2.LS_OTTHT*media.pp15_) as LS_OTTHT
, SUM(leis2.LS_CLSCC*media.pp15_) as LS_CLSCC
, SUM(leis2.LS_BAR*media.pp15_) as LS_BAR
, SUM(leis2.LS_CMCLB*media.pp15_) as LS_CMCLB
, SUM(leis2.LS_DNCLB*media.pp15_) as LS_DNCLB
, SUM(leis2.LS_DITHT*media.pp15_) as LS_DITHT
, SUM(leis2.LS_FMFST*media.pp15_) as LS_FMFST
, SUM(leis2.LS_MSFST*media.pp15_) as LS_MSFST
, SUM(leis2.LS_MVTHT*media.pp15_) as LS_MVTHT
, SUM(leis2.LS_NPPK*media.pp15_) as LS_NPPK
, SUM(leis2.LS_POPCC*media.pp15_) as LS_POPCC

, SUM(leis2.LS_LATRC*media.pp15_) as LS_LATRC
, SUM(leis2.LS_LBSBL*media.pp15_) as LS_LBSBL
, SUM(leis2.LS_LBSKB*media.pp15_) as LS_LBSKB
, SUM(leis2.LS_LFSKT*media.pp15_) as LS_LFSKT
, SUM(leis2.LS_LFTBL*media.pp15_) as LS_LFTBL
, SUM(leis2.LS_LGLF*media.pp15_) as LS_LGLF
, SUM(leis2.LS_LHCKY*media.pp15_) as LS_LHCKY
, SUM(leis2.LS_LHSRC*media.pp15_) as LS_LHSRC
, SUM(leis2.LS_LLCRS*media.pp15_) as LS_LLCRS
, SUM(leis2.LS_LSCC*media.pp15_) as LS_LSCC
, SUM(leis2.LS_LTNS*media.pp15_) as LS_LTNS
, SUM(leis2.LS_FITCLB*media.pp15_) as LS_FITCLB
, SUM(leis2.LS_GLFCLB*media.pp15_) as LS_GLFCLB



  
FROM mmedia_ta media, a_bbm_ls2 leis, a_bbm_ls2 leis2, $temp_table_name2 pclist WHERE pclist.PostCode = media.PostCode and pclist.PostCode = leis.PostCode and pclist.PostCode = leis2.PostCode ";
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
								
$RD_ADC = $row['RD_ADC'];
$RD_MSTRK = $row['RD_MSTRK'];
$RD_HADC = $row['RD_HADC'];
$RD_MDRK = $row['RD_MDRK'];
$RD_MSTM = $row['RD_MSTM'];
$RD_NEWS = $row['RD_NEWS'];
$RD_CLAHIT = $row['RD_CLAHIT'];
$RD_CLARK = $row['RD_CLARK'];
$RD_CNTRY = $row['RD_CNTRY'];
$RD_CLASS = $row['RD_CLASS'];
$RD_JAZZ = $row['RD_JAZZ'];


$TV_AUTO = $row['TV_AUTO'];
$TV_BSBALL = $row['TV_BSBALL'];
$TV_BKBALL = $row['TV_BKBALL'];
$TV_CARTOO = $row['TV_CARTOO'];
$TV_CTSHOW = $row['TV_CTSHOW'];
$TV_DOC = $row['TV_DOC'];
$TV_SKATE = $row['TV_SKATE'];
$TV_CFL = $row['TV_CFL'];
$TV_NFL = $row['TV_NFL'];
$TV_GMSHOW = $row['TV_GMSHOW'];
$TV_GOLF = $row['TV_GOLF'];
$TV_HOCKEY = $row['TV_HOCKEY'];
$TV_HOME = $row['TV_HOME'];
$TV_HOMDEC = $row['TV_HOMDEC'];
$TV_MSERIE = $row['TV_MSERIE'];
$TV_MOVIE = $row['TV_MOVIE'];
$TV_NEWS = $row['TV_NEWS'];
$TV_PMKOV = $row['TV_PMKOV'];
$TV_REALITY = $row['TV_REALITY'];
$TV_CMDIES = $row['TV_CMDIES'];
$TV_SOAP = $row['TV_SOAP'];
$TV_DRAMA = $row['TV_DRAMA'];
$TV_TALK = $row['TV_TALK'];
$TV_INFO = $row['TV_INFO'];
$TV_SPEC = $row['TV_SPEC'];
$TV_WREST = $row['TV_WREST'];

$FLY_DPF = $row['FLY_DPF'];
$FLY_CNPF = $row['FLY_CNPF'];
$FLY_DOORF = $row['FLY_DOORF'];
$FLY_STOREF = $row['FLY_STOREF'];

	$NP_AUTOF = $row['NP_AUTOF'];
$NP_BUSIF = $row['NP_BUSIF'];
$NP_CL_ADF = $row['NP_CL_ADF'];
$NP_EDITF = $row['NP_EDITF'];
$NP_FASHF = $row['NP_FASHF'];
$NP_FOODF = $row['NP_FOODF'];
$NP_HEALTHF = $row['NP_HEALTHF'];
$NP_INEWF = $row['NP_INEWF'];
$NP_LNEWF = $row['NP_LNEWF'];
$NP_MOVIF = $row['NP_MOVIF'];
$NP_NNEWF = $row['NP_NNEWF'];
$NP_HOMEF = $row['NP_HOMEF'];
$NP_RESTAF = $row['NP_RESTAF'];
$NP_SPORF = $row['NP_SPORF'];
$NP_TRAVF = $row['NP_TRAVF'];
$NP_ADSF = $row['NP_ADSF'];
$NP_READ1 = $row['NP_READ1'];
$NP_READ2 = $row['NP_READ2'];
$NP_READ3 = $row['NP_READ3'];
$NP_READ4 = $row['NP_READ4'];
							
							
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

$bLS_MUSM = $row['LS_MUSM'];
$bLS_EXHBT = $row['LS_EXHBT'];
$bLS_HIST = $row['LS_HIST'];
$bLS_CTPRK = $row['LS_CTPRK'];
$bLS_MAXMV = $row['LS_MAXMV'];
$bLS_SPEVN = $row['LS_SPEVN'];
$bLS_AMUSE = $row['LS_AMUSE'];
$bLS_THMPK = $row['LS_THMPK'];
$bLS_ZOO = $row['LS_ZOO'];
$bLS_OTHAT = $row['LS_OTHAT'];
$bLS_STDM = $row['LS_STDM'];
$bLS_CS = $row['LS_CS'];
$bLS_NTCLB = $row['LS_NTCLB'];
$bLS_ODSTG = $row['LS_ODSTG'];
$bLS_THTR = $row['LS_THTR'];

$bLS_MJTHT = $row['LS_MJTHT'];
$bLS_CMTHT = $row['LS_CMTHT'];
$bLS_FSTVL = $row['LS_FSTVL'];
$bLS_OTTHT = $row['LS_OTTHT'];
$bLS_CLSCC = $row['LS_CLSCC'];
$bLS_BAR = $row['LS_BAR'];
$bLS_CMCLB = $row['LS_CMCLB'];
$bLS_DNCLB = $row['LS_DNCLB'];
$bLS_DITHT = $row['LS_DITHT'];
$bLS_FMFST = $row['LS_FMFST'];
$bLS_MSFST = $row['LS_MSFST'];
$bLS_MVTHT = $row['LS_MVTHT'];
$bLS_NPPK = $row['LS_NPPK'];
$bLS_POPCC = $row['LS_POPCC'];

$bLS_LATRC = $row['LS_LATRC'];
$bLS_LBSBL = $row['LS_LBSBL'];
$bLS_LBSKB = $row['LS_LBSKB'];
$bLS_LFSKT = $row['LS_LFSKT'];
$bLS_LFTBL = $row['LS_LFTBL'];
$bLS_LGLF = $row['LS_LGLF'];
$bLS_LHCKY = $row['LS_LHCKY'];
$bLS_LHSRC = $row['LS_LHSRC'];
$bLS_LLCRS = $row['LS_LLCRS'];
$bLS_LSCC = $row['LS_LSCC'];
$bLS_LTNS = $row['LS_LTNS'];
$bLS_FITCLB = $row['LS_FITCLB'];
$bLS_GLFCLB = $row['LS_GLFCLB'];
								
								
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

//leisure
$leis_pp15_ = $media_pp15_ ;
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

$leisure2["canada"][] = 29.8;
$leisure2["canada"][] = 33.8;
$leisure2["canada"][] = 26.8;
$leisure2["canada"][] = 34.9;
$leisure2["canada"][] = 20.7;
$leisure2["canada"][] = 19.5;
$leisure2["canada"][] = 8.7;
$leisure2["canada"][] = 19.0;
$leisure2["canada"][] = 20.2;
$leisure2["canada"][] = 36.6;
$leisure2["canada"][] = 32.7;
$leisure2["canada"][] = 16.6;
$leisure2["canada"][] = 17.1;
$leisure2["canada"][] = 12.6;
$leisure2["canada"][] = 27.0;

$leisure3["canada"][] = 26.8;
$leisure3["canada"][] = 11.5;
$leisure3["canada"][] = 12.6;
$leisure3["canada"][] = 9.7;
$leisure3["canada"][] = 8.4;
$leisure3["canada"][] = 27.6;
$leisure3["canada"][] = 9.8;
$leisure3["canada"][] = 9.2;
$leisure3["canada"][] = 6.8;
$leisure3["canada"][] = 4.1;
$leisure3["canada"][] = 9.1;
$leisure3["canada"][] = 34.5;
$leisure3["canada"][] = 24.0;
$leisure3["canada"][] = 16.2;

$leisure4["canada"][] = 8.8;
$leisure4["canada"][] = 18.9;
$leisure4["canada"][] = 7.2;
$leisure4["canada"][] = 6.4;
$leisure4["canada"][] = 15.7;
$leisure4["canada"][] = 6.9;
$leisure4["canada"][] = 33.1;
$leisure4["canada"][] = 7.5;
$leisure4["canada"][] = 2.9;
$leisure4["canada"][] = 10.2;
$leisure4["canada"][] = 5.5;


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



$media2['canada'][] = 22.9;
$media2['canada'][] = 10.3;
$media2['canada'][] = 16.1;
$media2['canada'][] = 5.6;
$media2['canada'][] = 21.1;
$media2['canada'][] = 34.0;
$media2['canada'][] = 12.5;
$media2['canada'][] = 8.7;
$media2['canada'][] = 13.1;
$media2['canada'][] = 3.7;
$media2['canada'][] = 1.8;

for ( $seg_vars = 0; $seg_vars <sizeof($media2["percent"]); $seg_vars ++) {
$media2["index"][] = $media2["percent"][$seg_vars] / $media2["canada"][$seg_vars] * 100; 
 }
 
 
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

$media3['canada'][] = 7.9;
$media3['canada'][] = 12.9;
$media3['canada'][] = 6.5;
$media3['canada'][] = 17.4;
$media3['canada'][] = 26.0;
$media3['canada'][] = 39.6;
$media3['canada'][] = 9.9;
$media3['canada'][] = 18.6;
$media3['canada'][] = 15.4;
$media3['canada'][] = 26.8;
$media3['canada'][] = 11.7;
$media3['canada'][] = 38.2;
$media3['canada'][] = 27.7;
$media3['canada'][] = 21.7;
$media3['canada'][] = 16.4;
$media3['canada'][] = 63.3;
$media3['canada'][] = 57.4;
$media3['canada'][] = 12.7;
$media3['canada'][] = 26.8;
$media3['canada'][] = 32.6;
$media3['canada'][] = 27.2;
$media3['canada'][] = 43.2;
$media3['canada'][] = 26.8;
$media3['canada'][] = 3.3;
$media3['canada'][] = 13.9;
$media3['canada'][] = 4.2;

for ( $seg_vars = 0; $seg_vars <sizeof($media3["percent"]); $seg_vars ++) {
$media3["index"][] = $media3["percent"][$seg_vars] / $media3["canada"][$seg_vars] * 100; 
 }


$bFLY_DPF = $FLY_DPF/ $leis_pp15_ *100;
$bFLY_CNPF = $FLY_CNPF/ $leis_pp15_ *100;
$bFLY_DOORF = $FLY_DOORF/ $leis_pp15_ *100;
$bFLY_STOREF = $FLY_STOREF/ $leis_pp15_ *100;

$media5['percent'][] = $bFLY_DPF;
$media5['percent'][] = $bFLY_CNPF;
$media5['percent'][] = $bFLY_DOORF;
$media5['percent'][] = $bFLY_STOREF;


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


$media6['name'][] = "Automotive";
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

$media6['canada'][] = 6.5;
$media6['canada'][] = 16.3;
$media6['canada'][] = 5.6;
$media6['canada'][] = 18.7;
$media6['canada'][] = 12.7;
$media6['canada'][] = 17.3;
$media6['canada'][] = 19.3;
$media6['canada'][] = 37.7;
$media6['canada'][] = 48.9;
$media6['canada'][] = 22.6;
$media6['canada'][] = 41.2;
$media6['canada'][] = 8.2;
$media6['canada'][] = 5.5;
$media6['canada'][] = 25.3;
$media6['canada'][] = 15.1;
$media6['canada'][] = 7.0;

for ( $seg_vars = 0; $seg_vars <sizeof($media6["percent"]); $seg_vars ++) {
$media6["index"][] = $media6["percent"][$seg_vars] / $media6["canada"][$seg_vars] * 100; 
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
	$s2_media2["index"][] = $s1_media2["index"][$key];
	}
	else {
	$score_count = $score_count +1;
	$s2_media2["score"][] = $s1_media2["score"][$key] + 33;
	$s2_media2["percent"][] = $s1_media2["percent"][$key];
	$s2_media2["name"][] = $s1_media2["name"][$key];
	$s2_media2["index"][] = $s1_media2["index"][$key];
	}
}


$cmedia2["score"] = $s2_media2["score"];

asort($cmedia2["score"]);
foreach ($cmedia2["score"] as $key => $val) {
	$sorted_media2["percent"][] = $s2_media2["percent"][$key];
	$sorted_media2["name"][] = $s2_media2["name"][$key];
	$sorted_media2["index"][] = $s2_media2["index"][$key];
	$sorted_media2["score"][] = $s2_media2["score"][$key];
	
}

// ensure have 8

$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;
$sorted_media2["percent"][] = 0; 	$sorted_media2["name"][] = " "; 	$sorted_media2["index"][] = 0; 	$sorted_media2["score"][] = 0;



// TV

$amedia3["percent"] = $media3["percent"];
$score_count = 1;
arsort($amedia3["percent"]);
foreach ($amedia3["percent"] as $key => $val) {
	$s1_media3["score"][] = $score_count;
	$score_count = $score_count +1;
	$s1_media3["percent"][] = $media3["percent"][$key];
	$s1_media3["name"][] = $media3["name"][$key];
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
	$s2_media3["index"][] = $s1_media3["index"][$key];
	}
	else {
		$score_count = $score_count +1;
	$s2_media3["score"][] = + $s1_media3["score"][$key] + 33;
	$s2_media3["percent"][] = $s1_media3["percent"][$key];
	$s2_media3["name"][] = $s1_media3["name"][$key];
	$s2_media3["index"][] = $s1_media3["index"][$key];
	}
}

$cmedia3["score"] = $s2_media3["score"];

asort($cmedia3["score"]);
foreach ($cmedia3["score"] as $key => $val) {
	$sorted_media3["percent"][] = $s2_media3["percent"][$key];
	$sorted_media3["name"][] = $s2_media3["name"][$key];
	$sorted_media3["index"][] = $s2_media3["index"][$key];
	$sorted_media3["score"][] = $s2_media3["score"][$key];
	
}

// ensure have 8

$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;
$sorted_media3["percent"][] = 0; 	$sorted_media3["name"][] = " "; 	$sorted_media3["index"][] = 0; 	$sorted_media3["score"][] = 0;

// Newspaper

$amedia6["percent"] = $media6["percent"];
$score_count = 1;
arsort($amedia6["percent"]);
foreach ($amedia6["percent"] as $key => $val) {
	$s1_media6["score"][] = $score_count;
	$score_count = $score_count +1;
	$s1_media6["percent"][] = $media6["percent"][$key];
	$s1_media6["name"][] = $media6["name"][$key];
	$s1_media6["index"][] = $media6["index"][$key];
	
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
	$s2_media6["index"][] = $s1_media6["index"][$key];
	}
	else {
		$score_count = $score_count +1;
	$s2_media6["score"][] = + $s1_media6["score"][$key] + 33;
	$s2_media6["percent"][] = $s1_media6["percent"][$key];
	$s2_media6["name"][] = $s1_media6["name"][$key];
	$s2_media6["index"][] = $s1_media6["index"][$key];
	}
}

$cmedia6["score"] = $s2_media6["score"];

asort($cmedia6["score"]);
foreach ($cmedia6["score"] as $key => $val) {
	$sorted_media6["percent"][] = $s2_media6["percent"][$key];
	$sorted_media6["name"][] = $s2_media6["name"][$key];
	$sorted_media6["index"][] = $s2_media6["index"][$key];
	$sorted_media6["score"][] = $s2_media6["score"][$key];
	
}

// ensure have 8

$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;
$sorted_media6["percent"][] = 0; 	$sorted_media6["name"][] = " "; 	$sorted_media6["index"][] = 0; 	$sorted_media6["score"][] = 0;


// internet

$query = "SELECT 
SUM(inter.PP15_) as PP15_
, SUM(inter.IT_HOME*inter.PP15_) as IT_HOME
, SUM(inter.IT_WORK*inter.PP15_) as IT_WORK
, SUM(inter.IT_SCH*inter.PP15_) as IT_SCH
, SUM(inter.IT_OTH*inter.PP15_) as IT_OTH
, SUM(inter.IT_TWK0*inter.PP15_) as IT_TWK0
, SUM(inter.IT_TWK5*inter.PP15_) as IT_TWK5
, SUM(inter.IT_TWK10*inter.PP15_) as IT_TWK10
, SUM(inter.IT_TWK15*inter.PP15_) as IT_TWK15
, SUM(inter.IT_TWK25*inter.PP15_) as IT_TWK25
, SUM(inter.IT_TWK25_*inter.PP15_) as IT_TWK25_
, SUM(inter.IT_NSITE*inter.PP15_) as IT_NSITE
, SUM(inter.IT_RADIO*inter.PP15_) as IT_RADIO
, SUM(inter.IT_TV*inter.PP15_) as IT_TV
, SUM(inter.IT_AUTNEWS*inter.PP15_) as IT_AUTNEWS
, SUM(inter.IT_FASHION*inter.PP15_) as IT_FASHION
, SUM(inter.IT_HEALTH*inter.PP15_) as IT_HEALTH
, SUM(inter.IT_FURN*inter.PP15_) as IT_FURN
, SUM(inter.IT_SPORT*inter.PP15_) as IT_SPORT
, SUM(inter.IT_RLEST*inter.PP15_) as IT_RLEST
, SUM(inter.IT_RESTG*inter.PP15_) as IT_RESTG
, SUM(inter.IT_WEATH*inter.PP15_) as IT_WEATH
, SUM(inter.IT_ADS*inter.PP15_) as IT_ADS
, SUM(inter.IT_BNKING*inter.PP15_) as IT_BNKING
, SUM(inter.IT_DGAME*inter.PP15_) as IT_DGAME
, SUM(inter.IT_DCAST*inter.PP15_) as IT_DCAST
, SUM(inter.IT_DVIDEO*inter.PP15_) as IT_DVIDEO
, SUM(inter.IT_MP3*inter.PP15_) as IT_MP3
, SUM(inter.IT_DCPN*inter.PP15_) as IT_DCPN
, SUM(inter.IT_DOAUDIO*inter.PP15_) as IT_DOAUDIO
, SUM(inter.IT_CONTEST*inter.PP15_) as IT_CONTEST
, SUM(inter.IT_PODCAST*inter.PP15_) as IT_PODCAST
, SUM(inter.IT_AUDIO*inter.PP15_) as IT_AUDIO
, SUM(inter.IT_LISRA*inter.PP15_) as IT_LISRA
, SUM(inter.IT_DONAT*inter.PP15_) as IT_DONAT
, SUM(inter.IT_SONET*inter.PP15_) as IT_SONET
, SUM(inter.IT_CLAD*inter.PP15_) as IT_CLAD
, SUM(inter.IT_GAME*inter.PP15_) as IT_GAME
, SUM(inter.IT_AUCT*inter.PP15_) as IT_AUCT
, SUM(inter.IT_MZ*inter.PP15_) as IT_MZ
, SUM(inter.IT_NSPAP*inter.PP15_) as IT_NSPAP
, SUM(inter.IT_BLOG*inter.PP15_) as IT_BLOG
, SUM(inter.IT_WIKI*inter.PP15_) as IT_WIKI
, SUM(inter.IT_NLRNL*inter.PP15_) as IT_NLRNL
, SUM(inter.IT_PROD*inter.PP15_) as IT_PROD
, SUM(inter.IT_SURV*inter.PP15_) as IT_SURV
, SUM(inter.IT_INSM*inter.PP15_) as IT_INSM
, SUM(inter.IT_EMAIL*inter.PP15_) as IT_EMAIL
, SUM(inter.IT_MAPS*inter.PP15_) as IT_MAPS
, SUM(inter.IT_PHONE*inter.PP15_) as IT_PHONE
, SUM(inter.IT_SRCHENG*inter.PP15_) as IT_SRCHENG
, SUM(inter.IT_CHAT*inter.PP15_) as IT_CHAT
, SUM(inter.IT_VIDEO*inter.PP15_) as IT_VIDEO
, SUM(inter.IT_OVIDEO*inter.PP15_) as IT_OVIDEO

, SUM(a_weight.pp15_) as pp15_

, SUM(fly.FLY_DPS * a_weight.pp15_) as FLY_DPS
, SUM(fly.FLY_DPO * a_weight.pp15_) as FLY_DPO
, SUM(fly.FLY_DPF * a_weight.pp15_) as FLY_DPF
, SUM(fly.FLY_CNPN * a_weight.pp15_) as FLY_CNPN
, SUM(fly.FLY_CNPS * a_weight.pp15_) as FLY_CNPS
, SUM(fly.FLY_CNPO * a_weight.pp15_) as FLY_CNPO
, SUM(fly.FLY_CNPF * a_weight.pp15_) as FLY_CNPF
, SUM(fly.FLY_DOORN * a_weight.pp15_) as FLY_DOORN
, SUM(fly.FLY_DOORS * a_weight.pp15_) as FLY_DOORS
, SUM(fly.FLY_DOORO * a_weight.pp15_) as FLY_DOORO
, SUM(fly.FLY_DOORF * a_weight.pp15_) as FLY_DOORF

, SUM(fly.FLY_CPN * a_weight.pp15_) as FLY_CPN
, SUM(fly.FLY_CPS * a_weight.pp15_) as FLY_CPS
, SUM(fly.FLY_CPO * a_weight.pp15_) as FLY_CPO
, SUM(fly.FLY_CPF * a_weight.pp15_) as FLY_CPF
, SUM(fly.FLY_STOREN * a_weight.pp15_) as FLY_STOREN
, SUM(fly.FLY_STORES * a_weight.pp15_) as FLY_STORES
, SUM(fly.FLY_STOREO * a_weight.pp15_) as FLY_STOREO
, SUM(fly.FLY_STOREF * a_weight.pp15_) as FLY_STOREF
, SUM(fly.FLY_MAILN * a_weight.pp15_) as FLY_MAILN
, SUM(fly.FLY_MAILS * a_weight.pp15_) as FLY_MAILS
, SUM(fly.FLY_MAILO * a_weight.pp15_) as FLY_MAILO
, SUM(fly.FLY_MAILF * a_weight.pp15_) as FLY_MAILF
, SUM(fly.FLY_CPWEBN * a_weight.pp15_) as FLY_CPWEBN
, SUM(fly.FLY_CPWEBS * a_weight.pp15_) as FLY_CPWEBS
, SUM(fly.FLY_CPWEBO * a_weight.pp15_) as FLY_CPWEBO
, SUM(fly.FLY_CPWEBF * a_weight.pp15_) as FLY_CPWEBF
, SUM(fly.FLY_ATTVF * a_weight.pp15_) as FLY_ATTVF
, SUM(fly.FLY_ATTSF * a_weight.pp15_) as FLY_ATTSF
, SUM(fly.FLY_ATTSU * a_weight.pp15_) as FLY_ATTSU
, SUM(fly.FLY_ATTVU * a_weight.pp15_) as FLY_ATTVU
, SUM(fly.FLY_SSDAY * a_weight.pp15_) as FLY_SSDAY
, SUM(fly.FLY_SSWK * a_weight.pp15_) as FLY_SSWK
, SUM(fly.FLY_SWKL * a_weight.pp15_) as FLY_SWKL
, SUM(fly.FLY_WSDAY * a_weight.pp15_) as FLY_WSDAY
, SUM(fly.FLY_WSWK * a_weight.pp15_) as FLY_WSWK
, SUM(fly.FLY_WWKL * a_weight.pp15_) as FLY_WWKL

 
FROM a16_fly fly, a16_weight a_weight, a12_bbm_it inter, $temp_table_name2 pclist WHERE pclist.PostCode = inter.POSTCODE and pclist.PostCode = fly.POSTCODE  and pclist.PostCode = a_weight.postcode";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
$inter_pp15_= $row['PP15_'];
	$IT_HOME = $row['IT_HOME'];
$IT_WORK = $row['IT_WORK'];
$IT_SCH = $row['IT_SCH'];
$IT_OTH = $row['IT_OTH'];
$IT_TWK0 = $row['IT_TWK0'];
$IT_TWK5 = $row['IT_TWK5'];
$IT_TWK10 = $row['IT_TWK10'];
$IT_TWK15 = $row['IT_TWK15'];
$IT_TWK25 = $row['IT_TWK25'];
$IT_TWK25_ = $row['IT_TWK25_'];
$IT_NSITE = $row['IT_NSITE'];
$IT_RADIO = $row['IT_RADIO'];
$IT_TV = $row['IT_TV'];
$IT_AUTNEWS = $row['IT_AUTNEWS'];
$IT_FASHION = $row['IT_FASHION'];
$IT_HEALTH = $row['IT_HEALTH'];
$IT_FURN = $row['IT_FURN'];
$IT_SPORT = $row['IT_SPORT'];
$IT_RLEST = $row['IT_RLEST'];
$IT_RESTG = $row['IT_RESTG'];
$IT_WEATH = $row['IT_WEATH'];
$IT_ADS = $row['IT_ADS'];
$IT_BNKING = $row['IT_BNKING'];
$IT_DGAME = $row['IT_DGAME'];
$IT_DCAST = $row['IT_DCAST'];
$IT_DVIDEO = $row['IT_DVIDEO'];
$IT_MP3 = $row['IT_MP3'];
$IT_DCPN = $row['IT_DCPN'];
$IT_DOAUDIO = $row['IT_DOAUDIO'];
$IT_CONTEST = $row['IT_CONTEST'];
$IT_PODCAST = $row['IT_PODCAST'];
$IT_AUDIO = $row['IT_AUDIO'];
$IT_LISRA = $row['IT_LISRA'];
$IT_DONAT = $row['IT_DONAT'];
$IT_SONET = $row['IT_SONET'];
$IT_CLAD = $row['IT_CLAD'];
$IT_GAME = $row['IT_GAME'];
$IT_AUCT = $row['IT_AUCT'];
$IT_MZ = $row['IT_MZ'];
$IT_NSPAP = $row['IT_NSPAP'];
$IT_BLOG = $row['IT_BLOG'];
$IT_WIKI = $row['IT_WIKI'];
$IT_NLRNL = $row['IT_NLRNL'];
$IT_PROD = $row['IT_PROD'];
$IT_SURV = $row['IT_SURV'];
$IT_INSM = $row['IT_INSM'];
$IT_EMAIL = $row['IT_EMAIL'];
$IT_MAPS = $row['IT_MAPS'];
$IT_PHONE = $row['IT_PHONE'];
$IT_SRCHENG = $row['IT_SRCHENG'];
$IT_CHAT = $row['IT_CHAT'];
$IT_VIDEO = $row['IT_VIDEO'];
$IT_OVIDEO = $row['IT_OVIDEO'];
							
	
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

$bFLY_CPN = $row['FLY_CPN'];
$bFLY_CPS = $row['FLY_CPS'];
$bFLY_CPO = $row['FLY_CPO'];
$bFLY_CPF = $row['FLY_CPF'];
$bFLY_STOREN = $row['FLY_STOREN'];
$bFLY_STORES = $row['FLY_STORES'];
$bFLY_STOREO = $row['FLY_STOREO'];
$bFLY_STOREF = $row['FLY_STOREF'];
$bFLY_MAILN = $row['FLY_MAILN'];
$bFLY_MAILS = $row['FLY_MAILS'];
$bFLY_MAILO = $row['FLY_MAILO'];
$bFLY_MAILF = $row['FLY_MAILF'];
$bFLY_CPWEBN = $row['FLY_CPWEBN'];
$bFLY_CPWEBS = $row['FLY_CPWEBS'];
$bFLY_CPWEBO = $row['FLY_CPWEBO'];
$bFLY_CPWEBF = $row['FLY_CPWEBF'];
$bFLY_ATTVF = $row['FLY_ATTVF'];
$bFLY_ATTSF = $row['FLY_ATTSF'];
$bFLY_ATTSU = $row['FLY_ATTSU'];
$bFLY_ATTVU = $row['FLY_ATTVU'];
$bFLY_SSDAY = $row['FLY_SSDAY'];
$bFLY_SSWK = $row['FLY_SSWK'];
$bFLY_SWKL = $row['FLY_SWKL'];
$bFLY_WSDAY = $row['FLY_WSDAY'];
$bFLY_WSWK = $row['FLY_WSWK'];
$bFLY_WWKL = $row['FLY_WWKL'];



$flypp15_ = $row['pp15_'];			
						}
	mysqli_free_result($result);
				}
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

/*
$canp_FLY_DPN = 50.6;
$canp_FLY_DPS = 18.6;
$canp_FLY_DPO = 18.9;
$canp_FLY_DPF = 11.93;
$canp_FLY_CNPN = 42.43;
$canp_FLY_CNPS = 18.16;
$canp_FLY_CNPO = 22.26;
$canp_FLY_CNPF = 17.15;
$canp_FLY_DOORN = 30.18;
$canp_FLY_DOORS = 19.84;
$canp_FLY_DOORO = 26.84;
$canp_FLY_DOORF = 22.2;
*/

$canp_FLY_CPN = 30.7241316805899;
$canp_FLY_CPS = 24.9866417312329;
$canp_FLY_CPO = 32.3693832314533;
$canp_FLY_CPF = 11.9197012094007;
$canp_FLY_DEMN = 60.2700502501041;
$canp_FLY_DEMS = 20.8378503030198;
$canp_FLY_DEMO = 15.4561642977532;
$canp_FLY_DEMF = 3.43595624113244;
$canp_FLY_DPN = 50.5705126123805;
$canp_FLY_DPS = 18.6004773184215;
$canp_FLY_DPO = 18.8965585520382;
$canp_FLY_DPF = 11.9325095521207;
$canp_FLY_CNPN = 42.428506417723;
$canp_FLY_CNPS = 18.160509889592;
$canp_FLY_CNPO = 22.2638480506531;
$canp_FLY_CNPF = 17.1473051450444;
$canp_FLY_DOORN = 30.1179551750287;
$canp_FLY_DOORS = 19.8426696340392;
$canp_FLY_DOORO = 26.8354625604156;
$canp_FLY_DOORF = 23.2040990071408;
$canp_FLY_GIWEBN = 55.000532668949;
$canp_FLY_GIWEBS = 23.3105940658535;
$canp_FLY_GIWEBO = 17.3538682094937;
$canp_FLY_GIWEBF = 4.33506730905369;
$canp_FLY_STOREN = 46.4887522098689;
$canp_FLY_STORES = 26.4537118730145;
$canp_FLY_STOREO = 21.9494417010608;
$canp_FLY_STOREF = 5.10782040350441;
$canp_FLY_MAILN = 73.5472899332361;
$canp_FLY_MAILS = 17.1497162805871;
$canp_FLY_MAILO = 7.97334533234674;
$canp_FLY_MAILF = 1.32817917209812;
$canp_FLY_CPWEBN = 63.0236975687959;
$canp_FLY_CPWEBS = 19.009061891603;
$canp_FLY_CPWEBO = 13.7413311227194;
$canp_FLY_CPWEBF = 4.22602293020121;
$canp_FLY_YPPN = 74.1103899208318;
$canp_FLY_YPPS = 16.374033570796;
$canp_FLY_YPPO = 8.72753848651614;
$canp_FLY_YPPF = 0.789010682781119;
$canp_FLY_YPON = 82.9004010037457;
$canp_FLY_YPOS = 11.4719973615833;
$canp_FLY_YPOO = 4.87633451661278;
$canp_FLY_YPOF = 0.751233882194853;
$canp_FLY_ATTVF = 23.5374399676824;
$canp_FLY_ATTSF = 41.0237316994862;
$canp_FLY_ATTSU = 18.7033653889121;
$canp_FLY_ATTVU = 16.735384583917;
$canp_FLY_SSDAY = 7.81057118423816;
$canp_FLY_SSWK = 20.5257854214625;
$canp_FLY_SWKL = 12.2676066456368;
$canp_FLY_WSDAY = 8.20466695726772;
$canp_FLY_WSWK = 8.93769256040569;
$canp_FLY_WWKL = 6.05606714671153;



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


$pb_flyer_heavy = $pbFLY_DOORO + $pbFLY_DOORF;
$canp_flyer_heavy = $canp_FLY_DOORO + $canp_FLY_DOORF ;

$index_flyer_heavy = $pb_flyer_heavy/ $canp_flyer_heavy *100;

// flyers augupdate

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

$internet1['canada'][] = 76.8;
$internet1['canada'][] = 39.5;
$internet1['canada'][] = 13.9;
$internet1['canada'][] = 14.5;

$internet2['canada'][] = 17;
$internet2['canada'][] = 10.6;
$internet2['canada'][] = 14.4;
$internet2['canada'][] = 13;
$internet2['canada'][] = 19.4;
$internet2['canada'][] = 25.6;

$internet3['canada'][] = 27.5;
$internet3['canada'][] = 20.2;
$internet3['canada'][] = 18.9;
$internet3['canada'][] = 7.6;
$internet3['canada'][] = 9.9;
$internet3['canada'][] = 20.3;
$internet3['canada'][] = 10.6;
$internet3['canada'][] = 18.3;
$internet3['canada'][] = 15.7;
$internet3['canada'][] = 14.7;
$internet3['canada'][] = 42.4;
$internet3['canada'][] = 6.3;
$internet3['canada'][] = 44.9;
$internet3['canada'][] = 12.2;
$internet3['canada'][] = 4.9;
$internet3['canada'][] = 12.3;
$internet3['canada'][] = 18.8;
$internet3['canada'][] = 14.2;
$internet3['canada'][] = 3;
$internet3['canada'][] = 14.3;
$internet3['canada'][] = 4.2;
$internet3['canada'][] = 8.7;
$internet3['canada'][] = 3.3;
$internet3['canada'][] = 5.3;
$internet3['canada'][] = +40.2*1.3;
$internet3['canada'][] = 10.5;
$internet3['canada'][] = 20.7;
$internet3['canada'][] = 5.1;
$internet3['canada'][] = 10.3;
$internet3['canada'][] = 19.8;
$internet3['canada'][] = 8.6;
$internet3['canada'][] = 13.8;
$internet3['canada'][] = 7;
$internet3['canada'][] = 32.7;
$internet3['canada'][] = 14.2;
$internet3['canada'][] = 28.1;
$internet3['canada'][] = 55.2;
$internet3['canada'][] = 39.6 * 1.2;
$internet3['canada'][] = 28.8;
$internet3['canada'][] = 51.7*1.2;
$internet3['canada'][] = 5.1;
$internet3['canada'][] = 12.1;
$internet3['canada'][] = 13.8;

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
							
 // Newspaper


$ainternet3["percent"] = $internet3["percent"];
$score_count = 1;
arsort($ainternet3["percent"]);
foreach ($ainternet3["percent"] as $key => $val) {
	$s1_internet3["score"][] = $score_count;
	$score_count = $score_count +1;
	$s1_internet3["percent"][] = $internet3["percent"][$key];
	$s1_internet3["name"][] = $internet3["name"][$key];
	$s1_internet3["index"][] = $internet3["index"][$key];
	
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
	$s2_internet3["index"][] = $s1_internet3["index"][$key];
	}
	else {
		$score_count = $score_count +1;
	$s2_internet3["score"][] = + $s1_internet3["score"][$key] + 33;
	$s2_internet3["percent"][] = $s1_internet3["percent"][$key];
	$s2_internet3["name"][] = $s1_internet3["name"][$key];
	$s2_internet3["index"][] = $s1_internet3["index"][$key];
	}
}

$cinternet3["score"] = $s2_internet3["score"];

asort($cinternet3["score"]);
foreach ($cinternet3["score"] as $key => $val) {
	$sorted_internet3["percent"][] = $s2_internet3["percent"][$key];
	$sorted_internet3["name"][] = $s2_internet3["name"][$key];
	$sorted_internet3["index"][] = $s2_internet3["index"][$key];
	$sorted_internet3["score"][] = $s2_internet3["score"][$key];
	
}

?>