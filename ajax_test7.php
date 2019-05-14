<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>JQuery JSONP</title>
    
    
   
  </head> 
  
  <body>
    Results <br /><br />
    <?php


  // Here is the data we will be sending to the service
  $some_data = array(
    'sp_to_run' => 'GET CATEGORIES', 
    'sp_value' =>  " 'one' 'two' "  
  );  
 
  $curl = curl_init();
  // You can also set the URL you want to communicate with by doing this:
  // $curl = curl_init('http://localhost/echoservice');
   
  // We POST the data
  curl_setopt($curl, CURLOPT_POST, 1);
  
  // Set the url path we want to call
  //curl_setopt($curl, CURLOPT_URL, 'http://www.quantinc.ca/dev/ajax_data7.php'); 
  curl_setopt($curl, CURLOPT_URL, 'http://www.market-focus.com/brad/ajax_data7.php');  
  
  // Make it so the data coming back is put into a string
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
  // Insert the data
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
   
  // You can also bunch the above commands into an array if you choose using: curl_setopt_array
   
  // Send the request
  $result = curl_exec($curl);
  $array = json_decode(trim($result), TRUE);
	print_r($array);
  
  // Free up the resources $curl is using
  curl_close($curl);

  
   
   
   
   
  print_r($result);
?>

    ???? <br /><br />


  </body>
</html> 