

<?php
$color = $_POST['next_page_color'];
if($color=="red"){?>

<style>
.sblue{
color: #990033;
}
.red {
    font-family: Arial Narrow, Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: bold;
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
    color: #990033 ;
}
.sreseller:hover {	

	color: #b74c70;
}
</style>


<?php 
} else {
?>

<style>
.sblue{
color: #147EA7;
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
<link rel='STYLESHEET' type='text/css' href='master_style.css'>
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZgwgaf7Tehvdma313gZ-684QizKPy-so&libraries=places,drawing,visualization" async defer></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
<script async defer
  src="https://maps.googleapis.com/maps/api/js?client=gme-marketfocus&v=3.30"></script>
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



if (isset($_POST["rp_radius"])) {	$rp_radius = $_POST["rp_radius"];} else $rp_radius = "2000,12,43.65562655647711,-79.41560498730469";





include "qi_get_map.php";

?>

<body  onLoad='initialize();'>

<SCRIPT language="JavaScript">









function initialize() {

    var latlng = new google.maps.LatLng(<?php echo $start_lat; ?>, <?php echo $start_lon; ?>);

    var myOptions = {

      zoom: <?php echo $start_zoom; ?>,

      center: latlng,

      mapTypeId: google.maps.MapTypeId.HYBRID,

	  navigationControl: true,

	  scaleControl: true



    };

    map = new google.maps.Map(document.getElementById("map"), myOptions);

	

	google.maps.event.addListener(map, 'bounds_changed', function(event) {

    placeMarker();

  });

  

  

var myCityCenter=map.getCenter();

var radius_size = 2000;



var populationOptionsAgain = {

 strokeColor: '#FF0000',

      strokeOpacity: 0.5,

      strokeWeight: 2,

      fillColor: '#FF0000',

      fillOpacity: 0.35,

  map: map,

  center: myCityCenter,

  radius: radius_size

};



cityCircle = new google.maps.Circle(populationOptionsAgain);

cityCircle.setMap(map);

placeMarker();



document.getElementById("radius_size").value = radius_size;

var center = map.getCenter();	var center_lat = center.lat();	var center_long = center.lng();	 var center_zoom = map.getZoom();

document.getElementById("rp_radius").value = radius_size + "," +  center_zoom + "," + center_lat + "," + center_long ;

}

  

  



function placeMarker() {

	var center = map.getCenter();	var center_lat = center.lat();	var center_long = center.lng();	

	var center_zoom = map.getZoom();	var bounds = map.getBounds();	var southWest = bounds.getSouthWest();

	var northEast = bounds.getNorthEast();	var v_biglat = northEast.lat();	var v_smalllat = southWest.lat();

	var v_biglong = northEast.lng();	var v_smalllong = southWest.lng();

	var ArrCentre2 =new Array()

		

		ArrCentre2[0] =center_zoom;		ArrCentre2[1] =center_lat;		ArrCentre2[2] =center_long;

		ArrCentre2[3] =v_biglat;		ArrCentre2[4] =v_smalllat;		ArrCentre2[5] =v_biglong;

		ArrCentre2[6] =v_smalllong;



document.getElementById("rp_mapdetails").value = ArrCentre2[0] + "," + ArrCentre2[1] + "," + ArrCentre2[2] + "," + ArrCentre2[3] + "," + ArrCentre2[4] + "," + ArrCentre2[5] + "," + ArrCentre2[6];

  

}





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

	  

	  







function add_radius() {

	 var radius_size = parseInt(document.getElementById("radius_size").value) ;

	 

	 document.getElementById("kmshow").innerHTML = (radius_size * 0.001)  + " Km";

 cityCircle.setMap(null);

var myCityCenter=map.getCenter();

var populationOptionsAgain = {

 strokeColor: '#FF0000',

      strokeOpacity: 0.8,

      strokeWeight: 2,

      fillColor: '#FF0000',

      fillOpacity: 0.35,

  map: map,

  center: myCityCenter,

  radius: radius_size

};



cityCircle = new google.maps.Circle(populationOptionsAgain);

cityCircle.setMap(map);

placeMarker();

var center = map.getCenter();	var center_lat = center.lat();	var center_long = center.lng();	 var center_zoom = map.getZoom();

document.getElementById("rp_radius").value = radius_size + "," +  center_zoom + "," + center_lat + "," + center_long ;

}





function change_radius(val) {

	 var radius_size = parseInt(val.value) * 1000;

	 document.getElementById("kmshow").innerHTML = (radius_size * 0.001) + " Km";

 cityCircle.setMap(null);

var myCityCenter=map.getCenter();

var populationOptionsAgain = {

 strokeColor: '#FF0000',

      strokeOpacity: 0.8,

      strokeWeight: 2,

      fillColor: '#FF0000',

      fillOpacity: 0.35,

  map: map,

  center: myCityCenter,

  radius: radius_size

};



cityCircle = new google.maps.Circle(populationOptionsAgain);

cityCircle.setMap(map);

placeMarker();

document.getElementById("radius_size").value = radius_size;



if(radius_size > 50000) map.setZoom(8);

if(radius_size > 20000 && radius_size <50001) map.setZoom(9);

if(radius_size > 12000 && radius_size <20001) map.setZoom(9);

if(radius_size > 9000 && radius_size <12001) map.setZoom(10);

if(radius_size > 6000 && radius_size <9001) map.setZoom(11);

if(radius_size > 3500 && radius_size <6001) map.setZoom(12);

if(radius_size > 1000 && radius_size <3501) map.setZoom(13);

if(radius_size > 500 && radius_size <1001) map.setZoom(14);

if(radius_size > 100 && radius_size <501) map.setZoom(15);

if(radius_size > 11 && radius_size <101) map.setZoom(16);

if(radius_size < 11) map.setZoom(16);





var center = map.getCenter();	var center_lat = center.lat();	var center_long = center.lng();	 var center_zoom = map.getZoom();

document.getElementById("rp_radius").value = radius_size + "," +  center_zoom + "," + center_lat + "," + center_long ;

}







function lose_radius() {



	cityCircle.setMap(null);



}











function POSTMAPsubmit2() {

	 var radius_size = parseInt(document.getElementById("radius_size").value);

var center = map.getCenter();	var center_lat = center.lat();	var center_long = center.lng();	 var center_zoom = map.getZoom();

document.getElementById("rp_radius").value = radius_size + "," +  center_zoom + "," + center_lat + "," + center_long ;

document.getElementById('proc_div').style.display = 'block';

document.getElementById('proc_div').style.zIndex= 200;

document.getElementById('next_page').value = "ui_postmap.php";

document.main_form.target = "_top";

document.main_form.submit(); 		

}





</SCRIPT>





 <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" >

   <tr>

     <td colspan="2" align="left" valign="top"> &nbsp;

       <table width="100%" border="0" cellspacing="0" cellpadding="0">

         <tr>

           <td><table width="523" height="50" border="0" cellspacing="0" cellpadding="5">

             <tr>

               <td valign="top"><span class="sblue"><strong>New  trade area (map view)</strong><br />

                <span class="black14" align='left' >The system will create a new store trade area file containing the   FSA LDU (postal codes) within the boundaries on the map.</span></span></td>

              </tr>

           </table></td>

           <td><div id="proc_div" style="display: none;"><img src="please_wait.gif" width="572" height="304" alt="processing"></div></td>

         </tr>

       </table>

       

    &nbsp;</td>

   </tr>

   <tr>

     <td width="66%" rowspan="2" align="center" valign="top"><table width="95%" class="Example_E1">

       <tr>

         <td align="center" valign="top"><span class="sblue">Your Store's Market Area1<br />

         </span><span class="black14">All households within the circle will be analyzed </span><span class="sblue"><br />

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

                   <td colspan="2" align="center" bgcolor="#EFEFEF" class="sgrey12"><span class="sblue">Step 1: Identify your trade area</span></td>

                   </tr>

                 <tr>

                   <td width="65%" align="center" bgcolor="#EFEFEF" class="sgrey12"><input name="pc_zoom" type="text" class="sgrey12" id="pc_zoom" placeholder="Postal Code" size="10" onKeyPress="return dummy_proof_input(event)" />

                     &nbsp;</td>

                   <td width="35%" align="center" bgcolor="#EFEFEF" class="sgrey12"><input name="sub_customer_" type="button" class="btn btn-success btn-sm" id="sub_customer_" value="Centre Map" onClick="MAPLOADsubmit();" /></td>

                   </tr>

                 <tr>

                   <td align="center" bgcolor="#EFEFEF" class="sgrey12">

                    <div style="position:relative;float:left;width:125px;height:25px;border:0;padding:0;margin:0; margin-right: 20px;">



                     <select style="position:absolute;top:0px;left:0px;width:105px; height:25px;line-height:20px;margin:0;padding:0;" onChange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value; change_radius(this);">



                         <option value=".2">0.2</option>



						 <option value=".500">0.5 radius</option>



						 <option value="1">1 radius</option>



						 <option value="2" selected="selected">2 radius</option>



						 <option value="3">3 radius</option>



						 <option value="4">4 radius</option>



						 <option value="5">5 radius</option>



						 <option value="6">6 radius</option>



						 <option value="7">7 radius</option>



						 <option value="8">8 radius</option>



						 <option value="9">9 radius</option>



						 <option value="10">10 radius</option>



						 <option value="50">50 radius</option>



						 <option value="100">100 radius</option>



						 <option value="200">200 radius</option>



						  <option value="300">300 radius</option>



						   <option value="400">400 radius</option>



						    <option value="450">450 radius</option>



							



						                      </select>



                      <input name="displayValue" placeholder="add/select a value" id="displayValue" style="position:absolute;top:0px; left:0px; width: 85px; height:23px; height:21px\9;#height:18px;" onFocus="this.select()" type="text" onChange="change_radius(this);"/>



                       <input name="idValue" id="idValue" type="hidden" value="10" onChange="change_radius(this);">



</div><p style="float:left; margin: 0; padding: 0; position:relative;" id="kmshow">KM</p>



				   <!-- 



				   <select name="list1" id="list1"  onchange="change_radius(this)">



                     <option value="200">0.2 km radius</option>



                     <option value="500">0.5 km radius</option>



                     <option value="1000">1 km radius</option>



                     <option value="2000" selected="selected">2 km radius</option>



                     <option value="3000">3 km radius</option>



                     <option value="4000">4 km radius</option>



                     <option value="5000">5 km radius</option>



                     <option value="6000">6 km radius</option>



                     <option value="7000">7 km radius</option>



                     <option value="8000">8 km radius</option>



                     <option value="9000">9 km radius</option>



                     <option value="10000">10 km radius</option>



					 <option value="50000">50 km radius</option>



					 <option value="100000">100 km radius</option>



					 <option value="200000">200 km radius</option>



                     <option value="805">0.5 mile radius</option>



                     <option value="1609">1 mile radius</option>



                     <option value="3218">2 mile radius</option>



                     <option value="4827">3 mile radius</option>



                     <option value="6436">4 mile radius</option>



                     <option value="8045">5 mile radius</option>



                   </select>



				   -->

                    </td>

                   <td align="center" bgcolor="#EFEFEF" class="sgrey12"><a class="btn btn-success btn-sm" href="javascript: add_radius();">Select area</a></td>

                 </tr>

               </table></td>

             </tr>

             <tr>

               <td  align='left' colspan="2" valign="top">&nbsp;</td>

             </tr>

             <tr>

               <td  align='left' colspan="2" valign="top"><span class="sblue">Step 2: Trade Area Details

                 <input name="rp_mapdetails" type="hidden" id="rp_mapdetails" value ="<?php echo $rp_mapdetails ;?>" size="40" />

                 <br />

                 <input name="rp_radius" type="hidden" id="rp_radius" value ="<?php echo $rp_radius ;?>" size="40" />

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

             <tr>

               <td align='left' valign="top" class="black14" ><span class="black14">Store KML</span></td>

               <td valign="top" align='left' ><span class="black14">

                 <input name="kml_id" type="hidden" class="sgrey14" id="kml_id" value="0" size="30"/>

                 <label for="client_kml_list"></label>

                 <select name="client_kml_list" id="client_kml_list" onChange="change_list_function()">

                  <option value="-1">Use Radius</option>

                   <option value="0">No boundary file</option>

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

                 <label for="asdassdas"></label>

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

               <input name="UPsubmit3" type="submit" class="btn btn-success" id="UPsubmit3" value="Save and Continue"  onclick="POSTMAPsubmit2();" />

             </p>

           <p><span class="sgrey12">

             <input name="radius_size" type="hidden" id="radius_size" value="2000" />

           </span> </p></td>

         </tr>

       </table>

</td>

   </tr>

   <tr>

     <td align="center" valign="top">&nbsp;</td>

   </tr>

 </table>

 <SCRIPT language="JavaScript">

 document.getElementById('loading_image').style.display ="none";

document.getElementById("rp_mapdetails").value = ArrCentre2[0] + "," + ArrCentre2[1] + "," + ArrCentre2[2] + "," + ArrCentre2[3] + "," + ArrCentre2[4] + "," + ArrCentre2[5] + "," + ArrCentre2[6];



</script>



<SCRIPT language="JavaScript">



// Override ENTER behaviour in UI



document.main_form.addEventListener('keydown', function(e) {



	// Override ENTER behaviour in UI



	if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {



            if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {



                e.preventDefault();



                return false;



            }



    }



}, true);







document.getElementById('pc_zoom').addEventListener('keydown', function(e) {



	if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {



            MAPLOADsubmit();



    }



}, true);







document.getElementById('displayValue').addEventListener('keydown', function(e) {



console.log("this ran");



if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {



			change_radius(this);



    }



}, true);











 document.getElementById('proc_div').style.display ="none";



document.getElementById("rp_mapdetails").value = ArrCentre2[0] + "," + ArrCentre2[1] + "," + ArrCentre2[2] + "," + ArrCentre2[3] + "," + ArrCentre2[4] + "," + ArrCentre2[5] + "," + ArrCentre2[6];







</script>


