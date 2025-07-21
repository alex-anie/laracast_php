<?php

use Core\Database;
use Core\Validator;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if(!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address.';
}

if(!Validator::string($password, 7, 255)){
    $errors['password'] = 'Please provide a password of at lease 7 characters.';
}

if(! empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM `users` WHERE `email` = :email', [
    'email' => $email
])->find();

if($user){
    
    header('location: /');
    exit();
}else {
    $db->query('INSERT INTO `users`(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => $password
    ]);

    // mark that the user has logged in
    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();
}