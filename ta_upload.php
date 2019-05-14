<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<?php if (isset($_POST["client_to_add"])) {	$client_to_add = $_POST["client_to_add"];} else $client_to_add = "";

$temp_insert_client = 0;
if($client_to_add =="") $do_not_add_client =""; 
else {
	$query = "SELECT * FROM mfd_clients WHERE client_name = '$client_to_add' ";
	if ($result = mysqli_query($link, $query)) {
	while ($row = mysqli_fetch_assoc($result)) {
	$temp_insert_client = 1;
	}				
	mysqli_free_result($result);
	}
	
if($temp_insert_client > 0) mysqli_query($link,"INSERT INTO mfd_clients (client_name) VALUES ('$client_to_add') ");	

}
?>


<table width="100%" height="500" bgcolor="#F4F4F4" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="396" height="90" align="left" valign="middle" bgcolor="#FFFFFF"><span class="sreseller">Manage Stores</span>
  <div id="loading_image"/><img src="325.gif" width="220" height="220" alt="loading" />  
  </div></td>
    <td width="175" align="left" valign="top" bgcolor="#FFFFFF"><span class="sbutton">Guide</span><span class="sreseller"><span class="sgrey14"><br />
      Upload a CSV file containing the store ID and full FSALDU for each store's trade area.<br />
      <span class="sblue">
      <input name="rad_cust_ta" type="hidden" id="rad_cust_ta" value="region" />
      <input name="rad_level_type" type="hidden" id="rad_level_type" value="pc" />
      <input name="file_to_delete" type="hidden" id="file_to_delete" />
      </span></span></span><span class="sgrey14">Column 1: Store ID<br />
Column 2: FSALDU      </span><span class="sreseller"><span class="sgrey14"><br />
    </span></span></td>
    <td width="224" align="right" valign="top" bgcolor="#FFFFFF"><span class="sbutton">Sample</span><br />      
    <img src="file_format.jpg" width="217" height="96" alt="sample format" /></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="right" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td align="center" valign="top"><table width="425" border="0" cellpadding="5" cellspacing="0" class="Example_E1">
          <tr>
            <td><span class="sblue">Client and Stores available</span><span class="sgrey12"><br />
              (click 'X' to remove store and store data)
              <br />
              
              <?php 
			  
			  $query = "SELECT * FROM mfd_clients ";
	if ($result = mysqli_query($link, $query)) {
	while ($row = mysqli_fetch_assoc($result)) {
		$client_id_array[] = $row['client_id'];
		$client_name_array[] = $row['client_name'];
	}				
	mysqli_free_result($result);
	}
	
		
for ( $psy_vars3 = 0; $psy_vars3 <sizeof($client_id_array); $psy_vars3 ++) { 
		echo $client_name_array[$psy_vars3] . " (client ID " . $client_id_array[$psy_vars3] . ")<br />" ;
			$query = "SELECT * FROM mfd_storelist WHERE client_id = $client_id_array[$psy_vars3] AND scoredyn = 'yes' ";	
			if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
			$store_id = $row['store_id'];
						echo $store_id . "&nbsp;&nbsp;&nbsp;<img src='delete.jpg' width='12' height='12' alt='delete' onClick='Deletebuttonb( \"" . $client_id_array[$psy_vars3] . "_" . $store_id . "\" );' />" ."<br />" ;			
			}  echo  "<br />" ;	
			}
		
}
          ?></span></td>
          </tr>
        </table>
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><table width="425" border="0" cellpadding="5" cellspacing="0" class="Example_E1">
                <tr>
                  <td width="278"><span class="sblue">Add a new client<br />
                    </span><span class="sgrey12">1. Enter client name </span><span class="sblue"><br />
                    <input name="client_to_add" type="text" id="client_to_add" />
                  <input name="Upload2" type="button" class="sorange20" id="Upload2" onclick= "ADDclient();" value="Add Client" />
                  <br />
                  <br />
                      </span>
                    <hr color="#666666" />
                    <span class="sblue"><br />
                  Upload a store trade area file<br />
                    </span><span class="sbutton"><br />
</span><span class="sgrey14">1. Select Client</span><span class="sgrey12"> <br />
<?php 

$query = "SELECT * FROM mfd_storelist WHERE client_id = $client_id_array[$psy_vars3] AND scoredyn = 'yes' ";	
			if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
			$client_id = $row['client_id'];
			$client_name = $row['client_name'];
						echo "<input type='radio' name='storea' id='client_id1' value='" . $client_id . "' />" . $client_name ."<br />";		
			}  
			}


?>
</span><span class="sblue"><br />
<br />
</span><span class="sgrey14">2. Select CSV File</span><span class="sblue"><br />
<input class="sgrey14" type="file" id="ufile" name="ufile" file-accept="csv" />
</span> <br />
<br />
<br />
<input name="client_id_output" type="hidden" id="client_id_output" size="5" />
<input name="Upload1" type="button" class="sorange20" id="Upload1" onclick= "UPLOADNOWcalc();" value="Upload File" /></td>
                </tr>
              </table>
<br /></td>
              </tr>
      </table></td>
        </tr>
    </table>
<SCRIPT language="JavaScript"> document.getElementById('client_to_add').value = ""; 
document.getElementById('loading_image').style.display="none";</script>

