<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./baseadmin.css">
    <link rel="stylesheet" href=".//qly_thongtindanhgia.css">
    <title>Quản lý account</title>
</head>

<body>
    <header>
        Quản lý thông tin đánh giá
    </header>
    <section>
        <div class="thongtindanhgia">
            <div class="grid wide">
                <div class="thongtindanhgia_container">
                <?php
        include "function.php"
        ?>
        <?php
        $connect = new connect;
        $select_thongtindanhgia = $connect->select_thongtindanhgia();
        ?>

        <table>
            <tr>
                <th>Mã đánh giá</th>
                <th>Mã thông tin thuê</th>
                <th>Mã thông tin thợ</th>
                <th>Rating</th>
                <th>Mô tả</th>
                <th>Hình đánh giá</th>
                <th>Video đánh giá</th>
                <th>Thời gian</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>

            <?php
            if ($select_thongtindanhgia) {
                while ($result = $select_thongtindanhgia->fetch_assoc()) {
                    $madanhgia = $result['madanhgia'];

                    $mathongtinthue =     $result['mathongtinthue'];
                    $mathongtintho =      $result['mathongtintho'];
                    $rating =  $result['rating'];
                    $mota =  $result['mota'];
                    $hinhdanhgia =  $result['hinhdanhgia'];
                    $thoigian =  $result['thoigian'];
                    $videodanhgia = $result['videodanhgia'];
            ?>

                    <tr>

                        <td><?php echo $result['madanhgia'] ?></td>
                        <td><?php echo $result['mathongtinthue'] ?> </td>
                        <td><?php echo $result['mathongtintho'] ?></td>
                        <td><?php echo $result['rating'] ?></td>
                        <td><?php echo $result['mota'] ?></td>
                        <td><img src="../img/<?php echo $result['hinhdanhgia'] ?>" alt=""></td>
                        <td><img src="../img/<?php echo $result['videodanhgia'] ?>" alt=""></td>
                        <td><?php echo $result['thoigian'] ?></td>
                        <td>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                if (isset($_POST['delete'])) {
                                   // Handle delete
                                   $delete_thongtindanhgia = $connect->delete_thongtindanhgia();
                                } elseif (isset($_POST['edit'])) {
                                   
                                      
                                      $update_thongtindanhgia = $connect->update_thongtindanhgia();
                                   
                                }
                             }
                             
                            ?>
                            <form method="post" action="">
                                <input name="madanhgia" style="display: none;" value="<?php echo $madanhgia ?>">
                                <button type="submit" name="delete">X</button>
                            </form>
                        </td>
                        <td><a href="" class="edit-link">></a></td>
                    </tr>
                    <tr class="edit-row" style="display: none;">
                        <form method="post" action="">
                            <td>
                                <input name="madanhgia-edit" value="<?php echo $madanhgia ?>">
                            </td>
                            <td>
                                <input name="mathongtinthue-edit" value="<?php echo $mathongtinthue ?>">
                            </td>
                            <td>
                                <input name="mathongtintho-edit" value="<?php echo $mathongtintho ?>">
                            </td>
                            <td>
                                <input name="rating-edit" value="<?php echo $rating ?>">
                            </td>
                            <td>
                                <input name="mota-edit" value="<?php echo $mota ?>">
                            </td>
                            <td>
                                <input name="hinhdanhgia-edit" value="<?php echo $hinhdanhgia ?>">
                            </td>
                            <td>
                                <input name="videodanhgia-edit" value="<?php echo $videodanhgia ?>">
                            </td>
                            <td>
                                <input name="thoigian-edit" value="<?php echo $thoigian ?>">
                            </td>
                            <td>
                            <button type="submit" name="edit">Save</button>
                            </td>
                        </form>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
                </div>
            </div>
        </div>

    </section>
    <script>
   document.addEventListener('DOMContentLoaded', function () {
      var editLinks = document.querySelectorAll('.edit-link');
      var cancelButtons = document.querySelectorAll('.cancel-edit');

      editLinks.forEach(function (link) {
         link.addEventListener('click', function (event) {
            event.preventDefault();
            showEditRow(link);
         });
      });

      cancelButtons.forEach(function (button) {
         button.addEventListener('click', function (event) {
            event.preventDefault();
            hideEditRow(button);
         });
      });

      function showEditRow(element) {
         // Hide all edit rows
         var editRows = document.querySelectorAll('.edit-row');
         editRows.forEach(function (row) {
            row.style.display = 'none';
         });

         // Show the corresponding edit row
         var editRow = element.parentNode.parentNode.nextElementSibling;
         editRow.style.display = 'table-row';
      }

      function hideEditRow(element) {
         // Hide the current edit row
         var editRow = element.parentNode.parentNode.parentNode;
         editRow.style.display = 'none';
      }
   });
</script>


</body>

</html>