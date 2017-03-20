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

// --------------------------part 1 - output companies array in current form --------------------------------

print_r($companies) . PHP_EOL;

//---------------------------part 2 - sort by company name --------------------------------

ksort($companies);

print_r($companies) . PHP_EOL;


//----------------------------part 3 - sort founders alphabetically -------------------------------
$msg = "";
foreach($companies as $company => $people) {
    asort($people);
    $msg .= "{$company} was founded by: " . PHP_EOL;
    foreach($people as $person) {
        $msg .= "   {$person}" . PHP_EOL;
    }
}
echo $msg;

//---------------------------part 4 - sort companies from largest to smallest ---------------------------------

arsort($companies);

print_r($companies) . PHP_EOL;

