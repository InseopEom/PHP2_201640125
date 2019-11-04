<?php
// 윈도우 운영체제 : 파일명 대소문자 구분 없음.
// 리눅스 운영체제 : 파일명 대소문자 구별.
$config = include "dbconf.php";
require "database.php";
require "table.php";

$db = new Database( $config );
$table = new Table($db);
// 테이블 객체를 생성해서 연결
// $db->setTable($table)->getTable()->createTable(); // 연결된 객체 읽어.
$db->getTable()->createTable(
    "members3",
    [
        'Last'=>"varchar(50)",
        'First'=>"varchar(50)",
        'Age'=>"varchar(50)",
    ]);

if($db->isTable("members")) {
    echo "테이블이 존재합니다.";
} else {
    echo "테이블이 없어요.";
}

