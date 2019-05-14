
<style>

th,td{
text-align:center;
}
.print_pages_last {
    width: 910px;
    height: 645px !important;
    background: #fff;
    margin: 25px 0 0 0;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
    box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
    border-style: groove;
    border-width: 2px;
}
.print_pages {
page-break-after: avoid !important;
}
.lifestyle{
page-break-after: avoid !important;
}
@media print {
#lifestyle {
page-break-after: avoid !important;
page-break-before: avoid !important;
page-break-inside: avoid !important;
}
}
</style>
<div class="wrap-page">
<div class="print_pages" align="left"  style="padding-bottom: 0px;"> 
<table width="921" height="590" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="905" height="585" colspan="2"><table width="100%" height="548" border="0" cellspacing="0" cellpadding="5">
<tr>
<td height="80"><table width="885" border="0" cellspacing="0" cellpadding="2">
<tr>
<td width="135" height="68" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></td>
<td width="463"height="68" align="left" valign="top"><span class="black12"><strong class="psub2"> <?php echo $change_title; ?></strong><br />
<!--
</span><span class="pbody">
Target: <?php //echo $short_header; ?>
</span><br/>
<div class="tooltip1 pbody">
Click for Details
<span class="tooltiptext1">
Target Audience Selected<br><?php //echo $var1_fullname_string; ?>    </span></div>
-->
<span style="float: left;" class="pbody">Target Audience:</span>
<div style="float:left !important; margin-left: 5px;" class="tooltip1 pbody">
Click for Details
<span class="tooltiptext1">
<?php echo $var_click_details; ?>
</span>
</div>		
</td>
<td width="275" align="right" valign="top" ><strong class="stitle">SEGMENTATION </strong><br>
<a class="btn btn-primary btn-sm" onclick="detail_show3(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
&nbsp;<strong>View Details</strong>&nbsp;</a></td>
</tr>
</table></td>
</tr>
<tr>
<td height="65" align="center" valign="top" class="black18"><p><strong>

<?php 
if($segment_counter == 5){
   echo number_format($segment_counter-1);
 }
 else{
   echo number_format($segment_counter);
 } 
 ?>
 
 
  Vital segments identified representing <?php echo number_format($vitalsegment_p); ?>% of your target audience
