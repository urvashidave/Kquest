<?php 
$all_agehomes['homes'] = $demo['agehomes'][0] + $demo['agehomes'][1] + $demo['agehomes'][2] + $demo['agehomes'][3] + $demo['agehomes'][4] + $demo['agehomes'][5];

$all_agehomes['apts'] = $demo['agehomes'][8] + $demo['agehomes'][9] + $demo['agehomes'][10] + $demo['agehomes'][11] + $demo['agehomes'][12] + $demo['agehomes'][13];

$all_agehomes['dwellings'] = $all_agehomes['homes'] + $all_agehomes['apts'];
if($all_agehomes['dwellings'] >0) {
	for ($i=0; $i < 7; $i++) {
		$agehomes['percent'][$i] = $demo['agehomes'][$i] / $all_agehomes['dwellings'] *100;
	}
	$all_agehomes['homesp'] = $all_agehomes['homes'] / $all_agehomes['dwellings'] *100;
	$all_agehomes['aptsp'] = $all_agehomes['apts'] / $all_agehomes['dwellings'] *100;
}
else {
	for ($i=0; $i < 7; $i++) {
		$agehomes['percent'][$i] = 0;
}
$all_agehomes['homesp'] = 0;
$all_agehomes['aptsp'] = 0;
}	
?>

 <link rel='STYLESHEET' type='text/css' href='master_style.css'>

 <style>

 .table_trans {

 background: rgba(255, 255, 255, 0.8);

 }

 

 .stitle {

    font-family: Arial Narrow, Arial, Helvetica, sans-serif;

    font-size: 34px;

    font-weight: bold;

    color: #900C3F;

}

 .style1 {color: #000000}

 .style3 {font-size: 16px}

 .style4 {font-weight: normal; font-size: 14px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}

 .style12 {font-weight: normal; font-size: 12px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}

 .style10 {font-weight: normal; font-size: 10px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}

 .style5 {font-size: 14px}

 .style24 {font-weight: bold; font-size: 24px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}

 .stitle1 {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;

    font-size: 34px;

    font-weight: bold;

    color: #900C3F;
}
 </style>

 <?php 

 ?>

 <div class="pagebreak"></div>

 <div class=" print_pages" align="center" style="height: 644px">

 <table width="96%" height="600" border="0" cellspacing="1" cellpadding="0">

 <tr>

 <td height="79" colspan="4" ><table width="100%" border="0" cellspacing="1" cellpadding="1">

 <tr>

 <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Top HI/ DIY Retailers</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="25%" height="283" valign="top" ><table width="100%" class="Example_E1">

 <tr>

 <td colspan="3" align="center" valign="middle"> <img src="<?php echo $stop_retail['pic'][0]; ?>" width="150" height="150" /></td>

 </tr>

 <tr>

 <td width="30" class="sgrey50"><strong>1</strong></td>

 <td class="style4"><?php echo $stop_retail['name'][0]; ?><br />

 Shoppers: <?php echo number_format($stop_retail['percent'][0]); ?>%<br />

 Index: <?php echo number_format($stop_retail['index'][0]); ?></td>

 <td width="55" align="right" valign="middle"><?php echo $stop_retail['arrow'][0]; ?></td>

 </tr>

 </table></td>

 <td width="25%" valign="top" ><table width="100%" class="Example_E1">

 <tr>

 <td colspan="3" align="center" valign="middle"><img src="<?php echo $stop_retail['pic'][1]; ?>" alt=" " width="150" height="150" /></td>

 </tr>

 <tr>

 <td width="30" class="sgrey50"><strong>2</strong></td>

 <td class="style4"><?php echo $stop_retail['name'][1]; ?><br />

 Shoppers: <?php echo number_format($stop_retail['percent'][1]); ?>%<br />

 Index: <?php echo number_format($stop_retail['index'][1]); ?></td>

 <td width="55" align="right" valign="middle"><?php echo $stop_retail['arrow'][1]; ?></td>

 </tr>

 </table></td>

 <td width="25%" valign="top" ><table width="100%" class="Example_E1">

 <tr>

 <td colspan="3" align="center" valign="middle"><img src="<?php echo $stop_retail['pic'][2]; ?>" alt=" " width="150" height="150" /></td>

 </tr>

 <tr>

 <td width="30" class="sgrey50"><strong>3</strong></td>

 <td class="style4"><?php echo $stop_retail['name'][2]; ?><br />

 Shoppers: <?php echo number_format($stop_retail['percent'][2]); ?>%<br />

 Index: <?php echo number_format($stop_retail['index'][2]); ?></td>

 <td width="55" align="right" valign="middle"><?php echo $stop_retail['arrow'][2]; ?></td>

 </tr>

 </table></td>

 <td width="25%" valign="top" ><table width="100%" class="Example_E1">

 <tr>

 <td colspan="3" align="center" valign="middle"><img src="<?php echo $stop_retail['pic'][3]; ?>" alt=" " width="150" height="150" /></td>

 </tr>

 <tr>

 <td width="30" class="sgrey50"><strong>4</strong></td>

 <td class="style4"><?php echo $stop_retail['name'][3]; ?><br />

 Shoppers: <?php echo number_format($stop_retail['percent'][3]); ?>%<br />

 Index: <?php echo number_format($stop_retail['index'][3]); ?></td>

 <td width="55" align="right" valign="middle"><?php echo $stop_retail['arrow'][3]; ?></td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td height="250" valign="top" ><table width="100%" class="Example_E1">

 <tr>

 <td colspan="3" align="center" valign="middle"><img src="<?php echo $stop_retail['pic'][4]; ?>" alt=" " width="150" height="150" /></td>

 </tr>

 <tr>

 <td width="30" class="sgrey50"><strong>5</strong></td>

 <td class="style4"><?php echo $stop_retail['name'][4]; ?><br />

 Shoppers: <?php echo number_format($stop_retail['percent'][4]); ?>%<br />

 Index: <?php echo number_format($stop_retail['index'][4]); ?></td>

 <td width="55" align="right" valign="middle"><?php echo $stop_retail['arrow'][4]; ?></td>

 </tr>

 </table></td>

 <td valign="top" ><table width="100%" class="Example_E1">

 <tr>

 <td colspan="3" align="center" valign="middle"><img src="<?php echo $stop_retail['pic'][5]; ?>" alt=" " width="150" height="150" /></td>

 </tr>

 <tr>

 <td width="30" class="sgrey50"><strong>6</strong></td>

 <td class="style4"><?php echo $stop_retail['name'][5]; ?><br />

 Shoppers: <?php echo number_format($stop_retail['percent'][5]); ?>%<br />

 Index: <?php echo number_format($stop_retail['index'][5]); ?></td>

 <td width="55" align="right" valign="middle"><?php echo $stop_retail['arrow'][5]; ?></td>

 </tr>

 </table></td>

 <td valign="top" ><table width="100%" class="Example_E1">

 <tr>

 <td colspan="3" align="center" valign="middle"><img src="<?php echo $stop_retail['pic'][6]; ?>" alt=" " width="150" height="150" /></td>

 </tr>

 <tr>

 <td width="30" class="sgrey50"><strong>7</strong></td>

 <td class="style4"><?php echo $stop_retail['name'][6]; ?><br />

 Shoppers: <?php echo number_format($stop_retail['percent'][6]); ?>%<br />

 Index: <?php echo number_format($stop_retail['index'][6]); ?></td>

 <td width="55" align="right" valign="middle"><?php echo $stop_retail['arrow'][6]; ?></td>

 </tr>

 </table></td>

 <td valign="top" ><table width="100%" class="Example_E1">

 <tr>

 <td colspan="3" align="center" valign="middle"><img src="<?php echo $stop_retail['pic'][7]; ?>" alt=" " width="150" height="150" /></td>

 </tr>

 <tr>

 <td width="30" class="sgrey50"><strong>8</strong></td>

 <td class="style4"><?php echo $stop_retail['name'][7]; ?><br />

 Shoppers: <?php echo number_format($stop_retail['percent'][7]); ?>%<br />

 Index: <?php echo number_format($stop_retail['index'][7]); ?></td>

 <td width="55" align="right" valign="middle"><?php echo $stop_retail['arrow'][7]; ?></td>

 </tr>

 </table></td>

 </tr>

 </table>

 </div>



 <div class="pagebreak"> </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table width="96%" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="79" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Projects</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="50%" align="center" valign="top" ><span class="style24">Spend on Major Projects</span>

 <table width="450px" border="0" cellspacing="0" cellpadding="2">

 <tr class="style4">

 <td width="50" height="330" align="center" valign="bottom"><?php echo number_format($pDW_SP0); ?>%<br />         <img src="green5.png" width="100%" height="<?php echo round($prenospend_0_chart);?>" alt="households" /></td>

 <td width="50" align="center" valign="bottom"><?php echo number_format($cDW_SP0); ?>%<br />

 <img src="red.png" alt="canada" width="100%" height="<?php echo round($crenospend_0_chart);?>" /></td>

 <td width="15" align="center" valign="bottom">&nbsp;</td>

 <td width="50" align="center" valign="bottom"><?php echo number_format($prenospend_low); ?>%<br />

 <img src="green5.png" width="100%" height="<?php echo round($prenospend_low_chart);?>" alt="households" /></td>

 <td width="50" align="center" valign="bottom"><?php echo number_format($crenospend_low); ?>%<br />         <img src="red.png" alt="canada" width="100%" height="<?php echo round($crenospend_low_chart);?>" /></td>

 <td width="15" align="center" valign="bottom">&nbsp;</td>

 <td width="50" align="center" valign="bottom"><?php echo number_format($prenospend_mid); ?>%<br />

 <img src="green5.png" width="100%" height="<?php echo round($prenospend_mid_chart);?>" alt="households" /></td>

 <td width="50" align="center" valign="bottom"><?php echo number_format($crenospend_mid); ?>%<br />

 <img src="red.png" alt="canada" width="100%" height="<?php echo round($crenospend_mid_chart);?>" /></td>

 <td width="15" align="center" valign="bottom">&nbsp;</td>

 <td width="50" align="center" valign="bottom"><?php echo number_format($prenospend_high); ?>%<br />

 <img src="green5.png" width="100%" height="<?php echo round($prenospend_high_chart); ?>" alt="households" /></td>

 <td width="50" align="center" valign="bottom"><?php echo number_format($crenospend_high); ?>%<br />

 <img src="red.png" alt="canada" width="100%" height="<?php echo round($crenospend_high_chart); ?>" /></td>

 <td width="10" align="center" valign="bottom">&nbsp;</td>

 </tr>

 <tr>

 <td colspan="2" align="center"><strong><span class="style5">Nothing</span></strong></td>

 <td align="center">&nbsp;</td>

 <td colspan="2" align="center"><strong><span class="style5">Low</span></strong></td>

 <td align="center">&nbsp;</td>

 <td colspan="2" align="center"><strong><span class="style5">Mid</span></strong></td>

 <td width="15" align="center">&nbsp;</td>

 <td colspan="2" align="center"><strong><span class="style5">High</span></strong></td>

 <td align="center">&nbsp;</td>

 </tr>

 <tr>

 <td colspan="2" align="center"><strong><span class="style5">$0</span></strong></td>

 <td align="center">&nbsp;</td>

 <td colspan="2" align="center"><strong><span class="style5">Up to $2.5k</span></strong></td>

 <td align="center">&nbsp;</td>

 <td colspan="2" align="center"><strong><span class="style5">$2.5k-$10k</span></strong></td>

 <td align="center">&nbsp;</td>

 <td colspan="2" align="center"><strong><span class="style5">$10k+</span></strong></td>

 <td align="center">&nbsp;</td>

 </tr>

 <tr>

 <td colspan="5">&nbsp;</td>

 <td>&nbsp;</td>

 <td colspan="2">&nbsp;</td>

 <td>&nbsp;</td>

 <td colspan="3">&nbsp;</td>

 </tr>

 <tr>

 <td colspan="12"><span class="style12"><img src="green5.png" width="20" height="20" alt="households" /> Target Area Households (past 2 years spent on renovations)</span></td>

 </tr>

 <tr>

 <td colspan="12"><span class="style12"><img src="red.png" width="20" height="20" alt="households" /> Benchmark Average</span></td>

 </tr>

 </table>

 </td>

 <td width="50%" align="center" valign="top" class="style12"><span class="style24">Top Major Projects</span>

 <table width="97%" class="Example_E1">

 <tr>

 <td width="30"><img src="nums/1.png" width="60" height="60" alt="rank" /></td>

 <td class="style4"><?php echo $smajor_reno['name'][0]; ?><br />

 Households: <?php echo number_format($smajor_reno['percent'][0]); ?>% (Index: <?php echo number_format($smajor_reno['index'][0]); ?>)</td>

 <td width="55" align="right" valign="middle"><?php echo $smajor_reno['arrow'][0]; ?></td>

 </tr>

 </table>

 <br />

 <table width="97%" class="Example_E1">

 <tr>

 <td width="30"><img src="nums/2.png" width="60" height="60" alt="rank" /></td>

 <td class="style4"><?php echo $smajor_reno['name'][1]; ?><br />

 Households: <?php echo number_format($smajor_reno['percent'][1]); ?>% (

 Index: <?php echo number_format($smajor_reno['index'][1]); ?>)</td>

 <td width="55" align="right" valign="middle"><?php echo $smajor_reno['arrow'][1]; ?></td>

 </tr>

 </table>

 <br />

 <table width="97%" class="Example_E1">

 <tr>

 <td width="30"><img src="nums/3.png" width="60" height="60" alt="rank" /></td>

 <td class="style4"><?php echo $smajor_reno['name'][2]; ?><br />

 Households: <?php echo number_format($smajor_reno['percent'][2]); ?>% (

 Index: <?php echo number_format($smajor_reno['index'][2]); ?>)</td>

 <td width="55" align="right" valign="middle"><?php echo $smajor_reno['arrow'][2]; ?></td>

 </tr>

 </table>

 <br />

 <table width="97%" class="Example_E1">

 <tr>

 <td width="30"><img src="nums/4.png" width="60" height="60" alt="rank" /></td>

 <td class="style4"><?php echo $smajor_reno['name'][3]; ?><br />

 Households: <?php echo number_format($smajor_reno['percent'][3]); ?>% (

 Index: <?php echo number_format($smajor_reno['index'][3]); ?>)</td>

 <td width="55" align="right" valign="middle"><?php echo $smajor_reno['arrow'][3]; ?></td>

 </tr>

 </table>

 <br />

 <table width="97%" class="Example_E1">

 <tr>

 <td width="30"><img src="nums/5.png" width="60" height="60" alt="rank" /></td>

 <td class="style4"><?php echo $smajor_reno['name'][4]; ?><br />

 Households: <?php echo number_format($smajor_reno['percent'][4]); ?>% (

 Index: <?php echo number_format($smajor_reno['index'][4]); ?>)</td>

 <td width="55" align="right" valign="middle"><?php echo $smajor_reno['arrow'][4]; ?></td>

 </tr>

 </table>

 <span class="style12"><br />

 Top 5 major renovation projects in the past 2 years ranked by percent of renovations Target Audience (arrow represents comparison compared tot he Benchmark average)</span></p>

 </td>

 </tr>

 </table>

 <div style="width:100%; text-align:center; margin: 10px 0; position: relative;">

 	<span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>

 <div class="pagebreak"> </div>

<div class=" print_pages" align="center" style="height: 635px">

 <table width="90%" height="80%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="79" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle"> Dwelling Age</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="50%" height="482" align="center" valign="top" class="style12"><br />
   <br />
   <br />
   <table width="300" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td width="44" class="style12"><strong>Built</strong></td>
       <td width="212" class="style12"><strong>Percent</strong></td>
     </tr>
     <tr>
       <td class="style12">1960 or before</td>
       <td class="style12"><img src="green5.png" width="<?php echo number_format($pDW_CON_60*3,0);?>" height="20" alt="age" /><?php echo number_format($pDW_CON_60,1);?>%</td>
     </tr>
     <tr>
       <td class="style12">1961 to 1980</td>
       <td class="style12"><img src="green5.png" width="<?php echo number_format($pDW_CON6180*3,0);?>" height="20" alt="age" /><?php echo number_format($pDW_CON6180,1);?>%</td>
     </tr>
     <tr>
       <td class="style12">1981 to 1990</td>
       <td class="style12"><img src="green5.png" width="<?php echo number_format($pDW_CON8190*3,0);?>" height="20" alt="age" /><?php echo number_format($pDW_CON8190,1);?>%</td>
     </tr>
     <tr>
       <td class="style12">1991 to 2000</td>
       <td class="style12"><img src="green5.png" width="<?php echo number_format($pDW_CON9100*3,0);?>" height="20" alt="age" /><?php echo number_format($pDW_CON9100,1);?>%</td>
     </tr>
     <tr>
       <td class="style12">2001 to 2005</td>
       <td class="style12"><img src="green5.png" width="<?php echo number_format($pDW_CON0105*3,0);?>" height="20" alt="age" /><?php echo number_format($pDW_CON0105,1);?>%</td>
     </tr>
     <tr>
       <td class="style12">2006 to 2011</td>
       <td class="style12"><img src="green5.png" width="<?php echo number_format($pDW_CON0611*3,0);?>" height="20" alt="age" /><?php echo number_format($pDW_CON0611,1);?>%</td>
     </tr>
     <tr>
       <td class="style12">2012 and newer</td>
       <td class="style12"><img src="green5.png" width="<?php echo number_format($pDW_CON12_*3,0);?>" height="20" alt="age" /><?php echo number_format($pDW_CON12_,1);?>%</td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td class="style12" colspan="2"><strong>New Home Develpments (excl. apartments)</strong></td>
     </tr>
     <tr>
       <td class="style12">2012</td>
       <td align="left" class="style12"><?php echo number_format($demo['agehomes'][1],0) . " (". number_format($agehomes['percent'][1],0) . "%)";?></td>
     </tr>
     <tr>
       <td class="style12">2013</td>
       <td align="left" class="style12"><?php echo number_format($demo['agehomes'][2],0) . " (". number_format($agehomes['percent'][2],0) . "%)";?></td>
     </tr>
     <tr>
       <td class="style12">2014</td>
       <td align="left" class="style12"><?php echo number_format($demo['agehomes'][3],0) . " (". number_format($agehomes['percent'][3],0) . "%)";?></td>
     </tr>
     <tr>
       <td class="style12">2015</td>
       <td align="left" class="style12"><?php echo number_format($demo['agehomes'][4],0) . " (". number_format($agehomes['percent'][4],0) . "%)";?></td>
     </tr>
     <tr>
       <td class="style12">2016</td>
       <td align="left" class="style12"><?php echo number_format($demo['agehomes'][5],0) . " (". number_format($agehomes['percent'][5],0) . "%)";?></td>
     </tr>
   </table>
   <br />
   <span class="style12"><br />

 </span></td>

 <td width="50%" align="right" valign="top" class="style12"><img src="build_home.jpg" width="570" height="450" alt="home" /></tr>

 </table>

  <div style="width:100%; text-align:center; margin: 3px 0;">

 	<span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>
<div class=" print_pages" align="center" style="height: 635px">
  <table width="90%" height="80%" border="0" cellspacing="4" cellpadding="0">
    <tr>
      <td height="79" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">
        <tr>
          <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
          <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="43%" align="right" class="stitle1">Top Renovations</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="50%" height="482" align="center" valign="top" class="style12"><table width="100%" class="Example_E1">
        <tr>
          <td width="50"><img src="nums/1.png" width="50" height="50" alt="rank" /></td>
          <td height="70" class="style4"><?php echo $sall_reno['name'][0]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][0]); ?>% (Index: <?php echo number_format($sall_reno['index'][0]); ?>)</td>
        </tr>
      </table>
        <br />
        <table width="100%" class="Example_E1">
          <tr>
            <td width="50"><img src="nums/2.png" width="50" height="50" alt="rank" /></td>
            <td height="70" class="style4"><?php echo $sall_reno['name'][1]; ?><br />
              Households: <?php echo number_format($sall_reno['percent'][1]); ?>% (
              
              Index: <?php echo number_format($sall_reno['index'][1]); ?>)</td>
          </tr>
        </table>
        <br />
        <table width="100%" class="Example_E1">
          <tr>
            <td width="50"><img src="nums/3.png" width="50" height="50" alt="rank" /></td>
            <td height="70" class="style4"><?php echo $sall_reno['name'][2]; ?><br />
              Households: <?php echo number_format($sall_reno['percent'][2]); ?>% (
              
              Index: <?php echo number_format($sall_reno['index'][2]); ?>)</td>
          </tr>
        </table>
        <br />
        <table width="100%" class="Example_E1">
          <tr>
            <td width="50"><img src="nums/4.png" width="50" height="50" alt="rank" /></td>
            <td height="70" class="style4"><?php echo $sall_reno['name'][3]; ?><br />
              Households: <?php echo number_format($sall_reno['percent'][3]); ?>% (
              
              Index: <?php echo number_format($sall_reno['index'][3]); ?>)</td>
          </tr>
        </table>
        <br />
        <table width="100%" class="Example_E1">
          <tr>
            <td width="50"><img src="nums/5.png" width="50" height="50" alt="rank" /></td>
            <td height="70" class="style4"><?php echo $sall_reno['name'][4]; ?><br />
              Households: <?php echo number_format($sall_reno['percent'][4]); ?>% (
              
              Index: <?php echo number_format($sall_reno['index'][4]); ?>)</td>
          </tr>
        </table>
        <br /></td>
      <td width="50%" align="right" valign="top" class="style12"><table width="97%" border="1" cellpadding="5" cellspacing="0" class="Example_E1">
        <tr>
          <td width="30" align="center" class="style24">6</td>
          <td class="style4"><?php echo $sall_reno['name'][5]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][5]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][5]); ?>)</td>
        </tr>
        <tr>
          <td align="center" class="style24">7</td>
          <td class="style4"><?php echo $sall_reno['name'][6]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][6]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][6]); ?>)</td>
        </tr>
        <tr>
          <td align="center" class="style24">8</td>
          <td class="style4"><?php echo $sall_reno['name'][7]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][7]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][7]); ?>)</td>
        </tr>
        <tr>
          <td align="center" class="style24">9</td>
          <td class="style4"><?php echo $sall_reno['name'][8]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][8]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][8]); ?>)</td>
        </tr>
        <tr>
          <td align="center" class="style24">10</td>
          <td class="style4"><?php echo $sall_reno['name'][9]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][9]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][9]); ?>)</td>
        </tr>
        <tr>
          <td align="center" class="style24">11</td>
          <td class="style4"><?php echo $sall_reno['name'][10]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][10]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][10]); ?>)</td>
        </tr>
        <tr>
          <td align="center" class="style24">12</td>
          <td class="style4"><?php echo $sall_reno['name'][11]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][11]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][11]); ?>)</td>
        </tr>
        <tr>
          <td align="center" class="style24">13</td>
          <td class="style4"><?php echo $sall_reno['name'][12]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][12]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][12]); ?>)</td>
        </tr>
        <tr>
          <td align="center" class="style24">14</td>
          <td class="style4"><?php echo $sall_reno['name'][13]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][13]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][13]); ?>)</td>
        </tr>
        <tr>
          <td height="48" align="center" class="style24">15</td>
          <td class="style4"><?php echo $sall_reno['name'][14]; ?><br />
            Households: <?php echo number_format($sall_reno['percent'][14]); ?>% (
            
            Index: <?php echo number_format($sall_reno['index'][14]); ?>)</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <div style="width:100%; text-align:center; margin: 3px 0;"> <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span> </div>
