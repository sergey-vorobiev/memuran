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
    <link rel="stylesheet" href="/memuran/templates/base/template.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Memuran Demo</title>
</head>
<body>
<section class="section-header">
    <div class="container">
        <div class="header">
            <h1>Книга жизни</h1>
            <div class="header-menu">
                <a href="/"<?=$sPathUrl === "/" ? ' class="active"' : ""?>>Главная</a>
                <a href="/events/"<?=$sPathUrl === "/events/" ? ' class="active"' : ""?>>События</a>
                <a href="/calendar/"<?=$sPathUrl === "/calendar/" ? ' class="active"' : ""?>>Календарь</a>
            </div>
        </div>
    </div>
</section>