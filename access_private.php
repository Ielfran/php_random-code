<?php
class Test{
    private $foo;
    public function __construct($foo){
        $this->foo=$foo;
    }

    private function bar(){
        echo 'Accessed the private method.';
    }
    public function baz(Test $other){
        $other->foo='hello';
        var_dump($other->foo);
        $other->bar();
    }
}
$test=new Test('test');
$test->baz(new Test('other'));
?>
