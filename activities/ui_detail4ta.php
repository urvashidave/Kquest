<link rel='STYLESHEET' type='text/css' href='master_style.css'>


<div class="pagebreak"></div>
<div class="container row col-md-12 pprint_pages align="left"">
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td width="500" colspan="2" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="13%" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="48%" align="left" valign="top" class="sgrey14"><strong class="psub2">Store #<?php echo $store_number; ?></strong><br>
          </td>
          <td width="39%" align="right" valign="top"><strong class="pheading">HOUSEHOLD SPENDING</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" align="center" class="psub1">Total dollar spend per households, in the trade area, is $<?php echo number_format($hhb_consume); ?><br>
        $<?php echo number_format(abs($hhdiff_consume)); if ($hhdiff_consume > 0) echo " higher"; else echo " lower"; ?> than the Canadian average of $<?php echo number_format($hha_consume); ?></td>
    </tr>
    <tr>
      <td colspan="2" align="left"><table width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
          <td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
            <tr>
              <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td height="40" align='center' class="psub2"><strong>Essential Spending</strong></td>
                  </tr>
                <tr>
                  <td align='center' height ='50' class='sgrey14'><img src="activities/house_mid.jpg" width="200" height="200" alt="house"></td>
                  </tr>
                <tr>
                  <td height ='20'><blockquote>
                    <p class="pbody">&#8226; Housing<br>
                      &#8226; Food<br>
                      &#8226; Transportation </p>
                    </blockquote></td>
                </tr>
                <tr>
                  <td height ='75' class="pbodyemp" >&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhbcommit); ?> market area<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhacommit); ?> Canada <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiffcommit); ?> difference</td>
                </tr>
                </table></td>
              </tr>
          </table></td>
          <td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
              <tr>
                <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height="40" align='center' class="psub2"><strong>Controllable Spending</strong></td>
                    </tr>
                  <tr>
                    <td align='center' height ='50' class='sgrey14'><img src="activities/clothing1.jpg" width="200" height="200" alt="clothes"></td>
                    </tr>
                  <tr>
                    <td height ='20'><blockquote>
                      <p class="pbody">&#8226; Clothing<br>
                        &#8226; Household Expenses<br>
                        &#8226; Health Care</p>
                      </blockquote></td>
                  </tr>
                  <tr>
                    <td height ='75' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_purchases); ?> market area<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hha_purchases); ?> Canada <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiff_purchases); ?> difference</strong></td>
                  </tr>
                  </table></td>
                </tr>
            </table></td>
          <td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>
              <tr>
                <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td height="40" align='center' class="psub2"><strong>Discretionary Spending</strong></td>
                    </tr>
                  <tr>
                    <td align='center' height ='50' class='sgrey14'><img src="activities/activity.png" width="200" height="200" alt="activity"></td>
                    </tr>
                  <tr>
                    <td height ='20'><blockquote>
                      <p class="pbody">&#8226; Reacreation<br>
                        &#8226; Household Items<br>
                        &#8226; Gardening</p>
                    </blockquote></td>
                  </tr>
                  <tr>
                    <td height ='75' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_discretionary); ?> market area<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hha_discretionary); ?> Canada<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_discretionary - $hha_discretionary); ?> difference</strong></td>
                  </tr>
                  </table></td>
                </tr>
            </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
<span class="pbody">*trade area compard to Natinal average </span></div>

