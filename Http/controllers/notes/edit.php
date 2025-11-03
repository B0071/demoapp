<?php

$heading = 'Edit Note';

use Core\App;

$currentUser = 1;

$db = App::resolve('Core\Database');

// check whether note exists. if not, abort. 
$note = $db->query("select * from notes where id = :id", [
    ':id' => $_GET['id']
])->findOrFail();

// check currentUser & noteUser. if not, abort. 
authorize($note['user_id'] === $currentUser);

view('notes/edit.view.php', [
    'heading' => $heading,
    'errors' => [],
    'note' => $note
]);
