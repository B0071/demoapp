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
            "purchaseUrl" => "https://google.com"
        ],
        [
            "name" => "The Langoliers",
            "author" => "James Bond",
            "purchaseUrl" => "https://linkedin.com"
        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>


</html>