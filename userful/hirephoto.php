<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="/img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/findy-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="./hirephoto.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
        .navbar__heading-warp>.navbar__heading:nth-child(1)>.navbar__heading-link {
            color: var(--main-color);
        }
    </style>
</head>

<body>
    <?php
    include "../header.php"
    ?>
    <div class="container">
        <section>
            <div class="banner">
                <div class="grid wide">
                    <div class="banner_img">
                        <div class="banner_img-container">
                            <div class="banner_img-img">
                                <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                                <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                                <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                                <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                                <a href=""><img src="../img/386870903_305736715546458_1916554193795528438_n.png" alt=""></a>
                            </div>
                            <div class="button_banner">
                                <i class="button_banner-icon fa-solid fa-chevron-left"></i>
                                <i class="button_banner-icon fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="job">
                <div class="grid wide">
                    <div class="job-header">
                        Việc làm tốt nhất
                    </div>
                    <div class="row job_container">
                        <div class="col l-3 m-0 c-0">
                            <div class="filter">
                                <h3 class="filter__heading">
                                    <i class="filter__heading-icon fa-solid fa-filter"></i>
                                    Lọc
                                </h3>
                                <div class="filter__list">
                                    <div class="filter__item-warp">
                                        <div id="filter__place-item" class="filter__item">
                                            Địa điểm
                                            <i id="filter__place-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                            <i id="filter__place-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                        </div>
                                        <div id="filter__place-menu" class="filter__menu" style="display: none;">
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="place-1" class="">
                                                <label for="place-1" class="filter__menu-name">Hồ Chí Minh</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="place-2" class="">
                                                <label for="place-2" class="filter__menu-name">Hà Nội</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="place-3" class="">
                                                <label for="place-3" class="filter__menu-name">Đà Nẵng</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="place-4" class="">
                                                <label for="place-4" class="filter__menu-name">Đà Lạt</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="place-5" class="">
                                                <label for="place-5" class="filter__menu-name">Phú Quốc</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="place-6" class="">
                                                <label for="place-6" class="filter__menu-name">Khác</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter__item-warp">
                                        <div id="filter__price-item" class="filter__item">
                                            Giá
                                            <i id="filter__price-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                            <i id="filter__price-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                        </div>
                                        <div id="filter__price-menu" class="filter__menu" style="display: none;">
                                            <div class="filter__menu-item">
                                                <input type="text" name="" id="" class="filter__price-input" placeholder="₫ TỪ">
                                                <span class="filter__menu-name">-</span>
                                                <input type="text" name="" id="" class="filter__price-input" placeholder="₫ ĐẾN">
                                            </div>
                                            <button class="btn btn--primary filter__menu-btn">ÁP DỤNG</button>
                                        </div>
                                    </div>
                                    <div class="filter__item-warp">
                                        <div id="filter__experience-item" class="filter__item">
                                            Hình thức
                                            <i id="filter__experience-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                            <i id="filter__experience-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                        </div>
                                        <div id="filter__experience-menu" class="filter__menu" style="display: none;">
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="exp-1" class="">
                                                <label for="exp-1" class="filter__menu-name">Nhiếp ảnh trừu tượng</;>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="exp-2" class="">
                                                <label for="exp-2" class="filter__menu-name">Nhiếp ảnh kiến trúc</;>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="exp-3" class="">
                                                <label for="exp-3" class="filter__menu-name">Chụp ảnh trẻ sơ sinh</;>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="exp-4" class="">
                                                <label for="exp-4" class="filter__menu-name">Chụp ảnh đen trắng</;>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="exp-5" class="">
                                                <label for="exp-5" class="filter__menu-name">Make-up</;>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter__item-warp">
                                        <div id="filter__skill-item" class="filter__item">
                                            Phong cách
                                            <i id="filter__skill-icon-up" class="filter__item-icon fa-solid fa-chevron-up" style="display: none;"></i>
                                            <i id="filter__skill-icon-down" class="filter__item-icon fa-solid fa-chevron-down"></i>
                                        </div>
                                        <div id="filter__skill-menu" class="filter__menu" style="display: none;">
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="skill-1" class="">
                                                <label for="skill-1" class="filter__menu-name">Nàng thơ</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="skill-2" class="">
                                                <label for="skill-2" class="filter__menu-name">Truyền thống</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="skill-3" class="">
                                                <label for="skill-3" class="filter__menu-name">Cổ trang</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="skill-4" class="">
                                                <label for="skill-4" class="filter__menu-name">Hiện đại</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="skill-5" class="">
                                                <label for="skill-5" class="filter__menu-name">Quyến rũ</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="skill-6" class="">
                                                <label for="skill-6" class="filter__menu-name">Tuổi teen</label>
                                            </div>
                                            <div class="filter__menu-item">
                                                <input type="checkbox" id="skill-7" class="">
                                                <label for="skill-7" class="filter__menu-name">Thanh xuân</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col l-9 m-12 c-12">
                            <div class="jobbest_container">
                                <?php
                                include "../connect.php"
                                ?>
                                <?php
                                $connect = new connect;
                                $select_postjob = $connect->select_postjob();
                                ?>
                                <div class="jobbest_list">
                                    <div class="row">
                                        <?php
                                        if ($select_postjob) {
                                            while ($result = $select_postjob->fetch_assoc()) {
                                                $_SESSION['mathongtinthue '] = $result['mathongtinthue'];
                                                $_SESSION['tenposttimtho'] = $result['tenposttimtho'];
                                                $_SESSION['diadiem'] = $result['diadiem'];
                                                $_SESSION['thoigian'] = $result['thoigian'];
                                                $_SESSION['gia'] = $result['gia'];
                                                $_SESSION['sukien'] = $result['sukien'];
                                                $_SESSION['phongcach'] = $result['phongcach'];
                                                $_SESSION['anhmau'] = $result['anhmau'];
                                                $_SESSION['motachitiet'] = $result['motachitiet'];
                                        ?>
                                                <div class="col c-12 m-6 l-6">
                                                    <a href="./photoclick.php" class="jobbest_item-warp">
                                                        <div class="jobbest_item">
                                                            <!-- <div class="jobbest-list-top--left col c-2 m-2 l-2">
                                                            <img src="<?php echo $imguserphoto_up ?>" alt="">
                                                        </div> -->
                                                            <div class="jobbest_info">
                                                                <h3 class="jobbest_info-title"><?php echo $result['tenposttimtho']  ?></h3>
                                                                <div class="jobbest_info-info">
                                                                    <i class="jobbest_info-icon fa-solid fa-calendar-days"></i>
                                                                    <span class="jobbest_info-text"><?php echo $result['thoigian'] ?></span>
                                                                </div>
                                                                <div class="jobbest_info-info">
                                                                    <i class="jobbest_info-icon fa-solid fa-circle-dollar-to-slot"></i>
                                                                    <span class="jobbest_info-text"><?php echo $result['gia'] ?></span>
                                                                </div>
                                                                <div class="jobbest_info-info">
                                                                    <i class="jobbest_info-icon fa-solid fa-star"></i>
                                                                    <span class="jobbest_info-text"><?php echo $result['sukien'] ?></span>
                                                                </div>
                                                                <div class="jobbest_info-info">
                                                                    <i class="jobbest_info-icon fa-solid fa-location-dot"></i>
                                                                    <span class="jobbest_info-text"><?php echo $result['diadiem'] ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="jobbest_favourite">
                                                                <i class="jobbest_favourite-icon fa-regular fa-heart"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <script src="../find-timtho.js"></script>

    <?php
    include "../footer.php"
    ?>
</body>

</html>