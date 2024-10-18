<?php
class MyClass{
    const CONST_VALUE='A constant value';
}
$classname='MyClass';
echo $classname::CONST_VALUE;
echo MyClass::CONST_VALUE;

class OtherClass extends MyClass{
    public static $my_static='static var';
    public static function doublecoin(){
        echo parent::CONST_VALUE."\n";
        echo self::$my_static."\n";
    }
}

$classname='OtherClass';
$classname::doublecoin();
OtherClass::doublecoin();
?>
