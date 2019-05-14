<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<style>
.div_scroll {
    width: 440px;
    height: 250px;
    overflow: scroll;
}
.div_noscroll {
    width: 440px;
    height: 250px;
    overflow: hidden;
}
.div_scroll1 {    width: 440px;
    height: 250px;
    overflow: scroll;
}
.sbutton,.sreseller,a,.sorange20{

  color:#900c3f !important;
}
.stitle2{

color:#900c3f !important;
}
</style>
 
<?php
if (isset($_POST["store_uid"])) {	$store_uid = $_POST["store_uid"];} else $store_uid = " ";

include "db_connect.php";

$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];  
				}				
		}
		
$query = "SELECT * FROM amfd_company WHERE client_id = $client_id  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $new_client_modules = $row['client_modules'];	
				}				
		}		
		
	$var_list_checked['demo'] = "";
	$var_list_checked['shop'] = "";
	$var_list_checked['spend'] = "";
	$var_list_checked['segment'] = "";
	$var_list_checked['auto'] = "";
	$var_list_checked['himprove'] = "";
	$var_list_checked['ethnic'] = "";

$var_list_array = explode("|", $new_client_modules);
	
if($var_list_array[0] == "") {
	$var_list_checked['demo'] = "";
	$var_list_checked['shop'] = "";
	$var_list_checked['spend'] = "";
	$var_list_checked['segment'] = "";
	$var_list_checked['auto'] = "";
	$var_list_checked['himprove'] = "";
	$var_list_checked['ethnic'] = "";
} else {
	$var_list_checked['demo'] = "display:none;"; 
	$var_list_checked['shop'] = "display:none;"; 
	$var_list_checked['spend'] = "display:none;"; 
	$var_list_checked['segment'] = "display:none;"; 
	$var_list_checked['auto'] = "display:none;"; 
	$var_list_checked['himprove'] = "display:none;"; 
	$var_list_checked['ethnic'] = "display:none;"; 

	if (in_array("demo", $var_list_array)) $var_list_checked['demo'] = ""; 
	if (in_array("shop", $var_list_array)) $var_list_checked['shop'] = "";
	if (in_array("spend", $var_list_array)) $var_list_checked['spend'] = "";
	if (in_array("segment", $var_list_array)) $var_list_checked['segment'] = "";
	if (in_array("auto", $var_list_array)) $var_list_checked['auto'] = "";
	if (in_array("himprove", $var_list_array)) $var_list_checked['himprove'] = "";
	if (in_array("ethnic", $var_list_array)) $var_list_checked['ethnic'] = "";			
}
?>
<style type="text/css">
	.demo_show{
	<?php echo $var_list_checked['demo']; ?>
	}
	.shop_show{
	<?php echo $var_list_checked['shop']; ?>
	}
	.spend_show{
	<?php echo $var_list_checked['spend']; ?>
	}
	.segment_show{
	<?php echo $var_list_checked['segment']; ?>
	}
	.auto_show{
	<?php echo $var_list_checked['auto']; ?>
	}
	.himprove_show{
	<?php echo $var_list_checked['himprove']; ?>
	}
	.ethnic_show{
	<?php echo $var_list_checked['ethnic']; ?>
	}

</style>

<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td align="left" valign="top" bgcolor="#FFFFFF"><span class="sblue">Select up to 10 traits that best describes your target consumer</span><span class="sgrey14"> <br />
      (each trait is scored with equal weighting at the 6 digit postal code level of precision)<br />
      <br />
    <br /><div id="error_note" class="sorange20"></div>
    </span></td>
    <td align="center" valign="top" bgcolor="#FFFFFF"><span class="sgrey14">
      <input name="store_uid" type="hidden" id="store_uid" value="<?php echo $store_uid; ?>"  />
      <input name="get_report_id" type="hidden" id="get_report_id" value=" "  /><div id="loading_image"/>
  </div>
      <input name="UPsubmit3" type="button" class="stitle2" id="UPsubmit3" value="Generate Report"  onclick="VIEWREPORTsubmit();" />
    </span></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr class = "demo_show">
    <td align="center" valign="top" bgcolor="#FFFFFF"><div class="div_noscroll">
          <span class="sreseller">Demographic Traits </span><br />
            <img src="f_genx_w3560.jpg" width="420" height="210" alt="demographics" />
          
          </div></td>
    <td align="left" valign="top" bgcolor="#FFFFFF"><div class="div_scroll">
         <span class="sbutton">Age <br /><span class="sgrey14">
          <input type="checkbox" name="var1" id="var1" value="age_2029i" />Age 20-29<br />
