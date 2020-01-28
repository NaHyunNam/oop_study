<?php
$file = new SplFileObject('data.txt'); // SplFileObject 클래스의 인스턴스 생성
//var_dump($file->fread($file->getSize())); 
//$file->rewind();
//var_dump($file->fread($file->getSize())); 

class MyFileObject extends SplFileObject{
    function getContents(){
        $content = $this->fread($this->getSize());
        $this->rewind();
        return $content;
    }
}

$file = new MyFileObject('data.txt'); // SplFileObject 클래스의 인스턴스 생성
//var_dump($file->fread($file->getSize())); 
//$file->rewind();
//var_dump($file->fread($file->getSize())); 
// 위에 3줄로 짰던 코드를 SplFileObject를 상속받는 MyFileObject라는 클래스를 생성하여
// getContents라는 함수를 생성하였고 거기에서 fread를 하고 rewind를 해주는 기능을 넣었기 때문에
// 아래의 var_dump($file->getContents()); 한줄로 기능을 요약할 수 있음

var_dump($file->getContents());
var_dump($file->getContents());








/* 첫번째 fread로 파일을 읽을 때에는 잘 읽어지지만 두번째는 잘 읽어지지 않음
이유는 첫번째 fread를 했을 때 파일을 읽고 커서와 같은 느낌으로 마지막을 가르키고 있는데
그 상태에서 fread를 다시 호출하면 커서가 끝을 가르키고 있기 때문에 읽을 파일이 없어 아무것도 뜨지 않음
그렇기 때문에 rewind 함수를 이용해서 커서를 앞으로 다시 끌고오면 다시 읽을 수 있음 
*/

?>