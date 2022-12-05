<?php 

namespace app\Database\Db;

require_once realpath("../../vendor/autoload.php");

use PDO;

class Dbconn{

    public $dns = "mysql:host=localhost;dbname=test";
    public $username = 'root';
    public $password = '';

    function __construct(){

        $this->connection = new PDO($this->dns,$this->username,$this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        if($this->connection){
            echo 'CONNECTION ESTABLISHED';
        }
    
    }

}

// $check = new Dbconn();