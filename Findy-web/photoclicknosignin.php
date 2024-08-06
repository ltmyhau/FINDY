<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./photoclicknosignin.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY</title>
</head>
<body>

    
<header class="header">
            <div class="top">

            </div>
            <div class="grid wide">

                <!-- Navbar -->
                <nav class="navbar">
                    <div class="navbar__logo">
                        <a href="" class="navbar__logo-link">
                            <img src="./img/findy-logo-1.jpg" alt="Findy" class="navbar__logo-img">
                        </a>
                    </div>
                    <div class="navbar__heading">
                        <a href="./find-freelancer.php" class="navbar__heading-link">Thuê Thợ</a>
                    </div>
                    <div class="navbar__heading">
                        <a href="" class="navbar__heading-link">Tìm việc</a>
                    </div>
                    <div class="navbar__heading">
                        <a href="./post-job.php" class="navbar__heading-link">Tạo hồ sơ</a>
                    </div>
                    <div class="navbar__heading">
                        <a href="#"  onclick="showLoginForm()" class="navbar__heading-link">Blog</a>
                    </div>
                    <div class="navbar__heading">
                        <a href="#" onclick="showRegisterForm()" class="navbar__heading-link">Đăng ký</a>
                    </div>
                    <div class="navbar__heading">
                        <a href="#" onclick="showLoginForm()" class="navbar__heading-link">Đăng nhập</a>
                    </div>
                   
                    
                </nav>
            </div>
        </header>
    
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
    <?php
