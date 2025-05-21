<?php
session_start();
require('../../connection.php');

$id_users_delete = $_POST['users'];

$sql_delete = $link->query("DELETE FROM `User` WHERE `id` = '$id_users_delete'");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>