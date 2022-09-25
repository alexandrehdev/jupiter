<?php
namespace App\Jupiter\Painel;
use App\Jupiter\Http\UserController;

class View{

    private $view;


    private $path = __DIR__ . "/../../resources/views/";

    

    public function contentView(string $content,mixed &$vars){
        $self = new Static;
        $self->path .= "{$content}.painel.php";
        $self->view = (file_exists($self->path)) ? file_get_contents($self->path) : null;
        $data = (isset($vars)) ? $vars : null;
        $keys = array_map(function($item){
           return "{{". $item ."}}";
        }, array_keys($data));

        return str_replace($keys,array_values($data),$self->view);
    }


    public static function get(string $view,array $values){
        $self = new Static;

        $class = $values[0];
        $method = $values[1];

        if(class_exists($class)){
            $object = new $class;
            $object->{$method}();
        }else{
            echo $self->contentView($view, $values);
        }

    }



    public static function exists(string $view) :bool{
        return (file_exists($view)) ? true : false;
    }

}

