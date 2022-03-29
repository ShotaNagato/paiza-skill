<?php
    // カードの枚数を表す整数 N、1 セットあたりの枚数を表す整数 M、シャッフルの回数を表す整数 K
    list($N,$M,$K) = explode(" ", fgets(STDIN));
    echo "カード枚数：".$N.PHP_EOL;
    echo "1セット枚数：".$M.PHP_EOL;
    echo "シャッフル回数：".$K.PHP_EOL;
    
    // 1から順に数値を格納
    echo "初期状態".PHP_EOL;
    $num_array = array(); // 数値を入れる配列定義
    for($i=0;$i<$N;$i++){
        $num_array[$i] = $i+1;
        echo $num_array[$i]." ";
    }
    echo PHP_EOL;
    echo PHP_EOL;
    
    
    echo $M."枚ごとのセットに分割".PHP_EOL;
    // $M枚ごとのセットに分割(余りがある場合一番したのセットはその枚数)
    $set_array[] = array(); // セットの配列を定義
    for($i=0;$i<ceil($N/$M);$i++){
        for($j=$i*$M;$j<($i*$M)+$M;$j++){
            if (isset($num_array[$j])){
                $set_array[$i][$j-$i*$M] = $num_array[$j];
            }
            // echo $num_array[$j]." ";
        }
        // echo PHP_EOL;
    }
    
    // ---------------表示用----------------
    echo "セット後の状態".PHP_EOL;
    for($i=0;$i<ceil($N/$M);$i++){
        echo $i+1 . "行目:";
        for($j=0;$j<$M;$j++){
            if($set_array[$i][$j] != ""){
                echo $set_array[$i][$j]." ";
            }else{
                echo "空";
            }
        }
        echo PHP_EOL;
    }
    echo PHP_EOL;
    
 
  
    
    // $K回シャッフル(上下入れ替え)
    for($n=0;$n<$K;$n++){
        
        echo "入れ替え後の配列".PHP_EOL;
        
        $min = 0;
        $max = ceil($N/$M)-1;
        for($j=0;$j<(floor($N/$M))/2;$j++){
            $temp = $set_array[$min];
            $set_array[$min] = $set_array[$max];
            $set_array[$max] = $temp;
            $min++;
            $max--;
        }
        
        // ---------------表示用----------------
        for($i=0;$i<ceil($N/$M);$i++){
            echo $i+1 . "行目:";
            for($j=0;$j<$M;$j++){
                if($set_array[$i][$j] != ""){
                    echo $set_array[$i][$j]." ";
                }else{
                    echo "空";
                }
            }
            echo PHP_EOL;
        }
        echo PHP_EOL;
    
        
        // set_arrayがnullの部分もそのまま
        // -------------関数でもっと簡単に--------------
        // 配列修正(余った数は一番したに)
        $ed_num_array = array();
        for($i=0;$i<ceil($N/$M);$i++){
            for($j=0;$j<$M;$j++){
                if($set_array[$i][$j] != NULL){
                    $ed_num_array[$j+$i*$M] = $set_array[$i][$j];
                }
            }
        }
        array_diff($ed_num_array, array(NULL));
        $ed_num_array = array_values($ed_num_array);
        
        echo "初期状態".PHP_EOL;
        for($i=0;$i<$N;$i++){
            echo $ed_num_array[$i]." ";
        }
        echo PHP_EOL;
        echo PHP_EOL;
        
        
        // for($i=0;$i<$N;$i++){
        //     echo $ed_num_array[$i];
        // }
        // echo PHP_EOL;
        
        
        // $M枚ごとのセットに分割(余りがある場合一番したのセットはその枚数)
        echo "繰り返し中のj値".PHP_EOL;
        for($i=0;$i<ceil($N/$M);$i++){
            for($j=$i*$M;$j<($i*$M)+$M;$j++){
                echo $j." ";
                if($j > $N-1){
                    $set_array[$i][$j-$i*$M] = "";
                }
                if (isset($ed_num_array[$j])){
                    $set_array[$i][$j-$i*$M] = $ed_num_array[$j];
                }
                // echo $num_array[$j]." ";
            }
            // echo PHP_EOL;
        }
        // -------------関数でもっと簡単に--------------
        echo PHP_EOL;
        
        
        // ---------------表示用----------------
        echo "修正(空欄をずらす)後の配列".PHP_EOL;
        for($i=0;$i<ceil($N/$M);$i++){
            echo $i+1 . "行目:";
            for($j=0;$j<$M;$j++){
                if($set_array[$i][$j] != ""){
                    echo $set_array[$i][$j]." ";
                }else{
                    echo "空";
                }
            }
            echo PHP_EOL;
        }
        echo PHP_EOL;
        
        
    }
    
    
   
    
    

    // var_dump($set_array);
    
    for($i=0;$i<ceil($N/$M);$i++){
        for($j=0;$j<$M;$j++){
            echo $set_array[$i][$j].PHP_EOL;
        }
    }
    
    
?>