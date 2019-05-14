<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<SCRIPT language="JavaScript">


function seqDEMOsubmit(val) {
document.getElementById('store_uid').value = val;
document.getElementById('next_page').value = "seq_pickdemo.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function STOREprofilesubmit(val) {
document.getElementById('store_selected').value = val;
document.getElementById('next_page').value = "seq.tadetails.php";
document.getElementById('proc_div').style.display = 'block';
document.getElementById('proc_div').style.zIndex= 200;
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function DELETESTOREsubmit(val) {
//alert("Hi");
	var r = confirm("Are you sure you want to delete");
	if (r == true) {
	document.main_form.target = "_top";
	document.getElementById('delete_store').value = val;
	document.getElementById('next_page').value = "ui_seqtarget_select.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 
	}
}
function VIEWsubmit(val) {
	document.getElementById('store_uid').value = val;
	document.getElementById('next_page').value = "seq.webserviceview.php";
	document.getElementById('proc_div').style.display = 'block';
	document.getElementById('proc_div').style.zIndex= 200;
	document.main_form.target = "_top";
	document.main_form.submit(); 		
}

function ROUTESTOREsubmit(val) {
document.getElementById('report_uid').value = val;
document.getElementById('next_page').value = "seq.distributor_pg3.php";
document.main_form.target = "_top";
document.main_form.submit();
//var page_to_open = "ui_webservice.php?report_uid=" + val;
//window.open(page_to_open, '_blank');
}


</script>
<style>
.regular_font_14 {
	font-size: 14px;

	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}
.container1 { width:440px; height:475px; overflow:scroll; }
.blue_font_12 {
	font-size: 12px;

	color: #147EA7;
}
.container2 { width:440px; height:450px; overflow:scroll; }

.table1 {
	width: 100%;
	height: 300px;
	display: block;
	overflow-y:scroll; 
}
.table2 {
	width: 100%;
	height: 550px;
	display: block;
	overflow-y:scroll; 
}
.bg_color1 {
	background-color: #CEB39D;
}
.col_red {
	color: #FF0000;
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
    margin-top:2%;
    margin-bottom:2%;
}
.col-md-12{
margin-top:1%;
}
.select_font_14 {	font-size: 14px;
	font-weight: bold;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}
</style>
<?php
if (isset($_POST["store_uid"])) {	$store_uid = $_POST["store_uid"];} else $store_uid = 0;


$found_stores = 0;
$good_stores = 0;
$client_reports = 0;

include 'db_connect.php';

if (isset($_POST["delete_store"])) {	$delete_store = $_POST["delete_store"];} else $delete_store = 0;

if($delete_store > 0) {
	mysqli_query($link,"UPDATE amfd_stores SET use_yn = 3 WHERE store_uid = $delete_store ");
	
}

$query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
				}				
			mysqli_free_result($result);
		}

				
$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
	if ($result = mysqli_query($link, $query)) {	
			while ($row = mysqli_fetch_assoc($result)) {
				$master_store_name  = $row['store_name'];
				$master_store_number  = $row['store_number'];				
			}
	}





?>




<div class="row bg_colorred">
    	<div align="center">
    	  <table width="100%" border="0" class="Example_E1">
    	    <tr>
    	      <td align="center" class="swhite24"><strong> SEQUENTIAL TARGETING </strong>
   	          <span class="swhite14">
   	          <span class="swhite14" style="font-size:18px;"><br />
                  Redefine and narrow your target group within a location<br />
based on demographic, segmentation, media and spending traits </span><span class="swhite14"><br />&nbsp;
        </span></strong></td>
  	      </tr>
  	    </table>
        <input name="get_report_id" type="hidden" id="get_report_id" size="150" />
        <input name="store_selected" type="hidden" id="store_selected" value=" "  />
        <input name="delete_store" type="hidden" id="delete_store" value=" "  />
        <input name="store_uid" type="hidden" id="store_uid" value="<?php echo $store_uid;?>"  />
        <input name="report_uid" type="hidden" id="report_uid" value=""  />
 		</div>
 	</div>
    
    <div class="row">
    	<div class="col-md-12 "><h4><div id="proc_div" style="display: block;"><img src="please_wait.gif" width="572" height="304" alt="processing"></div>
        </h4>
        </div>
  </div> 
  
