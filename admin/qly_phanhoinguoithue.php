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
        $select_phanhoitunguoidung = $connect->select_phanhoitunguoidung();
        ?>

        <table>
            <tr>
                <th>Mã phản hồi</th>
                <th>Mã thông tin thuê</th>
                <th>Phản hồi</th>
                <th>Thời gian</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>

            <?php
            if ($select_phanhoitunguoidung) {
                while ($result = $select_phanhoitunguoidung->fetch_assoc()) {
                    $maphanhoitunguoidung = $result['mabaocao'];

                    $mathongtinthue =     $result['mathongtintho'];
                    $phanhoi =      $result['ma_posttimtho'];
                    $thoigian =  $result['reason'];
                    $drive =  $result['drive'];
                    
            ?>

                    <tr>

                        <td><?php echo $maphanhoitunguoidung ?></td>
                        <td><?php echo  $mathongtinthue ?> </td>
                        <td><?php echo $phanhoi ?></td>
                        <td><?php echo $thoigian ?></td>
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
                                <input name="maphanhoitunguoidung-edit" value="<?php echo $maphanhoitunguoidung ?>">
                            </td>
                            <td>
                                <input name="mathongtinthue-edit" value="<?php echo $mathongtinthue ?>">
                            </td>
                            <td>
                                <input name="phanhoi-edit" value="<?php echo $phanhoi ?>">
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