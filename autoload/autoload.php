<?php
spl_autoload_register(function($path){
    $path = str_replace('\\','/', $path); // str_replace(바꾸고 싶은 문자, 바꿔질 문자, 바꿀 변수) 
    $path = $path.'.php';
    print("path : {$path}");
    require_once $path;
});
?>