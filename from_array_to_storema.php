<?php
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

for ( $i = 0; $i <= 17; $i ++) {
	$agg_values['segment'][$i] = $demo['segment'][$i];
}


$mfd_home = $demo['mfd_homes'][0];
$mfd_apts = $demo['mfd_homes'][1];
$mfd_farm = $demo['mfd_homes'][2];
$mfd_hh_count = $demo['mfd_homes'][3];

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

$radio_15 = $demo['radio'][0];
$RD_ADC = $demo['radio'][1];
$RD_MSTRK = $demo['radio'][2];
$RD_HADC = $demo['radio'][3];
$RD_MDRK = $demo['radio'][4];
$RD_MSTM = $demo['radio'][5];
$RD_NEWS = $demo['radio'][6];
$RD_CLAHIT = $demo['radio'][7];
$RD_CLARK = $demo['radio'][8];
$RD_CNTRY = $demo['radio'][9];
$RD_CLASS = $demo['radio'][10];
$RD_JAZZ = $demo['radio'][11];

$tv1_pp15 = $demo['tv1'][0];
$TV_AUTO = $demo['tv1'][1];
$TV_BSBALL = $demo['tv1'][2];
$TV_BKBALL = $demo['tv1'][3];
$TV_CARTOO = $demo['tv1'][4];
$TV_CTSHOW = $demo['tv1'][5];
$TV_DOC = $demo['tv1'][6];
$TV_SKATE = $demo['tv1'][7];
$TV_CFL = $demo['tv1'][8];
$TV_NFL = $demo['tv1'][9];
$TV_GMSHOW = $demo['tv1'][10];
$TV_GOLF = $demo['tv1'][11];
$TV_HOCKEY = $demo['tv1'][12];
$TV_HOME = $demo['tv1'][13];
$TV_HOMDEC = $demo['tv1'][14];
$TV_MSERIE = $demo['tv1'][15];
$TV_MOVIE = $demo['tv1'][16];
$TV_NEWS = $demo['tv1'][17];
$TV_PMKOV = $demo['tv1'][18];
$TV_REALITY = $demo['tv1'][19];
$TV_CMDIES = $demo['tv1'][20];
$TV_SOAP = $demo['tv1'][21];
$TV_DRAMA = $demo['tv1'][22];
$TV_TALK = $demo['tv1'][23];
$TV_INFO = $demo['tv1'][24];
$TV_SPEC = $demo['tv1'][25];
$TV_WREST = $demo['tv1'][26];

 $np_pp15  = $demo['np'][0];
$NP_AUTOF = $demo['np'][1];
$NP_BUSIF = $demo['np'][2];
$NP_CL_ADF = $demo['np'][3];
$NP_EDITF = $demo['np'][4];
$NP_FASHF = $demo['np'][5];
$NP_FOODF = $demo['np'][6];
$NP_HEALTHF = $demo['np'][7];
$NP_INEWF = $demo['np'][8];
$NP_LNEWF = $demo['np'][9];
$NP_MOVIF = $demo['np'][10];
$NP_NNEWF = $demo['np'][11];
$NP_HOMEF = $demo['np'][12];
$NP_RESTAF = $demo['np'][13];
$NP_SPORF = $demo['np'][14];
$NP_TRAVF = $demo['np'][15];
$NP_ADSF = $demo['np'][16];
$NP_READ1 = $demo['np'][17];
$NP_READ2 = $demo['np'][18];
$NP_READ3 = $demo['np'][19];
$NP_READ4 = $demo['np'][20];


$bLS_ADVSP  = $demo['leisure'][0];
$bLS_CRFT  = $demo['leisure'][1];
$bLS_SNMBL  = $demo['leisure'][2];
$bLS_BSBL  = $demo['leisure'][3];
$bLS_BSKBL  = $demo['leisure'][4];
$bLS_BLLDS  = $demo['leisure'][5];
$bLS_BOWL  = $demo['leisure'][6];
$bLS_CAMP  = $demo['leisure'][7];
$bLS_CANOE  = $demo['leisure'][8];
$bLS_CURL  = $demo['leisure'][9];
$bLS_CYCL  = $demo['leisure'][10];
$bLS_FSHT  = $demo['leisure'][11];
$bLS_FITWK  = $demo['leisure'][12];
$bLS_FITAER  = $demo['leisure'][13];
$bLS_FTBL  = $demo['leisure'][14];
$bLS_GARD  = $demo['leisure'][15];
$bLS_GOLF  = $demo['leisure'][16];
$bLS_CLUB  = $demo['leisure'][17];
$bLS_HIBA  = $demo['leisure'][18];
$bLS_HOCKY  = $demo['leisure'][19];
$bLS_HMEXC  = $demo['leisure'][20];
$bLS_ICSKT  = $demo['leisure'][21];
$bLS_ILSKT  = $demo['leisure'][22];
$bLS_JOG  = $demo['leisure'][23];
$bLS_MRTHN  = $demo['leisure'][24];
$bLS_YOGA  = $demo['leisure'][25];
$bLS_VIDEO  = $demo['leisure'][26];
$bLS_PWBT  = $demo['leisure'][27];
$bLS_RACSP  = $demo['leisure'][28];
$bLS_READ  = $demo['leisure'][29];
$bLS_SKBRD  = $demo['leisure'][30];
$bLS_SKCRS  = $demo['leisure'][31];
$bLS_SKDWH  = $demo['leisure'][32];
$bLS_SNBRD  = $demo['leisure'][33];
$bLS_SCCER  = $demo['leisure'][34];
$bLS_SWM  = $demo['leisure'][35];
$bLS_VOL  = $demo['leisure'][36];
$bLS_WHLWT  = $demo['leisure'][37];


