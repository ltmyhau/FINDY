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
        Quản lý bài đăng của khách thuê
    </header>
    <section>
        <?php
            include "function.php"
            ?>
            <?php
            $connect = new connect;
            $select_thoquanlyyeucau = $connect->select_thoquanlyyeucau();
            ?>
        
        <table> 
            <tr>
                <th>Mã quản lý bài đăng</th>
                <th>Mã thông tin thợ</th>
                <th>Mã bài đăng tìm thợ</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
            if ($select_thoquanlyyeucau) {
                while ($result = $select_thoquanlyyeucau->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $result['ma_quanlyyeucau'] ?></td>
                        <td><?php echo $result['ma_profile'] ?> </td>
                        <td><?php echo $result['mathongtinthue'] ?></td>
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