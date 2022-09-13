<?php
namespace backend\model;

class BankModel{
    public function __construct(private int $bank_code,
                                private string $bank_name,
                                private string $siwft_code,
                                private string $country,
                                ){}
    public function toArray():array{
        return array("bank code"=>$this->bank_code,"bank name"=>$this->bank_name,"swift code"=>$this->siwft_code,"country"=>$this->country);
    }

    public function getBankCode():int{
        return $this->bank_code;
    }
    public function getBankName():string{
        return $this->bank_name;
    }
    public function getSwiftCode():string{
        return $this->siwft_code;
    }
    public function getBankCountry():string{
        return $this->country;
    }
    public function setBankCode(int $bank_code):void{
        $this->bank_code=$bank_code;
    }
    public function setBankName(string $bank_name):void{
        $this->bank_name=$bank_name;
    }
    public function setSwiftCode(string $siwft_code):void{
        $this->siwft_code=$siwft_code;
    }
    public function setCountry(string $country):void{
        $this->country=$country;
    }

}
?>