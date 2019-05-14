
<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
    body {
        background-color: #FFF;
        margin: 0;
        padding: 0;
		overflow-x:hidden;
    }
	table,.btn ,h5,.h5{
	font-size:18px !important;
}


td,th,tr{
	text-align:center;
}
	table td{
		text-align:center;
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

<style>
input[type=checkbox] {
  transform: scale(1.4);
}
.h-30px{height: 30px; }
.m-r-10px{ margin-right:10px; }
.m-b-10px{ margin-bottom:10px; }
.m-b-15px{ margin-bottom:15px; }
.m-b-20px{ margin-bottom:20px; }
.w-5-pct{ width:5%; }
.w-7-pct{ width:7%; }
.w-12{ width:8.3%; }
.w-10-pct{ width:10%; }
.w-15-pct{ width:15%; }
.w-20-pct{ width:20%; }
.w-25-pct{ width:25%; }
.w-30-pct{ width:30%; }
.w-35-pct{ width:35%; }
.w-40-pct{ width:40%; }
.w-45-pct{ width:45%; }
.w-50-pct{ width:50%; }
.w-55-pct{ width:55%; }
.w-60-pct{ width:60%; }
.w-65-pct{ width:65%; }
.w-70-pct{ width:70%; }
.w-75-pct{ width:75%; }
.w-80-pct{ width:80%; }
.w-85-pct{ width:85%; }
.w-90-pct{ width:90%; }
.w-95-pct{ width:95%; }
.w-100-pct{ width:100%; }
.display-none{ display:none; }
.padding-bottom-2em{ padding-bottom:2em; }
.width-30-pct{ width:30%; }
.width-40-pct{ width:40%; }
.overflow-hidden{ overflow:hidden; }
.margin-right-1em{ margin-right:1em; }
.right-margin{ margin:0 .5em 0 0; }
.margin-bottom-1em { margin-bottom:1em; }
.margin-zero{ margin:0; }
.text-align-center{ text-align:center; }
.background_grey {background-color: #EAEAEA;}
.red_font {color:#F00;font-size:20px;}
.font_36 { font-size:36px;}
.f10 { font-size:10px;}
.f12 { font-size:12px;}

</style>
<?php 
ini_set('max_execution_time', 300);
date_default_timezone_set('America/Toronto');
	$current_time = date('Y-m-d H:i:s');


	
if (isset($_POST["report_uid"])) {	$report_uid = $_POST["report_uid"];} else $report_uid = 0;
if (isset($_POST["input_selected_carriers"])) {	$input_selected_carriers = $_POST["input_selected_carriers"];} else $input_selected_carriers = 0;
if (isset($_POST["input_PK_ID"])) {	$input_PK_ID = $_POST["input_PK_ID"];} else $input_PK_ID = 0;
if (isset($_POST["input_selected_distribution"])) {	$input_selected_distribution = $_POST["input_selected_distribution"];} else $input_selected_distribution = 0;
if (isset($_POST["input_quantity"])) {	$input_quantity = $_POST["input_quantity"];} else $input_quantity = 0;

/*
$report_uid = 1000;
$input_selected_carriers = "0000,5103,5144,5148,5178,5221,5270,5271,5288";
$input_PK_ID = 10552;
$input_selected_distribution = "0000,TMC,MON,H,|0000,TMC,MON,,A|";
$input_quantity = 1000;

*/
	$route_list_array = array();
	$route_list_array['input_PK_ID'] = $input_PK_ID;	
	$route_list_array['input_quantity'] = $input_quantity;	
	$route_list_array['input_selected_distribution'] = $input_selected_distribution;	
	
	
	$json_post_encode = json_encode($route_list_array);
	$json_post_decode = json_decode($json_post_encode, true);
	
	
	

$store_number = "";
$var1_fullname = "";
$user_firstname = "";
$user_lastname = "";
$var1_fullname_string = "";
$store_name = "";

//include "db_connect.php";
include "../db_connect.php"; // for testing
/*
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
*/

$store_uid = $report_uid;
$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $client_id = $row['client_id'];
					   $store_name = $row['store_name'];
						$store_number = $row['store_number'];
					   $var1_code = $row['target_traits'];
					  	$var1_fullname = $row['trait_name'];
						$original_store_uid = $row['master_file'];
					   $report_good_yn = 1;
				}				
			mysqli_free_result($result);
		}
		
		
if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					   $original_store_uid = $row['master_file'];
					   $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
				}				
			mysqli_free_result($result);
		}
}
if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					   $original_store_uid = $row['master_file'];
					   $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
				}				
			mysqli_free_result($result);
		}
}
if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					   $original_store_uid = $row['master_file'];
					   $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
				}				
			mysqli_free_result($result);
		}
}
				
