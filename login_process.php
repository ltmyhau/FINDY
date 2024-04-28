

<?php
session_start(); // Start the session

// Include your database connection file
include('db_connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["Emailuser"];
    $password = $_POST["Passworduser"];

    // Check in account_tho table
    $query_tho = "SELECT * FROM account_tho WHERE gmail = '$email' AND matkhau = '$password'";
    $result_tho = mysqli_query($conn, $query_tho);

    if ($result_tho && mysqli_num_rows($result_tho) > 0) {
        // User found in account_tho table
        $row = mysqli_fetch_assoc($result_tho);

        $id_tho = $row['id_tho'];
        $hoTen = $row['hoTen'];
        $role = $row['role'];
        $gmail = $row['gmail'];

        $_SESSION['id_tho'] = $id_tho;
        $_SESSION['hoTen'] = $hoTen;
        $_SESSION['role'] = $role;
        $_SESSION['gmail'] = $gmail;
        
        // Add more fields as needed

        // Redirect to mainphoto.php with necessary parameters
        header("Location: maintho.php");
        exit();
        
    }

    // Check in account_thue table
    $query_thue = "SELECT * FROM account_thue WHERE gmail = '$email' AND matkhau = '$password'";
    $result_thue = mysqli_query($conn, $query_thue);

    if ($result_thue && mysqli_num_rows($result_thue) > 0) {
        // User found in account_thue table
        $row = mysqli_fetch_assoc($result_thue);
        $id_thue = $row['id_thue'];
        $hoTen = $row['hoTen'];
        $role = $row['role'];
        $gmail = $row['gmail'];

        $_SESSION['id_thue'] = $id_thue;
        $_SESSION['hoTen'] = $hoTen;
        $_SESSION['role'] = $role;
        $_SESSION['gmail'] = $gmail;
        
        // Add more fields as needed

        // Redirect to find_timtho.php with necessary parameters
        header("Location: mainthue.php");
        exit();
    }

    // If the script reaches here, the user doesn't exist in either table
    echo "Invalid email or password";
    // Handle the error (redirect, show error message, etc.)
}

// Close the database connection
mysqli_close($connection);
?>

