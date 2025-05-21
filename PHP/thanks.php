<?php
session_start();
$id_bye = $_GET['id_bye'];
$bye_region = $link->query("UPDATE `Region` SET `status_pay_region` = 2 WHERE id_region = $id_bye");
?>
<div class="pt-5 pb-5 main">
    <div class="container">
    <h2 class="text-center p-5">Благодарим за покупку!</h2>
    <a href="index.php?page=main"><button class="btn btn-secondary py-3 my-5 w-100">На главную</button></a>
</div>
</div>