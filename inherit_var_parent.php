<?php
$message='hello';
$example=function(){
    var_dump($message);
};
$example();
$example=function() use ($message){
    var_dump($message);
    };
$example();
$message='world';
$example();
$message='hello';
$example=function() use (&$message){
    var_dump($message);
};
$example();
$message='world';
$example();
$example=function ($arg) use ($message){
    var_dump($arg .' '.$message);
};
$example("hello");
$example=function() use ($message):string{
    return "hello $message";
};
var_dump($example());
?>
