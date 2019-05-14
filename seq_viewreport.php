<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<style>

.sbutton{
color:#990033;
}
.target-red {
    background-color: #900C3F;
    color: white !important;
    font-family: "Roboto Condensed","Lucida Grande",Helvetica,!sans-serif !important;
    font-weight: bold !important;
    font-size: 15px;
}

</style>
<script language="JavaScript">
function SEQSAVEsubmit() {
	document.getElementById('next_page').value = "seq_savepc.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 	
}

</script>

<?php 
if (isset($_POST["store_uid"])) {	$store_uid = $_POST["store_uid"];} else $store_uid = " ";
if (isset($_POST["list_vars"])) {	$list_vars = $_POST["list_vars"];} else $list_vars = " "; // var_checked_string - list of vars to target
if (isset($_POST["store_pc"])) {	$store_pc = $_POST["store_pc"];} else $store_pc = " ";
$report_uid = 0;
if (isset($_POST["target_amount"])) {	$target_amount = $_POST["target_amount"];} else $target_amount = "0"; // target hh count
if (isset($_POST["max_hh_count"])) {	$max_hh_count = $_POST["max_hh_count"];} else $max_hh_count = "0"; // target hh count



include "db_connect.php";

$query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
					  $user_firstname = $row['user_firstname'];
					  $user_lastname = $row['user_lastname'];
				}				
			mysqli_free_result($result);
		}
$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_name = $row['store_name'];
					  $store_number = $row['store_name'];  
					  $master_file = $row['master_file'];  
					  $target_traits = $row['target_traits'];  
					  $target_hh = $row['target_hh']; 
					  $use_yn = $row['use_yn']; 
					  $store_notes = $row['store_notes']; 
				}				
			mysqli_free_result($result);
		}
	
$store_name = ltrim($store_name,"Targeted: "); // remove 'Targeted: " from name in case user is refining a report - this prevents the Targeted: to be repeated with multiple sequantial targeting
		
$vars_array = explode("|", $list_vars);	
$vars_number = sizeof($vars_array);

$var1_fullname_saved = ""; $tot_score_db_string = ""; $var1_fullname_string = ""; $loop_counter = 0;	

for ($i=0; $i<sizeof($vars_array); $i++) {
	$query = "SELECT * FROM amfd_retailers WHERE var_code = '$vars_array[$i]' ";

			if ($result = mysqli_query($link, $query)) {
					while ($row = mysqli_fetch_assoc($result)) {
						$bbm_db1 = $row['bbm_db'];
						  $var_cat1 = $row['var_cat'];
						  $var_name1 = $row['var_name'];
						  $var_name2 = $row['var_long'];
						  
						  $var1_fullname_string = $var1_fullname_string . $var_name2 . ": " . $var_name1 . "<br />";
						  if($loop_counter <1) $var1_fullname_saved = $var_name1;
						  else $var1_fullname_saved = $var1_fullname_saved . ", " . $var_name1;										  
						  $loop_counter = $loop_counter + 1;
				}				
			
	}mysqli_free_result($result);
}
//echo 		$var1_fullname_saved;				
// $list_vars 			list of vars in | format
// $var1_fullname_saved		full names of filter
		
	$today_date = date("j F Y"); 
	$today_time = date("g:i a"); 
	$today_day = date("j");
	
/* // save new reort uid

mysqli_query($link,"INSERT INTO amfd_reports (client_id, store_uid, user_company, user_firstname, user_lastname, store_number, store_name, var1_code, var1_fullname, report_date, report_time) VALUES ($client_id, $store_uid, '$user_company', '$user_firstname', '$user_lastname', '$store_number', '$store_name', '$list_vars', '$var1_fullname_saved', '$today_date', '$today_time') ");
				
$query = "SELECT report_uid FROM amfd_reports WHERE store_uid = $store_uid and report_date = '$today_date' and report_time = '$today_time' ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							  $report_uid = $row['report_uid'];
						}				
					mysqli_free_result($result);
				}
				
*/				

// end process if report is unique
	  