$leis_pp15_   = $demo['leisure2'][0];
$bLS_MUSM  = $demo['leisure2'][1];
$bLS_EXHBT  = $demo['leisure2'][2];
$bLS_HIST  = $demo['leisure2'][3];
$bLS_CTPRK  = $demo['leisure2'][4];
$bLS_MAXMV  = $demo['leisure2'][5];
$bLS_SPEVN  = $demo['leisure2'][6];
$bLS_AMUSE  = $demo['leisure2'][7];
$bLS_THMPK  = $demo['leisure2'][8];
$bLS_ZOO  = $demo['leisure2'][9];
$bLS_OTHAT  = $demo['leisure2'][10];
$bLS_STDM  = $demo['leisure2'][11];
$bLS_CS  = $demo['leisure2'][12];
$bLS_NTCLB  = $demo['leisure2'][13];
$bLS_ODSTG  = $demo['leisure2'][14];
$bLS_THTR  = $demo['leisure2'][15];
$bLS_MJTHT  = $demo['leisure2'][16];
$bLS_CMTHT  = $demo['leisure2'][17];
$bLS_FSTVL  = $demo['leisure2'][18];
$bLS_OTTHT  = $demo['leisure2'][19];
$bLS_CLSCC  = $demo['leisure2'][20];
$bLS_BAR  = $demo['leisure2'][21];
$bLS_CMCLB  = $demo['leisure2'][22];
$bLS_DNCLB  = $demo['leisure2'][23];
$bLS_DITHT  = $demo['leisure2'][24];
$bLS_FMFST  = $demo['leisure2'][25];
$bLS_MSFST  = $demo['leisure2'][26];
$bLS_MVTHT  = $demo['leisure2'][27];
$bLS_NPPK  = $demo['leisure2'][28];
$bLS_POPCC  = $demo['leisure2'][29];
$bLS_LATRC  = $demo['leisure2'][30];
$bLS_LBSBL  = $demo['leisure2'][31];
$bLS_LBSKB  = $demo['leisure2'][32];
$bLS_LFSKT  = $demo['leisure2'][33];
$bLS_LFTBL  = $demo['leisure2'][34];
$bLS_LGLF  = $demo['leisure2'][35];
$bLS_LHCKY  = $demo['leisure2'][36];
$bLS_LHSRC  = $demo['leisure2'][37];
$bLS_LLCRS  = $demo['leisure2'][38];
$bLS_LSCC  = $demo['leisure2'][39];
$bLS_LTNS  = $demo['leisure2'][40];
$bLS_FITCLB  = $demo['leisure2'][41];
$bLS_GLFCLB  = $demo['leisure2'][42];


$flypp15_  = $demo['flyer'][0];
$bFLY_DPN  = $demo['flyer'][1];
$bFLY_DPS  = $demo['flyer'][2];
$bFLY_DPO  = $demo['flyer'][3];
$bFLY_DPF  = $demo['flyer'][4];
$bFLY_CNPN  = $demo['flyer'][5];
$bFLY_CNPS  = $demo['flyer'][6];
$bFLY_CNPO  = $demo['flyer'][7];
$bFLY_CNPF  = $demo['flyer'][8];
$bFLY_DOORN  = $demo['flyer'][9];
$bFLY_DOORS  = $demo['flyer'][10];
$bFLY_DOORO  = $demo['flyer'][11];
$bFLY_DOORF  = $demo['flyer'][12];

$bFLY_CPN = $demo['flyer1'][1];
$bFLY_CPS = $demo['flyer1'][2];
$bFLY_CPO = $demo['flyer1'][3];
$bFLY_CPF = $demo['flyer1'][4];
$bFLY_STOREN = $demo['flyer1'][5];
$bFLY_STORES = $demo['flyer1'][6];
$bFLY_STOREO = $demo['flyer1'][7];
$bFLY_STOREF = $demo['flyer1'][8];
$bFLY_MAILN = $demo['flyer1'][9];
$bFLY_MAILS = $demo['flyer1'][10];
$bFLY_MAILO = $demo['flyer1'][11];
$bFLY_MAILF = $demo['flyer1'][12];
$bFLY_CPWEBN = $demo['flyer1'][13];
$bFLY_CPWEBS = $demo['flyer1'][14];
$bFLY_CPWEBO = $demo['flyer1'][15];
$bFLY_CPWEBF = $demo['flyer1'][16];
$bFLY_ATTVF = $demo['flyer1'][17];
$bFLY_ATTSF = $demo['flyer1'][18];
$bFLY_ATTSU = $demo['flyer1'][19];
$bFLY_ATTVU = $demo['flyer1'][20];
$bFLY_SSDAY = $demo['flyer1'][21];
$bFLY_SSWK = $demo['flyer1'][22];
$bFLY_SWKL = $demo['flyer1'][23];
$bFLY_WSDAY = $demo['flyer1'][24];
$bFLY_WSWK = $demo['flyer1'][25];
$bFLY_WWKL = $demo['flyer1'][26];