</div>
<div class="pagebreak"> </div>

<div class=" print_pages" align="center" style="height: 639px">

 <table width="96%" height="90%" border="0" cellspacing="4" cellpadding="0">

 

 

 

 

 

 <tr>

 <td height="79" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Dwelling Stats</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="49%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >
   
   <th width="155" align="left"><strong><span class="pbodyemp"> Household Details</span></strong></th>
   
   <th width="106" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>
   
   <th width="77" align="left">&nbsp;</th>
   
   <th width="63" align="left">&nbsp;</th>
   
 </tr>

 <tr class="style12">
   
   <td>Private Dwellings analyzed</td>
   
   <td align="center"><?php echo number_format($DW_TOTDWLG);?></td>
   
   <td align="center">&nbsp;</td>
   
   <td align="center">&nbsp;</td>
   
 </tr>

 <tr class="style12">

 <td>Average # of rooms</td>

 <td align="center"><?php echo number_format($pDW_ARMSPDW,1);?></td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 </tr>

 <tr class="style12">

 <td>Average Dwelling Value</td>

 <td align="center">$<?php echo number_format($pDW_AVALUE);?></td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 </tr>

 <tr class="style12">

 <td>&nbsp;</td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 </tr>

 <tr >
   
   <th align="left"><strong><span class="pbodyemp">Dwelling Style</span></strong></th>
   
   <th align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>
   
   <th align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>
   
   <th align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>
   
 </tr>

 <tr class="style12"><td>Single-detached house</td><td align="center"><?php echo number_format($pDW_SINGLE,1);?>%</td><td align="center"><?php echo number_format($cDW_SINGLE,1);?>%</td><td align="center"><?php echo number_format($iDW_SINGLE);?></td></tr>

 <tr class="style12">

 <td>&lt;5 story building</td>

 <td align="center"><?php echo number_format($pDW_APT_5,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_APT_5,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_APT_5);?></td>

 </tr>

 <tr class="style12"><td>5+ story building</td><td align="center"><?php echo number_format($pDW_APT5_,1);?>%</td><td align="center"><?php echo number_format($cDW_APT5_,1);?>%</td><td align="center"><?php echo number_format($iDW_APT5_);?></td></tr>

 <tr class="style12">

 <td>Semi-detached house</td>

 <td align="center"><?php echo number_format($pDW_SEMI,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_SEMI,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_SEMI);?></td>

 </tr>

 <tr class="style12">

 <td>Row house</td>

 <td align="center"><?php echo number_format($pDW_ROW,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ROW,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ROW);?></td>

 </tr>

 <?php 

 $pother_homes = $pDW_MOVA + $pDW_DUP + $pDW_OT_SING;

 $cother_homes = $cDW_MOVA + $cDW_DUP + $cDW_OT_SING;

 $iother_homes = min(500,$pother_homes / $cother_homes *100);

 ?>

 <tr class="style12"><td>Other dwelling</td><td align="center"><?php echo number_format($pother_homes,1);?>%</td><td align="center"><?php echo number_format($cother_homes,1);?>%</td><td align="center"><?php echo number_format($iother_homes);?></td></tr>

 </table>
   <br />
   <span class="style12">* &quot;Total Households&quot; is the total of apartments and homes; data includes newly built dwellings by year<br />
