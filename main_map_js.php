<?php 
// us counties map
// https://fusiontables.google.com/data?docid=1xdysxZ94uUFIit9eXmnw1fYc6VcQiXhceFd_CVKa#rows:id=3

// us states fusion table
// https://fusiontables.google.com/data?docid=17aT9Ud-YnGiXdXEJUyycH2ocUqreOeKGbzCkUw#map:id=3
?>
<script> 



<!-- Google map script--> 

<!-- update rp_details -->
function update_rp_details() {
	var radius_size = document.getElementById("radius_size").value;
		var val_center = map.getCenter();
		var val_zoom = map.getZoom();
	var center_lat = val_center.lat();	
	var center_long = val_center.lng();	
	var center_zoom = val_zoom;	
	var ArrCentre2 = new Array()		
		ArrCentre2[0] = center_zoom;		
		ArrCentre2[1] = Math.round(center_lat * 10000) / 10000	;
		ArrCentre2[2] =  Math.round(center_long * 10000) / 10000;
document.getElementById("rp_mapdetails").value = radius_size + "_" + ArrCentre2[0] + "_" + ArrCentre2[1] + "_" + ArrCentre2[2];
}

<!-- change zoom level -->
function update_zoom(val) {
	var radius_size = val;
	if(radius_size > 100000) map.setZoom(8);
	if(radius_size > 50000 && radius_size <100000) map.setZoom(9);
	if(radius_size > 20000 && radius_size <50000) map.setZoom(10);
	if(radius_size > 7000 && radius_size <20001) map.setZoom(11);
	if(radius_size > 3500 && radius_size <7001) map.setZoom(12);
	if(radius_size > 1000 && radius_size <3501) map.setZoom(13);
	if(radius_size > 500 && radius_size <1001) map.setZoom(14);
	if(radius_size > 100 && radius_size <501) map.setZoom(15);
	if(radius_size > 11 && radius_size <101) map.setZoom(15);
	if(radius_size < 11) map.setZoom(15);
	
}

<!-- Google map - user updates location -->   
function update_area() {
	 var radius_size = parseInt(document.getElementById("radius_size").value);
	 cityCircle.setMap(null);
	var myCityCenter=map.getCenter();
	var populationOptionsAgain = {
	 strokeColor: '#E80C33',
		  strokeOpacity: 0.9,
		  strokeWeight: 5,
		  fillColor: '#FFB9B1',
		  fillOpacity: 0.35,
	  map: map,
	  center: myCityCenter,
	  radius: radius_size
	};
	
	cityCircle = new google.maps.Circle(populationOptionsAgain);
	cityCircle.setMap(map);	
	update_zoom(radius_size);
	update_rp_details();
}

function get_fsa() {
	<?php include "get_fsa.php"; ?>
	var layer = new google.maps.FusionTablesLayer({
          query: {
            select: 'geometry',
            from: '1CpA_TGxjhWu3jOOvabl_Y1UQgBXRwMsmps74m_Ws',
			where: "'PRUID' = <?php echo $pruid; ?> "
          },		  
		
		styles: [{
             polygonOptions: {
              fillColor: '#eaeaea',
              fillOpacity: 0.2
            }
          }, {
            
			where: " 'CFSAUID' IN (<?php echo $fsa_all_list; ?>) ",
			  polygonOptions: {
              fillColor: '#FF857E',
              fillOpacity: 0.4
            }
          }, {
            where: "'CFSAUID' IN ('M8W','M8V') ",
            polygonOptions: {
              fillColor: '#64CB71',
              fillOpacity: 0.4
            }
          }]
        });

        layer.setMap(map);

		google.maps.event.addListener(layer, 'click', function(e) {
          // Change the content of the InfoWindow
          e.infoWindowHtml = e.row['CFSAUID'].value + "<br>";
         
        });
	
}
<!-- change radius -->
function change_radius(val) {
	 var radius_size = parseInt(val.value);
	document.getElementById("radius_size").value = radius_size;
	cityCircle.setMap(null);
	var myCityCenter=map.getCenter();
	var populationOptionsAgain = {
	 strokeColor: '#10801E',
		  strokeOpacity: 0.9,
		  strokeWeight: 5,
		  fillColor: '#10801E',
          fillOpacity:0.1,
		  clickable:false,
		  
	  map: map,
	  center: myCityCenter,
	  radius: radius_size
	};
	
	cityCircle = new google.maps.Circle(populationOptionsAgain);	
	cityCircle.setMap(map);
	
	/* set zoom level based on radius size */
	update_zoom(radius_size);
	update_rp_details();

}

		var map;
      	
 

function initAutocomplete() {
	
	var latlng = new google.maps.LatLng(<?php echo $start_lat; ?>, <?php echo $start_lon; ?>);
    var myOptions = {
      zoom: <?php echo $start_zoom; ?>,
      center: latlng,
	  clickable:true,
      mapTypeId: google.maps.MapTypeId.HYBRID,
	  navigationControl: true,
	  mapTypeControl: false,
	  scaleControl: true,
	  zoomControl: true

    };
    map = new google.maps.Map(document.getElementById("map"), myOptions);
	
// Create radius	
		var populationOptionsAgain = {
		 strokeColor: '#10801E',
		  strokeOpacity: 0.5,
		  strokeWeight: 5,
		  fillColor: '#10801E',
          fillOpacity:0.1,
		  map: map,
		  center: {lat: <?php echo $start_lat; ?>, lng: <?php echo $start_lon; ?>},
		  radius: <?php echo $radius_size; ?>,
		  editable: true

	};
	var cityCircle;
	cityCircle = new google.maps.Circle(populationOptionsAgain);
	cityCircle.setMap(map);
	
	
// places of interest	

var circle_locations_0 = {
		 strokeColor: '#933',
		  strokeOpacity: 0.9,
		  strokeWeight: 5,
		  fillColor: '#933',
          fillOpacity:0.7,
		  map: map,
		   center: {lat: <?php echo ($start_lat + 0.06); ?>, lng: <?php echo $start_lon; ?>},
		  radius: 2000,
		  editable: true
	};
	
	var place_locations_0;
		place_locations_0 = new google.maps.Circle(circle_locations_0);
		place_locations_0.setMap(map);

	var contentString_0 = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">School 1</h1>'+
            '<div id="bodyContent">'+
            '<p><b>School 1 line 2 </b><br /><br />'+
			'Name: my name  <br />'+
			'Address: 123  <br />'+
            'Postal code:  n8v2b3</p>'+
            '</div>'+
            '</div>';

	var infowindow_0 = new google.maps.InfoWindow({
          content: contentString_0
        });
	
	place_locations_0.addListener('click', function() {
			 infowindow_0.setPosition(place_locations_0.getCenter());
          infowindow_0.open(map, place_locations_0);
        });
	
	


	
	
		

// Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
		
		
// Bias the SearchBox results towards current map's viewport
// Update the rp_details 
        map.addListener('bounds_changed', function(event) {          	
			searchBox.setBounds(map.getBounds());	  
        });

        var markers = [];
// Listen for the event fired when the user selects a prediction and retrieve
// more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
          if (places.length == 0) {
            return;
          }

// Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

// For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

// Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
		
		

}




</script> <!-- End Google map script--> 