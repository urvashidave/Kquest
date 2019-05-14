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


@media print{

 .print_pages{
    
    width:90%;
    min-width:90%;
    height:auto;
    margin-top:5% !important;
    margin-left:5%;
    margin-right:5%;


    }
    .container{
    
    width:90% !important;
     margin-left:5%;
   
    } 
    
    .container row col-md-12 print_pages{
    width:90%;
     margin-left:5%;
    
    }
    }
    
    
.style4 td {
    padding-left: 14px;
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
</style>
<div id="page-wrap" class="print_pages tgdr">
<table width="900px" height="589" border="0" cellspacing="0" cellpadding="0" bgcolor="">
<tr>
<td width="900" colspan="2" align="center" valign="middle" class="blue22"><p><span class="blue22"><strong>
  <!--to put message here  -->
  </strong></span><br>
  <?php 
$profile_pic_title = "COMPARISON REPORT";

echo $profile_pic_title;
?>
  </span><br>
  <span class="black18"><br>
  </span><span class="black18"><?php echo $change_header; ?> 
  </span><span class="black18"><br>
  <?php echo $change_title; ?><br>
  <?php echo $change_prepared; ?></span></p>
  <p><span class="black22">
    <?php echo $store_number . " " . $store_name; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?>
  </span></p></td>
</tr>
<tr>
  <td colspan="2" align="center" valign="top"><img src="image3/compare.jpg" width="300" height="249" alt="compare" /></td>
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
<div class="container row col-md-12 print_pages" align="left">
  <table width="903" height="664" border="0" cellspacing="4" cellpadding="0">
    <tr>
      <td height="79" colspan="2" ><table width="100%" border="0" cellspacing="2" cellpadding="1">
        <tr>
          <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
          <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="43%" align="right" class="stitle">HOUSING</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="49%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="0" class="style4">
        <tr >
          <th width="155" align="left"><strong> Household Details</strong></th>
          <th width="106" align="left"><div align="center"><strong>Market <br />
            Area</strong></div></th>
          <th width="77" align="left"><div align="center"><strong>Benchmark<br />
          </strong></div></th>
        </tr>
        <tr class="style4">
          <td>Total  houses</td>
          <td align="center"><?php echo number_format($mfd_home);?></td>
          <td align="center"><?php echo number_format($rbench['mfd_homes'][0]);?></td>
        </tr>
        <tr class="style4">
          <td>Total  apartment units</td>
          <td align="center"><?php echo number_format($mfd_apts);?></td>
          <td align="center"><?php echo number_format($rbench['mfd_homes'][1]);?></td>
        </tr>
        <tr class="style4">
          <td>Total  farms</td>
          <td align="center"><?php echo number_format($mfd_farm);?></td>
          <td align="center"><?php echo number_format($rbench['mfd_homes'][2]);?></td>
        </tr>
        <tr class="style4">
          <td>Total  households</td>
          <td align="center"><?php echo number_format($demo['mfd_homes'][3]);?></td>
          <td align="center"><?php echo number_format($rbench['mfd_homes'][3]);?></td>
          </tr>
        <tr class="style4">
          <td>&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr class="style4">
          <td> Households analyzed*</td>
          <td align="center"><?php echo number_format($hh_tot);?></td>
          <td align="center"><?php echo number_format($rbench['summary'][19]);?></td>
        </tr>
        <tr class="style4">
          <td>Population </td>
          <td align="center"><?php echo number_format($demo['summary'][0]);?></td>
          <td align="center"><?php echo number_format($rbench['summary'][0]);?></td>
          </tr>
        <tr class="style4">
          <td>&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr class="style4">
          <td>Average Dwelling Value</td>
          <td align="center">$<?php echo number_format($pDW_AVALUE);?></td>
          <td align="center">$<?php echo number_format($rbench['improve'][109]/$rbench['improve'][0] );?></td>
        </tr>
        <?php 
 $pother_homes = $pDW_MOVA + $pDW_DUP + $pDW_OT_SING;
 $cother_homes = $cDW_MOVA + $cDW_DUP + $cDW_OT_SING;
 $iother_homes = min(500,$pother_homes / $cother_homes *100);
 ?>
      </table>
        <br />
        <span class="style4">* 
          &quot;Households analyzed&quot; are the households with demographic and other attributes available  for analysis whereas &quot;total&quot; refers to  all households where demographic data (in some cases demographic data may not be available and there may be vacant properties)<br />
      <br />
<?php echo $store_number . " " . $store_name; ?> (Market Area) Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?> (Benchmark)</span></td>
      <td width="51%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="0" class="style4">
        <tr >
          <th align="left"><strong>Dwelling Style</strong></th>
          <th align="left"><div align="center"><strong>Market <br />
            Area</strong></div></th>
          <th align="left"><div align="center"><strong>Benchmark<br />
          </strong></div></th>
        </tr>
        <tr>
          <td>Single-detached house</td>
          <td align="center"><?php echo number_format($pDW_SINGLE,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SINGLE,1);?>%</td>
        </tr>
        <tr>
          <td>&lt;5 story building</td>
          <td align="center"><?php echo number_format($pDW_APT_5,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_APT_5,1);?>%</td>
        </tr>
        <tr>
          <td>5+ story building</td>
          <td align="center"><?php echo number_format($pDW_APT5_,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_APT5_,1);?>%</td>
        </tr>
        <tr>
          <td>Semi-detached house</td>
          <td align="center"><?php echo number_format($pDW_SEMI,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_SEMI,1);?>%</td>
        </tr>
        <tr>
          <td>Row house</td>
          <td align="center"><?php echo number_format($pDW_ROW,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_ROW,1);?>%</td>
        </tr>
        <tr>
          <td>Other dwelling</td>
          <td align="center"><?php echo number_format($pother_homes,1);?>%</td>
          <td align="center"><?php echo number_format($cother_homes,1);?>%</td>
        </tr>
        <tr >
          <th align="left">&nbsp;</th>
          <th align="left">&nbsp;</th>
          <th align="left">&nbsp;</th>
        </tr>
        <tr >
          <th width="155" align="left"><strong>Period of Construction </strong></th>
          <th width="106" align="left"><div align="center"><strong>Market <br />
            Area</strong></div></th>
          <th width="77" align="left"><div align="center"><strong>Benchmark<br />
          </strong></div></th>
        </tr>
        <tr class="style4">
          <td>1960 or before</td>
          <td align="center"><?php echo number_format($pDW_CON_60,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_CON_60,1);?>%</td>
        </tr>
        <tr class="style4">
          <td>1961 to 1980</td>
          <td align="center"><?php echo number_format($pDW_CON6180,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_CON6180,1);?>%</td>
        </tr>
        <tr class="style4">
          <td>1981 to 1990</td>
          <td align="center"><?php echo number_format($pDW_CON8190,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_CON8190,1);?>%</td>
        </tr>
        <tr class="style4">
          <td>1991 to 2000</td>
          <td align="center"><?php echo number_format($pDW_CON9100,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_CON9100,1);?>%</td>
        </tr>
        <tr class="style4">
          <td>2001 to 2005</td>
          <td align="center"><?php echo number_format($pDW_CON0105,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_CON0105,1);?>%</td>
        </tr>
        <tr class="style4">
          <td>2006 to 2011</td>
          <td align="center"><?php echo number_format($pDW_CON0611,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_CON0611,1);?>%</td>
        </tr>
        <tr class="style4">
          <td>2012 and newer</td>
          <td align="center"><?php echo number_format($pDW_CON12_,1);?>%</td>
          <td align="center"><?php echo number_format($cDW_CON12_,1);?>%</td>
        </tr>
      </table>
        <br />
      <p class="style4">&nbsp;</p></td>
    </tr>
  </table>
</div>
<br />

<div class="container row col-md-12 print_pages" align="left">
  <td><table width="900" height="214" border="0" cellspacing="0" cellpadding="6">
    <tr>
      <td height="70" colspan="2" padding-right:="padding-right:"""><table width="890" height="62"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="15%" height="62" align="left" valign="top"><div align="left"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></div></td>
          <td width="68%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="17%" align="right" valign="top"><strong class="stitle">DEMOGRAPHICS</strong></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td width="50%" height="107" padding-right:="padding-right:"""><table width="100%" border="1" align="center" cellpadding="1" cellspacing="0" class="style4">
        <tr>
            <td width="400"><span class="style4"><strong>Age of Adults</strong></span></td>
            <td width="125"><div align="center"><strong>Entire Market</strong></div></td>
            <td width="125"><div align="center"><strong>Benchmark</strong></div></td>
            </tr>
          <tr>
            <td>Age 20-29 (% adults age 20+)</td>
            <td><div align="center"><?php echo number_format($age_2029p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($age_2029c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Age 30-39 (% adults age 20+)</td>
            <td><div align="center"><?php echo number_format($age_3039p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($age_3039c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Age 40-49 (% adults age 20+)</td>
            <td><div align="center"><?php echo number_format($age_4049p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($age_4049c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Age 50-59 (% adults age 20+)</td>
            <td><div align="center"><?php echo number_format($age_5059p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($age_5059c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Age 60-69 (% adults age 20+)</td>
            <td><div align="center"><?php echo number_format($age_6069p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($age_6069c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Age 70+ (% adults age 20+)</td>
            <td><div align="center"><?php echo number_format($age_70p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($age_70c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td><span class="style4">Age of Children</span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td>Age 0-9 (% of pop.)</td>
            <td><div align="center"><?php echo number_format($age_kidsyp,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($age_kidsyc,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Age 10-19 (% of pop.)</td>
            <td><div align="center"><?php echo number_format($age_kidsoldp,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($age_kidsoldc,1); ?>%</div></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="center"></div></td>
            </tr>
          <tr>
            <td class="style4"><strong>Household Income</strong></td>
            <td>&nbsp;</td>
            <td><div align="center"></div></td>
            </tr>
          <tr>
            <td>Modest income (&lt;$30k)</td>
            <td><div align="center"><?php echo number_format($inc030p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($inc030c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Middle income ($30-$70k)</td>
            <td><div align="center"><?php echo number_format($inc3070p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($inc3070c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Uppper income ($70k-$100k)</td>
            <td><div align="center"><?php echo number_format($inc70100p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($inc70100c,1); ?>%</div></td>
            </tr>
          <tr>
            <td>Most affuent ($100+k)</td>
            <td><div align="center"><?php echo number_format($inc100p,1); ?>%</div></td>
            <td><div align="center"><?php echo number_format($inc100c,1); ?>%</div></td>
            </tr>
          <tr>
            <td><span class="style4"> Average Household Income</span></td>
            <td><div align="center"><strong>$<?php echo number_format($IN_AHHp,0); ?></strong></div></td>
            <td><div align="center"><strong>$<?php echo number_format($IN_AHHc,0); ?></strong><br />
            </div></td>
            </tr>
      </table>
        <span class="style4"><?php echo $store_number . " " . $store_name; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
      <td width="450" valign="top" padding-right:="padding-right:"""><table width="100%" border="1" align="center" cellpadding="1" cellspacing="0" class="style4">
        <tr>
          <td width="400">&nbsp;</td>
          <td width="125"><div align="center"><strong>Entire Market</strong></div></td>
          <td width="125"><div align="center"><strong>Benchmark</strong></div></td>
          </tr>
        <tr>
          <td><span class="style4">Family Structure</span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>Singles</td>
          <td><div align="center"><?php echo number_format($fm_singlep,1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($fm_singlec,1); ?>%</div></td>
          </tr>
        <tr>
          <td>Families </td>
          <td><div align="center"><?php echo number_format($familyp,1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($familyc,1); ?>%</div></td>
          </tr>
        <tr>
          <td>Couples (no children at home)</td>
          <td><div align="center"><?php echo number_format($couplep,1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($couplec,1); ?>%</div></td>
          </tr>
        <tr>
          <td>Single parent families</td>
          <td><div align="center"><?php echo number_format($sparentp,1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($sparentc,1); ?>%</div></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td><span class="style4">Ethnic Diversity</span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>South Asian </td>
          <td><div align="center"><?php echo number_format($MN_SASIANp,1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($MN_SASIANc,1); ?>%</div></td>
          </tr>
        <tr>
          <td>Chinese</td>
          <td><div align="center"><?php echo number_format($MN_CHINESEp,1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($MN_CHINESEc,1); ?>%</div></td>
          </tr>
        <tr>
          <td>Black</td>
          <td><div align="center"><?php echo number_format($MN_BLACKp,1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($MN_BLACKc,1); ?>%</div></td>
          </tr>
        <tr>
          <td>Total visible minority population</td>
          <td><div align="center"><?php echo number_format($MN_VISp,1); ?>%</div></td>
          <td><div align="center"><?php echo number_format($MN_VISc,1); ?>%</div></td>
          </tr>
        <tr>
          <td height="22">Caucasian</td>
          <td><div align="center"><strong><?php echo number_format($MN_WHITEp,1); ?><strong>%</strong></div></td>
          <td><div align="center"><strong><?php echo number_format($MN_WHITEc,1); ?><strong>%</strong></div></td>
          </tr>
      </table></td>
    </tr>
  </table></td>
</div>
<br />

<div class=" print_pages ">
  <table width="900" height="658" border="0" align="center" cellpadding="2" cellspacing="1">
    <tr>
      <td width="900" height="73" colspan="2" padding-right:="padding-right:"""><table width="888" height="67"border="0" cellspacing="" cellpadding="1">
        <tr>
          <td width="125" height="48"  padding-right:="padding-right:""5" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
          <td width="58%" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></td>
          <td width="312" align="right" valign="middle"><strong class="stitle">SPEND</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="50%" align="center" valign="top"><table width="415" border="1" cellpadding="1" cellspacing="0" class="style4">
        <tr>
          <td width="225" class="style6"><strong class="style6">
            <div align="left" valign="middle"><strong class="style4">Per household average </strong></div></td>
          <td width="164" align="center"><strong class="style4">Market Area Average</strong></td>
          <td width="164" align="center"><strong class="style4">Benchmark  Average</strong></td>
        </tr>
        <tr>
          <td class="style4"> Shelter</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD2000_2070c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D2000_2070,0); ?></td>
        </tr>
        <tr>
          <td class="style4">Groceries &amp; Restaurant</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD1000_1560c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D1000_1560,0); ?></td>
        </tr>
        <tr>
          <td class="style4">Transportation &amp; Automotive</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD3000_3260c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D3000_3260,0); ?></td>
        </tr>
        <tr>
          <td class="style4">Total Essential Expenses<strong class="style6"></td>
          <td align="center" class="style4"><strong>$<?php echo number_format($hhbcommit,0); ?></strong></td>
          <td align="center"><strong>$<?php echo number_format($hhcan_commit,0); ?></strong></td>
        </tr>
        <tr>
          <td class="style4">&nbsp;</td>
          <td align="center" class="style4">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr >
          <td height="35"  class="style4"><strong>Controllable Expenses</strong></td>
          <td align="center" class="style4"><strong>Area average</strong></td>
          <td align="center" class="style4"><strong>Benchmark Average</strong></td>
        </tr>
        <tr>
          <td  class="style4">Telecom (Phone/Internet)</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD2200_2230c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D2200_2230,0); ?></td>
        </tr>
        <tr>
          <td  class="style4">Child Care</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD2240_2244c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D2240_2244,0); ?></td>
        </tr>
        <tr>
          <td  class="style4">Pet Expenses</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD2270_2300c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D2270_2300,0); ?></td>
        </tr>
        <tr>
          <td  class="style4">Household Expenses</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD2500_2730c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D2500_2730,0); ?></td>
        </tr>
        <tr>
          <td  class="style4">Clothing</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD2800_2975c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D2800_2975,0); ?></td>
        </tr>
        <tr>
          <td  class="style4">Health Care &amp; Drug</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD3300_3384c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D3300_3384,0); ?></td>
        </tr>
        <tr>
          <td  class="style4">Personal Care</td>
          <td align="center" class="style4">$<?php echo number_format($hhaD3500_3580c,0); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D3500_3580,0); ?></td>
        </tr>
        <tr>
          <td  class="style4">Education &amp; Reading</td>
          <td align="center" class="style4">$<?php echo number_format(($hhaD4300_4340c + $hhaD4400_4470c),0); ?></td>
          <td align="center">$<?php echo number_format(($hhcan_D4300_4340 + $hhcan_D4400_4470),0); ?></td>
        </tr>
        <tr>
          <td height="36" class="style4"><strong class="style4">Total Controllable </strong></td>
          <td align="center" class="style4"><strong>$<?php echo number_format($hhb_purchases,0); ?></strong></td>
          <td align="center"><strong>$<?php echo number_format($hhcan_purchases,0); ?></strong></td>
        </tr>
      </table></td>
      <td width="532" valign="top"><table width="415" border="1" cellpadding="1" cellspacing="0" class="style4">
        <tr >
          <td width="225" height="52" align="center" ><div align="left"><strong class="style4">Discretionary Expenses</strong></div></td>
          <td width="164" align="center" class="style4">Area Average</td>
          <td width="164" align="center" class="style4">Benchmark Average</td>
        </tr>
        <tr>
          <td>Recreation</td>
          <td align="center">$<?php echo number_format($hhaD3700_4190c); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D3700_4190,0); ?></td>
        </tr>
        <tr>
          <td>Tobacco &amp; Alcohol</td>
          <td align="center">$<?php echo number_format($hhaD4500_4540c); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D4500_4540,0); ?></td>
        </tr>
        <tr>
          <td>Gardening Supplies</td>
          <td align="center">$<?php echo number_format($hhaD2340_2370c); ?></td>
          <td align="center">$<?php echo number_format($hhcan_D2340_2370,0); ?></td>
        </tr>
        <tr>
          <td>Other expenses</td>
          <td align="center">$<?php echo number_format($hhb_other_hh_ops); ?></td>
          <td align="center">$<?php echo number_format($hhcan_otherexpenses,0); ?></td>
        </tr>
        <tr>
          <td><div align="left" class="style4">Total Discretionary Expenses</div></td>
          <td align="center"><strong>$<?php echo number_format($hhmarket_discretionary); ?></strong></td>
          <td align="center">$<?php echo number_format($hhcan_discretionary,0); ?></td>
        </tr>
      </table>
      <br />
      <span class="style4"><?php echo $store_number . " " . $store_name; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
    </tr>
  </table>
 
  </td>

    </tr>
    </table>