** 
     &quot;Households analyzed&quot; are the households with demographic and other attributes available and displayed in this report</span></td>

 <td width="51%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">
   <tr >
     <th width="155" align="left"><strong><span class="pbodyemp">Period of Construction </span></strong></th>
     <th width="106" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>
     <th width="77" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>
     <th width="63" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>
   </tr>
   <tr class="style12">
     <td>1960 or before</td>
     <td align="center"><?php echo number_format($pDW_CON_60,1);?>%</td>
     <td align="center"><?php echo number_format($cDW_CON_60,1);?>%</td>
     <td align="center"><?php echo number_format($iDW_CON_60);?></td>
   </tr>
   <tr class="style12">
     <td>1961 to 1980</td>
     <td align="center"><?php echo number_format($pDW_CON6180,1);?>%</td>
     <td align="center"><?php echo number_format($cDW_CON6180,1);?>%</td>
     <td align="center"><?php echo number_format($iDW_CON6180);?></td>
   </tr>
   <tr class="style12">
     <td>1981 to 1990</td>
     <td align="center"><?php echo number_format($pDW_CON8190,1);?>%</td>
     <td align="center"><?php echo number_format($cDW_CON8190,1);?>%</td>
     <td align="center"><?php echo number_format($iDW_CON8190);?></td>
   </tr>
   <tr class="style12">
     <td>1991 to 2000</td>
     <td align="center"><?php echo number_format($pDW_CON9100,1);?>%</td>
     <td align="center"><?php echo number_format($cDW_CON9100,1);?>%</td>
     <td align="center"><?php echo number_format($iDW_CON9100);?></td>
   </tr>
   <tr class="style12">
     <td>2001 to 2005</td>
     <td align="center"><?php echo number_format($pDW_CON0105,1);?>%</td>
     <td align="center"><?php echo number_format($cDW_CON0105,1);?>%</td>
     <td align="center"><?php echo number_format($iDW_CON0105);?></td>
   </tr>
   <tr class="style12">
     <td>2006 to 2011</td>
     <td align="center"><?php echo number_format($pDW_CON0611,1);?>%</td>
     <td align="center"><?php echo number_format($cDW_CON0611,1);?>%</td>
     <td align="center"><?php echo number_format($iDW_CON0611);?></td>
   </tr>
   <tr class="style12">
     <td>2012 and newer</td>
     <td align="center"><?php echo number_format($pDW_CON12_,1);?>%</td>
     <td align="center"><?php echo number_format($cDW_CON12_,1);?>%</td>
     <td align="center"><?php echo number_format($iDW_CON12_);?></td>
   </tr>

 </table>
   <br />
   <br />
   <table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">
     <tr >
       <th width="155" align="left"><strong><span class="pbodyemp">Newly Building Developments </span></strong></th>
       <th width="106" align="left"><div align="center"><strong><span class="pbodyemp">Homes</span></strong></div></th>
       <th width="77" align="left"><div align="center"><strong><span class="pbodyemp">Apartments</span></strong></div></th>
       <th width="63" align="left"><div align="center"><strong><span class="pbodyemp">Total</span></strong></div></th>
     </tr>
     <tr class="style12">
       <td>2012</td>
       <td align="center"><?php echo number_format($demo['agehomes'][1],0) . " (". number_format($agehomes['percent'][1],0) . "%)";?></td>
       <td align="center"><?php echo number_format($demo['agehomes'][9],0) . " (". number_format($agehomes['percent'][9],0) . "%)";?></td>
       <td align="center"><?php echo number_format(($demo['agehomes'][1]+$demo['agehomes'][9]));?></td>
     </tr>
     <tr class="style12">
       <td>2013</td>
       <td align="center"><?php echo number_format($demo['agehomes'][2],0) . " (". number_format($agehomes['percent'][2],0) . "%)";?></td>
       <td align="center"><?php echo number_format($demo['agehomes'][10],0) . " (". number_format($agehomes['percent'][10],0) . "%)";?></td>
       <td align="center"><?php echo number_format(($demo['agehomes'][2]+$demo['agehomes'][10]));?></td>
     </tr>
     <tr class="style12">
       <td>2014</td>
       <td align="center"><?php echo number_format($demo['agehomes'][3],0) . " (". number_format($agehomes['percent'][3],0) . "%)";?></td>
       <td align="center"><?php echo number_format($demo['agehomes'][11],0) . " (". number_format($agehomes['percent'][11],0) . "%)";?></td>
       <td align="center"><?php echo number_format(($demo['agehomes'][3]+$demo['agehomes'][11]));?></td>
     </tr>
     <tr class="style12">
       <td>2015</td>
       <td align="center"><?php echo number_format($demo['agehomes'][4],0) . " (". number_format($agehomes['percent'][4],0) . "%)";?></td>
       <td align="center"><?php echo number_format($demo['agehomes'][12],0) . " (". number_format($agehomes['percent'][12],0) . "%)";?></td>
       <td align="center"><?php echo number_format(($demo['agehomes'][4]+$demo['agehomes'][12]));?></td>
     </tr>
     <tr class="style12">
       <td>2016</td>
       <td align="center"><?php echo number_format($demo['agehomes'][5],0) . " (". number_format($agehomes['percent'][5],0) . "%)";?></td>
       <td align="center"><?php echo number_format($demo['agehomes'][13],0) . " (". number_format($agehomes['percent'][13],0) . "%)";?></td>
       <td align="center"><?php echo number_format(($demo['agehomes'][5]+$demo['agehomes'][13]));?></td>
     </tr>
     <tr class="style12">
       <td><strong>Total</strong></td>
       <td align="center"><strong><?php echo number_format($all_agehomes['homes'],0) . " (". number_format($all_agehomes['homesp'],0) . "%)";?></strong></td>
       <td align="center"><strong><?php echo number_format($all_agehomes['apts'],0) . " (". number_format($all_agehomes['aptsp'],0) . "%)";?></strong></td>
       <td align="center"><strong><?php echo number_format(($all_agehomes['homes']+$all_agehomes['apts']));?></strong></td>
     </tr>
   </table></td>

 </tr>

 </table>

  <div style="width:100%; text-align:center; margin: 10px 0;">

 	<span class="pbody12">Market area compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>
