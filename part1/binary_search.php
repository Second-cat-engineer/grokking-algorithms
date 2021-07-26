<?php

function binarySearch($list, $item) {
    $start = 0;
    $end = count($list) - 1;

    while ($start <= $end) {
        $mid = floor(($start + $end) / 2);

        $result = $list[$mid];

        if ($result === $item) {
            return $mid;
        } elseif ( $result > $item) {
            $end = $mid - 1;
        } else {
            $start = $mid + 1;
        }
    }
    return 'no search';
}

$my_list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo binarySearch($my_list, 4); // 3
echo binarySearch($my_list, -1); // no search