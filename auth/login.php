<?php
session_start();
include '../config/database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE email = '$email'");
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['role'] = $user['role'];

    if ($user['role'] === 'admin') {
        header("Location: ../dashboard/home.php?page=dashboard");
    } else {
        header("Location: ../dashboard/home.php?page=products");
    }
    exit();
} else {
    echo "Email atau password salah!";
}