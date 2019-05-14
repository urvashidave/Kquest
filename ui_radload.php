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
.sblue{
color: #147EA7;
}
</style>

<?php
}
?>



<link rel='STYLESHEET' type='text/css' href='master_style.css'>

<?php 

if (isset($_POST["rp_mapdetails"])) {	$rp_mapdetails = $_POST["rp_mapdetails"];} else 

{	if($user_id == 52)
$rp_mapdetails = "12,45.35955129483712,-73.48573438183594,45.839969692832184,44.8750188604207,-72.73042432324218,-74.24104444042968";
else
$rp_mapdetails = "12,43.65562655647711,-79.41560498730469,44.1503604797683,43.15678281096359,-78.66029492871094,-80.17091504589844";
}
if (isset($_POST["file_name"])) {	$file_name = $_POST["file_name"];} else $file_name = "Area on map";
if (isset($_POST["pc_zoom"])) {	$pc_zoom = $_POST["pc_zoom"];} else $pc_zoom = "";
$show_pc_name = $pc_zoom;
$show_pc_name = str_replace("[^A-Za-z0-9]", "", $show_pc_name);
	$show_pc_name = str_replace(" ", "", $show_pc_name);
	$show_pc_name = strtoupper($show_pc_name);



include "qi_get_map.php";
?>
<body>
<SCRIPT language="JavaScript">
var drawingManager;
var map;

function POLYsubmit() {
document.getElementById('next_page').value = "ui_radload.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function POSTRADsubmit() {
	 
document.getElementById('next_page').value = "ui_postrad.php";
document.main_form.target = "_top";
document.main_form.submit(); 		
}

function initAutocomplete() {
    var latlng = new google.maps.LatLng(<?php echo $start_lat; ?>, <?php echo $start_lon; ?>);
    var myOptions = {
      zoom: <?php echo $start_zoom; ?>,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.EOAD,
	  navigationControl: true,
	  scaleControl: true

    };
    map = new google.maps.Map(document.getElementById("map"), myOptions);
	




	map.addListener('bounds_changed', function() {
var center = map.getCenter();	
	var center_lat = center.lat();	
	var center_long = center.lng();	
	var center_zoom = map.getZoom();	
	var bounds = map.getBounds();	
	var southWest = bounds.getSouthWest();
	var northEast = bounds.getNorthEast();	
	var v_biglat = northEast.lat();	
	var v_smalllat = southWest.lat();
	var v_biglong = northEast.lng();	
	var v_smalllong = southWest.lng();
	
	var ArrCentre2 =new Array()	
		ArrCentre2[0] =center_zoom;		ArrCentre2[1] =center_lat;		ArrCentre2[2] =center_long;
		ArrCentre2[3] =v_biglat;		ArrCentre2[4] =v_smalllat;		ArrCentre2[5] =v_biglong;
		ArrCentre2[6] =v_smalllong;

	document.getElementById("rp_mapdetails").value = ArrCentre2[0] + "," + ArrCentre2[1] + "," + ArrCentre2[2] + "," + ArrCentre2[3] + "," + ArrCentre2[4] + "," + ArrCentre2[5] + "," + ArrCentre2[6];
 
        });
		
		
		
		
		drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.POLYGON,
          drawingControl: true,
          drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT,
            drawingModes: ['polygon']
          },
          polygonOptions: {
			strokeColor: '#8B0000',
		  	strokeOpacity: 0.7,
		  	strokeWeight: 5,
		  	fillColor: '#ffff00',
          	fillOpacity:0.2,
            clickable: false,
            editable: true,
            zIndex: 1
			
          }
        });
        drawingManager.setMap(map);



	google.maps.event.addListener(drawingManager, 'polygoncomplete', function (polygon) {
	   document.getElementById("rp_poly").value = (polygon.getPath().getArray());
		drawingManager.setMap(null);
	
	});
}
  







 
</SCRIPT>


 <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" >
   <tr>
     <td colspan="2" align="left" valign="top"> &nbsp;
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td><span class="sblue"><strong>Draw a new  trade area</strong><br />
               <span class="black14" align='left' >Create a new store trade area file containing the   FSA LDU (postal codes) within the shape you create on the map. <br>
               <br>
