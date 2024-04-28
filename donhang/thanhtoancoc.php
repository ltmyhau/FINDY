<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../order-management.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    include "../id_thue.php";
    ?>
    <?php


    // Các công việc khác cần làm trên trang mainphoto.php

    //echo "ID của Thợ: " . $id_thue;
    // echo "ID của Thợ: " . $hoTen;

    ?>

    <?php
    include "../connect.php";
    ?>
    <?php
    $connect = new connect;
    $select_thanhtoancoc = $connect->select_thanhtoancoc($id_thue); //
    $select_thanhtoancocttthue = $connect->select_thanhtoancocttthue($id_thue); //
    $emptyImage = '<img src="../img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
    $dataDisplayed = false;
    ?>


    <?php
    if ($select_thanhtoancoc) {
        while ($result = $select_thanhtoancoc->fetch_assoc()) {
            $dataDisplayed = true;
            $anhtho = $result['hinhanhtho'];
            $tentho = $result['hoTen'];
            $diadiem = $result['diadiem'];
            $thoigian = $result['thoigian'];
            $sukien = $result['sukien'];
            $phongcach = $result['phongcach'];
            $gia = $result['gia'];
            $ma_posttimtho = $result['ma_posttimtho'];
            $mathongtintho = $result['mathongtintho'];
            $ma_thanhtoancoc = $result['ma_thanhtoancoc'];
            $tenposttimtho = $result['tenposttimtho'];
            $giatri = $result['giatri'];

    ?>
            <div class="col c-12 m-12 l-12">
                <div class="order">
                    <div class="order__avatar">
                        <img src="../img/<?php echo $anhtho  ?>" alt="Ảnh đại diện" class="order__avatar-img">
                    </div>

                    <div class="order__info">
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

                    <div class="order__info">
                        <span class="order__title">
                            Mã đơn hàng:
                            <strong><?php echo $ma_thanhtoancoc ?></strong>
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


                    <div class="manageroder_content-items--button col c-2 m-2 l-2">
                        <a href="../deposit-payment.php?name=<?php echo urlencode($tentho); ?>&tenposttimtho=<?php echo urlencode($tenposttimtho); ?>&ma_thanhtoancoc=<?php echo urlencode($ma_thanhtoancoc); ?>&ma_posttimtho=<?php echo urlencode($ma_posttimtho); ?>&mathongtintho=<?php echo urlencode($mathongtintho); ?>&diadiem=<?php echo urlencode($diadiem); ?>&thoigian=<?php echo urlencode($thoigian); ?>&diachi=<?php echo urlencode($sukien); ?>&gia=<?php echo urlencode($gia); ?>" target="_blank"><button type="button">Thanh toán</button></a>

                    </div>
                </div>
            </div>
    <?php
        }
    }

    ?>
    <?php
    if ($select_thanhtoancocttthue) {
        while ($result = $select_thanhtoancocttthue->fetch_assoc()) {
            $anhtho = $result['hinhanhtho'];
            $dataDisplayed = true;
            $tentho = $result['hoTen'];
            $diadiem = $result['diadiem'];
            $thoigian = $result['thoigian'];
            $sukien = $result['sukien'];
            $phongcach = $result['phongcach'];
            $gia = $result['gia'];
            $ma_posttructiep = $result['ma_posttructiep'];
            $mathongtintho = $result['mathongtintho'];
            $mathanhtoancoctt = $result['mathanhtoancoctt'];
            $tenposttimtho = $result['tenposttimtho'];

    ?>
            <div class="manageroder_content  col c-12 m-12 l-12">
                <div class="row">
                    <div class="manageroder_content-items--avatar col c-2 m-2 l-2">
                        <img style="width:100px; height:100px; " src="../img/<?php echo $anhtho ?>" alt="">
                    </div>
                    <div class="manageroder_content-items--mid col c-7 m-7 l-7">
                        <div class="name">
                            <div class="input_thanhtoancoc" style="display: none;">
                                <input type="text" name="" id="" value="<?php echo $mathongtintho ?>">
                                <input type="text" name="" id="" value="<?php echo $ma_posttimtho  ?>">
                            </div>
                            <?php echo $tentho ?>
                        </div>
                        <div class="address">
                            <span>Địa điểm: </span><?php echo $diadiem ?>
                        </div>
                        <div class="time">
                            <span>Thời gian: </span><?php echo $thoigian ?>
                        </div>
                        <div class="style">
                            <span>Phong cách: </span><?php echo $phongcach ?>
                        </div>
                        <div class="price">
                            <span>Cọc: </span><?php echo $gia ?> <span>đ</span>
                        </div>

                    </div>
                    <div class="manageroder_content-items--button col c-2 m-2 l-2">
                        <a href="../deposit-paymenttructiep.php?name=<?php echo urlencode($tentho); ?>&tenposttimtho=<?php echo urlencode($tenposttimtho); ?>&mathanhtoancoctt=<?php echo urlencode($mathanhtoancoctt); ?>&ma_posttimtho=<?php echo urlencode($ma_posttimtho); ?>&mathongtintho=<?php echo urlencode($mathongtintho); ?>&diadiem=<?php echo urlencode($diadiem); ?>&thoigian=<?php echo urlencode($thoigian); ?>&diachi=<?php echo urlencode($sukien); ?>&gia=<?php echo urlencode($gia); ?>" target="_blank"><button type="button">Thanh toán</button></a>

                    </div>
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
</body>

</html>