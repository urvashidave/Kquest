<style>
@media print {
.print_pages {
    page-break-after: avoid;
}
}
</style>
 <?php 

$decile_score_array = explode(",", $seq_deciles);
$average_score_in_area = $decile_score_array[11];
$decile_cutoff = $decile_score_array[12];


// new lift chart May 2017
$list_agg_score[0] = $decile_score_array[0];
$peak_lift_agg[0] = $decile_score_array[0] - $average_score_in_area;
for ( $i = 1; $i <= 10; $i ++) {
$peak_lift_decile[$i] = $decile_score_array[$i] - $average_score_in_area;
$temp_agg_counter = $i - 1;
$peak_lift_agg[$i] = $peak_lift_decile[$i] + $peak_lift_agg[$temp_agg_counter];
$list_agg_score[$i] = $average_score_in_area + $peak_lift_agg[$i];
}
// new lift chart  - Second Paul option 2 revisited June 2017
$ch2_random = $decile_score_array[0] / 10;
$ch2_top_decile_rating[0] = $decile_score_array[0];
$ch2_change[0] = 0;
$ch2_lift_random[0] = 0;
$ch2_lift_plus_change[0] = $ch2_top_decile_rating[0];
// $average_score_in_area
$ch2_dec_growth[0] =  $ch2_top_decile_rating[0] - $ch2_random;
$ch2_peak_lift[0] = $ch2_dec_growth[0];
$ch2_random_reach[0] = $ch2_random;
$ch2_sum_deciles = $ch2_top_decile_rating[0];
for ( $i = 1; $i <= 9; $i ++) {
$temp_previous_i = $i-1;
$temp_previous2_i = $i-2;
$ch2_top_decile_rating[$i] = $decile_score_array[$i];
$ch2_change[$i] = $ch2_top_decile_rating[$temp_previous_i] - $ch2_top_decile_rating[$i];
$ch2_random_reach[$i] = $ch2_random_reach[$temp_previous_i] + $ch2_random;
$ch2_lift_random[$i] = $ch2_top_decile_rating[$i] - $ch2_random_reach[$i];
$ch2_lift_plus_change[$i] = $ch2_top_decile_rating[$temp_previous_i] + $ch2_change[$i];
// $average_score_in_area
if($temp_previous_i < 1) $ch2_sum_deciles = $ch2_top_decile_rating[$temp_previous_i] + $ch2_top_decile_rating[$i]; 
else 
$ch2_sum_deciles = $ch2_top_decile_rating[$temp_previous2_i] + $ch2_top_decile_rating[$temp_previous_i] + $ch2_top_decile_rating[$i];
if($temp_previous_i < 1) 	
$ch2_dec_growth[$i] =  $ch2_sum_deciles / 2;
else 
$ch2_dec_growth[$i] =  $ch2_sum_deciles / 3;
if($ch2_dec_growth[$i] > $ch2_dec_growth[$temp_previous_i])
$ch2_peak_lift[$i] = $ch2_dec_growth[$temp_previous_i] + $ch2_change[$i];
else
$ch2_peak_lift[$i] = $ch2_dec_growth[$temp_previous_i] - $ch2_change[$i];
}
$decile_score_kist = implode(",", $decile_score_array);
 ?>



<div class=" print_pages tail" style="height: 625px;">
<table width="900px" height="591" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="900" height="77" colspan="2"><table width="99%" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="125" height="48"  padding-right:="padding-right:""5" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></td>
          <td width="367" height="58"align="left" valign="top" style="padding-top:13px"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="373" align="right"><strong class="stitle">SCORE BY DECILE</strong> </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td ></td>
    </tr>
    <tr>
      <td class="sgrey14" style="padding-left: 20px;"><strong class="psub2">Market area average: <?php echo round($average_score_in_area); ?> <br>
        Top 20% of households: <?php echo round((($decile_score_array[0] + $decile_score_array[1]) / 2)); ?><br>
        Bottom 20% of households:<?php echo round((($decile_score_array[8] + $decile_score_array[9]) / 2)); ?></strong></td>
    </tr>
    <tr>
      <td ><div id="chart_div_decile" style="width: 880px; height: 380px;"></div></td>
    </tr>
  </table
  >
</div>

<div class="pagebreak"><br /></div>

