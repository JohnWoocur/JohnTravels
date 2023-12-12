<?php
session_start(); 
require '../admin_dashboard/db-connection.php';
$id=$_SESSION['id'];
$First_name=$_POST['firstname'];
$Last_name=$_POST['lastname']; 
$ID=$_POST['ID'];
$Mobile_number=$_POST['phone'];
$Dob=$_POST['dob'];
$Country=$_POST['country'];
$City=$_POST['city'];	
$district=$_POST['district']; 
$Address=$_POST['Address'];	
$About=$_POST['about'];

$imgName = $_FILES["myfile"]["name"];

$imgFile = $_FILES["myfile"]["tmp_name"];  

$path = "Customers/".$imgName;
move_uploaded_file($imgFile,$path);


$query="UPDATE `customer_more_details` SET `First_name`='$First_name',`Last_name`='$Last_name',`Mobile_number`='$Mobile_number',`NIC`='$ID',`City`='$City',`Country`='$Country',`district`='$district',`Address`='$Address',`Dob`='$Dob',`About`='$About', `Image`='$imgName'  WHERE Customer_Id='$id'";
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