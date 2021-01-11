<?php
$accounts = [
    'grace' => [
        'pwd' => '1234',
        'name' => '小新',
    ],
    'Toby' => [
        'pwd' => '4567',
        'name' => '小名',
    ],

];



echo json_encode($accounts, JSON_UNESCAPED_UNICODE);

// 將PHP的陣列轉換為json格式資料
