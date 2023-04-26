<?php
require_once "showuserclass.php";
require_once "datamysql.php";

function connectDatabase(): PDO
{
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

 function collectDataInClass(array $userParams): User
 {
    
     $USER_FIELDS = ["last_name", "first_name", "middle_name", "gender", "birthdate", "email", "phone", "avatar"];
     foreach ($USER_FIELDS as $key)
     {
         if (isset($_POST[$key]))
         {
             $userParams[$key] = $_POST[$key];
         }
     }
     return new User(null, $userParams["first_name"], $userParams["last_name"], $userParams["middle_name"], $userParams["gender"], $userParams["birthdate"], $userParams["email"], $userParams["phone"], $userParams["avatar"]);
}

 function saveUserToDatabaseWithClass(PDO $connection, User $user): int 
{
    $query = <<<SQL
        INSERT INTO user (first_name, last_name, middle_name, gender, birthdate, email, phone, avatar)
        VALUES (:firstName, :lastName, :middleName, :gender, :birthdate, :email, :phone, :avatar)
    SQL;
    try
    {
        $statement = $connection->prepare($query);
        $statement->execute([
            ':firstName' => $user->getFirstName(), 
            ':lastName' => $user->getLastName(),
            ':middleName' => $user->getMiddleName(), 
            ':gender' => $user->getGender(),
            ':birthdate' => $user->getBirthDate(), 
            ':email' => $user->getEmail(),
            ':phone' => $user->getPhone(), 
            ':avatar' => $user->getAvatar()
        ]);
    }
    catch (Exception $e)
    {
        echo "Такой пользователь уже создан! ";
        exit();
    }

    return (int)$connection->lastInsertId();
}

 function findUserInDatabaseWithClass(PDO $connection, int $userId): User 
 {
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
    return new User($row["user_id"], $row["first_name"], $row["last_name"], $row["middle_name"], $row["gender"], $row["birthdate"], $row["email"], $row["phone"], $row["avatar"]);

 }

