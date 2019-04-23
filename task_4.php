<?php
/*  Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
    где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
    В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
    и вернуть полученное значение (использовать switch).
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

    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case '+':
                return sumNumber($arg1,$arg2);
                break;
            case '-':
                return minusNumber($arg1,$arg2);
                break;
            case '*':
                return multiplyNumber($arg1,$arg2);
                break;
            case '/':
                return divisionNumber($arg1,$arg2);
                break;
            default:
                $GLOBALS['flag'] = false;
        }
    }

    $a = 3;
    $b = 7;
    
    $oper = "+";
    $flag = true;

    mathOperation($a, $b, $oper);

    if ($flag) {
        echo "Над числами ".$a." и ".$b." выбрана операция <b>' ".$oper." '</b><br>".$a." ".$oper." ".$b." = ".mathOperation($a, $b, $oper);
    } else {
        echo "Операция <b>' ".$oper." '</b> не верная!";
    }
?>