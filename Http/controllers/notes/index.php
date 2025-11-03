<?php

use Core\App;

$heading = "My Notes";

$db = App::resolve('Core\Database');

$notes = [];

$notes = $db->query("select * from notes where user_id = 1")->get();

view('notes/index.view.php', [
    'heading' => $heading,
    'notes' => $notes
]);
