<?php
session_start();
include("../admin_dashboard/db-connection.php");


$customer_id = $_SESSION['id'];
$pack_id = $_GET['Pack_Id'];

$sql = "INSERT INTO `user-wish` (Customer_Id, Pack_Id) VALUES ('$customer_id', '$pack_id')";

if ($conn->query($sql)) {
	header("Location: user-packages.php");
    $_SESSION['Smsg']="Added Successfull";

	
} else {
    header("Location: user-packages.php");
    $_SESSION['Emsg']="Added Failed";

}
$conn->close();

?>


