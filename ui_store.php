
<script async defer
src="https://maps.googleapis.com/maps/api/js?client=gme-marketfocus&v=3.30"></script>
<!--
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZgwgaf7Tehvdma313gZ-684QizKPy-so&libraries=places,drawing,visualization" async defer></script> -->
<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<?php
if (isset($_POST["store_selected"])) {	$store_uid = $_POST["store_selected"];} else $store_uid = " ";
include 'db_connect.php'; 
$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid  ORDER BY store_number ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$temp_store_pc = $row['store_pc'];
$temp_store_pc = str_replace(' ', '', $temp_store_pc);
$store_pc = preg_replace("/[^a-zA-Z0-9]+/", "", $temp_store_pc);
$client_id = $row['client_id'];
$store_number = $row['store_number'];
}
}
include 'db_connect_wg.php'; 
$query = "Select lat, lon FROM c_geo WHERE PostCode = '$store_pc' ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$temp_ethnic_lat = $row['lat'];
$temp_ethnic_lon = $row['lon'];
$PostCode =$store_pc_array[$count_dwi]; 
$cust_toronto[] = "['" . $PostCode .  "', " .  $temp_ethnic_lat . ", " . $temp_ethnic_lon . ", " . $temp_counter . "],";
$temp_counter = $temp_counter +1;
}				
mysqli_free_result($result);
}
$count_dwi2 = $count_dwi+1;
$cust_toronto[] = "['Blank', 0, 0, $count_dwi2]"; 
$start_lat = $temp_ethnic_lat;
$start_lon = $temp_ethnic_lon;
$start_zoom = 12;
?>
<SCRIPT language="JavaScript">
function PICKSTOREsubmit(val) {
document.getElementById('store_uid').value = val;
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function DELETESTOREsubmit(val) {
//alert("Hi");
	var r = confirm("Are you sure you want to delete");
	if (r == true) {
	document.main_form.target = "_top";
	document.getElementById('delete_store').value = val;
	document.getElementById('store_selected').value = document.getElementById('store_uid').value;
	document.getElementById('next_page').value = "ui_store.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 
	}
}

function ROUTESTOREsubmit(val) {
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "distributor_pg3.php";
document.main_form.target = "_top";
document.main_form.submit();
//var page_to_open = "ui_webservice.php?report_uid=" + val;
//window.open(page_to_open, '_blank');
}

function ORDERCSVsubmitview(val) {
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "ui_webserviceview.php";
document.main_form.target = "_top";
document.main_form.submit();
//var page_to_open = "ui_webservice.php?report_uid=" + val;
//window.open(page_to_open, '_blank');
}
function MAPROFILEsubmit(val) {
document.getElementById('store_selected').value = val;
document.getElementById('next_page').value = "ui_storema.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
</script>
<style type="text/css">
.orange50
{
font-family: "Open Sans", sans-serif;
color: #990000;
font-size: 50px; 
font-weight:bold;
padding: 0 0 9px;
text-transform: uppercase;
}
.blue50 
{ 
font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #333;
font-size: 38px;
font-weight: normal;
padding: 0 0 9px;
text-transform: uppercase;
}
.grey14
{ 
font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #717171;
font-size: 14px;
font-weight: normal;
}
.col_red {
	color: #FF0000;
}
.grey10
{ 
font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
color: #717171;
font-size: 14px;
font-weight: normal;
}
.table360 {
height: 360px;
width: 900px;
overflow-y:scroll; 
}
html, body
{
height: 100%;
}
.bg_color1 {
background-color: #CEB39D;
}
@media print {
.pagebreak {page-break-after: always;}
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
.print_pages1 {  width: 910px;
height: 620px;
background: #fff;
margin: 25px 0 0 0;
-webkit-border-radius: 6px;
border-radius: 6px;
-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}
.print_pages2 {  width: 910px;
height: 620px;
background: #fff;
margin: 25px 0 0 0;
-webkit-border-radius: 6px;
border-radius: 6px;
-webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}
.stitle {
font-family: Arial, Helvetica, sans-serif;
font-size: 40px;
font-weight: bold;
color: #147EA7;
}
</style>
<title>KQUEST Store Summary</title>
<?php 
include 'db_connect.php'; 

if (isset($_POST["delete_store"])) {	$delete_store = $_POST["delete_store"];} else $delete_store = 0;

if($delete_store > 0) {
	$delete_store_to_update = $delete_store / 3571;
	mysqli_query($link,"UPDATE amfd_reports SET use_yn = 3 WHERE report_uid = $delete_store_to_update ");
	
}


$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$store_number = $row['store_number'];
$store_name = $row['store_name'];
$store_pc = $row['store_pc'];
}				
mysqli_free_result($result);
}
?>
<?php 
// income chart
?>
<script type="text/javascript">
function initialize() {
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
}
</script>
</head>
<body  onLoad='initialize();'>
<div class="container row col-md-12" align="center"> 
<table width="900"  border="0" cellspacing="0" cellpadding="5">
<tr>
<td colspan="2" align="center"><span class="stitle" style="color: #900c3f !important;">Target Audience Analysis</span></td>
</tr>
<tr>
<td width="50%" height="300" valign="top"><h3>
<span class="grey14"><strong>
<input name="AddStore" type="button" class="btn btn-success btn-lg" onclick= "javascript:PICKDEMOsubmit(<?php echo $store_uid; ?>)" value="Create new analysis"/>
<br>
<br>
<br>
<br>
<h4><strong>
<?php if($store_uid >= 898 && $store_uid <= 942) echo "Regional Targeting: " . $store_name;
else echo "Store # " . $store_number . " - " . $store_name ; ?></strong></h4>
<span class="grey14">
<input name="store_uid" type="hidden" id="store_uid" value="<?php echo $store_uid; ?>"  />
<input name="delete_store" type="hidden" id="delete_store" value=" "  />
<input name="report_uid" type="hidden" id="report_uid" value=""  />
<input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid*3571; ?>">
<br>
<br>
</span></td>
<td width="226"><div id="map" style="width: 100%; height: 300px"></div></td>
</tr>
</table>
<div class="row">
<table width="900" border="0" cellspacing="0" cellpadding="5">
<tr>
<td width="624">&nbsp;</td>
<td width="256" align="right">&nbsp;</td>
</tr>
</table>
<div class="col-md-12 table360" style="width:100%">
<table width="100%" border="0" cellspacing="0" cellpadding="5">       
<tr>
<td colspan="2"> 
<table class = "table table-hover  " >
<tr>
<th>Target Audience</th>
<th>Date</th>
<th>Profile</th>
<th>Delete</th>
<th>Use file</th>
<th>View</th>
</tr>
<?php
//$query = "SELECT * FROM amfd_reports WHERE store_uid = $store_uid ORDER BY report_uid DESC LIMIT 20";
$query = "SELECT * FROM amfd_reports WHERE store_uid = $store_uid and use_yn <> 3 ORDER BY report_uid DESC ";
if ($result = mysqli_query($link, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
$report_uid = $row['report_uid'] * 3571;
$var1_fullname = $row['var1_fullname'];
$report_date = $row['report_date'];
$report_score = $row['report_score'];
$Sent_MFD_yn = $row['Sent_MFD_yn'];
echo "<td>" . $var1_fullname . "&nbsp;</td>";
echo "<td>" . $report_date . "&nbsp;</td>";
echo "<td align='left'><a class='btn btn-default' onclick='PROFILEREPORTsubmit(" . $report_uid . ");'><i class='fa fa-user pull-left'></i>Profile</a>";
echo "</td>";
echo "<td align='left'><a class='btn btn-default col_red' onclick='DELETESTOREsubmit(" . $report_uid . ");'><i class='fa fa-trash-o'></i></a>";
/*echo "<td align='left'><a class='btn btn-default' onclick='ORDERCSVsubmit(" . $report_uid . ");'>Select Distributor</a>";
echo "</td>";
*/

echo "<td><a class='btn btn-success' href='javascript:ROUTESTOREsubmit(" . $report_uid .");'><i class='fa fa-download pull-left'></i>SELECT DISTRIBUTOR</a></td>";
				
echo "<td align='left'><a class='btn btn-default ' onclick='ORDERCSVsubmitview(" . $report_uid . ");'><i class='fa fa-download pull-left'></i>View</a>";
echo "</td>";
echo "</tr>";
}				
mysqli_free_result($result);
}
?>
</table>
</td>
</tr>
</table>
</div></div></div>
</body>
</html>