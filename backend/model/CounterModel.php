<?php
namespace backend\model;
require_once ("BankModel.php");
    
class CounterModel{
    public function __construct(private BankModel $bank,
                                private string $address,
                                private int $zip_code,
                                private string $city){}
    
    public function getBank():BankModel{
        return $this->bank;
    }
    public function getAddress():string{
        return $this->address;
    }
    public function getZipcode():int{
        return $this->zip_code;
    }
}
?>