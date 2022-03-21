<?php
    /**
     * 2 つの数値 a と b が a, b の順でスペース区切りで与えられるので b, a の順でスペース区切りで出力してください。
     * 出力最終行の末尾に改行を入れ、余計な文字、空行を含んではいけません。
     */
    $stdin = trim(fgets(STDIN));
    $stdin_array = explode(' ',$stdin);
    $i1 = $stdin_array[0];
    $i2 = $stdin_array[1];
    $tmp = $i1;
    $i1 = $i2;
    $i2 = $tmp;
    $i1 = str_replace(PHP_EOL, "", $i1);
    echo $i1 . ' ' . $i2 . PHP_EOL;
    
?>