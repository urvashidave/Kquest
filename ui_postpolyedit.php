

<script language="javascript"> document.getElementById('next_page').value = "ui_home.php"; 

</script>

<?php // database login
include "db_connect.php";

$start_lon = -79;
$start_lat = 44;
$start_zoom = 12;
// post fields
if (isset($_POST["store_uid"])) {	$store_uid = $_POST["store_uid"];} else $store_uid = 0;


// error fixe defaults
$files_loaded_count = 0;

// add CSV file to database


if ( $_FILES['ufile2']['tmp_name'] )
 {

$my_file = $_FILES['ufile2']['tmp_name'];
$file_name = pathinfo($_FILES['ufile2']['name']);
$up_file_name = $file_name['basename'];
$file_is_good_yn = 1;
 }

$handle = fopen("$my_file", "r");
	$row_count = 0;
	$saver_count = 0;
	$geo_list = " ";
	$post_count = 0;
	$pc_name = "";
	


if(	$file_is_good_yn > 0) {

		while(! feof($handle))
	  {

	  $temp_data[0] = (fgetcsv($handle)); 
	  $c_data[$row_count] = $temp_data[0];
	  $temppc = $c_data[$row_count][0];
	  $temppc2 = $c_data[$row_count][1];
  
		  $pc_name_array[] = $temppc . "," . $temppc2;  
		  $row_count = $row_count +1;
		  $saver_count = $saver_count +1;
		// Post postal code  
		  
	  }
$ele_count = $row_count - 1;
if($pc_name_array[$ele_count] == ",") { unset($pc_name_array[$ele_count]); $ele_count = $ele_count - 1; }

if($pc_name_array[0] == $pc_name_array[$ele_count])  unset($pc_name_array[$ele_count]);
$poly_list = implode("|", $pc_name_array);

}


include "db_connect.php";

mysqli_query($link,"UPDATE amfd_stores SET poly_yn = 1 , rp_poly='$poly_list' WHERE store_uid = $store_uid ");

$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid  ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {

	 $map_rp_poly = $row['rp_poly'];
	  $map_poly_yn = $row['poly_yn'];
	  $store_pc = $row['store_pc'];
	
}}

if($map_poly_yn == 1) {

	$map_rp_poly = ltrim($map_rp_poly, "(");
	$map_rp_poly = rtrim($map_rp_poly, ")");
	$map_rp_poly = str_replace("),(","|",$map_rp_poly);
	$array_map_rp_poly = explode("|", $map_rp_poly);
	$array_map_rp_poly[] = $array_map_rp_poly[0];
	
	
	 for ($i=1; $i < sizeof($array_map_rp_poly); $i++) {
		   $templatlon = $array_map_rp_poly[$i];
		   $templatlon = str_replace(",",", lng: ",$templatlon);
		   $poly_latlon = $poly_latlon . "{lat: " . $templatlon . "}, ";
	   
 }
$poly_latlon = rtrim($poly_latlon, ", ");	
}

include 'db_connect_wg.php'; 
// get lat lon of store
$query = "Select lat, lon FROM c_geo WHERE PostCode = '$store_pc' LIMIT 1";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
	$temp_ethnic_lat = $row['lat'];
	$temp_ethnic_lon = $row['lon'];
	$PostCode = $store_pc_array[$count_dwi]; 
	
	$temp_counter = $temp_counter +1;
}				
mysqli_free_result($result);
}
$start_lat = $temp_ethnic_lat;
$start_lon = $temp_ethnic_lon;
$start_zoom = 12;

?>
<script language="javascript">
function initAutocomplete() {
var latlng = new google.maps.LatLng(<?php echo $start_lat;?>, <?php echo $start_lon;?>);
var myOptions = {
zoom: <?php echo $start_zoom; ?>,
center: latlng,
mapTypeId: google.maps.MapTypeId.ROADMAP,
navigationControl: true,
scaleControl: true
};
var map = new google.maps.Map(document.getElementById("map"), myOptions);

var image_store = 'pin_blue.png';
var markers = [];
var markers2 = [];
var markers3 = [];
var marker3 = new google.maps.Marker({
position: new google.maps.LatLng(<?php echo $start_lat;?>, <?php echo $start_lon;?>),
map: map,
icon: image_store
});
markers3.push(marker3); 


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
          	fillOpacity:0.1,
            clickable: false,
            zIndex: 1
			
        });
        polyMapShow.setMap(map);




	  
}
</script>
<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><table width="95%"  height="299" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td height="297"  align='left' valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td  align='left' width="68%"><span class="sblue">Edit store trade area is complete <span class="pbody14">
              <input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid;?>" />
              </span><br />
            </span></td>
          </tr>

        </table>
          <div id="map" style="width: 350px; height: 250px"> </div>
          </td>
      </tr>
    </table>
    <br>
    <br></td>
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><table width="95%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td  align='left' valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td  align='left' width="32%"><img src="new_store.jpg" alt="new" width="125" height="100" onclick= "TRADEAREAsubmit();"/></td>
            <td  align='left' width="68%"><a href="javascript:TRADEAREAsubmit();" class="sblue">Add Another Store</a><a href="javascript:TRADEAREAsubmit();" class="sgrey14"><br />
              Add another new store to the system </a></td>
          </tr>
        </table></td>
      </tr>
</table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
        <input name="UPsubmit5" type="submit" class="sgrey14" id="UPsubmit5" value="Back to Dashboard"  onclick="HOMEsubmit();" />
    </p></td>
  </tr>
</table>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?client=gme-marketfocus&v=3.30"></script>
  <!--
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZgwgaf7Tehvdma313gZ-684QizKPy-so&callback=initAutocomplete&libraries=places,drawing,visualization" async defer></script> -->