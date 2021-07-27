<?php

$arr = [15, 1, 4, 5, 7, 2, 12, 3,];

function quick_sort($arr) {
    if (count($arr) < 2) {
        return $arr;
    }
    $middle = $arr[floor(count($arr) / 2)];

    $less = [];
    $greater = [];
    foreach ($arr as $value) {
        if ($value < $middle) {
            $less[] = $value;
        }
        if ($value > $middle) {
            $greater[] = $value;
        }
    }

    return array_merge(quick_sort($less), [$middle], quick_sort($greater));
}
var_dump(quick_sort($arr));

// Пример реализации из интернета. Можно указать в каких пределах ключей нужно отсортировать
function quickSort(&$arr, $low, $high) {
    $i = $low;
    $j = $high;
    $middle = $arr[ ( $low + $high ) / 2 ];  // middle — опорный элемент; в нашей реализации он находится посередине между low и high
    do {
        while($arr[$i] < $middle) ++$i;  // ищем элементы для правой части
        while($arr[$j] > $middle) --$j;  // ищем элементы для левой части
            if($i <= $j){
                // перебрасываем элементы
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;

                $i++; $j--;// следующая итерация
            }
        }
    while($i < $j);

    if($low < $j){
        quickSort($arr, $low, $j);// рекурсивно вызываем сортировку для левой части
    }

    if($i < $high){
        quickSort($arr, $i, $high);// рекурсивно вызываем сортировку для правой части
    }
}

//var_dump($arr);
quickSort($arr, 0, 7);
var_dump($arr);