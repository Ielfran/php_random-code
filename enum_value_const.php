<?php
enum Direction implements ArrayAccess{
    case Up;
    case Down;

    public function offsetExists($offset):bool{
        return false;
    }
    public function offsetGet($offset):mixed{
        return null;
    }
    public function offsetSet($offset,$value):void{
        throw new Exception();
    }
    public function offsetUnset($offset):void{
        throw new Exception();
    }
}
class Foo{
    const DOWN=Direction::Down;
    const UP=Direction::Up['short'];//cannot use [] on enums
}
$x=Direction::Up['short'];
var_dump("\$x is ".var_export($x,true));

$foo=new Foo();
?>
