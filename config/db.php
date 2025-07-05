<?php
$servername = "localhost";
$username = "tedor_admin";
$password = "1am@Dev0nMysql!";
$dbname = "tedor_path";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
