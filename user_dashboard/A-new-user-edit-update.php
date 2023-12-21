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
$Facebook=$_POST['Facebook'];
$Instagram=$_POST['Instagram'];
$Twitter=$_POST['Twitter'];
$Whatsapp = $_POST['Whatsapp'];
$Linkedin = $_POST['Linkedin'];

$imgName = $_FILES["myfile"]["name"];

$imgFile = $_FILES["myfile"]["tmp_name"];  

$path = "Customers/".$imgName;
move_uploaded_file($imgFile,$path);


$query = "INSERT INTO `customer_more_details`(`Customer_Id`, `First_name`, `Last_name`, `Mobile_number`, `NIC`, `City`, `Country`, `district`, `Address`, `Dob`, `About`, `Image`, `Facebook`, `Instagram`, `Twitter`, `Linkedin`, `Whatsapp`) VALUES ('$id','$First_name','$Last_name','$Mobile_number','$ID','$City','$Country','$district','$Address','$Dob','$About','$imgName','$Facebook','$Instagram','$Twitter','$Linkedin','$Whatsapp')";
$result=mysqli_query($conn,$query);
if($result){
    header('location:user-dashboard.php');
    $_SESSION['edsmsg']="New Details Updated Success";
    
}
else{
    header('location:user-edit.php');
    $_SESSION['edemsg']="New Details Updated failed";
}
?>