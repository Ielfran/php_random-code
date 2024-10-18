<?php
$y=1;

$fn1=fn($x)=>$x+$y;
$fn2=function($x) use ($y){
    return $x+$y;
};
var_export($fn1(3));
var_export($fn2(6));

#nested arrow function;
$fn3=fn($a)=>fn($b)=>$a*$y+$b;
var_export($fn3(5)(2));
?>
