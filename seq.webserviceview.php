
<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<script type='text/javascript' src='https://www.google.com/jsapi'></script>

<style type="text/css">

/*This css added by Urvashi */
#table1_wrapper {
    width: 90%;
}
/*code end */
    body {
        background-color: #FFF;
        margin: 0;
        padding: 0;
    }
    #wrapper {
        width:100%;
		height:620px;
        margin-left:auto;
        margin-right:auto;
        background-color:#666666;
    }
	#wrapper2 {
        width:100%;
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
  width: 100%;
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


error_reporting(0);
$pc_lon = -79;
$pc_lat = 44;
if (isset($_POST["store_uid"])) {	$report_store_uid = $_POST["store_uid"];} else $report_store_uid = 0;



include "db_connect.php";

$query = "SELECT * FROM amfd_stores WHERE store_uid = $report_store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $store_number = $row['store_number'];
					  $store_name = $row['store_name'];
					  $use_yn = $row['use_yn'];
					  $store_pc = $row['store_pc'];
					  $master_file = $row['master_file'];
					  $target_traits = $row['target_traits'];
					  $trait_name = $row['trait_name'];
					  $hh_count = $row['hh_count'];
					  $seq_deciles = $row['seq_deciles'];
					  $report_good_yn = 1;
				}				
			mysqli_free_result($result);
		}	

$now = new DateTime(); $change_date = $now->format('F Y');

$store_pc = str_replace(" ","",$store_pc);
$store_pc = strtoupper($store_pc);


$saved_vals_yn = 0;
include 'db_connect.php'; 
if($saved_vals_yn < 1) {

// required for target_formula
// $store_uid = get all postal codes to be scored
// $report_uid = used to link to temporary database value
// $var1_code = list of variables to be scored
// $var1_fullname_string = label showing variable that was scored

$store_uid = $master_file;
$report_uid = $store_uid + 10000;
$var1_code = $target_traits;
$var1_fullname_string = $trait_name;




	include 'db_connect.php';  include "target_formula.php";

	include 'db_connect_wg.php'; 

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
			
			/*
			// get postal codes of the top 20% to a max of 50000 hh and 5000 postal codes 					
			if($decile_counter < 2 && $temp_total_hh < 50000 && $pc_counter < 5000) {
				$pc_name2 .= "(" . $report_uid . ",'" . $row['PostCode'] . "'),";
				//$PostCodearray[] = 	$row['PostCode'];
			}
			
			// get postal codes of the top 20% to a max of 1000 to show on map
			if($decile_counter < 2 && $pc_counter < 1000) {
				//$pc_name2 .= "(" . $report_uid . ",'" . $row['PostCode'] . "'),";
				$PostCodearray[] = 	$row['PostCode'];
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
			*/
		}	
		/*
		$decile_score_array[] = $temp_decile_score/$temp_decile_hh;	
		$decile_score_list = $decile_score_list . "|" . $temp_decile_score/$temp_decile_hh;		
		mysqli_free_result($result);
	*/
	}
	
	/*
	$average_score_in_area = $aggregate_total_score / $total_households;
	//insert findings to amfd_savedvals decile, tier 1 - 10, average_score_in_area
	$decile_score_array[11] = $average_score_in_area;
	$decile_score_array[12] = $decile_cutoff;
	// ensure all elements in array are populated
	for ( $i = 0; $i <= 12; $i ++) {
	if($decile_score_array[$i] > 0) $mytemp = $decile_score_array[$i]; else $mytemp = 0;
	$decile_score_array[$i] = $mytemp;
	}
	*/
}

  ?>
 
<script type='text/javascript'>
function CSVsubmit() {
	
	window.open("ui_csv.php?report_api=<?php echo $report_uid;?>", "_blank")

}
</script>
 <?php


/* Code added by Urvashi On 28-3-2018, 10:28 AM Start here*/
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css" />

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">	
<meta name='viewport' content='width=device-width, initial-scale=1.0' />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="../../extensions/Editor/js/dataTables.editor.min.js">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js"></script>

 <script type="text/javascript">
 
 $(document).ready(function() {
 
 var report_uid = "<?php echo $report_uid;?>";
 var table = "<?php echo $temp_table_name;?>";
 var count="<?php echo $pc_count;?>";
 
    $('#table1').DataTable( {
    
    dom: 'Bfrtip',
        "paging":         true ,
        "searching": false,
           "iDisplayLength": 200,
           "scrollX":        "800px",
            "scrollY":       "500px",
       "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                className:'btn btn-primary',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf'
                ]
            }
        ],
    "ajax": {
        "contentType": "application/json",
        "url": "server_processing2.php",
        "type": "GET",
        "cache":"false",
        "data": { report_uid: report_uid,table:table,count:count}
    }
    } );
} );


/*$(document).ready(function() {

    $('#table1').DataTable( {
        dom: 'Bfrtip',
        "paging":         true ,
        "searching": false,
           "iDisplayLength": 200,
           "scrollX":        "1800px",
            "scrollY":       "560px",
       "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                className:'btn btn-primary',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf'
                ]
            }
        ],
    } );
} );  */   
</script>       
<body >
<div id="d1"></div>
<div class="align="center""> <?php echo "Store: " . $store_name . "<br>Variables Scored "; echo $var1_fullname_string . "<br><br>";
echo number_format($pc_count); echo " records identified and scored
<br><br>
";?>

  <table width="70%" class="display"  id="table1" border="0" cellspacing="0" cellpadding="5">
    
    <thead>
            <tr>
      <th class="bg-info">Rank</th>
      <th class="bg-info">Postal Code</th>
      <th class="bg-info">Total Score</th>
     
     <!-- <th class="bg-info">Demographics</th>
      <th class="bg-info">Shopping</th>
      <th class="bg-info">Spending</th>
      <th class="bg-info">Segmentation</th>
      <th class="bg-info">Home Improvement</th>
      <th class="bg-info">New home <br>Development</th>
      <th class="bg-info">Automotive</th>
      <th class="bg-info">Ethnicity</strong></th> -->
      <th class="bg-info">Dwellings Analyzed</th>
    </tr>
    Postal Code score (99 is best | 0 means no analyzed)
    
   </thead>

 </table>
</div>
     

</body>
</html>
<?php /* Code added by Urvashi On 28-3-2018, 10:28 AM End here*/ ?>