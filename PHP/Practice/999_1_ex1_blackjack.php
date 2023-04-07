<?php
//블랙잭 게임(52개 카드)
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력

//2. 카드 합이 21을 초과하면 패배(유저, 딜러 둘다 초과할 시 유저 패배)
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력

//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산

//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 드로우

//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.

//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한번 사용한 카드는 다시 쓸 수 없음

//--------------------------------------------------------------

// $arr_card_shape = array("h", "s", "c", "d");
// $arr_card_num = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "A", "K", "Q", "J");
// $cnt = (count($arr_card_shape) * count($arr_card_num)) -1;
// $deck = array();
// foreach ($arr_card_num as $num_val) {
//     foreach ($arr_card_shape as $shape_val) {
//         array_push($deck,"$num_val$shape_val");
//     }
// }

$arr_card_shape = array("h", "s", "c", "d");
        $arr_card_num = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "A", "K", "Q", "J");
        card_deck($arr_card_shape, $arr_card_num);
        $var_card_deck = card_deck($arr_card_shape, $arr_card_num);

// -------- 함수) 53장 카드 섞어서 모두 출력-----------

function card_deck( $card_shape, $card_num ) // 카드 52장 섞여서 모두 출력
{
    global $cnt;
    $cnt = (count($card_shape) * count($card_num)) -1;
    $deck = array();
    foreach ($card_num  as $num_val) {
        foreach ($card_shape as $shape_val) {
            array_push($deck,"$num_val$shape_val");
        }
    }
    shuffle($deck); // 랜덤값 생성
    return $deck;
}
// $arr_card_shape = array("h", "s", "c", "d");
// $arr_card_num = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "A", "K", "Q", "J");
// card_deck($arr_card_shape, $arr_card_num);
// $var_card_deck = card_deck($arr_card_shape, $arr_card_num);

// var_dump(card_deck($arr_card_shape, $arr_card_num));


// $user = array();
// $user[] = $deck[$cnt];
// $cnt--;
// $user[] = $deck[$cnt];
// $cnt--;
// $dealer = array();
// $dealer[] = $deck[$cnt];
// $cnt--;
// $dealer[] = $deck[$cnt];

//------ 유저, 딜러 카드 2장씩 뽑기 --------- 
// $user = array();
// for ($i=0; $i < 2; $i++) { 
//     $user[] = $deck[$cnt];
//     $cnt--;
// }
// $dealer = array();
// for ($i=0; $i < 2 ; $i++) { 
//     $dealer[] = $deck[$cnt];
//     $cnt--;
// }

// $user = array(); 
// for ($i=0; $i < 2; $i++) { 
//     $user[] = $var_card_deck[$cnt];
//     $cnt--;
// }
// $dealer = array();
// for ($i=0; $i < 2 ; $i++) { 
//     $dealer[] = $var_card_deck[$cnt];
//     $cnt--;
// }



//------ 유저, 카드 더한 점수 함수 --------------
function player_score($param_player)
{
    $player_sum = 0;
    foreach ($param_player as $val) 
    {
        if (strpos($val, "J") !== false || strpos($val, "K") !== false || strpos ($val, "Q"))
        {
            $player_sum += 10;
        }
        else if (strpos($val, "A") !== false) 
        {
            if ($player_sum +11 > 21) {
                $player_sum +=1;
            }
            $player_sum += 11;
        }
        else
        {
            $player_sum += intval(substr($val,0,-1));
        }
    }
    return $player_sum;
}


//---- 딜러 카드 더한 값 함수 ==> user 함수랑 같은 내용이어서 하나로 합쳐줌
// function dealer_score($val)
// {
//     $dealer_sum = 0;
//     foreach ($dealer as $val) 
//     {
//         if (strpos($val, "J") !== false || strpos($val, "K") !== false || strpos ($val, "Q"))
//         {
//             $dealer_sum += 10;
//         }
//         elseif (strpos($val, "A") !== false) 
//         {
//             $dealer_sum += 11;
//         }
//         else
//         {
//             $dealer_sum += intval(substr($val,0,1));
//         }
//     }
//     return $dealer_sum;
// }

//------유저, 딜러 함수 사용해서 카드 점수 2개 더하기 ---------

// $user_sum = 0;
// $user_sum += player_score($user);

// $dealer_sum = 0;
// $dealer_sum += player_score($dealer);


// $dealer_sum = 0;
// foreach ($dealer as $val)
// {
//     $dealer_sum += player_score($val);
// }


//------- 유저, 딜러 카드 값 비교 -----------
// if ($user_sum > $dealer_sum) 
// {
//     echo $user_sum." ".$dealer_sum."유저승리";
// }
// else if($user_sum < $dealer_sum)
// {
//     echo $user_sum." ".$dealer_sum."딜러승리";
// }
// else if($user_sum === $dealer_sum)
// {
//     echo $user_sum." ".$dealer_sum."무승부";
// }

$user = array(); // 유저 카드 2개
        for ($i=0; $i < 2; $i++) { 
            $user[] = $var_card_deck[$cnt];
            $cnt--;
        }
        $dealer = array(); // 딜러 카드
        for ($i=0; $i < 2 ; $i++) { 
            $dealer[] = $var_card_deck[$cnt];
            $cnt--;
        }
    
        

        $user_sum = 0;
        foreach ($user as $val) 
        {
            $user_sum += player_score($val);
        }
        
        $dealer_sum = 0;
        foreach ($dealer as $val) {
            $dealer_sum += player_score($val);
        }

        echo "유저 : ".$user_sum;
        echo "\n";
        echo "딜러 : ".$dealer_sum;



// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}

//     else if($input === 1) // 카드 2장 뽑고 더한 값 
//     {
    

        
        
//     }

// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";

?>