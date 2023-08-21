<?php
ob_start();

date_default_timezone_set("Asia/Dubai");


session_start();

define("WWW_ROOT","http://localhost/grampics/");


require_once "config.php";
require_once "functions.php";


spl_autoload_register(function ($className){
    require_once "classes/" .$className.".php";
});

$account=new Account();
$LoadFromUser=new User();