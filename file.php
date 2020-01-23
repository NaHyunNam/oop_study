<h1>Function</h1>
<?php
/*파일 관련한 php 메소드*/
/*입력값이 중복됨 왜? > 각각의 함수를 호출한것*/
var_dump(is_file('data.txt')); // 파일이 있는지 없는지 비교 있는지 확인 true
var_dump(is_dir('data.txt')); // 해당 이름에 디렉토리 있는지 확인
var_dump(file_get_contents('data.txt')); // data.txt란 파일의 내용을 가져오는것
file_put_contents('data.txt', rand(1,100)); // 해당 파일에 1~100까지의 랜덤한 함수를 넣는것
?>

<h1>Object</h1>
<?php
// Spl > Standard php Library
/*입력값이 중복되지 않음 왜? > 하나의 객체에 정의됨에 따라 여러가지 함수들이 실행
같은 객체에 소속되어있기 때문에 각각 동작하지 않음
파일의 이름을 서로 공유하고 있음*/
$file = new SplFileObject('data.txt');
var_dump($file->isFile());
/*-> 지시자는 객체의 하위속성 접근, 다른 언어에서 .과 동일 */
var_dump($file->isDir());
var_dump($file->fread($file->getSize())); //file_get_contents와 달리 정확한 사이즈를 지정해줘야 데이터를 가져온다
$file->fwrite(rand(1,100));

$file2 = new SplFileObject('data2.txt');
var_dump($file2->isFile());
/*-> 지시자는 객체의 하위속성 접근, 다른 언어에서 .과 동일 */
var_dump($file2->isDir());
var_dump($file2->fread($file2->getSize()));
$file2->fwrite(rand(1,100));

/*
용어정리
SplFileObject > class > 설계도
$file, $file2 > Instance > 설계도를 가지고 만들어진 제품
isFile, isDir, fread > Method(function)
data.txt, data2.txt > state > 상태
Instance들은 서로 다른 상태(state)를 갖고 있기 때문에 Method를 호출했을 때 서로 다른 동작을 한다

다시한번 용어정리
MyFileObject > Class
$file, $file2 > Instance
isFile > Method
$this->filename > Instance variable, Instance field, Instance property > 인스턴스 내에서 유효한 변수
*/
?>