<div class="container">    
 	<div class="row">
        <div class="col-md-12" align="center">
        
        
    <p><span class="black18"><strong>Sequentially Target and Profile</strong></span></p>
    <p><span class="black18">ANALYSIS FOR  <br />
	Store/Region: <?php echo $master_store_number; ?>  <?php echo $master_store_name; ?> <br /></span>
    </p>
    
    <table width="95%" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td width="50%" align="center"><input name="SeqTarget2" type="button" class="btn btn-success btn-lg Example_E1" onclick= 'seqDEMOsubmit(<?php echo $store_uid; ?>);' value="START  NEW PROJECT"/></td>
              
              <td width="50%" align="center">
        <input name="AddStore" type="button" class="btn btn-success btn-lg Example_E1" onclick= 'STOREprofilesubmit(<?php echo $store_uid; ?>);' value='VIEW PROFILE'/> </td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" align="center" class="black18"><strong>Sequential Targeting Projects</strong></td>
            </tr>
          </table>
    
    
    <table class="table table-hover" width="100%" >
      <tr class="select_font_14">
        <th width="20%"  align="left" valign="bottom">Level 1 <br />Targeting</th>
        <th width="20%"  align="left" valign="bottom">Level 2 <br />Targeting</th>
        <th width="20%"  align="left" valign="bottom">Level 3 <br />Targeting</th>
        <th width="10%"  align="center" valign="bottom">Use File</th>
        <th width="10%"  align="center" valign="bottom">Households</th>
          <th width="10%"  align="center" valign="bottom">Refine</th>
          <th width="10%"  align="center" valign="bottom">Profile</th>
          <th width="10%"  align="center" valign="bottom">Delete</th>
          <th width="10%"  align="center" valign="bottom">List</th>
      </tr>
      <?php 

		
