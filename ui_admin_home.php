<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<SCRIPT language="JavaScript">

function ADDKMLsubmit() {
document.getElementById('next_page').value = "ui_kml_add.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function EDITCOsubmit() {
document.getElementById('next_page').value = "ui_co_edit.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

</script>
<?php




include "db_connect.php";

$query = "SELECT client_id FROM amfd_company ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id_array[] = $row['client_id'];					  
				}				
			mysqli_free_result($result);
		}	

for ($i=0; $i<sizeof($client_id_array); $i++) {
	$client_details[$i]['user_company'] = "Unknown";
	$client_details[$i]['client_code'] = "Not assigned";
	$client_details[$i]['users'] =0;
	$client_details[$i]['stores'] = 0;
	$client_details[$i]['reports'] =  0;
	$client_details[$i]['files'] = 0;
	$client_details[$i]['report_date'] = "Not run yet";
	
	$query = "SELECT client_code, client_name FROM amfd_company WHERE client_id = $client_id_array[$i]";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_details[$i]['user_company'] = $row['client_name'];
					  $client_details[$i]['client_code'] = $row['client_code'];
				}	
		}
		
	$query = "SELECT count(user_id) as number_of_users FROM amfd_users WHERE client_id = $client_id_array[$i]";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  //$client_details[$i]['user_company'] = $row['user_company'];
					  //$client_details[$i]['client_code'] = $row['client_code'];
					  $client_details[$i]['users'] = $row['number_of_users'];
				}	
		}	
}mysqli_free_result($result);

for ($i=0; $i<sizeof($client_id_array); $i++) {
	$query = "SELECT count(store_uid) as number_of_stores FROM amfd_stores WHERE client_id = $client_id_array[$i]";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_details[$i]['stores'] = $row['number_of_stores'];
				}	
		}	
}mysqli_free_result($result);

for ($i=0; $i<sizeof($client_id_array); $i++) {
	$query = "SELECT count(report_uid) as number_of_reports, sum(Sent_MFD_yn) as number_files_sent FROM amfd_reports WHERE client_id = $client_id_array[$i] ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_details[$i]['reports'] = $row['number_of_reports'];
					  $client_details[$i]['files'] = $row['number_files_sent'];
				}	
		}	
}mysqli_free_result($result);

for ($i=0; $i<sizeof($client_id_array); $i++) {
	$query = "SELECT report_date FROM amfd_reports WHERE client_id = $client_id_array[$i] ORDER BY report_uid DESC LIMIT 1";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $client_details[$i]['report_date'] = $row['report_date'];
				}	
		}	
}mysqli_free_result($result);





?>
<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td width="24%" align="left" valign="top" bgcolor="#FFFFFF"><span class="sblue">MFD Administration </span><span class="sgrey14"><br />
      <br /><div id="error_note" class="sorange20"></div>
    </span></td>
    <td width="38%" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="38%" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="76%" align="center" valign="top" bgcolor="#FFFFFF"><input name="ads2" type="button" class="sblue" id="ads2" value="Add a New Company" onclick="ADDCOMPANYsubmit();" /></td>
  </tr>
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="3" align="left" valign="top" bgcolor="#FFFFFF"><span class="sblue">
      <input name="user_client_id" type="hidden" id="user_client_id" size="50" ?>
    </span></td>
  </tr>
  <tr >
    <td colspan="4" align="center" valign="top" bgcolor="#FFFFFF"><br />
      <span class="sblue">Company activity report. <br />
      Your authorization code is : <?php echo $user_id; ?> 
      <br />
      Click on Company name to edit or add users.</span></td>
  </tr>
  <tr >
    <td colspan="4" align="center" valign="top" bgcolor="#FFFFFF"><table width="800" border="1" cellpadding="0" cellspacing="0" class="sgrey12">
      <tr class="sblue12">
        <td width="83" align='left' >Client code</td>
        <td width="265" align='left' >Company Name</td>
        <td width="65" align='left' >Users</td>
        <td width="78" align='left' >Stores</td>
        <td width="81" align='left' >Reports Run</td>
        <td width="86" align='left' >Files sent for targeting</td>
        <td width="126" align='left' >Last use of system</td>
      </tr>
      
      <?php
if($user_id > 0 && $user_id <4) {
      for ($i=0; $i<sizeof($client_id_array); $i++) {
			echo "<tr><td>" . $client_details[$i]['client_code'] . "</td>";
			echo "<td align='left' ><a href='javascript:PICKCOMPANYsubmit(" . $client_id_array[$i] . ");'>" . $client_details[$i]['user_company'] . "</a></td>";
			echo "<td align='left' >" . $client_details[$i]['users'] . "</td>";
			echo "<td align='left' >" . $client_details[$i]['stores'] . "</td>";
			echo "<td align='left' >" . $client_details[$i]['reports'] . "</td>";
			echo "<td align='left' >" . $client_details[$i]['files'] . "</td>";
			echo "<td align='left' >" . $client_details[$i]['report_date'] . "</td></tr>";
	  }
}
?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
