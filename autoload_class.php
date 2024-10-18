<?php
spl_autoload_register(function($class_name){
    include $class_name.'.php';
});

$obj=new MyClass1();
$obj2=new MyClass2();//attempting to load the classes fron files MyClass1.php and MyClass2.php resp.
?>
