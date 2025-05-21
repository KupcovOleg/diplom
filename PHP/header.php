<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css.map">
    <link rel="stylesheet" href="style.scss">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js" integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="JS/code.js"></script>
    <script src="JS/modal.js"></script>
    <script src="bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.3.2/dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2/dist/js/bootstrap.min.js"></script>
    <title>ЖК "Альбион"</title>
</head>

<body>
    <header class="<?php $page = $_GET['page'];
                    if (!isset($page) or $page == "main") {
                        echo "";
                    } else {
                        echo "pb-5";
                    } ?> ">
        <nav class="navbar navbar-expand-lg bg-body-secondary bg-opacity-75 fixed-top nav-cust" style="background: #F2F2F2">
            <div class="container">
                <a class="navbar-brand d-inline-flex align-items-center" href="index.php?page=main">
                    <img src="image/logo.png" alt="logo" width="50" height="50" class="d-inline-block align-text-top">
                    ЖК
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php?page=main">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=main#main_map">КАРТА</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn nav-link dropdown-toggle text-start" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ВЫБРАТЬ НЕДВИЖИМОСТЬ
                            </a>
                            <ul class="dropdown-menu py-1" style="background-color: #D1D996;"">
                                <li>
                                    <a class=" dropdown-item text-secondary" style="background-color: #D1D996;" href="index.php?page=catalog">Недвижимость</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-secondary" style="background-color: #D1D996;" href="index.php?page=plan">Участок</a>
                                </li>
                            </ul>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=about">О НАС</a>
                    </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="open-modal-btn">
                        <li class="tel_holder text-black text-decoration-none">
                            <div class="list-group-flush">
                                +7 953 566 16 16
                            </div>
                            <div>
                                <small>для записи на осмотр</small>
                            </div>
                        </li>
                    </ul>
                    <a class="navbar-brand d-inline-flex align-items-center" href="<?php if (!isset($_SESSION['user'])) {
                                                                                        echo "index.php?page=login";
                                                                                    } elseif ($_SESSION['user']['role'] == 0) {
                                                                                        echo "index.php?page=cab-user";
                                                                                    } else {
                                                                                        echo "index.php?page=cab-admin";
                                                                                    } ?> 
                                                                                    ">
                        <img src="<?php if (!isset($_SESSION['user'])) {
                                        echo 'image/client/user_pas.png';
                                    } elseif ($_SESSION['user'])
                                        echo $_SESSION['user']['image']; ?>" alt="user_pas" width="30" height="30">
                        <small class="m-1"><?php if (!isset($_SESSION['user'])) {
                                                echo 'войти';
                                            } elseif ($_SESSION['user'])
                                                echo $_SESSION['user']['name']; ?></small>
                    </a>
                </div>
            </div>
        </nav>
        <div class="modal" id="my-modal">
            <div class="modal__box  text-secondary">
                <button class="modal__close-btn" id="close-my-modal-btn">
                    <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                        <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                    </svg>
                </button>
                <h2>Запись по телефону</h2>
                <p>Здравствуйте. Если вы хотите записаться за осмотр или консультацию, пожалуйста, позвоните на этот номер телефона или нажмите на него: <a href="tel:+79535661616">+7 953 566 16 16</a></p>
            </div>
        </div>
        <script>
            document.getElementById("open-modal-btn").addEventListener("click", function() {
                document.getElementById("my-modal").classList.add("open")
            })
            document.getElementById("close-my-modal-btn").addEventListener("click", function() {
                document.getElementById("my-modal").classList.remove("open")
            })
            window.addEventListener('keydown', (e) => {
                if (e.key === "Escape") {
                    document.getElementById("my-modal").classList.remove("open")
                }
            });
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
    </header>
<script>
    $('.navbar-nav').on('click', 'li:not(.dropdown)>a', () => $('.navbar-collapse').collapse('hide'));
</script>