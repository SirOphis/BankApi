<?php
namespace backend\model;

class UserModel{
    public function __construct(private string $cin,
                                private string $full_name,
                                private \DateTime $birthdate,
                                private string $email,
                                private string $password,
                                private string $address,
                                private string $city,
                                private int $zip_code){}
    public function toArray():array{
        return array("cin"=>$this->cin,"full name"=>$this->full_name,"birthdate"=>$this->birthdate,"email"=>$this->email,"password"=>$this->password,"address"=>$this->address,"city"=>$this->city,"zip code"=>$this->zip_code);
    }

    public function getCin():string{
        return $this->cin;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function getFullName():string{
        return $this->full_name;
    }
    public function getBirthdate():\DateTime{
        return $this->birthdate;
    }
    public function getPassword():string{
        return $this->password;
    }
    public function getAddress():string{
        return $this->address;
    }
    public function getCity():string{
        return $this->city;
    }
    public function getZipcode():int{
        return $this->zip_code;
    }
    public function setCin(string $cin):void{
        $this->cin=$cin;
    }
    public function setEmail(string $email):void{
        $this->email=$email;
    }
    public function setPassword(string $password):void{
        $this->password=$password;
    }
    public function setFullName(string $full_name):void{
        $this->full_name=$full_name;
    }
    public function setAddress(string $address):void{
        $this->address=$address;
    }
    public function setCity(string $city):void{
        $this->city=$city;
    }
    public function setZipcode(int $zip_code):void{
        $this->zip_code=$zip_code;
    }
    public function setBirthdate(\DateTime $birthdate):void{
        $this->birthdate=$birthdate;
    }
}

?>