$var1_code = $list_vars;
$var1_fullname = $var1_fullname_saved;
$report_uid = $store_uid + 10000;

include "target_formula.php";



// get postal codes of the top 20%
	$pc_count_step = 998 /$pc_count;
	$top_pc_cutoff = round($pc_count * 0.2);
	$LDUScorePairs2 = "";	
	$pc_name2 = "";	
	$decile_cutoff = $total_households * 0.1;
	$decile_counter = 0;
	$household_counter = 0;
	$pc_counter = 0;
	$temp_decile_score = 0;
	$temp_decile_denominator = 0;
	$temp_decile_hh = 0;
	$temp_total_hh = 0;
	$aggregate_total_score = 0;
	$decile_score_list = "";
	
	$query = "SELECT * FROM $temp_table_name WHERE report_uid = $report_uid ORDER BY (demo_score + bbm_score + sp_score + seg_score + hi_score + homes_score  + auto_score + eth_score) DESC";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
			// get demo score
			$temp_total_score = $row['demo_score'] + $row['bbm_score'] + $row['sp_score'] + $row['seg_score'] + $row['hi_score'] + $row['homes_score'] + $row['auto_score'] + $row['eth_score'] ;
			// running total of score * households	
			$temp_decile_score = $temp_decile_score + ($temp_total_score * $row['HH_TOT']) ;
			// running total of householods	
			$temp_decile_hh = $temp_decile_hh + $row['HH_TOT'];
			$temp_total_hh = $temp_total_hh + $row['HH_TOT'];
			$pc_counter = $pc_counter +1;
			// all scores 
			$aggregate_total_score = $aggregate_total_score + ($temp_total_score * $row['HH_TOT']); 
			$pc_name2 .= "(" . $report_uid . ",'" . $row['PostCode'] . "'," . $store_uid . "," . $temp_total_score . "," . $today_day . "," . $row['HH_TOT'] . "),";
			
			// get postal codes array for insert in amfd_seq_pc			
			if($pc_counter > 5000) {
				$pc_name2 = rtrim($pc_name2, ",");
				$pc_insert_list[] =  $pc_name2;
				$pc_counter = 0;
				$pc_name2 = "";
			}
			
			
		
		
		// save top 20 percent of postal codes
			// reach next decile				
			if($decile_cutoff < $temp_decile_hh) {
				$decile_score_array[] = $temp_decile_score/$temp_decile_hh;
				$decile_score_list = $decile_score_list . "|" . $temp_decile_score/$temp_decile_hh;	
				$decile_counter = $decile_counter + 1;
				$temp_decile_score = 0;
				$temp_decile_hh = 0;
			}
		}	
		$decile_score_array[] = $temp_decile_score/$temp_decile_hh;	
		$decile_score_list = $decile_score_list . "|" . $temp_decile_score/$temp_decile_hh;		
		mysqli_free_result($result);
	}
	
	$pc_name2 = rtrim($pc_name2, ",");
	$pc_insert_list[] =  $pc_name2;
	
	$seq_targeting_decile_list = "";
	$average_score_in_area = $aggregate_total_score / $total_households;
	//insert findings to amfd_savedvals decile, tier 1 - 10, average_score_in_area
	$decile_score_array[11] = $average_score_in_area;
	$decile_score_array[12] = $decile_cutoff;
	// ensure all elements in array are populated
	for ( $i = 0; $i <= 12; $i ++) {
		if($decile_score_array[$i] > 0) $mytemp = $decile_score_array[$i]; else $mytemp = 0;
		$decile_score_array[$i] = $mytemp;
		$seq_targeting_decile_list = $seq_targeting_decile_list . $mytemp . ",";
	}
$seq_targeting_decile_list = rtrim($seq_targeting_decile_list, ",");

mysqli_query($link,"DELETE  from amfd_seq_pc WHERE today_day < $today_day "); // delete older
mysqli_query($link,"DELETE  from amfd_seq_pc WHERE today_day > $today_day "); // delete newer (in case run at end of month)
mysqli_query($link,"DELETE  from amfd_seq_pc WHERE store_uid = $report_uid "); // delete other versions of this store

