
 <link rel='STYLESHEET' type='text/css' href='master_style.css'>
<style type="text/css">
    body {
        background-color: #FFF;
        margin: 0;
        padding: 0;
    }
    #wrapper {
        width:915px;
		height:620px;
        margin-left:auto;
        margin-right:auto;
        background-color:#666666;
    }
	#wrapper2 {
        width:915px;
		height:620px;
        margin-left:auto;
        margin-right:auto;
        background-color:#666666;
    }
	@media print {
    .pagebreak {page-break-after: always;}
	}
	
.print_pages {
  width: 910px;
  height: 620px;
  background: #fff;
  margin: 25px 0 0 0;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}
.print_pages_cover {
  width: 910px;
  height: 600px;
  background: #fff;
  margin: 25px 0 0 0;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}
.sgrey50 {	font-family: Trebuchet, serif;
	font-size: 60px;
	font-weight: normal;
	color: #900;
}

.sgrey141 {font-family: Trebuchet, serif;
	font-size: 15px;
	font-weight: normal;
	color: #666666;
}
.stitle {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 40px;
	font-weight: bold;
	color: #147EA7;
}
</style>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data3 = google.visualization.arrayToDataTable([
          ['Ethnicity', 'Percent'],
          ['Caucasian <?php echo round($MN_WHITEp,1); ?>%',<?php echo round($MN_WHITEp,1); ?>],
          ['South Asian <?php echo round($MN_SASIANp,1); ?>%',<?php echo round($MN_SASIANp,1); ?>],
		  ['Chinese <?php echo round($MN_CHINESEp,1); ?>%',<?php echo round($MN_CHINESEp,1); ?>],
		  ['Black <?php echo round($MN_BLACKp,1); ?>%',<?php echo round($MN_BLACKp,1); ?>],
          ['Other <?php echo round(($MN_VISp-$MN_SASIANp-$MN_CHINESEp-$MN_BLACKp),1); ?>%',<?php echo round(($MN_VISp-$MN_SASIANp-$MN_CHINESEp-$MN_BLACKp),1); ?>]
        ]);

        var options3 = {
          legend: {position: 'right', maxLines: 7},
		  fontSize: 18,
      		bold: true,
		  is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d3'));
        chart.draw(data3, options3);
      }
    </script>
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
    <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="85%" align="right"><strong class="stitle">DEMOGRAPHICS</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
    <td colspan="2" align="left" valign="top"><span class="sgrey14">Store #<?php echo $store_number; ?>, <?php echo $store_name; ?> - 
Target audience (compared to National average)</span></td>
    </tr>
  <tr>
    <td width="50%" align="center" valign="top"><br>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="200" align="center"><img src="family_pics/<?php echo $image_display_family;?>" alt="demo1" width="150px" height="150px" class="Example_E" /></td>
          <td valign="top" class="sgrey14"><p><strong><span class="sorange16">Primary Family Structure Cohort</span></strong></p>
            <p><strong><?php echo $family_top_comment[0]; ?> <br>
            </strong></p>            <?php echo $family_comment; ?></td>
          </tr>
        </table>
      <br></td>
    <td align="center" valign="top"><br>      
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="200" align="center"><img src="age_pics/<?php echo $image_display_age;?>" alt="age picture" width="150px" height="150px" class="Example_E" /></td>
          <td valign="top" class="sgrey14"><p class="sgrey14"><strong><span class="sorange16">Primary Age Cohort</span></strong></p>
            <p class="sgrey14"><strong><?php echo $age_top_comment[0]; ?> <br>
            </strong></p>            <?php echo $age_comment; ?></td>
          </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center"> <span class="sorange16">Household Income</span>      <div id="piechart_3d" style="width: 400px; height: 280px;"></div>
  </td>
    <td align="center"><span class="sorange16">Ethnic Diversity</span>      <div id="piechart_3d2" style="width: 400px; height: 280px;"></div></td>
  </tr>
  </table>
</div>

