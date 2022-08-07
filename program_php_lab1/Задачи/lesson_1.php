<?php
// Задача 1: сложить два числа
echo "<h2>Задача 1</h2><br>";
$a = rand(0,100);
$b = rand(0,100);
echo "$a + $b =". ($a + $b)."\n\r<br>";

// Задача 2: сложить две строки
echo "<h2>Задача 2</h2><br>";
$a = "Превед ";
$b = "Медвед";
echo "Результирующая строка: ".$a.$b;

/*
//Задача 2: вариант со случайными строками
echo "<h2>Задача 2</h2><br>";
function generateRandomString($length = 10):string {
	$characters = 'asdjkhf;jahdpgfjuhndfLKHJPIOUHPIUYGBkdsfj.glkh';
	$charactersLength = strlen($characters);
	$randomString = "";
	f
}	*/

echo "<h2>Задача 3</h2><br>";

$type_animal = "dog";
if($type_animal=="dog") {$name_animal = "Шарик";}
elseif ($type_animal=="cat") {$name_animal = "Барсик";}
elseif ($type_animal=="fish") {$name_animal = "Немо";}
else {$name_animal = "Ошибка";}
echo "$type_animal -- $name_animal";