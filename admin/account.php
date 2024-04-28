<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./account.css">
    <title>Quản lý account</title>
</head>

<body>
    <header>
        Quản lý tài khoản người dùng
    </header>
    <section>
        <?php
            include "function.php"
            ?>
            <?php
            $connect = new connect;
            $select_accounttho = $connect->select_accounttho();
            $select_accountthue = $connect->select_accountthue();
            ?>
        <div class="tho">
            Tài khoản thợ
        </div>
        <table> 
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Gmail</th>
                <th>Mật khẩu</th>
                <th>Vai trò</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
            if ($select_accounttho) {
                while ($result = $select_accounttho->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $result['id_tho'] ?></td>
                        <td><?php echo $result['hoTen'] ?> </td>
                        <td><?php echo $result['gmail'] ?></td>
                        <td><?php echo $result['matkhau'] ?></td>
                        <td><?php echo $result['role'] ?></td>
                        <td><a href="">X</a></td>
                        <td><a href="">></a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
        <div class="tho">
            Tài khoản thuê
        </div>
        <table> 
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Gmail</th>
                <th>Mật khẩu</th>
                <th>Vai trò</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
            if ($select_accountthue) {
                while ($result = $select_accountthue->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $result['id_thue'] ?></td>
                        <td><?php echo $result['hoTen'] ?> </td>
                        <td><?php echo $result['gmail'] ?></td>
                        <td><?php echo $result['matkhau'] ?></td>
                        <td><?php echo $result['role'] ?></td>
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