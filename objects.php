<?php
class foo{
    function do_foo(){
        echo "Doing a task";
    }
}
$bar=new foo;
$bar->do_foo();

$obj=(object)array('1'=>'foo');
var_dump(isset($obj->{'1'}));
var_dump(key($obj));
$obj=(object)'ciao';
echo $obj->scalar;
?>
