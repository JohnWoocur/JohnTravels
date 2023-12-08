<?php 

require 'db-connection.php';


$Firstname=$_POST['firstname'];

$Lastname=$_POST['lastname'];
$Phone=$_POST['phone'];
$City=$_POST['city'];
$Country=$_POST['country'];
$Password=$_POST['password'];
$Email=$_POST['email'];
$Image=$_POST['Image'];
//$Date=$_POST['date'];

$queryy="INSERT INTO `admins`(`First_name`, `Last_name`, `Mobile_number`, `City`, `Country`, `Email`, `Password`, `Image`) VALUES('$Firstname','$Lastname','$Phone','$City','$Country','$Password','$Email','$Image')";
$result=mysqli_query($conn,$queryy);
if($result){
    header('location:new-admin.php');
}
else{
    header('location:new-admin.php');
}

?>
