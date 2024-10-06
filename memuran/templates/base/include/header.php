<?php
/**
 * @var string $sPathUrl - путь без GET параметров
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=PATH_CURRENT_TEMPLATE . "template.css"?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="<?=PATH_CURRENT_TEMPLATE . "assets/images/favicon/apple-touch-icon.png"?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=PATH_CURRENT_TEMPLATE . "assets/images/favicon/favicon-32x32.png"?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=PATH_CURRENT_TEMPLATE . "assets/images/favicon/favicon-16x16.png"?>">
    <link rel="manifest" href="<?=PATH_CURRENT_TEMPLATE . "assets/images/favicon/site.webmanifest"?>">

    <title>Memuran Demo</title>
</head>
<body>
<section class="section-header">
    <div class="container">
        <div class="header">
            <a href="/" class="header-logo">
                <img src="<?=PATH_CURRENT_TEMPLATE . "assets/images/favicon/android-chrome-192x192.png"?>" alt="Лого">
                <span class="text--xl">Книга жизни</span>
            </a>
            <div class="header-menu">
                <a href="/" class="text--md<?=$sPathUrl === "/" ? ' active"' : ""?>">Главная</a>
                <a href="/events/" class="text--md<?=$sPathUrl === "/events/" ? ' active"' : ""?>">События</a>
                <a href="/calendar/" class="text--md<?=$sPathUrl === "/calendar/" ? ' active"' : ""?>">Календарь</a>
            </div>
        </div>
    </div>
</section>