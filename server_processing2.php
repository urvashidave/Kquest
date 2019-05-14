<?php
$rowtemp_counter = 0;
$report_uid=$_GET['report_uid'];
$temp_table_name = $_GET['table'];
$count=$_GET['count'];

include 'db_connect_wg.php'; 
$query = "SELECT * FROM $temp_table_name WHERE report_uid = $report_uid ORDER BY (demo_score + bbm_score + sp_score + seg_score + hi_score + homes_score + auto_score + eth_score) DESC";

$result = mysqli_query($link, $query);
$i = 0;



		if ($result = mysqli_query($link, $query)) {
?>

{


  "data": [

    

<?php
				while ($row = mysqli_fetch_assoc($result)) {
// get temo score
					
		
       if (($i == ($count-1))){
       
       
       $temp_total_score = $row['demo_score'] + $row['bbm_score'] + $row['sp_score'] + $row['hi_score'] + $row['seg_score'] + $row['homes_score'] + $row['auto_score'] + $row['eth_score'];
					$rowtemp_counter = $rowtemp_counter + 1;
					// running total of score * households
             
             
       ?>
       
       [
      "<?php echo $rowtemp_counter;?> ",

      "<?php echo $row['PostCode'];?>",

      "<?php echo $temp_total_score;?>",

      "<?php echo $row['HH_TOT'];?>"
    ]
       
       
       <?php
       }
       
       
       
       else{
       
       $temp_total_score = $row['demo_score'] + $row['bbm_score'] + $row['sp_score'] + $row['hi_score'] + $row['seg_score'] + $row['homes_score'] + $row['auto_score'] + $row['eth_score'];
					$rowtemp_counter = $rowtemp_counter + 1;
					// running total of score * households
      
      		?>


 [
      "<?php echo $rowtemp_counter;?> ",

      "<?php echo $row['PostCode'];?>",

      "<?php echo $temp_total_score;?>",

      "<?php echo $row['HH_TOT'];?>"
    ],
<?php }
$i=$i+1;
}
				
}	
//echo $i;
?>
      ]

}

