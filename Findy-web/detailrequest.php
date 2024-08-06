<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn đặt hàng</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */

/* Thiết lập các style cơ bản cho trang web */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.details-container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

/* Thiết lập style cho các phần tử cửa sổ pop-up */
.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
}

/* Tùy chỉnh giao diện nút "Xem chi tiết" */
button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

/* Tùy chỉnh liên kết trong chi tiết đơn đặt hàng */
a {
    text-decoration: none;
    color: #007BFF;
    transition: color 0.3s;
}

a:hover {
    color: #0056b3;
}

    </style>
</head>
<body>
    <!-- Nội dung trang -->
    <div class="details-container">
        <h1>Chi tiết đơn đặt hàng</h1>
        <div class="managerrequest_content-items">
            <div class="managerrequest_content-items--avatar">
                <img src="./img/381365316_305905915351952_8433167268195273607_n.png" alt="">
            </div>
            <div class="managerrequest_content-items--mid">
                <div class="name">
                    Ngô Nguyễn Tuấn Kiệt
                </div>
                <div class="address">
                    Quận 9, TP.Hồ Chí Minh
                </div>
                <div class="time">
                    8h:00p
                </div>
                <div class="style">
                    Chụp ảnh hiện đại
                </div>
                <div class="price">
                    500.000 <span>đ</span>
                </div>
                <div class="detail">
                    <!-- Khi người dùng bấm vào nút "Xem chi tiết," chúng ta sẽ mở một cửa sổ pop-up -->
                    <button type="button" onclick="showDetails()">Xem chi tiết</button>
                </div>
            </div>
            <div class="managerrequest_content-items--button">
                <button type="button"><a href="./acceptorder.php">Chấp nhận</a></button>
                <button type="button"><a href="">Từ chối</a></button>
            </div>
        </div>
    </div>

    <!-- Cửa sổ pop-up cho chi tiết đơn đặt hàng -->
    <div id="details-popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeDetails()">&times;</span>
            <!-- Nội dung chi tiết đơn đặt hàng sẽ được hiển thị ở đây -->
            <h2>Chi tiết đơn đặt hàng</h2>
            <!-- Thêm thông tin chi tiết ở đây -->
        </div>
    </div>

    <!-- JavaScript để hiển thị và đóng cửa sổ pop-up -->
    <script>
        function showDetails() {
            document.getElementById("details-popup").style.display = "block";
        }

        function closeDetails() {
            document.getElementById("details-popup").style.display = "none";
        }
    </script>
</body>
</html>
