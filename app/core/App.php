<?php

namespace core;

class App{
  public static $db;

  public function __construct(){
    self::$db = new Database();
  }

  public function init(){
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
