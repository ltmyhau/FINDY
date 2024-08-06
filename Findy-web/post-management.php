<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./post-management.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp>.navbar__heading:nth-child(3)>.navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>

<body>
    <?php
    include "id_thue.php";
    ?>
    <?php
    include "db_connection.php";

    $sql = "SELECT DISTINCT post_timtho.tenposttimtho, post_timtho.thoigian, post_timtho.diadiem, 
thongtintho.tentho, thongtintho.diachi, thongtintho.ngaysinh 
FROM post_timtho

INNER JOIN quanlybaidang ON quanlybaidang.ma_posttimtho = post_timtho.ma_posttimtho
INNER JOIN thongtintho ON quanlybaidang.ma_thongtintho = thongtintho.mathongtintho
INNER JOIN thongtinthue ON post_timtho.mathongtinthue = thongtinthue.mathongtinthue
WHERE thongtinthue.id_thue = $id_thue;
";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Hiển thị thông tin từng bài đăng và thông tin thợ
        while ($row = $result->fetch_assoc()) {
            // echo "Tên bài đăng: " . $row["tenposttimtho"] . "<br>";
            // echo "Thời gian: " . $row["thoigian"] . "<br>";
            // echo "Địa điểm: " . $row["diadiem"] . "<br>";
            // echo "Tên thợ: " . $row["tentho"] . "<br>";
            // echo "Địa chỉ thợ: " . $row["diachi"] . "<br>";
            // echo "Ngày sinh thợ: " . $row["ngaysinh"] . "<br><hr>";
        }
    } else {
        // echo "Không có dữ liệu.";
    }
    // Đóng kết nối
    $conn->close();
    // Các công việc khác cần làm trên trang mainphoto.php

    // echo "ID của Thợ: " . $id_thue;
    // echo "ID của Thợ: " . $hoTen;

    ?>
    <div class="main">
        <?php
        include "headercustomer.php";
        ?>

        <div class="post-management-container">
            <div class="grid wide">
                <div class="post-management-content">
                    <div class="post">
                        <h1 class="post-heading">Danh sách bài đăng</h1>
                        <div class="row">
                            <?php
                            include "connect.php";
                            $emptyImage = '<img src="./img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
                            $dataDisplayed = false;
                            ?>
                            <?php
                            $connect = new connect;
                            $select_posttimtho = $connect->select_posttimtho($id_thue);
                            ?>
                            <?php
                            if ($select_posttimtho) {
                                while ($result = $select_posttimtho->fetch_assoc()) {
                                    $ma_posttimtho = $result['ma_posttimtho'];
                                    $mathongtinthue = $result['mathongtinthue'];
                                    $dataDisplayed = true;

                            ?>
                                    <div class="col l-6 m-12 c-12">
                                        <div class="post-content">
                                            <h3 class="post-content__title"><?php echo $result['tenposttimtho'] ?></h3>
                                            <div class="post-content__author">
                                                <span class="post-content__name"><?php echo $hoTen ?></span>
                                                <span class="post-content__time">
                                                    <i class="post-content__time-icon fa-regular fa-clock"></i>
                                                    30 phút trước
                                                </span>
                                            </div>
                                            <div class="post-content__description">
                                                <span class="post-content__price"><?php echo $result['gia'] ?></span>
                                                <span class="post-content__deadline">Hạn ứng tuyển: 10 ngày 08 giờ</span>
                                            </div>
                                            <p class="post-content__text">
                                                <?php echo $result['motachitiet'] ?>
                                            </p>
                                            <div class="post-content__details">
                                                <a href="#" class="post-content__detail"><?php echo $result['diadiem'] ?></a>
                                                <a href="#" class="post-content__detail"><?php echo $result['ma_posttimtho']  ?></a>
                                                <a href="#" class="post-content__detail">Ảnh cưới</a>
                                            </div>
                                        </div>
                                        <div class="candidate">
                                            <h2 class="candidate__heading">Danh sách thợ đã ứng tuyển</h2>
                                            <?php
                                            include "db_connection.php";
                                            ?>
                                            <?php

                                            $result_thongtintho = $connect->result_thongtintho($ma_posttimtho);
                                            ?>
                                            <?php
                                            if ($result_thongtintho) {
                                                // Process the results, for example:
                                                while ($row_thongtintho = $result_thongtintho->fetch_assoc()) {
                                                    $mathongtintho = $row_thongtintho['mathongtintho'];
                                                    $tentho = $row_thongtintho['hoTen'];
                                                    $dataDisplayed = true;
                                                    $nghenghiep = $row_thongtintho['nghenghiep'];
                                                    $hinhanhtho = $row_thongtintho['hinhanhtho'];
                                                    $maquanlybaidang = $row_thongtintho['ma_quanlybaidang'];
                                                    $giatri = $row_thongtintho['giatri'];
                                                    // echo  'maqly'.$maquanlybaidang
                                            ?>
                                                    <div class="candidate__list c-12 m-12 l-12">
                                                        <div class="candidate__resume">
                                                            <div class="candidate__resume-warp">
                                                                <div class="candidate__avatar">
                                                                    <a href="./post-managermentinfor.php?name=<?php echo urlencode($row_thongtintho['ten']); ?>&ma_profile=<?php echo urlencode($row_thongtintho['ma_profile']); ?>&job=<?php echo urlencode($row_thongtintho['nghenghiep']); ?>&rating=4.9&reviews=<?php echo urlencode($row_thongtintho['gioithieu']); ?>&sdt=<?php echo urlencode($row_thongtintho['sdt']); ?>&email=<?php echo urlencode($row_thongtintho['email']); ?>&address=<?php echo urlencode($row_thongtintho['diachi']); ?>&mathongtintho=<?php echo urlencode($row_thongtintho['mathongtintho']); ?>"><img src="./img/<?php echo $hinhanhtho  ?>" alt="Ảnh đại diện" class="candidate__avatar-img"></a>

                                                                    <p class="candidate__avatar-text">Uy tín: 100</p>
                                                                </div>

                                                                <div class="candidate__info">
                                                                    <span class="candidate__title">
                                                                        <?php echo $tentho  ?>
                                                                    </span>
                                                                    <span class="candidate__text">
                                                                        <?php echo $nghenghiep ?>
                                                                    </span>
                                                                    <div class="star-rating">
                                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                                    </div>
                                                                    <div class="candidate__rating">
                                                                        <strong>4.9</strong>
                                                                        <span>(234 đánh giá)</span>
                                                                    </div>
                                                                    <span class="giatri" >
                                                                       <p> Giá: <?php echo $giatri ?> đ</p>
                                                                    </span>
                                                                    <div class="candidate__thongtin">


                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="candidate__control">


                                                                <?php
                                                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                                    $connect = new connect;

                                                                    if (isset($_POST['accept'])) {
                                                                        // Handle accept action
                                                                        $insert_thanhtoancoc = $connect->insert_thanhtoancoc();
                                                                        if ($insert_thanhtoancoc) {
                                                                            // If the insert is successful, proceed to delete from table2
                                                                            $maquanlybaidang = $_POST['maquanlybaidang'];
                                                                            
                                                                            echo "<script>window.location.reload();</script>"; // Reload the page using JavaScript
                                                                        exit();
                                                                        } else {
                                                                            echo "Error";
                                                                        }
                                                                    } elseif (isset($_POST['reject'])) {
                                                                        // Handle reject action
                                                                        $maquanlybaidang = $_POST['maquanlybaidang'];

                                                                        // Call the method to delete the record
                                                                        $delete_quanlybaidang = $connect->delete_quanlybaidang($maquanlybaidang);
                                                                        echo "<script>window.location.reload();</script>"; // Reload the page using JavaScript
                                                                        exit();
                                                                    }
                                                                }

                                                                ?>
                                                                <form action="" method="POST">
                                                                    <div class="form_qlybaidang" style="display:none">
                                                                        <input type="hidden" name="maquanlybaidang" value="<?php echo $maquanlybaidang ?>">

                                                                        <input name="maposttimtho" type="text" value="<?php echo $ma_posttimtho ?>">
                                                                        <input name="mathongtintho" type="text" value="<?php echo $mathongtintho ?>">
                                                                    </div>
                                                                    <button type="submit" name="accept" class="btn btn--primary candidate__control-btn">Chấp nhận</button>


                                                                </form>
                                                                <form action="" method="POST">
                                                                    <!-- Add hidden input for maquanlybaidang -->
                                                                    <input type="hidden" name="maquanlybaidang" value="<?php echo $maquanlybaidang ?>">
                                                                    <button type="submit" name="reject" class="btn btn--primary candidate__control-btn">Từ chối</button>
                                                                    <button type="submit" class="btn btn--primary candidate__control-btn">Trả giá</button>

                                                                </form>
                                                                <script>
                                                                    function reloadPage() {
                                                                        window.location.reload();
                                                                    }
                                                                </script>
                                                            </div>

                                                        </div>

                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
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
    <?php
    include 'footer.php';
    ?>
</body>

</html>