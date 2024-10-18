<?php
class Foo{
    public function getPrivate(){
        return [$this,'privateMethod'];
    }
    private function privateMethod(){
        echo __METHOD__,"\n";
    }
}
$foo=new Foo;
$privateMethod=$foo->getPrivateMethod();
$privateMethod();

class Foo1{
    public function getPrivate(){
        return $this->privateMethod(...);
    }
    private function privateMethod(){
        echo __METHOD__,"\n";
    }
}
$foo1=new Foo1;
$privateMethod=$foo1->getPrivate();
$privateMethod();
?>
