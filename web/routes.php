<?php

use Guide\Comphass\Path\Route;
use App\Jupiter\Painel\View;

Route::redirect("/",function(){
   View::get("greetings");
});
