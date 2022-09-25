<?php
use App\Jupiter\Http\UserController;
use Guide\Comphass\Path\Route;
use App\Jupiter\Painel\View;

/* Route::redirect("/",function(){ */
/*    View::get("greetings",["data" => "tchurusbango"]); */
/* }); */

Route::redirect("/",function(){
   View::get("greetings", ["test" => "awesome"]);
}); 