<div class=" print_pages" align="center" style="height: 639px">
  <table width="96%" height="90%" border="0" cellspacing="4" cellpadding="0">
    <tr>
      <td height="79" ><table width="100%" border="0" cellspacing="2" cellpadding="1">
        <tr>
          <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
          <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="43%" align="right" class="stitle">Home Owners</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="51%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">
        <tr >
          <th width="155" align="left"><strong><span class="pbodyemp"> Dwelling Maintenance</span></strong></th>
          <th width="106" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>
          <th width="77" align="left"><div align="center"><strong><span class="pbodyemp">benchamrk<br />
            Average</span></strong></div></th>
          <th width="63" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>
          </tr>
        <tr class="style12">
          <td>Dwelling requires minor repairs only</td>
          <td align="center"><?php echo number_format($pDW_REGMIN,1);?></td>
          <td align="center"><?php echo number_format($cDW_REGMIN,1);?></td>
          <td align="center"><?php echo number_format($iDW_REGMIN);?></td>
          </tr>
        <tr class="style12">
          <td>Dwelling requires a major repair(s)</td>
          <td align="center"><?php echo number_format($pDW_MAJORRE,1);?></td>
          <td align="center"><?php echo number_format($cDW_MAJORRE,1);?></td>
          <td align="center"><?php echo number_format($iDW_MAJORRE);?></td>
          </tr>
        <tr >
          <th align="left">&nbsp;</th>
          <th align="left">&nbsp;</th>
          <th align="left">&nbsp;</th>
          <th align="left">&nbsp;</th>
          </tr>
        <tr >
          <th align="left"><strong><span class="pbodyemp">Residing at current location</span></strong></th>
          <th align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>
          <th align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>
          <th align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>
          </tr>
        <tr class="style12">
          <td>Less than 1 year</td>
          <td align="center"><?php echo number_format($pDW_RE1Y,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_RE1Y,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_RE1Y);?></td>
          </tr>
        <tr class="style12">
          <td>1 - 5 years</td>
          <td align="center"><?php echo number_format($pDW_RE5Y,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_RE5Y,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_RE5Y);?></td>
          </tr>
        <tr class="style12">
          <td>6 - 10 years</td>
          <td align="center"><?php echo number_format($pDW_RE10Y,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_RE10Y,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_RE10Y);?></td>
          </tr>
        <tr class="style12">
          <td>11 - 19 years</td>
          <td align="center"><?php echo number_format($pDW_RE19Y,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_RE19Y,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_RE19Y);?></td>
          </tr>
        <tr class="style12">
          <td>20 years or more</td>
          <td align="center"><?php echo number_format($pDW_RE20_Y,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_RE20_Y,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_RE20_Y);?></td>
          </tr>
        <tr class="style12">
          <td>&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          </tr>
        <tr >
          <th align="left"><strong><span class="pbodyemp">Spending on Renovations (past 2 years)</span></strong></th>
          <th align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>
          <th align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>
          <th align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>
          </tr>
        <tr class="style12">
          <td>Nothing</td>
          <td align="center"><?php echo number_format($pDW_SP0,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SP0,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_SP0);?></td>
          </tr>
        <tr class="style12">
          <td>Under $1,000</td>
          <td align="center"><?php echo number_format($pDW_SP999,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SP999,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_SP999);?></td>
          </tr>
        <tr class="style12">
          <td>$1,000 - $2,499</td>
          <td align="center"><?php echo number_format($pDW_SP2499,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SP2499,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_SP2499);?></td>
          </tr>
        <tr class="style12">
          <td>$2,500 - $4,999</td>
          <td align="center"><?php echo number_format($pDW_SP4999,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SP4999,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_SP4999);?></td>
          </tr>
        <tr class="style12">
          <td>$5,000 - $9,999</td>
          <td align="center"><?php echo number_format($pDW_SP9999,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SP9999,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_SP9999);?></td>
          </tr>
        <tr class="style12">
          <td>$10,000 - $19,999</td>
          <td align="center"><?php echo number_format($pDW_SP19999,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SP19999,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_SP19999);?></td>
          </tr>
        <tr class="style12">
          <td>$20,000 or more</td>
          <td align="center"><?php echo number_format($pDW_SP20000,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SP20000,1);?>%</td>
          <td align="center"><?php echo number_format($iDW_SP20000);?></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <div style="width:100%; text-align:center; margin: 10px 0;"> <span class="pbody12">Market area compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span> </div>
