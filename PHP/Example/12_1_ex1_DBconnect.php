<?php

// DB연결 mysqli(mysql, mariadb 에서만 사용가능) / pdo class 이용해서 DB연결( 확장 가능 )

// DB 연결
    $dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306);

    // var_dump($dbc);

// 퀴리 요청

    // $result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 10" );// object로 넘어온 상태

    // var_dump($result_query);
    
    
    // $result_row = mysqli_fetch_row( $result_query );
    // var_dump($result_row);
    // $result_row = mysqli_fetch_row( $result_query );
    // var_dump($result_row);

    // emp_no 전부 가져오기
        //  fetch_row : 배열의 key가 숫자로 되어있음, 한줄씩 가져옴
            // while ($temp_row = mysqli_fetch_row($result_query)) // fetch_row는 하나의 값 가져올 때 보통 사용, 무슨 값을 가져왔는지 표시가 안됨
            // {
            //     var_dump($temp_row);
            // }

        // fetch_assoc : 연상배열로 가져옴 key값은 컬럼명, 한줄씩 가져옴
            // while ($temp_row = mysqli_fetch_assoc($result_query))
            // {
            //     var_dump($temp_row["first_name"]);
            // }


// Prepared Statement : 필요한 값들을 나중에 세팅할수있는 방법

    $i1 = "F";
    $i2 = 10010;
    $i3 = 5;
    $stmt = $dbc->stmt_init(); // statement를 세팅
    $stmt->prepare( "SELECT emp_no, first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT ?;" ); // DB 질의 할 쿼리를 작성
    $stmt->bind_param("sii", $i1, $i2, $i3); // prepare 세팅, magic number 사용 불가!(레퍼런스 참조(&)는 매직넘버 사용 불가, 변수에 담아서 써야함)
                                // "b" "d" "i" int "s" string 만 들어갈수 있음
    $stmt->execute(); // DB에 퀴리 질의 실행

    // ------- 이하 질의 결과를 우리가 지정한 변수에 담아 사용하는 방법
    // $stmt->bind_result( $col1, $col2 ); // 질의 결과를 각 아규먼트(변수)에 저장하기 위한 세팅
    // $stmt->fetch(); //bind_result에서 셋팅한 아규먼트에 값을 저장(한번 실행 될때마다 한 레코드씩 저장)
    // var_dump( $col1, $col2 );

    
    // -------- 이하 모든 질의 결과 가져오기 : fetch문을 반복문 돌려서 가져올수 있음
        // while ($stmt->fetch()) {
        //     echo "$col1 $col2\n";
        // }


    //--------- 이하 연상배열로 가져오기(key값 있는)

    $result = $stmt->get_result();// 질의 결과를 저장

        // while ($row = $result->fetch_assoc()) {
        //     var_dump($row["first_name"]);
        // }

        while ($row = $result->fetch_assoc()) {
            echo $row["emp_no"]," ", $row["first_name"], "\n";
        }

// db연결 종료
    mysqli_close($dbc);

?>