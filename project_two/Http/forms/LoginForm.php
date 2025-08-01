<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    public $errors = [];
    public function validate($email, $password){

        if(!Validator::email($email)){
            $this->errors['email'] = 'Please provide a valid email address.';
        }

        if(!Validator::string($password, 1, 5)){
            $this->errors['password'] = 'Please provide a valid password';
        }

        return empty($this->errors);
    }

    public function errors(){
        $this->errors;
    }

    public function error($field, $message){
        $this->errors[$field] = $message;
    }
}