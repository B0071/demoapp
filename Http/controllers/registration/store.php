<?php

use Core\Validator;
use Core\App;
use Core\Authenticator;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

$db = App::resolve(Database::class);

// Validate inputs

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email!';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Password must be at least 7 characters!';
}

// If not valid, redirect to register
if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);

    redirect('/register');
};

// check whether user exists.
$user = $db->query("select * from users where email = :email", [
    ':email' => $email
])->find();

// if exists, redirect to login. 
if (!empty($user)) {
    $errors['email'] = "User with this email address already exists. Please log in";
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);

    exit();
} else {
    // if not, create new user, login-in the user, redirect to home. 
    $db->query("INSERT into users (email, password) VALUES (:email, :password)", [
        ':email' => $email,
        ':password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    // $lastUserID = $db->giveLastInsertedId();

    // $_SESSION['user'] = [
    //     'currentUser' => $lastUserID
    // ];

    (new Authenticator)->login([
        'email' => $email
    ]);

    redirect('/');
}
