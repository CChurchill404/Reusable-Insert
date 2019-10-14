<?php
class dbConn($host, $dbuser, $dbpass, $dbname){
    private $conn;
    private $host;
    private $dbuser;
    private $dbpass;
    private $dbname;
    public function __construct(){
        $this->conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }
}

?>
