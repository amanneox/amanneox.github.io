<?php
class Database
{

    private $host = "fdb15.awardspace.net";
    private $dsn='mysql:dbname=2438833_aman;host=fdb15.awardspace.net';
    private $db_name = "2438833_aman";
    private $username = "2438833_aman";
    private $password = "7u#311298";
    public $conn;


    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
