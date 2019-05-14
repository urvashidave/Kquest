

<style>
  .h1, .h2, .h3, h1, h2, h3 {
  margin-top: 0px !important;
  margin-bottom: -3px  !important;
  }
  .margintop{
  margin-top:20px;
  }
  body{
  font-family: "Arial Narrow", Arial, sans-serif;
  }
  .pheading {
  color: red;
  font-family: "Arial Narrow", Arial, sans-serif;
  font-size: 34px;
  font-weight: normal;
  }
  hr {border-color:black !important;}
  .stitle {
  font-family: Arial Narrow, Arial, Helvetica, sans-serif;
  font-size: 28px;
  line-height:33px;
  color: #900C3F;
  vertical-align:super !important;
  }
  .vline {
  border-left: 1px solid lightgrey;
  border-right: 1px solid lightgrey;
  height: 100%;
  padding-left: 1px !important;
  }
  .b{
  border-bottom:solid 0.1px;
  }
  .margin{
  border-bottom:0.1px solid !important;
  width: 373px !important;
  }
  .margin2{
  padding-top: 2%;
  width: 373px !important;
  }
  .first
  {
  page-break-before: avoid !important;
  }
  .print_pages
  {
  page-break-after: always;
  }
  .print_pagesfirst
  {
  page-break-after: always;
  }
  .print_pagesfirst {
  width: 905px;
  height: 640px;
  background: #fff;
  margin: auto;
  border-style: groove;
  border-width: 2px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
  }
  .last_page {
  page-break-after: avoid;
  page-break-inside: avoid;
  }
  .otitle {
  padding-left: 0px !important;
  font-family: "Arial Narrow", Arial, sans-serif;
  font-size: 30px;
  font-weight: bold;
  }
  td, th {
  padding-left: 3% !important;
  padding-right: 2% !important;
  }
  .title {
  font-size: 18px;
  color: #147EA7 !important;
  }
  svg{
  top:-3px !important;
  height:505px !important;
  }
  #chartdiv {
  width: 98%;
  height: 280px;
  margin-top: 2%;
  margin-bottom: 5%;
  }	
  #chartdiv2 {
  width: 98%;
  height: 280px;
  margin-top: 2%;
  margin-bottom: 5%;
  }	
  #chartdiv3 {
  width: 98%;
  height: 280px;
  margin-top: 2%;
  margin-bottom: 5%;
  }	
  #chartdiv4 {
  width: 98%;
  height: 280px;
  margin-top: 2%;
  margin-bottom: 5%;
  }	
  #chartdiv5 {
  width: 98%;
  height: 280px;
  margin-top: 2%;
  margin-bottom: 5%;
  }	
  .amcharts-graph-column-front .amcharts-graph-column-element	{
  }		
