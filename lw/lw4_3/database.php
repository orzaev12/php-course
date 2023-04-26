<?php

function connectDatabase(): PDO
{
    require_once "datamysql.php";
    $params = getConnectionParams();
    $dsn = $params['dsn'];
    $user = $params['user'];
    $password = $params['password'];
    return new PDO($dsn, $user, $password);
}

function saveUserToDatabase(PDO $connection, array $userParams): int 
{
    $query = <<<SQL
        INSERT INTO user (first_name, last_name, middle_name, gender, birthdate, email, phone, avatar)
        VALUES (:firstName, :lastName, :middleName, :gender, :birthdate, :email, :phone, :avatar)
        SQL;
    try
    {
    $statement = $connection->prepare($query);
    $statement->execute([
    ':firstName' => $userParams['first_name'],
    ':lastName' => $userParams['last_name'],
    ':middleName' => $userParams['middle_name'],
    ':gender' => $userParams['gender'],
    ':birthdate' => $userParams['birthdate'],
    ':email' => $userParams['email'],
    ':phone' => $userParams['phone'],
    ':avatar' => $userParams['avatar']
    ]);
    }
    catch (Exception $e)
    {
        echo "Такой пользователь уже создан! ";
        exit();
    }

    return (int)$connection->lastInsertId();
}

function findUserInDatabase(PDO $connection, int $userId): ?array {
    $query = <<<SQL
        SELECT
            user_id, 
            first_name, 
            last_name, 
            middle_name,
            gender, 
            birthdate, 
            email, 
            phone, 
            avatar
        FROM user
        WHERE user_id = $userId
    SQL;

    $statement = $connection -> query($query);
    $row = $statement -> fetch(PDO::FETCH_ASSOC);
    return $row ?: null;
 }
