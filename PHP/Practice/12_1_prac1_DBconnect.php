<?php

// 사번이 10005이하 사원의 사번, 이름(성, 이름), 성별, 생일

    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    $result_query = mysqli_query($dbc, "SELECT emp_no, CONCAT(first_name,' ',last_name) AS fullname, gender, birth_date FROM employees WHERE emp_no <= 10005;");

//     while ($temp_row = mysqli_fetch_row($result_query)) 
//     {
//         $str_impl = implode("\n", $temp_row);
//         $str_impl .= "\n\n";
//         echo $str_impl;
//     }

// //

//     $sql = "
//             SELECT 
//                 emp_no
//                 , CONCAT(first_name,' ',last_name) AS fullname
//                 , gender
//                 , birth_date 
//                 FROM employees 
//                 WHERE emp_no <= 10005;
//             ";

//     $result_query = mysqli_query($dbc, $sql);
//     while ($temp_row = mysqli_fetch_assoc($result_query)) 
//     {
//         echo implode(" ", $tmp_row), "\n";
//     }


// 정보가 없으면 데이터가 0건입니다. 출력
    // if (!mysqli_fetch_row($result_query)) // 10001번 여기서 검사하기 때문에 else에서 빠져서 나옴
    // {
    //     echo "데이터가 없습니다.";
    // }
    // else {
    //     while ($temp_row = mysqli_fetch_row($result_query)) 
    //     {
    //         $str_impl = implode("\n", $temp_row);
    //         $str_impl .= "\n\n";
    //         echo $str_impl;
    //     }
    // }


    // mysqli_num_rows() 를 이용해서 레코드 수를 체크하는 방법
        // if( mysqli_num_rows($result_query) === 0 ) 
        // {
        //     echo "데이터가 없습니다.";
        // }
        // else {
        //     while ($temp_row = mysqli_fetch_row($result_query)) 
        //     {
        //         $str_impl = implode("\n", $temp_row);
        //         $str_impl .= "\n\n";
        //         echo $str_impl;
        //     }
        // }

    // 플래그를 이용하는 방법
        $flg_cnt = false;
        while ($temp_row = mysqli_fetch_row($result_query)) 
            {
                $str_impl = implode("\n", $temp_row);
                $str_impl .= "\n\n";
                echo $str_impl;
                $flg_cnt = true;
            }
        if (!$flg_cnt) {
            echo "데이터가 없습니다.";
        }


?>