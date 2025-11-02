<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$db = App::resolve(Database::class);

// validate inputs

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password. Password cannot be less than 7 characters.';
};

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

// check whether email exists or not. 
$user = $db->query("select * from users where email = :email", [
    ':email' => $email
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {

        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }
}

return view('session/create.view.php', [
    'errors' => [
        'password' => 'No account found for this email and password'
    ]
]);
