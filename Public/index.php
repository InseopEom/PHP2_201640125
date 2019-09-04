<?php

$layout = file_get_contents("../thema/index.html".$filename);

$filename=$_SERVER['REQUEST_URI'].".html";

echo $filename;
if(file_exists("../".$filename)){
    $body = file_get_contents("../".$filename);

    $layout =str_replace("{{main}}",  $body, $layout);
}else{
    $layout =str_replace("{{main}}", "aaaaaaaaaaaaa", $layout);
}

echo $layout;

/*=
echo "내가 처음이야";
$filename=$_SERVER['REQUEST_URI'].".html";

echo $filename."을 읽어 봅니다.";

$body = file_get_contents("../".$filename);
echo $body;
*/