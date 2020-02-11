<?php
abstract class ParentClass{ // 해당 클래스의 메소드 중 abstract가 붙은 메소드가 있다면 클래스 앞에도 붙여주어야 한다.
    public function a(){
        echo 'a';
    }
    public abstract function b(); // abstract를 통해서 function b를 자식 클래스인 ChildClass가 강제로 구현하도록 하였다.
}
class ChildClass extends ParentClass{
    public function b(){

    } // 상속을 하는 ParentClass에서 function b가 abstract 되어 있기 때문에 자식 클래스에서는 b 메소드를 구현하여야 한다. 안하면 오류가 난다.
}
$obj = new ChildClass();
$obj->b();

/*
abstract는 자식 클래스가 어떤 특정한 메소드를 반드시 구현할 수 있도록 강제하는 것이 
abstract의 특징이다
*/
?>