<?php

// array에는 공백 넣으면 안됨!!!!!!!!!!!!!!!

// DB connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력
include_once("../Example/12_2_ex2_fnc_db_conn.php");
$obj_conn = null;

my_db_conn( $obj_conn );

//1. 전체 월급의 평균
    // $sql_avg = 
    //     " SELECT " 
    //     . " AVG(salary) "
    //     . " FROM "
    //     ." salaries ";
    
    //--- 내가 적은거 
    // $stmt = $obj_conn->prepare( $sql_avg );
    // $stmt-> execute();
    // $result = $stmt->fetchAll();
    // var_dump( $result );
    
    //------ query method로 하는 방법
    $stmt = $obj_conn->query( $sql_avg ); // prepare 없으니까 굳이 쓸 필요 없이 query문 실행해주는 method 쓰면됨
    $result = $stmt->fetchAll();
    var_dump( $result );
    $obj_conn = null;

// 2. 새로운 사원 정보를 employees 테이블에 등록하기

    // $sql_insert = 
    //     " INSERT INTO "
    //     ." employees ("
    //         ." emp_no "
    //         ." , birth_date "
    //         ." , first_name "
    //         ." , last_name "
    //         ." , gender "
    //         ." , hire_date "
    //     ." ) "
    //     ." VALUES( "
    //         ." :emp_no "
    //         ." , :birth_date  "
    //         ." , :first_name "
    //         ." , :last_name "
    //         ." , :gender "
    //         ." , :hire_date "
    //     ." ) ";


    // $arr_prepare_insert = 
    //     array(
    //         ":emp_no"        => 500000
    //         ,":birth_date"   => 19970412
    //         ,":first_name"   => "Juyeong"
    //         ,":last_name"    => "Kim"
    //         ,":gender"       => "F"
    //         ,":hire_date"    => 99990101 // mariaDB, mysql는 자동형변환 해줌 / 날짜string으로 대시바 ("9999-01-01")로 보통 설정해줌
    //     );
    
    // $obj_conn = null;
    // my_db_conn( $obj_conn );
    // $stmt = $obj_conn->prepare( $sql_insert );
    // $result2 = $stmt->execute($arr_prepare_insert);
    // $obj_conn->commit();
    // $obj_conn = null;
    


// 3. 2에서 등록한 사원의 이름을 "길동" 성은"홍" 으로 변경

    // $sql_update = 
    //     " UPDATE " 
    //     ." employees "
    //     ." SET " 
    //     ." first_name = :first_name
    //         , last_name = :last_name "
    //     ." WHERE "
    //     ." emp_no = :emp_no ";

    // $arr_prepare_update = 
    //     array(
    //         ":first_name" => "길동"
    //         ,":last_name" => "홍"
    //         ,":emp_no"    => 500000
    //     );
    
    // $obj_conn = null;
    // my_db_conn( $obj_conn );
    // $stmt = $obj_conn->prepare( $sql_update );
    // $stmt->execute( $arr_prepare_update );
    // $obj_conn->commit();
    // $obj_conn = null;



//4. 2에서 등록한 사원을 삭제해 주세요

    $sql_del = 
    " DELETE FROM " 
    ." employees "
    ." WHERE " 
    ." emp_no = :emp_no ";

    $arr_prepare_del = 
        array(
            ":emp_no" => 500000
        );
    

    $obj_conn = null;
    my_db_conn( $obj_conn );
    $stmt = $obj_conn->prepare( $sql_del );
    $stmt->execute($arr_prepare_del);
    $obj_conn->commit();

$obj_conn = null;



?>