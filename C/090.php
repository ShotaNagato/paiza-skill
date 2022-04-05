<?php
    // 電話番号$phone_num
    $phone_num = trim(fgets(STDIN));
    // echo "電話番号 : " . $phone_num . PHP_EOL;
    $len = strlen($phone_num);
    
    $phone_num = str_split($phone_num);
    
    
    $count = 0;
    for($i=0;$i<$len;$i++){
        if($phone_num[$i] == 0){
            $count = $count + 24;
        }elseif($phone_num[$i] != "-") {
            $count = $count + $phone_num[$i]*2 + 4;
        }
    }
    
    echo $count.PHP_EOL;
?>