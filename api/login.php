<?php
// требуемые заголовки 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
header('Content-Type: application/json');
header("HTTP/1.1 200 OK");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
    header("HTTP/1.1 200 OK");
    die();
}
 
// файлы необходимые для соединения с БД 
include_once 'config/database.php';
include_once 'objects/user.php';
 
// получаем соединение с базой данных 
$database = new Database();
$db = $database->getConnection();

// создание объекта 'User' 
$user = new User($db);
 
// получаем данные 
$data = $_POST;

// устанавливаем значения 
$user->user_email = $data["email"];
$email_exists = $user->emailExists();

// существует ли электронная почта и соответствует ли пароль тому, что находится в базе данных 
if ( $email_exists && password_verify($data["password"], $user->user_password) ) {
 
    $user = array(
        "ID" => $user->ID,
        "user_name" => $user->user_name,
        "user_login" => $user->user_login,
        "user_email" => $user->user_email,
        "user_role" => $user->user_role
    );
 
    // код ответа 
    http_response_code(200);
 
    // создание jwt 
    echo json_encode(
        array(
            "user" => $user
        )
    );
 
}
 
// Если электронная почта не существует или пароль не совпадает, 
// сообщим пользователю, что он не может войти в систему 
else {
 
  // код ответа 
  http_response_code(401);

  // сказать пользователю что войти не удалось 
  echo json_encode(array("message" => "Loggin error"));
}