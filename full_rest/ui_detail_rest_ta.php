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
  <td colspan="2" align="center" valign="top"><img src="rest_cover.jpg" width="900" height="350" alt="restaurant summary" /></td>
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
<br />
<?php 


?>
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
      <td width="25%" height="250" ><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_fullserve_image'][0]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/1.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_fullserve_name'][0]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_fullserve_p'][0]); ?>%</span></td>
        </tr>

    
      </table></td>
      <td width="25%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_fullserve_image'][1]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/2.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_fullserve_name'][1]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_fullserve_p'][1]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_fullserve_image'][2]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/3.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_fullserve_name'][2]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_fullserve_p'][2]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_fullserve_image'][3]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/4.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_fullserve_name'][3]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_fullserve_p'][3]); ?>%</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_fullserve_image'][4]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/5.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_fullserve_name'][4]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_fullserve_p'][4]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_fullserve_image'][5]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/6.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_fullserve_name'][5]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_fullserve_p'][5]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_fullserve_image'][6]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/7.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_fullserve_name'][6]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_fullserve_p'][6]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_fullserve_image'][7]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/8.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_fullserve_name'][7]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_fullserve_p'][7]); ?>%</span></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<br />
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
      <td width="25%" height="250" align="center" ><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_qsr_image'][0]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/1.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_qsr_name'][0]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_qsr_p'][0]); ?>%</span></td>
        </tr>

    
      </table></td>
      <td width="25%" height="250" align="center"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_qsr_image'][1]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/2.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_qsr_name'][1]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_qsr_p'][1]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%" align="center"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_qsr_image'][2]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/3.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_qsr_name'][2]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_qsr_p'][2]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%" height="250" align="center"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_qsr_image'][3]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/4.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_qsr_name'][3]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_qsr_p'][3]); ?>%</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="25%" height="250" align="center" valign="top"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_qsr_image'][4]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/5.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_qsr_name'][4]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_qsr_p'][4]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%" height="250" align="center" valign="top"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_qsr_image'][5]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/6.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_qsr_name'][5]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_qsr_p'][5]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%" align="center" valign="top"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_qsr_image'][6]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/7.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_qsr_name'][6]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_qsr_p'][6]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="25%" height="250" align="center" valign="top"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_qsr_image'][7]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/8.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_qsr_name'][7]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_qsr_p'][7]); ?>%</span></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<br />
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
      <td width="33%" height="250" ><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_coffee_image'][0]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/1.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_coffee_name'][0]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_coffee_p'][0]); ?>%</span></td>
        </tr>

    
      </table></td>
      <td width="33%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_coffee_image'][1]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/2.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_coffee_name'][1]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_coffee_p'][1]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="33%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_coffee_image'][2]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/3.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_coffee_name'][2]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_coffee_p'][2]); ?>%</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="33%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_coffee_image'][3]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/4.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_coffee_name'][3]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_coffee_p'][3]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="33%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_coffee_image'][4]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/5.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_coffee_name'][4]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_coffee_p'][4]); ?>%</span></td>
        </tr>
      </table></td>
      <td width="33%" height="250"><table width="100%" class="Example_E1">
        <tr>
          <td colspan="2" align="center" valign="top"><img src="<?php echo $rest['sorted_coffee_image'][5]; ?>" width="175" height="175" alt="rank1" /></td>
        </tr>
        <tr>
          <td width="75" class="sgrey50"><strong><img src="nums/6.png" width="60" height="60" alt="1" /></strong></td>
          <td width="200"><span class="sblue"><strong><?php echo $rest['sorted_coffee_name'][5]; ?></strong></span><br />
            <span class="sgrey14">Patrons: <?php echo number_format($rest['sorted_coffee_p'][5]); ?>%</span></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<br />
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
        <?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> | Patrons: 1+ visit per year</span></td>
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

<br />
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
            <td width="300"><span class="style4"><strong>Restaurant Annual Visits</strong></span></td>
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
      </table>
        <span class="style4"><?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> | Patrons: 1+ visit per year</span></td>
      <td width="450" valign="top" padding-right:="padding-right:"""><img src="image3/fast_food.jpg" width="400" height="400" alt="quick serve" /></td>
    </tr>
  </table></td>
</div>

<br />
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
      <td width="50%" height="107" padding-right:="padding-right:"""><span class="style4"><img src="image3/coffee.jpg" width="400" height="400" alt="coffee" /><br />
        <?php echo $change_title; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> | Patrons: 1+ visit per year</span></td>
      <td width="450" valign="top" padding-right:="padding-right:"""><table width="100%" height="400"  border="1" align="center" cellpadding="1" cellspacing="0" class="style4">
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
          <td>MMMMuffins</td>
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
