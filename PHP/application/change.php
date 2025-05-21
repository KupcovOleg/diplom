<?php
session_start();
require('../../connection.php');

if (isset($_POST['change_book'])) {
    unset($_SESSION['consultation']);
    $book_id = $_SESSION['booking']['id_book'];
    unset($_SESSION['booking']);
    $change = $_POST['change_book'];
    $change_book = $link->query("UPDATE `Booking` SET `id_status` = '$change' WHERE `id_book` = '$book_id'");
    $check_b = $link->query("SELECT * FROM `Booking` JOIN `Status` ON `id_book` = '$book_id' AND id_status = id");
    $booking_info = mysqli_fetch_assoc($check_b);
    $_SESSION['booking'] = [
        "id_book" => $booking_info['id_book'],
        "name" => $booking_info['name'],
        "email" => $booking_info['e-mail'],
        "status" => $booking_info['status'],
        "id_user_book" => $booking_info['id_user_book'],
        "id_building_book" => $booking_info['id_building_book'],
        "region_book" => $booking_info['region_book'],
    ];
} elseif (isset($_POST['change_con'])) {
    unset($_SESSION['booking']);
    $con_id = $_SESSION['consultation']['id_con'];
    $change = $_POST['change_con'];
    unset($_SESSION['consultation']);
    $change_con = $link->query("UPDATE `Consultation` SET `id_status` = '$change' WHERE `id_con` = '$con_id'");
    $check_c = $link->query("SELECT * FROM `Consultation` JOIN `Status` ON `id_con` = '$con_id' AND `id_status` = id");
    $consultation_info = mysqli_fetch_assoc($check_c);
    $_SESSION['consultation'] = [
        "id_con" => $consultation_info['id_con'],
        "name" => $consultation_info['name'],
        "email" => $consultation_info['e-mail'],
        "status" => $consultation_info['status'],
        "user" => $consultation_info['user'],
        "date" => $consultation_info['date']
    ];
}   
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();  
?>