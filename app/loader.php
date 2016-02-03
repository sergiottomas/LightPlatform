<?php
  if(!defined("ABS_PATH")) exit;

  session_start();

  if(!defined("DEBUG") || DEBUG == false){
    error_reporting(0);
    ini_set("display_error", 0);
  }else{
    error_reporting(E_ALL);
    ini_set("display_error", 1);
  }

  $app = new \core\App();
  $app->init(); //start app
?>
