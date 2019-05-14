<link rel='STYLESHEET' type='text/css' href='master_style.css'>





<style>

.title_font {	font-size: 20px;

	color: #000;

	font-family: Arial Narrow, Arial, Helvetica, sans-serif;

}
.hover:hover{

cursor:pointer;
    border: solid;
}
.print_pages {

  width: 100%;

  height: auto;

  background: #fff;

  margin: 25px 0 0 0;

   border-style:groove;

   border-width: 2px;

    border-color: #000000 #000000;

  -webkit-border-radius: 6px;

  border-radius: 6px;

  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

td {
    width: 56%;
}

.proceed {
    width: 15%;
}
</style>

<SCRIPT language="JavaScript">

function MA_select() {

	document.main_form.target = "_top";

document.getElementById('next_page').value = "ui_homema.php";

document.main_form.target = "_top";

document.main_form.submit(); 		

}

function TARGEThome_select() {

	document.main_form.target = "_top";

document.getElementById('next_page').value = "ui_hometarget_home.php";

document.main_form.target = "_top";

document.main_form.submit(); 		

}

function SEQ_select() {

	document.main_form.target = "_top";

document.getElementById('next_page').value = "ui_seqtarget.php";

document.main_form.target = "_top";

document.main_form.submit(); 		

}

</script>



<div class="container row col-md-12 print_pages" align="center" >

<?php


require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 //do some code
 ?>
 
 <style>
.container {
    width:98%;
    max-width:98%;
    margin-right:2% !important;
}

#main_form {

  margin-left:1% !important;
  margin-right:15% !important;

}
.col-md-12{
width:100%;
margin-right:15% !important;
}
 </style>
 
 <?php
}

// Any tablet device.
if( $detect->isTablet() ){
 //do some code
}

?>

    	 
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


<table width="100%" border="0" cellpadding="5" align="">

  <tr>

    <td colspan="2" align="center" class="pheading">Welcome to KQuest Insights and Targeting</td>

    </tr>
<!--
  <tr>

   <td colspan="2" align="center" class="title_font">
    <p style="margin-top: -16px;margin-left:15%;margin-right:15%;">
    Customers, customer groups and Store Trade Areas all have different personalities, particular ethnicities,
    demographics, spending habits and media  Preferences that separate one from the other.
    Specifically targeting these traits greatly increases the possibly of advertising program success.   
    <b>KQuest</b> is the quintessential Program for Quantifying, Segmenting, Profiling and Targeting High Potential Customers    
    </p>
      </td>

  </tr>
  -->
  <tr>

    <td align="center" valign="top" style="">
    <table  border="0"  >

      <tr>

        <td align="center" valign="middle"><span class="swhite24"><img class="hover" src="image3/market_title1_new.png" width="90%" alt="insights"  onclick= "MA_select();"/></span>
          <table border="0">

            <tr>

              <td align="" class="swhite24"><span class="title_font"><b>KQuest Insights</b> provides in-depth knowledge and understanding of the personalities of customers or store market areas across a wide range of demographic and spending behaviours.
 </span></td>
            </tr>
            
          </table></td>

<td class="proceed" align="center" valign="top">
<br/><br/><br/><br/><br/><br/>
   <span style="margin-top:80%" class="title_font"><center><b>Click On Image to Proceed</b></center></td></tr>

</td>

      </tr>

    </table>
</td>
 

 <td align="center" valign="top">
    
    <table   border="0" >
      
      <tr>
        
        <td align="center" valign="middle"><span class="swhite24"><img class="hover" src="image3/targeting_title3_new.png" width="90%" alt="targeting"  onclick= "TARGEThome_select();"/></span>
          
          <table border="0">
            
            <tr>
              
              <td align="" class="swhite24"><span class="title_font"><b>KQuest Targeting</b> pinpoints the very best areas and media  to reach key demographic, segments, spending and lifestyle traits.
</span></td>
              
              </tr>
            
            </table></td>
        
        </tr>
      
    </table></td>
    </tr>

  <tr>

    <td width="33%" align="center">&nbsp;</td>

    <td width="33%" align="center"><span class="swhite24">
      
    </span></td>
    </tr>

</table>







</div> 