<input type="checkbox" name="var1" id="var1" value="age_3039i" />Age 30-39 <br />
<input type="checkbox" name="var1" id="var1" value="age_4049i" />Age 40-49<br />
<input type="checkbox" name="var1" id="var1" value="age_5059i" />Age 50-59<br />
<input type="checkbox" name="var1" id="var1" value="age_6069i" />Age 60-69<br />
<input type="checkbox" name="var1" id="var1" value="age_70i" />Age 70+</span></span></p>
          <p><span class="sgrey14"><span class="sbutton">Income</span><br />
           <input type="checkbox" name="var1" id="var1" value="inc030i" />
            Modest Income (under $30,000)<br />
            <input type="checkbox" name="var1" id="var1" value="inc3070i" />
            Middle Income ($30k-$70k)<br />
            <input type="checkbox" name="var1" id="var1" value="inc70100i" />
            Upper Income ($70k-$100k)<br />
             <input type="checkbox" name="var1" id="var1" value="inc100i" />
            Most Affluent ($100,000+)<br />
              <br />
              </span><span class="sbutton">Family Structure<span class="sgrey14"><br />
              <input type="checkbox" name="var1" id="var1" value="fm_singlei" /> 
              Singles
<br />
<input type="checkbox" name="var1" id="var1" value="familyi" /> 
Families
<br />
<input type="checkbox" name="var1" id="var1" value="couplei" /> 
Couples (no children at home)
<br />
<input type="checkbox" name="var1" id="var1" value="sparenti" /> 
Single parent families
</span><br />
<br />
Children</span><span class="sgrey14"> <br />
              <input type="checkbox" name="var1" id="var1" value="age_kidsyi" />
              High presence of young children (age 0-10)<br />
              <input type="checkbox" name="var1" id="var1" value="age_kidsoldi" />
          High presence of teenagers (age 10-19)</span></p>
              <br />
          </div></td>
  </tr>
  <tr class = "demo_show">
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>

 <tr class = "ethnic_show">
    <td align="center" valign="top" bgcolor="#FFFFFF"><div class="div_noscroll">
          <span class="sreseller">Ethnic Diversity </span><br />
            <img src="image3/ethnic_diversity.png" width="440" height="330" alt="diversity" /> </div></td>
    <td align="left" valign="top" bgcolor="#FFFFFF"><div class="div_scroll">
        
          
          <p><span class="sgrey14"><span class="sbutton">Ethnicity</span><br />
           <input type="checkbox" name="var1" id="var1" value="MN_OTTtar" />
            Caucasian<br />
            <input type="checkbox" name="var1" id="var1" value="MN_VIStar" />
            Non-Caucasian (any)<br />
            <input type="checkbox" name="var1" id="var1" value="MN_CHINESEtar" />
            Chinese<br />
            <input type="checkbox" name="var1" id="var1" value="MN_SASIANtar" />
            South Asian<br />
            <input type="checkbox" name="var1" id="var1" value="MN_FILIPINtar" />
            Filipino<br />
             <input type="checkbox" name="var1" id="var1" value="MN_LAMERtar" />
            Latino <br />
            <input type="checkbox" name="var1" id="var1" value="MN_SEASIANtar" />
            South East Asian <br />
            <input type="checkbox" name="var1" id="var1" value="MN_ARABtar" />
            Arab <br />
            <input type="checkbox" name="var1" id="var1" value="MN_WASIANtar" />
            West Asian <br />
            <input type="checkbox" name="var1" id="var1" value="MN_KOREANtar" />
            Korean <br />
            <input type="checkbox" name="var1" id="var1" value="MN_JAPANEtar" />
            Japanese <br />
            <input type="checkbox" name="var1" id="var1" value="MN_NIEtar" />
            Other - not elsewhere noted <br />
            <input type="checkbox" name="var1" id="var1" value="MN_MULTtar" />
            Multiple Ethnicities <br />
              <br />
          </div></td>
  </tr>
  <tr class = "ethnic_show">
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>



 <tr class = "shop_show">
    <td align="center" valign="top" bgcolor="#FFFFFF"><div class="div_noscroll"> <span class="sreseller">Shopping Preferences</span><br />
    <img src="image3/customer.jpg" height="440px" width="440px" alt="demographics" /> </div></td>
    <td align="left" valign="top" bgcolor="#FFFFFF"><div class="div_scroll"><span class="sbutton">Heavy  Spenders. <br />
    </span><span class="sgrey14">Ranked by percent of people classified as heavy category shoppers<br />
    <?php 
 
  $first_time_bbm = 0;
  $query2 = "SELECT * FROM amfd_users where user_id= $user_id ";
		if ($result2 = mysqli_query($link, $query2)) {
				while ($row2 = mysqli_fetch_assoc($result2)) {
					$client_id = $row2['client_id'];
				}}
				
	$query2 = "SELECT * FROM amfd_varselect where client_id= $client_id and use_yn = 1 ";
		if ($result2 = mysqli_query($link, $query2)) {
				while ($row2 = mysqli_fetch_assoc($result2)) {
					$first_time_bbm = 1;
				}}
		// show all vars		
		if(	$first_time_bbm < 1) {	
			  $query = "SELECT * FROM amfd_retailers where bbm_db = 'a12_mfd_bbm' ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<input type='checkbox' name='var1' id='var1' value='" . $row['var_code'] ."' /> " .$row['var_name'] . "<br />";
						}				
					mysqli_free_result($result);
				}
		}
		else
		{
// specific user vars	
$found_a12_mfd_bbm = 0;
			$query2 = "SELECT * FROM amfd_varselect where client_id= $client_id and use_yn = 1 ";
		if ($result2 = mysqli_query($link, $query2)) {
				while ($row2 = mysqli_fetch_assoc($result2)) {
					$temp_user_var = $row2['var_code'];
					 $query = "SELECT * FROM amfd_retailers where bbm_db = 'a12_mfd_bbm' and var_code = '$temp_user_var' ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<input type='checkbox' name='var1' id='var1' value='" . $row['var_code'] ."' /> " .$row['var_name'] . "<br />";
							$found_a12_mfd_bbm = 1;
						}}
				}}
				
		if ($found_a12_mfd_bbm <1) echo "<br />Contact Market Focus Direct to access these traits<br />";	
			
		}
		
		?>
    </span><br />
   </td>
  </tr>
  <tr class = "shop_show">
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr class = "spend_show">
    <td align="center" valign="top" bgcolor="#FFFFFF"><div class="div_noscroll"> <span class="sreseller">Dollars Spend</span><br />
    <img src="image3/financial1.jpg" height="350px" width="440px" alt="demographics" /></div></td>
    <td align="left" valign="top" bgcolor="#FFFFFF"><div class="div_scroll"><span class="sbutton">Household Spending<br />
    </span>
    <span class="sgrey14">Health Care Expenses<br />
 		<input type='checkbox' name='var1' id='var1' value='D3300_3384' />Total Health Care<br />
        <input type='checkbox' name='var1' id='var1' value='D3300' />Health care supplies<br />
        <input type='checkbox' name='var1' id='var1' value='D3310_3312' />Medical and pharmacy products<br />
        <input type='checkbox' name='var1' id='var1' value='D3330_3334' />Eye care goods/services<br />
        <input type='checkbox' name='var1' id='var1' value='D3370_3384' />Health insurance<br />
        <input type='checkbox' name='var1' id='var1' value='D3500_3580' />Personal care products (all)<br />
        <input type='checkbox' name='var1' id='var1' value='HC_weighti' />Weight control meals<br /><br />
    </span>
    
    
        <span class="sgrey14">Ranked by annually dollar spend<br />
    <?php 
 
		// show all vars		
		if(	$first_time_bbm < 1) {	
			  $query = "SELECT * FROM amfd_retailers where bbm_db = 'a12_mfd_sp' ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<input type='checkbox' name='var1' id='var1' value='" . $row['var_code'] ."' /> " .$row['var_name'] . "<br />";
						}				
					mysqli_free_result($result);
				}
		}
		else
		{
// specific user vars	
	$found_a12_mfd_sp = 0;
			$query2 = "SELECT * FROM amfd_varselect where client_id= $client_id and use_yn = 1 ";
		if ($result2 = mysqli_query($link, $query2)) {
				while ($row2 = mysqli_fetch_assoc($result2)) {
					$temp_user_var = $row2['var_code'];
					 $query = "SELECT * FROM amfd_retailers where bbm_db = 'a12_mfd_sp' and var_code = '$temp_user_var' ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<input type='checkbox' name='var1' id='var1' value='" . $row['var_code'] ."' /> " .$row['var_name'] . "<br />";
							$found_a12_mfd_sp = 1;
						}}
				}}
				
		if ($found_a12_mfd_sp <1) echo "<br />Contact Market Focus Direct to access these traits<br />";		
			
		}
		
		?>
    </span></div></td>
  <tr class = "spend_show">
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
 <tr class = "segment_show">
    <td align="center" valign="top" bgcolor="#FFFFFF"><div class="div_noscroll"> <span class="sreseller">Segmentation</span><br />
    <img src="image3/segment1.jpg" height="350px" width="440px"  alt="demographics" /></div>
      </td>
    <td align="left" valign="top" bgcolor="#FFFFFF"><div class="div_scroll"><span class="sgrey14"><br />
    </span><span class="sbutton">Segmentation<br />
    </span><span class="sgrey14"> Market segmentation (<a href="segment_descriptions.php" target="_blank">View segment descriptions</a>)<br />
    <input type='checkbox' name='var1' id='var1' value='A' />
