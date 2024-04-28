<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['id'])) {
    header('Location: main.php'); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
    exit();
}

// Lấy thông tin người dùng từ session
$id = $_SESSION['id'];
$username = $_SESSION['username'];

// Hiển thị thông tin người dùng
echo "Chào mừng $username (ID: $id)!";
?>