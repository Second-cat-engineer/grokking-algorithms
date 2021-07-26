<?php

function findSmallest($arr) {
    $smallest = $arr[0];
    $smallestIndex = 0;

    foreach ($arr as $key => $value) {
        if ($value < $smallest) {
            $smallest = $value;
            $smallestIndex = $key;
        }
    }

    return $smallestIndex;
}

function selectionSort($arr) {
    $sortArr = [];
    foreach ($arr as $key => $value) {
        $smallest = findSmallest($arr);
        $sortArr[] = $arr[$smallest];
        unset($arr[$smallest]);
        $arr = array_values($arr);
    }

    return $sortArr;
}

$list = [5, 3, 6, 2, 10];
var_dump(selectionSort($list));

// либо воспользоваться функцией из SPL
asort($list);
var_dump($list);