
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style type="text/css">
input,select{
	cursor:pointer;
}
body{
	overflow-x:hidden;
}
table,.btn ,h5,.h5{
	font-size:18px;
}

td,th,tr{
	text-align:center;
}
table td{
	text-align:center;
}
    body {
        background-color: #FFF;
        margin: 0;
        padding: 0;
    }
    #wrapper {
        width:915px;
		height:620px;
        margin-left:auto;
        margin-right:auto;
        background-color:#666666;
    }
	#wrapper2 {
        width:915px;
		height:620px;
        margin-left:auto;
        margin-right:auto;
        background-color:#666666;
    }
	@media print {
    .pagebreak {page-break-after: always;}
	}
 .bg-info{
	background-color:#900c3f !important;
 color:white;
 }
	
.print_pages {
  width: 910px;
  height: 620px;
  background: #fff;
  margin: 25px 0 0 0;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}
.print_pages_cover {
  width: 910px;
  height: 600px;
  background: #fff;
  margin: 25px 0 0 0;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
  box-shadow: 0px 0px 4px 1px rgba(150, 150, 150, .5);
}

input[type=checkbox] {
  transform: scale(1.4);
}
.h-30px{height: 30px; }
.m-r-10px{ margin-right:10px; }
.m-b-10px{ margin-bottom:10px; }
.m-b-15px{ margin-bottom:15px; }
.m-b-20px{ margin-bottom:20px; }
.w-5-pct{ width:5%; }
.w-10-pct{ width:10%; }
.w-15-pct{ width:15%; }
.w-20-pct{ width:20%; }
.w-25-pct{ width:25%; }
.w-30-pct{ width:30%; }
.w-35-pct{ width:35%; }
.w-40-pct{ width:40%; }
.w-45-pct{ width:45%; }
.w-50-pct{ width:50%; }
.w-55-pct{ width:55%; }
.w-60-pct{ width:60%; }
.w-65-pct{ width:65%; }
.w-70-pct{ width:70%; }
.w-75-pct{ width:75%; }
.w-80-pct{ width:80%; }
.w-85-pct{ width:85%; }
.w-90-pct{ width:90%; }
.w-95-pct{ width:95%; }
.w-100-pct{ width:100%; }
.display-none{ display:none; }
.padding-bottom-2em{ padding-bottom:2em; }
.width-30-pct{ width:30%; }
.width-40-pct{ width:40%; }
.overflow-hidden{ overflow:hidden; }
.margin-right-1em{ margin-right:1em; }
.right-margin{ margin:0 .5em 0 0; }
.margin-bottom-1em { margin-bottom:1em; }
.margin-zero{ margin:0; }
.text-align-center{ text-align:center; }
.background_grey {background-color: #EAEAEA;}
.red_font {color:#F00;}
.font_36 { font-size:36px;}
.table680 {
	font-size:14px; 
	text-decoration:none; 
	color:#333;
	height: auto;
	width: 900px;
	display:block;
}
</style>
<script type="text/javascript">

	 var checkedv='';
$(document).ready(function(){




	
	$("#error_2").hide();
	$("#errdiv").hide();

	$('input:checkbox').change(function(){

	
var day= $(this).closest('tr').children('td:eq(3)').find(":selected").text();

if($(this).is(":checked"))
{
	$(this).closest('tr').css("background-color", "#d4edda");
}

else{
	$(this).closest('tr').css("background-color", "white");
}

/*if ($(".checkbox:checked").length == 0){
        alert('all not checked');
    } else {
        alert(' all checked');
    }

/*
if($(this).is(":checked")) {
var selected =$(this).closest('tr').css("background-color", "#d4edda");
}
else{
	if( $(this).closest('tr').children('td:eq(5)').is(":checked"))
	{
		alert("hui");
	}
	else{
	
	var selected =$(this).closest('tr').css("background-color", "white");
	}
}

*/
if(day == "--SELECT DAY--"){
$("#errdiv").show();
}
else{
	$("#errdiv").hide();
	
}

	})
	$('select').removeAttr('selected').find('option:first').attr('selected', 'selected');
	var home;
	var appts;
	var totals;
	var mfdcode;
	var selected;
	$('input:checkbox').prop('checked', false);
$('select').change(function(){

	var selected =$(this).closest('tr').children('td:eq(5)');
var home = $(this).closest('tr').children('td:eq(6)');
var appts = $(this).closest('tr').children('td:eq(8)');

var homeselected = $(this).closest('input:checkbox').val();
	//alert(homeselected);
	

var totals = $(this).closest('tr').children('td:last');

var disttype = $(this).closest('tr').children('td:eq(4)');

	var mfd=$(this).closest('tr').children('td:eq(2)').text();
	var mfdcode=$(this).closest('tr').children('td:eq(1)').text();
	
	var day=$(this).find(":selected").val();
	
	//alert(day);
	//var day2=$(this).closest('tr').children('td:eq(3)').find(":selected").attr('id');
	var dayhome = $('#homev').html();
	$(this).closest('tr').children('td:eq(6)').html(dayhome);
	//$(this).closest('tr').children('td:eq(3)').find(":selected").val();
	//alert("day:"+day);
	//alert("day2:"+day2);

        var row_num =$(this).closest('tr').children('td:eq(0)').text();  

			//alert(row_num);
	//alert("selected---"+selected+"mfd -------"+mfd+"   ----day"+day+"");
	

	var id = "<?php echo $_POST['input_PK_ID'];?>";
	var selected =$(this).val();
	

	//alert(id);
	$.ajax({
    url: 'data.php',
    method: 'post',
	data: { dayselected: day,idv:id,day2v:row_num,mfd:mfdcode},
    success: function (data) {
		//alert(data);
		/*var searchString = 'No Dist';
    $(".responsive tr td:contains('" + searchString  + "')").each(function() {
    if ($(this).text() == searchString) {
		//alert($(this).parent().text());
       data = $(this).parent().remove();
    }  
	});*/
        console.log(data);

		var vars = data.split("-");
		//var vars2 = data.split("+");
		
		
		
		//var re  = data.match('/++/g');
		//alert(re);
		//alert( data.split( "+" )[ 0 ] );
		
		//alert( data.split( "+" )[ 1 ] );
		
		//$('#homev').html(data);

		var x= vars[0];
		
	
		var a = parseInt(vars[1]);
		var b = parseInt(vars[2]);
		//var a2 = (vars2[1]);
		//var b2 = (vars2[2]);
		var c= a+b;
		//alert(a2);
		//alert(b2);
		var nf = new Intl.NumberFormat();
		var nf1 = nf.format(a);
		var nf2 = nf.format(b);
		var nf3 = nf.format(c);
		//dist.html(x);
		//dist.html(y);
		home.html(nf1);
		appts.html(nf2);
		totals.html(nf3);
		disttype.html(x);

		$('td:not(:contains("No Dist"))').parent().find(".ch_class_mfdcode").prop("disabled", false);
		$('td:not(:contains("No Dist"))').closest('tr').css("background-color", "white");	
		//$("tr:(:has:text('No Dist'))").hide();
		if($('td:contains("No Dist")')){

			//alert(td:contains("No Dist").text());
			$('td:contains("No Dist")').parent().find(".ch_class_mfdcode").prop("disabled", true);
			$('td:contains("No Dist")').closest('tr').css("background-color", "#F0F0F0");
			
		}
		else{
			$('td:not(:contains("No Dist"))').parent().find(".ch_class_mfdcode").prop("disabled", false);	
		}
		//someFunction( data );
	//	alert(data);
    }

	
});


});


$('#step4').click( function() {




 //var checkedval2			
$("table tr").each(function(){
     var count = $(this).find("input:checked").length;
	 if(count==2){
		//checkedv=',H,A';
		 var checkedval=($(this).closest('tr').find("#ch_mfdcode1").val(',H,A'));
		 var checkedval2=($(this).closest('tr').find("#ch_mfdcode2").val(',,')); 

		 $("#input_selected_distribution").val('');
     //alert(checkedval2);
	 }
	 else{
		//checkedv=$(this).find("#ch_mfdcode1").val('');
		var checkedval=($(this).closest('tr').find("#ch_mfdcode1").val(',H,'));
		var checkedval2=($(this).closest('tr').find("#ch_mfdcode2").val(',,A')); 
	 }
 });
	
	
	var carrier_counter = 0;
	var badcarrier_counter = 0;
	var selected_distribution = "";

        $(".ch_class_mfdcode").each(function()
        {
            if($(this).is(':checked'))
            {
				var day=$(this).closest('tr').children('td:eq(3)').find(":selected").val();
				

				if(day == 0){
		var dayname = "MON";

	}
	else if(day == 1){
		var dayname = "TUE";
		
	}
	else if(day == 2){
		var dayname = "WED";
		
	}
	else if(day == 3){
		var dayname = "THU";
		
	}
	else if(day == 4){
		var dayname = "FRI";
		
	}
	else if(day == 5){
		var dayname = "SAT";
		
	}
	else if(day == 6){
		var dayname = "SUN";
		
	}


				var checkedv=$(this).val();
				
				var str2 = ",,";
				//alert(checkedv.localeCompare(str2));
				if(checkedv.localeCompare(str2)==0){
				
						//alert("hi");
						//exit;

				}
				else{
				
				var mfdcode=$(this).closest('tr').children('td:eq(1)').text();
				var distt = $(this).closest('tr').children('td:eq(4)').text();
				//alert(distt);
				//var a = '5148,TMC,THU,H,|0000,TMC,WED,,A|'
				//var distval = 
				var a = mfdcode+","+distt+","+dayname+checkedv;
				selected_distribution = selected_distribution + a + "|";
				
				carrier_counter = carrier_counter +1;
				}
}




            else
            {
				 badcarrier_counter = badcarrier_counter +1;
            }
        })
	
	
	
	
	if(carrier_counter>0 && $('#input_quantity').val() > 1) {

		//if(selected_distribution=="")
		$("#input_selected_distribution").val(selected_distribution);
		
		document.getElementById('next_page').value = "distributor_pg5.php";
		document.main_form.target = "_top";
		document.main_form.submit(); 		
		
	} else {
		$("#error_2").text('Select a distributor and quantity');
	}
	if($('#input_quantity').val() > 1) {
		console.log('okay');	
	} else {
		$("#error_2").show();
		$("#error_2").text('Select quantity to continue');
	}




});
});
</script>
<div id="homev"></div>
   

<?php 

date_default_timezone_set('America/Toronto');
	$current_time = date('Y-m-d H:i:s');
	
if (isset($_POST["report_uid"])) {	$report_uid = $_POST["report_uid"];} else $report_uid = 0;
if (isset($_POST["input_selected_carriers"])) {	$input_selected_carriers = $_POST["input_selected_carriers"];} else $input_selected_carriers = 0;
if (isset($_POST["input_PK_ID"])) {	$input_PK_ID = $_POST["input_PK_ID"];} else $input_PK_ID = 0;

/* TESTING
$report_uid = 1000;
$input_selected_carriers = "0000,5103,5144,5148,5178,5221,5270,5271,5288";
$input_PK_ID = 10552;
*/

$store_number = "";
$var1_fullname = "";
$user_firstname = "";
$user_lastname = "";
$var1_fullname_string = "";
$store_name = "";

include "db_connect.php";
//include "../db_connect.php"; // for testing

$query = "SELECT * FROM amfd_reports WHERE report_uid = $report_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_id = $row['client_id'];
					  $user_company = $row['user_company'];
					  $user_firstname = $row['user_firstname'];
					  $user_lastname = $row['user_lastname'];
					  $store_uid = $row['store_uid'];
					  $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					  $var1_code = $row['var1_code'];
					  $var1_fullname = $row['var1_fullname'];
					  $pc_count = $row['pc_count'];
					  $report_good_yn = 1;
				}				
			mysqli_free_result($result);
		}
		
