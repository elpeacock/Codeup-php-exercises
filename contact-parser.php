<?php
// todo - read file and parse contacts

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
    
    // explode the text file on a new line to get an array of people
    $contacts = explode(PHP_EOL, $contacts);

    // take off the extra new line
    array_pop($contacts);

    // loop thru the array
    foreach ($contacts as $key => $contact) {
        // explode each contact on the pipe
        $contact = explode('|', $contact);
        // initialize an array to save each contact as a new array
        $contactArray = [];
        // reassign the numerical index to a named key
        $contactArray ['name'] = $contact[0];
        $contactArray ['number'] = $contact[1];
        // store the new formatted array as an individual contact 
        $contact = $contactArray;
        // format the phone number
        $value = substr_replace(($contact['number']), '-', 3, 0);
        $value2 = substr_replace($value, '-', 7, 0);
        // save the formatted phone number back to $contact[number]
        $contact['number'] = $value2;
        // push the new array we created for each contact back onto the original array of contacts
        array_push($contacts, $contact);
        
    }

    // remove the initial unformatted information from the array of contacts
    array_shift($contacts);
    array_shift($contacts);
    array_shift($contacts);


    return $contacts;

}

var_dump(parseContacts($data));
