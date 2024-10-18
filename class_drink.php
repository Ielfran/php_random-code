<?php
error_reporting(E_ALL);

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}
$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';
echo "I'd like an {${beers::softdrink}}\n";
echo "I'd like an {${beers::$ale}}\n";

$str='This is a test';
$first=$str[0];
$third=$str[3];
echo "The first is {$first} and the third is {$third}";
$str[strlen($str)-1]='e';
echo "$str";
?>

