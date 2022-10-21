<?php
namespace App\Jupiter\Http\Manager;
use App\Jupiter\Http\Manager\Request;

class Input{
    
    private $request;


    private static $instance = null;


    function __construct()
    {

    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }


    public static function get(string $name) :string
    {
        return Request::name($name);
    }

    

    public static function has(string $name) :bool
    {
        return (Request::name($name)) ? true : false;
    }

    

    public static function all() :array
    {
        return Request::response();
    }


    public static function only(string ...$inputs) :array
    {
        $valInput = [];

        foreach($inputs as $input){
            array_push($valInput, Request::name($input));
        }

        return $valInput;
    }


    public static function except(string ...$inputs){
       /* retorna todos except atual param */
    }
    
}
