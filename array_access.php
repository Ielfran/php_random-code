<?php
$array=array(
    "foo"=>"bar",
    42=>24,
    "multi"=>array(
        "dimensional"=>array(
            "array"=>"foo"
        )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

#array dereferencing

function getArray(){
    return array(1,2,3);
}
$second=getArray()[1];
echo "$second";

$arr=array(5=>1,12=>3);
$arr[]=43;
$arr["x"]=44;
unset($arr[5]);
unset($arr);
?>
