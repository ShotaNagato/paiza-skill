<?php

    // ------  未完成(60点)  -------

    // 自分の得意な言語で
    // Let's チャレンジ！！
    // 1 行目には、ライトを点灯させる命令の個数を表す整数 N が与えられます。
    $num_meirei = fgets(STDIN);
    // 2 行目には、それぞれ赤のカブトムシ、緑のカブトムシ、青のカブトムシがいるマスの番号を表す 
    // 3 つの整数 x_R、x_G、x_B がこの順で半角スペース区切りで与えられます。
    $x = fgets(STDIN);
    $xs = explode(" ", $x);
    $x_R = $xs[0];
    // var_dump($x_R);
    $x_G = $xs[1];
    // var_dump($x_G);
    $x_B = $xs[2];
    // var_dump($x_B);
    $x_B = str_replace(PHP_EOL, "", $x_B);
    // var_dump($x_B);
//     ・続く N 行のうちの i 行目 (1 ≦ i ≦ N) には、i 番目の命令を表す整数 t_i, c_i 
//     がこの順で半角スペース区切りで与えられます。
// 　  ・t_i は "L" または "R" のいずれかで、それぞれ左のライトまたは右のライトを点灯させることを表します。
// 　  ・c_i は "R", "G", "B", "Y", "M", "C", "W" のいずれかで、それぞれライトを赤、緑、青、黄、
// 　  マゼンタ、シアン、白で点灯させることを表します。
    // $flg = 0;
    if(!($x_R == $x_G && $x_G == $x_B && $x_B == $x_R)){
        
    for($i=0;$i<strlen($num_meirei)+1;$i++){
        $y = fgets(STDIN);
        $ys = explode(" ",$y);
        $t_i = $ys[0];
        $c_i = $ys[1];
        // var_dump($c_i);
        $c_i = str_replace(PHP_EOL, "", $c_i);
        // var_dump($c_i);
        // 右の時
        if($t_i == "R"){
            if($c_i == "W"){
                $x_R++;
                $x_G++;
                $x_B++;
            }elseif($c_i == "R"){
                $x_R++;
            }elseif($c_i == "G"){
                $x_G++;
            }elseif($c_i == "B"){
                $x_B++;
            }elseif($c_i == "Y"){
                $x_R++;
                $x_G++;
            }elseif($c_i == "M"){
                $x_R++;
                $x_B++;
            }elseif($c_i == "C"){
                $x_B++;
                $x_G++;
            }
        }else{
            if($c_i == "W"){
                $x_R--;
                $x_G--;
                $x_B--;
            }elseif($c_i == "R"){
                $x_R--;
            }elseif($c_i == "G"){
                $x_G--;
            }elseif($c_i == "B"){
                $x_B--;
            }elseif($c_i == "Y"){
                $x_R--;
                $x_G--;
            }elseif($c_i == "M"){
                $x_R--;
                $x_B--;
            }elseif($c_i == "C"){
                $x_B--;
                $x_G--;
            }
        }
        // echo $x_R." ".$x_G." ".$x_B.PHP_EOL;
        $x_R = (int)$x_R;
        $x_G = (int)$x_G;
        $x_B = (int)$x_B;
        // var_dump($x_R);
        // var_dump($x_G);
        // var_dump($x_B);
        if($x_G === $x_B && $x_B === $x_R && $x_R === $x_G){
            echo $x_R;
            // var_dump($x_R);
            echo PHP_EOL;
            exit();
            // return;
            // $flg = 1;
            // $kekka = $x_B;
        
        }
    }
    // if($flg == 1){
    //     echo $kekka;
    //     echo PHP_EOL;
    // }else{
    // if(!empty($ary)){
    //     echo $ary[0];
    //     echo PHP_EOL;
    // }else{
        echo "no";
        echo PHP_EOL;
    // }
    // }
    }
?>