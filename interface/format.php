<?php
interface ContractInterface{
    public function promiseMethod(array $param):int; //$param 변수는 array로 할 것, return 형식은 int로 할 것 지키지 않았을 시 에러 
}
interface ContractInterface2{
    public function promiseMethod2(array $param):int; //$param 변수는 array로 할 것, return 형식은 int로 할 것 지키지 않았을 시 에러 
}
class ConcreateClass implements ContractInterface, ContractInterface2{
    public function promiseMethod(array $param):int{
        return 1;
    }
    public function promiseMethod2(array $param):int{
        return 1;
    }
    
}

$obj = new ConcreateClass();
$obj->promiseMethod([1,2]);
/*
interface는 선언 후 해당 인터페이스 안에 들어가는 함수를 정의해 놓는다.
해당 interface를 클래스에서 받아 올 때는 implements를 통해서 Interface를 받아온다.
Interface를 implements한 class에서는 interface안에 정의되어 있는 function을
반드시 호출해야 하며 호출하지 않았거나, interface에서 정의한 함수의 형식이 아닐 경우 에러가 발생한다.
ex) interface안에 있는 function의 인자가 array로 받기로 정의 될 때, return값의 형식을 int로 정의 했을 때
해당 interface를 implements한 class를 호출 시 인자 값을 string으로, 클래스에서  return값을 array로 줬을 시 에러가 난다.

*/
?>