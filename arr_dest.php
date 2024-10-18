<?php
$source_array=['goo','aaa','dfdf'];
[$gooa  ,$aaa,$dfdf]=$source_array;
[, ,$baz]=$source_array;
echo $baz;

echo $gooa;
echo $aaa;
echo $dfdf;

$source_array=[[1,'John'],[2,'jane'],];
foreach($source_array as [$id,$name]){
    echo "$id=$name";
}

?>