<div class="pagebreak"></div>
<div class="container row col-md-12 print_pages align="left"">
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td colspan="2" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST"></td>
          <td width="58%" align="left"><strong class="psub2">Store #<?php echo $store_number; ?></strong></td>
          <td width="27%" align="right"><strong class="pheading">SPENDING</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="355" align="center" valign="top">&nbsp;</td>
      <td width="527" align="center" valign="top"><table width="500" border="1" cellpadding="0" cellspacing="0" class="pbody14">
        <tr>
          <td width="400">&nbsp;</td>
          <td width="125"><strong>Market Area Average</strong></td>
          </tr>
        <tr>
          <td class="pbody14"><strong>Essential Expenses</strong></td>
          <td align="center" class="pbody14">&nbsp;</td>
          </tr>
        <tr>
          <td class="pbody14">Shelter</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD2000_2070c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Groceries & Restaurant</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD1000_1560c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Transportation &amp; Automotive</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD3000_3260c); ?></td>
          </tr>
        <tr>
          <td class="pbody14"><strong>Total Essential Expenses</strong></td>
          <td align="center" class="pbody14"><strong>$<?php echo number_format($hhacommit); ?></strong></td>
          </tr>
        <tr>
          <td class="pbody14">&nbsp;</td>
          <td align="center" class="pbody14"><strong>$<?php echo number_format($HC_WCDR); ?></strong></td>
          </tr>
        <tr>
          <td class="pbody14"><strong>Controllable  Expenses</strong></td>
          <td align="center" class="pbody14">&nbsp;</td>
          </tr>
        <tr>
          <td class="pbody14">Telecom (Phone/Internet)</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD2200_2230c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Child Care</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhbD2240_2244c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Pet Expenses</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD2270_2300c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Household Expenses</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD2540_2680c + $hhaD2500_2730c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Clothing</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD2800_2975c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Health Care & Drug</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD3300_3384c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Personal Care</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD3500_3580c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Education & Reading</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD4300_4340c + $hhaD4400_4470c); ?></td>
          </tr>
        <tr>
          <td class="pbody14"><strong>Total Controllable  Expenses</strong></td>
          <td align="center" class="pbody14"><strong>$<?php echo number_format($hha_purchases); ?></strong></td>
          </tr>
        <tr>
          <td class="pbody14">&nbsp;</td>
          <td align="center" class="pbody14">&nbsp;</td>
          </tr>
        <tr>
          <td class="pbody14"><strong>Discretionary Expenses</strong></td>
          <td align="center" class="pbody14">&nbsp;</td>
          </tr>
        <tr>
          <td class="pbody14">Recreation</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD3700_4190c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Tobacco &amp; Alcohol</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD4500_4540c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Other Items for the House</td>
          <td align="center" class="pbody14">$<?php echo number_format($hha_other_hh_ops); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Other expenses</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD4800_4840c + $hhaD4600_4720c); ?></td>
          </tr>
        <tr>
          <td class="pbody14">Gardening Supplies</td>
          <td align="center" class="pbody14">$<?php echo number_format($hhaD2340_2370c); ?></td>
          </tr>
        <tr>
          <td class="pbody14"><strong>Total Discretionary Expenses</strong></td>
          <td align="center" class="pbody14"><strong>$<?php echo number_format($hha_discretionary); ?></strong></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>

  
<div class="pagebreak"> </div>

<div class="container row col-md-12 print_pages align="left"">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
      <td width="58%" align="left"><strong class="psub2">Store #<?php echo $store_number; ?></strong></td>
      <td width="27%" align="right"><strong class="pheading">MARKET SIZE</strong></td>
    </tr>
  </table>
  <table width="880px" border="1" cellpadding="1" cellspacing="0" class="pbody14">
    <tr>
      <td class="pbody14">&nbsp;</td>
      <td width="125"><strong>5% market share</strong></td>
      <td width="125"><strong>20% market share</strong></td>
      <td width="125"><strong>Total Market Size</strong></td>
    </tr>
<tr>
      <td class="pbody14">&nbsp;</td>
      <td align="center" class="pbody14">&nbsp;</td>
      <td align="center" class="pbody14">&nbsp;</td>
      <td align="center" class="pbody14">&nbsp;</td>
    </tr>
                    <tr>
                      <td class="pbody14"><strong>Household expenses</strong></td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="pbody14">Telecom (phone/internet/cable)</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2200_2230c*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2200_2230c*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2200_2230c); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Child care</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2240_2244c*.05 ); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2240_2244c*.25 ); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2240_2244c ); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Pet expenses</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2270_2300c*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2270_2300c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2270_2300c); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Gardening</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2340_2370c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2340_2370c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2340_2370c ); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Furniture</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2500_2730c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2500_2730c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2500_2730c); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Expenses for operating a vehicle </td>
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
                      <td class="pbody14"><strong>Household goods</strong></td>
                     <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="pbody14">Appliances</td>
                       <td align="center" class="pbody14">$<?php echo number_format($aD2540_2680c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2540_2680c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2540_2680c); ?></td>
                    </tr>
                    <tr>
                      <td>Workshop tools</td>
                     <td align="center" class="pbody14">$<?php echo number_format($aD2600_2602c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2600_2602c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2600_2602c); ?></td>
                    </tr>
                     <tr>
                       <td>Lawn/Snow equipment</td>
                     <td align="center" class="pbody14">$<?php echo number_format($aD2610_2630c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2610_2630c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2610_2630c); ?></td>
                    </tr>
                     <tr>
                       <td class="pbody14">Computers &amp; supplies</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3750_3760c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3750_3760c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3750_3760c ); ?></td>
                     </tr>
                     <tr>
                       <td class="pbody14">Recreational/Sports equipment</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3700_3830c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3700_3830c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3700_3830c ); ?></td>
                     </tr>
                     <tr>
                       <td class="pbody14">Toys</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3720c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3720c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3720c ); ?></td>
                     </tr>
                     <tr>
                       <td class="pbody14">Home entertainment </td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c ); ?></td>
                     </tr>
                     <tr>
                       <td>Vehicle leases / payments</td>
                       <td align="center" class="pbody14">$<?php echo number_format($aD3000_3004c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3000_3004c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3000_3004c ); ?></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                     </tr>
                    
  </table>
</div>



<div class="pagebreak"></div>

