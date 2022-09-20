<?php
namespace backend\model;
require_once ("BankModel.php");
    
class CounterModel{
    public function __construct(private BankModel $bank,
                                private string $address,
                                private int $zip_code,
                                private string $city){}
    public function toArray():array{
        return array("bank"=>$this->bank,"address"=>$this->address,"zip code"=>$this->zip_code,"city"=>$this->city);
    }
    public function getBank():BankModel{
        return $this->bank;
    }
    public function getAddress():string{
        return $this->address;
    }
    public function getZipcode():int{
        return $this->zip_code;
    }
    public function getCity():string{
        return $this->city;
    }
    public function setBank(BankModel $bank):void{
        $this->bank=$bank;
    }
    public function setAddress(string $address):void{
        $this->address=$address;
    }public function setZipcode(string $zip_code):void{
        $this->zip_code=$zip_code;
    }public function setCity(string $city):void{
        $this->city=$city;
    }
}
?>