<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50" colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%"><?php if($user_id == 1) echo "<img src='tdm.png' width='198' height='66' alt='KQUEST'>"; else echo "<img src='KQUEST.png' width='113' height='50' alt='KQUEST'>" ; ?></td>
          <td width="85%" align="right"><strong class="stitle">AGE OF ADULTS</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
    <td colspan="2" align="left" valign="top"><span class="sgrey14">Store #<?php echo $store_number; ?>, <?php echo $store_name; ?> - 
Target audience (compared to National average) age 20+</span></td>
    </tr>
  <tr>
    <td colspan="2" align="center" valign="top">
      <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td colspan="5" align="center" class="sbutton">Age of your Target Audience</td>
          </tr>
        <tr>
          <td width="25%" align="center"><strong class="stitle">20s</strong></td>
          <td width="25%" align="center"><strong class="stitle">30s</strong></td>
          <td width="25%" align="center"><strong class="stitle">40s</strong></td>
          <td width="25%" align="center" class="stitle">50s</td>
          <td width="25%" align="center"><strong class="stitle">60+</strong></td>
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
          <td align="center" valign="middle" class="sbutton"><?php echo number_format($age_2029p,1); ?>% <br />
            (index <?php echo number_format($age_2029i); ?>)</td>
         <td align="center" valign="middle" class="sbutton"><?php echo number_format($age_3039p,1); ?>% <br />
           (index <?php echo number_format($age_3039i); ?>)</td>
          <td align="center" valign="middle" class="sbutton"><?php echo number_format($age_2029p,1); ?>% <br />
            (index <?php echo number_format($age_4049i); ?>)</td>
          <td align="center" valign="middle" class="sbutton"><?php echo number_format($age_2029p,1); ?>% <br />
            (index <?php echo number_format($age_5059i); ?>)</td>
          <td align="center" valign="middle" class="sbutton"><?php echo number_format($age_60p,1); ?>% <br />
            (index <?php echo number_format($age_60i); ?>)</td>
          </tr>
      </table></td>
  </tr>
  </table>
</div>


<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50" colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="85%" align="right"><strong class="stitle">FAMILY STRUCTURE</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
    <td colspan="2" align="left" valign="top"><span class="sgrey14">Store #<?php echo $store_number; ?>, <?php echo $store_name; ?> - 
Target audience (compared to National average) </span></td>
    </tr>
  <tr>
    <td colspan="2" align="center" valign="top">
      <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center" class="stitle">&nbsp;</td>
        </tr>
        <tr>
          <td width="25%" align="center"><table width="95%" border="0" class="Example_E">
            <tr>
              <td><table width="95%" border="0" align="center">
                <tr>
                  <td align="center" class="sbutton"><strong>Singles <br />
                    no Kids</strong></td>
                  </tr>
                <tr>
                  <td align="center"><img src="<?php echo $fm_single_image ;?>" alt="20s" width="160" height="160" class="Example_E1" /></td>
                  </tr>
                <tr>
                  <td height="160" align="center"><?php echo $fm_singlepic ; ?></td>
                  </tr>
                <tr>
                  <td align="center"><span class="sbutton"><?php echo number_format($fm_singlep,1); ?>% <br />
                    (index <?php echo number_format($fm_singlei); ?>)</span></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          <td width="25%" align="center"><table width="95%" border="0" class="Example_E">
            <tr>
              <td><table width="95%" border="0" align="center">
                <tr>
                  <td align="center" class="sbutton"><strong>Couples<br />
                    no Kids</strong></td>
                  </tr>
                <tr>
                  <td align="center"><img src="<?php echo $fm_couple_image ;?>" alt="30s" width="160" height="160" class="Example_E1" /></td>
                  </tr>
                <tr>
                  <td height="160" align="center"><?php echo $couplepic ; ?></td>
                  </tr>
                <tr>
                  <td align="center"><span class="sbutton"><?php echo number_format($couplep,1); ?>% <br />
                    (index <?php echo number_format($couplei); ?>)</span></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          <td width="25%" align="center"><table width="95%" border="0" class="Example_E">
            <tr>
              <td><table width="95%" border="0" align="center">
                <tr>
                  <td align="center" class="sbutton"><strong>Family<br />
                    with Kids</strong></td>
                  </tr>
                <tr>
                  <td align="center"><img src="<?php echo $fm_family_image ;?>" alt="40s" width="160" height="160" class="Example_E1" /></td>
                  </tr>
                <tr>
                  <td height="160" align="center"><?php echo $familypic ; ?></td>
                  </tr>
                <tr>
                  <td align="center"><span class="sbutton"><?php echo number_format($familyp,1); ?>% <br />
                    (index <?php echo number_format($familyi); ?>)</span></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          <td width="25%" align="center" class="stitle"><table width="95%" border="0" class="Example_E">
            <tr>
              <td><table width="95%" border="0" align="center">
                <tr>
                  <td align="center" class="sbutton"><strong>Single<br />
                    Parent</strong></td></tr></table><table width="95%" border="0" align="center"><tr>
                  </tr>
                  <tr>
                    <td align="center"><img src="<?php echo $fm_sparent_image ;?>" alt="50s" width="160" height="160" class="Example_E1" /></td>
                    </tr>
                  <tr>
                    <td height="160" align="center"><?php echo $sparentpic ; ?></td>
                    </tr>
                  <tr>
                    <td align="center"><span class="sbutton"><?php echo number_format($sparentp,1); ?>% <br />
                      (index <?php echo number_format($sparenti); ?>)</span></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  </table>
