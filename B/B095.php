<?php
    // 歌う人数を表す整数 N と課題曲の長さを表す整数 M 
    list($N,$M) = explode(" ",fgets(STDIN));
    // echo "人数:".$N.PHP_EOL;
    // echo "曲の長さ:".$M.PHP_EOL;
    
    // i 番目の小節の正しい音程を表す整数 a_i
    // i 番目の小節の音程を表す整数 h_{i, j}
    // 正しい音程を表す配列$a_i
    // echo "正しい音程".PHP_EOL;
    $a_i = array();
    for($i=0;$i<$M;$i++){
        $a_i[$i] = trim(fgets(STDIN));
        // echo $a_i[$i].PHP_EOL;
    }
    
    // 結果を表す配列$h_ij
    $h_ij = array();
    for($i=0;$i<$N;$i++){
        // echo $i+1 . "番目の人の結果".PHP_EOL;
        for($j=0;$j<$M;$j++){
            $h_ij[$i][$j] = trim(fgets(STDIN));
            // echo $h_ij[$i][$j].PHP_EOL;
        }
    }
    
    
    // ・誤差 5 Hz 以内なら減点しない
    // ・上記に当てはまらず、誤差 10 Hz 以内なら 1 点減点
    // ・上記に当てはまらず、誤差 20 Hz 以内なら 2 点減点
    // ・上記に当てはまらず、誤差 30 Hz 以内なら 3 点減点
    // ・上記に当てはまらない場合、5 点減点
    
    // 点数配列(初期値100)
    $point = array();
    for($i=0;$i<$N;$i++){
        $point[$i] = 100;
        // echo $i+1 . "番目の人の点数".PHP_EOL;
        for($j=0;$j<$M;$j++){
            if(abs($a_i[$j] - $h_ij[$i][$j]) <= 5){
                $point = $point;
            }elseif(abs($a_i[$j] - $h_ij[$i][$j]) <= 10){
                $point[$i] = $point[$i] - 1;
            }elseif(abs($a_i[$j] - $h_ij[$i][$j]) <= 20){
                $point[$i] = $point[$i] - 2;
            }elseif(abs($a_i[$j] - $h_ij[$i][$j]) <= 30){
                $point[$i] = $point[$i] - 3;
            }else{
                $point[$i] = $point[$i] - 5;
            }
            if($point[$i] < 0){
                $point[$i] = 0;
            }
        }
        // echo $point[$i]. "点". PHP_EOL;
    }
    
    // 出力(N 人のうち、最高得点)
    // $max=0;
    // for($i=0;$i<$N;$i++){
    //     if($point[$i] < $point[$i+1]){
    //         $max = $i+1;
    //     }
    // }
    // echo $point[$max].PHP_EOL;
    
    echo max($point).PHP_EOL;
    
?>