<?php
    // 箱の側面の数を表す N、そろえる向きを表す文字列 t、最初の箱の向きを表す文字列 s 
    list($N, $t, $s) = explode(" ",trim(fgets(STDIN)));
    
    // 文字列$tを一文字ずつ取り出し配列に格納
    $text = str_split($t);
    // echo $text[0];
    
    // 文字列$sを一文字ずつ取り出し配列に格納
    $ta_text = str_split($s);
    // echo $ta_text[0];
    
    $count = 0;
    while($text != $ta_text){
        $temp = $ta_text[0];
        for($i=0;$i<$N;$i++){
            if($i==$N-1){
                $ta_text[$i] = $temp;
                // echo $ta_text[$i];
            }else{
                $ta_text[$i] = $ta_text[$i+1];
                // echo $ta_text[$i];
            }
        }
        $count++;
    }
    
    //表示用
    // for($i=0;$i<$N;$i++){
    //     echo $ta_text[$i];
    // }
    
    echo $count.PHP_EOL;
    // for($i=0;$i<$N,$i++){
    //     if($text != $ta_text){
            
    //     }    
    // }
?>