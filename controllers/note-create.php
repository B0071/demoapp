<?php

$heading = 'New Note';

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    // title shouldn't be empty
    if (strlen($_POST['title']) === 0) {
        $errors['title'] = "Note's title cannot be empty";
    }

    if (strlen($_POST['title']) > 100) {
        $errors['title'] = "Note's title cannot be longer than 100 characters.";
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

require 'views/note-create.view.php';
