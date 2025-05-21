<?php
session_start();
unset($_SESSION['banner_fav']);
unset($_SESSION['banner_reg']);
unset($_SESSION['banner_sign']);
unset($_SESSION['banner_change_pass']);
unset($_SESSION['banner_change_name']);
unset($_SESSION['banner_book_app']);
unset($_SESSION['banner_con_app']);
?>
<div class="main pb-5">
    <div class="container mt-4 text-secondary">
        <h2 class="text-center p-3">Расположение участков</h3>
        <div class="d-flex align-items-center justify-content-around row">
            <div class="d-flex  py-1 col-2">
                <div class="kvadrat" style="background: green;"></div>
                <p class="text-secondary d-flex align-items-center ">свободен</p>
            </div>
            <div class="d-flex py-1 col-2">
                <div class="kvadrat" style="background: gray;"></div>
                <p>бронь</p>
            </div>
            <div class="d-flex py-1 col-2">
                <div class="kvadrat" style="background: rgba(200, 0, 0, 0.8);"></div>
                <p>куплен</p>
            </div>
            </div>
            <h3 class="text-center p-3">Просим заметить, что Вы можете выбрать только один свободный участок!</h3>
            <div class="mb-2">
                <?php
                if (isset($_SESSION['banner_region'])) {
                    if ($_SESSION['banner_region'] == "Для выбора участка, пожалуйста, авторизуйтесь") {
                        echo '<div class="text-center bor-red"><font color="red">Для выбора участка, пожалуйста, авторизуйтесь</font></div>';
                    } elseif ($_SESSION['banner_region'] == "Участок обновлен") {
                        echo '<div class="text-center bor-green"><font color="green">Участок обновлен</font></div>';
                    } elseif ($_SESSION['banner_region'] == "Участок добавлен") {
                        echo '<div class="text-center bor-green"><font color="green">Участок добавлен</font></div>';
                    } elseif ($_SESSION['banner_region'] == "Выберите свободный участок") {
                        echo '<div class="text-center bor-green"><font color="green">Выберите свободный участок</font></div>';
                    }
                }
                ?>
            </div>
            <div class="container border p-0">
                <table class="table table-borderless m-0">
                    <tr>
                        <td colspan="10" class="border border-bottom-0 border-black road-x" style="background: rgba(173, 131, 81, 0.6)"></td>
                    </tr>
                    <tr>
                        <td rowspan="5" class="border-start border-black road-y" style="background: rgba(173, 131, 81, 0.6)"></td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=1" class="text-decoration-none text-white">
                                <table class="table-striped podtable text-decoration-none" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 1");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8);"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>1</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=2" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 2");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>2</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td rowspan="5" class="road-x" style="background: rgba(173, 131, 81, 0.6)"></td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=3" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 3");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>3</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=4" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = mysqli_query($link, "SELECT `status_pay_region` FROM `Region` WHERE id_region = 4");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>4</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td rowspan="5" class="road-y" style="background: rgba(173, 131, 81, 0.6)"></td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=5" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 5");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>5</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=6" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 6");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>6</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td rowspan="5" class="border-end road-y border-black" style="background: rgba(173, 131, 81, 0.6)"></td>
                    </tr>
                    <tr>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=7" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 7");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>7</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=8" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 8");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>8</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=9" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 9");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>9</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=10" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 10");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>10</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=11" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 11");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>11</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=12" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 12");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>12</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=13" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 13");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>13</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=14" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 14");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>14</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=15" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 15");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>15</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=16" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 16");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>16</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=17" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 17");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>17</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=18" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 18");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>18</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=19" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 19");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>19</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=20" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 20");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>20</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=21" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 21");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>21</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=22" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 22");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>22</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=23" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 23");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>23</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=24" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 24");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>24</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=25" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 25");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>25</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=26" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 26");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>26</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=27" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 27");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>27</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=28" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 28");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>28</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=29" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 29");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>29</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                        <td class="border podtable-td" style="padding: 0; margin: 0;">
                            <a href="PHP/like/like_region.php?id_region=30" class="text-decoration-none text-white">
                                <table class="table-striped podtable" <?php
                                                                        $sql_region = $link->query("SELECT `status_pay_region` FROM `Region` WHERE `id_region` = 30");
                                                                        foreach ($sql_region as $rar) :
                                                                            $rer =  $rar['status_pay_region'];
                                                                            if ($rer == 0) {
                                                                                echo 'style="background-color: rgba(0, 150, 0, 0.8)"';
                                                                            } elseif ($rer == 1) {
                                                                                echo 'style="background-color: gray;"';
                                                                            } elseif ($rer == 2) {
                                                                                echo 'style="background-color: rgba(200, 0, 0, 0.8);"';
                                                                            } else {
                                                                                echo 'style="background-color: yellow;"';
                                                                            }
                                                                        endforeach;
                                                                        ?>>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>30</strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="podtable-tr">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="10" class="border-start border-end border-black road-x" style="background: rgba(173, 131, 81, 0.6)"></td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2" class="border-top-0 border-start border-bottom border-end border-black" style="background: rgba(173, 131, 81, 0.6)">
                            <abbr title="Детская площадка"><img src="image/ploshchadka.png" alt="площадка" width="100%" height="200%"></abbr>
                        </td>
                        <td colspan="2" rowspan="2" class="border-top-0 border-start border-bottom border-end border-black p-0">
                            <abbr title="Продуктовый магазин"><img src="image/магазин.png" alt="магазин" width="100%" height="200%"></abbr>
                        </td>
                        <td class="border-end border-black" style="background: rgba(173, 131, 81, 0.6)"></td>
                        <td colspan="4" rowspan="2" class="border-top border-bottom border-end border-black p-0">
                            <abbr title="Парковка">
                                <img src="image/parkovki.jpg" alt="парковка" width="100%" height="100%">
                                <img src="image/parkovki.jpg" alt="парковка" width="100%" height="100%">
                            </abbr>
                        </td>
                        <td class="border-top-0 border-end border-black" style="background: rgba(173, 131, 81, 0.6)"></td>
                    </tr>
                    <tr>
                        <td style="background: rgba(173, 131, 81, 0.6)"></td>
                        <td class="border-top-0 border-start border-bottom border-end border-black" style="background: rgba(173, 131, 81, 0.6)">
                            <abbr title="Сторожка"><img src="image/storozhka.png" alt="сторожка" width="100%" height="100%" style="transform: rotate(90deg);"></abbr>
                        </td>
                    </tr>
                </table>
            </div>
    </div>
</div>