<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findy</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./deposit-payment.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
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
    $name = $_GET['name'];
    $diadiem = $_GET['diadiem'];
    $thoigian = $_GET['thoigian'];
    $diachi = $_GET['diachi'];
    $gia = $_GET['gia'];
    $ma_posttimtho = $_GET['ma_posttimtho'];
    $mathongtintho = $_GET['mathongtintho'];
    $mathanhtoancoctt = $_GET['mathanhtoancoctt'];
    $tenposttimtho = $_GET['tenposttimtho'];
    // ... rest of your code
?>
    <div class="main">
    <?php
            include "headercustomer.php";
        ?>

        <div class="container">
            <div class="grid wide">
                <div class="content">
                    <div class="order">
                        <div class="row">
                            
                            <div class="col l-8 m-7 c-12">
                                <div class="order-info">
                                    <div class="order-info__info">
                                        
                                        <h1 class="order-info__heading">Thông tin đơn hàng</h1>
                                        <h2 class="order-info__title">Mã đơn thanh toán: <?php echo $mathanhtoancoctt ?></h2>
                                        <div class="order-info__freelance">
                                            <div class="order-info__freelance-warp">
                                                <span class="order-info__freelance-text">
                                                    Họ và tên khách thuê:
                                                </span>
                                                <span class="order-info__freelance-info">
                                                   <?php echo $hoTen ?>
                                                </span>
                                            </div>
                                            <div class="order-info__freelance-warp">
                                                <span class="order-info__freelance-text">
                                                    Họ và tên thợ:
                                                </span>
                                                <span class="order-info__freelance-info">
                                                    <?php echo $name ?>
                                                </span>
                                            </div>
                                            <div class="order-info__freelance-warp">
                                                <span class="order-info__freelance-text">
                                                    Hình thức:
                                                </span>
                                                <span class="order-info__freelance-info">
                                                    Chụp ảnh
                                                </span>
                                            </div>
                                            <div class="order-info__freelance-warp">
                                                <span class="order-info__freelance-text">
                                                    Thời gian:
                                                </span>
                                                <span class="order-info__freelance-info">
                                                    <?php echo $thoigian ?>
                                                </span>
                                            </div>
                                            <div class="order-info__freelance-warp">
                                                <span class="order-info__freelance-text">
                                                    Địa chỉ:
                                                </span>
                                                <span class="order-info__freelance-info">
                                                    <?php echo $diadiem ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-info__service">
                                        <h2 class="order-info__service-heading">Dịch vụ sử dụng</h2>
                                        <div class="order-info__service-info">
                                            <span class="order-info__service-name"><?php  echo $tenposttimtho ?></span>
                                            <span class="order-info__service-price"><?php echo $gia ?>đ</span>
                                        </div>
                                        <div style="display: none;" class="order-info__service-info">
                                            <span class="order-info__service-name">Makeup</span>
                                            <span class="order-info__service-price">350.000 đ</span>
                                        </div>
                                    </div>
                                    
                                    <div class="order-info__amount">
                                        <div class="order-info__amount-info">
                                            <span class="order-info__amount-name">Tổng giá trị:</span>
                                            <span class="order-info__amount-total"><?php echo $gia ?>đ</span>
                                            <input style="display: none;" type="text" name="" id="txtAmount" value="<?php echo $gia ?>">
                                        </div>
                                        <div style="display: none;" class="order-info__amount-info">
                                            <span class="order-info__amount-name">Cần cọc (50%):</span>
                                            <span class="order-info__amount-total">970.000 đ</span>
                                        </div>
                                        <!-- <div class="order-info__amount-info">
                                            <span class="order-info__amount-name">Tổng cộng:</span>
                                            <span class="order-info__amount-total">970.000 đ</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col l-4 m-5 c-12">
                                <div class="payment-methods">
                                    <h1 class="payment-methods__heading">Hình thức thanh toán</h1>
                                    <div class="payment-methods__list">
                                        <label for="payment-momo" class="payment-methods__item">
                                            <img src="./img/momo.png" alt="Momo" class="payment-methods__img">
                                            <div class="payment-methods__item-warp">
                                                <p class="payment-methods__name">Momo</p>
                                                <div class="payment-methods__text">Thanh toán bằng ví điện tử Momo</div>
                                            </div>
                                            <input type="radio" name="payment-methods" id="payment-momo">
                                        </label>
                                        <label for="payment-viettel-money" class="payment-methods__item">
                                            <img src="./img/viettel-money.png" alt="Viettel Money" class="payment-methods__img">
                                            <div class="payment-methods__item-warp">
                                                <p class="payment-methods__name">Ngân hàng</p>
                                                <div class="payment-methods__text">Chuyển khoản ngân hàng</div>
                                            </div>
                                            <input type="radio" onclick="document.getElementById('myImg').src=GenQR()" name="payment-methods" id="payment-viettel-money">
                                        </label>
                                        <label for="payment-card" class="payment-methods__item">
                                            <img src="./img/card.png" alt="Thẻ ATM" class="payment-methods__img">
                                            <div class="payment-methods__item-warp">
                                                <p class="payment-methods__name">Thẻ ATM</p>
                                                <div class="payment-methods__text">Thanh toán bằng thẻ ATM nội địa</div>
                                            </div>
                                            <input type="radio" name="payment-methods" id="payment-card">
                                        </label>
                                    </div>
                                    <?php
                                        include 'connect.php';
                                    ?>
                                    <?php
                                                        $connect = new connect;
                                                        if($_SERVER['REQUEST_METHOD']==='POST'){
                                                            
                                                                $insert_thuchientt = $connect->insert_thuchientt();
                                                                                                                   
                                                        }
                                                        
                                                    ?>
                                    <form action="" method="POST">
                                        <div class="input_payment" style="display: none;">
                                            <input type="text" name="mathongtintho_thuchientt" id="" value="<?php echo $mathongtintho ?>">
                                            <input type="text" name="ma_posttimtho_thuchientt" id="" value="<?php echo $mathanhtoancoctt  ?>">
                                        </div>
                                        <button class="btn btn--primary payment-methods-btn" >Thanh toán</button>
                                    </form>
                                    
                                    <img id="myImg" width="300px" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chat-box">
                <label for="chat-box-checkbox">
                    <i class="chat-box-icon fa-solid fa-comment-dots fa-flip-horizontal"></i>
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
                            <div class="col l-4 m-4 c-12">
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

                            <div class="col l-8 m-8 c-0">
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
        </div>
    </div>
    <section>
        <div class="footer">
            <div class="grid wide">
                <div class="footer_container row">
                    <div class="footer_logo col c-2 m-2 l-2">
                        <div class="footer_logo-logo">
                            
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
                            <a href=""><li><img src="./img/app-store.svg" alt=""></li></a>
                            <a href=""><li><img src="./img/google-play.svg" alt=""></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <script>
        function GenQR() {
            
            Amount = document.getElementById('txtAmount').value
            var link = "https://img.vietqr.io/image/BIDV-3131488052-print.png?amount=" + Amount + "&addInfo=Thanh%20toan%20coc%20Findy&accountName=MA%20DI%20HAO"
            return link
        }
    </script>
</body>
</html>