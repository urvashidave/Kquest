<style type="text/css">


td,th{text-align: center; !important}
table .pbodyemp{

font-weight: bold;

}
.myBench{

font-weight: normal;

}
.black16 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #333;
    font-size: 16px;
	font-weight: normal;
    padding: 0 0 9px;
}
.style11 {color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif; font-weight: bold; font-size: 11px;}
.style12 {font-weight: normal; font-size: 12px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}
.style10 {font-weight: normal; font-size: 10px; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}

.pbodyemp {font-weight:unset;}
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
.stitle {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #900C3F;
}
.type{

 page-break-after: avoid !important;
 page-break-before: avoid !important;
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

.stitle {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #900C3F;
}

@media print {
}
</style>
<div id="page-wrap" class="print_pages retail">
<table width="910px" height="589" border="0" cellspacing="0" cellpadding="0" bgcolor="">
<tr>
<td width="900" colspan="2" align="center" valign="middle" class="blue22"><p class="stitle"><strong class="stitle">
  <!--to put message here  -->
  <?php 
$profile_pic_title = "RETAILER INSIGHTS";

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
  <td colspan="2" align="center" valign="top"><img src="retail/retail.jpg" width="900" height="350" alt="retail summary" /></td>
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
<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">GROCERY </strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $grocery['sorted_grocery_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $grocery['sorted_grocery_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($grocery['sorted_grocery_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php  $i = 0; if($grocery['sorted_grocery_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($grocery['sorted_grocery_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>

    
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $grocery['sorted_grocery_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $grocery['sorted_grocery_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($grocery['sorted_grocery_p'][1]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 1; if($grocery['sorted_grocery_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($grocery['sorted_grocery_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $grocery['sorted_grocery_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $grocery['sorted_grocery_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($grocery['sorted_grocery_p'][2]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 2; if($grocery['sorted_grocery_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($grocery['sorted_grocery_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $grocery['sorted_grocery_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $grocery['sorted_grocery_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($grocery['sorted_grocery_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 3; if($grocery['sorted_grocery_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($grocery['sorted_grocery_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $grocery['sorted_grocery_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $grocery['sorted_grocery_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($grocery['sorted_grocery_p'][4]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 4; if($grocery['sorted_grocery_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($grocery['sorted_grocery_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $grocery['sorted_grocery_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $grocery['sorted_grocery_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($grocery['sorted_grocery_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 5; if($grocery['sorted_grocery_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($grocery['sorted_grocery_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $grocery['sorted_grocery_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $grocery['sorted_grocery_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($grocery['sorted_grocery_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 6; if($grocery['sorted_grocery_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($grocery['sorted_grocery_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $grocery['sorted_grocery_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $grocery['sorted_grocery_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($grocery['sorted_grocery_p'][7]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 7; if($grocery['sorted_grocery_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($grocery['sorted_grocery_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($grocery['sorted_grocery_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">DEPARTMENT </strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $dept['sorted_dept_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $dept['sorted_dept_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($dept['sorted_dept_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($dept['sorted_dept_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($dept['sorted_dept_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $dept['sorted_dept_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $dept['sorted_dept_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($dept['sorted_dept_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($dept['sorted_dept_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($dept['sorted_dept_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $dept['sorted_dept_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $dept['sorted_dept_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($dept['sorted_dept_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($dept['sorted_dept_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($dept['sorted_dept_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $dept['sorted_dept_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $dept['sorted_dept_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($dept['sorted_dept_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($dept['sorted_dept_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($dept['sorted_dept_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $dept['sorted_dept_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $dept['sorted_dept_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($dept['sorted_dept_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($dept['sorted_dept_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($dept['sorted_dept_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $dept['sorted_dept_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $dept['sorted_dept_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($dept['sorted_dept_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($dept['sorted_dept_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($dept['sorted_dept_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $dept['sorted_dept_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $dept['sorted_dept_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($dept['sorted_dept_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($dept['sorted_dept_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($dept['sorted_dept_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($dept['sorted_dept_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225">&nbsp;</td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>

<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">DRUG </strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $drug['sorted_drug_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $drug['sorted_drug_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($drug['sorted_drug_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php  $i = 0; if($drug['sorted_drug_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($drug['sorted_drug_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>

    
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $drug['sorted_drug_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $drug['sorted_drug_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($drug['sorted_drug_p'][1]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 1; if($drug['sorted_drug_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($drug['sorted_drug_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $drug['sorted_drug_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $drug['sorted_drug_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($drug['sorted_drug_p'][2]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 2; if($drug['sorted_drug_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($drug['sorted_drug_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $drug['sorted_drug_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $drug['sorted_drug_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($drug['sorted_drug_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 3; if($drug['sorted_drug_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($drug['sorted_drug_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $drug['sorted_drug_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $drug['sorted_drug_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($drug['sorted_drug_p'][4]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 4; if($drug['sorted_drug_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($drug['sorted_drug_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $drug['sorted_drug_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $drug['sorted_drug_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($drug['sorted_drug_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 5; if($drug['sorted_drug_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($drug['sorted_drug_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $drug['sorted_drug_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $drug['sorted_drug_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($drug['sorted_drug_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 6; if($drug['sorted_drug_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($drug['sorted_drug_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $drug['sorted_drug_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $drug['sorted_drug_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($drug['sorted_drug_p'][7]); ?>%</span></td>
        </tr>
        <tr>
         <td bgcolor="#d3e4e4"><img src='image3/green0.png' width='22' height='22' /> <?php $i = 7; if($drug['sorted_drug_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?> <?php  if($drug['sorted_drug_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?> <?php if($drug['sorted_drug_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">CLOTHING</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $clothing['sorted_clothing_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $clothing['sorted_clothing_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($clothing['sorted_clothing_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($clothing['sorted_clothing_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($clothing['sorted_clothing_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $clothing['sorted_clothing_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $clothing['sorted_clothing_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($clothing['sorted_clothing_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($clothing['sorted_clothing_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($clothing['sorted_clothing_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $clothing['sorted_clothing_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $clothing['sorted_clothing_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($clothing['sorted_clothing_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($clothing['sorted_clothing_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($clothing['sorted_clothing_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $clothing['sorted_clothing_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $clothing['sorted_clothing_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($clothing['sorted_clothing_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($clothing['sorted_clothing_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($clothing['sorted_clothing_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $clothing['sorted_clothing_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $clothing['sorted_clothing_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($clothing['sorted_clothing_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($clothing['sorted_clothing_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($clothing['sorted_clothing_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $clothing['sorted_clothing_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $clothing['sorted_clothing_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($clothing['sorted_clothing_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($clothing['sorted_clothing_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($clothing['sorted_clothing_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $clothing['sorted_clothing_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $clothing['sorted_clothing_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($clothing['sorted_clothing_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($clothing['sorted_clothing_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($clothing['sorted_clothing_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $clothing['sorted_clothing_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $clothing['sorted_clothing_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($clothing['sorted_clothing_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($clothing['sorted_clothing_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($clothing['sorted_clothing_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($clothing['sorted_clothing_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">SHOE</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $shoe['sorted_shoe_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $shoe['sorted_shoe_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($shoe['sorted_shoe_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($shoe['sorted_shoe_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($shoe['sorted_shoe_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $shoe['sorted_shoe_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $shoe['sorted_shoe_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($shoe['sorted_shoe_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($shoe['sorted_shoe_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($shoe['sorted_shoe_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $shoe['sorted_shoe_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $shoe['sorted_shoe_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($shoe['sorted_shoe_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($shoe['sorted_shoe_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($shoe['sorted_shoe_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $shoe['sorted_shoe_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $shoe['sorted_shoe_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($shoe['sorted_shoe_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($shoe['sorted_shoe_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($shoe['sorted_shoe_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $shoe['sorted_shoe_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $shoe['sorted_shoe_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($shoe['sorted_shoe_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($shoe['sorted_shoe_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($shoe['sorted_shoe_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $shoe['sorted_shoe_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $shoe['sorted_shoe_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($shoe['sorted_shoe_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($shoe['sorted_shoe_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($shoe['sorted_shoe_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $shoe['sorted_shoe_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $shoe['sorted_shoe_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($shoe['sorted_shoe_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($shoe['sorted_shoe_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($shoe['sorted_shoe_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $shoe['sorted_shoe_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $shoe['sorted_shoe_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($shoe['sorted_shoe_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($shoe['sorted_shoe_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($shoe['sorted_shoe_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($shoe['sorted_shoe_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">BOOK</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $book['sorted_book_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $book['sorted_book_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($book['sorted_book_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($book['sorted_book_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($book['sorted_book_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $book['sorted_book_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $book['sorted_book_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($book['sorted_book_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($book['sorted_book_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($book['sorted_book_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $book['sorted_book_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $book['sorted_book_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($book['sorted_book_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($book['sorted_book_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($book['sorted_book_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $book['sorted_book_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $book['sorted_book_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($book['sorted_book_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($book['sorted_book_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($book['sorted_book_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $book['sorted_book_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $book['sorted_book_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($book['sorted_book_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($book['sorted_book_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($book['sorted_book_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $book['sorted_book_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $book['sorted_book_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($book['sorted_book_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($book['sorted_book_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($book['sorted_book_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $book['sorted_book_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $book['sorted_book_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($book['sorted_book_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($book['sorted_book_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($book['sorted_book_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $book['sorted_book_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $book['sorted_book_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($book['sorted_book_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($book['sorted_book_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($book['sorted_book_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($book['sorted_book_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">FURNITURE</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $furn['sorted_furn_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $furn['sorted_furn_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($furn['sorted_furn_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($furn['sorted_furn_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($furn['sorted_furn_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $furn['sorted_furn_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $furn['sorted_furn_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($furn['sorted_furn_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($furn['sorted_furn_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($furn['sorted_furn_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $furn['sorted_furn_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $furn['sorted_furn_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($furn['sorted_furn_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($furn['sorted_furn_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($furn['sorted_furn_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $furn['sorted_furn_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $furn['sorted_furn_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($furn['sorted_furn_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($furn['sorted_furn_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($furn['sorted_furn_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $furn['sorted_furn_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $furn['sorted_furn_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($furn['sorted_furn_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($furn['sorted_furn_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($furn['sorted_furn_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $furn['sorted_furn_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $furn['sorted_furn_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($furn['sorted_furn_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($furn['sorted_furn_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($furn['sorted_furn_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $furn['sorted_furn_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $furn['sorted_furn_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($furn['sorted_furn_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($furn['sorted_furn_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($furn['sorted_furn_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $furn['sorted_furn_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $furn['sorted_furn_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($furn['sorted_furn_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($furn['sorted_furn_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($furn['sorted_furn_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($furn['sorted_furn_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">IMPROVEMENT</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $home['sorted_home_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $home['sorted_home_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($home['sorted_home_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($home['sorted_home_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($home['sorted_home_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $home['sorted_home_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $home['sorted_home_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($home['sorted_home_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($home['sorted_home_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($home['sorted_home_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $home['sorted_home_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $home['sorted_home_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($home['sorted_home_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($home['sorted_home_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($home['sorted_home_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $home['sorted_home_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $home['sorted_home_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($home['sorted_home_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($home['sorted_home_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($home['sorted_home_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $home['sorted_home_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $home['sorted_home_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($home['sorted_home_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($home['sorted_home_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($home['sorted_home_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $home['sorted_home_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $home['sorted_home_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($home['sorted_home_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($home['sorted_home_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($home['sorted_home_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $home['sorted_home_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $home['sorted_home_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($home['sorted_home_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($home['sorted_home_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($home['sorted_home_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $home['sorted_home_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $home['sorted_home_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($home['sorted_home_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($home['sorted_home_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($home['sorted_home_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($home['sorted_home_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">ELECTRONICS</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $elect['sorted_elect_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $elect['sorted_elect_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($elect['sorted_elect_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($elect['sorted_elect_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($elect['sorted_elect_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $elect['sorted_elect_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $elect['sorted_elect_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($elect['sorted_elect_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($elect['sorted_elect_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($elect['sorted_elect_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $elect['sorted_elect_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $elect['sorted_elect_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($elect['sorted_elect_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($elect['sorted_elect_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($elect['sorted_elect_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $elect['sorted_elect_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $elect['sorted_elect_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($elect['sorted_elect_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($elect['sorted_elect_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($elect['sorted_elect_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $elect['sorted_elect_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $elect['sorted_elect_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($elect['sorted_elect_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($elect['sorted_elect_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($elect['sorted_elect_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $elect['sorted_elect_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $elect['sorted_elect_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($elect['sorted_elect_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($elect['sorted_elect_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($elect['sorted_elect_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $elect['sorted_elect_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $elect['sorted_elect_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($elect['sorted_elect_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($elect['sorted_elect_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($elect['sorted_elect_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $elect['sorted_elect_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $elect['sorted_elect_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($elect['sorted_elect_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($elect['sorted_elect_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($elect['sorted_elect_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($elect['sorted_elect_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="47%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="38%" align="right" valign="top"><strong class="stitle">SPORTING GOODS</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $sport['sorted_sport_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $sport['sorted_sport_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($sport['sorted_sport_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($sport['sorted_sport_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($sport['sorted_sport_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $sport['sorted_sport_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $sport['sorted_sport_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($sport['sorted_sport_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($sport['sorted_sport_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($sport['sorted_sport_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $sport['sorted_sport_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $sport['sorted_sport_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($sport['sorted_sport_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($sport['sorted_sport_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($sport['sorted_sport_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $sport['sorted_sport_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $sport['sorted_sport_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($sport['sorted_sport_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($sport['sorted_sport_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($sport['sorted_sport_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $sport['sorted_sport_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $sport['sorted_sport_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($sport['sorted_sport_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($sport['sorted_sport_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($sport['sorted_sport_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $sport['sorted_sport_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $sport['sorted_sport_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($sport['sorted_sport_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($sport['sorted_sport_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($sport['sorted_sport_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $sport['sorted_sport_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $sport['sorted_sport_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($sport['sorted_sport_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($sport['sorted_sport_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($sport['sorted_sport_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $sport['sorted_sport_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $sport['sorted_sport_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($sport['sorted_sport_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($sport['sorted_sport_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($sport['sorted_sport_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($sport['sorted_sport_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">TOY</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $toy['sorted_toy_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $toy['sorted_toy_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($toy['sorted_toy_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($toy['sorted_toy_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($toy['sorted_toy_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $toy['sorted_toy_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $toy['sorted_toy_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($toy['sorted_toy_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($toy['sorted_toy_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($toy['sorted_toy_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $toy['sorted_toy_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $toy['sorted_toy_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($toy['sorted_toy_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($toy['sorted_toy_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($toy['sorted_toy_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $toy['sorted_toy_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $toy['sorted_toy_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($toy['sorted_toy_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($toy['sorted_toy_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($toy['sorted_toy_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">

        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $toy['sorted_toy_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $toy['sorted_toy_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($toy['sorted_toy_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($toy['sorted_toy_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($toy['sorted_toy_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $toy['sorted_toy_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $toy['sorted_toy_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($toy['sorted_toy_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($toy['sorted_toy_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($toy['sorted_toy_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $toy['sorted_toy_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $toy['sorted_toy_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($toy['sorted_toy_p'][6]); ?>%</span></td>
        </tr>

        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($toy['sorted_toy_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($toy['sorted_toy_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $toy['sorted_toy_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $toy['sorted_toy_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($toy['sorted_toy_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($toy['sorted_toy_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($toy['sorted_toy_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($toy['sorted_toy_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" ><table width="900" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">PET</strong></td>
        </tr>
       </table></td>
    </tr>
    <tr>
      <td width="25%" height="225" ><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $pet['sorted_pet_image'][0]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">1</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $pet['sorted_pet_name'][0]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($pet['sorted_pet_p'][0]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php  $i = 0; if($pet['sorted_pet_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($pet['sorted_pet_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $pet['sorted_pet_image'][1]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">2</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $pet['sorted_pet_name'][1]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($pet['sorted_pet_p'][1]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 1; if($pet['sorted_pet_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($pet['sorted_pet_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $pet['sorted_pet_image'][2]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">3</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $pet['sorted_pet_name'][2]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($pet['sorted_pet_p'][2]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 2; if($pet['sorted_pet_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($pet['sorted_pet_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $pet['sorted_pet_image'][3]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">4</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $pet['sorted_pet_name'][3]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($pet['sorted_pet_p'][3]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 3; if($pet['sorted_pet_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($pet['sorted_pet_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $pet['sorted_pet_image'][4]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">5</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $pet['sorted_pet_name'][4]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($pet['sorted_pet_p'][4]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 4; if($pet['sorted_pet_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($pet['sorted_pet_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $pet['sorted_pet_image'][5]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">6</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $pet['sorted_pet_name'][5]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($pet['sorted_pet_p'][5]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 5; if($pet['sorted_pet_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($pet['sorted_pet_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $pet['sorted_pet_image'][6]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">7</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $pet['sorted_pet_name'][6]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($pet['sorted_pet_p'][6]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 6; if($pet['sorted_pet_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($pet['sorted_pet_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
      <td width="25%" height="225"><table width="100%" cellpadding="0" cellspacing="0" class="Example_E1">
        <tr>
          <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo $pet['sorted_pet_image'][7]; ?>" width="100" height="100" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="46" height="104" rowspan="3" align="center" valign="middle" bgcolor="#d3e4e4" class="sgrey50"><strong class="numbers_big">8</strong></td>
          <td bgcolor="#d3e4e4">&nbsp;</td>
        </tr>
        <tr>
          <td width="172" bgcolor="#d3e4e4"><span class="title_medium"><strong><?php echo $pet['sorted_pet_name'][7]; ?></strong></span><br />
            <span class="title_medium">Penetration: <?php echo number_format($pet['sorted_pet_p'][7]); ?>%</span></td>
        </tr>
        <tr>
          <td bgcolor="#d3e4e4"><img src='image3/green0.png' alt="" width='22' height='22' />
            <?php $i = 7; if($pet['sorted_pet_index'][$i] > 75) echo "<img src='image3/green1.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 90) echo "<img src='image3/green2.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 100) echo "<img src='image3/green3.png' width='22' height='22' />";  ?>
            <?php  if($pet['sorted_pet_index'][$i] > 110) echo "<img src='image3/green4.png' width='22' height='22' />";  ?>
            <?php if($pet['sorted_pet_index'][$i] > 125) echo "<img src='image3/green5.png' width='22' height='22' />";  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="4" class="style10">Penetration: Percent of people age 15+ that visit annually | Green bars represent index value compared to benchmark average (6 is highest)</td>
    </tr>
  </table>
</div>

<div class="noprint"></div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">GROCERY </strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/grocery.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?><br />
        Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Grocery - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['grocery']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['grocery_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($grocery_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($grocery_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($grocery_vals['index'][$i],0) . "</div></td></tr>";
		}
		
		
		
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">DEPARTMENT</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/dept.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Department Stores - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['dept']); $i ++) {
			if($i > 5 || $i < 5) {
        echo "<tr><td style='padding-left:14px'>" . $demo['dept_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($dept_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($dept_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($dept_vals['index'][$i],0) . "</div></td></tr>";
			}
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"></div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">CONVENIENCE</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/cstore.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Convenience Stores - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['cv']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['cv_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($cv_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($cv_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($cv_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> <br /></div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">DRUG</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/drug.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Drug Store - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['drug']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['drug_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($drug_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($drug_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($drug_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"></div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">CLOTHING</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
            <td width="225"><strong>Clothing Stores- Annual Visits</strong></td>
            <td width="75"><div align="center"><strong>Market</strong></div></td>
            <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
            <td width="75"><div align="center"><strong>Index</strong></div></td>
          </tr>
          <?php for ( $i = 1; $i <= 4; $i ++) {  // no danier 4
        echo "<tr><td style='padding-left:14px'>" . $demo['clothing_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        <?php for ( $i = 5; $i <= 11; $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['clothing_name'][$i] . "</td></td>"; // no jacob 12
        echo "<td><div align='center'>" . number_format($clothing_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        <?php for ( $i = 13; $i <= 18; $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['clothing_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
      </table>
        <span class="style4"><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
Percent of people age 15+ that visit annually</span></td>
      <td width="450" height="400" align="center" valign="top"><table width="100%" border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Clothing Stores- Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 18; $i < sizeof($clothing_vals['file']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['clothing_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($clothing_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
      </table>
      </td>
    </tr>
  </table></td>
</div>

<div class="noprint"></div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">SHOE</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/shoe.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Shoe Store- Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['shoe']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['shoe_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($shoe_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($shoe_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($shoe_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"></div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">BOOK</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/book.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Book Store - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['book']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['book_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($book_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($book_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($book_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"></div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">JEWELRY</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/jewel.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
        Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Jewelry - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['jewel']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['jewel_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($jewel_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($jewel_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($jewel_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">FURNITURE</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/furn.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
        Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Furniture Store - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['furn']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['furn_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($furn_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($furn_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($furn_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="38%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="47%" align="right" valign="top"><strong class="stitle"> IMPROVEMENT</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/home.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Home Improvement - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['home']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['home_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($home_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($home_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($home_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">OPTICAL</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%" align="center" valign="top"><table width="100%"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Optical Store - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['eye']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['eye_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($eye_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($eye_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($eye_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
      </table>        <span class="style4"><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
            <td width="225"><strong>Eye care traits - annual</strong></td>
            <td width="75"><div align="center"><strong>Market</strong></div></td>
            <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
            <td width="75"><div align="center"><strong>Index</strong></div></td>
          </tr>
          <?php for ( $i = 1; $i <= 9; $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['glasses_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($glasses_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($glasses_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($glasses_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
         <tr>
            <td width="225" colspan="4">Likelihood of laser surgery</td>
          </tr>
         <?php for ( $i = 10; $i <= 14; $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['glasses_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($glasses_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($glasses_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($glasses_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>

<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">ELECTRONICS</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/elect.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
        Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Electronics Store - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['elect']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['elect_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($elect_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($elect_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($elect_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">OFFICE</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/office.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
        Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Office Supplies - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['office']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['office_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($office_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($office_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($office_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="39%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="46%" align="right" valign="top"><strong class="stitle">SPORTING GOODS</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/sport.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
        Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Sporting Goods - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['sport']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['sport_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($sport_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($sport_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($sport_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">TOY</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/toy.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
        Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Toy Store - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['toy']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['toy_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($toy_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($toy_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($toy_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>
<div class="print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="56%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="29%" align="right" valign="top"><strong class="stitle">PET</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><span class="style4"><img src="retail/pet.jpg" width="400" height="400" alt="full serve" /><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> <br />
        Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Pet Stores - Annual Visits</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['pet']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['pet_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($pet_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($pet_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($pet_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table>
        <table width="100%"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
          <tr>
            <td width="225"><strong>Pet Ownership - Annual Visits</strong></td>
            <td width="75"><div align="center"><strong>Market</strong></div></td>
            <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
            <td width="75"><div align="center"><strong>Index</strong></div></td>
          </tr>
          <?php for ( $i = 1; $i < sizeof($demo['pet_own']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['pet_own_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($pet_own_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($pet_own_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($pet_own_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        </table></td>
    </tr>
  </table></td>
</div>

<div class="noprint"> </div>
<div class="pagebreak"></div>

<div class="print_pages type" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="48%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="37%" align="right" valign="top"><strong class="stitle">STORE TYPE</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Regularily Visit</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['type_r']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['type_r_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($type_r_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($type_r_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($type_r_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
      </table>        <span class="style4"><br />
        </span><span class="style10"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> |  Percent of people age 15+ that visit annually</span></td>
      <td width="450" valign="top" height="400"><table width="100%" height="400"  border="1" align="center" cellpadding="3" cellspacing="0" class="style4">
        <tr>
          <td width="225"><strong>Occassional Visit</strong></td>
          <td width="75"><div align="center"><strong>Market</strong></div></td>
          <td width="75"><div align="center"><strong>Benchmark</strong></div></td>
          <td width="75"><div align="center"><strong>Index</strong></div></td>
        </tr>
        <?php for ( $i = 1; $i < sizeof($demo['type_o']); $i ++) {
        echo "<tr><td style='padding-left:14px'>" . $demo['type_o_name'][$i] . "</td></td>";
        echo "<td><div align='center'>" . number_format($type_o_vals['file'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($type_o_vals['bench'][$i],1) . "%</div></td>";
        echo "<td><div align='center'>" . number_format($type_o_vals['index'][$i],0) . "</div></td></tr>";
		}
		?>
        
      </table></td>
    </tr>
  </table></td>
</div>

