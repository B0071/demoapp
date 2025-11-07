<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    } else {
        $form->error('email', 'No account found for this email and password');
    }
}

Session::flash('old', [
    'email' => $email
]);

// $_SESSION['_flash']['errors'] = $form->errors();
Session::flash('errors', $form->errors());

return redirect('/login');
