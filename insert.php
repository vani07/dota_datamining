<?php 
include_once "connection.php";
$namahero = $_POST['inputnama'];
$tipe = $_POST['inputtipe'];
// $inputskill1 = $_POST['inputskill1'];
// $inputskill2 = $_POST['inputskill2'];
// $inputskill3 = $_POST['inputskill3'];
// $inputskill4 = $_POST['inputskill4'];
// $inputskill5 = $_POST['inputskill5'];
// $inputskill6 = $_POST['inputskill6'];

$query = "INSERT INTO skill (nama, tipe) 
VALUES ('$namahero','$tipe')";

if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
    echo "<br><a href='input_hero.php'>Back</a>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

 ?>