$sp1hh_tot  = $demo['spending'][0];
$aD1000_1560c  = $demo['spending'][1];
$aD1000_1520c  = $demo['spending'][2];
$aD2000_2070c  = $demo['spending'][3];
$aD2200_2380c  = $demo['spending'][4];
$aD2200_2230c  = $demo['spending'][5];
$aD2240_2244c  = $demo['spending'][6];
$aD2270_2300c  = $demo['spending'][7];
$aD2340_2370c  = $demo['spending'][8];
$aD2500_2730c  = $demo['spending'][9];
$aD2540_2680c  = $demo['spending'][10];
$aD2540c  = $demo['spending'][11];
$aD2542c  = $demo['spending'][12];
$aD2550c  = $demo['spending'][13];
$aD2552c  = $demo['spending'][14];
$aD2554c  = $demo['spending'][15];
$aD2560c  = $demo['spending'][16];
$aD2570c  = $demo['spending'][17];
$aD2580c  = $demo['spending'][18];
$aD2582c  = $demo['spending'][19];
$aD2584c  = $demo['spending'][20];
$aD2586c  = $demo['spending'][21];
$aD2590c  = $demo['spending'][22];
$aD2600_2602c  = $demo['spending'][23];
$aD2600c  = $demo['spending'][24];
$aD2602c  = $demo['spending'][25];
$aD2610_2630c  = $demo['spending'][26];
$aD2610c  = $demo['spending'][27];
$aD2620c  = $demo['spending'][28];
$aD2630c  = $demo['spending'][29];
$aD2640c  = $demo['spending'][30];
$aD2650c  = $demo['spending'][31];
$aD2660c  = $demo['spending'][32];
$aD2670c  = $demo['spending'][33];
$aD2672c  = $demo['spending'][34];
$aD2674c  = $demo['spending'][35];
$aD2680c  = $demo['spending'][36];
$aD2800_2975c  = $demo['spending'][37];
$aD2800_2840c  = $demo['spending'][38];
$aD2850_2890c  = $demo['spending'][39];
$aD2900_2920c  = $demo['spending'][40];
$aD2950_2975c  = $demo['spending'][41];
$aD3000_3260c  = $demo['spending'][42];
$aD3000_3004c  = $demo['spending'][43];
$aD3050_3130c  = $demo['spending'][44];
$aD3300_3384c  = $demo['spending'][45];
$aD3500_3580c  = $demo['spending'][46];
$aD3530_3560c  = $demo['spending'][47];
$aD3570_3580c  = $demo['spending'][48];
$aD3700_4190c  = $demo['spending'][49];
$aD3700_3830c  = $demo['spending'][50];
$aD3700c  = $demo['spending'][51];
$aD3710c  = $demo['spending'][52];
$aD3720c  = $demo['spending'][53];
$aD3750_3760c  = $demo['spending'][54];
$aD3750_3752c  = $demo['spending'][55];
$aD3770_3774c  = $demo['spending'][56];
$aD3900_3980c  = $demo['spending'][57];
$aD3900_3918c  = $demo['spending'][58];
$aD3900c  = $demo['spending'][59];
$aD4000_4070c  = $demo['spending'][60];
$aD4000_4040c  = $demo['spending'][61];
$aD4100_4190c  = $demo['spending'][62];
$aD4100_4140c  = $demo['spending'][63];
$aD4150_4170c  = $demo['spending'][64];
$aD4180c  = $demo['spending'][65];
$aD4300_4340c  = $demo['spending'][66];
$aD4400_4470c  = $demo['spending'][67];
$aD4400_4410c  = $demo['spending'][68];
$aD4500_4540c  = $demo['spending'][69];
$aD4520c  = $demo['spending'][70];
$aD4530c  = $demo['spending'][71];
$aD4800_4840c  = $demo['spending'][72];
$aD4600_4720c  = $demo['spending'][73];
$aD4630_4660c  = $demo['spending'][74];
$aD4710_4720c  = $demo['spending'][75];
$aD4900_4930c  = $demo['spending'][76];
$aD5000_5084c  = $demo['spending'][77];
$aD5200_5230c  = $demo['spending'][78];
$aD5220_5230c  = $demo['spending'][79];
$aD1000_4840c  = $demo['spending'][80];
$aD1000_5230c  = $demo['spending'][81];


