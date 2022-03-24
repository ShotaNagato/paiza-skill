<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $num = explode(' ',$input_line);
    // 応募者数
    $i_N = $num[0];
    // Aの当選倍数
    $i_X = $num[1];
    // Bの当選倍数
    $i_Y = $num[2];
    // 改行削除
    $i_Y = str_replace(PHP_EOL, '', $i_Y);
    for($i=0;$i<$i_N;$i++){
        $p_num = $i+1;
        if($p_num%$i_X == 0 && $p_num%$i_Y == 0){
            echo "AB\n";
        }elseif($p_num%$i_X == 0){
            echo "A\n";
        }elseif($p_num%$i_Y == 0){
            echo "B\n";
        }else{
            echo "N\n";
        }
    }
?>