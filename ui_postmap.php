<script language="javascript"> document.getElementById('next_page').value = "ui_home.php"; </script>

<?php // database login
include "db_connect.php";

// post fields
if (isset($_POST["rp_mapdetails"])) {	$rp_mapdetails = $_POST["rp_mapdetails"];} else $rp_mapdetails = 0;
if (isset($_POST["store_number"])) {	$store_number = addslashes($_POST["store_number"]);} else $store_number = 0;
if (isset($_POST["store_name"])) {	$store_name = addslashes($_POST["store_name"]);} else $store_name = "N/A";
if (isset($_POST["store_pc"])) {	$store_pc = addslashes($_POST["store_pc"]);} else $store_pc = "N/A";
if (isset($_POST["store_notes"])) {	$store_notes = $_POST["store_notes"];} else $store_notes = " ";
if (isset($_POST["rp_radius"])) {	$rp_radius = $_POST["rp_radius"];} else $rp_radius = "2000,8,43.65562655647711,-79.41560498730469";

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

mysqli_query($link,"INSERT INTO amfd_stores (client_id, store_number, store_name, store_notes, use_yn, store_pc, radius_yn, rp_radius) VALUES ($client_id, '$store_number', '$store_name', '$store_notes', 0, '$store_pc', 1, '$rp_radius') ");

// load new store data- get store_uid
$query = "SELECT * FROM amfd_stores WHERE client_id = $client_id and store_number = '$store_number' and use_yn = 0 ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_uid = $row['store_uid'];
				}				
			mysqli_free_result($result);
		}
include 'db_connect_wg.php'; 	
//mysql_query("UPDATE amfd_stores SET store_pc ='M8V2B4' WHERE store_uid = 8 ) ");
$store_uid_update = 1;




// postal code roll up - get dimensions from map
$rp_mapdetails_array = explode(",", $rp_mapdetails);
$start_zoom = $rp_mapdetails_array[0];
	$start_lat = $rp_mapdetails_array[1];
	$start_lon = $rp_mapdetails_array[2];
	$v_biglat = $rp_mapdetails_array[3];
	$v_smalllat = $rp_mapdetails_array[4];
	$v_biglong = $rp_mapdetails_array[5];
	$v_smalllong = $rp_mapdetails_array[6];	
	$pc_centroid = 100000;

$rp_radius_array = explode(",", $rp_radius);
	$user_radius = $rp_radius_array[0] * 0.001;


	$minLat1km = $start_lat - rad2deg($user_radius/6371);
	$maxLat1km = $start_lat + rad2deg($user_radius/6371);
    $minLon1km = $start_lon - rad2deg(asin($user_radius/6371) / cos(deg2rad($start_lat)));
	$maxLon1km = $start_lon + rad2deg(asin($user_radius/6371) / cos(deg2rad($start_lat)));
// get postal codes and save in array
$pc_name1km = "";
$pc_count1km = 0;
$files_loaded_count = 0;


$query = "SELECT *, (( 6371 * acos( cos( radians({$start_lat}) ) * cos( radians( `lat` ) ) * cos( radians( `lon` ) - radians({$start_lon}) ) + sin( radians({$start_lat}) ) * sin( radians( `lat` ) ) ) ) ) AS distance
	FROM amfd_homes 
	WHERE lat Between $minLat1km And $maxLat1km
         And lon Between $minLon1km And $maxLon1km
  	HAVING distance < $user_radius 
	ORDER BY distance
	LIMIT 120000;";
	if ($result = mysqli_query($link, $query)) {			
		while ($row = mysqli_fetch_assoc($result)) {
			$files_loaded_count = $files_loaded_count + 1;
			 $pc_name1km .= "(" . $store_uid . ", '" . $row['PostCode'] . "'),";
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



?>
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<div id="proc_div" style="display: block;"><img src="please_wait.gif" width="572" height="304" alt="processing"></div>
<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><table width="95%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td  align='left' valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td width="68%" align='left' ><span class="sblue">              Store: <?php echo $store_name; ?> market area added</span>
            </td>
          </tr>
          <tr>
            <td align='left' ><p class="sgrey14">Store Number: <?php echo $store_number; ?><br>
              Store Name: <?php echo $store_name; ?><br>
              Store Notes: <?php echo $store_notes; ?><br>
              Records: <?php echo number_format($files_loaded_count); ?> unique postal codes in store market area<br>
              <br>
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
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><br>
    <table width="95%"  height="150" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr align="center">
        <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          
        </table>
          <input name="ads" type="button" class="sblue" id="ads" value="Back to Dashboard" onclick="HOMEsubmit();" /></td>
      </tr>
  </table></td>
  </tr>
</table>

<script>
 document.getElementById('proc_div').style.display ="none";
 </script>