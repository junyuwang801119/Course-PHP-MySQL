<?php
$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;


// $a = intval($_GET['a']) ?? 1;
// $b = intval($_GET['b']) ?? 1;

// echo $a;

// $a = 10;
// $b = 5;

printf('{"answer":%s}', $a + $b);
