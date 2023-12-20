<?php 
require '../admin_dashboard/db-connection.php';

$Username=$_POST['name'];
$Email=$_POST['mail'];
$password=$_POST['password']; 
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query="INSERT INTO `customers`(`Username`, `Email`, `Password`) VALUES('$Username','$Email','$hashed_password')";
$result=mysqli_query($conn,$query);
if($result){
    header('location:login.php');
}
else{
    header('location:register.php');
}

?>

