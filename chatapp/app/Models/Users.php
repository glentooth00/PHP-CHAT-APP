<?php 
namespace app\Models;

require "../Database/Db.php";

use app\Database\Db\Dbconn;

class Users extends Dbconn{

    public $sql;
    public $connect;
    public $table;
    public $query;
    public $pdo;


    function connect(){

        $this->connection();

    }

    function saveData(){

      $this->sql = " INSERT INTO " . $this->table ." ( " ;
      $this->sql .= implode(",",array_keys($values)) . ') VALUES (';
      $this->sql .= "'" . implode("','", array_values($values)) . "')";
       
      return $this;

    }

    function query(){

        $this->query = $this->pdo->query($this->sql);

        return $this;

    }




}

$check = new Users();