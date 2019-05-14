<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JQuery JSONP</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
 
        
            $.ajax({
                url: 'ajax_data3.php',
                data: {name: 'Chad'},
                dataType: 'jsonp',
                jsonp: 'callback',
                jsonpCallback: 'jsonpCallback',
                
            });
       
 
    });
     
    function jsonpCallback(data){
        $('#jsonpResult').text(data.message);
    }
    </script>
  </head> 
  
  <body>
    Results <br /><br />
    <span id="jsonpResult"></span>
  </body>
</html>