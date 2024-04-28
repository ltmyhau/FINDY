<link rel="stylesheet" href="/footer.css">

<section>
    <div class="footer">
        <div class="grid wide">
            <div class="footer_container row">
                <div class="footer_findy col c-6 m-4 l-2-4">
                    <h1>Findy</h1>
                    <ul>
                        <a href="">
                            <li>Dự án</li>
                        </a>
                        <a href="">
                            <li>Cuộc thi</li>
                        </a>
                        <a href="">
                            <li>Thành viên</li>
                        </a>
                        <a href="">
                            <li>Quản lý dự án</li>
                        </a>
                        <a href="">
                            <li>Hình ảnh khắp nơi</li>
                        </a>
                        <a href="">
                            <li>Xác thực</li>
                        </a>
                    </ul>
                </div>
                <div class="footer_introduce col c-6 m-4 l-2-4">
                    <h1>Giới thiệu</h1>
                    <ul>
                        <a href="">
                            <li>Về chúng tôi</li>
                        </a>
                        <a href="">
                            <li>Cách thức hoạt động</li>
                        </a>
                        <a href="">
                            <li>Bảo mật</li>
                        </a>
                        <a href="">
                            <li>Nhà đầu tư</li>
                        </a>
                        <a href="">
                            <li>Sơ đồ trang</li>
                        </a>
                        <a href="">
                            <li>Tin tức</li>
                        </a>
                        <a href="">
                            <li>Đội ngũ</li>
                        </a>
                        <a href="">
                            <li>Công việc</li>
                        </a>
                    </ul>
                </div>
                <div class="footer_rules col c-6 m-4 l-2-4">
                    <h1>Điều khoản</h1>
                    <ul>
                        <a href="">
                            <li>Chính sách bảo mật</li>
                        </a>
                        <a href="">
                            <li>Điều khoản và điều kiện</li>
                        </a>
                        <a href="">
                            <li>Chính sách bản quyền</li>
                        </a>
                        <a href="">
                            <li>Quy tắc ứng xử</li>
                        </a>
                        <a href="">
                            <li>Các loại phí</li>
                        </a>
                    </ul>
                </div>
                <div class="footer_socials col c-6 m-4 l-2-4">
                    <h1>Cộng đồng FINDY</h1>
                    <ul>
                        <a href="https://www.facebook.com/profile.php?id=61553281270154" target="_blank">
                            <li>
                                <i class="fa-brands fa-facebook-f"></i>
                                Facebook
                            </li>
                        </a>
                        <a href="https://www.tiktok.com/@findy100803" target="_blank">
                            <li>
                                <i class="fa-brands fa-tiktok"></i>
                                Tiktok
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="footer_app col c-6 m-4 l-2-4">
                    <h1>Ứng dụng</h1>
                    <ul>
                        <a href="">
                            <li><img src="/img/app-store.svg" alt=""></li>
                        </a>
                        <a href="">
                            <li><img src="/img/google-play.svg" alt=""></li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="choice_service">
    <div class="choice_service_container">
        <h3 class="choice_service_container-heading">Bạn là thợ hay người thuê?</h3>
        <div class="choice_service_content">
            <div class="choice_service_content_container">
                <div class="choice_service_content-btn" onclick="showRegisterForm2()">
                    <img src="/img/lam-tho.png" alt="Muốn làm thợ" class="choice_service_content-img">
                    <div class="choice_service_content-text">Muốn làm thợ</div>
                </div>
                <div class="choice_service_content-btn" onclick="showRegisterForm()">
                    <img src="/img/lam-nguoi-thue.png" alt="Muốn làm người thuê" class="choice_service_content-img">
                    <div class="choice_service_content-text">Muốn làm người thuê</div>
                </div>
            </div>
        </div>
        <div class="account_form__footer">
            <p class="account_form__text">
                Bạn đã có tài khoản Findy?
                <div class="account_form__link" onclick="showLoginForm()">Đăng nhập</div>
            </p>
        </div>
    </div>
</div>

