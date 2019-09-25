<?php
//1. 선언
class foo
{

    public $name;

    public function hello()
    {
      echo $this->name."짱이에요";
      return $this;
    }

    public static $daelim="대학";


  }
//2. 생성
  $obj = new foo;
  $obj->name = "대림이"; //객체 프러퍼티 값을 저장
  $obj->hello();

  $obj2 = new foo;
  $obj2->name="대숙이";
  $obj2->hello();


  foo::$daelim="우주 최강";
  $obj->hello();
  $obj2->hello();
  

//3. 호출
//$result= $obj->hello(); //$this

//$result == $this
/*
//1단계 선언만
class bar{

  public static $name;

  public static function username(){
    echo self::$name."입니다";
  }

}

  bar::$name="고정 값"; //:: static 호출이다 . 정적 호출
  bar::username();
*/

 ?>
