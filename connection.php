<?php 
$servername = "localhost";
$username = "root";
$password = "qwer1234";
$dbname = "hero";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
