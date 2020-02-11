
<?php
class ParentClass{ // function에서 final을 줄 수도 있지만 class에다 final을 주어 해당 클래스의 상속을 금지할 수 있다.
    function a(){
        echo 'Parent';
    }
    final function b(){
        echo 'Parent B';
    } // final을 통해 자식 클래스가 해당 함수를 override하려고 했을 때 금지시킴
}
class ChildClass extends ParentClass{
 /*
    function a(){
        echo 'Child';
    }
    function b(){
        echo 'Child B';
    }
    */ // 자식 클래스에서 b라는 함수를 override했기 때문에 에러가 발생 함
}
$obj = new ChildClass();
$obj->a();
?>