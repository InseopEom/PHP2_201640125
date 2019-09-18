<?php

//함수 선언
 function hello($name="**", $a, $b):int{
    $num=$a+$b;
    echo "반가워요".$name."=".$num."<br>";

    //반환값
    return $num;
  }   

  //함수 호출
  $user ="대남이";
$s =hello($User,1,2);
echo "합계는 = ". $s;

