<?php

namespace App\Jupiter\Http\Manager;

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



    


}
