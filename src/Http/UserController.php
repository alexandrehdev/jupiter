<?php
namespace App\Jupiter\Http;
use App\Jupiter\Http\Manager\Input;
use Saphira\Connectdb\Actions\DataActions;
use App\Jupiter\Http\Manager\Controller;

class UserController extends Controller{


    private $connect;

    
    function __construct()
    {
        
       $this->connect = new DataActions(__DIR__);

    }


    public function index()
    {
      $connect = $this->connect;
      $field = Input::get("user");
      $connect->setTable("User");
      $connect->setColumns("name");
      $connect->setValues($field);
      /* $connect->insertValues(); */
    }

}
