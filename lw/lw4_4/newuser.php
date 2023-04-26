<?php

// TODO: Перенести проект в отдельный каталог(все файлы проекта).
// TODO: Переделать на отправку запроса методом POST вместо GET.
// TODO: обработка аватара(временное сохранение на компьютер в каталог upploaads и путь в БД)
require_once "database.php";
$userParams = [];
$user = collectDataInClass($userParams);
$connection = connectDatabase();
$userId = saveUserToDatabaseWithClass($connection, $user);
$redirectUrl = "/show_user.php?user_id=$userId";
header('Location: ' . $redirectUrl, true, 303);
die();