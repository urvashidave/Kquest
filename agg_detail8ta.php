<?php


$query = "SELECT
  SUM(a_weight.hh_tot) as hh_tot
, SUM(a_weight.pp18_) as pp18_

, SUM(at1.AU_N0*a_weight.hh_tot) as AU_N0
, SUM(at1.AU_N1*a_weight.hh_tot) as AU_N1
, SUM(at1.AU_N2*a_weight.hh_tot) as AU_N2
, SUM(at1.AU_N3*a_weight.hh_tot) as AU_N3
, SUM(at1.AU_N4_*a_weight.hh_tot) as AU_N4_
, SUM(at1.AU_KM0*a_weight.pp18_) as AU_KM0
, SUM(at1.AU_KM1_9*a_weight.pp18_) as AU_KM1_9
, SUM(at1.AU_KM10_19*a_weight.pp18_) as AU_KM10_19
, SUM(at1.AU_KM20_29*a_weight.pp18_) as AU_KM20_29
, SUM(at1.AU_KM30_*a_weight.pp18_) as AU_KM30_
, SUM(at1.AU_MKBUI*a_weight.pp18_) as AU_MKBUI
, SUM(at1.AU_MKCAD*a_weight.pp18_) as AU_MKCAD
, SUM(at1.AU_MKCHE*a_weight.pp18_) as AU_MKCHE
, SUM(at1.AU_MKCHR*a_weight.pp18_) as AU_MKCHR
, SUM(at1.AU_MKDOD*a_weight.pp18_) as AU_MKDOD
, SUM(at1.AU_MKFOR*a_weight.pp18_) as AU_MKFOR
, SUM(at1.AU_MKGMC*a_weight.pp18_) as AU_MKGMC
, SUM(at1.AU_MKJEE*a_weight.pp18_) as AU_MKJEE
, SUM(at1.AU_MKLIN*a_weight.pp18_) as AU_MKLIN
, SUM(at1.AU_MKMER*a_weight.pp18_) as AU_MKMER
, SUM(at1.AU_MKOLD*a_weight.pp18_) as AU_MKOLD
, SUM(at1.AU_MKPLY*a_weight.pp18_) as AU_MKPLY
, SUM(at1.AU_MKPON*a_weight.pp18_) as AU_MKPON
, SUM(at1.AU_MKSAT*a_weight.pp18_) as AU_MKSAT
, SUM(at1.AU_MKDOM*a_weight.pp18_) as AU_MKDOM
, SUM(at1.AU_MKACU*a_weight.pp18_) as AU_MKACU
, SUM(at1.AU_MKAU_D*a_weight.pp18_) as AU_MKAU_D
, SUM(at1.AU_MKBMW*a_weight.pp18_) as AU_MKBMW
, SUM(at1.AU_MKHON*a_weight.pp18_) as AU_MKHON
, SUM(at1.AU_MKHYU*a_weight.pp18_) as AU_MKHYU
, SUM(at1.AU_MKINF*a_weight.pp18_) as AU_MKINF
, SUM(at1.AU_MKKIA*a_weight.pp18_) as AU_MKKIA
, SUM(at1.AU_MKLEX*a_weight.pp18_) as AU_MKLEX
, SUM(at1.AU_MKMAZ*a_weight.pp18_) as AU_MKMAZ
, SUM(at1.AU_MKBEN*a_weight.pp18_) as AU_MKBEN
, SUM(at1.AU_MKMIT*a_weight.pp18_) as AU_MKMIT
, SUM(at1.AU_MKNIS*a_weight.pp18_) as AU_MKNIS
, SUM(at1.AU_MKSUB*a_weight.pp18_) as AU_MKSUB
, SUM(at1.AU_MKSUZ*a_weight.pp18_) as AU_MKSUZ
, SUM(at1.AU_MKTOY*a_weight.pp18_) as AU_MKTOY
, SUM(at1.AU_MKVW*a_weight.pp18_) as AU_MKVW
, SUM(at1.AU_MKVOL*a_weight.pp18_) as AU_MKVOL
, SUM(at1.AU_MKFGN*a_weight.pp18_) as AU_MKFGN
, SUM(at1.AU_TPMFS*a_weight.pp18_) as AU_TPMFS
, SUM(at1.AU_TPSCOMP*a_weight.pp18_) as AU_TPSCOMP
, SUM(at1.AU_TPSPO*a_weight.pp18_) as AU_TPSPO
, SUM(at1.AU_TPMVSW*a_weight.pp18_) as AU_TPMVSW
, SUM(at1.AU_TPSUV*a_weight.pp18_) as AU_TPSUV
, SUM(at1.AU_TPPIC*a_weight.pp18_) as AU_TPPIC
, SUM(at1.AU_TPFVAN*a_weight.pp18_) as AU_TPFVAN
, SUM(at1.AU_TPOTH*a_weight.pp18_) as AU_TPOTH
, SUM(at1.AU_YR13_*a_weight.pp18_) as AU_YR13_
, SUM(at1.AU_YR12*a_weight.pp18_) as AU_YR12
, SUM(at1.AU_YR11*a_weight.pp18_) as AU_YR11
, SUM(at1.AU_YR10*a_weight.pp18_) as AU_YR10
, SUM(at1.AU_YR09*a_weight.pp18_) as AU_YR09
, SUM(at1.AU_YR08*a_weight.pp18_) as AU_YR08
, SUM(at1.AU_YR07*a_weight.pp18_) as AU_YR07
, SUM(at1.AU_YR06*a_weight.pp18_) as AU_YR06
, SUM(at1.AU_YR05*a_weight.pp18_) as AU_YR05
, SUM(at1.AU_YR04*a_weight.pp18_) as AU_YR04
, SUM(at1.AU_YR03*a_weight.pp18_) as AU_YR03
, SUM(at1.AU_YR_02*a_weight.pp18_) as AU_YR_02
, SUM(at1.AU_YRNO*a_weight.pp18_) as AU_YRNO
, SUM(at1.AU_NEWBN*a_weight.pp18_) as AU_NEWBN
, SUM(at1.AU_NEWBU*a_weight.pp18_) as AU_NEWBU
, SUM(at1.AU_NEWLN*a_weight.pp18_) as AU_NEWLN
, SUM(at1.AU_NEWLU*a_weight.pp18_) as AU_NEWLU
, SUM(at1.AU_NEWNO*a_weight.pp18_) as AU_NEWNO
, SUM(at1.AU_V_9*a_weight.pp18_) as AU_V_9
, SUM(at1.AU_V10_14*a_weight.pp18_) as AU_V10_14
, SUM(at1.AU_V15_19*a_weight.pp18_) as AU_V15_19
, SUM(at1.AU_V20_24*a_weight.pp18_) as AU_V20_24
, SUM(at1.AU_V25_29*a_weight.pp18_) as AU_V25_29
, SUM(at1.AU_V30_39*a_weight.pp18_) as AU_V30_39
, SUM(at1.AU_V40_*a_weight.pp18_) as AU_V40_
, SUM(at1.AU_PPUP*a_weight.pp18_) as AU_PPUP
, SUM(at1.AU_PPULP*a_weight.pp18_) as AU_PPULP
, SUM(at1.AU_PPULN*a_weight.pp18_) as AU_PPULN
, SUM(at1.AU_PPUN*a_weight.pp18_) as AU_PPUN
, SUM(at1.AU_PV_9*a_weight.pp18_) as AU_PV_9
, SUM(at1.AU_PV10_14*a_weight.pp18_) as AU_PV10_14
, SUM(at1.AU_PV15_19*a_weight.pp18_) as AU_PV15_19
, SUM(at1.AU_PV20_24*a_weight.pp18_) as AU_PV20_24

