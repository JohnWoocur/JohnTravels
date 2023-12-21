<?php
session_start();
include "db-connection.php";


$Pack_Id = $_GET['Pack_Id'];


$result = "UPDATE package  SET Status ='Active' WHERE Pack_Id ={$_GET['Pack_Id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
        $_SESSION['active']="package activated";
        header("Location:A-package-view.php");
    }
else{
    $_SESSION['active']="package activated fail";
    header("Location:A-package-view.php");
    }  
$conn->close();



?>