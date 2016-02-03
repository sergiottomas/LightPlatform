<?php

namespace classes;

use \core\App as App;

abstract class BaseClass extends App{
  abstract public function setProperty($name, $value);
  abstract public function getProperty($name);
}

?>
