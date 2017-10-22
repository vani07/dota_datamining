<?php 
include_once "connection.php";
$json = file_get_contents('https://api.opendota.com/api/heroes');
$obj = json_decode($json);

// echo "<pre>";
// var_dump($obj);
// echo "</pre>";
foreach ($obj as $heroes) {
	$id = $heroes->id;
	$namahero = strtoupper($heroes->localized_name);
	$tipe = $heroes->primary_attr;
	echo 'id : '.$id.'<br>';
	echo 'name : '.$namahero.'<br>';
	echo 'attribute : '.$tipe.'<br>';
	$query = "INSERT INTO hero_api (id, name, type) VALUES ('$id','$namahero','$tipe')";

	if (mysqli_query($conn, $query)) {
	    echo "New record created successfully";
	    // echo "<br><a href='input_hero.php'>Back</a>";
	} else {
	    echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}

	echo '<hr>';
}

 ?>