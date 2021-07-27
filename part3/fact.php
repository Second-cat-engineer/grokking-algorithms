<?php

// Стек вызовов с рекурсией
function fact($x) {
    if (0 === $x) {
        return 'число должно быть больше 0';
    }

    if (1 === $x) {
        return 1;
    } else {
        return $x * fact($x -1);
    }
}

var_dump(fact(5));
