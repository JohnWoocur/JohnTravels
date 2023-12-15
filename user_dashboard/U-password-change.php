<?php
session_start();
require 'db-connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Customer_Id = $_SESSION["id"]; 

    $Old_Password = $_POST['old_password'];
    $New_Password = $_POST['New_password'];
    $Con_Password = $_POST['Con_password'];

    
    if (empty($Old_Password) || empty($New_Password) || empty($Con_Password)) {
        $_SESSION['error'] = "All fields are required";
        header("Location: user-change-password.php"); 
        exit();
    }

    if ($New_Password !== $Con_Password) {
        $_SESSION['error'] = "New password and confirm password do not match";
        header("Location: user-change-password.php"); 
        exit();
    }

    
    $query = "SELECT password FROM Customers WHERE Customer_Id = $Customer_Id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];

        
        if (password_verify($Old_Password, $hashed_password)) {
            
            $hashed_new_password = password_hash($New_Password, PASSWORD_DEFAULT);
            $update_query = "UPDATE Customers SET password = '$hashed_new_password' WHERE Customer_Id = $Customer_Id";
            $update_result = mysqli_query($conn, $update_query);

            if ($update_result) {
                $_SESSION['success'] = "Password changed successfully";
                header("Location: login.php"); 
                exit();
            } else {
                $_SESSION['error'] = "Database error";
                header("Location: user-change-password.php"); 
                exit();
            }
        } else {
            $_SESSION['error'] = "Invalid old password";
            header("Location: user-change-password.php"); 
            exit();
        }
    } else {
        $_SESSION['error'] = "Database error";
        header("Location: user-change-password.php"); 
        exit();
    }
} else {
    $_SESSION['error'] = "Invalid request method";
    header("Location: user-change-password.php"); 
}
?>
