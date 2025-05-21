<?php
session_start();
unset($_SESSION['banner_fav']);
require('../../connection.php');

$id_building  = $_GET['id'];
$id_user = $_SESSION['user']['id'];
$sql_fav = mysqli_query($link, "SELECT FOUND_ROWS() AS count FROM `Favourite` WHERE `id_like_building` = '$id_building' AND `id_user` = '$id_user'");

$sql_num = mysqli_num_rows($sql_fav);

if (!isset($_SESSION['user'])) {
    $_SESSION['banner_fav'] = 'Для добавления товара в список "Избранное", пожалуйста, авторизуйтесь';
} else {
    if ($sql_num < 1) {
        $add_like = $link->query("INSERT INTO `Favourite`(`id_user`, `id_like_building`) VALUES ($id_user, $id_building)");
        $_SESSION['banner_fav'] = 'Дом успешно добавлен с список "Избранное"';
    } else {
        $_SESSION['banner_fav'] = 'Этот дом уже есть в списке "Избранное"';
    }
}

$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
