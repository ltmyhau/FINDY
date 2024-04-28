<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./find-timtho.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp>.navbar__heading:nth-child(1)>.navbar__heading-link {
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

    echo "ID của Thợ: " . $id_thue;
    echo "ID của Thợ: " . $hoTen;

    //test

    ?>
    <?php
    include "headercustomer.php";
    ?>
    <div class="main">
        <div class="find-timtho-container">
            <div class="grid wide">
                <div class="row find-timtho-content">
                    <div class="col l-3 m-4 c-0">
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

                    <div class="col l-9 m-8 c-12">
                        <div class="freelancer">
                            <?php
                            include "connect.php"
                            ?>
                            <?php
                            $connect = new connect;
                            $select_profile = $connect->select_profile();
                            ?>

                            <div class="row sm-gutter">
                                <?php
                                if ($select_profile) {
                                    while ($result = $select_profile->fetch_assoc()) {
                                ?>

                                        <div class="col l-4 m-6 c-12">
                                            <div class="freelancer-item">
                                                <a href="info-freelancer.php?name=<?php echo urlencode($result['ten']); ?>&ma_profile=<?php echo urlencode($result['ma_profile']); ?>&job=<?php echo urlencode($result['nghenghiep']); ?>&rating=4.9&reviews=<?php echo urlencode($result['gioithieu']); ?>&sdt=<?php echo urlencode($result['sdt']); ?>&email=<?php echo urlencode($result['email']); ?>&address=<?php echo urlencode($result['diachi']); ?>&mathongtintho=<?php echo urlencode($result['mathongtintho']); ?>" class="freelancer-item-warp">
                                                    <div class="freelancer-item__personal-info">
                                                        <div class="freelancer-item__avatar">
                                                            <!-- <img src="./img/avatar-1.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img"> -->
                                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/<?php echo $result['hinhanhtho'] ?>);"></div>
                                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>

                                                        </div>

                                                        <div class="freelancer-item__info">
                                                            <span class="freelancer-item__title">
                                                                <?php echo $result['ten'] ?>
                                                            </span>
                                                            <span class="freelancer-item__text">
                                                                <?php echo $result['nghenghiep'] ?>
                                                            </span>
                                                            <div class="star-rating">
                                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                                <i class="star-rating--gold fa-solid fa-star"></i>
                                                            </div>
                                                            <div class="freelancer-item__rating">
                                                                <strong>4.9</strong>
                                                                <span>(234 đánh giá)</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="freelancer-item__contact">


                                                        <div class="freelancer-item__contact-info">
                                                            <!-- <i class="freelancer-item__contact-icon fa-solid fa-phone"></i> -->
                                                            <span class="freelancer-item__contact-text"><?php echo $result['gioithieu'] ?></span>
                                                        </div>
                                                        <!-- <div class="freelancer-item__contact-info">
                                                                <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                                <span class="freelancer-item__contact-text"><?php echo $result['email'] ?></span>
                                                            </div>
                                                            <div class="freelancer-item__contact-info">
                                                                <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                                <span class="freelancer-item__contact-text"><?php echo $result['diachi'] ?></span>
                                                            </div> -->

                                                    </div>

                                                    <div class="slide-show-artwork">
                                                        <div class="freelancer-item__artwork-list">
                                                            <div class="freelancer-item__artwork-img" style="background-image: url(./img/<?php echo $result['img1'] ?>);" onclick="changeImage1()"></div>
                                                            <div class="freelancer-item__artwork-img" style="background-image: url(./img/<?php echo $result['img2'] ?>);" onclick="changeImage2()"></div>
                                                            <div class="freelancer-item__artwork-img" style="background-image: url(./img/<?php echo $result['img3'] ?>);" onclick="changeImage3()"></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>



                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <ul class="pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fa-solid fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">4</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">5</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">...</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">10</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./find-timtho.js"></script>

    <?php
    include "footer.php";
    ?>
</body>

</html>