</div>

<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50" colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="85%" align="right"><strong class="stitle">HOUSEHOLD INCOME</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
    <td colspan="2" align="left" valign="top"><span class="sgrey14">Store #<?php echo $store_number; ?>, <?php echo $store_name; ?> - 
Target audience households (compared to National average) </span></td>
    </tr>
  <tr>
    <td colspan="2" align="center" valign="top">
      <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr>
          <td colspan="4" align="center" class="sbutton"><br />
            <span class="stitle2">INCOME $<?php echo number_format($IN_AHHp); ?></span><br />
            ($<?php echo $age_description_hl; ?> than the National household average)</td>
          </tr>
        <tr class="sbutton">
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center" class="sbutton">&nbsp;</td>
        </tr>
        <tr class="sbutton">
          <td width="25%" align="center"><table width="95%" border="0" align="center" class="Example_E">
            <tr>
              <td><table width="100%" border="0" align="center">
                <tr>
                  <td align="center"><strong class="sbutton">LOWER</strong></td>
                  </tr>
                <tr>
                  <td align="center">$0-$30k</td>
                  </tr>
                <tr>
                  <td height="160" align="center"><?php echo $inc030pic ; ?></td>
                  </tr>
                <tr>
                  <td align="center"><?php echo number_format($inc030p,1); ?>% <br />
                    (index <?php echo number_format($inc030i); ?>)</td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          <td width="25%" align="center"><table width="95%" border="0" align="center" class="Example_E">
            <tr>
              <td><table width="100%" border="0" align="center">
                <tr>
                  <td align="center"><strong class="sbutton">MIDDLE</strong></td>
                </tr>
                <tr>
                  <td align="center">$30-$70k</td>
                </tr>
                <tr>
                  <td height="160" align="center"><?php echo $inc3070pic ; ?></td>
                </tr>
                <tr>
                  <td align="center"><?php echo number_format($inc3070p,1); ?>% <br />
                    (index <?php echo number_format($inc3070i); ?>)</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
          <td width="25%" align="center"><table width="95%" border="0" align="center" class="Example_E">
            <tr>
              <td><table width="100%" border="0" align="center">
                <tr>
                  <td align="center"><strong class="sbutton">UPPER-MIDDLE</strong></td>
                </tr>
                <tr>
                  <td align="center">$70-$100k</td>
                </tr>
                <tr>
                  <td height="160" align="center"><?php echo $inc70100pic ; ?></td>
                </tr>
                <tr>
                  <td align="center"><?php echo number_format($inc70100p,1); ?>% <br />
                    (index <?php echo number_format($inc70100i); ?>)</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
          <td width="25%" align="center" class="sbutton"><table width="95%" border="0" align="center" class="Example_E">
            <tr>
              <td><table width="100%" border="0" align="center">
                <tr>
                  <td align="center"><strong class="sbutton">AFFLUENT</strong></td>
                </tr>
                <tr>
                  <td align="center">$100k +</td>
                </tr>
                <tr>
                  <td height="160" align="center"><?php echo $inc100pic ; ?></td>
                </tr>
                <tr>
                  <td align="center"><?php echo number_format($inc100p,1); ?>% <br />
                    (index <?php echo number_format($inc100i); ?>)</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
  </table>