<br> 
</strong >and <?php echo number_format($vitalsegment_c); ?>% of benchmark households (<b>Index <?php echo number_format($vitalsegment_p / $vitalsegment_c *100); ?></b>) </p></td>
</tr>
<tr>
<td height="395"><table width="100%" border="0" cellspacing="2" cellpadding="0">
<tr>
<td width="170" valign="top"><?php
if ($segment_counter >0) {
echo "
<table width='95%' class='Example_E1'>
<tr>
<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td align='center'><img src='" . $sorted_segment_picture[0] . ".jpg' width='150' height='150'></td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><strong>" . $sorted_segment_high[0] . "</strong></td>
</tr>
<tr>
<td height ='50' bgcolor='#e0e0e0'>" . $sorted_segment_percent[0] . "% of targets<br>" 
. $sorted_segment_benchmark[0] . "% of benchmark <br> <b>Index "
. $sorted_segment_index[0] . "</b><br>
</td>
</tr>
<tr>
<td height ='120' >". $sorted_segment_description[0] ."
</td>
</tr>
</table></td>
</tr>
</table>";               
} else {
echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?>      </td>
<td width="170" valign="top"><?php
if ($segment_counter >1) {
echo "
<table width='95%' class='Example_E1'>
<tr>
<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td align='center'><img src='" . $sorted_segment_picture[1] . ".jpg' width='150' height='150'></td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><strong>" . $sorted_segment_high[1] . "</strong></td>
</tr>
<tr>
<td height ='50' bgcolor='#e0e0e0'>" . $sorted_segment_percent[1] . "% of targets<br>" 
. $sorted_segment_benchmark[1] . "% of benchmark <br> <b>Index "
. $sorted_segment_index[1] . "</b><br>
</td>
</tr>
<tr>
<td height ='120' >". $sorted_segment_description[1] ."
</td>
</tr>
</table></td>
</tr>
</table>";               
} else {
echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?>      </td>
<td width="170" valign="top"><?php
if ($segment_counter >2) {
echo "
<table width='95%' class='Example_E1'>
<tr>
<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td align='center'><img src='" . $sorted_segment_picture[2] . ".jpg' width='150' height='150'></td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><strong>" . $sorted_segment_high[2] . "</strong></td>
</tr>
<tr>
<td height ='50' bgcolor='#e0e0e0'>" . $sorted_segment_percent[2] . "% of targets<br>" 
. $sorted_segment_benchmark[2] . "% of benchmark <br><b> Index "
. $sorted_segment_index[2] . "</b><br>
</td>
</tr>
<tr>
<td height ='120' >". $sorted_segment_description[2] ."
</td>
</tr>
</table></td>
</tr>
</table>";               
} else {
echo " <table width='95%'><tr><td>.</td></tr></table>"; }
?></td>
<td width="170" valign="top"><?php
if ($segment_counter >3) {
echo "
<table width='95%' class='Example_E1'>
<tr>
<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td align='center'><img src='" . $sorted_segment_picture[3] . ".jpg' width='150' height='150'></td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><strong>" . $sorted_segment_high[3] . "</strong></td>
</tr>
<tr>
<td height ='50' bgcolor='#e0e0e0'>" . $sorted_segment_percent[3] . "% of targets<br>" 
. $sorted_segment_benchmark[3] . "% of benchmark <br><b> Index "
. $sorted_segment_index[3] . "</b><br>
</td>
</tr>
<tr>
<td height ='120' >". $sorted_segment_description[3] ."
</td>
</tr>
</table></td>
</tr>
</table>";               
} 
?></td>
</tr>
</table></td>
</tr>
</table>
<span class="pbody12" style="margin-left: 5px;">Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table></td>
</tr>
</table>
<tr>
<td align="left" class="sgrey14">&nbsp;</td>
</tr>
</table>
</div>
</div>

<div class="noprint"><br /></div>

<div class=" print_pages" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="880" height="91" colspan="2" align="center"><table width="899"height="91" border="0" cellpadding="4" cellspacing="4">
<tr>
<td width="143" height="83" align="left" valign="top" style=" padding-top:4px; padding-left: 7px;"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></td>
<td width=354 align="left" valign="top"><span class="black12"><strong class="psub2"> <?php echo $change_title; ?></strong><br/>
</span>
<!--<span class="pbody">
Target: <?php //echo $short_header; ?>
</span><br/>
<div class="tooltip1 pbody">
Click for Details
<span class="tooltiptext1">
Target Audience Selected<br><?php //echo $var_click_details; ?>
</span>
</div>
-->
<span style="float: left;" class="pbody">Target Audience:</span>
<div style="float:left !important; margin-left: 5px;" class="tooltip1 pbody">
Click for Details
<span class="tooltiptext1">
<?php echo $var_click_details; ?>
</span>
</div>
</td>
<td width="362" align="right" valign="top" style="padding-top: 4px;   padding-right: 10px;"><strong class="stitle">HOUSEHOLD SPEND  </strong><br>
<a class="btn btn-primary btn-sm" onclick="detail_show4(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
&nbsp;<strong>View Details</strong>&nbsp;</a></td>
</tr>
</table></td>
</tr>
<tr>
<td colspan="2" align="center" class="black18" ><p><strong>$<?php echo number_format($hhb_consume); ?> Total dollar spend per households (target audience)</strong><br>
$<?php echo number_format(abs($hhdiff_consume)); if ($hhdiff_consume > 0) echo " higher"; else echo " lower"; ?> than the benchmark average of $ <?php echo number_format($hha_consume); ?></td>
</tr>
<tr>
<td colspan="2" align="left"><table width="100%" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="33%" height="346" align="center" valign="top"><table width='95%' class='pborder1'>
<tr>
<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td height="26" align='center' class="psub2"><strong>Essential Spending</strong></td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><img src="activities/house_mid.jpg" width="190" height="190" alt="house"></td>
</tr>
<tr>
<td height ='20'><blockquote>
<p class="pbody">&#8226; Housing<br>
&#8226; Food<br>
&#8226; Transportation </p>
</blockquote></td>
</tr>
<tr>
<td height ='57' class="pbodyemp" >&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhbcommit); ?><strong> target audience</strong ><br>
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhacommit); ?> benchmark <br>
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiffcommit); ?> difference</td>
</tr>
</table></td>
</tr>
</table></td>
<td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
<tr>
<td height="331"><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td height="25" align='center' class="psub2"><strong>Controllable Spending</strong></td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><img src="activities/clothing1.jpg" width="190" height="190" alt="clothes"></td>
</tr>
<tr>
<td height ='20'><blockquote>
<p class="pbody">&#8226; Clothing<br>
&#8226; Household Expenses<br>
&#8226; Health Care</p>
</blockquote></td>
</tr>
<tr>
<td height ='57' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_purchases); ?></strong><strong> target audience</strong ><strong class="pbodyemp"><br>
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hha_purchases); ?> benchmark<br>
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiff_purchases); ?> difference</strong></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
<tr>
<td><table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor="#FFFFFF">
<tr>
<td height="22" align='center' class="psub2"><strong>Discretionary Spending</strong></td>
</tr>
<tr>
<td align='center' height ='50' class='sgrey14'><img src="activities/activity.png" width="190" height="190" alt="activity"></td>
</tr>
<tr>
<td height ='20' border='transparent'><blockquote>
<p class="pbody">&#8226; Reacreation<br>
&#8226; Household Items<br>
&#8226; Gardening</p>
</blockquote></td>
</tr>
<tr>
<td height ='57' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhmarket_discretionary); ?></strong><strong> target audience</strong ><strong class="pbodyemp"><br>
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhcan_discretionary); ?> benchmark<br>
&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhmarket_discretionary - $hhcan_discretionary); ?> difference</strong></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table>
<span class="pbody12" style="margin-left: 10px;"><strong>Target audience</strong > compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="noprint"><br /></div>
<div class="print_pages" align="left">
<table width="103%" height="610" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="35%"><table height="74" border="0" cellspacing="0" cellpadding="4">
<tr>
<td width="138" height="48" align="left" valign="top" style=" padding-top:4px; padding-left: 7px;"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" /></td>
<td width="429" height="58" align="left" valign="top"><span class="black12"><strong class="psub2"> <?php echo $change_title; ?></strong><br />
</span>
<!--
<span class="pbody">
Target: <?php //echo $short_header; ?>
</span><br/>
<div class="tooltip1 pbody">
Click for Details
<span class="tooltiptext1">
Target Audience Selected<br><?php //echo $var_click_details; ?>
</span>
</div>-->
<span style="float: left;" class="pbody">Target Audience:</span>
<div style="float:left !important; margin-left: 5px;" class="tooltip1 pbody">
Click for Details
<span class="tooltiptext1">
<?php echo $var_click_details; ?>
</span>
</div>
</td>
<td valign="top" width="318" align="right"><strong class="stitle">MEDIA</strong><br>
<a class="btn btn-primary btn-sm" onclick="detail_show5(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
&nbsp;<strong>View Details</strong>&nbsp;</a></td>
</tr>
</table></td>
<tr>
<td height="30" align="center" class="black18" style="font-size: 1.25em !important;"><strong>Target Audience Media Usage    </strong ></td>
<?php // flyer augupdate
?>
</tr>
<tr>
<td>
<table width="97%" border="0" cellspacing="2" cellpadding="2">
<tr>
<td width="25%" height="407" align="center" valign="top"><table width="95%" height = "393" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><strong>Flyer</strong></td>
</tr>
<tr>
<td height="208" align="center" valign="top"><img src="image3/flyer.png" width="185" height="185" alt="online"></td>
</tr>
<tr>
<td height="30" align="center" valign="middle"><img src="image3/green0.png" width="25" height="15" alt="green">
<?php if ($index_flyer_heavy > 85) echo "<img src='image3/green1.png' width='25' height='15' alt='green'>";?>
<?php if ($index_flyer_heavy > 95) echo "<img src='image3/green2.png' width='25' height='15' alt='green'>";?>
<?php if ($index_flyer_heavy > 105) echo "<img src='image3/green3.png' width='25' height='15' alt='green'>";?>
<?php if ($index_flyer_heavy > 115) echo "<img src='image3/green4.png' width='25' height='15' alt='green'>";?>
<?php if ($index_flyer_heavy > 125) echo "<img src='image3/green5.png' width='25' height='15' alt='green'>";?></td>
</tr>
<tr>
<td valign="top"><strong>Target Audience: <?php echo number_format($pb_flyer_heavy); ?>%<br>
Benchmark: <?php echo number_format($canp_flyer_heavy); ?>% <br>
Index: <?php echo number_format($index_flyer_heavy); ?><br>
</strong>
<span class="style7">Heavy  users (occ + freq.read weekly)</span></td>
</tr>
</table>
</td>
<td width="25%" align="center" valign="top"><table width="95%" height = "391" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><strong>Online</strong></td>
</tr>
<tr>
<td height="208" align="center" valign="top"><img src="image3/online.jpg" width="185" height="185" alt="online"></td>
</tr>
<tr>
<td height="28" align="center" valign="middle">
<img src="image3/green0.png" width="25" height="15" alt="green"><?php if ($binternetindex > 85) echo "<img src='image3/green1.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 95) echo "<img src='image3/green2.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 105) echo "<img src='image3/green3.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 115) echo "<img src='image3/green4.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 125) echo "<img src='image3/green5.png' width='25' height='15' alt='green'>";?></td>
</tr>
<tr>
<td valign="top"><strong>Target Audience: <?php echo number_format($pinternet_high ); ?>%<br>
Benchmark: <?php echo number_format($canpinternet_high ); ?>%<br>
Index: <?php echo number_format($binternetindex ); ?><span class="sgrey14"><br>
</span></strong><span class="style13">
</span><span class="style7">Heavy  users (15+hours/week)</span></td>
</tr>
</table></td>
<td width="25%" align="center" valign="top"><table width="95%" height = "391" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35"valign="top"><strong>Newspaper</strong></td>
</tr>
<tr>
<td align="center" height="205" valign="top"><img src="image3/local_news.jpg" width="185" height="185" alt="news"></td>
</tr>
<tr>
<td height="31" align="center" valign="middle">
<img src="image3/green0.png" width="25" height="15" alt="green"><?php if ($bnpindex > 85) echo "<img src='image3/green1.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 95) echo "<img src='image3/green2.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 105) echo "<img src='image3/green3.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 115) echo "<img src='image3/green4.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 125) echo "<img src='image3/green5.png' width='25' height='15' alt='green'>";?></td>
</tr>
<tr>
<td valign="top"><strong>Target Audience:<?php echo number_format($pnp_high ); ?>%<br>
Benchmark: <?php echo number_format($canpnp_high ); ?>%<br>
Index: <?php echo number_format($bnpindex ); ?></strong><br>
<span class="style7">Heavy  readers (4+hours/week)</span></td>
</tr>
</table></td>
<td width="25%" align="center" valign="top">
<table width="95%" height = "392" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><strong>Radio</strong></td>
</tr>
<tr>
<td align="center" height="207" valign="top"><img src="image3/radio.jpg" width="185" height="185" alt="radio"></td>
</tr>
<tr>
<td height="30" align="center" valign="middle">
<img src="image3/green0.png" width="25" height="15" alt="green">
<?php if ($bradioindex > 85) echo "<img src='image3/green1.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 95) echo "<img src='image3/green2.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 105) echo "<img src='image3/green3.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 115) echo "<img src='image3/green4.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 125) echo "<img src='image3/green5.png' width='25' height='15' alt='green'>";?></td>
</tr>
<tr>
<td valign="top"><strong>Target Audience:<?php echo number_format($pradio_high ); ?>%<br>
Benchmark: <?php echo number_format($canpradio_high ); ?>%<br>
Index: <?php echo number_format($bradioindex ); ?></strong><br>
<span class="style7">Heavy  listeners (35+hours/week)</span></td>
</tr>
</table></td>
</tr>
</table>
<span class="pbody12" style="margin-left: 4px;"><strong>Target Audience</strong > compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>
</td>
</tr>
</table>
</div>
<div class="noprint"><br /></div>
<div class="print_pages_last last_page" align="left" >
<table width="100%" height="610" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="35%"><table width="912" height="73" border="0" cellspacing="0" cellpadding="4">
<tr>
<td width="132" height="73" align="left" valign="top" style=" padding-top:4px; padding-left: 10px;"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" /></td>
<td width="547" height="73" align="left" valign="top" style="padding-top:8px;"><span class="black12"><strong class="psub2"><?php echo $change_title; ?></strong><br />
</span>
<!--<span class="pbody">
Target: <?php //echo $short_header; ?>
</span><br/>
<div class="tooltip1 pbody">
<p>Click for Details</p>
<p><span class="tooltiptext1">
<?php //echo $var_click_details; ?>
</span>
</p>
</div>-->
<span style="float: left;" class="pbody">Target Audience:</span>
<div style="float:left !important; margin-left: 5px;" class="tooltip1 pbody">
Click for Details
<span class="tooltiptext1">
<?php echo $var_click_details; ?>
</span>
</div>
</td>
<td width="209" height="73" align="right" valign="top" style="padding-top: 4px;   padding-right: 15px;"><strong class="stitle">LIFESTYLE</strong><br />
<a class="btn btn-primary btn-sm" onclick="detail_show6(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
&nbsp;<strong>View Details</strong>&nbsp;</a></td>
</tr>
</table></td>
</tr>
<tr>
<td height="10" align="center" class="black18" style="margin-left: 4px;" ><div style="margin-top: -10px;" align="center"><strong> Top 8 Lifestyle Activities (out of 43) </strong> </div></td>
</tr>
<tr>
<td height="515" ><table width="97%"  border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
<td width="25%" height="250"  ><table width="95%" class="Example_E1" height="240">
<tr>
<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][0]; ?>" width="200" height="140" alt="rank1" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>1</strong></td>
<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][0]; ?></strong></span><br />
<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][0]); ?>%<br />
Index: <?php echo number_format($sorted_leisure['index'][0]); ?></span></td>
</tr>
</table></td>
<td width="25%" height="250"  ><table width="95%" class="Example_E1" height="240">
<tr>
<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][1]; ?>" width="200" height="140" alt="rank1" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>2</strong></td>
<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][1]; ?></strong></span><br />
<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][1]); ?>%<br />
Index: <?php echo number_format($sorted_leisure['index'][1]); ?></span></td>
</tr>
</table></td>
<td width="25%" height="250"  ><table width="95%" class="Example_E1" height="240">
<tr>
<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][2]; ?>" width="200" height="140" alt="rank3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>3</strong></td>
<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][2]; ?></strong></span><br />
<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][2]); ?>%<br />
Index: <?php echo number_format($sorted_leisure['index'][2]); ?></span></td>
</tr>
</table></td>
<td width="25%" height="250"  ><table width="95%" class="Example_E1" height="240">
<tr>
<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][3]; ?>" width="200" height="140" alt="rank3" /></td>
</tr>
<tr>

