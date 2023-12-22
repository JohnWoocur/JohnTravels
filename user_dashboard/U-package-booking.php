<?php
session_start();
include 'db-connection.php';

$customer_id=$_SESSION['id'];
$pack_id=$_POST['pack_id'];

$sql="SELECT customer_more_detail WHERE Customer_Id = $customer_id";
 
$result=mysqli_query($conn,$sql);

if($row=mysqli_fetch_assoc($result)){

    $sql="INSERT INTO `package_booking`(`Customer_Id`, `Pack_Id`) VALUE ('$customer_id','$pack_id')";
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
  }

  else{
    header("Location: user-edit.php");
    $_SESSION['Emsg']="Please add your full details!";
    
  }


?>