</div>



<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="50" colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="85%" align="right"><strong class="stitle">ETHNIC DIVERSITY</strong></td>
        </tr>
      </table>
        <span class="sgrey14">Store #<?php echo $store_number; ?>, <?php echo $store_name; ?> - 
Target audience (all persons in target households)</span><br />
<div id="piechart_3d3" style="width: 880px; height: 520px;"></div></td>
    </tr>
  </table>
</div>


  <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
      <td width="85%" align="right"><strong class="stitle">DEMOGRAPHICS</strong></td>
    </tr>
  </table>
    <span class="sgrey14">Store #<?php echo $store_number; ?>, <?php echo $store_name; ?> - 
Target audience (compared to National average)</span>
    <table width="880px" border="1" cellpadding="1" cellspacing="0" class="sgrey12">
    <tr>
    <td width="400"><strong>Age of Adults</strong></td>
    <td width="125"><strong>Target Audience</strong></td>
    <td width="125"><strong>Canada</strong></td>
    <td width="84"><strong>Index</strong></td>
  </tr>
      <tr>
        <td>Age 20-29 (% adults age 20+)</td>
        <td><?php echo number_format($age_2029p,1); ?>%</td>
        <td><?php echo number_format($age_2029c,1); ?>%</td>
        <td><?php echo number_format($age_2029i,0); ?></td>
      </tr>
      <tr>
        <td>Age 30-39 (% adults age 20+)</td>
        <td><?php echo number_format($age_3039p,1); ?>%</td>
        <td><?php echo number_format($age_3039c,1); ?>%</td>
        <td><?php echo number_format($age_3039i,0); ?></td>
      </tr>
      <tr>
        <td>Age 40-49 (% adults age 20+)</td>
        <td><?php echo number_format($age_4049p,1); ?>%</td>
        <td><?php echo number_format($age_4049c,1); ?>%</td>
        <td><?php echo number_format($age_4049i,0); ?></td>
      </tr>
      <tr>

        <td>Age 50-59 (% adults age 20+)</td>
        <td><?php echo number_format($age_5059p,1); ?>%</td>
        <td><?php echo number_format($age_5059c,1); ?>%</td>
        <td><?php echo number_format($age_5059i,0); ?></td>
      </tr>
      <tr>
        <td>Age 60-69 (% adults age 20+)</td>
        <td><?php echo number_format($age_6069p,1); ?>%</td>
        <td><?php echo number_format($age_6069c,1); ?>%</td>
        <td><?php echo number_format($age_6069i,0); ?></td>
      </tr>
      <tr>
        <td>Age 70+ (% adults age 20+)</td>
        <td><?php echo number_format($age_70p,1); ?>%</td>
        <td><?php echo number_format($age_70c,1); ?>%</td>
        <td><?php echo number_format($age_70i,0); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Age of Children</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Age 0-9 (% of pop.)</td>
        <td><?php echo number_format($age_kidsyp,1); ?>%</td>
        <td><?php echo number_format($age_kidsyc,1); ?>%</td>
        <td><?php echo number_format($age_kidsyi,0); ?></td>
      </tr>
      <tr>
        <td>Age 10-19 (% of pop.)</td>
        <td><?php echo number_format($age_kidsoldp,1); ?>%</td>
        <td><?php echo number_format($age_kidsoldc,1); ?>%</td>
        <td><?php echo number_format($age_kidsoldi,0); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Household Income</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Modest income (&lt;$30k)</td>
        <td><?php echo number_format($inc030p,1); ?>%</td>
        <td><?php echo number_format($inc030c,1); ?>%</td>
        <td><?php echo number_format($inc030i,0); ?></td>
      </tr>
      <tr>
        <td>Middle income ($30-$70k)</td>
        <td><?php echo number_format($inc3070p,1); ?>%</td>
        <td><?php echo number_format($inc3070c,1); ?>%</td>
        <td><?php echo number_format($inc3070i,0); ?></td>
      </tr>
      <tr>
        <td>Uppper income ($70k-$100k)</td>
        <td><?php echo number_format($inc70100p,1); ?>%</td>
        <td><?php echo number_format($inc70100c,1); ?>%</td>
        <td><?php echo number_format($inc70100i,0); ?></td>
      </tr>
      <tr>
        <td>Most affuent ($100+k)</td>
        <td><?php echo number_format($inc100p,1); ?>%</td>
        <td><?php echo number_format($inc100c,1); ?>%</td>
        <td><?php echo number_format($inc100i,0); ?></td>
      </tr>
      <tr>
        <td><strong>Average household income</strong></td>
        <td>$<?php echo number_format($IN_AHHp,0); ?></td>
        <td>$<?php echo number_format($IN_AHHc,0); ?></td>
        <td><?php echo number_format($IN_AHHi,0); ?></td>
      </tr>
