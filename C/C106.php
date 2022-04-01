<?php

    // 80点未完成！！！！

    // 競技者の人数を表す整数 N
    $N = trim(fgets(STDIN));
    // echo "人数:".$N.PHP_EOL;
    
    // それぞれの得点を表すN 個の整数
    $points = explode(" ",trim(fgets(STDIN)));
    // foreach($points as $point){
    //     echo $point . " ";
    // }
    // echo PHP_EOL;
    
    
    // 最高点取得
    $max = $points[0];
    for($i=1;$i<=$N;$i++){
        if($max < $points[$i]){
            $max = $points[$i];
        }
    }
    // echo $max.PHP_EOL;
    
    // 2番目の点取得
    $sec = 0;
    for($i=0;$i<$N;$i++){
        if($max == $points[$i]){
            continue;
        }
        if($points[$i] > $sec){
            $sec = $points[$i];
        }
    }
    // echo $sec.PHP_EOL;
    
    // 3番目の点取得
    $thi = 0;
    for($i=0;$i<$N;$i++){
        if($points[$i] == $max || $points[$i] == $sec){
            continue;
        }
        if($points[$i] > $thi){
            $thi = $points[$i];
        }
    }
    // echo $thi.PHP_EOL;
    
    $medal = array();
    $G_count = 0;
    $S_count = 0;
    for($i=0;$i<$N;$i++){
        if($points[$i] == $max){
            $medal[$i] = 'G';
            $G_count++;
        }elseif($points[$i] == $sec){
            $medal[$i] = 'S';
            $S_count++;
        }
    }
    
    for($i=0;$i<$N;$i++){
        if($medal[$i] == "G"){
            echo "G".PHP_EOL;
        }elseif($medal[$i] == "S"  && $G_count == 1){
            echo "S".PHP_EOL;
        }elseif(($G_count == 1 && $S_count == 1 && $points[$i] == $thi) || ($G_count == 2 && $S_count == 0 && $points[$i] == $thi)){
            echo "B".PHP_EOL;
        }else{
            echo "N".PHP_EOL;
        }
    }
    
    
    
    // ・金メダル: その競技者より高い点数を取った人が一人もいないときに授与される。
    // ・銀メダル: その競技者より高い点数を取った人がちょうど一人のときに授与される。
    // ・銅メダル: その競技者より高い点数を取った人がちょうど二人のときに授与される。
    // 出力 G,S,B,N
?>