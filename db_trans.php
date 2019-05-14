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

$db_field_to_move = "cv";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);



for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;


$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");




$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
		
		
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);
		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}



echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;


$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");




$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);



for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;


$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");


$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
		
				
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);




for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");






for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}



echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') ");














$db_field_to_move = "drug";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 	





$db_field_to_move = "clothing";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 		








$db_field_to_move = "shoe";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 







$db_field_to_move = "book";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 








$db_field_to_move = "jewel";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 




$db_field_to_move = "furn";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 





$db_field_to_move = "home";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 










$db_field_to_move = "eye";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 

	
	
	
	
	
	
	
$db_field_to_move = "glasses";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 	
	
	
	
	
	




$db_field_to_move = "elect";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 






$db_field_to_move = "office";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 










$db_field_to_move = "sport";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 







$db_field_to_move = "toy";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 






$db_field_to_move = "pet";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 






$db_field_to_move = "pet_own";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 












$db_field_to_move = "type_r";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 
	
	
	
	
$db_field_to_move = "type_o";
echo "<br /><br />" . $db_field_to_move . "<br /><br />";

// ------------------------------------------------ create
//table field names
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'A' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['A'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'B' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['B'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'C' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['C'] =  $row['agg_list'];
		}}
		
		$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'E' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['E'] =  $row['agg_list'];
		}}
		
$agg_list_array['A'] = explode(",", $agg_list_['A']);
$agg_list_array['B'] = explode(",", $agg_list_['B']);
$agg_list_array['C'] = explode(",", $agg_list_['C']);
$agg_list_array['E'] = explode(",", $agg_list_['E']);

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Atlantic'][$i] = $agg_list_array['A'][$i] + $agg_list_array['B'][$i] + $agg_list_array['C'][$i]  + $agg_list_array['E'][$i] ;
}

echo "<br /><br /> Atlantic"; print_r($agg_list_array['Atlantic']) ;

$agg_list_post = implode(",", $agg_list_array['Atlantic']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Atlantic') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'G' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['G'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'H' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['H'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'J' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['J'] =  $row['agg_list'];
		}}
			
$agg_list_array['G'] = explode(",", $agg_list_['G']);
$agg_list_array['H'] = explode(",", $agg_list_['H']);
$agg_list_array['J'] = explode(",", $agg_list_['J']);		

for ($i = 0; $i < sizeof($agg_list_array['G']) ; $i++) { 
	$agg_list_array['Quebec'][$i] = $agg_list_array['G'][$i] + $agg_list_array['H'][$i] + $agg_list_array['J'][$i] ;
}

echo "<br /><br /> Quebec"; print_r($agg_list_array['Quebec']) ;

$agg_list_post = implode(",", $agg_list_array['Quebec']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Quebec') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'K' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['K'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'L' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['L'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'M' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['M'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'N' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['N'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'P' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['P'] =  $row['agg_list'];
		}}
				
$agg_list_array['K'] = explode(",", $agg_list_['K']);
$agg_list_array['L'] = explode(",", $agg_list_['L']);
$agg_list_array['M'] = explode(",", $agg_list_['M']);
$agg_list_array['N'] = explode(",", $agg_list_['N']);
$agg_list_array['P'] = explode(",", $agg_list_['P']);

for ($i = 0; $i < sizeof($agg_list_array['K']) ; $i++) { 
	$agg_list_array['Ont'][$i] = $agg_list_array['K'][$i] + $agg_list_array['L'][$i] + $agg_list_array['M'][$i]  + $agg_list_array['N'][$i] + $agg_list_array['P'][$i] ;
}

echo "<br /><br /> Ont"; print_r($agg_list_array['Ont']) ;

$agg_list_post = implode(",", $agg_list_array['Ont']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Ont') ");

$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'R' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				$agg_list_['R'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'S' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['S'] =  $row['agg_list'];
		}}
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'T' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['T'] =  $row['agg_list'];
		}}
		
$query = "SELECT * FROM amfd_bench WHERE  agg_name = '$db_field_to_move' and bench_name = 'V' ";
		if ($result = mysqli_query($link, $query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$agg_list_['V'] =  $row['agg_list'];
		}}
						
$agg_list_array['R'] = explode(",", $agg_list_['R']);
$agg_list_array['S'] = explode(",", $agg_list_['S']);
$agg_list_array['T'] = explode(",", $agg_list_['T']);
$agg_list_array['V'] = explode(",", $agg_list_['V']);

for ($i = 0; $i < sizeof($agg_list_array['R']) ; $i++) { 
	$agg_list_array['West'][$i] = $agg_list_array['R'][$i] + $agg_list_array['S'][$i] + $agg_list_array['T'][$i]  + $agg_list_array['V'][$i]  ;
}

echo "<br /><br /> West"; print_r($agg_list_array['West']) ;


$agg_list_post = implode(",", $agg_list_array['West']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'West') ");

for ($i = 0; $i < sizeof($agg_list_array['A']) ; $i++) { 
	$agg_list_array['Canada'][$i] = $agg_list_array['Atlantic'][$i] + $agg_list_array['Quebec'][$i] + $agg_list_array['Ont'][$i]  + $agg_list_array['West'][$i] ;
}
echo "<br /><br /> total"; print_r($agg_list_array['Canada']) ;


$agg_list_post = implode(",", $agg_list_array['Canada']);

mysqli_query($link,"INSERT INTO amfd_bench (agg_name, agg_list, bench_name) VALUES ('$db_field_to_move', '$agg_list_post', 'Canada') "); 
	
?> 

</body>
</html>