</table></td>
  </tr>
  </table>
</div>



 <div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left""> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
      <td width="85%" align="right"><strong class="stitle">DEMOGRAPHICS</strong></td>
    </tr>
  </table>
    <span class="sgrey14">Store #<?php echo $store_number; ?>, <?php echo $store_name; ?> - 
Target audience (compared to National average)</span>
    <table width="880px" border="1" cellpadding="1" cellspacing="0" class="sgrey12">
    <tr>
    <td width="400">&nbsp;</td>
    <td width="125"><strong>Target Audience</strong></td>
    <td width="125"><strong>Canada</strong></td>
    <td width="84"><strong>Index</strong></td>
  </tr>
      <tr>
        <td><strong>Family Structure</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Singles</td>
        <td><?php echo number_format($fm_singlep,1); ?>%</td>
        <td><?php echo number_format($fm_singlec,1); ?>%</td>
        <td><?php echo number_format($fm_singlei,0); ?></td>
      </tr>
      <tr>
        <td>Families </td>
        <td><?php echo number_format($familyp,1); ?>%</td>
        <td><?php echo number_format($familyc,1); ?>%</td>
        <td><?php echo number_format($familyi,0); ?></td>
      </tr>
      <tr>
        <td>Couples (no children at home)</td>
        <td><?php echo number_format($couplep,1); ?>%</td>
        <td><?php echo number_format($couplec,1); ?>%</td>
        <td><?php echo number_format($couplei,0); ?></td>
      </tr>
      <tr>
        <td>Single parent families</td>
        <td><?php echo number_format($sparentp,1); ?>%</td>
        <td><?php echo number_format($sparentc,1); ?>%</td>
        <td><?php echo number_format($sparenti,0); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Ethnic Diversity</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>South Asian </td>
        <td><?php echo number_format($MN_SASIANp,1); ?>%</td>
        <td><?php echo number_format($MN_SASIANc,1); ?>%</td>
        <td><?php echo number_format($MN_SASIANi,0); ?></td>
      </tr>
      <tr>
        <td>Chinese</td>
        <td><?php echo number_format($MN_CHINESEp,1); ?>%</td>
        <td><?php echo number_format($MN_CHINESEc,1); ?>%</td>
        <td><?php echo number_format($MN_CHINESEi,0); ?></td>
      </tr>
      <tr>
        <td>Black</td>
        <td><?php echo number_format($MN_BLACKp,1); ?>%</td>
        <td><?php echo number_format($MN_BLACKc,1); ?>%</td>
        <td><?php echo number_format($MN_BLACKi,0); ?></td>
      </tr>
      <tr>
        <td>Total visible minority population</td>
        <td><?php echo number_format($MN_VISp,1); ?>%</td>
        <td><?php echo number_format($MN_VISc,1); ?>%</td>
        <td><?php echo number_format($MN_VISi,0); ?></td>
      </tr>
      <tr>
        <td height="22">Caucasian</td>
        <td><?php echo number_format($MN_WHITEp,1); ?>%</td>
        <td><?php echo number_format($MN_WHITEc,1); ?>%</td>
        <td><?php echo number_format($MN_WHITEi,0); ?></td>
      </tr>
</table></td>
  </tr>
  </table>
</div>

