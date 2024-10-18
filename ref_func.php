<?php
function add_some(&$string){
    $string.="and something more";
}
function def_func($type="apple"){
    return "I like $type.\n";
}

$str="This is the string, ";
add_some($str);
echo def_func("mango");
echo def_func();
echo def_func(null);
echo $str;
?>
