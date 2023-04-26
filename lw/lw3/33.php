<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
</head>
<body>
<h3>Форма ввода данных</h3>
<form action="l3_3.php" method="POST">
    <p>Фамилия: <input type="text" name="first_name" required/></p>
    <p>Имя: <input type="text" name="last_name" required/></p>
    <p>Отчество: <input type="text" name="middle_name" /></p>
    <p>Пол: 
      <select name="gender" size="1">
        <option value="male">Мужской</option>
        <option value="female">Женский</option>
    </select>
    </p>
    <p>Дата рождения: <input type="date" name="birthdate" required/></p>
    <p>Email: <input type="email" name="email" required/></p>
    <p>Телефон: <input type="tel" name="phone" /></p>
    <p>Аватар: <input type="file" name="avatar" size="10" /><br /><br /></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>