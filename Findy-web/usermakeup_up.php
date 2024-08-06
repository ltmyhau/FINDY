<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
        <div class="header">
            <div class="header-content">
                <p>THÊM SẢN PHẨM CHO SÁCH GIÁO KHOA</p>
            </div>
        </div>
    </section>
    <?php
        include "connect.php";
    ?>
    <?php
        $connect = new connect;
        if($_SERVER['REQUEST_METHOD']==='POST'){
        $insert_usermakeupup = $connect -> insert_usermakeupup();
        }
    ?>
    <section>
        <div class="insert-sgk l-12 c-12 m-12">
            <div class="insert-sgk-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    
                    
                    <div class="insert-img">
                        <label for="">Chọn ảnh</label>
                        <input type="file" name="hinhAnh" id="">
                    </div>
                    <div class="insert-name">
                        <label for="">Nhập tên công việc</label>
                        <input type="text" name="tenCongViec" id="">
                    </div>
                    <div class="insert-mota">
                        <label for="">Nhập mô tả</label>
                        <input type="text" name="moTa" id="">
                    </div>
                    <div class="insert-congcu">
                        <label for="">Nhập công cụ</label>
                        <input type="text" name="congCu" id="">
                    </div>
                
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>