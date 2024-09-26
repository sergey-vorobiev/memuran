<?php

/**
 * Аундетификация в админ панеле, создание и редактирование постов
 */

session_start();

if(isset($_SESSION["user"]) && $_SESSION["user"]["user_role"] === "admin"):?>
    <h1>Добро пожаловать <?=$_SESSION["user"]["user_name"]?></h1>
    <a href="/memuran/admin/logout.php">Выйти из аккаунта</a>
<?php else: ?>
    <form action="/api/login.php" method="POST" class="form-auth">
        <input name="login" type="text">
        <input name="password" type="password">
        <button type="submit">Войти</button>
    </form>
<?php endif; ?>

<script src="<?=PATH_MAIN . "js/jquery-3.7.1.min.js"?>"></script>
<script src="<?=PATH_MAIN . "js/admin.js"?>"></script>