<?php

    require '../admin_dashboard/db-connection.php';

    // if(isset($_POST['delete_id']))
    // {    
        $wish_id = $_GET['id'];
        //$wish_id=1;
        $query = "DELETE FROM `user_wish` WHERE Wish_Id='$wish_id' ";
        $result = mysqli_query($conn, $query); 
        if($result)
        {
            echo " Deleted Successfully!";
        } 
        else
        {
            echo " Not Deleted!. Error: ";
        }
    // }
?>
