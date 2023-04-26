<?php
require_once "database.php";
require_once "showuserclass.php";

$userId = (int) $_GET["user_id"];
if (!$userId) {
    echo "Пользователь с ID $userId не найден.";
} else {
    $connection = connectDatabase();
    $user = findUserInDatabaseWithClass($connection, $userId);
    require_once "userclass.php";
    if (!$user) {
        echo "Пользователь с ID $userId не найден.";
    }
}