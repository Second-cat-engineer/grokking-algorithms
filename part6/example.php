<?php

$graph = [];

$graph['you'] = ['alice', 'bob', 'claire'];
$graph['bob'] = ['anuj', 'peggy'];
$graph['alice'] = ['peggy'];
$graph['claire'] = ['thom', 'jonny'];
$graph['anuj'] = [];
$graph['peggy'] = [];
$graph['thom'] = [];
$graph['jonny'] = [];


function breadthFirstSearch($graph, $name) {
    $searchQueue = [];
    $searched = [];

    foreach ($graph[$name] as $value) {
        $searchQueue[] = $value;
    }

    while ($searchQueue) {
        $person = array_shift($searchQueue);

        if (!in_array($person, $searched)) {
            if (personIsSeller($person)) {
                return $person . ' is a seller!';
            } else {
                foreach ($graph[$person] as $value) {
                    $searchQueue[] = $value;
                }
            }
        }
    }

    return 'seller not found';
}

function personIsSeller($person) {
    return 'thom' === $person;
}

echo breadthFirstSearch($graph, 'you');
echo breadthFirstSearch($graph, 'alice');