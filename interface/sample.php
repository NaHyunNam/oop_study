<?php
interface ContractInterface{
    public function compare(string $str1, string $str2):bool;
}
class Concreate implements ContractInterface{
    public function compare(string $str1, string $str2):bool{
        if($str1 === $str2){
            return true;
        }else{
            return false;
        }
    }
}
$obj = new Concreate();
if($obj->compare('test1','test')){
    echo '<h1>same</h1>';
}else{
    echo '<h1>different</h1>';
}

?>