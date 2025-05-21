<?php
session_start();
require('../../connection.php');
unset($_SESSION['consultation']);
unset($_SESSION['booking']);

if (isset($_POST['booking'])) {
    $_SESSION['booking'] = $_POST['booking'];
    $booking = $_SESSION['booking'];
    $check_info = $link->query("SELECT * FROM `Booking` JOIN `Status` ON `id_book` = '$booking' AND id_status = id");
    $booking_info = mysqli_fetch_assoc($check_info);
    $_SESSION['booking'] = [
        "id_book" => $booking_info['id_book'],
        "name" => $booking_info['name'],
        "email" => $booking_info['e-mail'],
        "status" => $booking_info['status'],
        "id_user_book" => $booking_info['id_user_book'],
        "id_building_book" => $booking_info['id_building_book'],
        "region_book" => $booking_info['region_book'],
    ];
} elseif (isset($_POST['consultation'])) {
    $_SESSION['consultation'] = $_POST['consultation'];
    $consultation = $_SESSION['consultation'];
    $check_info = $link->query("SELECT * FROM `Consultation` JOIN `Status` ON `id_con` = '$consultation' AND `id_status` = `id`");
    $consultation_info = mysqli_fetch_assoc($check_info);
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