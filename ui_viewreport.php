<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<style>
.sblue,.sbutton{
color:#900c3f !important;

}

</style>
<?php 
if (isset($_POST["store_uid"])) {	$store_uid = $_POST["store_uid"];} else $store_uid = " ";
if (isset($_POST["get_report_id"])) {	$get_report_id = $_POST["get_report_id"];} else $get_report_id = " ";
if (isset($_POST["store_pc"])) {	$store_pc = $_POST["store_pc"];} else $store_pc = " ";
$report_uid = 0;

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
					  $store_number = $row['store_number'];
					  $store_name = $row['store_name'];
					  $store_pc = $row['store_pc'];
				}				
			mysqli_free_result($result);
		}
		
$vars_array = explode("|", $get_report_id);	
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
										  //$tot_score_db_string = $tot_score_db_string . "+ " . $row['bbm_db'] . "." . $vars_array[$i] . "* " . $var_weighting ; 
										  $var1_fullname_string = $var1_fullname_string . $var_name2 . ": " . $var_name1 . "<br />";
										  if($loop_counter <1) $var1_fullname_saved = $var_name1;
										  else $var1_fullname_saved = $var1_fullname_saved . ", " . $var_name1;										  
										  $loop_counter = $loop_counter + 1;
								}				
							
						}mysqli_free_result($result);
}
//echo 		$var1_fullname_saved;				
// check if user pressed refresh or report has already been run
$view_report_unique = 1;
$query = "SELECT report_uid FROM amfd_reports WHERE store_uid = $store_uid and var1_code = '$get_report_id' and use_yn < 3 ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $report_uid = $row['report_uid'];
					  $view_report_unique = 0;					
				}				
			mysqli_free_result($result);
		}
		
// START IF STATEMENT new report
if($view_report_unique >0) {

	$today_date = date("j F Y"); 
	$today_time = date("g:i a"); 
	
		// save report and get report_uid

				mysqli_query($link,"INSERT INTO amfd_reports (client_id, store_uid, user_company, user_firstname, user_lastname, store_number, store_name, var1_code, var1_fullname, report_date, report_time) VALUES ($client_id, $store_uid, '$user_company', '$user_firstname', '$user_lastname', '$store_number', '$store_name', '$get_report_id', '$var1_fullname_saved', '$today_date', '$today_time') ");
				
$query = "SELECT report_uid FROM amfd_reports WHERE store_uid = $store_uid and report_date = '$today_date' and report_time = '$today_time' ";
				if ($result = mysqli_query($link, $query)) {
						while ($row = mysqli_fetch_assoc($result)) {
							  $report_uid = $row['report_uid'];
						}				
					mysqli_free_result($result);
				}
				
				
} 
// end process if report is unique

// START IF STATEMENT new report
if($view_report_unique >0 && $report_uid > 0) $report_status = "<span class='sblue'>
    Report created successfully to analyze:</span><br />" . $var1_fullname_string;
if($view_report_unique <1 && $report_uid > 0) $report_status = "That report has already been created and ready for analysis.<br />  <span class='sblue'>View report number: " . $report_uid . " </span>";
if($view_report_unique <1 && $report_uid < 1) $report_status = "<span class='sblue'>Sorry, we were unable to generate that report.  Please try again</span>";

?>

<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%"><span class="sbutton">Store: <?php echo $store_number; ?><br />
      <?php echo $store_name; 
	  // END IF STATEMENT to update amfd_pcscored 
$pc_lon = -79;
$pc_lat = 44;

include "db_connect_wg.php";


// get store location lat and lon
$query = "SELECT * FROM c_geo WHERE PostCode = '$store_pc' ";
	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				 $pc_lat = $row['lat'];
				 $pc_lon = $row['lon'];
			}				
		mysqli_free_result($result);
	}

	?></span><br />
      <br />
      <br />
      <br />
      <br /></td>
    <td width="50%" class="sgrey14" align='left' ><br />
     <?php echo $report_status ; ?>
       <br />
      <br />
      <label for="report_uid"></label>
      <input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid; ?>"  />
      <input name="report_uid" type="hidden" id="report_uid" value="<?php echo $report_uid; ?>"  />
      <br />
      <input name="ORDERCSV2" type="button" class="sblue" id="ORDERCSV2" onclick="PICKSTOREsubmit('<?php echo $store_uid; ?>')" value="Click here to continue" />
      </span></td>
  </tr>
</table>
