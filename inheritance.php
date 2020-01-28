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
$human = new Human(); // Human 인스턴스
$human->run(); // Animal 클래스에서 정의한 함수를 Human 클래스에서 상속 받았기 때문에 사용 가능
$human->think(); // Human 클래스에서 정의한 함수 사용 가능
?>
