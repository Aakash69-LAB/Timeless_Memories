<?php
session_start();
include 'config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; // Plain text password

    // Query to check if the username and password match
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: admin.php"); // Redirect to dashboard
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password!";
        header("Location: login.php");
        exit();
    }
}
?>