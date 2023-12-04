<?php
function register($username, $password, $email) {
    global $conn;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // $sql = "INSERT INTO test (uname, password, email) VALUES ('$username', '$password', '$email')";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sss", $username, $hashed_password, $email);
    // $stmt->execute();
    $insert_query="INSERT INTO test (uname, password, email) VALUES ('$username', '$password', '$email')";
    $conn->query($insert_query);
}

$username='kavi';
$password='abcd';
$email='kavi@gmail';
register($username, $password, $email);
?>+