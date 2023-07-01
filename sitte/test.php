<?php
$host = 'localhost';
$username = 'root';
$password = '2004';
$database = 'register';

$mysqli = new mysqli($host, $username, $password, $database);

// Перевірка підключення до бази даних
if ($mysqli->connect_errno) {
    echo "Не вдалося підключитися до бази даних: " . $mysqli->connect_error;
    exit();
} else {
    echo "Підключення до бази даних встановлено!";
}

$mysqli->close();
?>
