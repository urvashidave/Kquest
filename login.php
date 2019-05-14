<?php 
?>
<title>Welcome to MFD Targeting Genius</title>
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<body bgcolor = "#ffffff">
<SCRIPT language="JavaScript">
function dummy_proof_input(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)) 
          		 if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) ) return true;				 
			else
				return false;
			else        
         		return true;
      }
</SCRIPT>    
      
<form id="login_form" name="login_form" method="post" action="">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td align="center" valign="middle"><table width="650" class="Example_E1">
         <tr>
           <td><img src="mfd.jpg" width="150" height="75" alt="mfd"><br>
             <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            
                 <tr>
                   <td width="51%">&nbsp;</td>
                   <td width="200"><img src="spacer.gif" width="1" height="1"></td>
                   <td width="200"><img src="spacer.gif" width="200" height="1"><label for="next_page"></label>
                   <input name="next_page" type="hidden" id="next_page" value="ui_home.php">
                   <input size=25 name="user_company" type="hidden" value="Quant" ></td>
                   <td width="50"><img src="spacer.gif" width="50" height="1"></td>
                </tr>
                 <tr>
                   <td colspan="4" align="center" class="grey_24b"><br>
                     <span class="sorange20"><br>
                   <?php echo $display_wrong_login; ?></span></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td width="51%">&nbsp;</td>
                   <td width="200">&nbsp;</td>
                   <td width="200">&nbsp;</td>
                   <td width="50">&nbsp;</td>
                 </tr>
                 <tr>
                   <td class="sblue">&nbsp;</td>
                   <td class="sblue">Email:  </td>
                   <td><input name="user_email" type="text" class="sblue" id="user_email" size="25" /></td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td class="sblue">&nbsp;</td>
                   <td class="sblue">&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td class="sblue">&nbsp;</td>
                   <td class="sblue">Password:  </td>
                   <td><input name="user_password" type="password" class="sblue" id="user_password" size="25" /></td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
                   <td align="center"></td>
                   <td colspan="2" align="center"><input name="login_but" type="submit" class="sorange24" id="login_but" value="Login" /></td>
                   <td>&nbsp;</td>
                 </tr>
                 <tr>
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
                 </tr>
                 <tr>
                   <td colspan="4" align="center">&nbsp;</td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                 </tr>
           </table></td>
         </tr>
       </table></td>
     </tr>
   </table>
   <input name="login_check" type="hidden" class="blue_18b" id="login_check" value="check_login" size="15" />
  <input name="user_password_try_count" type="hidden" class="blue_18b" id="user_password_try_count" value="<?php echo $user_password_try_count; ?>" size="15" />
</form>
<?php 
?>