<?php 
$host = 'localhost'; // Имя или адрес сервера 
$user = 'root'; // Имя пользователя БД 
$password = 'root'; // Пароль пользователя 
$db_name = 'Grugogle'; // Название БД 

$db = mysqli_connect($host, $user, $password, $db_name); // Подключение 

// Проверка на подключение 
if (!$db) { 
// Если проверку не прошло, то выводится надпись ошибки и заканчивается работа скрипта 
echo "Не удается подключиться к серверу базы данных!"; 
exit; 
}