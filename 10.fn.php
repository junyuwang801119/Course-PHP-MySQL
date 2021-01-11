<?php
$a = 10;
# PHP匿名函式才可以用use
$f = function () use ($a) {
    echo $a;
};

//一般函式用法, 若沒給參數, 變數前面要加Global
function aa($a)
{
    echo $a;
}

aa($a);
