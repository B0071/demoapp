<?php

$heading = 'New Note';

use Core\App;
use Core\Validator;

$db = App::resolve('Core\Database');

$errors = [];

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

    header('location: /notes');
    exit();
}
