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

?> 
<?php
// Example code for retrieving messages based on the user's ID
$servername = "localhost";
$username = "root";
$password = "";
$database = "FINDY";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

$sql = "SELECT * FROM messages WHERE sender_id = $id OR receiver_id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Tin nhắn từ người gửi (ID " . $row["sender_id"] . ") đến người nhận (ID " . $row["receiver_id"] . "): " . $row["message_text"] . "<br>";
    }
} else {
    echo "Chưa có tin nhắn nào.";
}

$conn->close();
?>