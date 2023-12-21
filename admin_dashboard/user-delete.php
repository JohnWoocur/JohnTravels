<?php

include "db-connection.php";
session_start();

//$Customer_Id = $_GET['id'];
if($_GET['id']){

$result = "UPDATE customers  SET Status ='De-Activated' WHERE Customer_Id ={$_GET['id']} " ;

if ($conn->query ($result)=== TRUE) 
    {
        $_SESSION["S_message"] = "Account De-Activated Successfully!";
        header('location:user.php');
        
    }
else{
    $_SESSION["E_message"] = "Account De-Activated Failed!";
    header('location:user.php');
    }  
}
if($_GET['Did']){
    $result = "UPDATE customers  SET Status ='Active' WHERE Customer_Id ={$_GET['Did']} " ;

if ($conn->query ($result)=== TRUE) 
    {
        $_SESSION["S_message"] = "Account Activated Successfully!";
        header('location:user.php');
        
    }
else{
    $_SESSION["E_message"] = "Account Activated Failed!";
    header('location:user.php');
    } 
}
$conn->close();



?>