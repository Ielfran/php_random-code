<?php
class BaseClass{
    function __construct(){
        echo  "in BaseClass constructor\n";
    }
}

class SubClass extends BaseClass{
    function __construct(){
        parent __construct();
        echo  "In subclass constructor\n";
    }
}

class OtherSubClass extends BaseClass{
}

$obj=new BaseClass();
$obj1=new SubClass();
$obj2=new OtherSubClass();
?>
