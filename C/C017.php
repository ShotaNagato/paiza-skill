<?php
    // 親カードの情報 $p_a, $p_b
    list($p_a, $p_b) = explode(" ", trim(fgets(STDIN)));
    // echo "親カード:" . $p_a . " " . $p_b . PHP_EOL;
    
    
    // 子カードの枚数
    $c_num = trim(fgets(STDIN));
    
    for($i=0;$i<$c_num;$i++){
        list($c_a, $c_b) = explode(" ", trim(fgets(STDIN)));
        // echo $c_a . " " . $c_b .PHP_EOL;
        if($c_a < $p_a || (($c_a == $p_a) && ($c_b > $p_b))){
            echo "High".PHP_EOL;
        }else{
            echo "Low".PHP_EOL;
        }
    }
?>