A: Affluents<br />
<input type='checkbox' name='var1' id='var1' value='B' />
B: Elite Professionals<br />
<input type='checkbox' name='var1' id='var1' value='C' />
C: Ethnic Cruisers<br />
<input type='checkbox' name='var1' id='var1' value='D' />
D: Nest Builders<br />
<input type='checkbox' name='var1' id='var1' value='E' />
E: Buy me a new home<br />
<input type='checkbox' name='var1' id='var1' value='F' />
F: Empty Nesters<br />
<input type='checkbox' name='var1' id='var1' value='G' />
G: Up the ladder<br />
<input type='checkbox' name='var1' id='var1' value='H' />
H: High Trades<br />
<input type='checkbox' name='var1' id='var1' value='I' />
I: Urban life / Small town<br />
<input type='checkbox' name='var1' id='var1' value='J' />
J: Joyful Country<br />
<input type='checkbox' name='var1' id='var1' value='K' />
K: Rural Handymen<br />
<input type='checkbox' name='var1' id='var1' value='L' />
L: Apartment Dwellers<br />
<input type='checkbox' name='var1' id='var1' value='M' />
M: Singles<br />
<input type='checkbox' name='var1' id='var1' value='N' />
N: New Canadians<br />
<input type='checkbox' name='var1' id='var1' value='O' />
O: Renters<br />
<input type='checkbox' name='var1' id='var1' value='P' />
P: One parent families<br />
<input type='checkbox' name='var1' id='var1' value='Q' />
Q: Thrifty</span></div></td>
  </tr>
  <tr class = "segment_show">
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="50%" align="left" valign="top" bgcolor="#FFFFFF"><br /></td>
  </tr>
  <tr class = "auto_show">
    <td align="center" valign="top" bgcolor="#FFFFFF"><div class="div_noscroll"> <span class="sreseller">Automotive</span><br />
    <img src="car_pic.jpg" height="350px" width="440px"  alt="Automotive" /></div>
    </td>
    
    <td align="left" valign="top" bgcolor="#FFFFFF"><div class="div_scroll"><span class="sbutton">Age of vehicle driven<br /></span>
      <span class="sgrey14">
    <input type='checkbox' name='var1' id='var1' value='new_cari' /> 
    New vehicles
