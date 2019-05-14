<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<SCRIPT language="JavaScript">
function TARGET_select() {
	document.getElementById('next_page').value = "ui_hometarget.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 		
}

function SEQ_select() {
	document.getElementById('next_page').value = "ui_seqtarget.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 		
}

function back_button() {
	document.getElementById('next_page').value = "ui_home.php";
	document.main_form.target = "_top";
	document.main_form.submit(); 		
}


</script>
<style>

.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #990033;
}
.red:hover {
    color: #b74c70;
}
.select_font_14 {
	font-size: 14px;
	font-weight: bold;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}
.container1 { width:440px; height:475px; overflow:scroll; }
.blue_font_12 {
	font-size: 12px;
	font-weight: bold;
	color: #147EA7;
}
.container2 { width:440px; height:450px; overflow:scroll; }

.table1 {
	width: 100%;
	height: 550px;
	display: block;
	overflow-y:scroll; 
}
.bg_color1 {
	background-color: #CEB39D;
}
 .black18 
 { 
 font-family: "Roboto Condensed","Lucida Grande",Helvetica,sans-serif;
 color: #333;
    font-size: 18px;
	font-weight: normal;
    padding: 0 0 9px;
}
.bg_colorred {
	background-color: #990033;
 margin-top:25px;
}
.select_font_14 {	font-size: 14px;
	font-weight: bold;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}
.regular_font_14 {	font-size: 14px;
	font-weight: normal;
	color: #000;
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
}

.Example_E1 {

    width: 111%;
    height: 71px;
    font-weight:bold;
}
.btn:hover, .btn:focus {

    color: #333333;
    text-decoration: none;
    color: black !important;

}
.swhite24{
  font-family: arial;
    font-size: 28px;
    font-weight: bold;
    color: #FFFFFF;

}

.swhite14 {
    font-family: arial;
    font-size: 18px;
    font-weight: normal;
    color: #FFFFFF;
}
.btn{
margin-left:-15%;
}

</style>
<?php


require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 //do some code
 ?>
 
 <style>
.container {
    width:100%;
    max-width:100%;
    margin-left:5% !important;
    margin-right:15% !important;
}
 .btn{
margin-left:25%;
margin-right:5%;
}

 </style>
 
 <?php
}

// Any tablet device.
if( $detect->isTablet() ){
 //do some code
}

?>
    	<div class="col-md-12 bg_colorred" align="center">
    	  <table width="100%" border="0" >
    	    <tr>
    	      <!--<td align="center" class="swhite14"><a href="back_button();" class="btn btn-danger btn-sm">back</a></td>-->
    	      <td align="center" class="swhite24"><p><strong> TARGETING</strong><br />   	         
   	          <span class="swhite14">Targeting identifies the very best areas and media for consumer advertising <br />
              based on demographic, segmentation, media and spending traits<br />&nbsp;</span>
  	          </p></td>
  	        </tr>
  	    </table>
 		</div>

    
    <div class="row">
    	<div class="col-md-12 "><h4><br />
        </h4>
        </div>
  </div> 
  
<div class="container">    
 	<div class="row">
   	  
      <div class="col-md-4">
      <div class="row" >
       
<input name="get_report_id" type="hidden" id="get_report_id" size="150" />
<input name="store_selected" type="hidden" id="store_selected" value=" "  />
<input name="delete_store" type="hidden" id="delete_store" value=" "  />
<input name="store_uid" type="hidden" id="store_uid" value=" "  />
      </div>
       </div>
        <div class="col-md-8" align="center">
        <div class="row" style="">
          <table width="100%" align="center" border="0" cellspacing="0" >
            <tr>
              <td  align="center"><button name="SeqTarget2" type="button" style="background-color:#990033;color:white;margin-top: 26px;" class="btn btn-lg Example_E1" onclick= 'TARGET_select();'/>REGIONAL / STORE TARGETING
              <br/>
              <g class="hover" style="background-color:#990033;color:black;margin-top: 32px;font-size:14px"> Weighted Average Targeting</g>
              </button>
              </td></tr>
            
            <tr>
              <td rowspan="" width="40%" align="center"><button name="SeqTarget" type="button" style="background-color:#a31947;color:white;margin-top: 26px;" class="btn btn-lg Example_E1" onclick= 'SEQ_select();'>SEQUENTIAL TARGETING
              <br/>
              <g class="hover" style="background-color:#a31947;color:black;margin-top: 32px;font-size:14px"> Advanced Targeting </g>
              
              
            
          
            <tr>
              <td rowspan="" width="40%" align="center">
        <button name="AddStore" type="button" style="background-color:#b74c70 ;color:white;margin-top: 32px;" class="btn btn-lg Example_E1" onclick= 'TRADEAREAsubmit("red");'>ADD NEW STORE TRADE AREA OR CUSTOMER DATABASE  
<br/>
         <g class="hover" style="background-color:#b74c70;color:black;margin-top: 32px;font-size:14px">Options to create a new store/database </g>
              
              
              </td>
            </tr>
            
            <tr>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
            </tr>
          </table>
        </div>


      </div>
  </div>
</div> 