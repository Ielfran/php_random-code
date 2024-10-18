<?php
class foo{
    var $bar='i am bar';
    var $aaa='another';
}
$foo=new foo();
$bar='bar';
$baz=array('fii','aaa','vaa','quiis');
echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";

?>
