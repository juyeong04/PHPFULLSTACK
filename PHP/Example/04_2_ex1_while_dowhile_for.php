<?php

    // 1. while 문


    // while( 조건 )
    // {
    //     // 반복하고 싶은 처리
    // }
    
    // $i = 1;
    // while( $i < 10 )
    // {
    //     echo "2"." * ".$i." = ".(2 * $i++)."\n";
        
    // }

    // $dan = 2;
    // $num = 1;
    // while( $num < 10 ){
    //     $result = $dan." * ".$num." = ". $dan * $num. "\n";
    //     $num++;
    // }

    // $i = 1;
    // $dan = 2;
    // while($dan < 10 ){
    //     echo $dan."단";
    // }
    // while( $i < 10 )
    // {
    //     echo $dan."단"."\n"."$dan"." * ".$i." = ".(2 * $i)."\n";

    // }

    // 쌤 답!!======
    // while($dan < 10 ){
    //     echo $dan."단"."\n";
    //     $i = 1; //i값 변수값 정해줘야됨!!
    //         while( $i < 10 )
    //         {
    //             echo "$dan"." * ".$i." = ".($dan * $i)."\n";
    //             ++$i; // 다음 연산부터 +1
    //         }
    //         ++$dan;// 다음 연산부터 +1
    // }
    

// 2. do while 문 : 한번 돌고 while에서 조건 체크, 조건 맞으면 반복함 아니면 스탑

// do{
//     반복 할 처리
// }
// while( 조건 );

// $i = 0;
// do{
//     echo $i, "do while";
// }
// while( $i === 1 );


// 3. for 문 
// for ($i=2; $i <= 9; $i++) { 
//     echo $i, "단\n";
    
// }

for ($dan = 2; $dan <= 9; $dan++) { 
    echo "\n".$i."단"."\n";
    for ($num = 1; $num <= 9 ; $num++) {
        echo $dan."*".$num." = ".($dan * $num)."\n";
    }
}
?>