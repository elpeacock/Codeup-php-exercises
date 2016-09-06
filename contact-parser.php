<?php

$data = $argv[1];

if (! isset($argv[1])) {
    echo 'Give me a filename!' . PHP_EOL;
    die;
}

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');

    $contacts = fread($handle, filesize($filename));

    fclose($handle);
    
    $contacts = explode(PHP_EOL, $contacts);

    array_pop($contacts);

    foreach ($contacts as $key => $contact) {
        $contact = explode('|', $contact);
        $contactArray = [];
        $contactArray ['name'] = $contact[0];
        $contactArray ['number'] = $contact[1];
        $contact = $contactArray;
        $value = substr_replace(($contact['number']), '-', 3, 0);
        $value2 = substr_replace($value, '-', 7, 0);
        $contact['number'] = $value2;
        array_push($contacts, $contact);
        
    }
    array_shift($contacts);
    array_shift($contacts);
    array_shift($contacts);

    // todo - read file and parse contacts

    return $contacts;

}

var_dump(parseContacts($data));
