<?php
spl_autoload_extensions(".php");
spl_autoload_register("AutoLoader");

function AutoLoader($className){
  $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);

  if(file_exists(__DIR__ . "/" . $file . ".php")){
    include_once(__DIR__ . "/" . $file . ".php");
  }else{
    ErrorException("Class or file not found");
  }
};

?>
