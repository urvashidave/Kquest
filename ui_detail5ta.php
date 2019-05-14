<style>

th,td{text-align:center;}

.pbody14 {
font-family: Arial Narrow, Arial, Helvetica, sans-serif;
font-size: 12px;
font-weight: normal;
color: #000000;
}
.black16 
{ 
font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #333;
font-size: 16px;
font-weight: normal;
padding: 0 0 9px;
}
.media_image{
    -webkit-border-radius: 6px;
    border-radius: 6px;
	width:200px;
	height:125px;

}
@media print {
div.noprint {display:none;}


  }

  
  .sblue {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 18px !important;

}
.pbodyemp{padding-left:14px;}
.style11 {color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; font-weight: bold; }
.pbody14emp {
font-family: Arial Narrow, Arial, Helvetica, sans-serif;
font-size: 12px;
font-weight: bold;
color: #000000;
}
.ptest_fly {
-webkit-print-color-adjust: exact; 
font-family: Verdana, Geneva, sans-serif;
font-size: 36px;
font-weight: bold;
color: #F00;	
}
.style7 {font-size: 10px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; }
.black18 
{ 
font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #333;
font-size: 18px;
font-weight: normal;
padding: 0 0 9px;
}
</style>
<link href="master_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style10 {font-weight: normal; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}
.     {font-size: 12px; }
.style13 {font-size: 16px}
-->
</style>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="center"">
<table width="100%" height="604" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="35%" height="75"><table width="892" height="67" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="132" height="67" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="63" align="center" valign="middle" class="black16"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></td>
<td width="43%" align="right"><strong class="pheading">MEDIA</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<table width="868" height="464" border="0" align="center" cellpadding="0" cellspacing="5">
<tr>
<td width="25%" align="center" valign="top"><table width="99%" height = "415" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><strong>Flyers</strong></td>
</tr>
<tr>
<td height="220" align="center" valign="top"><img src="image3/flyer.png" width="185" height="185" alt="online" /></td>
</tr>
<tr>
<td height="40" align="center" valign="middle"><img src="green0.png" width="25" height="15" alt="green" />
<?php if ($index_flyer_heavy > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?>
<?php if ($index_flyer_heavy > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?>
<?php if ($index_flyer_heavy > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?>
<?php if ($index_flyer_heavy > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?>
<?php if ($index_flyer_heavy > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?></td>
</tr>
<tr>
<td valign="top"><span class="pbodyemp">Market Area: <?php echo number_format($pb_flyer_heavy); ?>%<br />
Benchmark: <?php echo number_format($canp_flyer_heavy); ?>% <br />
Index: <?php echo number_format($index_flyer_heavy); ?></span><strong><span class="sgrey14"><br />
</span></strong><br />
<span class="style7">Heavy  users (occ + freq. read weekly)</span></td>
</tr>
</table></td>
<td width="25%" align="center" valign="top"><table width="97%" height = "415" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><strong>Online</strong></td>
</tr>
<tr>
<td height="220" align="center" valign="top"><img src="image3/online.jpg" width="185" height="185" alt="online" /></td>
</tr>
<tr>
<td height="40" align="center" valign="middle">
<img src="green0.png" width="25" height="15" alt="green"><?php if ($binternetindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?></td>
</tr>
<tr>
<td valign="top"><span class="pbodyemp">Market Area: <?php echo number_format($pinternet_high ); ?>%<br>
Benchmark: <?php echo number_format($canpinternet_high ); ?>%<br>
Index: <?php echo number_format($binternetindex ); ?></span><strong><span class="sgrey14"><br>
</span></strong><br>
<span class="style7">Heavy  users (15+ hours / week)</span></td>
</tr>
</table></td>
<td width="25%" align="center" valign="top"><table width="95%" height = "415" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35"valign="top"><strong>Newspaper</strong></td>
</tr>
<tr>
<td align="center" height="220" valign="top"><img src="image3/local_news.jpg" width="185" height="185" alt="news"></td>
</tr>
<tr>
<td height="40" align="center" valign="middle">
<img src="green0.png" width="25" height="15" alt="green"><?php if ($bnpindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?>
</td>
</tr>
<tr>
<td valign="top"><span class="pbodyemp">Market Area: <?php echo number_format($pnp_high ); ?>%</span><br>
<span class="pbodyemp">Benchmark: <?php echo number_format($canpnp_high ); ?>%</span><br>
<span class="pbodyemp">Index</span>: <span class="pbodyemp"><?php echo number_format($bnpindex ); ?></span><br>
<br>
<span class="style7">Heavy  readers (4+ hours / week)</span></td>
</tr>
</table></td>
<td width="25%" align="center" valign="top">
<table width="95%" height = "415" class="Example_E1" border="0" cellspacing="0" cellpadding="2">
<tr class="sblue">
<td align="center" height = "35" valign="top"><strong>Radio</strong></td>
</tr>
<tr>
<td align="center" height="220" valign="top"><img src="image3/radio.jpg" width="185" height="185" alt="radio"></td>
</tr>
<tr>
<td height="40" align="center" valign="middle">
<img src="green0.png" width="25" height="15" alt="green">
<?php if ($bradioindex > 85) echo "<img src='green1.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 95) echo "<img src='green2.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 105) echo "<img src='green3.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 115) echo "<img src='green4.png' width='25' height='15' alt='green'>";?>
<?php if ($bradioindex > 125) echo "<img src='green5.png' width='25' height='15' alt='green'>";?></td>
</tr>
<tr>
<td valign="top"><span class="pbodyemp">Market Area: <?php echo number_format($pradio_high ); ?>%<br>
Benchmark: <?php echo number_format($canpradio_high ); ?>%<br>
Index: <?php echo number_format($bradioindex ); ?></span><br>
<br>
<span class="style7">Heavy  listeners (35+ hours/week)</span></td>
</tr>
</table></td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="center"">
<table width="100%" height="630" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="5%"><table width="892" height="67" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="125" height="67" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="63" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="375" align="right"><strong class="pheading">INTERNET SITES</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30"><div align="center" class="style11"> Market Area- Top 8 out of 43 sites (index compared to National average) age 15+</div></td>
</tr>
<tr>
<td height="525" ><table width="97%" border="0" align="center" cellpadding="8" cellspacing="0">
<tr>
<td width="25%" height="235" ><table width="100%" class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle" ><img class="media_image" src="<?php echo $sorted_internet3['image'][0]; ?>" alt="sorted internet sites rank 1" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>1</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_internet3['name'][0]; ?><br>
Visitors: <?php echo number_format($sorted_internet3['percent'][0]); ?>%<br>
Index: <?php echo number_format($sorted_internet3['index'][0]); ?></td>
</tr>
</table></td>
<td width="25%" height="235"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle" ><img class="media_image" src="<?php echo $sorted_internet3['image'][1]; ?>" alt="sorted internet sites rank 2" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>2</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_internet3['name'][1]; ?><br>
Visitors: <?php echo number_format($sorted_internet3['percent'][1]); ?>%<br>
Index: <?php echo number_format($sorted_internet3['index'][1]); ?></td>
</tr>
</table></td>
<td width="25%" height="235"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle" ><img class="media_image" src="<?php echo $sorted_internet3['image'][2]; ?>" alt="sorted internet sites rank 3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>3</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_internet3['name'][2]; ?><br>
Visitors: <?php echo number_format($sorted_internet3['percent'][2]); ?>%<br>
Index: <?php echo number_format($sorted_internet3['index'][2]); ?></td>
</tr>
</table></td>
<td width="25%" height="235"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle" ><img class="media_image" src="<?php echo $sorted_internet3['image'][3]; ?>" alt="sorted internet sites rank 4" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>4</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_internet3['name'][3]; ?><br>
Visitors: <?php echo number_format($sorted_internet3['percent'][3]); ?>%<br>
Index: <?php echo number_format($sorted_internet3['index'][3]); ?></td>
</tr>
</table></td>
</tr>
<tr>
<td width="25%" height="232"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_internet3['image'][4]; ?>" alt="sorted internet sites rank 5" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>5</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_internet3['name'][4]; ?><br>
Visitors: <?php echo number_format($sorted_internet3['percent'][4]); ?>%<br>
Index: <?php echo number_format($sorted_internet3['index'][4]); ?></td>
</tr>
</table></td>
<td width="25%" height="232"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle" ><img class="media_image" src="<?php echo $sorted_internet3['image'][5]; ?>" alt="sorted internet sites rank 6" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>6</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_internet3['name'][5]; ?><br>
Visitors: <?php echo number_format($sorted_internet3['percent'][5]); ?>%<br>
Index: <?php echo number_format($sorted_internet3['index'][5]); ?></td>
</tr>
</table></td>
<td width="25%" height="232"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle" ><img class="media_image" src="<?php echo $sorted_internet3['image'][6]; ?>" alt="sorted internet sites rank 7" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>7</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_internet3['name'][6]; ?><br>
Visitors: <?php echo number_format($sorted_internet3['percent'][6]); ?>%<br>
Index: <?php echo number_format($sorted_internet3['index'][6]); ?></td>
</tr>
</table></td>
<td width="25%" height="232"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_internet3['image'][7]; ?>" alt="sorted internet sites rank 8" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>8</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_internet3['name'][7]; ?><br>
Visitors: <?php echo number_format($sorted_internet3['percent'][7]); ?>%<br>
Index: <?php echo number_format($sorted_internet3['index'][7]); ?></td>
</tr>
</table></td>
</tr>
</table>        <span class="pbody12" style="margin-left: 10px;" >Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>

<div class="container row col-md-12 print_pages align="center"">
<table width="100%" height="610" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="35%"><table width="892" height="67" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="131" height="67" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="63" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="370" align="right"><strong class="pheading">NEWSPAPER</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td height="15"><div align="center" class="style11"> Market Area - Top 8 out of 11 radio genres (index compared to Benchmark) age 15+</div></td>
</tr>
<tr>
<td ><table width="97%" border="0" align="center" cellpadding="5" cellspacing="0">
<tr>
<td width="25%" height="253" ><table width="100%" class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media6['image'][0]; ?>" alt="sorted newspaper rank 1" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>1</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media6['name'][0]; ?><br>
Readers: <?php echo number_format($sorted_media6['percent'][0]); ?>%<br>
Index: <?php echo number_format($sorted_media6['index'][0]); ?></td>
</tr>
</table></td>
<td width="25%" height="253"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media6['image'][1]; ?>" alt="sorted newspaper rank 2" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>2</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media6['name'][1]; ?><br>
Readers: <?php echo number_format($sorted_media6['percent'][1]); ?>%<br>
Index: <?php echo number_format($sorted_media6['index'][1]); ?></td>
</tr>
</table></td>
<td width="25%" height="253"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media6['image'][2]; ?>" alt="sorted newspaper rank 3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>3</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media6['name'][2]; ?><br>
Readers: <?php echo number_format($sorted_media6['percent'][2]); ?>%<br>
Index: <?php echo number_format($sorted_media6['index'][2]); ?></td>
</tr>
</table></td>
<td width="25%" height="253"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media6['image'][3]; ?>" alt="sorted newspaper rank 4" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>4</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media6['name'][3]; ?><br>
Readers: <?php echo number_format($sorted_media6['percent'][3]); ?>%<br>
Index: <?php echo number_format($sorted_media6['index'][3]); ?></td>
</tr>
</table></td>
</tr>
<tr>
<td width="25%" height="255"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media6['image'][4]; ?>" alt="sorted newspaper rank 5" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>5</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media6['name'][4]; ?><br>
Readers: <?php echo number_format($sorted_media6['percent'][4]); ?>%<br>
Index: <?php echo number_format($sorted_media6['index'][4]); ?></td>
</tr>
</table></td>
<td width="25%" height="255"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media6['image'][5]; ?>" alt="sorted newspaper rank 6" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>6</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media6['name'][5]; ?><br>
Readers: <?php echo number_format($sorted_media6['percent'][5]); ?>%<br>
Index: <?php echo number_format($sorted_media6['index'][5]); ?></td>
</tr>
</table></td>
<td width="25%" height="255"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media6['image'][6]; ?>" alt="sorted newspaper rank 7" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>7</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media6['name'][6]; ?><br>
Readers: <?php echo number_format($sorted_media6['percent'][6]); ?>%<br>
Index: <?php echo number_format($sorted_media6['index'][6]); ?></td>
</tr>
</table></td>
<td width="25%" height="255"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media6['image'][7]; ?>" alt="sorted newspaper rank 8" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>8</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media6['name'][7]; ?><br>
Readers: <?php echo number_format($sorted_media6['percent'][7]); ?>%<br>
Index: <?php echo number_format($sorted_media6['index'][7]); ?></td>
</tr>
</table></td>
</tr>
</table>  <span class="pbody12" style="margin-left: 10px;" >Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span> </td>
</tr>
</table>
</div>

<div class="container row col-md-12 print_pages align="center"">
<table width="100%" height="610" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="35%"><table width="892" height="70" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="132" height="62" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="63" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="43%" align="right"><strong class="pheading">RADIO</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30"><div align="center" class="style11"> Market Area- Top 8 out of 11 radio genres (index compared to Benchmark average) age 15+</div></td>
</tr>
<tr>
<td ><table width="97%" border="0" align="center" cellpadding="8" cellspacing="0">
<tr>
<td width="25%" height="237" ><table width="100%" class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media2['image'][0]; ?>" alt="sorted radio rank 1" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>1</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media2['name'][0]; ?><br>
Listeners: <?php echo number_format($sorted_media2['percent'][0]); ?>%<br>
Index: <?php echo number_format($sorted_media2['index'][0]); ?></td>

</tr>
</table></td>
<td width="25%" height="237"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media2['image'][1]; ?>" alt="sorted radio rank 2" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>2</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media2['name'][1]; ?><br>
Listeners: <?php echo number_format($sorted_media2['percent'][1]); ?>%<br>
Index: <?php echo number_format($sorted_media2['index'][1]); ?></td>
</tr>
</table></td>
<td width="25%" height="237"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media2['image'][2]; ?>" alt="sorted radio rank 3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>3</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media2['name'][2]; ?><br>
Listeners: <?php echo number_format($sorted_media2['percent'][2]); ?>%<br>
Index: <?php echo number_format($sorted_media2['index'][2]); ?></td>
</tr>
</table></td>
<td width="25%" height="237"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media2['image'][3]; ?>" alt="sorted radio rank 4" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>4</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media2['name'][3]; ?><br>
Listeners: <?php echo number_format($sorted_media2['percent'][3]); ?>%<br>
Index: <?php echo number_format($sorted_media2['index'][3]); ?></td>
</tr>
</table></td>
</tr>
<tr>
<td width="25%" height="229"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media2['image'][4]; ?>" alt="sorted radio rank 5" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>5</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media2['name'][4]; ?><br>
Listeners: <?php echo number_format($sorted_media2['percent'][4]); ?>%<br>
Index: <?php echo number_format($sorted_media2['index'][4]); ?></td>
</tr>
</table></td>
<td width="25%" height="229"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media2['image'][5]; ?>" alt="sorted radio rank 6" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>6</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media2['name'][5]; ?><br>
Listeners: <?php echo number_format($sorted_media2['percent'][5]); ?>%<br>
Index: <?php echo number_format($sorted_media2['index'][5]); ?></td>
</tr>
</table></td>
<td width="25%" height="229"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media2['image'][6]; ?>" alt="sorted radio rank 7" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>7</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media2['name'][6]; ?><br>
Listeners: <?php echo number_format($sorted_media2['percent'][6]); ?>%<br>
Index: <?php echo number_format($sorted_media2['index'][6]); ?></td>
</tr>
</table></td>
<td width="25%" height="229"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media2['image'][7]; ?>" alt="sorted radio rank 8" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>8</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media2['name'][7]; ?><br>
Listeners: <?php echo number_format($sorted_media2['percent'][7]); ?>%<br>
Index: <?php echo number_format($sorted_media2['index'][7]); ?></td>
</tr>
</table></td>
</tr>
</table>     <span class="pbody12" style="margin-left: 8px;"  >Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="center"">
<table width="100%" height="610" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="35%"><table width="892" height="67" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="132" height="67" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="63" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="43%" align="right"><strong class="pheading">TELEVISION</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30"><div align="center" class="style11">Market Area - Top 8 out of 26 TV shows (index compared to Benchmark average) age 15+</div></td>
</tr>
<tr>
<td ><table width="97%" border="0" align="center" cellpadding="8" cellspacing="0">
<tr>
<td width="25%" height="235" ><table width="100%" class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media3['image'][0]; ?>" alt="sorted tv rank 1" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>1</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media3['name'][0]; ?><br>
Viewers: <?php echo number_format($sorted_media3['percent'][0]); ?>%<br>
Index: <?php echo number_format($sorted_media3['index'][0]); ?></td>
</tr>
</table></td>
<td width="25%" height="235"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media3['image'][1]; ?>" alt="sorted tv rank 2" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>2</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media3['name'][1]; ?><br>
Viewers: <?php echo number_format($sorted_media3['percent'][1]); ?>%<br>
Index: <?php echo number_format($sorted_media3['index'][1]); ?></td>
</tr>
</table></td>
<td width="25%" height="235"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media3['image'][2]; ?>" alt="sorted tv rank 3" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>3</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media3['name'][2]; ?><br>
Viewers: <?php echo number_format($sorted_media3['percent'][2]); ?>%<br>
Index: <?php echo number_format($sorted_media3['index'][2]); ?></td>
</tr>
</table></td>
<td width="25%" height="235"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media3['image'][3]; ?>" alt="sorted tv rank 4" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>4</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media3['name'][3]; ?><br>
Viewers: <?php echo number_format($sorted_media3['percent'][3]); ?>%<br>
Index: <?php echo number_format($sorted_media3['index'][3]); ?></td>
</tr>
</table></td>
</tr>
<tr>
<td width="25%" height="233"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media3['image'][4]; ?>" alt="sorted tv rank 5" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>5</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media3['name'][4]; ?><br>
Viewers: <?php echo number_format($sorted_media3['percent'][4]); ?>%<br>
Index: <?php echo number_format($sorted_media3['index'][4]); ?></td>
</tr>
</table></td>
<td width="25%" height="233"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media3['image'][5]; ?>" alt="sorted tv rank 6" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>6</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media3['name'][5]; ?><br>
Viewers: <?php echo number_format($sorted_media3['percent'][5]); ?>%<br>
Index: <?php echo number_format($sorted_media3['index'][5]); ?></td>
</tr>
</table></td>
<td width="25%" height="233"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media3['image'][6]; ?>" alt="sorted tv rank 7" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>7</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media3['name'][6]; ?><br>
Viewers: <?php echo number_format($sorted_media3['percent'][6]); ?>%<br>
Index: <?php echo number_format($sorted_media3['index'][6]); ?></td>
</tr>
</table></td>
<td width="25%" height="233"><table width="100%"  class="Example_E1">
<tr>
<td height="125" colspan="2" align="center" valign="middle"><img class="media_image" src="<?php echo $sorted_media3['image'][7]; ?>" alt="sorted tv rank 8" /></td>
</tr>
<tr>
<td width="22%" class="sgrey50"><strong>8</strong></td>
<td width="78%" class="pbody14"><?php echo $sorted_media3['name'][7]; ?><br>
Viewers: <?php echo number_format($sorted_media3['percent'][7]); ?>%<br>
Index: <?php echo number_format($sorted_media3['index'][7]); ?></td>
</tr>
</table></td>
</tr>
</table>        
<span class="pbody12" style="margin-left: 10px;" >Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="center""> 
<table width="100%" height="609" border="0" cellspacing="4" cellpadding="0">
<tr>
<td width="35%" height="75"><table width="892" height="70" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="132" height="62" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="63" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="43%" align="right"><span class="pheading">FLYERS</span></td>
</tr>
</table></td>
</tr>
<tr>
<td width="50%" align="center" valign="top" ><table width="97%" border="1" cellpadding="1" cellspacing="1" class="sgrey12">
<tr class="pbody14emp">
<td width="431"><div align="center" class="pbodyemp">Flyers delivered to the door or in the mail</strong></div></td>
<td width="130"><div align="center"><span class="pbodyemp">Market Area</span></div></td>
<td width="144" class="pbodyemp"><div align="center">Benchmark</strong></div></td>
<td width="143" class="pbodyemp"><div align="center">Index</strong></div></td>
</tr>
<tr>
<td class="pbody14"><div style="" ><span class="pbody14">Never</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_DOORN,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_DOORN,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_DOORN,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Seldom</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_DOORS,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_DOORS,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_DOORS,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Occasional*</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_DOORO,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_DOORO,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_DOORO,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Frequently*</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_DOORF,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_DOORF,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_DOORF,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style="" class="pbody14"><strong>*Heavy flyer users</strong></div></td>
<td class="pbody14"><div align="center"><strong><span class="pbody14"><?php echo number_format($pb_flyer_heavy,1) ; ?>%</span></strong></div></td>
<td class="pbody14"><div align="center"><strong><span class="pbody14"><?php echo number_format($canp_flyer_heavy,1) ; ?>%</span></strong></div></td>
<td class="pbody14"><div align="center"><strong><span class="pbody14"><?php echo number_format($index_flyer_heavy,0) ; ?></span></strong></div></td>
</tr>
<tr class="pbody14emp">
<td colspan="4"><div style="" class="pbodyemp">Flyers inserted into a daily newspaper</strong></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Never</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_DPN,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_DPN,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_DPN,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Seldom</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_DPS,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_DPS,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_DPS,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Occasional</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_DPO,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_DPO,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_DPO,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Frequently</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_DPF,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_DPF,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_DPF,0) ; ?></span></div></td>
</tr>
<tr class="pbody14emp">
<td colspan="4"><div style="" class="pbodyemp">Flyers inserted into a community newspaper</div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Never</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CNPN,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CNPN,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CNPN,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Seldom</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CNPS,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CNPS,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CNPS,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Occasional</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CNPO,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CNPO,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CNPO,0) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14">Frequently</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CNPF,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CNPF,1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CNPF,0) ; ?></span></div></td>
</tr>
</table><span class="pbody12">Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>
</td>
</tr>
</table>
</div>

<div class="container row col-md-12 print_pages align="center""> 
<table width="99%" height="595" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td height="74" valign="top"><table width="892" height="66" border="0" cellspacing="4" cellpadding="4">
      <tr>
        <td width="126" height="58"  padding-right:="padding-right:""5" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
        <td width="414" height="58"  valign="5"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
          <?php echo $change_title2; ?></td>
        <td width="43%" align="right"><span class="pheading">FLYERS / COUPONS</span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="97%" border="1" align="center" cellpadding="1" cellspacing="1" class="sgrey12" padding ="10px"  border-spacing=" 0 5px";>
      <tr></tr>
      <tr class="pbody14emp">
        <td width="428"><div align="center"></div></td>
        <td width="143" class="pbodyemp"><div align="center" class="pbodyemp">Market Area</div></td>
        <td width="143" class="pbodyemp"><div align="center" class="pbodyemp">Benchmark</div></td>
        <td width="142" class="pbodyemp"><div align="center" class="pbodyemp">Index</div></td>
      </tr>
      <tr>
        <td colspan="4" ><div style="" class="pbodyemp">Coupon Use</div></td>
      </tr>
      <tr>
        <td height="23"><div style=""><span class="pbody14">Never</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CNPN,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CNPN,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CNPN,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td height="25"><div align="center"><span class="pbody14" style="" >Seldom</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CNPS,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CNPS,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CNPS,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14">Occasional</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CNPO,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CNPO,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CNPO,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14">Frequently</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CNPF,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CNPF,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CNPF,0) ; ?></span></div></td>
      </tr>
      <tr class="pbody14emp">
        <td colspan="4"><div style="" class="pbodyemp">Coupons from local store catalogues</div></td>
      </tr>
      <tr>
        <td class="pbody14"><div style="">Never</div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_STOREN,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_STOREN,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_STOREN,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td height="22" class="pbody14"><div style="">Seldom</div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_STORES,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_STORES,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_STORES,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td class="pbody14"><div style="">Occasional</div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_STOREO,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_STOREO,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_STOREO,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td class="pbody14"><div style="">Frequently</div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_STOREF,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_STOREF,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_STOREF,0) ; ?></span></div></td>
      </tr>
      <tr class="pbody14emp">
        <td colspan="4" class="pbody14"><div style="" class="pbodyemp">Coupons from mail order</div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14">Never</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_MAILN,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_MAILN,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_MAILN,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14">Seldom</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_MAILS,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_MAILS,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_MAILS,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td height="22"><div style=""><span class="pbody14">Occasional</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CMAILO,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_MAILO,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_MAILO,0) ; ?></span></div></td>
      </tr>
      <tr>
        <td height="29"><div style=""><span class="pbody14">Frequently</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_MAILF,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_MAILF,1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_MAILF,0) ; ?></span></div></td>
      </tr>
    </table>
      <p class="pbody12">Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></p></td>
  </tr>
