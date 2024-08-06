<link rel="stylesheet" href="/header.css">

<header class="header">
    <!-- <div class="top">

        </div> -->
    <div class="grid wide">

        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar__logo">
                <a href="/main.php" class="navbar__logo-link">
                    <img src="/img/findy-logo-ngang.png" alt="Findy" class="navbar__logo-img">
                </a>
            </div>
            <div class="navbar__heading-warp">
                <div class="navbar__heading">
                    <a href="/userful/hirephoto.php" class="navbar__heading-link">Tìm Thợ</a>
                </div>
                <div class="navbar__heading">
                    <a href="/userful/jobsearch.php" class="navbar__heading-link">Tìm việc</a>
                </div>
                <div class="navbar__heading">
                    <!-- <a href="/userful/create_profile.php" class="navbar__heading-link">Tạo hồ sơ</a> -->
                    <a href="#" class="navbar__heading-link">Tạo hồ sơ</a>
                </div>
                <div class="navbar__heading">
                    <a href="#" class="navbar__heading-link">Blog</a>
                </div>
            </div>
            <div class="navbar__heading-search">
                <i class="navbar__search-icon fa-solid fa-magnifying-glass"></i>
                <input type="text" class="navbar__search-input" placeholder="Tìm kiếm">
            </div>
            <div class="navbar__heading-controls">
                <div class="navbar__heading">
                    <div onclick="showLoginForm()" class="navbar__heading-link">Đăng nhập</div>
                </div>
                <div class="navbar__heading">
                    <div onclick="showchoice_service()" class="btn btn--primary navbar__heading-link">Đăng ký</div>
                </div>
            </div>

            <!-- Mobile menu icon -->
            <label for="mobile-bars-checkbox" class="navbar__mobile-bars">
                <i class="navbar__heading-icon fa-solid fa-bars"></i>
            </label>
        </nav>

        <input type="checkbox" hidden id="mobile-bars-checkbox" class="navbar__bars-checkbox">

        <!-- Mobile menu -->
        <div class="mobile__menu">
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                <div onclick="showchoice_service()" class="mobile__heading-link">Đăng ký</div>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                <div onclick="showLoginForm()" class="mobile__heading-link">Đăng nhập</div>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-users-between-lines"></i>
                <a href="/userful/hirephoto.php" class="mobile__heading-link">Thuê Thợ</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-magnifying-glass"></i>
                <a href="/userful/jobsearch.php" class="mobile__heading-link">Tìm việc</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-pen"></i>
                <!-- <a href="/userful/create_profile.php" class="mobile__heading-link">Tạo hồ sơ</a> -->
                <a href="#" class="mobile__heading-link">Tạo hồ sơ</a>
            </div>
            <div class="mobile__heading">
                <i class="mobile__heading-icon fa-solid fa-file-pen"></i>
                <a href="" class="mobile__heading-link">Blog</a>
            </div>
        </div>
    </div>
</header>