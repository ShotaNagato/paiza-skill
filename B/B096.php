<?php
/**
 * B096
 * ・1 行目には、フィールドの行数、列数を表す整数 H, W がこの順でスペース区切りで与えられます。
 *・続く H 行のうちの i 行目 (1 ≦ i ≦ H) には半角記号 "." および "#" からなる長さ W の文字列 s_i が与えられます。s_i の j 番目 (1 ≦ j ≦ W) の文字は、"#" の場合にはそのマスに爆弾を設置していることを、"." の場合は設置していないことを表します。
 *・入力は合計で H + 1 行となり、入力値最終行の末尾に改行が 1 つ入ります。
 */

// フィールドの行数、列数を表す整数H, W
list($H, $W) = explode(" ", fgets(STDIN));
echo "行数 : " . $H.PHP_EOL;
echo "列数 : " . $W.PHP_EOL;


// ------------入力処理---------------
// 値を格納
for($i=0;$i<$H;$i++){
    // 1行入力(文字数は$W)
    $str = trim(fgets(STDIN));
    // 一文字づつ切り取り配列に格納(列配列)
    $sub = str_split($str);
    // 列配列を行配列に格納
    $array[$i] = $sub;
}

echo PHP_EOL;
// 入力内容表示
for($i=0;$i<$H;$i++){
    for($j=0;$j<$W;$j++){
        echo $array[$i][$j];
    }
    echo PHP_EOL;
}

// ------------確認処理---------------
// 値が#である行と列を保存するための配列を準備
// 該当行配列
$H_array = array();
// 該当列配列
$W_array = array();

// 一文字づつ確認、該当する文字(#)があれば行と列をそれぞれの配列に格納
for($i=0;$i<$H;$i++){
    for($j=0;$j<$H;$j++){
        if($array[$i][$j] == "#"){
            $H_array[] = $i;
            $W_array[] = $j;
        }
    }
}
$H_array = array_unique($H_array);
$W_array = array_unique($W_array);
// echo "行配列".PHP_EOL;
// var_dump($H_array);
// echo "列配列".PHP_EOL;
// var_dump($W_array);
foreach($H_array as $H_num){
    echo $H_num."行目の値が#です。".PHP_EOL;
}
echo PHP_EOL;
foreach($W_array as $W_num){
    echo $W_num."列目の値が#です。".PHP_EOL;
}

// -----------変更処理--------------
// #の数を記録する変数を初期化
$count = 0;
// 行ごとに確認
for($i=0;$i<$H;$i++){
    // 現在の行が該当行配列に含まれているか確認
    $H_key = in_array($i,$H_array);
    for($j=0;$j<$W;$j++){
        // 列ごとに確認
        $W_key = in_array($j,$W_array);
        // もし$H_keyがtrue(現在の行が該当行配列に含まれている)ならその時点で全ての列を変更してブレイク
        if($H_key == true){
            for($k=0;$k<$W;$k++){
                $array[$i][$k] = "#";
            }
            // 列の数カウント関数に追加
            $count = $count + $W;
            break;
        // もし$W_keyがtrueなら#を格納
        }
        if($W_key == true){
            $array[$i][$j] = "#";
            $count++;
        }

    }

}

// 入力内容表示
for($i=0;$i<$H;$i++){
    for($j=0;$j<$W;$j++){
        echo $array[$i][$j];
    }
    echo PHP_EOL;
}


// 出力処理
echo $count.PHP_EOL;


?>