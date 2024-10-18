<?php
$arr=array(1,2,3,4);
foreach($arr as &$value){
    $value=$value*2;
}
unset($value);
print_r($arr);

$a=array(
    "one"=>1,
    "two"=>2,
    "three"=>3,
    "seventeen"=>17
);
foreach($a as $k=>$v){
    echo "\$a[$k]=>$v.\n";
}

$b=array();
$b[0][0]="a";
$b[0][1]="b";
$b[1][0]="c";
$b[1][1]="d";
foreach($b as $v1){
    foreach($v1 as $v2){
        echo "$v2\n";
    }
}
?>