</table>
</div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="center""> 
<table width="99%" height="609" border="0" cellspacing="4" cellpadding="0">
<tr>
<td width="35%"><table width="892" height="67" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="126" height="58"  padding-right:"5" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="58"  valign="5"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="43%" align="right"><span class="pheading">COUPONS</span></td>
</tr>
</table></td>
</tr>
<td width="60%" align="center" valign="top" ><table width="97%"  border="1" align="center" cellpadding="0"   cellspacing="0"   >
  <tr class="pbody14emp">
    <td><div align="center"></div></td>
    <td class="pbodyemp"><div align="center" class="pbodyemp">Market Area</div></td>
    <td class="pbodyemp"><div align="center" class="pbodyemp">Benchmark</strong></div></td>
    <td class="pbodyemp"><div align="center" class="pbodyemp">Index</strong></div></td>
  </tr>
<tr>
  <td colspan="4" >&nbsp;</td>
</tr>
<tr>
<td colspan="4" ><div style="" class="pbodyemp">Coupon fom Internet/Web</strong></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Never</span></div></td>
<td width="145"><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CPWEBN,1) ; ?>%</span></div></td>
<td width="144"><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CPWEBN,1) ; ?>%</span></div></td>
<td width="144"><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CPWEBN,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Seldom</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CPWEBS,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CPWEBS,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CPWEBS,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Occasional</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CPWEBO,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CPWEBO,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CPWEBO,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Frequently</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_CPWEBF,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_CPWEBF,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_CPWEBF,0) ; ?></span></div></td>
</tr>
<tr class="pbody14emp">
<td height="24" colspan="4"><div style="" class="pbodyemp">Views on Flyers/Coupons</div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Very favourable</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_ATTVF,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_ATTVF,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_ATTVF,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Somewhat favourable</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_ATTSF,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_ATTSF,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_ATTSF,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Somewhat unfavourable</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_ATTSU,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_ATTSU,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_ATTSU,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Very unfavourable</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_ATTVU,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_ATTVU,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_ATTVU,0) ; ?></span></div></td>
</tr>
<tr class="pbody14emp">
<td colspan="4" class="pbody14"><div style="" class="pbodyemp">Visited store after hearing commercial</div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Same day</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_SSDAY,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_SSDAY,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_SSDAY,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Same week</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_SSWK,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_SSWK,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_SSWK,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Week later</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_SWKL,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_SWKL,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_SWKL,0) ; ?></span></div></td>
</tr>
<tr class="pbody14emp">
<td colspan="4" class="pbody14"><div style="" class="pbodyemp">Visited website after hearing commercial</div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Same day</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_WSDAY,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_WSDAY,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_WSDAY,0) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14">Same week</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_WSWK,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_WSWK,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_WSWK,0) ; ?></span></div></td>
</tr>
<tr>
<td height="22"><div style=""><span class="pbody14">Week later</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($pbFLY_WWKL,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($canp_FLY_WWKL,1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($index_FLY_WWKL,0) ; ?></span></div></td>
</tr>
</table><span class="pbody12">Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>

<div class="container row col-md-12 print_pages align="center""> 
<table width="99%" height="580" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td height="74" valign="top"><table width="892" height="66" border="0" cellspacing="4" cellpadding="4">
      <tr>
        <td width="132" height="58" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
        <td width="414" height="58" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
          <?php echo $change_title2; ?></td>
        <td width="43%" align="right"><span class="pheading">INTERNET ACCESS </span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="97%" border="1" align="center" cellpadding="2" cellspacing="0" class="sgrey12">
      <tr class="pbody14emp">
        <td  class="pbodyemp"><div align="center" class="pbodyemp">Access Point</strong></div></td>
        <td width="17%" class="pbodyemp"><div align="center" class="pbodyemp">Market Area</div></td>
        <td width="17%" class="pbodyemp"><div align="center"class="pbodyemp">Benchmark</strong></div></td>
        <td width="17%" class="pbodyemp"><div align="center" class="pbodyemp">Index</strong></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet1["name"][0] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["percent"][0],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["canada"][0],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["index"][0]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet1["name"][1] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["percent"][1],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["canada"][1],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["index"][1]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet1["name"][2] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["percent"][2],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["canada"][2],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["index"][2]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet1["name"][3] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["percent"][3],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["canada"][3],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet1["index"][3]) ; ?></span></div></td>
      </tr>
    </table>
      <p>&nbsp;</p>
      <table width="97%" border="1" align="center" cellpadding="2" cellspacing="0" >
      <tr class="pbody14emp">
        <td align="center"><div align="center" class="pbodyemp">Weekly Activity</strong></div></td>
        <td width="132"><div align="center" class="pbodyemp">Market Area</div></td>
        <td width="131"><div align="center" class="pbodyemp">Benchmark</strong></div></td>
        <td width="132"><div align="center" class="pbodyemp">Index</strong></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet2["name"][0] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["percent"][0],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["canada"][0],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["index"][0]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet2["name"][1] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><span class="pbodyemp"><?php echo number_format($internet2["percent"][1],1) ; ?></span>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["canada"][1],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["index"][1]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet2["name"][2] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["percent"][2],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["canada"][2],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["index"][2]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet2["name"][3] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["percent"][3],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["canada"][3],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["index"][3]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet2["name"][4] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["percent"][4],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["canada"][4],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["index"][4]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><div style=""><span class="pbody14"><?php echo $internet2["name"][5] ; ?></span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["percent"][5],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["canada"][5],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet2["index"][5]) ; ?></span></div></td>
      </tr>
    </table></td>
  </tr>
