
<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<?php 
if (isset($_POST["user_client_id"])) {	$user_client_id = $_POST["user_client_id"];} else $user_client_id = 0;
$new_user_user_company = "Unknown - please return to admin page and try again";
// get company details
$query = "SELECT * FROM amfd_company WHERE client_id = $user_client_id  ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					    $new_user_user_company = $row['client_name'];			  
				}				
			mysqli_free_result($result);
		}
		
?>




 <table border="0" align="center" cellpadding="0" cellspacing="0" >
   <tr>
     <td colspan="2" align="left" valign="top"> &nbsp;
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td><table width="430" height="180" border="0" cellspacing="0" cellpadding="5">
             <tr>
               <td width="38%" valign="top"><img src="csv.jpg" width="150" height="150" alt="load file" /></td>
               <td width="62%" valign="top" class="sblue" align='left' >New  trade area (Upload)<br />
                 <span class="sgrey12" align='left' >The system will create a new store trade area based on the FSA LDU (postal codes) file you upload</span></td>
             </tr>
           </table></td>
           <td><div id="loading_image"/><img src="325.gif" width="180" height="180" alt="loading" />  
  </div></td>
         </tr>
       </table>
       
    &nbsp;<span class="sblue">
    <input name="user_client_id" type="hidden" id="user_client_id" value="<?php echo $user_client_id; ?>" />
    </span><span class="sorange24" align='left' >    UPLOAD FOR CLIENT: <?php echo $new_user_user_company; ?></span></td>
   </tr>
   <tr>
     <td width="452" align="center" valign="top"><table width="90%" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
       <tr>
         <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
           <tr>
             <td valign="top" align='left' ><span class="sblue" align='left' >Step 1: Select your CSV file<br />
             </span><span class="sgrey14" align='left' >Format: FSALDU (postal code) in the first column. </span></td>
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
           <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="100" border="0" cellspacing="0" cellpadding="5">
             <tr>
               <td colspan="2" valign="top"><span class="sblue" align='left' >Step 2: Trade Area Details</span></td>
              </tr>
             <tr>
               <td valign="top"><span class="sgrey12" align='left' >Store Number</span></td>
               <td valign="top">
                 <span class="sgrey12" align='left' >
                 <input name="store_number" type="text" class="sgrey14" id="store_number" size="30"/>
                </span></td>
             </tr>
             <tr>
               <td valign="top"><span class="sgrey12" align='left' >Store Name</span></td>
               <td valign="top"><span class="sgrey12 align='left' ">
                 <input name="store_name" type="text" class="sgrey14" id="store_name" size="30"/>
               </span></td>
             </tr>
             <tr>
               <td valign="top"><span class="sgrey12" align='left' >Postal Code</span></td>
               <td valign="top"><span class="sgrey12" align='left' >
                 <input name="store_pc" type="text" class="sgrey14" id="store_pc" size="30"/>
               </span></td>
             </tr>
             <tr>
               <td valign="top"><span class="sgrey12" align='left' >Store Notes (optional)</span></td>
               <td valign="top"><span class="sgrey12" align='left' >
                 <input name="store_notes" type="text" class="sgrey14" id="store_notes" size="30"/>
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
               <td width="68%" valign="top"><p><span class="sblue" align='left' >Step 3: Confirmation</span><br />
               </p></td>
             </tr>
           </table>
           <input name="UPsubmit3" type="submit" class="sgrey14" id="UPsubmit3" value="Save and Continue"  onclick="POSTCSVmfdsubmit();" /></td>
         </tr>
       </table>
       <br /></td>
   </tr>
 </table>
 <SCRIPT language="JavaScript">
 document.getElementById('loading_image').style.display ="none";

</script>
<style>
.sblue{
color:#990033;
}

</style>