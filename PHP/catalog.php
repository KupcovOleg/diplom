<?php
session_start();
unset($_SESSION['banner_fav']);
unset($_SESSION['banner_region']);
unset($_SESSION['banner_reg']);
unset($_SESSION['banner_sign']);
unset($_SESSION['banner_change_pass']);
unset($_SESSION['banner_change_name']);
?>
<div class="catalog pt-5 main">
    <div class="site-section">
        <div class="container">
            <h3 class="mb-3 h3 text-uppercase text-secondary d-block">Каталог</h3>
            <div class="row">
                <div class="col-lg-9 order-2">
                    <div class="mb-5 row-col-lg-6">
                        <?php
                        foreach ($sql_building as $building) :
                        ?>
                            <a href="index.php?page=single&id=<?php echo $building['id'] ?>">
                                <div class="flip">
                                    <div class="front d-flex flex-column align-items-center justify-content-end" 
                                    style="background-image: url(<?php echo $building['image'] ?>)">
                                        <h4 class="text-shadow text-white"><b><?php echo $building['name'] ?></b></h4>
                                        <p class="text-shadow text-white"><b><?php echo $building['price'] ?> рублей</b></p>
                                    </div>
                                    <div class="back">
                                        <p class="text-secondary"><?php echo $building['description'] ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-center">
                            <?php
                                for ($i = 1; $i <= $col_pagen; $i++) {
                                ?>
                                    <a class="page-link py-1 text-secondary" style="background-color: #D1D996;" href="index.php?page=catalog&pagination=<?php echo $i ?>">
                                        <li class="page-item active"><?php echo $i ?></li>
                                    </a>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 order-1 ">
                    <div class="row p-4 rounded d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="d-flex">
                                <div class="dropdown ml-lg-auto w-100 dropend">
                                    <button class="btn btn-secondary dropdown-toggle py-1 text-secondary" style="background-color: #D1D996;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Сортировка
                                    </button>
                                    <ul class="dropdown-menu py-1" style="background-color: #D1D996; color: #6c757d;">
                                        <a class="dropdown-item text-secondary" href="index.php?page=catalog&id_sort=0">Сброс</a>
                                        <p class="text-center h5">стоимость</p>
                                        <a class="dropdown-item text-secondary" href="index.php?page=catalog&id_sort=1">убывание</a>
                                        <a class="dropdown-item text-secondary" href="index.php?page=catalog&id_sort=2">возрастание</a>
                                        <div class="dropdown-divider"></div>
                                        <p class="text-center h5">название</p>
                                        <a class="dropdown-item text-secondary" href="index.php?page=catalog&id_sort=3">убывание</a>
                                        <a class="dropdown-item text-secondary" href="index.php?page=catalog&id_sort=4">возрастание</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border p-4 rounded border-black cat" style="background-color: #D1D996;">
                        <h3 class="mb-3 h6 text-uppercase text-secondary d-block">Категории</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a class="text-secondary" href="index.php?page=catalog&id_filtr=0" class="d-flex">
                                    <span>Все</span>
                                </a>
                            </li>
                        </ul>
                        <?php
                        foreach ($sql_category as $category) :
                        ?>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <a class="text-secondary" href="index.php?page=catalog&id_filtr=<?php echo $category['id'] ?>" class="d-flex">
                                        <span><?php echo $category['name_category'] ?></span>
                                    </a>
                                </li>
                            </ul>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <form action="index.php?page=catalog&filtr_second" method="POST">
                        <div class="border border-black p-4 rounded cat mb-4" style="background-color: #D1D996;">
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-secondary d-block">Материал</h3>
                                <?php
                                foreach ($sql_material as $material) :
                                ?>
                                    <label for="s_sm" class="d-flex">
                                        <input type="checkbox" class="mr-2 mt-1" name="material[]" value="<?php echo $material['id_m'] ?>" />
                                        <span class="text-secondary"><?php echo $material['name_material'] ?>
                                        </span>
                                    </label>
                                <?php
                                endforeach;
                                ?>
                            </div>
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-secondary d-block">Кол-во комнат</h3>
                                <?php
                                foreach ($sql_room as $room) :
                                ?>
                                    <label for="s_sm" class="d-flex">
                                        <input type="checkbox" class="mr-2 mt-1" name="room[]" value="<?php echo $room['id_r'] ?>" />
                                        <span class="text-secondary"><?php echo $room['name_room'] ?>
                                        </span>
                                    </label>
                                <?php
                                endforeach;
                                ?>
                            </div>
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-secondary d-block">Кол-во этажей</h3>
                                <?php
                                foreach ($sql_floor as $floor) :
                                ?>
                                    <label for="s_sm" class="d-flex">
                                        <input type="checkbox" class="mr-2 mt-1" name="floor[]" value="<?php echo $floor['id_f'] ?>" />
                                        <span class="text-secondary"><?php echo $floor['name_floor'] ?>
                                        </span>
                                    </label>
                                <?php
                                endforeach;
                                ?>
                            </div>
                            <input type="submit" value="Поиск" class="btn btn-secondary btn-sm btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>