<link rel='STYLESHEET' type='text/css' href='master_style.css'>



<script async defer
  src="https://maps.googleapis.com/maps/api/js?client=gme-marketfocus&v=3.30"></script>

<!--  original Google maps api from Brad - works <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZgwgaf7Tehvdma313gZ-684QizKPy-so&libraries=places,drawing,visualization" async defer></script>  -->
<SCRIPT language="JavaScript">

function DELETESTOREsubmit(val) {
//alert("Hi");
	var r = confirm("Are you sure you want to delete");
	if (r == true) {
	document.main_form.target = "_top";
	document.getElementById('delete_store').value = val;
	document.getElementById('next_page').value = "ui_homema.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 
	}
}
function STOREprofilesubmit(val) {
document.getElementById('store_selected').value = val;
document.getElementById('next_page').value = "ui_tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit(); 		
}


</script>
<style>

.title_font {	font-size: 20px;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;

}
.container1 { width:440px; height:475px; overflow:scroll; }
.blue_font_12 {
	font-size: 12px;
	font-weight: bold;
	color: #147EA7;
}
.select_font_14 {
	font-size: 14px;
	font-weight: normal;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}
 .black18 
 { 
 font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #333;
    font-size: 18px;
	font-weight: normal;
    padding: 0 0 9px;
}
.container2 { width:440px; height:450px; overflow:scroll; }

.table1 {
	width: 100%;
	height: 450px;
	display: block;
overflow-y:scroll; 
}
.bg_color1 {
	background-color: #CEB39D;
}
.bg_colorblue {
	background-color: #147EA7;
}

</style>
<?php
if (isset($_POST["delete_store"])) {	$delete_store = $_POST["delete_store"];} else $delete_store = 0;

if($delete_store > 0) {
	mysqli_query($link,"UPDATE amfd_stores SET use_yn = 3 WHERE store_uid = $delete_store ");
	
}


$rp_mapdetails = "6,43.65562655647711,-79.41560498730469,44.1503604797683,43.15678281096359,-78.66029492871094,-80.17091504589844";
$rp_mapdetails_array = explode(",", $rp_mapdetails);
$start_zoom = $rp_mapdetails_array[0];
	$start_lat = $rp_mapdetails_array[1];
	$start_lon = $rp_mapdetails_array[2];

$found_stores = 0;
$good_stores = 0;
$client_reports = 0;

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

echo "<br /><br />";
$temp_counter =0;
$max_lat = 0;
$min_lat = 180;
$max_lon = 180;
$min_lon = -180;
include 'db_connect_wg.php'; 

for ( $count_dwi = 0; $count_dwi < sizeof($store_pc_array); $count_dwi ++) {
	$temp_pc_to_find = $store_pc_array[$count_dwi];	
$query = "Select lat, lon FROM c_geo WHERE PostCode = '$temp_pc_to_find' ";
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


function initialize() {
	
	var image = 'green_pin.png';
	
    var latlng = new google.maps.LatLng(<?php echo $start_lat; ?>, <?php echo $start_lon; ?>);
    var myOptions = {
      zoom: <?php echo $start_zoom; ?>,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.HYBRID,
	  navigationControl: true,
	  scaleControl: true

    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

var locations5 = [
	<?php for ( $count_dwi = 0; $count_dwi < sizeof($cust_toronto); $count_dwi ++) {	
	 echo $cust_toronto[$count_dwi];
	} ?>
    
    ];
	

	


var markers = [];

 for (i5 = 0; i5 < locations5.length; i5++) {  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations5[i5][1], locations5[i5][2]),
		animation: google.maps.Animation.DROP,
		
        map: map
      });
markers.push(marker);
    } 
	
}



</script>

<body  onLoad='initialize();'>
	<div class="row bg_colorblue">
    	<div class="col-md-12" align="center">
    	  <table width="100%" border="0" class="Example_E1">
    	    <tr>
    	      <td align="center" class="swhite24"><strong>   	          MARKET &amp; CUSTOMER INSIGHTS
   	          <span class="swhite14" style="font-size:18px;"><br />
   	          Insights provide an in-depth knowledge and understanding 
store market area <br />
and customer bases across a wide 
range of analytic behaviours<br />&nbsp;
   	          </span></strong></td>
  	      </tr>
  	    </table>
 		</div>
 	</div>

  <div class="row">
    	<div class="col-md-12 "><h4><div id="proc_div" style="display: none;"><img src="please_wait.gif" width="572" height="304" alt="processing"></div><br />
        </h4>
        </div>
  </div>   
        
<div class="container">    
 	<div class="row">
   	  
      
        <div class="col-md-4" align="center">
       <strong><span class="title_font">Select a Geographic  Region</span></strong><br />
       </td>
  </tr>
