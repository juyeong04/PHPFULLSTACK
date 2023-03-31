<?php

// DB 연결
    $dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306);

    // var_dump($dbc);

// 퀴리 요청

    $result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 10;" );// object로 넘어온 상태

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
            while ($temp_row = mysqli_fetch_assoc($result_query))
            {
                var_dump($temp_row["first_name"]);
            }

    mysqli_close($dbc);

?>