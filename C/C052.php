<?php
    // 画面の縦方向の解像度 H、 横方向の解像度 W 
    list($h,$w) = explode(" ",fgets(STDIN));
    // echo "高さ：".$h.PHP_EOL;
    // echo "幅：".$w.PHP_EOL;
    
    // y 軸方向にスクロールする距離 dy、 x 軸方向にスクロールする距離 dx
    list($dy,$dx) = explode(" ",fgets(STDIN));
    // 絶対値に変換
    $dy = abs($dy);
    $dx = abs($dx);
    // echo "y軸方向：".$dy.PHP_EOL;
    // echo "X軸方向：".$dx.PHP_EOL;
    
    $dxy = ($dx * $h) + ($dy * $w) - ($dx * $dy);
    echo $dxy;
?>