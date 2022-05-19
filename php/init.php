<?php
require_once 'functions.php';


// para hindi na lagi nag re-require kada file.
spl_autoload_register( function($class){
  require_once $_SERVER['DOCUMENT_ROOT']. '/php-oop/class/'. $class . '.php';
});


?>