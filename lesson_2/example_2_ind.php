<?php
$numbers = array (2, 4, 6, 24, 12);
//сортировка по возрастанию
sort($numbers);
print_r($numbers);

//сортировка по убыванию
rsort($numbers);
print_r($numbers);

//ассоциативный массив 
$age = array ("Мария"=>"9", "Иван"=>"14", "Петр"=>"7");

//Сортировка по значению (возрастание)
asort($age);
print_r($age);

//Сортировка по ключу (возрастание)
ksort($age);
print_r($age);
?>