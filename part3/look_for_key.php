<?php
$box = [1, 2, 3, 5, 3, ['asd', ['key']]];

// Вариант с циклом
function look_for_key_while($box) {

    while (count($box) > 0) {

        foreach ($box as $key => $item) {

            if ('key' === $item) {
                return 'found the key';
            }

            if (is_array($item)) {
                foreach ($item as $value) {
                    $box[] = $value;
                }
            }

            unset($box[$key]);
        }
    }

    return 'key not found';
}
echo look_for_key_while($box);


// Вариант с рекурсией
function look_for_key_recursion($box) {

    foreach ($box as $value) {

        if ('key' === $value) {
            return 'found the key';
        }

        if (is_array($value)) {
            return look_for_key_recursion($value);
        }
    }

    return 'key not found';
}

echo look_for_key_recursion($box);