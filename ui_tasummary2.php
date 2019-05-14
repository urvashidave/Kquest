<script>
function retailer_submap(val) {
document.getElementById('retailer_submap').value = val;
document.getElementById('detail_show').value = 10;
document.getElementById('retailer_catmap').value = 0;
document.getElementById('change_reportret').style.display = 'block';
document.getElementById("update_note").innerHTML = "Processed new sub-category...<br />click 'Update Report'";

}
function retailer_catmap(val) {
document.getElementById('retailer_catmap').value = val;
document.getElementById('detail_show').value = 10;
document.getElementById('retailer_submap').value = 0;
document.getElementById('change_reportret').style.display = 'block';
document.getElementById("update_note").innerHTML = "Processed new category...<br />click 'Update Report'";
}
function submitmy_competitors() {
document.getElementById('retailer_catmap').value = 0;
document.getElementById('detail_show').value = 10;
document.getElementById('retailer_submap').value = 0;
document.getElementById('change_reportret').style.display = 'block';
document.getElementById("update_note").innerHTML = "Processed all competitors...<br />click 'Update Report'";
}
</script>


<style type="text/css" media="all">

.div_scroll_map {
    width: 295px;
    height: 450px;
    overflow: scroll;
}


.botton_none
{
display: none;	
}
.red_note_font
{
	color:#F00;
}
/* Menu Styles */


.third-level-menu
{
    position: absolute;
    top: 0;
    right: -200px;
    width: 200px;
    list-style: none;
    padding: 0;
    margin: 0;
    display: none; 
	z-index:2;
}

