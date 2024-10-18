<?php
class Test{
    public function testing(){
        return function(){
            var_dump($this);
        };
    }
}
$object=new Test;
$function=$object->testing();
$function();

class Foo{
    function __construct(){
        $func=static function(){
            var_dump($this);
        };
        $func();
    }
};
new Foo();
?>
