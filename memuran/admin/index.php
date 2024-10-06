<?php include_once "memuran/php_interface/init.php"; ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=PATH_ADMIN . "assets/css/admin.css"?>">

    <!--  Временное подключение шрифта Nunito  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Memuran — Дашборд</title>
</head>
<body>
<main class="admin__sidebar">
    <nav class="admin__nav">
        <a class="admin__nav-logo logo" href="<?= PATH_ADMIN ?>">Memuran</a>
        <ul class="admin__nav-list">
            <li class="admin__nav-item admin__nav-item--active">
                <svg class="admin__nav-icon" width="16" height="16">
                    <use href="<?=PATH_ADMIN . "assets/images/icons.svg#articles";?>"/>
                </svg>
                <a href="#" class="admin__nav-link">Записи</a>
            </li>
            <li class="admin__nav-item">
                <svg class="admin__nav-icon" width="16" height="16">
                    <use href="<?=PATH_ADMIN . "assets/images/icons.svg#categories";?>"/>
                </svg>
                <a href="#" class="admin__nav-link">Категории</a>
            </li>
            <li class="admin__nav-item">
                <svg class="admin__nav-icon" width="16px" height="16px">
                    <use href="<?=PATH_ADMIN . "assets/images/icons.svg#exit";?>"/>
                </svg>
                <a href="/admin/logout/" class="admin__nav-link">Выйти</a>
            </li>
        </ul>
    </nav>
</main>
</body>

<script src="<?=PATH_MAIN . "js/jquery-3.7.1.min.js"?>"></script>
<script src="<?=PATH_ADMIN . "assets/js/admin.js"?>"></script>