.third-level-menu > li
{
    height: 30px;
    background: #990033;
}
.third-level-menu > li:hover { background: #CCCCCC; }

.second-level-menu
{
    position: absolute;
    top: 30px;
    left: 0;
    width: 200px;
    list-style: none;
    padding: 0;
    margin: 0;
    display: none;
	z-index:2;
}

.second-level-menu > li
{
    position: relative;
    height: 30px;
    background: #990033;
}
.second-level-menu > li:hover { background: #CCCCCC; }

.top-level-menu
{
    list-style: none;
    padding: 0;
    margin: 0;
}

.top-level-menu > li
{
    position: relative;
    float: left;
    height: 30px;
    width: 200px;
    background: #990033;
}
.top-level-menu > li:hover { background: #CCCCCC; }

.top-level-menu li:hover > ul
{
    /* On hover, display the next level's menu */
    display: inline;
}


/* Menu Link Styles */

.top-level-menu a /* Apply to all links inside the multi-level menu */
{
    font: bold 14px Arial, Helvetica, sans-serif;
    color: #FFFFFF;
    text-decoration: none;
    padding: 0 0 0 10px;
    
    /* Make the link cover the entire list item-container */
    display: block;
    line-height: 30px;
}
.top-level-menu a:hover { color: #000000; }

.top-level-menu_copy {
 height: 30px;
    width: 200px;
    background: #990033;
	 font: bold 14px Arial, Helvetica, sans-serif;
    color: #FFFFFF;

}
.top-level-menu_submit {
 height: 30px;
    width: 200px;
    background:#F00;
	 font: bold 14px Arial, Helvetica, sans-serif;
    color: #FFFFFF;

}

@media print {

	.no-print {

		display: none !important;

	}

}



.sgrey14 {

    color: #000000;

    font-family: Arial Narrow,Arial,Helvetica,sans-serif;

    font-size: 16px;

    font-weight: normal;

}



.btn-sm, .btn-xs {

    border-radius: 3px;

    font-size: 12px;

    line-height: 1.5;

    padding: 5px 10px;

}

body{



	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;

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



.pbodyemp {

	font-family: Arial Narrow, Arial, Helvetica, sans-serif;

	font-size: 16px;

	font-weight: normal;

	color: #000000;

}







.print_pages {

  width: 910px;

  height: 650px;

  background: #fff;

  margin: 25px 0 0 0;

   border-style:groove;

   border-width: 2px;

   border-height:

    border-color: #000000 #000000;

  -webkit-border-radius: 6px;

  border-radius: 6px;

  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}



.pprint_pages {

  width: 910px;

  height: 620px;

  background: #fff;

  margin: 25px 0 0 0;

   border-style: solid;

    border-color: #000000 #000000;

  -webkit-border-radius: 6px;

  border-radius: 6px;

  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}



.print_pages1 {
  width: 910px;

  height: 650px;

  background: #fff;

  margin: 25px 0 0 0;

   border-style:groove;

   border-width: 2px;

   border-height:

    border-color: #000000 #000000;

  -webkit-border-radius: 6px;

  border-radius: 6px;

  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.btn1 {
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
.btn-sm1 {
    border-radius: 3px;

    font-size: 12px;

    line-height: 1.5;

    padding: 5px 10px;
}
.btn-xs1 {
    border-radius: 3px;

    font-size: 12px;

    line-height: 1.5;

    padding: 5px 10px;
}
.bg_color1 {background-color: #CEB39D;
}
.form-button-blue {font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
cursor: pointer;
font-size: 14px;
font-weight: normal;
line-height: 1.42857;
text-align: center;
white-space: nowrap;
color: white !important;
background-color: #428bca !important;
}
.btn2 {
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
.btn-sm2 {
    border-radius: 3px;

    font-size: 12px;

    line-height: 1.5;

    padding: 5px 10px;
}
.btn-xs2 {
    border-radius: 3px;

    font-size: 12px;

    line-height: 1.5;

    padding: 5px 10px;
}
.btn3 {
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
.btn-sm3 {
    border-radius: 3px;

    font-size: 12px;

    line-height: 1.5;

    padding: 5px 10px;
}
.btn-xs3 {
    border-radius: 3px;

    font-size: 12px;

    line-height: 1.5;

    padding: 5px 10px;
}
.print_pages2 {
  width: 910px;

  height: 650px;

  background: #fff;

  margin: 25px 0 0 0;

   border-style:groove;

   border-width: 2px;

   border-height:

    border-color: #000000 #000000;

  -webkit-border-radius: 6px;

  border-radius: 6px;

  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>



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

<div>

<div class="container row col-md-12" align="center">  

<div class=" print_pages" align="center"> 

<table width="900px" height="584" border="0" cellspacing="0" cellpadding="0" bgcolor="">

<tr>

<td width="900" colspan="2" align="center" valign="middle"><span class="blue22"><strong>MARKET AREA INSIGHTS</strong></span><br>

<span class="black18"><br>

</span><span class="black22"><?php echo $change_header; ?> 

</span><span class="black18"><br><?php echo $change_title; ?><br />

Compared to <?php echo $tbench_store_number . " " . $tbench_store_name; ?>

<br>

<?php echo $change_prepared; ?></span></td>

</tr>

<tr >

<td colspan="2" align="center" valign="middle"><table width="98%" border="0" cellspacing="0" cellpadding="0">

<tr>

<td align="center" valign="middle"><img src="family_pics/a_mixed_w.jpg" alt="1" width="98" height="98"></td>

<td align="center" valign="middle"><img src="family_pics/s_mixed_w.jpg" width="98" height="98" alt="5"></td>

<td align="center" valign="middle"><img src="family_pics/c_geny_w.jpg" width="98" height="98" alt="4"></td>

<td align="center" valign="middle"><img src="family_pics/geny_mom_baby.jpg" width="98" height="98" alt="3"></td>

<td align="center" valign="middle"><img src="family_pics/f_mixed_w.jpg" width="98" height="98" alt="2"></td>

<td align="center" valign="middle"><img src="image3/k_mixed.jpg" width="98" height="98" alt="16"></td>

<td align="center" valign="middle"><img src="family_pics/c_geny_we.jpg" width="98" height="98" alt="17"></td>

<td align="center" valign="middle"><img src="family_pics/c_mature_w.jpg" width="98" height="98" alt="17"></td>

<td align="center" valign="middle"><img src="family_pics/f_genx_eth.jpg" width="98" height="98" alt="19"></td>

</tr>

<tr>

<td width="98px" align="center" valign="middle"><span class="sblue"><img src="age_pics/s_geny_w5.jpg" width="98" height="98" alt="6"></span></td>

<td width="98px" align="center" valign="middle"><img src="age_pics/s_genx_eth2.jpg" width="98" height="98" alt="10"></td>

<td width="98px" align="center" valign="middle"><img src="image3/k_5_ch.jpg" width="98" height="98" alt="14"></td>

<td width="98px" align="center" valign="middle"><img src="age_pics/s_genx_bl22.jpg" alt="9" width="98" height="98"></td>

<td align="center" valign="middle"><img src="image3/s_boomer_w32.jpg" alt="7" width="98" height="98"></td>

<td align="center" valign="middle"><img src="age_pics/s_genx_eth3.jpg" width="98" height="98" alt="11"></td>

<td align="center" valign="middle"><img src="image3/s_mature_w2.jpg" width="98" height="98" alt="12"></td>

<td align="center" valign="middle"><img src="image3/k_teen_eth4.jpg" width="98" height="98" alt="13"></td>

<td align="center" valign="middle"><img src="age_pics/s_mature_w22.jpg" alt="8" width="98" height="98"></td>

</tr>

<tr>

<td align="center" valign="middle"><img src="activities/ac_walking.jpg" width="98" height="98" alt="a1"></td>

<td align="center" valign="middle"><img src="activities/ac_cycling.jpg" width="98" height="98" alt="a4"></td>

<td align="center" valign="middle"><img src="activities/ac_hclub.jpg" width="98" height="98" alt="a3"></td>

<td align="center" valign="middle"><img src="activities/ac_climb.jpg" width="98" height="98" alt="a2"></td>

<td align="center" valign="middle"><img src="activities/ac_canoe.jpg" width="98" height="98" alt="a9"></td>

<td align="center" valign="middle"><img src="activities/ac_swim.jpg" width="98" height="98" alt="a6"></td>

<td align="center" valign="middle"><img src="activities/ac_yoga.jpg" width="98" height="98" alt="a7"></td>

<td align="center" valign="middle"><img src="activities/ac_soccer.jpg" width="98" height="98" alt="a8"></td>

<td align="center" valign="middle"><img src="activities/ac_marathon.jpg" width="98" height="98" alt="a5"></td>

</tr>

</table>

</td>

</tr>

<tr>

<td colspan="2" align="center" valign="bottom" class="sorange16"><img src="image3/KQUEST.png" width="113" height="50" alt="KQUEST"></td>

</tr>

</table>

</div>

<div class="pagebreak"><br />



</div>

</div></div><!-- end of no print div -->

<div class=" print_pages" align="left">

<td><table width="889" height="74" border="0" align="center" cellpadding="0" cellspacing="0">

<tr>

<td width="900" height="107" colspan="2" padding-right:""><table width="896" height="89"border="0" cellspacing="" cellpadding="4">

<tr>

<td width="125" height="62"  padding-right:"5" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" /></td>

<td width="565" height="62" paddingTop = 1cm; align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

<?php echo $change_title2; ?></span></td>

<td width="192" height="62" align="left" valign="middle"><strong class="stitle">LOCATION</strong></td>

</tr>

<td colspan="3"><table width="899" border="0" cellspacing="0" cellpadding="0">

<tr>

<td width="526" align="left"><h3>

<span class="grey14" style="margin-left:15px;">

<input name="store_uid" type="hidden" id="store_uid" value="<?php echo $store_uid; ?>"  />

<input name="report_uid2" type="hidden" id="report_uid2" value=""  />

<span class="style18">Population</span>: <?php echo number_format($PP_TOT); ?> &#8226; <span class="style16">Households</span>: <?php echo number_format($mfd_hh_count); ?> &#8226; <span class="style16">Income</span>  $<?php echo number_format($IN_AHHp,0); ?></span></td>

<td width="373" align="center"><span class="grey14"><span class="style16">Homes</span>: <?php echo number_format($mfd_home); ?> &#8226; <span class="style16">Apartments</span>: <?php echo number_format($mfd_apts); ?> &#8226; <span class="style16">Farms</span>: <?php echo number_format($mfd_farm); ?></span></td>

</tr>

</table></td>

</tr>

</table></td>

</tr>

<tr>

<td colspan="2" align="center"  valign="middle"><div id="map" style="width: 860px; height: 450px"> </div></td>

</tr>

</table>

</div>


</br >

<div class=" print_pages" align="left">
<a name="anchor1"></a>
  <td><table width="889" height="74" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="900" height="107" colspan="2" padding-right:="padding-right:"""><table width="896" height="89"border="0" cellspacing="" cellpadding="4">
        <tr>
          <td width="125" height="62"  padding-right:="padding-right:""5" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" /></td>
          <td width="565" height="62" paddingtop = "1cm;" align="left" valign="middle"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="192" height="62" align="left" valign="middle"><strong class="stitle">RETAILERS</strong></td>
          </tr>
        <tr>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="25%"><?php 
// get retailer list
include 'db_connect.php'; 

$query = "SELECT DISTINCT CATEGORY_ID, CATEGORY_NAME FROM retail_cat_tree";
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$distinct_retail_cat_id[] = $row['CATEGORY_ID'];
			$distinct_retail_cat_name[] = $row['CATEGORY_NAME'];
	}}
	
$query = "SELECT * FROM retail_cat_tree";
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$retail_cat_id[] = $row['CATEGORY_ID'];
			$retail_cat_name[] = $row['CATEGORY_NAME'];
			$retail_sub_id[] = $row['SUB_ID'];
			$retail_sub_name[] = $row['SUB_CATEGORY'];
	}}



?>
                <input name="my_competitors" type="button" class="top-level-menu_copy" id="my_competitors"  onclick="submitmy_competitors(<?php echo $store_uid ; ?>);" value="My Competitors" />
                <br /><br />
                <ul class="top-level-menu">
                  <li> <a >Specific Retailers</a>
                    <ul class="second-level-menu">
                      <?php 
    for ( $i = 0; $i < sizeof($distinct_retail_cat_id); $i ++) {	
		echo " <li><a href='#anchor1' onclick='retailer_catmap(" . $distinct_retail_cat_id[$i] .")'>" . $distinct_retail_cat_name[$i] . "</a>";
		
			echo "<ul class='third-level-menu'>";	
				for ( $j = 0; $j < sizeof($retail_sub_id); $j ++) {	
				
					if($retail_cat_id[$j] == $distinct_retail_cat_id[$i]) {
						echo " <li><a href='#anchor1' onclick='retailer_submap(" . $retail_sub_id[$j] .")'>" . $retail_sub_name[$j] . "</a></li>";
					}
				}
			echo "</ul>";
		echo "</li>";	
    }
    ?>
                      </ul>
                    </li>
                  </ul>
                <input name="retailer_catmap" type="hidden" id="retailer_catmap" value="<?php echo $retailer_catmap; ?>" size="3" />
                <input name="retailer_submap" type="hidden" id="retailer_submap" value="<?php echo $retailer_submap; ?>" size="3" /></td>
              <td width="32%"><input name="change_reportret" type="submit" class="top-level-menu_submit botton_none" id="change_reportret"  onclick="change_report2(<?php echo $store_uid ; ?>);" value="Update Report" />
                <i class ="red_note_font" id="update_note"> </i><br /></td>
              <td width="43%" class="pbodyemp"><?PHP echo $display_cat_name ; ?><br />
                <?PHP echo sizeof($map_store_fsaldu) ; ?>  retailers displayed</td>
            </tr>
            </table></td>
          </tr>
      </table></td>
      </tr>
    <tr>
      <td colspan="2" align="center"  valign="middle">
        <table width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td width="300" align="center" valign="top">Retailers Identified<br />
            <div class="div_scroll_map">
              <table width="100%" border="1" cellpadding="0" cellspacing="0" class="pbody12">
                <tr>
                  <td width="11%" valign="top" align="center">#</td>
                  <td width="65%" valign="top">Retailer</td>
                  <td width="11%" valign="top">Km</td>
                </tr>
                
                <?php 
				for ($i = 0; $i < sizeof($map_store_fsaldu) ; $i++)
				{ 
				echo "<tr><td valign='top' class='pbodyemp' align='center'><strong>" . $map_icon_label[$i] . "</strong></td>";
                echo "<td valign='top' align='left'>" . $map_store_name[$i] . "<br />" . $map_store_address[$i] . "</td>";
               	echo "<td valign='top' align='center'>" . number_format($map_km[$i],1) . "</td></tr>";				
				}
				?>
                 
              </table>
              </div></td>
            <td align="center" valign="top"><div id="map_ret" style="width: 600px; height: 450px"> </div></td>
            </tr>
        </table>
          </tr>
  </table></td>
</div><br />

<div class="print_pages2" align="left" style="height:675px">
  <table width="911" height="600" border="0" cellspacing="" cellpadding="4" ;">
    <tr>
      <td width="900" height="107" colspan="2" padding-right:="padding-right:"""><table width="99%" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="125" height="48"  padding-right:="padding-right:""5" align="left" valign="top"><img src="KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></td>
          <td width="367" height="58"align="left" valign="top" style="padding-top:13px"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="373" align="right"><strong class="stitle">DEMOGRAPHICS<br />
            </strong> <a class="btn btn-primary btn-sm" onclick="detail_show2(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;
              
              &nbsp;<strong>View Details rr</strong>&nbsp;</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="49%" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="200" align="center" valign="top"><img src="family_pics/<?php echo $image_display_family;?>" alt="demo1" width="150px" height="150px" class="Example_E" /></td>
          <td valign="top" class="black14"><strong>Primary Family Structure Cohort</strong><strong><br />
            </span><?php echo $family_top_comment[0]; ?><br />
            <br />
          </strong><?php echo $family_comment; ?></td>
        </tr>
      </table></td>
      <td width="50%" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="200" align="center" valign="top"><img src="age_pics/<?php echo $image_display_age;?>" alt="age picture" width="150px" height="150px" class="Example_E" /></td>
          <td valign="top" class="black14"><strong>Primary Age Cohort</strong><strong><br />
            </span><?php echo $age_top_comment[0]; ?> <br />
            <br />
          </strong> <?php echo $age_comment; ?></td>
        </tr>
      </table></td>
      <td width="1%" align="center" valign="top"><br /></td>
    </tr>
    <tr>
      <td align="center"><span class="style2" style="font-size: 17px">Household Income</span>
        <div id="piechart_3d" style="width: 440px; height: 350px;"></div></td>
      <td align="center"><span class="style2" style="font-size: 17px">Ethnic Diversity</span>
        <div id="piechart_3d2aa" style="width: 440px; height: 350px;"></div></td>
    </tr>
  </table>
</div>
<div class="pagebreak"><br />

</div>

<div class=" print_pages" align="left">

<table width="905" height="588" border="0" cellspacing="4" cellpadding="4">

<tr>

<td width="905" height="580" colspan="2"><table width="100%" height="543" border="0" cellspacing="0" cellpadding="0">

<tr>

<td height="74"><table width="99%" border="0" cellspacing="0" cellpadding="0">

<tr>

<td width="135" height="63" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></td>

<td width="565"height="63" align="left" valign="top" style="padding-top:13px"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

<?php echo $change_title2; ?></span></td>



    <td width="150" align="right"><strong class="stitle">SEGMENTATION</strong><br>

<a class="btn btn-primary btn-sm" onClick="detail_show3(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;

  			&nbsp;<strong>View Details</strong>&nbsp;</a></td>





</tr>

</table>

</td>

</tr>

<tr>

<td height="74" align="center" valign="top" class="black18"><p style="margin: 0; padding: 0;"><strong><?php echo number_format($segment_counter); ?> Vital segments were identified <br>

These vital segments represent <?php echo number_format($vitalsegment_p); ?>% of your entire 

market area

<br> 

</strong >and <?php echo number_format($vitalsegment_c); ?>% of <span class="pbodyemp">benchmark</span> households (index <?php echo number_format($vitalsegment_p / $vitalsegment_c *100); ?>) </p></td>

</tr>

<tr>

<td height="395"><table width="100%" border="0" cellspacing="0" cellpadding="0">

<tr>

<td>

<?php

if ($segment_counter >0) {

echo "

<table width='95%' class='Example_E1'>

<tr>

<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>

<tr>

<td align='center'><img src='" . $segment_picture[0] . ".jpg' width='150' height='150'></td>

</tr>

<tr>

<td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[0] . "</strong></td>

</tr>

<tr>

<td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[0] . "% of market area<br>" 

. $segment_benchmark[0] . "% of benchmark <br> index "

. $segment_index[0] . "<br>

</td>

</tr>

<tr>

<td height ='120' >". $segment_description[0] ."

</td>

</tr>

</table></td>

</tr>

</table>";               

} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }

?>

</td>

<td><?php

if ($segment_counter >1) {

echo "

<table width='95%' class='Example_E1'>

<tr>

<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>

<tr>

<td align='center'><img src='" . $segment_picture[1] . ".jpg' width='150' height='150'></td>

</tr>

<tr>

<td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[1] . "</strong></td>

</tr>

<tr>

<td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[1] . "% of market area<br>" 

. $segment_benchmark[1] . "% of benchmark <br> index "

. $segment_index[1] . "<br>

</td>

</tr>

<tr>

<td height ='120' >". $segment_description[1] ."

</td>

</tr>

</table></td>

</tr>

</table>";               

} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }

?>

</td>

<td><?php

if ($segment_counter >2) {

echo "

<table width='95%' class='Example_E1'>

<tr>

<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>

<tr>

<td align='center'><img src='" . $segment_picture[2] . ".jpg' width='150' height='150'></td>

</tr>

<tr>

<td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[2] . "</strong></td>

</tr>

<tr>

<td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[2] . "% of market area<br>" 

. $segment_benchmark[2] . "% of benchmark <br> index "

. $segment_index[2] . "<br>

</td>

</tr>

<tr>

<td height ='120' >". $segment_description[2] ."

</td>

</tr>

</table></td>

</tr>

</table>";               

} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }

?></td>

<td><?php

if ($segment_counter >3) {

echo "

<table width='95%' class='Example_E1'>

<tr>

<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>

<tr>

<td align='center'><img src='" . $segment_picture[3] . ".jpg' width='150' height='150'></td>

</tr>

<tr>

<td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[3] . "</strong></td>

</tr>

<tr>

<td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[3] . "% of market area<br>" 

. $segment_benchmark[3] . "% of benchmark <br> index "

. $segment_index[3] . "<br>

</td>

</tr>

<tr>

<td height ='120' >". $segment_description[3] ."

</td>

</tr>

</table></td>

</tr>

</table>";               

} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }

?></td>

<td><?php

if ($segment_counter >4) {

echo "

<table width='95%' class='Example_E1'>

<tr>

<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>

<tr>

<td align='center'><img src='" . $segment_picture[4] . ".jpg' width='150' height='150'></td>

</tr>

<tr>

<td align='center' height ='50' class='sgrey14'><strong>" . $segment_high[4] . "</strong></td>

</tr>

<tr>

<td height ='50' bgcolor='#e0e0e0'>" . $segment_percent[4] . "% of market area<br>" 

. $segment_benchmark[4] . "% of benchmark <br> index "

. $segment_index[4] . "<br>

</td>

</tr>

<tr>

<td height ='120' >". $segment_description[4] ."

</td>

</tr>

</table></td>

</tr>

</table>";               

} else {

echo " <table width='95%'><tr><td>.</td></tr></table>"; }

?></td>

</tr>

</table></td>

</tr>

</table><span class="pbody12">Market area compared to 

<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>

</tr>

</table></td>

</tr>

</table>

<tr>

<td align="left" class="sgrey14">&nbsp;</td>

</tr>

</table>

</div>

<div class="pagebreak"><br />

<br />

</div>

<div class="print_pages" align="left">

<table width="100%" border="0" cellspacing="0" cellpadding="0">

<tr>

<td width="880" height="96" colspan="2" align="center"><table width="899"height="75" border="0" cellpadding="4" cellspacing="4">

<tr>

<td width="126" height="67" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" align="top"></td>

<td width=358 align="left" valign="top" style="padding-top:15px"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

<?php echo $change_title2; ?></span></td>

<td width="53%" align="right" valign="top"><strong class="stitle">HOUSEHOLD SPEND  </strong><br>

<a class="btn btn-primary btn-sm" onClick="detail_show4(<?php echo $store_uid ; ?>);">

<i class="fa fa-file-text fa-lg"></i>&nbsp;

  			&nbsp;<strong>View Details</strong>&nbsp;</a></td>

</tr>

</table></td>

</tr>

<tr>

<td colspan="2" align="center" class="black18" ><p><strong>$<?php echo number_format($hhb_consume); ?> Total dollar spend per households (in the trade area)</strong><br>

  $<?php echo number_format(abs($hhdiff_consume)); if ($hhdiff_consume > 0) echo " higher"; else echo " lower"; ?> than the <span class="">benchmark</span> average of $ <?php echo number_format($hha_consume); ?></td>

</tr>

<tr>

<td colspan="2" align="left"><table width="100%" border="0" cellspacing="4" cellpadding="4">

<tr>

<td width="33%" height="390" align="center" valign="top"><table width='95%' class='pborder1'>

<tr>

<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>

<tr>

<td height="35" align='center' class="pbodyemp"><strong>Essential Spending</strong></td>

</tr>

<tr>

<td align='center' height ='50' class='sgrey14'><img src="activities/house_mid.jpg" width="190" height="190" alt="house"></td>

</tr>

<tr>

<td height ='20'><blockquote>

<p class="pbody">&#8226; Housing<br>

&#8226; Food<br>

&#8226; Transportation </p>

</blockquote></td>

</tr>

<tr>

<td height ='65' class="pbodyemp" >&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhbcommit); ?> market area<br>

&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhacommit); ?> benchmark <br>

