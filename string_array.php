<?php
    error_reporting(E_ALL);
$great='fantastic';
$arr=array('ssss','qqqq','foo'=>'great');
$aarr=array('ssss','qqqq','name'=>'great');
echo "This is {$great}";
echo "This is { $great}";
echo "This works:".$arr['foo'][3];
echo "This works:".$aarr['name'];
?>
