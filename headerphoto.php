<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./mainphoto.css">
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
$username = $_SESSION['username']

// Hiển thị thông tin người dùng

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
                                    <img src="./video/381365316_305905915351952_8433167268195273607_n.png" alt="">
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
                                <a href="./makeup.php">
                                    <p class="content" id="contentVi2">Việc làm Make-up Artist</p>
                                    <p class="content" id="contentEn2" style="display: none;">Hire a Make-up Artist</p>
                                </a>
                            </div>
                        </div>
                        <div class="tabbar_title3  col c-2 m-2 l-2 ">
                            <div>
                                <a href="./everyone.php">Tìm kiếm mọi người</a>
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
                                <a href="#"> <p><?php echo $username ?></p></a> 
                               
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
                                                        <!-- Gmail: <?php echo $email ?> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabbar_title3-hover--button">
                                       
                                        
                                            <div >
                                                <a href="settinginfor.php" >
                                                    <div class="tabbar_title3-hover--button-settinginfor">
                                                        <i class="fa-regular fa-clipboard c-1 m-1 l-1"></i>
                                                        <p class="c-10 m-10 l-10">Cài đặt thông tin cá nhân</p>
                                                        <span class="c-1 l-1 m-1"><i class="fa-solid fa-arrow-right-long"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                        
                                        
                                            <div>
                                                <a href="#">
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
                                                <a href="./profilephoto.php" >
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
                                    <a href="main.php" onclick="">Đăng xuất</a>
                                </div>
                            </div>
                        </div>
    
                        
                    </div>
                </div>
            </div>
        </div>
    </section>