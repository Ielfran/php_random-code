<?php
$source=['foo'=>1,'bar'=>2,'baz'=>3];
['baz'=>$three]=$source;
echo $three;

$source=['foo','sss','sffef'];
[2=>$baz]=$source;
echo $baz;         

$a=array(1=>'one',2=>'two',3=>'three');
unset($a[2]);
$b=array_values($a);
var_dump($b);
?>
