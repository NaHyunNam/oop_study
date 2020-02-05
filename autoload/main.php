<?php
// require_once 'greeting.php'; //한번만 해당 파일을 로딩한다.
require_once 'autoload.php';
/* 
Hi() 클래스의 정의가 없을 경우 spl_autoload_register 함수를 통해서 
함수가 실행될 때 전달 된 함수(autoloader)를 호출하도록 약속 됨
Hi() 클래스를 찾을 수 있을 경우 해당 함수는 실행되지 않음
*/
use \greeting\en\Hi as HiEn; // use로 \부모namespace\자식namespace\클래스명 으로 해 놓고 as를 통해 클래스 이름처럼 별칭을 만들어 사용 할 수 있달
use \greeting\ko\Hi as HiKo;
new HiEn();
new HiKo();
?>