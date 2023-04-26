<?php
require_once "database.php";

$userId = (int) $_GET["user_id"];
if (!$userId) {
    echo "Пользователь с ID $userId не найден.";
} else {
    $connection = connectDatabase();
    $user = findUserInDatabase($connection, $userId);
    require_once "user.php";
    if (!$user) {
        echo "Пользователь с ID $userId не найден.";
    }
}