<div class=" print_pages" align="left"  style="height: 625px; padding-bottom: 15px;">
  <table width="900px" height="500" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" colspan="2" class="sorange24" ><table width="99%" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="125" height="48"  padding-right:="padding-right:""5" align="left" valign="top"><img src="image3/KQUEST.png" alt="KQUEST" width="113" height="50" align="top" /></td>
          <td width="367" height="58"align="left" valign="top" style="padding-top:13px"><span class="psub2"><?php echo $change_header; ?></span><span class="black16"><br />
            <?php echo $change_title2; ?></span></td>
          <td width="373" align="right"><strong class="stitle">LIFT CHART</strong></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" class="sorange24" >&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" valign="center" ><div id="chart_div4b" style="width: 850px; height: 420px; margin: 0 auto;"></div></td>
    </tr>
  </table>
</div>


<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization3);
function drawVisualization3() {

	var data3 = google.visualization.arrayToDataTable([
	['Decile', 'Score', 'Average'],
	['Top',<?php echo $decile_score_array[0]; ?>, <?php echo round($average_score_in_area);?>],	
	['2',<?php echo $decile_score_array[1]; ?>, <?php echo round($average_score_in_area);?>],	
	['3',<?php echo $decile_score_array[2]; ?>, <?php echo round($average_score_in_area);?>],	
	['4',<?php echo $decile_score_array[3]; ?>, <?php echo round($average_score_in_area);?>],	
	['5',<?php echo $decile_score_array[4]; ?>, <?php echo round($average_score_in_area);?>],	
	['6',<?php echo $decile_score_array[5]; ?>, <?php echo round($average_score_in_area);?>],	
	['7',<?php echo $decile_score_array[6]; ?>, <?php echo round($average_score_in_area);?>],	
	['8',<?php echo $decile_score_array[7]; ?>, <?php echo round($average_score_in_area);?>],	
	['9',<?php echo $decile_score_array[8]; ?>, <?php echo round($average_score_in_area);?>],	
	['Bottom',<?php echo $decile_score_array[9]; ?>, <?php echo round($average_score_in_area);?>]
	]);
	var options3 = {
	title : 'Targeting Score by Decile (<?php echo number_format($decile_cutoff); ?> households per decile)',
	vAxis: {title: "Score"},
	hAxis: {title: "Decile"},
	seriesType: "bars",
	series: {1: {type: "line"}}
	};
	var chart3 = new google.visualization.ComboChart(document.getElementById('chart_div_decile'));
	chart3.draw(data3, options3);



	var data4b = google.visualization.arrayToDataTable([
	['Decile', 'Lift over random', 'Random reach'],
	[' ',0, 0],
	['Top',<?php echo round($ch2_peak_lift[0]); ?>, <?php echo round($ch2_random_reach[0]); ?>],
	['2',<?php echo round($ch2_peak_lift[1]); ?>, <?php echo round($ch2_random_reach[1]); ?>],
	['3',<?php echo round($ch2_peak_lift[2]); ?>, <?php echo round($ch2_random_reach[2]); ?>],
	['4',<?php echo round($ch2_peak_lift[3]); ?>, <?php echo round($ch2_random_reach[3]); ?>],
	['5',<?php echo round($ch2_peak_lift[4]); ?>, <?php echo round($ch2_random_reach[4]); ?>],
	['6',<?php echo round($ch2_peak_lift[5]); ?>, <?php echo round($ch2_random_reach[5]); ?>],
	['7',<?php echo round($ch2_peak_lift[6]); ?>, <?php echo round($ch2_random_reach[6]); ?>],
	['8',<?php echo round($ch2_peak_lift[7]); ?>, <?php echo round($ch2_random_reach[7]); ?>],
	['9',<?php echo round($ch2_peak_lift[8]); ?>, <?php echo round($ch2_random_reach[8]); ?>],
	['Bottom',<?php echo round($ch2_peak_lift[9]); ?>, <?php echo round($ch2_random_reach[9]); ?>]
	]);
	var options4b = {
	'chartArea': {'width': '70%', 'height': '75%', 'top': 20},
	vAxis: {title: "Lift"},
	hAxis: {title: "Reach"}
	};
	//var chart = new google.visualization.ComboChart(document.getElementById('chart_div4'));
	var chart4b = new google.visualization.AreaChart(document.getElementById('chart_div4b'));
	chart4b.draw(data4b, options4b);

}
  </script>
