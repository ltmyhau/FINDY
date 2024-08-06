<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./mainicon.css">
    <link rel="stylesheet" href="./managerrequest.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp > .navbar__heading:nth-child(3) > .navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>
<body>
<!-- -----------chatbox------------ -->
<?php
    include "id_tho.php";
?>

<?php


// Lấy thông tin người dùng từ session
$id_tho = $_SESSION['id_tho'];
$hoTen = $_SESSION['hoTen'];
$gmail = $_SESSION['gmail'];

// Hiển thị thông tin người dùng
echo "ID của Thợ: " . $id_tho;
echo "ID của Thợ: " . $hoTen;
?> 
    <?php
    include "headerphoto1.php";
    ?>
    
    <section>
        <div class="managerrequest">
            <div class="grid wide">
            <div class="managerrequest_header">
                        DANH SÁCH YÊU CẦU TỪ KHÁCH HÀNG
                </div>
                <div class="managerrequest_container row">
                <?php
                        include "connect.php"
                    ?>
                    <?php
                            $connect = new connect;        
                            $select_request = $connect ->select_request($id_tho);
                            $emptyImage = '<img src="../img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
    $dataDisplayed = false;
                        ?>
                        <?php
                                    if($select_request){
                                        while($result = $select_request->fetch_assoc()){
                                            $hotenthue = $result['hoTen'];
                                            $diachi = $result['diachi'];
                                            $dataDisplayed = true;
                                            $thoigian = $result['thoigian'];
                                            $phongcach = $result['phongcach'];
                                            $gia = $result['gia'];
                                            $hinhanhthue = $result['hinhanhthue'];
                                            $ma_posttructiep = $result['ma_posttructiep'];
                                            $mathongtintho = $result['mathongtintho'];
                                ?>
                        <div class="managerrequest_content  col c-12 m-6 l-6">
                                <div class="">
                                    <div class="managerrequest_content-items--avatar c-3 m-3 l-3">
                                        <img src="./img/<?php echo $hinhanhthue ?>" alt="">
                                    </div>
                                    <div class="managerrequest_content-items--mid c-6 m-6 l-6">
                                        <div class="name">
                                            
                                            Tên: <?php echo $result['hoTen']  ?>
                                        </div>
                                        <div class="address">
                                            Địa chỉ: <?php echo $result['diachi']  ?>
                                        </div>
                                        <div class="border_gach">
                                            
                                        </div>
                                        <div class="time">
                                            Thời gian:  <?php echo $result['thoigian'] ?>
                                        </div>
                                        <div class="style">
                                            Phong cách: <?php echo $result['phongcach']  ?>
                                        </div>
                                        <div class="price">
                                             Giá: <?php echo $result['gia'] ?>
                                        </div>
                                        <div class="detail">
                                            <!-- <a href="./detailrequest.php">Xem chi tiết</a> -->
                                        </div>
                                    </div>
                                    <div class="managerrequest_content-items--button c-2 m-2 l-2">
                                        <button type="button"><a href="./acceptorder.php?&tenposttimtho=<?php echo $result['tenposttimtho']; ?>&hoTenthue=<?php echo $result['hoTen']; ?>&diachi=<?php echo $result['diachi']; ?>&ma_posttructiep=<?php echo $result['ma_posttructiep'] ?>&thoigian=<?php echo $result['thoigian']; ?>&phongcach=<?php echo $result['phongcach']; ?>&gia=<?php echo $result['gia']; ?>&motachitiet=<?php echo $result['motachitiet']; ?>">Chấp nhận</a></button>
                                        <button type="button"><a href="">Từ chối</a></button>
                                        <button type="button"><a href="">Trả giá</a></button>
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
                        
                    
                </div>
            </div>
        </div>
    </section>
    
    <script src="./main.js"></script>

    <?php
    include "footer.php";
    ?>
</body>
</html>