</table></td>
</tr>
</table>
</div>

<div class="container row col-md-12 print_pages align="center"">
<table width="99%" height="598" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td height="83"><table width="892" height="67" border="0" cellspacing="4" cellpadding="4">
      <tr>
        <td width="132" height="67" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
        <td width="414" height="63" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
          <?php echo $change_title2; ?></td>
        <td width="43%" align="right"><span class="pheading">INTERNET </span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="97%" height="387" border="1" align="center" cellpadding="1" cellspacing="0" class="sgrey12">
      <tr class="sgrey14">
        <td width="416" class="pbodyemp">Internet Site</strong></td>
        <td width="143" class="pbodyemp"><div align="center">Market Area</div></td>
        <td width="144" class="pbodyemp"><div align="center">Benchmark</strong></div></td>
        <td width="144" class="pbodyemp"><div align="center">Index</strong></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][0] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][0],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][0],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][0]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][1] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][1],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][1],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][1]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][2] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][2],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][2],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][2]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][3] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][3],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][3],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][3]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][4] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][4],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][4],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][4]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][5] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][5],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][5],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][5]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][6] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][6],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][6],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][6]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][7] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][7],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][7],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][7]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][8] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][8],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][8],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][8]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][9] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][9],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][9],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][9]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][10] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][10],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][10],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][10]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][11] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][11],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][11],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][11]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][12] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][12],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][12],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][12]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][15] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][15],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][15],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][15]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][16] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][16],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][16],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][16]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][17] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][17],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][17],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][17]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][19] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][19],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][19],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][19]) ; ?></span></div></td>
      </tr>
      <tr>
        <td><span class="pbody14" style=""><?php echo $internet3["name"][20] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][20],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][20],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][20]) ; ?></span></div></td>
      </tr>
      <tr>
        <td height="22"><span class="pbody14" style=""><?php echo $internet3["name"][21] ; ?></span></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["percent"][21],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["canada"][21],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="pbody14"><?php echo number_format($internet3["index"][21]) ; ?></span></div></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<div class="container row col-md-12 print_pages" align="center"> 