</div>
<br />

<div class=" print_pages ">
  <table width="100%" height="609" border="0" cellspacing="4" cellpadding="0">
    <tr>
      <td width="35%" height="75" colspan="2"><table width="892" height="70" border="0" cellspacing="4" cellpadding="4">
        <tr>
          <td width="132" height="62" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
          <td width="414" height="63" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></td>
          <td width="43%" align="right"><span class="pheading">Flyers/Newspapers</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="50%" align="center" valign="top" ><table width="97%" border="1" cellpadding="1" cellspacing="0" >
        <tr class="style4emp">
          <td width="300"><div align="left" class="style4"><strong>Flyers delivered to the door or in the mail</strong></div></td>
          <td width="177"><div align="center"><strong><span class="style4">Market Area</span></strong></div></td>
          <td width="192" class="style4"><div align="center"><strong>Benchmark</strong></div></td>
          </tr>
        <tr>
          <td class="style4"><div align="left">Never</div></td>
          <td class="style4"><div align="center"><?php echo number_format($pbFLY_DOORN,1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($canp_FLY_DOORN,1) ; ?>%</div></td>
          </tr>
        <tr>
          <td class="style4"><div align="left">Seldom</div></td>
          <td class="style4"><div align="center"><?php echo number_format($pbFLY_DOORS,1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($canp_FLY_DOORS,1) ; ?>%</div></td>
          </tr>
        <tr>
          <td class="style4"><div align="left">Occasional*</div></td>
          <td class="style4"><div align="center"><?php echo number_format($pbFLY_DOORO,1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($canp_FLY_DOORO,1) ; ?>%</div></td>
          </tr>
        <tr>
          <td class="style4"><div align="left">Frequently*</div></td>
          <td class="style4"><div align="center"><?php echo number_format($pbFLY_DOORF,1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($canp_FLY_DOORF,1) ; ?>%</div></td>
          </tr>
        <tr>
          <td class="style4"><div align="left" class="style4"><strong>*Heavy flyer users</strong></div></td>
          <td class="style4"><div align="center"><strong><?php echo number_format($pb_flyer_heavy,1) ; ?>%</strong></div></td>
          <td class="style4"><div align="center"><strong><?php echo number_format($canp_flyer_heavy,1) ; ?>%</strong></div></td>
          </tr>
      </table>
        <span class="style4"><?php echo $store_number . " " . $store_name; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>
      <td width="50%" align="center" valign="top" ><table width="97%" border="1" cellpadding="1" cellspacing="0" class="style4">
        <tr >
          <td width="300" class="style4"><div align="left" class="style4">Newspaper <br />
            Sections read frequently</div></td>
          <td width="238" class="style4"><div align="center" class="style4">Market Area</div></td>
          <td width="214" class="style4"><div align="center" class="style4">Benchmark</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][0] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][0],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][0],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][1] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][1],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][1],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][2] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][2],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][2],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][3] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][3],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][3],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][4] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][4],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][4],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][5] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][5],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][5],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][6] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][6],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][6],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][7] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][7],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][7],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][8] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][8],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][8],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][9] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][9],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][9],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][10] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][10],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][10],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][11] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][11],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][11],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][12] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][12],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][12],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][13] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][13],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][13],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media6["name"][14] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media6["percent"][14],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media6["canada"][14],1) ; ?>%</div></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<br />

