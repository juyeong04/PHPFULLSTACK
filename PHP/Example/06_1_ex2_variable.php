<?php

// -- 전역변수 : 함수 밖에서도 사용 가능한 변수

function fnc_add()
    {
        global $global_int_a; // 전역변수 선언
        $global_int_a = $global_int_a + 10;
        return $global_int_a; 
    }


    $global_int_a = 5; // 전역변수 초기화(값 대입) / function, $global_int_a 저장된 메모리가 다름
    echo fnc_add();


// -- 정적변수 : 지정 함수 범위 안에서만 사용되고 밖에서는 사용 못하는 변수
function fnc_add_1()
{
    $i = 1;
    echo $i."\n";
    $i++;
}

for ($i=0; $i < 3; $i++) 
{ 
    fnc_add_1();
}

function fnc_add_2()
{
    static $i = 1; // static : function 안에서 $i값 설정 해줌
    echo $i."\n";
    $i++;
}

for ($i=0; $i < 3; $i++) 
{ 
    fnc_add_2();
}

//-- call by value
    // function fnc_val($int_a, $int_b)
    //     {
    //         $int_a = 3;
    //         $int_b  = 4;
    //     }

    // $int_a = 1;
    // $int_b = 2;
    // fnc_val(5, 6);

    // echo $int_a, " ", $int_b;


//-- call by reference : 주소 참조
    function fnc_val(&$a, &$b)
        {
            $a = 3;
            $b  = 4;
        }
        
    $int_a = 1;
    $int_b = 2;
    fnc_val($int_a, $int_b);

    echo $int_a, " ", $int_b;


?>