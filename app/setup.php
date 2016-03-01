<?php

require "autoload.php";

$ini_config = parse_ini_file("config.ini", true);

//paths configs
define("ABS_PATH", dirname(__FILE__)); //root path
define("UP_PATH", ABS_PATH . $ini_config["app"]["upload_path"]);
define("HOM_PATH", ABS_PATH . $ini_config["app"]["home_uri"]);
define("DOC_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("ASSET_PATH", $_SERVER["REQUEST_URI"] . "app/views/_assets/");
//app configs
define("DEBUG", $ini_config["app"]["debug"]);

//db configs
define("DB_HOST", $ini_config["database"]["hostname"]);
define("DB_NAME", $ini_config["database"]["dbname"]);
define("DB_USER", $ini_config["database"]["dbuser"]);
define("DB_PASS", $ini_config["database"]["dbpass"]);
define("DB_CHARSET", $ini_config["database"]["charset"]);

require_once ABS_PATH . '/loader.php';

?>