&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiffcommit); ?> difference</td>

</tr>

</table></td>

</tr>

</table></td>

<td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>

<tr>

<td><table width='100%' border='0' cellspacing='0' cellpadding='0'>

<tr>

<td height="35" align='center' class="pbodyemp"><strong>Controllable Spending</strong></td>

</tr>

<tr>

<td align='center' height ='50' class='sgrey14'><img src="activities/clothing1.jpg" width="190" height="190" alt="clothes"></td>

</tr>

<tr>

<td height ='20'><blockquote>

<p class="pbody">&#8226; Clothing<br>

&#8226; Household Expenses<br>

&#8226; Health Care</p>

</blockquote></td>

</tr>

<tr>

<td height ='65' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhb_purchases); ?> market area<br>

&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hha_purchases); ?> benchmark<br>

&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhdiff_purchases); ?> difference</strong></td>

</tr>

</table></td>

</tr>

</table></td>

<td width="33%" align="center" valign="top"><table width='95%' class='pborder1'>

<tr>

<td><table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor="#FFFFFF">

<tr>

<td height="35" align='center' class="pbodyemp"><strong>Discretionary Spending</strong></td>

</tr>

<tr>

<td align='center' height ='50' class='sgrey14'><img src="activities/activity.png" width="190" height="190" alt="activity"></td>

