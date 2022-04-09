<?php
    // 各レシートの数$num_re
    $num_re = trim(fgets(STDIN));
    
    $point = 0; // ポイント初期化
    for($i=0;$i<$num_re;$i++){
        // 日付$day、購入金額$price;
        list($day, $price) = explode(" ", trim(fgets(STDIN)));
        if($day%10 == 3 || floor($day/10) == 3){
            $point = $point + floor($price * 0.03);
        }elseif($day%10 == 5){
            $point = $point + floor($price * 0.05);
        }else{
            $point = $point + floor($price * 0.01);
        }
    }
    echo $point.PHP_EOL;
?>