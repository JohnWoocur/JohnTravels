<?php
    require 'db-connection.php';
    
    $id=$_GET['Admin_Id'];
    $query="UPDATE `admins` SET `Status`='Disabled' WHERE Admin_Id=$id";
    $result=mysqli_query($conn,$query);
    if($result){
        header('location:admin.php');
        
    }
    else{
        header('location:admin.php');
       
    }

?> 