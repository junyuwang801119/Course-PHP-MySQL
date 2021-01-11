<div>
    <?php

    date_default_timezone_set('Asia/Taipei');

    $now = date("Y-m-d H:i:s");
    $after30 = date("Y-m-d", time() + 30 * 24 * 60 * 60); //time() 更改時間

    $date1 = date("Y-m-d H:i:s", strtotime('2020-08-24')); //strtotime 將字串轉為時間戳記格式

    echo "now: $now<br>";
    echo "after30: $after30<br>";
    echo "date1: $date1<br>";
    ?>
</div>
