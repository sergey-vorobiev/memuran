<?php
// объект 'user' 
class User {
 
    // подключение к БД таблице "mm_users" 
    private $conn;
    private $table_name = "mm_users";
 
    // свойства объекта 
    public $id;
    public $user_name;
    public $user_login;
    public $user_password;
    public $user_email;
    public $user_role;
 
    // конструктор класса User 
    public function __construct($db) {
        $this->conn = $db;
    }

    // Создание нового пользователя 
    function create() {
        

        // Вставляем запрос 
        $query = "INSERT INTO " . $this->table_name . "
                SET
                    user_name = :name,
                    user_login = :login,
                    user_password = :password,
                    user_email = :email,
                    user_role = 'user'";
    
        // подготовка запроса 
        
        $stmt = $this->conn->prepare($query);
        
        
        // инъекция 
        $this->user_name=htmlspecialchars(strip_tags($this->user_name));
        $this->user_login=htmlspecialchars(strip_tags($this->user_login));
        $this->user_password=htmlspecialchars(strip_tags($this->user_password));
        $this->user_email=htmlspecialchars(strip_tags($this->user_email));

        // привязываем значения 
        $stmt->bindParam(':name', $this->user_name);
        $stmt->bindParam(':login', $this->user_login);
        $stmt->bindParam(':email', $this->user_email);

        // для защиты пароля 
        // хешируем пароль перед сохранением в базу данных 
        $password_hash = password_hash($this->user_password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);
    
        // Выполняем запрос 
        // Если выполнение успешно, то информация о пользователе будет сохранена в базе данных 
        if($stmt->execute()) {
            return true;
        }
    
        return false;
    }
    
    // Проверка, существует ли электронная почта в нашей базе данных 
    function emailExists(){
 
        // запрос, чтобы проверить, существует ли электронная почта 
        $query = "SELECT ID, user_name, user_login, user_password, user_role
                FROM " . $this->table_name . "
                WHERE user_email = ?
                LIMIT 0,1";
     
        // подготовка запроса 
        $stmt = $this->conn->prepare( $query );
     
        // инъекция 
        $this->user_email=htmlspecialchars(strip_tags($this->user_email));
     
        // привязываем значение e-mail 
        $stmt->bindParam(1, $this->user_email);
     
        // выполняем запрос 
        $stmt->execute();
     
        // получаем количество строк 
        $num = $stmt->rowCount();
     
        // если электронная почта существует, 
        // присвоим значения свойствам объекта для легкого доступа и использования для php сессий 
        if($num>0) {
     
            // получаем значения 
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
            // присвоим значения свойствам объекта 
            $this->ID = $row['ID'];
            $this->user_name = $row['user_name'];
            $this->user_login = $row['user_login'];
            $this->user_password = $row['user_password'];
            $this->user_role = $row['user_role'];
     
            // вернём 'true', потому что в базе данных существует электронная почта 
            return true;
        }
     
        // вернём 'false', если адрес электронной почты не существует в базе данных 
        return false;
    }

    function get_info($id_user){
        $query = "SELECT login FROM users WHERE id = $id_user";
        $user = $this->conn->prepare($query);
        $user->execute();
        $row = $user->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // обновить запись пользователя 
    function update(){
     
        // Если в HTML-форме был введен пароль (необходимо обновить пароль) 
        $password_set=!empty($this->password) ? ", password = :password" : "";
     
        // если не введен пароль - не обновлять пароль 
        $query = "UPDATE " . $this->table_name . "
                SET
                    login = :login,
                    email = :email
                    {$password_set}
                WHERE id = :id";
     
        // подготовка запроса 
        $stmt = $this->conn->prepare($query);
     
        // инъекция (очистка) 
        $this->login=htmlspecialchars(strip_tags($this->login));
        $this->email=htmlspecialchars(strip_tags($this->email));
     
        // привязываем значения с HTML формы 
        $stmt->bindParam(':login', $this->login);
        $stmt->bindParam(':email', $this->email);
     
        // метод password_hash () для защиты пароля пользователя в базе данных 
        if(!empty($this->password)){
            $this->password=htmlspecialchars(strip_tags($this->password));
            $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $password_hash);
        }
     
        // уникальный идентификатор записи для редактирования 
        $stmt->bindParam(':id', $this->id);
     
        // Если выполнение успешно, то информация о пользователе будет сохранена в базе данных 
        if($stmt->execute()) {
            return true;
        }
     
        return false;
    }
}
?>