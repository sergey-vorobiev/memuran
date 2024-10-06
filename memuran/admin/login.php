<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
<h1>Вход</h1>

<?php if (isset($error_message)): ?>
    <div style="color: red;"><?php echo $error_message; ?></div>
<?php endif; ?>

<form action="/api/login.php" method="POST" class="form-auth">
    <input name="login" type="text" required placeholder="Логин">
    <input name="password" type="password" required placeholder="Пароль">
    <button type="submit">Войти</button>
</form>
</body>
</html>
