<?php

$id =  $_POST['idv'];
$day = $_POST['dayselected'];
 $day2v = $_POST['day2v'];
 $mfd=$_POST['mfd'];
include "db_connect.php";
$query = "SELECT * FROM amfd_carriers WHERE PK_ID = $id ORDER BY carrier_ai desc LIMIT 1  ";

//echo "SELECT * FROM amfd_carriers WHERE PK_ID = $id ORDER BY carrier_ai desc LIMIT 1  ";
if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
    $files_loaded_count = $files_loaded_count + 1;
     $json_posted =  $row['json_carrier'];
}}

$rawdata_array = json_decode($json_posted,true);	
//print_r( $rawdata_array);
$i = 0;
foreach ($rawdata_array as $key => $value) {

    if( $i >= 6){
    if (($value['MFDCODE']) == $mfd){
//echo "do something";
$mfd_th = $value['TMC_HOMES'];
$mfd_ta = $value['TMC_APTS_'];
$mfd_eh = $value['EMC_HOMES_'];
$mfd_ea = $value['EMC_APTS_'];
$mfd_sh = $value['SUB_HOMES_'];
$mfd_sa = $value ['SUB_APTS_'];


$TMC_HOMESarray = explode(",", $mfd_th);
$TMC_APTS_array = explode(",", $mfd_ta);
$EMC_HOMESarray = explode(",", $mfd_eh);
$EMC_APTS_array = explode(",", $mfd_ea);
$SUB_HOMESarray = explode(",", $mfd_sh);
$SUB_APTS_array = explode(",", $mfd_sa);

/*print_r($SUB_HOMESarray);
if(($TMC_HOMESarray[$day]>0)&&($TMC_APTS_array[$day]>0)){
    echo "TMC-";

}
if(($EMC_HOMESarray[$day]>0)&&($EMC_APTS_array[$day]>0)){
    echo "EMC-";
    
}
if(($SUB_HOMESarray[$day]>0)&&($SUB_APTS_array[$day]>0)){
    echo "SUB-";
    
}*/


if(($TMC_HOMESarray[$day]>0)||($TMC_APTS_array[$day]>0)){
    echo "TMC-";
}
else if(($EMC_HOMESarray[$day]>0)||($EMC_APTS_array[$day]>0)){
    echo "EMC-";
}
else if(($SUB_HOMESarray[$day]>0)||($SUB_APTS_array[$day]>0)){
    echo "SUB-";
}
else{
    echo "No Dist-";
}

if($TMC_HOMESarray[$day]>0){
    print_r ($TMC_HOMESarray[$day]);
    echo "-";
}

else if($EMC_HOMESarray[$day]>0){
print_r($EMC_HOMESarray[$day]);
echo "-";
}

else if($SUB_HOMESarray[$day]>0){
    print_r($SUB_HOMESarray[$day]);
    echo "-";  
}
else{
    echo "0-";
}

if($TMC_APTS_array[$day]>0){
    print_r($TMC_APTS_array[$day]);
    echo "-";
    }
    
else if($EMC_APTS_array[$day]>0){
    print_r ($EMC_APTS_array[$day]);
    echo "-";
    }
    
else if($SUB_APTS_array[$day]>0){
    print_r ($SUB_APTS_array[$day]);
    echo "-";  
    }
    else{
        echo "0-";
    }


}
  
}
 $i++;
 }

$TMC_HOMESarray = explode(",", $rawdata_array[$day]['TMC_HOMES']);

/*if($rawdata_array[$day]['MFDCODE']=='0000'){
    echo "canada post";
}*/
 $TMC_APTS_array = explode(",", $rawdata_array[$day]['TMC_APTS_']);
$EMC_HOMESarray = explode(",", $rawdata_array[$day]['EMC_HOMES_']);
$EMC_APTS_array = explode(",", $rawdata_array[$day]['EMC_APTS_']);
$SUB_HOMESarray = explode(",", $rawdata_array[$day]['SUB_HOMES_']);
$SUB_APTS_array = explode(",", $rawdata_array[$day]['SUB_APTS_']);

//print_r($TMC_HOMESarray);         


/*if($TMC_HOMESarray[$day] > 0) {
              //echo  "hi".$TMC_HOMESarray[$day];	
          } else {
             echo "0";
          }	
          if($TMC_HOMESarray[$day] > 0) {
            //echo  "hi".$TMC_HOMESarray[$day];	
        } else {
           echo "0";
        }	
*/?>