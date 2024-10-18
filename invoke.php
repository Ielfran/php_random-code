<?php
#invoke tries to call an object as a function.
class CallableClass{
    public function __invoke($x){
        var_dump($x);
    }
}
$obj=new CallableClass;
$obj(5.33);
var_dump(is_callable($obj));

//-------------------------------------------------------------

class Sort{
    private $key;
    public function __construct(string $key){
        $this->key=$key;
    }
    public function __invoke(array $a,array $b):int{
        return $a[$this->key]<=>$b[$this->key];
    }

    $customers=[
        ['id'=>1,'first_name'=>'John','last_name'=>'Do'],
        ['id' => 3, 'first_name' => 'Alice', 'last_name' => 'Gustav'],
        ['id' => 2, 'first_name' => 'Bob', 'last_name' => 'Filipe']
    ];
    usort($customers,new Sort('first_name'));
    print_r($customers);
    usort($customers,new Sort('last_name'));
    print_r($customers);
?>