$inter_pp15_ = $demo['internet'][0];
$IT_HOME  = $demo['internet'][1];
$IT_WORK  = $demo['internet'][2];
$IT_SCH  = $demo['internet'][3];
$IT_OTH  = $demo['internet'][4];
$IT_TWK0  = $demo['internet'][5];
$IT_TWK5  = $demo['internet'][6];
$IT_TWK10  = $demo['internet'][7];
$IT_TWK15  = $demo['internet'][8];
$IT_TWK25  = $demo['internet'][9];
$IT_TWK25_  = $demo['internet'][10];
$IT_NSITE  = $demo['internet'][11];
$IT_RADIO  = $demo['internet'][12];
$IT_TV  = $demo['internet'][13];
$IT_AUTNEWS  = $demo['internet'][14];
$IT_FASHION  = $demo['internet'][15];
$IT_HEALTH  = $demo['internet'][16];
$IT_FURN  = $demo['internet'][17];
$IT_SPORT  = $demo['internet'][18];
$IT_RLEST  = $demo['internet'][19];
$IT_RESTG  = $demo['internet'][20];
$IT_WEATH  = $demo['internet'][21];
$IT_ADS  = $demo['internet'][22];
$IT_BNKING  = $demo['internet'][23];
$IT_DGAME  = $demo['internet'][24];
$IT_DCAST  = $demo['internet'][25];
$IT_DVIDEO  = $demo['internet'][26];
$IT_MP3  = $demo['internet'][27];
$IT_DCPN  = $demo['internet'][28];
$IT_DOAUDIO  = $demo['internet'][29];
$IT_CONTEST  = $demo['internet'][30];
$IT_PODCAST  = $demo['internet'][31];
$IT_AUDIO  = $demo['internet'][32];
$IT_LISRA  = $demo['internet'][33];
$IT_DONAT  = $demo['internet'][34];
$IT_SONET  = $demo['internet'][35];
$IT_CLAD  = $demo['internet'][36];
$IT_GAME  = $demo['internet'][37];
$IT_AUCT  = $demo['internet'][38];
$IT_MZ  = $demo['internet'][39];
$IT_NSPAP  = $demo['internet'][40];
$IT_BLOG  = $demo['internet'][41];
$IT_WIKI  = $demo['internet'][42];
$IT_NLRNL  = $demo['internet'][43];
$IT_PROD  = $demo['internet'][44];
$IT_SURV  = $demo['internet'][45];
$IT_INSM  = $demo['internet'][46];
$IT_EMAIL  = $demo['internet'][47];
$IT_MAPS  = $demo['internet'][48];
$IT_PHONE  = $demo['internet'][49];
$IT_SRCHENG  = $demo['internet'][50];
$IT_CHAT  = $demo['internet'][51];
$IT_VIDEO  = $demo['internet'][52];
$IT_OVIDEO  = $demo['internet'][53];


