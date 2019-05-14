<?php
$color = $_POST['next_page_color'];
if($color=="red"){?>

<style>
.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #990033;
}
.red:hover {
    color: #b74c70;
}
.stitle {

	color: #990033;

}
.sreseller {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #990033;
}
.sreseller:hover {	

	color: #b74c70;
}
</style>


<?php } else {
?>

<style>
.sblue{
color: #990033;
}
.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #147EA7;
}
.red:hover {
    color:#2a6496 ;
}
.stitle {

	color: #147EA7;

}
.sreseller {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #147EA7;
}
.sreseller:hover {	

	color: #2a6496;
}

</style>

<?php
}
?>


<script language="javascript"> document.getElementById('next_page').value = "ui_home.php"; </script>

<?php // database login
include "db_connect.php";

// post fields
if (isset($_POST["rp_mapdetails"])) {	$rp_mapdetails = $_POST["rp_mapdetails"];} else $rp_mapdetails = 0;
if (isset($_POST["store_number"])) {	$store_number = $_POST["store_number"];} else $store_number = 0;
if (isset($_POST["store_name"])) {	$store_name = $_POST["store_name"];} else $store_name = "N/A";
if (isset($_POST["store_pc"])) {	$store_pc = $_POST["store_pc"];} else $store_pc = "N/A";
if (isset($_POST["store_notes"])) {	$store_notes = $_POST["store_notes"];} else $store_notes = " ";
if (isset($_POST["rp_poly"])) {	$rp_poly = $_POST["rp_poly"];} else $rp_poly = "(43.73, -79.43),(43.74, -79.39),(43.72, -79.38),(43.707, -79.41)";

if ($store_number == "") $store_number = "N/A";
if ($store_name == "") $store_name = "N/A";

// error fixe defaults
$store_uid = 0;
$files_loaded_count = 0;

// load new store data- get user information
$query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
				}				
			mysqli_free_result($result);
		}

// load new store data- insert store details










mysqli_query($link,"INSERT INTO amfd_stores (client_id, store_number, store_name, store_notes, use_yn, store_pc, poly_yn, rp_poly, rp_mapdetails) VALUES ($client_id, '$store_number', '$store_name', '$store_notes', 0, '$store_pc', 1, '$rp_poly' , '$rp_mapdetails') ");

// load new store data- get store_uid
$query = "SELECT * FROM amfd_stores WHERE client_id = $client_id and store_number = '$store_number' and use_yn = 0 ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_uid = $row['store_uid'];
				}				
			mysqli_free_result($result);
		}

class pointLocation {
    var $pointOnVertex = true; // Check if the point sits exactly on one of the vertices?
 
    function pointLocation() {
    }
 
    function pointInPolygon($point, $polygon, $pointOnVertex = true) {
        $this->pointOnVertex = $pointOnVertex;
 
        // Transform string coordinates into arrays with x and y values
        $point = $this->pointStringToCoordinates($point);
        $vertices = array(); 
        foreach ($polygon as $vertex) {
            $vertices[] = $this->pointStringToCoordinates($vertex); 
        }
 
        // Check if the point sits exactly on a vertex
        if ($this->pointOnVertex == true and $this->pointOnVertex($point, $vertices) == true) {
            $bradarray[] = "1";
			return "vertex";
        }
 
        // Check if the point is inside the polygon or on the boundary
        $intersections = 0; 
        $vertices_count = count($vertices);
 
        for ($i=1; $i < $vertices_count; $i++) {
            $vertex1 = $vertices[$i-1]; 
            $vertex2 = $vertices[$i];
            if ($vertex1['y'] == $vertex2['y'] and $vertex1['y'] == $point['y'] and $point['x'] > min($vertex1['x'], $vertex2['x']) and $point['x'] < max($vertex1['x'], $vertex2['x'])) { // Check if point is on an horizontal polygon boundary
                $bradarray[] = "boundary";
				return "boundary";
            }
            if ($point['y'] > min($vertex1['y'], $vertex2['y']) and $point['y'] <= max($vertex1['y'], $vertex2['y']) and $point['x'] <= max($vertex1['x'], $vertex2['x']) and $vertex1['y'] != $vertex2['y']) { 
                $xinters = ($point['y'] - $vertex1['y']) * ($vertex2['x'] - $vertex1['x']) / ($vertex2['y'] - $vertex1['y']) + $vertex1['x']; 
                if ($xinters == $point['x']) { // Check if point is on the polygon boundary (other than horizontal)
                    $bradarray[] = "boundary";
					return "boundary";
                }
                if ($vertex1['x'] == $vertex2['x'] || $point['x'] <= $xinters) {
                    $intersections++; 
                }
            } 
        } 
        // If the number of edges we passed through is odd, then it's in the polygon. 
        if ($intersections % 2 != 0) {
			$bradarray[] = "inside";
            return "inside";
        } else {
			$bradarray[] = "outside";
            return "outside";
        }
    }
 
