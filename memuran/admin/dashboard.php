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
        <a class="admin__nav-logo logo" href="<?php PATH_ADMIN ?>">Memuran</a>
        <ul class="admin__nav-list">
            <li class="admin__nav-item admin__nav-item--active">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: red">
                    <use href="<?= PATH_ADMIN . "assets/images/icons.svg#articles"?>">
                </svg>
                <a href="#" class="admin__nav-link">Записи</a>
            </li>
            <li class="admin__nav-item">
                <svg class="admin__nav-icon" fill="#ffffff" width="16px" height="16px" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title>collapse-categories</title><rect x="14" y="25" width="14" height="2"/><polygon points="7.17 26 4.59 28.58 6 30 10 26 6 22 4.58 23.41 7.17 26"/><rect x="14" y="15" width="14" height="2"/><polygon points="7.17 16 4.59 18.58 6 20 10 16 6 12 4.58 13.41 7.17 16"/><rect x="14" y="5" width="14" height="2"/><polygon points="7.17 6 4.59 8.58 6 10 10 6 6 2 4.58 3.41 7.17 6"/><rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/></svg>
                <a href="#" class="admin__nav-link">Категории</a>
            </li>
            <li class="admin__nav-item">
                <svg class="admin__nav-icon" fill="#ffffff" width="16px" height="16px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.207 9H5V7h7.136L11.05 5.914 12.464 4.5 16 8.036l-3.536 3.535-1.414-1.414L12.207 9zM10 4H8V2H2v12h6v-2h2v4H0V0h10v4z" fill-rule="evenodd"/>
                </svg>
                <a href="logout.php" class="admin__nav-link">Выйти</a>
            </li>
        </ul>
    </nav>
</main>

</body>
