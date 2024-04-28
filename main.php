<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">
    
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./find-timtho.css">
    <link rel="stylesheet" href="./post-management.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>

<body>
    <?php
    include "header.php"
    ?>

    <section>
        <div class="videomain">
            <div class="videomain_video">
                <video id="myVideo" autoplay>
                    <source src="./video/Cinematic Camera Intro.mp4" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ video HTML5.
                </video>
                <div class="grid wide">
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
                        <div class="videomain_text--button">
                            <button onclick="showLoginForm()" type="button">Thuê photographer & Make-up Artist</button>
                            <button onclick="showLoginForm()" type="button">Kiếm tiền từ photographer & Make-up Artis</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="post">
            <div class="grid wide">
                <div class="heading">Bài đăng gần đây</div>
                <div id="postModal" style="display: none;">
                    <form id="postForm">
                        <label for="postTitle">Tiêu đề bài đăng:</label>
                        <input type="text" id="postTitle" name="postTitle" required><br>

                        <label for="postContent">Nội dung bài đăng:</label>
                        <textarea id="postContent" name="postContent" required></textarea>

                        <button type="add-post-btn" onclick="addNewPost()">Đăng bài</button>
                        <button type="button" onclick="closePostModal()">Đóng</button>
                    </form>
                </div>
                <div class="grid-container" id="gridContainer">
                    <?php
                    include "connect.php";
                    $connect = new connect;
                    $select_post = $connect->select_post();
                    $count_post = $connect->count_post();
                    if ($select_post->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($select_post)) {
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
                            $id_tho = urlencode($row['user_id']);
                            echo
                            "<div class='grid-item'>
                        <div class='dim' onclick='closePopup()'></div>
                        <div class='popup-container' id='popup'>
                        </div>
                        <a class='darken' onclick='openPopup()' data-id=$postid>
                            <div class='post-img' style='background-image: url(./img/$hinhanh);'></div>
                            <div class='overlay'>$posttitle</div>
                        <a />
                            <div class='post-title'> $posttitle </div>
                            <div class='post-meta'>
                                <div class='user-info'>
                                    <a style='padding-right:10px' href='info_freelancer_no_login.php?name=$ten&job=$nghenghiep&rating=4.9&reviews=$gioithieu&sdt=$sdt&email=$email&address=$diachi&idtho=$id_tho'>
                                        <img id='avatar' src='./img/$hinhanhtho'>
                                    </a>
                                    <a class='user-name' href='info_freelancer_no_login.php?name=$ten&job=$nghenghiep&rating=4.9&reviews=$gioithieu&sdt=$sdt&email=$email&address=$diachi&idtho=$id_tho'><span class='user-name'> $nguoidang </span></a>
                                </div>
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
    </section>

    <div class="find-timtho-container">
        <div class="grid wide">
            <div class="row find-timtho-content">
                <div class="freelancer">
                    <div class="heading">Photographer & Make-up Artist tốt nhất</div>
                    <div class="row freelancer-container">
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-1.png);"></div>
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
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-1-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-1-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-1-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-2.png);"></div>
                                            <p class="freelancer-item__avatar-text">Uy tín: 100</p>
                                        </div>

                                        <div class="freelancer-item__info">
                                            <span class="freelancer-item__title">
                                                Trần Thu Trang
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
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-2-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-2-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-2-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-3.png);"></div>
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
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-3-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-3-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-3-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-4.png);"></div>
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
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-4-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-4-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-4-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-5.png);"></div>
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
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-5-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-5-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-5-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-6.png);"></div>
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
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-6-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-6-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-6-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-7.png);"></div>
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
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-7-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-7-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-7-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-4 c-12">
                            <div class="freelancer-item">
                                <a href="info-freelancer.php" class="freelancer-item-warp">
                                    <div class="freelancer-item__personal-info">
                                        <div class="freelancer-item__avatar">
                                            <div class="freelancer-item__avatar-img" style="background-image: url(./img/avatar-8.png);"></div>
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
                                            <div class="freelancer-item__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                            <div class="freelancer-item__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="post-container">
        <div class="grid wide">
            <div class="content">
                <div class="vieclam">
                    <div class="heading">Việc làm tốt mọi nơi</div>
                    <div class="row vieclam-container">
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="vieclam-content">
                                    <h3 class="post-content__title">Chụp ảnh kỷ niệm gia đình</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Thanh Khải</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            2 ngày trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">1.000.000 - 1.500.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 02 ngày 03 giờ</span>
                                    </div>
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/concept-2-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/concept-2-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/concept-2-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="vieclam-content">
                                    <h3 class="post-content__title">Chụp ảnh kỷ yếu</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Minh Hải</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            23 giờ trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">2.000.000 - 2.500.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 06 ngày 01 giờ</span>
                                    </div>
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-7-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-7-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-7-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="vieclam-content">
                                    <h3 class="post-content__title">Chụp ảnh việt phục</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Phạm Thanh</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            16 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">500.000 - 7.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 01 ngày 06 giờ</span>
                                    </div>
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-8-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-8-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-8-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="vieclam-content">
                                    <h3 class="post-content__title">Makeup đi dự tiệc</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Nguyễn Thanh Thảo</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            01 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">200.000 - 500.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 01 ngày 10 giờ</span>
                                    </div>
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/collection-6-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/collection-6-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/collection-6-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="vieclam-content">
                                    <h3 class="post-content__title">Chụp ảnh sinh nhật</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Nhã Nam</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            13 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">500.000 - 8.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 06 ngày 13 giờ</span>
                                    </div>
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/concept-3-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/concept-3-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/concept-3-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="./photoclick.php" class="post-content-warp">
                                <div class="vieclam-content">
                                    <h3 class="post-content__title">Chụp ảnh tết</h3>
                                    <div class="post-content__author">
                                        <span class="post-content__name">Thanh Ngọc</span>
                                        <span class="post-content__time">
                                            <i class="post-content__time-icon fa-regular fa-clock"></i>
                                            10 phút trước
                                        </span>
                                    </div>
                                    <div class="post-content__description">
                                        <span class="post-content__price">700.000 - 1.000.000</span>
                                        <span class="post-content__deadline">Hạn ứng tuyển: 01 ngày 09 giờ</span>
                                    </div>
                                </div>
                                <div class="slide-show-artwork">
                                    <div class="post-content__artwork-list">
                                        <div class="post-content__artwork-img" id="artwork-img-1" style="background-image: url(./img/concept-6-1.png);" onclick="changeImage1()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-2" style="background-image: url(./img/concept-6-2.png);" onclick="changeImage2()"></div>
                                        <div class="post-content__artwork-img" id="artwork-img-3" style="background-image: url(./img/concept-6-3.png);" onclick="changeImage3()"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="forthe">
        <video id="mVideo" autoplay>
            <source src="./video/videomakeup.mp4" type="video/mp4">
            Trình duyệt của bạn không hỗ trợ video HTML5.
        </video>
    </div>
    <?php
    include "footer.php";
    ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./main.js"></script>
    <script src="./video.js"></script>
</body>