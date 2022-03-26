<?php
    // はじめにチャージされている金額、バスの乗車回数
    list($def_money, $rid_num) = explode(" ",fgets(STDIN));
    // echo "最初の金額:".$def_money.PHP_EOL;
    // echo "乗車回数:".$rid_num.PHP_EOL;
    
    // ポイントの初期化
    $point = 0;
    // 運賃のループ開始
    for($i=0;$i<$rid_num;$i++){
        // $money = fgets(STDIN);
        $money = trim(fgets(STDIN),"\n");
        // echo $i+1 . '回目の料金:' . $money.'円'.PHP_EOL;
        if($money <= $point){
             $point = $point - $money;
        }else{
            $def_money = $def_money - $money;
            $point = $point + $money * 0.1;
        }
        // 残高とポイントを出力
        // echo "残高:". $def_money .PHP_EOL;
        // echo "ポイント:". $point .PHP_EOL;
        echo $def_money . ' ' . $point . PHP_EOL;
    }
?>