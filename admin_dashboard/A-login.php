<?php 
session_start();
require 'db-connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){  
     $Email =$_POST['mail'];
     $Password=$_POST['password'];
    }
     $query="SELECT * FROM admins WHERE Email='$Email' AND Status='Active'";
     $result = mysqli_query($conn,$query);
 
     if(mysqli_num_rows($result)==1){ 
         $row=mysqli_fetch_assoc($result);
         $Admin_Id=$row["Admin_Id"];

 
         if($Password==$row["Password"]){
             $_SESSION["aid"]=$Admin_Id;
             $_SESSION["msg"]="Login Success";
             header("location:dashboard.php");
         }
         
         else{
            $_SESSION['error']="Password wrong";
            header("location:login.php"); 
         }
     }else{
      $_SESSION['error']="E-mail wrong";
        header("location:login.php");
     }

?>