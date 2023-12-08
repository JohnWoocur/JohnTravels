<?php

    require 'db-connection.php';

    // if(isset($_POST['delete_buttton']))
    // {    
        $Blog_id = $_GET['id'];

        $query = "DELETE FROM `blog` WHERE Blog_Id='$Blog_id' ";
        $result = mysqli_query($conn, $query); 
        if($result)
        {
            echo " Deleted Successfully!";
        } 
        else
        {
            echo " Not Deleted!. Error: " . $sql . "" . mysqli_error($conn);
        }
    // }
?>