<td width="22%" class="sgrey50"><strong>4</strong></td>
<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][3]; ?></strong></span><br />
<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][3]); ?>%<br />
Index: <?php echo number_format($sorted_leisure['index'][3]); ?></span></td>
</tr>
</table></td>
</tr>
<tr>
<td width="25%" height="244"  ><table width="95%" class="Example_E1" height="240">
<tr>
<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][4]; ?>" width="200" height="140" alt="rank3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>5</strong></td>
<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][4]; ?></strong></span><br />
<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][4]); ?>%<br />
Index: <?php echo number_format($sorted_leisure['index'][4]); ?></span></td>
</tr>
</table></td>
<td width="25%" height="244"  ><table width="95%" class="Example_E1" height="240">
<tr>
<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][5]; ?>" width="200" height="140" alt="rank3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>6</strong></td>
<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][5]; ?></strong></span><br />
<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][5]); ?>%<br />
Index: <?php echo number_format($sorted_leisure['index'][5]); ?></span></td>
</tr>
</table></td>
<td width="25%" height="244"  ><table width="95%" class="Example_E1" height="240">
<tr>
<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][6]; ?>" width="200" height="140" alt="rank3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>7</strong></td>
<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][6]; ?></strong></span><br />
<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][6]); ?>%<br />
Index: <?php echo number_format($sorted_leisure['index'][6]); ?></span></td>
</tr>
</table></td>
<td width="25%" height="244"  ><table width="95%" class="Example_E1" height="240">
<tr>
<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][7]; ?>" width="200" height="140" alt="rank3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>8</strong></td>
<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][7]; ?></strong></span><br />
<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][7]); ?>%<br />
Index: <?php echo number_format($sorted_leisure['index'][7]); ?></span></td>



</tr>



</table></td>



</tr>



</table>



<span class="pbody12" style="margin-left: 4px;"><strong>Target Audience</strong > compard to 



<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>



</td>



</tr>



</table>



</div>
