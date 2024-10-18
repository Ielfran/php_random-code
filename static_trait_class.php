<?php
trait StaticExample{
    public static function doSomething(){
        echo 'Doing somthng';
    }
}
class Example{
    use StaticExample;
}
Example::doSomething();

trait StaticExample{
    public static $static='foo';
}
class Example{
    use StaticExample;
    }
echo Example::$static;
?>
