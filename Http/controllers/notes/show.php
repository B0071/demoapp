<?php

$heading = "My Note";

use Core\App;

$currentUser = 1;

$db = App::resolve('Core\Database');

$note = $db->query("select * from notes where id = :id", [
    ':id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUser);

view('notes/show.view.php', [
    'heading' => $heading,
    'note' => $note
]);
