<?php
    require 'db-connection.php';
    session_start();

    if($_GET['Admin_Id']){
    $id=$_GET['Admin_Id'];
    $query="UPDATE `admins` SET `Status`='Disabled' WHERE Admin_Id=$id";
    $result=mysqli_query($conn,$query);
    if($result){
        $_SESSION["S_message"] = "Account Disabled Successfully!";
        header('location:admin.php');
    } 
    else{
        $_SESSION["E_message"] = "Account Disabled failed!";
        header('location:admin.php');
       
    }
}

if($_GET['Admin_Id2']){
    $id=$_GET['Admin_Id2'];
    $query="UPDATE `admins` SET `Status`='Active' WHERE Admin_Id=$id";
    $result=mysqli_query($conn,$query);
    if($result){
        $_SESSION["S_message"] = "Account Activated Successfully!";
        header('location:admin.php');
    } 
    else{
        $_SESSION["E_message"] = "Account Activated failed!";
        header('location:admin.php');
       
    }
}
?> 