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
            $select_managerprofile = $connect->select_managerprofile();
            ?>
        
        <table> 
            <tr>
                <th>Mã profile</th>
                <th>Mã thông tin thợ</th>
                <th>Tên thợ</th>
                <th>Nghề nghiệp</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Giới thiệu</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
            if ($select_managerprofile) {
                while ($result = $select_managerprofile->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $result['ma_profile'] ?></td>
                        <td><?php echo $result['mathongtintho'] ?> </td>
                        <td><?php echo $result['ten'] ?></td>
                        <td><?php echo $result['nghenghiep'] ?></td>
                        <td><?php echo $result['sdt'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['diachi'] ?></td>
                        <td><?php echo $result['gioithieu'] ?></td>
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