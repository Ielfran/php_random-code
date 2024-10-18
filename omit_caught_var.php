<?php
class SpecificException extends Exception{}

function test(){
    throw new SpecificException('Oopsie');
}
try{
    test();
}catch(SpecificException){
    print "A SpecificException was thrown but who cares of the details.";
}
?>
