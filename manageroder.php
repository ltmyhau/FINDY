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
    <link rel="stylesheet" href="./manageroder.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp > .navbar__heading:nth-child(4) > .navbar__heading-link {
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

include "db_connection.php";
// Truy vấn SQL để lấy thông tin từ bảng thongtinthue dựa trên id_thue
$sql = "SELECT * FROM thongtintho WHERE id_tho = $id_tho";
$result = $conn->query($sql);

// Kiểm tra nếu có kết quả
if ($result->num_rows > 0) {
    // Lặp qua từng dòng kết quả
    while ($row = $result->fetch_assoc()) {
        // Lấy thông tin từ cột cần thiết
        $mathongtintho = $row['mathongtintho'];
      
        $hinhanhtho = $row['hinhanhtho'];
        $diachi = $row['diachi'];
        $ngaysinh = $row['ngaysinh'];
        $socccd = $row['cccd'];
        $gioitinh = $row['gioitinh'];
        $sdt = $row['sdt'];

        
    }
} else {
    $mathongtintho = "";
   // You may set a default image path or leave it empty
   $hinhanhtho = "avatar.jpg";
  
    $diachi = "";
    $ngaysinh = "";
    $socccd = "";
    $gioitinh = ""; // Set a default value or leave it empty
    $sdt = "";

    // Thông báo không tìm thấy thông tin
    echo "Không tìm thấy thông tin thuê cho ID: " . $id_tho;
}

// Đóng kết nối
$conn->close();
    // Hiển thị thông tin chi tiết
    
echo "ID của Thợ: " . $id_tho;
echo "ID của Thợ: " . $mathongtintho;
// Hiển thị thông tin người dùng

?> 

        


        
<?php
    include "headerphoto1.php";
?>

    <?php


    // Lấy thông tin người dùng từ session
    $id = $_SESSION['id'];
    $hoTen = $_SESSION['hoTen'];

    // Hiển thị thông tin người dùng

    ?>

   

    <!-- <section>
        <div class="manageroder">
            <div class="grid wide">
                <div class="manageroder_container">
                    <div class="manageroder_header">
                        <div class="row">
                            <div class="manageroder_header-xacnhan  c-3 m-3 l-3">
                                <a href="./photoconfirm.php" target="loadpage" id="xacnhan-link" class="active">
                                    <i class="fa-solid fa-list" id="xacnhan-icon"></i>
                                    <p>Xác nhận</p>
                                </a>
                            </div>
                            <div class="manageroder_header-thuchien c-3 m-3 l-3">
                                <a href="./photoperform.php" target="loadpage" id="thuchien-link">
                                    <i class="fa-solid fa-dolly" id="thuchien-icon"></i>
                                    <p>Thực hiện</p>
                                </a>
                            </div>
                            <div class="manageroder_header-giaosanpham c-3 m-3 l-3">
                                <a href="./photodelivery.php" target="loadpage" id="giaosanpham-link">
                                    <i class="fa-solid fa-box-archive" id="giaosanpham-icon"></i>
                                    <p>Giao sản phẩm</p>
                                </a>
                            </div>
                            <div class="manageroder_header-thanhtoan c-3 m-3 l-3">
                                <a href="./photopayment.php" target="loadpage" id="thanhtoan-link">
                                    <i class="fa-solid fa-check" id="thanhtoan-icon"></i>
                                    <p>Đã được thanh toán</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="manageroder_complete">
                        <article>
                            <iframe id="myiframe" src="./photoconfirm.php" name="loadpage" frameborder="0" height="700px" scrolling="yes" width="100%"></iframe>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <div class="container">
            <div class="grid wide">
                <div class="content" style="padding-top: 36px;">
                    <div class="row process">
                        <div class="col l-3 m-3 c-3">
                            <div class="process__group">
                                <a href="./photoconfirm.php" target="loadpage" class="process__step active">
                                    <p class="process__number">
                                        <i class="fa-solid fa-list" id="xacnhan-icon"></i>
                                    </p>
                                    <p class="process__name">Xác nhận</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <div class="process__group">
                                <a href="./photoperform.php"  target="loadpage" class="process__step">
                                    <p class="process__number">
                                        <i class="fa-solid fa-dolly" id="thuchien-icon"></i>
                                    </p>
                                    <p class="process__name">Thực hiện</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <div class="process__group">
                                <a href="./photodelivery.php" target="loadpage" class="process__step">
                                    <p class="process__number">
                                        <i class="fa-solid fa-box-archive" id="giaosanpham-icon"></i>
                                    </p>
                                    <p class="process__name">Giao sản phẩm</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-3">
                            <div class="process__group">
                                <a href="./photopayment.php" target="loadpage" class="process__step">
                                    <p class="process__number">
                                        <i class="fa-solid fa-check" id="thanhtoan-icon"></i>
                                    </p>
                                    <p class="process__name">Đã được thanh toán</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <article>
                    <iframe id="myiframe" src="./photoconfirm.php" name="loadpage" frameborder="0" height="700px" width="100%" style="padding-top: 43px ;  " scrolling="no" onload="resizeIframe();"></iframe>
                    </article>
                </div> 
            </div>
        </div>
    </div>

    
    <script type="text/javascript">
    function resizeIframe() {
        var iframe = document.getElementById('myiframe');
        if (iframe) {
            var newHeight = iframe.contentWindow.document.body.scrollHeight + 600;
            iframe.style.height = newHeight + 'px';
        }
    }

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