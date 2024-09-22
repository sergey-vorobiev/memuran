<?php

class Database {
    // укажите свои учетные данные базы данных 
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    // Конструктор, который принимает параметры для подключения к БД
    public function __construct($host, $db_name, $username, $password) {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->username = $username;
        $this->password = $password;
    }

    // получаем соединение с БД 
    public function getConnection(){

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    } 
}


function newDatabase() {
    include_once 'connect-data.php';
    return new Database($host, $db_name, $username, $password);
}

?>