<?php
trait A{
    public function smallTalk(){
        echo 'a';
    }
    public function bigTalk(){
        echo 'A';
    }
}
trait B{
    public function smallTalk(){
        echo 'b';
    }
    public function bigTalk(){
        echo 'B';
    }
}

class Talker{
    use A,B{
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}
class Aliased_Talker{
    use A,B{
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        b::bigTalk as talk;
    }
}
$oo=new Talker();
$oo->smallTalk();
$oo->bigTalk();
$tt=new Aliased_Talker();
$tt->talk();
$tt->smallTalk();


?>
