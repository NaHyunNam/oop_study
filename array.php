<h1>Function Style</h1>
<?php
//$adata = ['a', 'b', 'c']; 배열을 만드는 두 가지 방식
$adata = array('a','b','c');
array_push($adata, 'd');
foreach($adata as $item){
    echo $item.'<br>'; // php내에서 HTML 태그 사용법
}
var_dump(count($adata)); // 인자로 전달
?>

<h1>Object Style</h1>
<?php
$odata = new ArrayObject(array('a', 'b', 'c'));
$odata->append('d');
foreach($odata as $item){
    echo $item.'<br>'; // php내에서 HTML 태그 사용법
}
var_dump($odata->count()); //상태로 전달
?> 