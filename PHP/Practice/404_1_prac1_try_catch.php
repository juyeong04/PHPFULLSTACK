<?php

// 아래 쿼리를 이용해서 DB접속 > data획득 후 출력해주세요
// try-catch로 에러 처리를 해주세요
// 에러가 날 경우 해당 에러메세지를 출력해주세요
// 정상 종료일 경우 "정상종료"라고 출력해주세요
// $spq1 = "SELECT * FROM department ";
// $sql2 = "SELECT * FROM dept_manager ";

include_once("../Example/12_2_ex2_fnc_db_conn.php");

try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql2 = "SELECT * FROM dept_manager ";
    $stmt2 = $obj_conn->query( $sql2 );
    $result2 = $stmt2->fetchAll();
    // var_dump( $result2 ); // var_dump, print_r 는 사용하고 나서 지워주기!! 절대 안됨!!!!!, user한테 중요한 정보 다 보임
    echo "정상종료";

    $sql1 = " SELECT * FROM department ";
    $stmt = $obj_conn->query( $sql1 );
    $result = $stmt->fetchAll();
    
    // var_dump( $result );
        // if ( count($result) === 0 ) 
        // {
        //     throw new Exception("쿼리 결과 0건");
        // }
    
} 
catch ( Exception $e) 
{
    echo "----에러 발생 -----\n";
    echo $e->getMessage();
}
finally
{
    $obj_conn = null;
}



?>