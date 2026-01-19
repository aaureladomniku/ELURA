<?php

 
 class DbConnection{


    private $conn;
    private $host='localhost';
    private $dbname='elura';
    private $port=3306;
    private $username='root';
    private $password='';

    public function __construct(){
        try{
            $dsn="mysql:host={$this->host};dbname={$this->dbname};port={$this->port};charset=utf8";
            $this->conn=new PDO(
                $dsn,$this->username,$this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        }
        catch(PDOException $e){
            die("Connection failed: {$e->getMessage()}");

        }
    }
    public function getConn(){
        return $this->conn;
    }
}


    

  
?>

