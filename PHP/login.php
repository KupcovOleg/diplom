<?php
session_start();
unset($_SESSION['banner_fav']);
unset($_SESSION['banner_region']);
unset($_SESSION['banner_reg']);
unset($_SESSION['banner_change_pass']);
unset($_SESSION['banner_change_name']);
?>
<section class="login main">
    <div class="mt-5 container text-secondary">
        <div class="forma">
            <div class="form-box">
                <div class="form-value">
                    <form action="PHP/event/sign.php" method="POST">
                        <h2 class=" text-secondary">Вход</h2>
                        <p><font class="d-flex justify-content-center" color="red">
                            <?php
                            if (isset($_SESSION['banner_sign'])) {
                                echo $_SESSION['banner_sign'];
                            }
                            ?>
                        </font></p>
                        <div class="inputbox">
                            <input type="email" placeholder=" " name="email" required value="<?php echo $_SESSION['banner_sign_email']?>">
                            <label for="" class=" text-secondary">Почта</label>
                        </div>
                        <div class="inputbox justify-content-between"> 
                            <input type="password" placeholder=" " name="password" required value="<?php echo $_SESSION['banner_sign_pas']?>">
                            <label for="" class=" text-secondary">Пароль</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-secondary btn-lg text-center text-white">Войти</button>
                        </div>
                        <div class="register">
                            <p class="text-secondary">Нет аккаунта? <i><b><a href="index.php?page=registration" class="text-secondary">Зарегистрироваться</a></b></i></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>