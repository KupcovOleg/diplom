<?php
session_start();
unset($_SESSION['banner_fav']);
unset($_SESSION['banner_region']);
unset($_SESSION['banner_reg']);
unset($_SESSION['banner_sign']);
unset($_SESSION['banner_change_pass']);
unset($_SESSION['banner_change_name']);
?>
<div class="cabinet-admin py-5 main text-secondary">
    <div class="container">
        <h2 class="h3 mb-3 text-black">Личный кабинет админа</h2>
        <div class="d-flex flex-row shadow nav-border">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3 nav-shadow pb-5" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color: #D1D996;">
                    <button class="nav-link active text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"><i class="fa fa-user"></i> </div>
                        <b>Профиль</b>
                    </button>
                    <button class="nav-link text-white" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <b>Просмотр заявок</b>
                    </button>
                    <?php if (isset($_SESSION['consultation']) or (isset($_SESSION['booking']))) {
                        echo '<button class="nav-link text-white" id="v-pills-single-tab" data-bs-toggle="pill" data-bs-target="#v-pills-single" type="button" role="tab" aria-controls="v-pills-single" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="fa fa-cog"></i> </div>
                        <b>Выбранная заявка</b>
                    </button>
                    ';
                    } ?>
                    <button class="nav-link text-white" id="v-pills-like-tab" data-bs-toggle="pill" data-bs-target="#v-pills-like" type="button" role="tab" aria-controls="v-pills-like" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="fa fa-cog"></i> </div>
                        <b>Список клиентов</b>
                    </button>
                    <button class="nav-link text-white" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="fa fa-cog"></i> </div>
                        <b>Недвижимость</b>
                    </button>
                    <button class="nav-link text-white" id="open-modal0-btn" type="button" role="tab" aria-selected="false">
                        <div class="circle-icon d-flex align-items-center justify-content-center me-3"><i class="fa fa-cog"></i></div>
                        <b>Выйти</b>
                    </button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active pt-4 me-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="d-flex align-items-center mb-3 row">
                            <div class="row px-3 col-md-3">
                                <img src="<?php echo $_SESSION['user']['image']; ?>" alt="*фото администратора*" class="img-cont me-3" style="max-width: 150px;">
                            </div>
                            <div class="row px-3 col-md-6">
                                <h3><strong><?php echo $_SESSION['user']['name'];?></strong></h3>
                                <p>Почта: <?= $_SESSION['user']['email']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-4 me-4" id="v-pills-like" role="tabpanel" aria-labelledby="v-pills-like-tab">
                        <h3 class="px-5 text-center">Удаление пользователя и информация о нем</h3>
                        <div class="d-flex flex-column">
                            <div class="d-flex row">
                                <div class="d-flex col-lg-6 row">
                                    <form method="POST" action="PHP/users/users_delete.php" class="d-flex h-auto col-12">
                                        <select required class="form-select" name="users">
                                            <option selected disabled>Выберите пользователя</option>
                                            <?php
                                            $user_list = $link->query("SELECT `id`, `email` FROM `User` WHERE `role` = 0;");
                                            foreach ($user_list as $users) :
                                                echo '<option value="' . $users['id'] . '">' . $users['email'] . '</option>';
                                            endforeach;
                                            ?>
                                        </select>
                                        <button class=" btn btn-secondary col-5 me-3 mx-1" type="submit">Ликвидировать</button>
                                    </form>
                                </div>
                                <div class="row col-lg-6">
                                    <form method="POST" action="PHP/users/users_info.php" class="row col-12">
                                        <div class="d-flex">
                                            <select required class="form-select" name="users_info">
                                                <option selected disabled>Выберите пользователя</option>
                                                <option value=" 000">Сброс</option>
                                                <?php
                                                $user_list_info = $link->query("SELECT `id`, `name`, `email` FROM `User` WHERE `role` = 0;");
                                                foreach ($user_list_info as $users) :
                                                    echo '<option value="' . $users['id'] . '">' . $users['email'] . '</option>';
                                                endforeach;
                                                ?>
                                            </select>
                                            <button class="btn btn-secondary col-5 mx-1" id="open-modal8-btn" type="submit">Узнать</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h3 class="text-center"> 
                                <?php
                                                        if (isset($_SESSION['user_info']) && $_SESSION['user_info']['email'] != null) {
                                                            echo 'Данные пользователя';
                                                        } ?></h3>
                            <div class="row col-md-12">
                                <div class="d-flex flex-column col-4">
                                    <?php if (isset($_SESSION['user_info']) && $_SESSION['user_info']['email'] != null) {
                                        echo '<h4 class="text-center">Личные данные</h4>
                                    <p><b>Имя: </b>' . $_SESSION['user_info']['name'] . '</p>
                                    <p><b>Идентификатор: </b>' . $_SESSION['user_info']['id'] . '</p>
                                    <p><b>Почта: </b>' . $_SESSION['user_info']['email'] . '</p>';
                                    } ?></div>
                                <div class="row col-8">
                                    <h4 class="text-center">
                                        <?php if (isset($_SESSION['user_info']) && $_SESSION['user_info']['email'] != null) {
                                            echo 'Заявки';
                                        } ?></h4>
                                    <div class="d-flex row col-md-12">
                                        <?php if (isset($_SESSION['user_info']) && $_SESSION['user_info']['email'] != null) {
                                            $email_users_con = $_SESSION['user_info']['email'];
                                            $sql_con = $link->query("SELECT Consultation.id_con, Consultation.id_status, 
                                            Consultation.date, Status.status 
                                        FROM `Consultation` JOIN `Status` ON `e-mail` = '$email_users_con' AND 
                                        Consultation.id_status = Status.id");
                                            if (!isset($sql_con)) {
                                                echo 'Нет заявок на Консультацию';
                                            } else {
                                                foreach ($sql_con as $con) : echo '
                                                <div class="col-md-6">Консультация:
                                                    <div class="card" style="background-color: #D1D996;"">
                                                        <div class="card-body" style="max-width: 100%;">
                                                            <p class="card-text">' . 'Номер: ' . $con['id_con'] . '</p> 
                                                            <p class="card-text">' . 'Статус: ' . $con['status'] . '</p>
                                                            <p class="card-text">' . 'Дата: ' . $con['date'] . '</p>
                                                        </div> </div> </div>';
                                                endforeach;
                                            }
                                        } ?>
                                    </div>
                                    <div class="d-flex row col-md-12">
                                        <?php if (isset($_SESSION['user_info']) && $_SESSION['user_info']['email'] != null) {
                                            $email_users_con = $_SESSION['user_info']['email'];
                                            $sql_book = $link->query("SELECT Booking.id_book, Booking.id_building_book, Status.status, Building.name, Booking.region_book FROM `Booking` JOIN `Status` ON `e-mail` = '$email_users_con' AND Booking.id_status = Status.id 
                                        JOIN `Favourite` ON Booking.id_building_book = Favourite.id_fav JOIN `Building` ON Favourite.id_like_building = Building.id");
                                            if (!isset($sql_book)) {
                                                echo "Нет заявок на Бронирование";
                                            } else {
                                                foreach ($sql_book as $book) :
                                                    echo '
                                                <div class="col-md-6">Бронирование:
                                                    <div class="card" style="background-color: #D1D996;"">
                                                        <div class="card-body" style="max-width: 100%;">
                                                            <p class="card-text">' . 'Номер: ' . $book['id_book'] . '</p> 
                                                            <p class="card-text">' . 'Статус: ' . $book['status'] . '</p>
                                                            <p class="card-text">' . 'Недвижимость: ' . $book['name'] . '</p>
                                                            <p class="card-text">' . 'Участок: ' . $book['region_book'] . '</p>
                                                        </div>
                                                    </div>
                                                </div>';
                                                endforeach;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-4 me-4" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="d-flex row col-12">
                        <h3 class="px-5 text-center">Управление недвижимостью</h3>
                            <button class="btn btn-secondary mx-2 col-4" id="open-modal6-btn">Создать</button>
                            <button class="btn btn-secondary mx-2 col-4" id="open-modal7-btn">Удалить</button>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-4 me-4" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h3 class="px-5 text-center">Все заявки</h3>
                        <div class="d-flex row">
                            <div class="d-flex align-items-center row">
                                <p class="col-lg-3">Бронирование:</p>
                                <button class="btn btn-secondary col-lg-4" id="open-modal-btn9">Открыть список</button>
                            </div>
                            <div class="d-flex align-items-center mt-5 row">
                                <p class="col-lg-3">Консультация:</p>
                                <button class="btn btn-secondary col-lg-4" id="open-modal-btn10">Открыть список</button>
                            </div>
                            <div class="d-flex align-items-center mt-5">
                                <a href="PHP/application/logout_open.php"><button class="btn btn-secondary mx-2">Закрыть заявку</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade pt-4 me-4" id="v-pills-single" role="tabpanel" aria-labelledby="v-pills-single-tab">
                        <h3 class="px-5 text-center">Информация о выбранной заявке</h3>
                        <div class="d-flex row">
                            <?php if (isset($_SESSION['booking'])) {
                                echo '<h4 class="text-center mt-2">Заявка на бронирование</h4>
                                <div class="col-12">
                                    <div class="card" style="background-color: #D1D996;"">
                                        <div class="card-body" style="max-width: 100%;">
                                            <p class="card-text">Индентификатор пользователя: ' .
                                    $_SESSION['booking']['id_book'] . '</p> 
                                            <p class="card-text">Имя пользователя: ' .
                                    $_SESSION['booking']['name'] . '</p> 
                                            <p class="card-text">Почта пользователя: ' . $_SESSION['booking']['email'] . '</p> 
                                            <p class="card-text">Статус заявки: ' . $_SESSION['booking']['status'] . '</p> 
                                            <p class="card-text">Id выбранной недвижимости: ' . $_SESSION['booking']['id_building_book'] . '</p>
                                            <p class="card-text">Участок: ' . $_SESSION['booking']['region_book'] . '</p> 
                                            <button class="btn btn-secondary mx-2 w-100" id="open-modal-btn11">Сменить статус</button>
                                        </div></div>
                                </div>';
                            } elseif (isset($_SESSION['consultation'])) {
                                echo '<h4 class="text-center mt-2">Заявка на консультацию</h4>
                                <div class="col-12">
                                    <div class="card" style="background-color: #D1D996;"">
                                        <div class="card-body" style="max-width: 100%;">
                                            <p class="card-text">Индентификатор пользователя: ' . $_SESSION['consultation']['id_con'] . '</p> 
                                            <p class="card-text">Имя пользователя: ' . $_SESSION['consultation']['name'] . '</p> 
                                            <p class="card-text">Id пользователя: ' . $_SESSION['consultation']['user'] . '</p> 
                                            <p class="card-text">Почта пользователя: ' . $_SESSION['consultation']['email'] . '</p> 
                                            <p class="card-text">Статус заявки: ' . $_SESSION['consultation']['status'] . '</p> 
                                            <p class="card-text">Дата консультации: ' . $_SESSION['consultation']['date'] . '</p>
                                            <button class="btn btn-secondary mx-2 w-100" id="open-modal-btn11">Сменить статус</button>
                                        </div>  </div></div>';
                            } ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="modal создание_дома text-secondary" id="my-modal6">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn6">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h2>Создание товара</h2>
            <form method="POST" action="change_image.php" enctype="multipart/form-data" class="row g-3">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Название</label>
                    <input type="text" class="form-control" id="validationDefault01" required placeholder="name" name="name">
                </div>
                <div class="col-md-6">
                    <label for="validationDefault02" class="form-label">Цена</label>
                    <input type="number" min="1" class="form-control" id="validationDefault02" placeholder="price" required name="price">
                </div>
                <div class="col-12">
                    <label for="validationDefault03" class="form-label">Описание</label>
                    <textarea class="form-control" id="validationDefault03" required rows="3" placeholder="description" name="description"></textarea>
                </div>
                <div class="col-md-9">
                    <label for="validationDefault04" class="form-label">Изображение</label>
                    <input class="form-control" type="file" id="validationDefault04" required placeholder="image" name="image">
                </div>
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">Площадь</label>
                    <input type="number" min="1" class="form-control" id="validationDefault05" required placeholder="square" name="square">
                </div>
                <div class="col-md-3">
                    <label for="validationDefault06" class="form-label">Этажи</label>
                    <select id="validationDefault06" required class="form-select text-secondary" name="floor">
                        <option selected disabled>Выберите кол-во этажей</option>
                        <?php
                        $sql_floor = $link->query("SELECT * FROM `Floor`");
                        foreach ($sql_floor as $floor) :
                            echo '<option value="' . $floor['id_f'] . '">' . $floor['name_floor'] . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationDefault07" class="form-label">Материал</label>
                    <select id="validationDefault07" required class="form-select text-secondary" name="material">
                        <option selected disabled>Выберите материал</option>
                        <?php
                        $sql_material = $link->query("SELECT * FROM `Material`");
                        foreach ($sql_material as $material) :
                            echo '<option value="' . $material['id_m'] . '">' . $material['name_material'] . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationDefault08" class="form-label">Категория</label>
                    <select id="validationDefault08" required class="form-select text-secondary" name="category">
                        <option selected disabled>Выберите категорию</option>
                        <?php
                        $sql_category = $link->query("SELECT * FROM `Category`");
                        foreach ($sql_category as $category) :
                            echo '<option value="' . $category['id'] . '">' . $category['name_category'] . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationDefault09" class="form-label">Комнаты</label>
                    <select id="validationDefault09" required class="form-select text-secondary" name="room">
                        <option selected disabled>Выберите кол-во комнат</option>
                        <?php
                        $sql_room = $link->query("SELECT * FROM `Room`");
                        foreach ($sql_room as $room) :
                            echo '<option value="' . $room['id_r'] . '">' . $room['name_room'] . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-secondary w-100">Создать</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal удаление_дома" id="my-modal7">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn7">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h2>Удаление недвижимости</h2>
            <form method="POST" action="PHP/building_BD/building_delete.php" class="row g-3">
                <div class="col-12">
                    <label for="validationDefault10" class="form-label"></label>
                    <select id="validationDefault10" required class="form-select" name="id_delete">
                        <option selected disabled>Выберите ID для удаления</option>
                        <?php
                        $build_list = $link->query("SELECT * FROM `Building`");
                        foreach ($build_list as $build) :
                            echo '<option value="' . $build['id'] . '">' . $build['id'] . '&nbsp;&nbsp;' . $build['name'] . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-secondary w-100">Ликвидировать</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal выход_с_аккаунта" id="my-modal0">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn0">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h3 class="text-center">Вы уверены, что хотите выйти из аккаунта?</h3>
            <div class="col-md-12 d-flex justify-content-center">
                <a href="PHP/event/logout.php"><button class="btn btn-secondary 
                col-12 mt-5">Выйти</button></a>
            </div>
        </div>
    </div>
    <div class="modal редактирование_заявки" id="my-modal8">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn8">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h3 class="text-center">Редактирование заявки</h3>
            <div class="d-flex">
                <form method="POST" action="PHP/building_BD/building_delete.php" class="row g-3">
                    <div class="row-col-12 d-flex">
                        <label for="validationDefault10" class="form-label"></label>
                        <select id="validationDefault10" required class="form-select" name="id_delete">
                            <option selected disabled>Выберите ID для удаления</option>
                            <?php
                            $build_list = $link->query("SELECT * FROM `Building`");
                            foreach ($build_list as $build) :
                                echo '<option value="' . $build['id'] . '">' . $build['id'] . '&nbsp;&nbsp;' . $build['name'] . '</option>';
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-secondary w-100">Ликвидировать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal осмотр_заявок_на_бронирование" id="my-modal9">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn9">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h3 class="text-center">Заявки на бронирование</h3>
            <div class="d-flex">
                <div class="d-flex align-items-center">
                    <form method="POST" action="PHP/application/open_single.php" class="d-flex h-auto">
                        <select required class="form-select" name="booking">
                            <option selected disabled>Выберите id заявки для подробности</option>
                            <?php
                            $book_list = $link->query("SELECT `id_book` FROM `Booking` WHERE id_status = 1");
                            foreach ($book_list as $books) :
                                echo '<option value="' . $books['id_book'] . '">' . $books['id_book'] . '</option>';
                            endforeach;
                            ?>
                        </select>
                        <button class="btn btn-secondary mx-2" type="submit">Найти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal осмотр_заявок_на_консультацию" id="my-modal10">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn10">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h3 class="text-center">Заявки на консультацию</h3>
            <div class="d-flex">
                <div class="d-flex align-items-center">
                    <form method="POST" action="PHP/application/open_single.php" class="d-flex h-auto">
                        <select required class="form-select" name="consultation">
                            <option selected disabled>Выберите id заявки для подробности</option>
                            <?php
                            $con_list = $link->query("SELECT `id_con` FROM `Consultation` WHERE `id_status` = 1");
                            foreach ($con_list as $cons) :
                                echo '<option value="' . $cons['id_con'] . '">' . $cons['id_con'] . '</option>';
                            endforeach;
                            ?>
                        </select>
                        <button class="btn btn-secondary mx-2" type="submit">Найти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal Смена_статуса_заявки" id="my-modal11">
        <div class="modal__box">
            <button class="modal__close-btn" id="close-my-modal-btn11">
                <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" />
                    <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" />
                </svg>
            </button>
            <h3 class="text-center">Смена статуса заявки</h3>
            <div class="d-flex">
                <div class="d-flex align-items-center">
                    <form method="POST" action="PHP/application/change.php" class="d-flex h-auto">
                        <select required class="form-select" name="<?php if (isset($_SESSION['consultation'])) {
                                                                        echo 'change_con';
                                                                    } elseif (isset($_SESSION['booking'])) {
                                                                        echo 'change_book';
                                                                    } ?>">
                            <option selected disabled>Выберите статус</option>
                            <?php
                            $sql_status = $link->query("SELECT * FROM `Status`");
                            foreach ($sql_status as $sql_status_change) :
                                echo '<option value="' . $sql_status_change['id'] . '">' . $sql_status_change['status'] . '</option>';
                            endforeach;
                            ?>
                        </select>
                        <button class="btn btn-secondary mx-2" type="submit">Смена</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("open-modal-btn11").addEventListener("click", function() {
            document.getElementById("my-modal11").classList.add("open")
        })
        document.getElementById("close-my-modal-btn11").addEventListener("click", function() {
            document.getElementById("my-modal11").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal11").classList.remove("open")
            }
        });
        document.querySelector("#my-modal11 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal11").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });
    </script>
    <script>
        document.getElementById("open-modal-btn10").addEventListener("click", function() {
            document.getElementById("my-modal10").classList.add("open")
        })
        document.getElementById("close-my-modal-btn10").addEventListener("click", function() {
            document.getElementById("my-modal10").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal10").classList.remove("open")
            }
        });
        document.querySelector("#my-modal10 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal10").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });
    </script>
    <script>
        document.getElementById("open-modal-btn9").addEventListener("click", function() {
            document.getElementById("my-modal9").classList.add("open")
        })
        document.getElementById("close-my-modal-btn9").addEventListener("click", function() {
            document.getElementById("my-modal9").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal9").classList.remove("open")
            }
        });
        document.querySelector("#my-modal9 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal9").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });
    </script>
    <script>
        document.getElementById("open-modal-btn8").addEventListener("click", function() {
            document.getElementById("my-modal8").classList.add("open")
        })
        document.getElementById("close-my-modal-btn8").addEventListener("click", function() {
            document.getElementById("my-modal8").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal8").classList.remove("open")
            }
        });
        document.querySelector("#my-modal8 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal8").addEventListener('click', event => {
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
        document.getElementById("open-modal6-btn").addEventListener("click", function() {
            document.getElementById("my-modal6").classList.add("open")
        })
        document.getElementById("close-my-modal-btn6").addEventListener("click", function() {
            document.getElementById("my-modal6").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal6").classList.remove("open")
            }
        });
        document.querySelector("#my-modal6 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal6").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });
    </script>
    <script>
        document.getElementById("open-modal7-btn").addEventListener("click", function() {
            document.getElementById("my-modal7").classList.add("open")
        })
        document.getElementById("close-my-modal-btn7").addEventListener("click", function() {
            document.getElementById("my-modal7").classList.remove("open")
        })
        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("my-modal7").classList.remove("open")
            }
        });
        document.querySelector("#my-modal7 .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("my-modal7").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
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