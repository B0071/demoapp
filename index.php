<?php

require 'functions.php';

require 'Database.php';

// require 'router.php';

$config = require('config.php');

$db = new Database($config['database']);

// getting multiple posts with fetchAll() method.
$posts = $db->query("select * from posts")->fetchAll();

foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}

echo '<br>';

// getting SINLE post with fetch() method. 
$post1 = $db->query("select * from posts where id = 1")->fetch();

echo $post1['title'];
