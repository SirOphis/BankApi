<?php
    namespace backend\model;
    require_once ("UserModel.php");
    require_once ("BankModel.php");
    require_once ("CounterModel.php");

    class DebitAccountModel extends AccountModel{
        
        /*
            Debit account balance should never be less than 0
            also each year passed the total balance should be incremented by the interest
        */
        private float $interest;
        private float $balance;
        public function __construct(string $account_number,UserModel $owner,BankModel $bank,CounterModel $counter,string $currency,int $pin_code,float $interest,float $balance){
            if($balance>=0){
                parent::__construct($account_number,$owner,$bank,$counter,$currency,$pin_code);
                $this->balance=$balance;
                $this->intereset=$interest;
            }else{
                throw \Exception;
            }
           
        }
        public function getBalance():float{
            return $this->balance;
        }
        public function setBalance(float $balance):void{
            $this->balance=$balance;
        }
        public function getInterest():float{
            return $this->interest;
        }
        public function setInterest(float $interest):void{
            $this->interest= $interest;
        }
        public function toArray():array{
            $array = parent::toArray();
            array_push($array,array("interest"=>$this->interest,"balance"=>$this->balance));
            return $array;
        }
        public function increment():void{
            $this->balance = $this->balance *(1+$this->interest);
        }
    }
?>