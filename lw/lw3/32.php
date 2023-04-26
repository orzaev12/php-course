<?php

$out = __DIR__ . '/dict/dict.txt';
$in1 = __DIR__ . '/dict/dict1.txt';
$in2 = __DIR__ . '/dict/dict2.txt';


$text = [];

$f1 = fopen($in1, 'r');
while (!feof($f1)) {
	$line = fgets($f1);
	$text[] .= $line . PHP_EOL;
}
fclose($f1);

$f2 = fopen($in2, 'r');
while (!feof($f2)) {
	$line = fgets($f2);
	$text[] .= $line . PHP_EOL;
}
fclose($f2);


$string = [];
foreach($text as $string)
{
    list($key, $value) = explode(":", $string);
    $array1[$key] = $value;
}


foreach($array1 as $key => $value)
{
    $keys[] = $key;
    $values[] = $value;
}

asort($keys);
 
$f2 = fopen($out, 'w');
foreach($keys as $k => $val)
{
	fwrite($f2, "$val:$array1[$val]");
}
fclose($f2);
