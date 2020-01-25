<?php
class Person{
    private $name;
    public function sayHi(){
        print("Hi, I'm {$this->name}.");
    }
    public function setName($_name){
        $this->ifEmptyDie($_name);
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }
    private function ifEmptyDie($value){
        if(empty($value)){
            die('I need name');
        }
    }
    // public는 사용 가능
    // private는 내부적으로만 사용하도록 강조

}
$nam = new Person();
//$nam->name = 'namnahyun';
$nam->setName('namnahyun');
$nam->sayHi();
//$nam->ifEmptyDie('ffdsaff');
print($nam->getName());
//print($nam->name);
?>