<?php

$_SESSION['name'] = 'Tony';

$heading = "Dashboard";

view('index.view.php', [
    'heading' => $heading
]);
