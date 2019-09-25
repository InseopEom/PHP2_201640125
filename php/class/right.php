<?php
class right
{
 public $name;
  public function greeting(){

    echo "right 반가워요 : ".$this->$name."<br>";

    return $this;

  }

  public function daelim(){
    echo "대림";
    return $this;
  }

  public function foo(){
    echo "학";
    return $this;

  }
  public function bar(){
    echo "나도 바보야";
    return $this;

  }
}


 ?>
