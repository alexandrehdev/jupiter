<?php
namespace App\Jupiter\Http\Manager;

class Auth{


    public function validatePassword(string $firstPwd, string $secondPwd) :bool{
        return ($firstPwd === $secondPwd) ? true : false;
    }


    public function validateEmail(string $email) :bool{
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }


    public function hashPassword(string $password) :string{
        return password_hash($password, PASSWORD_DEFAULT);
    }


    public function validateHashPwd(string $password, string $hash){
        return (password_verify($password, $hash) ? true : false);
    }
}
