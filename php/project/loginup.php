<?php
session_start();

$_SESSION["username"]="대남이";
setcookie("mynum", "201640125", time()+(86400 * 30 ), "/");
//mynum으로 쿠키값으 저장

 ?>
