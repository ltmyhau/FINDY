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
// Kết nối đến cơ sở dữ liệu. Thay đổi thông tin kết nối tùy theo cấu hình của bạn.
$servername = "localhost";
$username = "root";
$password = "";
$database = "FINDY";


$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form

$receiverID = $_POST["receiverID"];
$message = $_POST["message"];

// Thực hiện truy vấn để lưu trữ tin nhắn vào cơ sở dữ liệu
$sql = "INSERT INTO messages (sender_id, receiver_id, message_text) VALUES ($id, $receiverID, '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Tin nhắn đã được lưu trữ thành công";
} else {
    echo "Lỗi khi lưu trữ tin nhắn: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>