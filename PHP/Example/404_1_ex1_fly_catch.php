<?php

include_once("./12_2_ex2_fnc_db_conn.php");

// try-catch 문 : 에러가 나도 시스템을 정지시키지 않고 원하는 방법으로 에러를 관리하기 위해 사용함

    // try // try : 실행하고 싶은 소스코드 작성
    // {
    //     //code...
    // } 
    // catch ( Exception $e) // catch : try에서 에러 생겼을 때 실행
    // {
    //     //throw $th;
    // }
    // finally // finally : 정상처리, 에러처리 상관없이 무조건 실행되는 소스코드를 작성
    // {

    // }

    try
    {
        $obj_conn = null;
        my_db_conn( $obj_conn );
        $sql = " SELECT * FROM employees WHERE emp_no = 1000000 ";
        $stmt = $obj_conn->query( $sql );
        $result = $stmt->fetchAll();
        
            if ( count( $result ) === 0) 
            {
                // throw Exception : 에러를 강제로 일으키는 구문 ==> try 구문 stop 하고 catch 구문으로 넘어감
                throw new Exception("퀴리 결과 0건");
            }

        var_dump( $result );
        echo "try\n";
    }
    catch( Exception $e)
    {
        echo "----에러 발생----\n";
        echo $e->getMessage(); // 무슨 에러 났는지 메세지 보여줌
        echo "\n----에러 발생----\n";
    }
    finally
    {
        echo "Fianlly\n";
        $obj_conn = null;
    }

    

    echo "종료";



?>