<?php
include "fucntion10.php";// 함수선언하다.
include "fucntion10.php";// 함수 중복 처리한다.
list($name, $num) =daelim("대림이", 201640125);
//$name <- $name[0]
//$num <- $name[1]
//print_r($name);
echo $name.$num;
