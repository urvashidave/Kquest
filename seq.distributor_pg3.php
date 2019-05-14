
<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
    body {
        background-color: #FFF;
        margin: 0;
        padding: 0;
		overflow-x:hidden;
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

table,.btn {
	font-size:18px;
}

td,th,tr{
	text-align:center;
}
</style>

<style>
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
.font_36 { font-size:30px;}
</style>
<?php 
ini_set('max_execution_time', 300);
date_default_timezone_set('America/Toronto');
	$current_time = date('Y-m-d H:i:s');
	
$pc_lon = -79;
$pc_lat = 44;
if (isset($_POST["report_uid"])) {	$report_uid = $_POST["report_uid"];} else $report_uid = 0;
$report_api_key = 3571;
$report_good_yn = 0;
$report_uid = $report_uid / $report_api_key;
$store_number = "";
$var1_fullname = "";
$user_firstname = "";
$user_lastname = "";
$var1_fullname_string = "";
$store_name = "";

$store_uid = $report_uid ;
//echo "<br>REPORT " . $store_uid ;


include "db_connect.php";
/*
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
*/

$query = "SELECT * FROM amfd_stores WHERE store_uid = $store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $client_id = $row['client_id'];
					   $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					   $var1_code = $row['target_traits'];
					  $var1_fullname = $row['trait_name'];
					  $original_store_uid = $row['master_file'];
					   $report_good_yn = 1;
				}				
			mysqli_free_result($result);
		}


if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					   $original_store_uid = $row['master_file'];
					   $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
				}				
			mysqli_free_result($result);
		}
}
if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					   $original_store_uid = $row['master_file'];
					   $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
				}				
			mysqli_free_result($result);
		}
}
if($original_store_uid > 0) {
$query = "SELECT * FROM amfd_stores WHERE store_uid = $original_store_uid ";
		if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					   $store_name = $row['store_name'];
					  $store_number = $row['store_number'];
					   $original_store_uid = $row['master_file'];
					   $var1_fullname = $row['trait_name'] . " -> " . $var1_fullname;
				}				
			mysqli_free_result($result);
		}
}
		
		
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


include "target_formula.php";
include "db_connect.php";

		
$pc_count_step = 998 /$pc_count;
$pc_count_step_counter = 999;
$LDUScorePairs2 = "";	
$client_code_user = $client_code . "|" . $user_company_and_name;
$pc_counter =0;



// soap to send file to MFD
//$client = new SoapClient("http://jxf.ca/QUANT/MFDws.cfc?wsdl"); 

include "db_connect_wg.php";

$query = "SELECT * FROM $temp_table_name WHERE report_uid = $report_uid ORDER BY (demo_score + bbm_score + sp_score + seg_score + hi_score + homes_score + auto_score  + eth_score) DESC";
		

//echo "SELECT * FROM $temp_table_name WHERE report_uid = $report_uid ORDER BY (demo_score + bbm_score + sp_score + seg_score + hi_score + homes_score + auto_score  + eth_score) DESC";


if ($result = mysqli_query($link, $query)) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo ":";
					if($pc_counter < 1) 
							{$LDUScorePairs = $row['PostCode'] .  "," . round($pc_count_step_counter) ; $pc_counter =1;}
					else{
							$LDUScorePairs = $LDUScorePairs . "|" . $row['PostCode'].  "," . round($pc_count_step_counter);	
							
					}
					$pc_count_step_counter = $pc_count_step_counter - $pc_count_step; 
				}				
			mysqli_free_result($result);
		}
	
$return = "nothing";
	
	/*			
$pc_list_array = array();
	$pc_list_array['Client'] = 'ZZ';	
	$pc_list_array['Store'] = 'api5-6 || ' . $current_time;	
	$pc_list_array['StorePcode'] = 'm9v2h9';	
	$pc_list_array['StoreScore'] = '100';	
	$pc_list_array['LDUScorePairs'] = 'M8V2A7,100|M8V2A5,98.9|M8V2B1,42.2|M8V3G2,98.4|M8V2A9,36.2|M8V2A2,97.3|M8V1Z7,1.0|M8V1Z9,77.3';
	
	
	$json_post_encode = json_encode($pc_list_array);
	$json_post_decode = json_decode($json_post_encode, true);
		
	echo "<br>orig: <br>";
	echo $json_post_encode;
	echo "<br>orig array: <br>";
	print_r($json_post_encode);
	*/
								
