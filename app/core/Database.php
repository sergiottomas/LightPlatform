<?php

namespace core;

use \PDO as PDO;

class Database{
  private $host, $name, $user, $password, $charset, $debug;
  public $pdo, $last_id;

  public function __construct(
    $host = null,
    $name = null,
    $user = null,
    $password = null,
    $charset = null,
    $debug = null
  ){
    $this->host = defined("DB_HOST") ? DB_HOST : $host;
    $this->name = defined("DB_NAME") ? DB_NAME : $name;
    $this->user = defined("DB_USER") ? DB_USER : $user;
    $this->password = defined("DB_PASS") ? DB_PASS : $password;
    $this->charset = defined("DB_CHARSET") ? DB_CHARSET : $charset;
    $this->debug = defined("DEBUG") ? DEBUG : $debug;

    self::connect();
  }

  final protected function connect(){
    $this->last_id = "2";
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