</table>
<input name="get_report_id" type="hidden" id="get_report_id" size="150" />
<span class="select_font_14">
<input name="store_selected" type="hidden" id="store_selected" value=" "  />
</span><span class="select_font_14">
<input name="delete_store" type="hidden" id="delete_store" value=" "  />
<input name="store_uid" type="hidden" id="store_uid" value=" "  />
</span>

	  <table class="table table-hover table1" width="100%">
	    <tr>
	      <td class='select_font_14'>ATLANTIC</td>
        </tr>
	    <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("898")>Newfoundland</a></td>
	      </tr>
	    <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("899")>Nova Scotia</a></td>
        </tr>
	    <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("900")>P.E.I.</a></td>
        </tr>
	    <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("901")>New Brunswick</a></td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td class='select_font_14'>QUEBEC</td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("935")>Eastern Quebec (G)</a></td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("936")>Montreal - Metro (H)</a></td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("937")>Western Quebec (J)</a></td>
        </tr>
         <tr>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td class='select_font_14'>ONTARIO</td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("917")>Eastern Ontario (K)</a></td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='select_font_14' href=javascript:STOREprofilesubmit("925")>City: Ottawa</a></td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("918")>Central Ontario (L)</a></td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("912")>Toronto - Core (M)</a></td>
        </tr>
        <tr>
	        <td class='select_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='select_font_14' href=javascript:STOREprofilesubmit("922")>City: GTA - Greater Toronto Area</a></td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("940")>SW Ontario (N)</a></td>
        </tr>

        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("941")>Northern Ontario (P)</a></td>
        </tr>
        <tr>
	      <td>&nbsp;</td>
        </tr>
        <tr>
	      <td class='select_font_14'>WESTERN</td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("905")>Manitoba</a></td>
        </tr>
         <tr>
	      <td class='select_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='select_font_14' href=javascript:STOREprofilesubmit("927")>City: Winnipeg</a></td>
        </tr>
	    <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("906")>Saskatchewan</a></td>
        </tr>
	    <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("907")>Alberta</a></td>
        </tr>
         <tr>
	      <td class='select_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='select_font_14' href=javascript:STOREprofilesubmit("938")>City: Calgary</a></td>
        </tr>
	    <tr>
	      <td class='select_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='select_font_14' href=javascript:STOREprofilesubmit("939")>City: Edmonton</a></td>
        </tr>
	    <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("908")>British Columbia</a></td>
        </tr>
        <tr>
	      <td class='select_font_14' align='left'>&nbsp; &nbsp;&nbsp;<a class='select_font_14' href=javascript:STOREprofilesubmit("929")>City: GVA - Greater Vancouver Area</a></td>
        </tr>
	    <tr>
	      <td class='select_font_14' align='left'><a class='select_font_14' href=javascript:STOREprofilesubmit("910")>All Territories</a></td>
        </tr>
        </tr>
	   
	    </table>
      <span class="pbody12">(__) regions by first digit of postal code </span>
      
      <strong><span class="title_font"><br>
      </span></strong></div>
      <?php
	  
$add_button_text = 'onclick=TRADEAREAsubmit("blue"); value="Add new Store Trade Area or Customer Database"';
if($client_reports > 0) {
	if($good_stores >= $client_reports || $found_stores > ($client_reports + 25) ) {
		$add_button_text = "value= 'Call admin to add store'";
	}
}

	  ?>
      
      
      
  <div class="col-md-8" align="center"><input name="AddStore" type="button" class="btn btn-success btn-lg Example_E1" <?php echo $add_button_text; ?>/>
    <br />
    <br /><strong><span class="title_font"><br>
    Select a Store Market Area</span></strong>
    <table class="table table-hover table1" width="100%" >
      <tr class="sgrey12">
        <th  align="left" valign="bottom">Store Number</th>
        <th width="300"  align="left" valign="bottom">Name </th>
        <th  align="left" valign="bottom">View</th>
        <th  align="left" valign="bottom">Delete</th>
      </tr>
      <?php 
include 'db_connect.php'; 
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
				
				echo "<tr class='select_font_14'><td class='select_font_14' align='left'><a class='select_font_14' href='javascript:STOREprofilesubmit(" . $row['store_uid'] . ");'>" . $row['store_number'] . "</a></td>";
				echo "<td align='left'><a class='select_font_14' width='200' align='left' href='javascript:STOREprofilesubmit(" . $row['store_uid'] . ");'>" . $row['store_name'] . "</a></td>";
			echo "<td align='center'><input type='button' class='btn btn-success btn-xs' onclick= 'javascript:STOREprofilesubmit(" . $row['store_uid'] . ");' value='View'/></td>";
				
				echo "<td width='30' align='center'><input type='button' class='btn btn-danger btn-xs' onclick= 'javascript:DELETESTOREsubmit(" . $row['store_uid'] . ");' value='X'/>
				</td></tr>";
				
			}				
		mysqli_free_result($result);
	}
	
		
?>
    </table>
   
<div class="Example_E1" id="map_canvas" style="width: 100%; height: 250px;"></div>
         <i class="fa fa-bullseye fa-lg"></i>

	  </div>
	</div>
</div> 