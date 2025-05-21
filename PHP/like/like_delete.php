<?php
session_start();
require('../../connection.php');

$id_b_del = $_GET['id_delete_like'];
$id_user_like = $_SESSION['user']['id'];

$sql_delete_like = $link->query("DELETE FROM `Favourite` WHERE `id_like_building` = '$id_b_del' AND `id_user` = '$id_user_like'");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>