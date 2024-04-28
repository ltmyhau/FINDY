<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./manageroder.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./cssphoto/photoconfirm.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
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
    $select_thanhtoancoctho = $connect -> select_thanhtoancoctho($id_tho); //
    $select_thanhtoancoctt = $connect -> select_thanhtoancoctt($id_tho);
    $emptyImage = '<img src="./img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
    $dataDisplayed = false;
?>

<div class="row">
<?php
                                    if($select_thanhtoancoctho){
                                        while($result = $select_thanhtoancoctho->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue']; 
                                        $dataDisplayed = true;   
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $ma_thanhtoancoc = $result['ma_thanhtoancoc'];
                                        $tenposttimtho = $result['tenposttimtho'];
                                        $giatri = $result['giatri'];
                                ?>
        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/<?php echo $anhtho  ?>" alt="Ảnh đại diện" class="order__avatar-img">
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
                        <strong><?php  echo $ma_thanhtoancoc ?></strong>
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

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="javascript:void(0);" class="order__detail" 
                onclick="openModal('<?php echo $anhtho; ?>', 
                '<?php echo $tentho; ?>', '<?php echo $tenposttimtho; ?>', 
                '<?php echo $thoigian; ?>', '<?php echo $phongcach; ?>', 
                '<?php echo $phongcach; ?>','<?php echo $gia; ?>',
                '<?php echo $sukien; ?>')">
                    Xem chi tiế t
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>

                        <?php 
                                        }
                                    }

?>
                        
                        <?php
                                    if($select_thanhtoancoctt){
                                        while($result = $select_thanhtoancoctt->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];  
                                        $dataDisplayed = true;  
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathanhtoancoctt = $result['mathanhtoancoctt'];
                                        $ten_posttimtho = $result['tenposttimtho'];
                                        $motachitiet = $result['sukien'];
                                            
                                ?>
        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="./img/<?php echo $anhtho  ?>" alt="Ảnh đại diện" class="order__avatar-img">
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
                        <strong><?php  echo $mathanhtoancoctt ?></strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong><?php echo $phongcach ?></strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong><?php echo $gia ?></strong>
                        <strong>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                    <span class="order__title">
                        <em>Đơn đợi khách hàng thanh toán</em>
                    </span>
                </div>

                <a href="javascript:void(0);" class="order__detail" 
                onclick="openModal('<?php echo $anhtho; ?>', 
                '<?php echo $tentho; ?>', '<?php echo $ten_posttimtho; ?>', 
                '<?php echo $thoigian; ?>', '<?php echo $phongcach; ?>', 
                '<?php echo $phongcach; ?>','<?php echo $gia; ?>',
                '<?php echo $sukien; ?>')">
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
<!-- Add this modal container at the end of your HTML body -->
<div id="myModal1" class="modal1">
  <div class="modal1-content">
    <span class="close1">&times;</span>
    <div id="modal1Content"></div>
  </div>
</div>
<!-- Add this script in the head or before the closing body tag -->
<script>
  function openModal(anhtho, tentho,tenbuoichup , diadiem, thoigian, phongcach, gia, sukien) {
    var modalContent = document.getElementById("modal1Content");

    // Construct the content for the modal
    var content =
    '<div class="jas">' +
        '<div class="hinhanh1">'+
            '<img src="./img/' + anhtho + '" alt="Ảnh đại diện" class="order__avatar-img1">' +
        '</div>' +
        '<div class="description">'+
            '<p> ' + tenbuoichup +'</p>' +
            '<p><i class="fa-solid fa-user"></i><strong>Tên khách:</strong> ' + tentho + '</p>' +
            '<p><i class="fa-solid fa-map-location-dot"></i><strong class = "diadiem" >Địa điểm:</strong> ' + diadiem + '</p>' +
            '<p><i class="fa-regular fa-calendar"></i><strong>Thời gian:</strong> ' + thoigian + '</p>' +
            '<p><i class="fa-solid fa-vest-patches"></i><strong>Phong cách:</strong> ' + phongcach + '</p>' +
            '<p><i class="fa-solid fa-sack-dollar"></i><strong>Giá:</strong> ' +  gia +'đ</p>' +
            '<p><i class="mota"></i><strong>Sự kiện</strong> ' +  sukien +'</p>' +

        '</div>' +
    '</div>';

    // Set the content and display the modal
    modalContent.innerHTML = content;
    document.getElementById("myModal1").style.display = "block";
  }

  // Close the modal when the close button is clicked
  document.querySelector(".close1").addEventListener("click", function () {
    document.getElementById("myModal1").style.display = "none";
  });
</script>

    
</body>
</html>