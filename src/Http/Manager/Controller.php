<?php

namespace App\Fireball\Http\Manager;
use App\Fireball\Model;

class Controller{

    private $request;


    private $input;


    public function __construct(){
        $this->request = $_REQUEST;
    }
    

    public function input(string $name) :string{
        $this->input = $this->request["{$name}"];
        return $this->input;
    }    


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
