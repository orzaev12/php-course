<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Профиль</title>
</head>
<body>
<?php if ($user): ?>
    <div>
        <h1>Информация о пользователе</h1>
        <p>Фамилия: <?= htmlentities($user["first_name"]) ?></p>
        <p>Имя: <?= htmlentities($user["last_name"]) ?></p>
        <?php if ($user["middle_name"]) : ?>
            <p> Отчество: <?= htmlentities($user["middle_name"]) ?></p>
        <?php endif; ?>
        <p>Пол: <?= htmlentities($user["gender"]) ?></p>
        <p>Дата рождения: <?= htmlentities($user["birthdate"]) ?></p>
        <p>Email: <?= htmlentities($user["email"]) ?></p>
        <?php if ($user["phone"]) : ?>
            <p>Номер телефона: <?= htmlentities($user["phone"]) ?></p>
        <?php endif; ?>
        <?php if ($user["avatar"]) : ?>
            <p>Путь к аватару: <?= htmlentities($user["avatar"]) ?></p>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</body>
</html>