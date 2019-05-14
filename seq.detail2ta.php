
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<?php
$age_60p = $age_6069p + $age_70p;
$age_60c = $age_6069c + $age_70c;
$age_60i = $age_60p / $age_60c *100;
// age arrows  2029
$age_2029pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($age_2029i <85) $age_2029pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($age_2029i <90 && $age_2029i >=85) $age_2029pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($age_2029i <95 && $age_2029i >=90) $age_2029pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($age_2029i >115) $age_2029pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($age_2029i >110 && $age_2029i <=115) $age_2029pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($age_2029i >105 && $age_2029i <=110) $age_2029pic =  "<img src='up.png' width='65' height='65' alt='up' />";
$age_3039pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($age_3039i <85) $age_3039pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($age_3039i <90 && $age_3039i >=85) $age_3039pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($age_3039i <95 && $age_3039i >=90) $age_3039pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($age_3039i >115) $age_3039pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($age_3039i >110 && $age_3039i <=115) $age_3039pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($age_3039i >105 && $age_3039i <=110) $age_3039pic =  "<img src='up.png' width='65' height='65' alt='up' />";
$age_4049pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($age_4049i <85) $age_4049pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($age_4049i <90 && $age_4049i >=85) $age_4049pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($age_4049i <95 && $age_4049i >=90) $age_4049pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($age_4049i >115) $age_4049pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($age_4049i >110 && $age_4049i <=115) $age_4049pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($age_4049i >105 && $age_4049i <=110) $age_4049pic =  "<img src='up.png' width='65' height='65' alt='up' />";
$age_5059pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($age_5059i <85) $age_5059pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($age_5059i <90 && $age_5059i >=85) $age_5059pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($age_5059i <95 && $age_5059i >=90) $age_5059pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($age_5059i >115) $age_5059pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($age_5059i >110 && $age_5059i <=115) $age_5059pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($age_5059i >105 && $age_5059i <=110) $age_5059pic =  "<img src='up.png' width='65' height='65' alt='up' />";
$age_60pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($age_60i <85) $age_60pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($age_60i <90 && $age_60i >=85) $age_60pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($age_60i <95 && $age_60i >=90) $age_60pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($age_60i >115) $age_60pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($age_60i >110 && $age_60i <=115) $age_60pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($age_60i >105 && $age_60i <=110) $age_60pic =  "<img src='up.png' width='65' height='65' alt='up' />";
// income
$inc030pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($inc030i <85) $inc030pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($inc030i <90 && $inc030i >=85) $inc030pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($inc030i <95 && $inc030i >=90) $inc030pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($inc030i >115) $inc030pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($inc030i >110 && $inc030i <=115) $inc030pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($inc030i >105 && $inc030i <=110) $inc030pic =  "<img src='up.png' width='65' height='65' alt='up' />";
$inc3070pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($inc3070i <85) $inc3070pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($inc3070i <90 && $inc3070i >=85) $inc3070pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($inc3070i <95 && $inc3070i >=90) $inc3070pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($inc3070i >115) $inc3070pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($inc3070i >110 && $inc3070i <=115) $inc3070pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($inc3070i >105 && $inc3070i <=110) $inc3070pic =  "<img src='up.png' width='65' height='65' alt='up' />";
$inc70100pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($inc70100i <85) $inc70100pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($inc70100i <90 && $inc70100i >=85) $inc70100pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($inc70100i <95 && $inc70100i >=90) $inc70100pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($inc70100i >115) $inc70100pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($inc70100i >110 && $inc70100i <=115) $inc70100pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($inc70100i >105 && $inc70100i <=110) $inc70100pic =  "<img src='up.png' width='65' height='65' alt='up' />";
$inc100pic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($inc100i <85) $inc100pic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($inc100i <90 && $inc100i >=85) $inc100pic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($inc100i <95 && $inc100i >=90) $inc100pic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($inc100i >115) $inc100pic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($inc100i >110 && $inc100i <=115) $inc100pic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($inc100i >105 && $inc100i <=110) $inc100pic =  "<img src='up.png' width='65' height='65' alt='up' />";
if ($IN_AHHp >  $IN_AHHc) $age_description_hl = number_format($IN_AHHp -  $IN_AHHc) . " higher ";
else $age_description_hl = number_format($IN_AHHc -  $IN_AHHp) . " lower ";
// family
$fm_singlepic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($fm_singlei <85) $fm_singlepic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($fm_singlei <90 && $fm_singlei >=85) $fm_singlepic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($fm_singlei <95 && $fm_singlei >=90) $fm_singlepic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($fm_singlei >115) $fm_singlepic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($fm_singlei >110 && $fm_singlei <=115) $fm_singlepic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($fm_singlei >105 && $fm_singlei <=110) $fm_singlepic =  "<img src='up.png' width='65' height='65' alt='up' />";
$couplepic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($couplei <85) $couplepic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($couplei <90 && $couplei >=85) $couplepic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($couplei <95 && $couplei >=90) $couplepic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($couplei >115) $couplepic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($couplei >110 && $couplei <=115) $couplepic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($couplei >105 && $couplei <=110) $couplepic =  "<img src='up.png' width='65' height='65' alt='up' />";
$familypic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($familyi <85) $familypic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($familyi <90 && $familyi >=85) $familypic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($familyi <95 && $familyi >=90) $familypic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($familyi >115) $familypic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($familyi >110 && $familyi <=115) $familypic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($familyi >105 && $familyi <=110) $familypic =  "<img src='up.png' width='65' height='65' alt='up' />";
$sparentpic =  "<img src='yellow.gif' width='80' height='60' alt='down' />";
if($sparenti <75) $sparentpic =  "<img src='down.png' width='140' height='140' alt='down' />";
if($sparenti <85 && $sparenti >=75) $sparentpic =  "<img src='down.png' width='100' height='100' alt='down' />";
if($sparenti <90 && $sparenti >=85) $sparentpic =  "<img src='down.png' width='65' height='65' alt='down' />";
if($sparenti >130) $sparentpic =  "<img src='up.png' width='140' height='140' alt='up' />";
if($sparenti >120 && $sparenti <=130) $sparentpic =  "<img src='up.png' width='100' height='100' alt='up' />";
if($sparenti >110 && $sparenti <=120) $sparentpic =  "<img src='up.png' width='65' height='65' alt='up' />";
// family images
// group
$fm_single_image = "image3/a_genx_we.jpg";
// boomer couple
$fm_couple_image = "family_pics/c_boomer_w.jpg";
// family at cottage
$fm_family_image = "family_pics/f_genx_w.jpg";
// young dad with kids
$fm_sparent_image = "family_pics/genx_fishing.jpg";
// adjust for ethnicity
// young couple
if($age_2029p > 22) $fm_couple_image = "family_pics/a_genx_we.jpg";
// high ethnicity
if($MN_VISp > 60) $fm_sparent_image = "family_pics/sp_genx_ch.jpg";
if($MN_VISp > 50) $fm_single_image = "family_pics/s_geny_bl.jpg";
if($MN_VISp > 25) $fm_couple_image = "family_pics/c_boomer_eth.jpg";
if($MN_VISp > 40) $fm_family_image = "family_pics/f_genx_eth.jpg";
// older and ethnic
if($MN_VISp > 40 && $age_60p > 32) $fm_single_image = "age_pics/s_mature_bl.jpg";
// older
if($age_60p > 32 && $MN_VISp < 80) $fm_couple_image = "family_pics/c_mature_w.jpg";
if($age_60p > 46 && $MN_VISp < 80) $fm_single_image = "family_pics/a_mature_w.jpg";
?>
<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {font-size: 20px}
.style3 {font-size: 20px; color: #147EA7; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}
.style5 {
font-size: 18px;
font-weight: bold;
}

.demo{
page-break-before:always !important;

}
.btn-sm, .btn-xs {
    border-radius: 3px;
    font-size: 12px;
    line-height: 1.5;
    padding: 5px 10px;
}
.btn-primary {
    background-color: #428bca;
    border-color: #357ebd;
    color: #ffffff;
}
.btn {
    -moz-user-select: none;
    border: 1px solid transparent;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857;
    margin-bottom: 0;
    padding: 6px 12px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}

.black14 
{ 
font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #333;
font-size: 14px;
font-weight: normal;
padding: 0 0 9px;
}
.style12 {
color: #333;
font-size: 20px;
padding: 0 0 9px;
font-family: "Roboto Condensed", "Lucida Grande", Helvetica, sans-serif;
font-weight: normal;
}
.style2 {font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif; color: #333; font-size: 16px; font-weight: bold; padding: 0 0 9px; }
.style6 {font-size: 14px}
.style12 {font-size: 14px; color: #000000; }
.style15 {font-size: 18px}
-->
</style>
<div class="no_print demo"></div>
<div class="print_pages align="left"> 
<td><table width="911" height="585" border="0" cellspacing="" cellpadding="4" background-color: none;">
<tr>
<td height="79" colspan="2" ><table width="896" border="0" cellpadding="2" cellspacing="4">
<tr>
<td width="125" height="63"  padding-right:"5" align="left" valign="top"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" /></td>
<td width="428" height="63"align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></span></td>
<td width="373" align="right"><strong class="stitle">DEMOGRAPHICS<br />
        </strong> <a class="btn btn-primary btn-sm" onclick="detail_show2(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
          &nbsp;<strong>View Details</strong>&nbsp;</a> </td>

</tr>
</table></td>
</tr>
<tr>
<td width="49%" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
<td width="200" align="center" valign="top"><img src="family_pics/<?php echo $image_display_family;?>" alt="demo1" width="150px" height="150px" class="Example_E" /></td>
<td valign="top" class="black14"><span class="black14 style6"><strong>Primary Family Structure Cohort</strong></span><strong><br />
</span><span class="black14"><?php echo $family_top_comment[0]; ?><br />
<br />
</span></strong><span class="black14"><?php echo $family_comment; ?></span></td>
</tr>
</table></td>
<td width="50%" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
<td width="200" align="center" valign="top"><img src="age_pics/<?php echo $image_display_age;?>" alt="age picture" width="150px" height="150px" class="Example_E" /></td>
<td valign="top" class="black14"><span class="black14"><strong>Primary Age Cohort</strong></span><strong><br />
</span><span class="black14"><?php echo $age_top_comment[0]; ?> <br /><br />
</span>
<span class="black14"><?php echo $age_comment; ?></span></td>
</tr>
</table>
<td width="1%" align="center" valign="top"><br>
</td>
</tr>
<tr>
<td align="center"><span class="style2" style="font-size: 17px">Household Income</span>
<div id="piechart_3d" style="width: 440px; height: 350px; background-color: transparent;"></div></td>
<td align="center"><span class="style2" style="font-size: 17px">Ethnic Diversity</span>
<div id="piechart_3d2aa" style="width: 440px; height: 350px; background-color: transparent;"></div></td>
</tr>
</table>
</div>

<div class="print_pages align="left""> 
<td><table width="889" height="580" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="900" height="83" colspan="2" padding-right:""><table width="890" height="61"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="122" height="61" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></div></td>
<td width="281" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></span></td>
<td width="463" align="right" valign="top"><strong class="stitle">AGE OF ADULTS</strong></td>
</tr>
</table></td>
</tr>
<tr>
<td colspan="2" align="left" valign="top">&nbsp;</td>
</tr>
<tr>
<td colspan="2" align="center" valign="top">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr class="pheading">
<td width="20%" align="center" class="pheading">20s<br /></td>
<td width="20%" align="center"  class="pheading">30s<br /></td>
<td width="20%" align="center" class="pheading">40s<br /></td>
<td width="20%" align="center" class="pheading">50s<br /></td>
<td width="20%" align="center" class="pheading">60+<br /></td>
</tr>
<tr>
<td><img src="age_pics/s_geny_w5.jpg" alt="20s" width="160" height="160" class="Example_E1" /></td>
<td><img src="age_pics/s_genx_eth3.jpg" alt="30s" width="160" height="160" class="Example_E1" /></td>
<td><img src="age_pics/s_boomer_w.jpg" alt="40s" width="160" height="160" class="Example_E1" /></td>
<td><img src="image3/s_boomer_w32.jpg" alt="50s" width="160" height="160" class="Example_E1" /></td>
<td><img src="image3/s_mature_w2.jpg" alt="60s" width="160" height="160" class="Example_E1" /></td>
</tr>
<tr>
<td height="160" align="center" valign="middle"><?php echo $age_2029pic ; ?></td>
<td align="center" valign="middle"><?php echo $age_3039pic ; ?></td>
<td align="center" valign="middle"><?php echo $age_4049pic ; ?></td>
<td align="center" valign="middle"><?php echo $age_5059pic ; ?></td>
<td align="center" valign="middle"><?php echo $age_60pic ; ?></td>
</tr>
<tr>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($age_2029p,1); ?>% </span><br />
<span class="style12"></span><span class="style12">(Index <?php echo number_format($age_2029i); ?>)</span></td>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($age_3039p,1); ?>% </span><br /><span class="style12">(Index <?php echo number_format($age_3039i); ?>)</span></td>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($age_2029p,1); ?>% </span><br />            <span class="style12"><span class="style12">(Index <?php echo number_format($age_4049i); ?>)</span></td>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($age_2029p,1); ?>% </span><br />
<span class="style12">(Index <?php echo number_format($age_5059i); ?>)</span></td>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($age_60p,1); ?>%</span> <br />            <span class="style12"><span class="style12">(Index <?php echo number_format($age_60i); ?>)</span></td>
</tr>
</table>
<span class="pbody12">Market area compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="no_print"></div>
<div class="print_pages" align="left">
<td><table width="889" height="575" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="900" height="83" colspan="2" padding-right:""><table width="890" height="67"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="15%" height="67" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></div></td>
<td width="44%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></span></td>
<td width="53%" align="right" valign="top"><strong class="stitle">FAMILY STRUCTURE</strong><br>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="2" align="center" valign="top">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr>
<td colspan="4" align="center" class="psub2 style15">Family Makeup as a Percent of Market</td>
</tr>
<tr>
<td width="25%" align="center"><table width="95%" border="0" class="Example_E">
<tr>
<td><table width="95%" border="0" align="center">
<tr>
<td align="center" class="psub1"><strong>Singles <br />
No Kids</strong></td>
</tr>
<tr>
<td align="center"><img src="<?php echo $fm_single_image ;?>" alt="20s" width="160" height="160" class="Example_E1" /></td>
</tr>
<tr>
<td height="160" align="center"><?php echo $fm_singlepic ; ?></td>
</tr>
<tr>
<td align="center"><span class="style3"><span class="style1"><?php echo number_format($fm_singlep,1); ?><strong>%</strong></span></span><span class="sbutton"> <br />                            
</span><span class="style12">(Index <?php echo number_format($fm_singlei); ?>)</span></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="25%" align="center"><table width="95%" border="0" class="Example_E">
<tr>
<td><table width="95%" border="0" align="center">
<tr>
<td align="center" class="psub1"><strong>Couples<br />
No Kids</strong></td>
</tr>
<tr>
<td align="center"><img src="<?php echo $fm_couple_image ;?>" alt="30s" width="160" height="160" class="Example_E1" /></td>
</tr>
<tr>
<td height="160" align="center"><?php echo $couplepic ; ?></td>
</tr>
<tr>
<td align="center"><span class="style3"><span class="style1"><?php echo number_format($couplep,1); ?><strong>% </strong></span></span><span class="sbutton"><br />
</span><span class="style3"><span class="style12">(Index <?php echo number_format($couplei); ?>)</span></span></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="25%" align="center"><table width="95%" border="0" class="Example_E">
<tr>
<td><table width="95%" border="0" align="center">
<tr>
<td align="center" class="psub1"><strong>Family<br />
With Kids</strong></td>
</tr>
<tr>
<td align="center"><img src="<?php echo $fm_family_image ;?>" alt="40s" width="160" height="160" class="Example_E1" /></td>
</tr>
<tr>
<td height="160" align="center"><?php echo $familypic ; ?></td>
</tr>
<tr>
<td align="center"><span class="style3"><span class="style1"><?php echo number_format($familyp,1); ?><strong>%</strong> </span></span><span class="sbutton"><br />
</span><span class="style3"><span class="style12">(Index <?php echo number_format($familyi); ?>)</span></span></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="25%" align="center" class="stitle"><table width="95%" border="0" class="Example_E">
<tr>
<td><table width="95%" border="0" align="center">
<tr>
<td align="center" class="psub1"><strong>Single<br />
Parent</strong></td></tr></table><table width="95%" border="0" align="center"><tr>
</tr>
<tr>
<td align="center"><img src="<?php echo $fm_sparent_image ;?>" alt="50s" width="160" height="160" class="Example_E1" /></td>
</tr>
<tr>
<td height="160" align="center"><?php echo $sparentpic ; ?></td>
</tr>
<tr>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($sparentp,1); ?><strong>%</strong></span></span><span class="sbutton"> <br />
</span><span class="style12">(Index <?php echo number_format($sparenti); ?>)</span></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table><span class="pbody12">Market area compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="no_print"></div>
<div class="print_pages" align="left"> 
<td><table width="889" height="507" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="900" height="79" colspan="2" padding-right:""><table width="893" height="67"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="15%" height="67" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></div></td>
<td width="68%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></span></td>
<td width="17%" align="right" valign="top"><strong class="stitle">INCOME</strong><br>
</tr>
</table>
</td>
<tr>
</tr>
<tr>
<td colspan="2" align="center" valign="top">
<table width="100%" border="0" cellspacing="5" cellpadding="5">
<tr>
<td colspan="4" align="center" class="sbutton"><span class="pheading">INCOME $<?php echo number_format($IN_AHHp); ?></span><br />
<span class="psub2">($<?php echo $age_description_hl; ?> than the Benchmark Household Average)</span></td>
</tr>
<tr class="sbutton">
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center" class="sbutton">&nbsp;</td>
</tr>
<tr class="sbutton">
<td width="25%" align="center"><table width="95%" border="0" align="center" class="Example_E1">
<tr>
<td><table width="100%" border="0" align="center">
<tr>
<td align="center"><span class="psub1"><strong class="sbutton">LOWER</strong></span></td>
</tr>
<tr>
<td align="center"><span class="psub1">$0-$30k</span></td>
</tr>
<tr>
<td height="160" align="center"><span class="psub1"><?php echo $inc030pic ; ?></span></td>
</tr>
<tr>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($inc030p,1); ?>% </span><br />
</span><span class="style12">(Index <?php echo number_format($inc030i); ?>)</span></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="25%" align="center"><table width="95%" border="0" align="center" class="Example_E1">
<tr>
<td><table width="100%" border="0" align="center">
<tr>
<td align="center"><span class="psub1"><strong class="psub1">MIDDLE</strong></span></td>
</tr>
<tr>
<td align="center"><span class="psub1">$30-$70k</span></td>
</tr>
<tr>
<td height="160" align="center"><span class="psub1"><?php echo $inc3070pic ; ?></span></td>
</tr>
<tr>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($inc3070p,1); ?>%</span> <br />
</span><span class="style3"><span class="style12">(Index <?php echo number_format($inc3070i); ?>)</span></span></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="25%" align="center"><table width="95%" border="0" align="center" class="Example_E1">
<tr>
<td><table width="100%" border="0" align="center">
<tr>
<td align="center"><span class="psub1"><strong class="sbutton">UPPER-MIDDLE</strong></span></td>
</tr>
<tr>
<td align="center"><span class="psub1">$70-$100k</span></td>
</tr>
<tr>
<td height="160" align="center"><span class="psub1"><?php echo $inc70100pic ; ?></span></td>
</tr>
<tr>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($inc70100p,1); ?>%</span> <br />
</span><span class="style3"><span class="style12">(Index <?php echo number_format($inc70100i); ?>)</span></span></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="25%" align="center" class="sbutton"><table width="95%" border="0" align="center" class="Example_E1">
<tr>
<td><table width="100%" border="0" align="center">
<tr>
<td align="center"><span class="psub1"><strong class="sbutton">AFFLUENT</strong></span></td>
</tr>
<tr>
<td align="center"><span class="psub1">$100k +</span></td>
</tr>
<tr>
<td height="160" align="center"><span class="psub1"><?php echo $inc100pic ; ?></span></td>
</tr>
<tr>
<td align="center"><span class="psub1"><span class="style1"><?php echo number_format($inc100p,1); ?>%</span> <br />
</span><span class="style3"><span class="style12">(Index <?php echo number_format($inc100i); ?>)</span></span></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table><span class="pbody12">Market area compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>

<div class="no_print"></div>
<div class="print_pages align="left""> 
<td><table width="889" height="74" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="900" height="107" colspan="2" padding-right:""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></div></td>
<td width="68%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></span></td>
<td width="17%" align="right" valign="top"><strong class="stitle">DETAILS </strong></td>
</tr>
</table>
<br />
<table width="780px" border="1" align="center" cellpadding="2" cellspacing="0" class="sgrey12">
<tr>
<td width="400"><span class="style5">Age of Adults</span></td>
<td width="125"><div align="center"><span class="sgrey14">Entire Market</span></div></td>
<td width="125"><div align="center"><strong>Benchmark</strong></div></td>
<td width="84"><div align="center"><strong>Index</strong></div></td>
</tr>
<tr>
<td style="padding-left:14px">Age 20-29 (% adults age 20+)</td>
<td><div align="center"><?php echo number_format($age_2029p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_2029c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_2029i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Age 30-39 (% adults age 20+)</td>
<td><div align="center"><?php echo number_format($age_3039p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_3039c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_3039i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Age 40-49 (% adults age 20+)</td>
<td><div align="center"><?php echo number_format($age_4049p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_4049c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_4049i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Age 50-59 (% adults age 20+)</td>
<td><div align="center"><?php echo number_format($age_5059p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_5059c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_5059i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Age 60-69 (% adults age 20+)</td>
<td><div align="center"><?php echo number_format($age_6069p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_6069c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_6069i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Age 70+ (% adults age 20+)</td>
<td><div align="center"><?php echo number_format($age_70p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_70c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_70i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px"><span class="style5">Age of Children</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><div align="center"></div></td>
</tr>
<tr>
<td style="padding-left:14px">Age 0-9 (% of pop.)</td>
<td><div align="center"><?php echo number_format($age_kidsyp,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_kidsyc,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_kidsyi,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Age 10-19 (% of pop.)</td>
<td><div align="center"><?php echo number_format($age_kidsoldp,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_kidsoldc,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($age_kidsoldi,0); ?></div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><div align="center"></div></td>
<td><div align="center"></div></td>
</tr>
<tr>
<td style="padding-left:14px"><strong>Household Income</strong></td>
<td>&nbsp;</td>
<td><div align="center"></div></td>
<td><div align="center"></div></td>
</tr>
<tr>
<td style="padding-left:14px">Modest income (&lt;$30k)</td>
<td><div align="center"><?php echo number_format($inc030p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($inc030c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($inc030i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Middle income ($30-$70k)</td>
<td><div align="center"><?php echo number_format($inc3070p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($inc3070c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($inc3070i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Uppper income ($70k-$100k)</td>
<td><div align="center"><?php echo number_format($inc70100p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($inc70100c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($inc70100i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Most affuent ($100+k)</td>
<td><div align="center"><?php echo number_format($inc100p,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($inc100c,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($inc100i,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px"><span class="style5"> Average Household Income</span></td>
<td><div align="center"><strong>$<?php echo number_format($IN_AHHp,0); ?></strong></div></td>
<td><div align="center"><strong>$<?php echo number_format($IN_AHHc,0); ?></strong></div></td>
<td><div align="center"><strong><?php echo number_format($IN_AHHi,0); ?></strong></div></td>
</tr>
</table>
<span class="pbody12" style="margin-left: 55px;">Market area compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
</tr>
</table>
</div>
<div class="no_print"></div>
<div class="print_pages_last last_page align="left""> 
<td width="900" height="107" colspan="2" padding-right:""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
<tr>
<td width="15%" height="62" align="left" valign="top"><div align="center"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></div></td>
<td width="65%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>
<?php echo $change_title2; ?></span></td>
<td width="20%" align="right" valign="top"><strong class="stitle">DETAILS </strong></td>
</tr>
</table>
<span class="black14"><br />
</span>
<br />
<table width="780px" border="1" align="center" cellpadding="2" cellspacing="0" class="sgrey12">
<tr>
<td width="400">&nbsp;</td>
<td width="125"><div align="center"><span class="sgrey14">Entire Market</span></div></td>
<td width="125"><div align="center"><strong>Benchmark</strong></div></td>
<td width="84"><div align="center"><strong>Index</strong></div></td>
</tr>
<tr>
<td><span class="style5">Family Structure</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="padding-left:14px">Singles</td>
<td><div align="center"><?php echo number_format($fm_singlep,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($fm_singlec,1); ?>%</div></td>
<td> <div align="center"><?php echo number_format($fm_singlei,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Families </td>
<td><div align="center"><?php echo number_format($familyp,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($familyc,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($familyi,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Couples (no children at home)</td>
<td><div align="center"><?php echo number_format($couplep,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($couplec,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($couplei,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Single parent families</td>
<td><div align="center"><?php echo number_format($sparentp,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($sparentc,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($sparenti,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px"><span class="style5">Ethnic Diversity</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="padding-left:14px">South Asian </td>
<td><div align="center"><?php echo number_format($MN_SASIANp,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($MN_SASIANc,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($MN_SASIANi,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Chinese</td>
<td><div align="center"><?php echo number_format($MN_CHINESEp,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($MN_CHINESEc,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($MN_CHINESEi,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Black</td>
<td><div align="center"><?php echo number_format($MN_BLACKp,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($MN_BLACKc,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($MN_BLACKi,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px">Total visible minority population</td>
<td><div align="center"><?php echo number_format($MN_VISp,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($MN_VISc,1); ?>%</div></td>
<td><div align="center"><?php echo number_format($MN_VISi,0); ?></div></td>
</tr>
<tr>
<td style="padding-left:14px" height="22">Caucasian</td>
<td><div align="center"><strong><?php echo number_format($MN_WHITEp,1); ?><strong>%</strong></div></td>
<td><div align="center"><strong><?php echo number_format($MN_WHITEc,1); ?><strong>%</strong></div></td>
<td><div align="center"><strong><?php echo number_format($MN_WHITEi,0); ?></strong></div></td>
</tr>
</table>
<span class="pbody12">Market area compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>
</td>
</tr>
</table>
</div>

