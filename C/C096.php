<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    // 人数を入力
    // -------------90点未完成--------------------
    $num_members = fgets(STDIN);
    
    for($i=0;$i<$num_members;$i++){
        $days = fgets(STDIN);
        $days = str_replace(PHP_EOL, '', $days); 
        // var_dump($days);
        $days = explode(' ',$days);
        // 開始日
        $start_day = $days[0];
        // 終了日
        $end_day = $days[1];
        $end_day = str_replace(PHP_EOL, '', $end_day); 
        
        $nums[$i][0] = $start_day;
        $nums[$i][1] = $end_day;
        $nums[$i][0] = (int)$nums[$i][0];
        $nums[$i][1] = (int)$nums[$i][1];
        // echo $nums[$i][0]. ' ' . $nums[$i][1].PHP_EOL;
    }
    // echo PHP_EOL;
    
    for($i=1;$i<$num_members;$i++){
        // echo $nums[$i-1][0]. ' ' . $nums[$i-1][1].PHP_EOL;
        // echo $nums[$i-1][0]. ' ' . $nums[$i-1][1]. PHP_EOL;
        if(($nums[$i][0] > $nums[$i-1][0] && $nums[$i][1] > $nums[$i-1][1] && $nums[$i][1] > $nums[$i-1][0] && $nums[$i][0] > $nums[$i-1][1]) || 
            ($nums[$i][0] < $nums[$i-1][0] && $nums[$i][1] < $nums[$i-1][1] && $nums[$i][1] < $nums[$i-1][0] && $nums[$i][0] < $nums[$i-1][1] )){
            echo 'NG'.PHP_EOL;
            exit();
        }
    }
    echo 'OK'.PHP_EOL;
?>