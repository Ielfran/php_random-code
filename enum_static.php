<?php
enum size{
case small;
case Medium;
case Large;

public static function fromLength(int $cm):static{
    return match(true){
        $cm<50=>static::small;
        $cm<100=>static::Medium;
        default=>static::Large,
        };
    }
}
?>
