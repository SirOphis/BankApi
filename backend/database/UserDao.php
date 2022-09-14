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
        $statement = $connection->prepare("insert into user values (?,?,?,?,?,?,?)");
        $statement->bindParam(1,$this->userModel->getCin(),PDO::PARAM_STR);
        $statement->bindParam(2,$this->userModel->getEmail(),PDO::PARAM_STR);
        $statement->bindParam(3,$this->userModel->getFullName(),PDO::PARAM_STR);
        $statement->bindParam(1,$this->userModel->getPassword(),PDO::PARAM_STR);



        return false;
    }

}


?>