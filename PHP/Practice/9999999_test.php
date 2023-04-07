<?php

$arr_card_shape = array("h", "s", "c", "d");
        $arr_card_num = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "A", "K", "Q", "J");
        card_deck($arr_card_shape, $arr_card_num);
        $var_card_deck = card_deck($arr_card_shape, $arr_card_num);


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


        // 2장씩 카드 뽑기
        
        $user = array(); 
        for ($i=0; $i < 2; $i++) { 
            $user[] = $var_card_deck[$cnt];
            $cnt--;
        }
        $dealer = array();
        for ($i=0; $i < 2 ; $i++) { 
            $dealer[] = $var_card_deck[$cnt];
            $cnt--;
        }

        // var_dump($dealer);
        // 카드 점수 값 합쳐줌
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

        // var_dump(player_score($dealer));


//-----------------------------------------
        echo '시작';
while(true) {
	
	print "\n";
	fscanf(STDIN, "%d\n", $input);        
	if($input === 0) {
		break;
	}

    else if($input === 1) // 카드 2장 뽑고 더한 값 
    {
    echo "유저 점수 : ".player_score($user);
    echo "\n";
    echo "딜러 점수 : ".player_score($dealer);
    }
	
    else if($input ===2 ) // 유저 카드 1장 받기
    {
        $user[] = $var_card_deck[$cnt];
        $cnt--;
        echo "유저 점수 : ".player_score($user);

        // 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
        // 6-2. 17 이상일 경우는 받지 않는다.

        
    }


}
echo "끝!\n";




?>