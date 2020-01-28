<?php
// require_once 'greeting.php'; //한번만 해당 파일을 로딩한다.
function autoloader($path){
    $path = $path.'.php';
    var_dump("path : {$path}");
    require_once $path;
}
spl_autoload_register('autoloader');
/* 
Hi() 클래스의 정의가 없을 경우 spl_autoload_register 함수를 통해서 
함수가 실행될 때 전달 된 함수(autoloader)를 호출하도록 약속 됨
Hi() 클래스를 찾을 수 있을 경우 해당 함수는 실행되지 않음
*/
new Hi();
new Bye();
?>