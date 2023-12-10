<?php
session_start();
require '../admin_dashboard/db-connection.php';
$id=$_SESSION['id'];
$First_name=$_POST['firstname'];
$Last_name=$_POST['lastname']; 
$Mobile_number=$_POST['phone'];
$ID=$_POST['ID'];
$Dob=$_POST['dob'];
$Country=$_POST['country'];
$City=$_POST['city'];	
$district=$_POST['district'];
$Address=$_POST['Address'];	
$About=$_POST['about'];

$query="INSERT INTO `customer_more_details`(`Customer_Id`, `First_name`, `Last_name`, `Mobile_number`, `NIC`, `City`, `Country`, `district`, `Address`, `Dob`, `About`) VALUES ('$id','$First_name','$Last_name','$Mobile_number','$ID','$City','$Country','$district','$Address','$Dob','$About')";
$result=mysqli_query($conn,$query);
if($result){
    header('location:user-dashboard.php');
}
else{
    header('location:user-edit.php');
}
?>