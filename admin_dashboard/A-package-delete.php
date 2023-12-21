<?php
include 'db-connection.php';
session_start();
if (isset($_GET['Pack_Id'])) {
   
    $Pack_Id = $_GET['Pack_Id'];
     
    $status = "Delete";
    $sql = "UPDATE `package` SET `Status` = '$status' WHERE `Pack_Id` = $Pack_Id";
  
    if ($conn->query($sql) === TRUE) {
        $_SESSION['deleted']="package deleted";
        header("Location: db-package-active.php");
    } else {
        $_SESSION['deleted']="package deleted failed";
        header("Location: db-package-active.php");
    }
    $conn->close();
} else

?>
