<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../order-management.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Add your CSS styles for the modal here */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
        }

        .close {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .confirm-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .confirm-btn:hover {
            background-color: #45a049;
        }


        /* Style cho nút Báo cáo */
        .button_additional {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        /* Style cho cửa sổ nổi */
        #reportPopup {
            width: 60%;
            display: none;
            position: fixed;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        /* Style cho radio buttons */
        #reportPopup input[type="radio"] {
            margin-bottom: 10px;
        }

        /* Style cho textarea */
        #reportPopup textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        /* Style cho nút Đóng */
        #reportPopup button {
            background-color: #ccc;
            color: #333;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        #reportPopup button:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <?php
    include "../id_thue.php";
    ?>
    <?php


    // Các công việc khác cần làm trên trang mainphoto.php

    // echo "ID của Thợ: " . $id_thue;
    // echo "ID của Thợ: " . $hoTen;

    ?>

    <?php
    include "../connect.php";
    ?>
    <?php
    $connect = new connect;
    $select_sanpham = $connect->select_sanpham($id_thue); //
    $emptyImage = '<img src="../img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
    $dataDisplayed = false;
    ?>


    <?php
    if ($select_sanpham) {
        while ($result = $select_sanpham->fetch_assoc()) {
            $uniqueId = uniqid();
            $dataDisplayed = true;
            $anhtho = $result['hinhanhtho'];
            $tentho = $result['hoTen'];
            $diadiem = $result['diadiem'];
            $thoigian = $result['thoigian'];
            $sukien = $result['sukien'];
            $phongcach = $result['phongcach'];
            $gia = $result['gia'];
            $drive = $result['drive'];
            $mathongtintho = $result['mathongtintho'];
            $ma_posttimtho = $result['ma_posttimtho'];
            $mathosanpham = $result['mathosanpham'];
            $giatri = $result['giatri'];
    ?>
            <div class="manageroder_content  col c-12 m-12 l-12">
                <div class="order row">
                    <div class="order__avatar c-2 m-2 l-2">
                        <img src="../img/<?php echo $anhtho  ?>" alt="Ảnh đại diện" class="order__avatar-img">
                    </div>

                    <div class="order__info c-4 m-4 l-4">
                        <span class="order__name">
                            <?php echo $tentho ?>
                        </span>
                        <span class="order__text">
                            <i class="order__text-icon fa-solid fa-location-dot"></i>
                            <?php echo $diadiem ?>
                        </span>
                        <span class="order__text">
                            <i class="order__text-icon fa-solid fa-calendar-days"></i>
                            <?php echo $thoigian ?>
                        </span>
                        <span class="order__text">
                            <i class="order__text-icon fa-regular fa-clock"></i>
                            16h:30p
                        </span>
                    </div>

                    <div style="margin: 0 5px;" class="order__info1 c-4 m-4 l-4">
                        <span class="order__title">
                            Mã đơn hàng:
                            <strong><?php echo $mathosanpham ?></strong>
                        </span>
                        <span class="order__title">
                            Phong cách:
                            <strong><?php echo $phongcach ?></strong>
                        </span>
                        <span class="order__title">
                            Tổng giá trị:
                            <strong><?php echo $giatri ?></strong>
                            <strong>đ</strong>
                        </span>
                    </div>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['submit_yeucauchinhsua'])) {
                            $insert_yeucauchinhsua = $connect->insert_yeucauchinhsua();
                            if ($insert_yeucauchinhsua) {
                                $delete_thochosanpham = $connect->delete_thochosanpham($ma_posttimtho, $mathongtintho);
                                if ($delete_thochosanpham) {
                                    $delete_thosanpham = $connect->delete_thosanpham($ma_posttimtho, $mathongtintho);
                                } else {
                                    echo "Error";
                                }
                            } else {
                                echo "Error";
                            }
                        } elseif (isset($_POST['submit_danhgia'])) {
                            $insert_danhgia = $connect->insert_danhgia();
                            if ($insert_danhgia) {
                                $delete_thochosanpham = $connect->delete_thochosanpham($ma_posttimtho, $mathongtintho);
                                if ($delete_thochosanpham) {
                                    $delete_thosanpham = $connect->delete_thosanpham($ma_posttimtho, $mathongtintho);
                                    if ($delete_thosanpham) {
                                        $insert_dathanhtoan = $connect->insert_dathanhtoan();
                                    } else {
                                        echo "Error";
                                    }
                                }
                            } else {
                                echo "Error";

                            }
                        }
                        elseif (isset($_POST['baocao'])){
                            $insert_baocaochoadmin = $connect->insert_baocaochoadmin();
                        }
                    }
                    ?>
                    <?php
                    // echo "d" .$ma_posttimtho;
                    // echo "d" .$mathongtintho;
                    ?>


                    <button class="c-2 m-2 l-2 button_additional" type="button" onclick="showProductInfo()">Đã nhận sản phẩm</button>


                    <div class="modal" id="productInfoModal">
                        <div class="modal-content">

                            <p style="font-size: 1.7rem;">FINDY sẽ thanh toán số tiền xxx cho <?php echo $tentho ?>. Bạn vui lòng chỉ nhấn "Xác nhận" khi đã xem hình ảnh và hình ảnh không có vấn đề nào.</p>
                            <form action="" method="POST">
                                <input type="text" style="display: none;" name="drive" id="" value="<?php echo $drive ?>">
                                <input type="text" style="display: none;" name="mathongtintho" id="" value="<?php echo $mathongtintho ?>">
                                <input type="text" style="display: none;" name="ma_posttimtho" id="" value="<?php echo $ma_posttimtho ?>">
                                <div class="btn_nhan" style="display: flex;align-items: center;justify-content: center;margin: 10px 0;">
                                    <button class="close" onclick="closeProductInfoModal()">Thoát</button>
                                    <button class="confirm-btn" onclick="confirmReceived() " name="submit_danhgia">Xác nhận</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Content of the modal -->
                    <form action="" method="POST">
                        <input type="text" style="display: none;" name="drive" id="" value="<?php echo $drive ?>">
                        <input type="text" style="display: none;" name="mathongtintho" id="" value="<?php echo $mathongtintho ?>">
                        <input type="text" style="display: none;" name="ma_posttimtho" id="" value="<?php echo $ma_posttimtho ?>">
                    </form>



                    <form action="" method="POST" class="c-4 m-4 l-4">
                        <input type="text" style="display: none;" name="driveyc" id="" value="<?php echo $drive ?>">
                        <input type="text" style="display: none;" name="mathongtinthoyc" id="" value="<?php echo $mathongtintho ?>">
                        <input type="text" style="display: none;" name="ma_posttimthoyc" id="" value="<?php echo $ma_posttimtho ?>">
                        <button class="button_additional" type="submit" name="submit_yeucauchinhsua">Gửi yêu cầu chỉnh sửa</button>

                    </form>




                    <form action="" method="POST" class="c-4 m-4 l-4">
                        <!-- <input type="text" name="inputdrive" id="inputdrive_<?php echo $uniqueId; ?>" placeholder="Nhập link google drive chứa sản phẩm ..."> -->
                        <a style="text-decoration: none;" href="<?php echo $drive ?> " target="_blank"><button class="button_additional" type="button">Xem hình ảnh</button></a>

                    </form>

                    <!-- <textarea name="post-job__form-description" id="post-job__form-description" class="post-job__form-input" cols="1" rows="5" style="width: 60%;"></textarea> -->
                    <button class="button_additional c-3 m-3 l-3" type="button" onclick="showReportPopup()">Báo cáo</button>
                    <div id="reportPopup" style="display: none;">
                        <form action="" method="post">
                            <input type="text" style="display: none;" name="mathongtintho" id="" value="<?php echo $mathongtintho ?>">
                            <input type="text" style="display: none;" name="ma_posttimtho" id="" value="<?php echo $ma_posttimtho ?>">
                            <input type="text" style="display: none;" name="drive" id="" value="<?php echo $drive ?>">


                            <input type="radio" name="reason" value="lienlac" onclick="updateTextarea('Ảnh chứa thông tin liên lạc')"> <span style="font-size: 1.3rem;">Ảnh chứa thông tin liên lạc</span><br>
                            <input type="radio" name="reason" value="mathat" onclick="updateTextarea('Ảnh chứa thông tin mật')"> <span style="font-size: 1.3rem;">Ảnh chứa thông tin mật</span><br>
                            <input type="radio" name="reason" value="xampham" onclick="updateTextarea('Ảnh xâm phạm quyền tác giả')"> <span style="font-size: 1.3rem;">Ảnh xâm phạm quyền tác giả</span><br>
                            <input type="radio" name="reason" value="khac" onclick="updateTextarea('')"> <span style="font-size: 1.3rem;">Khác</span><br>
                            <textarea name="detail" id="detailTextarea" placeholder="Chi tiết báo cáo (Bắt buộc điền trên 100 ký tự)" required></textarea>
                            <button name="baocao" type="submit">Gửi</button>
                            <button onclick="closeReportPopup()">Đóng</button>
                        </form>
                        <script>
                            function updateTextarea(reasonText) {
                                document.getElementById('detailTextarea').value = reasonText;
                            }
                        </script>
                    </div>
                    <script>
                        function showReportPopup() {
                            document.getElementById('reportPopup').style.display = 'block';
                        }

                        function closeReportPopup() {
                            document.getElementById('reportPopup').style.display = 'none';
                        }
                    </script>

                </div>
            </div>


    <?php
        }
    }

    ?>
    <?php
    if (!$dataDisplayed) {
        echo $emptyImage;
    }
    ?>
    <script>
        function showProductInfo() {

            document.getElementById("productInfoModal").style.display = "block";
        }

        function closeProductInfoModal() {
            document.getElementById("productInfoModal").style.display = "none";
        }




        function toggleAdditionalInfo(uniqueId, diadiem, gia, thoigian) {
            var additionalInfoDiv = document.getElementById('additional-info_' + uniqueId);

            // Check the current visibility state
            var isVisible = additionalInfoDiv.style.display === 'block';

            // Toggle the visibility
            additionalInfoDiv.style.display = isVisible ? 'none' : 'block';

            // If visible, populate and show the additional info
            if (!isVisible) {
                additionalInfoDiv.innerHTML = `
                <p>Địa điểm: ${diadiem}</p>
                <p>Thời gian: ${thoigian}</p>
                <p>Giá: ${gia}</p>
                <p>Giá: ${mathogiaosanpham}</p>
                // <input type="text" name="inputdrive_<?php echo $uniqueId; ?>" id="inputdrive_${uniqueId}" placeholder="Nhập link google drive chứa sản phẩm ...">
                <a href="<?php echo $drive ?> " target="_blank"><button class="button_additional" type="button">Xem hình ảnh</button></a>
                <button class="button_additional" type="submit">Gửi yêu cầu chỉnh sửa</button>
                <button class="button_additional" type="submit">Đã nhận sản phẩm</button>

            `;
            }
        }
    </script>
</body>

</html>