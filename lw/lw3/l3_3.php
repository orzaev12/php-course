<?php
$array1 = $_POST;
$json = json_encode($array1, JSON_UNESCAPED_UNICODE);
$file = fopen('users.json','a');
fwrite($file, $json);
fwrite($file, "\n");
fclose($file);
echo "Вы прошли регистрацию.";