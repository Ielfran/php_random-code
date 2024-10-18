<?php
function total_int($unit,DateInterval ...$intervals){
    $time=0;
    foreach($intervals as $interval){
        $time+=$interval->$unit;
    }
    return $time;
}
$a=new DateInterval('P1D');
$b=new DateInterval('P2D');
echo total_int('d',$a,$b).' days';

echo total_int('d',null);
?>
