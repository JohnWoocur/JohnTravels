<?php
session_start();
require '../admin_dashboard/db-connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['mail'];
    $Password = $_POST['password'];

    $query = "SELECT * FROM customers WHERE Email='$Email' AND Status='Active'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $Customer_Id = $row["Customer_Id"];
            $hashed_password = $row["Password"]; 

            
            if (password_verify($Password, $hashed_password)) {
                
                $_SESSION["id"] = $Customer_Id;
                header("Location: user-dashboard.php");
                exit();
            } else {
                
                $_SESSION['error'] = "Invalid username or password";
                header("Location: login.php");
                exit();
            }
        } else {
            
            $_SESSION['error'] = "Invalid username or password";
            header("Location: login.php");
            exit();
        }
    } else {
        
        $_SESSION['error'] = "Database error";
        header("Location: login.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Invalid request method";
    header("Location: login.php");
    exit();
}
?>
