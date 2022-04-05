<?php
    // 文字列の数 $N
    $N = trim(fgets(STDIN));
    // echo "文字数:".$N.PHP_EOL;
    
    // 対象の重要な文字列 $G 
    $G = trim(fgets(STDIN));
    // echo "対象文字:".$G.PHP_EOL;
    
    $flag = false;
    for($i=0;$i<$N;$i++){
        $s_i = trim(fgets(STDIN));
        
        // $a = strpos($s_i,$G);
        // var_dump($a);
        if(strpos($s_i,$G) !== false){
            echo $s_i.PHP_EOL;
            $flag = true;
        }
    }
    if($flag == false){
        echo "None".PHP_EOL;
    }
?>