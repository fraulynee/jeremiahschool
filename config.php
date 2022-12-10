<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u627005231_htu";

// $servername = "localhost";
// $username = "root";
// $password = "123";
// $dbname = "dbgreenvalley";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>