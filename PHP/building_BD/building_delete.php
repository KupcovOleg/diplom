<?php
session_start();
require('../../connection.php');

$id_build_del = $_POST['id_delete'];

$sql_delete = $link->query("DELETE FROM `Building` WHERE `id` = '$id_build_del'");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>