<?php

require __DIR__ . '/part/__connect db.php';

$stmt = $pdo->query("SELECT * FROM `address_book` LIMIT 5"); //使用PDO內建方法獲取DB資料

echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE); 
//用PDO裡面的statement方法'fetchAll'獲取全部資料再轉換成json格式
// echo json_encode($stmt->fetchAll(PDO::FETCH_NUM), JSON_UNESCAPED_UNICODE);  // 索引式陣列
// echo json_encode($stmt->fetchAll(PDO::FETCH_BOTH), JSON_UNESCAPED_UNICODE); // 給兩種: 索引式 + 關聯式
