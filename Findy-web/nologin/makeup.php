<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/381365316_305905915351952_8433167268195273607_n.png" sizes="16x16">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./makeup.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY</title>
</head>
<body>
<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['id'])) {
    header('Location: main.php'); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
    exit();
}

// Lấy thông tin người dùng từ session
$id = $_SESSION['id'];
$username = $_SESSION['username'];

// Hiển thị thông tin người dùng

?> 
    <?php
        include "iconchatbox.php";
    ?>
    <section>
        <div class="tabbar">
            <div class="top">
                <div class="top_container">
                    Thông báo gì đó :......................
                </div>
            </div>
            <div class="grid wide">
                <div class="d">
                    <div class="tabbar_container row">
                        <!-- logo của menu -->
                        <div class="tabbar_logo col c-2 m-2 l-2 ">
                            <div class="tabbar_logo-container ">
                                <div class="tabbar_logo-img c-6 m-6 l-6">
                                    <a href=""><img src="./video/381365316_305905915351952_8433167268195273607_n.png" alt=""></a>
                                </div>
                                <div class="tabbar_logo-title c-6 m-6 l-6">
                                    <button onclick="switchLanguage()">EN</button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tabbar_title1  col c-2 m-2 l-2 ">
                            <div>
                                <a href="./photographer.php">
                                    <p class="content" id="contentVi">Việc làm photographer</p>
                                    <p class="content" id="contentEn" style="display: none;">Hire a photographer</p>

                                </a>
                                <div class="tabbar_title1-photographer">
                                    <div class="grid wide">
                                        <div class="photographer_container row">
                                            <div class="photographer-left col c-4 m-4 l-4">
                                                <div  class="photographer-left-item1">
                                                    <a href="" >
                                                        <div class="photographer-left-text">
                                                            Tìm & Đăng tin
                                                        </div>
                                                        <div class="photographer-left-describe">
                                                            Findy - Nơi hội tụ các photographer chuyên nghiệp nhất
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="photographer-left-item2">
                                                    <a href="">
                                                        <div class="photographer-left-text">
                                                            Tìm gói dịch vụ
                                                        </div>
                                                        <div class="photographer-left-describe">
                                                            Kết nối làm việc với chuyên gia trong nhiều lĩnh vực
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="photographer-left-item3">
                                                    <a href="">
                                                        <div class="photographer-left-text">
                                                            Findy for bussiness
                                                        </div>
                                                        <div class="photographer-left-describe">
                                                            Mang tới giải pháp lâu dài bền vững
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="photographer-right col c-8 m-8 l-8 ">
                                                <div class="photographer-right-item1 hidden">
                                                    
                                                </div>
                                                <div class="photographer-right-item2 hidden">
                                                    afsefewfwf
                                                </div>
                                                <div class="photographer-right-item3 hidden">
                                                    sdfssegresgreg
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabbar_title2 col c-2 m-2 l-2 ">
                            <div>
                                <a href="">
                                    <p class="content" id="contentVi2">Việc làm Make-up Artist</p>
                                    <p class="content" id="contentEn2" style="display: none;">Hire a Make-up Artist</p>
                                </a>
                            </div>
                        </div>
                        <div class="tabbar_title3  col c-2 m-2 l-2 ">
                            <div>
                                <a href="./everyone.php">
                                    <p class="content" id="timkiem">Tìm kiếm mọi người</p>
                                    <p class="content" id="searcheveryone" style="display: none;">Search for everyone</p>
                                </a>
                            </div>
                        </div>
                        
                        <!--phần  input với kính lúp -->
                        <div class="tabbar_input  col c-2 m-2 l-2 ">
                            <div class="tabbar_input-container ">
                                <div class="tabbar_input-input c-6 m-6 l-10">
                                    <input type="text" class="content" id="input" placeholder="Tìm kiếm gì đó...">
                                    <input type="text" class="content" id="inputen" style="display: none;" placeholder="Search for something...">
                                </div>
                                <div class="tabbar_input-look c-6 m-6 l-2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <!-- user -->
                        



                        <div class="tabbar_user col c-2 m-2 l-2 ">
                       

                            <div class="tabbar_title3 c-6 m-6 l-6 ">
                                <a href="mainphoto.php"><p><?php echo $username ?></p></a>
                                <div class="tabbar_title3-hover">
                                    
                                    <div class="tabbar_title3-hover-container ">
                                        
                                        <div class="infor_user row">
                                            <div class="tabbar_title3-hover--avatar col c-2 m-2 l-2">
                                                <img src="./video/6478923415f073340ea91470_makeup.png" alt="">
                                            </div>
                                            <div class="tabbar_title3-hover--infor">
                                                
                                                <div class="title3--infor-produce col c-10 m-10 l-10">
                                                    <div name="Ten" class="tabbar_title3-hover--inforiname">
                                                        <?php echo $username ?>
                                                    </div>
                                                    <div name="register" class="tabbar_title3-hover--infor-ma">
                                                        Mã ứng viên: <?php echo $id ?>
                                                    </div>
                                                    <div name="mail" class="tabbar_title3-hover--infor-email">
                                                     tuankiet@gmail.com
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabbar_title3-hover--button">
                                       
                                        
                                            <div >
                                                <a href="settinginfor.php">
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-regular fa-clipboard c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Cài đặt thông tin cá nhân</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                        
                                        
                                            <div>
                                                <a href="">
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-regular fa-circle-up c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Nâng cấp tài khoản VIP</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="">
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-solid fa-gift c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Đăng tin tìm khách hàng</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="">
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-solid fa-gift c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Kích hoạt quà tặng</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="">
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-solid fa-gear c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Cài đặt gợi ý việc làm</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="./profilephoto.php">
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-regular fa-clipboard c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Đăng tin profile</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                        </div>
                                      </div>
                                   
                                </div>
                            </div>

                            <div class="tabbar_title3 c-6 m-6 l-6 ">
                                <div>
                                    <a href="main.php" onclick="">
                                        <p class="content" id="logoutVi">Đăng xuất</p>
                                        <p class="content" id="logoutEn" style="display: none;">Log out</p>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="banner">
            <div class="grid wide">
                    <!-- <div class="banner-header">
                        <span>
                            <p class="content" id="24hVi">Tìm việc làm nhanh 24h, việc làm mới nhất trên toàn quốc.</p>
                            <p class="content" id="24hEn" style="display: none;">Find fast job opportunities 24/7, the latest jobs nationwide.</p>

                            
                        </span>
                            <p class="content" id="24hVi">Tiếp cận 40,000+ tin tuyển dụng việc làm mỗi ngày từ hàng nghìn doanh nghiệp uy tín tại Việt Nam</p>
                            <p class="content" id="24hEn" style="display: none;">Easily access over 40,000+ job vacancies every day from thousands of reputable businesses in Vietnam.</p>
                    </div> -->
                    
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
    </section>

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
        <div class="jobbest">
            <div class="grid wide">
                <div class="jobbest_container">
                    <div class="jobbest-header">
                        <div class="jobbest-header--top">
                        Việc làm Make-up Artist tốt nhất
                        </div>
                        <div class="jobbest-header--bottom">
                            <div class="jobbest-header--bottom_filter">
                                <input type="text" name="" id="" placeholder="Lọc theo">
                            </div>
                            <div class="jobbest-header--bottom-button">
                                Ngẫu nhiên
                            </div>
                            <div class="jobbest-header--bottom-button">
                                Hà Nội
                            </div>
                            <div class="jobbest-header--bottom-button">
                                Thành phố Hồ Chí Minh
                            </div>
                            <div class="jobbest-header--bottom-button">
                                Miền Bắc
                            </div>
                            <div class="jobbest-header--bottom-button">
                                Miền Nam
                            </div>
                        </div>
                    </div>
                    <div class="jobbest-mid">
                        <div class="row">
                        <?php
                        include "connect.php"
                    ?>
                    <?php
                            $connect = new connect;        
                            $select_usermakeupup = $connect ->select_usermakeupup();
                        ?>
                    <div class="jobbest-mid">
                        <div class="row">
                                 <?php
                                    if($select_usermakeupup){
                                        while($result = $select_usermakeupup->fetch_assoc()){
                                            $imguserphoto_up = "/FINDYDEMO/assets/php/img/". $result['hinhAnh'];
                                        
                                ?>
                            <a href="" class="col c-4 m-4 l-4">
                                <div class="jobbest-items ">
                                    <div class="jobbest-mid-top">
                                        <div class="row">
                                            <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                <img src="<?php echo $imguserphoto_up ?>" alt="">
                                            </div>
                                            <div class="jobbest-mid-top--right col c-10 m-10 l-10" >
                                                <?php echo $result['tenCongViec']  ?>
                                                <p>Công ty trách nhiệm hữu hạng</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobbest-mid-bottom">
                                        <div class="jobbest-mid-bottom-item">
                                            <?php echo $result['giaCa'] ?>
                                        </div>
                                        <div class="jobbest-mid-bottom-item">
                                            Hồ Chí Minh
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                                    }
                                }
                                ?>   
                           
                        </div>
                    </div>
                    <div class="jobbest-bottom">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span style="color:#00b14f">31</span> / <span>37 trang</span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bannermid">
            <div class="grid wide">
                <div class="bannermid_container row">
                    <div class="bannermid_items col c-4 m-4 l-4">
                        <img src="./img/Free PSD _ Make-up concept banner template.jpg" alt="">
                    </div>
                    <div class="bannermid_items col c-4 m-4 l-4">
                        <img src="./img/Free PSD _ Make-up concept landing page template.jpg" alt="">
                    </div>
                    <div class="bannermid_items col c-4 m-4 l-4">
                        <img src="./img/Ecommerce Landing Page.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="jobinteresting">
            <div class="grid wide">
                <div class="jobinteresting_container row">
                    <div class="jobinteresting_left col c-8 m-8 l-8">
                        <div class="jobbest-header">
                            <div class="jobbest-header--top">
                            Việc làm tốt nhất
                            </div>
                            <div class="jobbest-header--bottom">
                                <div class="jobbest-header--bottom_filter">
                                    <input type="text" name="" id="" placeholder="Lọc theo">
                                </div>
                                <div class="jobbest-header--bottom-button">
                                    Ngẫu nhiên
                                </div>
                                <div class="jobbest-header--bottom-button">
                                    Hà Nội
                                </div>
                                <div class="jobbest-header--bottom-button">
                                    Thành phố Hồ Chí Minh
                                </div>
                                <div class="jobbest-header--bottom-button">
                                    Miền Bắc
                                </div>
                                <div class="jobbest-header--bottom-button">
                                    Miền Nam
                                </div>
                            </div>
                        </div>
                        <div class="jobbest-mid">
                            <div class="row">
                                <a href="" class="col c-6 m-6 l-6">
                                    <div class="jobbest-items ">
                                        <div class="jobbest-mid-top">
                                            <div class="row">
                                                <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                    <img src="./img/banner3.jpg" alt="">
                                                </div>
                                                <div class="jobbest-mid-top--right col c-10 m-10 l-10" >
                                                    Chuyên viên chụp ảnh cưới - Tại thành Phố Hồ Chí Minh
                                                    <p>Công ty trách nhiệm hữu hạng</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobbest-mid-bottom">
                                            <div class="jobbest-mid-bottom-item">
                                                10 - 15 triệu
                                            </div>
                                            <div class="jobbest-mid-bottom-item">
                                                Hồ Chí Minh
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="col c-6 m-6 l-6">
                                    <div class="jobbest-items ">
                                        <div class="jobbest-mid-top">
                                            <div class="row">
                                                <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                    <img src="./img/banner3.jpg" alt="">
                                                </div>
                                                <div class="jobbest-mid-top--right col c-10 m-10 l-10" >
                                                    Chuyên viên chụp ảnh cưới - Tại thành Phố Hồ Chí Minh
                                                    <p>Công ty trách nhiệm hữu hạng</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobbest-mid-bottom">
                                            <div class="jobbest-mid-bottom-item">
                                                10 - 15 triệu
                                            </div>
                                            <div class="jobbest-mid-bottom-item">
                                                Hồ Chí Minh
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="col c-6 m-6 l-6">
                                    <div class="jobbest-items ">
                                        <div class="jobbest-mid-top">
                                            <div class="row">
                                                <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                    <img src="./img/banner3.jpg" alt="">
                                                </div>
                                                <div class="jobbest-mid-top--right col c-10 m-10 l-10" >
                                                    Chuyên viên chụp ảnh cưới - Tại thành Phố Hồ Chí Minh
                                                    <p>Công ty trách nhiệm hữu hạng</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobbest-mid-bottom">
                                            <div class="jobbest-mid-bottom-item">
                                                10 - 15 triệu
                                            </div>
                                            <div class="jobbest-mid-bottom-item">
                                                Hồ Chí Minh
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="col c-6 m-6 l-6">
                                    <div class="jobbest-items ">
                                        <div class="jobbest-mid-top">
                                            <div class="row">
                                                <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                    <img src="./img/banner3.jpg" alt="">
                                                </div>
                                                <div class="jobbest-mid-top--right col c-10 m-10 l-10" >
                                                    Chuyên viên chụp ảnh cưới - Tại thành Phố Hồ Chí Minh
                                                    <p>Công ty trách nhiệm hữu hạng</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobbest-mid-bottom">
                                            <div class="jobbest-mid-bottom-item">
                                                10 - 15 triệu
                                            </div>
                                            <div class="jobbest-mid-bottom-item">
                                                Hồ Chí Minh
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="col c-6 m-6 l-6">
                                    <div class="jobbest-items ">
                                        <div class="jobbest-mid-top">
                                            <div class="row">
                                                <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                    <img src="./img/banner3.jpg" alt="">
                                                </div>
                                                <div class="jobbest-mid-top--right col c-10 m-10 l-10" >
                                                    Chuyên viên chụp ảnh cưới - Tại thành Phố Hồ Chí Minh
                                                    <p>Công ty trách nhiệm hữu hạng</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobbest-mid-bottom">
                                            <div class="jobbest-mid-bottom-item">
                                                10 - 15 triệu
                                            </div>
                                            <div class="jobbest-mid-bottom-item">
                                                Hồ Chí Minh
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                
                                <a href="" class="col c-6 m-6 l-6">
                                    <div class="jobbest-items ">
                                        <div class="jobbest-mid-top">
                                            <div class="row">
                                                <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                    <img src="./img/banner3.jpg" alt="">
                                                </div>
                                                <div class="jobbest-mid-top--right col c-10 m-10 l-10" >
                                                    Chuyên viên chụp ảnh cưới - Tại thành Phố Hồ Chí Minh
                                                    <p>Công ty trách nhiệm hữu hạng</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobbest-mid-bottom">
                                            <div class="jobbest-mid-bottom-item">
                                                10 - 15 triệu
                                            </div>
                                            <div class="jobbest-mid-bottom-item">
                                                Hồ Chí Minh
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="col c-6 m-6 l-6">
                                    <div class="jobbest-items ">
                                        <div class="jobbest-mid-top">
                                            <div class="row">
                                                <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                    <img src="./img/banner3.jpg" alt="">
                                                </div>
                                                <div class="jobbest-mid-top--right col c-10 m-10 l-10" >
                                                    Chuyên viên chụp ảnh cưới - Tại thành Phố Hồ Chí Minh
                                                    <p>Công ty trách nhiệm hữu hạng</p>
                                                </div>
                                            </div>
                                            </div>
                                        <div class="jobbest-mid-bottom">
                                            <div class="jobbest-mid-bottom-item">
                                                10 - 15 triệu
                                            </div>
                                            <div class="jobbest-mid-bottom-item">
                                                Hồ Chí Minh
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="jobbest-bottom">
                            <i class="fa-solid fa-caret-left"></i>
                            <span style="color:#00b14f">31</span> / <span>37 trang</span>
                            <i class="fa-solid fa-caret-right"></i>
                        </div>  
                    </div>
                    <div class="jobinteresting_right col c-4 m-4 l-4">
                        <div class="jobinteresting_right-img">
                            <div class="jobinteresting_right-img--container">
                                <div class="jobinteresting_right-img-number">
                                    <a href=""><img src="./img/LFW SS14 Backstage _ Ashley Isham - PHOENIX Magazine.jpg" alt=""></a>
                                    <a href=""><img src="./img/Makeup Artist Branding.jpg" alt=""></a>
                                    <a href=""><img src="./img/download (5).jpg" alt=""></a>
                                </div>
                                <div class="jobinteresting_right-img--button">
                                    <i class="fa-solid fa-angle-left"></i>
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
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