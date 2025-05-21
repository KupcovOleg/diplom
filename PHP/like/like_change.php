<?php 
session_start();

$like = $_SESSION['like_add'];
print_r($like);

if(isset($like)) {
    foreach ($like as $key => $value) {
        $id_b = $key;
        $_SESSION['like_add'][$id_b]=$_POST[$id_b];
    }
}

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>