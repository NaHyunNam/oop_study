<?php
class ParentClass{
    function callMethod($param){
        echo "<h1>Parent {$param}</h1>";
    }
}
class ChildClass extends ParentClass{
    function callMethod($param){
        parent::callMethod($param); //parent::를 통해 부모 클래스에 있는 기능을 사용하고 거기에 기능을 추가하여 사용할 수 있음
        echo "<h1>Child {$param}</h1>";
    }
}
$obj = new ChildClass();
$obj->callMethod('method');
?>