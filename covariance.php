<?php
#covariance allows a childs method to return a more specific type than the type of its parents method. Contravariance allows a parameter type to be less specific in a child method
abstract class Animal{
    protected string $name;
    public function __construct(string $name){
        $this->name=$name;
    }
    abstract public function speak();
}

class Dog extends Animal{
    public function speak(){
        echo $this->name."barks";
        }
}
class Cat extends Animal{
    public function speak(){
        echo $this->name." meows";
    }
}

interface AnimalShelter{
    public function adopt(string $name):Animal;
    }
class CatShelter implements AnimalShelter{
    public function adopt(string $name):Cat{
        return new Cat($name);
    }
}
class DogShelter implements AnimalShelter{
    public function adopt(string $name):Dog{
        return new Dog($name);
    }
}
$kitty=(new CatShelter)->adopt("Ricky");
$kitty->speak();
echo "<br/>";

$doggy=(new DogShelter)->adopt("Ram");
$doggy->speak();
?>