</tr>

<tr>

<td height ='20' border='transparent'><blockquote>

<p class="pbody">&#8226; Reacreation<br>

&#8226; Household Items<br>

&#8226; Gardening</p>

</blockquote></td>

</tr>

<tr>

<td height ='65' ><strong class="pbodyemp">&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhmarket_discretionary); ?> market area<br>

&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhcan_discretionary); ?> benchmark<br>

&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo number_format($hhmarket_discretionary - $hhcan_discretionary); ?> difference</strong></td>

</tr>

</table></td>

</tr>

</table></td>

</tr>

</table><span class="pbody12" style="margin-left: 10px;">Market area compared to 

<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>

</tr>

</table>

</div>

<div class="pagebreak"><br />

<br />

</div>





<div class=" print_pages" align="left">

<table width="102%" height="610" border="0" cellspacing="4" cellpadding="4">

<tr>

<td width="35%"><table height="74" border="0" cellspacing="0" cellpadding="4">

<tr>

<td width="120" height="48" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" /></td>

<td width="447" height="58" align="left" valign="top" style="padding-top:15px"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br>

<?php echo $change_title2; ?></span></td>

<td width="300" align="right"><strong class="stitle">MEDIA</strong><br>

<a class="btn btn-primary btn-sm" onClick="detail_show5(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;

  			&nbsp;<strong>View Details</strong>&nbsp;</a></td>

