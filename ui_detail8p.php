



 <link rel='STYLESHEET' type='text/css' href='master_style.css'>

  <style>
  td,th{text-align: center; !important}
table .pbodyemp{

font-weight: bold;

}
.myBench{

font-weight: normal;

}
.table-bordered {
	border: 1px solid black !important;
}
  .table_trans {

    background: rgba(255, 255, 255, 0.8);

}

.print_pages{page-break-before: avoid !important;}
.tgdr {
    page-break-after: avoid !important;
    page-break-before: avoid !important;
}
.style1 {color: #000000}

.style3 {font-size: 14px;}

  .style4 {font-weight: normal; color: #000000; font-family: "Arial Narrow", Arial, Helvetica, sans-serif;}

  .style5 {
    font-size: 14px;
}


  </style>



<?php 



$car_display_1 = "sedan_1.png";

$car_display_2 = "sedan_2.png";



// sort oil 

//$at_type['p'][] = $pAU_TPMFS;

$at_type['p'][] = $pAU_TPSCOMP * 1.4;

$at_type['p'][] = $pAU_TPSPO * 5;

$at_type['p'][] = $pAU_TPMVSW * 1.7;

$at_type['p'][] = $pAU_TPSUV * 1.1;

$at_type['p'][] = $pAU_TPPIC * 3;



//$at_type['img'][] = "sedan_1.png";

$at_type['img'][] = "comp_1.png";

$at_type['img'][] = "sports_1.png";

$at_type['img'][] = "minivan_1.png";

$at_type['img'][] = "suv_1.png";

$at_type['img'][] = "truck_1.png";



//$at_type['name'][] = "sedan";

$at_type['name'][] = "compact";

$at_type['name'][] = "sports car";

$at_type['name'][] = "mini van";

$at_type['name'][] = "SUV";

$at_type['name'][] = "pickup";



arsort($at_type['p']);

foreach ($at_type['p'] as $key => $val) {

	$at_type['sort_name'][] = $at_type['name'][$key];

	$at_type['sort_p'][] = number_format($at_type['p'][$key],1);

	$at_type['sort_img'][] = $at_type['img'][$key];

}



// display 1

$car_display_1 = $at_type['sort_img'][0];

$car_display_note = $at_type['sort_name'][0];



// adjust for 2 sedans

if($at_type['sort_p'][0] < 13) { 

		$car_display_1 = "sedan_1.png";

		$car_display_note = "sedan";

}



// adjust if sedan is low

if($at_type['sort_p'][1] >  $pAU_TPMFS && $at_type['sort_p'][0] >13 ) {

	$car_display_2 = $at_type['sort_img'][1];

	$car_display_note = $car_display_note . " and " . $at_type['sort_name'][1];

}



if($at_type['sort_p'][1] < $pAU_TPMFS) $car_display_note = $car_display_note . " and sedan";







// fix in case there are few cars

if(($at_total['tot_vehicles']/$hh_tot) < 1.4) { 

	$car_display_2 = "spacer.gif";

			if($at_type['sort_p'][0] > $pAU_TPMFS) {

					$car_display_1 = $at_type['sort_img'][0];

					$car_display_note = $at_type['sort_name'][0];

			}					

				else {

					$car_display_1 = "sedan_2.png";

					$car_display_note = "sedan";

			}

			

}





?>







<div class="pagebreak"></div>

<div class="row col-md-12 print_pages align="left"  style="height: auto; padding-bottom: 15px;> 

  <table width="903" height="85" border="0" cellspacing="4" cellpadding="0">

  <tr>

    <td height="77" colspan="2" ><table width="99%" border="0" cellspacing="4" cellpadding="4">

       <td width="118" height="58" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

        <td width="314" align="left"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
<span style="float: left;" class="pbody">Target Audience:</span>
<div style=" color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details
	<span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span>

      <td width="423" align="right"><strong class="stitle"  style="color: #900c3f"> Automotive Summary </strong></td>

      </tr>

    </table>

	</td>

    </tr>

</table></td>

    </tr>

  </table>

<table align="center" width="96%" height="557" border="0" cellspacing="0" cellpadding="0">

  <tr>

  <td colspan="3" align="center" valign="middle" ><table width="96%" height="51" border="0" cellpadding="2" cellspacing="0" class="table_trans">

    <tr>

      <td width="50%" height="24" align="center" valign="middle" bgcolor="#eaeaea"><span class="pbodyemp"><?php echo number_format($at_total['tot_vehicles'],0);?> vehicles : <span class="sgrey14">Target Audience</span></span></td>

      <td width="50%" align="center" valign="middle" bgcolor="#eaeaea"><span class="pbodyemp">Average <?php echo number_format($at_total['tot_vehicles']/$hh_tot,1);?> vehicles per household</span></td>

    </tr>

    <tr>

      <td height="24" align="center" valign="middle" bgcolor="#eaeaea"><span class="pbodyemp">Most popular: <?php echo $car_display_note; ?></span></td>

      <td align="center" valign="middle" bgcolor="#eaeaea"><span class=""> <?php echo number_format($pAU_PPULP + $pAU_PPUP,1); ?>% intend to buy this year</span></td>

    </tr>

    <tr>

     

     

    </tr>

  </table> </td>

  </tr>

  <tr>

    <td width="25%" align="center" valign="top" ><table width="95%" height = "220" border="0" cellpadding="2" cellspacing="0" class="Example_E1" c="c">

      <tr>

        <td align="center" valign="top"><img src="sedan_2.png" width="175" height="175" alt="online" /></td>

      </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#99FFCC"><span class="style1"><?php echo number_format($pAU_TPMFS); ?>% drive sedan</span></td>

      </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#FFFFCC"><span class="style1"><?php echo number_format($cAU_TPMFS); ?>% Benchmark average</span></td>

      </tr>

    </table></td>

    <td width="25%" align="center" valign="top" ><table width="95%" height = "220" border="0" cellpadding="2" cellspacing="0" class="Example_E1" c="c">

      <tr>

        <td align="center" valign="top"><img src="comp_1.png" width="175" height="175" alt="online" /></td>

      </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#99FFCC"><span class="style1"><?php echo number_format($pAU_TPSCOMP); ?>% drive compact</span></td>

      </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#FFFFCC"><span class="style1"><?php echo number_format($cAU_TPSCOMP); ?>% Benchmark average</span></td>

      </tr>

    </table></td>

    <td width="25%" align="center" valign="top" ><table width="95%" height = "220" border="0" cellpadding="2" cellspacing="0" class="Example_E1" c="c">

      <tr>

        <td align="center" valign="top"><img src="sports_1.png" width="175" height="175" alt="online" /></td>

        </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#99FFCC"><span class="style1"><?php echo number_format($pAU_TPSPO); ?>% drive sports cars</span></td>

        </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#FFFFCC"><span class="style1"><?php echo number_format($cAU_TPSPO); ?>% Benchmark average</span></td>

        </tr>

    </table></td>

  </tr>

  <tr>

   

  </tr>

  <tr>

    <td height="227" align="center" valign="top" ><table width="95%" height = "220" border="0" cellpadding="2" cellspacing="0" class="Example_E1" c="c">

      <tr>

        <td align="center" valign="top"><img src="suv_1.png" width="175" height="175" alt="online" /></td>

      </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#99FFCC"><span class="style1"><?php echo number_format($pAU_TPSUV); ?>% drive SUV</span></td>

      </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#FFFFCC"><span class="style1"><?php echo number_format($cAU_TPSUV); ?>% Benchmark average</span></td>

      </tr>

    </table></td>

    <td align="center" valign="top" ><table width="95%" height = "220" border="0" cellpadding="2" cellspacing="0" class="Example_E1" c="c">

      <tr>

        <td align="center" valign="top"><img src="truck_1.png" width="175" height="175" alt="online" /></td>

      </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#99FFCC"><span class="style1"><?php echo number_format($pAU_TPPIC); ?>% drive pickup</span></td>

      </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#FFFFCC"><span class="style1"><?php echo number_format($cAU_TPPIC); ?>% Benchmark average</span></td>

      </tr>

    </table></td>

    <td align="center" valign="top" ><table width="95%" height = "227" border="0" cellpadding="2" cellspacing="0" class="Example_E1" c="c">

      <tr>

        <td align="center" valign="top"><img src="minivan_1.png" width="175" height="175" alt="online" /></td>

        </tr>

      <tr>

        <td height="20" align="center" valign="middle" bgcolor="#99FFCC"><span class="style1"><?php echo number_format($pAU_TPMVSW); ?>% drive minivans</span></td>

        </tr>

      <tr>

        <td height="23" align="center" valign="middle" bgcolor="#FFFFCC"><span class="style1"><?php echo number_format($cAU_TPMVSW); ?>% Benchmark average</span></td>

        </tr>

    </table></td>

  </tr>

</table>
<br />

</div>
  


<div class="print_pages align="left"" style="height: auto; padding-bottom: 15px;"> 

  <table width="903" height="90%" border="0" cellspacing="4" cellpadding="0">

  <tr>

    <td height="79" colspan="2" ><table width="100%" border="0" cellspacing="4" cellpadding="4">

      <tr>

     <td width="132" height="60" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

         <td width="42%" align="left"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
<span style="float: left;" class="pbody">Target Audience:</span>
<div style=" color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details <span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span>
        <td width="43%" align="right" class="stitle"  style="color: #900c3f">Current Vehicle</td>

      </tr>

      </table></td>

    </tr>

  <tr>

  <td width="50%" valign="top" ><table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" class="pbody12">

    <tr >

      <th width="177" align="center" ><div align="center"><strong><span class="sgrey14">Area summary</span></strong></div></th>

      <th colspan="3" align=""><div align="center"><span class="sgrey14">Target Audience</span></div></th>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5"> Total vehicles (estimated)</span></td>

      <td colspan="3" class="pbodyemp"><div align="center" class="style5">

        <div align=""><span class="style4"><?php echo number_format($at_total['tot_vehicles'],0);?> owned in the entire market area</span></div>

      </div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td align="left" class="pbodyemp" ><span class="pbody12 style5">Average  vehicles per household </span></td>

      <td colspan="3" align="" class="pbodyemp"><div align="center" class="style5">

        <div align=""><span class="style4"><?php echo number_format($at_total['tot_vehicles']/$hh_tot,1);?></span></div>

      </div></td>

    </tr>

      <tr>

        <td colspan="4">&nbsp;</td>

        </tr>

      <tr >

        <th align="center" ><div align="center"><strong><span class="sgrey14">Vehicles Per Household</span></strong></div></th>

        <th width="82" align=""><div align="center"><span class="sgrey14">Target Audience</span></div></th>

        <th width="92" align=""><div align="center"><strong><span class="sgrey14"><span class="style1">Benchmark</span><br />

          Average</span></strong></div></th>

        <th width="62" align=""><div align="center"><strong><span class="sgrey14">Index</span></strong></div></th>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style3">None</span></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_N0,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_N0,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_N0);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style3">One</span></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_N1,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_N1,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_N1);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style3">Two</span></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_N2,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_N2,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_N2);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style3">Three</span></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_N3,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_N3,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_N3);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style3">Four or more</span></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_N4_,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_N4_,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_N4_);?></span></div></td>

      </tr>

      <tr>

        <td colspan="4">&nbsp;</td>

      </tr>

      <tr >

        <th align="center"><div align="center"><strong><span class="sgrey14">Annual Km Driven</span></strong></div></th>

        <th align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

        <th align="left"><div align="center"><strong><span class="sgrey14"><span class="style1">Benchmark</span><br />

          Average</span></strong></div></th>

        <th align="left"><div align="center"><strong><span class="sgrey14">Index</span></strong></div></th>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">None</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_KM0,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_KM0,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_KM0);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">Less than 10k</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_KM1_9,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_KM1_9,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_KM1_9);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">10k-20k</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_KM10_19,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_KM10_19,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_KM10_19);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">20k-30k</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_KM20_29,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_KM20_29,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_KM20_29);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">30k +</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_KM30_,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_KM30_,1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_KM30_);?></span></div></td>

      </tr>

      <tr>

        <td colspan="4">&nbsp;</td>

        </tr>

      <tr class="pbodyemp">

        <td><div align="center"><span class="sgrey14">Age of Vehicle </span></div></td>

        <td class="pbodyemp"><div align="center"><span class="sgrey14">Target Audience</span></div></td>

        <td class="pbodyemp"><div align="center"><span class="sgrey14">Benchmark Average</span><br />
          
        </div></td>

        <td class="pbodyemp"><div align="center"><span class="sgrey14"><strong>Index</strong></span></div></td>

        </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">New</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['pnew'],1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['cnew'],1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['inew']);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">2-5 year old vehicle</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['p2_5'],1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['c2_5'],1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['i2_5']);?></span></div></td>

        </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">5-10 year old vehicle</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['p5_10'],1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['c5_10'],1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['i5_10']);?></span></div></td>

      </tr>

      <tr class="table table-hover table-bordered">

        <td class="pbodyemp"><span class="pbody12 style5">10 years+</span></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['pold'],1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['cold'],1);?>%</span></div></td>

        <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($at_age_vehicle['iold']);?></span></div></td>

      </tr>

      </table><span class="pbody12" style="padding-left: 5px;">Target Audience compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>

  <td width="50%" valign="top" ><table width="95%" border="1" cellpadding="0" cellspacing="0" class="pbody12">

       <tr >

         <th width="180" align="left"><div align="center"><strong><span class="sgrey14">Type of vehicle most often driven</span></strong></div></th>

         <th width="96" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

         <th width="80" align="left"><div align="center"><strong><span class="sgrey14"><span class="style1">Benchmark</span><br />

           Average</span></strong></div></th>

         <th width="58" align="left"><div align="center"><strong><span class="sgrey14">Index</span></strong></div></th>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Sedan</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_TPMFS,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_TPMFS,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_TPMFS);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Sub-compact</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_TPSCOMP,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_TPSCOMP,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_TPSCOMP);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Sports car</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_TPSPO,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_TPSPO,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_TPSPO);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Minivan</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_TPMVSW,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_TPMVSW,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_TPMVSW);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">SUV</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_TPSUV,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_TPSUV,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_TPSUV);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Pickup truck</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_TPPIC,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_TPPIC,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_TPPIC);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Van</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_TPFVAN,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_TPFVAN,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_TPFVAN);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Other</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_TPOTH,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_TPOTH,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_TPOTH);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td colspan="4">&nbsp;</td>

         </tr>

       <tr >

         <th align="left"><div align="center"><strong><span class="sgrey14">Value of vehicle  (past 2 years)</span></strong></div></th>

         <th align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

         <th align="left"><strong><span class="sgrey14"><span class="style1">Benchmark</span><br />

           Average</span></strong></th>

         <th align="left"><div align="center"><strong><span class="sgrey14">Index</span></strong></div></th>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Less than $10k</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_V_9,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_V_9,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_V_9);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">$10K-$15K</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_V10_14,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_V10_14,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_V10_14);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">$15K-$20K</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_V15_19,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_V15_19,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_V15_19);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">$20k-$25k</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_V20_24,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_V20_24,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_V20_24);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">$25k-$30k</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_V25_29,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_V25_29,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_V25_29);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">$30k-$40k</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_V30_39,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_V30_39,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_V30_39);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">$40k or more</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_V40_,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_V40_,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_V40_);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td colspan="4">&nbsp;</td>

         </tr>

       <tr class="pbodyemp">

         <th align="left" ><div align="center">Purchase of last vehicle</div></th>

         <th align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

         <th align="left"><div align="center"><span class="style1">Benchmark</span><br />

           Average</div></th>

         <th align="left"><div align="center">Index</div></th>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Bought new</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_NEWBN,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_NEWBN,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_NEWBN);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Bought used</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_NEWBU,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_NEWBU,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_NEWBU);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Leased new</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_NEWLN,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_NEWLN,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_NEWLN);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td class="pbodyemp"><span class="pbody12 style5">Leased used</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_NEWLU,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_NEWLU,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_NEWLU);?></span></div></td>

       </tr>

       <tr class="table table-hover table-bordered">

         <td height="22" class="pbodyemp"><span class="pbody12 style5">Not sure</span></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_NEWNO,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_NEWNO,1);?>%</span></div></td>

         <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_NEWNO);?></span></div></td>

       </tr>

      </table></td>

  </tr>

  </table>

