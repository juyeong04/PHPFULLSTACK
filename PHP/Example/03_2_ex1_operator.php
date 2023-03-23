<?php
    // 1. 산술 연산자

    // echo "더하기 : 1 + 1 = ", 1 + 1;
    // echo "\n빼기 : 1 - 1 = ", 1 - 1;
    // echo "\n곱하기 : 2 * 3 = ", 2 * 3;
    // echo "\n나누기 : 10 / 2 = ", 10 / 2;
    // echo "\n나머지 : 9 % 7 = ", 9 % 7;
    // echo "\n연산순서 : 10 - 5 * 8 = ", 10 - 5 * 8;
    // echo "\n\n";

    // //2. 증가/감소 연산자
    $num1 = 2;
    $num2 = 1;

    // echo ++$num1, "\n";
    // echo ++$num1, "\n";

    // echo --$num1, "\n";
    // echo --$num1;

    // echo $num1++, "\n";
    // echo $num1, "\n";

    // //3. 산술 대입 연산자

    // $num = 1;
    // $num = $num + 1;
    // $num +=1; // 간략화

    // 4. 비교 연산자
    // var_dump(1 > 2);
    // var_dump(1 < 2);
    // var_dump(1 >= 1);
    // var_dump(1 <= 1);
    // var_dump(1 == '1'); 내용만 같으면 됨
    // var_dump(1 === '1'); 데이터 형식, 내용이 같아야함

    // 같다
    // $t1 = 1;
    // $t2 = '1';
    // var_dump($t1 == $t2);
    // var_dump($t1 === $t2);

    // 다르다
    // var_dump($t1 != $t2);
    // var_dump($t1 !== $t2);

    //5. 논리 연산자
    // AND 연산자
    // var_dump(1 == 1 && 2 == 2); 둘 다 참일때만 true, 둘 중 하나라도 false면, false

    // OR 연산자 || : 버티컬바
    // var_dump(1 == 2 || 2 == 2); 둘 중 하나 true라도 true, 둘 다 false면, false

    // NOT 논리 연산자
    // var_dump(!(1 == 1));

    // 삼항 연산자
    echo 1 > 2 ? '참' : '거짓';
?>