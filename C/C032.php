<?php
    // 商品の総数を表す N 
    $N = trim(fgets(STDIN));
    // echo "総数:".$N.PHP_EOL;
    
    
    // 商品番号$v_i, 金額$p_i
    // 商品番号、0 は食料品、1 は書籍、2 は衣類、3 はその他
    // 配列準備$point[商品番号][金額]
    $points = array();
    for($i=0;$i<$N;$i++){
        list($v_i, $p_i) = explode(" ",trim(fgets(STDIN)));
        // echo $v_i. " " . $p_i.PHP_EOL;
        $points[$v_i][] = $p_i;
    }
    // var_dump($points);
    
    // 金額合計配列
    $sum_p = array();
    // それぞれの商品の金額合計を計算
    for($i=0;$i<4;$i++){
        $sum_p[$i] = 0;
        foreach($points[$i] as $point){
            $sum_p[$i] = $sum_p[$i] + (int)$point;
        }
    }
    // echo "金額合計配列".PHP_EOL;
    // var_dump($sum_p);
    
    //ポイント配列 
    $sum_point = 0;
    //ポイント計算
    for($i=0;$i<4;$i++){
        if($i==0){
            $sum_point = $sum_point + floor($sum_p[0]/100)*5;
        }elseif ($i==1) {
            $sum_point = $sum_point + floor($sum_p[1]/100)*3;
        }elseif ($i==2) {
            $sum_point = $sum_point + floor($sum_p[2]/100)*2;
        }elseif ($i==3) {
            $sum_point = $sum_point + floor($sum_p[3]/100);
        }
    }
    echo $sum_point.PHP_EOL;
    
    
?>