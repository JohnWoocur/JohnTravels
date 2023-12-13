<?php
    include'db-connection.php';

if (isset($_GET['Pack_Id'])){
    
    $Pack_Id =$_GET['Pack_Id'];
    $Wish="delete";
    $sql = "UPDATE `package` SET `Wish`='$Wish' WHERE Pack_Id=$Pack_Id";

    if ($conn->query ($sql)=== TRUE) {
        echo"update succseful";
        header("Location:db-wishlist.php");
    }
    else{
        echo "Error";
    }  
    $conn->close();
}

?>