<?php
spl_autoload_register(function ($classname){
    $classname = str_replace("\\", "/", "$classname").".php";
    require_once $classname;
});