<?php 
session_start(); 


if (isset($_POST['name'], $_POST['mail'], $_POST['password'])) {
    require '../admin_dashboard/db-connection.php'; 

    $Username = mysqli_real_escape_string($conn, $_POST['name']);
    $Email = mysqli_real_escape_string($conn, $_POST['mail']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

   
    $sql = "SELECT * FROM `customers` WHERE `Username`='$Username' OR `Email`='$Email'";
    $check = mysqli_query($conn, $sql);

    if (mysqli_num_rows($check) > 0) {
        $_SESSION['Emsg'] = "Username or Email already exists";
        header('location: register.php');
        exit();
    } else {
        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        
        $query = "INSERT INTO `customers`(`Username`, `Email`, `Password`) VALUES('$Username','$Email','$hashed_password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $_SESSION['Smsg'] = "Registration successful";
            header('location: login.php');
            exit();
        } else {
            $_SESSION['Emsg'] = "Registration Failed";
            header('location: register.php');
            exit();
        }
    }
} else {
    $_SESSION['Emsg'] = "Please fill all the fields";
    header('location: register.php');
    exit();
}


?>

