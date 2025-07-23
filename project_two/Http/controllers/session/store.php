<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

// var_dump("I have been POSTED");

$email = $_POST['email'];
$password = $_POST['password'];

$forms = new LoginForm();

if($forms->validate($email, $password)){
    if((new Authenticator)->attempt($email, $password)){
        redirect("/");
    }
    
    $forms->error('email', 'No matching account found for that email address and password');
}

Session::flash('errors', $forms->errors());

Session::flash('old', [
    'email' => $_POST['email']
])

redirect("/login");



