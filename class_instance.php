<?php
// class 만드는 방법
class MyFileObject{
    function __construct($fname){ // __construct 함수 호출하면 생성자로 하겠다라는 약속
        $this->filename = $fname; 
        /*
            생성자가 하는 역할
            1. 인스턴스(new)가 생성될 때 필수적으로 필요한 데이터를 인자를 통해서 전달받을 수 있다.
            2. 이 함수가 인스턴스가 생성될 때 해야되는 필수적인 일을 수행하여 초기화 작업을 할 수 있다.
        */
    }
    function isFile() {
        return is_file($this->filename); 
    }
}

$file = new MyFileObject('data.txt'); // class 사용 방법
//$file->filename = 'data.txt'; // filename의 값을 쓰는 방식
var_dump($file->isFile());
var_dump($file->filename); // filename의 값을 가져오는 방식


        /* this는? > 인스턴스($file)에 할당한 filename은 인스턴스에 변수이다.
        return is_file에 $filename으로 썼을 경우 isFile 함수의 변수이고 함수 밖에 변수에는 접근 불가능
        this를 붙여주면 클래스(MyFileObject)를 인스턴스화 된 것에(new를 붙인 변수) 변수에 접근할 수 있다.
        ex) $file->filename = 'data.txt';에 접근 가능
        
        한번 더 용어 정리
        MyFileObject > Class
        $file, $file2 > Instance
        isFile > Method, behavior(행위)
        $this->filename > 
        Instance variable, Instance field, Instance property > 인스턴스 안에서 유효한 변수
            다른 말로는 status
        */

        
?>

