 <div class="pagebreak"></div>
   
<div class="print_pages" align="left"> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
<tr>
  <td width="900" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
      <td width="43%" align="left" valign="top" class="black12"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br>
        <span class="pbody">Target Audience only: <?php echo $var1_fullname_string; ?></span></td>
      <td width="42%" align="right"><strong class="pheading">LOCATION</strong></td>
    </tr>
  </table></td>
</tr>
              
              <tr>
                <td align="center" colspan="2"><div id="map" style="width: 880px; height: 450px"></div>                  
                <span class="pbody12">Each pin represents a 6 digit postal code  for your target audience. (max 3000 pins displayed)</span></td>
              </tr>
  </table>
</div>

<div class="pagebreak"></div>

<div class="print_pages" align="left"> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="43%" align="left" valign="top" class="black12"><strong class="black18">Store  # <?php echo $store_number; ?></strong><br>
            <span class="pbody">Target Audience only: <?php echo $var1_fullname_string; ?></span></td>
          <td width="42%" align="right"><span class="pheading"><strong class="stitle1">SCORE BY DECILE</strong></span><strong class="stitle1"><br>
          </strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td >&nbsp;</td>
    </tr>
    <tr>
    <td class="sgrey14" >      <strong class="psub2">Market area average: <?php echo round($average_score_in_area); ?> <br>   
      Top 20% of households: <?php echo round((($decile_score_array[0] + $decile_score_array[1]) / 2)); ?><br>
      Bottom 20% of households:<?php echo round((($decile_score_array[8] + $decile_score_array[9]) / 2)); ?></strong></td>
    </tr>
  <tr>
  <td ><div id="chart_div" style="width: 880px; height: 420px;"></div></td>
  </tr>
  </table>
</div>

 <div class="pagebreak"></div>
<div class="print_pages" align="left"> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" colspan="2" class="sorange24" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="52%" align="left" valign="top" class="black12"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br>
            <span class="pbody">Target Audience only: <?php echo $var1_fullname_string; ?></span></td>
          <td width="33%" align="right"><span class="pheading"><strong class="stitle1">LIFT CHART</strong></span><strong class="stitle1"><br>
            </strong> </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" class="sorange24" >&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center" ><div id="chart_div4" style="width: 600px; height: 520px;"></div></td>
    </tr>
  </table>
</div>
  
  

   <div class="pagebreak"></div>
<div class="print_pages" align="left"> 
  <table width="900px" height="610" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="52%" align="left" valign="top" class="black12"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br>
            <span class="pbody">Target Audience only: <?php echo $var1_fullname_string; ?></span></td>
          <td width="33%" align="right"><span class="pheading"><strong class="stitle1">DEMOGRAPHICS</strong></span><strong class="stitle1"><br>
            </strong> <a class="btn btn-primary btn-sm" onClick="DETAILsubmit_2(<?php echo $report_uid * 3571 ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
              &nbsp;<strong>View Details</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
    <td colspan="2" align="left" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td width="50%" align="center" valign="top"><br>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="200" align="center"><img src="family_pics/<?php echo $image_display_family;?>" alt="demo1" width="150px" height="150px" class="Example_E" /></td>
          <td valign="top" class="sgrey14"><p><span class="psub2"><strong>Primary Family Structure Cohort<br>
          <?php echo $family_top_comment[0]; ?> </strong></span><span class="pbody"><strong><br>
            </strong></span><span class="pbody"><?php echo $family_comment; ?></span></p></td>
          </tr>
        </table>
      <br></td>
    <td align="center" valign="top"><br>      
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="200" align="center"><img src="age_pics/<?php echo $image_display_age;?>" alt="age picture" width="150px" height="150px" class="Example_E" /></td>
          <td valign="top" class="sgrey14"><p class="sgrey14"><span class="psub2"><strong>Primary Age Cohort<br>
          <?php echo $age_top_comment[0]; ?></strong></span><span class="pbody"><strong><br>
          </strong><?php echo $age_comment; ?></span></p></td>
          </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center"> <span class="psub2">Household Income</span>      <div id="piechart_3d" style="width: 400px; height: 232px;"></div>
  </td>
    <td align="center"><span class="psub2">Ethnic Diversity</span>      <div id="piechart_3d2" style="width: 400px; height: 232px;"></div></td>
  </tr>
  </table>
</div>
