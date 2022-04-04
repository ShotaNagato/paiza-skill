<?php

    $month = array();
    
    // A のライブ日数を表す整数 M
    $A_days = trim(fgets(STDIN));
    // echo "Aのライブ日数：".$A_days.PHP_EOL;
    
    $A_array = array();
    // 日数分ループ開始
    for($i=0;$i<$A_days;$i++){
        $A_day = trim(fgets(STDIN));
        // echo $i+1 . "回目:" . $A_day . "日" . PHP_EOL;
        $month[$A_day] = "A";
    }
    
    //表示用
    // for($i=1;$i<=31;$i++){
    //     echo $i . "日目: " . $month[$i] .PHP_EOL;
    // }
    
    // B のライブ日数を表す整数 N
    $B_days = trim(fgets(STDIN));
    // echo "Bのライブ日数：".$B_days.PHP_EOL;
    
    $B_array = array();
    $flg = 1;
    // 日数分ループ開始
    for($i=0;$i<$B_days;$i++){
        $B_day = trim(fgets(STDIN));
        // echo $i+1 . "回目:" . $B_day . "日" . PHP_EOL;
        if($month[$B_day] == "A" && $flg%2 == 1){
            $flg++;
        }elseif($month[$B_day] == "A" && $flg%2 == 0){
            $month[$B_day] = "B";
            $flg++;
        }else{
            $month[$B_day] = "B";
        }
    }
    
    //表示用
    for($i=1;$i<=31;$i++){
        if($month[$i] == NULL){
            echo "x".PHP_EOL;
        }else{
            echo $month[$i].PHP_EOL;
        }
    }
?>