$hh_tot = $demo['auto'][0];
$pp18_ = $demo['auto'][1];
$AU_N0 = $demo['auto'][2];
$AU_N1 = $demo['auto'][3];
$AU_N2 = $demo['auto'][4];
$AU_N3 = $demo['auto'][5];
$AU_N4_ = $demo['auto'][6];
$AU_KM0 = $demo['auto'][7];
$AU_KM1_9 = $demo['auto'][8];
$AU_KM10_19 = $demo['auto'][9];
$AU_KM20_29 = $demo['auto'][10];
$AU_KM30_ = $demo['auto'][11];
$AU_MKBUI = $demo['auto'][12];
$AU_MKCAD = $demo['auto'][13];
$AU_MKCHE = $demo['auto'][14];
$AU_MKCHR = $demo['auto'][15];
$AU_MKDOD = $demo['auto'][16];
$AU_MKFOR = $demo['auto'][17];
$AU_MKGMC = $demo['auto'][18];
$AU_MKJEE = $demo['auto'][19];
$AU_MKLIN = $demo['auto'][20];
$AU_MKMER = $demo['auto'][21];
$AU_MKOLD = $demo['auto'][22];
$AU_MKPLY = $demo['auto'][23];
$AU_MKPON = $demo['auto'][24];
$AU_MKSAT = $demo['auto'][25];
$AU_MKDOM = $demo['auto'][26];
$AU_MKACU = $demo['auto'][27];
$AU_MKAU_D = $demo['auto'][28];
$AU_MKBMW = $demo['auto'][29];
$AU_MKHON = $demo['auto'][30];
$AU_MKHYU = $demo['auto'][31];
$AU_MKINF = $demo['auto'][32];
$AU_MKKIA = $demo['auto'][33];
$AU_MKLEX = $demo['auto'][34];
$AU_MKMAZ = $demo['auto'][35];
$AU_MKBEN = $demo['auto'][36];
$AU_MKMIT = $demo['auto'][37];
$AU_MKNIS = $demo['auto'][38];
$AU_MKSUB = $demo['auto'][39];
$AU_MKSUZ = $demo['auto'][40];
$AU_MKTOY = $demo['auto'][41];
$AU_MKVW = $demo['auto'][42];
$AU_MKVOL = $demo['auto'][43];
$AU_MKFGN = $demo['auto'][44];
$AU_TPMFS = $demo['auto'][45];
$AU_TPSCOMP = $demo['auto'][46];
$AU_TPSPO = $demo['auto'][47];
$AU_TPMVSW = $demo['auto'][48];
$AU_TPSUV = $demo['auto'][49];
$AU_TPPIC = $demo['auto'][50];
$AU_TPFVAN = $demo['auto'][51];
$AU_TPOTH = $demo['auto'][52];
$AU_YR13_ = $demo['auto'][53];
$AU_YR12 = $demo['auto'][54];
$AU_YR11 = $demo['auto'][55];
$AU_YR10 = $demo['auto'][56];
$AU_YR09 = $demo['auto'][57];
$AU_YR08 = $demo['auto'][58];
$AU_YR07 = $demo['auto'][59];
$AU_YR06 = $demo['auto'][60];
$AU_YR05 = $demo['auto'][61];
$AU_YR04 = $demo['auto'][62];
$AU_YR03 = $demo['auto'][63];
$AU_YR_02 = $demo['auto'][64];
$AU_YRNO = $demo['auto'][65];
$AU_NEWBN = $demo['auto'][66];
$AU_NEWBU = $demo['auto'][67];
$AU_NEWLN = $demo['auto'][68];
$AU_NEWLU = $demo['auto'][69];
$AU_NEWNO = $demo['auto'][70];
$AU_V_9 = $demo['auto'][71];
$AU_V10_14 = $demo['auto'][72];
$AU_V15_19 = $demo['auto'][73];
$AU_V20_24 = $demo['auto'][74];
$AU_V25_29 = $demo['auto'][75];
$AU_V30_39 = $demo['auto'][76];
$AU_V40_ = $demo['auto'][77];
$AU_PPUP = $demo['auto'][78];
$AU_PPULP = $demo['auto'][79];
$AU_PPULN = $demo['auto'][80];
$AU_PPUN = $demo['auto'][81];
$AU_PV_9 = $demo['auto'][82];
$AU_PV10_14 = $demo['auto'][83];
$AU_PV15_19 = $demo['auto'][84];
$AU_PV20_24 = $demo['auto'][85];
$AU_PV25_29 = $demo['auto'][86];
$AU_PV30_39 = $demo['auto'][87];
$AU_PV40_ = $demo['auto'][88];
$AU_PTPSED = $demo['auto'][89];
$AU_PTPSCOM = $demo['auto'][90];
$AU_PTPSPO = $demo['auto'][91];
$AU_PTPMVSW = $demo['auto'][92];
$AU_PTPSUV = $demo['auto'][93];
$AU_PTPPIC = $demo['auto'][94];
$AU_PTPFVAN = $demo['auto'][95];
$AU_PTPOTH = $demo['auto'][96];
$AU_MNBDN = $demo['auto'][97];
$AU_MNBDG = $demo['auto'][98];
$AU_MNBDD = $demo['auto'][99];
$AU_MNBDS = $demo['auto'][100];
$AU_MNBDL = $demo['auto'][101];
$AU_MNBDF = $demo['auto'][102];
$AU_MNBDU = $demo['auto'][103];
$AU_MNOCN = $demo['auto'][104];
$AU_MNOCG = $demo['auto'][105];
$AU_MNOCD = $demo['auto'][106];
$AU_MNOCS = $demo['auto'][107];
$AU_MNOCL = $demo['auto'][108];
$AU_MNOCF = $demo['auto'][109];
$AU_MNOCU = $demo['auto'][110];
$AU_MNBKN = $demo['auto'][111];
$AU_MNBKG = $demo['auto'][112];
$AU_MNBKD = $demo['auto'][113];
$AU_MNBKS = $demo['auto'][114];
$AU_MNBKL = $demo['auto'][115];
$AU_MNBKF = $demo['auto'][116];
$AU_MNBKU = $demo['auto'][117];
$AU_MNTRN = $demo['auto'][118];
$AU_MNTRG = $demo['auto'][119];
$AU_MNTRD = $demo['auto'][120];
$AU_MNTRS = $demo['auto'][121];
$AU_MNTRL = $demo['auto'][122];
$AU_MNTRF = $demo['auto'][123];
$AU_MNTRU = $demo['auto'][124];
$AU_MNRPN = $demo['auto'][125];
$AU_MNRPG = $demo['auto'][126];
$AU_MNRPD = $demo['auto'][127];
$AU_MNRPS = $demo['auto'][128];
$AU_MNRPL = $demo['auto'][129];
$AU_MNRPF = $demo['auto'][130];
$AU_MNRPU = $demo['auto'][131];
$AU_MNTPN = $demo['auto'][132];
$AU_MNTPG = $demo['auto'][133];
$AU_MNTPD = $demo['auto'][134];
$AU_MNTPS = $demo['auto'][135];
$AU_MNTPL = $demo['auto'][136];
$AU_MNTPF = $demo['auto'][137];
$AU_MNTPU = $demo['auto'][138];
$AU_VSGR = $demo['auto'][139];
$AU_VSAG = $demo['auto'][140];
$AU_VSST = $demo['auto'][141];
$AU_VSCT = $demo['auto'][142];
$AU_VSCC = $demo['auto'][143];
$AU_VSGM = $demo['auto'][144];
$AU_VSGY = $demo['auto'][145];
$AU_VSMC = $demo['auto'][146];
$AU_VSMD = $demo['auto'][147];
$AU_VSTR = $demo['auto'][148];
$AU_VSLB = $demo['auto'][149];
$AU_VSNP = $demo['auto'][150];
$AU_VSOKT = $demo['auto'][151];
$AU_VSPS = $demo['auto'][152];
$AU_VSSG = $demo['auto'][153];
$AU_VSSS = $demo['auto'][154];
$AU_VSWM = $demo['auto'][155];
$AU_VSDL = $demo['auto'][156];
$AU_VSCTCW = $demo['auto'][157];
$AU_VSOT = $demo['auto'][158];
$AU_GASCT = $demo['auto'][159];
$AU_GASCR = $demo['auto'][160];
$AU_GASES = $demo['auto'][161];
$AU_GASPT = $demo['auto'][162];
$AU_GASSL = $demo['auto'][163];
$AU_GASOT = $demo['auto'][164];
$AU_BUYERN = $demo['auto'][165];
$AU_PUN = $demo['auto'][166];
$AU_PUPN = $demo['auto'][167];
$AU_PUPU = $demo['auto'][168];
$AU_PULN = $demo['auto'][169];
$AU_PULU = $demo['auto'][170];

