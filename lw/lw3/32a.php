<?php
// Объединение текстовых файлов в массив.


$filename1 = __DIR__ . '/dict/dict1.txt';
$filename2 = __DIR__ . '/dict/dict2.txt';


$text = [];

$f1 = fopen($filename1, 'r');
while (!feof($f1)) {
	$line = fgets($f1);
	$text[] .= $line . PHP_EOL;
}
fclose($f1);

$f2 = fopen($filename2, 'r');
while (!feof($f2)) {
	$line = fgets($f2);
	$text[] .= $line . PHP_EOL;
}
fclose($f2);


var_dump($text);    
