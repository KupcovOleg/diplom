<?php
session_start();
require('connection.php');

$sql_category = $link->query("SELECT * FROM `Category`");
$sql_material = $link->query("SELECT * FROM `Material`");
$sql_room = $link->query("SELECT * FROM `Room`");
$sql_floor = $link->query("SELECT * FROM `Floor`");
$sql_user = $link->query("SELECT * FROM `User`");
$sql_favourite = $link->query("SELECT * FROM `Favourite`");
$sql_found_region = $link->query("SELECT * FROM `Region_like` WHERE id_user_like_region = $id_user");
if (!isset($_SESSION['sql'])) {
    $_SESSION['sql'] = "SELECT * FROM `Building` WHERE 1";
}
$sql_information = $_SESSION['sql'];
$sql_building = $link->query($sql_information);

require('PHP/header.php');

$page = $_GET['page'];
if (!isset($page) or $page == "main") {
    require('PHP/main.php');
} elseif ($page == 'login') {
    require('PHP/login.php');
} elseif ($page == 'registration') {
    require('PHP/registration.php');
} elseif ($page == 'about') {
    require('PHP/about.php');
} elseif ($page == 'catalog') {
    if (isset($_GET['id_filtr'])) {
        $id = $_GET['id_filtr'];
        if ($id == 0) { $_SESSION['sql'] = "SELECT * FROM `Building` WHERE 1";
        } else {$_SESSION['sql'] = "SELECT * FROM `Building` WHERE `category` = $id";}}
    if (isset($_GET['filtr_second'])) {
        $material = $_POST['material'];
        if (isset($material)) {
            $material_filtr = rtrim(implode(', ', $material), ',');} else {$material_filtr = 0;}
        $room = $_POST['room'];
        if (isset($room)) {
            $room_filtr = rtrim(implode(', ', $room), ','); } else {$room_filtr = 0;}
        $floor = $_POST['floor'];
        if (isset($floor)) {
            $floor_filtr = rtrim(implode(', ', $floor), ',');} else { $floor_filtr = 0;}
        if (!isset($material_filtr) or $material_filtr !== 0) {
            $sql_request .= " AND `material` IN ($material_filtr)";} else {$sql_request .= " ";}
        if (!isset($room_filtr) or $room_filtr !== 0) {
            $sql_request .= " AND `room` IN ($room_filtr)";} else {$sql_request .= " ";}
        if (!isset($floor_filtr) or $floor_filtr !== 0) {
            $sql_request .= " AND `floor` IN ($floor_filtr)";} else {$sql_request .= " ";}
        } else { $sql_request = " "; }
    if (isset($_GET["id_sort"])) {
        $sort = $_GET["id_sort"];
        if ($sort == 0) {
            $sortirovka = " ";
        } elseif ($sort == 1) {
            $sortirovka = " ORDER BY price DESC ";
        } elseif ($sort == 2) {
            $sortirovka = " ORDER BY price ";
        } elseif ($sort == 3) {
            $sortirovka = " ORDER BY name DESC";
        } elseif ($sort == 4) {
            $sortirovka = " ORDER BY name ";
        }
        } else {
        $sortirovka = " ";
    }
    if (!isset($_GET['pagination'])) {
        $pagination = 1;
    } elseif (isset($_GET['pagination'])) {
        $pagination = $_GET['pagination'];
    }
    $sqk_o = $_SESSION['sql'];
    $sqk_o2 = $link->query($sqk_o);
    $p = ($pagination - 1) * 6;
    $sql_pagen = " LIMIT 6 OFFSET " . $p;
    $col_element = mysqli_num_rows($sqk_o2);
    $col_pagenn = ceil($col_element / 6);
    $col_pagen = intval($col_pagenn);
    $sql_building = $link->query($_SESSION['sql'] . $sql_request . $sortirovka . $sql_pagen);
    require('PHP/catalog.php');
} elseif ($page == 'single') {
    require('PHP/single.php');
} elseif ($page == 'payment') {
    require('PHP/payment.php');
} elseif ($page == 'thanks') {
    require('PHP/thanks.php');
} elseif ($page == 'login') {
    if (isset($_SESSION['user'])) {
        $_POST['user'];
        if ($_SESSION['user']['role'] == 0) {
            require('PHP/cab-user.php');
        } else {
            require('PHP/cab-admin.php');
        }
    }
    require('PHP/login.php');
} elseif ($page == 'registration') {
    require('PHP/registration.php');
} elseif ($page == 'cab-admin') {
    require('PHP/cab-admin.php');
} elseif ($page == 'cab-user') {
    require('PHP/cab-user.php');
} elseif ($page == 'plan') {
    require('PHP/plan.php');
}

require('PHP/footer.php');
