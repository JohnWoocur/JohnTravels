<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "johntravels";

date_default_timezone_set("Asia/Colombo");
define('NOW', date('Y-m-d-H-i-s', time()));

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