<table width="99%" height="589" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td height="74" valign="top"><table width="892" height="66" border="0" cellspacing="4" cellpadding="4">
      <tr>
        <td width="132" height="58" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
        <td width="547" height="58" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
          <?php echo $change_title2; ?></td>
        <td width="43%" align="right"><span class="pheading">INTERNET SITE </span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="97%" border="1" align="center" cellpadding="1" cellspacing="0" class="sgrey14">
      <tr>
        <td  class="pbodyemp">Internet Site</td>
        <td width="130" class="pbodyemp"><div align="center" class="style13">Market Area</div></td>
        <td width="130" class="pbodyemp"><div align="center" class="pbodyemp">Benchmark</strong></div></td>
        <td width="130" class="pbodyemp"><div align="center" class="pbodyemp">Index</strong></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][24] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][24],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][24],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][24]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][25] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][25],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][25],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][25]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][26] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][26],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][26],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][26]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][28] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][28],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][28],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][28]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][29] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][29],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][29],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][29]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][30] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][30],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][30],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][30]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][31] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][31],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][31],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][31]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][32] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][32],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][32],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][32]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][33] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][33],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][33],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][33]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][34] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][34],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][34],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][34]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][35] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][35],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][35],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][35]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][36] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][36],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][36],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][36]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][37] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][37],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][37],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][37]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][38] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][38],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][38],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][38]) ; ?></div></td>
      </tr>
      <tr>
        <td class="pbody14"><?php echo $internet3["name"][41] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][41],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][41],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][41]) ; ?></div></td>
      </tr>
      <tr>
        <td height="22" class="pbody14"><?php echo $internet3["name"][42] ; ?></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["percent"][42],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["canada"][42],1) ; ?>%</div></td>
        <td class="pbody14"><div align="center" class="    "><?php echo number_format($internet3["index"][42]) ; ?></div></td>
      </tr>
    </table>
      <span class="pbody12">Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
  </tr>
