<?php
require __DIR__ . '/part/__connect db.php';

// TODO: 檢查資料格式

$names = ['版', '本', '龍', '一'];
for ($i = 0; $i < 10; $i++) {
    shuffle($names);    
    $sql = sprintf("INSERT INTO `address_book`(`name`, `email`, `cell`, `DOB`, `address`, `created`) VALUES ('%s','aaa@gmail.com','091234567','1996-05-05','Taipei',NOW())", implode('', array_slice($names, 0, 3)));

    $stmt = $pdo->query($sql);
}
