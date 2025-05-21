<?php
session_start();
require('connection.php');
unset($_SESSION['banner_change_pass']);
unset($_SESSION['banner_change_name']);
if ($_SESSION['user']['role'] == 0) {
    $id_user = $_SESSION['user']['id'];
    $upload_image = $_FILES["image"]["name"];
    $folder = "image/client/";
    move_uploaded_file($_FILES["image"]["tmp_name"], "$folder" . $_FILES["image"]["name"]);
    $image = "$folder$upload_image";
    $change_image = $link->query("UPDATE `User` SET `image` = '$image' WHERE `id` = '$id_user'");
    unset($_SESSION['user']);
    $check_user = $link->query("SELECT * FROM `User` WHERE `id` = '$id_user'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email'],
            "password" => $user['password'],
            "image" => $user['image'],
            "role" => $user['role']
        ];
        if ($_SESSION['user']['role'] == 0) {
            header("Location: index.php?page=cab-user");
        } else {
            header("Location: index.php?page=cab-admin");
        }
    }
} elseif ($_SESSION['user']['role'] == 1) {
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
    $folder = "image/product/";
    move_uploaded_file($_FILES["image"]["tmp_name"], "$folder" . $_FILES["image"]["name"]);
    $image = "$folder$upload_image";
    $add_building = $link->query("INSERT INTO `Building`(`name`, `price`, `description`, `material`, `category`, `image`, `square`,
    `room`, `floor`, `added`) 
    VALUES ('$name', '$price', '$description', '$material', '$category', '$image', '$square', '$room', '$floor', CURRENT_DATE())");
}
$redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'redirect-form.html';
header("Location: $redirect");
exit();
