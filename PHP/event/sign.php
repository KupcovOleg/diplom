<?php
session_start();
unset($_SESSION['banner_sign']);
require('../../connection.php');
$email = $_POST['email'];
$password = md5($_POST['password']);
$check_user = $link->query("SELECT * FROM `User` WHERE `email` = '$email' AND `password` = '$password'");
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
    if($_SESSION['user']['role'] == 0) {
        header("Location: ../../index.php?page=cab-user");
    } else {
        header("Location: ../../index.php?page=cab-admin");
    }
} else {
    $_SESSION['banner_sign_email'] = $email;
    $_SESSION['banner_sign_pas'] = $_POST['password'];
    $_SESSION['banner_sign'] = 'Неверные данные для входа';
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
	header("Location: $redirect");
	exit();
}
?>