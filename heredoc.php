<?php
    $str=<<EOD
    example of strings
    can be found here
    right now
EOD;

class foo{
    var $foo;
    var $bar;

    function __construct(){
        $this->foo='Foo';
        $this->bar=array('BAR1','bar2','bar3');
    }
}
$foo=new foo();
$name='Myname';

echo <<EOT
    My name is "$name". i am printing some $foo->$foo.
    Now I am printing some {$foo->bar[1]}.
    This shouls print a capital 'A':\x41
EOT;

?>
