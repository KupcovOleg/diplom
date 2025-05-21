<?php
session_start();
?>
<footer class="">
    <section class="footer bg-body-secondary bg-opacity-75 text-secondary pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-1 text-center">
                    <ul class="list-unstyled">
                        <li><a href="index.php?page=main"><img class="opacity-75" src="image/logo.png" alt="logo" width="50" height="50" class="d-inline-block"></a>ЖК</li>
                    </ul>
                </div>
                <div class="col-md-3 col-6 text-secondary">
                    <h4>Информация</h4>
                    <ul class="list-unstyled">
                        <li><a href="index.php?page=main">Главная</a></li>
                        <li><a href="index.php?page=about">О нас</a></li>
                        <li><a href="https://disk.yandex.ru/i/5mGkHi6Ub7xL0g">Сертификаты</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h4>Время работы</h4>
                    <ul class="list-unstyled">
                        <li>ЖК, Балахнинский муниципальный округ, Нижегородская область</li>
                        <li>Круглосуточно</li>
                    </ul>
                </div>
                <div class="col-md-2 col-6">
                    <h4>Контакты</h4>
                    <ul class="list-unstyled">
                        <li id="open-modal-1">+7 953 566 16 16</li>
                        <li id="open-modal-2">+7 955 566 16 16</li>
                        <li>pochta@gmail.com</li>
                    </ul>
                </div>
                <div class="col-md-2 col-6">
                    <h4>Мы в соцсетях:</h4>
                    <div class="footer-icons">
                        <a href="https://vk.com/club226245245"><img class="img_dop" src="image/vk.png" alt="VK" width="30" height="30"></a>
                        <a href="https://www.youtube.com"><img class="img_dop" src="image/youtube.png" alt="YouTube" width="30" height="30"></a>
                        <a href="https://t.me/+Me8CNFiX5ThlYTdi"><img class="img_dop" src="image/telegram.png" alt="FaceBook" width="30" height="30"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer bg-body-secondary text-secondary">
        <div class="container">
            <div class="row">
                <div class="row justify-content-evenly">
                    <div class="col-3">
                        © 2024 ЖК, Inc.
                    </div>
                    <div class="col-3 text-break">
                        <a href="https://disk.yandex.ru/d/v2FhcYkWaSDOMg">Политика конфиденциальности</a>
                    </div>
                    <div class="col-3">
                        Разработали сайт - <a href="https://nntc.nnov.ru/">НРТК</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<div class="modal" id="my-modal-1">
    <div class="modal__box">
        <button class="modal__close-btn" id="close-my-modal-1">
            <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
            </svg>
        </button>
        <h2>Запись по телефону (бесплатно в РФ)</h2>
        <p>Здравствуйте. Если вы хотите записаться на осмотр, пожалуйста, позвоните на этот номер телефона или нажмите на него: <a href="tel:+79535661616">+7 953 566 16 16</a></p>
    </div>
</div>
<div class="modal" id="my-modal-2">
    <div class="modal__box">
        <button class="modal__close-btn" id="close-my-modal-2">
            <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
            </svg>
        </button>
        <h2>Запись по телефону (отдел продаж)</h2>
        <p>Здравствуйте. Если вы хотите записаться на консультацию, пожалуйста, позвоните на этот номер телефона или нажмите на него: <a href="tel:+79555661616">+7 955 566 16 16</a></p>
    </div>
</div>
<script>
    // Открыть модальное окно
    document.getElementById("open-modal-1").addEventListener("click", function() {
        document.getElementById("my-modal").classList.add("open")
    })
    // Закрыть модальное окно
    document.getElementById("close-my-modal-1").addEventListener("click", function() {
        document.getElementById("my-modal-1").classList.remove("open")
    })
    // Закрыть модальное окно при нажатии на Esc
    window.addEventListener('keydown', (e) => {
        if (e.key === "Escape") {
            document.getElementById("my-modal-1").classList.remove("open")
        }
    });
    // Закрыть модальное окно при клике вне его
    document.querySelector("#my-modal .modal__box").addEventListener('click', event => {
        event._isClickWithInModal = true;
    });
    document.getElementById("my-modal-1").addEventListener('click', event => {
        if (event._isClickWithInModal) return;
        event.currentTarget.classList.remove('open');
    });
</script>
<script>
    // Открыть модальное окно
    document.getElementById("open-modal-2").addEventListener("click", function() {
        document.getElementById("my-modal-2").classList.add("open")
    })

    // Закрыть модальное окно
    document.getElementById("close-my-modal-2").addEventListener("click", function() {
        document.getElementById("my-modal-2").classList.remove("open")
    })

    // Закрыть модальное окно при нажатии на Esc
    window.addEventListener('keydown', (e) => {
        if (e.key === "Escape") {
            document.getElementById("my-modal-2").classList.remove("open")
        }
    });

    // Закрыть модальное окно при клике вне его
    document.querySelector("#my-modal .modal__box").addEventListener('click', event => {
        event._isClickWithInModal = true;
    });
    document.getElementById("my-modal").addEventListener('click', event => {
        if (event._isClickWithInModal) return;
        event.currentTarget.classList.remove('open');
    });
</script>
<style>
    .modal {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        z-index: 9;
        background-color: rgba(0, 0, 0, .3);
        display: grid;
        align-items: center;
        justify-content: center;
        overflow-y: auto;
        visibility: hidden;
        opacity: 0;
        transition: opacity .4s, visibility .4s;
    }

    .modal__box {
        position: relative;
        max-width: 500px;
        padding: 45px;
        z-index: 1;
        margin: 30px 15px;
        background-color: white;
        box-shadow: 0px 0px 17px -7px rgba(34, 60, 80, 0.2);
        transform: scale(0);
        transition: transform .8s;
    }

    .modal__close-btn {
        position: absolute;
        top: 8px;
        right: 8px;
        border: none;
        background-color: transparent;
        padding: 5px;
        cursor: pointer;
    }

    .modal__close-btn svg path {
        transition: fill .4s;
    }

    .modal__close-btn:hover svg path {
        fill: blue;
    }

    .modal__close-btn:active svg path {
        fill: rgb(186, 53, 0);
    }

    .modal.open {
        visibility: visible;
        opacity: 1;
    }

    .modal.open .modal__box {
        transform: scale(1);
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>





</html>