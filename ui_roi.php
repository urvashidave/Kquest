<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

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
    .sbutton{
   color: #900C3F;
}
</style>
<?php 

if (isset($_POST["report_uid"])) {	$report_uid = $_POST["report_uid"];} else $report_uid = 0;
$report_api_key = 3571;
$report_good_yn = 0;
$report_uid = $report_uid / $report_api_key;
$store_number = "";
$var1_fullname = "";
$user_firstname = "";
$user_lastname = "";
$var1_fullname_string = "";
$store_name = "";


include "db_connect.php";

$query = "SELECT * FROM amfd_reports WHERE report_uid = $report_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
					  $user_firstname = $row['user_firstname'];
					  $user_lastname = $row['user_lastname'];
					  $store_uid = $row['store_uid'];
					  $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					  $var1_code = $row['var1_code'];
					  $var1_fullname = $row['var1_fullname'];
					  $pc_count = $row['pc_count'];
					  $report_good_yn = 1;
				}				
			mysqli_free_result($result);
		}



// calculate score
if (isset($_POST["roi_avgscore"])) {	$roi_avgscore = $_POST["roi_avgscore"];} else $roi_avgscore = 50;
if (isset($_POST["roi_totalhh"])) {	$roi_totalhh = $_POST["roi_totalhh"];} else $roi_totalhh = 50;
if (isset($_POST["roi_scores"])) {	$roi_scores = $_POST["roi_scores"];} else $roi_scores = 50;
if (isset($_POST["roi_20hh"])) {	$roi_20hh = $_POST["roi_20hh"];} else $roi_20hh = 50;

$query = "SELECT * FROM amfd_savedvals WHERE report_uid = $report_uid and agg_name = 'decile_score' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $roi_scores = "100," . $row['agg_list'];
				}				
			mysqli_free_result($result);
		}


$roi_scores = str_replace(" ","",$roi_scores);
$roi_scores = str_replace(",","|",$roi_scores);


$MFD_target_hh = str_replace("([0-9]+)","",$roi_20hh);
$MFD_target_hh = str_replace(" ","",$MFD_target_hh);
$MFD_target_hh = str_replace(",","",$MFD_target_hh);
$MFD_target_hh = (int)"$MFD_target_hh";
//echo "<br />" . $MFD_target_hh;

$MFD_target_hh = min($MFD_target_hh,$roi_totalhh);
//print_r($scores_array);
$scores_array = explode("|",$roi_scores);



// end calculate first time through

// get saved data scores_array[$i] (1-21), above_avg_hh, total_hh_tot
// convert saved data





$hh_decile_number = $roi_totalhh / 10;
$cum_hh_already = 0;
$MFD_target_score =0;
for ($i=1; $i<10; $i++) { 
	if(($cum_hh_already + $hh_decile_number) >= $MFD_target_hh) 
	{	$MFD_target_score = $MFD_target_score + ($MFD_target_hh - $cum_hh_already) *$scores_array[$i];
		$cum_hh_already = $MFD_target_hh;
	} else {
		$MFD_target_score =$MFD_target_score +$scores_array[$i]*$hh_decile_number;
		$cum_hh_already = $cum_hh_already +$hh_decile_number;
	}
	//echo $cum_hh_already . ", " . $MFD_target_score . ", " . $scores_array[$i]  . "<br />";
}


$MFD_target_score = $MFD_target_score/$MFD_target_hh;

?>
<script type="text/javascript">
   google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
  
  
    ['Decile', 'Score', 'Average'],