, SUM(at1.AU_PV25_29*a_weight.pp18_) as AU_PV25_29
, SUM(at1.AU_PV30_39*a_weight.pp18_) as AU_PV30_39
, SUM(at1.AU_PV40_*a_weight.pp18_) as AU_PV40_
, SUM(at1.AU_PTPSED*a_weight.pp18_) as AU_PTPSED
, SUM(at1.AU_PTPSCOM*a_weight.pp18_) as AU_PTPSCOM
, SUM(at1.AU_PTPSPO*a_weight.pp18_) as AU_PTPSPO
, SUM(at1.AU_PTPMVSW*a_weight.pp18_) as AU_PTPMVSW
, SUM(at1.AU_PTPSUV*a_weight.pp18_) as AU_PTPSUV
, SUM(at1.AU_PTPPIC*a_weight.pp18_) as AU_PTPPIC
, SUM(at1.AU_PTPFVAN*a_weight.pp18_) as AU_PTPFVAN
, SUM(at1.AU_PTPOTH*a_weight.pp18_) as AU_PTPOTH
, SUM(at1.AU_MNBDN*a_weight.pp18_) as AU_MNBDN
, SUM(at1.AU_MNBDG*a_weight.pp18_) as AU_MNBDG
, SUM(at1.AU_MNBDD*a_weight.pp18_) as AU_MNBDD
, SUM(at1.AU_MNBDS*a_weight.pp18_) as AU_MNBDS
, SUM(at1.AU_MNBDL*a_weight.pp18_) as AU_MNBDL
, SUM(at1.AU_MNBDF*a_weight.pp18_) as AU_MNBDF
, SUM(at1.AU_MNBDU*a_weight.pp18_) as AU_MNBDU
, SUM(at1.AU_MNOCN*a_weight.pp18_) as AU_MNOCN
, SUM(at1.AU_MNOCG*a_weight.pp18_) as AU_MNOCG
, SUM(at1.AU_MNOCD*a_weight.pp18_) as AU_MNOCD
, SUM(at1.AU_MNOCS*a_weight.pp18_) as AU_MNOCS
, SUM(at1.AU_MNOCL*a_weight.pp18_) as AU_MNOCL
, SUM(at1.AU_MNOCF*a_weight.pp18_) as AU_MNOCF
, SUM(at1.AU_MNOCU*a_weight.pp18_) as AU_MNOCU
, SUM(at1.AU_MNBKN*a_weight.pp18_) as AU_MNBKN
, SUM(at1.AU_MNBKG*a_weight.pp18_) as AU_MNBKG
, SUM(at1.AU_MNBKD*a_weight.pp18_) as AU_MNBKD
, SUM(at1.AU_MNBKS*a_weight.pp18_) as AU_MNBKS
, SUM(at1.AU_MNBKL*a_weight.pp18_) as AU_MNBKL
, SUM(at1.AU_MNBKF*a_weight.pp18_) as AU_MNBKF
, SUM(at1.AU_MNBKU*a_weight.pp18_) as AU_MNBKU
, SUM(at1.AU_MNTRN*a_weight.pp18_) as AU_MNTRN
, SUM(at1.AU_MNTRG*a_weight.pp18_) as AU_MNTRG
, SUM(at1.AU_MNTRD*a_weight.pp18_) as AU_MNTRD
, SUM(at1.AU_MNTRS*a_weight.pp18_) as AU_MNTRS
, SUM(at1.AU_MNTRL*a_weight.pp18_) as AU_MNTRL
, SUM(at1.AU_MNTRF*a_weight.pp18_) as AU_MNTRF
, SUM(at1.AU_MNTRU*a_weight.pp18_) as AU_MNTRU
, SUM(at1.AU_MNRPN*a_weight.pp18_) as AU_MNRPN
, SUM(at1.AU_MNRPG*a_weight.pp18_) as AU_MNRPG
, SUM(at1.AU_MNRPD*a_weight.pp18_) as AU_MNRPD
, SUM(at1.AU_MNRPS*a_weight.pp18_) as AU_MNRPS
, SUM(at1.AU_MNRPL*a_weight.pp18_) as AU_MNRPL
, SUM(at1.AU_MNRPF*a_weight.pp18_) as AU_MNRPF
, SUM(at1.AU_MNRPU*a_weight.pp18_) as AU_MNRPU
, SUM(at1.AU_MNTPN*a_weight.pp18_) as AU_MNTPN
, SUM(at1.AU_MNTPG*a_weight.pp18_) as AU_MNTPG
, SUM(at1.AU_MNTPD*a_weight.pp18_) as AU_MNTPD
, SUM(at1.AU_MNTPS*a_weight.pp18_) as AU_MNTPS
, SUM(at1.AU_MNTPL*a_weight.pp18_) as AU_MNTPL
, SUM(at1.AU_MNTPF*a_weight.pp18_) as AU_MNTPF
, SUM(at1.AU_MNTPU*a_weight.pp18_) as AU_MNTPU
, SUM(at1.AU_VSGR*a_weight.pp18_) as AU_VSGR
, SUM(at1.AU_VSAG*a_weight.pp18_) as AU_VSAG
, SUM(at1.AU_VSST*a_weight.pp18_) as AU_VSST
, SUM(at1.AU_VSCT*a_weight.pp18_) as AU_VSCT
, SUM(at1.AU_VSCC*a_weight.pp18_) as AU_VSCC
, SUM(at1.AU_VSGM*a_weight.pp18_) as AU_VSGM
, SUM(at1.AU_VSGY*a_weight.pp18_) as AU_VSGY
, SUM(at1.AU_VSMC*a_weight.pp18_) as AU_VSMC
, SUM(at1.AU_VSMD*a_weight.pp18_) as AU_VSMD
, SUM(at1.AU_VSTR*a_weight.pp18_) as AU_VSTR
, SUM(at1.AU_VSLB*a_weight.pp18_) as AU_VSLB
, SUM(at1.AU_VSNP*a_weight.pp18_) as AU_VSNP
, SUM(at1.AU_VSOKT*a_weight.pp18_) as AU_VSOKT
, SUM(at1.AU_VSPS*a_weight.pp18_) as AU_VSPS
, SUM(at1.AU_VSSG*a_weight.pp18_) as AU_VSSG
, SUM(at1.AU_VSSS*a_weight.pp18_) as AU_VSSS
, SUM(at1.AU_VSWM*a_weight.pp18_) as AU_VSWM
, SUM(at1.AU_VSDL*a_weight.pp18_) as AU_VSDL
, SUM(at1.AU_VSCTCW*a_weight.pp18_) as AU_VSCTCW
, SUM(at1.AU_VSOT*a_weight.pp18_) as AU_VSOT
, SUM(at1.AU_GASCT*a_weight.pp18_) as AU_GASCT
, SUM(at1.AU_GASCR*a_weight.pp18_) as AU_GASCR
, SUM(at1.AU_GASES*a_weight.pp18_) as AU_GASES
, SUM(at1.AU_GASPT*a_weight.pp18_) as AU_GASPT
, SUM(at1.AU_GASSL*a_weight.pp18_) as AU_GASSL
, SUM(at1.AU_GASOT*a_weight.pp18_) as AU_GASOT
, SUM(at1.AU_BUYERN*a_weight.pp18_) as AU_BUYERN
, SUM(at1.AU_PUN*a_weight.pp18_) as AU_PUN
, SUM(at1.AU_PUPN*a_weight.pp18_) as AU_PUPN
, SUM(at1.AU_PUPU*a_weight.pp18_) as AU_PUPU
, SUM(at1.AU_PULN*a_weight.pp18_) as AU_PULN
, SUM(at1.AU_PULU*a_weight.pp18_) as AU_PULU



