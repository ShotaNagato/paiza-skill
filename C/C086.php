<?php
    // ハンドルネームの生成
    // 母音を取り除く
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $target = array('a','i','u','e','o','A','I','U','E','O');
    echo str_replace($target,'',$input_line);
?>