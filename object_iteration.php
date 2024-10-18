<?php
class MyClass{
    public $var1='Value 1';
    public $var2='Value 2';
    public $var3='Value 3';

    protected $protected='protected var';
    private $private='private var';

    function iterateVisible(){
        echo "MyClass::iterateVisible:\n";
        foreach($this as $key=>$value){
            print "$key=>$value\n";
        }
    }
}
$class=new MyClass();
foreach($class as $key=>$value){
    print "$key=>$value\n";
}
$class->iterateVisible();
?>
