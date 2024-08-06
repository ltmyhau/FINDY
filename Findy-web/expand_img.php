<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "csdl_findy");
$host = DB_HOST;
$user = DB_USER;
$pass = DB_PASS;
$dbname = DB_NAME;
$conn = new mysqli($host, $user, $pass, $dbname);

$post_id = $_POST['row_id'];
$sql = "SELECT * from post where post_id = $post_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hinhanh = $row["image"];
    echo "<img style='width:auto; height:100%; object-fit:contain;' src='./img/$hinhanh' alt='Post Image'>";
} else {
    echo "No data found for the specified ID";
}
