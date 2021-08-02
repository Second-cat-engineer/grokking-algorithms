<?php
// TODO Алгоритм не рабочий!!! есть ошибки в коде. Исправить

$graph = [];
$graph['start'] = ['a' => 6, 'b' => 2];
$graph['a']['finish'] = 1;
$graph['b'] = ['a' => 3, 'finish' => 3];

function findLowestCostItem($costs, $processed) {
    $lowestCost = INF;
    $lowestCostNode = null;

    foreach ($costs as $node => $cost) {
        if ($cost < $lowestCost && !in_array($node, $processed)) {
            $lowestCost = $cost;
            $lowestCostNode = $node;
        }
    }

    return $lowestCostNode;
}

function algorithm($graph) {
    $costs = ['a' => 6, 'b' => 2, 'finish' => INF,]; // Стоимость всех узлов
    $parents = ['a' => 'start', 'b' => 'start', 'finish' => null,]; // Таблица родителей
    $processed = []; // массив для отслеживания всех уже обработанных узлов, т.к. один узел не должен обрабатываться многократно

    $nodeWithLowestCost = findLowestCostItem($costs, $processed);

    while ($nodeWithLowestCost !== null) {
        $cost = $costs[$nodeWithLowestCost];
        $neighbors = $graph[$nodeWithLowestCost];

        foreach ($neighbors as $key => $value) {
            $newCost = $cost + $value;

            if ($costs[$key] > $newCost) {
                $costs[$key] = $newCost;
                $parents[$key] = $nodeWithLowestCost;
            }

            $processed[] = $nodeWithLowestCost;
        }

        $nodeWithLowestCost = findLowestCostItem($costs, $processed);
    }

    var_dump($costs);
}

algorithm($graph);