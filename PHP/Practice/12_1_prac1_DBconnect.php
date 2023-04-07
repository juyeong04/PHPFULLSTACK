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
        // $flg_cnt = false;
        // while ($temp_row = mysqli_fetch_row($result_query)) 
        //     {
        //         $str_impl = implode("\n", $temp_row);
        //         $str_impl .= "\n\n";
        //         echo $str_impl;
        //         $flg_cnt = true;
        //     }
        // if (!$flg_cnt) {
        //     echo "데이터가 없습니다.";
        // }

//=========================================================================

// 아래 쿼리로 결과를 출력하는 프로그램을 만들어주세요

// ---- 쿼리 ------
// SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?

// --- prepare 셋팅값 ----
// to_date : "9999-01-01"
// salary : 50000
// LIMIT : 5


$to_date_pre = 99990101;
$salary_pre = 50000;
$limit_pre = 5;


$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );// DB 연결
$stmt = $dbc->stmt_init(); //mysqli_stmt_prepare를 사용하기 위한 객체를 초기화하고 리턴해줌
$stmt->prepare( " SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ? " );
$stmt->bind_param( "sii", $to_date_pre, $salary_pre, $limit_pre ); // prepared statement의 값을 셋팅
$stmt->execute(); // 쿼리를 실행

$result = $stmt->get_result(); // db에서 가져온 결과값을 알아보기 쉽게 셋팅해줘서 가져옴

while ( $row = $result->fetch_assoc() ) 
{
    // echo $row["emp_no"], " ", $row["salary"], "\n";
    print_r($row);
}
mysqli_close($dbc); // db연결 종료
// $dbc->close(); // 이 방법도 연결 종료 가능!!
?>