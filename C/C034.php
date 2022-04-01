<?php
    // a op b = c
    list($a, $op, $b, $equ, $c) = explode(" ", trim(fgets(STDIN)));
    // echo $a . $op . $b . $equ . $c . PHP_EOL;
    
    if($op == "+"){
        if($c == "x"){
            $x = $a + $b;
        }elseif ($b == "x") {
            $x = $c - $a;
        }elseif($a == "x"){
            $x = $c - $b;
        }
    }else{
        if($c == "x"){
            $x = $a - $b;
        }elseif ($b == "x") {
            $x = $a - $c;
        }elseif($a == "x"){
            $x = $c + $b;
        }
    }
    echo $x.PHP_EOL;
?>