<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once "Routes.php";


function __autoload($class_name) {
      //require_once './classes/'.$class_name.'.php';

      if (file_exists('./classes/'.$class_name.'.php'))
      {
      	require_once './classes/'.$class_name.'.php';
      }
      else if (file_exists('./Controllers/'.$class_name.'.php'))
      {
      	require_once './Controllers/'.$class_name.'.php';
      }
}



?>