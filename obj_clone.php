<?php
class SubObject{
    static $instances=0;
    public $instance;

    public function __construct(){
        $this->instance=++self::$instances;
    }
    public function __clone(){
        $this->instance=++self::$instances;
    }
}
class MyCloneable{
    public $obj1;
    public $obj2;
    function __clone(){
        $this->obj1=clone $this->obj1;
    }
}
$obj=new MyCloneable();
$obj->obj1=new SubObject();
$obj->obj2=new SubObject();
$obj2=clone $obj;

print"Original Object:\n";
print_r($obj);
print "Cloned Object:\n";
print_r($obj2);
?>
