<?php
include '../config/database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

if ($password !== $confirm) {
    die("Password tidak cocok!");
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

$cek = $conn->query("SELECT * FROM users WHERE email = '$email'");
if ($cek->num_rows > 0) {
    die("Email sudah digunakan!");
}

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed')";
if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil";
} else {
    echo "Gagal: " . $conn->error;
}