<br /> 
<input type='checkbox' name='var1' id='var1' value='car_25i' /> 
    Vehicles age 2-5 years
    <br /> 
    <input type='checkbox' name='var1' id='var1' value='car_510i' /> 
    Vehicles age 5-10 years
    <br /> 
    <input type='checkbox' name='var1' id='var1' value='old_cari' /> 
    Vehicles 10+ years
    </span><br /><br />
<span class="sbutton">Vehicles owned per household<br /></span>
      <span class="sgrey14">
    <input type='checkbox' name='var1' id='var1' value='AU_N0' />Zero<br />
    <input type='checkbox' name='var1' id='var1' value='AU_N1' />One<br />
    <input type='checkbox' name='var1' id='var1' value='AU_N2' />Two<br />
    <input type='checkbox' name='var1' id='var1' value='AU_N3' />Three<br />
    <input type='checkbox' name='var1' id='var1' value='AU_N4_' />4 or more<br /><br />
</span>
 
 <span class="sbutton">Km Driven per Year<br /></span>
      <span class="sgrey14">
    <input type='checkbox' name='var1' id='var1' value='AU_KM0' />0 Km<br />
    <input type='checkbox' name='var1' id='var1' value='AU_KM1_9' />1-10k Km<br />
    <input type='checkbox' name='var1' id='var1' value='AU_KM10_19' />10-20k Km<br />
    <input type='checkbox' name='var1' id='var1' value='AU_KM20_29' />20-30k Km<br />
    <input type='checkbox' name='var1' id='var1' value='AU_KM30_' />30k or more<br /><br />
