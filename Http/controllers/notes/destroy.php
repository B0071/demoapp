<?php

$heading = "My Note";

use Core\App;

$currentUser = 1;

$db = App::resolve('Core\Database');

// check whether note exists or not
$note = $db->query("select * from notes where id = :id", [
    ':id' => $_GET['id']
])->findOrFail();

// check current User with Note's user
authorize($note['user_id'] === $currentUser);

// Delete
$db->query("delete from notes where id = :id", [
    ':id' => $_POST['id']
]);

// Redirect to all Notes & exit.
redirect('/notes');
