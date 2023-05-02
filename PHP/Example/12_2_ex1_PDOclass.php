<?php
// [ PDO class ]

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
    ); // 외워야됨,,

    // PDO class로 DB 연동
    $obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );

    // // 사번 10001의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요

    // SELECT 예제
        // $sql = 
        //     " SELECT " 
        //     ." sal.salary "
        //     ." , emp.emp_no "
        //     ." , emp.birth_date "
        //     ." FROM "
        //     ." employees emp "
        //         ." INNER JOIN salaries sal "
        //         ." ON emp.emp_no = sal.emp_no "
        //     ." WHERE " 
        //     ." sal.to_date > NOW() " 
        //     ." AND "
        //     ." ( "
        //     ." emp.emp_no = :emp_no1 
        //         OR  emp.emp_no = :emp_no2 "
        //     ." ) ";
        

        // $arr_prepare = 
        //     array(
        //         ":emp_no1" => 10001
        //         ,":emp_no2" => 10002
        //     );
        
        // $stmt = $obj_conn->prepare( $sql ); // prepared statement를 생성
        // $stmt->execute( $arr_prepare ); // prepare 값 함수에 
        // $result = $stmt->fetchAll(); // 퀴리 결과를 fetch
        // // var_dump( $result );

        // foreach ($result as $val)  // $val에 array 담겨있음
        // {
        //     echo $val["salary"], "\n";
        // }


    // INSERT 예제
    //     $sql = 
    //         " INSERT INTO departments( "
    //         ." dept_no "
    //         ." ,dept_name "
    //         ." ) "
    //         . " VALUES( "
    //         ." :dept_no "
    //         ." ,:dept_name "
    //         ." ) "
    //         ;

    //     $arr_prepare = 
    //         array(
    //             ":dept_no" => "d011"
    //             ,":dept_name" => "PHP풀스택"
    //         );


    //     $stmt = $obj_conn->prepare( $sql );
    //     $result = $stmt->execute( $arr_prepare );
    //     $obj_conn->commit();
        
    //     // 하이디에서 FLUSH PRIVILEGES; 치면 최신 상태로 리프레시됨 
    //     var_dump( $result );

    // $obj_conn = null;// DB 파기



?>
