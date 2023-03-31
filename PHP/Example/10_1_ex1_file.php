<?php

// 파일을 여는 방법 : fopen( 파일위치, 파일 여는 방식)
    // $f_food = fopen("./sam/food.txt", "r"); // r : 읽기전용
    // $f_food = fopen("./sam/food.txt", "w"); // w : 쓰기전용 (포인터가 파일의 시작부분, 웬만하면 잘 안씀) ==> 파일 날아감, 데이터 못찾음,,,, 
                                                                            // 파일 불러올때 원본파일 안쓰고 복사본 사용!!
    $f_food = fopen("./sam/food.txt", "a"); // a : 쓰기전용 (포인터가 파일의 끝부분)

    // var_dump($f_food);

// 파일을 한줄씩 읽어오는 방법 : fgets( open한 파일 )
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);

// 여러줄 읽기

    // // 방법1. 
    //     while(!feof($f_food)) // feof() : 현재 pointer가 파일 끝을 가리키면 true, 아니면 false
    //     {
    //         print fgets($f_food);
    //     }

    // // 방법2. 
    //     while ($line = fgets($f_food)) 
    //     {
    //         print $line;
    //     }



$f_food = fopen("./sam/food.txt", "a"); // a : 쓰기전용 (포인터가 파일의 끝부분)
// 파일에 내용 추가 : fputs( open한 파일, 추가할 내용)
    fputs($f_food, "\n돈까스"); // 포인터가 파일 끝부분에 있어서, 개행 자동으로 실행 안됨

// 파일을 닫는 방법 : fclose( open한 파일 ) 열었으면 꼭 닫아줘야함!!!!!!!!!! 안닫으면 메모리 난리남,,
    fclose($f_food);


?>