</div>



<div class="pagebreak"></div>



<div class="print_pages align="left"" style="height: auto; padding-bottom: 15px;"> 

  <table width="903" height="90%" border="0" cellspacing="4" cellpadding="0">

  <tr>

    <td height="69" colspan="2" ><table width="100%" border="0" cellspacing="4" cellpadding="4">

      <tr>

       <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

         <td width="42%" align="left"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
<span style="float: left;" class="pbody">Target Audience:</span>
<div style=" color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details
	<span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span>

        <td width="43%" align="right" class="stitle"  style="color: #900c3f">Competition</td>

      </tr>

    </table></td>

    </tr>

  <tr>

  <td width="50%" valign="top" ><table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">
    <tr class="table table-hover table-bordered">
      <td class="pbodyemp"><div align="center" class="style3">
        <table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">
          <tr class="pbodyemp">
            <th width="150" align="left"><div align="center">Specific Manufacturer <br />
              (Domestic)</div></th>
            <th width="100" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>
            <th width="100" align="left"><div align="center"><span class="style1">Benchmark</span><br />
              Average</div></th>
            <th width="70" align="left"><div align="center">Index</div></th>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Buick</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKBUI,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKBUI,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKBUI);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Cadillac</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKCAD,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKCAD,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKCAD);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Chevrolet</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKCHE,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKCHE,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKCHE);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Chrysler</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKCHR,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKCHR,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKCHR);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Dodge</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKDOD,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKDOD,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKDOD);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Ford</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKFOR,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKFOR,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKFOR);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">GMC</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKGMC,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKGMC,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKGMC);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Jeep/Eagle</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKJEE,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKJEE,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKJEE);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Lincoln</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKLIN,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKLIN,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKLIN);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Mercury</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKMER,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKMER,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKMER);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Oldsmobile</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKOLD,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKOLD,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKOLD);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Plymouth</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKPLY,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKPLY,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKPLY);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Pontiac</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKPON,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKPON,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKPON);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Saturn</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKSAT,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKSAT,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKSAT);?></span></div></td>
          </tr>
          <tr class="table table-hover table-bordered">
            <td class="pbodyemp"><span class="pbody12 style3">Other Domestic</span></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKDOM,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKDOM,1);?>%</span></div></td>
            <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKDOM);?></span></div></td>
          </tr>
        </table>
        <span class="style4"></span></div></td>
    </tr>
  </table><span class="pbody12" style="padding-left: 5px;">Target Audience compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>

  <td width="50%" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

    <tr class="pbodyemp">

      <th width="150" align="left"><div align="center">Specific Manufacturer <br />
        
        (Foreign)</div></th>

      <th width="100" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

      <th width="100" align="left"><div align="center"><span class="style1">Benchmark</span><br />

        Average</div></th>

      <th width="70" align="left"><div align="center">Index</div></th>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Acura</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKACU,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKACU,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKACU);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Audi</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKAU_D,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKAU_D,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKAU_D);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">BMW</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKBMW,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKBMW,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKBMW);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Honda</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKHON,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKHON,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKHON);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Hyundai</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKHYU,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKHYU,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKHYU);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Infiniti</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKINF,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKINF,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKINF);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Kia</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKKIA,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKKIA,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKKIA);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Lexus</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKLEX,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKLEX,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKLEX);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Mazda</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKMAZ,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKMAZ,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKMAZ);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Mercedes-Benz</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKBEN,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKBEN,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKBEN);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Mitsubishi</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKMIT,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKMIT,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKMIT);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Nissan</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKNIS,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKNIS,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKNIS);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Subaru</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKSUB,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKSUB,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKSUB);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Suzuki</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKSUZ,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKSUZ,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKSUZ);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Toyota</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKTOY,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKTOY,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKTOY);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Volkswagen</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKVW,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKVW,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKVW);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Volvo</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKVOL,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKVOL,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKVOL);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Other Foreign</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_MKFGN,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_MKFGN,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_MKFGN);?></span></div></td>

    </tr>

  </table></td>

  </tr>

  </table>

