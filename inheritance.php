<?php
class Animal{
    function run(){
        print('running..<br>');
    }
    function breathe(){
        print('breathing...<br>');
    }
}

class Human extends Animal{
    /*function run(){
        print('running..<br>');
    }
    function breathe(){
        print('breathing...<br>');
    }
    Animal에서 상속받기 때문에 굳이 선언 할 필요 없는 함수들
    */
    function think(){
        print('thinking...<br>');
    }
    function talk(){
        print('talking...<br>');
    }
}
$human = new Human();
$human->run();
$human->think();
?>
