<?php
class Shape{
    public int $numberOf;
    public string $name;

    public function setNumber(int $numberOf):void
    {
        $this->numberOf=$numberOf;
    }
    public function setName(string $name):void 
    {
        $this->name=$name;
    }
    public function getNumber():int 
    {
        return $this->numberOf;
    }
    public function getName():string
    {
        return $this->name;
    }
}

$triangle=new Shape();
$triangle->setName("triangle");
$triangle->setNumber(3);
var_dump($circle->getName());
var_dump($circle->getNumber());

$circle=new Shape();
?>
