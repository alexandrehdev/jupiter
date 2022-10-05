<?php
namespace App\Jupiter\Service;
use Saphira\Connectdb\Actions\DataActions;

class Model{

    private DataActions $database;


    function __construct(){
        $this->setDataActions(new DataActions(__DIR__));
    }


    public function getDataActions() :DataActions{
        return $this->database;
    }


    public function setDataActions(DataActions $dataActions){
        $this->database = $dataActions;
    }


}
