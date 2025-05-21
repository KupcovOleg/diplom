<?php
session_start();
require('../../connection.php');
unset($_SESSION['banner_book_app']);
unset($_SESSION['banner_con_app']);


$user = $_GET['id'];
$name = $_POST['name'];
$email = $_SESSION['user']['email'];
$building = $_POST['building'];
$region = $_POST['region'];

$sql_book_add = mysqli_query($link, "SELECT * FROM `Booking` WHERE `id_building_book` = '$building' AND `id_user_book` = '$user' AND id_status != 2");
$sql_num_add = mysqli_num_rows($sql_book_add);
$sql_book_check = mysqli_query($link, "SELECT * FROM `Region` WHERE user_region = $user AND id_region = $region");
$sql_num_check = mysqli_num_rows($sql_book_check);
$sql_book_check2 =  mysqli_query($link, "SELECT * FROM `Region` WHERE id_region = $region AND status_pay_region !=0");
$sql_num_check2 = mysqli_num_rows($sql_book_check2);

if (($sql_num_check < 1) && ($sql_num_check2 < 1)) {
    if ($sql_num_add < 1) {
        $add_booking = $link->query("INSERT INTO `Booking`(`name`, `e-mail`, `id_status`, `id_user_book`, `id_building_book`, `region_book`) 
        VALUES ('$name', '$email', '1', '$user', '$building', '$region')");
    } else {
        $_SESSION['banner_book_app'] = 'Заявка на бронирование этой недвижимости уже подана. Дождитесь ответа на нее.';
    }  
} else {
    $_SESSION['banner_book_app'] = 'Этот участок уже куплен или забронирован. Пожалуйста, выберите другой.';
}     
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>