</table>
</div>

<div class="container row col-md-12 print_pages" align="center"> 
<table width="100%" height="604" border="0" cellspacing="4" cellpadding="0">
<tr>
<td height="76" ><table width="892" height="73" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="132" height="65" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="63" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="43%" align="right"><span class="pheading">NEWSPAPER</span></td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" valign="top" ><table width="97%" border="1" cellpadding="2" cellspacing="0" class="pbody14">
<tr class="sgrey14">
<td width="50%" class="pbodyemp"><div align="center" class="pbodyemp">Sections read frequently</strong></div></td>
<td width="17%" class="pbodyemp"><div align="center" class="style13"><span class="pbodyemp">Market Area</span></div></td>
<td width="17%" class="pbodyemp"><div align="center" class="pbodyemp">Benchmark</strong></div></td>
<td width="16%" class="pbodyemp"><div align="center" class="pbodyemp">Index</strong></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][0] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][0],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][0],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][0]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][1] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][1],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][1],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][1]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][2] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][2],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][2],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][2]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][3] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][3],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][3],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][3]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][4] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][4],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][4],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][4]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][5] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][5],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][5],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][5]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][6] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][6],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][6],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][6]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][7] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][7],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][7],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][7]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][8] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][8],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][8],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][8]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media6["name"][9] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][9],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][9],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][9]) ; ?></div></td>
</tr><tr>
<td><div style=""><?php echo $media6["name"][10] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][10],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][10],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][10]) ; ?></div></td>
</tr>
<tr>
<tr>
<td><div style=""><?php echo $media6["name"][11] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][11],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][11],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][11]) ; ?></div></td>
</tr>
<tr>
<tr>
<td><div style=""><?php echo $media6["name"][12] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][12],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][12],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][12]) ; ?></div></td>
</tr>
<tr>
<tr>
<td><div style=""><?php echo $media6["name"][13] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][13],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][13],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][13]) ; ?></div></td>
</tr>
<tr>
<tr>
<td><div style=""><?php echo $media6["name"][14] ; ?></div></td>
<td><div align="center"><?php echo number_format($media6["percent"][14],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["canada"][14],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media6["index"][14]) ; ?></div></td>
</tr>
<tr>
</table><span class="pbody12">Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="center""> 
<table width="100%" height="590" border="0" cellspacing="4" cellpadding="0">
<tr>
<td width="35%" height="86"><table width="892" height="71" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="132" height="63" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="63" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="43%" align="right"><span class="pheading">RADIO</span></td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" valign="top" ><table width="97%" border="1" cellpadding="2" cellspacing="0" class="pbody14">
<tr class="sgrey14">
<td  class="pbodyemp"><div align="center">Genre</div></td>
<td width="130" class="pbodyemp"><div align="center"><span class="pbodyemp">Market Area</span></div></td>
<td width="130" class="pbodyemp"><div align="center">Benchmark</strong></div></td>
<td width="130" class="pbodyemp"><div align="center">Index</strong></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][0] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][0],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][0],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][0]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][1] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][1],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][1],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][1]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][2] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][2],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][2],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][2]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][3] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][3],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][3],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][3]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][4] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][4],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][4],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][4]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][5] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][5],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][5],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][5]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][6] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][6],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][6],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][6]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][7] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][7],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][7],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][7]) ; ?></div></td>
</tr>
<tr>
<td><div style=""><?php echo $media2["name"][9] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][9],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][9],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][9]) ; ?></div></td>
</tr><tr>
<td><div style=""><?php echo $media2["name"][10] ; ?></div></td>
<td><div align="center"><?php echo number_format($media2["percent"][10],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["canada"][10],1) ; ?>%</div></td>
<td><div align="center"><?php echo number_format($media2["index"][10]) ; ?></div></td>
</tr>
<tr>
</table><span class="pbody12">Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="noprint"><br /></div>
<div class="container row col-md-12 print_pages_last last_page"> 
<table width="100%" height="603" border="0" cellspacing="4" cellpadding="0">
<tr>
<td height="79" colspan="2" ><table width="892" height="66" border="0" cellspacing="4" cellpadding="4">
<tr>
<td width="132" height="58" align="center" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
<td width="414" height="58" align="center" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br><?php echo $change_title2; ?></td>
<td width="43%" align="right"><span class="pheading">TELEVISION</span></td>
</tr>
</table></td>
</tr>
<tr>
<td width="50%" align="center" valign="top" ><table width="95%" height="364" border="1" cellpadding="2" cellspacing="0" class="sgrey12">
<tr class="sgrey14">
<td width="110" class="pbodyemp"><div align="center">Type of TV show</strong></div></td>
<td width="81" class="pbodyemp"><div align="center"><span class="pbodyemp">Market Area</span></div></td>
<td width="107" class="pbodyemp"><div align="center">Benchmark</strong></div></td>
<td width="91" class="pbodyemp"><div align="center">Index</strong></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][0] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][0],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][0],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][0]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][1] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][1],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][1],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][1]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][2] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][2],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][2],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][2]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][3] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][3],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][3],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][3]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][4] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][4],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][4],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][4]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][5] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][5],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][5],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][5]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][6] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][6],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][6],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][6]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][7] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][7],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][7],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][7]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][8] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][8],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][8],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][8]) ; ?></span></div></td>
</tr>
<tr>
<td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][9] ; ?></span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][9],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][9],1) ; ?>%</span></div></td>
<td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][9]) ; ?></span></div></td>
</tr>

