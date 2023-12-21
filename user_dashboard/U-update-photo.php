<?php

session_start(); 
require '../admin_dashboard/db-connection.php';
$id=$_SESSION['id'];

$imgName = $_FILES["myfile"]["name"];

$imgFile = $_FILES["myfile"]["tmp_name"];  

$path = "Customers/".$imgName;
move_uploaded_file($imgFile,$path);


$query="UPDATE `customer_more_details` SET `Image`='$imgName'  WHERE Customer_Id='$id'";
$result=mysqli_query($conn,$query);
if($result){
    header('location:user-edit.php');
    $_SESSION['Smsg']="Details Updated Success";
}
else{
    header('location:user-edit.php');
    $_SESSION['Emsg']="Details Updated failed";
}

?>