<?php

$heading = 'New Note';

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query(
        "INSERT INTO notes (title, context, user_id) VALUES (:title, :context, :user_id)",
        [
            ':title' => $_POST['title'],
            ':context' => $_POST['context'],
            ':user_id' => 1
        ]
    );
}

require 'views/note-create.view.php';
