<?php
session_start();
unset($_SESSION['user']);

# session_destroy(); // 清掉所有 session 資料

header('Location:22.login.php');
// redirect // 轉向
