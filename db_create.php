<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPDATE DATABASE</title>
</head>

<body>

Create DB Table


<?php 
// ------------------------------------------------ db_connect
	$myServer = "localhost";
	$myUser = "wisegeo123";
	$myPass = "Jennt4helpWISE";
	$myDB = "wisegeo"; 

//connection to database
$link = mysqli_connect($myServer, $myUser, $myPass, $myDB);


// ------------------------------------------------ create
//table field names
mysqli_query($link,"CREATE TABLE c_spend( 
POSTCODE text,
SP_GRHNO decimal(5,3),
SP_GRH49 decimal(5,3),
SP_GRH74 decimal(5,3),
SP_GRH99 decimal(5,3),
SP_GRH149 decimal(5,3),
SP_GRH199 decimal(5,3),
SP_GRH200 decimal(5,3),
SP_GRNO decimal(5,3),
SP_GR49 decimal(5,3),
SP_GR74 decimal(5,3),
SP_GR99 decimal(5,3),
SP_GR149 decimal(5,3),
SP_GR199 decimal(5,3),
SP_GR200 decimal(5,3),
SP_BBNO decimal(5,3),
SP_BB249 decimal(5,3),
SP_BB499 decimal(5,3),
SP_BB500 decimal(5,3),
SP_BONO decimal(5,3),
SP_BO249 decimal(5,3),
SP_BO499 decimal(5,3),
SP_BO500 decimal(5,3),
SP_CCNO decimal(5,3),
SP_CC249 decimal(5,3),
SP_CC499 decimal(5,3),
SP_CC500 decimal(5,3),
SP_CBNO decimal(5,3),
SP_CB249 decimal(5,3),
SP_CB499 decimal(5,3),
SP_CB500 decimal(5,3),
SP_FLNO decimal(5,3),
SP_FL249 decimal(5,3),
SP_FL499 decimal(5,3),
SP_FL500 decimal(5,3),
SP_FNTNO decimal(5,3),
SP_FNT249 decimal(5,3),
SP_FNT499 decimal(5,3),
SP_FNT500 decimal(5,3),
SP_GSNO decimal(5,3),
SP_GS249 decimal(5,3),
SP_GS499 decimal(5,3),
SP_GS500 decimal(5,3),
SP_HSNO decimal(5,3),
SP_HS249 decimal(5,3),
SP_HS499 decimal(5,3),
SP_HS500 decimal(5,3),
SP_HDNO decimal(5,3),
SP_HD249 decimal(5,3),
SP_HD499 decimal(5,3),
SP_HD500 decimal(5,3),
SP_JWNO decimal(5,3),
SP_JW249 decimal(5,3),
SP_JW499 decimal(5,3),
SP_JW500 decimal(5,3),
SP_LLNO decimal(5,3),
SP_LL249 decimal(5,3),
SP_LL499 decimal(5,3),
SP_LL500 decimal(5,3),
SP_MCNO decimal(5,3),
SP_MC249 decimal(5,3),
SP_MC499 decimal(5,3),
SP_MC500 decimal(5,3),
SP_MSNO decimal(5,3),
SP_MS249 decimal(5,3),
SP_MS499 decimal(5,3),
SP_MS500 decimal(5,3),
SP_MDNO decimal(5,3),
SP_MD249 decimal(5,3),
SP_MD499 decimal(5,3),
SP_MD500 decimal(5,3),
SP_OSNO decimal(5,3),
SP_OS249 decimal(5,3),
SP_OS499 decimal(5,3),
SP_OS500 decimal(5,3),
SP_PSNO decimal(5,3),
SP_PS249 decimal(5,3),
SP_PS499 decimal(5,3),
SP_PS500 decimal(5,3),
SP_PTNO decimal(5,3),
SP_PT249 decimal(5,3),
SP_PT499 decimal(5,3),
SP_PT500 decimal(5,3),
SP_PDPNO decimal(5,3),
SP_PDP249 decimal(5,3),
SP_PDP499 decimal(5,3),
SP_PDP500 decimal(5,3),
SP_PGNO decimal(5,3),
SP_PG249 decimal(5,3),
SP_PG499 decimal(5,3),
SP_PG500 decimal(5,3),
SP_SCNO decimal(5,3),
SP_SC249 decimal(5,3),
SP_SC499 decimal(5,3),
SP_SC500 decimal(5,3),
SP_APNO decimal(5,3),
SP_AP249 decimal(5,3),
SP_AP499 decimal(5,3),
SP_AP500 decimal(5,3),
SP_SGNO decimal(5,3),
SP_SG249 decimal(5,3),
SP_SG499 decimal(5,3),
SP_SG500 decimal(5,3),
SP_TONO decimal(5,3),
SP_TO249 decimal(5,3),
SP_TO499 decimal(5,3),
SP_TO500 decimal(5,3),
SP_WCNO decimal(5,3),
SP_WC249 decimal(5,3),
SP_WC499 decimal(5,3),
SP_WC500 decimal(5,3),
SP_WSNO decimal(5,3),
SP_WS249 decimal(5,3),
SP_WS499 decimal(5,3),
SP_WS500 decimal(5,3)

)");



?> 

</body>
</html>