</table></td>
<td width="50%" align="center" valign="top" ><table width="95%" height="364" border="1" cellpadding="2" cellspacing="0" class="sgrey12">
<tr class="sgrey14">
<td width="114"><div align="center" class="pbodyemp">Type of TV show</strong></div></td>
<td width="104"><div align="center" class="pbodyemp">Target Audience</strong></div></td>
<td width="96"><div align="center" class="pbodyemp">Benchmark</strong></div></td>
<td width="75"><div align="center" class="pbodyemp">Index</strong></div></td>
</tr>
<tr>
  <td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][10] ; ?></span></div></td>
  <td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][10],1) ; ?>%</span></div></td>
  <td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][10],1) ; ?>%</span></div></td>
  <td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][10]) ; ?></span></div></td>
</tr>
<tr>
  <td class="pbody14"><div style=""><span class="pbody14"><?php echo $media3["name"][11] ; ?></span></div></td>
  <td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][11],1) ; ?>%</span></div></td>
  <td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][11],1) ; ?>%</span></div></td>
  <td class="pbody14"><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][11]) ; ?></span></div></td>
</tr>

<tr>
  <td><div style=""><span class="pbody14"><?php echo $media3["name"][15] ; ?></span></div></td>
  <td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][15],1) ; ?>%</span></div></td>
  <td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][15],1) ; ?>%</span></div></td>
  <td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][15]) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14"><?php echo $media3["name"][16] ; ?></span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][16],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][16],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][16]) ; ?></span></div></td>
</tr>

<tr>
<td><div style=""><span class="pbody14"><?php echo $media3["name"][17] ; ?></span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][17],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][17],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][17]) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14"><?php echo $media3["name"][18] ; ?></span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][18],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][18],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][18]) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14"><?php echo $media3["name"][19] ; ?></span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][19],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][19],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][19]) ; ?></span></div></td>
</tr>

<tr>
<td><div style=""><span class="pbody14"><?php echo $media3["name"][21] ; ?></span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][21],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][21],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][21]) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14"><?php echo $media3["name"][22] ; ?></span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][22],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][22],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][22]) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14"><?php echo $media3["name"][23] ; ?></span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][23],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][23],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][23]) ; ?></span></div></td>
</tr>
<tr>
<td><div style=""><span class="pbody14"><?php echo $media3["name"][24] ; ?></span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["percent"][24],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["canada"][24],1) ; ?>%</span></div></td>
<td><div align="center"><span class="pbody14"><?php echo number_format($media3["index"][24]) ; ?></span></div></td>
</tr>

</table></td>
</tr>
</table>
<td align="center"><span class="pbody12" >Market area compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>
</td>
</tr>
</div>

