<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/mainicon.css">
    <link rel="stylesheet" href="/photoclick.css">
    <link rel="stylesheet" href="/font/fontawesome-free-6.3.0-web/css/all.min.css">
    <style>
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Màu mờ */
            justify-content: center;
            align-items: center;
        }

        /* CSS để thiết lập kích thước và vị trí của form */
        .form_photoclick {
            width: 50%;
            background-color: #fff;
            /* Màu nền của form */
            padding: 20px;
            border-radius: 10px;
        }
        .form_photoclick form{
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        .form_photoclick form span{
            width: 100%;
        }
        .form_photoclick form input{
            width: 50%;
            margin: 10px ;
            
        }
</style>

    </style>
</head>

<body>
    <!-- -----------chatbox------------ -->
    <?php
    include "id_tho.php";
    ?>

    <?php

    // Retrieve data from session variables
    $mathongtinthue = $_GET['mathongtinthue'];
    $tenposttimtho = $_GET['tenposttimtho'];
    $thoigian = $_GET['thoigian'];
    $gia = $_GET['gia'];
    $sukien = $_GET['sukien'];
    $diadiem = $_GET['diadiem'];
    $phongcach = $_GET['phongcach'];
    $motachitiet = $_GET['motachitiet'];
    $ma_posttimtho = $_GET['ma_posttimtho'];
    $anhmau = $_GET['anhmau'];
    $hoTenkhach = $_GET['hoTen'];
    // Use these variables as needed in your photoclick.php page



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
        }
    } else {


        // Thông báo không tìm thấy thông tin
        echo "Không tìm thấy thông tin thuê cho ID: " . $id_thue;
    }


    // Các công việc khác cần làm trên trang mainphoto.php
    echo "ID của Thợ: " . $id_tho;
    echo "ID của Thợ: " . $hoTen;

    echo "Mã post tìm thợ: " . $ma_posttimtho;
    echo "Mã thông tin thợ" . $mathongtintho;

    ?>



    <?php
    include "headerphoto1.php";
    ?>


    <!-- <section>
        <div class="banner">
            <div class="grid wide">
                    <div class="banner-header">
                        <span>
                            <p class="content" id="24hVi">Tìm việc làm nhanh 24h, việc làm mới nhất trên toàn quốc.</p>
                            <p class="content" id="24hEn" style="display: none;">Find fast job opportunities 24/7, the latest jobs nationwide.</p>

                            
                        </span>
                            <p class="content" id="24hVi">Tiếp cận 40,000+ tin tuyển dụng việc làm mỗi ngày từ hàng nghìn doanh nghiệp uy tín tại Việt Nam</p>
                            <p class="content" id="24hEn" style="display: none;">Easily access over 40,000+ job vacancies every day from thousands of reputable businesses in Vietnam.</p>
                    </div>
                    
                    <div class="banner_img">
                        <div class="banner_img-container">
                            <div class="banner_img-img">
                                <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                                <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                                <a href=""><img src="./img/banner3.jpg" alt=""></a>
                                <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                                <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            </div>
                            <div class="button_banner">
                                <i class="fa-solid fa-chevron-left"></i>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section> -->

    <section>
        <div class="photoclick">
            <div class="grid wide">
                <div class="photoclick_container row">
                    <div class="photoclick_left col c-9 m-9 l-9">
                        <div class="content1">
                            <div class="photoclick_left-heading">
                                <?php echo $tenposttimtho ?>
                            </div>
                            <div class="photoclick_left-text">
                                <i class="photoclick_left-icon fa-solid fa-circle-dollar-to-slot"></i><span><strong>Giá:</strong> <?php echo $gia ?></span>
                            </div>
                            <div class="photoclick_left-button">
                                <?php
                                include "connect.php";
                                ?>
                                <?php
                                $connect = new connect;
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    if (isset($_POST['ung_tuyen'])) {
                                        // Process form for "Ứng tuyển"
                                        $insert_quanlybaidang = $connect->insert_quanlybaidang();
                                    } elseif (isset($_POST['like'])) {
                                        // Process form for "<i class='fa-regular fa-heart'></i>"
                                        // Add code to handle the second form data if needed
                                        $insert_thothichbaipost = $connect->insert_thothichbaipost();
                                    }
                                }
                                ?>
                                <button class="btn btn--primary photoclick-btn" onclick="showForm()">Ứng tuyển</button>

                                <div class="overlay" id="overlay" onclick="hideForm()">
                                    <div class="form_photoclick">
                                   

                                        <form action="" method="POST">
                                            <span>Nhập tiền mà bạn muốn ứng tuyển trong khoảng <?php echo $gia ?></span>
                                            <input style="display: none;" type="text" name="ma_posttimtho" id="" value="<?php echo $ma_posttimtho ?>">
                                            <input style="display: none;" type="text" name="mathongtintho" value="<?php echo $mathongtintho ?>">
                                            <input type="number" name="giatri" id="">
                                            <button type="submit" name="ung_tuyen" onclick="ungTuyen()" class="btn btn--primary photoclick-btn">Gửi</button>
                                        </form>
                                    </div>
                                </div>
                                <script>
    function showForm() {
        var overlay = document.getElementById("overlay");
        overlay.style.display = "flex"; // Hiển thị màn hình mờ
    }

    function hideForm() {
        var overlay = document.getElementById("overlay");
        overlay.style.display = "none"; // Ẩn màn hình mờ
    }

    function ungTuyen() {
        // Thực hiện các thao tác khác khi ấn nút "Gửi"
    }

    // Thêm sự kiện cho overlay
    var overlay = document.getElementById("overlay");
    overlay.onclick = function (event) {
        if (event.target === overlay) {
            hideForm(); // Ẩn form khi click vào vùng overlay
        }
    };
