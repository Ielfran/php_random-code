<?php
class Test{
    public readonly string $prop;
    public function __construct(string $prop){
        $this->prop=$prop;
    }
}
$test=new Test("foobar");
var_dump($test->prop);
$test->prop="fooder";
//cannot be modified
?>
