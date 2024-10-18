<?php
    function sum(...$numbers){
        $acc=0;
        foreach($numbers as $n){
            $acc+=$n;
        }
        return $acc;
    }
echo sum(1,2,3,4);

function add($a,$b){
    return $a+$b;
}
echo add(...[1,3])."\n";

$a=[1,2];
echo add(...$a);
?>
