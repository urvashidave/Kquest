
<?php
    header("content-type: text/javascript"); 
 
    if(isset($_GET['name']) && isset($_GET['callback']))
    {
        //$obj->name = $_GET['name'];
        //$obj->message = "Hello " . $obj->name;
		
		$obj['name'][] = $_GET['name'];
		$obj['name'][] = "Brad";
		$obj['message'][] = "1111";
		$obj['message'][] = "2222";
         
        echo $_GET['callback']. '(' . json_encode($obj) . ');';
    }
?>
