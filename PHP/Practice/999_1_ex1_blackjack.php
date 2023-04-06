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



$arr_card_shape = array("h", "s", "c", "d");
$arr_card_num = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "A", "K", "Q", "J");
$cnt = (count($arr_card_shape) * count($arr_card_num)) -1;
$deck = array();
foreach ($arr_card_num as $num_val) {
    foreach ($arr_card_shape as $shape_val) {
        array_push($deck,"$num_val$shape_val");
    }
}
shuffle($deck);


// $user = array();
// $user[] = $deck[$cnt];
// $cnt--;
// $user[] = $deck[$cnt];
// $cnt--;
// $dealer = array();
// $dealer[] = $deck[$cnt];
// $cnt--;
// $dealer[] = $deck[$cnt];

$user = array();
for ($i=0; $i < 2; $i++) { 
    $user[] = $deck[$cnt];
    $cnt--;
}
$dealer = array();
for ($i=0; $i < 2 ; $i++) { 
    $dealer[] = $deck[$cnt];
    $cnt--;
}



$user_sum = 0;
foreach ($user as $val) 
{
    if (strpos($val, "J") !== false || strpos($val, "K") !== false || strpos ($val, "Q"))
    {
        $user_sum += 10;
    }
    elseif (strpos($val, "A") !== false) 
    {
        $user_sum += 11;
    }
    else
    {
        $user_sum += intval(substr($val,0,1));
    }
}

$dealer_sum = 0;
foreach ($dealer as $val) 
{
    if (strpos($val, "J") !== false || strpos($val, "K") !== false || strpos ($val, "Q"))
    {
        $dealer_sum += 10;
    }
    elseif (strpos($val, "A") !== false) 
    {
        $dealer_sum += 11;
    }
    else
    {
        $dealer_sum += intval(substr($val,0,1));
    }
}



if ($user_sum > $dealer_sum) 
{

    echo $user_sum." ".$dealer_sum."유저승리";
}
elseif($user_sum < $dealer_sum)
{
    echo $user_sum." ".$dealer_sum."딜러승리";
}
elseif($user_sum === $dealer_sum)
{
    echo $user_sum." ".$dealer_sum."무승부";
}




//------- 이중배열도 해보기

// foreach ($deck as $key => $val) {
    
// }


// print_r($deck[$cnt]);
// $cnt--;
// print_r($deck[$cnt]);
// $cnt--;


// class card
// {
//     public function ran_card()
//     {
//         $str_k = 11;
//         $str_q = 12;
//         $str_j = 13;
//         $str_a = 14;
//         $arr_card = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);
//         $arr_card_all = array(
//                                 $arr_card
//                                 , $arr_card
//                                 , $arr_card
//                                 , $arr_card
//         );
//         $card_pick_shape = $arr_card_all[mt_rand(0, 3)];
//         $card_pick_num = $card_pick_shape[mt_rand(0,12)];
//         return $card_pick_num; 
//     }
    
    
// }
// $obj_card = new card;
// $result = $obj_card->ran_card();

// var_dump($result);

// for(i=0; $i <= 5; $i++) {
//     $arr[$i] = rand(1,45);
//     for ($p=0; $p < $i; $p++) { 
//         if($arr[$i] == $arr[$p])
//         {
//             $i--;
//         }
//     }
// }

// function card_pick()
// {
//     $arr_card_shape = array("h", "s", "c", "d");
//     $arr_card_num = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "A", "K", "Q", "J");
//     $deck = array();
//     foreach ($arr_card_num as $shape_val) {
//         foreach ($arr_card_shape as $num_val) {
//             $deck[] = array("shape" => $shape_val, "num" => $num_val);
//         }
//     }
//     return $deck;
// }


















while(true) {
	echo '시작';
	print "\n";
	fscanf(STDIN, "%d\n", $input);        
	if($input === 0) {
		break;
	}
	echo $input;
	print "\n";
}
echo "끝!\n";