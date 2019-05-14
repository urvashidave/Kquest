<script language="javascript"> 
document.getElementById('next_page').value = "ui_home.php"; 

function postpolycsv() {

	document.getElementById('next_page').value = "ui_postpolycsv.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 		
}
</script>

<?php // database login
include "db_connect.php";

// post fields
if (isset($_POST["rp_mapdetails"])) {	$rp_mapdetails = $_POST["rp_mapdetails"];} else $rp_mapdetails = 0;
if (isset($_POST["store_number"])) {	$store_number = addslashes($_POST["store_number"]);} else $store_number = 0;
if (isset($_POST["store_name"])) {	$store_name = addslashes($_POST["store_name"]);} else $store_name = "N/A";
if (isset($_POST["store_pc"])) {	$store_pc = addslashes($_POST["store_pc"]);} else $store_pc = "M8V2B4";

 $store_pc = str_replace("([A-Z0-9]+)","",$store_pc);
	  $store_pc = str_replace(" ","",$store_pc);


if (isset($_POST["store_notes"])) {	$store_notes = $_POST["store_notes"];} else $store_notes = " ";
if (isset($_POST["kml_id"])) {	$kml_id = $_POST["kml_id"];} else $kml_id = 0;

if ($store_number == "") $store_number = "N/A";
if ($store_name == "") $store_name = "N/A";
$file_is_good_yn = 0;

// error fixe defaults
$store_uid = 0;
$files_loaded_count = 0;
$time1['start'] = microtime(true);
// add CSV file to database

if ( $_FILES['ufile']['tmp_name'] )
 {
$my_file = $_FILES['ufile']['tmp_name'];
$file_name = pathinfo($_FILES['ufile']['name']);
$up_file_name = $file_name['basename'];
$file_is_good_yn = 1;
 }

$handle = fopen("$my_file", "r");
	$row_count = 0;
	$saver_count = 0;
	$geo_list = " ";
	$post_count = 0;
	$pc_name = "";
	

	
 
	 
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

		mysqli_query($link,"INSERT INTO amfd_stores (client_id, store_number, store_name, store_notes, use_yn, store_pc, kml_id) VALUES ($client_id, '$store_number', '$store_name', '$store_notes', 0, '$store_pc', $kml_id) ");

// load new store data- get store_uid
$query = "SELECT * FROM amfd_stores WHERE client_id = $client_id and store_number = '$store_number' and use_yn = 0 ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_uid = $row['store_uid'];
				}				
			mysqli_free_result($result);
		}
// retrieve PC from file	

if(	$file_is_good_yn > 0) {
		while(! feof($handle))
	  {
	  $temp_data[0] = (fgetcsv($handle)); 
	  $c_data[$row_count] = $temp_data[0];
	  $temppc = $c_data[$row_count][0];
	  $temppc = str_replace('-', '', $temppc);
	  $temppc = str_replace(' ', '', $temppc);
	  $temppc = preg_replace('/[^A-Za-z0-9\-]/', '', $temppc);
	 
	  // Valid postal code
		  if(strlen($temppc)==6) {	  
			  $pc_name .= "(" . $store_uid . ", '" . $temppc . "'),";  
			  $row_count = $row_count +1;
			  $saver_count = $saver_count +1;
			// Post postal code  
			
				if(	$saver_count > 5000) {
							$pc_name = rtrim($pc_name, ",");

									mysqli_query($link,"INSERT INTO amfd_pclist (store_uid, PostCode) VALUES $pc_name ");
							
							$saver_count = 0;
							$pc_name = "";
							unset($c_data);
				}
			  
		  }
	}
$pc_name = rtrim($pc_name, ",");
}
if(	$saver_count > 0) {
		mysqli_query($link,"INSERT INTO amfd_pclist (store_uid, PostCode) VALUES $pc_name ");
}
$time1['end'] = microtime(true);
?>
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
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
            <td  align='left' width="68%"><span class="sblue">Add a new store process is complete <br />
              Using 
              CSV Upload</span></td>
          </tr>
          <tr>
            <td  align='left' ><p class="pbody14"><span class="black14">
              <input name="store_number" type="hidden" class="sgrey14" id="store_number" value="<?php echo $store_number ; ?>" size="30"/>
            </span><span class="black14">
                <input name="store_name" type="hidden" class="sgrey14" id="store_name" value="<?php echo $store_name ; ?>" size="30"/>
                </span>
              Store Number: <?php echo $store_number; ?><br />
              Store Name: <?php echo $store_name; ?><br />
              Store Notes: <?php echo $store_notes; ?><br />
              Time to upload: <?php echo round(($time1['end']-$time1['start']),2); ?> seconds<br />
<br />

              Records: <?php echo number_format($row_count); ?>
              <input name="store_selected" type="hidden" id="store_selected" value="<?php echo $store_uid;?>" />
              unique FSALDU (postal codes) analyzed
              </p></td>
          </tr>
        </table></td>
      </tr>
    </table>
      <br />
      <table width="95%" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
        <tr>
          <td valign="top" bgcolor="#FFFFFF" align='left' ><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td valign="top" align='left' ><p><span class="sblue" align='left' >OPTIONAL: Upload a polygon boundary file</span><span class="sblue" align='left' ><br />
              </span><span class="pbody14" align='left' >Format: CSV - latitude first column, longitude second column</span></p></td>
            </tr>
            <tr>
              <td valign="top" align='left' ><p>
                <input class="pbodyemp" type="file" id="ufile2" name="ufile2" file-accept="csv" />
              </p>
                <p>
                  <input name="UPsubmit3" type="submit" class="sgrey14" id="UPsubmit3" value="Save and Continue"  onclick="postpolycsv();" />
                </p></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <p><br>
        <br>
    </p></td>
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
      <p>
        <input name="UPsubmit5" type="submit" class="sgrey14" id="UPsubmit5" value="Back to Dashboard"  onclick="HOMEsubmit();" />
      </p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
