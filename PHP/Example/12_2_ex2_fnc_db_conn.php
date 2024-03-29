<?php


// --------------------------------------
// 함수명   : my_db_conn
// 기능     : DB Connet
// 파라미터 : PDO   &$param_conn
// 리턴     : 없음
// --------------------------------------

function my_db_conn( &$param_conn )
{
    $db_host            = "localhost";  //   host
    $db_user            = "root";       //  user
    $db_password        = "root506";    //  password
    $db_name            = "employees";   //  DB name
    $db_charset         = "utf8mb4";    // charset
    $db_dns             = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $db_option          = 
        array(
            PDO::ATTR_EMULATE_PREPARES      => false // db가 지원하지 않을 때 값 ture 기본값은 true , DB의 prepared statement 기능을 사용하도록 설정(false)
            , PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws 하도록 설정
            , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정
        );

    // PDO class로 DB 연동
    $param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
}






?>