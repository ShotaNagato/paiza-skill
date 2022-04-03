<?php
    // 変換する前の文字列
    $pre_str = trim(fgets(STDIN));
    // echo $pre_str.PHP_EOL;
    
    $pre_str_array = str_split($pre_str);
    
    for($i=0;$i<strlen($pre_str);$i++){
        if($pre_str_array[$i] == "A"){
            $pre_str_array[$i] = "4";
        }elseif($pre_str_array[$i] == "E"){
            $pre_str_array[$i] = "3";
        }elseif($pre_str_array[$i] == "I"){
            $pre_str_array[$i] = "1";
        }elseif($pre_str_array[$i] == "G"){
            $pre_str_array[$i] = "6";
        }elseif($pre_str_array[$i] == "O"){
            $pre_str_array[$i] = "0";
        }elseif($pre_str_array[$i] == "S"){
            $pre_str_array[$i] = "5";
        }elseif($pre_str_array[$i] == "Z"){
            $pre_str_array[$i] = "2";
        }
        echo $pre_str_array[$i];
    }
    echo PHP_EOL;
    
?>