$pc_list_array = array();
	$pc_list_array['Client'] = $client_code;	
	$pc_list_array['Store'] = $store_number;	
	$pc_list_array['StorePcode'] = $store_pc;	
	$pc_list_array['StoreScore'] = $store_number . ' || ' . $current_time;
	//$pc_list_array['StoreScore'] = '111';	
	$pc_list_array['LDUScorePairs'] = $LDUScorePairs;
	

	
	$json_post_encode = json_encode($pc_list_array);
	$json_post_decode = json_decode($json_post_encode, true);

	//echo "<br>array to post for sp1: <br>";
	//echo $json_post_encode;
	
  ?>
 
 

    
<body >
<div class="container">  
  
	<div class="row" id="div-step1_div">
    	
        <div class="col-md-12 " align="center">
    	  <table width="100%" border="0" >
    	    <tr>
    	      <td align="center"><h1 style="color: #900c3f !important;">SELECT DISTRIBUTOR TYPE</h1>
  </td>
  	      </tr>
  	    </table>
 		</div>
         
     	<div class="col-12"><p>&nbsp;</p></div>        
  
     	<div class="col-6">
                <img id="div_process_image" src="load.gif" width="10%" class="width_100p height_100p">                
          		<input type="hidden" name="input_PK_ID" id="input_PK_ID">
                <input type="hidden" name="input_selected_carriers" id="input_selected_carriers">
                <input type="hidden" name="report_uid" id="report_uid" value="<?php echo $report_uid; ?>">
           
        </div>
        <div class="col-6"> 
             	<div class="red_font font_36" id="step1_status"></div>
               <!-- <button type="button" id="step1" name="step1" class="btn btn-success btn-lg" >Click to Find Distributors</button>
                -->
		</div>    

	</div>
    
    <div class="col-6"> 
                <br><h3 id='step2_error' class='alert alert-danger'></h3>
   		</div>
    <div class="row" id="div-carrier_table"> 
   		
        <div class="col-12">           
         <div style="border:solid 0.2px"> 
		 <table align="center" class="table responsive">
			
			<tr>
				<td>
				 <input type="radio" checked="flase" name="optradio" value="all"> &nbsp&nbsp All Distributors
				</td>
			</tr>
			<tr>
				<td>
			  	<input type="radio" checked="flase" name="optradio" value="nocpost"> &nbsp&nbsp All Distributors(No Canada Post)
				</td>
			</tr>
			<tr>
				<td>
				<input type="radio" checked="flase" name="optradio" value="cpostonly"> &nbsp&nbsp Canada Post Only
				</td>
			</tr>
			</table>
