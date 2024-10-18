<?php
class Test{
    public static function getNew(){
        return new static();
    }
}
class Child extends Test{}

$obj1=new Test();
$obj2=new $obj1();
var_dump($obj1!==$obj2);

$obj3=Test::getNew();
var_dump($obj3 instanceof Test);

$obj4=Child::getNew();
var_dump($obj4 instanceof Child);

class Foo{
    public $bar;
    public function __construct(){
        $this->bar=function(){
            return 42;
        };
    }
}

$obj=new Foo();
echo ($obj->bar)(),PHP_EOL;
?>
