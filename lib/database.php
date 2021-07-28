<?php 

class Database {

    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct(){
        $this->host = constant('host');
        $this->dbname = constant('dbname');
        $this->username = constant('username');
        $this->password = constant('password');
    }
    function connect(){
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->username, $this->password, $options);
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }


}

?>