</div>
<div id="carrier_table-table"></div>

   
   		
        
        
   		<div class="col-6"> 
                <br><button id="step2"  type="button" name="step2" class="btn btn-success" >Click to Continue</button>
   		</div>
    
    </div>
    
    <div class="col-12">  
    <p id="jquery_return"></p>
    </div>
        <!--
	<div class="row" id="available_carriers"> 
            <div class="col-12">            
                <h3 id='step2-title'>SELECT DISTRIBUTORS</h3>
            </div>
            
      		<div class="col-6">
          		<div>Select Quantity <span id="selectquantity"></span> <input type="text" name="input_selected_quantity" id="input_selected_quantity" class="btn btn-success btn-outline-success" value="10000"></div>
                <div class="h-30px"></div>
      			
      		</div>
            
            <div class="col-6"> 
                <button id="step3bak"  type="button" name="step3bak" class="btn btn-success btn-lg" >Step 3 Get Route Distribution</button>
            </div>
            
            <div id="div-sp2-error">
            	<div class="col-12 text-align-center"><h3 class="text-danger">Select a Distributor and try again</h3></div>
            </div>
             <div id="div-sp2-processing">
            	<div class="col-12 text-align-center"><h5 class="text-success">THIS PROCESS WILL BE ADDED SOON .........</h5></div>
            </div>
            
            <div class="col-12"><p>&nbsp;</p><input name="input_sp2" type="text" id="input_sp2" size="100"></div>
            
            
            
            
            <div class="col-12" id="select_dropdown_dist">
                    <select name="select_dist_type" id="select_dist_type" class="btn btn-lg btn-success btn-block text-align-center">
                      <option value="select_start" selected>Select distribution type</option>
                      <option value="TMC">TMC DISTRIBUTION</option>
                      <option value="EMC">EMC DISTRIBUTION</option>
                      <option value="SUB">SUB DISTRIBUTION</option>
                    </select>
         	</div>
            
            <div class="row col-12 h-30px"></div>
            <!--
            <div class="row" id="div-TMC">
            
            	
            
                <div class="col-12">   
                    <h3>Monday</h3>                
                    <div id="monday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Tuesday</h3>                
                    <div id="tuesday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Wednesday</h3>                
                    <div id="wednesday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Thursday</h3>                
                    <div id="thursday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Friday</h3>                
                    <div id="friday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Saturday</h3>                
                    <div id="saturday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Sunday</h3>                
                    <div id="sunday-table"></div>
                    <div class="h-30px"></div>
                </div>
        	</div> <!-- TMC -->
            <!--
            <div class="row" id="div-EMC">
            
            	
            
                <div class="col-12">   
                    <h3>Monday</h3>                
                    <div id="emc_monday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Tuesday</h3>                
                    <div id="emc_tuesday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12 ">   
                    <h3>Wednesday</h3>                
                    <div id="emc_wednesday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Thursday</h3>                
                    <div id="emc_thursday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Friday</h3>                
                    <div id="emc_friday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Saturday</h3>                
                    <div id="emc_saturday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Sunday</h3>                
                    <div id="emc_sunday-table"></div>
                    <div class="h-30px"></div>
                </div>
        	</div> <!-- EMC -->
            <!--
            <div class="row" id="div-SUB">
            
            	<div class="col-12 text-align-center bg-dark text-white"><h3>SUB DISTRIBUTION</h3></div>
            
                <div class="col-12">   
                    <h3>Monday</h3>                
                    <div id="sub_monday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Tuesday</h3>                
                    <div id="sub_tuesday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Wednesday</h3>                
                    <div id="sub_wednesday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Thursday</h3>                
                    <div id="sub_thursday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Friday</h3>                
                    <div id="sub_friday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Saturday</h3>                
                    <div id="sub_saturday-table"></div>
                    <div class="h-30px"></div>
                </div>
                
                <div class="col-12">   
                    <h3>Sunday</h3>                
                    <div id="sub_sunday-table"></div>
                    <div class="h-30px"></div>
                </div>
        	</div> <!-- EMC -->
<!--
		<div class="row"><p>&nbsp;</p></div>
    
    
    </div>
  	
    <div class="row" id="div-end_notes">
        <div class="col-12 background_grey">
        	<br>THERE ARE PROGRESS STEPS TO CONFIRM DATA TRANSFERS WORK - REMOVED IN PRODUCTION VERSION<br>
            <h4 id="return_json_array">Status: Ready to Go !</h4>
            <br>Connect with master server:<span id="initial_connection"> </span>
           <br>Send scored postal codes sent to server: <span id="post_scored_list"> </span>
            <br>Create a new store and trade area:<span id="confirm_post"> </span>
            <br>Identify available carriers:<span id="stored_proc_1"> </span>
            <br><br>Data from server<br><span id="comment_1"></span>
            <br>client_code:<span id="client_code2"> </span>
            <br>PK_ID:<span id="PK_ID2"> </span>
            <br>client_store:<span id="client_store2"> </span>
        </div>
  	</div>
    
</div>

-->




<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> original slim version -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> <!-- need full jquery for get and post -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">

$(document).ready(function () {
	$("#step2_error").hide();
	$("#step2").hide();
	var inp = document.getElementsByName('optradio');
for (var i = inp.length-1; i>=0; i--) {
if ('radio'===inp[i].type) inp[i].checked = false;
}

//$('input[name=optradio]').attr('checked',false);

	$("#available_carriers").hide();
	$("#div-sp2-error").hide();
	$("#div-sp2-processing").hide();
	$("#div_process_image").hide();
	//$("#div-carrier_table").hide();
	$("#div-end_notes").hide();
	

	
	
	$("#div-TMC").hide(); 
	$("#div-EMC").hide(); 
	$("#div-SUB").hide();

	// user selects distribution type from drop down
	$('#select_dist_type').on('change', function() {
		console.log(this.value);
		if(this.value == "select_start") { 
			$("#div-TMC").hide(); 
			$("#div-EMC").hide(); 
			$("#div-SUB").hide();
		};
		
		if(this.value == "TMC") { 
			$("#div-TMC").show(); 
			$("#div-EMC").hide(); 
			$("#div-SUB").hide();
		};
		if(this.value == "EMC") { 
			$("#div-TMC").hide(); 
			$("#div-EMC").show(); 
			$("#div-SUB").hide();
		};
		if(this.value == "SUB") { 
			$("#div-TMC").hide(); 
			$("#div-EMC").hide(); 
			$("#div-SUB").show();
		};	
		
	});
	
});

