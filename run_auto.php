
<?php

if (isset($_POST["province"])) {	$province = $_POST["province"];} else $province = "Y";

$area_to_select = $province;
$prov_to_select = $province;

echo "<br /><br /><br />" . $prov_to_select . "<br /><br />";

include "db_connect_wg.php";

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
?>
<form id="form1" name="form1" method="post" action="">

  <input type="text" name="province" id="province" />
  <input type="submit" name="subbut" id="subbut" value="Submit" />
</form>
<?php
echo "newbench-><br />";
print_r($newbench);
$agg_list = implode(",", $newbench['auto']);
echo "agg_list-><br />" . $agg_list;

include "db_connect.php";

	mysqli_query($link,"INSERT INTO amfd_bench1 (agg_name, agg_list, bench_name) VALUES ('auto', '$agg_list', '$prov_to_select') ");



		?>