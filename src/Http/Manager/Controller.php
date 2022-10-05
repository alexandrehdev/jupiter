<?php
namespace App\Jupiter\Http\Manager;
use Saphira\Connectdb\Actions\DataActions;

class Controller{


    private Input $input;


    function __construct(){
        

    }


    public function callUrl(string $route){
        return header("Location: {$route}");
    }



    public function isValidEmail(string $email) :bool{
       return (!filter_var($email, FILTER_VALIDATE_EMAIL)) ? false : true; 
    }


}
