<?php
    // 地図のサイズ、通ることのできない降水量を表す整数 N, M 
    list($N,$M) = explode(" ", trim(fgets(STDIN)));
    // echo "サイズ:".$N.PHP_EOL;
    // echo "降水量:".$M.PHP_EOL;
    
    
    // 配列に格納
    $map = array();
    for($i=0;$i<$N;$i++){
        $rains = explode(" ",trim(fgets(STDIN)));
        for($j=0;$j<$N;$j++){
            $map[$j][$i] = $rains[$j];
            // echo $map[$j][$i]." "; // 表示用
        }
        // echo PHP_EOL; // 表示用
    }
    
    // 結果用配列
    $result = array();
    
    // 1の数カウント
    $count = 0;
    
    for($i=0;$i<$N;$i++){
        for($j=0;$j<$N;$j++){
            // echo $map[$i][$j].PHP_EOL;
            if($map[$i][$j] >= $M){
                $result[$i] = 0;
                $count++;
                break;
            }
            $result[$i] = 1;
        }
    }
    $count = $N - $count;
    // echo $count.PHP_EOL;
    
    // 出力
    $zero = 0;
    for($i=0;$i<$N;$i++){
        if($result[$i] == 1){
            $zero++;
            $count--;
            if($count>0){
                echo $i + 1 . " ";
            }else{
                echo $i + 1 . PHP_EOL;
            }
        }
    }
    
    if($zero == 0){
        echo "wait".PHP_EOL;
    }
?>