</style>
<?php 
  $snapshot_max_width = 150;
  $snapshot_min_width = 20;
  $snapshot_multiplier_width = 1.5;
  
  // family
  	if($snapshot_family_index[0] >= 100) {
  		$snapshot_family_left_src = "spacer.gif";
  		$snapshot_family_left_width = 20;
  		
  		$snapshot_family_right_src = "green5.png";
  		$snapshot_family_right_width = ($snapshot_family_index[0] - 100) * 3;
  		$snapshot_family_right_width = round(max(min(($snapshot_family_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_family_right_src = "spacer.gif";
  		$snapshot_family_right_width = 20;
  		
  		$snapshot_family_left_src = "line_red.png";
  		$snapshot_family_left_width = (100 - $snapshot_family_index[0]) * 3;
  		$snapshot_family_left_width = round(max(min(($snapshot_family_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  	// mixed family
  	if($snapshot_family_name[0] == "N/A") {
  		$snapshot_family_left_src = "spacer.gif";
  		$snapshot_family_left_width = 20;
  		$snapshot_family_right_src = "spacer.gif";
  		$snapshot_family_right_width = 20;		
  	}
  	
  	
  // age
  	if($snapshot_age_index[0] >= 100) {
  		$snapshot_age_left_src = "spacer.gif";
  		$snapshot_age_left_width = 20;
  		
  		$snapshot_age_right_src = "green5.png";
  		$snapshot_age_right_width = ($snapshot_age_index[0] - 100) * 3;
  		$snapshot_age_right_width = round(max(min(($snapshot_age_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_age_right_src = "spacer.gif";
  		$snapshot_age_right_width = 20;
  		
  		$snapshot_age_left_src = "line_red.png";
  		$snapshot_age_left_width = (100 - $snapshot_age_index[0]) * 3;
  		$snapshot_age_left_width = round(max(min(($snapshot_age_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  
  
  	// mixed age
  	if($snapshot_age_name[0] == "N/A") {
  		$snapshot_age_left_src = "spacer.gif";
  		$snapshot_age_left_width = 20;
  		$snapshot_age_right_src = "spacer.gif";
  		$snapshot_age_right_width = 20;	
  
  	}
  
  // income
  
  if($IN_AHHp > $IN_AHHc) {
  	$snapshot_income_comment = "$" . number_format(($IN_AHHp - $IN_AHHc)) . " more than the benchmark  Index: " . number_format($IN_AHHi );
  } else {
  	$snapshot_income_comment = "$" . number_format(($IN_AHHc - $IN_AHHp)) . " less than the benchmark  Index: " . number_format($IN_AHHi );
  } 
  
  if($IN_AHHi >= 100) {
  		$snapshot_income_left_src = "spacer.gif";
  		$snapshot_income_left_width = 20;
  		
  		$snapshot_income_right_src = "green5.png";
  		$snapshot_income_right_width = ($IN_AHHi - 100) * 3;
  		$snapshot_income_right_width = round(max(min(($snapshot_income_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_income_right_src = "spacer.gif";
  		$snapshot_income_right_width = 20;
  		
  		$snapshot_income_left_src = "line_red.png";
  		$snapshot_income_left_width = (100 - $IN_AHHi) * 3;
  		$snapshot_income_left_width = round(max(min(($snapshot_income_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  
  
  
  // ethnicity
  
  // generic
  		$snapshot_ethnic_comment = "Visible Minority (all)";
  		$snapshot_ethnic_percent = number_format($MN_VISp);
  		$snapshot_ethnic_index= ($MN_VISi);
  
  // select a specific named ethnicity
  $max_ethnicity = max($MN_CHINESEp, $MN_SASIANp, $MN_BLACKp);
  
  if($max_ethnicity >= 10) {
  	if($MN_CHINESEp == $max_ethnicity) {
  		$snapshot_ethnic_comment = "Chinese";
  		$snapshot_ethnic_percent = number_format($MN_CHINESEp);
  		$snapshot_ethnic_index= ($MN_CHINESEi);		
  	}
  	if($MN_SASIANp == $max_ethnicity) {
  		$snapshot_ethnic_comment = "South Asian";
  		$snapshot_ethnic_percent = number_format($MN_SASIANp);
  		$snapshot_ethnic_index= ($MN_SASIANi);		
  	}
  	if($MN_BLACKp == $max_ethnicity) {
  		$snapshot_ethnic_comment = "Black";
  		$snapshot_ethnic_percent = number_format($MN_BLACKp);
  		$snapshot_ethnic_index= ($MN_BLACKi);		
  	}	
  }
  
  
  // caucasian
  if($MN_WHITEi >= 100) {
  		$snapshot_caucasian_left_src = "spacer.gif";
  		$snapshot_caucasian_left_width = 20;
  		
  		$snapshot_caucasian_right_src = "green5.png";
  		$snapshot_caucasian_right_width = ($MN_WHITEi - 100) * 4;
  		$snapshot_caucasian_right_width = round(max(min(($snapshot_caucasian_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_caucasian_right_src = "spacer.gif";
  		$snapshot_caucasian_right_width = 20;
  		
  		$snapshot_caucasian_left_src = "line_red.png";
  		$snapshot_caucasian_left_width = (100 - $MN_WHITEi) * 4;
  		$snapshot_caucasian_left_width = round(max(min(($snapshot_caucasian_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  
  // other diversity
  if($snapshot_ethnic_index >= 100) {
  		$snapshot_otherethnic_left_src = "spacer.gif";
  		$snapshot_otherethnic_left_width = 20;
  		
  		$snapshot_otherethnic_right_src = "green5.png";
  		$snapshot_otherethnic_right_width = ($snapshot_ethnic_index - 100) * 3;
  		$snapshot_otherethnic_right_width = round(max(min(($snapshot_otherethnic_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_otherethnic_right_src = "spacer.gif";
  		$snapshot_otherethnic_right_width = 20;
  		
  		$snapshot_otherethnic_left_src = "line_red.png";
  		$snapshot_otherethnic_left_width = (100 - $snapshot_ethnic_index) * 3;
  		$snapshot_otherethnic_left_width = round(max(min(($snapshot_otherethnic_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  // spending
  // hhb_consume hha_consume = total 
   // hhbcommit hhacommit  = essential	
   // hhb_purchases hhcan_purchases = control
   // hhmarket_discretionary hhcan_discretionary = disc.
   
   $snapshot_tot_spend_index = ($hhb_consume / $hha_consume) *100;
   $snapshot_com_spend_index = ($hhbcommit / $hhacommit) *100;
   $snapshot_pur_spend_index = ($hhb_purchases / $hhcan_purchases) *100;
   $snapshot_disc_spend_index = ($hhmarket_discretionary / $hhcan_discretionary) *100;
   
   // total spend
  if($snapshot_tot_spend_index >= 100) {
  		$snapshot_tot_spend_left_src = "spacer.gif";
  		$snapshot_tot_spend_left_width = 20;
  		
  		$snapshot_tot_spend_right_src = "green5.png";
  		$snapshot_tot_spend_right_width = ($snapshot_tot_spend_index - 100) * 3;
  		$snapshot_tot_spend_right_width = round(max(min(($snapshot_tot_spend_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_tot_spend_right_src = "spacer.gif";
  		$snapshot_tot_spend_right_width = 20;
  		
  		$snapshot_tot_spend_left_src = "line_red.png";
  		$snapshot_tot_spend_left_width = (100 - $snapshot_tot_spend_index) * 3;
  		$snapshot_tot_spend_left_width = round(max(min(($snapshot_tot_spend_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  // com spend
  if($snapshot_com_spend_index >= 100) {
  		$snapshot_com_spend_left_src = "spacer.gif";
  		$snapshot_com_spend_left_width = 20;
  		
  		$snapshot_com_spend_right_src = "green5.png";
  		$snapshot_com_spend_right_width = ($snapshot_com_spend_index - 100) * 3;
  		$snapshot_com_spend_right_width = round(max(min(($snapshot_com_spend_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_com_spend_right_src = "spacer.gif";
  		$snapshot_com_spend_right_width = 20;
  		
  		$snapshot_com_spend_left_src = "line_red.png";
  		$snapshot_com_spend_left_width = (100 - $snapshot_com_spend_index) * 3;
  		$snapshot_com_spend_left_width = round(max(min(($snapshot_com_spend_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  
  // pur spend
  if($snapshot_pur_spend_index >= 100) {
  		$snapshot_pur_spend_left_src = "spacer.gif";
  		$snapshot_pur_spend_left_width = 20;
  		
  		$snapshot_pur_spend_right_src = "green5.png";
  		$snapshot_pur_spend_right_width = ($snapshot_pur_spend_index - 100) * 3;
  		$snapshot_pur_spend_right_width = round(max(min(($snapshot_pur_spend_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_pur_spend_right_src = "spacer.gif";
  		$snapshot_pur_spend_right_width = 20;
  		
  		$snapshot_pur_spend_left_src = "line_red.png";
  		$snapshot_pur_spend_left_width = (100 - $snapshot_pur_spend_index) * 3;
  		$snapshot_pur_spend_left_width = round(max(min(($snapshot_pur_spend_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  
  
  
   
   // disc spend
  if($snapshot_disc_spend_index >= 100) {
  		$snapshot_desc_spend_left_src = "spacer.gif";
  		$snapshot_desc_spend_left_width = 20;
  		
  		$snapshot_desc_spend_right_src = "green5.png";
  		$snapshot_desc_spend_right_width = ($snapshot_disc_spend_index - 100) * 3;
  		$snapshot_desc_spend_right_width = round(max(min(($snapshot_desc_spend_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_desc_spend_right_src = "spacer.gif";
  		$snapshot_desc_spend_right_width = 20;
  		
  		$snapshot_desc_spend_left_src = "line_red.png";
  		$snapshot_desc_spend_left_width = (100 - $snapshot_disc_spend_index) * 3;
  		$snapshot_desc_spend_left_width = round(max(min(($snapshot_desc_spend_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  	// Flyer 
  if($index_flyer_heavy >= 100) {
  		$snapshot_flyer_left_src = "spacer.gif";
  		$snapshot_flyer_left_width = 20;
  		
  		$snapshot_flyer_right_src = "green5.png";
  		$snapshot_flyer_right_width = ($index_flyer_heavy - 100) * 3;
  		$snapshot_flyer_right_width = round(max(min(($snapshot_flyer_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_flyer_right_src = "spacer.gif";
  		$snapshot_flyer_right_width = 20;
  		
  		$snapshot_flyer_left_src = "line_red.png";
  		$snapshot_flyer_left_width = (100 - $index_flyer_heavy) * 3;
  		$snapshot_flyer_left_width = round(max(min(($snapshot_flyer_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  	// internet 
  if($binternetindex >= 100) {
  		$snapshot_internet_left_src = "spacer.gif";
  		$snapshot_internet_left_width = 20;
  		
  		$snapshot_internet_right_src = "green5.png";
  		$snapshot_internet_right_width = ($binternetindex - 100) * 3;
  		$snapshot_internet_right_width = round(max(min(($snapshot_internet_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_internet_right_src = "spacer.gif";
  		$snapshot_internet_right_width = 20;
  		
  		$snapshot_internet_left_src = "line_red.png";
  		$snapshot_internet_left_width = (100 - $binternetindex) * 3;
  		$snapshot_internet_left_width = round(max(min(($snapshot_internet_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  	// radio 
  if($bradioindex >= 100) {
  		$snapshot_radio_left_src = "spacer.gif";
  		$snapshot_radio_left_width = 20;
  		
  		$snapshot_radio_right_src = "green5.png";
  		$snapshot_radio_right_width = ($bradioindex - 100) * 3;
  		$snapshot_radio_right_width = round(max(min(($snapshot_radio_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_radio_right_src = "spacer.gif";
  		$snapshot_radio_right_width = 20;
  		
  		$snapshot_radio_left_src = "line_red.png";
  		$snapshot_radio_left_width = (100 - $bradioindex) * 3;
  		$snapshot_radio_left_width = round(max(min(($snapshot_radio_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  	// news 
  if($bnpindex >= 100) {
  		$snapshot_newspaper_left_src = "spacer.gif";
  		$snapshot_newspaper_left_width = 20;
  		
  		$snapshot_newspaper_right_src = "green5.png";
  		$snapshot_newspaper_right_width = ($bnpindex - 100) * 3;
  		$snapshot_newspaper_right_width = round(max(min(($snapshot_newspaper_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_newspaper_right_src = "spacer.gif";
  		$snapshot_newspaper_right_width = 20;
  		
  		$snapshot_newspaper_left_src = "line_red.png";
  		$snapshot_newspaper_left_width = (100 - $bnpindex) * 3;
  		$snapshot_newspaper_left_width = round(max(min(($snapshot_newspaper_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  
  // lifestyle
  
  if($sorted_leisure['index'][0] >= 100) {
  		$snapshot_lifestyle0_left_src = "spacer.gif";
  		$snapshot_lifestyle0_left_width = 20;
  		
  		$snapshot_lifestyle0_right_src = "green5.png";
  		$snapshot_lifestyle0_right_width = ($sorted_leisure['index'][0] - 100) * 3;
  		$snapshot_lifestyle0_right_width = round(max(min(($snapshot_lifestyle0_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_lifestyle0_right_src = "spacer.gif";
  		$snapshot_lifestyle0_right_width = 20;
  		
  		$snapshot_lifestyle0_left_src = "line_red.png";
  		$snapshot_lifestyle0_left_width = (100 - $sorted_leisure['index'][0]) * 3;
  		$snapshot_lifestyle0_left_width = round(max(min(($snapshot_lifestyle0_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
      
      
  if($sorted_leisure['index'][1] >= 100) {
  		$snapshot_lifestyle1_left_src = "spacer.gif";
  		$snapshot_lifestyle1_left_width = 20;
  		
  		$snapshot_lifestyle1_right_src = "green5.png";
  		$snapshot_lifestyle1_right_width = ($sorted_leisure['index'][1] - 100) * 3;
  		$snapshot_lifestyle1_right_width = round(max(min(($snapshot_lifestyle1_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_lifestyle1_right_src = "spacer.gif";
  		$snapshot_lifestyle1_right_width = 20;
  		
  		$snapshot_lifestyle1_left_src = "line_red.png";
  		$snapshot_lifestyle1_left_width = (100 - $sorted_leisure['index'][1]) * 3;
  		$snapshot_lifestyle1_left_width = round(max(min(($snapshot_lifestyle1_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
      
  if($sorted_leisure['index'][0] >= 100) {
  		$snapshot_lifestyle2_left_src = "spacer.gif";
  		$snapshot_lifestyle2_left_width = 20;
  		
  		$snapshot_lifestyle2_right_src = "green5.png";
  		$snapshot_lifestyle2_right_width = ($sorted_leisure['index'][2] - 100) * 3;
  		$snapshot_lifestyle2_right_width = round(max(min(($snapshot_lifestyle2_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_lifestyle2_right_src = "spacer.gif";
  		$snapshot_lifestyle2_right_width = 20;
  		
  		$snapshot_lifestyle2_left_src = "line_red.png";
  		$snapshot_lifestyle2_left_width = (100 - $sorted_leisure['index'][2]) * 3;
  		$snapshot_lifestyle2_left_width = round(max(min(($snapshot_lifestyle2_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
      
      if($sorted_leisure['index'][3] >= 100) {
  		$snapshot_lifestyle3_left_src = "spacer.gif";
  		$snapshot_lifestyle3_left_width = 20;
  		
  		$snapshot_lifestyle3_right_src = "green5.png";
  		$snapshot_lifestyle3_right_width = ($sorted_leisure['index'][3] - 100) * 3;
  		$snapshot_lifestyle3_right_width = round(max(min(($snapshot_lifestyle3_right_width),$snapshot_max_width),$snapshot_min_width));				
  	} else {
  		$snapshot_lifestyle3_right_src = "spacer.gif";
  		$snapshot_lifestyle3_right_width = 20;
  		
  		$snapshot_lifestyle3_left_src = "line_red.png";
  		$snapshot_lifestyle3_left_width = (100 - $sorted_leisure['index'][3]) * 3;
  		$snapshot_lifestyle3_left_width = round(max(min(($snapshot_lifestyle3_left_width),$snapshot_max_width),$snapshot_min_width));				
  	}
  	
  
  // segment
  
                
                
  
  if ($segment_counter >0) { 
      if($sorted_segment_index[0] >= 100) {
              $snapshot_segment0_left_src = "spacer.gif";
              $snapshot_segment0_left_width = 20;
              
              $snapshot_segment0_right_src = "green5.png";
              $snapshot_segment0_right_width = ($sorted_segment_index[0] - 100) * 2;
              $snapshot_segment0_right_width = round(max(min(($snapshot_segment0_right_width),$snapshot_max_width),$snapshot_min_width));				
          } else {
              $snapshot_segment0_right_src = "spacer.gif";
              $snapshot_segment0_right_width = 20;
              
              $snapshot_segment0_left_src = "line_red.png";
              $snapshot_segment0_left_width = (100 - $sorted_segment_index[0]) * 2;
              $snapshot_segment0_left_width = round(max(min(($snapshot_segment0_left_width),$snapshot_max_width),$snapshot_min_width));				
          }
  }
  
  if ($segment_counter >1) { 
      if($sorted_segment_index[0] >= 100) {
              $snapshot_segment1_left_src = "spacer.gif";
              $snapshot_segment1_left_width = 20;
              
              $snapshot_segment1_right_src = "green5.png";
              $snapshot_segment1_right_width = ($sorted_segment_index[1] - 100) * 2;
              $snapshot_segment1_right_width = round(max(min(($snapshot_segment1_right_width),$snapshot_max_width),$snapshot_min_width));				
          } else {
              $snapshot_segment1_right_src = "spacer.gif";
              $snapshot_segment1_right_width = 20;
              
              $snapshot_segment1_left_src = "line_red.png";
              $snapshot_segment1_left_width = (100 - $sorted_segment_index[1]) * 2;
              $snapshot_segment1_left_width = round(max(min(($snapshot_segment1_left_width),$snapshot_max_width),$snapshot_min_width));				
          }
  }
  
  if ($segment_counter >2) { 
      if($sorted_segment_index[0] >= 100) {
              $snapshot_segment2_left_src = "spacer.gif";
              $snapshot_segment2_left_width = 20;
              
              $snapshot_segment2_right_src = "green5.png";
              $snapshot_segment2_right_width = ($sorted_segment_index[2] - 100) * 2;
              $snapshot_segment2_right_width = round(max(min(($snapshot_segment2_right_width),$snapshot_max_width),$snapshot_min_width));				
          } else {
              $snapshot_segment2_right_src = "spacer.gif";
              $snapshot_segment2_right_width = 20;
              
              $snapshot_segment2_left_src = "line_red.png";
              $snapshot_segment2_left_width = (100 - $sorted_segment_index[2]) * 2;
              $snapshot_segment2_left_width = round(max(min(($snapshot_segment2_left_width),$snapshot_max_width),$snapshot_min_width));				
          }
  }
  
  if ($segment_counter >3) { 
      if($sorted_segment_index[0] >= 100) {
              $snapshot_segment3_left_src = "spacer.gif";
              $snapshot_segment3_left_width = 20;
              
              $snapshot_segment3_right_src = "green5.png";
              $snapshot_segment3_right_width = ($sorted_segment_index[3] - 100) * 2;
              $snapshot_segment3_right_width = round(max(min(($snapshot_segment3_right_width),$snapshot_max_width),$snapshot_min_width));				
          } else {
              $snapshot_segment3_right_src = "spacer.gif";
              $snapshot_segment3_right_width = 20;
              
              $snapshot_segment3_left_src = "line_red.png";
              $snapshot_segment3_left_width = (100 - $sorted_segment_index[3]) * 2;
              $snapshot_segment3_left_width = round(max(min(($snapshot_segment3_left_width),$snapshot_max_width),$snapshot_min_width));				
          }
  }
  
  if ($segment_counter >4) { 
      if($sorted_segment_index[0] >= 100) {
              $snapshot_segment4_left_src = "spacer.gif";
              $snapshot_segment4_left_width = 20;
              
              $snapshot_segment4_right_src = "green5.png";
              $snapshot_segment4_right_width = ($sorted_segment_index[4] - 100) * 2;
              $snapshot_segment4_right_width = round(max(min(($snapshot_segment4_right_width),$snapshot_max_width),$snapshot_min_width));				
          } else {
              $snapshot_segment4_right_src = "spacer.gif";
              $snapshot_segment4_right_width = 20;
              
              $snapshot_segment4_left_src = "line_red.png";
              $snapshot_segment4_left_width = (100 - $sorted_segment_index[4]) * 2;
              $snapshot_segment4_left_width = round(max(min(($snapshot_segment4_left_width),$snapshot_max_width),$snapshot_min_width));				
          }
  }
  
  if ($segment_counter >5) { 
      if($sorted_segment_index[0] >= 100) {
              $snapshot_segment5_left_src = "spacer.gif";
              $snapshot_segment5_left_width = 20;
              
              $snapshot_segment5_right_src = "green5.png";
              $snapshot_segment5_right_width = ($sorted_segment_index[5] - 100) * 2;
              $snapshot_segment5_right_width = round(max(min(($snapshot_segment5_right_width),$snapshot_max_width),$snapshot_min_width));				
          } else {
              $snapshot_segment5_right_src = "spacer.gif";
              $snapshot_segment5_right_width = 20;
              
              $snapshot_segment5_left_src = "line_red.png";
              $snapshot_segment5_left_width = (100 - $sorted_segment_index[5]) * 2;
              $snapshot_segment5_left_width = round(max(min(($snapshot_segment5_left_width),$snapshot_max_width),$snapshot_min_width));				
          }
  }
  
  if ($segment_counter >6) { 
      if($sorted_segment_index[0] >= 100) {
              $snapshot_segment6_left_src = "spacer.gif";
              $snapshot_segment6_left_width = 20;
              
              $snapshot_segment6_right_src = "green5.png";
              $snapshot_segment6_right_width = ($sorted_segment_index[6] - 100) * 2;
              $snapshot_segment6_right_width = round(max(min(($snapshot_segment6_right_width),$snapshot_max_width),$snapshot_min_width));				
          } else {
              $snapshot_segment6_right_src = "spacer.gif";
              $snapshot_segment6_right_width = 20;
              
              $snapshot_segment6_left_src = "line_red.png";
              $snapshot_segment6_left_width = (100 - $sorted_segment_index[6]) * 2;
              $snapshot_segment6_left_width = round(max(min(($snapshot_segment6_left_width),$snapshot_max_width),$snapshot_min_width));				
          }
  }
  
  ?>
<!-- Resources -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="js/light.js"></script>
<script src="//cdn.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link  type="text/css" href="//cdn.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet">
<script type="text/javascript" src="http://www.amcharts.com/lib/3/exporting/amexport_combined.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- DEMOGRAPHICS chart-->
<script>     
  var chartData = generateChartData();
  var chart = AmCharts.makeChart("chartdiv", {
  
    "type": "serial",
    "theme": "light",
    "rotate": true,
    "dataProvider":chartData,
  
    
    "startDuration": 1,
           "graphs": [{
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "male",
             "title": "Index > 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "gemale",
             "title": "Index = 100",
             "fill": "yellow",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "female",
             "title": "Index < 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           }],
           "categoryField": "segment",
           "categoryAxis": {
             "gridPosition": "start",
             "gridAlpha": 0.2,
             "axisAlpha": 100,
             "baseValue":100 
           },
           "valueAxes": [{
             "gridAlpha": 0,
             "ignoreAxisWidth": true,
             "labelFunction": '',
             "baseValue":100 ,
             "labelsEnabled" : false,
             "GridCount":1000,
             "baseline":100,
             "guides": [{
               "value": 100,
               "lineAlpha": 0.2
             }]
           }],

        //   "legend": { 
   // "generateFromData": true //custom property for the plugin
 // },
           "balloon": {
             "fixedPosition": true
           },
           "chartCursor": {
             "valueBalloonsEnabled": true,
             "cursorAlpha": 0.05,
             "fullWidth": true
           },
           "allLabels": [{
             "text": "",
             "x": "22%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }, 
           {
             "text": "",
             "x": "57%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           },
           {
             "text": "",
             "x": "79%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }]
          
         
         });
  function generateChartData() {
  
  var sA = "<?php  if ($segment_counter >0) {
    if($sorted_segment_index[0]<100) {
            echo round($sorted_segment_index[0]);
            }
            else{
            echo round($sorted_segment_index[0]);
    }
    }
            ?>";
   
  
  var sB = "<?php  if ($segment_counter >1) {
    if($sorted_segment_index[0]<100) {
            echo round($sorted_segment_index[1]);
            }
            else{
            echo round($sorted_segment_index[1]);
    }
    }
            ?>";
  
  var sC = "<?php  if ($segment_counter >2) {
    if($sorted_segment_index[0]<100) {
            echo round($sorted_segment_index[2]);
            }
            else{
            echo round($sorted_segment_index[2]);
    }
    }
            ?>";
  
  var sD = "<?php  if ($segment_counter >3) {
    if($sorted_segment_index[0]<100) {
            echo round($sorted_segment_index[3]);
            }
            else{
            echo round($sorted_segment_index[3]);
    }
    }
            ?>";
  var sE = "<?php  if ($segment_counter >4) {
    if($sorted_segment_index[0]<100) {
            echo round($sorted_segment_index[4]);
            }
            else{
            echo round($sorted_segment_index[4]);
    }
    }
            ?>";
  var sF = "<?php  if ($segment_counter >5) {
    if($sorted_segment_index[0]<100) {
            echo round($sorted_segment_index[5]);
            }
            else{
            echo round($sorted_segment_index[5]);
    }
    }
            ?>";
   
  var sG = "<?php  if ($segment_counter >6) {
    if($sorted_segment_index[0]<100) {
            echo round($sorted_segment_index[6]);
            }
            else{
            echo round($sorted_segment_index[6]);
    }
    }
            ?>";
   

    var chartData = [];
  var dataval0 = "<?php echo $sorted_segment_high[0];?>";
  var dataval1 = "<?php echo $sorted_segment_high[1];?>";
  var dataval2 = "<?php echo $sorted_segment_high[2];?>";
  var dataval3 = "<?php echo $sorted_segment_high[3];?>";
  var dataval4 = "<?php echo $sorted_segment_high[4];?>";
  var dataval5 = "<?php echo $sorted_segment_high[5];?>";
  var dataval6 = "<?php echo $sorted_segment_high[6];?>";


  if(sA!=''){
  if(sA<100){
      chartData.push({
        "segment": dataval0,
      "female": sA
      });
    }
  else if(sA==100){
  
   chartData.push({
        "segment": dataval0,
      "gemale": sA
      });
      
    }
 
    else{
      chartData.push({
        "segment": dataval0,
      "male": sA
      });
    }
  }
  if(sB!=''){
  
    if(sB<100){
     
      chartData.push({
        "segment": dataval1,
        "female": sB
      });
    }
    else if(sB==100){
  
  chartData.push({
        "segment": dataval1,
        "gemale": sB
      });
    } 
    else{
      chartData.push({
        "segment": dataval1,
      "male": sB
      });
    }
  }
  
  if(sC!=''){
  if(sC<100){
     
  chartData.push({
  "segment": dataval2,
  "female": sC
  });
  }
  else if(sC==100){
  
  chartData.push({
  "segment": dataval2,
  "gemale": sC
  });
  } 
  else{
  chartData.push({
  "segment": dataval2,
  "male": sC
  });
  }
  }
  
  if(sD!=''){
  if(sD<100){
     
  chartData.push({
  "segment": dataval3,
  "female": sD
  });
  }
  else if(sD==100){
  
  chartData.push({
  "segment": dataval3,
  "gemale": sD
  });
  } 
  else{
  chartData.push({
  "segment": dataval3,
  "male": sD
  });
  }
  }
  
  if(sE!=''){
  if(sE<100){
     
  chartData.push({
  "segment": dataval4,
  "female": sE
  });
  }
  else if(sE==100){
  
  chartData.push({
  "segment": dataval4,
  "gemale": sE
  });
  } 
  else{
  chartData.push({
  "segment": dataval4,
  "male": sE
  });
  }
  }
  
  if(sF!=''){
  if(sF<100){
     
  chartData.push({
  "segment": dataval5,
  "female": sF
  });
  }
  else if(sF==100){
  
  chartData.push({
  "segment": dataval5,
  "gemale": sF
  });
  } 
  else{
  chartData.push({
  "segment": dataval5,
  "male": sF
  });
  }
  }
  
  if(sG!=''){
  if(sG<100){
     
  chartData.push({
  "segment": dataval6,
  "female": sG
  });
  }
  else if(sG==100){
  
  chartData.push({
  "segment": dataval6,
  "gemale": sG
  });
  } 
  else{
  chartData.push({
  "segment": dataval6,
  "male": sG
  });
  }
  }
   
  
    return chartData;
  }
  
  
  
</script>
<!-- SEGMENTATION chart-->
<script> 
  function generateChartData2() {
  var sA1 = "<?php 
    if($snapshot_family_index[0]<100) {
            echo round($snapshot_family_index[0]);
            }
            else{
            echo round($snapshot_family_index[0]);
    }
    
            ?>";
   
  
  var sB1 = "<?php 
    if($snapshot_age_index[0]<100) {
            echo round($snapshot_age_index[0]);
            }
            else{
            echo round($snapshot_age_index[0]);
    }
    
            ?>";
  
  	var sC1 = "<?php 
    if($IN_AHHi<100) {
            echo round($IN_AHHi);
            }
            else{
            echo round($IN_AHHi);
    }
    
    ?>";
  
  
  		var sD1 = "<?php 
    if($snapshot_ethnic_index<100) {
            echo round($snapshot_ethnic_index);
            }
            else{
            echo round($snapshot_ethnic_index);
    }
    
    ?>";
 
  
    var chartData2 = [];
  var dataval1_0 = "Primary Family Cohort";
  var dataval1_1 = "Primary Age Cohort";
  var dataval1_2 = "Average Household Income";
  var dataval1_3 =  "<?php echo $snapshot_ethnic_comment;?>";
  
  
  
  if(sA1!=''){
  if(sA1<100){
      chartData2.push({
        "segment": dataval1_0,
      "female": sA1
      });
    }
  else if(sA1==100){
  
   chartData2.push({
        "segment": dataval1_0,
      "gemale": sA1
      });
      
    }
  
  
    else{
      chartData2.push({
        "segment": dataval1_0,
      "male": sA1
      });
    }
  }
  if(sB1!=''){
  
    if(sB1<100){
     
      chartData2.push({
        "segment": dataval1_1,
        "female": sB1
      });
    }
    else if(sB1==100){
  
  chartData2.push({
        "segment": dataval1_1,
        "gemale": sB1
      });
    } 
    else{
      chartData2.push({
        "segment": dataval1_1,
      "male": sB1
      });
    }
  }
  
  if(sC1!=''){
  if(sC1<100){
     
  chartData2.push({
  "segment": dataval1_2,
  "female": sC1
  });
  }
  else if(sC1==100){
  
  chartData2.push({
  "segment": dataval1_2,
  "gemale": sC1
  });
  } 
  else{
  chartData2.push({
  "segment": dataval1_2,
  "male": sC1
  });
  }
  }
  
  if(sD1!=''){
  if(sD1<100){
     
  chartData2.push({
  "segment": dataval1_3,
  "female": sD1
  });
  }
  else if(sD1==100){
  
  chartData2.push({
  "segment": dataval1_3,
  "gemale": sD1
  });
  } 
  else{
  chartData2.push({
  "segment": dataval1_3,
  "male": sD1
  });
  }
  }
    
    return chartData2;
  }
  
  
  
  
  var chartData2 = generateChartData2();
  var chart2 = AmCharts.makeChart("chartdiv2", {
  
    "type": "serial",
    "theme": "light",
    "rotate": true,
    "dataProvider":chartData2,

    
    "startDuration": 1,
           "graphs": [{
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "male",
             "title": "Index > 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "gemale",
             "title": "Index = 100",
             "fill": "yellow",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "female",
             "title": "Index < 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           }],
           "categoryField": "segment",
           "categoryAxis": {
             "gridPosition": "start",
             "gridAlpha": 0.2,
             "axisAlpha": 100,
             "baseValue":100 
           },
           "valueAxes": [{
             "gridAlpha": 0,
             "ignoreAxisWidth": true,
             "labelFunction": '',
             "baseValue":100 ,
             "labelsEnabled" : false,
             "GridCount":1000,
             "baseline":100,
             "guides": [{
               "value": 100,
               "lineAlpha": 0.2
             }]
           }],

          // "legend": { 
   // "generateFromData": true //custom property for the plugin
 // },
           "balloon": {
             "fixedPosition": true
           },
           "chartCursor": {
             "valueBalloonsEnabled": true,
             "cursorAlpha": 0.05,
             "fullWidth": true
           },
           "allLabels": [{
             "text": "",
             "x": "22%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }, 
           {
             "text": "",
             "x": "57%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           },
           {
             "text": "",
             "x": "79%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }]
          
         
         });
  
  
</script>
<!-- SPENDING chart-->
<script> 
  function generateChartData3() {
  var sA2 = "<?php 
    if($snapshot_tot_spend_index<100) {
            echo round($snapshot_tot_spend_index);
            }
            else{
            echo round($snapshot_tot_spend_index);
    }
    
            ?>";
   
  
  var sB2 = "<?php 
    if($snapshot_com_spend_index<100) {
            echo round($snapshot_com_spend_index);
            }
            else{
            echo round($snapshot_com_spend_index);
    }
    
            ?>";
  
  	var sC2 = "<?php 
    if($snapshot_pur_spend_index<100) {
            echo round($snapshot_pur_spend_index);
            }
            else{
            echo round($snapshot_pur_spend_index);
    }
    
    ?>";
  
  
  	var sD2 = "<?php 
    if($snapshot_disc_spend_index<100) {
            echo round($snapshot_disc_spend_index);
            }
            else{
            echo round($snapshot_disc_spend_index);
    }
    
    ?>";
  
  		var sE2 = "<?php 
    if($snapshot_ethnic_index<100) {
            echo round($snapshot_ethnic_index);
            }
            else{
            echo round($snapshot_ethnic_index);
    }
    
    ?>";
  
  
   
  
  
    var chartData3 = [];
  var dataval2_0 = "Average household spend";
  var dataval2_1 = "Essential spending";
  var dataval2_2 = "Controllable spending";
  var dataval2_3 = "Discretionary spending";
  
  if(sA2!=0){
  if(sA2<100){
      chartData3.push({
        "segment": dataval2_0,
      "female": sA2
      });
    }
  else if(sA2==100){
  
   chartData3.push({
        "segment": dataval2_0,
      "gemale": sA2
      });
      
    }  
  
    else{
      chartData3.push({
        "segment": dataval2_0,
      "male": sA2
      });
    }
  }
  if(sB2!=0){
  
    if(sB2<100){
     
      chartData3.push({
        "segment": dataval2_1,
        "female": sB2
      });
    }
    else if(sB2==100){
  
  chartData3.push({
        "segment": dataval2_1,
        "gemale": sB2
      });
    } 
    else{
      chartData3.push({
        "segment": dataval2_1,
      "male": sB2
      });
    }
  }
  
  if(sC2!=0){
  if(sC2<100){
     
  chartData3.push({
  "segment": dataval2_2,
  "female": sC2
  });
  }
  else if(sC2==100){
  
  chartData3.push({
  "segment": dataval2_2,
  "gemale": sC2
  });
  } 
  else{
  chartData3.push({
  "segment": dataval2_2,
  "male": sC2
  });
  }
  }
  
  if(sD2!=0){
  if(sD2<100){
     
  chartData3.push({
  "segment": dataval2_3,
  "female": sD2
  });
  }
  else if(sD2==100){
  
  chartData3.push({
  "segment": dataval2_3,
  "gemale": sD2
  });
  } 
  else{
  chartData3.push({
  "segment": dataval2_3,
  "male": sD2
  });
  }
  }
  
  
  
    return chartData3;
  }
  
  
  
  
  var chartData3= generateChartData3();
  var chart3 = AmCharts.makeChart("chartdiv3", {
  
    "type": "serial",
    "theme": "light",
    "rotate": true,
    "dataProvider":chartData3,
  
    
    "startDuration": 1,
           "graphs": [{
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "male",
             "title": "Index > 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "gemale",
             "title": "Index = 100",
             "fill": "yellow",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "female",
             "title": "Index < 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           }],
           "categoryField": "segment",
           "categoryAxis": {
             "gridPosition": "start",
             "gridAlpha": 0.2,
             "axisAlpha": 100,
             "baseValue":100 
           },
           "valueAxes": [{
             "gridAlpha": 0,
             "ignoreAxisWidth": true,
             "labelFunction": '',
             "baseValue":100 ,
             "labelsEnabled" : false,
             "GridCount":1000,
             "baseline":100,
             "guides": [{
               "value": 100,
               "lineAlpha": 0.2
             }]
           }],

           //"legend": { 
   // "generateFromData": true //custom property for the plugin
  //},
           "balloon": {
             "fixedPosition": true
           },
           "chartCursor": {
             "valueBalloonsEnabled": true,
             "cursorAlpha": 0.05,
             "fullWidth": true
           },
           "allLabels": [{
             "text": "",
             "x": "22%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }, 
           {
             "text": "",
             "x": "57%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           },
           {
             "text": "",
             "x": "79%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }]
          
         
         });
  
  
</script>
<!-- MEDIA USAGE chart-->
<script> 
  function generateChartData4() {
  var sA3 = "<?php 
    if($index_flyer_heavy<100) {
            echo round($index_flyer_heavy);
            }
            else{
            echo round($index_flyer_heavy);
    }
    
            ?>";
   
  
  var sB3 = "<?php 
    if($binternetindex<100) {
            echo round($binternetindex);
            }
            else{
            echo round($binternetindex);
    }
    
            ?>";
  
  	var sC3 = "<?php 
    if($bradioindex<100) {
            echo round($bradioindex);
            }
            else{
            echo round($bradioindex);
    }
    
    ?>";
  
  
  	var sD3 = "<?php 
    if($bnpindex<100) {
            echo round($bnpindex);
            }
            else{
            echo round($bnpindex);
    }
    
    ?>";
  
  
  
  
    var chartData4 = [];
  var dataval3_0 = "Flyers";
  var dataval3_1 = "Online Usage";
  var dataval3_2 = "Radio";
  var dataval3_3 = "Newspaper";
  
  if(sA3!=0){
  if(sA3<100){
      chartData4.push({
        "segment": dataval3_0,
      "female": sA3
      });
    }
  else if(sA3==100){
  
   chartData4.push({
        "segment": dataval3_0,
      "gemale": sA3
      });
      
    }  
  
    else{
      chartData4.push({
        "segment": dataval3_0,
      "male": sA3
      });
    }
  }
  if(sB3!=0){
  
    if(sB3<100){
     
      chartData4.push({
        "segment": dataval3_1,
        "female": sB3
      });
    }
    else if(sB3==100){
  
  chartData4.push({
        "segment": dataval3_1,
        "gemale": sB3
      });
    } 
    else{
      chartData4.push({
        "segment": dataval3_1,
      "male": sB3
      });
    }
  }
  
  if(sC3!=0){
  if(sC3<100){
     
  chartData4.push({
  "segment": dataval3_2,
  "female": sC3
  });
  }
  else if(sC3==100){
  
  chartData4.push({
  "segment": dataval3_2,
  "gemale": sC3
  });
  } 
  else{
  chartData4.push({
  "segment": dataval3_2,
  "male": sC3
  });
  }
  }
  
  if(sD3!=0){
  if(sD3<100){
     
  chartData4.push({
  "segment": dataval3_3,
  "female": sD3
  });
  }
  else if(sD3==100){
  
  chartData4.push({
  "segment": dataval3_3,
  "gemale": sD3
  });
  } 
  else{
  chartData4.push({
  "segment": dataval3_3,
  "male": sD3
  });
  }
  }
  
  
  
    return chartData4;
  }
  
  
  
  
  var chartData4= generateChartData4();
  var chart4 = AmCharts.makeChart("chartdiv4", {
  
    "type": "serial",
    "theme": "light",
    "rotate": true,
    "dataProvider":chartData4,
  
    
    "startDuration": 1,
           "graphs": [{
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "male",
             "title": "Index > 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "gemale",
             "title": "Index = 100",
             "fill": "yellow",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "female",
             "title": "Index < 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           }],
           "categoryField": "segment",
           "categoryAxis": {
             "gridPosition": "start",
             "gridAlpha": 0.2,
             "axisAlpha": 100,
             "baseValue":100 
           },
           "valueAxes": [{
             "gridAlpha": 0,
             "ignoreAxisWidth": true,
             "labelFunction": '',
             "baseValue":100 ,
             "labelsEnabled" : false,
             "GridCount":1000,
             "baseline":100,
             "guides": [{
               "value": 100,
               "lineAlpha": 0.2
             }]
           }],

         //  "legend": { 
   // "generateFromData": true //custom property for the plugin
  //},
           "balloon": {
             "fixedPosition": true
           },
           "chartCursor": {
             "valueBalloonsEnabled": true,
             "cursorAlpha": 0.05,
             "fullWidth": true
           },
           "allLabels": [{
             "text": "",
             "x": "22%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }, 
           {
             "text": "",
             "x": "48%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           },
           {
             "text": "",
             "x": "79%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }]
          
         
         });
  
  
</script>
<!-- LIFESTYLE chart-->
<script> 
  function generateChartData5() {
  var sA4 = "<?php 
    if($sorted_leisure['index'][0]<=100) {
            echo round($sorted_leisure['index'][0]);
            }
            else{
            echo round($sorted_leisure['index'][0]);
    }
    
            ?>";
   
  
  var sB4 = "<?php 
    if($sorted_leisure['index'][1]<=100) {
            echo round($sorted_leisure['index'][1]);
            }
            else{
            echo round($sorted_leisure['index'][1]);
    }
    
            ?>";
  
  	var sC4 = "<?php 
    if($sorted_leisure['index'][2]<=100) {
            echo round($sorted_leisure['index'][2]);
            }
            else{
            echo round($sorted_leisure['index'][2]);
    }
    
    ?>";
  
    var chartData5= [];
  var dataval4_0 = "<?php echo $sorted_leisure['name'][0];?>";
  var dataval4_1 = "<?php echo $sorted_leisure['name'][1];?>";
  var dataval4_2 = "<?php echo $sorted_leisure['name'][2];?>";
  
  if(sA4!=0){
  if(sA4<100){
      chartData5.push({
        "segment": dataval4_0,
      "female": sA4
      });
    }
  else if(sA4==100){
  
   chartData5.push({
        "segment": dataval4_0,
      "gemale": sA4
      });
      
    }  
  
    else{
      chartData5.push({
        "segment": dataval4_0,
      "male": sA4
      });
    }
  }
  if(sB4!=0){
  
    if(sB4<100){
     
      chartData5.push({
        "segment": dataval4_1,
        "female": sB4
      });
    }
    else if(sB4==100){
  
  chartData5.push({
        "segment": dataval4_1,
        "gemale": sB4
      });
    } 
    else{
      chartData5.push({
        "segment": dataval4_1,
      "male": sB4
      });
    }
  }
  
  if(sC4!=0){
  if(sC4<100){
     
  chartData5.push({
  "segment": dataval4_2,
  "female": sC4
  });
  }
  else if(sC4==100){
  
  chartData5.push({
  "segment": dataval4_2,
  "gemale": sC4
  });
  } 
  else{
  chartData5.push({
  "segment": dataval4_2,
  "male": sC4
  });
  }
  }
  
  
  
    return chartData5;
  }
  
  
  
  
  var chartData5= generateChartData5();
  var chart5 = AmCharts.makeChart("chartdiv5", {
  
    "type": "serial",
    "theme": "light",
    "rotate": true,
    "dataProvider":chartData5,
  
    
    "startDuration": 1,
           "graphs": [{
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "male",
             "title": "Index > 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "gemale",
             "title": "Index = 100",
             "fill": "yellow",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           },
           
           {
             "fillAlphas": 0.8,
             "lineAlpha": 0.2,
             "type": "column",
             "valueField": "female",
             "title": "Index < 100",
             "labelText": "[[value]]",
             "clustered": false,
             "labelFunction": function(item) {
               return Math.abs(item.values.value);
             },
             "balloonFunction": function(item) {
               return item.category + ": Index " + Math.abs(item.values.value);
             }
           }],
           "categoryField": "segment",
           "categoryAxis": {
             "gridPosition": "start",
             "gridAlpha": 0.2,
             "axisAlpha": 100,
             "baseValue":100 
           },
           "valueAxes": [{
             "gridAlpha": 0,
             "ignoreAxisWidth": true,
             "labelFunction": '',
             "baseValue":100 ,
             "labelsEnabled" : false,
             "GridCount":1000,
             "baseline":100,
             "guides": [{
               "value": 100,
               "lineAlpha": 0.2
             }]
           }],

          // "legend": { 
    //"generateFromData": true //custom property for the plugin
  //},
           "balloon": {
             "fixedPosition": true
           },
           "chartCursor": {
             "valueBalloonsEnabled": true,
             "cursorAlpha": 0.05,
             "fullWidth": true
           },
           "allLabels": [{
             "text": "",
             "x": "22%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }, 
           {
             "text": "",
             "x": "57%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           },
           {
             "text": "",
             "x": "79%",
             "y": "1%",
             "bold": true,
             "align": "middle"
           }]
          
         
         });
  
  
</script>
<!-- Demographics -->
<div class="print_pagesfirst" width="100%">
  <table class="margintop" width="99%" cellspacing="" cellpadding="4">
    <tr>
      <td width="100" class="text_left"  height="40"  valign=""><img src="image3/KQUEST.png" alt="KQUEST" width="92%" height="42" /></td>
      <td width="400" class="text_left"  valign="top">
        <span class="psub2"><?php echo $change_header; ?>
        <p class="stitle" style="float:right">MARKET AREA HIGHLIGHTS</p>
        <span class="black16"><br />
        <?php echo $change_title2; ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr class="b"/>
      </td>
    </tr>
    <tr>
      <td colspan="4" valign="top" class="text_left" >
        <input name="store_uid2" type="hidden" id="store_uid2" value="<?php echo $store_uid; ?>"  />
        <input name="report_uid" type="hidden" id="report_uid" value=""  />
      </td>
    </tr>
    <tr>
      <td colspan="3" class="" >
        <h2><b>DEMOGRAPHICS</b></h2>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="title">The Dominant Demographic characteristics of your STA or Target Group are:</td>
    </tr>
  </table>
  <br/>
  <div width="70%" class="border" style="float:left; margin-left:3%;text-align: right;">
    <table>
      <tr>
        <td width="" valign="top" class=" "><strong style="font-size:18px">Primary Family Cohort</strong></td>
      </tr>
      <tr>
        <td class='margin' width="" valign="top" style="padding-left: 0px;"class="text_left"><strong><?php echo $family_top_comment[0];?></strong><br />
          Penetration: <?php echo $snapshot_family_percent[0]; ?>%   &nbsp&nbspIndex: <?php echo number_format($snapshot_family_index[0]); ?>
        </td>
      </tr>
      <tr class="">
        <td class='margin2'><strong style="font-size:18px">Primary Age Cohort</strong></td>
      </tr>
      <tr>
        <td class='margin'><strong><?php echo $age_top_comment[0];?></strong><br />
          Penetration: <?php echo $snapshot_age_percent[0]; ?>%   &nbsp&nbspIndex: <?php echo number_format($snapshot_age_index[0]); ?>
        </td>
      </tr>
      <tr>
        <td  class='margin2'><strong style="font-size:18px">Average Household Income</strong><?php //echo $snapshot_family_index[0]; ?></td>
      </tr>
      <tr>
        <td class='margin'><strong>$<?php echo number_format($IN_AHHp,0); ?></strong><br/>
          <?php echo $snapshot_income_comment;?>
        </td>
      </tr>
      <tr>
        <td  class='margin2'><strong style="font-size:18px">Ethnicity</strong></td>
      </tr>
      <tr>
        <td class='margin'><strong><?php echo $snapshot_ethnic_comment;?> </strong><br />
          Penetration: <?php echo $snapshot_ethnic_percent;?>%  &nbsp&nbsp Index: <?php echo number_format($snapshot_ethnic_index);?>
        </td>
      </tr>
    </table>
  </div>
  <div style="width:51%;border:0.1px solid;float:right;margin-left:1%;margin-right:3%" class="border">
    <div id="chartdiv2"></div>
  </div>
</div>
<div class="no-print">
  <p>&nbsp;</p>
</div>
<!-- Segmentation -->
<div class="print_pages " width="100%">
  <table class="margintop" width="99%" cellspacing="" cellpadding="4">
    <tr>
      <td width="100" class="text_left"  height="40"  valign=""><img src="image3/KQUEST.png" alt="KQUEST" width="92%" height="42" /></td>
      <td width="400" class="text_left"  valign="top">
        <span class="psub2"><?php echo $change_header; ?>
        <p class="stitle" style="float:right">MARKET AREA HIGHLIGHTS</p>
        <span class="black16"><br />
        <?php echo $change_title2; ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr class="b"/>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="" >
        <h2><b>SEGMENTATION</b></h2>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="title">The Dominant Segmentation characteristics of your STA or Target Group are:</td>
    </tr>
  </table>
  <br/>
  <div width="70%" class="border" style="float:left; margin-left:3%;text-align: right;">
    <table>
      <?php 
        if ($segment_counter >0) {
        
        echo "<tr><td class='margin'><strong style='font-size:18px'>" . $sorted_segment_high[0] . "</strong><br />Penetration: " . number_format($sorted_segment_percent[0]) . "% &nbsp&nbsp Index: " . number_format($sorted_segment_index[0]) . "</td></tr>";
        
        } 
        
        if ($segment_counter >1) {
        
        echo "<tr><td class='margin'><strong style='font-size:18px'>" . $sorted_segment_high[1] . "</strong><br />Penetration: " . number_format($sorted_segment_percent[1]) . "% &nbsp&nbsp Index: " . number_format($sorted_segment_index[1]) . "</td></tr>";
        
        } 
        
        if ($segment_counter >2) {
        
        echo "<tr><td class='margin'><strong style='font-size:18px'>" . $sorted_segment_high[2] . "</strong><br />Penetration: " . number_format($sorted_segment_percent[2]) . "% &nbsp&nbsp  Index: " . number_format($sorted_segment_index[2]) . "</td></tr>";
        
        } 
        
        if ($segment_counter >3) {
        
        echo "<tr><td class='margin'><strong style='font-size:18px'>" . $sorted_segment_high[3] . "</strong><br />Penetration: " . number_format($sorted_segment_percent[3]) . "% &nbsp&nbsp Index: " . number_format($sorted_segment_index[3]) . "</td></tr>";
        
        } 
        
        if ($segment_counter >4) {
        
        echo "<tr><td class='margin'><strong style='font-size:18px'>" . $sorted_segment_high[4] . "</strong><br />Penetration: " . number_format($sorted_segment_percent[4]) . "% &nbsp&nbsp Index: " . number_format($sorted_segment_index[4]) . "</td></tr>";
        
        } 
        
        if ($segment_counter >5) {
        
        echo "<tr><td class='margin'><strong style='font-size:18px'>" . $sorted_segment_high[5] . "</strong><br />Penetration: " . number_format($sorted_segment_percent[5]) . "% &nbsp&nbsp Index " . number_format($sorted_segment_index[5]) . "</td></tr>";
        
        } 
        
        if ($segment_counter >6) {
        
        echo "<tr><td class='margin'><strong style='font-size:18px'>" . $sorted_segment_high[6] . "</strong><br />Penetration: " . number_format($sorted_segment_percent[6]) . "% &nbsp&nbsp Index:" . number_format($sorted_segment_index[6]) . "</td></tr>";
        
        } 
        ?>
    </table>
  </div>
  <div style="width:49%;border:0.1px solid;float:right;margin-left:1%;margin-right:5%;" class="border">
    <div id="chartdiv"></div>
  </div>
</div>
<div class="no-print">
  <p>&nbsp;</p>
</div>
<!-- Spending -->
<div class="print_pages " width="100%">
  <table class="margintop" width="99%" cellspacing="" cellpadding="4">
    <tr>
      <td width="100" class="text_left"  height="40"  valign=""><img src="image3/KQUEST.png" alt="KQUEST" width="92%" height="42" /></td>
      <td width="400" class="text_left"  valign="top">
        <span class="psub2"><?php echo $change_header; ?>
        <p class="stitle" style="float:right">MARKET AREA HIGHLIGHTS</p>
        <span class="black16"><br />
        <?php echo $change_title2; ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr class="b"/>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="" >
        <h2><b>SPENDING</b></h2>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="title">The Key Spending attributes of your STA or target Group are:</td>
    </tr>
  </table>
  <br/>
  <div width="70%" class="border" style="float:left; margin-left:3%;text-align: right;">
    <table>
      <tr>
        <td  class="margin"><strong style='font-size:18px'>Average household spend</strong><br />
          $<?php echo number_format($hhb_consume); ?> per household  
          &nbsp&nbspIndex:<?php echo number_format(($hhb_consume)/$hha_consume *100); ?>
        </td>
      </tr>
      <tr>
        <td  class="margin"><strong style='font-size:18px'>Essential spending</strong><br />
          $<?php echo number_format($hhbcommit); ?> per household
          &nbsp&nbspIndex: <?php echo number_format(($hhbcommit)/$hhacommit *100); ?>
        </td>
      </tr>
      <tr>
        <td class="margin"><strong style='font-size:18px'>Controllable spending</strong><br />
          $<?php echo number_format($hhb_purchases); ?> per household 
          &nbsp&nbspIndex: <?php echo number_format(($hhb_purchases)/$hhcan_purchases *100); ?>
        </td>
      </tr>
      <tr>
        <td  class="margin"><strong style='font-size:18px'>Discretionary spending</strong><br />
          $<?php echo number_format($hhmarket_discretionary); ?> per household
          &nbsp&nbspIndex: <?php echo number_format(($hhmarket_discretionary)/$hhcan_discretionary *100); ?>
        </td>
      </tr>
    </table>
  </div>
  <div style="width:51%;border:0.1px solid;float:right;margin-left:1%;margin-right:3%" class="border">
    <div id="chartdiv3"></div>
  </div>
</div>
<div class="no-print">
  <p>&nbsp;</p>
</div>
<!-- Media Usage -->
<div class="print_pages" width="100%">
  <table class="margintop" width="99%" cellspacing="" cellpadding="4">
    <tr>
      <td width="100" class="text_left"  height="40"  valign=""><img src="image3/KQUEST.png" alt="KQUEST" width="92%" height="42" /></td>
      <td width="400" class="text_left"  valign="top">
        <span class="psub2"><?php echo $change_header; ?>
        <p class="stitle" style="float:right">MARKET AREA HIGHLIGHTS</p>
        <span class="black16"><br />
        <?php echo $change_title2; ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr class="b"/>
      </td>
    </tr>
    <tr>
      <td  colspan="3" class="" >
        <h2><b>MEDIA USAGE</b></h2>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="title">The Dominant Media usage characteristics of your STA or Target Group are:</td>
    </tr>
  </table>
  <br/>
  <div width="70%" class="border" style="float:left; margin-left:3%;text-align: right;">
    <table>
      <tr>
        <td  class="margin"><strong style='font-size:18px'>Flyers</strong><br />
          Penetration: <?php echo number_format($pb_flyer_heavy); ?>% &nbsp&nbsp Index: <?php echo number_format($index_flyer_heavy); ?>
        </td>
      </tr>
      <tr>
        <td  class="margin"><strong style='font-size:18px'>Online Usage</strong><br />
          Penetration: <?php echo number_format($pinternet_high); ?>% &nbsp&nbsp Index: <?php echo number_format($binternetindex); ?>
        </td>
      </tr>
      <tr>
        <td  class="margin"><strong style='font-size:18px'>Radio</strong><br />
          Penetration: <?php echo number_format($pradio_high); ?>%  &nbsp&nbsp Index: <?php echo number_format($bradioindex); ?>
        </td>
      </tr>
      <tr>
        <td  class="margin"><strong style='font-size:18px'>Newspaper</strong><br />
          Penetration: <?php echo number_format($pnp_high); ?>% &nbsp&nbsp Index: <?php echo number_format($bnpindex); ?>
        </td>
      </tr>
    </table>
  </div>
  <div style="width:51%;border:0.1px solid;float:right;margin-left:1%;margin-right:3%" class="border">
    <div id="chartdiv4"></div>
  </div>
</div>
<div class="no-print">
  <p>&nbsp;</p>
</div>
<!-- Life Style -->
<div class="print_pages" width="100%">
  <table class="margintop" width="99%" cellspacing="" cellpadding="4">
    <tr>
      <td width="100" class="text_left"  height="40"  valign=""><img src="image3/KQUEST.png" alt="KQUEST" width="92%" height="42" /></td>
      <td width="400" class="text_left"  valign="top">
        <span class="psub2"><?php echo $change_header; ?>
        <p class="stitle" style="float:right">MARKET AREA HIGHLIGHTS</p>
        <span class="black16"><br />
        <?php echo $change_title2; ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <hr class="b"/>
      </td>
    </tr>
    <tr>
      <td  colspan="3" class="" >
        <h2><b>LIFESTYLE</b></h2>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="title">The preveailing Lifesyle activities of your STA or Target Group are:</td>
    </tr>
  </table>
  <br/>
  <div width="70%" class="border" style="float:left; margin-left:3%;text-align: right;">
    <table>
      <tr>
        <td class="margin"><strong style='font-size:18px'><?php echo $sorted_leisure['name'][0]; ?></strong><br />
          Participation rate: <?php echo number_format($sorted_leisure['percent'][0]); ?>%  &nbsp&nbsp Index: <?php echo number_format($sorted_leisure['index'][0]); ?>
        </td>
      </tr>
      <tr>
        <td  class="margin"><strong style='font-size:18px'><?php echo $sorted_leisure['name'][1]; ?></strong><br />
          Participation rate: <?php echo number_format($sorted_leisure['percent'][1]); ?>%  &nbsp&nbsp Index :<?php echo number_format($sorted_leisure['index'][1]); ?>
        </td>
      </tr>
      <tr>
        <td class="margin"><strong style='font-size:18px'><?php echo $sorted_leisure['name'][2]; ?></strong><br />
          Participation rate: <?php echo number_format($sorted_leisure['percent'][2]); ?>%  &nbsp&nbsp Index: <?php echo number_format($sorted_leisure['index'][2]); ?>
        </td>
      </tr>
    </table>
  </div>
  <div style="width:51%;border:0.1px solid;float:right;margin-left:1%;margin-right:3%" class="border">
    <div id="chartdiv5"></div>
  </div>
</div>
<div class="no-print">
  <p>&nbsp;</p>
</div>

