<?php
/*  Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
    Обязательно использовать оператор return.
*/

    function sumNumber($a,$b) {
        return $a + $b;
    }

    function minusNumber($a,$b) {
        return $a - $b;
    }

    function multiplyNumber($a,$b) {
        return $a * $b;
    }

    function divisionNumber($a,$b) {
        return $a / $b;
    }

    $a = 3;
    $b = 7;

    echo "a = ".$a.", b = ".$b."<br><br>";
    echo "Оператор ' + ':"."<br>".$a." + ".$b." = ".sumNumber($a,$b)."<br>";
    echo "Оператор ' - ':"."<br>".$a." - ".$b." = ".minusNumber($a,$b)."<br>";
    echo "Оператор ' * ':"."<br>".$a." * ".$b." = ".multiplyNumber($a,$b)."<br>";
    echo "Оператор ' / ':"."<br>".$a." / ".$b." = ".divisionNumber($a,$b);
?>