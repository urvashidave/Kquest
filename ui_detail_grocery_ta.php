<style type="text/css">
.black16 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #333;
    font-size: 16px;
	font-weight: normal;
    padding: 0 0 9px;
}
.style11 {color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; font-weight: bold; font-size: 11px;}
.style12 {font-weight: normal; font-size: 12px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}
.style10 {font-weight: normal; font-size: 10px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}

.style4 {font-family: "Arial Narrow",Arial,Helvetica,sans-serif;
font-size: 14px;
font-weight: normal;
color: #000000;
}
.style4emp {font-family: "Arial Narrow",Arial,Helvetica,sans-serif;
font-size: 14px;
font-weight: bold;
color: #000000;
}
.style4emp
{font-family: "Arial Narrow",Arial,Helvetica,sans-serif;
font-size: 14px;
font-weight: bold;
color: #000000;
}
.style414 {font-family: Arial Narrow, Arial, Helvetica, sans-serif;
font-size: 12px;
font-weight: normal;
color: #000000;
}
.numbers_big {
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
font-size: 52px;
font-weight: bold;
color: #cc0000;
}
.numbers_big2 {
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
font-size: 52px;
font-weight: bold;
color: #147EA7;
}


.title_medium {
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
font-size: 15px;
font-weight: normal;
color: #284141;
}
.sblue {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;

    font-size: 15px;

    font-weight: bold;

	margin: 0;

	padding: 0;

    color: #147EA7;
}
</style>
<div id="page-wrap" class="print_pages">
<table width="900px" height="589" border="0" cellspacing="0" cellpadding="0" bgcolor="">
<tr>
<td width="900" colspan="2" align="center" valign="middle" class="blue22"><p class="blue22"><strong>
  <!--to put message here  -->
  <?php 
$profile_pic_title = "RESTAURANT INSIGHTS";

echo $profile_pic_title;
?>
  </strong></p>

 <span class="black18"><?php echo $change_header; ?> 
  <br>
  <?php echo $change_prepared; ?><br /></span>
  <span class="black22">
    <?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?>
  </span></td>
</tr>
<tr>
  <td colspan="2" align="center" valign="top"><img src="full_rest/rest_cover.jpg" width="900" height="350" alt="restaurant summary" /></td>
</tr>
<tr>
<td colspan="2" align="center" valign="top"><img src="mfd.jpg" width="150" height="75" /></td>
</tr>
<tr >
<td colspan="2" align="center">
</td>
</tr>
<tr>
<td colspan="2" align="center" valign="top" class="sorange16">&nbsp;</td>
</tr>
</table>
</div>


<div class="noprint"> <br /></div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">FULL SERVICE</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="245" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_fullserve_image'][0]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_fullserve_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_fullserve_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 0; if($rest['sorted_fullserve_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_fullserve_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>

    
      </table></td>
      <td width="25%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_fullserve_image'][1]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_fullserve_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_fullserve_p'][1]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php $i = 1; if($rest['sorted_fullserve_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_fullserve_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_fullserve_image'][2]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_fullserve_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_fullserve_p'][2]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php $i = 2; if($rest['sorted_fullserve_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_fullserve_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_fullserve_image'][3]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_fullserve_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_fullserve_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php $i = 3; if($rest['sorted_fullserve_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_fullserve_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_fullserve_image'][4]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_fullserve_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_fullserve_p'][4]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php $i = 4; if($rest['sorted_fullserve_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_fullserve_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_fullserve_image'][5]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_fullserve_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_fullserve_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php $i = 5; if($rest['sorted_fullserve_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_fullserve_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_fullserve_image'][6]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_fullserve_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_fullserve_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php $i = 6; if($rest['sorted_fullserve_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_fullserve_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_fullserve_image'][7]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_fullserve_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_fullserve_p'][7]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php $i = 7; if($rest['sorted_fullserve_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_fullserve_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_fullserve_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>
<div class="noprint"> <br /></div>
<div class="pagebreak"></div>

