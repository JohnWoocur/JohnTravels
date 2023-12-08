<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "johntravels_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    each "connection successfull";
}else{
    die(mysqli_error($conn));
}
?>


