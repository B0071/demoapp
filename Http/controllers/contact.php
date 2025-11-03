<?php

$_SESSION['lastname'] = 'Stark';

$heading = "Contact Us";

view('contact.view.php', [
    'heading' => $heading
]);