$query = "SELECT * FROM amfd_stores WHERE client_id = $client_id AND master_file = $store_uid AND use_yn = 5 ORDER BY store_uid DESC ";

	if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$temp_sequential_store_uid = $row['store_uid'];	
				$temp_trait1 = 	$row['trait_name'];	
				$allow_delete1a = 1;
				
						// check if dependants exist - if yes then do not show delete store button or refine
						$query1a = "SELECT * FROM amfd_stores WHERE client_id = $client_id AND master_file = $temp_sequential_store_uid AND use_yn = 5 ORDER BY store_uid DESC ";
						if ($result1a = mysqli_query($link, $query1a)) {
							while ($row1a = mysqli_fetch_assoc($result1a)) {
								$allow_delete1a = 0;
							}}
					
		echo "<tr><td align='left'>" . $row['trait_name'] . "</td>";
		echo "<td>&nbsp;</td>";
		echo "<td>&nbsp;</td>";
		
		echo "<td><a class='btn btn-success' href='javascript:ROUTESTOREsubmit(" . ($row['store_uid'] * 3571) .");'><i class='fa fa-download pull-left'></i> </a></td>";
		
		
		
		echo "<td align='center'>" . $row['hh_count'] . "</td>";
		if($allow_delete1a > 0) {
			echo "<td align='center'><a class='btn btn-default' width='25' align='right' href='javascript:seqDEMOsubmit(" . $row['store_uid'] . ");'><i class='fa fa-edit pull-left'></i>Refine</a></td>"; }
			else { echo "<td>&nbsp;</td>"; }
			
			echo "<td align='center'><a class='btn btn-default' width='25' align='right' href='javascript:STOREprofilesubmit(" . $row['store_uid'] . ");'><i class='fa fa-user pull-left'></i>Profile</a></td>";	
		if($allow_delete1a > 0) 
			{ echo "<td align='center'><a class='btn btn-default col_red' width='25' align='right' href='javascript:DELETESTOREsubmit(" . $row['store_uid'] . ");'><i class='fa fa-trash-o'></i></a></td>"; }
			else { echo "<td>&nbsp;</td>"; }
			
		echo "<td><a class='btn btn-default' width='25' align='right' href='javascript:VIEWsubmit(" . $row['store_uid'] . ");'><i class='fa fa-download'></i></a></td>";				
		echo "</tr>";
				
				

				
				$query2 = "SELECT * FROM amfd_stores WHERE client_id = $client_id AND master_file = $temp_sequential_store_uid AND use_yn = 5 ORDER BY store_uid DESC ";

					if ($result2 = mysqli_query($link, $query2)) {
							while ($row2 = mysqli_fetch_assoc($result2)) {
						$temp_sequential_store_uid2 = $row2['store_uid'];
						$temp_trait2 = 	$row2['trait_name'];
						$allow_delete2a = 1;
						
								// check if dependants exist - if yes then do not show delete store button
						$query2a = "SELECT * FROM amfd_stores WHERE client_id = $client_id AND master_file = $temp_sequential_store_uid2 AND use_yn = 5 ORDER BY store_uid DESC ";
						if ($result2a = mysqli_query($link, $query2a)) {
							while ($row2a = mysqli_fetch_assoc($result2a)) {
								$allow_delete2a = 0;
							}}
							
						echo "<tr><td>" . $temp_trait1 . "</td>";				
						echo "<td align='left'>" . $row2['trait_name'] . "</td>";
						echo "<td>&nbsp;</td>";
						
						echo "<td><a class='btn btn-success' href='javascript:ROUTESTOREsubmit(" . ( $row2['store_uid'] * 3571) .");'><i class='fa fa-download pull-left'></i> </a></td>";
						
						echo "<td align='center'>" . $row2['hh_count'] . "</td>";
						if($allow_delete2a > 0) {
							echo "<td align='center'><a class='btn btn-default ' width='25' align='right' href='javascript:seqDEMOsubmit(" . $row2['store_uid'] . ");'><i class='fa fa-edit pull-left'></i>Refine</a></td>";
							}
							else { echo "<td>&nbsp;</td>"; }
			
						echo "<td align='center'><a class='btn btn-default' width='25' align='right' href='javascript:STOREprofilesubmit(" . $row2['store_uid'] . ");'><i class='fa fa-user pull-left'></i>Profile</a></td>";
						
						if($allow_delete2a > 0) 
							{ echo "<td align='center'><a class='btn btn-default col_red' width='25' align='right' href='javascript:DELETESTOREsubmit(" . $row2['store_uid'] . ");'><i class='fa fa-trash-o'></i></a></td>"; }
							else { echo "<td>&nbsp;</td>"; }
							echo "<td><a class='btn btn-default' width='25' align='right' href='javascript:VIEWsubmit(" . $row2['store_uid'] . ");'><i class='fa fa-download'></i></a></td>";	
														
						echo "</tr>";
				
				
						$query3 = "SELECT * FROM amfd_stores WHERE client_id = $client_id AND master_file = $temp_sequential_store_uid2 AND use_yn = 5 ORDER BY store_uid DESC ";
	
						if ($result3 = mysqli_query($link, $query3)) {
								while ($row3 = mysqli_fetch_assoc($result3)) {
							echo "<tr><td>" . $temp_trait1 . "</td>";
							echo "<td>" . $temp_trait2 . "</td>";				
							echo "<td align='left'>" . $row3['trait_name'] . "</td>";
							
							echo "<td><a class='btn btn-success' href='javascript:ROUTESTOREsubmit(" . ($row3['store_uid'] * 3571) .");'><i class='fa fa-download pull-left'></i> </a></td>";
							
							echo "<td align='center'>" . $row3['hh_count'] . "</td>";
							echo "<td>&nbsp;</td>";
							echo "<td align='center'><a class='btn btn-default' width='25' align='right' href='javascript:STOREprofilesubmit(" . $row3['store_uid'] . ");'><i class='fa fa-user pull-left'></i>Profile</a></td>";
							echo "<td align='center'><a class='btn btn-default col_red' width='25' align='right' href='javascript:DELETESTOREsubmit(" . $row3['store_uid'] . ");'><i class='fa fa-trash-o'></i></a></td>";	
							echo "<td><a class='btn btn-default' width='25' align='right' href='javascript:VIEWsubmit(" . $row3['store_uid'] . ");'><i class='fa fa-download'></i></a></td>";								
							echo "</tr>";
							}}
				
				}}
				
			}				
		
	}
	

?>
  </table>


      </div>
  </div>
</div> 

<script>
 document.getElementById('proc_div').style.display ="none";
 </script>