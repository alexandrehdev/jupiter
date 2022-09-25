<?php
namespace App\Jupiter\Http;
use App\Jupiter\Painel\View;
use App\Jupiter\Http\Manager\Controller;
use Saphira\Connectdb\Common\Enviroment;

class UserController extends Controller{


    function __construct(){

        Enviroment::load(__DIR__);

    }

    public function index(){
        echo "tchurusbango";
    }

}
