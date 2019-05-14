<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<SCRIPT language="JavaScript">

function ROUTESTOREsubmit(val) {
	document.getElementById('store_selected').value = val;
	document.getElementById('next_page').value = "distributor_pg2.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 		
}

	
function CANCELsubmit() {
	document.getElementById('next_page').value = "ui_home.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 
}
	

</script>
<style>
.select_font_14 {
	font-size: 14px;
	font-weight: bold;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}
.container1 { width:440px; height:475px; overflow:scroll; }
.blue_font_12 {
	font-size: 12px;
	font-weight: bold;
	color: #147EA7;
}
.container2 { width:440px; height:450px; overflow:scroll; }

.table1 {
	width: 100%;
	height: 550px;
	display: block;
	overflow-y:scroll; 
}
.bg_color1 {
	background-color: #CEB39D;
}
 .black18 
 { 
 font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #333;
    font-size: 18px;
	font-weight: normal;
    padding: 0 0 9px;
}
.bg_colorred {
	background-color: #990033;
 margin-top:25px;
}
.select_font_14 {	font-size: 14px;
	font-weight: bold;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}
.regular_font_14 {	font-size: 14px;
	font-weight: normal;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}
.table680 {
	font-size:14px; 
	text-decoration:none; 
	color:#333;
	height: 680px;
	width: 900px;
	display:block;
	overflow-y:scroll; 
}
</style>
<?php
if (isset($_POST["delete_store"])) {	$delete_store = $_POST["delete_store"];} else $delete_store = 0;

if($delete_store > 0) {
	mysqli_query($link,"UPDATE amfd_stores SET use_yn = 3 WHERE store_uid = $delete_store ");
	
}

$found_stores = 0;
$good_stores = 0;
$client_reports = 0;

$rp_mapdetails = "6,43.65562655647711,-79.41560498730469,44.1503604797683,43.15678281096359,-78.66029492871094,-80.17091504589844";
$rp_mapdetails_array = explode(",", $rp_mapdetails);
$start_zoom = $rp_mapdetails_array[0];
	$start_lat = $rp_mapdetails_array[1];
	$start_lon = $rp_mapdetails_array[2];



$query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
				}				
			mysqli_free_result($result);
		}

$query = "SELECT * FROM amfd_company WHERE client_id = $client_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_reports = $row['client_reports'];
}				
		}
				
$query = "SELECT * FROM amfd_stores WHERE client_id = $client_id ";
	if ($result = mysqli_query($link, $query)) {
	
			while ($row = mysqli_fetch_assoc($result)) {
				$found_stores = 	$found_stores + 1;
				if($row['use_yn'] <1) {
				$good_stores = 	$good_stores + 1;
				$temp_store_pc = $row['store_pc'];
				$temp_store_pc = str_replace(' ', '', $temp_store_pc);
				$store_pc_array[]= preg_replace("/[^a-zA-Z0-9]+/", "", $temp_store_pc);
				}
			}
	}

$temp_counter =0;
$max_lat = 0;
$min_lat = 180;
$max_lon = 180;
$min_lon = -180;

mysqli_close($link);

include 'db_connect_wg.php';
 
for ( $count_dwi = 0; $count_dwi < sizeof($store_pc_array); $count_dwi ++) {	
$query = "Select lat, lon FROM c_geo WHERE PostCode = '$store_pc_array[$count_dwi]' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $temp_ethnic_lat = $row['lat'];
					  $temp_ethnic_lon = $row['lon'];
$PostCode =$store_pc_array[$count_dwi]; 
					$cust_toronto[] = "['" . $PostCode .  "', " .  $temp_ethnic_lat . ", " . $temp_ethnic_lon . ", " . $temp_counter . "],";
					$temp_counter = $temp_counter +1;
					if($temp_ethnic_lat > $max_lat) $max_lat = $temp_ethnic_lat;
					if($temp_ethnic_lat < $min_lat) $min_lat = $temp_ethnic_lat;
					if($temp_ethnic_lon < $max_lon) $max_lon = $temp_ethnic_lon;
					if($temp_ethnic_lon > $min_lon) $min_lon = $temp_ethnic_lon;
				}				
			mysqli_free_result($result);
		}
}

include 'db_connect.php';

$count_dwi2 = $count_dwi+1;
$cust_toronto[] = "['Blank', 0, 0, $count_dwi2]"; 
	
	$start_lat = ($max_lat+$min_lat) /2;
	$start_lon = ($max_lon+$min_lon) /2;
	$start_zoom = 4;
	$total_lat_on_diff = $max_lat-$min_lat+$min_lon-$max_lon;
	if($total_lat_on_diff < 50) $start_zoom = 5;
	if($total_lat_on_diff < 15) $start_zoom = 6;
	if($total_lat_on_diff < 10) $start_zoom = 7;
	if($total_lat_on_diff < 5) $start_zoom = 8;
	if($total_lat_on_diff < 3) $start_zoom = 9; 	
	if($total_lat_on_diff < 1) $start_zoom = 10;	

?>
<SCRIPT language="JavaScript">





</script>

    	<div class="col-md-12 " align="center">
    	  <table width="100%" border="0" >
    	    <tr>
    	      <td align="center"><h1 style="color: #900c3f !important;">Route Distribution</h1>
              <h1 style="color: #900c3f !important;">Step 1: Select Store</h1>
  </td>
  	      </tr>
  	    </table>
 		</div>

    
    
    	<div class="col-md-12 text-left ">
        <a class='btn btn-danger ' onclick='CANCELsubmit();'><i class='fa fa-undo pull-left'></i>Go back</a>
        </div>

  
<div class="container">    
 	<div class="row">
   	  

        <div class="col-md-12 table680" align="center">
        <input name="get_report_id" type="hidden" id="get_report_id" size="150" />
<input name="store_selected" type="hidden" id="store_selected" value=" "  />
<input name="delete_store" type="hidden" id="delete_store" value=" "  />
<input name="store_uid" type="hidden" id="store_uid" value=" "  />
        <div class="row">
          <table class="table table-hover "  >
            <tr >
        <th width="25%"    align="left" >Store Number</th>
        <th width="50%"  align="left" >Name</th>
        <th width="25%" >Select<br /> Store</th>
      </tr>
      <?php 

$query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
				}				
			mysqli_free_result($result);
		}
		
$query = "SELECT * FROM amfd_stores WHERE client_id = $client_id  AND use_yn = 0 ORDER BY store_number ";

	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				echo "<tr ><td align='left'>" . $row['store_number'] . "</td>";
				echo "<td align='left'>". $row['store_name'] . "</td>";				
				echo "<td><a class='btn btn-success' href='javascript:ROUTESTOREsubmit(" . $row['store_uid'] .");'><i class='fa fa-download pull-left'></i>SELECT</a></td></tr>";
				
			}				
		mysqli_free_result($result);
	}
	
		
?>
  </table>
    </div>


      </div>
  </div>
</div> 