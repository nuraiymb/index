<?php
abstract class Dish {
    public string $name;
    public int $price;
    public string $ingredients;
    public function __construct(string $name, int $price, string $ingredients) {
        $this->name = $name;
        $this->price = $price;
        $this->ingredients = $ingredients;
    }
    abstract public function getInfo() : string;
    public function calculatePrice() : int {
        return $this->price;
    }
}
class Pizza extends Dish
{
    public function getInfo() : string {
        return "Итальяндық тамақ ол  $this->name!" . "Бағасы $this->price" . "Құрамы:$this->ingredients";
    }
}
class Sushi extends Dish
{
    public function getInfo() : string {
        return "Жапондық тамақ ол  $this->name!" . "Бағасы $this->price"  . "Құрамы:$this->ingredients";
    }
}

class Burger extends Dish
{
    public function getInfo() : string {
        return "Тез тамақ ол  $this->name!" . "Бағасы $this->price" . "Құрамы:$this->ingredients";
    }
}


$Pizza = new Pizza('Margarita',2000,"tomato");
$Sushi = new Sushi('Sakura',2500,"rice,fish");
$Burger = new Burger('Kombo chicken',2400,"tomato,bread");
echo $Pizza->getInfo() . "\n";
echo $Sushi->getInfo() . "\n";
echo $Burger->getInfo();