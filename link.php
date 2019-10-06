<?php

echo "파일 목록을 출력합니다.";
$path="./";
files($path);

function files($path){
  $files = scandir($path);
  //입력한 폴더에 파일목록을 베열로 반환한다.
  for($i=0;$i<count($files);$i++){
    if($files[$i]== ".." || $files[$i]==".git"){
      continue;
    }
    if(is_dir($files[$i])){
      echo "<b>".$files[$i]."</b><br>";

    }else{
      echo "".$files[$i]."<br>";

    }
  }
}
 ?>
