<?php
$array=array(1,2,3,4,5);
print_r($array);

foreach($array as $i=>$value){
    unset($array[$i]);
}
print_r($array);

$array[]=6;
print_r($array);

$array=array_values($array);
$array[]=7;
print_r($array);
?>
