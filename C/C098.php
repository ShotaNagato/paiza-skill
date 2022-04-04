<?php
    // 人数を表す整数 $num_member
    $num_member = trim(fgets(STDIN));
    // echo "人数:" . $num_member . "人".PHP_EOL;
    
    // ボールの個数を格納する配列
    $array_ball = array();
    
    // 人数分ループ
    for($i=0;$i<$num_member;$i++){
        $num_ball = trim(fgets(STDIN));
        $array_ball[$i] = $num_ball;
    }
    
    // 情報の数
    $num_info = trim(fgets(STDIN));
    
    // 情報分ループ
    for($i=0;$i<$num_info;$i++){
        // 番号,　相手の番号,　ボール個数
        list($self, $to, $to_ball) = explode(" ", trim(fgets(STDIN)));
        
        // echo $i+1 . "回目".PHP_EOL;
        // for($j=0;$j<$num_member;$j++){
        //     echo $array_ball[$j] . PHP_EOL;
        // }
        // echo PHP_EOL;
        
        // ボールの個数編集処理
        if($array_ball[$self-1] < $to_ball){
            $array_ball[$to-1] = $array_ball[$to-1] + $array_ball[$self-1];
            $array_ball[$self-1] = 0;
        }else{
            $array_ball[$self-1] = $array_ball[$self-1] - $to_ball;
            $array_ball[$to-1] = $array_ball[$to-1] + $to_ball;
        }
    }
    
    // 出力
    for($i=0;$i<$num_member;$i++){
        echo $array_ball[$i] . PHP_EOL;
    }
?>