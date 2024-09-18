<?php

//$sMainPath = str_replace("\\","/", dirname(__DIR__));
$sMainPath = "/memuran/";

// Константы
const CURRENT_TEMPLATE = "base";

// Абсолютные пути к директориям
define("PATH_MAIN", $sMainPath);
define("PATH_TEMPLATES", $sMainPath . "/templates/");
define("PATH_CURRENT_TEMPLATE", $sMainPath . "/templates/" . CURRENT_TEMPLATE . "/");