<?php
    // 円の中心の座標 ($xc, $yc), 半径それぞれ $r_1, $r_2 ($r_1 < $r_2)
    list($xc, $yc, $r_1, $r_2) = explode(" ", trim(fgets(STDIN)));
    // echo "中心座標({$xc},{$yc}), 半径: {$r_1}, {$r_2}".PHP_EOL;
    
    // 人の数
    $num_pep = trim(fgets(STDIN));
    
    for($i=0;$i<$num_pep;$i++){
        // 人のいる座標
        list($x_i, $y_i) = explode(" ", trim(fgets(STDIN)));
        if( pow($r_1,2) <= pow($x_i-$xc,2) + pow($y_i-$yc,2) && pow($x_i-$xc,2) + pow($y_i-$yc,2) <= pow($r_2,2)){
            echo "yes".PHP_EOL;
        }else{
            echo "no".PHP_EOL;
        }
    }
?>