<?php
namespace App\Jupiter\Http\Manager;

class Request{
    
    /**
     * instance 
     *
     * @var object
     * @access private
     */
    private static $instance = null;

    private $response;

    private $value;


    function __construct(){
        $this->value = $_REQUEST; 
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }


    public static function response(){
        $self = self::getInstance();
        return $self->value;
    }


    public static function name(string $name){
        return $_REQUEST["{$name}"];
    }


    public static function url() :string{
        return $_SERVER["REQUEST_URI"];
    }


    public static function root() :string{
        return $_SERVER["DOCUMENT_ROOT"];
    }




}  