['Top',<?php echo round($scores_array[1]); ?>, <?php echo $roi_avgscore;?>],	
['2',<?php echo round($scores_array[2]); ?>, <?php echo $roi_avgscore;?>],
['3',<?php echo round($scores_array[3]); ?>, <?php echo $roi_avgscore;?>],
['4',<?php echo round($scores_array[4]); ?>, <?php echo $roi_avgscore;?>],
['5',<?php echo round($scores_array[5]); ?>, <?php echo $roi_avgscore;?>],
['6',<?php echo round($scores_array[6]); ?>, <?php echo $roi_avgscore;?>],
['7',<?php echo round($scores_array[7]); ?>, <?php echo $roi_avgscore;?>],
['8',<?php echo round($scores_array[8]); ?>, <?php echo $roi_avgscore;?>],
['9',<?php echo round($scores_array[9]); ?>, <?php echo $roi_avgscore;?>],
['Bottom',<?php echo round($scores_array[10]); ?>, <?php echo $roi_avgscore;?>]


  ]);

  var options = {
	title : 'Targeting Score by Decile (<?php echo number_format($roi_totalhh * 0.1); ?> households per decile)',
    vAxis: {title: "Score"},
    hAxis: {title: "Decile"},
    seriesType: "bars",
    series: {1: {type: "line"}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
  
</script>



    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['gauge']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
		  ['Area Average', <?php echo round($roi_avgscore); ?>]
        ]);

        var options = {
          width: 300, height: 300,
          redFrom: 80, redTo: 100,
          yellowFrom: 60, yellowTo: 80,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>

<script type='text/javascript'>
      google.load('visualization', '1', {packages:['gauge']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data2 = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Top <?php echo number_format($roi_20hh); ?> hh', <?php echo round($MFD_target_score); ?>]
        ]);

        var options = {
          width: 300, height: 300,
          redFrom: 80, redTo: 100,
          yellowFrom: 60, yellowTo: 80,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div2'));
        chart.draw(data2, options);
      }
    </script>

<table width="900" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td colspan="2"><p>
      <input name="ads" type="button" class="sblue" id="ads" value="Back to Store" onclick="PICKSTOREsubmit(<?php echo $store_uid; ?>);" />
      <input name="report_uid" type="hidden" id="report_uid" value="<?php echo $report_uid * $report_api_key ?> " />
      <input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid; ?>"  />
      <input name="roi_totalhh" type="hidden" id="roi_totalhh" value="<?php echo $roi_totalhh; ?>" />
      <input type="hidden" name="roi_scores" id="roi_scores" value="<?php echo $roi_scores; ?>" />
      <input type="hidden" name="roi_avgscore" id="roi_avgscore" value="<?php echo $roi_avgscore; ?>" />
      </p>
      <p>Target consumer: &nbsp;<br />
    <?php echo $var1_fullname; ?></p></td>
    <td width="33%"><span class="sgrey14">Flyer Optimization Analysis<br />
      Store # <?php echo $store_number; ?> <?php echo $store_name; ?><span class="sgrey12"><br />
    Prepared by: <?php echo $user_firstname; ?> <?php echo $user_lastname; ?></span></span></td>
  </tr>
  <tr>
    <td width="33%"><div id='chart_div2'></div></td>
    <td width="33%"><div id='chart_div1'></div></td>
    <td width="33%" valign="top"><table width="95%" border="0" cellspacing="0" cellpadding="7">
      <tr>
        <td colspan="2" align="center" bgcolor="#FFE9BF" class="sblue">Distribution Calculator</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#FFE9BF" class="sgrey12"><span class="sbutton">Flyers to send</span>
          <input name="roi_20hh" type="text" class="sblue" id="roi_20hh" value="<?php echo number_format($roi_20hh); ?>" size="8" /> 
          (max <?php echo number_format($roi_totalhh); ?>)</td></tr></table><table width="95%" border="0" cellspacing="0" cellpadding="7"><tr>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#FFE9BF" class="sgrey12">Enter how many flyers you want to send (there are <?php echo number_format($roi_totalhh); ?> households in this market area)</td>
        </tr>
      <tr>
        <td width="75%" align="left" bgcolor="#FFE9BF" class="sgrey12">&nbsp;</td>
        <td width="25%" bgcolor="#FFE9BF" class="sgrey12">&nbsp;</td>
      </tr>
      <tr class="sblue">
        <td align="left" bgcolor="#FFE9BF"><span class="sgrey14">Top <?php echo number_format($roi_20hh); ?> households  Score <br />
          </span></td>
        <td  align='left' bgcolor="#FFE9BF" class="sblue"><span class="sgrey14"><?php echo number_format($MFD_target_score); ?></span></td>
      </tr>
      <tr class="sblue">
        <td align="left" bgcolor="#FFE9BF"><span class="sgrey14">Average Market Area Score <br />
          </span></td>
        <td  align='left' bgcolor="#FFE9BF" class="sblue"><span class="sgrey14"><?php echo number_format($roi_avgscore); ?></span></td>
      </tr>
      <tr>
        <td bgcolor="#FFE9BF" class="sgrey12">&nbsp;</td>
        <td bgcolor="#FFE9BF" class="sgrey12">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"  align='center' bgcolor="#FFE9BF" class="sgrey12"><input name="ads2" type="button" class="sblue" id="ads2" value="Calculate score" onclick='javascript:CALCREPORTsubmit(&quot;<?php echo $report_uid*$report_api_key ; ?>&quot;);' /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="top"><div id="chart_div" style="width: 880px; height: 550px;"></div></td>
  </tr>
  <tr>
    <td colspan="3"><span class="sgrey10">Source Predicted 2012 FSALDU (postal code) from Manifold Data Mining and interpreted by Quant Interpretations. No confidential information about any individual, households, organization or business has been obtained by Statistics Canada.*Legend: All households in Canada were ranked from 1-100 based on the propensity to meet the target consumer  attributes (using 6 digit postal code predicted data). A score above 50 means a household has a higher than the National average propensity to meet <span class="sgrey12">your target consumer attributes. </span></span></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>