<?php
declare(strict_types=1);



//namespaces with folder hierachy needs to replace the '\' with '/' and concatenat it with the classname .php
spl_autoload_register(function ($class){
        //echo __DIR__."/".str_replace('\\', '/', $class) .".php";
        require_once __DIR__."/".str_replace('\\', '/', $class) .".php";
});

header("Content-type: application/json; charset=UTF-8");
$user = new backend\model\UserModel("AD294981","BELFATMI Moussa",new \DateTime("11-12-2001",null),"moussa.belfatmi@hotmail.com","moussa123","this is the addresse of my home","RABAT",120020);
$bank = new backend\model\BankModel(00001,"Attijari Wafabank","ATTSWIFT","Morocco");

$userDao= new backend\database\UserDao($user);
$userDao->connect();

$account = new backend\model\AccountModel("AC91308392ND",$user,$bank,"US",4994.55);

echo \json_encode($account->toArray());



$parts = explode("/",$_SERVER["REQUEST_URI"]);

// if(strtolower($parts[1]) != "bank" || $parts[1] == null ){
//     http_response_code(404);
//     exit;
// }

// echo \json_encode($account->toArray());

// $id= $parts[2]??null;
//$acc = new Account(new User("adsad","asdsad","sdsadsad","pasdasda"),"ribbbb",4994.55);
//  

// use src\controller;
// use src\db;
// $database = new src\db\Database("localhost","db","root","");
// $database->getConnection();
// $controller = new src\controller\Product();
// $controller->processRequest($_SERVER["REQUEST_METHOD"],$id);
?>