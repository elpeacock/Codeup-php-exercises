<?php
//alphabet soup - create a function that takes in a string and returns each letter of the string in alphabetical order
//seperate and alphabetize each word individually
//i.e. hello world = ehllo dlorw

function alphabetSoup($string) 
{
    //ignore letter casing (if you don't do this, cap letters will all be listed first)
    $lowercaseString = strtolower($string);
    //split string into array by word - can't str_split, this ignores the spaces! what else?? 
    //str_word_count will work but will split on special chars/nums (so don't put sp chars/nums in yo string foo!)
    //str_word_count can take in a format param - defaults to 0 which returns an int(no. of words)
        //want an array? use 1 (returns array) or 2 (returns assoc. array)
    $stringToarray = str_word_count($lowercaseString, 1);
    // var_dump($stringToarray);
    //declare $returnString so that it is in scope to return/echo/etcetc - cuz I forget to do this ALOT
    $returnString = '';
    //loop thru array
    foreach ($stringToarray as $word) {
        // var_dump($word);
        //get each word split into letters
        $eachWord = str_split($word);
        // var_dump($eachWord);
        //sort letters in each word - no need to maintain keys
        sort($eachWord);
        // var_dump($eachWord);
        //turn sorted letters back into string (implode)
        $alphabetizedWord = implode('', $eachWord);
        // var_dump($alphabetizedWord);
        //concat $alphabetizedWord to $returnString
        $returnString .= $alphabetizedWord . ' ';
        // print_r($returnString);
    }
    //return $returnString
    echo $returnString . PHP_EOL;
}

alphabetSoup('hello world');
alphabetSoup('liZ pEacOcK');
alphabetSoup('supercalifragilisticexpialidocious even though the sound of it is something quite atrocious');
alphabetSoup('Science Bitch');