</span>
    
    <span class="sbutton">Drive Most Often<br /></span>
      <span class="sgrey14">
    <input type='checkbox' name='var1' id='var1' value='AU_TPMFS' />Sedan<br />
    <input type='checkbox' name='var1' id='var1' value='AU_TPSCOMP' />Sub-Compact<br />
    <input type='checkbox' name='var1' id='var1' value='AU_TPSPO' />Sportscar<br />
    <input type='checkbox' name='var1' id='var1' value='AU_TPMVSW' />Minivan<br />
    <input type='checkbox' name='var1' id='var1' value='AU_TPSUV' />SUV<br />
<input type='checkbox' name='var1' id='var1' value='AU_TPPIC' />Pick up Truck<br />
<input type='checkbox' name='var1' id='var1' value='AU_TPFVAN' />Full Size Van<br /></span>

<span class="sbutton">Value of vehicle<br /></span>
      <span class="sgrey14">
    <input type='checkbox' name='var1' id='var1' value='AU_V_9' />Under $10k<br />
    <input type='checkbox' name='var1' id='var1' value='AU_V10_14' />$10-15k<br />
    <input type='checkbox' name='var1' id='var1' value='AU_V15_19' />$15-20k<br />
    <input type='checkbox' name='var1' id='var1' value='AU_V20_24' />$20-25k<br />
    <input type='checkbox' name='var1' id='var1' value='AU_V25_29' />$25-30k<br />
<input type='checkbox' name='var1' id='var1' value='AU_V30_39' />$30-40k<br />
<input type='checkbox' name='var1' id='var1' value='AU_V40_' />Over $40k<br /></span>
</div>

</td>
  </tr>
  <tr class = "auto_show">
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr class = "himprove_show">
    <td align="center" valign="top" bgcolor="#FFFFFF"><div class="div_noscroll"><span class="sreseller">Home Improvement</span><br />
    <img src="himprove.PNG" height="350px" width="440px"  alt="Improvement" /></div>
    </td>
    <td align="left" valign="top" bgcolor="#FFFFFF"><div class="div_scroll"> <span class="sbutton">Spending on Renovations </span><span class="sgrey14"><br />
    <input type='checkbox' name='var1' id='var1' value='DW_SP0_SCORE' />Nothing<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_SP999_SCORE' />Under $1,000<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_SP2499_SCORE' />$1,000 - $2,499<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_SP4999_SCORE' />$2,500 - $4,999<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_SP9999_SCORE' />$5,000 - $9,999<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_SP19999_SCORE' />$10,000 - $19,999<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_SP20000_SCORE' />$20,000 or more<br /> 
