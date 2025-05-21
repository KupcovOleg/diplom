<?php
session_start();
require('../../connection.php');

$id_book_del = $_GET['id_delete'];
$id_user = $_SESSION['user']['id'];
$sql_delete = $link->query("DELETE FROM `Booking` WHERE `id_book` = '$id_book_del' AND `id_user_book` = '$id_user'");
$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>