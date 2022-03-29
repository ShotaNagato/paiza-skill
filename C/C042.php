<?php
    // 大会の参加者の総数を表す整数 N
    $N = trim(fgets(STDIN));
    // echo "大会参加人数:".$N."人".PHP_EOL;
    
    
    // 結果を格納する配列
    $results = array();
    
    for($i=0;$i<($N*($N-1))/2;$i++){
        list($win,$lose) = explode(" ",trim(fgets(STDIN)));
        // echo $i+1 ."試合目の結果".PHP_EOL;
        // echo "勝者:".$win. " 敗者:" . $lose. PHP_EOL;
        $results[$win-1][$lose-1] = "W";
        $results[$lose-1][$win-1] = "L";
        // $results[$i][$i] = "-";
        // echo PHP_EOL;
    }
    
    

    
    //出力処理
    for($i=0;$i<$N;$i++){
        for($j=0;$j<$N;$j++){
            if($i == $j){
                $results[$i][$j] = "-";
            }
            if($j == $N-1){
                echo $results[$i][$j];
            }else{
                echo $results[$i][$j]." ";
            }
        }
        echo PHP_EOL;
    }
    
?>