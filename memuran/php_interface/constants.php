<?php

$sMainPath = str_replace("\\","/", dirname(__FILE__));

// Абсолютные пути к директориям
define("PATH_MAIN", $sMainPath);
define("PATH_TEMPLATES", $sMainPath . "/templates/");