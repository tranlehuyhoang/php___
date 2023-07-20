<?php
include '../inc/Header.php';
if (isset($_SESSION['userid'])) {
    echo   $_SESSION['userid'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codeinsert = $code->loginuser($_POST);
}
?>
<div class="main-content-wrapper">
    <div class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-md--40">
                    <h2 class="heading-secondary mb--30">Login</h2>
                    <div class="login-reg-box p-4 bg--2">
                        <form class="form" action="" method="post">
                            <?php if (isset($codeinsert)) {
                                echo $codeinsert;
                            } ?>
                            <div class="form__group mb--20">
                                <label class="form__label" for="useremail">
                                    Username or email address <span>*</span>
                                </label>
                                <input type="text" name="useremail" id="username_email" class="form__input form__input--2">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="password">
                                    Password <span>*</span>
                                </label>
                                <input type="password" name="userpass" id="password" class="form__input form__input--2">
                            </div>
                            <div class="form__group d-flex align-items-center">
                                <button type="submit" class="btn btn-5 btn-style-1 color-1">Login</button>
                                <div class="custom-checkbox ml--20">
                                    <input type="checkbox" name="sessionStore" id="sessionStore" class="form__checkbox">

                                    <label for="sessionStore" class="form__checkbox--label">Remember me</label>
                                </div>
                            </div>
                            <a href="" class="forgot-pass">Forgot your password?</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="heading-secondary mb--30">Register</h2>
                    <div class="login-reg-box p-4 bg--2">
                        <form class="form" action="#">
                            <div class="form__group mb--20">
                                <label class="form__label" for="register_email">
                                    Email address <span>*</span>
                                </label>
                                <input type="text" name="register_email" id="register_email" class="form__input form__input--2">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="register_password">
                                    Password <span>*</span>
                                </label>
                                <input type="password" name="register_password" id="register_password" class="form__input form__input--2">
                            </div>
                            <div class="form__group">
                                <button type="submit" class="btn btn-5 btn-style-2">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../inc/Footer.php';
?>