<div class="container row col-md-12 print_pages align="left="left""">
  <td width="35%"><table width="892" height="67" border="0" cellspacing="4" cellpadding="4">
    <tr>
      <td width="132" height="67" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
      <td width="414" height="63" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
        <?php echo $change_title2; ?></td>
      <td width="43%" align="right"><span class="pheading">INTERNET ACCESS </span></td>
    </tr>
  </table></td>
  </tr>
  <tr>
    <td height="596" align="center" valign="top" ><table width="97%" border="1" align="center" cellpadding="1" cellspacing="0" >
      <tr class="style4emp">
        <td width="300" class="style4emp"><div align="left" class="style4emp">Access Point</div></td>
        <td width="202" class="style4emp"><div align="center" class="style4emp">Market Area</div></td>
        <td width="208" class="style4emp"><div align="center"class="style4emp">Benchmark</div></td>
        </tr>
      <tr>
        <td><div align="left"><span class="style4"><?php echo $internet1["name"][0] ; ?></span></div></td>
        <td><div align="center"><span class="style4"><?php echo number_format($internet1["percent"][0],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="style4"><?php echo number_format($internet1["canada"][0],1) ; ?>%</span></div></td>
        </tr>
      <tr>
        <td><div align="left"><span class="style4"><?php echo $internet1["name"][1] ; ?></span></div></td>
        <td><div align="center"><span class="style4"><?php echo number_format($internet1["percent"][1],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="style4"><?php echo number_format($internet1["canada"][1],1) ; ?>%</span></div></td>
        </tr>
      <tr>
        <td><div align="left"><span class="style4"><?php echo $internet1["name"][2] ; ?></span></div></td>
        <td><div align="center"><span class="style4"><?php echo number_format($internet1["percent"][2],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="style4"><?php echo number_format($internet1["canada"][2],1) ; ?>%</span></div></td>
        </tr>
      <tr>
        <td><div align="left"><span class="style4"><?php echo $internet1["name"][3] ; ?></span></div></td>
        <td><div align="center"><span class="style4"><?php echo number_format($internet1["percent"][3],1) ; ?>%</span></div></td>
        <td><div align="center"><span class="style4"><?php echo number_format($internet1["canada"][3],1) ; ?>%</span></div></td>
        </tr>
    </table>
      <br />
      <table width="97%" border="1" align="center" cellpadding="1" cellspacing="0" >
        <tr class="style4emp">
          <td width="300"><div align="left" class="style4emp">Weekly Activity</div></td>
          <td width="201"><div align="center" class="style4emp">Market Area</div></td>
          <td width="211"><div align="center" class="style4emp">Benchmark</div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $internet2["name"][0] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["percent"][0],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["canada"][0],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $internet2["name"][1] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><span class="style4emp"><?php echo number_format($internet2["percent"][1],1) ; ?></span>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["canada"][1],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $internet2["name"][2] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["percent"][2],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["canada"][2],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $internet2["name"][3] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["percent"][3],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["canada"][3],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $internet2["name"][4] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["percent"][4],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["canada"][4],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $internet2["name"][5] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["percent"][5],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($internet2["canada"][5],1) ; ?>%</span></div></td>
        </tr>
      </table>
    <br /><?php echo $store_number . " " . $store_name; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></td>
  </tr>
</div>
<br />

<div class="container row col-md-12 print_pages" align="left">
  <tr>
    <td width="35%" height="507"></td>
  </tr>
  <tr>
    <td width="35%" height="507"><table width="892" height="128" border="0" cellspacing="4" cellpadding="4">
      <tr>
        <td width="132" height="58" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
        <td width="547" height="58" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
          <?php echo $change_title2; ?></td>
        <td width="43%" align="right"><span class="pheading">INTERNET SITE </span></td>
      </tr>
      <tr>
        <td height="58" colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%"><table width="97%" border="1" align="center" cellpadding="1" cellspacing="0" class="sgrey12">
              <tr class="sgrey14">
                <td width="300" class="style4emp">Internet Site</td>
                <td width="101" class="style4emp"><div align="center">Market Area</div></td>
                <td width="225" class="style4emp"><div align="center">Benchmark</div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][0] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][0],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][0],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][1] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][1],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][1],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][2] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][2],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][2],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][3] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][3],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][3],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][4] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][4],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][4],1) ; ?>%</span></div></td>
              </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][6] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][6],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][6],1) ; ?>%</span></div></td>
              </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][7] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][7],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][7],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][8] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][8],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][8],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][9] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][9],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][9],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][10] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][10],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][10],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][11] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][11],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][11],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][12] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][12],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][12],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][13] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][13],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][13],1) ; ?>%</span></div></td>
              </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][17] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][17],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][17],1) ; ?>%</span></div></td>
              </tr>
              <tr>
                <td><span class="style4"><?php echo $internet3["name"][19] ; ?></span></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["percent"][19],1) ; ?>%</span></div></td>
                <td><div align="center"><span class="style4"><?php echo number_format($internet3["canada"][19],1) ; ?>%</span></div></td>
              </tr>
              </table></td>
            <td valign="top"><table width="97%" border="1" align="center" cellpadding="1" cellspacing="0" >
              <tr>
                <td width="300" class="style4emp">Internet Site</td>
                <td width="148" class="style4emp"><div align="center" class="style13">Market Area</div></td>
                <td width="184" class="style4emp"><div align="center" class="style4emp">Benchmark</div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][24] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][24],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][24],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][26] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][26],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][26],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][28] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][28],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][28],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][29] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][29],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][29],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][33] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][33],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][33],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][35] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][35],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][35],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][36] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][36],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][36],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][37] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][37],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][37],1) ; ?>%</span></div></td>
                </tr>
              <tr>
                <td class="style4emp"><span class="style4"><?php echo $internet3["name"][38] ; ?></span></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["percent"][38],1) ; ?>%</span></div></td>
                <td class="style4"><div align="center" class="    "><span style4="style4"><?php echo number_format($internet3["canada"][38],1) ; ?>%</span></div></td>
                </tr>
              </table>
              <br /><?php echo $store_number . " " . $store_name; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></td>
          </tr>
        </table></td>
        </tr>
    </table></td>
    </td>
  </tr>
  </table>
