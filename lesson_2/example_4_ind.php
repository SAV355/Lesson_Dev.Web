<?php

$array1 = array("a" => "зеленый", "красный", "синий");
$array2 = array("b" => "зеленый", "желтый", "красный");

//Объединение массива
$result = array_merge($array1, $array2);
print_r($result);

//различные массивы
$result = array_diff ($array1, $array2);
print_r($result);


//Пересечение массивов
$result = array_intersect($array1, $array2);
print_r($result);
?>