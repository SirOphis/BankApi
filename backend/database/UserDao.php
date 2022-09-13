<?php
namespace backend\database;
use backend\model\UserModel;
class UserDao extends Dao{
    private  $userModel;
    public function __construct($userModel){
        $this->userModel= $userModel;
    }
    
    public function create():bool{
        $connection = parent::connect();
        
        return false;
    }

}


?>