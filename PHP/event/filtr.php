<?php
session_start();
require('../../connection.php');
unset($material_filtr);
unset($room_filtr);
unset($floor_filtr);

$material = $_POST['material'];
if (isset($material)) {
$material_filtr = rtrim(implode(', ', $material), ',');
} else {
    $material_filtr = 0;
}

$room = $_POST['room'];
if (isset($room)) {
$room_filtr = rtrim(implode(', ', $room), ',');
} else {
    $room_filtr = 0;
}

$floor = $_POST['floor'];
if (isset($floor)) {
$floor_filtr = rtrim(implode(', ', $floor), ',');
} else {
    $floor_filtr = 0;
}

if (!isset($material_filtr) or $material_filtr !== 0) {
    $sql_request .= " AND `material` IN ($material_filtr)";
} else {
    $sql_request .= " ";
}

if (!isset($room_filtr) or $room_filtr !== 0) {
    $sql_request .= " AND `room` IN ($room_filtr)";
} else {
    $sql_request .= " ";
}

if (!isset($floor_filtr) or $floor_filtr !== 0) {
    $sql_request .= " AND `floor` IN ($floor_filtr)";
} else {
    $sql_request .= " ";
}

$sql_request;
$sql_building = $link->query($_SESSION['sql'] . $sql_request);

$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>
