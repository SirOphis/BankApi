<?php
namespace backend\model;
require_once ("UserModel.php");
require_once ("BankModel.php");
require_once ("CounterModel.php");
class AccountModel{
    public function __construct(private string $account_number,
                                private UserModel $owner,
                                private BankModel $bank,
                                private CounterModel $counter,
                                private string $currency,
                                private int $pin_code){}
    public function toArray():array{
        return array("Owner"=>$this->owner->toArray(),"Bank"=>$this->bank->toArray(),"currency"=>$this->currency,"pin code"=>$this->pin_code);
    }
    public function getAccountNumber():string{
        return $this->account_number;
    }
    public function setAccountNumber(string $account_number):void{
        $this->account_number=$account_number;
    }
    public function getOwner():UserModel{
        return $this->owner;
    }
    public function setOwner(UserModel $owner):void{
        $this->owner=$owner;
    }
    public function getBank():BankModel{
        return $this->bank;
    }
    public function setBank(BankModel $bank):void{
        $this->bank=$bank;
    }
    public function getCounter():CounterModel{
        return $this->counter;
    }
    public function setCounter(CounterModel $counter):void{
        $this->counter=$counter;
    }
    public function getCurrency():string{
        return $this->currency;
    }
    public function setCurrency(string $currency):void{
        $this->currency=$currency;
    }
    public function getPinCode():int{
        return $this->pin_code;
    }
    public function setPinCode(int $pin_code):void{
        $this->pin_code=$pin_code;
    }
}

?>