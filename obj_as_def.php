<?php
    class DefaultCoffeMaker{
        public function brew(){
            return "Making coffe\n";
        }
    }
    class FancyCoffeMaker{
        public function brew(){
            return "Crafting a tasty coffee\n";
        }
    }
    function makeCoffee($coffeeMaker=new DefaultCoffeMaker){
        return $coffeeMaker->brew();
    }
    echo makeCoffee();
    echo makeCoffee(new FancyCoffeMaker);


    function makeyoghurt($flavour,$container="bowl"){
        return "Making a $container of $flavour yoghurt.\n";
    }
    echo makeyoghurt("mango");

    function makeanother($container="bowl",$flavour="strawberry",$style="Nepali"){
        return "Making a $container of $flavour in $style";
    }
    echo makeanother();
    echo makeanother(style:"Greek");
    echo makeanother(flavour:"chocolate");
?>
