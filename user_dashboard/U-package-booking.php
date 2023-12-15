<?php
session_start();
require "db-connection.php";

$customer_id=$_SESSION['id'];
$pack_id=$_POST['pack_id'];
//echo $pack_id;
$sql="INSERT INTO `package_booking`(`Customer_Id`, `Pack_Id`) VALUE ('$customer_id','$pack_id')";

$result =mysqli_query($conn,$sql);
if ($result){
    header('location : user-dashboard.php');
    echo"Booking added successfuly";
}else{
    echo"Booking Failed";
}



?>