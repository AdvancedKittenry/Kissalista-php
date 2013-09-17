<?php 

define('KISSALISTA_DIR', dirname(__FILE__));

function __autoload($class_name) {
    if (strpos($class_name, "kissalista") !== 0) return false;
    
    $path = strtolower($class_name);
    $path = str_replace("\\", "/", $path);
    $path = str_replace("kissalista/", "", $path);
    
    include $path.'.php';
}