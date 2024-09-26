<?php

/**
 * Аундетификация в админ панеле, создание и редактирование постов
 */

session_start();

if(isset($_SESSION["user"]) && $_SESSION["user"]["user_role"] === "admin"):?>
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