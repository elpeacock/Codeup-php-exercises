<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

// --------------------------part 1--------------------------------

print_r($companies) . PHP_EOL;

//---------------------------part 2--------------------------------

ksort($companies);

print_r($companies) . PHP_EOL;

//---------------------------part 4---------------------------------

arsort($companies);

print_r($companies) . PHP_EOL;

//----------------------------part 3-------------------------------

foreach($companies as $company => $people) {
    asort($people);
    $companies[$company] = $people;
    $msg .= "{$company} was founded by: " . PHP_EOL;
    foreach($people as $person) {
        $msg .= "   {$person}" . PHP_EOL;
        echo $msg;
    }
};


