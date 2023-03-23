<?php
    print "점심메뉴\n";
    print "탕수육 8,000\n";
    print "짜장면 6,000\n";
    print "짬뽕 6,000\n\n";

    // echo("점심메뉴
    // 탕수육 8,000 
    // 짜장면 6,000 
    // 짬뽕 6,000\n"); 

    // ==> 웹페이지에서는 한문장으로 나옴
    // 개행할때는 \n 넣어서 개행해주기!!

    echo("점심메뉴\n탕수육 8,000 \n짜장면 6,000\n짬뽕 6,000\n\n");

    $tang = "탕수육";
    $zza = "짜장면";
    $zzam = "짬뽕";
    $black = " ";
    $line = "\n";
    $price_8000 = "8,000";
    $price_6000 = "6,000";

    echo "점심메뉴\n";
    echo $tang.$black.$price_8000.$line;
    echo $zza.$black.$price_6000.$line;
    echo $zzam.$black.$price_6000.$line;
?>