<?php
session_start();
unset($_SESSION['banner_fav']);
unset($_SESSION['banner_region']);
unset($_SESSION['banner_reg']);
unset($_SESSION['banner_sign']);
unset($_SESSION['banner_region_bye']);
?>
<div class="cabinet-user py-5 main text-secondary">
    <div class="container">
        <h2 class="h3 mb-3 text-black">Личный кабинет пользователя</h2>
        <div class="d-flex flex-row shadow nav-border">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3 nav-shadow pb-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"><i class="fa fa-user"></i> </div>
                        <b>Профиль</b>
                    </button>
                    <button class="nav-link text-white" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"><i class="fa fa-envelope"></i> </div>
                        <b>Заявки</b>
                    </button>
                    <button class="nav-link text-white" id="v-pills-like-tab" data-bs-toggle="pill" data-bs-target="#v-pills-like" type="button" role="tab" aria-controls="v-pills-like" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"><i class="fa fa-cog"></i> </div>
                        <b>Избранное</b>
                    </button>
                    <button class="nav-link text-white" id="v-pills-plan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-plan" type="button" role="tab" aria-controls="v-pills-plan" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"><i class="fa fa-cog"></i> </div>
                        <b>Участок</b>
                    </button>
                    <button class="nav-link text-white" id="open-modal0-btn" type="button" role="tab" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"><i class="fa fa-cog"></i></div>
                        <b>Выйти</b>
                    </button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active pt-4 me-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="d-flex align-items-center mb-3 row">
                            <div class="row col-md-3 px-3 d-flex justify-content-center">
                                <img src="<?php echo $_SESSION['user']['image']; ?>" alt="Нет фото" class="img-cont pb-2" style="max-width: 150px;">
                                <button class="btn btn-secondary mx-2" id="open-modalimage-btn">Сменить</button>
                            </div>
                            <div class="row px-3 col-md-6">
                                <h3><strong><?php echo $_SESSION['user']['name']; ?></strong></h3>
                                <p>Почта: <?= $_SESSION['user']['email']; ?></p>
                                <p>Личный идентификатор: <?= $_SESSION['user']['id']; ?></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 row">
                            <div class="col-lg-4 g-4">
                                <div class="card" style="background-color: #D1D996;"">
                                    <div class=" card-body">
                                        <form action="PHP/users/change_data.php" method="POST" class="d-flex flex-column 
                                    justify-content-center">
                                        <h4 class="text-center text-secondary"><label for="validationDefaultPassword" class="form-label">Смена пароля</label></h4>
                                        <input type="text" class="form-control 
                                        <?php if (!isset($_SESSION['banner_change_pass'])) {
                                            echo 'mb-4';
                                        } ?>" id="validationDefaultPassword" value="" required placeholder="Введите новый пароль" name="change_pass">
                                        <?php
                                        if (isset($_SESSION['banner_change_pass'])) {
                                            echo '<font color="green" class="text-center border border-success">' .
                                                $_SESSION['banner_change_pass'] . '</font>';
                                        }
                                        ?>
                                        <button class="btn btn-secondary mx-2" type="submit">Сменить пароль</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-3 g-4">
                            <div class="card" style="background-color: #D1D996;"">
                                    <div class=" card-body">
                                <form action="PHP/users/change_data.php" method="POST" class="d-flex flex-column justify-content-center">
                                    <h4 class="text-center text-secondary"><label for="validationDefaultName1" class="form-label">Смена имени</label></h4>
                                    <input type="text" class="form-control
                                    <?php if (!isset($_SESSION['banner_change_name'])) {
                                        echo 'mb-4';
                                    } ?>" id="validationDefaultName1" value="" required placeholder="Введите новое имя" name="change_name">
                                    <?php
                                    if (isset($_SESSION['banner_change_name'])) {
                                        echo '<font color="green" class="text-center border border-success">' . $_SESSION['banner_change_name'] . '</font>';
                                    }
                                    ?>
                                    <button class="btn btn-secondary mx-2" type="submit">Сменить имя</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-4 me-4" id="v-pills-like" role="tabpanel" aria-labelledby="v-pills-like-tab">
                <div class="d-flex pb-1 row">
                    <h4 class="col-3">Избранное</h4>
                    <a href="index.php?page=catalog" class="col-md-3">
                        <button class="btn btn-secondary mx-2">Добавить</button>
                    </a>
                </div>
                <div class="d-flex row m-0">
                    <?php
                    $id_user = $_SESSION['user']['id'];
                    $id_building = $_SESSION['id'];
                    $sql_like = $link->query("SELECT Favourite.id_like_building, Building.image, Building.name, Building.price 
                                    FROM `Building`, `Favourite` WHERE `id_like_building` = `id` AND `id_user` = $id_user");
                    if (!isset($sql_like)) {
                        echo 'Нет избранного';
                    } else {
                        foreach ($sql_like as $like) :
                            echo '
                            <div class="col-lg-3 g-4">
                                    <div class="card" style="background-color: #D1D996;"">
                                        <div class="card-body">
                                            <img src="' . $like['image'] . '" class="img-fluid" style="max-width: 100%;" >
                                            <p class="card-text text-center text-secondary">' . $like['name'] . '</p> 
                                            <p class="card-text text-center text-secondary">' . $like['price'] . ' руб</p>
                                            <div class="d-flex justify-content-around">
                                                <a class="d-flex justify-content-center text-decoration-none col-xl-3" href="index.php?page=single&id=
                                                ' . $like['id_like_building'] . '">
                                                    <button class="btn btn-secondary">Открыть</button>
                                                </a>
                                                <a class="d-flex justify-content-center text-decoration-none col-xl-3" href="PHP/like/like_delete.php?
                                                id_delete_like=' . $like['id_like_building'] . '">
                                                    <button class="btn btn-secondary mx-1">Удалить</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                            </div>
                            ';
                        endforeach;
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade pt-4 me-4" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="d-flex pb-1 row">
                    <h4 class="col-3">Создать заявку: </h4>
                    <button class="btn btn-secondary mx-2 col-md-3" id="open-modal4-btn">Консультация</button>
                    <button class="btn btn-secondary mx-2 col-md-3" id="open-modal5-btn">Бронирование</button>
                </div>
                <?php
                if (isset($_SESSION['banner_book_app'])) {
                    echo '<font color="red" class="text-center">' . $_SESSION['banner_book_app'] . '</font>';
                }
                ?>
                <?php
                if (isset($_SESSION['banner_con_app'])) {
                    echo '<font color="red" class="text-center">' . $_SESSION['banner_con_app'] . '</font>';
                }
                ?>
                <div class="d-flex row col-12">
                    <?php
                    $user_email = $_SESSION['user']['email'];
                    $sql_con = $link->query("SELECT Consultation.id_con, Consultation.id_status, Consultation.date, Status.status 
                            FROM `Consultation` JOIN `Status` ON `e-mail` = '$user_email' AND Consultation.id_status = Status.id");
                    if (!isset($sql_con)) {
                        echo "Нет заявок на Консультацию";
                    } else {
                        foreach ($sql_con as $con) :
                            echo '
                            <div class="g-4 col-md-5 mx-1">
                                <div class="col">
                                    <div class="card h-100" style="background-color: #D1D996;">
                                        <div class="card-body ">
                                            <p class="card-text text-center fw-bold">Консультация</p>
                                            <p class="card-text">' . 'Номер заявки: ' . $con['id_con'] . '</p> 
                                            <p class="card-text">' . 'Статус заявки: ' . $con['status'] . '</p>
                                            <p class="card-text">' . 'Запланировання дата: ' . $con['date'] . '</p>
                                            <a class="d-flex justify-content-center text-decoration-none" 
                                            href="PHP/application/consultation_delete.php?id_delete=' . $con['id_con'] . '">
                                            <button class="btn btn-secondary mx-2">Отменить</button></a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            ';
                        endforeach;
                    }
                    ?>
                    <?php
                    $user_email = $_SESSION['user']['email'];
                    $sql_book =  mysqli_query($link, "SELECT Booking.id_book, Booking.id_building_book, Status.status, Building.name, Booking.region_book
                            FROM `Booking` JOIN `Status` ON `e-mail` = '$user_email' AND Booking.id_status = Status.id AND Booking.id_status = Status.id AND Status.id != 2
                            JOIN `Favourite` ON Booking.id_building_book = Favourite.id_fav JOIN `Building` ON Favourite.id_like_building = Building.id");

                    $sql_book_done_1 = mysqli_query($link, "SELECT Booking.id_book, Booking.id_building_book, Status.status, Status.id, Building.name, Booking.region_book
                            FROM `Booking` JOIN `Status` ON `e-mail` = '$user_email' AND Booking.id_status = Status.id AND Status.id = 2
                            JOIN `Favourite` ON Booking.id_building_book = Favourite.id_fav JOIN `Building` 
                            ON Favourite.id_like_building = Building.id JOIN `Region` ON Region.user_region IS NULL 
                            AND Booking.region_book = Region.id_region");
                    $sql_num_book_1 = mysqli_num_rows($sql_book_done_1);

                    $sql_book_done_2 = mysqli_query($link, "SELECT Booking.id_book, Booking.id_building_book, Status.status, Status.id, Building.name, Booking.region_book
                            FROM `Booking` JOIN `Status` ON `e-mail` = '$user_email' AND Booking.id_status = Status.id AND Status.id = 2
                            JOIN `Favourite` ON Booking.id_building_book = Favourite.id_fav JOIN `Building` 
                            ON Favourite.id_like_building = Building.id JOIN `Region` ON Region.user_region = $id_user 
                            AND Booking.id_book = Region.id_booking_region and Region.status_pay_region = 1");
                    $sql_num_book_2 = mysqli_num_rows($sql_book_done_2);

                    $sql_buy = mysqli_query($link, "SELECT * FROM `Region` WHERE user_region = $id_user and status_pay_region = 2");
                    $sql_buy_ssd = mysqli_num_rows($sql_buy);
                    if (!isset($sql_book) && (!isset($sql_book_done_1)) && (!isset($sql_book_done_2))) {
                        echo "Нет заявок на Бронирование";
                    }
                    if (($sql_num_book_1 > 0)) {
                        foreach ($sql_book_done_1 as $book1) :
                            echo '
                            <div class="g-4 col-md-5 mx-1">
                                <div class="col">
                                    <div class="card h-100" style="background-color: #D1D996;">
                                        <div class="card-body">
                                            <p class="card-text text-center fw-bold">Бронирование</p>
                                            <p class="card-text">Номер заявки: ' . $book1['id_book'] . '</p> 
                                            <p class="card-text">Статус заявки: ' . $book1['status'] . '</p>
                                            <p class="card-text">Недвижимость: ' . $book1['name'] . '</p>
                                            <p class="card-text">Участок: ' . $book1['region_book'] . '</p>
                                            <a class="d-flex justify-content-center text-decoration-none" 
                                            href="index.php?page=payment&id=' . $book1['id_book'] . '">
                                            <button class="btn btn-secondary mx-2">Подтвердить</button></a>
                                            </div>
                                    </div>
                                </div> 
                            </div>
                            ';
                        endforeach;
                    }
                    if ($sql_num_book_2 > 0) {
                        foreach ($sql_book_done_2 as $book2) :
                            echo '
                            <div class="g-4 col-md-5 mx-1">
                                <div class="col">
                                    <div class="card h-100" style="background-color: #D1D996;">
                                        <div class="card-body">
                                            <p class="card-text text-center fw-bold">Покупка</p>
                                            <p class="card-text">' . 'Номер заявки: ' . $book2['id_book'] . '</p> 
                                            <p class="card-text">' . 'Статус заявки: ' . $book2['status'] . '</p>
                                            <p class="card-text">' . 'Недвижимость: ' . $book2['name'] . '</p>
                                            <p class="card-text">' . 'Участок: ' . $book2['region_book'] . '</p>
                                            <a class="d-flex justify-content-center text-decoration-none" 
                                            href="index.php?page=payment&id=' . $book2['id_book'] . '">
                                            <button class="btn btn-secondary mx-2">Оплатить</button></a>
                                            </div>
                                    </div>
                                </div> 
                            </div>
                            ';
                        endforeach;
                    }
                    if (isset($sql_book)) {
                        foreach ($sql_book as $book) :
                            echo '
                            <div class="g-4 col-md-5 mx-1">
                                <div class="col">
                                    <div class="card h-100" style="background-color: #D1D996;">
                                        <div class="card-body" >
                                            <p class="card-text text-center fw-bold">Бронирование</p>
                                            <p class="card-text">' . 'Номер заявки: ' . $book['id_book'] . '</p> 
                                            <p class="card-text">' . 'Статус заявки: ' . $book['status'] . '</p>
                                            <p class="card-text">' . 'Недвижимость: ' . $book['name'] . '</p>
                                            <p class="card-text">' . 'Участок: ' . $book['region_book'] . '</p>
                                            <a class="d-flex justify-content-center text-decoration-none" 
                                            href="PHP/application/booking_delete.php?id_delete=' . $book['id_book'] . '">
                                            <button class="btn btn-secondary mx-2">Отменить</button></a>
                                            </div>
                                    </div>
                                </div> 
                            </div>
                            ';
                        endforeach;
                    }
                    if ($sql_buy > 0) {
                        foreach ($sql_buy as $buy) :
                            echo '
                            <div class="g-4 col-md-5 mx-1">
                                <div class="col">
                                    <div class="card h-100" style="background-color: #D1D996;">
                                        <div class="card-body">
                                            <p class="card-text text-center fw-bold">Куплено</p>
                                            <p class="card-text">' . 'Недвижимость: ' . $buy['build_region'] . '</p>
                                            <p class="card-text">' . 'Участок: ' . $buy['id_region'] . '</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            ';
                        endforeach;
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade pt-4 me-4" id="v-pills-plan" role="tabpanel" aria-labelledby="v-pills-plan-tab">
                <div class="d-flex pb-1">
                    <h4 class="mx-2">Выбранный участок</h4>
                </div>
                <div class="row mx-2">
                    <?php
                    $sql_found_region = mysqli_query($link, "SELECT id_region_like_region FROM 
                    `Region_like` 
                    WHERE id_user_like_region = $id_user");
                    if (mysqli_num_rows($sql_found_region) > 0) {
                        foreach ($sql_found_region as $found) :
                            echo '<p>Номер вашего участка: ' . $found['id_region_like_region'] . '</p>
                                <a class="d-flex text-decoration-none px-2" href="index.php?page=plan">
                                <button class="btn btn-secondary">Изменить</button></a>';
                        endforeach;
                    } else {
                        echo '<p>Участок не выбран</p>
                            <a class="d-flex text-decoration-none px-2" href="index.php?page=plan">
                            <button class="btn btn-secondary">Выбрать</button></a>';
                    } ?> </div>
                <div class="d-flex pb-1">
                    <h4 class="mx-2">Купленные участки</h4>
                </div>
                <?php
                $sql_buy_region = mysqli_query($link, "SELECT id_region FROM `Region` 
                    WHERE user_region = $id_user AND status_pay_region = 2");
                foreach ($sql_buy_region as $buy) :
                    echo '
                    <div class="row mx-2">
                        <p>Номер участка: ' . $buy['id_region'] . '</p>
                    </div>';
                endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section>
    <div class="modal Смена_фото" id="my-modalimage">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btnimage">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h3 class="text-center">Смена изображения</h3>
            <div class="d-flex justify-content-center flex-column">
                <img src="<?php echo $_SESSION['user']['image']; ?>" alt="Нет фото" class="img-cont px-2 pb-5" style="max-width: 100%; height: auto;">
                <form action="change_image.php" method="POST" enctype="multipart/form-data">
                    <label for="validationTooltipUsername1" class="form-label"></label>
                    <input type="file" name="image" id="validationTooltipUsername1" required>
                    <button class="btn btn-secondary col-12 mt-3" type="submit" name="submit_image">Сменить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal На_консультацию" id="my-modal4">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn4">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h3 class="text-center">Создание заявки</h3>
            <form method="POST" action="PHP/application/consultation_add.php?id=<?php echo $_SESSION['user']['id']; ?>" class="row g-3">
                <div class="col-md-12 position-relative">
                    <label for="validationDefault002" class="form-label">ФИО</label>
                    <input type="text" class="form-control" id="validationDefault002" value="<?php echo $_SESSION['user']['name']; ?>" required placeholder="<?php echo $_SESSION['user']['name']; ?>" name="name">
                    <div class="valid-tooltip">
                        Все хорошо!
                    </div>
                </div>
                <div class="col-md-8 position-relative">
                    <label for="validationTooltipUsername" class="form-label">Почта</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="<?php echo $_SESSION['user']['email']; ?>" aria-describedby="validationTooltipUsernamePrepend" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="startDate">Удобная дата</label>
                    <input class="form-control" type="date" name="date" id="date" />
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <button class="btn btn-secondary col-12" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal На_бронирование" id="my-modal5">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn5">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h2>Создание заявки</h2>
            <form method="POST" action="PHP/application/booking_add.php?id=<?php echo $_SESSION['user']['id'];
                                                                            ?>" class="row g-3">
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip02" class="form-label">ФИО</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="<?php echo
                                                                                            $_SESSION['user']['name']; ?>" placeholder="<?php echo $_SESSION['user']['name']; ?>" name="name">
                    <div class="valid-tooltip">Все хорошо!</div>
                </div>
                <div class="col-md-8 position-relative">
                    <label for="validationTooltipUsername" class="form-label">Почта</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="<?php echo
                                                                                                            $_SESSION['user']['email']; ?>" aria-describedby="validationTooltipUsernamePrepend" disabled>
                    </div>
                </div>
                <div class="col-md-1 position-relative"></div>
                <div class="col-md-3 position-relative">
                    <label for="validationDefault44" class="form-label">Участок</label>
                    <select class="form-select" id="validationDefault44" required name="region">
                        <?php
                        if (mysqli_num_rows($sql_found_region) > 0) {
                            foreach ($sql_found_region as $found) :
                                $fof = $found['id_region_like_region'];
                                echo '<option value="' . $fof . '">' . $fof . '</option>';
                            endforeach;
                        } else {
                            echo 'Нет';
                        } ?></select>
                </div>
                <div class="col-md-12">
                    <label for="validationDefault04" class="form-label">Недвижимость из списка "Избранное"</label>
                    <select class="form-select" id="validationDefault04" required name="building">
                        <option selected disabled value="">Выберите дом</option>
                        <?php
                        $sql_booking = $link->query("SELECT Favourite.id_like_building, Favourite.id_fav, Building.name 
                                    FROM `Building`, `Favourite` WHERE `id_like_building` = `id` AND `id_user` 
                                    = $id_user");
                        foreach ($sql_booking as $books) :
                            $books_id = $books['id_fav'];
                            echo '<option value="' . $books_id . '">' . $books['name'] . '</option>';
                        endforeach; ?>
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn btn-secondary col-12" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal Выход_с_аккаунта" id="my-modal0">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn0">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h3 class="text-center">Вы уверены, что хотите выйти из аккаунта?</h3>
            <div class="col-md-12 d-flex justify-content-center">
                <a href="PHP/event/logout.php"><button class="btn btn-secondary col-12 mt-5">Выйти</button></a>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("open-modalimage-btn").addEventListener("click", function() {
            document.getElementById("my-modalimage").classList.add("open")
        })
        document.getElementById("close-my-modal-btnimage").addEventListener("click", function() {
            document.getElementById("my-modalimage").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modalimage").classList.remove("open")
            }
        });
        document.querySelector("#my-modalimage .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modalimage").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });
    </script>
    <script>
        document.getElementById("open-modal0-btn").addEventListener("click", function() {
            document.getElementById("my-modal0").classList.add("open")
        })
        document.getElementById("close-my-modal-btn0").addEventListener("click", function() {
            document.getElementById("my-modal0").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal0").classList.remove("open")
            }
        });
        document.querySelector("#my-modal0 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal0").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });
    </script>
    <script>
        document.getElementById("open-modal4-btn").addEventListener("click", function() {
            document.getElementById("my-modal4").classList.add("open")
        })
        document.getElementById("close-my-modal-btn4").addEventListener("click", function() {
            document.getElementById("my-modal4").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal4").classList.remove("open")
            }
        });
        document.querySelector("#my-modal4 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal4").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });
    </script>
    <script>
        document.getElementById("open-modal5-btn").addEventListener("click", function() {
            document.getElementById("my-modal5").classList.add("open")
        })
        document.getElementById("close-my-modal-btn5").addEventListener("click", function() {
            document.getElementById("my-modal5").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal5").classList.remove("open")
            }
        });
        document.querySelector("#my-modal5 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal5").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker({
                startDate: new Date()
            });
        });
    </script>
    <style>
        .nav-pills .nav-link {
            padding: 20px;
            width: 250px;
            height: 100%;
            border: none;
            display: flex;
            flex-direction: row;
            align-items: center;
            background: #D1D996;
            ;
            color: #333;
            transition: all 0.3s;
        }

        .nav-link .circle-icon {
            height: 50px;
            width: 50px;
            border-radius: 50px;
            border: 2px solid #0d6efd;
            background: #fff;
            font-size: 22px;
        }

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
</section>