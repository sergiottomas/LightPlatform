<?php

namespace classes;

class User extends BaseClass{
  private $id, $name, $username, $password, $sessionId;

  public function setProperty($name, $value){ $this->$name = $value;}
  public function getProperty($name){return $this->$name;}

  public function form(){
    $this->render("user/form");
  }
}
?>