</tr>

</table></td>

<tr>

<td height="30" align="center" class="black18" ><strong>Market Area Media Usage    </strong ></td>

</tr>

</tr>

<tr>

<td>

<?php // flyer augupdate

?>

<table width="97%" border="0" cellspacing="2" cellpadding="2">

<tr>

<td width="25%" align="center" valign="top"><table width="95%" height = "415" class="Example_E1" border="0" cellspacing="0" cellpadding="2">

<tr class="sblue">

<td align="center" height = "35" valign="top"><strong>Flyer</strong></td>

</tr>

<tr>

<td height="220" align="center" valign="top"><img src="image3/flyer.png" width="185" height="185" alt="online"></td>

</tr>

<tr>

<td height="40" align="center" valign="middle"><img src="image3/green0.png" width="25" height="15" alt="green">

<?php if ($index_flyer_heavy > 85) echo "<img src='image3/green1.png' width='25' height='15' alt='green'>";?>

<?php if ($index_flyer_heavy > 95) echo "<img src='image3/green2.png' width='25' height='15' alt='green'>";?>

<?php if ($index_flyer_heavy > 105) echo "<img src='image3/green3.png' width='25' height='15' alt='green'>";?>

<?php if ($index_flyer_heavy > 115) echo "<img src='image3/green4.png' width='25' height='15' alt='green'>";?>

