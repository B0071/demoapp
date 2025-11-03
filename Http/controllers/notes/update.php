<?php

use Core\App;
use Core\Validator;

$currentUser = 1;

// check whether note exists
$db = App::resolve('Core\Database');
$note = $db->query("select * from notes where id = :id", [
    'id' => $_POST['id']
])->findOrFail();

// authorize current user
authorize($note['user_id'] === $currentUser);

// Validation
$errors = [];

if (! Validator::string($_POST['title'], 1, 100)) {
    $errors['title'] = "Note's title should be up to 100 characters";
}

if (! empty($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit a Note',
        'note' => $note,
        'errors' => $errors
    ]);
}

// update the note
$db->query("update notes set title = :title, context = :context where id = :id", [
    ':title' => $_POST['title'],
    ':context' => $_POST['context'],
    ':id' => $_POST['id']
]);

// redirect to notes
redirect('/notes');
