<?php
class Myclass{
    function __construct(){
        print "In constructor\n";
    }
    function __destruct(){
        print "Destroying ".__CLASS__."\n";
    }
}
$obj=new Myclass();
?>
