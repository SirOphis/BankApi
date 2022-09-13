<?php
namespace backend\database;
abstract class  Dao{
    public const HOST = "ddev-BankApi-db";
    public const PORT= 3306;
    public const USER = "db";
    public const PASSWORD= "db";
    public const DATABASE="db";

    public function connect():\PDO|null{
        try{
            $dsn = "mysql:host=".self::HOST.";dbname=".self::DATABASE.";port=".self::PORT;
            return new \PDO($dsn,self::USER,self::PASSWORD);
        }catch(\PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
    abstract public function create():bool;
}
?>