<?php
    session_start();
    require '../admin_dashboard/db-connection.php';

     
        $wish_id = $_GET['id'];
        
        $query = "DELETE FROM `user-wish` WHERE Wish_Id='$wish_id' ";
        $result = mysqli_query($conn, $query); 
        if($result)
        {
            header("Location: user-db-wishlist.php");
             $_SESSION['Smsg']="Wishlist Deleted Successfully!";
        }
        else
        {   
            header("Location: user-db-wishlist.php");
            $_SESSION['Emsg']="Wishlist Not Deleted!. Error:";
        }

        $conn->close();
    
?>

