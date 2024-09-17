<?php

/** Функция отладки */
function debug(&$mxData, $bAccess = true)
{
    global $USER;
    if(!$bAccess && !$USER->IsAdmin()) return;
    echo '<div class="debugger">';
    echo "<pre>" . print_r($mxData, true) . "</pre>";
    echo "<div>";
    die();
}