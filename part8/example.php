<?php

$statesNeeded = ['mt', 'wa', 'or', 'id', 'nv', 'ut', 'ca', 'az'];

$stations = [
    'kone' => ['id', 'nv', 'ut'],
    'ktwo' => ['wa', 'id', 'mt'],
    'kthree' => ['or', 'nv', 'ca'],
    'kfour' => ['nv', 'ut'],
    'kfive' => ['ca', 'az'],
];

$finalStations = [];

while ($statesNeeded) {
    $bestStation = null;
    $statesCovered = []; // Штаты, обслуживаемые этой станцией, которые еще не входят в текущее покрытие.

    foreach ($stations as $station => $statesForStation) {
        $covered = array_intersect($statesNeeded, $statesForStation);
        if (count($covered) > count($statesCovered)) {
            $bestStation = $station;
            $statesCovered = $covered;
        }
    }
    $statesNeeded = array_diff($statesNeeded, $statesCovered);
    $finalStations[] = $bestStation;
}

var_dump($finalStations); // ['kone', 'ktwo', 'ktree', 'kfive']