</div>
<br />

<div class=" print_pages ">
  <table width="100%" height="590" border="0" cellspacing="4" cellpadding="0">
    <tr>
      <td width="50%" height="86" colspan="2"><table width="892" height="71" border="0" cellspacing="4" cellpadding="4">
        <tr>
          <td width="132" height="63" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
          <td width="414" height="63" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></td>
          <td width="43%" align="right"><span class="pheading">RADIO/TV</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="top" ><table width="97%" border="1" cellpadding="1" cellspacing="0" class="style4">
        <tr>
          <td width="300" class="style4"><div align="left"><strong>Type of Radio Station</strong></div></td>
          <td width="186" class="style4"><div align="center"><strong>Market Area</strong></div></td>
          <td width="176" class="style4"><div align="center"><strong>Benchmark</strong></div></td>
          </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][0] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][0],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][0],1) ; ?>%</div></td>
          </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][1] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][1],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][1],1) ; ?>%</div></td>
          </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][2] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][2],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][2],1) ; ?>%</div></td>
          </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][3] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][3],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][3],1) ; ?>%</div></td>
          </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][4] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][4],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][4],1) ; ?>%</div></td>
          </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][5] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][5],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][5],1) ; ?>%</div></td>
          </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][6] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][6],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][6],1) ; ?>%</div></td>
          </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][7] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][7],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][7],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][9] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][9],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][9],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><?php echo $media2["name"][10] ; ?></div></td>
          <td><div align="center"><?php echo number_format($media2["percent"][10],1) ; ?>%</div></td>
          <td><div align="center"><?php echo number_format($media2["canada"][10],1) ; ?>%</div></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td align="center" valign="top" >&nbsp;</td>
      <td align="center" valign="top" >&nbsp;</td>
    </tr>
    <tr>
      <td width="50%" align="center" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="0" >
        <tr >
          <td width="110" class="style4"><div align="center"><strong>Type of TV shows</strong></div></td>
          <td width="81" class="style4"><div align="center"><strong>Market Area</strong></div></td>
          <td width="107" class="style4"><div align="center"><strong>Benchmark</strong></div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][0] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][0],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][0],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][1] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][1],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][1],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][2] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][2],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][2],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][3] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][3],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][3],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][4] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][4],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][4],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][5] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][5],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][5],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][6] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][6],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][6],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][7] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][7],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][7],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][8] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][8],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][8],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][9] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][9],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][9],1) ; ?>%</div></td>
        </tr>
      </table></td>
      <td align="center" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="0" >
        <tr >
          <td width="114"><div align="center" class="style4"><strong>Type of TV show</strong></div></td>
          <td width="104"><div align="center" class="style4"><strong>Market Area</strong></div></td>
          <td width="96"><div align="center" class="style4"><strong>Benchmark</strong></div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][10] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][10],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][10],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td class="style4"><div align="left"><?php echo $media3["name"][11] ; ?></div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["percent"][11],1) ; ?>%</div></td>
          <td class="style4"><div align="center"><?php echo number_format($media3["canada"][11],1) ; ?>%</div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $media3["name"][15] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["percent"][15],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["canada"][15],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $media3["name"][16] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["percent"][16],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["canada"][16],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $media3["name"][17] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["percent"][17],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["canada"][17],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $media3["name"][18] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["percent"][18],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["canada"][18],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $media3["name"][19] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["percent"][19],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["canada"][19],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $media3["name"][21] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["percent"][21],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["canada"][21],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $media3["name"][22] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["percent"][22],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["canada"][22],1) ; ?>%</span></div></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style4"><?php echo $media3["name"][24] ; ?></span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["percent"][24],1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($media3["canada"][24],1) ; ?>%</span></div></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<br />

