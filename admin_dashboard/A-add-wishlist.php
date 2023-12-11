<?php
    require 'db-connection.php';

if (isset($_GET['Pack_Id'])){
    
    $Pack_Id= $_GET['Pack_Id'];
    
    
     
    $sql = "UPDATE `package` SET `wish`= 'Active' WHERE  `Pack_Id`=$Pack_Id ";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo"wishlist added succseful";
        header("Location:db-wishlist.php");
    }
    else{
        echo "wishlist adding failed";
    }  
    $conn->close();
}

?>