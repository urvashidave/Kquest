<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
<!-- bootstrap, font awesome, google maps, google fonts-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<!-- google maps api AIzaSyCUjK0dLmLViSY0oH5bm-LgRBJavnbuL1Y  
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Open+Sans|Roboto|Roboto+Condensed" rel="stylesheet"> 
<style>
.map_100p { 
width: 500; 
height: 500;
background-color:#0CC;
}
</style>
<title>WiseGeo</title>

<script> <!-- Google map script--> 

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 43.7, lng: -79.2},
          zoom: 8
        });
      }


</script> <!-- End Google map script--> 
</head>

<body onLoad="initMap();">


 <!------------------------------------ main body--------------------------->
<div class="container">  <!-- container-->      
	<div class="row">		<!-- container--> 
		<div class="map_100p" > left
        	<div id="map" style="width:100; height:400"></div>
            bottom
      	</div>	<!-- right-->
          <!-- Left -->
  	</div>	<!-- end row-->   	


 
      
</div> <!-- End container  -->    
    
    
 
 


      



<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>