<div class="container row col-md-12 print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">QSR</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="245" align="center" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
          <tr>
            <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_qsr_image'][0]; ?>" width="125" height="125" alt="rank1" /></td>
          </tr>
          <tr>
            <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#ead6d6" class="sgrey50"><strong class="numbers_big2">1</strong></td>
            <td bgcolor="#ead6d6">&nbsp;</td>
          </tr>
          <tr>
            <td width="172" bgcolor="#ead6d6"><span class="title_medium"><strong><?php echo $rest['sorted_qsr_name'][0]; ?></strong></span><br />
              <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_qsr_p'][0]); ?>%</span></td>
          </tr>
          <tr>
             <td bgcolor="#ead6d6"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 0; if($rest['sorted_qsr_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_qsr_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
          </tr>
      </table></td>
      <td width="25%" height="245" align="center"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_qsr_image'][1]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#ead6d6" class="sgrey50"><strong class="numbers_big2">2</strong></td>
          <td bgcolor="#ead6d6">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#ead6d6"><span class="title_medium"><strong><?php echo $rest['sorted_qsr_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_qsr_p'][1]); ?>%</span></td>
        </tr>
        <tr>
           <td bgcolor="#ead6d6"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 1; if($rest['sorted_qsr_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_qsr_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
        </tr>
      </table></td>
      <td width="25%" align="center"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_qsr_image'][2]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#ead6d6" class="sgrey50"><strong class="numbers_big2">3</strong></td>
          <td bgcolor="#ead6d6">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#ead6d6"><span class="title_medium"><strong><?php echo $rest['sorted_qsr_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_qsr_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#ead6d6"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 2; if($rest['sorted_qsr_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_qsr_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="245" align="center"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_qsr_image'][3]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#ead6d6" class="sgrey50"><strong class="numbers_big2">4</strong></td>
          <td bgcolor="#ead6d6">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#ead6d6"><span class="title_medium"><strong><?php echo $rest['sorted_qsr_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_qsr_p'][3]); ?>%</span></td>
        </tr>
        <tr>
           <td bgcolor="#ead6d6"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 3; if($rest['sorted_qsr_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_qsr_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="245" align="center" valign="top"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_qsr_image'][4]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#ead6d6" class="sgrey50"><strong class="numbers_big2">5</strong></td>
          <td bgcolor="#ead6d6">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#ead6d6"><span class="title_medium"><strong><?php echo $rest['sorted_qsr_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_qsr_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#ead6d6"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 4; if($rest['sorted_qsr_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_qsr_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="245" align="center" valign="top"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_qsr_image'][5]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#ead6d6" class="sgrey50"><strong class="numbers_big2">6</strong></td>
          <td bgcolor="#ead6d6">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#ead6d6"><span class="title_medium"><strong><?php echo $rest['sorted_qsr_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_qsr_p'][5]); ?>%</span></td>
        </tr>
        <tr>
           <td bgcolor="#ead6d6"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 5; if($rest['sorted_qsr_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_qsr_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" align="center" valign="top"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_qsr_image'][6]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#ead6d6" class="sgrey50"><strong class="numbers_big2">7</strong></td>
          <td bgcolor="#ead6d6">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#ead6d6"><span class="title_medium"><strong><?php echo $rest['sorted_qsr_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_qsr_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#ead6d6"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 6; if($rest['sorted_qsr_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_qsr_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="245" align="center" valign="top"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_qsr_image'][7]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#ead6d6" class="sgrey50"><strong class="numbers_big2">8</strong></td>
          <td bgcolor="#ead6d6">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#ead6d6"><span class="title_medium"><strong><?php echo $rest['sorted_qsr_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_qsr_p'][7]); ?>%</span></td>
        </tr>
        <tr>
           <td bgcolor="#ead6d6"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 7; if($rest['sorted_qsr_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_qsr_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_qsr_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="0" colspan="4" align="center" valign="top"><span class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</span></td>
    </tr>
  </table>
</div>
<div class="noprint"> <br /></div>
<div class="pagebreak"></div>

<div class="container row col-md-12 print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="3" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">COFFEE</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="33%" height="245" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
          <tr>
            <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_coffee_image'][0]; ?>" width="125" height="125" alt="rank1" /></td>
          </tr>
          <tr>
            <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
            <td bgcolor="#d3e4e4">&nbsp;</td>
          </tr>
          <tr>
            <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_coffee_name'][0]; ?></strong></span><br />
              <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_coffee_p'][0]); ?>%</span></td>
          </tr>
          <tr>
             <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 0; if($rest['sorted_coffee_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_coffee_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
          </tr>
      </table></td>
      <td width="33%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_coffee_image'][1]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_coffee_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_coffee_p'][1]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 1; if($rest['sorted_coffee_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_coffee_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="33%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_coffee_image'][2]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_coffee_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_coffee_p'][2]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 2; if($rest['sorted_coffee_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_coffee_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="33%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_coffee_image'][3]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_coffee_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_coffee_p'][3]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 3; if($rest['sorted_coffee_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_coffee_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="33%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_coffee_image'][4]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_coffee_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_coffee_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 4; if($rest['sorted_coffee_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_coffee_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="33%" height="245"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="175" colspan="2" align="center" valign="middle"><img src="<?php echo $rest['sorted_coffee_image'][5]; ?>" width="125" height="125" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $rest['sorted_coffee_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($rest['sorted_coffee_p'][5]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /><?php  $i = 5; if($rest['sorted_coffee_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($rest['sorted_coffee_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($rest['sorted_coffee_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="3"><span class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</span></td>
    </tr>
  </table>
</div>
<div class="noprint"> <br /></div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">FULL SERVE</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="image3/full_serve.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> |  Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="1" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Restaurant Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <tr>
          <td>Boston Pizza</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][29],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][29],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][29],0); ?></div></td>
        </tr>
        <tr>
          <td>Earls</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][30],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][30],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][30],0); ?></div></td>
        </tr>
        <tr>
          <td>East Side Marios</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][31],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][31],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][31],0); ?></div></td>
        </tr>
        <tr>
          <td>Jack Astor's</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][32],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][32],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][32],0); ?></div></td>
        </tr>
        <tr>
          <td>The Keg</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][33],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][33],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][33],0); ?></div></td>
        </tr>
        <tr>
          <td>Kelsey's</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][34],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][34],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][34],0); ?></div></td>
        </tr>
        <tr>
          <td>Milestones</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][35],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][35],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][35],0); ?></div></td>
        </tr>
        <tr>
          <td>Montana's</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][36],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][36],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][36],0); ?></div></td>
        </tr>
        <tr>
          <td>Original Joe's</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][37],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][37],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][37],0); ?></div></td>
        </tr>
        <tr>
          <td>Pizza Hut</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][38],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][38],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][38],0); ?></div></td>
        </tr>
        <tr>
          <td>St. Hubert</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][39],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][39],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][39],0); ?></div></td>
        </tr>
        <tr>
          <td>Swiss Chalet</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][40],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][40],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][40],0); ?></div></td>
        </tr>
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> <br /></div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">QSR</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%" height="107"><table width="100%" height="400" border="1" align="center" cellpadding="1" cellspacing="0" class="style4">
        <tr>
            <td width="300" class="style4"><strong>Restaurant Annual Visits</strong></td>
            <td width="75"><div align="center"><strong>Market</strong></div></td>
            <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
            <td width="75"><div align="center"><strong>Index</strong></div></td>
            </tr>
          <tr>
            <td>A&amp;W</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][12],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][12],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][12],0); ?></div></td>
            </tr>
          <tr>
            <td>Arby's</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][13],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][13],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][13],0); ?></div></td>
            </tr>
             <tr>
            <td>Burger King</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][14],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][14],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][14],0); ?></div></td>
            </tr>
             <tr>
            <td>Dairy Queen</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][15],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][15],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][15],0); ?></div></td>
            </tr>
             <tr>
            <td>Dominos</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][16],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][16],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][16],0); ?></div></td>
            </tr>
             <tr>
            <td>Harvey's</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][17],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][17],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][17],0); ?></div></td>
            </tr>
             <tr>
            <td>KFC</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][18],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][18],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][18],0); ?></div></td>
            </tr>
             <tr>
            <td>McDonald's</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][19],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][19],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][19],0); ?></div></td>
            </tr>
             <tr>
            <td>Mr. Sub</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][20],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][20],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][20],0); ?></div></td>
            </tr>
             <tr>
            <td>Pizza Pizza</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][21],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][21],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][21],0); ?></div></td>
            </tr>
            <tr>
            <td>Quizno's</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][22],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][22],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][22],0); ?></div></td>
            </tr>
            <tr>
            <td>Subway</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][23],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][23],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][23],0); ?></div></td>
            </tr>
            <tr>
            <td>Taco Bell</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][24],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][24],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][24],0); ?></div></td>
            </tr>
            <tr>
            <td>Taco Time</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][25],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][25],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][25],0); ?></div></td>
            </tr>
            <tr>
            <td>Valentine</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][26],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][26],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][26],0); ?></div></td>
            </tr>
            <tr>
            <td>Wendy's</td>
            <td><div align="center"><?php echo number_format($rest_vals['file'][27],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['bench'][27],1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($rest_vals['index'][27],0); ?></div></td>
            </tr>
      </table>        <span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> |  Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" padding-right:="padding-right:"""><img src="image3/fast_food.jpg" width="400" height="400" alt="quick serve" /></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> <br /></div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="68%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="17%" align="right" valign="top"><strong class="stitle">COFFEE</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%" height="107" padding-right:="padding-right:"""><span class="style4"><img src="image3/coffee.jpg" width="390" height="390" alt="coffee" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> |Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" padding-right:="padding-right:"""><table width="100%" height="390"  border="1" align="center" cellpadding="1" cellspacing="0" class="style4">
        <tr>
          <td width="300"><strong>Restaurant Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <tr>
          <td>Coffee Time</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][1],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][1],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][1],0); ?></div></td>
        </tr>
        <tr>
          <td>Country Style</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][2],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][2],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][2],0); ?></div></td>
        </tr>
        <tr>
          <td>David's Tea</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][3],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][3],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][3],0); ?></div></td>
        </tr>
        <tr>
          <td>Dunkin' Donuts</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][4],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][4],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][4],0); ?></div></td>
        </tr>
        <tr>
          <td>Great Canadian Bagel</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][5],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][5],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][5],0); ?></div></td>
        </tr>
        <tr>
          <td>MMMuffins</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][6],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][6],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][6],0); ?></div></td>
        </tr>
        <tr>
          <td>Second Cup</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][7],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][7],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][7],0); ?></div></td>
        </tr>
        <tr>
          <td>Starbucks</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][8],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][8],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][8],0); ?></div></td>
        </tr>
        <tr>
          <td>Tim Horton's</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][9],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][9],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][9],0); ?></div></td>
        </tr>
        <tr>
          <td>Timothy's</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][10],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][10],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][10],0); ?></div></td>
        </tr>
      </table></td>
    </tr>
  </table></td>

</div>

<div class="noprint"> <br /></div>
<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">FOOD TYPE</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%" height="107" padding-right:="padding-right:"""><span class="style4"><img src="full_rest/salad.jpg" width="390" height="390" alt="coffee" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> |  Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" padding-right:="padding-right:"""><table width="100%" height="510"  border="1" align="center" cellpadding="1" cellspacing="0" class="style4">
        <tr>
          <td width="300"><strong>Restaurant Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <tr>
          <td>Breakfast</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][45],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][45],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][45],0); ?></div></td>
        </tr>
        <td>Burger Restaurant</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][46],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][46],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][46],0); ?></div></td>
        </tr>
        <td>Family Dining</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][47],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][47],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][47],0); ?></div></td>
        </tr>
        <td>Chicken Restaurants</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][48],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][48],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][48],0); ?></div></td>
        </tr>
        <td>Coffee / Donut Shop</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][49],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][49],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][49],0); ?></div></td>
        </tr>
        <td>Food Court</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][50],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][50],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][50],0); ?></div></td>
        </tr>
        <td>Ice Cream Parlour</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][51],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][51],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][51],0); ?></div></td>
        </tr>
        <td>Oriental</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][52],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][52],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][52],0); ?></div></td>
        </tr>
        <td>Italian</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][53],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][53],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][53],0); ?></div></td>
        </tr>
        <td>Mexican</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][54],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][54],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][54],0); ?></div></td>
        </tr>
        <td>Other Ethnic Restaurants</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][55],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][55],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][55],0); ?></div></td>
        </tr>
        <td>Pizza Restaurants</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][50],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][50],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][50],0); ?></div></td>
        </tr>
        <td>Pubs</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][56],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][56],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][56],0); ?></div></td>
        </tr>
        <td>Seafood</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][57],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][57],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][57],0); ?></div></td>
        </tr>
        <td>Steakhouse</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][58],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][58],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][58],0); ?></div></td>
        </tr>
        <td>Sub Sandwiches</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][59],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][59],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][59],0); ?></div></td>
        </tr>
        <td>Formal Dining</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][60],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][60],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][60],0); ?></div></td>
        </tr><tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
           <td>Take Out</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][63],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][63],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][63],0); ?></div></td>
        </tr>
        <tr>
           <td>Home Delivery</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][64],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][64],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][64],0); ?></div></td>
        </tr>
        <tr>
           <td>Dine In</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][65],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][65],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][65],0); ?></div></td>
        </tr>
        <tr>
           <td>Drive Through</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][66],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][66],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][66],0); ?></div></td>
        </tr>
        <tr>
           <td>Online Order</td>
          <td><div align="center"><?php echo number_format($rest_vals['file'][67],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['bench'][67],1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($rest_vals['index'][67],0); ?></div></td>
        </tr>
        
      </table></td>
    </tr>
  </table></td>