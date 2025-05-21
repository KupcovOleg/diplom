<?php
session_start();
require('../../connection.php');
unset($_SESSION['banner_con_app']);
unset($_SESSION['banner_book_app']);

$user = $_GET['id'];
$name = $_POST['name'];
$email = $_SESSION['user']['email'];
$date = $_POST['date'];

$sql_con = mysqli_query($link,"SELECT FOUND_ROWS() AS count FROM `Consultation` WHERE `user` = $user AND `id_status` = 1");
$today = date("Y-m-d");
$sql_num = mysqli_num_rows($sql_con);
if ($sql_num < 1) {
    if ($date < $today) {
        $_SESSION['banner_con_app'] = 'Пожалуйста, выберите корректную дату.';
    } else {
        $add_consultation = $link->query("INSERT INTO `Consultation`(`name`, `e-mail`, `id_status`, `user`, `date`) 
        VALUES ('$name', '$email', '1', '$user', '$date')");
    }
} else {
    $_SESSION['banner_con_app'] = 'Заявка на консультацию уже подана. Дождитесь ответа на нее.';
}
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>