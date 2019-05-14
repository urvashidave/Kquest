<style>

.pheading {

    color: red;

    font-family: Arial Narrow,Arial,Helvetica,sans-serif;

    font-size: 34px;

    font-weight: bold;

}

.stitle {

	color: #900C3F;

}

.stitle1 {
    color: #900c3f;
}



.stitle {

	color: #900C3F;

}



</style>



<div id="page-wrap" class="print_pages">

<table width="102" height="645" border="0" cellspacing="0" cellpadding="0" bgcolor="">

<tr>

<td width="900" height="187" colspan="2" align="center"  valign="middle" class="blue22" style="font-weight:bold; "background-color: #900c3f;"><span class="blue22" ><strong class="stitle"> 

<!--to put message here  -->

<?php 

$profile_pic_title = "DETAILED REPORT";

if ($detail_show == 2)  {

	if (strpos(strtolower($change_header), 'target') !== false) {

		$profile_pic_title = "TARGET GROUP DEMOGRAPHIC REPORT";

	} else {

		$profile_pic_title = "DEMOGRAPHIC REPORT";

	}

}





if ($detail_show == 3) 

$profile_pic_title = "SEGMENTATION REPORT";



if ($detail_show == 4)  {

	if (strpos(strtolower($change_header), 'target') !== false) {

		$profile_pic_title = "TARGET GROUP SPENDING REPORT";

	} else {

		$profile_pic_title = "SPENDING REPORT";

	}

}







if ($detail_show == 4) 

$profile_pic_title = "SPENDING REPORT";

if ($detail_show == 5) 

$profile_pic_title = "MEDIA REPORT";

if ($detail_show == 6) 

$profile_pic_title = "LIFESTYLE REPORT";

if ($detail_show == 7) 

$profile_pic_title = "AUTOMOTIVE REPORT";



if ($detail_show == 9) 

$profile_pic_title = "HOME IMPROVEMENT REPORT";

echo $profile_pic_title;

?>

</strong></span>



<span class="black22" style="font-weight: bold;"><br>

<?php echo $change_title; ?></span><br>

<span class="black22" style="font-weight: normal;">Benchmark: <?php echo $tbench_store_number . " " . $tbench_store_name; ?><br>

<?php echo $change_prepared; ?></span>

</td>

</tr>

<tr>

<td height="278" colspan="2" align="center" valign="top"><?php 

$profile_pic_display = "pics560/connections_wide.jpg";

if ($detail_show == 0 || $detail_show == 2) 

$profile_pic_display = "pics560/f_geny_w2560.jpg";

if ($detail_show == 3) 

$profile_pic_display = "pics560/segmentation1.png";

if ($detail_show == 4) 

$profile_pic_display = "pics560/shopping.jpg";

if ($detail_show == 5) 

$profile_pic_display = "pics560/media1.jpg";

if ($detail_show == 6) 

$profile_pic_display = "pics560/lifestyle1.jpg";

if ($detail_show == 7) 

$profile_pic_display = "pics560/car_pic.jpg";

if ($detail_show == 8) 

$profile_pic_display = "image3/himprove.jpg";

?> 

<img src= "<?php echo $profile_pic_display; ?>" alt="cover" width="720" height="360" class="Example_E1"></td>

</tr>

<tr >

<td colspan="2" align="center">

</td>

</tr>

<tr>



<td colspan="2" align="center" valign="top" class="sorange16" style="padding-top: 15px;"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" align="left"><img src="image3/KQUEST.png" width="113" height="50" alt="KQUEST" /></td>
    <td width="50%" align="right"> <?php if($client_use_logo >0) echo "<img src='" . $client_logo . "' alt=' '>"; ?> </td>
  </tr>
</table></td>

</tr>

</table>

</div>

<style>





	.pbodyemp {

		font-weight: normal !important;

	}

	.black14 {

    	font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif !important;

    	color: #333 !important;

    	font-size: 14px !important;

    	font-weight: normal !important;

    	padding: 0 0 9px !important;

	}

</style>

<?php 

if (strpos(strtolower($change_header), 'target') !== false){

	echo '

	<style>

	.blue22 {

		font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif !important;

		color: #900C3F !important;

		font-size: 32px !important;

		font-weight: bold !important;

		padding: 0 0 9px !important;

	}

	</style>

	';

}

?>

