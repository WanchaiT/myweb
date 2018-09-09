<?php
$servername = "plearnjai.com";
$username = "plearnja_cpsu3";
$password = "oQE6QLQv";
$dbname = "plearnja_cpsu3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
