<?php
    require'db-connection.php';

if (isset($_GET['Pack_Id'])){
    
    $Pack_Id =$_GET['Pack_Id'];
    $Wish="";
    $sql = "UPDATE `package` SET `Wish`='$Wish' WHERE Pack_Id=$Pack_Id";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:db-wishlist.php');
    }
    else{
        header('location:db-package-active.php');
    }
}

?>