</div>





<div class="pagebreak"></div>



<div class="print_pages align="left""> 

  <table width="903" height="625" border="0" cellspacing="4" cellpadding="0">

  <tr>

    <td height="67" colspan="2" ><table width="100%" border="0" cellspacing="4" cellpadding="4">

      <tr>

    <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

         <td width="42%" align="left"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
<span style="float: left;" class="pbody">Target Audience:</span>
<div style=" color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details
	<span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span>

        <td width="43%" align="right" class="stitle"  style="color: #900c3f">Intend to Buy</td>

      </tr>

    </table></td>

    </tr>

  <tr>

  <td width="50%" valign="top" ><table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" class="pbody12">

    <tr class="pbodyemp">

      <th width="150" align="left"><div align="center">Intend to buy</div></th>

      <th width="100" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

      <th width="100" align="left"><div align="center"><span class="style1">Benchmark</span><br />

        Average</div></th>

      <th width="70" align="left"><div align="center">Index</div></th>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">Definitely will purchase</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PPUP,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PPUP,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PPUP);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">Likely will purchase</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PPULP,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PPULP,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PPULP);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">Likely will not purchase</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PPULN,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PPULN,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PPULN);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">Definitely will not purchase</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PPUN,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PPUN,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PPUN);?></span></div></td>

    </tr>

    <tr class="pbodyemp">

      <th colspan="4" align="left">&nbsp;</th>

      </tr>

    <tr class="pbodyemp">

      <th align="left"><div align="center">Value of vehicle intend to buy</div></th>

      <th align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

      <th align="left"><div align="center"><span class="style1">Benchmark</span><br />
        
        Average</div></th>

      <th align="left"><div align="center">Index</div></th>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">Less than $10,000</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PV_9,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PV_9,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PV_9);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">$10,000 - $14,999</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PV10_14,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PV10_14,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PV10_14);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">$15,000 - $19,999</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PV15_19,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PV15_19,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PV15_19);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">$20,000 - $24,999</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PV20_24,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PV20_24,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PV20_24);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">$25,000 - $29,999</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PV25_29,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PV25_29,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PV25_29);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">$30,000 - $39,999</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PV30_39,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PV30_39,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PV30_39);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td><span class="pbody12">$40,000 or more</span></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($pAU_PV40_,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($cAU_PV40_,1);?>%</span></div></td>

      <td><div align="center"><span class="pbody12"><?php echo number_format($iAU_PV40_);?></span></div></td>

    </tr>

    <tr class="pbodyemp">

      <th align="left">&nbsp;</th>

      <th align="left">&nbsp;</th>

      <th align="left">&nbsp;</th>

      <th align="left">&nbsp;</th>

    </tr>

    <tr class="success">

      <th align="left" class="sgrey14"><div align="center">Type of vehicle intend to buy</div></th>

      <th align="left" class="pbodyemp"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

      <th align="left" class="sgrey14"><div align="center"><span class="style1">Benchmark</span><br />

        Average</div></th>

      <th align="left"><div align="center"><span class="sgrey14">Index</span></div></th>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5">Sedan</span></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_PTPSED,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_PTPSED,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_PTPSED);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5">Sub-compact</span></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_PTPSCOM,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_PTPSCOM,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_PTPSCOM);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5">Sports car</span></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_PTPSPO,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_PTPSPO,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_PTPSPO);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5">Minivan</span></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_PTPMVSW,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_PTPMVSW,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_PTPMVSW);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5">SUV</span></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_PTPSUV,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_PTPSUV,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_PTPSUV);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5">Pickup truck</span></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_PTPPIC,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_PTPPIC,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_PTPPIC);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5">Van</span></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_PTPFVAN,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_PTPFVAN,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_PTPFVAN);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style5">Other</span></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($pAU_PTPOTH,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($cAU_PTPOTH,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style5"><span class="style4"><?php echo number_format($iAU_PTPOTH);?></span></div></td>

    </tr>

      </table></td>

  <td width="50%" align="center" valign="top" ><img src="kids_car.jpg" alt="kids car" width="425" height="425" class="Example_E1" /><span class="pbody12">Target Audience compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>

  </tr>

  </table>

</div>



<div class="pagebreak"></div><br/>



<div class="print_pages tgdr align="left""> 

  <table width="903" height="619" border="0" cellspacing="4" cellpadding="0">

  <tr>

    <td height="67" colspan="2" ><table width="100%" border="0" cellspacing="4" cellpadding="4">

      <tr>

     <td width="132" height="65" align="left" valign="top"><img src="KQUEST.png" width="113" height="50" alt="KQUEST" /></td>

          <td width="42%" align="left"><strong class="psub2">Store  # <?php echo $store_number; ?></strong><br/>
<span style="float: left;" class="pbody">Target Audience:</span>
<div style=" color: #900C3F;float:left !important; margin-left: 5px;" class="tooltip1 pbody">
    Click for Details<span class="tooltiptext1">
        <?php echo $var_click_details; ?>
    </span>

        <td width="43%" align="right" class="stitle"  style="color: #900c3f">After Market</td>

      </tr>

    </table></td>

    </tr>

  <tr>

  <td width="50%" valign="top" ><table width="95%" border="1" align="center" cellpadding="1" cellspacing="1" class="pbody12">

    <tr class="pbodyemp">

      <th width="166" align="left"> <span class="sgrey14">
        <div align="center">Most recent visited service centre </div></th>

      <th width="71" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

      <th width="95" align="left"><div align="center"><span class="sgrey14">Benchmark</span><br />

        Average</div></th>

      <th width="68" align="left"><div align="center"><span class="sgrey14">Index </span></div></th>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Active Green and Ross</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSGR,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSGR,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSGR);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Appke Auto Glass</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSAG,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSAG,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSAG);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Bridgestone / Firestone</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSST,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSST,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSST);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Canadian Tire</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSCT,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSCT,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSCT);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Costco</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSCC,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSCC,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSCC);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">GM Goodwrench</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSGM,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSGM,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSGM);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Goodyear Select</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSGY,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSGY,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSGY);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Maaco</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSMC,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSMC,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSMC);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Midas</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSMD,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSMD,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSMD);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Mister Transmission</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSTR,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSTR,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSTR);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Mr. Lube</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSLB,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSLB,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSLB);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">NAPA Auto Parts</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSNP,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSNP,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSNP);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">OK Tire</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSOKT,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSOKT,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSOKT);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">PartSource</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSPS,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSPS,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSPS);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Speedy Auto Glass</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSSG,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSSG,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSSG);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Speedy Auto Service</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSSS,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSSS,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSSS);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Wal*Mart</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSWM,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSWM,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSWM);?></span></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp"><span class="pbody12 style3">Dealership</span></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($pAU_VSDL,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($cAU_VSDL,1);?>%</span></div></td>

      <td class="pbodyemp"><div align="center" class="style3"><span class="style4"><?php echo number_format($iAU_VSDL);?></span></div></td>

    </tr>

      </table></td>

  <td width="50%" align="center" valign="top" ><table width="95%" border="1" cellpadding="1" cellspacing="1" class="pbody12">

    <tr class="success">

      <th width="100" align="left"><div align="center"><span class="sgrey14">Visited Gas Station</span></div></th>

      <th width="100" align="left"><div align="center"><span class="sgrey14">Target Audience</span></div></th>

      <th width="100" align="left"><div align="center"><span class="sgrey14">Benchmark Average</span><br />
      </div></th>

      <th width="70" align="left"><div align="center"><span class="sgrey14">Index</span></div></th>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp" >Canadian Tire</td>

      <td class=""><div align="center" class="style3"><?php echo number_format($pAU_GASCT,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($cAU_GASCT,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($iAU_GASCT);?></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp" >Chevron</td>

      <td class=""><div align="center" class="style3"><?php echo number_format($pAU_GASCR,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($cAU_GASCR,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($iAU_GASCR);?></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp" >Esso</td>

      <td class=""><div align="center" class="style3"><?php echo number_format($pAU_GASES,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($cAU_GASES,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($iAU_GASES);?></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp">Petro Canada</td>

      <td class=""><div align="center" class="style3"><?php echo number_format($pAU_GASPT,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($cAU_GASPT,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($iAU_GASPT);?></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp">Shell</td>

      <td class=""><div align="center" class="style3"><?php echo number_format($pAU_GASSL,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($cAU_GASSL,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($iAU_GASSL);?></div></td>

    </tr>

    <tr class="table table-hover table-bordered">

      <td class="pbodyemp">Other gas stations</td>

      <td class=""><div align="center" class="style3"><?php echo number_format($pAU_GASOT,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($cAU_GASOT,1);?>%</div></td>

      <td class=""><div align="center" class="style3"><?php echo number_format($iAU_GASOT);?></div></td>

    </tr>

  </table>

    <br />    <img src="gas.jpg" alt="gas" width="440" height="220" class="Example_E1" /><span class="pbody12">Target Audience compared to 
<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>

  </tr>

  </table>

</div>





