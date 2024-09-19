<?php
// требуемые заголовки 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
    header("HTTP/1.1 200 OK");
    die();
}

// подключение к БД 
// файлы, необходимые для подключения к базе данных 
include_once 'config/database.php';
include_once 'objects/user.php';
 
// получаем соединение с базой данных 
$database = new Database();
$db = $database->getConnection();
 
// создание объекта 'User' 
$user = new User($db);
 
// получаем данные 
$data = json_decode(file_get_contents("php://input")); // ???
 
// устанавливаем значения 
// $user->user_name = $data->user_name;
// $user->user_login = $data->user_login;
// $user->user_password = $data->user_password;
// $user->user_email = $data->user_email;
$user->user_name = $_GET['user_name'];
$user->user_login = $_GET['user_login'];
$user->user_password = $_GET['user_password'];
$user->user_email = $_GET['user_email'];

// создание пользователя 
if (
    !empty($user->user_name) &&
    !empty($user->user_login) &&
    !empty($user->user_password) &&
    !empty($user->user_email) &&
    $user->create()
) {
    // устанавливаем код ответа 
    http_response_code(200);
 
    // покажем сообщение о том, что пользователь был создан 
    echo json_encode(array("message" => "Пользователь был создан."));
}
 
// сообщение, если не удаётся создать пользователя 
else {
 
    // устанавливаем код ответа 
    http_response_code(400);
 
    // покажем сообщение о том, что создать пользователя не удалось 
    echo json_encode(array("message" => "Error: can't create user"));
}
?>