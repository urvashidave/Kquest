
<script language="JavaScript">
function ADMINsubmit() {
document.getElementById('next_page').value = "ui_admin_home.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}
</script>
<?php

include "class.upload.php";

$target_dir = "company_logo";

//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$original_file_name = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $original_file_name ;

$temp_image_name = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_FILENAME);

$temp_image_name = preg_replace('/[^\da-z]/i', '', $temp_image_name);
$orig_image_name = 'orig_'. $temp_image_name;
$new_image_name = 'new_'. $temp_image_name;
$resized_image_name = 'resized_'. $temp_image_name;
date_default_timezone_set('America/New_York');
$date_1 = date('mdyhis', time());
$resized_image_name = 'resized_'. $date_1 . $temp_image_name;

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (isset($_POST["cancel_logo"])) {	$cancel_logo = $_POST["cancel_logo"];} else $cancel_logo = 0;

if($cancel_logo < 99) {
	// Check if image file is a actual image or fake image
	echo "Logo upload process checks<br />";
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image type check - okay<br />File type" . $check["mime"] . "<br />";
			$image_details = $check;
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	
	// Check if file already exists
	//if (file_exists($target_file)) {    echo "Sorry, a logo with that name already exists.";    $uploadOk = 0;}
	
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		
	
		
		
	$foo = new Upload($_FILES['fileToUpload']); 
	if ($foo->uploaded) {
	   // save uploaded image with no changes
	   $foo->Process($target_dir);
	   if ($foo->processed) {
		 echo 'original image uploaded - okay<br />';
	   } else {
		 echo 'error : ' . $foo->error;
	   }
	   // save uploaded image with a new name
	   $foo->file_new_name_body = $new_image_name;
	   $foo->Process($target_dir);
	   if ($foo->processed) {
		 echo 'image processing - okay<br />';
	   } else {
		 echo 'error : ' . $foo->error;
	   }   
	   // save uploaded image with a new name,
	   // resized to 100px wide
	   $foo->file_new_name_body = $resized_image_name;
	   
	   $foo->image_resize = true;
	   $foo->image_convert = gif;
		$foo->image_ratio           = true;
			if($image_details[0] > 150 || $image_details[1] >50) {
				$foo->image_x               = 150;
				$foo->image_y               = 50;	
			} else {
				$foo->image_x               = $image_details[0];
				$foo->image_y               = $image_details[1];	
			}
	   $foo->Process($target_dir);
	   if ($foo->processed) {
		 echo 'image resizing - okay<br />';
		 $foo->Clean();
	   } else {
		 echo 'error : ' . $foo->error;
	   } 
	} 
	   
	}
	
	
}
if (isset($_POST["new_user_client_id"])) {	$new_user_client_id = $_POST["new_user_client_id"];} else $new_user_client_id = 0;


if($cancel_logo > 99) {
	mysqli_query($link,"UPDATE amfd_company SET client_use_logo = 0, client_logo = '' WHERE client_id = $new_user_client_id ");
	echo 'cancel logo display - okay<br />';
	}

if($uploadOk > 0) { 
	$client_posted_logo_name = "company_logo/" . $resized_image_name . ".gif";
	mysqli_query($link,"UPDATE amfd_company SET client_use_logo = 1, client_logo = '$client_posted_logo_name' WHERE client_id = $new_user_client_id ");
	echo 'new logo saved and ready for reports - okay<br />';
}
echo '<br /><br />';
?>
<input name="new_user_client_id" type="hidden" id="new_user_client_id" value="<?php echo $new_user_client_id; ?>"  size="5" />
<input name="edit_logo" type="button" class="sblue" id="edit_logo" value="Return" onclick="ADMINsubmit();" />

<br />Original Logo Uploaded:
<?php if($cancel_logo > 99) echo 'no logo will be displayed<br />'; ?>
<img src="<?php echo $target_dir; ?>/<?php echo $original_file_name;?>" alt=" " />

<br />Logo as shown on reports (re-sized if necessary):
<?php if($cancel_logo > 99) echo 'no logo will be displayed<br />'; ?>
<img src="<?php echo $target_dir; ?>/<?php echo $resized_image_name ;?>.gif" alt=" " />