</script>

                                <form action="" method="POST">
                                    <div class="form_photoclick" style="display: none;">
                                        <input type="text" name="ma_posttimtho" id="" value="<?php echo $ma_posttimtho ?>">
                                        <input type="text" name="mathongtintho" value="<?php echo $mathongtintho ?>">
                                    </div>
                                    <button type="submit" name="like" onclick="changeColor(this)" class="btn heart-btn"><i class='far fa-heart' id="heartIcon"></i></button>
                                </form>

                            </div>
                            <div class="photoclick_left-text">
                                <i class="photoclick_left-icon fa-solid fa-location-dot"></i> <span><strong>Địa điểm:</strong> <?php echo $diadiem ?></span>
                            </div>
                            <div class="photoclick_left-text">
                                <i class="photoclick_left-icon fa-solid fa-calendar-days"></i><span><strong>Thời gian:</strong> <?php echo $thoigian  ?></span>
                            </div>
                            <div class="photoclick_left-text">
                                <i class="photoclick_left-icon fa-solid fa-person-dress"></i><span><strong>Phong cách:</strong> <?php echo $phongcach ?></span>
                            </div>
                            <div class="photoclick_left-text">
                                <i class="photoclick_left-icon fa-solid fa-star"></i><span><strong>Sự kiện:</strong> <?php echo $sukien ?></span>
                            </div>
                            <div class="photoclick_left-mota">
                                <i class="fa-regular fa-square-check"></i><span><strong></strong> <?php echo $motachitiet ?></span>
                            </div>
                            <div class="photoclick_left-text">
                                <i class="photoclick_left-icon fa-regular fa-square-check"></i><span>Cần hỗ trợ makeup</span>
                            </div>
                            <div class="photoclick_left-text">
                                <i class="photoclick_left-icon fa-solid fa-clock"></i><span>Đã đăng 30p trước</span>
                            </div>
                        </div>
                        <div class="picture">
                            <p class="picture-heading">Ảnh mẫu</p>
                            <div class="picture_img">
                                <div class="row">
                                    <div class="col c-4 m-4 l-4">
                                        <div class="picture_img-items" style="background-image: url(/img/<?php echo $anhmau ?>);"></div>
                                    </div>
                                    <!-- <div class="col c-4 m-4 l-4">
                                            <div class="picture_img-items" style="background-image: url(/img/<?php echo $anhmau ?>);"></div>
                                        </div>
                                        <div class="col c-4 m-4 l-4">
                                            <div class="picture_img-items" style="background-image: url(/img/<?php echo $anhmau ?>);"></div>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="photoclick_right col c-3 m-3 l-3">
                        <!-- <div class="photoclick_right-avatar">
                                <div class="row">
                                    <div class="photoclick_right-avatar-img c-2 m-2 l-2">
                                        <img src="../php/img/<?php echo $hinhanhthue ?>" alt="">
                                    </div>
                                    <div class="photoclick_right-avatar-name c-10 m-10 l-10">
                                    <?php echo $tenposttimtho ?>
                                    </div>
                                </div>
                            </div> -->

                        <div class="photoclick_right-info">
                            <div class="photoclick_right-avatar" style="background-image: url(/img/avatar-1.png);"></div>
                            <p class="photoclick_right-name"><?php echo $hoTenkhach ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script>
        function changeColor(button) {
            var heartIcon = document.getElementById("heartIcon");

            // Kiểm tra nếu đã có class 'fas' thì xoá, ngược lại thêm class 'fas'
            if (heartIcon.classList.contains("fas")) {
                heartIcon.classList.remove("fas");
                heartIcon.classList.add("far");
            } else {
                heartIcon.classList.remove("far");
                heartIcon.classList.add("fas");
            }
        }

        function ungTuyen() {
            // Thêm mã xử lý ứng tuyển ở đây, ví dụ: gửi yêu cầu đến máy chủ hoặc lưu trạng thái ứng tuyển trong cơ sở dữ liệu.
            alert('Bạn đã ứng tuyển thành công!');
        }
    </script>
    <script src="./main.js"></script>
    <?php
    include "./footer.php"
    ?>
</body>

</html>