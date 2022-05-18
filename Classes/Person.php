<?php
class Person{
    public $name,$age,$gender,$birthYear,$proNoun,$possNoun;

    public function __construct($Name,$Age,$Gender)
    {
        $this->name = $Name;
        $this->age = $Age;
        $this->gender = $Gender;
        $this->proNoun = $Name === "male"?"He":"She";
        $this->possNoun = $Name ==="male"?"His":"Her";
        $this->birthYear = date("Y") - $this->age;
    }

//    public function proNoun(){
//        return $proNoun = $this->gender === "male"?"He" : "She";
//        return "$proNoun is $this->name";
//    }

//    public function birthYear(){
//        return date("y") - $this->age;
//    }

    public function intro(){
        return $this->proNoun." is ".$this->name." .And ".$this->age." Years old and born in ".$this->birthYear;
    }
}