<?php
session_start();
require('../../connection.php');

if (!isset($_SESSION['user_info'])) {
    $_SESSION['user_info'] = $_POST['users_info'];
    $users_info = $_SESSION['user_info'];
    $check_info = $link->query("SELECT * FROM `User` WHERE `id` = '$users_info'");
    $user_info = mysqli_fetch_assoc($check_info);
    $_SESSION['user_info'] = [
        "id" => $user_info['id'],
        "name" => $user_info['name'],
        "email" => $user_info['email'],
        "password" => $user_info['password']
    ];
} else {
    $_SESSION['user_info'] = $_POST['users_info'];
    $users_info = $_SESSION['user_info'];
    if ($users_info == 000) {
        unset($_SESSION['user_info']);
    } else {
        $check_info = $link->query("SELECT * FROM `User` WHERE `id` = '$users_info'");
        $user_info = mysqli_fetch_assoc($check_info);
        $_SESSION['user_info'] = [
            "id" => $user_info['id'],
            "name" => $user_info['name'],
            "email" => $user_info['email'],
            "password" => $user_info['password']
        ];
    }
}

$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
