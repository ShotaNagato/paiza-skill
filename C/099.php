<?php
    // 枚数を表す整数 N および折り紙の 1 辺の長さを表す整数 D
    list($N, $D) = explode(" ", trim(fgets(STDIN)));
    // echo "枚数:".$N.PHP_EOL;
    // echo "長さ:".$D.PHP_EOL;
    
    $sum_len = $D;
    for($i=0;$i<$N-1;$i++){
        $len = trim(fgets(STDIN));
        $sum_len = $sum_len + ($D - $len);
    }
    
    echo $sum_len * $D . PHP_EOL;
?>