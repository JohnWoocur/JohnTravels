<?php 
require '../admin_dashboard/db-connection.php';

$Username=$_POST['name'];
$Email=$_POST['mail'];
$password=$_POST['password']; 
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query="INSERT INTO `customers`(`Username`, `Email`, `Password`) VALUES('$Username','$Email','$hashed_password')";
$result=mysqli_query($conn,$query);
if($result){
    $_SESSION['Smsg'] = "Registration successful";
    header('location:login.php');
    exit();
}
else{
    $_SESSION['Emsg'] = "Registration Failed";
    header('location:register.php');
    exit();
}

?>

