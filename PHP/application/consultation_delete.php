<?php
session_start();
require('../../connection.php');
unset($_SESSION['banner_con_app']);
unset($_SESSION['banner_book_app']);

$id_con_del = $_GET['id_delete'];
$id_user = $_SESSION['user']['id'];

$sql_delete_con = $link->query("DELETE FROM `Consultation` WHERE `id_con` = '$id_con_del' AND `user` = '$id_user'");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>