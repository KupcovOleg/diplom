<?php
session_start();
require('../../connection.php');
unset($_SESSION['banner_reg']);
unset($_SESSION['banner_reg_email']);
unset($_SESSION['banner_reg_pas1']);
unset($_SESSION['banner_reg_name']);
unset($_SESSION['banner_reg_pas2']);
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$sql_reg = $link->query("SELECT * FROM `User` WHERE `email` = '$email'");
if (mysqli_num_rows($sql_reg) > 0) {
    $_SESSION['banner_reg'] = 'Такая почта уже используется';
    $_SESSION['banner_reg_email'] = $email;
    $_SESSION['banner_reg_pas1'] = $_POST['password'];
    $_SESSION['banner_reg_name'] = $name;
    $_SESSION['banner_reg_pas2'] = $_POST['password2'];
} else {
    if ($password == $password2) {
        $password_hash = md5($password);
        mysqli_query($link, "INSERT INTO `User`(`name`, `email`, `password`) 
        VALUES ('$name', '$email','$password_hash')");
        $_SESSION['banner_reg'] = 'Аккаунт успешно создан!';
    } else {
        $_SESSION['banner_reg_email'] = $email;
        $_SESSION['banner_reg_pas1'] = $_POST['password'];
        $_SESSION['banner_reg_name'] = $name;
        $_SESSION['banner_reg_pas2'] = $_POST['password2'];
        $_SESSION['banner_reg'] = 'Пароли не совпадают';
    }
}     
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>