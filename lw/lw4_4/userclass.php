<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Профиль</title>
</head>
<body>
<?php if ($user): ?>
    <div>
        <h1>Информация о пользователе</h1>
        <p>Фамилия: <?= htmlentities($user->getFirstName()) ?></p>
        <p>Имя: <?= htmlentities($user->getLastName()) ?></p>
        <?php if ($user->getMiddleName()) : ?>
            <p> Отчество: <?= htmlentities($user->getMiddleName()) ?></p>
        <?php endif; ?>
        <p>Пол: <?= htmlentities($user->getGender()) ?></p>
        <p>Дата рождения: <?= htmlentities($user->getBirthDate()) ?></p>
        <p>Email: <?= htmlentities($user->getEmail()) ?></p>
        <?php if ($user->getPhone()) : ?>
            <p>Номер телефона: <?= htmlentities($user->getPhone()) ?></p>
        <?php endif; ?>
        <?php if ($user->getAvatar()) : ?>
            <p>Путь к аватару: <?= htmlentities($user->getAvatar()) ?></p>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</body>
</html>