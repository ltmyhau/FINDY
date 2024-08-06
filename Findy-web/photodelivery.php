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
    $select_nhansanphamtho = $connect -> select_nhansanphamtho($id_tho); //
    $emptyImage = '<img src="./img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
    $dataDisplayed = false;
?>

<!-- <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Thông tin chi tiết</h2>
        <p>Địa chỉ: <span id="modalDiachi"></span></p>
    <p>Giá: <span id="modalGia"></span></p>
    <p>Thời gian: <span id="modalThoiGian"></span></p>
        <label for="driveLink">Enter Google Drive link:</label>
        <input type="text" id="driveLink" name="driveLink" placeholder="Paste link here">
        <br>
        <button onclick="closeModal()">Cancel</button>
        <button onclick="submitDriveLink()">Submit</button>
    </div>
</div> -->

<!-- Overlay HTML -->
<div id="myOverlay" class="overlay"></div>

<div class="row">
<?php
                                    if($select_nhansanphamtho){
                                        while($result = $select_nhansanphamtho->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];  
                                        $uniqueId = uniqid();  
                                        $dataDisplayed = true;  
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathongtintho = $result['mathongtintho'];
                                        $mathogiaosanpham = $result['mathogiaosanpham'];
                                        $ma_posttimtho = $result['ma_posttimtho'];
                                        $giatri = $result['giatri'];

                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="../img/<?php  echo $anhtho ?>" alt="Ảnh đại diện" class="order__avatar-img">
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
                        <strong><?php echo $mathogiaosanpham ?> </strong>
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
                <button class="btn order-btn" onclick="toggleAdditionalInfo('<?php echo $uniqueId; ?>', '<?php echo $diadiem; ?>',
                        '<?php echo $gia; ?>',
                        '<?php echo $thoigian; ?>',
                        '<?php echo $ma_posttimtho; ?>',
                        '<?php echo $mathongtintho; ?>')">Giao sản phẩm</button>                </div>
                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>
        <div id="additional-info_<?php echo $uniqueId; ?>" class="additional-info" style="display: none;">
        <?php
        
                $connect = new connect;
                if($_SERVER['REQUEST_METHOD']==='POST'){
                                                            
                $insert_sanpham = $connect->insert_sanpham();
                if($insert_sanpham){
                    $insert_thochochinhsua = $connect->insert_thochochinhsua();
                    if($insert_thochochinhsua){
                        $delete_thogiaosanpham = $connect->delete_thogiaosanpham($mathogiaosanpham);
                    }
                }
                                                                                                                   
            }
                                                        
        ?>
        <?php 
            // echo "mathogiaosanpham" .$mathogiaosanpham;
        ?>
            <form action="" method="POST">
                <div class="giaosp" style="font-size: 1.6rem;font-weight: 700;margin: 10px 3px;">
                    Giao sản phẩm
                </div>
                <input type="text" style="display: none;" name="inputmathogiaosp" value="<?php echo $ma_posttimtho ?>">
                <input type="text" style="display: none;" name="inputmathongtinthue" value="<?php echo $mathongtintho ?>">
                <input type="text"  name="inputdrive" id="inputdrive_<?php echo $uniqueId; ?>" placeholder="Nhập link google drive chứa sản phẩm ...">
                <button class="button_additional" type="submit">Hoàn thành</button>
            </form>
        </div> <!-- New container for additional info -->
                        <?php 
                                        }
                                    }
                                    

?>

<!-- =========================== -->


<?php 
    $select_thochochinhsua = $connect -> select_thochochinhsua($id_tho); //
?>

<?php
                                    if($select_thochochinhsua){
                                        while($result = $select_thochochinhsua->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];  
                                        $uniqueId1 = uniqid();  
                                        $dataDisplayed = true;  
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathongtinthuett = $result['mathongtinthue'];
                                        $mathochochinhsua = $result['mathochochinhsua'];
                                        $ma_posttimtho = $result['ma_posttimtho'];
                                        $giatri = $result['giatri'];
                                            
                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="../img/<?php  echo $anhtho ?>" alt="Ảnh đại diện" class="order__avatar-img">
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
                        <strong><?php echo $mathochochinhsua ?> </strong>
                    </span>
                    <span class="order__title">
                        Phong cách:
                        <strong><?php echo $phongcach  ?></strong>
                    </span>
                    <span class="order__title">
                        Tổng giá trị:
                        <strong><?php echo $giatri ?>đ</strong>
                    </span>
                </div>

                <div class="order__info">
                <button class="btn order-btn" onclick="toggleAdditionalInfo1('<?php echo $uniqueId1; ?>', '<?php echo $diadiem; ?>', '<?php echo $gia; ?>', '<?php echo $thoigian; ?>', '<?php echo $mathogiaosanphamtt; ?>', '<?php echo $mathongtinthuett; ?>')">Chờ phản hồi</button>
                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>
        <div id="additional-info1_<?php echo $uniqueId1; ?>" class="additional-info1" style="display: none;">
        <?php
                $connect = new connect;
                if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['inputmathogiaosp1']) && isset($_POST['inputmathongtinthue1'])){
                                                            
                $insert_sanphamtt = $connect->insert_sanphamtt($uniqueId1);
                                                                                                                   
            }
                                                        
        ?>
            <form action="./photopayment.php" method="POST">
                <input type="text" name="inputmathogiaosp1" value="<?php echo $mathogiaosanphamtt ?>">
                <input type="text" name="inputmathongtinthue1" value="<?php echo $mathongtinthuett ?>">
                <input type="text" name="inputdrive1" id="inputdrive_<?php echo $uniqueId1; ?>" placeholder="Nhập link google drive chứa sản phẩm ...">
                <button class="button_additional" type="submit">Hoàn thành</button>
            </form>
        </div> <!-- New container for additional info -->
                        <?php 
                                        }
                                    }