<?php if ($index_flyer_heavy > 125) echo "<img src='image3/green5.png' width='25' height='15' alt='green'>";?></td>

</tr>

<tr>

<td valign="top"><strong>Market Area: <?php echo number_format($pb_flyer_heavy); ?>%<br>

Benchmark: <?php echo number_format($canp_flyer_heavy); ?>% <br>

Index: <?php echo number_format($index_flyer_heavy); ?><br>

</strong><br>

<span class="style7">Heavy  users (occ + freq.read weekly)</span></td>

</tr>

</table>



</td>

<td width="25%" align="center" valign="top"><table width="95%" height = "415" class="Example_E1" border="0" cellspacing="0" cellpadding="2">

<tr class="sblue">

<td align="center" height = "35" valign="top"><strong>Online</strong></td>

</tr>

<tr>

<td height="220" align="center" valign="top"><img src="image3/online.jpg" width="185" height="185" alt="online"></td>

</tr>

<tr>

<td height="40" align="center" valign="middle">

<img src="image3/green0.png" width="25" height="15" alt="green"><?php if ($binternetindex > 85) echo "<img src='image3/green1.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 95) echo "<img src='image3/green2.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 105) echo "<img src='image3/green3.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 115) echo "<img src='image3/green4.png' width='25' height='15' alt='green'>";?><?php if ($binternetindex > 125) echo "<img src='image3/green5.png' width='25' height='15' alt='green'>";?>

