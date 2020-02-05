<?php
/* 부모 namespace(greeting)안에 자식 namespace(en)을 소속시킴
namespace를 한번 호출하면 다음 namespace가 나오기 전까지 해당 namespace안에 들어간다고 간주됨
*/
namespace greeting\ko;
class Hi{ // 해당 Hi라는 class는 namespace ko에 들어간다
    function __construct(){
        echo '<h1>안녕</h1>';
    }
}

//new \greeting\en\Hi(); // namespace안에 class를 호출할 때는 \\표시를 사용한다.
//new \greeting\ko\Hi(); // \ko\Hi()는 ko이라는 namespace안에 들어가는 Hi()라는 클래스를 호출
/*
위에 처럼 부모 namespace안에 자식 namespace를 표현할 수 있지만
use라는 것을 사용하면 부모 namespace안에 자식 namespace가 무엇인지 사전에 정의가 가능하다
*/
?>