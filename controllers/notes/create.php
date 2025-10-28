<?php

$heading = 'New Note';

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (! Validator::string($_POST['title'], 1, 100)) {
        $errors['title'] = "Note's title should be up to 100 characters";
    }

    if (empty($errors)) {
        $db->query(
            "INSERT INTO notes (title, context, user_id) VALUES (:title, :context, :user_id)",
            [
                ':title' => $_POST['title'],
                ':context' => $_POST['context'],
                ':user_id' => 1
            ]
        );
    }
}

view('notes/create.view.php', [
    'heading' => $heading,
    'errors' => $errors
]);
