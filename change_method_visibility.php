<?php
trait HelloWorld{
    public function sayHello(){
        echo 'Hello World';
    }
}
class MyClass1{
    use HelloWorld{sayHello as protected;}
}
class MyClass2{
    use HelloWorld{sayHello as private myPrivateHello;}
}

?>
