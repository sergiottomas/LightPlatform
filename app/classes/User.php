<?php

namespace classes;

use \core\App as App;

class User{
  private $app;

  function __construct(){
    $this->app = $app;
  }

  public function form(){
    $parameter = array();
    $parameter[0] = "Sergio";
    $parameter[1] = "Carol";
    print_r($this);
  }
}
?>
