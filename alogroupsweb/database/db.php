<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "alogroups";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db($conn, "alogroups");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// $servername = "localhost";
// $username = "alogroups2021";
// $password = "alogroups2022";
// $database = "Alogroups";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// mysqli_select_db($conn, "Alogroups");
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// //echo "Connected successfully";
?>