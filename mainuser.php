<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/381365316_305905915351952_8433167268195273607_n.png" sizes="16x16">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./mainuser.css">
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
    <!-- -----chatbox -->
        <div class="icon">
            <img src="./img/381365316_305905915351952_8433167268195273607_n.png" alt="">
        </div>

        <div class="chatbox" id="chatbox">
                        <!-- Nội dung của chatbox ở đây -->
            <div class="chatbox-header">
                <h2>Chatbox</h2>
                <button class="close-button" id="close-button">&times;</button>
            </div>
            <div class="chatbox-content" id="chatbox-content">
                <!-- Nội dung của chatbox ở đây -->
                
            </div>
            <div class="message-input">
                <form id="messageForm" method = "POST">
                    
                    <input type="text" id="receiverID" placeholder="ID người nhận">
                    <input type="text" id="message" placeholder="Tin nhắn">
                    <button type="submit">Gửi</button>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="./relation.js"></script>
        <script src="./js/boxchat.js"></script>


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
                                    <img src="./video/381365316_305905915351952_8433167268195273607_n.png" alt="">
                                </div>
                                <div class="tabbar_logo-title c-6 m-6 l-6">
                                    <button onclick="switchLanguage()">EN</button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tabbar_title1  col c-2 m-2 l-2 ">
                            <div>
                                <a href="#">
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
                                <a href="#">
                                    <p class="content" id="contentVi2">Việc làm Make-up Artist</p>
                                    <p class="content" id="contentEn2" style="display: none;">Hire a Make-up Artist</p>
                                </a>
                            </div>
                        </div>
                        <div class="tabbar_title3  col c-2 m-2 l-2 ">
                            <div>
                                <a href="#">Tìm kiếm mọi người</a>
                            </div>
                        </div>
                        <!--phần  input với kính lúp -->
                        <div class="tabbar_input  col c-2 m-2 l-2 ">
                            <div class="tabbar_input-container ">
                                <div class="tabbar_input-input c-6 m-6 l-10">
                                    <input type="text" name="" id="" placeholder="Tìm kiếm gì đó...">
                                </div>
                                <div class="tabbar_input-look c-6 m-6 l-2">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <!-- user -->
                        



                        <div class="tabbar_user col c-2 m-2 l-2 ">
                       

                            <div class="tabbar_title3 c-6 m-6 l-6 ">
                                <a href="#"><p><?php echo $username; ?></p></a>
                                <div class="tabbar_title3-hover">
                                    
                                    <div class="tabbar_title3-hover-container ">
                                        
                                        <div class="infor_user row">
                                            <div class="tabbar_title3-hover--avatar col c-2 m-2 l-2">
                                                <img src="./video/6478923415f073340ea91470_makeup.png" alt="">
                                            </div>
                                            <div class="tabbar_title3-hover--infor col c-10 m-10 l-10">
                                                
                                                <div class="title3--infor-produce ">
                                                    <div name="Ten" class="tabbar_title3-hover--inforiname">
                                                    Tên: <?php echo $username; ?>
                                                    </div>
                                                    <div name="register" class="tabbar_title3-hover--infor-ma">
                                                        Mã ứng viên: <?php echo $id ?>
                                                    </div>
                                                    <div name="mail" class="tabbar_title3-hover--infor-email">
                                                    
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
                                                <a href="./usermakeup_up.php">
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-solid fa-gear c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Đăng tin make-up</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="./userphoto_up.php">
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-regular fa-clipboard c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Đăng tin photographer</p>
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
                                    <a href="main.php" onclick="">Đăng xuất</a>
                                </div>
                            </div>
                        </div>
    
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="headeruser">
            <div class="grid wide">
                <div class="headeruser_container ">
                    <div class="headeruser_top">
                        <div class="headeruser_top-top">
                            Browse
                        </div>
                        <div class="headeruser_mid">
                            <div class="headeruser_mid-container row">
                                <div class="headeruser_mid-input col c-10 m-10 l-10">
                                    <i class="fa-solid fa-magnifying-glass col c-1 m-1 l-1"></i>
                                    <input class=" c-11 m-11 l-11" type="text" placeholder="Tìm photographer & make-up artist...">
                                </div>
                                <div class="headeruser_mid-button col c-1 m-1 l-1">
                                    <button class="" type="button">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                        <div class="header_top-bottom">
                            <div class="row">
                                <div class="headeruser_control  c-2 m-2 l-2">
                                    
                                    <a href="lookphoto.php" target="loadpage" ><li>Photographer</li></a>
                                </div>
                                <div class="headeruser_list  c-2 m-2 l-2">
                                    <a href="lookmakeup.php" target="loadpage" ><li>Make-up Artist</li></a>
                                </div>
                                <div class="headeruser_listjob  c-2 m-2 l-2">
                                    <a href="lookstudio.php" target="loadpage" ><li>Studio</li></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="headeruser_bottom">
                        <article>
                            <iframe id="myiframe" src="lookphoto.php" name="loadpage" frameborder="0" scrolling="no" width="100%"></iframe>
                        </article>
                    </div>

                </div>
            </div>
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
                                <p>Thuê các Photographer & Make-up Artist giỏi nhất cho mọi công việc trực tuyến.</p>
                            </div>
                            <div class="videomain_text--items">
                                <ul>
                                    <li>Mọi công việc mà bạn có thể nghĩ ra</li>
                                    <li>Tiết kiệm đến 90% và nhận báo giá miễn phí</li>
                                    <li>Chỉ trả tiền khi thấy hài lòng 100%</li>
                                </ul>
                            </div>
                            <div class="videomain_text--button">
                                <button type="button">Thuê photographer & Make-up Artist</button>
                                <button type="button">Kiếm tiền từ photographer & Make-up Artis</button>
                            </div>
                      </div>
            </div>
        </div>
    </section>
    <section>
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
                            <p>Đăng công việc miễn phí và dễ dàng. Chỉ cần điền vào tiêu đề, mô tả và ngân sách, các chào giá cạnh tranh sẽ đến trong chốc lát.</p>
                        </div>
                        <div class="complete_items--content col c-3 m-3 l-3">
                            <h1>Chọn freelancer</h1>
                            <p>Không có công việc nào là quá lớn hay quá nhỏ. Chúng tôi luôn có freelancer cho các công việc thuộc mọi quy mô hay ngân sách, trong hơn 1800 kỹ năng. Không có công việc nào quá phức tạp. Chúng tôi đều có thể hoàn thành!</p>
                        </div>
                        <div class="complete_items--content col c-3 m-3 l-3">
                            <h1>Chi trả an toàn</h1>
                            <p>Chỉ chi trả khi công việc được hoàn thành và bạn thấy hài lòng 100% với chất lượng, thông qua hệ thống các mốc thanh toán của chúng tôi.</p>
                        </div>
                        <div class="complete_items--content col c-3 m-3 l-3">
                            <h1>Chúng tôi ở đây để hỗ trợ</h1>
                            <p>Đội ngũ tuyển dụng viên tài năng của chúng tôi có thể giúp bạn tìm được freelancer tốt nhất cho công việc và các kỹ thuật viên co-pilot của chúng tôi thậm chí có thể quản lý dự án thay cho bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section>
        <div class="main">
            
            <div class="grid wide">
                <div class="main_img">
                    <!-- <video id="myVideo" autoplay >
                        <source src="./video/Cinematic Camera Intro.mp4" type="video/mp4">
                        Trình duyệt của bạn không hỗ trợ video HTML5.
                      </video>
                      <div class="buttom_voice">
                        <button onclick="adjustVolume(-0.1)">Giảm âm lượng</button>
                        <button onclick="adjustVolume(0.1)">Tăng âm lượng</button>
                    </div>  -->
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
    </section>
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
    <!-- <section>
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
                            <video id="myVideo" autoplay >
                                <source src="./video/Cinematic Camera Intro.mp4" type="video/mp4">
                                Trình duyệt của bạn không hỗ trợ video HTML5.
                            </video>
                        <div class="buttom_voice">
                        <button onclick="adjustVolume(-0.1)">Giảm âm lượng</button>
                        <button onclick="adjustVolume(0.1)">Tăng âm lượng</button>
                    </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <?php
        include "footer.php"
    ?>