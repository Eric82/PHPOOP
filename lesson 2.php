<?php

class Dog {

    public $firstName;
    public $lastName;
    public $breed;

    function __construct($firstName, $lastName, $breed) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->breed = $breed;
    }

    function getName() {
        return"{$this->firstName}" .
                "{$this->lastName}";
    }

}

$dog1 = new Dog("BooBoo", "Iwao", "EnglishBulldog");
print "Dog 1: {$dog1->getName()}";

class Car {

    public $firstName;
    public $year;
    public $price;

    function __construct($firstName, $year, $price) {
        $this->firstName = $firstName;
        $this->year = $year;
        $this->price = $price;
    }

    function getName() {
        return"{$this->firstName}" .
                "{$this->year}";
    }

}

$car1 = new Dog("Honda", "2005", "Civic");
print "Car 1: {$car1->getName()}";

class Animal {
    public $firstName;
    public $type;
    public $price;

    function __construct($firstName, $type, $price) {
        $this->firstName = $firstName;
        $this->type = $type;
        $this->price = $price;
    }

    function getName() {
        return"{$this->firstName}" .
                "{$this->type}";
    }

}

$animal1 = new Animal("Bear", "black bear", "0");
print "Animal 1: {$animal1->getName()}";

class Soda {
    public $firstName;
    public $type;
    public $price;

    function __construct($firstName, $type, $price) {
        $this->firstName = $firstName;
        $this->type = $type;
        $this->price = $price;
    }

    function getName() {
        return"{$this->firstName}" .
                "{$this->type}";
    }

}

$soda1 = new Soda("coca", "cola", "0");
print "Soda 1: {$soda1->getName()}";

?>