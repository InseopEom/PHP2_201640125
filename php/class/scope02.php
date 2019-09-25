<?php

$a= 2;
echo "start= : ".$a;

function num(){

  echo "num =".$GLOBLAS['a'];

  $GLOBALS['a'] =6;

}

echo num();
echo "end= : ".$a;
echo "<br>==<br>";
echo $_SERVER['REQUEST_URI'];

?>
