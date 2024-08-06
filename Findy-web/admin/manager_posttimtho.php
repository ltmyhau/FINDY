<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./manager_posttimtho.css">
    <title>Quản lý account</title>
</head>

<body>
    <header>
        Quản lý thông tin người thợ
    </header>
    <section>
        <?php
            include "function.php"
            ?>
            <?php
            $connect = new connect;
            $select_managerposttimtho = $connect->select_managerposttimtho();
            ?>
        
        <table> 
            <tr>
                <th>Mã bài đăng</th>
                <th>Mã thông tin thuê</th>
                <th>Tên bài đăng</th>
                <th>Địa điểm</th>
                <th>Thời gian</th>
                <th>Giá</th>
                <th>Sự kiện</th>
                <th>Phong cách</th>
                <th>Ảnh mẫu</th>
                <th>Mô tả chi tiết</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
            if ($select_managerposttimtho) {
                while ($result = $select_managerposttimtho->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $result['ma_posttimtho'] ?></td>
                        <td><?php echo $result['mathongtinthue'] ?> </td>
                        <td><?php echo $result['tenposttimtho'] ?></td>
                        <td><?php echo $result['diadiem'] ?></td>
                        <td><?php echo $result['thoigian'] ?></td>
                        <td><?php echo $result['gia'] ?></td>
                        <td><?php echo $result['sukien'] ?></td>
                        <td><?php echo $result['phongcach'] ?></td>
                        <td><img src="../img/<?php echo $result['anhmau'] ?>" alt=""></td>
                        <td><?php echo $result['motachitiet'] ?></td>
                        <td><a href="">X</a></td>
                        <td><a href="">></a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
        
    </section>
</body>

</html>