$query = "SELECT * FROM amfd_savedvals WHERE report_uid = 0 and store_uid = $store_uid and agg_name ='mfd_homes' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $mfd_homes_list = $row['agg_list'];
				}				
			mysqli_free_result($result);
		}	
$max_homes = 0;
$mfd_homes_array = explode(",", $mfd_homes_list);
$max_homes = $mfd_homes_array[3]; 

$query = "SELECT * FROM amfd_company WHERE client_id = $client_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_code = $row['client_code'];
				}				
			mysqli_free_result($result);
		}


$now = new DateTime(); $change_date = $now->format('F Y');


$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_pc = $row['store_pc'];
				}				
			mysqli_free_result($result);
		}
$store_pc = str_replace(" ","",$store_pc);
$store_pc = strtoupper($store_pc);

?>
 

    
<body >
<div class="container">  
  
	<div class="row" id="div-top_summary">
    
  		<div class="col-md-12 " align="center">
          	<table width="100%" border="0" >
            	<tr>
                  	<h1 style="color: #900c3f !important;">Distributors Found</h1>
      				</td>
              	</tr>
                <tr>
                  	<td width="50%" align="center">
                    
                    
                    <h5>Store: <?php echo $store_number . " " . $store_name; ?></h5>
                    <h5>Targeting Attributes: <?php echo $var1_fullname; ?></h5>
                    <h5>Quantity: <?php echo $input_quantity; ?></h5>
      				</td>
                  	
           	  </tr>
         	</table>
    	</div>
          
          
      		<div class="col-md-12 " align="center"> <p>&nbsp;</p> </div> 
      
       		<div class="col-md-6 " align="center">  
              	<h3 class="red_font" id="process_note"></h3>
                <img id="div_process_image" src="load.gif" width="10%" class="width_100p height_100p"> 
          	</div>
          	</div>   

</div>  
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
            <div class="col-md-12 table680" id="sp2_results" align="center"> 
             	<div id="route_table-table"></div>
             
             </div> 
           
  
 
<?php 
date_default_timezone_set("America/Toronto");

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">	
<meta name='viewport' content='width=device-width, initial-scale=1.0' />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js"></script>

<script language="javascript">




$(document).ready( function() {
	
	$('#step5').addClass('btn-secondary'); 
	$('#step5').removeClass('btn-success'); 
	$("#div_process_image").show();
	$("#step5").attr("disabled", true);
	//$('#process_note').text('PROCESSING ...');
	
	
	$.post("http://marketfocusdirect.ca/kquestsolutions/sp2_v1.php",<?php echo $json_post_encode; ?> , function (data,status) {
			console.log(data);
			console.log(status);
			if(status == 'success') {
				
				$("#div_process_image").hide();
				$('#process_note').text('');
				$("#sp2_results").show();

				var route_table = "<table  id='example' width='100%' class='stripe display nowrap'>";
					route_table += "<thead><tr style='background-color:#900C3F;color: white;'><th><center>Line</center></th>";
					route_table += "<th>MFDCODE</th>";
					route_table += "<th><center>DISTRIBUTOR</center></th>";
					route_table += "<th><center>ROUTE</center></th>";
					route_table += "<th><center>PRIMEFSA</center></th>";
					route_table += "<th><center>MARKET</center></th>";
					route_table += "<th><center>HOMES</center></th>";
					route_table += "<th><center>APTS</center></th>";
					route_table += "<th><center>AVG_SCORE</center></th>";
					route_table += "<th><center>QTY</center></th>";
					route_table += "<th><center>ACCUM_QTY</center></th>";
					route_table += "<th><center>SELECTED</center></th></tr></thead><tbody>";
												
					for (i = 0; i < data.routes.length; i++) { 
						route_table += data.routes[i];
					}
					route_table += "</table></tbody>";
					$("#route_table-table").html(route_table);	
				
					load_table();  
					
			} else {
				console.log('FAIL');
			}
	

	});

function load_table() {
	
var table = $('#example').DataTable({
	dom: 'Bfrtip',	
   "paging": true,
   "scrollX": "auto",
	"scrollY": "500px",	
   "pageLength": 1000,			
	"searching": true,
buttons: [
            {
                extend: 'excelHtml5',
                title: '<?php echo $store_number . "_" . $store_name."_".date ( "d-m-Y_h-i-s a" ); ?>'
            },
            {
                extend: 'csvHtml5',
                title: '<?php echo $store_number . "_" . $store_name."_".date ( "d-m-Y_h-i-s a" ); ?>'
            }
		]
}); 


}


	
});	
</script>


</body>
</html>
	