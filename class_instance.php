<?php
// class 만드는 방법
class MyFileObject{
    function isFile() {
        return is_file($this->filename); 
    }
}

$file = new MyFileObject(); // class 사용 방법
$file->filename = 'data.txt'; // filename의 값을 쓰는 방식
var_dump($file->isFile());
var_dump($file->filename); // filename의 값을 가져오는 방식

$file2 = new MyFileObject(); // class 사용 방법
$file2->filename = 'data2.txt';
var_dump($file2->isFile());
var_dump($file2->filename);

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

