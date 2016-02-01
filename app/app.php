<?php
$ini_config = parse_ini_file("config.ini", true);

//paths configs
define("ABS_PATH", dirname(__FILE__)); //root path
define("UP_PATH", ABS_PATH . $ini_config["app"]["upload_path"]);
define("HOM_PATH", ABS_PATH . $ini_config["app"]["home_uri"]);
define("DOC_PATH", $_SERVER["DOCUMENT_ROOT"]);

//db configs
define("DBHOST", $ini_config["database"]["hostname"]);
define("DBNAME", $ini_config["database"]["dbname"]);
define("DBUSER", $ini_config["database"]["dbuser"]);
define("DBPASS", $ini_config["database"]["dbpass"]);

require "autoload.php";

?>