<div class="container row col-md-12 print_pages align="left"">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
      <td width="58%" align="left"><strong class="psub2">Store #<?php echo $store_number; ?></strong></td>
      <td width="27%" align="right"><strong class="pheading">MARKET SIZE</strong></td>
    </tr>
  </table>
  <table width="880px" border="1" cellpadding="1" cellspacing="0" class="pbody14">
    <tr>
      <td>&nbsp;</td>
      <td width="125"><strong>5% market share</strong></td>
      <td width="125"><strong>20% market share</strong></td>
      <td width="125"><strong>Total Market Size</strong></td>
    </tr>
<tr>
      <td class="pbody14"><strong>Recreational Activities</strong></td>
      <td align="center" class="pbody14">&nbsp;</td>
      <td align="center" class="pbody14">&nbsp;</td>
      <td align="center" class="pbody14">&nbsp;</td>
      </tr>
                   <tr>
                      <td class="pbody14">Home Entertainment (tv, etc.)</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4000_4070c); ?></td>
    </tr>
                    <tr>
                      <td class="pbody14"> Entertainment (going out)</td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4100_4140c)*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4100_4140c)*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4100_4140c)); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Use of recreational facilities</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4150_4170c*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4150_4170c*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4150_4170c); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Package travel tours</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4180c*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4180c*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4180c); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Reading material</td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4300_4340c)*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4300_4340c)*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4300_4340c)); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Education</td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4400_4470c)*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4400_4470c)*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD4400_4470c)); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Games of chance</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4800_4840c*.05 ); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4800_4840c*.25 ); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4800_4840c ); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Sports equipment</td>
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
                      <td><strong>Personal care</strong></td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Total clothing</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2800_2975c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2800_2975c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2800_2975c ); ?></td>
                    </tr>
                    <tr>
                      <td>Women's clothing</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2800_2840c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2800_2840c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2800_2840c ); ?></td>
                    </tr>
                    <tr>
                      <td>Men's clothing</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2850_2890c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2850_2890c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2850_2890c ); ?></td>
                    </tr>
                    <tr>
                      <td>Children's clothing</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2900_2920c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2900_2920c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD2900_2920c ); ?></td>
                    </tr>
                    <tr>
                      <td>Health care</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3300_3384c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3300_3384c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3300_3384c ); ?></td>
                    </tr>
                    <tr>
                      <td>Personal care items</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3500_3580c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3500_3580c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD3500_3580c ); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                    </tr>
                    
  </table>
</div>
</div>
 
<div class="pagebreak"></div>

<div class="container row col-md-12 print_pages align="left"">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="15%"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
      <td width="58%" align="left"><strong class="psub2">Store #<?php echo $store_number; ?></strong></td>
      <td width="27%" align="right"><strong class="pheading">MARKET SIZE</strong></td>
    </tr>
  </table>
  <table width="880px" border="1" cellpadding="1" cellspacing="0" class="pbody14">
    <tr>
      <td>&nbsp;</td>
      <td width="125"><strong>5% market share</strong></td>
      <td width="125"><strong>20% market share</strong></td>
      <td width="125"><strong>Total Market Size</strong></td>
    </tr>
                    <tr>
                      <td class="pbody14"><strong>Restaurant and Grocery</strong></td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="pbody14">Total food</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD1000_1560c*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD1000_1560c*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD1000_1560c); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14"> Food from restaurants</td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD1000_1560c-$bD1000_1520c)*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD1000_1560c-$bD1000_1520c)*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format(($aD1000_1560c-$bD1000_1520c)); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Food from stores</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD1000_1520c*.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD1000_1520c*.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD1000_1520c); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Alcohol from restaurants</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4520c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4520c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4520c); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Alcohol from stores</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4530c  *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4530c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4530c ); ?></td>
                    </tr>
                    <tr>
                      <td class="pbody14">Total alcohol and tobacco</td>
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
                      <td class="pbody14">Financial </td>
                     <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                      <td align="center" class="pbody14">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="pbody14">Financial services</td>
                       <td align="center" class="pbody14">$<?php echo number_format($aD4630_4660c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4630_4660c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4630_4660c); ?></td>
                    </tr>
                    <tr>
                      <td>Personal taxes</td>
                     <td align="center" class="pbody14">$<?php echo number_format($aD4900_4930c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4900_4930c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD4900_4930c); ?></td>
                    </tr>
                     <tr>
                       <td>Personal insurance</td>
                     <td align="center" class="pbody14">$<?php echo number_format($aD5000_5084c *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD5000_5084c *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD5000_5084c); ?></td>
                    </tr>
                     <tr>
                       <td class="pbody14">Gifts of money</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD5200_5230c    *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD5200_5230c   *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD5200_5230c  ); ?></td>
                     </tr>
                     <tr>
                       <td class="pbody14">Donations to charity</td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD5220_5230c   *.05); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD5220_5230c  *.25); ?></td>
                      <td align="center" class="pbody14">$<?php echo number_format($aD5220_5230c ); ?></td>
                     </tr>
                    
  </table>
</div>