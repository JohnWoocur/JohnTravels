<?php 
session_start();
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
         $hashed_password = $row["Password"];
        
        }
        // Verify the password
        if (password_verify($password, $hashed_password)) {
         $_SESSION["id"]=$Customer_Id;
         header("location:user-dashboard.php");
            // Password is correct
        } else {
            // Password is incorrect
            echo "Invalid username or password";
        }
    
         
         
        

?>