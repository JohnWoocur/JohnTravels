<?php 

require '../admin_dashboard/db-connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){  
     $Email =$_POST['mail'];
     $Password=$_POST['password'];
    }
     $query="SELECT * FROM customers WHERE Email='$Email' AND Status='Active'";
     $result = mysqli_query($conn,$query);
 
     if(mysqli_num_rows($result)==1){
         $row=mysqli_fetch_assoc($result);
         $Customer_Id=$row["Customer_Id"];
 
         if($Password==$row["Password"]){
             $_SESSION["id"]=$Customer_Id;
             header("location:user-dashboard.php");
         }
         
         else{
            header("location:login.php");
         }
     }else{
        header("location:login.php");
     }

?>