Click <img src="polybutton.PNG" width="15" height="15" alt="polybutton"> on map to set boundaries  (area will highlight in yellow when complete and ready for analysis)</span></span></td>
         </tr>
       </table>
       
    &nbsp;</td>
   </tr>
   <tr>
     <td width="66%" rowspan="2" align="center" valign="top"><table width="95%" class="Example_E1">
       <tr>
         <td align="center" valign="top"><span class="sblue">Your Store's Market Area<br />
         </span><span class="black14">All households within the shape will be analyzed </span><span class="sblue"><br />
           </span>
         <div id="map" style="width: 650px; height: 540px"></div>
         <br /></td>
       </tr>
   </table></td>
     <td width="30%" align="center" valign="top"><table width="95%" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
       <tr>
           <td  align='left' valign="top" bgcolor="#FFFFFF"><table width="969%" height="100" border="0" cellspacing="0" cellpadding="5">
             <tr>
               <td  align='left' colspan="2" valign="top"><table width="99%" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
                 <tr>
                   <td colspan="2" align="center" bgcolor="#EFEFEF" class="sgrey12"><span class="sblue">Step 1: Draw your trade area</span></td>
                   </tr>
                 <tr>
                   <td width="65%" align="center" bgcolor="#EFEFEF" class="sgrey12"><input name="pc_zoom" type="text" class="sgrey12" id="pc_zoom" placeholder="Postal Code" size="10" onKeyPress="return dummy_proof_input(event)" />
                     &nbsp;</td>
                   <td width="35%" align="center" bgcolor="#EFEFEF" class="sgrey12"><input name="sub_customer_" type="button" class="btn btn-success btn-sm" id="sub_customer_" value="Centre Map" onClick="POLYsubmit();" /></td>
                 </tr>
                 <tr>
                   <td align="center" bgcolor="#EFEFEF" class="sgrey12"><input name="POLYsubmit1" type="submit" class="btn btn-success" id="POLYsubmit1" value="Refresh"  onclick="POLYsubmit();" /></td>
                   <td align="center" bgcolor="#EFEFEF" class="sgrey12">&nbsp;</td>
                 </tr>
                </table></td>
             </tr>
             <tr>
               <td colspan="2"  align='left' valign="top" bgcolor="#9900CC"><span class="f14">
                 <input name="rp_poly" type="hidden" id="rp_poly" value="" size="80"  />
               </span></td>
             </tr>
             <tr>
               <td  align='left' colspan="2" valign="top"><span class="sblue">Step 2: Trade Area Details
                 <input name="rp_mapdetails" type="hidden" id="rp_mapdetails"  size="40" />
                 <br />
                 
               </span></td>
              </tr>
             <tr>
               <td  align='left' valign="top" class="black14"><span class="black14">Store Number</span></td>
               <td  align='left' valign="top">
                 <span class="black14"  align='left' >
                 <input name="store_number" type="text" class="sgrey14" id="store_number" size="30"/>
                </span></td>
             </tr>
             <tr>
               <td  align='left' valign="top" class="black14"><span class="black14"  align='left'>Store Name</span></td>
               <td  align='left' valign="top"><span class="black14"  align='left'>
                 <input name="store_name" type="text" class="sgrey14" id="store_name" size="30"/>
               </span></td>
             </tr>
             <tr>
               <td  align='left' valign="top" class="black14"><span class="black14" align='left' >Postal Code</span></td>
               <td  align='left' valign="top"><span class="black14" align='left' >
                 <input name="store_pc" type="text" class="sgrey14" id="store_pc" value="<?php echo $show_pc_name; ?>" size="30"/>
               </span></td>
             </tr>
             <tr>
               <td align='left' valign="top" class="black14" ><span class="black14" align='left' >Store Notes (optional)</span></td>
               <td valign="top" align='left' ><span class="black14" align='left' >
                 <input name="store_notes" type="text" class="sgrey14" id="store_notes" size="30"/>
                </span></td>
             </tr>
           </table></td>
         </tr>
       </table>
       <br />
       <table width="95%"  height="125px" border="0" cellpadding="3" cellspacing="0" class="Example_E1">
         <tr>
           <td align="center" valign="top" bgcolor="#FFFFFF"><table width="95%" border="0" cellspacing="0" cellpadding="5">
             <tr>
               <td  align='left' width="68%" valign="top"><p><span class="sblue">Step 3: Confirmation</span><br />
               </p></td>
             </tr>
           </table>
             <p>
               <input name="RADsubmit3" type="button" class="btn btn-success" id="RADsubmit3" value="Save and Continue"  onclick="POSTRADsubmit();" />
             </p>
          </td>
         </tr>
       </table>
</td>
   </tr>
   <tr>
     <td align="center" valign="top">&nbsp;</td>
   </tr>
 </table>
 

<script async defer
  src="https://maps.googleapis.com/maps/api/js?client=gme-marketfocus&v=3.30&callback=initAutocomplete&libraries=places,drawing,visualization"></script>
  
 <SCRIPT language="JavaScript">
 document.getElementById('loading_image').style.display ="none";

</script>

<SCRIPT language="JavaScript">

// Override ENTER behaviour in UI


 document.getElementById('proc_div').style.display ="none";


</script>


