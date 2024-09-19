<?php

include_once dirname(__DIR__) . "/main.php";


/**
 * Аундетификация в админ панеле, создание и редактирование постов
 */
?>

<form action="../../api/login.php" method="POST">
  <input name="email" type="text">
  <input name="password" type="password">
  <button type="submit">Логин</button>
</form>