<div class=" print_pages ">
  <table width="903" height="604" border="0" cellspacing="4" cellpadding="0">
    <tr>
      <td height="73" colspan="2" ><table width="100%" border="0" cellspacing="4" cellpadding="4">
        <tr>
          <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
          <td width="42%" align="left"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="43%" align="right"><strong class="pheading">LIFESTYLE</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="50%" height="519" valign="top"  ><table width="94%" border="1" align="center" cellpadding="1" cellspacing="0" >
        <tr class="style4">
          <td width="165">Participation</td>
          <td width="69"class="style4"><div align="center" class="style4">Market Area</div></td>
          <td width="93"class="style4"><div align="center" class="style4">Benchmark</div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_ADVSP ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_ADVSP,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_ADVSP,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_CRFT ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_CRFT,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_CRFT,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_BSBL ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_BSBL,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_BSBL,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_BSKBL ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_BSKBL,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_BSKBL,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_BLLDS ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_BLLDS,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_BLLDS,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_BOWL ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_BOWL,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_BOWL,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_CANOE ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_CANOE,1); ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_CANOE,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_CURL ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_CURL,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_CURL,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_CYCL ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_CYCL,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_CYCL,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_FSHT ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_FSHT,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_FSHT,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_FITWK ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_FITWK,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_FITWK,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_FITAER ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_FITAER,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_FITAER,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_FTBL ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_FTBL,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_FTBL,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_GARD ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_GARD,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_GARD,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_GOLF ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_GOLF ,1); ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_GOLF,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_CLUB ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_CLUB,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_CLUB,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_HIK ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_HIK,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_HIK,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td height="24"><span class="style4"><?php echo $hhnameLS_HOCKY ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_HOCKY,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_HOCKY,1) ; ?>%</span></div></td>
          </tr>
      </table></td>
      <td width="50%" height="519" valign="top" ><table width="94%" border="1" align="center" cellpadding="1" cellspacing="0" >
        <tr class="style4">
          <td width="165"class="style4"><div align="center" class="style4">
            <div align="left">Participation</div>
          </div></td>
          <td width="63"class="style4"><div align="center" class="style4">Market Area</div></td>
          <td width="97"class="style4"><div align="center" class="style4">Benchmark</div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_HMEXC ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_HMEXC,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_HMEXC,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_ICSKT ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_ICSKT,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_ICSKT,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_ILSKT ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_ILSKT,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_ILSKT,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_CURL ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_CURL,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_CURL,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_JOG ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_JOG,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_JOG,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_MRTHN ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_MRTHN ,1); ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_MRTHN,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_YOGA ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_YOGA ,1); ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_YOGA,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_VIDEO ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_VIDEO,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_VIDEO,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_PWBT ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_PWBT,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_PWBT,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_RACSP ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_RACSP,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_RACSP,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_SKBRD ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_SKBRD,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_SKBRD,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_SKCRS ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_SKCRS ,1); ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_SKCRS,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_SKDWH ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_SKDWH,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_SKDWH,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_SNBRD ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_SNBRD ,1); ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_SNBRD,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_SNWMB ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_SNWMB,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_SNWMB,1); ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_SCCER ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_SCCER,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_SCCER,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td><span class="style4"><?php echo $hhnameLS_SWM ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_SWM,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_SWM,1) ; ?>%</span></div></td>
          </tr>
        <tr>
          <td height="24"><span class="style4"><?php echo $hhnameLS_WHLWT ; ?></span></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhbLS_WHLWT,1) ; ?>%</span></div></td>
          <td><div align="center"><span class="style4"><?php echo number_format($hhcLS_WHLWT,1) ; ?>%</span></div></td>
          </tr>
      </table>
      <br />
      <?php echo $store_number . " " . $store_name; ?> Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?></td>
    </tr>
  </table>
</div>