<?php
$color = $_POST['next_page_color'];
if($color=="red"){?>

<style>
.sblue{
color: #990033;
}
.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #990033;
}
.red:hover {
    color: #b74c70;
}
.stitle {

	color: #990033;

}
.sreseller {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #990033;
}
.sreseller:hover {	

	color: #b74c70;
}
</style>


<?php } else {
?>

<style>
.sblue{
color: #147EA7;
}
.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #147EA7;
}
.red:hover {
    color:#2a6496 ;
}
.stitle {

	color: #147EA7;

}
.sreseller {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: #147EA7;
}
.sreseller:hover {	

	color: #2a6496;
}

</style>

<?php
}
?>


<script language="javascript"> 
document.getElementById('next_page').value = "ui_home.php"; 

function postpolyedit() {

	document.getElementById('next_page').value = "ui_postpolyedit.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 		
}

function pick_store() {
	var val2 = document.getElementById("store_list").value;
	document.getElementById('store_uid').value = val2;
	document.getElementById('confirm_box').value = "STORE SELECTED - OKAY";
	
}
</script>

<?php // database login
include "db_connect.php";

// post fields


	 
// load new store data- get user information
$query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
				}				
			mysqli_free_result($result);
		}

?>
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<table width="900"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F4F4F4">
  <tr >
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr >
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><br />
      <p><span class="sblue">Select a store to edit</span><span class="black14">
      
        <input name="store_uid" type="hidden" class="sgrey14" id="store_uid"  size="30"/>
        <input name="confirm_box" type="text" class="sgrey14" id="confirm_box"  size="30"/>
      </span></p>
      <p>
        <select name="store_list" id="store_list" onchange="pick_store()">
        <option value="Select a store" disabled="disabled" selected="selected">Select a Store</option>
        <?php 
		
	$query = "SELECT * FROM amfd_stores WHERE  client_id = $client_id AND use_yn < 1 AND radius_yn = 0 ORDER BY store_number  ";
	if ($result = mysqli_query($link, $query)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$store_number = $row['store_number'];
			$store_name = $row['store_name'];
			$store_uid = $row['store_uid'];
	
			echo "<option value=" . $store_uid .">" . $store_number . " " . $store_name . "</option>";
		
					
	}}
				
				
?>
					
        
      
        </select>

    </p></td>
    <td width="50%" align="center" valign="top" bgcolor="#FFFFFF"><table width="95%" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
      <tr>
        <td valign="top" bgcolor="#FFFFFF" align='left' ><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td valign="top" align='left' ><p><span class="sblue" align='left' >Upload a polygon boundary file</span><span class="sblue" align='left' ><br />
            </span><span class="pbody14" align='left' >Format: CSV - latitude first column, longitude second column</span></p></td>
          </tr>
          <tr>
            <td valign="top" align='left' ><p>
              <input class="pbodyemp" type="file" id="ufile2" name="ufile2" file-accept="csv" />
            </p>
              <p>
                <input name="UPsubmit3" type="submit" class="sgrey14" id="UPsubmit3" value="Save and Continue"  onclick="postpolyedit();" />
              </p></td>
          </tr>
        </table></td>
      </tr>
    </table>
      <p>&nbsp;</p>
      <p>
        <input name="UPsubmit5" type="submit" class="sgrey14" id="UPsubmit5" value="Cancel"  onclick="HOMEsubmit();" />
      </p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<style>



