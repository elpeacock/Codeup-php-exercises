<?php

// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units

$data = $argv[1];

if (! isset($argv[1])) {
    echo 'Give me a filename!' . PHP_EOL;
    die;
}

function importSalesReport($filename)
{
    $handle = fopen($filename, 'r');

    $salesReport = fread($handle, filesize($filename));

    fclose($handle);

    $salesReport = explode(PHP_EOL, $salesReport);

    $monthlySales = [];

    $unitsSold = '';

    foreach ($salesReport as $key => $seller) {
        $seller = explode(', ', $seller);
        $person = [];
        $person['employee number'] = $seller[0];
        $person['first name'] = $seller[1];
        $person['last name'] = $seller[2];
        $person['units sold'] = $seller[3];
        array_push($monthlySales, $person);
        $unitsSold += $person['units sold'];
    }

    $numberOfEmployees = (count($monthlySales));
    $averageUnits = $unitsSold/$numberOfEmployees;
    $results = <<<PRINTME
=================================Monthly Sales Data===============================
    Total number of employees: {$numberOfEmployees}.
    Total units sold this month: {$unitsSold}.
    Average Units sold per employee: {$averageUnits}.
============================Monthly Employee Production===========================
PRINTME;
    
    foreach ($monthlySales as $person) {
        foreach ($person['units sold'] as $value) {
            var_dump($value);
        }
    }
    echo "$results" . PHP_EOL;

}
importSalesReport($data);