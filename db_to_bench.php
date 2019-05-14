<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WORK WITH DATA</title>
</head>

<body>

<?php 

// ------------------------------------------------ db_connect
	$myServer = "localhost";
	$myUser = "quantincca";
	$myPass = "Jennt4helpWISE";
	$myDB = "quantincca"; 

//connection to database
$link = mysqli_connect($myServer, $myUser, $myPass, $myDB);

$db_field_to_move = "dept";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");







$db_field_to_move = "cv";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");



 	$db_field_to_move = "drug";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");






	$db_field_to_move = "clothing";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");





$db_field_to_move = "shoe";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	





$db_field_to_move = "book";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	



$db_field_to_move = "jewel";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	



$db_field_to_move = "furn";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	




$db_field_to_move = "home";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	


$db_field_to_move = "eye";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	







$db_field_to_move = "glasses";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	


$db_field_to_move = "elect";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	









$db_field_to_move = "office";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	







$db_field_to_move = "sport";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");	








$db_field_to_move = "toy";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");



$db_field_to_move = "pet";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");





$db_field_to_move = "pet_own";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");


$db_field_to_move = "type_r";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");



$db_field_to_move = "type_o";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 898";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'A') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 899";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'B') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 900";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'C') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 901";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'E') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 935";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'G') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 936";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'H') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 937";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'J') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 917";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'K') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 918";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'L') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 912";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'M') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 940";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'N') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 941";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'P') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 905";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'R') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 906";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'S') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 907";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'T') ");

$query = "SELECT * FROM amfd_savedvals WHERE  agg_name = '$db_field_to_move' and store_uid = 908";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list =  $row['agg_list'];
				echo $row['store_uid'] . " " . $row['agg_list'] . "<br />";

		}}

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list', 'V') ");

?> 

</body>
</html>
