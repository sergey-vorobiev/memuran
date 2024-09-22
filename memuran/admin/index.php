<?php

include_once "../php_interface/init.php";

/**
 * Аундетификация в админ панеле, создание и редактирование постов
 */

session_start();

if(isset($_SESSION["user"]) && $_SESSION["user"]["user_role"] === "admin"):?>
    <a href="/memuran/admin/logout.php">Выйти из аккаунта</a>
    <?include_once "dashboard.php";?>
<?php else: ?>
    <form action="/api/login.php" method="POST" class="form-auth">
        <input name="login" type="text">
        <input name="password" type="password">
        <button type="submit">Войти</button>
    </form>
<?php endif; ?>

<script src="<?=PATH_MAIN . "js/jquery-3.7.1.min.js"?>"></script>
<script src="<?=PATH_MAIN . "js/admin.js"?>"></script>