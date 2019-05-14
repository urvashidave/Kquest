CSV 1
<?php 

if (isset($_GET["report_api"])) {	$report_api = $_GET["report_api"];} else $report_api = 0;
$report_uid = $report_api;
echo "report_uid<br>"  . $report_uid;
	include 'db_connect_wg.php'; 

$query = "SELECT * FROM amfd_temp_scored WHERE report_uid = $report_uid";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
			// get demo score
			echo "1<br>" . $row['HH_TOT']; 
		}}
?>