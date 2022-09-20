<?php
    namespace backend\model;

    class CreditAccountModel extends AccontModel{

        /*
            credit account  balance can be -0 and every month the balance should be
            decremented by interest.
        */
        private float $interest;
        private float $balance;
        public function __construct(string $account_number,UserModel $owner,BankModel $bank,CounterModel $counter,string $currency,int $pin_code,float $interest,float $balance){
            parent::__construct($account_number,$owner,$bank,$counter,$currency,$pin_code);
            $this->balance=$balance;
            $this->intereset=$interest;      
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
        public function decrement():void{
            $this->balance = $this->balance *(1-$this->interest);
        }
    }
?>