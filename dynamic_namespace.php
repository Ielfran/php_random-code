<?php
namespace namespacename;
class classname{
    function __construct(){
        echo __METHOD__ ,"\n";
    }
}
function funcname(){
    echo __FUNCTION__,"\n";
}
const constname="globalspaced";

$a='\namespacename\classname';
$obj=new $a;
$a='\namespacename\classname';
$obj=new $a;
$b='namespacename\funcname';
$b();
echo constant('\namespacename\constname'),"\n";
?>
