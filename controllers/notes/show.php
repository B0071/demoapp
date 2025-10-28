<?php

$heading = "My Note";
$currentUser = 1;

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$note = $db->query("select * from notes where id = :id", [
    ':id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUser);

view('notes/show.view.php', [
    'heading' => $heading,
    'note' => $note
]);
