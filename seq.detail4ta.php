<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<style>
.black16 
{ 
font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #333;
font-size: 16px;
font-weight: normal;
padding: 0 0 9px;
}
.small_title {
font-family: Verdana, Geneva, sans-serif;
font-size: 9px;	   
}
.style1 {color: #000000}
.style2 {font-size: 18px}
.style5 {font-size: 12px}
.style6 {
font-size: 16px;
font-weight: bold;
}
.style7 {color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; }
.style11 {color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; font-weight: bold; }
.style13 {font-size: 18px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; font-weight: bold; }
.style14 {font-size: 16px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}
.style15 {font-size: 14px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}
body {
margin-left: 10px;
}

.style16 {font-size: 10px}
</style>
<?php 

// added aug 2016 
// essential spending 


// bar charts
$max_bar_width = 150;
$bar_height = 30;
$bar_minmax_size = 50;
$bar_essential[0]['left']['image'] = "spacer.gif";
$bar_essential[0]['right']['image'] = "spacer.gif";
$bar_essential[1]['left']['image'] = "spacer.gif";
$bar_essential[1]['right']['image'] = "spacer.gif";
$bar_essential[2]['left']['image'] = "spacer.gif";
$bar_essential[2]['right']['image'] = "spacer.gif";
$bar_essential[3]['left']['image'] = "spacer.gif";
$bar_essential[3]['right']['image'] = "spacer.gif";
$bar_essential[0]['left']['width'] = $max_bar_width;
$bar_essential[0]['right']['width'] = $max_bar_width;
$bar_essential[1]['left']['width'] = $max_bar_width;
$bar_essential[1]['right']['width'] = $max_bar_width;
$bar_essential[2]['left']['width'] = $max_bar_width;
$bar_essential[2]['right']['width'] = $max_bar_width;
$bar_essential[3]['left']['width'] = $max_bar_width;
$bar_essential[3]['right']['width'] = $max_bar_width;
if($hhindex_D2000_2070 > 100)  {
$bar_essential[0]['right']['image'] = "green_bar.png";
$bar_essential[0]['right']['width'] = round(20 + min($max_bar_width,(($hhindex_D2000_2070 - 100)/$bar_minmax_size * 100)));} else {
$bar_essential[0]['left']['image'] = "red_bar.png";
$bar_essential[0]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D2000_2070)/$bar_minmax_size * 100)));}
if($hhindex_D1000_1560 > 100)  {
$bar_essential[1]['right']['image'] = "green_bar.png";
$bar_essential[1]['right']['width'] = round(20 + min($max_bar_width,(($hhindex_D1000_1560 - 100)/$bar_minmax_size * 100)));} else {
$bar_essential[1]['left']['image'] = "red_bar.png";
$bar_essential[1]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D1000_1560)/$bar_minmax_size * 100)));} 
if($hhindex_D3000_3260 > 100)  {
$bar_essential[2]['right']['image'] = "green_bar.png";
$bar_essential[2]['right']['width'] = round(20 + min($max_bar_width,(($hhindex_D3000_3260 - 100)/$bar_minmax_size * 100)));} else {
$bar_essential[2]['left']['image'] = "red_bar.png";
$bar_essential[2]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D3000_3260)/$bar_minmax_size * 100)));}
if($hhindex_commit > 100)  {
$bar_essential[3]['right']['image'] = "green_bar.png";
$bar_essential[3]['right']['width'] = round(20 + min($max_bar_width,(($hhindex_commit - 100)/$bar_minmax_size * 100)));} else {
$bar_essential[3]['left']['image'] = "red_bar.png";
$bar_essential[3]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_commit)/$bar_minmax_size * 100)));}
// control
$bar_econtrol[0]['left']['image'] = "spacer.gif";
$bar_econtrol[0]['right']['image'] = "spacer.gif";
$bar_econtrol[1]['left']['image'] = "spacer.gif";
$bar_econtrol[1]['right']['image'] = "spacer.gif";
$bar_econtrol[2]['left']['image'] = "spacer.gif";
$bar_econtrol[2]['right']['image'] = "spacer.gif";
$bar_econtrol[3]['left']['image'] = "spacer.gif";
$bar_econtrol[3]['right']['image'] = "spacer.gif";
$bar_econtrol[4]['left']['image'] = "spacer.gif";
$bar_econtrol[4]['right']['image'] = "spacer.gif";
$bar_econtrol[5]['left']['image'] = "spacer.gif";
$bar_econtrol[5]['right']['image'] = "spacer.gif";
$bar_econtrol[6]['left']['image'] = "spacer.gif";
$bar_econtrol[6]['right']['image'] = "spacer.gif";
$bar_econtrol[7]['left']['image'] = "spacer.gif";
$bar_econtrol[7]['right']['image'] = "spacer.gif";
$bar_econtrol[8]['left']['image'] = "spacer.gif";
$bar_econtrol[8]['right']['image'] = "spacer.gif";
$bar_econtrol[0]['left']['width'] = $max_bar_width;
$bar_econtrol[0]['right']['width'] = $max_bar_width;
$bar_econtrol[1]['left']['width'] = $max_bar_width;
$bar_econtrol[1]['right']['width'] = $max_bar_width;
$bar_econtrol[2]['left']['width'] = $max_bar_width;
$bar_econtrol[2]['right']['width'] = $max_bar_width;
$bar_econtrol[3]['left']['width'] = $max_bar_width;
$bar_econtrol[3]['right']['width'] = $max_bar_width;
$bar_econtrol[4]['left']['width'] = $max_bar_width;
$bar_econtrol[4]['right']['width'] = $max_bar_width;
$bar_econtrol[5]['left']['width'] = $max_bar_width;
$bar_econtrol[5]['right']['width'] = $max_bar_width;
$bar_econtrol[6]['left']['width'] = $max_bar_width;
$bar_econtrol[6]['right']['width'] = $max_bar_width;
$bar_econtrol[7]['left']['width'] = $max_bar_width;
$bar_econtrol[7]['right']['width'] = $max_bar_width;
$bar_econtrol[8]['left']['width'] = $max_bar_width;
$bar_econtrol[8]['right']['width'] = $max_bar_width;
if($hhindex_D2200_2230 > 100)  {
$bar_econtrol[0]['right']['image'] = "green_bar.png";
$bar_econtrol[0]['right']['width'] = 20 + ($hhindex_D2200_2230 - 100)/$bar_minmax_size * 100; 
$bar_econtrol[0]['right']['width'] = min($max_bar_width,$bar_econtrol[0]['right']['width']);
} else {
$bar_econtrol[0]['left']['image'] = "red_bar.png";
$bar_econtrol[0]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D2200_2230)/$bar_minmax_size * 100)));}
if($hhindex_D2240_2244 > 100)  {
$bar_econtrol[1]['right']['image'] = "green_bar.png";
$bar_econtrol[1]['right']['width'] = 20 + ($hhindex_D2240_2244 - 100)/$bar_minmax_size * 100; 
$bar_econtrol[1]['right']['width'] = min($max_bar_width,$bar_econtrol[1]['right']['width']);} else {
$bar_econtrol[1]['left']['image'] = "red_bar.png";
$bar_econtrol[1]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D2240_2244)/$bar_minmax_size * 100)));}
if($hhindex_D2270_2300 > 100)  {
$bar_econtrol[2]['right']['image'] = "green_bar.png";
$bar_econtrol[2]['right']['width'] = 20 + ($hhindex_D2270_2300 - 100)/$bar_minmax_size * 100; 
$bar_econtrol[2]['right']['width'] = min($max_bar_width,$bar_econtrol[2]['right']['width']);} else {
$bar_econtrol[2]['left']['image'] = "red_bar.png";
$bar_econtrol[2]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D2270_2300)/$bar_minmax_size * 100)));}
if($hhindex_D2500_2730 > 100)  {
$bar_econtrol[3]['right']['image'] = "green_bar.png";
$bar_econtrol[3]['right']['width'] = 20 + ($hhindex_D2500_2730 - 100)/$bar_minmax_size * 100; 
$bar_econtrol[3]['right']['width'] = min($max_bar_width,$bar_econtrol[3]['right']['width']);} else {
$bar_econtrol[3]['left']['image'] = "red_bar.png";
$bar_econtrol[3]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D2500_2730)/$bar_minmax_size * 100)));}
if($hhindex_D2800_2975 > 100)  {
$bar_econtrol[4]['right']['image'] = "green_bar.png";
$bar_econtrol[4]['right']['width'] = 20 + ($hhindex_D2800_2975 - 100)/$bar_minmax_size * 100; 
$bar_econtrol[4]['right']['width'] = min($max_bar_width,$bar_econtrol[4]['right']['width']);} else {
$bar_econtrol[4]['left']['image'] = "red_bar.png";
$bar_econtrol[4]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D2800_2975)/$bar_minmax_size * 100)));}
if($hhindex_D3300_3384 > 100)  {
$bar_econtrol[5]['right']['image'] = "green_bar.png";
$bar_econtrol[5]['right']['width'] = 20 + ($hhindex_D3300_3384 - 100)/$bar_minmax_size * 100; 
$bar_econtrol[5]['right']['width'] = min($max_bar_width,$bar_econtrol[5]['right']['width']);} else {
$bar_econtrol[5]['left']['image'] = "red_bar.png";
$bar_econtrol[5]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D3300_3384)/$bar_minmax_size * 100)));}
if($hhindex_D3500_3580 > 100)  {
$bar_econtrol[6]['right']['image'] = "green_bar.png";
$bar_econtrol[6]['right']['width'] = 20 + ($hhindex_D3500_3580 - 100)/$bar_minmax_size * 100; 
$bar_econtrol[6]['right']['width'] = min($max_bar_width,$bar_econtrol[6]['right']['width']);} else {
$bar_econtrol[6]['left']['image'] = "red_bar.png";
$bar_econtrol[6]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D3500_3580)/$bar_minmax_size * 100)));}
$temp_var_index = ($hhaD4300_4340c + $hhaD4400_4470c) / ($hhcan_D4300_4340 + $hhcan_D4400_4470) *100;
if($temp_var_index > 100)  {
$bar_econtrol[7]['right']['image'] = "green_bar.png";
$bar_econtrol[7]['right']['width'] = 20 + ($temp_var_index - 100)/$bar_minmax_size * 100; 
$bar_econtrol[7]['right']['width'] = min($max_bar_width,$bar_econtrol[7]['right']['width']);} else {
$bar_econtrol[7]['left']['image'] = "red_bar.png";
$bar_econtrol[7]['left']['width'] = round(20 + min($max_bar_width,((100-$temp_var_index)/$bar_minmax_size * 100)));}
if($hhindex_can_purchases > 100)  {
$bar_econtrol[8]['right']['image'] = "green_bar.png";
$bar_econtrol[8]['right']['width'] = 20 + ($hhindex_can_purchases - 100)/$bar_minmax_size * 100; 
$bar_econtrol[8]['right']['width'] = min($max_bar_width,$bar_econtrol[8]['right']['width']);} else {
$bar_econtrol[8]['left']['image'] = "red_bar.png";
$bar_econtrol[8]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_can_purchases)/$bar_minmax_size * 100)));}
$bar_discr[0]['left']['image'] = "spacer.gif";
$bar_discr[0]['right']['image'] = "spacer.gif";
$bar_discr[1]['left']['image'] = "spacer.gif";
$bar_discr[1]['right']['image'] = "spacer.gif";
$bar_discr[2]['left']['image'] = "spacer.gif";
$bar_discr[2]['right']['image'] = "spacer.gif";
$bar_discr[3]['left']['image'] = "spacer.gif";
$bar_discr[3]['right']['image'] = "spacer.gif";
$bar_discr[4]['left']['image'] = "spacer.gif";
$bar_discr[4]['right']['image'] = "spacer.gif";
$bar_discr[5]['left']['image'] = "spacer.gif";
$bar_discr[5]['right']['image'] = "spacer.gif";
$bar_discr[6]['left']['image'] = "spacer.gif";
$bar_discr[6]['right']['image'] = "spacer.gif";
$bar_discr[0]['left']['width'] = $max_bar_width;
$bar_discr[0]['right']['width'] = $max_bar_width;
$bar_discr[1]['left']['width'] = $max_bar_width;
$bar_discr[1]['right']['width'] = $max_bar_width;
$bar_discr[2]['left']['width'] = $max_bar_width;
$bar_discr[2]['right']['width'] = $max_bar_width;
$bar_discr[3]['left']['width'] = $max_bar_width;
$bar_discr[3]['right']['width'] = $max_bar_width;
$bar_discr[4]['left']['width'] = $max_bar_width;
$bar_discr[4]['right']['width'] = $max_bar_width;
$bar_discr[5]['left']['width'] = $max_bar_width;
$bar_discr[5]['right']['width'] = $max_bar_width;
$bar_discr[6]['left']['width'] = $max_bar_width;
$bar_discr[6]['right']['width'] = $max_bar_width;
if($hhindex_D3700_4190 > 100)  {
$bar_discr[0]['right']['image'] = "green_bar.png";
$bar_discr[0]['right']['width'] = 20 + ($hhindex_D3700_4190 - 100)/$bar_minmax_size * 100; 
$bar_discr[0]['right']['width'] = min($max_bar_width,$bar_discr[0]['right']['width']);} else {
$bar_discr[0]['left']['image'] = "red_bar.png";
$bar_discr[0]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D3700_4190)/$bar_minmax_size * 100)));}
if($hhindex_D4500_4540 > 100)  {
$bar_discr[1]['right']['image'] = "green_bar.png";
$bar_discr[1]['right']['width'] = 20 + ($hhindex_D4500_4540 - 100)/$bar_minmax_size * 100; 
$bar_discr[1]['right']['width'] = min($max_bar_width,$bar_discr[1]['right']['width']);} else {
$bar_discr[1]['left']['image'] = "red_bar.png";
$bar_discr[1]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D4500_4540)/$bar_minmax_size * 100)));}
if($hhindex_otherhhops > 100)  {
$bar_discr[2]['right']['image'] = "green_bar.png";
$bar_discr[2]['right']['width'] = 20 + ($hhindex_otherhhops - 100)/$bar_minmax_size * 100; 
$bar_discr[2]['right']['width'] = min($max_bar_width,$bar_discr[2]['right']['width']);} else {
$bar_discr[2]['left']['image'] = "red_bar.png";
$bar_discr[2]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_otherhhops)/$bar_minmax_size * 100)));}	
if($hhindex_otherexpenses > 100)  {
$bar_discr[3]['right']['image'] = "green_bar.png";
$bar_discr[3]['right']['width'] = 20 + ($hhindex_otherexpenses - 100)/$bar_minmax_size * 100; 
$bar_discr[3]['right']['width'] = min($max_bar_width,$bar_discr[3]['right']['width']);} else {
$bar_discr[3]['left']['image'] = "red_bar.png";
$bar_discr[3]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_otherexpenses)/$bar_minmax_size * 100)));}	
if($hhindex_D2340_2370 > 100)  {
$bar_discr[4]['right']['image'] = "green_bar.png";
$bar_discr[4]['right']['width'] = 20 + ($hhindex_D2340_2370 - 100)/$bar_minmax_size * 100; 
$bar_discr[4]['right']['width'] = min($max_bar_width,$bar_discr[4]['right']['width']);} else {
$bar_discr[4]['left']['image'] = "red_bar.png";
$bar_discr[4]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_D2340_2370)/$bar_minmax_size * 100)));}
if($hhindex_discretionary > 100)  {
$bar_discr[5]['right']['image'] = "green_bar.png";
$bar_discr[5]['right']['width'] = 20 + ($hhindex_discretionary- 100)/$bar_minmax_size * 100; 
$bar_discr[5]['right']['width'] = min($max_bar_width,$bar_discr[5]['right']['width']);} else {
$bar_discr[5]['left']['image'] = "red_bar.png";
$bar_discr[5]['left']['width'] = round(20 + min($max_bar_width,((100-$hhindex_discretionary)/$bar_minmax_size * 100)));}
?>          
<div class="no_print"></div>
<div class="print_pages" align="left">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td width="900" height="92" colspan="2" padding-right:""><table width="896" height="63"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="113" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
<td width="414" height="63" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="312" align="right" valign="middle"><strong class="stitle">SPENDING</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td colspan="2" align="center"><span class="style11">Total dollar spend per household, in the trade area is $<?php echo number_format($hhb_consume); ?> 
</span><span class=" psub1 style1"><br />
</span><span class="style7">$<?php echo number_format(abs($hhdiff_consume)); if ($hhdiff_consume > 0) echo " higher"; else echo " lower"; ?> than the benchmark average of $<?php echo number_format($hha_consume); ?></span></td>
</tr>
<tr>
<td colspan="2" align="left"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
<tr>
<td width="33%" height="383" align="center" valign="top"><table width='95%' class='pborder1'>
<tr>
<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td height="40" align='center' class="style13">Essential Spending</td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><img src="activities/house_mid.jpg" width="200" height="200" alt="house" /></td>
</tr>
<tr>
<td height ='20'><blockquote>
<p class="pbody">&#8226; Housing<br />
&#8226; Food<br />
&#8226; Transportation </p>
</blockquote></td>
</tr>
<tr>
<td height ='75' class="pbodyemp" >&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhbcommit); ?> market area<br />
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhacommit); ?> Benchmark <br />
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiffcommit); ?> difference</td>
</tr>
</table></td>
</tr>
</table></td>
<td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
<tr>
<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td height="40" align='center' class="style13">Controllable Spending</td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><img src="activities/clothing1.jpg" width="200" height="200" alt="clothes" /></td>
</tr>
<tr>
<td height ='20'><blockquote>
<p class="pbody">&#8226; Clothing<br />
&#8226; Household Expenses<br />
&#8226; Health Care</p>
</blockquote></td>
</tr>
<tr>
<td height ='75' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_purchases); ?> market area<br />
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhcan_purchases); ?> Benchmark<br />
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiff_purchases); ?> difference</strong></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
<tr>
<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td height="40" align='center' class="style13">Discretionary Spending</td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><img src="activities/activity.png" width="200" height="200" alt="activity" /></td>
</tr>
<tr>
<td height ='20'><blockquote>
<p class="pbody">&#8226; Recreation<br />
&#8226; Household Items<br />
&#8226; Gardening</p>
</blockquote></td>
</tr>
<tr>
<td height ='75' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhmarket_discretionary); ?> market area<br />
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhcan_discretionary); ?> Benchmark<br />
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiff_discretionary); ?> difference</strong></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table><span class="pbody12">Market area compard to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="no_print"></div>
<div class="print_pages align="center"">
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
<td width="900" height="76" colspan="2" padding-right:""><table width="895" height="62"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="15%" height="62" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="58%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="312" align="right" valign="middle"><strong class="stitle">ESSENTIAL</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td width="572" align="left" valign="top"><table width="95%" border="1" align="center" cellpadding="4"  cellspacing="0" class="pbody14">
<tr class="sgrey14">
<td width="250" height="30" align="left"  border ="4" bordercolor="#CCCCCC" class="sgrey14"><div style="padding-left:14px"><strong class="pbodyemp">Essential Expenses</strong></div></td>
</tr>
<tr>
<td height="65" align="left" class="pbody14"><table width="505" border="1" cellspacing="0" cellpadding="1">
<tr>
<td width="175" style="padding-left:14px;" valign="middle">Shelter</td>
<td width="175" height="40" align="right" valign="middle"><img src=<?php echo $bar_essential[0]['left']['image'];?> width="<?php echo round($bar_essential[0]['left']['width']);?>" height="30" alt="index" /></td>
<td width="175" height="40" align="left" valign="middle"><img src=<?php echo $bar_essential[0]['right']['image'];?> width="<?php echo round($bar_essential[0]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="65" align="left" class="pbody14"><table width="505" border="1" cellspacing="0" cellpadding="1">
<tr>
<td width="175" style="padding-left:14px;" valign="middle">Groceries &amp; Restaurant</td>
<td width="175" height="40" align="right" valign="middle"><img src="<?php echo $bar_essential[1]['left']['image'];?>" width="<?php echo round($bar_essential[1]['left']['width']);?>" height="30" alt="index" /></td>
<td width="175" height="40" align="left" valign="middle"><img src="<?php echo $bar_essential[1]['right']['image'];?>" width="<?php echo round($bar_essential[1]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="65" align="left" class="pbody14"><table width="505" border="1" cellspacing="0" cellpadding="1">
<tr>
<td width="175" style="padding-left:14px;" valign="middle">Transportation &amp; Automotive</td>
<td width="175" height="40" align="right" valign="middle"><img src="<?php echo $bar_essential[2]['left']['image'];?>" width="<?php echo round($bar_essential[2]['left']['width']);?>" height="30" alt="index" /></td>
<td width="175" height="40" align="left" valign="middle"><img src="<?php echo $bar_essential[2]['right']['image'];?>" width="<?php echo round($bar_essential[2]['right']['width']);?>" height="30" alt="index" /><span class="sgrey14"></span></td>
</tr>
</table></td>
</tr>
<tr>
<td height="65" align="left" class="pbody14"><table width="505" border="1" cellspacing="0" cellpadding="1">
<tr>
<td width="175" align="left" valign="middle" class="style6">
<strong class="style6">
<div style="padding-left:14px;" class="pbodyemp" "style6">Total Essential Expenses<strong class="style6">                </div></td>
<td width="175" height="40" align="right" valign="middle"><img src="<?php echo $bar_essential[3]['left']['image'];?>" width="<?php echo round($bar_essential[3]['left']['width']);?>" height="30" alt="index" /></td>
<td width="175" height="40" align="left" valign="middle"><img src="<?php echo $bar_essential[3]['right']['image'];?>" width="<?php echo round($bar_essential[3]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table>
<table width="525" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="175" height="15" align="left" valign="middle">&nbsp;</td>
<td width="175" height="15" align="left" valign="middle" class="small_title"> <span class="small_title">min index</span></td>
<td width="175" height="15" align="right" valign="middle"><span class="small_title">max index</span></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="314" align="center" valign="top"><img src="activities/house_mid.jpg" width="300" height="300" alt="house" /></td>
</tr>
<tr>
<td height="185" colspan="2" align="center" valign="top"><table width="97%" border="1" align="center" cellpadding="3" cellspacing="0">
<tr>
<td width="224" class="style6"><strong class="style6">
<div style="padding-left:14px"  valign="middle"><strong class="pbodyemp">Per household average </strong></div>
</td>
<td width="212" align="center"><strong class="pbodyemp">Market Area Average</strong></td>
<td width="143" align="center"><strong class="pbodyemp">Benchmark  Average</strong></td>
<td width="123" align="center"><strong class="pbodyemp">Difference in $</strong></td>
<td width="130" align="center"><strong class="pbodyemp">Index</strong></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px"> Shelter</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2000_2070c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D2000_2070,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D2000_2070,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D2000_2070,0); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Groceries &amp; Restaurant</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD1000_1560c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D1000_1560,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D1000_1560,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D1000_1560,0); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Transportation &amp; Automotive</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD3000_3260c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D3000_3260,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D3000_3260,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D3000_3260); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbodyemp">Total Essential Expenses<strong class="style6"></td>
<td align="center" class="pbody14"><strong>$<?php echo number_format($hhbcommit,0); ?></strong></td>
<td align="center"><strong>$<?php echo number_format($hhcan_commit,0); ?></strong></td>
<td align="center"><strong>$<?php echo number_format($hhdiff_commit,0); ?></strong></td>
<td align="center"><strong><?php echo number_format($hhindex_commit); ?></strong></td>
</tr>
<tr>
<td colspan="5" ><span class="pbody12">Index = market area average per households to benchmark average (100 = base;</span><span class="pbody12">Market area compard to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table></td>
</tr>
</table>
</div>
<div class="print_pages align="center"">
<table width="900" border="0" cellspacing="0" cellpadding="5">
<tr>
<td width="900" height="68" colspan="2" padding-right:""><table width="893" height="58"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="15%" height="58" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
<td width="58%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="312" align="right" valign="middle"><strong class="stitle">CONTROLLABLE</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td width="66%" height="567" align="center" valign="top"><table width="870" height="524" border="1" align="center" cellpadding="2" cellspacing="0" class="pbody14">
<tr class="sgrey14">
<td height="140" colspan="6" class="pbody14"><img src="control_exp.png" width="100%" height="116" alt="control" /></td>
</tr>
<tr class="sgrey14">
<td width="158" height="35" align="center" class="pbodyemp">Controllable Expenses</td>
<td width="73" align="center" class="pbodyemp">Area average</td>
<td width="90" align="center" class="pbodyemp">Benchmark Average</td>
<td width="90" align="center" class="pbodyemp">Difference</td>
<td width="64" align="center" class="pbodyemp">Index</td>
<td width="350" align="center" class="sgrey14"><img src="spacer.gif" width="330" height="1" /></td>
</tr>
<tr>
<td height="30" class="pbody14" style="padding-left:14px">Telecom (Phone/Internet)</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2200_2230c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D2200_2230,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D2200_2230,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D2200_2230); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[0]['left']['image'];?>" width="<?php echo round($bar_econtrol[0]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[0]['right']['image'];?>" width="<?php echo round($bar_econtrol[0]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" class="pbody14" style="padding-left:14px">Child Care</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2240_2244c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D2240_2244,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D2240_2244,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D2240_2244); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[1]['left']['image'];?>" width="<?php echo round($bar_econtrol[1]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[1]['right']['image'];?>" width="<?php echo round($bar_econtrol[1]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" class="pbody14" style="padding-left:14px">Pet Expenses</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2270_2300c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D2270_2300,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D2270_2300,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D2270_2300); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[2]['left']['image'];?>" width="<?php echo round($bar_econtrol[2]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[2]['right']['image'];?>" width="<?php echo round($bar_econtrol[2]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" class="pbody14" style="padding-left:14px">Household Expenses</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2500_2730c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D2500_2730,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D2500_2730,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D2500_2730); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[3]['left']['image'];?>" width="<?php echo round($bar_econtrol[3]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[3]['right']['image'];?>" width="<?php echo round($bar_econtrol[3]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" class="pbody14" style="padding-left:14px">Clothing</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2800_2975c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D2800_2975,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D2800_2975,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D2800_2975); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[4]['left']['image'];?>" width="<?php echo round($bar_econtrol[4]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[4]['right']['image'];?>" width="<?php echo round($bar_econtrol[4]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" class="pbody14" style="padding-left:14px">Health Care &amp; Drug</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD3300_3384c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D3300_3384,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D3300_3384,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D3300_3384); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[5]['left']['image'];?>" width="<?php echo round($bar_econtrol[5]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[5]['right']['image'];?>" width="<?php echo round($bar_econtrol[5]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" class="pbody14" style="padding-left:14px">Personal Care</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD3500_3580c,0); ?></td>
<td align="center">$<?php echo number_format($hhcan_D3500_3580,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D3500_3580,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D3500_3580); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[6]['left']['image'];?>" width="<?php echo round($bar_econtrol[6]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[6]['right']['image'];?>" width="<?php echo round($bar_econtrol[6]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" class="pbody14" style="padding-left:14px">Education &amp; Reading</td>
<td align="center" class="pbody14">$<?php echo number_format(($hhaD4300_4340c + $hhaD4400_4470c),0); ?></td>
<td align="center">$<?php echo number_format(($hhcan_D4300_4340 + $hhcan_D4400_4470),0); ?></td>
<td align="center">$<?php echo number_format(($hhaD4300_4340c + $hhaD4400_4470c-$hhcan_D4300_4340 - $hhcan_D4400_4470),0); ?></td>
<td align="center"><?php echo number_format(($hhaD4300_4340c + $hhaD4400_4470c) / ($hhcan_D4300_4340 + $hhcan_D4400_4470) *100, 0); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[7]['left']['image'];?>" width="<?php echo round($bar_econtrol[7]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[7]['right']['image'];?>" width="<?php echo round($bar_econtrol[7]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td height="36" class="pbody14" style="padding-left:14px"><strong class="pbodyemp">Total Controllable </strong></td>
<td align="center" class="pbody14"><strong>$<?php echo number_format($hhb_purchases,0); ?></strong></td>
<td align="center"><strong>$<?php echo number_format($hhcan_purchases,0); ?></strong></td>
<td align="center"><strong>$<?php echo number_format($hhdiff_can_purchases,0); ?></strong></td>
<td align="center"><strong><?php echo number_format($hhindex_can_purchases); ?></strong></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_econtrol[8]['left']['image'];?>" width="<?php echo round($bar_econtrol[8]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_econtrol[8]['right']['image'];?>" width="<?php echo round($bar_econtrol[8]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
</table><span class="pbody12" style="padding-left:14px">Market area compard to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="no_print"></div>
<div class="print_pages align="center"">
<table width="900" border="0" cellspacing="2" cellpadding="5">
<td width="125" height="60"  padding-right:"5" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
<td width="58%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="312" align="right" valign="middle"><strong class="stitle"><strong class="pheading">DISCRETIONARY</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td width="66%" align="center" valign="top"><table width="870" border="" align="center" cellpadding="3" cellspacing="0" class="pbody14">
<tr class="sgrey14">
<td height="35" colspan="6" class="pbody14"><img src="spending1_cover.png" width="100%" height="250" alt="spending" /></td>
</tr>
<tr class="sgrey14">
<td width="148" height="52" align="center" class="sgrey14"><div style="padding-left:14px"><strong class="pbodyemp">Discretionary Expenses</strong></div></td>
<td width="64" align="center" class="pbodyemp">Area Average</td>
<td width="90" align="center" class="pbodyemp">Benchmark Average</td>
<td width="90" align="center" class="pbodyemp">Difference</td>
<td width="64" align="center" class="pbodyemp">Index</td>
<td width="350" align="center" class="sgrey14"><img src="spacer.gif" width="330" height="1" /></td>
</tr>
<tr>
<td style="padding-left:14px" >Recreation</td>
<td align="center">$<?php echo number_format($hhaD3700_4190c); ?></td>
<td align="center">$<?php echo number_format($hhcan_D3700_4190,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D3700_4190,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D3700_4190); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_discr[0]['left']['image'];?>" width="<?php echo round($bar_discr[0]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_discr[0]['right']['image'];?>" width="<?php echo round($bar_discr[0]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td style="padding-left:14px">Tobacco &amp; Alcohol</td>
<td align="center">$<?php echo number_format($hhaD4500_4540c); ?></td>
<td align="center">$<?php echo number_format($hhcan_D4500_4540,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D4500_4540,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D4500_4540,0); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_discr[1]['left']['image'];?>" width="<?php echo round($bar_discr[1]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_discr[1]['right']['image'];?>" width="<?php echo round($bar_discr[1]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td style="padding-left:14px">Gardening Supplies</td>
<td align="center">$<?php echo number_format($hhaD2340_2370c); ?></td>
<td align="center">$<?php echo number_format($hhcan_D2340_2370,0); ?></td>
<td align="center">$<?php echo number_format($hhdiff_D2340_2370,0); ?></td>
<td align="center"><?php echo number_format($hhindex_D2340_2370); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_discr[4]['left']['image'];?>" width="<?php echo round($bar_discr[4]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_discr[4]['right']['image'];?>" width="<?php echo round($bar_discr[4]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td style="padding-left:14px">Other expenses</td>
<td align="center">$<?php echo number_format($hhb_other_hh_ops); ?></td>
<td align="center">$<?php echo number_format($hhcan_otherexpenses,0); ?></td>
<td align="center">$<?php echo number_format($hhb_other_hh_ops - $hhcan_otherexpenses,0); ?></td>
<td align="center"><?php echo number_format($hhindex_otherexpenses); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_discr[3]['left']['image'];?>" width="<?php echo round($bar_discr[3]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_discr[3]['right']['image'];?>" width="<?php echo round($bar_discr[3]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
<tr>
<td ><div style="padding-left:14px" class="pbodyemp">Total Discretionary Expenses</div></td>
<td align="center"><strong>$<?php echo number_format($hhmarket_discretionary); ?></strong></td>
<td align="center">$<?php echo number_format($hhcan_discretionary,0); ?></td>
<td align="center">$<?php echo number_format($hhmarket_discretionary - $hhcan_discretionary,0); ?></td>
<td align="center"><?php echo number_format(($hhmarket_discretionary)/$hhcan_discretionary *100); ?></td>
<td align="center"><table width="350" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="162" height="30" align="right" valign="middle"><img src="<?php echo $bar_discr[5]['left']['image'];?>" width="<?php echo round($bar_discr[5]['left']['width']);?>" height="30" alt="index" /></td>
<td width="2" align="right" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
<td width="162" height="30" align="left" valign="middle"><img src="<?php echo $bar_discr[5]['right']['image'];?>" width="<?php echo round($bar_discr[5]['right']['width']);?>" height="30" alt="index" /></td>
</tr>
</table></td>
</tr>
</table><span class="pbody12">Market area compard to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="no_print"></div>
<div class="print_pages align="center"">
<table width="900" height="658" border="0" align="center" cellpadding="2" cellspacing="1">
<tr>
<td width="900" height="73" colspan="2" padding-right:""><table width="888" height="67"border="0" cellspacing="" cellpadding="1">
<tr>
<td width="125" height="48"  padding-right:"5" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
<td width="58%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="312" align="right" valign="middle"><strong class="stitle">SPENDING</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td width="420" align="center" valign="top"><table width="415"height="398"  border="1" cellpadding="3" cellspacing="0" class="pbody14">
<tr>
<td width="225"><span class="pbodyemp" style="padding-left:14px">Essential Expenses</span></td>
<td width="164"><div align="center" class="pbodyemp">Market Area Average</div></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Shelter</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2000_2070c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Groceries &amp; Restaurant</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD1000_1560c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Transportation &amp; Automotive</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD3000_3260c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px"><strong class="pbodyemp">Total Essential Expenses</strong></td>
<td align="center" class="pbody14"><strong>$<?php echo number_format($hhbcommit); ?></strong></td>
</tr>
<tr>
<td class="pbody14" >&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px"><span class="pbodyemp">Controllable  Expenses</span></td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Telecom (Phone/Internet)</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2200_2230c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Child Care</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2240_2244c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Pet Expenses</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2270_2300c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Household Expenses</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2500_2730c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Clothing</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD2800_2975c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Health Care &amp; Drug</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD3300_3384c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Personal Care</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD3500_3580c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Education &amp; Reading</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD4300_4340c + $hhaD4400_4470c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px"><strong class="pbodyemp">Total Controllable  Expenses</strong></td>
<td align="center" class="pbody14"><strong>$<?php echo number_format($hha_purchases); ?></strong></td>
</tr>
</table></td>
<td width="532" valign="top"><table width="457" border="1" cellpadding="0" cellspacing="0" class="pbody12">

<tr>
<td width="277"><span class="pbodyemp" style="padding-left:14px" >Discretionary Expenses</span></td>
<td width="174"><div align="center" class="pbodyemp">Market Area Average</div></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Recreation</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD3700_4190c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Tobacco &amp; Alcohol</td>
<td align="center" class="pbody14">$<?php echo number_format($hhaD4500_4540c); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Gardening Supplies</td>
<td align="center">$<?php echo number_format($hhaD2340_2370c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Other expenses</td>
<td align="center" class="pbody14">$<?php echo number_format($hhb_other_hh_ops); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px"><strong class="pbodyemp">Total Discretionary Expenses</strong></td>
<td align="center" class="pbody14"><strong>$<?php echo number_format($hhmarket_discretionary); ?></strong></td>
</tr>

</table></td>
</tr>
</table>
<div align="center"><span class="pbody12">Market area compard to 
  <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></div></td>
<div align="center">
  </tr>
  </table>
</div>
</div>
<div class="no_print"></div>


<div class="print_pages align="center"">
<td width="900" height="107" colspan="2" ><table width="897" height="61"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="113" height="61"  padding-right:"5" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="409" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="351" align="right" valign="middle"><strong class="stitle">THE HOUSEHOLD </strong></td>
</tr>
</table>
<table width="894" border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
<td width="298"><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Telecom</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/telco.jpg" width="250" height="125" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#99FFCC" class="style14">$<?php echo number_format($hhaD2200_2230c); ?> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#FFFFCC" class="style14">$<?php echo number_format($aD2200_2230c); ?> entire market</td>
</tr>
</table></td>
<td width="298"><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Child Care</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/ccare.jpg" width="250" height="125" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#99FFCC" class="style14">$<span class="style15"><?php echo number_format($hhaD2240_2244c); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#FFFFCC" class="style14">$<span class="style15"><?php echo number_format($aD2240_2244c ); ?></span> entire market</td>
</tr>
</table></td>
<td width="298"><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Pet Expenses</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/pets.jpg" width="250" height="125" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#99FFCC" class="style14">$<span class="style15"><?php echo number_format($hhaD2270_2300c ); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#FFFFCC" class="style14">$<span class="style15"><?php echo number_format($aD2270_2300c); ?></span> entire market</td>
</tr>
</table></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Gardening</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/garden.jpg" width="250" height="125" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#99FFCC" class="style14">$<span class="style15"><?php echo number_format($hhaD2340_2370c ); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#FFFFCC" class="style14">$<span class="style15"><?php echo number_format($aD2340_2370c ); ?></span> entire market</td>
</tr>
</table></td>
<td><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Furniture</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/furniture.jpg" width="250" height="125" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#99FFCC" class="style14">$<span class="style15"><?php echo number_format($hhaD2500_2730c ); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#FFFFCC" class="style14">$<span class="style15"><?php echo number_format($aD2500_2730c); ?></span> entire market</td>
</tr>
</table></td>
<td><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top">Vehicle Operations</td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/gas.jpg" width="250" height="125" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#99FFCC" class="style14">$<span class="style15"><?php echo number_format($hhaD3050_3130c); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#FFFFCC" class="style14">$<span class="style15"><?php echo number_format($aD3050_3130c); ?></span> entire market</td>
</tr>

</table></td>
</tr>
</table>
<div align="center"><span class="pbody12">Market area compard to 
  <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></div></td>
<div align="center">
  </tr>
  </table>
</div>
</div>
<div class="no_print"></div>
<div class="print_pages align="center"">
<td width="900" height="107" colspan="2" ><table width="897" height="62"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="125" height="62"  padding-right:"5" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="54%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="312" align="right" valign="middle"><strong class="stitle">GOODS</strong></td>
</tr>
</table>
<table width="906" border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
<td width="212"><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Appliances</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/appliance.jpg" width="210" height="105" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#00FFFF" class="style14">$<span class="style15"><?php echo number_format($hhaD2540_2680c); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#EEDEEE" class="style14">$<span class="style15"><?php echo number_format($aD2540_2680c); ?></span>  market</td>
</tr>
</table></td>
<td width="212"><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Tools</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/tools.jpg" width="210" height="105" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#00FFFF" class="style14">$<span class="style15"><?php echo number_format($hhaD2600_2602c); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#EEDEEE" class="style14">$<span class="style15"><?php echo number_format($aD2600_2602c); ?></span> market</td>
</tr>
</table></td>
<td width="212"><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Lawn/Snow Equipment</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/snow.jpg" width="210" height="105" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#00FFFF" class="style14">$<span class="style15"><?php echo number_format($hhaD2610_2630c); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#EEDEEE" class="style14">$<span class="style15"><?php echo number_format($aD2610_2630c); ?></span> market</td>
</tr>
</table></td>
<td width="212"><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Computers</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/computer.jpg" width="210" height="105" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#00FFFF" class="style14">$<span class="style15"><?php echo number_format($hhaD3750_3760c ); ?> </span>per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#EEDEEE" class="style14">$<span class="style15"><?php echo number_format($aD3750_3760c ); ?></span> market</td>
</tr>
</table></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Sports Equipment</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/sports220.jpg" width="210" height="105" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#00FFFF" class="style14">$<span class="style15"><?php echo number_format($hhaD3700_3830c ); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#EEDEEE" class="style14">$<span class="style15"><?php echo number_format($aD3700_3830c ); ?></span> market</td>
</tr>
</table></td>
<td><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Toys</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/toys.jpg" width="210" height="105" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#00FFFF" class="style14">$<span class="style15"><?php echo number_format($hhaD3720c ); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#EEDEEE" class="style14">$<span class="style15"><?php echo number_format($aD3720c ); ?></span> market</td>
</tr>
</table></td>
<td><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Home Entertainment</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/entertain.jpg" width="210" height="105" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#00FFFF" class="style14">$<span class="style15"><?php echo number_format($hhaD4000_4070c ); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#EEDEEE" class="style14">$<span class="style15"><?php echo number_format($aD4000_4070c ); ?></span> market</td>
</tr>
</table></td>
<td><table width="95%" height = "200" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><span class="style2">Car Payments</span></td>
</tr>
<tr>
<td align="center" valign="top"><img src="img_250x125/car.jpg" width="210" height="105" alt="online" /></td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#00FFFF" class="style14">$<span class="style15"><?php echo number_format($hhaD3000_3004c ); ?></span> per household</td>
</tr>
<tr>
<td height="30" align="center" valign="middle" bgcolor="#EEDEEE" class="style14">$<span class="style15"><?php echo number_format($aD3000_3004c ); ?></span> market</td>
</tr>
</table></td>
</tr>
</table>
</div>

<div class="no_print"> </div>
<div class="print_pages align="center"">
<td width="900" height="107" colspan="2" ><table width="897" height="65"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="125" height="65"  padding-right:"5" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="54%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="312" align="right" valign="middle"><strong class="stitle">MARKET SIZE</strong></td>
</tr>
</table>
<table width="865" border="1" align="center" cellpadding="3" cellspacing="0" class="pbody14">
<tr>
<td width="209" class="style2 pbody14"><strong class="pbodyemp">Household Expenses</strong></td>
<td width="196"><div align="center"><strong class="pbodyemp">5% market share</strong></div></td>
<td width="192"><div align="center"><strong class="pbodyemp">20% market share</strong></div></td>
<td width="229"><div align="center"><strong class="pbodyemp">Total Market Size</strong></div></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Telecom (phone/internet/cable)</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2200_2230c*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2200_2230c*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2200_2230c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Child care</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2240_2244c*.05 ); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2240_2244c*.25 ); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2240_2244c ); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Pet expenses</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2270_2300c*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2270_2300c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2270_2300c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Gardening</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2340_2370c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2340_2370c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2340_2370c ); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Furniture</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2500_2730c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2500_2730c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2500_2730c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Expenses for operating a vehicle </td>
<td align="center" class="pbody14">$<?php echo number_format($aD3050_3130c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3050_3130c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3050_3130c); ?></td>
</tr>
<tr>
<td class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td class="style2 pbody14" style="padding-left:14px"><strong class="pbodyemp">Household Goods</strong></td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Appliances</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2540_2680c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2540_2680c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2540_2680c); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Workshop tools</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2600_2602c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2600_2602c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2600_2602c); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Lawn/Snow equipment</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2610_2630c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2610_2630c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2610_2630c); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14" style="padding-left:14px">Computers &amp; supplies</td>
<td align="center" class="pbody14">$<?php echo number_format($aD3750_3760c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3750_3760c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3750_3760c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14">Recreational/Sports equipment</td>
<td align="center" class="pbody14">$<?php echo number_format($aD3700_3830c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3700_3830c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3700_3830c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14">Toys</td>
<td align="center" class="pbody14">$<?php echo number_format($aD3720c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3720c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3720c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14">Home entertainment </td>
<td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Vehicle leases / payments</td>
<td align="center" class="pbody14">$<?php echo number_format($aD3000_3004c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3000_3004c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3000_3004c ); ?></td>
</tr>
</table>
</div>
<div class="no_print"></div>
<div class="print_pages align="center"">
<td width="900" height="107" colspan="2" padding-right:""><table width="893" height="61"border="0" cellpadding="4" cellspacing="">
<tr>
<td width="113" height="61"  padding-right:"5" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="484" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="279" align="right" valign="middle"><strong class="stitle">MARKET SIZE</strong></td>
</tr>
</table>
<table width="865" border="1" align="center" cellpadding="3" cellspacing="0" class="pbody14">
<tr>
<td width="214"><span class="pbodyemp" style="padding-left:14px">Recreational Activities</span></td>
<td width="176"><div align="center"><strong class="pbodyemp">5% market share</strong></div></td>
<td width="192"><div align="center"><strong class="pbodyemp">20% market share</strong></div></td>
<td width="208"><div align="center"><strong class="pbodyemp">Total Market Size</strong></div></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Home Entertainment (tv, etc.)</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px"> Entertainment (going out)</td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4100_4140c)*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4100_4140c)*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4100_4140c)); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Use of recreational facilities</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4150_4170c*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4150_4170c*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4150_4170c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Package travel tours</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4180c*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4180c*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4180c); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Reading material</td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4300_4340c)*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4300_4340c)*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4300_4340c)); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Education</td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4400_4470c)*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4400_4470c)*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format(($aD4400_4470c)); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Games of chance</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4800_4840c*.05 ); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4800_4840c*.25 ); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4800_4840c ); ?></td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px">Sports equipment</td>
<td align="center" class="pbody14">$<?php echo number_format($aD3700c*.05 ); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3700c*.25 ); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3700c ); ?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td><span class="pbodyemp" style="padding-left:14px">Personal Care</span></td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td style="padding-left:14px">Total clothing</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2800_2975c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2800_2975c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2800_2975c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Women's clothing</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2800_2840c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2800_2840c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2800_2840c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Men's clothing</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2850_2890c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2850_2890c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2850_2890c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Children's clothing</td>
<td align="center" class="pbody14">$<?php echo number_format($aD2900_2920c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2900_2920c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD2900_2920c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Health care</td>
<td align="center" class="pbody14">$<?php echo number_format($aD3300_3384c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3300_3384c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3300_3384c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Personal care items</td>
<td align="center" class="pbody14">$<?php echo number_format($aD3500_3580c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3500_3580c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD3500_3580c ); ?></td>
</tr>
</table>
</div>
<div class="no_print"></div>
<div class="print_pages_last last_page align="center"">
<td width="900" height="107" colspan="2" padding-right:""><table width="898" height="62"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="125" height="62"  padding-right:"5" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="52%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="312" align="right" valign="middle"><strong class="stitle">MARKET SIZE</strong></td>
</tr>
</table>
<table width="865" border="1" align="center" cellpadding="1" cellspacing="0" class="pbody14" left: 80px;>
<tr>
<td width="191"><span class="pbodyemp" style="padding-left:14px" >Restaurant and Grocery</span></td>
<td width="159"><div align="center"><strong class="pbodyemp">5% market share</strong></div></td>
<td width="210"><div align="center"><strong class="pbodyemp">20% market share</strong></div></td>
<td width="190"><div align="center"><strong class="pbodyemp">Total Market Size</strong></div></td>
</tr>
<tr>
<td class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td class="pbody14" style="padding-left:14px" padding="45px";
>Total food</td>
<td align="center" class="pbody14">$<?php echo number_format($aD1000_1560c*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD1000_1560c*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD1000_1560c); ?></td>
</tr>
<tr>
<td  style="padding-left:14px" class="pbody14" cellspacing="1"> Food from restaurants</td>
<td align="center" class="pbody14">$<?php echo number_format(($aD1000_1560c-$bD1000_1520c)*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format(($aD1000_1560c-$bD1000_1520c)*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format(($aD1000_1560c-$bD1000_1520c)); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14" cellspacing="1">Food from stores</td>
<td align="center" class="pbody14">$<?php echo number_format($aD1000_1520c*.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD1000_1520c*.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD1000_1520c); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14" cellspacing="1">Alcohol from restaurants</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4520c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4520c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4520c); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14" cellspacing="1">Alcohol from stores</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4530c  *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4530c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4530c ); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14" cellspacing="1">Total alcohol and tobacco</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4500_4540c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4500_4540c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4500_4540c); ?></td>
</tr>
<tr>
<td class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14" cellspacing="1"><span class="pbodyemp">Financial </span></td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
<td align="center" class="pbody14">&nbsp;</td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14" cellspacing="1">Financial services</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4630_4660c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4630_4660c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4630_4660c); ?></td>
</tr>
<tr>
<td style="padding-left:14px" cellspacing="1" >Personal taxes</td>
<td align="center" class="pbody14">$<?php echo number_format($aD4900_4930c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4900_4930c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD4900_4930c); ?></td>
</tr>
<tr>
<td style="padding-left:14px">Personal insurance</td>
<td align="center" class="pbody14">$<?php echo number_format($aD5000_5084c *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD5000_5084c *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD5000_5084c); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14"cellspacing="1">Gifts of money</td>
<td align="center" class="pbody14">$<?php echo number_format($aD5200_5230c    *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD5200_5230c   *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD5200_5230c  ); ?></td>
</tr>
<tr>
<td style="padding-left:14px" class="pbody14" cellspacing="1">Donations to charity</td>
<td align="center" class="pbody14">$<?php echo number_format($aD5220_5230c   *.05); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD5220_5230c  *.25); ?></td>
<td align="center" class="pbody14">$<?php echo number_format($aD5220_5230c ); ?></td>
</tr>
</table>
</div>
   