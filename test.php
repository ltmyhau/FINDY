<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root"; // Tên người dùng mặc định của XAMPP
$password = ""; // Mật khẩu mặc định của XAMPP
$dbname = "FINDY"; // Tên cơ sở dữ liệu bạn đã tạo

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy thông tin từ form đăng nhập
$mail = $_POST['Emailuser'];
$mk = $_POST['Passworduser'];

// Kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
$sql = "SELECT * FROM register WHERE Email='$mail' AND matKhau='$mk'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Đăng nhập thành công
    header("Location: mainuser.php");
} else {
    // Đăng nhập không thành công
    echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
}

$conn->close();
?>
