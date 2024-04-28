<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findy</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./payment.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>
<body>
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
                                        <h2 class="order-info__title">Mã đơn hàng: 00093345</h2>
                                        <div class="order-info__freelance">
                                            <div class="order-info__freelance-warp">
                                                <span class="order-info__freelance-text">
                                                    Họ và tên khách thuê:
                                                </span>
                                                <span class="order-info__freelance-info">
                                                    Lê Tâm Nhiên
                                                </span>
                                            </div>
                                            <div class="order-info__freelance-warp">
                                                <span class="order-info__freelance-text">
                                                    Họ và tên thợ:
                                                </span>
                                                <span class="order-info__freelance-info">
                                                    Trần Minh Khánh
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
                                                    22/10/2023
                                                </span>
                                            </div>
                                            <div class="order-info__freelance-warp">
                                                <span class="order-info__freelance-text">
                                                    Địa chỉ:
                                                </span>
                                                <span class="order-info__freelance-info">
                                                    Công viên Bạch Đằng, 1 đường Tôn Đức Thắng, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-info__service">
                                        <h2 class="order-info__service-heading">Dịch vụ sử dụng</h2>
                                        <div class="order-info__service-info">
                                            <span class="order-info__service-name">Chụp ảnh sinh nhật ngoại cảnh</span>
                                            <span class="order-info__service-price">1.590.000 đ</span>
                                        </div>
                                        <div class="order-info__service-info">
                                            <span class="order-info__service-name">Makeup</span>
                                            <span class="order-info__service-price">350.000 đ</span>
                                        </div>
                                    </div>
                                    
                                    <div class="order-info__amount">
                                        <div class="order-info__amount-info">
                                            <span class="order-info__amount-name">Tổng giá trị:</span>
                                            <span class="order-info__amount-total">1.940.000 đ</span>
                                        </div>
                                        <div class="order-info__amount-info">
                                            <span class="order-info__amount-name">Đã cọc (50%):</span>
                                            <span class="order-info__amount-total">-970.000 đ</span>
                                        </div>
                                        <div class="order-info__amount-info">
                                            <span class="order-info__amount-name">Tổng thanh toán:</span>
                                            <span class="order-info__amount-total">970.000 đ</span>
                                        </div>
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
                                                <p class="payment-methods__name">Viettel Money</p>
                                                <div class="payment-methods__text">Thanh toán bằng Viettel Money</div>
                                            </div>
                                            <input type="radio" name="payment-methods" id="payment-viettel-money">
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

                                    <button class="btn btn--primary payment-methods-btn">Thanh toán</button>
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
</body>
</html>