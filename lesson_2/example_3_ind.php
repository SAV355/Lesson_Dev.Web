<?php

$fruits = array("apple", "orange", "banana", "pear");
//Проверка существования значения
if (in_array("banana", $fruits)) {
    echo "банан найден в массиве!";
}

//Поиск ключа по значению

$key = array_search("orange", $fruits);
    echo "Апельсин имеет ключ: " . $key;


//Асоциатитвный массив

$age = array ("Мария"=>"9", "Иван"=>"14", "Петр"=>"7");

//Проверка существования ключа

if (array_key_exists("Иван", $age)) {
    echo "Возраст Ивана: " . $age["Ивана"];
}



?>