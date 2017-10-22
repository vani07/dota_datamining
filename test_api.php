<?php 
include_once "connection.php";
$json = file_get_contents('https://api.opendota.com/api/publicMatches');
$obj = json_decode($json);
echo "<pre>";
// var_dump($obj);
foreach ($obj as $match) {
	$heroes_data = $match->radiant_team.','.$match->dire_team;
	$heroes_data = explode(",",$heroes_data);

	// print_r($heroes_data);
	// foreach ($heroes_data as $hero_id) {

	// 	$query = "SELECT name FROM hero_api WHERE id = $hero_id ";
	// 								 $result = mysqli_query($conn, $query);

	// 								 if (mysqli_num_rows($result) > 0) {
	// 									    // output data of each row
							
	// 									    while($row = mysqli_fetch_array($result)) {
	// 									    	$name = $row["name"];
	// 									    	echo $name.',';
										    	
	// 									    }
	// 								 }

	// }
	// echo "<br>";
	// die();
	echo $match->match_id.'<br>';
	// echo "team : ".$heroes_data.'<br>';


	// $txt = $inputhero1.", ".$inputhero2.", ".$inputhero3.", ".$inputhero4.", ".$inputhero5.", ".$inputhero6
			// .", ".$inputhero7.", ".$inputhero8.", ".$inputhero9.", ".$inputhero10."\r\n";
	// file_put_contents("data.txt",$txt, FILE_APPEND);
	// file_put_contents("match.txt",$matchid."\n", FILE_APPEND);
}
echo "</pre>";
 ?>