FROM a_bbm_at at1, amfd_pclist pclist, a16_weight a_weight WHERE at1.POSTCODE = pclist.PostCode AND a_weight.postcode = pclist.PostCode AND pclist.store_uid = $store_uid";
	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {

$hh_tot = $row['hh_tot'];
$pp18_ = $row['pp18_'];

$AU_N0 = $row['AU_N0'];
$AU_N1 = $row['AU_N1'];
$AU_N2 = $row['AU_N2'];
$AU_N3 = $row['AU_N3'];
$AU_N4_ = $row['AU_N4_'];
$AU_KM0 = $row['AU_KM0'];
$AU_KM1_9 = $row['AU_KM1_9'];
$AU_KM10_19 = $row['AU_KM10_19'];
$AU_KM20_29 = $row['AU_KM20_29'];
$AU_KM30_ = $row['AU_KM30_'];
$AU_MKBUI = $row['AU_MKBUI'];
$AU_MKCAD = $row['AU_MKCAD'];
$AU_MKCHE = $row['AU_MKCHE'];
$AU_MKCHR = $row['AU_MKCHR'];
$AU_MKDOD = $row['AU_MKDOD'];
$AU_MKFOR = $row['AU_MKFOR'];
$AU_MKGMC = $row['AU_MKGMC'];
$AU_MKJEE = $row['AU_MKJEE'];
$AU_MKLIN = $row['AU_MKLIN'];
$AU_MKMER = $row['AU_MKMER'];
$AU_MKOLD = $row['AU_MKOLD'];
$AU_MKPLY = $row['AU_MKPLY'];
$AU_MKPON = $row['AU_MKPON'];
$AU_MKSAT = $row['AU_MKSAT'];
$AU_MKDOM = $row['AU_MKDOM'];
$AU_MKACU = $row['AU_MKACU'];
$AU_MKAU_D = $row['AU_MKAU_D'];
$AU_MKBMW = $row['AU_MKBMW'];
$AU_MKHON = $row['AU_MKHON'];
$AU_MKHYU = $row['AU_MKHYU'];
$AU_MKINF = $row['AU_MKINF'];
$AU_MKKIA = $row['AU_MKKIA'];
$AU_MKLEX = $row['AU_MKLEX'];
$AU_MKMAZ = $row['AU_MKMAZ'];
$AU_MKBEN = $row['AU_MKBEN'];
$AU_MKMIT = $row['AU_MKMIT'];
$AU_MKNIS = $row['AU_MKNIS'];
$AU_MKSUB = $row['AU_MKSUB'];
$AU_MKSUZ = $row['AU_MKSUZ'];
$AU_MKTOY = $row['AU_MKTOY'];
$AU_MKVW = $row['AU_MKVW'];
$AU_MKVOL = $row['AU_MKVOL'];
$AU_MKFGN = $row['AU_MKFGN'];
$AU_TPMFS = $row['AU_TPMFS'];
$AU_TPSCOMP = $row['AU_TPSCOMP'];
$AU_TPSPO = $row['AU_TPSPO'];
$AU_TPMVSW = $row['AU_TPMVSW'];
$AU_TPSUV = $row['AU_TPSUV'];
$AU_TPPIC = $row['AU_TPPIC'];
$AU_TPFVAN = $row['AU_TPFVAN'];
$AU_TPOTH = $row['AU_TPOTH'];
$AU_YR13_ = $row['AU_YR13_'];
$AU_YR12 = $row['AU_YR12'];
$AU_YR11 = $row['AU_YR11'];
$AU_YR10 = $row['AU_YR10'];
$AU_YR09 = $row['AU_YR09'];
$AU_YR08 = $row['AU_YR08'];
$AU_YR07 = $row['AU_YR07'];
$AU_YR06 = $row['AU_YR06'];
$AU_YR05 = $row['AU_YR05'];
$AU_YR04 = $row['AU_YR04'];
$AU_YR03 = $row['AU_YR03'];
$AU_YR_02 = $row['AU_YR_02'];
$AU_YRNO = $row['AU_YRNO'];
$AU_NEWBN = $row['AU_NEWBN'];
$AU_NEWBU = $row['AU_NEWBU'];
$AU_NEWLN = $row['AU_NEWLN'];
$AU_NEWLU = $row['AU_NEWLU'];
$AU_NEWNO = $row['AU_NEWNO'];
$AU_V_9 = $row['AU_V_9'];
$AU_V10_14 = $row['AU_V10_14'];
$AU_V15_19 = $row['AU_V15_19'];
$AU_V20_24 = $row['AU_V20_24'];
$AU_V25_29 = $row['AU_V25_29'];
$AU_V30_39 = $row['AU_V30_39'];
$AU_V40_ = $row['AU_V40_'];
$AU_PPUP = $row['AU_PPUP'];
$AU_PPULP = $row['AU_PPULP'];
$AU_PPULN = $row['AU_PPULN'];
$AU_PPUN = $row['AU_PPUN'];
$AU_PV_9 = $row['AU_PV_9'];
$AU_PV10_14 = $row['AU_PV10_14'];
$AU_PV15_19 = $row['AU_PV15_19'];
$AU_PV20_24 = $row['AU_PV20_24'];
$AU_PV25_29 = $row['AU_PV25_29'];
$AU_PV30_39 = $row['AU_PV30_39'];
$AU_PV40_ = $row['AU_PV40_'];
$AU_PTPSED = $row['AU_PTPSED'];
$AU_PTPSCOM = $row['AU_PTPSCOM'];
$AU_PTPSPO = $row['AU_PTPSPO'];
$AU_PTPMVSW = $row['AU_PTPMVSW'];
$AU_PTPSUV = $row['AU_PTPSUV'];
$AU_PTPPIC = $row['AU_PTPPIC'];
$AU_PTPFVAN = $row['AU_PTPFVAN'];
$AU_PTPOTH = $row['AU_PTPOTH'];
$AU_MNBDN = $row['AU_MNBDN'];
$AU_MNBDG = $row['AU_MNBDG'];
$AU_MNBDD = $row['AU_MNBDD'];
$AU_MNBDS = $row['AU_MNBDS'];
$AU_MNBDL = $row['AU_MNBDL'];
$AU_MNBDF = $row['AU_MNBDF'];
$AU_MNBDU = $row['AU_MNBDU'];
$AU_MNOCN = $row['AU_MNOCN'];
$AU_MNOCG = $row['AU_MNOCG'];
$AU_MNOCD = $row['AU_MNOCD'];
$AU_MNOCS = $row['AU_MNOCS'];
$AU_MNOCL = $row['AU_MNOCL'];
$AU_MNOCF = $row['AU_MNOCF'];
$AU_MNOCU = $row['AU_MNOCU'];
$AU_MNBKN = $row['AU_MNBKN'];
$AU_MNBKG = $row['AU_MNBKG'];
$AU_MNBKD = $row['AU_MNBKD'];
$AU_MNBKS = $row['AU_MNBKS'];
$AU_MNBKL = $row['AU_MNBKL'];
$AU_MNBKF = $row['AU_MNBKF'];
$AU_MNBKU = $row['AU_MNBKU'];
$AU_MNTRN = $row['AU_MNTRN'];
$AU_MNTRG = $row['AU_MNTRG'];
$AU_MNTRD = $row['AU_MNTRD'];
$AU_MNTRS = $row['AU_MNTRS'];
$AU_MNTRL = $row['AU_MNTRL'];
$AU_MNTRF = $row['AU_MNTRF'];
$AU_MNTRU = $row['AU_MNTRU'];
$AU_MNRPN = $row['AU_MNRPN'];
$AU_MNRPG = $row['AU_MNRPG'];
$AU_MNRPD = $row['AU_MNRPD'];
$AU_MNRPS = $row['AU_MNRPS'];
$AU_MNRPL = $row['AU_MNRPL'];
$AU_MNRPF = $row['AU_MNRPF'];
$AU_MNRPU = $row['AU_MNRPU'];
$AU_MNTPN = $row['AU_MNTPN'];
$AU_MNTPG = $row['AU_MNTPG'];
$AU_MNTPD = $row['AU_MNTPD'];
$AU_MNTPS = $row['AU_MNTPS'];
$AU_MNTPL = $row['AU_MNTPL'];
$AU_MNTPF = $row['AU_MNTPF'];
$AU_MNTPU = $row['AU_MNTPU'];
$AU_VSGR = $row['AU_VSGR'];
$AU_VSAG = $row['AU_VSAG'];
$AU_VSST = $row['AU_VSST'];
$AU_VSCT = $row['AU_VSCT'];
$AU_VSCC = $row['AU_VSCC'];
$AU_VSGM = $row['AU_VSGM'];
$AU_VSGY = $row['AU_VSGY'];
$AU_VSMC = $row['AU_VSMC'];
$AU_VSMD = $row['AU_VSMD'];
$AU_VSTR = $row['AU_VSTR'];
$AU_VSLB = $row['AU_VSLB'];
$AU_VSNP = $row['AU_VSNP'];
$AU_VSOKT = $row['AU_VSOKT'];
$AU_VSPS = $row['AU_VSPS'];
$AU_VSSG = $row['AU_VSSG'];
$AU_VSSS = $row['AU_VSSS'];
$AU_VSWM = $row['AU_VSWM'];
$AU_VSDL = $row['AU_VSDL'];
$AU_VSCTCW = $row['AU_VSCTCW'];
$AU_VSOT = $row['AU_VSOT'];
$AU_GASCT = $row['AU_GASCT'];
$AU_GASCR = $row['AU_GASCR'];
$AU_GASES = $row['AU_GASES'];
$AU_GASPT = $row['AU_GASPT'];
$AU_GASSL = $row['AU_GASSL'];
$AU_GASOT = $row['AU_GASOT'];
$AU_BUYERN = $row['AU_BUYERN'];
$AU_PUN = $row['AU_PUN'];
$AU_PUPN = $row['AU_PUPN'];
$AU_PUPU = $row['AU_PUPU'];
$AU_PULN = $row['AU_PULN'];
$AU_PULU = $row['AU_PULU'];
	}}

