<?php
include '../config/database.php';

$name = 'capytanic';
$email = 'capytanic@example.com';
$password = 'admin123';
$hashed = password_hash($password, PASSWORD_DEFAULT);
$role = 'admin';

$check = $conn->query("SELECT * FROM users WHERE email = '$email'");
if ($check->num_rows > 0) {
    echo "⚠️ Admin sudah ada di database.\n";
    exit;
}

$sql = "INSERT INTO users (name, email, password, role) 
        VALUES ('$name', '$email', '$hashed', '$role')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Admin berhasil ditambahkan!\n";
    echo "Email : $email\n";
    echo "Password : $password\n";
} else {
    echo "❌ Gagal: " . $conn->error;
}