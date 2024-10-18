<?php
#enum traits will behave the same as on classes.traits used in an enum must not contain properties.
interface Colorful{
    public function color():string;
}
trait Rectangle{
    public function shape():string{
        return "Rectangle";
    }
}

enum Suit implements Colorful{
    use Rectangle;

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
}
?>