for ( $i = 0; $i <= sizeof($pc_insert_list); $i ++) {
	$temp_to_insert = $pc_insert_list[$i];
	$temp_to_insert = rtrim($temp_to_insert, ",");
		mysqli_query($link,"INSERT INTO amfd_seq_pc (store_uid, PostCode, master_uid, tot_score, today_day, hh_tot) VALUES $temp_to_insert ");   // insert PostCode and score

}

$roi_avgscore = $average_score_in_area;  // 










	?>		

<script type="text/javascript">
   google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
  
  
    ['Decile', 'Score', 'Average'],
['Top',<?php echo number_format($decile_score_array[0]); ?>, <?php echo $average_score_in_area;?>],	
['2',<?php echo number_format($decile_score_array[1]); ?>, <?php echo $average_score_in_area;?>],
['3',<?php echo number_format($decile_score_array[2]); ?>, <?php echo $average_score_in_area;?>],
['4',<?php echo number_format($decile_score_array[3]); ?>, <?php echo $average_score_in_area;?>],
['5',<?php echo number_format($decile_score_array[4]); ?>, <?php echo $average_score_in_area;?>],
['6',<?php echo number_format($decile_score_array[5]); ?>, <?php echo $average_score_in_area;?>],
['7',<?php echo number_format($decile_score_array[6]); ?>, <?php echo $average_score_in_area;?>],
['8',<?php echo number_format($decile_score_array[7]); ?>, <?php echo $average_score_in_area;?>],
['9',<?php echo number_format($decile_score_array[8]); ?>, <?php echo $average_score_in_area;?>],
['Bottom',<?php echo number_format($decile_score_array[9]); ?>, <?php echo $average_score_in_area;?>]


  ]);

  var options = {
	title : 'Score by Decile',
    vAxis: {title: "Score"},
    hAxis: {title: "Decile"},
    seriesType: "bars",
    series: {1: {type: "line"}}
  };

  var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
  
</script>
 <input name="store_uid" type="hidden" id="store_uid" value="<?php echo $store_uid; ?>"  />
  <input name="list_vars" type="hidden" id="list_vars" value="<?php echo $list_vars; ?>"  />
  <input name="report_uid" type="hidden" id="report_uid" value="<?php echo $report_uid; ?>"  />
    <input name="seq_decile_list" type="hidden" id="seq_decile_list"  />
<input name="var1_fullname_saved" type="hidden" id="var1_fullname_saved" value="<?php echo $var1_fullname_saved; ?>"  />
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" valign="top"><span class="psub2"><br />Original Store/region:<br />  
      <?php echo $store_name; ?> - <?php echo $store_notes; ?><br /><br />
Targeting variables  (<?php echo sizeof($vars_array); ?> selected)<br />
<?php echo $var1_fullname_saved; ?>
    </span></td>
    <td width="50%" align="left" valign="top">
    <span class="sbutton">
<br />
 Select Households for targeting <span class="sgrey12">(Maximum <?php echo round($total_households); ?>)</span><br />
<input name="target_amount" type="text" class="sbutton" id="target_amount" value="<?php echo round($total_households * 0.2); ?>" size="12"  /><input name="seq_name" type="hidden" class="sbutton" id="seq_name" value="<?php echo "Targeted: " . $store_name; ?>" size="50"  />
    </span>
    <span class="psub2"><br />
        <br />
        <input name="UPseqsubmit3" type="button" class="target-red" id="UPseqsubmit3" value="Save Sequential Target"  onclick="SEQSAVEsubmit();" />
       
        
    </span></p></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <span class="psub2"><br />
    <br />
    Chart shows score by Decile with 
    <?php echo number_format($total_households * 0.1); ?> households per decile <br />
    (select householdsfor targeting before continuing)</span>
    <div id="chart_div" style="width: 950px; height: 550px;"></div></td>
  </tr> 

</table>
<script language="javascript">
document.getElementById('seq_decile_list').value = "<?php echo $seq_targeting_decile_list; ?>";
</script>