<?php
namespace backend\model;
require_once ("UserModel.php");
require_once ("BankModel.php");
class AccountModel{
    public function __construct(private string $account_number,
                                private UserModel $owner,
                                private BankModel $bank,
                                private ?CounterModel $counter,
                                private string $currency,
                                private float $balance){}
    public function toArray():array{
        return array("Owner"=>$this->owner->toArray(),"Bank"=>$this->bank->toArray(),"currency"=>$this->currency,"balance"=>$this->balance);
    }
    public function getOwner():UserModel{
        return $this->owner;
    }
}

?>