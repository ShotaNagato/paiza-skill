<?php
    // 日数$days
    $days = trim(fgets(STDIN));
    
    $max = 0;
    // 日数分ループ開始
    for($i=0;$i<$days;$i++){
        // s_i は始値、e_i は終値、h_i は高値、l_i は安値
        list($s_i[$i], $e_i[$i], $h_i[$i], $l_i[$i]) = explode(" ", trim(fgets(STDIN)));
        if($h_i[$i] > $max){
            $max = $h_i[$i];
        }
        if($i == 0){
            $min = $l_i[0];
        }
        if($l_i[$i] < $min){
            $min = $l_i[$i];
        }
    }
    echo $s_i[0] . " " . $e_i[$days-1] . " " . $max . " " . $min.PHP_EOL;
 
?>