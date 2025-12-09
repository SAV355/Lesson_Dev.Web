<?php

$numbers = array(1, 2, 3, 4, 5);

//array_map - применение функций к каждому  элементу
function square ($n) {
    return $n * $n;
}
$squares = array_map("square", $numbers);
print_r($squares);

// array_filter - фильтрация элементов
function even ($n) {
    return $n  % 2 == 0;
}
$evens = array_filter($numbers, "even");
print_r($evens);

// array_reduce - уменьшение массива к единственному значению
function sum ($carry, $item) {
    return $carry + $item;
}
$total = array_reduce($numbers, $sum);
echo "Сумма: " . $total;

?>