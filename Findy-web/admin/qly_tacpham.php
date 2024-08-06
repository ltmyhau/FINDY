<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./thueqly_baidang.css">
    <title>Quản lý account</title>
</head>

<body>
    <header>
        Quản lý tác phẩm
    </header>
    <section>
        <?php
            include "function.php"
            ?>
            <?php
            $connect = new connect;
            $select_tacphamcuatho = $connect->select_tacphamcuatho();
            ?>
        
        <table> 
            <tr>
                <th>Mã tác phẩm</th>
                <th>Mã thông tin thợ</th>
                <th>Tên tác phẩm</th>
                <th>Hình</th>
                <th>Hình</th>
                <th>Hình</th>
                <th>Hình</th>
                <th>Khoảng giá</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
            if ($select_tacphamcuatho) {
                while ($result = $select_tacphamcuatho->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $result['matacpham'] ?></td>
                        <td><?php echo $result['mathongtintho'] ?> </td>
                        <td><?php echo $result['tentacpham'] ?></td>
                        <td><img src="../img/<?php echo $result['img1'] ?>" alt=""></td>
                        <td><img src="../img/<?php echo $result['img2'] ?>" alt=""></td>
                        <td><img src="../img/<?php echo $result['img3'] ?>" alt=""></td>
                        <td><img src="../img/<?php echo $result['img4'] ?>" alt=""></td>
                        <td><?php echo $result['khoanggia'] ?></td>
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