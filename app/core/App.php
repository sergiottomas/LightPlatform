<?php

namespace core;

use \core\Database as Database;

class App extends Database{
  private $controller;

  function __construct(){
    //connect to db
    parent::__construct();

    //configure request to send a view
    if(!$this->controller){
      exit;
    }
  }

  public function prepareRequest(){
    if(isset($_GET) && empty($_GET)){
      $this->render("home");
    }else{
      //mount vars
      extract($_GET);

      $request = str_replace(DIRECTORY_SEPARATOR, "\\", $request);

      $tobject = new $request();
      $tobject->$method();
    }
  }

  public function render($view, $parameters = null){
    include ABS_PATH . "/views/{$view}.php";
  }
}

?>
