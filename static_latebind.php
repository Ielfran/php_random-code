<?php
class A{
    public static function who(){
        echo __CLASS__;
    }
    public static function test(){
        self::who();
    }
}
class B extends A{
    public static function who(){
        echo __CLASS__;
    }
}
B::test();

class C{
    public static function who(){
        echo __CLASS__;
    }
    public static function test(){
        static::who();
    }
}
class D extends C{
    public static function who(){
        echo __CLASS__;
    }
}
D::test();
?>
