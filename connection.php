<?php 
$link = mysqli_connect("localhost", "root", "", "skudciyh_m4");
if ($link->connect_error) exit ("Ошибка с БД типа");
$link->set_charset("utf8");
?>