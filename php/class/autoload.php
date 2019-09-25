<?php

spl_autoload_register(function($className){
  echo $className;

  $filename=$className."php";

if(file_exists($filename)){
  include $filename;
}
});



 ?>
