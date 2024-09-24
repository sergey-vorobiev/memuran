<?php

//$sMainPath = str_replace("\\","/", dirname(__DIR__));
$sMemuranPath = "/memuran/";

// Константы
const CURRENT_TEMPLATE = "base";

// Абсолютные пути к директориям
define("PATH_MAIN", $sMemuranPath);
define("PATH_ADMIN", $sMemuranPath . "admin/");
define("PATH_TEMPLATES", $sMemuranPath . "/templates/");
define("PATH_CURRENT_TEMPLATE", $sMemuranPath . "/templates/" . CURRENT_TEMPLATE . "/");

$sUploadPath = "/upload/";

define("PATH_UPLOAD_PICTURES", $sUploadPath . "/pictures/");
define("PATH_UPLOAD_VIDEO", $sUploadPath . "/video/");
define("PATH_UPLOAD_AUDIO", $sUploadPath . "/audio/");