<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/images.jpg" sizes="6x6">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./baseadmin.css">
    <link rel="stylesheet" href="./quanlyaccount.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.3.0-web/css/all.min.css">
    <title>Trang quản lý admin</title>
</head>

<body>
    <section>
        <div class="admin">
            <div class="grid wide">
                <div class="admin_container row">
                    <div class="manager_left col c-2 m-2 l-2">
                        <div class="manager_left-infor">
                            <div class="row">
                                <div class="infor_avatar col c-3 m-3 l-3">
                                    <img src="../img/avatar-1.png" alt="">
                                </div>
                                <div class="infor_name col c-9 m-9 l-9">
                                    <div class="name">
                                        Kiet
                                    </div>
                                    <div class="web" style="display: flex;">
                                        <div class="go_web">
                                            Xem web
                                        </div>
                                        <div class="delete_cache">
                                            Delete cache
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="manager_left-function">
                            <div class="function_header">
                                CHỨC NĂNG CỦA HỆ THỐNG
                            </div>
                            <div class="function_items">
                                <a href="home.php" target="loadpage">
                                    <div class="home">
                                        <i class="fa-solid fa-house-chimney"></i>
                                        Trang chủ
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="manager_web.php" target="loadpage">
                                    <div class="manager_web">
                                        <i class="fa-solid fa-gears"></i>
                                        <span>Quản lý website</span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="account.php" target="loadpage">
                                    <div class="manager_account">
                                        <i class="fa-solid fa-users"></i>
                                        <span>Quản lý account</span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="qly_thongtintho.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-solid fa-users-viewfinder"></i>
                                        Quản lý thông tin người thợ
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="qly_thongtinthue.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-solid fa-universal-access"></i>
                                        Quản lý thông tin khách thuê
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="manager_posttimtho.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-regular fa-clipboard"></i>
                                        Quản lý bài tìm thợ
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="manager_profile.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-regular fa-id-badge"></i>
                                        Quản lý profile
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="qly_baidangcuatho.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-solid fa-square-plus"></i>
                                        Quản lý bài đăng của thợ
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="thueqly_baidang.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                        Quản lý bài đăng
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="thoqly_yeucau.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-brands fa-stack-overflow"></i>
                                        Quản lý yêu cầu
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="qly_tacpham.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-solid fa-camera"></i>
                                        Quản lý tác phẩm
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="qly_thongtindanhgia.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-solid fa-comments"></i>
                                        Quản lý thông tin đánh giá
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="qly_phanhoinguoithue.php" target="loadpage">
                                    <div class="home">
                                    <i class="fa-solid fa-comment-medical"></i>
                                        Quản lý thông tin phản hồi
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="manager_right c-10 m-10 l-10">
                        <article>
                            <iframe name="loadpage" src="./qly_phanhoinguoithue.php" width="100%" height="1000px" frameborder="0"></iframe>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>