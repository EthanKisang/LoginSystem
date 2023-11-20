<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
