<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./qly_thongtinthue.css">
    <title>Quản lý account</title>
</head>

<body>
    <header>
        Quản lý thông tin người thuê
    </header>
    <section>
        <?php
            include "function.php"
            ?>
            <?php
            $connect = new connect;
            $select_thongtinthue = $connect->select_thongtinthue();
            ?>
        
        <table> 
            <tr>
                <th>Mã thông tin thợ</th>
                <th>ID</th>
                <th>Hình ảnh</th>
                <th>Địa chỉ</th>
                <th>Ngày sinh</th>
                <th>CCCD</th>
                <th>Giới tính</th>
                <th>SDT</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
            if ($select_thongtinthue) {
                while ($result = $select_thongtinthue->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $result['mathongtinthue'] ?></td>
                        <td><?php echo $result['id_thue'] ?> </td>
                        <td><img src="../img/<?php echo $result['hinhanhthue'] ?>" alt=""></td>
                        <td><?php echo $result['diachi'] ?></td>
                        <td><?php echo $result['ngaysinh'] ?></td>
                        <td><?php echo $result['cccd'] ?></td>
                        <td><?php echo $result['gioitinh'] ?></td>
                        <td><?php echo $result['sdt'] ?></td>
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