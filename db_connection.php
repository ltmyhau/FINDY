<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "csdl_findy";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}
?>