?>

<!-- ---------------------------------- -->

<?php 
    $select_yecauchinhsua = $connect -> select_yecauchinhsua($id_tho); //
?>

<?php
                                    if($select_yecauchinhsua){
                                        while($result = $select_yecauchinhsua->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];  
                                        $uniqueId1 = uniqid();
                                        $dataDisplayed = true;    
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathongtinthue = $result['mathongtinthue'];
                                        $mayeucauchinhsua = $result['mayeucauchinhsua'];
                                        $mathongtintho = $result['mathongtintho'];
                                        $ma_posttimtho = $result['ma_posttimtho'];
                                        $drive = $result['drive'];
                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="../img/<?php  echo $anhtho ?>" alt="Ảnh đại diện" class="order__avatar-img">
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
                        <strong><?php echo $mayeucauchinhsua ?> </strong>
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
                    <a style="text-decoration: none; color: black;font-size: 1.2rem;" href="<?php echo $drive ?>" target="_blank">Xem phản hồi</a>
                <button class="btn order-btn" onclick="toggleAdditionalInfo1('<?php echo $uniqueId1; ?>', '<?php echo $diadiem; ?>', '<?php echo $gia; ?>', '<?php echo $thoigian; ?>', '<?php echo $mayeucauchinhsua; ?>', '<?php echo $mathongtintho; ?>')">Chỉnh sửa</button>
                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>
        <div id="additional-info1_<?php echo $uniqueId1; ?>" class="additional-info1" style="display: none;">
        <?php
                $connect = new connect;
                if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['inputmathogiaosp2']) && isset($_POST['inputmathongtinthue2'])){
                                                            
                $insert_guilaisanpham = $connect->insert_guilaisanpham($uniqueId1);
                if($insert_guilaisanpham){
                    $insert_thochochinhsua2 = $connect->insert_thochochinhsua2();
                    if($insert_thochochinhsua2){
                        $delete_yeucauchinhsua = $connect->delete_yeucauchinhsua($ma_posttimtho, $mathongtintho);
                    }
                    else{
                        echo "Error";
                    }
                }else{
                    echo "Error";
                }
                                                                                                                   
            }
                                                        
        ?>
            <form action="./photodelivery.php" method="POST">
                <input type="text"  style="display: none;" name="inputmathogiaosp2" value="<?php echo $ma_posttimtho ?>">
                <input type="text"  style="display: none;" name="inputmathongtinthue2" value="<?php echo $mathongtintho ?>">
                <input type="text" name="inputdrive2" id="inputdrive_<?php echo $uniqueId1; ?>" placeholder="Nhập link google drive chứa sản phẩm ...">
                <button class="button_additional" type="submit">Hoàn thành</button>
            </form>
        </div> <!-- New container for additional info -->
                        <?php 
                                        }
                                    }

?>
<!-- ---------------------------------- -->
<?php 
    $select_nhansanphamthott = $connect -> select_nhansanphamthott($id_tho); //
?>

