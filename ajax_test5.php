<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>JQuery JSONP</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script>
	$(document).ready(function(){
			$.ajax({
				url: 'http://www.market-focus.com/brad/ajax_data3.php',
				data: {name: 'MFDskajdhfsalkjhfehfkjhsaui34rf'},
				dataType: 'jsonp',
				jsonp: 'callback',
				jsonpCallback: 'jsonpCallback',
				success: function(data) { // in case of success get the output, i named data
						var strData = JSON.stringify(data);
						console.log(strData );
						$('#jsonpResult').text(data.name[0]);
						$('#jsonpResult2').text(data.message[1]);
						var text = "";
						var i;
						for (i = 0; i < 5; i++) {
								text += "ID: " + data.name[i] + " NAME: " + data.message[i] + " <br>";
							}
							document.getElementById("demo1").innerHTML = text;
						}
			});
			
	});		 
	 </script>
     <?php
	 		echo ">>>>GET ";
			foreach ($_GET as $key => $value) {
					echo $key . ' => ' . $value . '<br />';
				}
			echo ">>>>POST ";
			foreach ($_POST as $key => $value) {
					echo $key . ' => ' . $value . '<br />';
				}
			echo ">>>>" . $_GET['data']; // print it
			

?>		
   
  </head> 
  
  <body>
    Results <br /><br />
    <span id="jsonpResult"></span>
    <span id="jsonpResult2"></span>
    
    <p id="demo1"></p>
    


  </body>
</html> 