<?php
#serialize checks if the class has a function with the magic name __serialize(). If so,that function is executed prior to any serialization.It must construct an array if key/value pairs that represent the serialized form of the object.
#unserialize() checks for the presence of a function with the magic name __unserialize(). If present, this function will be passed the restored array that  was returned from the __serialize(). It may then restore the properties of the object from that array.
//these override the sleep and wakeup
class Connection{
    protected $link;
    private $dsn,$username,$password;

    public function __construct($dsn,$username,$password){
        $this->dsn=$dsn;
        $his->username=$username;
        $this->password=$password;
        $this->connect;
    }
    private function connect(){
        $this->link=new PDO($this->dsn,$this->username,$this->password);
    }
    public function __serialize():array{
        return [
            'dsn'=>$this->dsn,
            'user'=>$this->username,
            'pass'=>$this->password,
        ];
    }
    public function __unserialize(array $data):void{
        $this->dsn=$data['dsn'];
        $this->username=$data['user'];
        $this->password=$data['pass'];
        $this->connect();
    }
}
?>
