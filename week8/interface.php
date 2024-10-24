<?php
require 'abstDish.php';
interface Orderable
{
    public function addDish(Dish $dish);
    public function getTotalPrice();
    public function processPayment();
}

class Order implements Orderable {
    public array $dishes = [];
    public float $totalPrice = 0;

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }
    public function addDish(Dish $dish){
        $this->dishes[] =$dish;
        $this->totalPrice +=$dish->calculatePrice();
    }
    public function processPayment() {
        return $this->getTotalPrice();
    }
}

$order = new Order();
$order->addDish(new Pizza('Margarita', 2000, "tomato"));
$order->addDish(new Sushi('Sakura', 2500, "rice, fish"));
$order->addDish(new Burger('Kombo chicken', 2400, "tomato, bread"));

foreach ($order->dishes as $dish) {
    echo $dish->getInfo();
}

$total = $order->getTotalPrice();
echo "Жалпы сумма: $total\n";