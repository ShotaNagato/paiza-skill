<?php

// 「スケジューラー問題」

// 入力例
// 31 8　…31日の月、8つの予定
// 1 15　…第１優先の予定：1日からはじまり、15日間の予定
// 2 13　…第２優先の予定：2日からはじまり、13日間の予定


//①入力処理：値取得、テーブル座席の配列準備
$ds_array = explode(" ",fgets(STDIN));
// 月の日数
$day_num = $ds_array[0];
// 予定の数
$sd_num = $ds_array[1];

// echo "月の日数:".$day_num.PHP_EOL;
// echo "予定の数:".$sd_num.PHP_EOL;


// カレンダー配列の要素を全て0
$cur = array();
$cur = array_pad($cur,$day_num,0);
// var_dump($cur);
// 予定のループ開始
$count = 0;
for($i=0;$i<$sd_num;$i++){
    $sd_array = explode(" ",trim(fgets(STDIN)));
    $st_day = $sd_array[0];
    $sd_days = $sd_array[1];
    // echo "予定開始日:".$st_day.PHP_EOL;
    // echo "予定期間:".$sd_days.PHP_EOL;
    $days = $st_day + $sd_days - 1;
    // echo $days.PHP_EOL;
    
    $day_flag = 0;
    // カレンダー配列を埋める処理
    for($j=$st_day;$j<$st_day + $sd_days;$j++){
        if($days > $day_num || $cur[$j-1] != 0){
            $day_flag = 1;
            break;
        }
    }
    if($day_flag == 0){
        $cur = array_pad($cur,$day_num,0);
        for($k=$st_day;$k<$st_day + $sd_days;$k++){
            $cur[$k-1] = 1;
            $count++;
        }
        // echo "回数:".$count.PHP_EOL;
    } 
    // echo $day_flag.PHP_EOL;
}
// var_dump($cur);
echo $count;

?>