    function pointOnVertex($point, $vertices) {
        foreach($vertices as $vertex) {
            if ($point == $vertex) {
                return true;
            }
        }
 
    }
 
    function pointStringToCoordinates($pointString) {
        $coordinates = explode(" ", $pointString);
        return array("x" => $coordinates[0], "y" => $coordinates[1]);
    }
 
}
// end polygon get function


include 'db_connect_wg.php';


$array_mapdetails = explode(",", $rp_mapdetails);
$minLat = $array_mapdetails[4];
$maxLat = $array_mapdetails[3];
$minLon = $array_mapdetails[6];
$maxLon = $array_mapdetails[5];
$pc_name1km = "";


$query = "SELECT * 
	FROM c_geo 
	WHERE lat Between $minLat And $maxLat
         And lon Between $minLon And $maxLon
	LIMIT 120000;";
	if ($result = mysqli_query($link, $query)) {			
		while ($row = mysqli_fetch_assoc($result)) {
			$files_loaded_count = $files_loaded_count + 1;
			 $all_pc_name[] = $row['PostCode'];
			 $points[] = $row['lat'] . " " . $row['lon'];
			 
		 }
	}	
		

include 'db_connect.php';







$pointLocation = new pointLocation();


//$points = array("50 70","70 40","-20 30","100 10","-10 -10","40 -20","110 -20");


$rp_poly = ltrim($rp_poly, "(");
$rp_poly = rtrim($rp_poly, ")");
$rp_poly = str_replace("),(","|",$rp_poly);
$rp_poly = str_replace(","," ",$rp_poly);
$rp_poly = str_replace("  "," ",$rp_poly);
$polygon = explode("|", $rp_poly);
$polygon[] = $polygon[0];

//$polygon = array("-50 30","50 70","100 50","80 10","110 -10","110 -30","-20 -50","-30 -40","10 -10","-10 10","-30 -20","-50 30");


foreach($points as $key => $point) {
   	// array is vertes, inside, outside or boundary
	$bradarray[] = $pointLocation->pointInPolygon($point, $polygon);

}
$pc_count1km = 0;
$pc_name1km = "";
$pc_goodpc = 0;
					
for ( $i = 0; $i < sizeof($bradarray); $i ++) {
	if($bradarray[$i] == "inside" || $bradarray[$i] == "boundary" || $bradarray[$i] == "vertex") {
		$pc_goodpc = $pc_goodpc +1;
		 $pc_name1km .= "(" . $store_uid . ", '" . $all_pc_name[$i] . "'),";
			 $pc_count1km = $pc_count1km +1; 
				// upload for every 5000 records
				if($pc_count1km >5000) {
					$pc_namearray[] = rtrim($pc_name1km, ",");				 	
					$pc_count1km = 0;
					$pc_name1km = "";								 
				}  
		
	}
}
$pc_name1km = rtrim($pc_name1km, ",");
		if($pc_count1km > 0) {
			$pc_namearray[] = rtrim($pc_name1km, ",");			
		}
		
