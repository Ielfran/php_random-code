<?php
interface Colorful{
    public function color():string;
}
enum Suit implements Colorful{
case Hearts;
case Diamonds;
case Clubs;
case Spades;

public function color():string{
    return match($this){
        Suit::Hearts,Suit::Diamonds=>'Red',
        Suit::Clubs,Suit::Spades=>'Black',
};
}
public function shape():string{
    return "Rectangle";
}
}
function paint(Colorful $c){

}

paint(Suit::Clubs);
print Suit::Diamonds=>shape();
?>