</td>

</tr>

<tr>

<td valign="top"><strong>Market Area: <?php echo number_format($pinternet_high ); ?>%<br>

Benchmark: <?php echo number_format($canpinternet_high ); ?>%<br>

Index: <?php echo number_format($binternetindex ); ?><span class="sgrey14"><br>

</span></strong><span class="style13"><br>

</span><span class="style7">Heavy  users (15+hours/week)</span></td>

</tr>

</table></td>

<td width="25%" align="center" valign="top"><table width="95%" height = "415" class="Example_E1" border="0" cellspacing="0" cellpadding="2">

<tr class="sblue">

<td align="center" height = "35"valign="top"><strong>Newspaper</strong></td>

</tr>

<tr>

<td align="center" height="220" valign="top"><img src="image3/local_news.jpg" width="185" height="185" alt="news"></td>

</tr>

<tr>

<td height="40" align="center" valign="middle">

<img src="image3/green0.png" width="25" height="15" alt="green"><?php if ($bnpindex > 85) echo "<img src='image3/green1.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 95) echo "<img src='image3/green2.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 105) echo "<img src='image3/green3.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 115) echo "<img src='image3/green4.png' width='25' height='15' alt='green'>";?><?php if ($bnpindex > 125) echo "<img src='image3/green5.png' width='25' height='15' alt='green'>";?>

</td>

</tr>

<tr>

<td valign="top"><strong>Market Area:<?php echo number_format($pnp_high ); ?>%<br>

Benchmark: <?php echo number_format($canpnp_high ); ?>%<br>

Index: <?php echo number_format($bnpindex ); ?></strong><br>

<br>

<span class="style7">Heavy  readers (4+hours/week)</span></td>

</tr>

</table></td>

<td width="25%" align="center" valign="top">

<table width="95%" height = "415" class="Example_E1" border="0" cellspacing="0" cellpadding="2">

<tr class="sblue">

<td align="center" height = "35" valign="top"><strong>Radio</strong></td>

</tr>

<tr>

<td align="center" height="220" valign="top"><img src="image3/radio.jpg" width="185" height="185" alt="radio"></td>

</tr>

<tr>

<td height="40" align="center" valign="middle">

<img src="image3/green0.png" width="25" height="15" alt="green">

<?php if ($bradioindex > 85) echo "<img src='image3/green1.png' width='25' height='15' alt='green'>";?>

<?php if ($bradioindex > 95) echo "<img src='image3/green2.png' width='25' height='15' alt='green'>";?>

<?php if ($bradioindex > 105) echo "<img src='image3/green3.png' width='25' height='15' alt='green'>";?>

<?php if ($bradioindex > 115) echo "<img src='image3/green4.png' width='25' height='15' alt='green'>";?>

<?php if ($bradioindex > 125) echo "<img src='image3/green5.png' width='25' height='15' alt='green'>";?></td>

</tr>

<tr>

<td valign="top"><strong>Market Area:<?php echo number_format($pradio_high ); ?>%<br>

Benchmark: <?php echo number_format($canpradio_high ); ?>%<br>

Index: <?php echo number_format($bradioindex ); ?></strong><br>

<br>

<span class="style7">Heavy  listeners (35+hours/week)</span></td>

</tr>

</table></td>

</tr>

</table>

<span class="pbody12">Market area compared to 

<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span>

</td>

</tr>

</table>

</div>

<div class="pagebreak"><br />

<br />

</div>





<div class="print_pages lsa" align="left" style="height:665px;">



<table width="102%" height="670" border="0" cellspacing="4" cellpadding="4">

<tr>

<td width="35%"><table width="892" height="67" border="0" cellspacing="0" cellpadding="4">

