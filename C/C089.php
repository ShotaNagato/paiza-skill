<?php
    // 高さ、幅を表す整数 H, W
    list($H,$W) = explode(" ",fgets(STDIN));
    // echo "高さ:".$H.PHP_EOL;
    // echo "幅:".$W.PHP_EOL;
    
    //  "o" および "x" からなる長さ W の文字列 s_i 
    $s_i = array();
    for($i=0;$i<$H;$i++){
        $s_i[$i] = str_split(trim(fgets(STDIN)));
    }
    
    $point_array = array();
    // 半角区切りの整数
    for($i=0;$i<$H;$i++){
        $points = explode(" ",trim(fgets(STDIN)));
        for($j=0;$j<$W;$j++){
            $point_array[$i][$j] = $points[$j];
        }
    }

    
    // 表示
    // for($i=0;$i<$H;$i++){
    //     for($j=0;$j<$W;$j++){
    //         echo $s_i[$i][$j];
    //     }
    //     echo PHP_EOL;
    // }
    // for($i=0;$i<$H;$i++){
    //     for($j=0;$j<$W;$j++){
    //         echo $point_array[$i][$j] . " ";
    //     }
    //     echo PHP_EOL;
    // }
    
    
    // 点数集計
    $point_sum = 0;
    for($i=0;$i<$H;$i++){
        for($j=0;$j<$W;$j++){
            if($s_i[$i][$j] == "o") {
                $point_sum = $point_sum + $point_array[$i][$j];
            }  
        }
    }
    
    // 点数出力
    echo $point_sum.PHP_EOL;
?>