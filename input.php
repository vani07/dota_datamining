<?php 
	$matchid = "";
	$inputhero1 = $_POST['hero1'];
	$inputhero2 = $_POST['hero2'];
	$inputhero3 = $_POST['hero3'];
	$inputhero4 = $_POST['hero4'];
	$inputhero5 = $_POST['hero5'];
	$inputhero6 = $_POST['hero6'];
	$inputhero7 = $_POST['hero7'];
	$inputhero8 = $_POST['hero8'];
	$inputhero9 = $_POST['hero9'];
	$inputhero10 = $_POST['hero10'];

	$matchid = $_POST['matchid'];

	// echo $matchid;	
	// echo $inputhero1."<br>";
	// echo $inputhero2."<br>";
	// echo $inputhero3."<br>";
	// echo $inputhero4."<br>";
	// echo $inputhero5."<br>";
	// echo $inputhero6."<br>";
	// echo $inputhero7."<br>";
	// echo $inputhero8."<br>";
	// echo $inputhero9."<br>";
	// echo $inputhero10."<br>";

	// $myfile = fopen("data.txt", "wb") or die("Unable to open file!");
	$txt = $inputhero1.", ".$inputhero2.", ".$inputhero3.", ".$inputhero4.", ".$inputhero5.", ".$inputhero6
			.", ".$inputhero7.", ".$inputhero8.", ".$inputhero9.", ".$inputhero10."\r\n";
	file_put_contents("data.txt",$txt, FILE_APPEND);
	file_put_contents("match.txt",$matchid."\n", FILE_APPEND);

	echo "Input Complete";
	echo "<a href='index_input.php'>Kembali</a>";



	
 ?>
