<?php
namespace App\Jupiter\Painel;
use App\Jupiter\Http\UserController;

class View{

    private $view;


    private static $instance = null;


    private $path;


    function __construct(){

        $this->path = __DIR__ . "/../../resources/views/"; 

    }


    public function getInstance(){
        if(self::$instance == null){
            self::$instance = new self;
        }

        return self::$instance;
    }

    
    public static function exists(string $view) :bool{
        return (file_exists($view)) ? true : false;
    }

}

