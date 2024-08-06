<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./photologin.css">
    <link rel="stylesheet" href="./mainicon.css">
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
        include "headerphoto1.php";
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
    <section>
        <div class="jobinteresting">
            <div class="grid wide">
                <div class="jobinteresting_container row">
                    <div class="jobinteresting_left col c-12 m-12 l-12">
                        <div class="jobbest-header">
                            <div class="jobbest-header--top">
                            Việc làm tốt nhất
                            </div>
                            <div class="jobbest-header--bottom">
                                <div class="jobbest-header--bottom_filter">
                                    <input type="text" name="" id="" placeholder="Lọc theo">
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
                            $select_postjob = $connect ->select_postjob();
                        ?>
                    <div class="jobbest-mid">
                        <div class="row">
                                 <?php
                                    if($select_postjob){
                                        while($result = $select_postjob->fetch_assoc()){
                                            
                                        
                                ?>
                            <a href="<?php echo $detailLink; ?>" class="col c-12 m-6 l-6">
                                <div class="jobbest-items ">
                                    <div class="jobbest-mid-top">
                                        <div class="row">
                                            <div class="jobbest-mid-top--left col c-2 m-2 l-2">
                                                <img src="<?php echo $imguserphoto_up ?>" alt="">
                                            </div>
                                            <div class="jobbest-mid-top--right col c-9 m-9 l-9" >
                                                <?php echo $result['tenposttimtho']  ?>
                                                <p><?php echo $result['thoigian'] ?></p>
                                                <p>Giá: <?php echo $result['gia'] ?></p>
                                                <p><?php echo $result['sukien'] ?></p>
                                                <p><?php echo $result['diadiem'] ?></p>
                                                
                                            </div>
                                            <div class="jobbest-mid-top--right2 col c-1 m-1 l-1">
                                            <i class="fa-regular fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobbest-mid-bottom">
                                        <div class="jobbest-mid-bottom-item  c-3 m-3 l-3">
                                            
                                        </div>
                                        <div class="jobbest-mid-bottom-item  c-3 m-3 l-3">
                                            
                                        </div>
                                        <div class="jobbest-mid-bottom-item  c-3 m-3 l-3">
                                            
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