<div class="modal">
    <div class="modal__container">
        
        <?php
        $connect = new connect;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $insert_accountthue = $connect->insert_accountthue();
        }
        ?>
        <form class="account_form hidden" id="register-form" method="POST">
            <div class="account_form__container">
                <h3 class="account_form__heading">Đăng ký thuê</h3>

                <div class="account_form__form">
                    <input name="hoTen" type="text" class="account_form__input" placeholder="Họ và tên">
                    <input name="Email" type="email" class="account_form__input" placeholder="Email">
                    <input name="matKhau" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    <input name="repeatmatKhau" type="password" class="account_form__input" placeholder="Nhập lại mật khẩu">
                </div>

                <div class="account_form__aside">
                    <p class="account_form__policy-text">
                        Tôi đã đọc và đồng ý với
                        <a href="" class="account_form__policy-link">Điều khoản dịch vụ Findy</a>,
                        bao gồm
                        <a href="" class="account_form__policy-link">Thỏa thuận người dùng</a>
                        và
                        <a href="" class="account_form__policy-link">Chính sách bảo mật</a>.
                    </p>
                </div>

                <button type="submit" class="btn btn--primary account_form__btn">Đăng ký</button>
            </div>

            <div class="account_form__socials">
                <p class="account_form__separate">
                    <span class="account_form__separate-text">Hoặc</span>
                </p>

                <div class="account_form__socials-list">
                    <a href="" class="btn account_form__socials--facebook">
                        <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                        <span class="account_form__socials-title">
                            Facebook
                        </span>
                    </a>
                    <a href="" class="btn account_form__socials--google">
                        <span class="account_form__socials-icon">
                            <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g data-v-48748210="">
                                    <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="account_form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </div>

            <div class="account_form__footer">
                <p class="account_form__text">
                    Bạn đã có tài khoản Findy?
                    <div class="account_form__link" onclick="showLoginForm()">Đăng nhập</div>
                </p>
            </div>
        </form>
        <?php
        $connect = new connect;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $insert_accounttho = $connect->insert_accounttho();
        }
        ?>
        <form class="account_form2 hidden" id="register-form2" method="POST">
            <div class="account_form__container">
                <h3 class="account_form__heading">Đăng ký thợ</h3>

                <div class="account_form__form">
                    <input name="hoTen2" type="text" class="account_form__input" placeholder="Họ và tên">
                    <input name="Email2" type="email" class="account_form__input" placeholder="Email">
                    <input name="matKhau2" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    <input name="repeatmatKhau2" type="password" class="account_form__input" placeholder="Nhập lại mật khẩu">
                </div>

                <div class="account_form__aside">
                    <p class="account_form__policy-text">
                        Tôi đã đọc và đồng ý với
                        <a href="" class="account_form__policy-link">Điều khoản dịch vụ Findy</a>,
                        bao gồm
                        <a href="" class="account_form__policy-link">Thỏa thuận người dùng</a>
                        và
                        <a href="" class="account_form__policy-link">Chính sách bảo mật</a>.
                    </p>
                </div>

                <button type="submit" class="btn btn--primary account_form__btn">Đăng ký</button>
            </div>

            <div class="account_form__socials">
                <p class="account_form__separate">
                    <span class="account_form__separate-text">Hoặc</span>
                </p>

                <div class="account_form__socials-list">
                    <a href="" class="btn account_form__socials--facebook">
                        <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                        <span class="account_form__socials-title">
                            Facebook
                        </span>
                    </a>
                    <a href="" class="btn account_form__socials--google">
                        <span class="account_form__socials-icon">
                            <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g data-v-48748210="">
                                    <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="account_form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </div>

            <div class="account_form__footer">

                <p class="account_form__text">
                    Bạn đã có tài khoản Findy?
                    <div class="account_form__link" onclick="showLoginForm()">Đăng nhập</div>
                </p>
            </div>
        </form>

        <form class="account_form hidden" id="login-form" method="POST" action="/login_process.php">
            <div class="account_form__container">
                <h3 class="account_form__heading">Đăng nhập</h3>

                <div class="account_form__form">
                    <input name="Emailuser" type="email" class="account_form__input" placeholder="Email">
                    <input name="Passworduser" type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                </div>

                <button type="submit" class="btn btn--primary account_form__btn">Đăng nhập</button>
            </div>

            <div class="account_form__socials">
                <p class="account_form__separate">
                    <span class="account_form__separate-text">Hoặc</span>
                </p>

                <div class="account_form__socials-list">
                    <a href="" class="btn account_form__socials--facebook">
                        <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                        <span class="account_form__socials-title">
                            Facebook
                        </span>
                    </a>
                    <a href="" class="btn account_form__socials--google">
                        <span class="account_form__socials-icon">
                            <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g data-v-48748210="">
                                    <path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="account_form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </div>

            <div class="account_form__footer">

                <p class="account_form__text">
                    Bạn chưa có tài khoản Findy?
                    <div class="account_form__link" onclick="showchoice_service()">Đăng ký</div>
                </p>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/main.js"></script>
<script src="/video.js"></script>

</body>

</html>