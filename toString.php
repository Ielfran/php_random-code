<?php
#this method allows a class to decide how it will react when it is treated like a string.
class TestClass{
    public $foo;
    public function __construct($foo){
        $this->foo=$foo;
    }
    public function __toString(){
        return $this->foo;
    }

    $class=new TestClass('Hello');
    echo $class;
?>
