<?php

$filename = 'contacts.txt';
$runApp = true;

// write a function that opens and reads a file
function openFile($string) {
    
    $handle = fopen($string, 'r');
    // save contents of file to a variable
    $contentsOfFile = fread($handle, filesize($string));
    // close the filewriter
    fclose($handle);
    clearstatcache();
    return $contentsOfFile;
}


// write a function that converts a string to an array
function stringToArray($string) {
    clearstatcache();
    $contactsArray = explode("\n", trim(openFile($string)));
    // explode out each person
    foreach($contactsArray as $key => $person) {
        $tempArray = explode('|', $person);
        $contacts[$key]['name'] = $tempArray[0];
        $contacts[$key]['number'] = formatPhoneNumber($tempArray[1]);
    }
    return $contacts;

}

function formatPhoneNumber($string) {
        // format phone number
        $phone = substr($string, 0, 3) . '-' . substr($string, 3, 3) . '-' . substr($string, 6);
        return $phone;
}

function showAllContacts($string) {
    // format the contacts info
    clearstatcache();
    echo "Name  | Phone Number  |" . PHP_EOL;
    echo "===========================" . PHP_EOL;
    foreach (stringToArray($string) as $key => $contact) {
        $maxLengthName = max(array_map('strlen', $contact[$key]['name']));

        echo "{$contact['name']} | {$contact['number']} |" . PHP_EOL;
    }
    // break;
}
    

// write a function that adds a new contact
function addNewContact($string) {
    // prompt for new contact info
    fwrite(STDOUT, "Enter the new contact's name: ");
    $contactName = trim(fgets(STDIN));
    fwrite(STDOUT, "Enter {$contactName}'s phone number (format: 5555555555): ");
    $contactPhone = trim(fgets(STDIN));
    // concat name + number
    $newContact = "{$contactName}|{$contactPhone}";
    fwrite(STDOUT, "You entered: {$newContact}. Is this information correct? (y / n) ");
    $correct = trim(strtolower(fgets(STDIN)));
    // if entered info is correct save and show updated contact list
    if ($correct === 'y') {
        // append new contact to file
        $handle = fopen($string, 'a');
        fwrite($handle, PHP_EOL . $newContact);
        fclose($handle);
        // output updated contact list
        fwrite(STDOUT, "Your contact has been added, here is your updated contact list: " . PHP_EOL);
        showAllContacts($string);
    // if info not correct re-call this function
    } elseif ($correct === 'n') {
        addNewContact($string);
    } else {
        echo "Invalid response." . PHP_EOL;
        // break;
    }

}


//search for a contact
function contactSearch($string) {
    // prompt for name to search
    fwrite(STDOUT, "Which contact would you like to find? (enter name) ");
    // save user input to variable
    $contactToFind = trim(fgets(STDIN));
    //intialize variable to save the result of contact search
    $foundContact = [];
    // search for user input in contacts array
    foreach (stringToArray($string) as $key => $contact) {
        $found = stripos($contact['name'], $contactToFind);
        if ($found !== false) {
            array_push($foundContact, $contact);
        }
    }
    // if contact not found - return to main menu
    if (empty($foundContact)) {
        echo "Could not find {$contactToFind}" . PHP_EOL;
        // return to main menu
        applicationMenu($string);
    // if contact found return contact info
    } else {
        foreach ($foundContact as $key => $contact) {
            echo $contact['name'] . " | " . $contact['number'] . PHP_EOL;
            return $contact;
        }
        // break;
    }

}

// converts a given array to a string
function arrayToString($array) {
    $contactsArray = [];
    foreach ($array as $key => $contact) {
        //remove dashes from phone
        $contact['number'] = str_replace("-", "", $contact['number']);
        // implode contact to a string with name and number sepearated by |
        $contact = implode("|", $contact);
        // push string contact to array
        array_push($contactsArray, $contact);
    }
    //implode contacts array on a new line and save to a string
    $contactsString = implode("\n", $contactsArray);
    return $contactsString;
    
}
// delete an existing contact
function deleteContact($string) {
    // call contact search to search contact list
    $contactToDelete = contactSearch($string);

    // ask user to confirm delete
    fwrite(STDOUT, "Are you sure you want to delete this contact? (y / n) ");
    $response = trim(strtolower(fgets(STDIN)));
    // if user confirms, delete contact
    if ($response === 'y') {
        // get the array of contacts
        $contactsArray = stringToArray($string);
        // find index of contact to delete in array
        $deleteIndex = array_search($contactToDelete, $contactsArray);
        // remove contact at index found
        unset($contactsArray[$deleteIndex]);
        // convert array to a string after contact has been removed
        $contactsString = arrayToString($contactsArray);
        // write updated contacts list to contacts.txt
        $handle = fopen($string, 'w');
        fwrite($handle, $contactsString);
        fclose($handle);
        // output updated contact list
        fwrite(STDOUT, "Contact has been deleted, here is your updated contact list: " . PHP_EOL);
        showAllContacts($string);

    } elseif ($response === 'n') {
        // if user says don't delete, don't delete contact and prompt to continue
        fwrite(STDOUT, "Contact has NOT been deleted." . PHP_EOL);
        deleteContact($string);
        // break;

    } else {
        echo "Invalid response" . PHP_EOL;
        deleteContact($string);
        // break;
    }

}

// function to run application
function applicationMenu($string, $boolean) {
    // prompt user for input
    fwrite(STDOUT, "Enter the number of the option you would like" . PHP_EOL . "1. Show all contacts" .  PHP_EOL . "2. Add a contact" . PHP_EOL . "3. Search for a contact" . PHP_EOL . "4. Delete a contact" . PHP_EOL . "5. Exit" . PHP_EOL);
    // save user input
    $option = trim(fgets(STDIN));
    // if user input is not a number restart
    if (is_numeric($option) === false) {
        echo "{$option} is not numeric. Please enter a numeric value" . PHP_EOL;
        applicationMenu($string);
    // if user input is not between 1-5, restart
    } elseif (($option > 5) || ($option < 1)) {
        echo "{$option} is not a valid option. Please enter an option between 1 and 5" . PHP_EOL;
        applicationMenu($string);
    } else {
        switch ($option) {
            case 1:
                echo "Here is your contact list: " . PHP_EOL;
                showAllContacts($string);
                $boolean = promptToContinue($boolean);
                break;
            case 2:
                addNewContact($string);
                $boolean = promptToContinue($boolean);
                break;
            case 3:
                contactSearch($string);
                $boolean = promptToContinue($boolean);
                break;
            case 4:
                deleteContact($string);
                $boolean = promptToContinue($boolean);
                break;
            case 5:
                $boolean = false;
                break;

        }
        return $boolean;
    }

}

function promptToContinue($boolean) {
    fwrite(STDOUT, "Would you like to continue? (y / n)" . PHP_EOL);
    $response = strtolower(trim(fgets(STDIN)));
    if ($response == 'y') {
        $boolean = true;
    } elseif ($response == 'n') {
        $boolean = false;
    } else {
        echo "Invalid response. Please enter y / n" . PHP_EOL;
        promptToContinue($boolean);
    }
    return $boolean;
}








do {
    $runApp = applicationMenu($filename, $runApp);
    if ($runApp === false) {
        echo "Goodbye" . PHP_EOL;
    }
    
} while ($runApp === true);

// applicationMenu($filename);
// deleteContact($filename);
// contactSearch($filename);
// showAllContacts($fileContents);
// addNewContact($filename);
