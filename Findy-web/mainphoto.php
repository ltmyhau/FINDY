<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./mainphoto.css">
    <link rel="stylesheet" href="./mainicon.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    
    <style>
        .navbar__heading-warp > .navbar__heading:nth-child(1) > .navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>

<body>
    <!-- -----------chatbox------------ -->
    <?php
    include "id_tho.php";
    ?>

    <?php

    include "db_connection.php";

    $sql = "SELECT * FROM thongtintho
WHERE thongtintho.id_tho = $id_tho";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả
    if ($result->num_rows > 0) {
        // Lặp qua từng dòng kết quả
        while ($row = $result->fetch_assoc()) {
            // Lấy thông tin từ cột cần thiết
            $mathongtintho = $row['mathongtintho'];
        }
    } else {
        $mathongtintho = "";


        // Thông báo không tìm thấy thông tin
        // echo "Không tìm thấy thông tin thuê cho ID: " . $id_thue;
    }
    // Các công việc khác cần làm trên trang mainphoto.php
    // echo "ID của Thợ: " . $id_tho;
    // echo "ID của Thợ: " . $hoTen;
    ?>

    <?php
    include "headerphoto1.php";
    ?>

    <section>
        <div class="banner">
            <div class="grid wide">
                <div class="banner_img">
                    <div class="banner_img-container">
                        <div class="banner_img-img">
                            <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            <a href=""><img src="./img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
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
    </section>


    <section>
        <div class="container">
            <div class="grid wide">
                <div class="job-header">
                    Việc làm tốt nhất
                </div>
                <div class="content row">
                    <div class="col l-3 m-0 c-0">
                        <div class="filter">
                            <h3 class="filter__heading">
                                <i class="filter__heading-icon fa-solid fa-filter"></i>
                                Lọc
                            </h3>
                            <div class="filter__list">
                                <div class="filter__item-warp">
                                    <div id="filter__place-item" class="filter__item">
                                        Địa điểm
                                        <i id="filter__place-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__place-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__place-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-1" class="">
                                            <label for="place-1" class="filter__menu-name">Hồ Chí Minh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-2" class="">
                                            <label for="place-2" class="filter__menu-name">Hà Nội</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-3" class="">
                                            <label for="place-3" class="filter__menu-name">Đà Nẵng</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-4" class="">
                                            <label for="place-4" class="filter__menu-name">Đà Lạt</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-5" class="">
                                            <label for="place-5" class="filter__menu-name">Phú Quốc</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="place-6" class="">
                                            <label for="place-6" class="filter__menu-name">Khác</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__price-item" class="filter__item">
                                        Giá
                                        <i id="filter__price-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__price-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__price-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="text" name="" id="" class="filter__price-input" placeholder="₫ TỪ">
                                            <span class="filter__menu-name">-</span>
                                            <input type="text" name="" id="" class="filter__price-input" placeholder="₫ ĐẾN">
                                        </div>
                                        <button class="btn btn--primary filter__menu-btn">ÁP DỤNG</button>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__experience-item" class="filter__item">
                                        Kinh nghiệm
                                        <i id="filter__experience-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__experience-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__experience-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-1" class="">
                                            <label for="exp-1" class="filter__menu-name">Dưới 1 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-2" class="">
                                            <label for="exp-2" class="filter__menu-name">1 - 3 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-3" class="">
                                            <label for="exp-3" class="filter__menu-name">3 - 5 năm</;>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="exp-4" class="">
                                            <label for="exp-4" class="filter__menu-name">Trên 5 năm</;>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__skill-item" class="filter__item">
                                        Kỹ năng
                                        <i id="filter__skill-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__skill-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__skill-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-1" class="">
                                            <label for="skill-1" class="filter__menu-name">Chụp ảnh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-2" class="">
                                            <label for="skill-2" class="filter__menu-name">Quay video</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-3" class="">
                                            <label for="skill-3" class="filter__menu-name">Edit ảnh</label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="skill-4" class="">
                                            <label for="skill-4" class="filter__menu-name">Edit video</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__item-warp">
                                    <div id="filter__rating-item" class="filter__item">
                                        Đánh giá
                                        <i id="filter__rating-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                        <i id="filter__rating-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                    </div>
                                    <div id="filter__rating-menu" class="filter__menu" style="display: none;">
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-1" class="">
                                            <label for="rating-1" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-2" class="">
                                            <label for="rating-2" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-3" class="">
                                            <label for="rating-3" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-4" class="">
                                            <label for="rating-4" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-5" class="">
                                            <label for="rating-5" class="star-rating">
                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                        <div class="filter__menu-item">
                                            <input type="checkbox" id="rating-6" class="">
                                            <label for="rating-6" class="star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="jobbest_container col l-9 m-12 c-12">
                        <div class="jobbest-mid">
                            <div class="row">
                                <?php
                                include "connect.php"
                                ?>
                                <?php
                                $connect = new connect;
                                $select_postjob = $connect->select_postjob();

                                ?>
                                <div class="jobbest-mid">
                                    <div class="row">
                                        <?php
                                        if ($select_postjob) {
                                            while ($result = $select_postjob->fetch_assoc()) {
                                                $mathongtinthue = $result['mathongtinthue'];

                                                include "db_connection.php";
                                                $sql = "SELECT * FROM thongtinthue WHERE mathongtinthue = $mathongtinthue";
                                                $result_thongtinthue = $conn->query($sql);
                                                if ($result_thongtinthue) {
                                                    $thongtinthue_data = $result_thongtinthue->fetch_assoc();
                                                    $hinhanhthue = $thongtinthue_data['hinhanhthue'];

                                        ?>
                                                <div class="col c-12 m-6 l-6">
                                                    <a href="./photoclick.php?tenposttimtho=<?php echo urlencode($result['tenposttimtho']); ?>&hoTen=<?php echo urlencode($result['hoTen']); ?>&ma_posttimtho=<?php echo urlencode($result['ma_posttimtho']); ?>&phongcach=<?php echo urlencode($result['phongcach']); ?>&mathongtinthue=<?php echo urlencode($result['mathongtinthue']); ?>&ma_posttimtho=<?php echo urlencode($result['ma_posttimtho']); ?>&thoigian=<?php echo urlencode($result['thoigian']); ?>&gia=<?php echo urlencode($result['gia']); ?>&sukien=<?php echo urlencode($result['sukien']); ?>&diadiem=<?php echo urlencode($result['diadiem']); ?>&anhmau=<?php echo urlencode($result['anhmau']); ?>&motachitiet=<?php echo urlencode($result['motachitiet']); ?>" class="jobbest_item-warp">
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
                                        }
                                        ?>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
    </section>

    <script src="./main.js"></script>
    <script src="./find-timtho.js"></script>

    <?php
    include "./footer.php"
    ?>
</body>

</html>