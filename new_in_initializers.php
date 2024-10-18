<?php
static $x=new Foo;
const C=new Foo;

function test($param=new Foo){}
#[AnAttribute(new Foo)]
class Test{
    public function __construct(
        public $prop=new Foo;
        ){}
}
function test(
    $a=new(CLASS_NAME_CONSTRAINT)(),
    $b=new class{},
    $c=new A(...[]),
    $d=new B($abc),
){}
?>
