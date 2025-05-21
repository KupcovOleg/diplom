<?php
session_start();
unset($_SESSION['banner_region']);
unset($_SESSION['banner_reg']);
unset($_SESSION['banner_sign']);
$id_single = $_GET['id'];
$sql_single = $link->query("SELECT * FROM `Building` JOIN `Material` ON `id` = $id_single JOIN `Category`");
$single = mysqli_fetch_assoc($sql_single);
?>
<div class="site-section pt-5 pb-5 text-secondary main">
    <div class="container">
        <h2 class="pb-3">Данные о недвижимости</h2>
        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo $single['image'] ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <img src="<?php echo $single['image'] ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-4">
                <p><?php echo $single['description'] ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="row pt-3">
                <p class="text-start"><strong>Наименование: <?php echo $single['name'] ?></strong></p>
                <p class="text-start">Стоимость: <?php echo $single['price'] ?> рублей</p>
                <p class="text-start">Состав материала: <?php echo $single['name_material'] ?></p>
                <p class="text-start">Категория: <?php echo $single['name_category'] ?></p>
                <p class="text-start">Количество комнат: <?php echo $single['room'] ?></p>
                <p class="text-start">Количество этажей: <?php echo $single['floor'] ?></p>
            </div>
        </div>
        <?php 
        if ($_SESSION['user']['role'] == 0) { echo '
        <div class="d-flex flex-column border col-4">
                <a class="d-flex justify-content-start text-decoration-none text-secondary align-items-center" href="PHP/like/like_add.php?id='. $id_single . '">
                    <img src="image/heart-not-like.svg" style="width: 50px" alt="#">Добавить недвижимость в список "Избранное"</a>
            </div>
        <div>';
                if (isset($_SESSION['banner_fav'])) {
                    if ($_SESSION['banner_fav'] == 'Для добавления товара в список "Избранное", пожалуйста, авторизуйтесь') {
                        echo '<div class="text-center bor-red"><font color="red">Для добавления товара в список "Избранное", пожалуйста, авторизуйтесь</font></div>';
                    } elseif ($_SESSION['banner_fav'] == 'Дом успешно добавлен с список "Избранное"') {
                        echo '<div class="text-center bor-green"><font color="green">Дом успешно добавлен с список "Избранное"</font></div>';
                    } elseif ($_SESSION['banner_fav'] == 'Этот дом уже есть в списке "Избранное"') {
                        echo '<div class="text-center bor-orange"><font color="orange">Этот дом уже есть в списке "Избранное"</font></div>';
                    } 
                } }
                ?>
        </div>
    </div>
</div>