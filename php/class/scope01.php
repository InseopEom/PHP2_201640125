<?php

$a= 1;
echo "start= : ".$a;

function num(){
  global $a;

  echo "num =".$a;
  $a= 6;
}

echo num();
echo "end= : ".$a;

?>
