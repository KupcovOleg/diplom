<?php
session_start();
require('../../connection.php');
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];
$square = $_POST['square'];
$floor = $_POST['floor'];
$material = $_POST['material'];
$category = $_POST['category'];
$room = $_POST['room'];

$upload_image = $_FILES["image"]["name"];

$folder = "../../image/product/";
move_uploaded_file($_FILES["image"]["tmp_name"],"$folder".$_FILES["image"]["name"]);

$image = "$folder$upload_image";

$add_building = $link->query("INSERT INTO `Building`(`name`, `price`, `description`, `material`, `category`, `image`, `square`,
`room`, `floor`, `added`) 
VALUES ('$name', '$price', '$description', '$material', '$category', '$image', '$square', '$room', '$floor', CURRENT_DATE())");
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
?>