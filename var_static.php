<?php
    class Foo{
        static $variable='static property';
        static function Variable(){
            echo 'Method variable called';
            }
    }
echo Foo::$variable;
$variable="Variable";
Foo::$variable();
?>
