<?php
class A{
    private function foo(){
        echo "success";
    }
    public function test(){
        $this->foo();
        static::foo();
    }
}
class B extends A{
//foo() scope will still be A
}
class C extends A{
    private function foo(){
//original method is replaces new scope is C
    }
}
$b=new B();
$b->test();
$c=new C();
$c->test();
?>
