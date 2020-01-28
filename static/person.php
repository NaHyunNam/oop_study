<?php
class Person{
    private static $count = 0; // 각각의 인스턴스들은 해당 변수를 공유하지 못한다. 하지만 static을 붙여 줄 경우 공유 할 수 있다. 
    private $name;
    function __construct($name){
        $this->name = $name;
        self::$count = self::$count + 1;
    }
    function enter(){
        echo "<h1>Enter ".$this->name." ".self::$count."th</h1>";
    }

    static function getCount(){
        return self::$count;
    }

    /*
    $this와 self 차이점
    self는 static, 즉 클래스 자체에 속하는 함수나 변수를 가리킬 때 사용합니다.
    this는 instance, 즉 개별 객체 - 인스턴스의 함수나 변수를 가리킵니다.
    */
}

$p1 = new Person('namnahyun');
$p1->enter();

$p2 = new Person('leezche');
$p2->enter();

$p3 = new Person('duru');
$p3->enter();

$p4 = new Person('taiho');
$p4->enter();

//echo $p4->getCount(); 인스턴스에게 클래스 변수를 물어보는것보다 클래스에게 직접 물어보는것이 좋음
echo Person::getCount(); // Person 클래스의 소속된 getCount라는 함수 호출

/*
    정적 변수(static)와 동적 변수(dynamic) 차이점
    정적 변수 : 클래스의 소속됨, ex) static $count는 Person이라는 class에 소속됨 > 모든 인스턴스 공유
    동적 변수 : 인스턴스에 소속됨, ex) $name은 p1, p2, p3, p4라는 인스턴스에 소속됨 
    */
?>