$query = "SELECT * FROM amfd_savedvals WHERE report_uid = 0 and store_uid = $store_uid and agg_name ='mfd_homes' ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $mfd_homes_list = $row['agg_list'];
				}				
			mysqli_free_result($result);
		}	
$max_homes = 0;
$mfd_homes_array = explode(",", $mfd_homes_list);
$max_homes = $mfd_homes_array[3]; 

$query = "SELECT * FROM amfd_company WHERE client_id = $client_id ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $client_code = $row['client_code'];
				}				
			mysqli_free_result($result);
		}


$now = new DateTime(); $change_date = $now->format('F Y');


$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					  $store_pc = $row['store_pc'];
				}				
			mysqli_free_result($result);
		}
$store_pc = str_replace(" ","",$store_pc);
$store_pc = strtoupper($store_pc);

$query = "SELECT * FROM amfd_carriers WHERE PK_ID = $input_PK_ID ORDER BY carrier_ai desc LIMIT 1  ";
			if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
				$files_loaded_count = $files_loaded_count + 1;
				$json_posted = $row['json_carrier'];
			}}
			
	$rawdata_array = json_decode($json_posted,true);		
			
	$selected_carriers_array = explode(",", $input_selected_carriers);
	
	$table_array[] = "";
	$day_of_week_array = array("MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN");

	$TMC_HOMESarray = explode(",", $rawdata_array[$i]['TMC_HOMES']);
	  	$TMC_APTS_array = explode(",", $rawdata_array[$i]['TMC_APTS_']);
		$EMC_HOMESarray = explode(",", $rawdata_array[$i]['EMC_HOMES_']);
	  	$EMC_APTS_array = explode(",", $rawdata_array[$i]['EMC_APTS_']);
		$SUB_HOMESarray = explode(",", $rawdata_array[$i]['SUB_HOMES_']);
	  	$SUB_APTS_array = explode(",", $rawdata_array[$i]['SUB_APTS_']);
			  
		//for ($j = 0; $j < sizeof($day_of_week_array); $j++) {

			$ids=1;
	for ($i = 6; $i < sizeof($rawdata_array); $i++) {	// carrier loop
	$temp_mfdcode = $rawdata_array[$i]['MFDCODE'];
	if (in_array($temp_mfdcode, $selected_carriers_array)) { 

		$temp_table_line = "";
		
					$temp_table_line = $temp_table_line .  "<tr id='" . $rawdata_array[$i]['MFDCODE'] . "_" . $temp_day_of_week ."'>";
					$temp_table_line = $temp_table_line .  "<td>" . $ids . "</td>" ;
					$temp_table_line = $temp_table_line . "<td>" . $rawdata_array[$i]['MFDCODE'] . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $rawdata_array[$i]['DISTRIBUTOR'] . "</td>" ;
					
					$temp_table_line = $temp_table_line .  "<td><select><option>--SELECT DAY--</option>";
					$r=0;
					$rs=1;
					for ($j = 0; $j < sizeof($day_of_week_array); $j++) {
						$day_of_element = $j;
						$temp_day_of_week = $day_of_week_array[$day_of_element];
						
					$temp_table_line = $temp_table_line .  "<option  id='".$rs."' value='".$r."'>" . $temp_day_of_week . "</option>" ;
					$r++;
					
					}
					$rs++;

						$temp_table_line = $temp_table_line .  "</select></td>";	
						$temp_table_line = $temp_table_line .  "<td></td>" ;				
						$temp_table_line = $temp_table_line .   "<td><input type='checkbox' name='ch_mfd'  value=',H,'class='ch_class_mfdcode' id='ch_mfdcode1' > </td>";
						$temp_table_line = $temp_table_line .  "<td><label  id='homes' ></td>" ;										
					
						$temp_table_line = $temp_table_line .   "<td><input type='checkbox' name='ch_mfd' class='ch_class_mfdcode ch2' value=',,A'  id='ch_mfdcode2' > </td>";
						$temp_table_line = $temp_table_line .  "<td><label  id='apts'></td>" ;	
						$temp_table_line = $temp_table_line .  "<td><label  id='total'></td></tr>";
						/*$temp_table_line = $temp_table_line .  "<input type='text' value='hi' class='disttype'>
						*/
					
						
					
					$table_array[] = $temp_table_line;
			  
	  	/*
		
	  	$TMC_HOMESarray = explode(",", $rawdata_array[$i]['TMC_HOMES']);
	  	$TMC_APTS_array = explode(",", $rawdata_array[$i]['TMC_APTS_']);
		$EMC_HOMESarray = explode(",", $rawdata_array[$i]['EMC_HOMES_']);
	  	$EMC_APTS_array = explode(",", $rawdata_array[$i]['EMC_APTS_']);
		$SUB_HOMESarray = explode(",", $rawdata_array[$i]['SUB_HOMES_']);
	  	$SUB_APTS_array = explode(",", $rawdata_array[$i]['SUB_APTS_']);
			  
		for ($j = 0; $j < sizeof($day_of_week_array); $j++) {	// day of the week loop
			  
			  $day_of_element = $j;
			  $temp_day_of_week = $day_of_week_array[$day_of_element];

			  $day_found = 0;
			  if($TMC_HOMESarray[$day_of_element] > 0 || $TMC_APTS_array[$day_of_element] > 0) {
				  	$dist_type = "TMC";

					$day_found = 1; 
			  
					$temp_table_line = "";
					$temp_table_line = $temp_table_line .  "<tr id='" . $rawdata_array[$i]['MFDCODE'] . "_" . $temp_day_of_week ."'><td>" . $rawdata_array[$i]['MFDCODE'] . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $rawdata_array[$i]['DISTRIBUTOR'] . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $dist_type . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $temp_day_of_week . "</td>" ;
					
					if($TMC_HOMESarray[$day_of_element] > 0) {
						$temp_table_line = $temp_table_line .   "<td><input type='checkbox' name='ch_mfd' class='ch_class_mfdcode' id='ch_mfdcode' value='" . $rawdata_array[$i]['MFDCODE'] . ",TMC," . $temp_day_of_week . ",H,' > </td>";
						$temp_table_line = $temp_table_line .  "<td>" . $TMC_HOMESarray[$day_of_element] . "</td>" ;	
					} else {
						$temp_table_line = $temp_table_line . "<td>&nbsp;</td>"; 
						$temp_table_line = $temp_table_line . "<td>0</td>"; 
					}	
									
					if($TMC_APTS_array[$day_of_element] > 0) {
						$temp_table_line = $temp_table_line .   "<td><input type='checkbox' name='ch_mfd' class='ch_class_mfdcode' id='ch_mfdcode' value='" . $rawdata_array[$i]['MFDCODE'] . ",TMC," . $temp_day_of_week . ",,A' > </td>";
						$temp_table_line = $temp_table_line .  "<td>" . $TMC_APTS_array[$day_of_element] . "</td>" ;	
					} else {
						$temp_table_line = $temp_table_line . "<td>&nbsp;</td>"; 
						$temp_table_line = $temp_table_line . "<td>0</td>"; 
					}

					$temp_table_line = $temp_table_line .  "<td>" . ($TMC_HOMESarray[$day_of_element] + $TMC_APTS_array[$day_of_element]) . "</td></tr>" ;
					
					$table_array[] = $temp_table_line;
				}	// END TMC loop
				
			if($EMC_HOMESarray[$day_of_element] > 0 || $EMC_APTS_array[$day_of_element] > 0) {
				  	$dist_type = "EMC";

					$day_found = 1; 
			  
					$temp_table_line = "";
					$temp_table_line = $temp_table_line .  "<tr id='" . $rawdata_array[$i]['MFDCODE'] . "_" . $temp_day_of_week ."'><td>" . $rawdata_array[$i]['MFDCODE'] . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $rawdata_array[$i]['DISTRIBUTOR'] . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $dist_type . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $temp_day_of_week . "</td>" ;
					
					if($EMC_HOMESarray[$day_of_element] > 0) {
						$temp_table_line = $temp_table_line .   "<td><input type='checkbox' name='ch_mfd' class='ch_class_mfdcode' id='ch_mfdcode' value='" . $rawdata_array[$i]['MFDCODE'] . ",EMC," . $temp_day_of_week . ",H,' > </td>";
						$temp_table_line = $temp_table_line .  "<td>" . $TMC_HOMESarray[$day_of_element] . "</td>" ;	
					} else {
						$temp_table_line = $temp_table_line . "<td>&nbsp;</td>"; 
						$temp_table_line = $temp_table_line . "<td>0</td>"; 
					}	
									
					if($EMC_APTS_array[$day_of_element] > 0) {
						$temp_table_line = $temp_table_line .   "<td><input type='checkbox' name='ch_mfd' class='ch_class_mfdcode' id='ch_mfdcode' value='" . $rawdata_array[$i]['MFDCODE'] . ",EMC," . $temp_day_of_week . ",,A' > </td>";
						$temp_table_line = $temp_table_line .  "<td>" . $TMC_APTS_array[$day_of_element] . "</td>" ;	
					} else {
						$temp_table_line = $temp_table_line . "<td>&nbsp;</td>"; 
						$temp_table_line = $temp_table_line . "<td>0</td>"; 
					}

					$temp_table_line = $temp_table_line .  "<td>" . ($EMC_HOMESarray[$day_of_element] + $EMC_APTS_array[$day_of_element]) . "</td></tr>" ;
					
					$table_array[] = $temp_table_line;
				}	// END TMC loop	
				
				if($SUB_HOMESarray[$day_of_element] > 0 || $SUB_APTS_array[$day_of_element] > 0) {
				  	$dist_type = "SUB";

					$day_found = 1; 
			  
					$temp_table_line = "";
					$temp_table_line = $temp_table_line .  "<tr id='" . $rawdata_array[$i]['MFDCODE'] . "_" . $temp_day_of_week ."'><td>" . $rawdata_array[$i]['MFDCODE'] . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $rawdata_array[$i]['DISTRIBUTOR'] . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $dist_type . "</td>" ;
					$temp_table_line = $temp_table_line .  "<td>" . $temp_day_of_week . "</td>" ;
					
					if($SUB_HOMESarray[$day_of_element] > 0) {
						$temp_table_line = $temp_table_line .   "<td><input type='checkbox' name='ch_mfd' class='ch_class_mfdcode' id='ch_mfdcode' value='" . $rawdata_array[$i]['MFDCODE'] . ",SUB," . $temp_day_of_week . ",H,' > </td>";
						$temp_table_line = $temp_table_line .  "<td>" . $SUB_HOMESarray[$day_of_element] . "</td>" ;	
					} else {
						$temp_table_line = $temp_table_line . "<td>&nbsp;</td>"; 
						$temp_table_line = $temp_table_line . "<td>0</td>"; 
					}	
									
					if($SUB_APTS_array[$day_of_element] > 0) {
						$temp_table_line = $temp_table_line .   "<td><input type='checkbox' name='ch_mfd' class='ch_class_mfdcode' id='ch_mfdcode' value='" . $rawdata_array[$i]['MFDCODE'] . ",SUB," . $temp_day_of_week . ",,A' > </td>";
						$temp_table_line = $temp_table_line .  "<td>" . $SUB_APTS_array[$day_of_element] . "</td>" ;	
					} else {
						$temp_table_line = $temp_table_line . "<td>&nbsp;</td>"; 
						$temp_table_line = $temp_table_line . "<td>0</td>"; 
					}

					$temp_table_line = $temp_table_line .  "<td>" . ($SUB_APTS_array[$day_of_element] + $SUB_APTS_array[$day_of_element]) . "</td></tr>" ;
					
					$table_array[] = $temp_table_line;
				}	// END TMC loop	
				
				
				
		}		// END day of the week loop


		*/
	}
	$ids++;		// IF - do work if carrier was selected
	}		// END carrier loop
		
	
