<?php

$books = [
    [
        "name" => "Do Androids dream of Electric Sheeps",
        "author" => "Philip K. Dick",
        "releaseYear" => 2025,
        "purchaseUrl" => "https://google.com"
    ],
    [
        "name" => "The Langoliers",
        "author" => "Andy Weir",
        "releaseYear" => 2021,
        "purchaseUrl" => "https://linkedin.com"
    ],
    [
        "name" => "The Martians",
        "author" => "Andy Weir",
        "releaseYear" => 2011,
        "purchaseUrl" => "https://linkedin.com"
    ]
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] < 2022;
});

require 'index.view.php';
