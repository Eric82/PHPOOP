<?php

class Dog{
    public $firstName;
    public $lastName;
    public $breed;

    function __construct($firstName,$lastName,$breed){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->breed = $breed;
    }
    function getName(){
        return"{$this->firstName}" .
        "{$this->lastName}";   
    } 
}
    $dog1 = new Dog("BooBoo", "Iwao", "EnglishBulldog");
    print "Dog 1: {$dog1->getName()}";

?>