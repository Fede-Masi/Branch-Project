<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

        session_start();
            $_SESSION['session_id'] = session_id();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
        header('Location: welcome.php');
    exit;
?>
