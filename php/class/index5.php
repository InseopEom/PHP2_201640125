<?php

abstract class greeting{
  //이거는 꼭 만들어야 해..
  abstract public function hello();

  public function pages(){

    echo "페이지";
  }
}

//인터페이스를 구현해서 클래스를 만들어.. 강제 명령
class daelim extends greeting
{

  public function hello(){

    echo "그냥해 ..";
  }
}

$obj = new daelim;
$obj->hello();

$obj->pages();


 ?>