// end get values and empty table

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

// canada averages in percent ---------------------------- multipy by age 18+ (or hh) for actual numbers

$cAU_N0 =1.8482;
$cAU_N1 =30.7984;
$cAU_N2 =37.7422;
$cAU_N3 =9.8446;
$cAU_N4_ =4.6361;
$cAU_KM0 =15.0765;
$cAU_KM1_9 =34.1122;
$cAU_KM10_19 =28.6116;
$cAU_KM20_29 =15.0065;
$cAU_KM30_ =7.1931;
$cAU_MKBUI =1.5231;
$cAU_MKCAD =0.4086;
$cAU_MKCHE =8.0895;
$cAU_MKCHR =2.5971;
$cAU_MKDOD =5.6703;
$cAU_MKFOR =9.5245;
$cAU_MKGMC =2.8177;
$cAU_MKJEE =1.3755;
$cAU_MKLIN =0.2934;
$cAU_MKMER =0.1533;
$cAU_MKOLD =0.5114;
$cAU_MKPLY =0.2107;
$cAU_MKPON =3.4577;
$cAU_MKSAT =0.9251;
$cAU_MKDOM =0.3475;
$cAU_MKACU =0.953;
$cAU_MKAU_D =0.3976;
$cAU_MKBMW =0.6776;
$cAU_MKHON =8.3319;
$cAU_MKHYU =5.2492;
$cAU_MKINF =0.2979;
$cAU_MKKIA =2.3858;
$cAU_MKLEX =0.5878;
$cAU_MKMAZ =4.7606;
$cAU_MKBEN =0.7406;
$cAU_MKMIT =0.8168;
$cAU_MKNIS =3.8961;
$cAU_MKSUB =1.778;
$cAU_MKSUZ =0.6647;
$cAU_MKTOY =11.6952;
$cAU_MKVW =2.6504;
$cAU_MKVOL =0.7114;
$cAU_MKFGN =0.3899;
$cAU_TPMFS =29.6555;
$cAU_TPSCOMP =13.6098;
$cAU_TPSPO =3.1318;
$cAU_TPMVSW =10.0561;
$cAU_TPSUV =15.9132;
$cAU_TPPIC =7.289;
$cAU_TPFVAN =1.5714;
$cAU_TPOTH =3.7392;
$cAU_YR13_ =2.6028;
$cAU_YR12 =6.7184;
$cAU_YR11 =6.7271;
$cAU_YR10 =8.2383;
$cAU_YR09 =7.0464;
$cAU_YR08 =6.9107;
$cAU_YR07 =6.4574;
$cAU_YR06 =6.1886;
$cAU_YR05 =5.7288;
$cAU_YR04 =4.7539;
$cAU_YR03 =5.3685;
$cAU_YR_02 =17.0945;
$cAU_YRNO =1.1828;
$cAU_NEWBN =41.8168;
$cAU_NEWBU =37.9019;
$cAU_NEWLN =4.1207;
$cAU_NEWLU =0.5041;
$cAU_NEWNO =0.634;
$cAU_BUYERN =8.2006;
$cAU_BUYERM =32.3648;
$cAU_BUYERP =44.4708;
$cAU_PUN =55.1238;
$cAU_PUPN =13.6535;
$cAU_PUPU =13.386;
$cAU_PULN =2.5517;
$cAU_PULU =0.2757;
$cAU_V_9 =5.6832;
$cAU_V10_14 =3.2016;
$cAU_V15_19 =3.9509;
$cAU_V20_24 =5.0495;
$cAU_V25_29 =4.0666;
$cAU_V30_39 =4.9136;
$cAU_V40_ =3.1811;
$cAU_LSEDP =2.1237;
$cAU_LSEDR =4.0825;
$cAU_PPUP =5.5331;
$cAU_PPULP =9.488;
$cAU_PPULN =20.4424;
$cAU_PPUN =49.5277;
$cAU_PV_9 =2.4707;
$cAU_PV10_14 =2.4993;
$cAU_PV15_19 =2.3424;
$cAU_PV20_24 =2.4726;
$cAU_PV25_29 =1.917;
$cAU_PV30_39 =1.9182;
$cAU_PV40_ =1.1682;
$cAU_PTPSED =4.0592;
$cAU_PTPSCOM =2.9665;
$cAU_PTPSPO =0.7591;
$cAU_PTPMVSW =1.2769;
$cAU_PTPSUV =3.8984;
$cAU_PTPPIC =1.1527;
$cAU_PTPFVAN =0.262;
$cAU_PTPOTH =0.5306;
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
$cAU_MNBDN =58.1128;
$cAU_MNBDG =0.914;
$cAU_MNBDD =6.1792;
$cAU_MNBDS =15.4442;
$cAU_MNBDL =1.268;
$cAU_MNBDF =1.5942;
$cAU_MNBDU =1.4366;
$cAU_MNOCN =3.4541;
$cAU_MNOCG =14.9648;
$cAU_MNOCD =32.0828;
$cAU_MNOCS =20.776;
$cAU_MNOCL =6.2125;
$cAU_MNOCF =6.1461;
$cAU_MNOCU =1.2545;
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
$cAU_MNBKN =32.3447;
$cAU_MNBKG =10.212;
$cAU_MNBKD =15.241;
$cAU_MNBKS =13.1128;
$cAU_MNBKL =5.2648;
$cAU_MNBKF =7.1625;
$cAU_MNBKU =1.5587;
$cAU_MNWDN =64.2941;
$cAU_MNWDG =1.5212;
$cAU_MNWDD =2.3468;
$cAU_MNWDS =13.2933;
$cAU_MNWDL =0.9846;
$cAU_MNWDF =0.9817;
$cAU_MNWDU =1.5921;
$cAU_MNTRN =21.8465;
$cAU_MNTRG =12.9095;
$cAU_MNTRD =11.3777;
$cAU_MNTRS =26.3282;
$cAU_MNTRL =5.1085;
$cAU_MNTRF =5.7042;
$cAU_MNTRU =1.6106;
$cAU_MNMFN =61.5965;
$cAU_MNMFG =4.635;
$cAU_MNMFD =4.5711;
$cAU_MNMFS =8.1981;
$cAU_MNMFL =1.8166;
$cAU_MNMFF =2.2117;
$cAU_MNMFU =1.8676;
$cAU_MNRPN =55.6061;
$cAU_MNRPG =2.2993;
$cAU_MNRPD =9.8906;
$cAU_MNRPS =12.2723;
$cAU_MNRPL =1.1883;
$cAU_MNRPF =1.685;
$cAU_MNRPU =2.0817;
$cAU_MNTPN =26.6911;
$cAU_MNTPG =10.7802;
$cAU_MNTPD =25.5013;
$cAU_MNTPS =12.9456;
$cAU_MNTPL =3.1618;
$cAU_MNTPF =4.1537;
$cAU_MNTPU =1.6302;
$cAU_MNOTN =44.7381;
$cAU_MNOTG =7.4943;
$cAU_MNOTD =14.1358;
$cAU_MNOTS =12.0981;
$cAU_MNOTL =1.8286;
$cAU_MNOTF =2.5993;
$cAU_MNOTU =2.0755;
$cAU_VSGR =1.364;
$cAU_VSAG =1.163;
$cAU_VSST =1.2468;
$cAU_VSCT =19.9286;
$cAU_VSCC =5.0189;
$cAU_VSGM =3.6961;
$cAU_VSGY =1.1808;
$cAU_VSMC =0.1849;
$cAU_VSMD =1.9454;
$cAU_VSTR =0.3884;
$cAU_VSLB =6.5118;
$cAU_VSNP =5.8576;
$cAU_VSOKT =1.9214;
$cAU_VSPS =2.2222;
$cAU_VSSG =1.9296;
$cAU_VSSS =0.8752;
$cAU_VSWM =5.7065;
$cAU_VSDL =13.5307;
$cAU_VSCTCW =1.3649;
$cAU_VSOT =24.6937;
$cAU_GASCT =11.0835;
$cAU_GASCR =5.7567;
$cAU_GASES =24.0862;
$cAU_GASPT =25.686;
$cAU_GASSL =23.1837;
$cAU_GASOT =48.8765;
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
$at_service['name'][] = "Wal-Mart<br>&nbsp;";
$at_service['name'][] = "Car dealership<br>&nbsp;";

// sort service 
arsort($at_service['p']);
foreach ($at_service['p'] as $key => $val) {
	$at_service['sort_name'][] = $at_service['name'][$key];
	$at_service['sort_p'][] = number_format($at_service['p'][$key],1);
	$at_service['sort_i'][] = number_format($at_service['i'][$key],0);
}


?>