</div>
<div class="pagebreak"> </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table width="96%" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="79" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Major Projects</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="49%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left">Renovation Projects<br />

 past 2 years</th>

 <th width="75" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="63" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style4">

 <td>Added living space</td>

 <td align="center"><?php echo number_format($pDW_RASPACE,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RASPACE,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RASPACE);?></td>

 </tr>

 <tr class="style4">

 <td>Built/renovated a garage</td>

 <td align="center"><?php echo number_format($pDW_RAGARG,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAGARG,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAGARG);?></td>

 </tr>

 <tr class="style4">

 <td>Custom draperies/curtains</td>

 <td align="center"><?php echo number_format($pDW_RADRAP,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RADRAP,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RADRAP);?></td>

 </tr>

 <tr class="style4">

 <td>Deck/fencing</td>

 <td align="center"><?php echo number_format($pDW_RADECK,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RADECK,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RADECK);?></td>

 </tr>

 <tr class="style4">

 <td>Electrical</td>

 <td align="center"><?php echo number_format($pDW_RAELEC,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAELEC,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAELEC);?></td>

 </tr>

 <tr class="style4">

 <td>Energy conservation projects (any)</td>

 <td align="center"><?php echo number_format($pDW_RAENG,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAENG,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAENG);?></td>

 </tr>

 <tr class="style4">

 <td>Exterior painting/staining</td>

 <td align="center"><?php echo number_format($pDW_RAEPAIN,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAEPAIN,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAEPAIN);?></td>

 </tr>

 <tr class="style4">

 <td>Floor tiles or vinyl flooring</td>

 <td align="center"><?php echo number_format($pDW_RATILE,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RATILE,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RATILE);?></td>

 </tr>

 <tr class="style4">

 <td>Hardwood/Laminate Flooring</td>

 <td align="center"><?php echo number_format($pDW_RAFLOO,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAFLOO,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAFLOO);?></td>

 </tr>

 <tr class="style4">

 <td>Heating, ventilation, or air conditioning</td>

 <td align="center"><?php echo number_format($pDW_RAHVAC,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAHVAC,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAHVAC);?></td>

 </tr>

 <tr class="style4">

 <td>Installed home security system</td>

 <td align="center"><?php echo number_format($pDW_RASECU,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RASECU,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RASECU);?></td>

 </tr>

 </table></td>

 <td width="51%" valign="top" ><table width="98%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left">Renovation Projects<br />

 past 2 years</th>

 <th width="75" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style4">

 <td>Installed windows or doors</td>

 <td align="center"><?php echo number_format($pDW_RAWIND,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAWIND,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAWIND);?></td>

 </tr>

 <tr class="style4">

 <td>Interior painting/wallpaper</td>

 <td align="center"><?php echo number_format($pDW_RAIPAIN,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAIPAIN,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAIPAIN);?></td>

 </tr>

 <tr class="style4">

 <td>Landscaping or yard improvements</td>

 <td align="center"><?php echo number_format($pDW_RALAND,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RALAND,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RALAND);?></td>

 </tr>

 <tr class="style4">

 <td>Plumbing (any jobs)</td>

 <td align="center"><?php echo number_format($pDW_RAPLUM,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAPLUM,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAPLUM);?></td>

 </tr>

 <tr class="style4">

 <td>Remodelled bathroom</td>

 <td align="center"><?php echo number_format($pDW_RABATH,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RABATH,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RABATH);?></td>

 </tr>

 <tr class="style4">

 <td>Remodelled kitchen</td>

 <td align="center"><?php echo number_format($pDW_RAKITC,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAKITC,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAKITC);?></td>

 </tr>

 <tr class="style4">

 <td>Remodelled other room(s)</td>

 <td align="center"><?php echo number_format($pDW_RAORM,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAORM,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAORM);?></td>

 </tr>

 <tr class="style4">

 <td>Roofing</td>

 <td align="center"><?php echo number_format($pDW_RAROOF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAROOF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAROOF);?></td>

 </tr>

 <tr class="style4">

 <td>Swimming pools/spas</td>

 <td align="center"><?php echo number_format($pDW_RAPOOL,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAPOOL,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAPOOL);?></td>

 </tr>

 <tr class="style4">

 <td>Wall-to-wall carpet or rugs</td>

 <td align="center"><?php echo number_format($pDW_RACARP,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RACARP,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RACARP);?></td>

 </tr>

 <tr class="style4">

 <td>Other home project(s)</td>

 <td align="center"><?php echo number_format($pDW_RAOTHE,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RAOTHE,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RAOTHE);?></td>

 </tr>

 </table></td>

 </tr>

 </table>

 <div style="width:100%; text-align:center; margin: 10px 0;">

   <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>

 <div class="pagebreak">

 </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table width="96%" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="69" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle"> Renovations</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="49%" valign="top" ><table width="98%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Renovations (past 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style12">

 <td>Added living space-myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_SPSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_SPSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_SPSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Added living space-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_SPCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_SPCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_SPCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Built/renovated a garage-Myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_GRGSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_GRGSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_GRGSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Built/renovated a garage-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_GRGCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_GRGCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_GRGCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Custom draperies/curtains-myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_DRSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_DRSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_DRSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Custom draperies/curtains-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_DRCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_DRCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_DRCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Deck/fencing-myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_DKSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_DKSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_DKSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Deck/fencing-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_DKCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_DKCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_DKCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Electrical-myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_ELSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ELSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ELSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Electrical-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_ELCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ELCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ELCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Energy conservation projects-myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_ENSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ENSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ENSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Energy conservation projects-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_ENCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ENCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ENCONT);?></td>

 </tr>

 </table></td>

 <td width="51%" valign="top" ><table width="99%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th width="182" align="left"><strong><span class="pbodyemp">Renovations (past 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="80" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style12">

 <td>Energy conservation projects-myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_ENSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ENSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ENSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Energy conservation projects-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_ENCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ENCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ENCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Exterior painting/staining-myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_EPSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_EPSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_EPSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Exterior painting/staining-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_EPCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_EPCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_EPCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Floor tiles or vinyl flooring-myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_TISELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_TISELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_TISELF);?></td>

 </tr>

 <tr class="style12">

 <td>Floor tiles or vinyl flooring-Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_TICONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_TICONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_TICONT);?></td>

 </tr>

 <tr class="style12">

 <td>Hardwood/Laminate Flooring by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_FLSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_FLSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_FLSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Hardwood/Laminate Flooring by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_FLCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_FLCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_FLCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Heating, ventilation, or air con... by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_HVSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_HVSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_HVSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Heating, ventilation, or air con... by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_HVCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_HVCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_HVCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Installed home security system by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_SESELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_SESELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_SESELF);?></td>

 </tr>

 <tr class="style12">

 <td>Installed home security system by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_SECONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_SECONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_SECONT);?></td>

 </tr>

 </table></td>

 </tr>

 </table>

  <div style="width:100%; text-align:center; margin: 10px 0;">

   <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>

 <div class="pagebreak"> </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table width="96%" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="79" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Renovations</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="434px" valign="top" ><table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Renovations (past 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style12">

 <td>Installed windows or doors by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_WISELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_WISELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_WISELF);?></td>

 </tr>

 <tr class="style12">

 <td>Installed windows or doors by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_WICONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_WICONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_WICONT);?></td>

 </tr>

 <tr class="style12">

 <td>Interior painting/wallpaper by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_IPSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_IPSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_IPSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Interior painting/wallpaper by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_IPCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_IPCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_IPCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Landscaping or yard improvements by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_LASELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_LASELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_LASELF);?></td>

 </tr>

 <tr class="style12">

 <td>Landscaping or yard improvements by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_LACONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_LACONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_LACONT);?></td>

 </tr>

 <tr class="style12">

 <td>Plumbing (any jobs) by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_PLSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_PLSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_PLSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Plumbing (any jobs) by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_PLCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_PLCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_PLCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Remodelled bathroom by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_BTSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_BTSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_BTSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Remodelled bathroom by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_BTCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_BTCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_BTCONT);?></td>

 </tr>

 </table></td>

 <td width="441px" valign="top" ><table width="97%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Renovations (past 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style12">

 <td>Remodelled kitchen by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_KISELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_KISELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_KISELF);?></td>

 </tr>

 <tr class="style12">

 <td>Remodelled kitchen by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_KICONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_KICONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_KICONT);?></td>

 </tr>

 <tr class="style12">

 <td>Remodelled other room(s) by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_ORSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ORSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ORSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Remodelled other room(s) by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_ORCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_ORCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_ORCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Roofing by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_RFSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RFSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RFSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Roofing by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_RFCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_RFCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_RFCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Swimming pools/spas by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_POSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_POSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_POSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Swimming pools/spas by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_POCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_POCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_POCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Wall to wall carpet or rugs by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_CPSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_CPSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_CPSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Wall to wall carpet or rugs by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_CPCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_CPCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_CPCONT);?></td>

 </tr>

 <tr class="style12">

 <td>Other home project(s) by myself, family or friend</td>

 <td align="center"><?php echo number_format($pDW_OHSELF,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_OHSELF,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_OHSELF);?></td>

 </tr>

 <tr class="style12">

 <td>Other home project(s) by Contractor/tradesperson</td>

 <td align="center"><?php echo number_format($pDW_OHCONT,1);?>%</td>

 <td align="center"><?php echo number_format($cDW_OHCONT,1);?>%</td>

 <td align="center"><?php echo number_format($iDW_OHCONT);?></td>

 </tr>

 </table></td>

 </tr>

 </table>

  <div style="width:100%; text-align:center; margin: 10px 0;">

   <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>

 <div class="pagebreak">

 </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table width="99%" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="88" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Shoppers by Retailer</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="62%" valign="top" ><table width="96%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th width="236" align="left"><strong><span class="pbodyemp">Shoppers by Retailer</span></strong></th>

 <th width="119" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="83" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="67" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style4"><td>Canadian Tire</td><td align="center"><?php echo number_format($pH_CANTR,1);?>%</td><td align="center"><?php echo number_format($cH_CANTR,1);?>%</td><td align="center"><?php echo number_format($iH_CANTR);?></td></tr>

 <tr class="style4"><td>Home Depot</td><td align="center"><?php echo number_format($pH_DEPOT,1);?>%</td><td align="center"><?php echo number_format($cH_DEPOT,1);?>%</td><td align="center"><?php echo number_format($iH_DEPOT);?></td></tr>

 <tr class="style4"><td>Home Hardware</td><td align="center"><?php echo number_format($pH_HWARE,1);?>%</td><td align="center"><?php echo number_format($cH_HWARE,1);?>%</td><td align="center"><?php echo number_format($iH_HWARE);?></td></tr>

 <tr class="style4"><td>Home Outfitters</td><td align="center"><?php echo number_format($pH_OUTFT,1);?>%</td><td align="center"><?php echo number_format($cH_OUTFT,1);?>%</td><td align="center"><?php echo number_format($iH_OUTFT);?></td></tr>

 <tr class="style4"><td>Home Sense</td><td align="center"><?php echo number_format($pH_SENSE,1);?>%</td><td align="center"><?php echo number_format($cH_SENSE,1);?>%</td><td align="center"><?php echo number_format($iH_SENSE);?></td></tr>

 <tr class="style4"><td>Independent hardware stores (any)</td><td align="center"><?php echo number_format($pH_INDEP,1);?>%</td><td align="center"><?php echo number_format($cH_INDEP,1);?>%</td><td align="center"><?php echo number_format($iH_INDEP);?></td></tr>

 <tr class="style4"><td>Lee Valley Tools</td><td align="center"><?php echo number_format($pH_LEE,1);?>%</td><td align="center"><?php echo number_format($cH_LEE,1);?>%</td><td align="center"><?php echo number_format($iH_LEE);?></td></tr>

 <tr class="style4"><td>Lighting stores (any)</td><td align="center"><?php echo number_format($pH_LIGHT,1);?>%</td><td align="center"><?php echo number_format($cH_LIGHT,1);?>%</td><td align="center"><?php echo number_format($iH_LIGHT);?></td></tr>

 <tr class="style4"><td>Lowe's Home Improvement</td><td align="center"><?php echo number_format($pH_LOWE,1);?>%</td><td align="center"><?php echo number_format($cH_LOWE,1);?>%</td><td align="center"><?php echo number_format($iH_LOWE);?></td></tr>

 <tr class="style4"><td>Rona Stores (any)</td><td align="center"><?php echo number_format($pH_RONA,1);?>%</td><td align="center"><?php echo number_format($cH_RONA,1);?>%</td><td align="center"><?php echo number_format($iH_RONA);?></td></tr>

 <tr class="style4"><td>Department stores (any)</td><td align="center"><?php echo number_format($pH_DEPT,1);?>%</td><td align="center"><?php echo number_format($cH_DEPT,1);?>%</td><td align="center"><?php echo number_format($iH_DEPT);?></td></tr>

 <tr class="style4"><td>Online Home Improvement stores</td><td align="center"><?php echo number_format($pH_OL,1);?>%</td><td align="center"><?php echo number_format($cH_OL,1);?>%</td><td align="center"><?php echo number_format($iH_OL);?></td></tr>

 <tr class="style4"><td>Other Home Décor stores</td><td align="center"><?php echo number_format($pH_OTHDEC,1);?>%</td><td align="center"><?php echo number_format($cH_OTHDEC,1);?>%</td><td align="center"><?php echo number_format($iH_OTHDEC);?></td></tr>

 <tr class="style4"><td>Other Home Improvement stores</td><td align="center"><?php echo number_format($pH_OTHIMP,1);?>%</td><td align="center"><?php echo number_format($cH_OTHIMP,1);?>%</td><td align="center"><?php echo number_format($iH_OTHIMP);?></td></tr>

 <tr class="style4">

 <td colspan="4" class="style10">Shopper percent includes regular + occasional shoppers by retailer</td>

 </tr>

 </table></td>

 <td width="38%" align="center"  valign="top" ><div align="centre"><img src="home_improve.jpg" alt="retailers" width="311" height="205" align="center" /></div></td>

 </tr>

 </table>

  <div style="width:100%; text-align:center; margin: 10px 0;">

   <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>

 <div class="pagebreak"> </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table width="901" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="69" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="3">

 <tr>

 <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Shopping Frequency</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="50%" valign="top" ><table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Regular Shoppers</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style4"><td>Canadian Tire</td><td align="center"><?php echo number_format($pH_CANTR_R,1);?>%</td><td align="center"><?php echo number_format($cH_CANTR_R,1);?>%</td><td align="center"><?php echo number_format($iH_CANTR_R);?></td></tr>

 <tr class="style4"><td>Home Depot</td><td align="center"><?php echo number_format($pH_DEPOT_R,1);?>%</td><td align="center"><?php echo number_format($cH_DEPOT_R,1);?>%</td><td align="center"><?php echo number_format($iH_DEPOT_R);?></td></tr>

 <tr class="style4"><td>Home Hardware</td><td align="center"><?php echo number_format($pH_HWARE_R,1);?>%</td><td align="center"><?php echo number_format($cH_HWARE_R,1);?>%</td><td align="center"><?php echo number_format($iH_HWARE_R);?></td></tr>

 <tr class="style4"><td>Home Outfitters</td><td align="center"><?php echo number_format($pH_OUTFT_R,1);?>%</td><td align="center"><?php echo number_format($cH_OUTFT_R,1);?>%</td><td align="center"><?php echo number_format($iH_OUTFT_R);?></td></tr>

 <tr class="style4"><td>Home Sense</td><td align="center"><?php echo number_format($pH_SENSE_R,1);?>%</td><td align="center"><?php echo number_format($cH_SENSE_R,1);?>%</td><td align="center"><?php echo number_format($iH_SENSE_R);?></td></tr>

 <tr class="style4"><td>Independent hardware stores (any)</td><td align="center"><?php echo number_format($pH_INDEP_R,1);?>%</td><td align="center"><?php echo number_format($cH_INDEP_R,1);?>%</td><td align="center"><?php echo number_format($iH_INDEP_R);?></td></tr>

 <tr class="style4"><td>Lee Valley Tools</td><td align="center"><?php echo number_format($pH_LEE_R,1);?>%</td><td align="center"><?php echo number_format($cH_LEE_R,1);?>%</td><td align="center"><?php echo number_format($iH_LEE_R);?></td></tr>

 <tr class="style4"><td>Lighting stores (any)</td><td align="center"><?php echo number_format($pH_LIGHT_R,1);?>%</td><td align="center"><?php echo number_format($cH_LIGHT_R,1);?>%</td><td align="center"><?php echo number_format($iH_LIGHT_R);?></td></tr>

 <tr class="style4"><td>Lowe's Home Improvement</td><td align="center"><?php echo number_format($pH_LOWE_R,1);?>%</td><td align="center"><?php echo number_format($cH_LOWE_R,1);?>%</td><td align="center"><?php echo number_format($iH_LOWE_R);?></td></tr>

 <tr class="style4"><td>Rona Stores (any)</td><td align="center"><?php echo number_format($pH_RONA_R,1);?>%</td><td align="center"><?php echo number_format($cH_RONA_R,1);?>%</td><td align="center"><?php echo number_format($iH_RONA_R);?></td></tr>

 <tr class="style4"><td>Department stores (any)</td><td align="center"><?php echo number_format($pH_DEPT_R,1);?>%</td><td align="center"><?php echo number_format($cH_DEPT_R,1);?>%</td><td align="center"><?php echo number_format($iH_DEPT_R);?></td></tr>

 <tr class="style4"><td>Online Home Improvement stores</td><td align="center"><?php echo number_format($pH_OL_R,1);?>%</td><td align="center"><?php echo number_format($cH_OL_R,1);?>%</td><td align="center"><?php echo number_format($iH_OL_R);?></td></tr>

 <tr class="style4"><td>Other Home Décor stores</td><td align="center"><?php echo number_format($pH_OTHDEC_R,1);?>%</td><td align="center"><?php echo number_format($cH_OTHDEC_R,1);?>%</td><td align="center"><?php echo number_format($iH_OTHDEC_R);?></td></tr>

 <tr class="style4"><td>Other Home Improvement stores</td><td align="center"><?php echo number_format($pH_OTHIMP_R,1);?>%</td><td align="center"><?php echo number_format($cH_OTHIMP_R,1);?>%</td><td align="center"><?php echo number_format($iH_OTHIMP_R);?></td></tr>

 </table></td>

 <td width="50%" valign="top" ><table width="96%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Occasional Shoppers</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style4"><td>Canadian Tire</td><td align="center"><?php echo number_format($pH_CANTR_O,1);?>%</td><td align="center"><?php echo number_format($cH_CANTR_O,1);?>%</td><td align="center"><?php echo number_format($iH_CANTR_O);?></td></tr>

 <tr class="style4"><td>Home Depot</td><td align="center"><?php echo number_format($pH_DEPOT_O,1);?>%</td><td align="center"><?php echo number_format($cH_DEPOT_O,1);?>%</td><td align="center"><?php echo number_format($iH_DEPOT_O);?></td></tr>

 <tr class="style4"><td>Home Hardware</td><td align="center"><?php echo number_format($pH_HWARE_O,1);?>%</td><td align="center"><?php echo number_format($cH_HWARE_O,1);?>%</td><td align="center"><?php echo number_format($iH_HWARE_O);?></td></tr>

 <tr class="style4"><td>Home Outfitters</td><td align="center"><?php echo number_format($pH_OUTFT_O,1);?>%</td><td align="center"><?php echo number_format($cH_OUTFT_O,1);?>%</td><td align="center"><?php echo number_format($iH_OUTFT_O);?></td></tr>

 <tr class="style4"><td>Home Sense</td><td align="center"><?php echo number_format($pH_SENSE_O,1);?>%</td><td align="center"><?php echo number_format($cH_SENSE_O,1);?>%</td><td align="center"><?php echo number_format($iH_SENSE_O);?></td></tr>

 <tr class="style4"><td>Independent hardware stores (any)</td><td align="center"><?php echo number_format($pH_INDEP_O,1);?>%</td><td align="center"><?php echo number_format($cH_INDEP_O,1);?>%</td><td align="center"><?php echo number_format($iH_INDEP_O);?></td></tr>

 <tr class="style4"><td>Lee Valley Tools</td><td align="center"><?php echo number_format($pH_LEE_O,1);?>%</td><td align="center"><?php echo number_format($cH_LEE_O,1);?>%</td><td align="center"><?php echo number_format($iH_LEE_O);?></td></tr>

 <tr class="style4"><td>Lighting stores (any)</td><td align="center"><?php echo number_format($pH_LIGHT_O,1);?>%</td><td align="center"><?php echo number_format($cH_LIGHT_O,1);?>%</td><td align="center"><?php echo number_format($iH_LIGHT_O);?></td></tr>

 <tr class="style4"><td>Lowe's Home Improvement</td><td align="center"><?php echo number_format($pH_LOWE_O,1);?>%</td><td align="center"><?php echo number_format($cH_LOWE_O,1);?>%</td><td align="center"><?php echo number_format($iH_LOWE_O);?></td></tr>

 <tr class="style4"><td>Rona Stores (any)</td><td align="center"><?php echo number_format($pH_RONA_O,1);?>%</td><td align="center"><?php echo number_format($cH_RONA_O,1);?>%</td><td align="center"><?php echo number_format($iH_RONA_O);?></td></tr>

 <tr class="style4"><td>Department stores (any)</td><td align="center"><?php echo number_format($pH_DEPT_O,1);?>%</td><td align="center"><?php echo number_format($cH_DEPT_O,1);?>%</td><td align="center"><?php echo number_format($iH_DEPT_O);?></td></tr>

 <tr class="style4"><td>Online Home Improvement stores</td><td align="center"><?php echo number_format($pH_OL_O,1);?>%</td><td align="center"><?php echo number_format($cH_OL_O,1);?>%</td><td align="center"><?php echo number_format($iH_OL_O);?></td></tr>

 <tr class="style4"><td>Other Home Décor stores</td><td align="center"><?php echo number_format($pH_OTHDEC_O,1);?>%</td><td align="center"><?php echo number_format($cH_OTHDEC_O,1);?>%</td><td align="center"><?php echo number_format($iH_OTHDEC_O);?></td></tr>

 <tr class="style4"><td>Other Home Improvement stores</td><td align="center"><?php echo number_format($pH_OTHIMP_O,1);?>%</td><td align="center"><?php echo number_format($cH_OTHIMP_O,1);?>%</td><td align="center"><?php echo number_format($iH_OTHIMP_O);?></td></tr>

 </table></td>

 </tr>

 </table>

  <div style="width:100%; text-align:center; margin: 10px 0;">

   <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>

 <div class="pagebreak">

 </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table width="96%" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="69" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Category Spend</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="49%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Purchased <br />

 (past 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style4"><td>Vacuum cleaners</td><td align="center"><?php echo number_format($pPC_VACUUM,1);?>%</td><td align="center"><?php echo number_format($cPC_VACUUM,1);?>%</td><td align="center"><?php echo number_format($iPC_VACUUM);?></td></tr>

 <tr class="style4">

 <td>&nbsp;</td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 </tr>

 <tr >

 <th align="left"><strong><span class="pbodyemp">Intend to Buy <br /> 

 (within 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style4"><td>Garden/Patio furniture (any)</td><td align="center"><?php echo number_format($pPI_GRPTFUR,1);?>%</td><td align="center"><?php echo number_format($cPI_GRPTFUR,1);?>%</td><td align="center"><?php echo number_format($iPI_GRPTFUR);?></td></tr>

 <tr class="style4"><td>Gas barbeque</td><td align="center"><?php echo number_format($pPI_GASBBQ,1);?>%</td><td align="center"><?php echo number_format($cPI_GASBBQ,1);?>%</td><td align="center"><?php echo number_format($iPI_GASBBQ);?></td></tr>

 <tr class="style4"><td>Fireplace (any)</td><td align="center"><?php echo number_format($pPI_FIREPLC,1);?>%</td><td align="center"><?php echo number_format($cPI_FIREPLC,1);?>%</td><td align="center"><?php echo number_format($iPI_FIREPLC);?></td></tr>

 <tr class="style4"><td>Major appliances</td><td align="center"><?php echo number_format($pPI_APPLIAN,1);?>%</td><td align="center"><?php echo number_format($cPI_APPLIAN,1);?>%</td><td align="center"><?php echo number_format($iPI_APPLIAN);?></td></tr>

 <tr class="style4"><td>Vacuum cleaners</td><td align="center"><?php echo number_format($pPI_VACUUM,1);?>%</td><td align="center"><?php echo number_format($cPI_VACUUM,1);?>%</td><td align="center"><?php echo number_format($iPI_VACUUM);?></td></tr>

 </table></td>

 <td width="51%" valign="top" ><table width="96%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Annual Spending</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 <tr class="style4"><td>Garden supplies: Nothing</td><td align="center"><?php echo number_format($pSP_GSNO,1);?>%</td><td align="center"><?php echo number_format($cSP_GSNO,1);?>%</td><td align="center"><?php echo number_format($iSP_GSNO);?></td></tr>

 <tr class="style4"><td>Garden supplies: $1 - $249</td><td align="center"><?php echo number_format($pSP_GS249,1);?>%</td><td align="center"><?php echo number_format($cSP_GS249,1);?>%</td><td align="center"><?php echo number_format($iSP_GS249);?></td></tr>

 <tr class="style4"><td>Garden supplies: $250 - $499</td><td align="center"><?php echo number_format($pSP_GS499,1);?>%</td><td align="center"><?php echo number_format($cSP_GS499,1);?>%</td><td align="center"><?php echo number_format($iSP_GS499);?></td></tr>

 <tr class="style4"><td>Garden supplies: $500 or more</td><td align="center"><?php echo number_format($pSP_GS500,1);?>%</td><td align="center"><?php echo number_format($cSP_GS500,1);?>%</td><td align="center"><?php echo number_format($iSP_GS500);?></td></tr>

 <tr class="style4">

 <td>&nbsp;</td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 </tr>

 <tr class="style4">

 <td>Home décor: Nothing</td><td align="center"><?php echo number_format($pSP_HDNO,1);?>%</td><td align="center"><?php echo number_format($cSP_HDNO,1);?>%</td><td align="center"><?php echo number_format($iSP_HDNO);?></td></tr>

 <tr class="style4"><td>Home décor: $1 - $249</td><td align="center"><?php echo number_format($pSP_HD249,1);?>%</td><td align="center"><?php echo number_format($cSP_HD249,1);?>%</td><td align="center"><?php echo number_format($iSP_HD249);?></td></tr>

 <tr class="style4">

 <td>Home décor: $250 - $499</td><td align="center"><?php echo number_format($pSP_HD499,1);?>%</td><td align="center"><?php echo number_format($cSP_HD499,1);?>%</td><td align="center"><?php echo number_format($iSP_HD499);?></td></tr>

 <tr class="style4">

 <td>Home décor: $500 or more</td><td align="center"><?php echo number_format($pSP_HD500,1);?>%</td><td align="center"><?php echo number_format($cSP_HD500,1);?>%</td><td align="center"><?php echo number_format($iSP_HD500);?></td></tr>

 <tr class="style4">

 <td>&nbsp;</td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 <td align="center">&nbsp;</td>

 </tr>

 <tr class="style4">

 <td>Power tools: Nothing</td><td align="center"><?php echo number_format($pSP_PTNO,1);?>%</td><td align="center"><?php echo number_format($cSP_PTNO,1);?>%</td><td align="center"><?php echo number_format($iSP_PTNO);?></td></tr>

 <tr class="style4">

 <td>Power tools: $1 - $249</td><td align="center"><?php echo number_format($pSP_PT249,1);?>%</td><td align="center"><?php echo number_format($cSP_PT249,1);?>%</td><td align="center"><?php echo number_format($iSP_PT249);?></td></tr>

 <tr class="style4">

 <td>Power tools: $250 - $499</td><td align="center"><?php echo number_format($pSP_PT499,1);?>%</td><td align="center"><?php echo number_format($cSP_PT499,1);?>%</td><td align="center"><?php echo number_format($iSP_PT499);?></td></tr>

 <tr class="style4">

 <td>Power tools: $500 or more</td><td align="center"><?php echo number_format($pSP_PT500,1);?>%</td><td align="center"><?php echo number_format($cSP_PT500,1);?>%</td><td align="center"><?php echo number_format($iSP_PT500);?></td></tr>

 </table></td>

 </tr>

 </table>

  <div style="width:100%; text-align:center; margin: 10px 0;">

   <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>

 <div class="pagebreak"> </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table width="96%" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="69" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle">Recent Purchases</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="49%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Purchased <br />

 (past 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style12"><td>Baby furniture</td><td align="center"><?php echo number_format($pPC_BBFUR,1);?>%</td><td align="center"><?php echo number_format($cPC_BBFUR,1);?>%</td><td align="center"><?php echo number_format($iPC_BBFUR);?></td></tr>

 <tr class="style12"><td>Bed/mattress</td><td align="center"><?php echo number_format($pPC_BED,1);?>%</td><td align="center"><?php echo number_format($cPC_BED,1);?>%</td><td align="center"><?php echo number_format($iPC_BED);?></td></tr>

 <tr class="style12">

 <td>All other furniture</td><td align="center"><?php echo number_format($pPC_OFFFUR,1);?>%</td><td align="center"><?php echo number_format($cPC_OFFFUR,1);?>%</td><td align="center"><?php echo number_format($iPC_OFFFUR);?></td></tr>

 <tr class="style12"><td>Car alarm/security system</td><td align="center"><?php echo number_format($pPC_CARALRM,1);?>%</td><td align="center"><?php echo number_format($cPC_CARALRM,1);?>%</td><td align="center"><?php echo number_format($iPC_CARALRM);?></td></tr>

 <tr class="style12"><td>Car stereo</td><td align="center"><?php echo number_format($pPC_CARSTR,1);?>%</td><td align="center"><?php echo number_format($cPC_CARSTR,1);?>%</td><td align="center"><?php echo number_format($iPC_CARSTR);?></td></tr>

 <tr class="style12">

 <td>Camera</td><td align="center"><?php echo number_format($pPC_CMRAFLM,1);?>%</td><td align="center"><?php echo number_format($cPC_CMRAFLM,1);?>%</td><td align="center"><?php echo number_format($iPC_CMRAFLM);?></td></tr>

 <tr class="style12"><td>Camping equipment</td><td align="center"><?php echo number_format($pPC_CMPEQP,1);?>%</td><td align="center"><?php echo number_format($cPC_CMPEQP,1);?>%</td><td align="center"><?php echo number_format($iPC_CMPEQP);?></td></tr>

 <tr class="style12"><td>Camping trailer/Motorhome</td><td align="center"><?php echo number_format($pPC_CMPTRL,1);?>%</td><td align="center"><?php echo number_format($cPC_CMPTRL,1);?>%</td><td align="center"><?php echo number_format($iPC_CMPTRL);?></td></tr>

 <tr class="style12">

 <td>e-Reader </td><td align="center"><?php echo number_format($pPC_EREADER,1);?>%</td><td align="center"><?php echo number_format($cPC_EREADER,1);?>%</td><td align="center"><?php echo number_format($iPC_EREADER);?></td></tr>

 <tr class="style12">

 <td>Garden/Patio furniture </td><td align="center"><?php echo number_format($pPC_GRPTFUR,1);?>%</td><td align="center"><?php echo number_format($cPC_GRPTFUR,1);?>%</td><td align="center"><?php echo number_format($iPC_GRPTFUR);?></td></tr>

 <tr class="style12"><td>Gas barbeque</td><td align="center"><?php echo number_format($pPC_GASBBQ,1);?>%</td><td align="center"><?php echo number_format($cPC_GASBBQ,1);?>%</td><td align="center"><?php echo number_format($iPC_GASBBQ);?></td></tr>

 <tr class="style12"><td>Fireplace (any)</td><td align="center"><?php echo number_format($pPC_FIREPLC,1);?>%</td><td align="center"><?php echo number_format($cPC_FIREPLC,1);?>%</td><td align="center"><?php echo number_format($iPC_FIREPLC);?></td></tr>

 <tr class="style12"><td>GPS (Handheld or Car)</td><td align="center"><?php echo number_format($pPC_GPS,1);?>%</td><td align="center"><?php echo number_format($cPC_GPS,1);?>%</td><td align="center"><?php echo number_format($iPC_GPS);?></td></tr>

 <tr class="style12"><td>Golf equipment</td><td align="center"><?php echo number_format($pPC_GOLFEQP,1);?>%</td><td align="center"><?php echo number_format($cPC_GOLFEQP,1);?>%</td><td align="center"><?php echo number_format($iPC_GOLFEQP);?></td></tr>

 <tr class="style12"><td>Hockey equipment</td><td align="center"><?php echo number_format($pPC_HOCKEY,1);?>%</td><td align="center"><?php echo number_format($cPC_HOCKEY,1);?>%</td><td align="center"><?php echo number_format($iPC_HOCKEY);?></td></tr>

 <tr class="style12"><td>Hot tub/spa</td><td align="center"><?php echo number_format($pPC_HOTTUB,1);?>%</td><td align="center"><?php echo number_format($cPC_HOTTUB,1);?>%</td><td align="center"><?php echo number_format($iPC_HOTTUB);?></td></tr>

 <tr class="style12"><td>Home exercise equipment</td><td align="center"><?php echo number_format($pPC_EXCEQP,1);?>%</td><td align="center"><?php echo number_format($cPC_EXCEQP,1);?>%</td><td align="center"><?php echo number_format($iPC_EXCEQP);?></td></tr>

 <tr class="style12">

 <td>Major appliances </td><td align="center"><?php echo number_format($pPC_APPLIAN,1);?>%</td><td align="center"><?php echo number_format($cPC_APPLIAN,1);?>%</td><td align="center"><?php echo number_format($iPC_APPLIAN);?></td></tr>

 <tr class="style12"><td>Motorcycle</td><td align="center"><?php echo number_format($pPC_MOTORCY,1);?>%</td><td align="center"><?php echo number_format($cPC_MOTORCY,1);?>%</td><td align="center"><?php echo number_format($iPC_MOTORCY);?></td></tr>

 </table></td>

 <td width="51%" valign="top" ><table width="96%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Purchased <br />

 (past 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style12">

 <td>Musical instrument</td>

 <td align="center"><?php echo number_format($pPC_MINSTR,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_MINSTR,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_MINSTR);?></td>

 </tr>

 <tr class="style12">

 <td>Office equipment</td>

 <td align="center"><?php echo number_format($pPC_OFFEQP,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_OFFEQP,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_OFFEQP);?></td>

 </tr>

 <tr class="style12">

 <td>Portable MP3 player</td>

 <td align="center"><?php echo number_format($pPC_MP3,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_MP3,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_MP3);?></td>

 </tr>

 <tr class="style12">

 <td>Personal computer</td>

 <td align="center"><?php echo number_format($pPC_PC,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_PC,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_PC);?></td>

 </tr>

 <tr class="style12">

 <td>Computer software</td>

 <td align="center"><?php echo number_format($pPC_PCSW,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_PCSW,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_PCSW);?></td>

 </tr>

 <tr class="style12">

 <td>Printer</td>

 <td align="center"><?php echo number_format($pPC_PRNT,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_PRNT,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_PRNT);?></td>

 </tr>

 <tr class="style12">

 <td>Pool (above or in-ground)</td>

 <td align="center"><?php echo number_format($pPC_POOL,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_POOL,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_POOL);?></td>

 </tr>

 <tr class="style12">

 <td>Pre-arranged funeral service</td>

 <td align="center"><?php echo number_format($pPC_PRAFUNE,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_PRAFUNE,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_PRAFUNE);?></td>

 </tr>

 <tr class="style12">

 <td>Boat (any)</td>

 <td align="center"><?php echo number_format($pPC_BOAT,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_BOAT,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_BOAT);?></td>

 </tr>

 <tr class="style12">

 <td>Ski/snowboard equipment</td>

 <td align="center"><?php echo number_format($pPC_SKIEQP,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_SKIEQP,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_SKIEQP);?></td>

 </tr>

 <tr class="style12">

 <td>Snowmobile/ATV</td>

 <td align="center"><?php echo number_format($pPC_SNOWMBL,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_SNOWMBL,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_SNOWMBL);?></td>

 </tr>

 <tr class="style12">

 <td>Stereo equipment</td>

 <td align="center"><?php echo number_format($pPC_STEREO,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_STEREO,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_STEREO);?></td>

 </tr>

 <tr class="style12">

 <td>Television</td>

 <td align="center"><?php echo number_format($pPC_TV,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_TV,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_TV);?></td>

 </tr>

 <tr class="style12">

 <td>Tires</td>

 <td align="center"><?php echo number_format($pPC_TIRE,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_TIRE,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_TIRE);?></td>

 </tr>

 <tr class="style12">

 <td>Vacuum cleaners</td>

 <td align="center"><?php echo number_format($pPC_VACUUM,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_VACUUM,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_VACUUM);?></td>

 </tr>

 <tr class="style12">

 <td>Video equipment</td>

 <td align="center"><?php echo number_format($pPC_VDOEQP,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_VDOEQP,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_VDOEQP);?></td>

 </tr>

 <tr class="style12">

 <td>Video game system</td>

 <td align="center"><?php echo number_format($pPC_GMSYS,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_GMSYS,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_GMSYS);?></td>

 </tr>

 <tr class="style12">

 <td>Wedding services (any)</td>

 <td align="center"><?php echo number_format($pPC_WEDSVR,1);?>%</td>

 <td align="center"><?php echo number_format($cPC_WEDSVR,1);?>%</td>

 <td align="center"><?php echo number_format($iPC_WEDSVR);?></td>

 </tr>

 </table></td>

 </tr>

 </table>

  <div style="width:100%; text-align:center; margin: 10px 0;">

   <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>

 <div class="pagebreak">

 </div>

<div class=" print_pages" align="center" style="height: 625px">

 <table wwidth="901" height="90%" border="0" cellspacing="4" cellpadding="0">

 <tr>

 <td height="69" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">

 <tr>

 <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

 <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

 <?php echo $change_title2; ?></span></td>

 <td width="43%" align="right" class="stitle"> Intend to Buy</td>

 </tr>

 </table></td>

 </tr>

 <tr>

 <td width="424" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Intend to Buy <br />

 (within 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style12"><td>Baby furniture</td><td align="center"><?php echo number_format($pPI_BBFUR,1);?>%</td><td align="center"><?php echo number_format($cPI_BBFUR,1);?>%</td><td align="center"><?php echo number_format($iPI_BBFUR);?></td></tr>

 <tr class="style12"><td>Bed/mattress</td><td align="center"><?php echo number_format($pPI_BED,1);?>%</td><td align="center"><?php echo number_format($cPI_BED,1);?>%</td><td align="center"><?php echo number_format($iPI_BED);?></td></tr>

 <tr class="style12"><td>All other furniture </td><td align="center"><?php echo number_format($pPI_OFFFUR,1);?>%</td><td align="center"><?php echo number_format($cPI_OFFFUR,1);?>%</td><td align="center"><?php echo number_format($iPI_OFFFUR);?></td></tr>

 <tr class="style12"><td>Car alarm/security system</td><td align="center"><?php echo number_format($pPI_CARALRM,1);?>%</td><td align="center"><?php echo number_format($cPI_CARALRM,1);?>%</td><td align="center"><?php echo number_format($iPI_CARALRM);?></td></tr>

 <tr class="style12"><td>Car stereo</td><td align="center"><?php echo number_format($pPI_CARSTR,1);?>%</td><td align="center"><?php echo number_format($cPI_CARSTR,1);?>%</td><td align="center"><?php echo number_format($iPI_CARSTR);?></td></tr>

 <tr class="style12"><td>Camera </td><td align="center"><?php echo number_format($pPI_CMRAFLM,1);?>%</td><td align="center"><?php echo number_format($cPI_CMRAFLM,1);?>%</td><td align="center"><?php echo number_format($iPI_CMRAFLM);?></td></tr>

 <tr class="style12"><td>Camping equipment</td><td align="center"><?php echo number_format($pPI_CMPEQP,1);?>%</td><td align="center"><?php echo number_format($cPI_CMPEQP,1);?>%</td><td align="center"><?php echo number_format($iPI_CMPEQP);?></td></tr>

 <tr class="style12"><td>Camping trailer/Motorhome</td><td align="center"><?php echo number_format($pPI_CMPTRL,1);?>%</td><td align="center"><?php echo number_format($cPI_CMPTRL,1);?>%</td><td align="center"><?php echo number_format($iPI_CMPTRL);?></td></tr>

 <tr class="style12"><td>e-Reader</td><td align="center"><?php echo number_format($pPI_EREADER,1);?>%</td><td align="center"><?php echo number_format($cPI_EREADER,1);?>%</td><td align="center"><?php echo number_format($iPI_EREADER);?></td></tr>

 <tr class="style12"><td>Garden/Patio furniture </td><td align="center"><?php echo number_format($pPI_GRPTFUR,1);?>%</td><td align="center"><?php echo number_format($cPI_GRPTFUR,1);?>%</td><td align="center"><?php echo number_format($iPI_GRPTFUR);?></td></tr>

 <tr class="style12"><td>Gas barbeque</td><td align="center"><?php echo number_format($pPI_GASBBQ,1);?>%</td><td align="center"><?php echo number_format($cPI_GASBBQ,1);?>%</td><td align="center"><?php echo number_format($iPI_GASBBQ);?></td></tr>

 <tr class="style12"><td>Fireplace (any)</td><td align="center"><?php echo number_format($pPI_FIREPLC,1);?>%</td><td align="center"><?php echo number_format($cPI_FIREPLC,1);?>%</td><td align="center"><?php echo number_format($iPI_FIREPLC);?></td></tr>

 <tr class="style12"><td>GPS (Handheld or Car)</td><td align="center"><?php echo number_format($pPI_GPS,1);?>%</td><td align="center"><?php echo number_format($cPI_GPS,1);?>%</td><td align="center"><?php echo number_format($iPI_GPS);?></td></tr>

 <tr class="style12"><td>Golf equipment</td><td align="center"><?php echo number_format($pPI_GOLFEQP,1);?>%</td><td align="center"><?php echo number_format($cPI_GOLFEQP,1);?>%</td><td align="center"><?php echo number_format($iPI_GOLFEQP);?></td></tr>

 <tr class="style12"><td>Hockey equipment</td><td align="center"><?php echo number_format($pPI_HOCKEY,1);?>%</td><td align="center"><?php echo number_format($cPI_HOCKEY,1);?>%</td><td align="center"><?php echo number_format($iPI_HOCKEY);?></td></tr>

 <tr class="style12"><td>Hot tub/spa</td><td align="center"><?php echo number_format($pPI_HOTTUB,1);?>%</td><td align="center"><?php echo number_format($cPI_HOTTUB,1);?>%</td><td align="center"><?php echo number_format($iPI_HOTTUB);?></td></tr>

 <tr class="style12"><td>Home exercise equipment</td><td align="center"><?php echo number_format($pPI_EXCEQP,1);?>%</td><td align="center"><?php echo number_format($cPI_EXCEQP,1);?>%</td><td align="center"><?php echo number_format($iPI_EXCEQP);?></td></tr>

 <tr class="style12"><td>Major appliances</td><td align="center"><?php echo number_format($pPI_APPLIAN,1);?>%</td><td align="center"><?php echo number_format($cPI_APPLIAN,1);?>%</td><td align="center"><?php echo number_format($iPI_APPLIAN);?></td></tr>

 <tr class="style12"><td>Motorcycle</td><td align="center"><?php echo number_format($pPI_MOTORCY,1);?>%</td><td align="center"><?php echo number_format($cPI_MOTORCY,1);?>%</td><td align="center"><?php echo number_format($iPI_MOTORCY);?></td></tr>

 </table></td>

 <td width="434" valign="top" ><table width="98%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

 <tr >

 <th align="left"><strong><span class="pbodyemp">Intend to Buy <br />

 (within 2 years)</span></strong></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Target Audience</span></strong></div></th>

 <th width="75" align="left"><div align="center"><strong><span class="pbodyemp">Benchmark</span></strong></div></th>

 <th width="65" align="left"><div align="center"><strong><span class="pbodyemp">Index</span></strong></div></th>

 </tr>

 <tr class="style12"><td>Musical instrument</td><td align="center"><?php echo number_format($pPI_MINSTR,1);?>%</td><td align="center"><?php echo number_format($cPI_MINSTR,1);?>%</td><td align="center"><?php echo number_format($iPI_MINSTR);?></td></tr>

 <tr class="style12"><td>Office equipment</td><td align="center"><?php echo number_format($pPI_OFFEQP,1);?>%</td><td align="center"><?php echo number_format($cPI_OFFEQP,1);?>%</td><td align="center"><?php echo number_format($iPI_OFFEQP);?></td></tr>

 <tr class="style12"><td>Portable MP3 player</td><td align="center"><?php echo number_format($pPI_MP3,1);?>%</td><td align="center"><?php echo number_format($cPI_MP3,1);?>%</td><td align="center"><?php echo number_format($iPI_MP3);?></td></tr>

 <tr class="style12"><td>Personal computer</td><td align="center"><?php echo number_format($pPI_PC,1);?>%</td><td align="center"><?php echo number_format($cPI_PC,1);?>%</td><td align="center"><?php echo number_format($iPI_PC);?></td></tr>

 <tr class="style12"><td>Computer software</td><td align="center"><?php echo number_format($pPI_PCSW,1);?>%</td><td align="center"><?php echo number_format($cPI_PCSW,1);?>%</td><td align="center"><?php echo number_format($iPI_PCSW);?></td></tr>

 <tr class="style12"><td>Printer</td><td align="center"><?php echo number_format($pPI_PRNT,1);?>%</td><td align="center"><?php echo number_format($cPI_PRNT,1);?>%</td><td align="center"><?php echo number_format($iPI_PRNT);?></td></tr>

 <tr class="style12"><td>Pool (above or in-ground)</td><td align="center"><?php echo number_format($pPI_POOL,1);?>%</td><td align="center"><?php echo number_format($cPI_POOL,1);?>%</td><td align="center"><?php echo number_format($iPI_POOL);?></td></tr>

 <tr class="style12"><td>Pre-arranged funeral service</td><td align="center"><?php echo number_format($pPI_PRAFUNE,1);?>%</td><td align="center"><?php echo number_format($cPI_PRAFUNE,1);?>%</td><td align="center"><?php echo number_format($iPI_PRAFUNE);?></td></tr>

 <tr class="style12"><td>Boat (any)</td><td align="center"><?php echo number_format($pPI_BOAT,1);?>%</td><td align="center"><?php echo number_format($cPI_BOAT,1);?>%</td><td align="center"><?php echo number_format($iPI_BOAT);?></td></tr>

 <tr class="style12"><td>Ski/snowboard equipment</td><td align="center"><?php echo number_format($pPI_SKIEQP,1);?>%</td><td align="center"><?php echo number_format($cPI_SKIEQP,1);?>%</td><td align="center"><?php echo number_format($iPI_SKIEQP);?></td></tr>

 <tr class="style12"><td>Snowmobile/ATV</td><td align="center"><?php echo number_format($pPI_SNOWMBL,1);?>%</td><td align="center"><?php echo number_format($cPI_SNOWMBL,1);?>%</td><td align="center"><?php echo number_format($iPI_SNOWMBL);?></td></tr>

 <tr class="style12"><td>Stereo equipment</td><td align="center"><?php echo number_format($pPI_STEREO,1);?>%</td><td align="center"><?php echo number_format($cPI_STEREO,1);?>%</td><td align="center"><?php echo number_format($iPI_STEREO);?></td></tr>

 <tr class="style12"><td>Television</td><td align="center"><?php echo number_format($pPI_TV,1);?>%</td><td align="center"><?php echo number_format($cPI_TV,1);?>%</td><td align="center"><?php echo number_format($iPI_TV);?></td></tr>

 <tr class="style12"><td>Tires</td><td align="center"><?php echo number_format($pPI_TIRE,1);?>%</td><td align="center"><?php echo number_format($cPI_TIRE,1);?>%</td><td align="center"><?php echo number_format($iPI_TIRE);?></td></tr>

 <tr class="style12"><td>Vacuum cleaners</td><td align="center"><?php echo number_format($pPI_VACUUM,1);?>%</td><td align="center"><?php echo number_format($cPI_VACUUM,1);?>%</td><td align="center"><?php echo number_format($iPI_VACUUM);?></td></tr>

 <tr class="style12"><td>Video equipment</td><td align="center"><?php echo number_format($pPI_VDOEQP,1);?>%</td><td align="center"><?php echo number_format($cPI_VDOEQP,1);?>%</td><td align="center"><?php echo number_format($iPI_VDOEQP);?></td></tr>

 <tr class="style12"><td>Video game system </td><td align="center"><?php echo number_format($pPI_GMSYS,1);?>%</td><td align="center"><?php echo number_format($cPI_GMSYS,1);?>%</td><td align="center"><?php echo number_format($iPI_GMSYS);?></td></tr>

 <tr class="style12"><td>Wedding services (any)</td><td align="center"><?php echo number_format($pPI_WEDSVR,1);?>%</td><td align="center"><?php echo number_format($cPI_WEDSVR,1);?>%</td><td align="center"><?php echo number_format($iPI_WEDSVR);?></td></tr>

 </table></td>

 </tr>

 </table>

  <div style="width:100%; text-align:center; margin: 10px 0;">

   <span class="pbody12">Target Audience compard to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

 </div>

 </div>