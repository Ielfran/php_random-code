<?php
#serialize() checks if the calss has a function with the magic name __sleep(). If so,that function is exwecuted prior to any serialization 
#__sleep() is to commit pending data or perforn similar cleanup tasks.
#unserealize checks for the presence of a function with the magic name __eakeup()
#__wakeup() is to reestablish any database connections that may have been lost during serialization aand perform other reinitialization tasks.
class Connection{
    protected $link;
    private $dsn,$username,$password;

    public function __construct($dsn,$username,$password){
        $this->dsn=$dsn;
        $this->username=$username;
        $this->password=$password;
        $this->connect();
    }
    private function connect(){
        $this->link=new PDO($this->dsn,$this->username,$this->password);
    }

    public function __sleep(){
        return array('dsn','username','password');
    }
    public function __wakeup(){
        $this->connect();
    }
?>