$hh_tot= $demo['improve'][0];
$pp15_= $demo['improve'][1];
$DW_PUNEW= $demo['improve'][2];
$DW_PUOWN= $demo['improve'][3];
$DW_N1STHM= $demo['improve'][4];
$DW_1STHM= $demo['improve'][5];
$DW_RE1Y= $demo['improve'][6];
$DW_RE5Y= $demo['improve'][7];
$DW_RE10Y= $demo['improve'][8];
$DW_RE19Y= $demo['improve'][9];
$DW_RE20_Y= $demo['improve'][10];
$DW_RASPACE= $demo['improve'][11];
$DW_RAGARG= $demo['improve'][12];
$DW_RADRAP= $demo['improve'][13];
$DW_RADECK= $demo['improve'][14];
$DW_RAELEC= $demo['improve'][15];
$DW_RAENG= $demo['improve'][16];
$DW_RAEPAIN= $demo['improve'][17];
$DW_RATILE= $demo['improve'][18];
$DW_RAFLOO= $demo['improve'][19];
$DW_RAHVAC= $demo['improve'][20];
$DW_RASECU= $demo['improve'][21];
$DW_RAWIND= $demo['improve'][22];
$DW_RAIPAIN= $demo['improve'][23];
$DW_RALAND= $demo['improve'][24];
$DW_RAPLUM= $demo['improve'][25];
$DW_RABATH= $demo['improve'][26];
$DW_RAKITC= $demo['improve'][27];
$DW_RAORM= $demo['improve'][28];
$DW_RAROOF= $demo['improve'][29];
$DW_RAPOOL= $demo['improve'][30];
$DW_RACARP= $demo['improve'][31];
$DW_RAOTHE= $demo['improve'][32];
$DW_HMINSP= $demo['improve'][33];
$DW_MTGBRK= $demo['improve'][34];
$DW_MVCOMP= $demo['improve'][35];
$DW_REAGNT= $demo['improve'][36];
$DW_RELAWY= $demo['improve'][37];
$DW_PHMINSP= $demo['improve'][38];
$DW_PMTGBRK= $demo['improve'][39];
$DW_PMVCOMP= $demo['improve'][40];
$DW_PREAGNT= $demo['improve'][41];
$DW_PRELAWY= $demo['improve'][42];
$DW_SPSELF= $demo['improve'][43];
$DW_SPCONT= $demo['improve'][44];
$DW_GRGSELF= $demo['improve'][45];
$DW_GRGCONT= $demo['improve'][46];
$DW_DRSELF= $demo['improve'][47];
$DW_DRCONT= $demo['improve'][48];
$DW_DKSELF= $demo['improve'][49];
$DW_DKCONT= $demo['improve'][50];
$DW_ELSELF= $demo['improve'][51];
$DW_ELCONT= $demo['improve'][52];
$DW_ENSELF= $demo['improve'][53];
$DW_ENCONT= $demo['improve'][54];
$DW_EPSELF= $demo['improve'][55];
$DW_EPCONT= $demo['improve'][56];
$DW_TISELF= $demo['improve'][57];
$DW_TICONT= $demo['improve'][58];
$DW_FLSELF= $demo['improve'][59];
$DW_FLCONT= $demo['improve'][60];
$DW_HVSELF= $demo['improve'][61];
$DW_HVCONT= $demo['improve'][62];
$DW_SESELF= $demo['improve'][63];
$DW_SECONT= $demo['improve'][64];
$DW_WISELF= $demo['improve'][65];
$DW_WICONT= $demo['improve'][66];
$DW_IPSELF= $demo['improve'][67];
$DW_IPCONT= $demo['improve'][68];
$DW_LASELF= $demo['improve'][69];
$DW_LACONT= $demo['improve'][70];
$DW_PLSELF= $demo['improve'][71];
$DW_PLCONT= $demo['improve'][72];
$DW_BTSELF= $demo['improve'][73];
$DW_BTCONT= $demo['improve'][74];
$DW_KISELF= $demo['improve'][75];
$DW_KICONT= $demo['improve'][76];
$DW_ORSELF= $demo['improve'][77];
$DW_ORCONT= $demo['improve'][78];
$DW_RFSELF= $demo['improve'][79];
$DW_RFCONT= $demo['improve'][80];
$DW_POSELF= $demo['improve'][81];
$DW_POCONT= $demo['improve'][82];
$DW_CPSELF= $demo['improve'][83];
$DW_CPCONT= $demo['improve'][84];
$DW_OHSELF= $demo['improve'][85];
$DW_OHCONT= $demo['improve'][86];
$DW_SP0= $demo['improve'][87];
$DW_SP999= $demo['improve'][88];
$DW_SP2499= $demo['improve'][89];
$DW_SP4999= $demo['improve'][90];
$DW_SP9999= $demo['improve'][91];
$DW_SP19999= $demo['improve'][92];
$DW_SP20000= $demo['improve'][93];
$DW_NALARM= $demo['improve'][94];
$DW_ALARM= $demo['improve'][95];
$DW_GDSERV= $demo['improve'][96];
$DW_MDSERV= $demo['improve'][97];
$DW_PCSERV= $demo['improve'][98];
$DW_TOT= $demo['improve'][99];
$DW_SINGLE= $demo['improve'][100];
$DW_APT5_= $demo['improve'][101];
$DW_MOVA= $demo['improve'][102];
$DW_OT= $demo['improve'][103];
$DW_SEMI= $demo['improve'][104];
$DW_DUP= $demo['improve'][105];
$DW_ROW= $demo['improve'][106];
$DW_APT_5= $demo['improve'][107];
$DW_OT_SING= $demo['improve'][108];
$DW_AVALUE= $demo['improve'][109];
$DW_MVALUE= $demo['improve'][110];
$DW_TOTDWLG= $demo['improve'][111];
$DW_REGMIN= $demo['improve'][112];
$DW_MAJORRE= $demo['improve'][113];
$DW_TOTDWL2= $demo['improve'][114];
$DW_CON_60= $demo['improve'][115];
$DW_CON6180= $demo['improve'][116];
$DW_CON8190= $demo['improve'][117];
$DW_CON9100= $demo['improve'][118];
$DW_CON0105= $demo['improve'][119];
$DW_CON0611= $demo['improve'][120];
$DW_CON12_= $demo['improve'][121];
$DW_TOTDWL3= $demo['improve'][122];
$DW_RM_4= $demo['improve'][123];
$DW_RM5= $demo['improve'][124];
$DW_RM6= $demo['improve'][125];
$DW_RM7= $demo['improve'][126];
$DW_RM8_= $demo['improve'][127];
$DW_ARMSPDW= $demo['improve'][128];
$DW_TOTDWL4= $demo['improve'][129];
$DW_BRM_1= $demo['improve'][130];
$DW_BRM2= $demo['improve'][131];
$DW_BRM3= $demo['improve'][132];
$DW_BRM4_= $demo['improve'][133];
$DW_TOTDWL5= $demo['improve'][134];
$DW_OWNED= $demo['improve'][135];
$DW_RENTED= $demo['improve'][136];
$DW_BANDH= $demo['improve'][137];
$DW_TOTDWL6= $demo['improve'][138];
$DW_PTCON= $demo['improve'][139];
$DW_NPTCON= $demo['improve'][140];
$DW_TOTDWL7= $demo['improve'][141];
$DW_MT1= $demo['improve'][142];
$DW_MT2= $demo['improve'][143];
$DW_MT3_= $demo['improve'][144];
$DW_TOTDWL8= $demo['improve'][145];
$DW_MT_25= $demo['improve'][146];
$DW_MT2534= $demo['improve'][147];
$DW_MT3544= $demo['improve'][148];
$DW_MT4554= $demo['improve'][149];
$DW_MT5564= $demo['improve'][150];
$DW_MT6574= $demo['improve'][151];
$DW_MT75_= $demo['improve'][152];
$DW_TOTDWL9= $demo['improve'][153];
$DW_PPR_1= $demo['improve'][154];
$DW_PPR2_= $demo['improve'][155];
$DW_TOTDWLA= $demo['improve'][156];
$DW_SUIT= $demo['improve'][157];
$DW_NSUIT= $demo['improve'][158];
$DW_MCOST= $demo['improve'][159];
$DW_ACOST= $demo['improve'][160];
$H_CANTR= $demo['improve'][161];
$H_DEPOT= $demo['improve'][162];
$H_HWARE= $demo['improve'][163];
$H_OUTFT= $demo['improve'][164];
$H_SENSE= $demo['improve'][165];
$H_INDEP= $demo['improve'][166];
$H_LEE= $demo['improve'][167];
$H_LIGHT= $demo['improve'][168];
$H_LOWE= $demo['improve'][169];
$H_RONA= $demo['improve'][170];
$H_DEPT= $demo['improve'][171];
$H_OL= $demo['improve'][172];
$H_OTHDEC= $demo['improve'][173];
$H_OTHIMP= $demo['improve'][174];
$H_CANTR_R= $demo['improve'][175];
$H_DEPOT_R= $demo['improve'][176];
$H_HWARE_R= $demo['improve'][177];
$H_OUTFT_R= $demo['improve'][178];
$H_SENSE_R= $demo['improve'][179];
$H_INDEP_R= $demo['improve'][180];
$H_LEE_R= $demo['improve'][181];
$H_LIGHT_R= $demo['improve'][182];
$H_LOWE_R= $demo['improve'][183];
$H_RONA_R= $demo['improve'][184];
$H_DEPT_R= $demo['improve'][185];
$H_OL_R= $demo['improve'][186];
$H_OTHDEC_R= $demo['improve'][187];
$H_OTHIMP_R= $demo['improve'][188];
$H_CANTR_O= $demo['improve'][189];
$H_DEPOT_O= $demo['improve'][190];
$H_HWARE_O= $demo['improve'][191];
$H_OUTFT_O= $demo['improve'][192];
$H_SENSE_O= $demo['improve'][193];
$H_INDEP_O= $demo['improve'][194];
$H_LEE_O= $demo['improve'][195];
$H_LIGHT_O= $demo['improve'][196];
$H_LOWE_O= $demo['improve'][197];
$H_RONA_O= $demo['improve'][198];
$H_DEPT_O= $demo['improve'][199];
$H_OL_O= $demo['improve'][200];
$H_OTHDEC_O= $demo['improve'][201];
$H_OTHIMP_O= $demo['improve'][202];
$PC_BBFUR= $demo['improve'][203];
$PC_BED= $demo['improve'][204];
$PC_OFFFUR= $demo['improve'][205];
$PC_CARALRM= $demo['improve'][206];
$PC_CARSTR= $demo['improve'][207];
$PC_CMRAFLM= $demo['improve'][208];
$PC_CMPEQP= $demo['improve'][209];
$PC_CMPTRL= $demo['improve'][210];
$PC_EREADER= $demo['improve'][211];
$PC_GRPTFUR= $demo['improve'][212];
$PC_GASBBQ= $demo['improve'][213];
$PC_FIREPLC= $demo['improve'][214];
$PC_GPS= $demo['improve'][215];
$PC_GOLFEQP= $demo['improve'][216];
$PC_HOCKEY= $demo['improve'][217];
$PC_HOTTUB= $demo['improve'][218];
$PC_EXCEQP= $demo['improve'][219];
$PC_APPLIAN= $demo['improve'][220];
$PC_MOTORCY= $demo['improve'][221];
$PC_MINSTR= $demo['improve'][222];
$PC_OFFEQP= $demo['improve'][223];
$PC_MP3= $demo['improve'][224];
$PC_PC= $demo['improve'][225];
$PC_PCSW= $demo['improve'][226];
$PC_PRNT= $demo['improve'][227];
$PC_POOL= $demo['improve'][228];
$PC_PRAFUNE= $demo['improve'][229];
$PC_BOAT= $demo['improve'][230];
$PC_SKIEQP= $demo['improve'][231];
$PC_SNOWMBL= $demo['improve'][232];
$PC_STEREO= $demo['improve'][233];
$PC_TV= $demo['improve'][234];
$PC_TIRE= $demo['improve'][235];
$PC_VACUUM= $demo['improve'][236];
$PC_VDOEQP= $demo['improve'][237];
$PC_GMSYS= $demo['improve'][238];
$PC_WEDSVR= $demo['improve'][239];
$PI_BBFUR= $demo['improve'][240];
$PI_BED= $demo['improve'][241];
$PI_OFFFUR= $demo['improve'][242];
$PI_CARALRM= $demo['improve'][243];
$PI_CARSTR= $demo['improve'][244];
$PI_CMRAFLM= $demo['improve'][245];
$PI_CMPEQP= $demo['improve'][246];
$PI_CMPTRL= $demo['improve'][247];
$PI_EREADER= $demo['improve'][248];
$PI_GRPTFUR= $demo['improve'][249];
$PI_GASBBQ= $demo['improve'][250];
$PI_FIREPLC= $demo['improve'][251];
$PI_GPS= $demo['improve'][252];
$PI_GOLFEQP= $demo['improve'][253];
$PI_HOCKEY= $demo['improve'][254];
$PI_HOTTUB= $demo['improve'][255];
$PI_EXCEQP= $demo['improve'][256];
$PI_APPLIAN= $demo['improve'][257];
$PI_MOTORCY= $demo['improve'][258];
$PI_MINSTR= $demo['improve'][259];
$PI_OFFEQP= $demo['improve'][260];
$PI_MP3= $demo['improve'][261];
$PI_PC= $demo['improve'][262];
$PI_PCSW= $demo['improve'][263];
$PI_PRNT= $demo['improve'][264];
$PI_POOL= $demo['improve'][265];
$PI_PRAFUNE= $demo['improve'][266];
$PI_BOAT= $demo['improve'][267];
$PI_SKIEQP= $demo['improve'][268];
$PI_SNOWMBL= $demo['improve'][269];
$PI_STEREO= $demo['improve'][270];
$PI_TV= $demo['improve'][271];
$PI_TIRE= $demo['improve'][272];
$PI_VACUUM= $demo['improve'][273];
$PI_VDOEQP= $demo['improve'][274];
$PI_GMSYS= $demo['improve'][275];
$PI_WEDSVR= $demo['improve'][276];
$SP_GSNO= $demo['improve'][277];
$SP_GS249= $demo['improve'][278];
$SP_GS499= $demo['improve'][279];
$SP_GS500= $demo['improve'][280];
$SP_HDNO= $demo['improve'][281];
$SP_HD249= $demo['improve'][282];
$SP_HD499= $demo['improve'][283];
$SP_HD500= $demo['improve'][284];
$SP_PTNO= $demo['improve'][285];
$SP_PT249= $demo['improve'][286];
$SP_PT499= $demo['improve'][287];
$SP_PT500= $demo['improve'][288];



		?>