<?php
class ParentClass{
    public $_public = '<h1>public</h1>';
    protected $_protected = '<h1>protected</h1>';
    private $_private = '<h1>private</h1>';
}
class ChildClass extends ParentClass{
    function callPublic(){
        echo $this->_public;
    }
    function callProtected(){
        echo $this->_protected;
    }
    function callPrivate(){
        echo $this->_private;
    }

}
$obj = new ChildClass();
echo $obj->_public;
//echo $obj->_protected; 인스턴스로 직접 접근은 막음
echo $obj->_private;
$obj->callPublic();
$obj->callPrivate();
$obj->callProtected(); // 
?>

인스턴스로 직접 접근은 금지시키며 상속으로 만들어진 자식 클래스에서 부모 클래스의 접근은 가능하다