<?php
$food='cake';
$return_value=match($food){
    'apple'=>'This food is an apple',
    'bar'=>'This food is a bar',
    'cake'=>'This food is a cake',
};
var_dump($return_value);

$condition=5;
try{
    match($condition){
        1,2=>foo(),
        3,4=>bar(),
};
}catch(\UnhandledMatchError $e){
    var_dump($e);
}
?>
