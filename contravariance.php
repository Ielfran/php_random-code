<?php
class Food{}
class AnimalFood extends Food{}
abstract class Animal{
    protected string $name;
    public function __construct(string $name){
        $this->name=$name;
    }
    public function eat(AnimalFood $food){
        echo $this->name." eats ".get_class($food);
    }
}
class Dog extends Animal{
    public function eat(Food $food){
        echo $this->name." eats ".get_class($food);
    }
}
$kitty=(new CatShelter)->adopt("Ricky");
$carFood=new AnimalFood();
$kitty->eat($catFood);
echo "<br/>";

$doggy=(new DogShelter)->adopt("maverick");
$banana=new Food();
$doggy->eat($banana);
?>
