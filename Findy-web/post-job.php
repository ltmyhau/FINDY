<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">    

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./post-job.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp>.navbar__heading:nth-child(2)>.navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>

<body>
    <?php
    include "id_thue.php";
    ?>
    <?php


    // Các công việc khác cần làm trên trang mainphoto.php




    // Kết nối đến cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
    include "db_connection.php";

    // Truy vấn SQL để lấy thông tin từ bảng thongtinthue dựa trên id_thue
    $sql = "SELECT * FROM thongtinthue WHERE id_thue = $id_thue";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả
    if ($result->num_rows > 0) {
        // Lặp qua từng dòng kết quả
        while ($row = $result->fetch_assoc()) {
            // Lấy thông tin từ cột cần thiết
            $mathongtinthue = $row['mathongtinthue'];
            $hinhanhthue = $row['hinhanhthue'];
           
            $diachi = $row['diachi'];
            $ngaysinh = $row['ngaysinh'];
            $cccd = $row['cccd'];
            $gioitinh = $row['gioitinh'];
            
            $sdt = $row['sdt'];
        }
    } else {
        $mathongtinthue = "";
        $hinhanhthue = ""; // You may set a default image path or leave it empty
       
        $diachi = "";
        $ngaysinh = "";
        $cccd = "";
        $gioitinh = ""; // Set a default value or leave it empty
        
        $sdt = "";

        // Thông báo không tìm thấy thông tin
        // echo "Không tìm thấy thông tin thuê cho ID: " . $id_thue;
    }

    // echo "ID của Thợ: " . $id_thue;
    // echo "ID của Thợ: " . $hoTen;
    // echo "Ima thong tin Thợ: " . $mathongtinthue;
    // echo "ID của Thợ: " . $diachi;

    // Đóng kết nối
    $conn->close();

    ?>
    <div class="main">
        <?php
        include "headercustomer.php";
        ?>
        <div class="container">
            <div class="grid wide">
                <div class="row content">
                    <div class="col l-12 m-12 c-12">
                        <div class="post-job">
                            <h1 class="post-job__heading">Tạo bài đăng</h1>
                            <?php
                            include "connect.php";
                            ?>
                            <?php
                            $connect = new connect;
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $insert_postjob = $connect->insert_postjob();
                            }
                            ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="post-job__form">
                                    <div class="row post-job__form-item" style="display: none;">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-name" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-file-signature"></i>
                                                Mã thông tin người thuê
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="post-job__form-ma" id="post-job__form-name" type="text" class="post-job__form-input" placeholder="Tên buổi chụp ảnh/makeup" value="<?php echo $mathongtinthue ?>">
                                        </div>
                                    </div>

                                    <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-name" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-file-signature"></i>
                                                Tên buổi chụp ảnh/makeup
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="post-job__form-name" id="post-job__form-name" type="text" class="post-job__form-input" placeholder="Tên buổi chụp ảnh/makeup">
                                        </div>
                                    </div>

                                    <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-place" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-location-dot"></i>
                                                Địa điểm
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="post-job__form-place" id="post-job__form-place" type="text" class="post-job__form-input" placeholder="Địa điểm">
                                        </div>
                                    </div>

                                    <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-time" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-calendar-days"></i>
                                                Thời gian
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="post-job__form-time" id="post-job__form-time" type="date" class="post-job__form-input">
                                        </div>
                                    </div>

                                    <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-price" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-sack-dollar"></i>
                                                Giá
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <!-- <input id="post-job__form-price" type="text" class="post-job__form-price-input" placeholder="Giá"> -->
                                            <input name="post-job__form-price" id="post-job__form-price" type="text" class="post-job__form-input" placeholder="Giá (khoảng bao nhiêu)">
                                        </div>
                                    </div>

                                    <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-event" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-holly-berry"></i>
                                                Sự kiện (nếu có)
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="post-job__form-event" id="post-job__form-event" type="text" class="post-job__form-input" placeholder="Sự kiện (nếu có)">
                                        </div>
                                    </div>

                                    <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-style" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-wand-magic-sparkles"></i>
                                                Phong cách
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="post-job__form-style" id="post-job__form-style" type="text" class="post-job__form-input" placeholder="Phong cách">
                                        </div>
                                    </div>

                                    <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-upload" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-solid fa-upload"></i>
                                                Tải ảnh mẫu (phong cách muốn chụp)
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <input name="hinhanh" id="post-job__form-upload" type="file" class="post-job__form-input">
                                        </div>
                                    </div>

                                    <div class="row post-job__form-item">
                                        <div class="col l-4 m-6 c-12">
                                            <label for="post-job__form-description" class="post-job__form-text">
                                                <i class="post-job__form-icon fa-regular fa-pen-to-square"></i>
                                                Mô tả chi tiết các yêu cầu
                                            </label>
                                        </div>
                                        <div class="col l-8 m-6 c-12">
                                            <textarea name="post-job__form-description" id="post-job__form-description" class="post-job__form-input" cols="1" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-job__control">
                                    <button class="btn post-job-btn post-job__control-btn">Lưu bản nháp</button>
                                    <button type="submit" class="btn btn--primary post-job-btn">Đăng tin</button>
                                </div>
                            </form>
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