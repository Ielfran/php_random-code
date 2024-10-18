<?php
$arr=['zero','one','two','three','four','five','six'];
foreach($arr as $kay=>$value){
    if(1==($kay%2)){
        continue;
    }
    echo $value."<br/>";
}
?>
