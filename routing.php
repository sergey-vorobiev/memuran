<?php

session_start();
/**
 * Роутинг для сайта
 */

$sPathUrl = explode("?", $_SERVER["REQUEST_URI"])[0];

// Роутинг для админской части
if(str_contains($sPathUrl, "/admin/")) {
    if(isset($_SESSION["user"]) && $_SESSION["user"]["user_role"] === "admin") {
        switch($sPathUrl) {
            case "/admin/":
                require_once __DIR__ . PATH_MAIN . "admin/index.php";
                break;

            case "/admin/logout/":
                require_once __DIR__ . PATH_MAIN . "admin/logout.php";
                break;

            default:
                http_response_code(404);
                require_once __DIR__ . PATH_CURRENT_TEMPLATE . "404.php";
        }
    }
    else {
        require_once __DIR__ . PATH_MAIN . "admin/login.php";
    }

}
// Роутинг для юзерской части
else {
    switch($sPathUrl){
        case "/":
            require_once __DIR__ . PATH_CURRENT_TEMPLATE . "index.php";
            break;

        case "/events/":
            require_once __DIR__ . PATH_CURRENT_TEMPLATE . "events.php";
            break;

        case "/calendar/":
            require_once __DIR__ . PATH_CURRENT_TEMPLATE . "calendar.php";
            break;

        default:
            http_response_code(404);
            require_once __DIR__ . PATH_CURRENT_TEMPLATE . "404.php";
    }
}