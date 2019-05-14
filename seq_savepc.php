<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script>

function SEQ_select() {
	document.main_form.target = "_top";
document.getElementById('next_page').value = "ui_seqtarget.php";
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
</script>
<style>
.sblue{
color:#990033 !important;
}

</style>

<?php 
if (isset($_POST["store_uid"])) {	$store_uid = $_POST["store_uid"];} else $store_uid = 0;
if (isset($_POST["seq_decile_list"])) {	$seq_decile_list = $_POST["seq_decile_list"];} else $seq_decile_list = 0;
if (isset($_POST["list_vars"])) {	$list_vars = $_POST["list_vars"];} else $list_vars = " "; // var_checked_string - list of vars to target
if (isset($_POST["var1_fullname_saved"])) {	$var1_fullname_saved = $_POST["var1_fullname_saved"];} else $var1_fullname_saved = " "; // var_checked_string - list of vars to target
if (isset($_POST["seq_name"])) {	$seq_name = $_POST["seq_name"];} else $seq_name = " ";
$report_uid = 0;
if (isset($_POST["target_amount"])) {	$target_amount = $_POST["target_amount"];} else $target_amount = "0"; // target hh count

if (isset($_POST["report_uid"])) {	$report_uid = $_POST["report_uid"];} else $report_uid = $store_uid + 10000; // report_uid used in amfd_seq_pc table

include "db_connect.php";

$query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
					  $user_firstname = $row['user_firstname'];
					  $user_lastname = $row['user_lastname'];
				}				
			mysqli_free_result($result);
		}
$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $orig_store_name = $row['store_name'];
					  $orig_store_number = $row['store_name'];  
					  $orig_master_file = $row['master_file'];  
					  $orig_target_traits = $row['target_traits'];  
					  $orig_target_hh = $row['target_hh']; 
					  $orig_use_yn = $row['use_yn']; 
					  $orig_store_pc = $row['store_pc']; 
					  $orig_radius_yn = $row['radius_yn']; 
					  $orig_rp_radius = $row['rp_radius']; 
					  $orig_store_notes = $row['store_notes']; 
					  $orig_poly_yn = $row['poly_yn']; 
					  $orig_rp_poly = $row['rp_poly'];  
				}				
			mysqli_free_result($result);
		}
		
		
	$today_date = date("j F Y"); 
	$today_time = date("g:i a"); 
	$today_day = date("j");


mysqli_query($link,"INSERT INTO amfd_stores (client_id, store_number, store_name, store_notes, use_yn, store_pc, radius_yn, rp_radius, poly_yn, rp_poly, master_file, target_traits, trait_name, hh_count, seq_deciles) VALUES ($client_id, 'Sequential target', '$seq_name', '$var1_fullname_saved', 5, '$orig_store_pc', $orig_radius_yn, '$orig_rp_radius', $orig_poly_yn, '$orig_rp_poly', $store_uid, '$list_vars', '$var1_fullname_saved', $target_amount, '$seq_decile_list') ");

// load new store data- get store_uid
$query = "SELECT * FROM amfd_stores WHERE client_id = $client_id and store_name = '$seq_name' and use_yn = 5 and store_notes = '$var1_fullname_saved' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $new_store_uid = $row['store_uid'];
				}				
			mysqli_free_result($result);
		}		

include "db_connect_wg.php";
$temp_all_hh = 0;
$pc_counter = 0;
$pc_name3 = "";
// add pc list to the master store pc list - max number of households based on user input $target_amount
$query = "SELECT * FROM amfd_seq_pc WHERE store_uid = $report_uid ORDER BY (tot_score) DESC";
		if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
			if($temp_all_hh < $target_amount) {
				if($pc_counter < 5000) {
					$pc_name3 .= "(" . $new_store_uid . ",'" . $row['PostCode'] . "'),";
					$pc_counter = $pc_counter +1;			
				}
				else {
					$pc_name3 = rtrim($pc_name3, ",");
					$pc_list_to_insert[] = $pc_name3;
					$pc_counter = 0;
					$pc_name3 = "";				
				}	
				$temp_all_hh = $temp_all_hh + $row['hh_tot'] ;			
			}
		
			
		}
	}
if($pc_counter >0) {
	$pc_name3 = rtrim($pc_name3, ",");
	$pc_list_to_insert[] = $pc_name3;
}

include 'db_connect.php';
for ( $i = 0; $i < sizeof($pc_list_to_insert); $i ++) {	
	$temp_row = $pc_list_to_insert[$i];
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
            <td width="68%" align='left' ><span class="sblue">              Sequentially targeted region/area added:<br />
            </span>
            </td>
          </tr>
          <tr>
            <td align='left' ><p class="sgrey14">               New File Name: <?php echo $seq_name; ?><br>
             Targeting based on the file: <?php echo $orig_store_name; ?><br />
             <br>
                The top <?php echo number_format($temp_all_hh); ?> households selected <br>
                Based on the following traits:  <?php echo $var1_fullname_saved; ?><br>
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
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><br><input name="ads2" type="button" class="sblue" id="ads2" value="View Profile to Complete Process" onclick="javascript:STOREprofilesubmit('<?php echo $new_store_uid;?>');" /><br />
<input name="store_uid" type="hidden" id="store_uid" value="<?php echo $new_store_uid; ?>"  /></td>
  </tr>
</table>

<script>
 document.getElementById('proc_div').style.display ="none";
 </script>
 




