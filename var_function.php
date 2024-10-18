<?php
function foo(){
    echo "In foo()<br/>\n";
}
function bar($arg=''){
    echo "In bar(); argument was '$arg'.<br/>\n";
}
function echoit($string){
    echo $string;
}

$func='foo';
$func();
$func='bar';
$func();
$func='echoit';
$func('test');
?>
