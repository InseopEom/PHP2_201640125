<?php

include "left.php";
include 'right.php';
//include "foo.php";

$obj1 = new left;


echo "<br>";
$obj1->greeting();
$obj1->daelim();
$obj2= new right;
$obj2->greeting();

$property="name";

$obj1->$property ="대림이";
echo $obj1->name."입니다";

echo "<br>";

$obj2 = new right;
$obj2->name="대숙이";

$result=$obj2->greeting();
$obj2->greeting();

$obj2->daelim();
$result->daelim();

//메소드 체인
echo "<br>===<br>";
$obj2 -> greeting()->daelim()->foo()->bar();

echo "<br>===<br>";

echo foo::$aaa;

foo::hello();

 ?>