// user clicks button - after selecting specific distributors
$('#step2').click( function() {
	
	var carrier_counter = 0;
	var badcarrier_counter = 0;
	var selected_carriers = new Array();

        $(".carrier_class").each(function()
        {
            if($(this).is(':checked'))
            {
				selected_carriers.push(this.value);
				carrier_counter = carrier_counter +1;
            }
            else
            {
				 badcarrier_counter = badcarrier_counter +1;
            }
        })
	
	
	
	
	if(carrier_counter>0) {
		var selected_carriers_string = selected_carriers.toString();
		$("#input_selected_carriers").val(selected_carriers_string);
		document.getElementById('next_page').value = "seq.distributor_pg4.php";
		document.main_form.target = "_top";
		document.main_form.submit(); 		
		
	} else {
		$("#step2_error").show();
		$("#step2_error").text('Select distributor to continue');
	}
	


});	

<!-- OLD PROCESS - can be deleted once over process is approved by MFD full details of all carriers by day.  get a list of checked values for the selected distribution type TMC, EMC or SUB-->
$('#step3bak').click( function() {
	
	<!-- get a list of checked values for the selected distribution type TMC, EMC or SUB-->
	$('#input_sp2').text('clicked');
	var verify_checkbox = 0;
	var temp_select_dist_type = $('#select_dist_type').val();
	
	var sp2_checked_array = [];
	if(temp_select_dist_type == "TMC") {
		$('input.tmc_checkbox_class:checkbox:checked').each(function () {
			sp2_checked_array.push($(this).val());
			verify_checkbox = 1;
		});
	}
	
	if(temp_select_dist_type == "EMC") {
		$('input.emc_checkbox_class:checkbox:checked').each(function () {
			sp2_checked_array.push($(this).val());
			verify_checkbox = 1;
		});
	}
	
	if(temp_select_dist_type == "SUB") {
		$('input.sub_checkbox_class:checkbox:checked').each(function () {
			sp2_checked_array.push($(this).val());
			verify_checkbox = 1;
		});
	}
	
	/* format the stored procedure 
		 Sample '443', '0000,TMC,WED,H,|5221,SUB,SAT,H,', '600'
		 '443' = PKID
		 '0000,TMC,WED,H,|5221,SUB,SAT,H,' = values held in array 
		 '600' = quantity
		 results are saved in a text field
	*/	
	if(verify_checkbox > 0) {
		var sp2_PKID = $('#input_PK_ID').val();
		var sp2_quantity = $('#input_selected_quantity').val();
		var sp2_distibutor = sp2_checked_array.join("|");
		var sp2_final = "'" + sp2_PKID + "','" + sp2_distibutor + "','" + sp2_quantity + "'"; 
		$('#input_sp2').val(sp2_final);
		
		$("#div-TMC").hide(); 
		$("#div-EMC").hide(); 
		$("#div-SUB").hide();
		$("#div-sp2-processing").show();
		
		$("#select_dropdown_dist").hide();
		
		
			
	
	<!-- run stored procedure 2 -->
	
	
	} else {
	<!-- fail verify_checkbox -->	
		$("#div-sp2-error").show();	
	}

});

	$('input[name=optradio]').on('change', function() { 
		
		$("#step2_error").hide();
		//alert('I feel sleepy...');
		var selected = $('input:radio[name=optradio]:checked').val();
		//alert(selected);
		$('#step1').addClass('btn-secondary'); 
		$('#step1').removeClass('btn-success'); 
		$("#div_process_image").show();
		
		
		$("#step1").attr("disabled", true);
		$('#PK_ID').text('PROCESSING ... up to 5 minutes');
		//console.log('running ...');
		$('#return_json_array').text('running ...');
		
		  $.post("http://marketfocusdirect.ca/kquestsolutions/sp1_v8.php?selectedval="+selected,<?php echo $json_post_encode; ?> , function (data,status) {
			console.log(data);
			console.log(status);
			if(status == 'success') {

				$("#step2").show();
	
				var post_array_return = data.carriers;

			
					post_array_return.unshift("<?php echo $pc_list_array['Store']; ?>");
					post_array_return.unshift("<?php echo $pc_list_array['Client']; ?>");
					post_array_return.unshift(data.PK_ID);
					post_array_return.unshift("<?php echo $current_time; ?>");
					post_array_return.unshift("<?php echo $user_id; ?>");				
					post_array_return.unshift("<?php echo $report_uid; ?>");
			// save results to database
					 $.post("http://kquest.solutions/mfd/post_carrier_results.php", {data: JSON.stringify(post_array_return)} , function (data,status) {
						 

						 
						 if(status == 'success') {
							 console.log(data);
								console.log('saved results'); 
						 } else {
								console.log('results error'); 
						 }
						 
					 });
				
				$('#step1').addClass('btn-secondary'); 
				$('#step1').removeClass('btn-success'); 
				//$("#step1").attr("disabled", true);
				//$('#step1_status').text('Step Complete !'); 
				$("#div_process_image").hide();
				
				//$("#div-step1_div").hide(); 
				
				$("#div-carrier_table").show();
				
				var carrier_table = "<table class='table table-bordered table-hover'><tr><th>SELECT</th><th>MFD CODE</th><th>DISTRIBUTOR </th></tr>";				
						carrier_table += data.carrier_table;
						carrier_table += "</table>";
						$("#carrier_table-table").html(carrier_table);
							
				$("#available_carriers").hide();
				
				$('#initial_connection').text(data.initial_connection);
				$('#post_scored_list').text(data.post_scored_list);
				$('#confirm_post').text(data.confirm_post);
				$('#stored_proc_1').text(data.stored_proc_1);
				$('#client_code').text(data.client_code);
				$('#PK_ID').text('Distributors Found');				
				$('#client_store').text(data.client_store);
				$('#client_code2').text(data.client_code);
				$('#PK_ID2').text(data.PK_ID);
				$('#input_PK_ID').val(data.PK_ID);
				
				
				$('#client_store2').text(data.client_store);
				$('#return_json_array').text('DATA PROCESSED');
				
				$("#div-TMC").hide();

					if(data.monday_yn == '0') {
						$("#monday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var table_monday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						table_monday += data.table_monday;
						table_monday += "</table>";
						$("#monday-table").html(table_monday);
					}

					if(data.tuesday_yn == '0') {
						$("#tuesday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var table_tuesday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						table_tuesday += data.table_tuesday;
						table_tuesday += "</table>";
						$("#tuesday-table").html(table_tuesday);
					}
					
					if(data.wednesday_yn == '0') {
						$("#wednesday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var table_wednesday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";					
						table_wednesday += data.table_wednesday;
						table_wednesday += "</table>";
						$("#wednesday-table").html(table_wednesday);
					}

					if(data.thursday_yn == '0') {
						$("#thursday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var table_thursday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						table_thursday += data.table_thursday;
						table_thursday += "</table>";
						$("#thursday-table").html(table_thursday);
					}
					
					if(data.friday_yn == '0') {
						$("#friday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var table_friday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						table_friday += data.table_friday;
						table_friday += "</table>";
						$("#friday-table").html(table_friday);
					}
					
					if(data.saturday_yn == '0') {
						$("#saturday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var table_saturday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						table_saturday += data.table_saturday;
						table_saturday += "</table>";
						$("#saturday-table").html(table_saturday);
					}

					if(data.sunday_yn == '0') {
						$("#sunday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var table_sunday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						table_sunday += data.table_sunday;
						table_sunday += "</table>";
						$("#sunday-table").html(table_sunday);
					}
					
					
					
					$("#div-EMC").hide();

					if(data.emc_monday_yn == '0') {
						$("#emc_monday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var emc_table_monday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						emc_table_monday += data.emc_table_monday;
						emc_table_monday += "</table>";
						$("#emc_monday-table").html(emc_table_monday);
					}

					if(data.emc_tuesday_yn == '0') {
						$("#emc_tuesday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var emc_table_tuesday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						emc_table_tuesday += data.emc_table_tuesday;
						emc_table_tuesday += "</table>";
						$("#emc_tuesday-table").html(emc_table_tuesday);
					}
					
					if(data.emc_wednesday_yn == '0') {
						$("#emc_wednesday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var emc_table_wednesday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";					
						emc_table_wednesday += data.emc_table_wednesday;
						emc_table_wednesday += "</table>";
						$("#emc_wednesday-table").html(emc_table_wednesday);
					}

					if(data.emc_thursday_yn == '0') {
						$("#emc_thursday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var emc_table_thursday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						emc_table_thursday += data.emc_table_thursday;
						emc_table_thursday += "</table>";
						$("#emc_thursday-table").html(emc_table_thursday);
					}
					
					if(data.emc_friday_yn == '0') {
						$("#emc_friday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var emc_table_friday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						emc_table_friday += data.emc_table_friday;
						emc_table_friday += "</table>";
						$("#emc_friday-table").html(emc_table_friday);
					}
					
					if(data.emc_saturday_yn == '0') {
						$("#emc_saturday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var emc_table_saturday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						emc_table_saturday += data.emc_table_saturday;
						emc_table_saturday += "</table>";
						$("#emc_saturday-table").html(emc_table_saturday);
					}

					if(data.emc_sunday_yn == '0') {
						$("#emc_sunday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var emc_table_sunday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						emc_table_sunday += data.emc_table_sunday;
						emc_table_sunday += "</table>";
						$("#emc_sunday-table").html(emc_table_sunday);
					}

					$("#div-SUB").hide();

					if(data.sub_monday_yn == '0') {
						$("#sub_monday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var sub_table_monday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						sub_table_monday += data.sub_table_monday;
						sub_table_monday += "</table>";
						$("#sub_monday-table").html(sub_table_monday);
					}

					if(data.sub_tuesday_yn == '0') {
						$("#sub_tuesday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var sub_table_tuesday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						sub_table_tuesday += data.sub_table_tuesday;
						sub_table_tuesday += "</table>";
						$("#sub_tuesday-table").html(sub_table_tuesday);
					}
					
					if(data.sub_wednesday_yn == '0') {
						$("#sub_wednesday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var sub_table_wednesday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";					
						sub_table_wednesday += data.sub_table_wednesday;
						sub_table_wednesday += "</table>";
						$("#sub_wednesday-table").html(sub_table_wednesday);
					}

					if(data.sub_thursday_yn == '0') {
						$("#sub_thursday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var sub_table_thursday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						sub_table_thursday += data.sub_table_thursday;
						sub_table_thursday += "</table>";
						$("#sub_thursday-table").html(sub_table_thursday);
					}
					
					if(data.sub_friday_yn == '0') {
						$("#sub_friday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var sub_table_friday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						sub_table_friday += data.sub_table_friday;
						sub_table_friday += "</table>";
						$("#sub_friday-table").html(sub_table_friday);
					}
					
					if(data.sub_saturday_yn == '0') {
						$("#sub_saturday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var sub_table_saturday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						sub_table_saturday += data.sub_table_saturday;
						sub_table_saturday += "</table>";
						$("#sub_saturday-table").html(sub_table_saturday);
					}

					if(data.sub_sunday_yn == '0') {
						$("#sub_sunday-table").html('<div><p class="text-warning">No available distributors</p></div>');
					} else {
							
						var sub_table_sunday = "<table class='table table-bordered table-hover'><tr><th class='w-30-pct'>Distributor</th><th class='w-10-pct'>MFD CODE</th><th class='w-10-pct'>Dist. Type</th><th class='w-10-pct'>House/Apt</th><th class='w-10-pct'>Count</th><th class='w-20-pct'>Internal Code</th><th class='w-10-pct'>Select</th></tr>";				
						sub_table_sunday += data.sub_table_sunday;
						sub_table_sunday += "</table>";
						$("#sub_sunday-table").html(sub_table_sunday);
					}



							
				
				
				
			} else {
				$('#return_json_array').text('PROCESS FAILED ... TRY AGAIN');
				$('#step1').addClass('btn-success'); 
				$('#step1').removeClass('btn-secondary'); 
				$("#step1").attr("disabled", false);			
			}
		});

 	});


</script>
</body>
</html>
	