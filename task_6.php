<?php
/*  С помощью рекурсии организовать функцию возведения числа в степень.
    Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

    function power($val, $pow) {
        if ($pow === 1) return $val;

        return $val * power($val,$pow - 1);
    }

    $a = 2;
    $n = 5;

    echo $a." ^ ".$n." = ".power($a,$n);
?>