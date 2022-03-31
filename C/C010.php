<?php
    // 工事現場のx座標$x,工事現場のy座標$y,工事現場の騒音の大きさ$noi
    list($x,$y,$noi) = explode(" ", trim(fgets(STDIN)));
    // echo "座標:({$x},{$y})".PHP_EOL;
    // echo "騒音の大きさ:".$noi.PHP_EOL;
    
    // 木陰の数$N
    $N = trim(fgets(STDIN));
    // echo "木陰の数:{$N}箇所".PHP_EOL;
    
    
    // 記録用配列
    $array = array();
    for($i=0;$i<$N;$i++){
        // 木陰$iのx座標,木陰$iのy座標
        list($x_i,$y_i) = explode(" ",trim(fgets(STDIN)));
        // echo $i+1 . "番目の木陰の座標({$x_i},{$y_i})".PHP_EOL;
        $xy_pow = pow($x-$x_i,2) + pow($y-$y_i,2);
        if($xy_pow >= pow($noi,2)){
            echo "silent".PHP_EOL;
        }else{
            echo "noisy".PHP_EOL;
        }
        
    }
    
    
    
?>