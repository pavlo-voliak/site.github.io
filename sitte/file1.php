<?php
$email = filter_var(trim($_POST['email']));
$pass = filter_var(trim($_POST['pass']));

$mysql = new mysqli('localhost', 'root', '2004', 'register');

$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");

if ($result->num_rows === 0) {
    echo "Ви ввели неправильний email. Щоб повернутися назад, натисніть <a href='index4.html'>тут</a>.";
    exit();
}

$user = $result->fetch_assoc();

if (!password_verify($pass, $user['pass'])) {
    echo "Ви ввели неправильний пароль. Щоб повернутися назад, натисніть <a href='index4.html'>тут</a>.";
    exit();
}

setcookie('user', $user['pass'], time() + 3600, "/");

$mysql->close();

header('Location: /mysite/index.html');
?>
