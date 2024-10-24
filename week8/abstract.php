<?php
abstract class Car {
    public string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
    abstract public function getInfo() : string;
}
 class Mercedes extends Car {
    public function getInfo() : string {
        return "Choose German quality! I`m an $this->name!";
    }
 }

class Volvo extends Car
{
    public function getInfo(): string
    {
        return "Choose SHVED quality! I`m an $this->name!";
    }
}

$mercedes = new Mercedes('mercedes benz');
$volvo = new Volvo ('Volvo x5');
 echo $mercedes->getInfo() . "\n";

 echo $volvo->getInfo() . "\n";