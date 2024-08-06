<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./manageroder.css">
    <link rel="stylesheet" href="./css/base.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
    include "id_tho.php";
?>
<?php
    include "connect.php";
?>
<?php 

    $connect = new connect;
    $select_thuchientho = $connect -> select_thuchientho($id_tho); //
    $select_thuchientt = $connect -> select_thuchientt($id_tho);
    $emptyImage = '<img src="./img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
    $dataDisplayed = false;
?>

<div class="row">
<?php
                                    if($select_thuchientho){
                                        while($result = $select_thuchientho->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];  
                                        $dataDisplayed = true;     
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathuchien = $result['mathuchien'];
                                        $ma_posttimtho = $result['ma_posttimtho'];
                                        $mathongtintho = $result['mathongtintho'];
                                        $mathuchien = $result['mathuchien'];
                                        $tenposttimtho = $result['tenposttimtho'];
                                        $giatri = $result['giatri'];
                                            
                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="../img/<?php echo $anhtho ?>" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        
                        <?php echo $tentho  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        <?php echo $diadiem  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        <?php echo $thoigian  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong><?php echo $mathuchien ?> </strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong><?php echo $phongcach  ?></strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong><?php echo $giatri ?></strong>
                    </span>
                </div>

                <div class="order__info">
                
                                    <?php
                                                        $connect = new connect;
                                                        if($_SERVER['REQUEST_METHOD']==='POST'){
                                                            
                                                                $insert_thogiaosanpham = $connect->insert_thogiaosanpham();
                                                                if($insert_thogiaosanpham){
                                                                    $delete_thuchien = $connect->delete_thuchien($mathuchien);
                                                                }                                                       
                                                        }
                                                        
                                                    ?>
                                    <form action="" method="POST">
                                        <div class="input_payment" style="display: none;">
                                            <input type="text" name="mathongtintho_thothuchien" id="" value="<?php echo $mathongtintho ?>">
                                            <input type="text" name="ma_posttimtho_thothuchien" id="" value="<?php echo $ma_posttimtho  ?>">
                                        </div>
                                        <button class="btn order-btn">Đã thực hiện</button>
                                    </form>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

                        <?php 
                                        }
                                    }

?>
</div>
<div class="row">                    
                        <?php
                                    if($select_thuchientt){
                                        while($result = $select_thuchientt->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];    
                                        $tentho = $result['hoTen'];
                                        $dataDisplayed = true;   
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathuchientt = $result['mathuchientt'];
                                        $ma_posttructiep = $result['ma_posttructiep'];
                                        $mathongtintho = $result['mathongtintho'];
                   
                                        $tenposttimtho = $result['tenposttimtho'];
                                            
                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="../img/<?php echo $anhtho ?>" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        
                        <?php echo $tentho  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        <?php echo $diadiem  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        <?php echo $thoigian  ?>
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong><?php echo $mathuchientt ?> </strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong><?php echo $phongcach  ?></strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong><?php echo $gia ?></strong>
                    </span>
                </div>

                <div class="order__info">
                
                                    <?php
                                                        $connect = new connect;
                                                        if($_SERVER['REQUEST_METHOD']==='POST'){
                                                            
                                                                $insert_thogiaosanphamtt = $connect->insert_thogiaosanphamtt();
                                                                
                                                                                                                   
                                                        }
                                                        
                                                    ?>
                                    <form action="" method="POST">
                                        <div class="input_payment" style="display: none1;">
                                            <input type="text" name="mathongtintho_thothuchientt" id="" value="<?php echo $mathongtintho ?>">
                                            <input type="text" name="ma_posttimtho_thothuchientt" id="" value="<?php echo $ma_posttructiep  ?>">
                                        </div>
                                        <button type="submit"  class="btn order-btn">Đã thực hiện</button>
                                    </form>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
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
      </div>              
<!-- </div>
    <div class="content">
        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="../img/avatar-1.png" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Trần Minh Khánh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Quận 9, Hồ Chí Minh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093345</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh cổ trang</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>1.790.000</strong>
                    </span>
                </div>

                <div class="order__info">
                    <button class="btn order-btn">Đã thực hiện</button>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar1.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Vũ Thành Danh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Quận 1, TP.Hồ Chí Minh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093345</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh cổ trang</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>300.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <button class="btn order-btn">Đã thực hiện</button>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar2.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Nguyễn Thị Yến Nhi
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Quận 3, TP.Hồ Chí Minh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093346</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh sinh nhật</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>1.000.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <button class="btn order-btn">Đã thực hiện</button>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar3.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Võ Văn Luân
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Quận 10, TP.Hồ Chí Minh
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093347</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh đám cưới</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>8.000.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <button class="btn order-btn">Đã thực hiện</button>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/avatar9.jpg" alt="Ảnh đại diện" class="order__avatar-img">
                </div>

                <div class="order__info">
                    <span class="order__name">
                        Phạm Yến Như
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-location-dot"></i>
                        Studio Wiwi
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-solid fa-calendar-days"></i>
                        11/12/2023
                    </span>
                    <span class="order__text">
                        <i class="order__text-icon fa-regular fa-clock"></i>
                        16h:30p
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        Mã đơn hàng:
                        <strong>0093348</strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong>Chụp ảnh mẹ và bé</strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong>500.000</strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <button class="btn order-btn">Đã thực hiện</button>
                </div>

                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>
    </div> -->

</body>
</html>