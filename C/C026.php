<?php
    // --------------- 未完成!!!!!! ----------------


    // 人参のデータの数、目安となる糖分、許容誤差
    list($num, $sug, $err) = explode(" ",trim(fgets(STDIN)));
    // echo "数：".$num.PHP_EOL;
    // echo "目安糖分：".$sug.PHP_EOL;
    // echo "許容誤差：".$err.PHP_EOL;
    
    
    // 記録用配列
    $array = array();
    // データの数だけループ開始
    for($i=0;$i<$num;$i++){
        // 人参の質量、糖分
        list($m_i,$s_i) = explode(" ",trim(fgets(STDIN)));
        $array[$i][0] = $m_i; // 質量
        $array[$i][1] = $s_i; // 糖分
        if($s_i > $sug+$err || $s_i < $sug-$err){
            $array[$i][2] = 0;
        }else{
            $array[$i][2] = 1;
        }
    }
    
    echo "許容糖質範囲:".$sug-$err ."~". $sug+$err.PHP_EOL; 
    for($i=0;$i<$num;$i++){
        echo "質量:".$array[$i][0].PHP_EOL;
        echo "糖質:".$array[$i][1].PHP_EOL;
        if($array[$i][2] == 0){
            echo "糖質が許容誤差を超えています".PHP_EOL;
        }else{
            echo "糖質は許容誤差内です".PHP_EOL;
        }
    }
    
    $max_id = 0;
    $max_m = 0;
    for($i=0;$i<$num;$i++){
        if($array[$i][2] == 0){
            // echo $i + 1 . "周目の最大番号" . $max_id.PHP_EOL;
            // echo $i + 1 . "周目の最大重量" . $max_m.PHP_EOL;
            continue;
        }
        if($array[$i][0] > $max_m){
            $max_m = $array[$i][0];
            $max_id = $i;
            // echo $i + 1 . "周目の最大番号" . $max_id.PHP_EOL;
            // echo $i + 1 . "周目の最大重量" . $max_m.PHP_EOL;
        }elseif($max_m == $array[$i][0]){
            // $max_id = $max_id;
            continue;
            // echo $i + 1 . "周目の最大番号" . $max_id.PHP_EOL;
            // echo $i + 1 . "周目の最大重量" . $max_m.PHP_EOL;
        }
    
    }
    if($max_id == 0){
        echo "not found".PHP_EOL;
    }else{
        echo $max_id+1 . PHP_EOL;   
    }
?>

