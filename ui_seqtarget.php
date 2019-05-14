<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<SCRIPT language="JavaScript">
 		
function seqSTOREsubmit(val) {
document.getElementById('store_uid').value = val;
document.getElementById('next_page').value = "ui_seqtarget_select.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}


function DELETESTOREsubmit(val) {
//alert("Hi");
	var r = confirm("Are you sure you want to delete");
	if (r == true) {
	document.main_form.target = "_top";
	document.getElementById('delete_store').value = val;
	document.getElementById('next_page').value = "ui_seqtarget.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 
	}
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
.bg_color_sequential {
	background-color: #40B34E;
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
.bg_colorred {
    background-color: #990033;
   margin-top:25px;
    margin-bottom:2%;
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

 


include 'db_connect.php';



?>
<SCRIPT language="JavaScript">


function initialize() {
	
	
	
}



</script>

    	<div class="col-md-12 bg_colorred" align="center">
    	  <table width="100%" border="0" >
    	    <tr>
    	      <td align="center" class="swhite24"><strong>SEQUENTIAL TARGETING 
                  <span class="swhite14" style="font-size:18px;"><br />
                  Redefine and narrow your target group within a location<br />
based on demographic, segmentation, media and spending traits </span><span class="swhite14"><br />&nbsp;
        </span></strong></td>
  	      </tr>
  	    </table>
 		</div>

    
    
  
<div class="container">    
 	<div class="row">
   	  
      <div class="col-md-4">
      <div class="row">
       <input name="get_report_id" type="hidden" id="get_report_id" size="150" />
<input name="store_selected" type="hidden" id="store_selected" value=" "  />
<input name="delete_store" type="hidden" id="delete_store" value=" "  />
<input name="store_uid" type="hidden" id="store_uid" value=" "  />


	<table>
      <tr class="black18 " align="left">
        <th colspan="3" align="left"><strong>Regional Targeting</strong></th>
      </tr>
      </table>
		<table class="table table-hover table1" width="95%">
        
		  <tr >
		    <td class='select_font_14'>ATLANTIC</td>
		 	</tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('898')">Newfoundland</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('899')">Nova Scotia</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('900')">P.E.I.</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('901')">New Brunswick</a></td>
		    </tr>
		  <tr>
		    <td>&nbsp;</td>
		    </tr>
		  <tr>
		    <td class='select_font_14'>QUEBEC</td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('935')">Eastern Quebec (G)</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('936')">Montreal - Metro (H)</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('937')">Western Quebec (J)</a></td>
		    </tr>
		  <tr>
		    <td>&nbsp;</td>
		    </tr>
		  <tr>
		    <td class='select_font_14'>ONTARIO</td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('917')">Eastern Ontario (K)</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='regular_font_14' href="javascript:seqSTOREsubmit('925')">City: Ottawa</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('918')">Central Ontario (L)</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('912')">Toronto - Core (M)</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='regular_font_14' href="javascript:seqSTOREsubmit('922')">City: GTA - Greater Toronto Area</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('940')">SW Ontario (N)</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('941')">Northern Ontario (P)</a></td>
		    </tr>
		  <tr>
		    <td>&nbsp;</td>
		    </tr>
		  <tr>
		    <td class='select_font_14'>WEST</td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('905')">Manitoba</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='regular_font_14' href="javascript:seqSTOREsubmit('927')">City: Winnipeg</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('906')">Saskatchewan</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('907')">Alberta</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='regular_font_14' href="javascript:seqSTOREsubmit('938')">City: Calgary</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'>&nbsp;&nbsp;&nbsp; <a class='regular_font_14' href="javascript:seqSTOREsubmit('939')">City: Edmonton</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('908')">British Columbia</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'>&nbsp; &nbsp;&nbsp;<a class='regular_font_14' href="javascript:seqSTOREsubmit('929')">City: GVA - Greater Vancouver Area</a></td>
		    </tr>
		  <tr>
		    <td class='regular_font_14' align='left'><a class='regular_font_14' href="javascript:seqSTOREsubmit('910')">All Territories</a></td>
		    </tr>
		  <tr>
		    <td></tr></td>
		    </tr>
		  </table>
      </div>
       </div>
       
       
        <div class="col-md-8" align="center">
        <div class="row">
          
        
    

    <table   >
      <tr class="black18 " align="left">
        <th colspan="3" align="left"><strong>Store Market Area Targeting</strong></th>
      </tr>
      
      </table>
      <table class="table table-hover table1"  >
      <tr class="sgrey12">
        <th width='150'  align="left" valign="bottom">Store Number</th>
        <th width='300'  align="left" valign="bottom">Name</th>
        <th width='75' align="right" valign="bottom">Delete<br />
          Store</th>
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
				
				echo "<tr class='regular_font_14'><td class='regular_font_14' width='150' align='left'><a class='regular_font_14' href='javascript:seqSTOREsubmit(" . $row['store_uid'] . ");'>" . $row['store_number'] . "</a></td>";
				echo "<td align='left'><a class='regular_font_14' width='300' align='left' href='javascript:seqSTOREsubmit(" . $row['store_uid'] . ");'>" . $row['store_name'] . "</a></td>";
			
				
				echo "<td width='75' align='right'><a class='btn btn-danger btn-xs' href='javascript:DELETESTOREsubmit(" . $row['store_uid'] . ");'>x</a></td></tr>";
				
			}				
		mysqli_free_result($result);
	}
	
		
?>
    </table>
    </div>


      </div>
  </div>
</div> 