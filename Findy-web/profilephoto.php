<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="./img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/findy-logo.png" type="image/x-icon">
    <script src="./anhphoto.js"></script>
    <script src="./main.js"></script>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./profilephoto.css">
    <link rel="stylesheet" href="./mainicon.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp>.navbar__heading:nth-child(2)>.navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>

<body>

    <?php
    include "id_tho.php";
    ?>

    <?php


    // Lấy thông tin người dùng từ session
    $id_tho = $_SESSION['id_tho'];
    $hoTen = $_SESSION['hoTen'];
    $gmail = $_SESSION['gmail'];
    // Hiển thị thông tin người dùng

    echo $id_tho;


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
            $cccd = $row['cccd'];
            $gioitinh = $row['gioitinh'];
            $sdt = $row['sdt'];
        }
    } else {
        $mathongtintho = "";
        $hinhanhtho = ""; // You may set a default image path or leave it empty
        $diachi = "";
        $ngaysinh = "";
        $cccd = "";
        $gioitinh = ""; // Set a default value or leave it empty
        $email = "";
        $sdt = "";

        // Thông báo không tìm thấy thông tin
        echo "Không tìm thấy thông tin thuê cho ID: " . $id_thue;
    }

    // Đóng kết nối
    $conn->close();

    echo $mathongtintho
    ?>





    <?php
    include "headerphoto1.php";
    ?>



    <section>
        <div class="insert">
            <div class="grid wide">
                <div class="insert-profile l-12 c-12 m-12">
                    <?php
                    include "connect.php";
                    ?>
                    <?php
                    $connect = new connect;
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $insert_profilephoto = $connect->insert_profilephoto();
                    }
                    ?>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col c-3 m-3 l-3">
                                <div class="insert-profile-left">
                                    <div class="insert-profile-left-img">
                                        <!-- <img id="hinhAnh" src="./img/<?php echo $hinhanhtho ?>" alt="Hình ảnh của bạn" style="max-width: 200px;"> -->
                                        <img id="hinhAnh" src="./img/<?php echo $hinhanhtho ?>" alt="Hình ảnh của bạn" style="max-width: 200px;">

                                    </div>
                                    <div class="insert-profile-right-name">
                                        <input placeholder="Tên" type="text" name="namephoto" id="">
                                        <input placeholder="Vị trí ứng tuyển" type="text" name="vitriungtuyen" id="">
                                        <input style="display: none;" type="text" name="mathongtintho" id="" value="<?php echo $mathongtintho ?>">

                                    </div>
                                    <div class="insert-profile-left-mail">
                                        <i class="fa-solid fa-envelope"></i>
                                        <input placeholder="Nhập mail" type="text" name="email" id="" value="<?php echo $gmail ?>">
                                    </div>
                                    <div class="insert-profile-left-phone">
                                        <i class="fa-solid fa-phone"></i>
                                        <input placeholder="Nhập số điện thoại" type="text" name="phone" id="" value="<?php echo $sdt ?>">
                                    </div>
                                    <div class="insert-profile-left-fb">
                                        <i class="fa-brands fa-facebook"></i>
                                        <input placeholder="Nhập địa chỉ" type="text" name="diachi" id="" value="<?php echo $diachi ?>">
                                    </div>
                                    <div class="insert-profile-left-address">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <input placeholder="Nhập mô tả" type="text" name="mota" id="">
                                    </div>
                                </div>
                                <button class="btn btn--primary submit_profile" type="submit">Lưu</button>
                            </div>


                            <div class="insert-profile-right col c-8 m-8 l-8">
                                <div class="grid-container" id="gridContainer">
                                    <div class="upload_post">
                                        <div class="upload_icon">
                                            <img src="./img/upload.png">
                                        </div>
                                        <div class="title">
                                            <h1 class="title_post">Đăng tác phẩm của bạn</h1>
                                        </div>
                                        <div class="description">
                                            <p class="description_post">Hiển thị tác phẩm của bạn trên trang web, thu hút nhiều khách hàng hơn.</p>
                                        </div>
                                        <div class="upload_button">
                                            <button class="btn btn--primary"><a class="a_btn" href="./upload-new-post.php">Đăng bài ngay</a></button>
                                        </div>
                                    </div>
                                    <?php
                                    $connect = new connect;
                                    $query = "SELECT * FROM post, thongtintho, profile where thongtintho.id_tho = user_id and thongtintho.mathongtintho = profile.mathongtintho and ten <> '' and user_id = $id_tho";
                                    $result = $conn->query($query);
                                    if ($result->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $noidung = $row["content"];
                                            $postid = $row["post_id"];
                                            $nguoidang = $row["ten"];
                                            $hinhanhtho = $row["hinhanhtho"];
                                            $likes = $row["likes"];
                                            $hinhanh = $row["image"];
                                            $posttitle = $row["post_title"];
                                            $ten = urlencode($row['ten']);
                                            $nghenghiep = urlencode($row['nghenghiep']);
                                            $gioithieu = urlencode($row['gioithieu']);
                                            $sdt = urlencode($row['sdt']);
                                            $email = urlencode($row['email']);
                                            $diachi = urlencode($row['diachi']);
                                            echo
                                            "<div class='grid-item'>
                                        <div class='dim' onclick='closePopup()'></div>
                                        <div class='popup-container' id='popup'>
                                        </div>
                                        <a class='darken' onclick='openPopup()' data-id=$postid>
                                            <img src='./img/$hinhanh' alt='Post Image'>
                                            <div class='overlay'>$posttitle</div>
                                        <a />
                                            <div class='post-title'> $posttitle </div>
                                            <div class='post-meta'>
                                                <div class = 'interaction'>
                                                    <span class='like-count'> $likes </span>
                                                    <button class='interaction-btn' onclick='likePost(this)'><i class='far fa-heart'></i></button>
                                                </div>
                                            </div>
                                    </div>";
                                        }
                                    } else {
                                        echo "<div></div>";
                                    }


                                    ?>
                                </div>
                            </div>



                        </div>
                </div>

                </form>
            </div>
        </div>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>
</body>

</html>