include 'db_connect.php';
for ( $i = 0; $i < sizeof($pc_namearray); $i ++) {	
	$temp_row = $pc_namearray[$i];
	mysqli_query($link,"INSERT INTO amfd_pclist (store_uid, PostCode) VALUES $temp_row ");	
}		

	


// load new store data- get user information
$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $map_rp_poly = $row['rp_poly'];
					 $map_rp_mapdetails = $row['rp_mapdetails'];
				}				
			mysqli_free_result($result);
		}

$array_rp_mapdetails = explode(",", $map_rp_mapdetails); 

$map_rp_poly = ltrim($map_rp_poly, "(");
$map_rp_poly = rtrim($map_rp_poly, ")");
$map_rp_poly = str_replace("),(","|",$map_rp_poly);
$array_map_rp_poly = explode("|", $map_rp_poly);
$array_map_rp_poly[] = $array_map_rp_poly[0];

$poly_latlon = "";
 for ($i=1; $i < sizeof($array_map_rp_poly); $i++) {
       $templatlon = $array_map_rp_poly[$i];
	   $templatlon = str_replace(",",", lng: ",$templatlon);
	   $poly_latlon = $poly_latlon . "{lat: " . $templatlon . "}, ";
	   
 }
$poly_latlon = rtrim($poly_latlon, ", ");


$start_zoom = $array_rp_mapdetails[0];
$start_lat = $array_rp_mapdetails[1];
$start_lon = $array_rp_mapdetails[2];


	
?>
<SCRIPT language="JavaScript">
function initAutocomplete() {
    var latlng = new google.maps.LatLng(<?php echo $start_lat; ?>, <?php echo $start_lon; ?>);
    var myOptions = {
      zoom: <?php echo $start_zoom; ?>,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.EOAD,
	  navigationControl: true,
	  scaleControl: true

    };
    map = new google.maps.Map(document.getElementById("map"), myOptions);
	
var polyCoords = [
          <?php echo $poly_latlon;?>
        ];

        // Construct the polygon.
        var polyMapShow = new google.maps.Polygon({
          paths: polyCoords,
		  strokeColor: '#8B0000',
		  	strokeOpacity: 0.7,
		  	strokeWeight: 5,
		  	fillColor: '#ffff00',
          	fillOpacity:0.2,
            clickable: false,
            zIndex: 1
			
        });
        polyMapShow.setMap(map);




}

</script>

<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<div id="proc_div" style="display: block;"><img src="please_wait.gif" width="572" height="304" alt="processing"></div>
<table width="900" height="470" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><table width="95%"  height="400" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td  align='left' valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="68%" align='left' valign="top" ><p class="sgrey14"><span class="sblue">Store: <?php echo $store_name; ?></span></p>
              <p class="sgrey14">Polygon / custom store trade area <br />
                upload complete</p>
              <p class="sgrey14">Store Number: <?php echo $store_number; ?><br>
                Store Name: <?php echo $store_name; ?><br>
                Store Notes: <?php echo $store_notes; ?></p>
              <p class="sgrey14"><br>
                Records: <br />
                <?php echo number_format($files_loaded_count); ?> total records identified on the map. <br />
                <?php echo number_format($pc_goodpc); ?> unique postal codes identified in your custom store's trade area that will be analyzed<br>
                <br>
                <br>
                <br>
                <input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid;?>">
                </p></td>
          </tr>
        </table></td>
      </tr>
    </table>
    <br>
    <br></td>
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF">
   
        <input name="ads" type="button" class="sblue" id="ads" value="Back to Dashboard" onclick="HOMEsubmit();" />
        <br />
        <br />
<div id="map" style="width: 500px; height: 350px"></div>
    </td>
      </tr>
  </table></td>
  </tr>
</table>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?client=gme-marketfocus&v=3.30"></script>
<!--
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZgwgaf7Tehvdma313gZ-684QizKPy-so&callback=initAutocomplete&libraries=places,drawing,visualization" async defer></script> -->
<script>
 document.getElementById('proc_div').style.display ="none";
 </script>
 
 

