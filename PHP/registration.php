<?php 
unset($_SESSION['banner_fav']);
unset($_SESSION['banner_region']);
unset($_SESSION['banner_sign']);
?>
<section class="registration pt-5 main">
    <div class="container">
        <div class="forma">
            <div class="form-box">
                <div class="form-value">
                    <form action="PHP/event/reg.php" method="POST">
                        <h2 class="text-secondary">Регистрация</h2>
                        <font class="d-flex justify-content-center">
                            <?php
                            if (isset($_SESSION['banner_reg'])) {
                                if ($_SESSION['banner_reg'] == "Такая почта уже используется") {
                                    echo '<font color="red">Такая почта уже используется</font>';
                                } elseif ($_SESSION['banner_reg'] == "Пароли не совпадают") {
                                    echo '<font color="orange">Пароли не совпадают</font>';
                                } elseif ($_SESSION['banner_reg'] == "Аккаунт успешно создан!") {
                                    echo '<font color="green">Аккаунт зарегистрирован!</font>';
                                }
                            }
                            ?>
                        </font>
                        <div class="inputbox">
                            <ion-icon name="people"></ion-icon>
                            <input type="text" placeholder="" name="name" id="validationDefault16" required value="<?php echo $_SESSION['banner_reg_name']?>">
                            <label for="validationDefault16" class="text-secondary">ФИО</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" placeholder="" name="email" id="validationDefault17" required value="<?php echo $_SESSION['banner_reg_email']?>">
                            <label for="validationDefault17" class=" text-secondary">Почта</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" placeholder="" name="password" id="validationDefault18" required value="<?php echo $_SESSION['banner_reg_pas1']?>">
                            <label for="validationDefault18" class="text-secondary">Пароль</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" placeholder="" name="password2" id="validationDefault19" required value="<?php echo $_SESSION['banner_reg_pas2']?>">
                            <label for="validationDefault19" class="text-secondary">Повтор пароля</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                            <label class="form-check-label" for="validationFormCheck1">
                                <a href="#" class="text-decoration-none text-secondary">Я даю согласие на обработку<br>персональных данных</a></label>
                            <div class="invalid-feedback" class="text-secondary">Отметьте этот флажок</div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-secondary btn-lg text-center text-white">Зарегистрироваться</button>
                        </div>
                        <div class="register">
                            <p class="text-secondary">Есть аккаунт? <i><b><a href="index.php?page=login" class="text-secondary">Войти</b></i></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
        toastTrigger.addEventListener('click', () => {
            toastBootstrap.show()
        })
    }
</script>