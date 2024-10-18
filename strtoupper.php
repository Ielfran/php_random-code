<?php
$colors=array('red','green','blue');
foreach($colors as &$color){
    $color=mb_strtoupper($color);
}
unset($color);
print_r($colors);
?>
