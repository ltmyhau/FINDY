<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./customersignin.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY</title>
</head>
<body>
<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['id_thue']) || !isset($_SESSION['hoTen'])|| !isset($_SESSION['gmail'])) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập hoặc hiển thị thông báo lỗi
    header("Location: main.php");
    exit();
}

// Lấy thông tin người dùng từ session
$id_thue = $_SESSION['id_thue'];
$hoTen = $_SESSION['hoTen'];

// Các công việc khác cần làm trên trang mainphoto.php

echo "ID của Thợ: " . $id_thue;
echo "ID của Thợ: " . $hoTen;

?>
<?php
            include "headercustomer.php";
        ?>

<section>
        <div class="space">
            
        </div>
    </section>
    <section>
        <div class="videomain">
            <div class="videomain_video">
                    <video id="myVideo" autoplay >
                        <source src="./video/Cinematic Camera Intro.mp4" type="video/mp4">
                        Trình duyệt của bạn không hỗ trợ video HTML5.
                      </video>
                      <div class="videomain_text">
                            <div class="videomain_text--header">
                                <p>Thuê các Photographer & Make-up Artist tốt nhất cho mọi công việc trực tuyến.</p>
                            </div>
                            <div class="videomain_text--items">
                                <ul>
                                    <li>Mọi công việc mà bạn có thể nghĩ ra</li>
                                    <li>Tiết kiệm đến 90% và nhận báo giá miễn phí</li>
                                    <li>Chỉ trả tiền khi thấy hài lòng 100%</li>
                                </ul>
                            </div>
                            
                      </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="complete">
            <div class="grid wide">
                <div class="complete_container">
                    <div class="complete_header">
                        Cần hoàn thành công việc?
                    </div>
                    <div class="complete_items row">
                        <div class="complete_items--content col c-3 m-3 l-3">
                            <h1>Đăng công việc</h1>
                            <p>Đăng công việc miễn phí và dễ dàng. Chỉ cần điền vào tiêu đề, mô tả và ngân sách, các thứ bạn cần sẽ đến trong chốc lát.</p>
                        </div>
                        <div class="complete_items--content col c-3 m-3 l-3">
                            <h1>Chọn</h1>
                            <p>Không có công việc nào là quá lớn hay quá nhỏ. Chúng tôi luôn có các thứ cần thiết thuộc mọi quy mô hay ngân sách. Cái gì quá phức tạp, Chúng tôi đều có thể hoàn thành!</p>
                        </div>
                        <div class="complete_items--content col c-3 m-3 l-3">
                            <h1>Chi trả an toàn</h1>
                            <p>Chỉ chi trả khi công việc được hoàn thành và bạn thấy hài lòng 100% với chất lượng, thông qua hệ thống các mốc thanh toán của chúng tôi.</p>
                        </div>
                        <div class="complete_items--content col c-3 m-3 l-3">
                            <h1>Chúng tôi ở đây để hỗ trợ</h1>
                            <p>Đội ngũ tuyển dụng viên tài năng của chúng tôi có thể giúp bạn tìm được Photographer & Make-up Artist tốt nhất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
            <div class="grid wide">
                <div class="row content">
                    <div class="col l-3 m-4 c-0">
                        <div class="filter">
                            <h3 class="filter__heading">
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
                            <div class="row">
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-1.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Trần Minh Khánh
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Nhiếp ảnh gia tự do
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
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">090 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">t*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Bình Thạnh, Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-1-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-1-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-1-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-2.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Trương Thu Trang
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Make-up cô dâu
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
                                                        <span>(108 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="freelancer-item__contact">
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">090 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">h*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Quận 1, Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-2-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-2-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-2-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-3.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Nguyễn Văn Nam
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Chuyên ảnh cưới
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                                    </div>
                                                    <div class="freelancer-item__rating">
                                                        <strong>4.6</strong>
                                                        <span>(120 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="freelancer-item__contact">
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">038 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">n*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Đà Nẵng</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-3-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-3-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-3-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-4.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Vũ Quốc Tuấn
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Chuyên ảnh sơ sinh
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="freelancer-item__rating">
                                                        <strong>5.0</strong>
                                                        <span>(108 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="freelancer-item__contact">
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">037 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">t*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Gò Vấp, Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-4-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-4-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-4-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-5.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Đỗ Hoàng Anh
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Make-up nghệ thuật
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                                    </div>
                                                    <div class="freelancer-item__rating">
                                                        <strong>4.5</strong>
                                                        <span>(125 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="freelancer-item__contact">
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">039 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">h*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Thanh Xuân, Hà Nội</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-5-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-5-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-5-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-6.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Hoàng Diệu Linh
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Make-up sự kiện
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                                    </div>
                                                    <div class="freelancer-item__rating">
                                                        <strong>4.6</strong>
                                                        <span>(93 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="freelancer-item__contact">
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">038 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">l*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Thủ Đức, Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-6-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-6-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-6-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                    <!-- <img src="./img/collection--4.png" alt="" id="artwork-img-4" class="freelancer-item__artwork-img" onclick="changeImage4()"> -->
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-7.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Lê Phương Mai
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Chuyên ảnh kỷ yếu
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="freelancer-item__rating">
                                                        <strong>4.8</strong>
                                                        <span>(190 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="freelancer-item__contact">
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">090 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">m*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Thủ Đức, Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-7-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-7-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-7-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-8.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Lê Hoàng Long
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Chuyên ảnh cổ phục
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="freelancer-item__rating">
                                                        <strong>5.0</strong>
                                                        <span>(219 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="freelancer-item__contact">
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">037 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">h*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Đống Đa, Hà Nội</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-8-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-8-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-8-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col l-4 m-6 c-12">
                                    <div class="freelancer-item">
                                        <a href="info-freelancer.php" class="freelancer-item-warp">
                                            <div class="freelancer-item__personal-info">
                                                <div class="freelancer-item__avatar">
                                                    <img src="./img/avatar-9.png" alt="Ảnh đại diện" class="freelancer-item__avatar-img">
                                                    <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                                </div>
                                                
                                                <div class="freelancer-item__info">
                                                    <span class="freelancer-item__title">
                                                        Ngô Thảo Trang
                                                    </span>
                                                    <span class="freelancer-item__text">
                                                        Nhiếp ảnh gia tự do
                                                    </span>
                                                    <div class="star-rating">
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-solid fa-star"></i>
                                                        <i class="star-rating--gold fa-regular fa-star-half-stroke"></i>
                                                    </div>
                                                    <div class="freelancer-item__rating">
                                                        <strong>4.4</strong>
                                                        <span>(97 đánh giá)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="freelancer-item__contact">
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-phone"></i>
                                                    <span class="freelancer-item__contact-text">090 **** ***</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-envelope"></i>
                                                    <span class="freelancer-item__contact-text">t*******@gmail.com</span>
                                                </div>
                                                <div class="freelancer-item__contact-info">
                                                    <i class="freelancer-item__contact-icon fa-solid fa-location-dot"></i>
                                                    <span class="freelancer-item__contact-text">Đà Lạt, Lâm Đồng</span>
                                                </div>
                                            </div>
                                            
                                            <div class="slide-show-artwork">
                                                <div class="freelancer-item__artwork-list">
                                                    <img src="./img/collection-9-1.png" alt="" id="artwork-img-1" class="freelancer-item__artwork-img" onclick="changeImage1()">
                                                    <img src="./img/collection-9-2.png" alt="" id="artwork-img-2" class="freelancer-item__artwork-img" onclick="changeImage2()">
                                                    <img src="./img/collection-9-3.png" alt="" id="artwork-img-3" class="freelancer-item__artwork-img" onclick="changeImage3()">
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="freelancer-item__view-details">
                                            <a href="#" class="freelancer-item__view-details-link">Xem thông tin chi tiết</a>
                                        </div> -->
                                    </div>
                                </div>
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
       
    <!-- <section>
        <div class="main">
            
            <div class="grid wide">
                <div class="main_img">
                    <video id="myVideo" autoplay >
                        <source src="./video/Cinematic Camera Intro.mp4" type="video/mp4">
                        Trình duyệt của bạn không hỗ trợ video HTML5.
                      </video>
                      <div class="buttom_voice">
                        <button onclick="adjustVolume(-0.1)">Giảm âm lượng</button>
                        <button onclick="adjustVolume(0.1)">Tăng âm lượng</button>
                    </div> 
                </div>
                
                <div class="main_mid row">
                    <div class="main_left col c-8 m-8 l-8">
                        <div class="main_left-img">
                            
                        </div>
                    </div>
                    <div class="main_right col c-4 m-4 l-4">

                    </div>
                </div>
                <div class="main_bottom">
                    <div class="main_bottom-container row">
                        <div class="main_bottom-onepic col c-6 m-6 l-6">
                            <img src="./video/a7db47168147165.Y3JvcCwxNjM4LDEyODEsMCw1Ng.webp" alt="">
                        </div>
                    
                        <div class="main_bottom-fourpic col c-6 m-6 l-6">
                            <div class="row">
                                <div class="fourpic_top col c-12 m-12 l-12">
                                    <div class="row">
                                        <div class="fourpic_top-left  c-6 m-6 l-6">
                                            <img src="./video/34730f178063661.Y3JvcCw0MjU5LDMzMzEsMCwxNTI4.webp" alt="">
                                        </div>
                                        <div class="fourpic_top-right  c-6 m-6 l-6">
                                            <img src="./video/e47c4f174127615.Y3JvcCw1MTEzLDQwMDAsNTA2LDA.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="fourpic_bottom col c-12 m-12 l-12">
                                    <div class="row">
                                        <div class="fourpic_bottom-left  c-6 m-6 l-6">
                                            <img src="./video/6e17cf173402337.Y3JvcCwzNjU2LDI4NTksMCwzMDc.webp" alt="">
                                        </div>
                                        <div class="fourpic_bottom-right  c-6 m-6 l-6">
                                            <img src="./video/04477d173387439.Y3JvcCwxOTIwLDE1MDEsMCw2ODk.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    
                        <div class="main_bottom-fourpic col c-6 m-6 l-6">
                            <div class="row">
                                <div class="fourpic_top col c-12 m-12 l-12">
                                    <div class="row">
                                        <div class="fourpic_top-left  c-6 m-6 l-6">
                                            <img src="./video/09d1df150846019.63391d434f020.webp" alt="">
                                        </div>
                                        <div class="fourpic_top-right  c-6 m-6 l-6">
                                            <img src="./video/bd1872176069037.Y3JvcCwxMDQzLDgxNiwxNzgsNDY.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="fourpic_bottom col c-12 m-12 l-12">
                                    <div class="row">
                                        <div class="fourpic_bottom-left  c-6 m-6 l-6">
                                            <img src="./video/3a2a81177378365.Y3JvcCwxMDgwLDg0NCwwLDI1MQ.webp" alt="">
                                        </div>
                                        <div class="fourpic_bottom-right  c-6 m-6 l-6">
                                            <img src="./video/153993129649549.Y3JvcCwzMDAwLDIzNDYsMCwzMDQ.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_bottom-onepic col c-6 m-6 l-6">
                            <img src="./video/7d8df8165681079.Y3JvcCwxMDgwLDg0NCwwLDExNw.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="product">
            <div class="grid wide">
                <div class="row">
                   
                        <div class="product_item col c-4 m-4 l-4">
                            <a href="">
                                <div class="product_item-container">
                                    <div class="product_item-img">
                                        <img src="./video/01-Simple-13-scaled.jpg" alt="">
                                    </div>
                                    <div class="product_item-name">
                                        SIMPLE
                                    </div>
                                    <div class="product_item-price">
                                        Giá : 6,800,000
                                    </div>
                                </div>
                            </a>
                        </div>
                   
                    
                        <div class="product_item col c-4 m-4 l-4">
                            <a href="">
                                <div class="product_item-container">
                                    <div class="product_item-img">
                                        <div>
                                            <img src="./video/02-classic-5-scaled.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="product_item-name">
                                        CLASSIC
                                    </div>
                                    <div class="product_item-price">
                                        
                                        Giá : 6,800,000
                                    </div>
                                </div>
                            </a>
                        </div>
                    
                   
                        <div class="product_item col c-4 m-4 l-4">
                            <a href="">
                                <div class="product_item-container">
                                    <div class="product_item-img">
                                        <img src="./video/03-silver-12-scaled.jpg" alt="">
                                    </div>
                                    <div class="product_item-name">
                                        SILVER
                                    </div>
                                    <div class="product_item-price">
                                        Giá : 6,800,000
                                    </div>
                                </div>
                            </a>
                        </div>
                    
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="banner">
            <div class="grid wide">
                
                    <div class="banner_img">
                        <div class="banner_img-container">
                            <div class="banner_img-img">
                                <a href=""><img src="./img/banner1.jpg" alt=""></a>
                                <a href=""><img src="./img/banner2.jpg" alt=""></a>
                                <a href=""><img src="./img/banner3.jpg" alt=""></a>
                                <a href=""><img src="./img/banner4.jpg" alt=""></a>
                                <a href=""><img src="./img/banner5.jpg" alt=""></a>
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
        <div class="forthe">
            <div class="grid wide">
                <div class="forthe_container">
                    <div class="forthe_items">
                        <div class="forthe_items-top">
                            For the items
                        </div>
                        <div class="forthe_items-bottom">
                            <div class="forthe_items-bottom--container row">
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/“Life’s a party with you” wedding decor.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/“Life’s a party with you” wedding decor.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/“Life’s a party with you” wedding decor.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/“Life’s a party with you” wedding decor.jpg" alt="">
                                </div>
                            </div>         
                        </div>
                    </div>
                    <div class="forthe_items">
                        <div class="forthe_items-top">
                            For the reception
                        </div>
                        <div class="forthe_items-bottom">
                            <div class="forthe_items-bottom--container row">
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/This City-Loving Couple Said _I Do_ in a Glam Gramercy Park Hotel Wedding in NYC _ Junebug Weddings.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/download.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/ONE WEDDING DA NANG.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/download (1).jpg" alt="">
                                </div>
                            </div>         
                        </div>
                    </div>
                    <div class="forthe_items">
                        <div class="forthe_items-top">
                            For the spotlight
                        </div>
                        <div class="forthe_items-bottom">
                            <div class="forthe_items-bottom--container row">
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/Nothing less than perfect.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/Knowing Your Territory_ Can You Make a Living Podcasting_.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/Exclusive Photos! Head Backstage for a Magical Pre-Show Peek at the Soaring Stars of Pippin.jpg" alt="">
                                </div>
                                <div class="forthe_items-bottom-img col c-3 m-3 l-3">
                                    <img src="./img/download (2).jpg" alt="">
                                </div>
                            </div>         
                        </div>
                    </div>
                    <div class="forthe_items">
                        <div class="forthe_items-top">
                        Photographers capture beautiful moments and turn them into art through their camera lenses, while Make-up Artists transform faces into vibrant canvases using colors and techniques. Both professions not only enhance the beauty of individuals but also create unique artistic works that boost confidence and self-expression. Together, they play a crucial role in making people feel special and capturing the world from a perspective of beauty and art.
                        </div>
                        <div class="forthe_items-bottom">
                            <video id="mVideo" autoplay >
                                <source src="./video/videomakeup.mp4" type="video/mp4">
                                Trình duyệt của bạn không hỗ trợ video HTML5.
                            </video>
                        <div class="buttom_voice">
                        
                    </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        include "footer.php"
    ?>