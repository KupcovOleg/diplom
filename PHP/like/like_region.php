<?php
session_start();
unset($_SESSION['banner_region']);
require('../../connection.php');
$id_region  = $_GET['id_region'];
$id_user = $_SESSION['user']['id'];
$sql_reg = mysqli_query($link, "SELECT FOUND_ROWS() AS count FROM `Region_like` WHERE `id_user_like_region` = '$id_user'");
$sql_reg_info = mysqli_num_rows($sql_reg);
$sql_reg_color = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = $id_region ");
    foreach ($sql_reg_color as $rare) :
    $sql_reg_status =  $rare['status_pay_region'];
    if (!isset($_SESSION['user'])) {
        $_SESSION['banner_region'] = 'Для выбора участка, пожалуйста, авторизуйтесь';
    } elseif ($_SESSION['user']['role'] == 0) {
        if ($sql_reg_status == 0) {
            echo $sql_reg_status;
            if ($sql_reg_info  < 1) {
                $add_region = $link->query("INSERT INTO `Region_like`(`id_user_like_region`, 
            `id_region_like_region`) VALUES ($id_user, $id_region)");
                $_SESSION['banner_region'] = 'Участок добавлен';
            } else {
                $change_region = $link->query("UPDATE `Region_like` SET id_region_like_region 
            = '$id_region' WHERE id_user_like_region = '$id_user'");
                $_SESSION['banner_region'] = 'Участок обновлен';
            }
        } else {
            $_SESSION['banner_region'] = 'Выберите свободный участок';
        }
    }
    endforeach;
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
