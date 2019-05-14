

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

?>
<SCRIPT language="JavaScript">


function ROUTE_pg3submit(val) {
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "distributor_pg3.php";
document.main_form.target = "_top";
document.main_form.submit();
//var page_to_open = "ui_webservice.php?report_uid=" + val;
//window.open(page_to_open, '_blank');
}

function CANCELsubmit() {
	document.getElementById('next_page').value = "ui_home.php";
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
.table680 {
	font-size:14px; 
	text-decoration:none; 
	color:#333;
	height: 680px;
	width: 900px;
	display:block;
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

<?php 
include 'db_connect.php'; 



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



<div class="container row col-md-12" align="center"> 
<table width="900"  border="0" cellspacing="0" cellpadding="5">
<tr>
  <td width="276" colspan="2" align="center"><h1 style="color: #900c3f !important;">Route Distribution</h1>
    <h1 style="color: #900c3f !important;">Step 2: Select Target Audience</h1>

    <input name="store_uid" type="hidden" id="store_uid" value="<?php echo $store_uid; ?>"  />
  <input name="delete_store" type="hidden" id="delete_store" value=" "  />
  <input name="report_uid" type="hidden" id="report_uid" value=""  />
  <input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid*3571; ?>">
  
  <?php if($store_uid >= 898 && $store_uid <= 942) echo "Regional Targeting: " . $store_name;
else echo "Store # " . $store_number . " - " . $store_name ; ?></strong></h4></td>
</tr>
</table>
<div class="row">
<div class="col-md-12 text-left ">
        <a class='btn btn-danger ' onclick='CANCELsubmit();'><i class='fa fa-undo pull-left'></i>Go back</a>
        </div>
<table width="900" border="0" cellspacing="0" cellpadding="5">
<tr>
<td width="624">&nbsp;</td>
<td width="256" align="right">&nbsp;</td>
</tr>
</table>
<div class="col-md-12 table680" style="width:100%">
<h3>&nbsp;</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="5">       
<tr>
<td colspan="2"> 
<table class = "table table-hover  " >
<tr>
<th>Target Audience</th>
<th>Date</th>
<th>Select</th>
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

echo "<td align='left'><a class='btn btn-success ' onclick='ROUTE_pg3submit(" . $report_uid . ");'><i class='fa fa-download pull-left'></i>Select</a>";
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