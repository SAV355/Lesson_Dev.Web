<?php
// Создание массива
$fruits = array("apple", "orange", "banana");

//Добавление масива
array_push($fruits, "grape", "Mango");
$fruits[] = "kiwi";

//Удаление последнего элемента
$last = array_pop($fruits);

//Удаление первого элемента
$first = array_shift($fruits);

//добавление в начало
array_unshift( $fruits, "pineapple");

print_r($fruits);
?>