<?php
                                    if($select_nhansanphamthott){
                                        while($result = $select_nhansanphamthott->fetch_assoc()){
                                        $anhtho = $result['hinhanhthue'];  
                                        $uniqueId1 = uniqid();  
                                        $dataDisplayed = true;  
                                        $tentho = $result['hoTen'];
                                        $diadiem = $result['diadiem'];
                                        $thoigian = $result['thoigian'];
                                        $sukien = $result['sukien'];
                                        $phongcach = $result['phongcach'];
                                        $gia = $result['gia'];
                                        $mathongtinthuett = $result['mathongtinthue'];
                                        $mathogiaosanphamtt = $result['mathogiaosanphamtt'];
                                            
                                ?>
                        <div class="col l-12 m-12 c-12">
            <div class="order">
                <div class="order__avatar">
                    <img src="../img/<?php  echo $anhtho ?>" alt="Ảnh đại diện" class="order__avatar-img">
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
                        <strong><?php echo $mathogiaosanphamtt ?> </strong>
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
                <button class="btn order-btn" onclick="toggleAdditionalInfo1('<?php echo $uniqueId1; ?>', '<?php echo $diadiem; ?>', '<?php echo $gia; ?>', '<?php echo $thoigian; ?>', '<?php echo $mathogiaosanphamtt; ?>', '<?php echo $mathongtinthuett; ?>')">Giao sản phẩm</button>
                <a href="" class="order__detail">
                    Xem chi tiết
                    <i class="order__detail-icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>
        <div id="additional-info1_<?php echo $uniqueId1; ?>" class="additional-info1" style="display: none;">
        <?php
                $connect = new connect;
                if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['inputmathogiaosp1']) && isset($_POST['inputmathongtinthue1'])){
                                                            
                $insert_sanphamtt = $connect->insert_sanphamtt($uniqueId1);
                                                                                                                   
            }
                                                        
        ?>
            <form action="./photopayment.php" method="POST">
                <input type="text" name="inputmathogiaosp1" value="<?php echo $mathogiaosanphamtt ?>">
                <input type="text" name="inputmathongtinthue1" value="<?php echo $mathongtinthuett ?>">
                <input type="text" name="inputdrive1" id="inputdrive_<?php echo $uniqueId1; ?>" placeholder="Nhập link google drive chứa sản phẩm ...">
                <button class="button_additional" type="submit">Hoàn thành</button>
            </form>
        </div> <!-- New container for additional info -->
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
    function toggleAdditionalInfo1(uniqueId1, diadiem, gia, thoigian) {
        var additionalInfoDiv1 = document.getElementById('additional-info1_' + uniqueId1);

        // Check the current visibility state
        var isVisible1 = additionalInfoDiv1.style.display === 'block';

        // Toggle the visibility
        additionalInfoDiv1.style.display = isVisible1 ? 'none' : 'block';

        // If visible, populate and show the additional info
        if (!isVisible1) {
            additionalInfoDiv1.innerHTML = `
            <p>Địa điểm: ${diadiem}</p>
    <p>Thời gian: ${thoigian}</p>
    <p>Giá: ${gia}</p>
    <p>Giá: ${mathogiaosanpham}</p>
    <input type="text" name="inputmathogiaosp1_<?php echo $uniqueId1; ?>" value="<?php echo $mathogiaosanphamtt ?>">
    <input type="text" name="inputmathongtinthue1_<?php echo $uniqueId1; ?>" value="<?php echo $mathongtinthue ?>">
    <input type="text" name="inputdrive1_<?php echo $uniqueId1; ?>" id="inputdrive_${uniqueId1}" placeholder="Nhập link google drive chứa sản phẩm ...">
    <button class="button_additional1" type="submit">Hoàn thành</button>            `;
        }
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
                <input type="text" name="inputmathogiaosp_<?php echo $uniqueId; ?>" value="<?php echo $mathogiaosanpham ?>">
                <input type="text" name="inputmathongtinthue_<?php echo $uniqueId; ?>" value="<?php echo $mathongtinthue ?>">
                <input type="text" name="inputdrive_<?php echo $uniqueId; ?>" id="inputdrive_${uniqueId}" placeholder="Nhập link google drive chứa sản phẩm ...">
                <button class="button_additional" type="submit">Hoàn thành</button>
            `;
        }
    }
    
</script>
<!-- <script>
    function toggleAdditionalInfo(diadiem, gia, thoigian) {
        var additionalInfoDiv = document.querySelector('.additional-info');

        // Check if additional info is already visible
        if (additionalInfoDiv.style.display === 'block') {
            // If visible, hide it
            additionalInfoDiv.style.display = 'none';
        } else {
            // If hidden, populate and show it
            additionalInfoDiv.innerHTML = `
                <p>Địa điểm: ${diadiem}</p>
                <p>Thời gian: ${thoigian}</p>
                <p>Giá: ${gia}</p>
            `;
            additionalInfoDiv.style.display = 'block';
        }
    }
</script> -->
<!-- <script>
    function toggleAdditionalInfo(button, diadiem, gia, thoigian) {
        var orderContainer = button.closest('.order');
        var additionalInfoDiv = orderContainer.querySelector('.additional-info');

        // Check if additional info is already visible
        if (additionalInfoDiv.style.display === 'block') {
            // If visible, hide it
            additionalInfoDiv.style.display = 'none';
        } else {
            // If hidden, populate and show it
            additionalInfoDiv.innerHTML = `
                <p>Địa điểm: ${diadiem}</p>
                <p>Thời gian: ${thoigian}</p>
                <p>Giá: ${gia}</p>
            `;
            additionalInfoDiv.style.display = 'block';
        }
    }
</script> -->
<!-- <script>
    // Function to display the modal
    function openModal(diadiem, gia, thoigian) {
        document.getElementById('myModal').style.display = 'block';
        document.getElementById('myOverlay').style.display = 'block';
        document.getElementById('modalDiachi').innerText = diadiem;
    document.getElementById('modalGia').innerText = gia;
    document.getElementById('modalThoiGian').innerText = thoigian;    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
        document.getElementById('myOverlay').style.display = 'none';
    }
</script> -->
</body>
</html>