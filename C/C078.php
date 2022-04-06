<?php
    // 株を売買する日数を表す整数 $N、株の売買条件を表す整数 $c_1, $c_2
    list($N, $c_1, $c_2) = explode(" ", trim(fgets(STDIN)));

    $pr = 0;
    $st_num = 0;
    // 日数分繰り返し
    for($i=0;$i<$N;$i++){
        // 株価を表す整数$p_i;
        $p_i = trim(fgets(STDIN));
        // echo "株価:".$p_i.PHP_EOL;
        if($p_i <= $c_1 && $i != $N-1){
            $pr = $pr - $p_i;
            $st_num++;
        }elseif ($p_i >= $c_2 || $i == $N-1) {
            $pr = $pr + $p_i*$st_num;
            $st_num = 0;
        }
        // echo "持株:".$st_num.PHP_EOL;
        // echo "利益:".$pr.PHP_EOL;
        // echo "---------".PHP_EOL;
    }
    echo $pr.PHP_EOL;
?>