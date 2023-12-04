<?php
function login($username, $password) {
    global $conn;

    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            // Password is correct, start a new session and save the user ID
            session_start();
            $_SESSION['user_id'] = $user['id'];
            return true;
        }
    }

    // Password is incorrect or user doesn't exist
    return false;
}

?>