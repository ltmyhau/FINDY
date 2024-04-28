<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./acceptorder.css">
    <link rel="stylesheet" href="./mainicon.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY</title>
</head>
<body>

<!-- jakhsfjkh -->
<!-- -----------chatbox------------ -->
<?php
    include "id_tho.php";
?>

        

    <?php
        include "headerphoto1.php";
    ?>
        
        
    <?php
    
$id_tho = $_SESSION['id_tho'];
$hoTen = $_SESSION['hoTen'];
$gmail = $_SESSION['gmail'];

// Kiểm tra xem có dữ liệu được truyền qua URL hay không
    // Retrieve the values from the query parameters
    $hoTenthue = $_GET['hoTenthue'];
    $diachi = $_GET['diachi'];
    $thoiGian = $_GET['thoigian'];
    $gia = $_GET['gia'];
    $phongcach = $_GET['phongcach'];
    $motachitiet = $_GET['motachitiet'];
    $ma_posttructiep = $_GET['ma_posttructiep'];
    $tenposttimtho = $_GET['tenposttimtho'];
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
    $hoTen = "";
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
    // Hiển thị thông tin chi tiết
    
echo "ID của Thợ: " . $id_tho;
echo "ID của Thợ: " . $mathongtintho;
?>
    <section>
        <div class="acceptoder">
            <div class="grid wide">
                <div class="acceptoder_header c-12 m-12 l-12">
                    DANH SÁCH YÊU CẦU TỪ KHÁCH HÀNG
                    <p>Mã request: <?php echo $ma_posttructiep ?></p>
                </div>
                <div class="acceptoder_container">
                    <div class="acceptoder_left">
                        <div class="acceptoder_left-infor">
                            Thông tin đơn hàng
                        </div>
                        <div class="acceptoder_left-items">
                            <div class="acceptoder_left-items-name">
                                <span>Họ và tên khách hàng: </span> <span><?php echo $hoTenthue ?></span> 
                            </div>
                            <div class="acceptoder_left-items-address">
                                <span>Địa điểm: </span><span><?php echo $diachi ?></span>
                            </div>
                            <div class="acceptoder_left-items-form">
                                <span>Hình thức: </span><span><?php echo $phongcach ?></span>
                            </div>
                            <div class="acceptoder_left-items-date">
                                <span>Ngày diễn ra: </span><span><?php echo $thoiGian ?></span>
                            </div>
                            <div class="acceptoder_left-items-price">
                                <span>Giá: </span><span><?php echo $gia ?></span><span>đ</span>
                            </div>
                            <div class="acceptoder_left-items-style">
                                <span>Mô tả: </span><span><?php echo $motachitiet ?>  </span>
                            </div>
                            

                        </div>
                        <div class="acceptoder_left-price">
                            <p>DỊCH VỤ CUNG CẤP</p>
                            <div class="photomain">
                                <div class="acceptoder_left-price-service">
                                    <?php echo $tenposttimtho  ?>
                                </div>
                                <div class="acceptoder_left-price-style">
                                    <?php echo $gia ?>
                                </div>
                            </div>
                            <div class="makeupmain">
                                <div class="acceptoder_left-price-service">
                                    Make-up
                                </div>
                                <div class="acceptoder_left-price-style">
                                    0
                                </div>
                            </div>
                            <div class="sum" style="display: flex;justify-content: space-between;" >
                                <div class="acceptoder_left-price-sum-text">
                                    Tổng giá trị
                                </div>
                                <div class="acceptoder_left-price-sum">
                                <?php echo $gia ?>
                                </div>
                            </div>
                            <div class="acceptoder_left-items-button">
                                <div class="input_accept" style="display: none;">
                                <input type="text" name="" id="" value="<?php echo $ma_posttructiep ?>">
                                <input type="text" name="" id="" value="<?php echo $mathongtintho ?>">
                                </div>
                                <?php 
                                    include "connect.php";
                                ?>
                                <?php
                                    $connect = new connect;
                                    if($_SERVER['REQUEST_METHOD'] === 'POST'){
                                    $insert_thanhtoancoctt = $connect-> insert_thanhtoancoctt();
                                    }
                                ?>
                                <form action="" method="POST">
                                    <div class="input_qlytructiep" style="display: none;">
                                                    <input type="text" name="maposttt" id="" value="<?php echo $ma_posttructiep ?>">
                                                    <input type="text" name="mathongtinthott" id="" value="<?php echo $mathongtintho  ?>">
                                    </div>
                                <button class="btn--primary btn" type="submit">Tạo đơn hàng</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="acceptoder_right">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="chat-box">
                <label for="chat-box-checkbox">
                    <i class="chat-box-icon fa-regular fa-comment-dots fa-flip-horizontal"></i>
                </label>
                <input type="checkbox" hidden id="chat-box-checkbox" class="chat-box__checkbox">

                <div class="chat-box__container">
                    <div class="chat-box__header">
                        <span class="chat-box__heading">Chat</span>
                        <label for="chat-box-checkbox">
                            <i class="chat-box__control-icon fa-solid fa-chevron-down"></i>
                        </label>
                    </div>

                    <div class="chat-box__body">
                        <div class="row">
                            <div class="col l-4 m-4 c-0">
                                <div class="conversation">
                                    <div class="conversation-item conversation-item--select">
                                        <img src="./img/avatar-1.png" alt="" class="conversation-item__avatar-img">
                                        <div class="conversation-item__info">
                                            <p class="conversation-item__name">Trần Minh Khánh</p>
                                            <p class="conversation-item__date">08/10/2023</p>
                                            <p class="conversation-item__message">
                                                Xin chào! Tôi có ứng tuyển vào bài đăng của bạn.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="conversation-item">
                                        <img src="./img/avatar-2.png" alt="" class="conversation-item__avatar-img">
                                        <div class="conversation-item__info">
                                            <p class="conversation-item__name">Trương Thị Thu Thảo</p>
                                            <p class="conversation-item__date">08/10/2023</p>
                                            <p class="conversation-item__message">
                                                Xin chào! Tôi có ứng tuyển vào bài đăng của bạn.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="conversation-item">
                                        <img src="./img/avatar-6.png" alt="" class="conversation-item__avatar-img">
                                        <div class="conversation-item__info">
                                            <p class="conversation-item__name">Hoàng Thị Diệu Linh</p>
                                            <p class="conversation-item__date">08/10/2023</p>
                                            <p class="conversation-item__message">
                                                Xin chào! Tôi có ứng tuyển vào bài đăng của bạn.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="conversation-item">
                                        <img src="./img/avatar-3.png" alt="" class="conversation-item__avatar-img">
                                        <div class="conversation-item__info">
                                            <p class="conversation-item__name">Nguyễn Văn Nam</p>
                                            <p class="conversation-item__date">08/10/2023</p>
                                            <p class="conversation-item__message">
                                                Xin chào! Tôi có ứng tuyển vào bài đăng của bạn.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col l-8 m-8 c-12">
                                <div class="message">
                                    <div class="message__header">
                                        <img src="./img/avatar-1.png" alt="" class="message__avatar-img">
                                        <span class="message__name">Trần Minh Khánh</span>
                                    </div>
                                    <div class="message__detail">

                                    </div>
                                </div>
                            </div>
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
            
            <form class="account_form hidden" id="login-form" method = "POST" action = "mainphoto.php">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng nhập</h3>

                    <div class="account_form__form">
                        <input name="Emailuser"  type="email" class="account_form__input" placeholder="Email">
                        <input name="Passworduser" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    </div>

                    <button tyle="submit" class="btn btn--primary account_form__btn">Đăng nhập</button>
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
    
    <script src="./main.js"></script>
</body>
</html>