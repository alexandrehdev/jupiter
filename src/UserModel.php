<?php
namespace App\Jupiter;
use Saphira\Connectdb\Actions\DataActions;
use App\Jupiter\Service\Model;

class UserModel extends Model{


    private $connect;



    function __construct()
    {
        parent::__construct();

        $this->connect = $this->getDataActions();

    }

    public function registerUser(){

    }


    public function listUsers(){


    }


    public function updateUsers(){


    }


    public function deleteUsers(){
        

    }


}
