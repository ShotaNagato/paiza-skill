<?php
    // 嫌いな数字$num
    $num = trim(fgets(STDIN));
    // 部屋の総数
    $rooms = trim(fgets(STDIN));
    
    $flg = 0;
    for($i=0;$i<$rooms;$i++){
        $room_num = trim(fgets(STDIN));
        $n = floor($room_num%100);
        if($room_num%10 != $num && floor($n/10) != $num  && floor($room_num/100) != $num ){
            echo $room_num.PHP_EOL;
            $flg = 1;
        }
    }
    if($flg == 0){
        echo "none";
    }
?>