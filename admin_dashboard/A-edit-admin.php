<?php 
 require 'db-connection.php';
session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ID=$_POST['id'];
    $Firstname=$_POST['firstname'];
    $Lastname=$_POST['lastname'];
    $phone=$_POST['phone'];//$date=$_POST['date'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $imgName = $_FILES["myfile"]["name"];

    $imgFile = $_FILES["myfile"]["tmp_name"];  

    $path = "admins/".$imgName;
    move_uploaded_file($imgFile,$path);

    $query="UPDATE `admins` SET `First_name`='$Firstname',`Last_name`='$Lastname',`Mobile_number`='$phone',`City`='$city',`Country`='$country',`Email`='$email',`Image`='$imgName',`Password`='$password' WHERE Admin_Id='$ID'";
    $result=mysqli_query($conn,$query);
    if($result){
        $_SESSION['upmsg']="Successfully Updated";
        header('location:admin.php');
    }else{
        $_SESSION['upmsg']="Updated Failed";
        header('location:admin.php');
    }
 }
 
 

?>