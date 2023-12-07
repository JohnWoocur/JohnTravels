<?php 

require 'db-connection.php';

$Username=$_POST['name'];
$Email=$_POST['mail'];
$Password=$_POST['password'];


$query="INSERT INTO `customers`(`Username`, `Email`, `Password`) VALUES('$Username','$Email','$Password')";
$result=mysqli_query($conn,$query);
if($result){
    header("Location:login.php");
}
else{
    header("Location:register.php");
}

?>