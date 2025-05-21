<?php
session_start();
$id_order = $_GET['id'];

$book_user =  mysqli_query($link, "SELECT id_user_book FROM `Booking` WHERE id_book = $id_order");
foreach ($book_user as $book_user_proverka) :
    $book_user_prov = $book_user_proverka['id_user_book'];
endforeach;

$book_buil =  mysqli_query($link, "SELECT id_building_book FROM `Booking` WHERE id_book = $id_order");
foreach ($book_buil as $book_buil_proverka) :
    $book_buil_prov = $book_buil_proverka['id_building_book'];
endforeach;

$book_region =  mysqli_query($link, "SELECT region_book FROM `Booking` WHERE id_book = $id_order");
foreach ($book_region as $book_region_proverka) :
    $book_region_prov = $book_region_proverka['region_book'];
endforeach;

$sql_book_user = mysqli_query($link, "SELECT FOUND_ROWS() AS count FROM `Region` WHERE user_region = $book_user_prov AND id_region = $book_region_prov");
$sql_prov = mysqli_num_rows($sql_book_user);

if ($sql_prov < 1) {
    $add_region = $link->query("UPDATE `Region` SET `id_booking_region` = $id_order, `build_region` = $book_buil_prov, `user_region` = $book_user_prov, `status_pay_region` = 1 WHERE id_region = $book_region_prov");
    $_SESSION['banner_region_bye'] = 'Участок успешно забронирован! Для дальнейшей покупки, Вам требуется провести оплату:';
} else {
    $_SESSION['banner_region_bye'] = 'Вы уже забронировали участок! Для дальнейшей покупки, Вам требуется провести оплату:';
}
?>
<div class="pt-5 pb-5 main">
    <div class="container">
        <?php
        echo $_SESSION['banner_region_bye'];
        ?>
        <h4 class="text-center">Выберите способ оплаты</h4>
        <div class="d-flex justify-content-around">
            <a class="сol-3" href="index.php?page=thanks&id_bye=<?php echo $book_region_prov; ?>"><button class="btn btn-secondary py-3 my-5 w-100">Qr-код</button></a>
            <a class="сol-3" href="index.php?page=thanks&id_bye=<?php echo $book_region_prov; ?>"><button class="btn btn-secondary py-3 my-5 w-100">ВебМани</button></a>
            <a class="сol-4" href="index.php?page=thanks&id_bye=<?php echo $book_region_prov; ?>"><button class="btn btn-secondary py-3 my-5 w-100">Банковская карта</button></a>
            <a class="сol-4" href="index.php?page=thanks&id_bye=<?php echo $book_region_prov; ?>"><button class="btn btn-secondary py-3 my-5 w-100">Личная встреча</button></a>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-secondary text-center">Хотите оплатить позже?</p>
            <a href="index.php?page=cab-user"><button class="btn btn-secondary w-100">Вернуться назад</button></a>
        </div>
    </div>
</div>