<?php
session_start();
require('../../connection.php');

$id_user = $_SESSION['user']['id'];
$id_change_pass = $_POST['change_pass'];
$id_change_name = $_POST['change_name'];
unset($_SESSION['user']);
unset($_SESSION['banner_change_pass']);
unset($_SESSION['banner_change_name']);

if (isset($_POST['change_pass'])) {
$new_pass = md5($id_change_pass);
$_SESSION['banner_change_pass'] = "Пароль сменен";
$sql_change_pass = $link->query("UPDATE `User` SET `password` = '$new_pass' WHERE `id` = '$id_user'");
}

if (isset($_POST['change_name'])) {
$_SESSION['banner_change_name'] = "Имя сменено";
$sql_change_name = $link->query("UPDATE `User` SET `name` = '$id_change_name' WHERE `id` = '$id_user'");
}

$check_user = $link->query("SELECT * FROM `User` WHERE `id` = '$id_user'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "email" => $user['email'],
        "password" => $user['password'],
        "image" => $user['image'],
        "role" => $user['role']
    ];
}
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>