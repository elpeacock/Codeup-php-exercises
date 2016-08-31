<?php

$books = [
    'The Hobbit' => [
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ],
    'Game of Thrones' => [
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ],
    'The Catcher in the Rye' => [
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ],
    'A Tale of Two Cities' => [
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ]
];

$message = "";

foreach ($books as $book => $bookInfo) {
    if ($bookInfo['published'] >= 1950){
        $message .= "{$book}:" . PHP_EOL;
        foreach($bookInfo as $key => $value){
            $message .= "   {$key}: {$value}" . PHP_EOL;
        }
    }
};

echo $message;