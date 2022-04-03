<?php
    // m(仕入れ),p(1回目の販売率),q(2回目の販売率)
    list($m, $p, $q) = explode(" ", trim(fgets(STDIN)));
    // echo "仕入れ:".$m."kg".PHP_EOL;
    // echo "1回目:".$p."%".PHP_EOL;
    // echo "2回目:".$q."%".PHP_EOL;
    
    $amount = $m * (100-$p) * (100-$q) * 0.01 * 0.01;
    echo $amount;
?>