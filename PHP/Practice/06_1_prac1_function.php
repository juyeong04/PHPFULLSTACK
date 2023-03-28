<?php

// 두 매개변수를 빼는 함수를 구현해주세요

//     //1. 
//     function fnc_minus($int_a, $int_b)
//     {
//         $minus = $int_a - $int_b;

//         return $minus;
//     }

//     //2. 
//     function fnc_minus($int_a, $int_b)
//     {
//         return $int_a - $int_b;

//     }
    
    
// // 두 매개변수를 나눈 함수를 구현해주세요
//     function fnc_div($int_a, $int_b)
//     {
//         $div = $int_a / $int_b;

//         return $div;
//     }

// // 두 매개변수를 곱하는 함수를 구현해주세요
//     function fnc_multi($int_a, $int_b)
//     {
//         $multi = $int_a * $int_b;

//         return $multi;
//     }

// 각각의 결과를 출력
    // $result_minus = fnc_minus(10, 9);
    // echo $result_minus;

    // $result_div = fnc_div(10, 2);
    // echo $result_div;

    // $result_multi = fnc_multi(10, 2);
    // echo $result_multi;

    // echo fnc_minus(10, 9);
    // echo fnc_div(10, 2);
    // echo fnc_multi(10, 2);

//=====================================================    

// 빼기, 곱하기, 나누기를 '가변 파라미터 함수'로 구현해주세요

    // if 사용해서 구하기 ====> if 조건 args[0]값이랑 같은 값이 있을 경우 if에서 중복 실행됨
        // function fnc_minus()
        // {
        //     $args = func_get_args();
        //     $minus = 0;

        //     foreach ($args as $val) {
        //         if($val === $args[0])
        //         {
        //             $minus = $val;
        //         }
        //         else
        //         {
        //             $minus -= $val;
        //         }

        //     }
        
        //     return $minus;
        // }


    // foreach key 값 value 사용해서 구하기
        // function fnc_minus()
        // {
        //     $args = func_get_args();
        //     $minus = 0;

        //     foreach ($args as $key => $val) {
        //         if($key === 0)
        //         {
        //             $minus = $val;
        //         }
        //         else
        //         {
        //             $minus -= $val;
        //         }

        //     }
            
        //     return $minus;
        // }


    // unset 써서 값 구하기
        // function fnc_minus()
        // {
        //     $args = func_get_args();
        //     $minus = $args[0];
        //     unset($args[0]);

        //     foreach ($args as $val) {

        //             $minus -= $val;

        //     }
            
        //     return $minus;
        // }

        //
        // null 초기값 주기
            // is_null() 함수 : 값이 null이면 ture값 나옴
        function fnc_minus()
        {
            $args = func_get_args();
            $minus = null;

            foreach ($args as $val) {
                if( is_null($result_minus) )
                {
                    $minus = $val;
                }
                else
                {
                    $minus -= $val;
                }

            }
            
            return $minus;
        }
        
    function fnc_div()
    {
        $args = func_get_args();
        $div = 0;

        foreach ($args as $val) {
            if($val === $args[0])
            {
                $div = $val;
            }
            else
            {
                $div /= $val;
            }

        }
        
        return $div;
    }

    function fnc_mul()
        {
            $args = func_get_args();
            $mul = $args[0]/$args[0];

            foreach ($args as $val) {
                $mul *= $val;
            }
            return $mul;
        }
    

    echo fnc_div(10, 2, 5)."\n";
    echo fnc_minus(10, 2, 5)."\n";
    echo fnc_mul(10, 2, 5);



?>