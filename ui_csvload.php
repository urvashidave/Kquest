
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
<?php 

?>

<SCRIPT language="JavaScript">

function change_list_function() {
document.getElementById("kml_id").value = document.getElementById("client_kml_list").value;
 		
}
</script>


 <table border="0" align="center" cellpadding="0" cellspacing="0" >
   <tr>
     <td colspan="2" align="left" valign="top"> &nbsp;
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td><table width="430" height="180" border="0" cellspacing="0" cellpadding="5">
             <tr>
               <td width="38%" valign="top"><img src="csv.jpg" width="150" height="150" alt="load file" /></td>
               <td width="62%" valign="top"><span class="sblue" align='left' >New  trade area (Upload)<br />
                 <span class="black14" align='left' >The system will create a new store trade area based on the FSA LDU (postal codes) file you upload</span></span></td>
             </tr>
           </table></td>
           <td><div id="loading_image"/><img src="325.gif" width="180" height="180" alt="loading" />  
  </div></td>
         </tr>
       </table>
       
    &nbsp;</td>
   </tr>
   <tr>
     <td width="452" align="center" valign="top"><table width="90%" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
       <tr>
         <td valign="top" bgcolor="#FFFFFF" align='left' ><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
           <tr>
             <td valign="top" align='left' ><span class="sblue" align='left' >Step 1: Select your CSV file<br />
             </span><span class="black14" align='left' >Format: FSALDU (postal code) in the first column. </span></td>
           </tr>
           <tr>
             <td valign="top" align='left' ><input class="sblue" type="file" id="ufile" name="ufile" file-accept="csv" /></td>
             </tr>
         </table></td>
       </tr>
     </table></td>
     <td width="455" align="center" valign="top">
       
           <table width="90%" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
         <tr>
           <td valign="top" bgcolor="#FFFFFF" align='left' ><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
             <tr>
               <td colspan="2" valign="top" align='left' ><span class="sblue" align='left' >Step 2: Trade Area Details</span></td>
              </tr>
             <tr>
               <td valign="top" align='left' ><span class="black14">Store Number</span></td>
               <td valign="top">
                 <span class="black14" align='left' >
                 <input name="store_number" type="text" class="sgrey14" id="store_number" size="30"/>
                </span></td>
             </tr>
             <tr>
               <td valign="top"><span class="black14" align='left' >Store Name</span></td>
               <td valign="top"><span class="black14" align='left' >
                 <input name="store_name" type="text" class="sgrey14" id="store_name" size="30"/>
               </span></td>
             </tr>
             <tr>
               <td valign="top"><span class="black14" align='left' >Postal Code</span></td>
               <td valign="top"><span class="black14" align='left' >
                 <input name="store_pc" type="text" class="sgrey14" id="store_pc" size="30"/>
               </span></td>
             </tr>
             <tr>
               <td valign="top"><span class="black14" align='left' >Store Notes (optional)</span></td>
               <td valign="top"><span class="black14" align='left' >
                 <input name="store_notes" type="text" class="sgrey14" id="store_notes" size="30"/>
                </span></td>
             </tr>
             <tr>
               <td valign="top" align='left' ><span class="black14">Store KML</span></td>
               <td valign="top" align='left' >
                 <span class="black14">
                 <input name="kml_id" type="hidden" class="sgrey14" id="kml_id" value="0" size="30"/>
                 <select name="client_kml_list" id="client_kml_list" onchange="change_list_function()">
                   <option value="0">no KML</option>
                   <?php
				 
				 $query = "SELECT * FROM amfd_users WHERE user_id = $user_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
				}				
			mysqli_free_result($result);
		}
				 $query = "SELECT * FROM amfd_kml WHERE client_id = $client_id";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $kml_name = $row['kml_name'];
					  $kml_id = $row['kml_id'];
					  echo "<option value='" . $kml_id . "'>" . $kml_name . "</option>";					  
				}				
			mysqli_free_result($result);
		}
				 
				 ?>
                 </select>
                 </span></td>
             </tr>
           </table></td>
         </tr>
       </table>
       <br />
       <table width="90%"  height="125px" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
         <tr>
           <td align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="5">
             <tr>
               <td width="68%" valign="top" align='left' ><p><span class="sblue" align='left' >Step 3: Confirmation</span><br />
               </p></td>
             </tr>
           </table>
           <input name="UPsubmit3" type="submit" class="sgrey14" id="UPsubmit3" value="Save and Continue"  onclick="POSTCSVsubmit();" /></td>
         </tr>
       </table>
       <br /></td>
   </tr>
 </table>
 <SCRIPT language="JavaScript">
 document.getElementById('loading_image').style.display ="none";

</script>



<?php
$color = $_POST['next_page_color'];
if($color=="red"){?>

<style>
.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #990033;
}
.sblue{
color: #990033 ;
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
color: #147EA7 ;
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
