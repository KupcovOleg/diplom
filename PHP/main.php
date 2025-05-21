<?php
session_start();
unset($_SESSION['banner_fav']);
unset($_SESSION['banner_region']);
unset($_SESSION['banner_reg']);
unset($_SESSION['banner_sign']);
?>
<main class="main pb-5">
    <section class="main-image">
        <div class="bg-image d-flex flex-column align-content-center justify-content-center text-white">
            <h5 class="text-center display-1" style="color: #D1D996;">Жилой Комплекс</h5>
            <div class="d-flex justify-content-center">
                <hr class="border border-1 opacity-100 w-50">
            </div>
            <p class="lead text-center pb-5 display-3" style="color: #D1D996;">в Нижнем Новгороде</p>
        </div>
    </section>
    <section>
        <h2 class="text-center py-5 text-secondary">Почему нас выбирают?</h2>
        <div class="container d-flex">
            <div class="row row-cols-1 row-cols-2 g-4 text-center">
                <div class="col col-6">
                    <div class="card py-1" style="background-color: #D1D996;">
                        <div class="d-flex justify-content-center pe-none"><img src="image/geo.png" alt="..." width="200px" height="200px"></div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Выгодное расположение</h5>
                            <p class="card-text">ЖК располагается рядом с рекой и озером-пляжем</p>
                        </div>
                    </div>
                </div>
                <div class="col col-6">
                    <div class="card py-1" style="background-color: #D1D996;">
                        <div class="d-flex justify-content-center pe-none lol"><img src="image/tree.png" alt="..." width="200px" height="200px"></div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Окружены лесом</h5>
                            <p class="card-text">ЖК окружен сосновым таежным лесом со всех четырех сторон</p>
                        </div>
                    </div>
                </div>
                <div class="col col-6">
                    <div class="card py-1" style="background-color: #D1D996;">
                        <div class="d-flex justify-content-center pe-none"><img src="image/truck.png" alt="..." width="200px" height="200px"></div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Просто добраться</h5>
                            <p class="card-text">ЖК располагается рядом с Магистралью 8, что гарантирует быстрый путь без пробок</p>
                        </div>
                    </div>
                </div>
                <div class="col col-6">
                    <div class="card py-1" style="background-color: #D1D996;">
                        <div class="d-flex justify-content-center pe-none"><img src="image/shop.png" alt="..." width="200px" height="200px"></div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Торговый Центр</h5>
                            <p class="card-text">В половине км от ЖК расположен ТЦ "НРТК", в котором вас ждут продукты питания и не только</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <h2 class="text-center py-5 text-secondary">Расположение на карте</h2>
        <div class="why">
            <div class="container d-flex justify-content-center">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad00bf622e82232c5daf3f2e945e66b9e78df4b42fa7744d7323b1348c2f00fa2&amp;width=600&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>
    <section class="slides">
        <div class="image-new">
            <h2 class="text-center py-5 text-secondary">Новостная лента ЖК</h2>
            <div id="Carousel3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner image-new px-5">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center pe-none">
                            <img src="image/new/new1.jpg" alt="Los Angeles" class="d-block" height="600px" width="100%">
                        </div>
                        <div class="carousel-caption p-3 text-secondary" style="background-color: #D1D996;">
                            <h3>Наконец-то закончилась работа с проводкой!</h3>
                            <p>Уважаемые жильцы! Наконец-то завершилась работа с проводкой между улицей Ясной и Московским перекрестком, которая длилась 6 месяцев!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center pe-none">
                            <img src="image/new/new2.jpg" alt="Los Angeles" class="d-block"  height="600px" width="100%">
                        </div>
                        <div class="carousel-caption p-3 text-secondary" style="background-color: #D1D996;">
                            <h3>Популярность растет</h3>
                            <p>Наш ЖК вновь заказал себе рекламу у НРТК! А это значает только одно - мы станем еще популярнее! Спасибо вам за поддержку!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center pe-non">
                            <img src="image/new/new3.jpg" alt="Los Angeles" class="d-block" height="600px" width="100%">
                        </div>
                        <div class="carousel-caption p-3 text-secondary" style="background-color: #D1D996;">
                            <h3>Новостная летная</h3>
                            <p>После чрезмерных усилий, мы добавили долгожданную ленту новостей. Здесь выдут выкладываться только новости и объявления, связанные с нашим ЖК</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#Carousel3" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style="background-color: black;" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#Carousel3" role="button" data-bs-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"  style="background-color: black"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function() {
        var scroll_start = 0;
        var startchange = $('#change');
        var offset = startchange.offset();
        if (startchange.length) {
            $(document).scroll(function() {
                scroll_start = $(this).scrollTop();
                if (scroll_start > offset.top) {
                    $('.nav-cust').css('background-color', 'rgba(0, 64, 123, 0.9)');
                } else {
                    $('.nav-cust').css('background-color', 'rgba(67, 155, 123, 0.9)');
                }
            })
        }
    })
</script>