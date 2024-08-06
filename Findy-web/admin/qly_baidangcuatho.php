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
            $select_baidangcuatho = $connect->select_baidangcuatho();
            ?>
        
        <table> 
            <tr>
                <th>Mã bài đăng</th>
                <th>Mã thông tin thợ</th>
                <th>Hình ảnh</th>
                <th>Content</th>
                <th>Thời gian đăng</th>
                <th>Likes</th>
                <th>Comments</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
            if ($select_baidangcuatho) {
                while ($result = $select_baidangcuatho->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $result['post_id'] ?></td>
                        <td><?php echo $result['user_id'] ?> </td>
                        <td><img src="<?php echo $result['image'] ?>" alt=""></td>
                        <td><?php echo $result['content'] ?></td>
                        <td><?php echo $result['post_date'] ?></td>
                        <td><?php echo $result['likes'] ?></td>
                        <td><?php echo $result['comments'] ?></td>
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