<?php

require 'functions.php';

require 'Database.php';

// require 'router.php';

$db = new Database();

// getting multiple posts with fetchAll() method.
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}

echo '<br>';

// getting SINLE post with fetch() method. 
$post1 = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);

echo $post1['title'];
