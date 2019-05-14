
<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<script type='text/javascript' src='https://www.google.com/jsapi'></script>

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
	@media print {
    .pagebreak {page-break-after: always;}
	}
 .bg-info{
	background-color:#900c3f !important;
 color:white;
 }
	
.print_pages {
  width: 910px;
  height: 620px;
  background: #fff;
  margin: 25px 0 0 0;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}
.print_pages_cover {
  width: 910px;
  height: 600px;
  background: #fff;
  margin: 25px 0 0 0;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}
</style>
<?php 
$pc_lon = -79;
$pc_lat = 44;
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
if (isset($_POST["change_header"])) {	$change_header = $_POST["change_header"];} else $change_header = "Target Audience";



$now = new DateTime(); $change_date = $now->format('F Y');
if (isset($_POST["change_prepared"])) {	$change_prepared = $_POST["change_prepared"];} else $change_prepared = "Produced by: " . $user_firstname . " " . $user_lastname . " - " . $change_date;

$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_pc = $row['store_pc'];
				}				
			mysqli_free_result($result);
		}
$store_pc = str_replace(" ","",$store_pc);
$store_pc = strtoupper($store_pc);

$tbench_store_number = "";
$tbench_store_name = "Canada";
$query = "SELECT * FROM amfd_stores WHERE store_uid = $rbenchmark  ORDER BY store_number ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
	$tbench_store_number = $row['store_number'];
	$tbench_store_name = $row['store_name'];
}
}
if($rbenchmark < 15) {
	$tbench_store_number = "";
	$tbench_store_name = "Canada";
	if($rbenchmark == 1) $tbench_store_name = "British Columbia";
	if($rbenchmark == 2) $tbench_store_name = "Alberta";
	if($rbenchmark == 3) $tbench_store_name = "Saskatchewan";
	if($rbenchmark == 4) $tbench_store_name = "Manitoba";
	if($rbenchmark == 5) $tbench_store_name = "Ontario";
	if($rbenchmark == 6) $tbench_store_name = "Quebec";
	if($rbenchmark == 7) $tbench_store_name = "Atlantic";
	
	if($rbenchmark == 8) $tbench_store_name = "Western Prov.";
	if($rbenchmark == 9) $tbench_store_name = "PEI";
	if($rbenchmark == 10) $tbench_store_name = "New Brunswick";
	if($rbenchmark == 11) $tbench_store_name = "Npve Scotia";
	if($rbenchmark == 12) $tbench_store_name = "Newfoundland";
	
	
}


if (isset($_POST["change_title"])) {	$change_title = $_POST["change_title"];} else $change_title = "Store #" . $store_number . " ," . $store_name ;

$change_title2 = $change_title;
if (strlen($change_title2) > 50) {
    $change_title2a = substr($change_title2, 0, 50);
    $change_title2 = substr($change_title2a, 0, strrpos($change_title2a, ' ')) . "..."; 
}

include "target_formula.php";
include "db_connect.php";
$query = "SELECT * FROM amfd_reports WHERE report_uid = $report_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_number = $row['store_number'];
					  $user_company_and_name = $row['user_company'] . "|" . $row['user_firstname'] . " " . $row['user_lastname'];
					  $store_uid = $row['store_uid'];
					  $client_id = $row['client_id'];
					  $Sent_MFD_yn = $row['Sent_MFD_yn'];
					  $var1_code = $row['var1_code'];
				}				
			mysqli_free_result($result);
		}
		
$query = "SELECT * FROM amfd_company WHERE client_id = $client_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_code = $row['client_code'];
				}				
			mysqli_free_result($result);
		}
		
$pc_count_step = 998 /$pc_count;
$pc_count_step_counter = 999;
$LDUScorePairs2 = "";	
$client_code_user = $client_code . "|" . $user_company_and_name;
$pc_counter =0;



// soap to send file to MFD
//$client = new SoapClient("http://jxf.ca/QUANT/MFDws.cfc?wsdl"); 

include "db_connect_wg.php";

$query = "SELECT * FROM $temp_table_name WHERE report_uid = $report_uid ORDER BY (demo_score + bbm_score + sp_score + seg_score + hi_score + homes_score + auto_score  + eth_score) DESC";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo ":";
					if($pc_counter < 1) 
							{$LDUScorePairs = $row['PostCode'] .  "," . round($pc_count_step_counter) ; $pc_counter =1;}
					else{
							$LDUScorePairs = $LDUScorePairs = $LDUScorePairs . "|" . $row['PostCode'].  "," . round($pc_count_step_counter);	
							$LDUScorePairs2 = $LDUScorePairs2 . "|" . $row['PostCode'].  "," . ($row['Tot_score']);
					}
					$pc_count_step_counter = $pc_count_step_counter - $pc_count_step; 
				}				
			mysqli_free_result($result);
		}
	
$return = "nothing";
// old 'Username' => "hmsservice", 'Password' => "MFD4You!"


					
					/*	
						$client = new SoapClient("http://www.marketfocusdirect.ca/QUANT/MFDws.cfc?wsdl"); 
$return = $client->__soapCall("ReturnScoresToMFD", array(
                         'AuthenticationCode' => "MFD1234",
                         'Client' => $client_code,
                         'Store' => $store_number,
                         'StorePcode' => $store_pc,
                         'StoreScore' => "100",
                         'LDUScorePairs' => base64_encode($LDUScorePairs)
                        ));  						

	*/		
		
		$web_params = array(
                        'Authentication' => "MFD1234",
                         'Client' => $client_code,
                         'Store' => $store_number,
                         'StorePcode' => $store_pc,
                         'StoreScore' => "100",
                         'LDUScorePairs' => base64_encode($LDUScorePairs)
                        );  
								
$client = new SoapClient("http://www.marketfocusdirect.ca/QUANT/MFDws.cfc?wsdl"); 
$return = $client->__soapCall("ReturnScoresToMFD", array($web_params));  

		
if($return == "200 - OK") {

	mysqli_query($link,"UPDATE amfd_reports SET Sent_MFD_yn = 0 WHERE client_id = $client_id AND store_uid = $store_uid");
	mysqli_query($link,"UPDATE amfd_reports SET Sent_MFD_yn = 1 WHERE report_uid = $report_uid ");
	$sent_note_mfd = "Success !  This file will now be used for route targeting";

}
else {
$sent_note_mfd =  "Sorry an error occurred and the file was not processed properly.<br>Error code:
" . $return;

}

  ?>
 
 

    
<body >
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%"><span class="sgrey14"><span class="sblue"><?php echo $sent_note_mfd; ?></span><br />
        <br />
        <br />
    <input name="ads" type="button" class="sblue" id="ads" value="Back to Store" onClick="PICKSTOREsubmit(<?php echo $store_uid;?>);" />
        <input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid; ?>"  />
    </span><br />
<br /></td>
    <td width="50%" class="sgrey14" align='left'><p>Integration details:</p>
      <p>Client: <?php echo $client_code ?><br />
        StorePcode: <?php echo $store_pc ?><br />
        StoreScore: 100<br />
        LDUScorePairs: <?php echo "Encryted:";
		
		 ?> <br />
        
      <br />
      <br />
      <br />
      <br />
      <br />
      <label for="report_uid"></label></td>
  </tr>
</table>
     

</body>
</html>
	