<?php

// 함수용 파일 따로 만들고 include로 첨부해서 사용
include_once("./12_2_ex2_fnc_db_conn.php");// 한번 include된 파일은 중복으로 include 안되게 include_once 사용함


$obj_conn = null; // PDO class 

// DB connect
my_db_conn( $obj_conn );

// SQL
$sql = 
    " SELECT " 
    ." * "
    ." FROM "
    ." employees "
    ." LIMIT :limit_start ";

$arr_prepare = 
    array(
        ":limit_start" => 5
    );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();

var_dump($result);

$obj_conn = null; //DB 커넥션 파기




?>