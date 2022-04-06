<?php
    // 箱の数$n, ボールの半径$r
    list($n, $r) = explode(" ", trim(fgets(STDIN)));
    
    // 箱の数繰り返し
    for($i=0;$i<$n;$i++){
        // 高さ$h、幅$w、奥行き$l
        list($h, $w, $d) = explode(" ", trim(fgets(STDIN)));
        
        if($r*2<=$h && $r*2<=$w && $r*2<=$d){
            echo $i+1 . PHP_EOL;
        }
    }
?>