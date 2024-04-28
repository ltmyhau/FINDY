<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./order-management.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp>.navbar__heading:nth-child(4)>.navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>

<body>
    <!-- -----------chatbox------------ -->
    <?php
    include "id_thue.php";
    ?>
    <?php
    // Các công việc khác cần làm trên trang mainphoto.php

    echo "ID của Thợ: " . $id_thue;
    echo "ID của Thợ: " . $hoTen;

    ?>

    <?php
    include "headercustomer.php";
    ?>

<div class="container">
            <div class="grid wide">
                <div class="content" style="padding-top: 36px;">
                    <div class="row process">
                        <div class="col l-3 m-3 c-3">
                            <div class="process__group">
                                <a href="./donhang/thanhtoancoc.php" target="loadpage" class="process__step active">
                                    <p class="process__number">
                                        <i class="fa-solid fa-list" id="xacnhan-icon"></i>
                                    </p>
                                    <p class="process__name">Thanh toán </p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <div class="process__group">
                                <a href="./donhang/thuchien.php"  target="loadpage" class="process__step">
                                    <p class="process__number">
                                        <i class="fa-solid fa-dolly" id="thuchien-icon"></i>
                                    </p>
                                    <p class="process__name">Thực hiện</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <div class="process__group">
                                <a href="./donhang/nhansanpham.php" target="loadpage" class="process__step">
                                    <p class="process__number">
                                        <i class="fa-solid fa-box-archive" id="giaosanpham-icon"></i>
                                    </p>
                                    <p class="process__name">Nhận sản phẩm</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <div class="process__group">
                                <a href="./donhang/danhgia.php" target="loadpage" class="process__step">
                                    <p class="process__number">
                                        <i class="fa-solid fa-check" id="thanhtoan-icon"></i>
                                    </p>
                                    <p class="process__name">Đánh giá</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <article>
                        <iframe id="myiframe" src="./donhang/thanhtoancoc.php" name="loadpage" frameborder="0" height="700px" width="100%" style="padding-top: 43px;" onload="resizeIframe();"></iframe>
                    </article>
                </div> 
            </div>
        </div>
    </div>

    <script type="text/javascript">
    // function resizeIframe() {
    //     var iframe = document.getElementById('myiframe');
    //     if (iframe) {
    //         var newHeight = iframe.contentWindow.document.body.scrollHeight + 400;
    //         iframe.style.height = newHeight + 'px';
    //     }
    // }

    // Gọi hàm resizeIframe() khi trang photoconfirm.php tải xong
    window.onload = resizeIframe;
</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./main.js"></script>
    <script src="./coloroder.js"></script>

    <?php
    include "footer.php";
    ?>
</body>

</html>