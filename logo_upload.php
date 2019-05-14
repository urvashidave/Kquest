<script language="javascript">
function CONFIRMLOGOsubmit() {
document.getElementById('next_page').value = "upload_script.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function CANCELLOGOsubmit() {
document.getElementById('cancel_logo').value = 999;
document.getElementById('next_page').value = "upload_script.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
function EDITCOMPANYsubmit() {
document.getElementById('next_page').value = "ui_company_edit.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
</script>
<?php 
if (isset($_POST["new_user_client_id"])) {	$new_user_client_id = $_POST["new_user_client_id"];} else $new_user_client_id = 0;
?>
<input name="cancel_logo" type="hidden" id="cancel_logo" value="0"  size="5" />
<input name="new_user_client_id" type="hidden" id="new_user_client_id" value="<?php echo $new_user_client_id; ?>"  size="5" /><br />
<br />
Select a logo that will be displayed on report pages (the system will resize to ensure it fits)<br />

    <input type="file" name="fileToUpload" id="fileToUpload"><br />
<br />

    
    <input name="edit_logo2" type="button" class="pbody12" id="edit_logo2" value="Cancel and Return" onclick="EDITCOMPANYsubmit();" />  . 
<input name="edit_logo3" type="button" class="pbody12" id="edit_logo3" value="No logo display" onclick="CANCELLOGOsubmit();" /> <br />
<br />

    <input name="edit_logo" type="button" class="sblue" id="edit_logo" value="UPLOAD LOGO" onclick="CONFIRMLOGOsubmit();" />



