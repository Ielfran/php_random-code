<?php
echo 'This will not \n show a newline';
echo "\n";
$val=[<<<END
a
    b
        c
END,'D E F'];
var_dump($val);
?>
