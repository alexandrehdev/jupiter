<?php
namespace App\Jupiter\Painel;


class View{

    private $view;


    private $path = __DIR__ . "/../../resources/views/";



    public function contentView(string $content){
        $self = new Static();
        $self->path .= "{$content}.painel.php";
        $self->view = (file_exists($self->path)) ? file_get_contents($self->path) : null;

        return $self->view;
    }


    public static function get(string $view) :void{
        echo (new Static())->contentView($view);
    }



    public static function exists(string $view) :bool{
        return (file_exists($view)) ? true : false;
    }

}

