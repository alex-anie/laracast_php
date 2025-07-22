<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$forms = new LoginForm();

if($forms->validate($email, $password)){
    if((new Authenticator)->attempt($email, $password)){
        redirect("/");
    }
    
    $forms->error('email', 'No matching account found for that email address and password');
}

return view('session/create.view.php',[
    'errors' => $forms->errors()
]);