<br /></span><span class="sbutton">High dwelling value</span><span class="sgrey14"><br />
<input type='checkbox' name='var1' id='var1' value='DW_AVALUE_SCORE' />House Value<br /> 
<br /></span><span class="sbutton">Type of dwelling</span><span class="sgrey14"><br />
<input type='checkbox' name='var1' id='var1' value='DW_SINGLE_SCORE' />Detached<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_APT5__SCORE' />Apt 5+ stories<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_SEMI_SCORE' />Semi-detached<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_DUP_SCORE' />Duplex<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_ROW_SCORE' />Townhome<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_APT_5_SCORE' />Low rise (<5 stories)<br /> 
<br /></span><span class="sbutton">Shopping frequency by retailer</span><span class="sgrey14"><br />
<input type='checkbox' name='var1' id='var1' value='H_CANTR_SCORE' />Canadian Tire<br /> 
<input type='checkbox' name='var1' id='var1' value='H_DEPOT_SCORE' />Home Depot<br /> 
<input type='checkbox' name='var1' id='var1' value='H_HWARE_SCORE' />Home Hardware<br /> 
<input type='checkbox' name='var1' id='var1' value='H_OUTFT_SCORE' />Home Outfitters<br /> 
<input type='checkbox' name='var1' id='var1' value='H_SENSE_SCORE' />Home Sense<br /> 
<input type='checkbox' name='var1' id='var1' value='H_LEE_SCORE' />Lee Valley Tools<br /> 
<input type='checkbox' name='var1' id='var1' value='H_LOWE_SCORE' />Lowe's<br /> 
<input type='checkbox' name='var1' id='var1' value='H_PIER1_SCORE' />Pier 1 Imports<br /> 
<input type='checkbox' name='var1' id='var1' value='H_RONA_SCORE' />Rona Stores<br /> 
<input type='checkbox' name='var1' id='var1' value='H_LIGHT_SCORE' />Lighting stores<br /> 
<input type='checkbox' name='var1' id='var1' value='H_DEPT_SCORE' />Department stores<br /> 
<input type='checkbox' name='var1' id='var1' value='H_INDEP_SCORE' />Independent hardware stores<br /> 
<input type='checkbox' name='var1' id='var1' value='H_OL_SCORE' />Online/Internet<br /> 
<input type='checkbox' name='var1' id='var1' value='H_OTHDEC_SCORE' />Other Home Décor<br /> 
<input type='checkbox' name='var1' id='var1' value='H_OTHIMP_SCORE' />Other Home Improvement<br /> 
<br /></span><span class="sbutton">Home Construction Date</span><span class="sgrey14"><br />
<input type='checkbox' name='var1' id='var1' value='DW_CON_60_SCORE' />1960 or before<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_CON6180_SCORE' />1961 to 1980<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_CON8190_SCORE' />1981 to 1990<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_CON9100_SCORE' />1991 to 2000<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_CON0105_SCORE' />2001 to 2005<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_CON0611_SCORE' />2006 to 2011<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_CON12__SCORE' />2012 or newer<br /> 
<br />
</span>

<span class="sbutton">New Home Developments</span><span class="sgrey14"><br />
<input type='checkbox' name='var1' id='var1' value='h2012' />Homes built 2012<br /> 
<input type='checkbox' name='var1' id='var1' value='h2013' />Homes built 2013<br /> 
<input type='checkbox' name='var1' id='var1' value='h2014' />Homes built 2014<br /> 
<input type='checkbox' name='var1' id='var1' value='h2015' />Homes built 2015<br /> 
<input type='checkbox' name='var1' id='var1' value='h2016' />Homes built 2016<br /> 
<input type='checkbox' name='var1' id='var1' value='a2012' />Apts. built 2012<br /> 
<input type='checkbox' name='var1' id='var1' value='a2013' />Apts. built 2013<br /> 
<input type='checkbox' name='var1' id='var1' value='a2014' />Apts. built 2014<br /> 
<input type='checkbox' name='var1' id='var1' value='a2015' />Apts. built 2015<br /> 
<input type='checkbox' name='var1' id='var1' value='a2016' />Apts. built 2016<br /> 


<span class="sbutton">Recent renovations</span><span class="sgrey14"><br />
<input type='checkbox' name='var1' id='var1' value='DW_RASPACE_SCORE' />Added living space<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAGARG_SCORE' />Built/renovated a garage<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RADRAP_SCORE' />Custom draperies/curtains<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RADECK_SCORE' />Deck/fencing<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAELEC_SCORE' />Electrical<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAENG_SCORE' />Energy conservation project<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAEPAIN_SCORE' />Exterior painting/staining<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RATILE_SCORE' />Floor tiles or vinyl flooring<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAFLOO_SCORE' />Hardwood/Laminate Flooring<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAHVAC_SCORE' />Heating, ventilation, or air conditioning<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RASECU_SCORE' />Installed home security system<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAWIND_SCORE' />Installed windows or doors<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAIPAIN_SCORE' />Interior painting/wallpaper<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RALAND_SCORE' />Landscaping or yard improvements<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAPLUM_SCORE' />Plumbing (any jobs)<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RABATH_SCORE' />Remodelled bathroom<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAKITC_SCORE' />Remodelled kitchen<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAORM_SCORE' />Remodelled other room(s)<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAROOF_SCORE' />Roofing<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAPOOL_SCORE' />Swimming pools/spas<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RACARP_SCORE' />Wall-to-wall carpet or rugs<br /> 
<input type='checkbox' name='var1' id='var1' value='DW_RAOTHE_SCORE' />Other home project(s)<br /> 


    </span><br />
  </div> </td>
  </tr>
</table>
