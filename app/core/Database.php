<?php

namespace core;

use \PDO as PDO;

class Database{
  public $host, $name, $user, $password, $charset, $debug;
  public $pdo, $last_id;

  public function __construct(
    $host = null,
    $name = null,
    $user = null,
    $password = null,
    $charset = null,
    $debug = null
  ){
    $this->host = DB_HOST;
    $this->name = DB_NAME;
    $this->user = DB_USER;
    $this->password = DB_PASS;
    $this->charset = DB_CHARSET;
    $this->debug = DEBUG;

    $this->connect();
  }

  final protected function connect(){
    $pdo_details = "mysql:host={$this->host};";
    $pdo_details .= "dbname={$this->name};";
    $pdo_details .= "charset={$this->charset};";

    try{
      $this->pdo = new PDO($pdo_details, $this->user, $this->password);

      if($this->debug === true){
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        unset($this->host);
        unset($this->name);
        unset($this->user);
        unset($this->password);
        unset($this->charset);
      }
    }catch(PDOException $ex){
      if($this->debug == true){
        echo "erro" .$ex->getMessage();
        die();
      }
    }
  }
}

?>
