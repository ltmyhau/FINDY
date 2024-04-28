<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/base.css">
    
    <link rel="stylesheet" href="../order-management.css">
    <link rel="stylesheet" type="" href="../cssphoto/danhgia.css">
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

// echo "ID của Thợ: " . $id_thue;
// echo "ID của Thợ: " . $hoTen;

?>

<?php
    include "../connect.php";
?>
<?php 
    $connect = new connect;
    $select_danhgia = $connect -> select_danhgia($id_thue); //
    $emptyImage = '<img src="../img/empty-search.png" alt="No data found" style="display: block; margin: auto;">';
    $dataDisplayed = false;
?>

        
                                <?php
                                    if($select_danhgia){
                                        while($result = $select_danhgia->fetch_assoc()){
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
                                        $mathongtinthue = $result['mathongtinthue'];
                                        $mathongtintho = $result['mathongtintho'];
                                        $mathuedanhgia = $result['mathuedanhgia'];
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
                            <strong><?php echo $mathuedanhgia ?></strong>
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
                                    <button class="btn order-btn" onclick="toggleAdditionalInfo('<?php echo $uniqueId; ?>', '<?php echo $diadiem; ?>',
                        '<?php echo $gia; ?>',
                        '<?php echo $thoigian; ?>'
                        )">Đánh giá</button>
                                    <a href="<?php echo $drive ?>" target="self"><div class="xemchitiet">
                                        Xem chi tiết
                                    </div> </a>                                       
                                    </div>  
                                </div>
</div>        
<div id="additional-infodanhgia_<?php echo $uniqueId; ?>" class="additional-infodanhgia" style="display: none;">

                                <?php
                                $connect = new connect;
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    $insert_thongtindanhgia = $connect->insert_thongtindanhgia();
                                }
                                    ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- <input type="text" name="inputdrive" id="inputdrive_<?php echo $uniqueId; ?>" placeholder="Nhập link google drive chứa sản phẩm ..."> -->
                <span class="danhgiatitle">Đánh giá thợ</span>
                <div class="anhtho">
                    <img src="../img/<?php echo $anhtho ?>" style=";width: 100px;height: auto;" alt="">
                    <span><?php echo $tentho ?></span>
                </div>
                <div class="danhgia">
                    <input type="text" name="rating1" id="rating1" style="display: none;">
                    
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5" onclick="updateRating('5')">
                        <label for="star5"></label>
                        <input type="radio" id="star4" name="rating" value="4" onclick="updateRating('4')">
                        <label for="star4"></label>
                        <input type="radio" id="star3" name="rating" value="3" onclick="updateRating('3')">
                        <label for="star3"></label>
                        <input type="radio" id="star2" name="rating" value="2" onclick="updateRating('2')">
                        <label for="star2"></label>
                        <input type="radio" id="star1" name="rating" value="1" onclick="updateRating('1')">
                        <label for="star1"></label>
                    </div>
                </div>
                <div class="mathongtintho">
                    <input style="display: none;" type="text" name="mathongtintho" id="" value="<?php echo $mathongtintho ?>">
                </div>
                <div class="mota">
                    <input style="display: none;" type="mathongtinthue" name="mathongtinthue" id="" value="<?php echo $mathongtinthue ?>">
                </div>
                <div class="mota">
                    <textarea name="mota" id="mota" rows="4" placeholder="Hãy chia sẽ những điều bạn thích về thợ này nhé"></textarea>
                    <!-- <input type="text" name="mota" id="" placeholder="Hãy chia sẽ những điều bạn thích về thợ này nhé"> -->
                </div>
                <div class="upload-container">
                    <label for="imageInput" class="upload-label" id="imageInputLabel">
                    <span class="upload-icon">+</span>
                    Thêm hình ảnh
                    </label>
                    <input name="hinhdanhgia" type="file" id="imageInput" accept="image/*" style="display: none;">
                    <img id="selectedImage" alt="Selected Image">
                </div>
                <div class="upload-container">
                    <!-- Video input -->
                    <label for="videoInput" class="upload-label" id="videoInputLabel">
                        <span class="upload-icon">+</span>
                        Thêm video
                    </label>
                    <input name="videodanhgia" type="file" id="videoInput" accept="video/*" style="display: none;">
                    <video id="selectedVideo" controls></video>
                </div>
                <button class="button_additional" type="submit">Hoàn Tất Đánh Giá</button>
            </form>
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
     function updateRating(value) {
        document.getElementById('rating1').value = value;
    }
    function toggleAdditionalInfo(uniqueId, diadiem, gia, thoigian) {
        var additionalInfoDiv = document.getElementById('additional-infodanhgia_' + uniqueId);

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
    function handleFileInputChange(input, label, previewElement) {
        input.addEventListener('change', function (event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function () {
                previewElement.src = reader.result;
                previewElement.style.display = 'block';

                // Change label text to "Change"
                label.innerText = 'Thay đổi ' + label.dataset.fileType;
            };

            reader.readAsDataURL(input.files[0]);
        });
    }

    // Handle image input
    var imageInput = document.getElementById('imageInput');
    var imageLabel = document.getElementById('imageInputLabel');
    var selectedImage = document.getElementById('selectedImage');
    imageLabel.dataset.fileType = 'Image';
    handleFileInputChange(imageInput, imageLabel, selectedImage);

    // Handle video input
    var videoInput = document.getElementById('videoInput');
    var videoLabel = document.getElementById('videoInputLabel');
    var selectedVideo = document.getElementById('selectedVideo');
    videoLabel.dataset.fileType = 'Video';
    handleFileInputChange(videoInput, videoLabel, selectedVideo);
</script>
</body>
</html>