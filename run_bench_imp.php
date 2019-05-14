<?php
$area_to_select = "Y";
$prov_to_select = $area_to_select;
echo "<br /><br /><br />" . $prov_to_select . "<br /><br />";


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

echo "newbench";
print_r($newbench);







		?>