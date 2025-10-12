<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Recommended books</h1>

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

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    };
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, "Andy Weir") as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>


</html>