?>
 
 </div>
    
<body >
<div class="container">  
  
	<div class="row" id="div-carrier_table">
    
        <div class="col-md-12 " align="center">
       
          	<table width="100%" border="0" >
			  
            	<tr>
                  	<td colspan="2" align="center"><h1 style="color: #900c3f !important;">Route Distribution</h1>
                  	<h1 style="color: #900c3f !important;"> Select Quantity and Distribution</h1>
      				</td>
              	</tr>
                <tr>
                  	<td width="50%" align="center">
                    <h5>Store: <?php echo $store_number . " " . $store_name; ?></h5>
                    <h5>Targeting Attributes: <?php echo $var1_fullname; ?></h5>
      				</td>

                  	<td width="50%" align="center"><h1>Select Quantity </h1>
                      <input class=""  type="text" name="input_quantity" id="input_quantity" placeholder="Enter Value" >
                      <span><br>
                    Total households in the trade area: <?php echo number_format($max_homes) ;?></span></td>
					              	</tr>
         	</table>
      </div>
    	
<br/><br/>
         <div class="col-md-12" align="center"> 

      <h3 class="alert alert-danger" id="error_2"></h3>
		 <div id ="errdiv" class="alert alert-warning">Please select Day First</div> 
		 <br/> <br/>
      		<table align="center" class="table responsive" style="border:solid 0.5px" width="800" border="0" cellspacing="0" cellpadding="4">
      		  <tr style="background-color: #900C3F;color: white;">
				<th>ID</th>
      		    <th>MFD CODE</th>
      		    <th>Distributor</td>
				 
      		    <th>Day</th>
				  <th>Dist_Type</td> 
				  <th>Select</th>
      		    <th colspan="">Homes</th>
				  <th>Select</th>
      		    <th colspan="">Apts</th>
      		    <th>Total</th>
   		      </tr>
             
              <?php
			  for ($k = 1; $k < sizeof($table_array); $k++) {	// day of the week loop
      		    echo $table_array[$k];
			  }
				
   		      ?>
              
               
   		  </table>
      </div> 
	<div style="float:right; width:100%">
      <button type="button" id="step4" name="step4" class="btn btn-success btn-lg" >Click to Continue</button>
    </div>
      <div class="col-md-12 " align="center"> <p>&nbsp;</p> </div> 
      
      
      
         
     	<input type="hidden" name="input_selected_distribution" id="input_selected_distribution" >
         <input type="hidden" name="input_PK_ID" id="input_PK_ID" value="<?php echo $input_PK_ID; ?>">
        <input type="hidden" name="input_selected_carriers" id="input_selected_carriers" value="<?php echo $input_selected_carriers; ?>">
        <input type="hidden" name="report_uid" id="report_uid" value="<?php echo $report_uid; ?>">  
        
        
       
          
      
  </div>    

</div>
 
<?php 


?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> <!-- need full jquery for get and post -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
	