<?php
session_start();
include 'db-connection.php';

$customer_id=$_SESSION['id'];
$pack_id=$_POST['pack_id'];

$sql="INSERT INTO `package_booking`(`Customer_Id`, `Pack_Id`) VALUES ('$customer_id','$pack_id')";


$result =mysqli_query($conn,$sql);
if ($result){
    $_SESSION['Booksmsg']="Booking added successfuly!";
	header("Location: user-dashboard.php");
	exit();
    
}else{
    $_SESSION['Bookemsg']="Booking addeing Failed!";
	header("Location: user-dashboard.php");
	exit();
}


?>