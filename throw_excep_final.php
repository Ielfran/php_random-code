<?php
function inverse($x){
    if(!$x){
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}
try{
    echo inverse(5),"\n";
}catch(Exception $e){
    echo 'Caught exception:',$e->getMessage(),"\n";
}finally{
    echo "First Finally.\n";
}

try{
    echo inverse(0),"\n";
}catch(Exception $e){
    echo 'Caught exception:',$e->getMessage(),"\n";
}finally{
    echo "Second Finally.\n";
}

echo "Hello World\n";
?>
