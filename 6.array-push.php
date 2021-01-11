<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array-push</title>
</head>

<body>
    <div>
        <?php
        // $ar1 = array(1, 2, 3);
        // $ar2 = [4, 5, 6, [7, 8, 9]];
        // $ar4 = $ar2; #拷貝值(不同的記憶體位置), 不是參照
        $ar3 = [
            'name' => 'bill',
            'age' => 23,
            'data' => [5, 6, 7],
        ];
        // $ar4[1] = 100;
        $ar5 = &$ar3; # 參照拷貝
        $ar5['data'][] = 13; # same as array push
        $ar3['data'][0] = 100;

        foreach ($ar5 as $k => $v) {
            if (is_array($v)) {
                printf("%s => %s<br>", $k, implode(',', $v));
            } else {
                printf("%s => %s<br>", $k, $v);
            }
        }
        ?>
    </div>
</body>

</html>
