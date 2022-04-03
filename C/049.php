<?php
    // ログの行数を示す整数 N 
    $N = trim(fgets(STDIN));
    
    
    // $N回繰り返し
    $num = 0; // 移動回数
    $height = 1; // 現在位置;
    for($i=0;$i<$N;$i++){
        // echo "現在位置:".$height.PHP_EOL;
        $f_i = trim(fgets(STDIN));
        if($f_i > $height){
            $num = $num + ($f_i - $height);
            $height = $f_i;
        }elseif ($f_i < $height) {
            $num = $num + ($height - $f_i);
            $height = $f_i;
        }
    }
    echo $num.PHP_EOL;
?>