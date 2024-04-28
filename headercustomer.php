<link rel="stylesheet" href="/header.css">

<header class="header">
    <?php
    include "db_connection.php";

    $sql = "SELECT * FROM thongtinthue WHERE id_thue = $id_thue";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả
    if ($result->num_rows > 0) {
        // Lặp qua từng dòng kết quả
        while ($row = $result->fetch_assoc()) {
            // Lấy thông tin từ cột cần thiết
            $hinhanhthue = $row['hinhanhthue'];
        }
    } else {
        $hinhanhthue = "avatar.png";
    }
    // echo "hinhanhthue=" . $hinhanhthue;
    ?>
    <div class="grid wide">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar__logo">
                <a href="/mainthue.php" class="navbar__logo-link">
                    <img src="/img/findy-logo-ngang.png" alt="Findy" class="navbar__logo-img">
                </a>
            </div>
            <div class="navbar__heading-warp">
                <div class="navbar__heading">
                    <a href="/find-timtho.php" class="navbar__heading-link">Tìm Thợ</a>
                </div>
                <div class="navbar__heading">
                    <a href="/post-job.php" class="navbar__heading-link">Đăng tin</a>
                </div>
                <div class="navbar__heading">
                    <a href="/post-management.php" class="navbar__heading-link">Quản lý bài đăng</a>
                </div>
                <div class="navbar__heading">
                    <a href="order-management.php" class="navbar__heading-link">Đơn hàng</a>
                </div>
            </div>
            <div class="navbar__heading-search">
                <i class="navbar__search-icon fa-solid fa-magnifying-glass"></i>
                <input type="text" class="navbar__search-input" placeholder="Tìm kiếm">
            </div>
            <div class="navbar__account">
                <a href="/account.php" class="navbar__heading-link">
                    <img src="/img/<?php echo $hinhanhthue  ?>" alt="" class="navbar__heading-img">
                    <?php echo $hoTen; ?>
                </a>
                <i class="notify-icon fa-solid fa-bell"></i>
            </div>
            <label for="mobile-bars-checkbox" class="navbar__mobile-bars">
                <i class="navbar__heading-icon fa-solid fa-bars"></i>
            </label>
        </nav>
        <input type="checkbox" hidden id="mobile-bars-checkbox" class="navbar__bars-checkbox">

        <!-- Mobile menu -->
        <div class="mobile__menu">
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-circle-user"></i>
                <a href="./account.php" class="mobile__heading-link"><?php echo $hoTen; ?></a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-users-between-lines"></i>
                <a href="./find-freelancer.php" class="mobile__heading-link">Thuê Thợ</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-magnifying-glass"></i>
                <a href="" class="mobile__heading-link">Tìm việc</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-pen"></i>
                <a href="./post-job.php" class="mobile__heading-link">Đăng tin</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-file-pen"></i>
                <a href="./post-management.php" class="mobile__heading-link">Quản lý bài đăng</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-clipboard"></i>
                <a href="./order-management.php" class="mobile__heading-link">Đơn hàng</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                <a href="./order-management.php" class="mobile__heading-link">Đăng xuất</a>
            </div>
        </div>
    </div>
</header>