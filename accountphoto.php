<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./mainicon.css">
    <link rel="stylesheet" href="./accountphoto.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>

<body>
    <?php
    include "id_tho.php";
    ?>

    <?php

    $id_tho = $_SESSION['id_tho'];
    $hoTen = $_SESSION['hoTen'];
    $gmail = $_SESSION['gmail'];

    echo "ID của Thợ: " . $hoTen;
    // Kết nối đến cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
    include "db_connection.php";

    // Truy vấn SQL để lấy thông tin từ bảng thongtinthue dựa trên id_thue
    $sql = "SELECT * FROM thongtintho WHERE id_tho = $id_tho";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả
    if ($result->num_rows > 0) {
        // Lặp qua từng dòng kết quả
        while ($row = $result->fetch_assoc()) {
            // Lấy thông tin từ cột cần thiết
            $mathongtintho = $row['mathongtintho'];

            $hinhanhtho = $row['hinhanhtho'];
            $diachi = $row['diachi'];
            $ngaysinh = $row['ngaysinh'];
            $socccd = $row['cccd'];
            $gioitinh = $row['gioitinh'];
            $sdt = $row['sdt'];
        }
    } else {
        $mathongtintho = "";
        // You may set a default image path or leave it empty
        $hinhanhtho = "avatar.jpg";

        $diachi = "";
        $ngaysinh = "";
        $socccd = "";
        $gioitinh = ""; // Set a default value or leave it empty
        $sdt = "";

        // Thông báo không tìm thấy thông tin
        echo "Không tìm thấy thông tin thuê cho ID: " . $id_tho;
    }

    // Đóng kết nối
    $conn->close();
    // Lấy thông tin người dùng từ session
    // echo "ID của Thợ: " . $id_tho;

    // echo "ID của Thợ: " . $hinhanhtho;
    // echo "ID của Thợ: " . $diachi;
    // echo "ID của Thợ: " . $ngaysinh;
    // echo "ID của Thợ: " . $gioitinh;
    // echo "ID của Thợ: " . $id_tho;
    // echo "ID của Thợ: " . $hoTen;
    // Hiển thị thông tin người dùng

    ?>

    <div class="main">
        <?php
        include "headerphoto1.php";
        ?>

        <div class="container">
            <div class="grid wide">
                <div class="content">
                    <div class="account__header">
                        <div class="account__header-avatar">
                            <img src="./img/<?php echo $hinhanhtho  ?>" alt="Ảnh đại diện" class="account__header-avatar-img">
                            <p class="account__header-verified">Đã xác thực</p>
                        </div>
                        <div class="account__header-info">
                            <h1 class="account__header-name"><?php echo $hoTen ?></h1>
                            <h3 class="account__header-address"><?php echo $diachi ?></h3>
                        </div>
                    </div>

                    <div class="account__container">
                        <div class="row">
                            <div class="col l-7 m-12 c-12">
                                <div class="account__personal">
                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Quản lý tài khoản</h2>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Tài khoản</p>
                                            <input type="text" name="" id="" class="account__personal-input" value="<?php echo $gmail ?>" readonly>
                                        </div>
                                    </div>
                                    <a href="#" class="account__personal-change-password">Đổi mật khẩu</a>

                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Thông tin cá nhân</h2>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Ngày sinh</p>
                                            <input type="date" name="" id="" class="account__personal-input" value="<?php echo $ngaysinh ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Số CCCD</p>
                                            <input type="text" name="" id="" class="account__personal-input" value="<?php echo $socccd ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Giới tính</p>
                                            <div class="account__personal-gender">
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="male" class="account__gender-input">
                                                    <label for="male">Nam</label>
                                                </div>
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="female" class="account__gender-input" checked>
                                                    <label for="female">Nữ</label>
                                                </div>
                                                <div class="account__gender-option">
                                                    <input type="radio" name="gender" id="other" class="account__gender-input">
                                                    <label for="other">Khác</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Email</p>
                                            <input type="email" name="" id="" class="account__personal-input" value="<?php echo  $gmail ?>">
                                        </div>
                                        <div class="account__personal-body">
                                            <p class="account__personal-text">Điện thoại</p>
                                            <input type="text" name="" id="" class="account__personal-input" value="<?php echo $sdt ?>">
                                        </div>
                                    </div>

                                    <div class="account__personal-info">
                                        <h2 class="account__personal-heading">Vô hiệu hóa và khóa tài khoản</h2>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Cập nhật thông tin</h4>
                                                <p>Thông tin cá nhân</p>
                                            </span>
                                            <button class="btn account__personal-btn" onclick="disableAccount()">Cập nhật thông tin</button>
                                        </div>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Vô hiệu hóa</h4>
                                                <p>Tạm thời ẩn hồ sơ</p>
                                            </span>
                                            <button class="btn account__personal-btn">Vô hiệu hóa tài khoản</button>
                                            <div class="overlay" id="overlay">
                                                <!-- Your content for the overlay goes here -->
                                                <div class="overlay-content">
                                                    <?php
                                                    include "connect.php";
                                                    ?>
                                                    <?php
                                                    $connect = new connect;
                                                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                        $insert_thongtinthophoto = $connect->insert_thongtinthophoto();
                                                    }
                                                    ?>
                                                    <p class="overlay-heading">Cập nhật thông tin</p>
                                                    <form action="" method="post" enctype="multipart/form-data">
                                                        <input style="display: none;" type="text" id="id_tho" name="id_tho" value="<?php echo $id_tho ?>" required><br>
                                                        <div class="overlay-item">
                                                            <i class="fa-solid fa-image"></i>
                                                            <label for="hinhanhthue" class="overlay-text">Hình ảnh thuê:</label>
                                                            <input type="file" id="hinhanhtho" name="hinhanhtho" required><br>
                                                        </div>
                                                        <div class="overlay-item">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                            <label for="diachi" class="overlay-text">Địa chỉ:</label>
                                                            <input class="overlay-input" type="text" id="diachi" name="diachi" required><br>
                                                        </div>
                                                        <div class="overlay-item">
                                                            <i class="fa-solid fa-calendar-day"></i>
                                                            <label for="ngaysinh" class="overlay-text">Ngày sinh:</label>
                                                            <input type="date" id="ngaysinh" name="ngaysinh" required><br>
                                                        </div>
                                                        <div class="overlay-item">
                                                            <i class="fa-solid fa-fingerprint"></i>
                                                            <label for="cccd" class="overlay-text">CCCD:</label>
                                                            <input class="overlay-input" type="text" id="cccd" name="cccd" required><br>
                                                        </div>
                                                        <div class="overlay-item">
                                                            <i class="fa-solid fa-venus-mars"></i>
                                                            <label for="gioitinh" class="overlay-text">Giới tính:</label>
                                                            <select id="gioitinh" name="gioitinh" required>
                                                                <option value="Nam">Nam</option>
                                                                <option value="Nu">Nữ</option>
                                                                <option value="Khac">Khác</option>
                                                            </select><br>
                                                        </div>
                                                        <div class="overlay-item">
                                                            <i class="fa-solid fa-phone"></i>
                                                            <label for="sdt" class="overlay-text">Số điện thoại:</label>
                                                            <input class="overlay-input" type="tel" id="sdt" name="sdt" required><br>
                                                        </div>
                                                        <input class="btn btn--primary overlay-btn" type="submit" value="Lưu">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            function disableAccount() {
                                                // Show the overlay when the button is clicked
                                                document.getElementById("overlay").style.display = "flex";

                                                // Add a click event listener to the overlay
                                                document.getElementById("overlay").addEventListener("click", function(event) {
                                                    // Check if the click is outside the overlay content
                                                    if (event.target === this) {
                                                        // Hide the overlay if the click is outside
                                                        this.style.display = "none";
                                                    }
                                                });
                                            }
                                        </script>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Xóa </h4>
                                                <p>Xóa hồ sơ vĩnh viễn</p>
                                            </span>
                                            <button class="btn account__personal-btn">Xóa tài khoản</button>
                                        </div>
                                        <div class="account__personal-body">
                                            <span class="account__personal-text">
                                                <h4>Đăng xuất </h4>
                                                <p>Đăng xuất tài khoản</p>
                                            </span>
                                            <button class="btn account__personal-btn"><a href="./main.php">Đăng xuất</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-5 m-12 c-12">
                                <div class="account__history">
                                    <div class="account__history-save">
                                        <div class="account__history-save-content">
                                            Đã lưu tin
                                        </div>
                                        <div class="account__history-save-items">
                                            <div class="jobbest-mid">
                                                <div class="row">

                                                    <?php

                                                    $select_luutin = $connect->select_luutin($mathongtintho);
                                                    $emptyImage = '<img src="../img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
                                                    $dataDisplayed = false;
                                                    ?>
                                                    <?php
                                                    if ($select_luutin) {
                                                        while ($result = $select_luutin->fetch_assoc()) {
                                                            $dataDisplayed = true;

                                                    ?>
                                                        <div class="col c-12 m-12 l-12">
                                                            <a href="./photoclick.php?tenposttimtho=<?php echo urlencode($result['tenposttimtho']); ?>&ma_posttimtho=<?php echo urlencode($result['ma_posttimtho']); ?>&phongcach=<?php echo urlencode($result['phongcach']); ?>&mathongtinthue=<?php echo urlencode($result['mathongtinthue']); ?>&ma_posttimtho=<?php echo urlencode($result['ma_posttimtho']); ?>&thoigian=<?php echo urlencode($result['thoigian']); ?>&gia=<?php echo urlencode($result['gia']); ?>&sukien=<?php echo urlencode($result['sukien']); ?>&diadiem=<?php echo urlencode($result['diadiem']); ?>&anhmau=<?php echo urlencode($result['anhmau']); ?>&motachitiet=<?php echo urlencode($result['motachitiet']); ?>" class="jobbest_item-warp">
                                                                <div class="jobbest_item">
                                                                    <div class="jobbest_info">
                                                                        <h3 class="jobbest_info-title"><?php echo $result['tenposttimtho']  ?></h3>
                                                                        <div class="jobbest_info-info">
                                                                            <i class="jobbest_info-icon fa-solid fa-calendar-days"></i>
                                                                            <span class="jobbest_info-text"><?php echo $result['thoigian'] ?></span>
                                                                        </div>
                                                                        <div class="jobbest_info-info">
                                                                            <i class="jobbest_info-icon fa-solid fa-circle-dollar-to-slot"></i>
                                                                            <span class="jobbest_info-text"><?php echo $result['gia'] ?></span>
                                                                        </div>
                                                                        <div class="jobbest_info-info">
                                                                            <i class="jobbest_info-icon fa-solid fa-star"></i>
                                                                            <span class="jobbest_info-text"><?php echo $result['sukien'] ?></span>
                                                                        </div>
                                                                        <div class="jobbest_info-info">
                                                                            <i class="jobbest_info-icon fa-solid fa-location-dot"></i>
                                                                            <span class="jobbest_info-text"><?php echo $result['diadiem'] ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="jobbest_favourite">
                                                                        <button type="submit" class="jobbest_favourite-btn"><i class="jobbest_favourite-icon fa-regular fa-heart"></i></button>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php
                                                        }
                                                    }

                                                    ?>
                                                    <?php
                                                    if (!$dataDisplayed) {
                                                        echo $emptyImage;
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>