// Kiểm tra xem có dữ liệu được truyền qua URL hay không
if (isset($_GET['img']) && isset($_GET['giaCa']) && isset($_GET['ngay']) && isset($_GET['diaChi']) && isset($_GET['tenCongViec'])&& isset($_GET['moTa'])&& isset($_GET['congCu'])) {
    $img = $_GET['img'];
    $giaCa = $_GET['giaCa'];
    $diaChi = $_GET['diaChi'];
    $tenCongViec = $_GET['tenCongViec'];
    $moTa = $_GET['moTa'];
    $congCu = $_GET['congCu'];
    $ngay = $_GET['ngay'];
    // Hiển thị thông tin chi tiết
    
} else {
    echo 'Không có thông tin chi tiết.';
}
?>
   <section>
        <div class="photoclick">
            <div class="grid wide">
                <div class="photoclick_container row">
                        <div class="photoclick_left col c-9 m-9 l-9">
                            <div class="content1">
                                <div class="photoclick_left--name">
                                    <?php echo $tenCongViec ?>
                                </div>
                                <div class="photoclick_left-price">
                                    <i class="fa-brands fa-bitcoin"></i><span><?php echo $giaCa ?></span>
                                </div>
                                <div class="photoclick_left-button">
                                    <button onclick="showLoginForm()" type="button">Ứng tuyển</button>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="photoclick_left-address">
                                <i class="fa-solid fa-location-dot"></i> <span> <?php echo $diaChi ?></span>
                                </div>
                                <div class="photoclick_left-date">
                                <i class="fa-solid fa-calendar-days"></i><span> <?php echo $ngay  ?></span>
                                </div>
                                <div class="photoclick_left-style">
                                    <i class="fa-solid fa-person-dress"></i><span>Chụp cá nhân</span>
                                </div>
                                <div class="photoclick_left-tool">
                                <i class="fa-solid fa-toolbox"></i><span><?php echo $congCu ?></span>
                                </div>
                                <div class="photoclick_left-radio">
                                <i class="fa-regular fa-square-check"></i><span>Cần hỗ trợ makeup</span>
                                </div>
                                <div class="photoclick_left-dadang">
                                <i class="fa-solid fa-clock"></i><span>Đã đăng 30p trước</span>
                                </div>
                            </div>
                            <div class="picture">
                                Ảnh mẫu
                                <div class="picture_img">
                                    <div class="row">
                                        <div class="picture_img-items c-4 m-4 l-4">
                                            <img src="./img/avatar7.jpg" alt="">
                                        </div>
                                        <div class="picture_img-items c-4 m-4 l-4">
                                            <img src="./img/download (4).jpg" alt="">
                                        </div>
                                        <div class="picture_img-items c-4 m-4 l-4">
                                            <img src="./img/Colors of Hoi An, Vietnam.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="photoclick_right col c-3 m-3 l-3">
                            <div class="photoclick_right-avatar">
                                <div class="row">
                                    <div class="photoclick_right-avatar-img c-2 m-2 l-2">
                                        <img src="<?php echo $img ?>" alt="">
                                    </div>
                                    <div class="photoclick_right-avatar-name c-10 m-10 l-10">
                                        Thanh Thảo
                                    </div>
                                </div>
                            </div>
                            <div class="photoclick_right-phone">
                                <i class="fa-solid fa-phone"></i> <span>9939394****</span>
                            </div>
                            <div class="photoclick_right-email">
                                <i class="fa-solid fa-envelope"></i><span>ngotnuys****@gmail.com</span>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>
   </section>
    

   
    
    <section>
        <div class="footer">
            <div class="grid wide">
                <div class="footer_container row">
                    <div class="footer_logo col c-2 m-2 l-2">
                        <div class="footer_logo-logo">
                            <img src="./assets/img/381365316_305905915351952_8433167268195273607_n.png" alt="">
                            FINDY
                        </div>
                        <div class="footer_logo-english">
                            <i class="fa-solid fa-earth-asia"></i>
                            <a href="">VietNam</a>/ <a href="">Tiếng Việt</a>
                        </div>
                        <div class="footer_logo-help">
                            <i class="fa-solid fa-circle-question"></i>
                            Giúp đỡ & Hỗ trợ
                        </div>
                        <div class="footer_logo-accessibility">
                            <i class="fa-solid fa-universal-access"></i>
                            Trợ năng
                        </div>
                    </div>
                    <div class="footer_findy col c-2 m-2 l-2">
                        <h1>Findy</h1>
                        <ul>
                            <a href=""><li>Dự án</li></a>
                            <a href=""><li>Cuộc thi</li></a>
                            <a href=""><li>Thành viên</li></a>
                            <a href=""><li>Quản lý dự án</li></a>
                            <a href=""><li>Hình ảnh khắp nơi</li></a>
                            <a href=""><li>Xác thực</li></a>
                        </ul>

                    </div>
                    <div class="footer_introduce col c-2 m-2 l-2">
                        <h1>Giới thiệu</h1>
                        <ul>
                            <a href=""><li>Về chúng tôi</li></a>
                            <a href=""><li>Cách thức hoạt động</li></a>
                            <a href=""><li>Bảo mật</li></a>
                            <a href=""><li>Nhà đầu tư</li></a>
                            <a href=""><li>Sơ đồ trang</li></a>
                            <a href=""><li>Tin tức</li></a>
                            <a href=""><li>Đội ngũ</li></a>
                            <a href=""><li>Công việc</li></a>
                        </ul>
                    </div>
                    <div class="footer_rules col c-2 m-2 l-2">
                        <h1>Điều khoản</h1>
                        <ul>
                            <a href=""><li>Chính sách bảo mật</li></a>
                            <a href=""><li>Điều khoản và điều kiện</li></a>
                            <a href=""><li>Chính sách bản quyền</li></a>
                            <a href=""><li>Quy tắc ứng xử</li></a>
                            <a href=""><li>Các loại phí</li></a>
                        </ul>
                    </div>
                    <div class="footer_bussiness col c-2 m-2 l-2">
                        <h1>Đối tác</h1>
                        <ul>
                            <a href=""><li>Escrow.com</li></a>
                            <a href=""><li>Loadshift</li></a>
                            <a href=""><li>Warrior Forum</li></a>
                        </ul>
                    </div>
                    <div class="footer_app col c-2 m-2 l-2">
                        <h1>Ứng dụng</h1>
                        <ul>
                            <a href=""><li><img src="./assets/img/app-store.svg" alt=""></li></a>
                            <a href=""><li><img src="./assets/img/google-play.svg" alt=""></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- <script src="https://maps.app.goo.gl/3ooNCCMS91rFeVE88" async defer></script>
    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
                
            });
            console.log(zoom);
        }
    </script> -->

    <div class="modal">
        <div class="modal__container">
            <!-- Register form -->
            <?php
                include "connect.php";
            ?>
            <?php
                $connect = new connect;
                if($_SERVER['REQUEST_METHOD']==='POST'){
                $insert_register = $connect -> insert_register();
                }
            ?>
            <form class="account_form hidden" id="register-form" method="POST">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng ký</h3>

                    <div class="account_form__form">
                        <input name="hoTen"  type="text" class="account_form__input" placeholder="Họ và tên">
                        <input name="Email" type="email" class="account_form__input" placeholder="Email">
                        <input name="matKhau" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                        <input name="repeatmatKhau" type="password" class="account_form__input" placeholder="Nhập lại mật khẩu">
                    </div>

                    <div class="account_form__aside">
                        <p class="account_form__policy-text">
                            Tôi đã đọc và đồng ý với
                            <a href="" class="account_form__policy-link">Điều khoản dịch vụ Findy</a>,
                            bao gồm
                            <a href="" class="account_form__policy-link">Thỏa thuận người dùng</a>
                            và
                            <a href="" class="account_form__policy-link">Chính sách bảo mật</a>.
                        </p>
                    </div>

                    <button type="submit" class="btn btn--primary account_form__btn">Đăng ký</button>
                </div>

                <div class="account_form__socials">
                    <p class="account_form__separate">
                        <span class="account_form__separate-text">Hoặc</span>
                    </p>

                    <div class="account_form__socials-list">
                        <a href="" class="btn account_form__socials--facebook">
                            <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                            <span class="account_form__socials-title">
                                Facebook
                            </span>
                        </a>
                        <a href="" class="btn account_form__socials--google">
                            <span class="account_form__socials-icon">
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g data-v-48748210=""><path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path> <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path> <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path> <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path> <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path></g></svg>
                            </span>
                            <span class="account_form__socials-title">
                                Google
                            </span>
                        </a>
                    </div>
                </div>

                <div class="account_form__footer">
                    <!-- <p class="account_form__separate">
                        <span class="account_form__separate-text">Bạn đã có tài khoản Findy?</span>
                    </p>
                    <button class="btn account_form__footer-btn">Đăng nhập</button> -->

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
                    </p>
                </div>
            </form>

            <!-- Login form -->
            
            <form class="account_form hidden" id="login-form" method = "POST" action = "login_process.php">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng nhập</h3>

                    <div class="account_form__form">
                        <input name="Emailuser"  type="email" class="account_form__input" placeholder="Email">
                        <input name="Passworduser" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    </div>

                    <button type="submit" class="btn btn--primary account_form__btn">Đăng nhập</button>
                </div>

                <div class="account_form__socials">
                    <p class="account_form__separate">
                        <span class="account_form__separate-text">Hoặc</span>
                    </p>

                    <div class="account_form__socials-list">
                        <a href="" class="btn account_form__socials--facebook">
                            <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                            <span class="account_form__socials-title">
                                Facebook
                            </span>
                        </a>
                        <a href="" class="btn account_form__socials--google">
                            <span class="account_form__socials-icon">
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g data-v-48748210=""><path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path> <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path> <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path> <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path> <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path></g></svg>
                            </span>
                            <span class="account_form__socials-title">
                                Google
                            </span>
                        </a>
                    </div>
                </div>

                <div class="account_form__footer">
                    <!-- <p class="account_form__separate">
                        <span class="account_form__separate-text">Bạn đã có tài khoản Findy?</span>
                    </p>
                    <button class="btn account_form__footer-btn">Đăng nhập</button> -->

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showRegisterForm()">Đăng ký</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./main.js"></script>
    <script src="./video.js"></script>
    
</body>
</html>