<tr>

<td width="124" height="67" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" /></td>

<td width="555" height="67" align="left" valign="top" style="padding-top:15px"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />

<?php echo $change_title2; ?></span></td>

<td width="189" height="67" align="right" valign="middle"><strong class="stitle">LIFESTYLE</strong><br />

<a class="btn btn-primary btn-sm" style="cursor: pointer; cursor: hand;" onclick="detail_show6(<?php echo $store_uid ; ?>);"><i class="fa fa-file-text fa-lg"></i>&nbsp;

&nbsp;<strong>View Details</strong>&nbsp;</a></td>

</tr>

</table></td>

</tr>

<tr>

<td height="20" align="center" class="black18" ><strong> Top 8 Lifestyle Activities (out of 43) </strong> </td>

</tr>

<tr>

<td height="515" ><table width="99%"  border="0" cellspacing="2" cellpadding="2">

<tr>

<td width="25%" height="250"  ><table width="95%" class="Example_E1" height="240">

<tr>

<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][0]; ?>" width="200" height="140" alt="rank1" /></td>

</tr>

<tr>

<td width="22%" class="sgrey50"><strong>1</strong></td>

<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][0]; ?></strong></span><br />

<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][0]); ?>%<br />

Index: <?php echo number_format($sorted_leisure['index'][0]); ?></span></td>

</tr>

</table></td>

<td width="25%" height="250"  ><table width="95%" class="Example_E1" height="240">

<tr>

<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][1]; ?>" width="200" height="140" alt="rank1" /></td>

</tr>

<tr>

<td width="22%" class="sgrey50"><strong>2</strong></td>

<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][1]; ?></strong></span><br />

<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][1]); ?>%<br />

Index: <?php echo number_format($sorted_leisure['index'][1]); ?></span></td>

</tr>

</table></td>

<td width="25%" height="250"  ><table width="95%" class="Example_E1" height="240">

<tr>

<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][2]; ?>" width="200" height="140" alt="rank3" /></td>

</tr>

<tr>

<td width="22%" class="sgrey50"><strong>3</strong></td>

<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][2]; ?></strong></span><br />

<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][2]); ?>%<br />

Index: <?php echo number_format($sorted_leisure['index'][2]); ?></span></td>

</tr>

</table></td>

<td width="25%" height="250"  ><table width="95%" class="Example_E1" height="240">

<tr>

<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][3]; ?>" width="200" height="140" alt="rank3" /></td>

</tr>

<tr>

<td width="22%" class="sgrey50"><strong>4</strong></td>

<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][3]; ?></strong></span><br />

<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][3]); ?>%<br />

Index: <?php echo number_format($sorted_leisure['index'][3]); ?></span></td>

</tr>

</table></td>

</tr>

<tr>

<td width="25%" height="244"  ><table width="95%" class="Example_E1" height="240">

<tr>

<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][4]; ?>" width="200" height="140" alt="rank3" /></td>

</tr>

<tr>

<td width="22%" class="sgrey50"><strong>5</strong></td>

<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][4]; ?></strong></span><br />

<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][4]); ?>%<br />

Index: <?php echo number_format($sorted_leisure['index'][4]); ?></span></td>

</tr>

</table></td>

<td width="25%" height="244"  ><table width="95%" class="Example_E1" height="240">

<tr>

<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][5]; ?>" width="200" height="140" alt="rank3" /></td>

</tr>

<tr>

<td width="22%" class="sgrey50"><strong>6</strong></td>

<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][5]; ?></strong></span><br />

<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][5]); ?>%<br />

Index: <?php echo number_format($sorted_leisure['index'][5]); ?></span></td>

</tr>

</table></td>

<td width="25%" height="244"  ><table width="95%" class="Example_E1" height="240">

<tr>

<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][6]; ?>" width="200" height="140" alt="rank3" /></td>

</tr>

<tr>

<td width="22%" class="sgrey50"><strong>7</strong></td>

<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][6]; ?></strong></span><br />

<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][6]); ?>%<br />

Index: <?php echo number_format($sorted_leisure['index'][6]); ?></span></td>

</tr>

</table></td>

<td width="25%" height="244"  ><table width="95%" class="Example_E1" height="240">

<tr>

<td colspan="2" align="center" valign="top"><img src="<?php echo $sorted_leisure['pic'][7]; ?>" width="200" height="140" alt="rank3" /></td>

</tr>

<tr>

<td width="22%" class="sgrey50"><strong>8</strong></td>

<td width="78%"><span class="sblue"><strong><?php echo $sorted_leisure['name'][7]; ?></strong></span><br />

<span class="sgrey14">Activity rate: <?php echo number_format($sorted_leisure['percent'][7]); ?>%<br />

Index: <?php echo number_format($sorted_leisure['index'][7]); ?></span></td>

</tr>

</table></td>

</tr>

</table><span class="pbody12">Market area compared to 

<?php echo $tbench_store_number . " " . $tbench_store_name; ?></span></td>

</tr>

</table>

</div>



<!--<div class="pagebreak"></div>-->

