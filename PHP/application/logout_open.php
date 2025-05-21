<?php
session_start();
require('../../connection.php');
unset($_SESSION['consultation']);
unset($_SESSION['booking']);
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>
