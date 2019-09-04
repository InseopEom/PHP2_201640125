<?php
//                   파일명
$body =file_get_contents("page.html");
$first= $_GET['v1']; //대괄호는 선택

$body =str_replace("{{first}}",$first, $body);

$Last= $_GET['v2']; //대괄호는 선택

$body =str_replace("{{Last}}",$Last, $body);

$Last2= $_GET['v3']; //대괄호는 선택

$body =str_replace("{{Last2}}",$Last2, $body);

echo $body;
